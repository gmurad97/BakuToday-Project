<?php

class DebugPanel
{

    public function initialize()
    {
        $CI =& get_instance();

        // Получаем текущий вывод
        $output = $CI->output->get_output();
    
        // HTML код отладочной панели
        $debug_panel_html = '
        <div class="debug-bar">
            <div class="debug-bar__header">
                <div class="debug-bar__header-heading">
                    <h1 class="debug-bar__header-heading-title">DebugPanel v.0.2</h1>
                </div>
                <div class="debug-bar__header-heading-control">
                    <div id="toggle-text" onclick="toggleDebugPanel()" class="debug-bar__header-heading-control-btn">Hide</div>
                </div>
            </div>
            <div id="debug-content" class="debug-bar__list">
                <div class="debug-bar__item">
                    <div class="debug-bar__item-heading">
                        <h1 class="debug-bar__item-heading-title">Session Data</h1>
                    </div>
                    <div class="debug-bar__item-body">
                        <p class="debug-bar__item-body-description">' . print_r($_SESSION, true) . '</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
// Восстанавливаем состояние панели из LocalStorage при загрузке страницы
        document.addEventListener("DOMContentLoaded", () => {
            const content = document.getElementById("debug-content");
            const toggleText = document.getElementById("toggle-text");

            const isHidden = localStorage.getItem("debugPanelHidden") === "true";

            content.style.display = isHidden ? "none" : "grid";
            toggleText.textContent = isHidden ? "Show" : "Hide";
        });

        function toggleDebugPanel() {
            const content = document.getElementById("debug-content");
            const toggleText = document.getElementById("toggle-text");

            const isHidden = content.style.display === "none";
            content.style.display = isHidden ? "grid" : "none";
            toggleText.textContent = isHidden ? "Hide" : "Show";

            // Сохраняем состояние панели в LocalStorage
            localStorage.setItem("debugPanelHidden", !isHidden);
        }
        </script>';
    
        // Проверяем наличие </body> и модифицируем вывод
        if (strpos($output, '</body>') !== false) {
            $output = str_replace('</body>', $debug_panel_html . '</body>', $output);
        } else {
            // Если </body> не найдено, добавляем панель в конец
            $output .= $debug_panel_html;
        }
    
        // Устанавливаем стили панели
        $debug_panel_css = '
        <style>
        .debug-bar { position: fixed; bottom: 0; left: 0; width: 100%; background-color: rgba(0, 0, 0, 0.8);z-index:9999999999 }
        .debug-bar__header { display: flex; justify-content: space-between; align-items: center; padding: 8px 16px; background: linear-gradient(90deg, #6c5ce7, #e84393); }
        .debug-bar__header-heading-title { color: #dfe6e9; font-family: Helvetica, sans-serif; font-size: 16px; }
        .debug-bar__header-heading-control-btn { cursor: pointer; background: rgba(45, 52, 54, 0); border: 2px solid #2d3436; padding: 2px 8px; }
        .debug-bar__list { display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; padding: 16px; max-height: 300px; overflow: auto; }
        .debug-bar__item { border: 2px inset #6c5ce7; padding: 8px; }
        .debug-bar__item-heading-title { color: #dfe6e9; font-size: 14px; }
        .debug-bar__item-body-description { color: #1dd1a1; font-size: 14px; white-space: pre-line; }
        </style>';
    
        // Добавляем стили перед </head>, если они есть
        if (strpos($output, '</head>') !== false) {
            $output = str_replace('</head>', $debug_panel_css . '</head>', $output);
        } else {
            $output = $debug_panel_css . $output;
        }
    
        // Отправляем модифицированный вывод
        $CI->output->set_output($output);
        $CI->output->_display();
        exit();
    }
}