<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
<header>
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
        <footer>
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
    
</body>
</html>