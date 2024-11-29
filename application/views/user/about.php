<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <style>
        *,
        *::before,
        *::after {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            padding: 24px;
        }

        h1 {
            margin-bottom: 24px;
        }

        ul {
            display: flex;
            flex-direction: row;
            list-style-type: none;
        }

        ul li:not(:last-of-type) {
            margin-right: 16px;
        }

        .link {
            text-decoration: none;
            color: blue;
        }

        .link:hover {
            color: red;
        }

        .link.active {
            color: red;
        }
    </style>
    <h1>About Page</h1>
    <ul>
        <li>
            <a class="link <?= $this->uri->segment(1)==="home" ? "active":""; ?>" href="<?= base_url('home'); ?>">Home</a>
        </li>
        <li>
            <a class="link <?= $this->uri->segment(1)==="about" ? "active":""; ?>" href="<?= base_url('about'); ?>">About</a>
        </li>
        <li>
            <a class="link <?= $this->uri->segment(1)==="contact" ? "active":""; ?>" href="<?= base_url('contact'); ?>">Contact</a>
        </li>
    </ul>
</body>

</html>