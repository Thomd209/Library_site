<?php

require_once 'scripts/get_genres.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Жанры</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin/logout.css">
    <link rel="stylesheet" href="../assets/css/admin/genres.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>
<body>
    <div class="content">
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="admin.php">Панель управления сайтом</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="admin.php">Книги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="authors.php">Авторы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="genres.php">Жанры</a>
                        </li>
                        <li class="nav-item">
                            <a class="sign-in-link nav-link" href="auth/logout.php">Выйти</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <h2>Жанры</h2>
            <p>Если у жанра нет ни одной книги, написанной в нем, то его можно удалять.</p>
            <?php foreach ($genres as $genre): ?>
                <ul class="genre">
                    <li class="genre__name">Жанр:</li>
                    <li><?= $genre["genre_name"] ?></li>
                    <li class="genre__books">Книги, написанные в жанре:</li>
                    <li><?= $genre["genres"] ?></li>
                </ul>
                <button class="btn-delete btn btn-danger">
                    <a class="link-delete" href="scripts/delete_genre.php?genre_id=<?= $genre["genre_id"] ?>">Удалить жанр</a>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
    <footer class="footer bg-secondary">
        <div class="container-fluid">
            <span class="copyright">&copy; 2021 Сайт библиотеки</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>