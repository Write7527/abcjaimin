<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VLE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
   
</head>
<body>
    <!-- <div class="container"> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">VLE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                
               
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>


    <!-- </div> -->

    <div id="learningCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#learningCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#learningCarousel" data-slide-to="1"></li>
        <li data-target="#learningCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="carousel-image" style="background-image: url('images/slide1.jpg');"></div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Welcome to the Virtual Learning Environment</h5>
                <p>Engage in interactive learning experiences</p>
            </div>
        </div>
        <div class="carousel-item">
        <div class="carousel-image" style="background-image: url('images/slide2.jpg');"></div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Flexible and Convenient</h5>
                <p>Learn at your own pace, anytime, anywhere</p>
            </div>
        </div>
        <div class="carousel-item">
        <div class="carousel-image" style="background-image: url('images/slide3.jpg');"></div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Connect and Collaborate</h5>
                <p>Join discussions and work with peers</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#learningCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#learningCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</body>
</html>
