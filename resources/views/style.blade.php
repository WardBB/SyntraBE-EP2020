<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abel|Dosis|Nanum+Gothic|Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}" async></script>

    <title>Festifavs</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="justify-content-center text-center"><img src="assets/img/festifavs_logo.png" width="300px"></div>
    
      
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-center">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-dark bg-dark navbar-collapse justify-content-center text-center" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-dark bg-dark">
              <a routerLink="home" class="nav-item nav-link">Home</a>
              <a routerLink="festivals" class="nav-item nav-link">Festivals</a>
              <a routerLink="favorites" class="nav-item nav-link">Favorites</a>
              <a routerLink="about" class="nav-item nav-link">About</a>
              <a routerLink="contact" class="nav-item nav-link">Contact</a>
             </div>
      
             
          </div>
        </nav>
    </header>
      
        @yield('template')
        <!-- footer-->
        <footer class="footer">
        <hr>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <img src="assets/img/logo.png" class="img1">
            </div>
            <div class="col-sm">
              <div class="text-center" id="copyright">Copyright Britt, Ward, Marjolijn inc. &copy; 2020</div>
            </div>
          </div>
        </div>
        <footer>

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    
</body>
</html>