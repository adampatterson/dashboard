<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="/assets/css/dashboard.css">

    <title>Dashboard</title>
</head>
<body class="bg-light sidebar-full-off">

<header id="navigation" class="bg-white p-3 shadow-sm">
    <?php
    include('resources/views/navigation.blade.php') ?>
</header>

<aside id="sidebar" class="bg-dark text-white">
    <!-- Make this better, padding should be on the #sidebar -->
    <div class="p-3 d-flex flex-column w-100">
        <h4 class="my-3"><svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                              xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                              preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#e83e8c"></rect>
                <text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text>
            </svg> Sidebar</h4>
        <?php
        include('resources/views/sidebar.blade.php') ?>
    </div>
</aside>

<main id="content">
    <main class="container-fluid">
        <?php
        include('resources/views/content.blade.php') ?>
    </main>
</main>

<script src="/assets/js/manifest.js"></script>
<script src="/assets/js/vendor.js"></script>
<script src="/assets/js/dashboard.js"></script>

</body>
</html>
