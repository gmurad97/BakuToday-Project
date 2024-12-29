<style>
        /* Стиль для отладочной панели */
        .debug-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            z-index: 9999;
            padding: 10px;
        }
        .debug-bar__header {
            display: flex;
            justify-content: space-between;
        }
        .debug-bar__header-heading-title {
            font-size: 16px;
            color: #dfe6e9;
        }
        .debug-bar__header-heading-control-btn {
            cursor: pointer;
            color: #dfe6e9;
        }
        .debug-bar__content {
            display: none;
            background-color: #2d3436;
            padding: 10px;
            max-height: 300px;
            overflow-y: auto;
        }
        .debug-bar__content p {
            color: #1dd1a1;
            font-size: 14px;
            white-space: pre-wrap;
        }
    </style>
<div id="debug-panel" class="debug-bar">
    <div class="debug-bar__header">
        <h1 class="debug-bar__header-heading-title">DebugPanel</h1>
        <div class="debug-bar__header-heading-control-btn" onclick="toggleDebugPanel()">Toggle</div>
    </div>
    <div id="debug-content" class="debug-bar__content">
        <p id="session-info">Session Data: <?php echo htmlspecialchars(print_r($session_data, true)); ?></p>
        <p id="uri-info">Current URI: <?php echo htmlspecialchars($uri_data); ?></p>
        <p id="get-info">GET Params: <?php echo htmlspecialchars(print_r($get_params, true)); ?></p>
        <p id="post-info">POST Params: <?php echo htmlspecialchars(print_r($post_params, true)); ?></p>
    </div>
</div>

<script>
    function toggleDebugPanel() {
        const content = document.getElementById('debug-content');
        const isVisible = content.style.display === 'block';
        content.style.display = isVisible ? 'none' : 'block';
    }
</script>
