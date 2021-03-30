<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Впу №7 м.Кременчука</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<style>
    nav {
        font-size: 1.125em
    }

    .nav-item {
        margin-top: 20px;

    }

    .navbar .form-control {

        padding: 1.15rem 1rem;;
    }
</style>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 ">
    <a class="navbar-brand bg-dark text-light col-md-3 col-lg-2 me-0 px-3" href="/">ВПУ №7 м.Кременчук</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#menu" aria-controls="menu" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark  bg-dark text-light w-100" type="text" placeholder="Search"
           aria-label="Search">
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="menu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link fa  fa-home active" aria-current="page" href="/"> На головну </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fa fa-book" href="/pupils/create">
                        <span data-feather="file"></span>
                        Добавить студента
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link fa fa-id-card-o" href="/pupils/output">
                        <span data-feather="shopping-cart"></span>
                        Студенты
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link fa fa-line-chart" href="">
                        <span data-feather="users"></span>
                        Рейтинг
                    </a></li>
            </ul>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <?php include '../Application/Views/' . $contentView; ?>

        </main>
    </div>
</div>


<script src="../js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
<script src="dashboard.js"></script>

</body>
</html>

