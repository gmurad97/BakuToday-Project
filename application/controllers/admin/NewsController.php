<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property NewsModel $NewsModel
 */
class NewsController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/NewsModel");
    }

    public function index()
    {
        $context["page_title"] = "All News";
        $context["news_array"] = $this->NewsModel->all();
        /*         print_r("<pre>");
                print_r($context);
                die(); */
        $this->load->view("admin/news/list", $context);
    }

    public function show($id)
    {
        $context["page_title"] = "News VAR Detail";
        $context["news_data"] = $this->NewsModel->find($id);
        $this->load->view("admin/news/detail", $context);
    }

    public function create()
    {
        $context["page_title"] = "Add News";
        $this->load->view("admin/news/create", $context);
    }

    public function store()
    {
        // Проверка на заполненность обязательных полей
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        // Если форма не прошла валидацию, возвращаемся на страницу создания новости
        if ($this->form_validation->run() == FALSE) {
            $this->create();
            return;
        }

        // Получаем данные из формы
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'author' => $this->input->post('author')
        ];

        // Загружаем и обрабатываем главное изображение
        if ($_FILES['photo']['name']) {
            $this->load->library('upload');

            // Настройка параметров для загрузки изображения
            $config['upload_path'] = './uploads/news/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // Максимальный размер файла в KB
            $this->upload->initialize($config);

            // Загружаем одно изображение
            if (!$this->upload->do_upload('photo')) {
                // Если ошибка загрузки, отображаем сообщение об ошибке
                $context['error'] = $this->upload->display_errors();
                $this->create();
                return;
            }

            // Получаем путь загруженного файла
            $data['photo'] = $this->upload->data('file_name');
        }

        // Обработка множества фотографий (мультифайлы)
        if ($_FILES['photos']['name'][0]) {
            $photos = [];
            $files_count = count($_FILES['photos']['name']);

            // Обрабатываем каждый файл
            for ($i = 0; $i < $files_count; $i++) {
                $_FILES['photo_file']['name'] = $_FILES['photos']['name'][$i];
                $_FILES['photo_file']['type'] = $_FILES['photos']['type'][$i];
                $_FILES['photo_file']['tmp_name'] = $_FILES['photos']['tmp_name'][$i];
                $_FILES['photo_file']['error'] = $_FILES['photos']['error'][$i];
                $_FILES['photo_file']['size'] = $_FILES['photos']['size'][$i];

                // Настройка параметров для загрузки каждого файла
                $this->upload->initialize($config);

                // Загружаем файл
                if (!$this->upload->do_upload('photo_file')) {
                    // Если ошибка, возвращаемся на форму с ошибкой
                    $context['error'] = $this->upload->display_errors();
                    $this->create();
                    return;
                }

                // Добавляем путь к загруженному файлу в массив
                $photos[] = $this->upload->data('file_name');
            }

            // Сохраняем массив путей в формате JSON для дальнейшего использования
            $data['multiple_photos'] = json_encode($photos);
        }

        // Сохраняем данные в базу
        $this->NewsModel->create($data);

        // Перенаправляем на страницу списка новостей после успешного добавления
        redirect('admin/news');
    }


    public function edit($id)
    {
        $context["page_title"] = "News VAR Edit";
        $context["news_data"] = $this->NewsModel->find($id);
        $this->load->view("admin/news/edit", $context);
    }

    public function update($id)
    {
        $this->input->post();
        $data = [
            "ucfirst" => "ml"
        ];
        $this->NewsModel->create($data);
    }

    public function destroy($id)
    {
        $this->NewsModel->delete($id);
    }
}