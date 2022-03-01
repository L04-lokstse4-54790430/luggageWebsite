<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Logistic for Spaghetti Blockchain">
    <meta name="author" content="CS3382 Group 4">
    <meta name="keywords" content=" CS3382 , Spaghetti Blockchain ,blockchain , CityU , Hong Kong , luggage , blockchain application , Web Usability , Design , Engineering ">


    <title>CS3382 Spaghetti Blockchain - #LUGGAGE - Logistic</title>

    <style>
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 80em;
padding: 1em;
border: 1px solid #ccc;
}

.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;
}

.myForm label.choice {
font-size: 0.9em;
font-weight: normal;
}

.myForm label {
text-align: left;
display: block;
}

.myForm input[type="text"],
.myForm input[type="code"],
.myForm input[type="name"],
.myForm input[type="ID"],
.myForm input[type="email"],
.myForm input[type="image_prove"],
.myForm input[type="datetime-local"],
.myForm input[type="pickup_place"],
.myForm select,
.myForm textarea {
float: right;
width: 60%;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}


.myForm input[type="checkbox"],
.myForm input[type="file"] {
margin-left: 40%;
}

.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 40%;
margin-top: 1.8em;
}

.myForm img {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 40%;
margin-top: 1.8em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}

</style>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-company-green static-top">

      <a class="navbar-brand mr-1" href="after_login.html">Spaghetti #LUGGAGE</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

       <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Notice</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="24_hour_chat.html">24 hours Chat</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="Profile.html">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="after_login.html">
            <i class="fas fa-fw fa-address-book"></i>
            <span>My Luggage</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-list"></i>
            <span>Lugguge Record</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Neworder.html">
            <i class="fas fa-fw fa-luggage-cart"></i>
            <span>Make New Orders</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-life-ring"></i>
            <span>Profile</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="24_hour_chat.html">

            <i class="fas fa-fw fa-comments"></i>
            <span>24 Hours Chat</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link">
            <span>Other Pages:</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="FAQ.html">
            <i class="fas fa-fw fa-question"></i>
            <span>FAQs</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Terms_Conditions.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Terms and Conditions</span></a>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="after_login.html">My Luggage</a>
            </li>
            <li class="breadcrumb-item active">Make New Order</li>
          </ol>

          <!-- Page Content -->
          <h1>Order</h1>
          <?php
            $order_num = 0;

            echo $order_num;
          ?>

          <hr>
          <form class="myForm" method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">

<p align="right">
  <button type="reset" value="Reset">Reset</button>
</p>

<fieldset>
<p>
  <label>
    Identity Number *<br>
    <input type="radio" name="UID" required value="HKID"> HKID
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="UID" required value="Passport"> Passport Number
    <input type="ID" name="UID_num" required>
  </label>
</p>
</fieldset>

<p>
  <label>Name *
  <input type="name" name="user_name" required>
  </label>
  </p>

<p>
  <label>Email *
  <input type="email" name="email_address" required>
  </label>
  </p>

<label>Insurance Code * (given by insurance company)
<input type="code" name="insurance_code" required>
</label>
</p>

<p>
<label>Luggage Code * (given by airport)
<input type="code" name="luggage_code" required>
</label>
</p>

<p>
<label>Change Luggage Photo:
<input type="file" name="file" required/>

                      <div class="profile-img">
                           <img src="luggage.jpeg" alt="luggage photo" height="250" width="400"/>
                       </div>
                       </label>

</p>



<p>
<label>Pickup Date/Time *
<input type="datetime-local" name="pickup_time" required>
</label>
</p>

<p>
<label>Pickup Address *

  <input type="pickup_place" name="pickup_place" required>
</label>
</p>

<p>
<label>Dropoff Place *
<input type="text" name="dropoff_place" required list="destinations">
</label>

<datalist id="destinations">
<option value="Airport">
<option value="Beach">
<option value="Fred Flinstone's House">
</datalist>
</p>

<p>
<label>Special Instructions
<textarea name="comments" maxlength="500"></textarea>
</label>
</p>

<p><button type="submit" value="Submit">Submit Booking</button></p>
</form>

</body>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © #LUGGAGE 2018<br>This is not a real website. This was designed as part of a school project Spaghetti Blockchain CityU Hong Kong CS3382 on web design and usability.
              </span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../index.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
