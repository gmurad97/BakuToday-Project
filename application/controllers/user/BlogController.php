<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/AdvertisingModel");
        $this->load->model("user/CategoriesModel");
        $this->load->model("user/NewsModel");
        $this->load->model("user/SettingsModel");
    }

    public function index()
    {
        // Получаем данные для хлебных крошек
        $breadcrumbs = [
            [
                'text' => $this->lang->line("home"),
                'url' => base_url(),
                'active' => true
            ]
        ];

        // Получаем данные для всех секций
        $top_stories = $this->NewsModel->paginate(3, 0, 'DESC', ['status' => true]);
        $categories = $this->CategoriesModel->paginate(6, 0, 'DESC', ['status' => true]);
        $recent_posts = $this->NewsModel->paginate(3, 0, 'DESC', ['status' => true]);
        $breaking_news = $this->NewsModel->paginate(5, 0, 'DESC', ['status' => true]);
        $all_categories = $this->CategoriesModel->all('ASC', ['status' => true]);

        // Получаем данные для Discover Categories
        $must_read_posts = $this->NewsModel->paginate(5, 0, 'DESC', ['status' => true]);
        $weekly_highlights = $this->NewsModel->paginate(5, 5, 'DESC', ['status' => true]);
        $popular_stories = $this->NewsModel->paginate(5, 10, 'DESC', ['status' => true]);

        // Получаем данные для Latest News
        $latest_news = $this->NewsModel->paginate(4, 0, 'DESC', ['status' => true]);

        // Получаем популярные посты для оффканвас меню
        $popular_posts = $this->NewsModel->paginate(3, 0, 'DESC', ['status' => true]);

        // Получаем данные для Most Popular (по категориям)
        $lifestyle_posts = $this->NewsModel->paginate(5, 15, 'DESC', ['status' => true]);
        $sport_posts = $this->NewsModel->paginate(5, 20, 'DESC', ['status' => true]);
        $politics_posts = $this->NewsModel->paginate(5, 25, 'DESC', ['status' => true]);
        $technology_posts = $this->NewsModel->paginate(5, 30, 'DESC', ['status' => true]);

        // Получаем данные для Most Views News (карусель)
        $most_views_news = $this->NewsModel->paginate(4, 35, 'DESC', ['status' => true]);

        // Получаем данные для Related Post (табы)
        $latest_related = $this->NewsModel->paginate(3, 40, 'DESC', ['status' => true]);
        $trending_related = $this->NewsModel->paginate(3, 43, 'DESC', ['status' => true]);
        $popular_related = $this->NewsModel->paginate(3, 46, 'DESC', ['status' => true]);

        // Получаем посты для мегаменю категорий
        $tech_menu_posts = $this->NewsModel->paginate(5, 50, 'DESC', ['status' => true]);
        $sport_menu_posts = $this->NewsModel->paginate(5, 55, 'DESC', ['status' => true]);
        $entertainment_menu_posts = $this->NewsModel->paginate(5, 60, 'DESC', ['status' => true]);
        $politics_menu_posts = $this->NewsModel->paginate(5, 65, 'DESC', ['status' => true]);
        $magazine_menu_posts = $this->NewsModel->paginate(5, 70, 'DESC', ['status' => true]);
        $lifestyle_menu_posts = $this->NewsModel->paginate(5, 75, 'DESC', ['status' => true]);

        // Подсчитываем количество постов для каждой категории
        $categories_with_count = [];
        foreach ($categories as $category) {
            $category_posts = $this->NewsModel->paginate(1000, 0, 'DESC', [
                'category_id' => $category['id'],
                'status' => true
            ]);
            $count = count($category_posts);

            $categories_with_count[] = [
                'category' => $category,
                'count' => $count
            ];
        }

        // Текущая дата для хедера
        $current_date = date('l, F, Y');

        $context = [
            "page_title" => $this->lang->line("home"),
            "breadcrumbs" => $breadcrumbs,
            "top_stories" => $top_stories,
            "categories" => $categories,
            "recent_posts" => $recent_posts,
            "breaking_news" => $breaking_news,
            "all_categories" => $all_categories,
            "popular_posts" => $popular_posts,
            "must_read_posts" => $must_read_posts,
            "weekly_highlights" => $weekly_highlights,
            "popular_stories" => $popular_stories,
            "latest_news" => $latest_news,
            "categories_with_count" => $categories_with_count,
            "lifestyle_posts" => $lifestyle_posts,
            "sport_posts" => $sport_posts,
            "politics_posts" => $politics_posts,
            "technology_posts" => $technology_posts,
            "most_views_news" => $most_views_news,
            "latest_related" => $latest_related,
            "trending_related" => $trending_related,
            "popular_related" => $popular_related,
            "tech_menu_posts" => $tech_menu_posts,
            "sport_menu_posts" => $sport_menu_posts,
            "entertainment_menu_posts" => $entertainment_menu_posts,
            "politics_menu_posts" => $politics_menu_posts,
            "magazine_menu_posts" => $magazine_menu_posts,
            "lifestyle_menu_posts" => $lifestyle_menu_posts,
            "current_date" => $current_date,
            "lang" => $this->get_user_language(),
        ];

        $this->load->view("user/blog", $context);
    }
    public function show($id)
    {
        // Получаем пост по ID
        $post = $this->NewsModel->find($id);

        if (!$post) {
            show_404();
        }

        // Получаем категорию поста
        $category = $this->CategoriesModel->find($post['category_id']);

        // Получаем данные для хлебных крошек
        $breadcrumbs = [
            [
                'text' => $this->lang->line("home"),
                'url' => base_url(),
                'active' => false
            ],
            [
                'text' => $category ? ($category['name_' . $this->get_user_language()] ?? $category['name_az']) : 'Blog',
                'url' => $category ? base_url('category/' . $category['id']) : base_url('blog'),
                'active' => false
            ],
            [
                'text' => $post['title_' . $this->get_user_language()] ?? $post['title_az'],
                'url' => base_url('blog/' . $id),
                'active' => true
            ]
        ];

        // Получаем связанные посты (той же категории)
        $related_posts = $this->NewsModel->paginate(6, 0, 'DESC', [
            'category_id' => $post['category_id'],
            'status' => true
        ]);

        // Получаем предыдущий и следующий пост
        $prev_post = $this->NewsModel->bounds_range('prev', 1, [
            'id <' => $id,
            'status' => true
        ]);

        $next_post = $this->NewsModel->bounds_range('next', 1, [
            'id >' => $id,
            'status' => true
        ]);

        // Получаем данные для сайдбара
        $sidebar_categories = $this->CategoriesModel->paginate(5, 0, 'ASC', ['status' => true]);

        // Подсчитываем количество постов для каждой категории
        $categories_with_count = [];
        foreach ($sidebar_categories as $cat) {
            $cat_posts_count = $this->NewsModel->paginate(1000, 0, 'DESC', [
                'category_id' => $cat['id'],
                'status' => true
            ]);
            $count = count($cat_posts_count);

            $categories_with_count[] = [
                'category' => $cat,
                'count' => $count
            ];
        }

        // Текущая дата для хедера
        $current_date = date('l, F, Y');

        // Получаем посты для табов Related Post
        $latest_related = $this->NewsModel->paginate(3, 0, 'DESC', ['status' => true]);
        $trending_related = $this->NewsModel->paginate(3, 3, 'DESC', ['status' => true]);
        $popular_related = $this->NewsModel->paginate(3, 6, 'DESC', ['status' => true]);

        // Получаем посты для карусели Most Views News
        $most_views_news = $this->NewsModel->paginate(4, 9, 'DESC', ['status' => true]);

        $context = [
            "page_title" => $post['title_' . $this->get_user_language()] ?? $post['title_az'],
            "breadcrumbs" => $breadcrumbs,
            "post" => $post,
            "category" => $category,
            "related_posts" => $related_posts,
            "prev_post" => $prev_post,
            "next_post" => $next_post,
            "categories_with_count" => $categories_with_count,
            "latest_related" => $latest_related,
            "trending_related" => $trending_related,
            "popular_related" => $popular_related,
            "most_views_news" => $most_views_news,
            "current_date" => $current_date,
            "lang" => $this->get_user_language(),
        ];

        $this->load->view("user/blog", $context);
    }
}
