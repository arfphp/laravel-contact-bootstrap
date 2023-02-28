<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="index.html">
          <strong>Contact</strong> App
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- /.navbar-header -->
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <ul class="navbar-nav">
          <li class="nav-item {{ ($title === "Home") ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item {{ ($title === "Contacts") ? 'active' : '' }}"><a href="/contacts3" class="nav-link">Contacts</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-2"><a href="#" class="btn btn-outline-secondary">Login</a></li>
          <li class="nav-item"><a href="#" class="btn btn-outline-primary">Register</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Akbar R F
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
