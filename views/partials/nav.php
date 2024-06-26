<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Kaspari Blogi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contacts">Contacts</a>
        </li>
        <li>
          <a class="nav-link" href="/users">Users</a>
        </li>
        <?php if(auth()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/admin/articles">Articles</a></li>
            </ul>
          </li>
        <?php endif ?>
      </ul>
      <ul class="navbar-nav">
        <?php if(auth()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?=auth()->email?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item me-2 mb-2">
            <a href="/login" class="btn btn-primary">Login</a>
          </li>
          <li class="nav-item">
            <a href="/register" class="btn btn-success">Register</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
    
  </div>
</nav>