<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('tieudetrang')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    
    <!-- Custom Styles -->
    <style>
        /* Container and layout styles */
        .container > header {
            height: 220px;
        }
        .container > nav {
            height: 60px;
        }
        .container > footer {
            height: 90px;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        .container > main {
            display: flex;
            min-height: 500px;
        }

        /* Article and Aside Layout */
        main article {
            flex: 3;
            padding: 20px;
        }
        main aside {
            flex: 1;
            padding: 20px;
            color: #fff;
        }

        /* Additional styles for page content */
        h1 {
            color: #2c3e50;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        .tittle {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #34495e;
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            color: #2980b9;
        }
        em {
            display: block;
            font-size: 0.9em;
            color: #7f8c8d;
            margin-top: 5px;
        }
        p {
            text-align: center;
            color: #484848;
            font-size: 0.8em;
            margin-top: 10px;
        }
        .navbar-brand {
            color:#000;
        }
    </style>
</head>
<body>
    <div class="container">

        <header class="bg-info p-3">
            <h1 class="text-white text-center py-5">Xin chào đến với bản tin</h1>
        </header>

        <nav class="bg-primary text-white">
            @include('menu')
        </nav>

        <main>
            <article class="bg-light">
                @yield('noidung')
            </article>
            <aside class="bg-info">
                <h4>Các bảng tin gần đây</h4>
                <p>Xin mời các bạn xem</p>
            </aside>
        </main>

        <footer class="bg-dark">
            Được phát triển bởi Tường Vi
        </footer>
    </div>
</body>
</html>
