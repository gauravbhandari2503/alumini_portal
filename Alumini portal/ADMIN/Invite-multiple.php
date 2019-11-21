<?php
    $con=mysqli_connect("localhost","root","","ap");    
    session_start();
    
    if(isset($_SESSION['em1'])){
        
    }

    else{
        header("location:Login.php");
    
    }

    if(isset($_POST["ok"]))
    {

        $sub=$_POST["subject"];
        $msg=$_POST["message"];
        
              


        $sql=mysqli_query($con,"select * from alumini");
        while ($row=mysqli_fetch_array($sql)) {


        	if(mail($row['email'],$sub,$msg)){
					
			}
			else {
					echo "fail";
			}
        	
        }
        





        
        
    }
    

    

?>





<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amrapali Admin page</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo" style="width:300px; height: 50px;"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <h3 class="menu-title">Views</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="Registration-data.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> Registrations</a>
                        
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="Alumini-data.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Alumini's</a>
                      
                    </li>
                    
                    <h3 class="menu-title">Events</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Invitation-single</a>
                        
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Invitation-multiple</a>
                        
                    </li>

                    <h3 class="menu-title">Registartion</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Invite-Registration</a>
                        
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Registration(Fail)</a>
                        
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Reports</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Reports</span> Here all the facts about the <b>Alumini</b> is displayed
                    
                </div>
            </div>
        </div>
            
        <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Invite</strong> All
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="invite-multiple.php" method="POST" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-12">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="text" id="input1-group1" name="subject" placeholder="Subject" class="form-control">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group" >
                                                                    <div class="col col-md-12">
                                                                        <div class="input-group">
                                                                            <!--<input type="email" id="input2-group1" name="input2-group1" placeholder="Message" class="form-control">
                                                                            <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>-->
                                                                            
                                                                                <div class="col-12 col-md-12"><textarea name="message" id="textarea-input" rows="5" cols="5" placeholder="Message" class="form-control"></textarea>
                                                                                    <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <!--<div class="row form-group">
                                                                <div class="col col-md-6"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                                                </div>-->
                                                                <div class="row form-group">
                                                                    <div class="col col-md-12">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                                            <input type="file" id="input3-group1" name="input3-group1" placeholder="Attachment" class="form-control">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-success btn-sm" name="ok">
                                                                <i class="fa fa-dot-circle-o"></i> Send All
                                                            </button>
                                                            <button type="reset" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-ban"></i> Reset
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>    
                                                </div>
                                           </div>



      <!-- Invite single -->
                                                    

           


    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        
    </script>

</body>

</html>
