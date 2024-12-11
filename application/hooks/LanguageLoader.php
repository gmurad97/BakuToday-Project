<?php
// Получаем экземпляр CodeIgniter
$ci =& get_instance();

// Загружаем помощник языков
$ci->load->helper('language');

// Получаем текущий URI
$current_uri = $ci->uri->segment(1);

// Проверяем, административная это часть или публичная
if ($current_uri === 'admin') {
    // Язык для администратора
    $adminLang = $ci->session->userdata('admin_lang');
    if (!$adminLang) {
        $ci->session->set_userdata('admin_lang', 'en');
        $adminLang = 'en';
    }
    $ci->lang->load('message', $adminLang);
} else {
    // Язык для пользователя
    $userLang = $ci->session->userdata('user_lang');
    if (!$userLang) {
        $ci->session->set_userdata('user_lang', 'en');
        $userLang = 'en';
    }
    $ci->lang->load('message', $userLang);
}

/* // Загружаем библиотеку сессий
$ci->load->library('session');

// Получаем все данные из сессии
$sessionData = $ci->session->all_userdata();

// Рендерим HTML-панель с функцией скрытия/открытия
echo '<div id="debug-panel" style="position: fixed; bottom: 0; left: 0; width: 100%; background: rgba(0,0,0,0.8); color: white; font-family: Arial, sans-serif; font-size: 14px; z-index: 9999;">';
echo '<div style="padding: 5px; background: #444; text-align: right; cursor: pointer;" onclick="toggleDebugPanel()">';
echo '<span id="toggle-text" style="color: #0f0;">Hide</span> Debug Panel</div>';
echo '<div id="debug-content" style="padding: 10px; border-top: 1px solid #444; overflow: auto;">';
echo '<strong>Active Sessions</strong><br><pre style="white-space: pre-wrap; word-wrap: break-word; color: #0f0;">';
echo htmlspecialchars(print_r($sessionData, true));
echo '</pre></div>';
echo '</div>';

// Добавляем JavaScript для скрытия/открытия панели
echo '<script>
function toggleDebugPanel() {
    var content = document.getElementById("debug-content");
    var toggleText = document.getElementById("toggle-text");
    if (content.style.display === "none") {
        content.style.display = "block";
        toggleText.textContent = "Hide";
    } else {
        content.style.display = "none";
        toggleText.textContent = "Show";
    }
}
</script>';
 */