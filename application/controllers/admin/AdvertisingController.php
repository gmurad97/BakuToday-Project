<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property AdvertisingModel $AdvertisingModel
 */
class AdvertisingController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/AdvertisingModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("all_advertising");
        $context["advertising_collection"] = $this->AdvertisingModel->all();
        $this->load->view("admin/advertising/list", $context);
    }

    public function show($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);

        if (!empty($context["advertising"])) {
            $advertising_name = $context["advertising"]["title_{$this->current_admin_language}"];
            $context["page_title"] = $this->lang->line("view") . " • $advertising_name";
            $this->load->view("admin/advertising/detail", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/advertising"));
        }
    }

    public function create()
    {
        $context["page_title"] = $this->lang->load("create_advertising");
        $this->load->view("admin/advertising/create", $context);
    }

    public function store()
    {
        $title_az = substr($this->input->post("title_az", true), 0, 255);
        $title_en = substr($this->input->post("title_en", true), 0, 255);
        $title_ru = substr($this->input->post("title_ru", true), 0, 255);
        $location = substr($this->input->post("location", true), 0, 255);
        $status = $this->input->post("status", true);

        if (!empty($title_az) && !empty($title_en) && !empty($title_ru)) {
            $upload_path = "./public/uploads/advertising/";
            $upload_result = $this->upload_image("img", $upload_path);

            if ($upload_result["success"]) {
                $uploaded_img_data = $upload_result["data"];
                $image_name = $uploaded_img_data["file_name"];

                $data = [
                    "title_az" => $title_az,
                    "title_en" => $title_en,
                    "title_ru" => $title_ru,
                    "img" => $image_name,
                    "location" => $location,
                    "status" => $status === "on"
                ];

                $this->AdvertisingModel->create($data);

                $this->alert_flashdata("advertising_alert", "success", [
                    "title" => $this->lang->line("success_added_alert_title"),
                    "description" => $this->lang->line("success_added_alert_description")
                ]);

                redirect(base_url("admin/advertising"));

            } else {
                $this->alert_flashdata("crud_alert", "warning", [
                    "title" => $this->lang->line("invalid_img_format_alert_title"),
                    "description" => $this->lang->line("invalid_img_format_alert_description")
                ]);

                redirect(base_url("admin/advertising/create"));
            }
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);

            redirect(base_url("admin/advertising/create"));
        }
    }

    public function edit($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);
        if (!empty($context["advertising"])) {
            $advertising_title = $context["advertising"]["title_{$this->current_admin_language}"];
            $context["page_title"] = $this->lang->line("edit_advertising") . " • $advertising_title";
            $this->load->view("admin/advertising/edit", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);
            redirect(base_url("admin/advertising"));
        }
    }

    public function update($id)
    {
        
        $advertising = $this->AdvertisingModel->find($id);




        if (!$advertising) {
            // Если запись не найдена, перенаправляем с сообщением об ошибке
            $this->alert_flashdata("advertising_alert", "danger", [
                "title" => "Error",
                "description" => "Advertising not found."
            ]);
            redirect(base_url("admin/advertising"));
        }

        $advertising_title_az = substr($this->input->post("advertising_title_az", true), 0, 255);
        $advertising_title_en = substr($this->input->post("advertising_title_en", true), 0, 255);
        $advertising_title_ru = substr($this->input->post("advertising_title_ru", true), 0, 255);

        $advertising_status = $this->input->post("advertising_status", true);

        if (!empty($advertising_title_az) && !empty($advertising_title_en) && !empty($advertising_title_ru)) {
            $upload_path = "./public/uploads/advertising/";

            $image_name = $advertising["img"]; // Сохраняем текущее изображение

            // Проверяем, загружен ли новый файл
            if (!empty($_FILES["advertising_img"]["name"])) {
                $result = $this->upload_and_resize_image("advertising_img", $upload_path);

                if ($result["success"]) {
                    // Успешная загрузка нового изображения
                    $uploaded_img_data = $result["data"];
                    $image_name = $uploaded_img_data["file_name"];

                    // Удаляем старое изображение, если оно существует
                    $old_image_path = $upload_path . $advertising["img"];
                    if (file_exists($old_image_path)) {
                        unlink($old_image_path);
                    }
                } else {
                    // Ошибка загрузки нового изображения
                    $this->alert_flashdata("advertising_alert", "danger", [
                        "title" => "Image upload error",
                        "description" => $result["error"]
                    ]);
                    redirect(base_url("admin/advertising/edit/" . $id));
                }
            }

            // Обновляем данные
            $data = [
                "title_az" => $advertising_title_az,
                "title_en" => $advertising_title_en,
                "title_ru" => $advertising_title_ru,
                "img" => $image_name,
                "status" => $advertising_status === "on" // Преобразуем статус в boolean
            ];

            $this->AdvertisingModel->update($id, $data);

            // Успешное уведомление
            $this->alert_flashdata("advertising_alert", "success", [
                "title" => "Success",
                "description" => "Advertising successfully updated."
            ]);

            redirect(base_url("admin/advertising"));
        } else {
            // Уведомление о незаполненных полях
            $this->alert_flashdata("advertising_alert", "warning", [
                "title" => "Empty fields error",
                "description" => "Please fill in all required fields."
            ]);

            redirect(base_url("admin/advertising/edit/" . $id));
        }
    }


    public function destroy($id)
    {
        // Находим запись по ID
        $advertising = $this->AdvertisingModel->find($id);

        if (!$advertising) {
            // Если запись не найдена, перенаправляем с сообщением об ошибке
            $this->alert_flashdata("advertising_alert", "danger", [
                "title" => "Error",
                "description" => "Advertising not found."
            ]);
            redirect(base_url("admin/advertising"));
        }

        // Путь к изображению
        $upload_path = "./public/uploads/advertising/";
        $image_path = $upload_path . $advertising["img"];

        // Удаляем изображение, если оно существует
        if (file_exists($image_path) && is_file($image_path)) {
            unlink($image_path);
        }

        // Удаляем запись из базы данных
        $this->AdvertisingModel->delete($id);

        // Уведомление об успешном удалении
        $this->alert_flashdata("advertising_alert", "success", [
            "title" => "Success",
            "description" => "Advertising successfully deleted."
        ]);

        redirect(base_url("admin/advertising"));
    }

}