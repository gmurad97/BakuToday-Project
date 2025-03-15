<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Binance_api $binance_api
 * @property HttpClient $httpclient
 */
class AuthController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("httpclient");
        /* $client = new HttpClient(); */


        /* $args = ["",""];

        $args_1 = ["key"=>"value","key1"=>"value1"];

        print_r(is_array($args_1) ? "True": "False"); */
        /* print_r($this->httpclient->get("http://google.com")); */


        /*         $html = file_get_contents("https://www.youtube.com/watch?v=v98xZn3KGQQ");
                
                // Поиск всего содержимого JSON
                preg_match('/ytInitialPlayerResponse\s*=\s*({.+?})\s*;/s', $html, $matches);
                
                if (!empty($matches)) {
                    $jsonData = $matches[1];  // Берем весь JSON, а не отдельный кусок
                    $json = json_decode($jsonData, true);  // Декодируем весь JSON сразу
                    
                    if (isset($json['streamingData']['adaptiveFormats'])) {
                        $formats = $json['streamingData']['adaptiveFormats'];
                        
                        foreach ($formats as $format) {
                            if (isset($format['signatureCipher'])) {
                                $cipher = $format['signatureCipher'];
                                
                                // Разберем структуру сигнатуры
                                parse_str($cipher, $sigParams);
                
                                if (isset($sigParams['url'])) {
                                    $videoUrl = urldecode($sigParams['url']);
                                    echo "Видео ссылка: <a href='{$videoUrl}' target='_blank'>{$videoUrl}</a>\n";
                                } else {
                                    echo "Не удалось извлечь ссылку из этого формата.\n";
                                }
                            }
                        }
                    } else {
                        echo "Не найдено ни одного формата для видео.";
                    }
                } else {
                    echo "Не удалось найти ytInitialPlayerResponse.";
                }
                 */






        /* die();
        $this->load->model("admin/AdminsModel"); */
        $this->load->library('recaptcha');
        // $this->session->sess_destroy();



        /*         print_r("<pre>");
                print_r($this->session->all_userdata());
                die(); */
    }

    public function index()
    {
        
        // $this->load->library("httpclient");
        // $test = new HttpClient();

        // print_r($test->format_headers($test->get_headers()));

        // // print_r($test->get("https://jsonplaceholder.typicode.com/posts/1"));
        // // print_r($lol->get("https://jsonplaceholder.typicode.com/posts/1",null,"application/json")["response"]);
        // // print_r("debug");
        $context["page_title"] = $this->lang->line("login");
        $this->load->view("admin/auth/login", $context);
    }

    public function verify()
    {



        //WORKED !!!
        // check reCAPTCHA
        $recaptcha_response = $this->input->post('g-recaptcha-response');
        $recaptcha_result = $this->recaptcha->verify($recaptcha_response);
        if ($recaptcha_result["success"]) {
            // $this->session->set_flashdata('error', 'reCAPTCHA не пройдена. Попробуйте снова.');
            // redirect('auth/login');
            print_r($recaptcha_response);
            die();
        }
        print_r($recaptcha_result);
        die();


        $admin_username = trim($this->input->post("admin_username"), true);
        $admin_password = $this->input->post("admin_password", true);

        if (empty($admin_username) || empty($admin_password)) {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);
            redirect(base_url("admin/login"));
        }

        $admin = $this->AdminsModel->find(["username" => $admin_username]) ??
            $this->AdminsModel->find(["email" => $admin_username]);

        if ($admin && hash("sha256", $admin_password) === $admin["password"]) {
            if (!$admin["status"]) {
                $this->alert_flashdata("crud_alert", "info", [
                    "title" => $this->lang->line("account_disabled_alert_title"),
                    "description" => $this->lang->line("account_disabled_alert_description")
                ]);
                redirect(base_url('admin/login'));
            }

            $this->session->set_userdata("identity", [
                "id" => $admin["id"],
                "first_name" => $admin["first_name"],
                "last_name" => $admin["last_name"],
                "email" => $admin["email"],
                "username" => $admin["username"],
                "role" => $admin["role"],
                "img" => $admin["img"],
                "logged_in" => TRUE
            ]);
            redirect(base_url('admin/dashboard'));
        } else {
            $this->alert_flashdata("crud_alert", "danger", [
                "title" => $this->lang->line("login_failed_alert_title"),
                "description" => $this->lang->line("login_failed_alert_description")
            ]);
            redirect(base_url("admin/login"));
        }
    }

    public function logout()
    {
        if ($this->session->userdata("admin_credentials")) {
            $this->session->unset_userdata("admin_credentials");

            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("logout_alert_title"),
                "description" => $this->lang->line("logout_alert_description")
            ]);
        }
        redirect(base_url("admin/login"));
    }
}