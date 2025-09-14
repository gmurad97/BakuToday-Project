<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoriesController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/AdminsModel");
        $this->load->model("user/AdvertisingModel");
        $this->load->model("user/CategoriesModel");
        $this->load->model("user/NewsModel");
        $this->load->model("user/SettingsModel");
    }

    public function index()
    {
        // Основной контекст
        $context = [
            "page_title" => $this->lang->line("categories"),

            "breadcrumbs" => [
                [
                    "title" => $this->lang->line("home"),
                    "url" => base_url(),
                    "active" => false
                ],
                [
                    "title" => $this->lang->line("categories"),
                    "url" => base_url('categories'),
                    "active" => true
                ]
            ],

            // Настройки сайта
            "settings" => $this->SettingsModel->find([]),

            // Админы
            "admins" => $this->AdminsModel->all("ASC"),

            // Реклама
            "advertisings" => $this->AdvertisingModel->all("ASC"),

            // Футер: последние 5 категорий
            "footer_categories" => $this->CategoriesModel->paginate(5, 0, "DESC"),

            // Футер: последние 2 новости
            "footer_news" => $this->NewsModel->paginate(2, 0, "DESC"),

            // Навбар: 5 категорий
            "navbar_categories" => $this->CategoriesModel->paginate(5, 0, "ASC"),

            // Для каждой категории навбара берём по 5 новостей
            "navbar_categories_with_news" => array_map(function ($category) {
                $category_id = $category['id'];
                $news = $this->NewsModel->paginate(5, 0, "DESC", ["category_id" => $category_id]);
                return array_merge($category, ["news" => $news]);
            }, $this->CategoriesModel->paginate(5, 0, "ASC")),

            // Последние 10 новостей с авторами и категориями
            "latest_news_with_author_category" => $this->NewsModel->with_author_category(),

            // Разнообразные варианты для удобного бэка:
            "news_first_last" => [
                "first" => $this->NewsModel->bounds_range("start"),
                "last" => $this->NewsModel->bounds_range("end")
            ],

            "categories_all" => $this->CategoriesModel->all("ASC"),
            "news_all" => $this->NewsModel->all("DESC"),

            // Статистика
            "news_count" => $this->NewsModel->count(),
            "categories_count" => $this->CategoriesModel->count(),
            "admins_count" => $this->AdminsModel->count(),
            "lang" => $this->get_user_language()
        ];

        $this->load->view("user/categories", $context);
    }

    public function show($id)
    {
        $news = $this->NewsModel->all("DESC", ["category_id" => $id, "status" => 1]);
        $category = $this->CategoriesModel->find(["id" => $id]);

        if (empty($news)) {
            redirect(base_url(), 'location', 301);
            return;
        }

        // Основной контекст с добавлением специфичных данных для категории
        $context = [
            "page_title" => $this->lang->line("categories"),

            "breadcrumbs" => [
                [
                    "title" => $this->lang->line("home"),
                    "url" => base_url(),
                    "active" => false
                ],
                [
                    "title" => $this->lang->line("categories"),
                    "url" => base_url('categories'),
                    "active" => true
                ]
            ],

            // Настройки сайта
            "settings" => $this->SettingsModel->find([]),

            // Админы
            "admins" => $this->AdminsModel->all("ASC"),

            // Реклама
            "advertisings" => $this->AdvertisingModel->all("ASC"),

            // Футер: последние 5 категорий
            "footer_categories" => $this->CategoriesModel->paginate(5, 0, "DESC"),

            // Футер: последние 2 новости
            "footer_news" => $this->NewsModel->paginate(2, 0, "DESC"),

            // Навбар: 5 категорий
            "navbar_categories" => $this->CategoriesModel->paginate(5, 0, "ASC"),

            // Для каждой категории навбара берём по 5 новостей
            "navbar_categories_with_news" => array_map(function ($category) {
                $category_id = $category['id'];
                $news = $this->NewsModel->paginate(5, 0, "DESC", ["category_id" => $category_id]);
                return array_merge($category, ["news" => $news]);
            }, $this->CategoriesModel->paginate(5, 0, "ASC")),

            // Последние 10 новостей с авторами и категориями
            "latest_news_with_author_category" => $this->NewsModel->with_author_category(),

            // Разнообразные варианты для удобного бэка:
            "news_first_last" => [
                "first" => $this->NewsModel->bounds_range("start"),
                "last" => $this->NewsModel->bounds_range("end")
            ],

            "categories_all" => $this->CategoriesModel->all("ASC"),
            "news_all" => $this->NewsModel->all("DESC"),

            // Статистика
            "news_count" => $this->NewsModel->count(),
            "categories_count" => $this->CategoriesModel->count(),
            "admins_count" => $this->AdminsModel->count(),

            // Специфичные для категории данные
            "news_list" => $news,
            "category" => $category,
            "lang" => $this->get_user_language()
        ];

        $this->load->view("user/category_news", $context);
    }
}
