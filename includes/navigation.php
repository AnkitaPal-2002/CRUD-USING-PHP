<?php
  session_start();

?>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" > -->
    
    
        <img src="../assets/images/login_img.png" alt="" width="50px" height="50px">

   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <?php
    if(isset($_SESSION['userName'])){
      ?>
        <li class="nav-item active nav-link">
        
          Hi, <?php echo $_SESSION['userName']; ?>

      </li>
      <?php
    }
    
    
    ?>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/sky/pages/home.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php
      if(isset($_SESSION['userName'])){
        ?>
        <li class="nav-item">
              <a class="nav-link" href="http://localhost/sky/pages/logout.php">Logout</a>
        </li>
        <?php
      }else{
        ?>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/sky/pages/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/sky/pages/register.php">Register</a>
            </li>
        <?php
      }
      
      
      
      ?>
      
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>