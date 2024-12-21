<script src="<?= base_url('public/user/assets/js/jquery-3.7.1.min.js'); ?>"></script>
<script src="<?= base_url('public/user/assets/js/snowflakes.min.js'); ?>"></script>
<script src="<?= base_url('public/user/assets/vendors/bootstrap@5.3.3/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('public/user/assets/js/main.js'); ?>"></script>
<?php if ($settings->snow_mode): ?>
    <script>
        new Snowflakes({
            "color": "rgb(0, 206, 201)",
            "count": 128,
            "minOpacity": 0.2,
            "maxOpacity": 0.8,
            "minSize": 8,
            "maxSize": 32,
            "rotation": true,
            "speed": 2,
            "wind": true,
            "zIndex": 9999,
            "autoResize": true
        });
    </script>
<?php endif; ?>
</body>

</html>