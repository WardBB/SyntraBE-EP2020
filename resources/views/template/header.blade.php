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
              <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
              <a routerLink="festivals" class="nav-item nav-link">Festivals</a>
              <a routerLink="favorites" class="nav-item nav-link">Favorites</a>
              <a href="{{route('about')}}" class="nav-item nav-link">About</a>
              <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
             </div>
      
             
          </div>
        </nav>
    </div>
</header>