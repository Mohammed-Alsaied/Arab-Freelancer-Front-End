<!DOCTYPE html>
<html>
<!-- CDN Content Delivry Network-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Include CSS Files-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>

    <div class="">
        <!-- Begin Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <i class="fas fa-chart-line fa-5x" style="color:#6495ED;"></i><a href="dashboard.html" class="navbar-brand">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span></button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <div>
                        <input type="text" id="Search" class=" form-control" placeholder="Search Here...">
                    </div>
                    <li class="nav-item active" id="nav">

                        <a class="nav-link" id="nav" href="#"><i class="fas fa-search"></i></a>


                    </li>
                    <li class="nav-item" id="nav">

                        <a class="nav-link" id="nav" href="dashboard.html"><span><i class="fas fa-house-user"></i> Home  </span></a>

                    </li>
                    <li class="nav-item" id="nav">
                        <a class="nav-link" id="nav" href="#"> <span> <i class="fas fa-dollar-sign"></i> Sales</span></a>
                    </li>

                    <li class="nav-item dropdown" id="nav" id="nav">
                        <a class="nav-link dropdown-toggle" href="#" id="nav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> Mohamed Alsaied</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Management</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-users"></i> Users</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- End Navbar -->

    <div class="container">

        <div class="row">
            <!-- Start Sidebar-->
            <div class="col-md-3">

                <div class="list-group">
                    <a href="dashboard.php" class="list-group-item list-group-item-action active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a href="dashboard.php?page=create_user" class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i> Create User</a>
                    <a href="dashboard.php?page=manage_users" class="list-group-item list-group-item-action"><i class="fas fa-users-cog"></i> Manage Users <span class="badge badge-primary">12</span></a>
                    <a href="dashboard.php?page=freelancers" class="list-group-item list-group-item-action"><i class="fas fa-briefcase"></i> Freelancers <span class="badge badge-warning">8</span></a>
                    <a href="dashboard.php?page=branches" class="list-group-item list-group-item-action"><i class="fas fa-dumpster"></i> Branches  <span class="badge badge-success">6</span></a>
                </div>
                <!-- End Sidebar-->


                <div class="col-md-9">
                    <!-- Start Alert -->
                    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hello Admin!</strong> Have Nice Day.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                </div>-->
                    <!-- End Alert -->
                    <!-- Start card Style-->
                    <input type="search" class="form-control" id="find">
                    <div id="result"></div>

                    <div class="card">
                        <div class="card-header">
                    <?php
                        if(isset($_GET['page'])){
                            $url =$_GET['page'];
                            switch($url):
                                case 'home'; echo 'Dashboard'; break; 
                                case 'Creat_user'; echo 'Creat New User'; break; 
                                case 'manage_users'; echo 'Users Managment'; break; 
                                case 'Freelancers'; echo 'Freelancers'; break;
                                case 'branches' ;echo 'Branches'; break;
                            endswitch;
                         }else echo 'Dashboard';
                    ?>


                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard.html">
                                            <h5>Dashboard</h5>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="create_user.html">
                                            <h5>Create User</h5>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="manage_users.html">
                                            <h5>Manage Users</h5>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="freelancers.html">
                                            <h5>Freelancers</h5>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="branches.html">
                                            <h5>Branches</h5>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                        <div class="card-body">
                            <?php
                                 if(isset($_GET['page'])){
                                 include($_GET['page'].  '.php');           
                                 }
           
                            ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card" style="width:200px;">
                                            <div class="card-body">
                                                <div style="text-align: center;">
                                                    <i class="fas fa-users fa-3x" style="color:#2874A6 ;"></i>
                                                    <a href="#" title="Enter For Details" id="link">
                                                        <h2>12</h2>
                                                    </a>
                                                    <a href="#" title="Enter For Details" id="link">
                                                        <h3>Users</h3>
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card" style="width:200px;">
                                            <div class="card-body">
                                                <div style="text-align: center;">
                                                    <i class="fas fa-users fa-3x" style="color: #2874A6 ;"></i>
                                                    <a href="#" title="Enter For Details" id="link">
                                                        <h2>8</h2>
                                                    </a>
                                                    <a href="#" title="Enter For Details" id="link">
                                                        <h3>Freelancers</h3>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card" style="width:200px;">
                                            <div class="card-body">
                                                <div style="text-align: center;">
                                                    <i class="fas fa-dumpster fa-3x" style="color: #2874A6 ;"></i>
                                                    <a href="#" title="Enter For Details" id="link">
                                                        <h2>6</h2>
                                                    </a>
                                                    <a href="#" title="Enter For Details" id="link">
                                                        <h3>Branches</h3>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Style-->
        </div>





        <div class="footer">
            <span>Copyright &copy; Mohamed Alsaied 2020. &reg; All Rights Reserved.</span>
        </div>

        <!-- Include JS Files-->
        <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="js/all.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/custom.js"></script>

</body>

</html>