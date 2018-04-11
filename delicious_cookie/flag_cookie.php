<!DOCTYPE html>
<html>
<head>
    <title>Delicious Cookie</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="common.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Delicious Cookie</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chocolate_cookie.php">Chocolate Cookie</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="flag_cookie.php">Flag Cookie</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <script>
                            if(getCookie('user')) {
                                document.write('<a class="nav-link" href="logout.php">Logout</a>');
                            } else {
                                document.write('<a class="nav-link" href="login.php">Login</a>');
                            }
                        </script>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Flag Cookie</h1>
        <img class="img-fluid" src="cookie3.jpg" alt="cookie3">
        <?php
            if(isset($_COOKIE['user'])) {
                if($_COOKIE['user'] === 'admin') {
                    echo '<p class="lead">You are admin!</p>';
                    echo '<p class="lead">Flag is "D3L1C10U5_C00K13_4196E70C"</p>';
                } else {
                    echo '<p class="lead">You are ' . $_COOKIE['user'] . '!</p>';
                    echo '<p class="lead">Only admin can get flag.</p>';
                }
            } else {
                echo '<p class="lead">Plz Login!</p>';
            }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
