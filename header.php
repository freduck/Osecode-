 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-dark text-white bg-dark" style="background-color: black;color: white;">
  <div class="container-fluid">
      <?php
       session_start();
if(!isset($_SESSION['email'])){
  header("location:login.html");
}else{
  $email=$_SESSION['email'];
}
         ?>
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
   
    <button class="navbar-toggler text-white fs-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon fs-1">Menu</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li><b><h2>
      
           
         </h2>

      </b>

      </li>
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Options
          </a>
          <ul class="dropdown-menu">
<li><a href="profile.php" class="nav-link">Home</a></li>
              <li><a href="profile.php?url=variables">Variables</a></li>
<li><a href="profile.php?url=ifstatements" class="nav-link">If Statement</a></li>
<li><a href="profile.php?url=loops" class="nav-link">Loops</a>
  </li>
<li><a href="profile.php?url=send_review" class="nav-link"> Send Review</a></li>
<li><a href="practice.php">Practice What You Have Learnt With JS</a></li>
<li><a href="profile.php?url=feedback" class="nav-link">Feed Back</a></li>
<li><a href="logout.php?url=logout"class="nav-link">Logout</a></li>
          </ul>
        </li>
      
      </ul>
    <h2>
       <div style="float: right;">

      <?php 

echo $email;

      ?>
    </div>
    </h2>
    </div>
  </div>
</nav>