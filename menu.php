
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">My CV Online</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Find Jobs</a></li>
      <?php 
      if (isset($_SESSION['role'])){
      if(($_SESSION['role'])=="Candidate"){  ?>
      <li ><a href="candidate_profile.php">Profile</a></li>
      <li ><a href="candidate_cv.php">CV</a></li>
      <li ><a href="view_cv.php">View CV</a></li>
      <li ><a href="logout.php">Logout</a></li>
    <?php }elseif (($_SESSION['role'])=="Company") {
      ?>
      <li ><a href="company_profile.php">Profile</a></li>
      <li ><a href="jobs.php">Jobs</a></li>
      <li ><a href="company_candidate_search.php">Find Candidates</a></li>
      <li ><a href="logout.php">Logout</a></li>
      <?php
    }}else{
  ?>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Candidate
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="candidate_login.php">Candidate Login</a></li>
          <li><a href="candidate_signup.php">Candidate Sign Up</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Company
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="company_login.php">Company Login</a></li>
          <li><a href="company_signup.php">Company Sign Up</a></li>
        </ul>
      </li>
  <?php
    } ?>
     
    </ul>
  </div>
</nav>