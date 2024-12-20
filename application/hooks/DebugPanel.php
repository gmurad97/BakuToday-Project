<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DebugPanel
{
    /**
     * @var MY_Controller $CI
     */
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function initialize()
    {
        $this->CI->load->library("session");
        $session_data = $this->CI->session->all_userdata();

        echo '<div id="debug-panel" style="position: fixed; bottom: 0; left: 0; width: 100%; background: rgba(0,0,0,0.8); color: white; font-family: Arial, sans-serif; font-size: 14px; z-index: 9999;">';
        echo '<div style="padding: 5px; background: #444; text-align: right; cursor: pointer;" onclick="toggleDebugPanel()">';
        echo '<span id="toggle-text" style="color: #0f0;">Hide</span> Debug Panel</div>';
        echo '<div id="debug-content" style="padding: 10px; border-top: 1px solid #444; overflow: auto;">';
        echo '<strong>Active Sessions</strong><br><pre style="white-space: pre-wrap; word-wrap: break-word; color: #0f0;">';
        echo htmlspecialchars(print_r($session_data, true));
        echo '</pre></div>';
        echo '</div>';

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
    }
}
