<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="../css/all.min.css">
<!-- Custom CSS -->
 <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-info mb-3 p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">EDVERI</a>
 </nav>
 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'dashboard') { echo 'active'; } ?> " href="dashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'admitcard') { echo 'active'; } ?>" href="admitcard.php">
       <i class="fas fa-align-center"></i>
        Upload admit card info  </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'transcript') { echo 'active'; } ?>" href="transcript.php">
        <i class="fas fa-align-center"></i>
        Upload transcript info 
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'degree') { echo 'active'; } ?>" href="degree.php">
       <i class="fas fa-align-center"></i>
        Upload dedree info 
       </a>
      </li>
      

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>
   <div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Degree </div>
        <div class="card-body">
          <h4 class="card-title"> BSCS
          </h4>
          <a class="btn text-white" href="degree.php">View </a>
        </div>
      </div>
    </div>

    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Ttanscript</div>
        <div class="card-body">
          <h4 class="card-title"> BSCS
          </h4>
          <a class="btn text-white" href="transcript.php">View</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Admit card</div>
        <div class="card-body">
          <h4 class="card-title"> BSCS
          </h4>
          <a class="btn text-white" href="admitcard.php">View</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Boostrap JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>

</html>
</body>
