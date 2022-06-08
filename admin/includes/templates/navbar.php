<nav class="navbar navbar-expand-lg navbar-light bg-light1">
  <div class="container">
    <a class="navbar-brand" href="#">Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#app-nav" aria-controls="navbarNavDropdown" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="app-nav">
      
      <ul class="navbar-nav">
      
      <li class="nav-item">
          <a class="nav-link" href="#"> <?php echo lang("CATEGORIES") ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <?php echo lang("ITEMS") ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <?php echo lang("MEMBERS") ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <?php echo lang("STATISTICS") ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <?php echo lang("LOGS") ?> </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" r
          ole="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mohamed
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="members.php?action=Edit&ID=<?php echo$_SESSION['id'] ?>">Eidt profile</a></li>
            <li><a class="dropdown-item" href="#"> settings</a></li>
            <li><a class="dropdown-item" href="logout.php"> Logout </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>