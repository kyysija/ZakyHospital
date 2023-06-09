
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        td{
            padding:5px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-size:22px;">Admin Zaky Hospital</a>
            </div>
          
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-3x"></i> Logout</a>
                    </li>
                 


                  
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2>
                        <h5>Welcome Admin , Love to see you back. </h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
               
                    <div class="col-md-9 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tabel User
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <?php 
                                        include "koneksi.php";
                                        $id_users = $_GET['id_users'];
                                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM users where id_users='$id_users' ") or die(mysql_error());
                                        $nomor = 1;
                                        while($data = mysqli_fetch_array($query_mysql)){
                                        ?>
                                        <form action="update.php" method="post">		
                                            <table>
                                                <tr>
                                                    <td>Username</td>
                                                    <td>
                                                        <input type="hidden" name="id_users" value="<?php echo $data['id_users'] ?>">
                                                        <input type="text" name="username" value="<?php echo $data['username'] ?>">
                                                    </td>					
                                                </tr>	
                                                <tr>
                                                    <td>Email</td>
                                                    <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
                                                </tr>	
                                                <tr>
                                                    <td>Password</td>
                                                    <td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>					
                                                </tr>	
                                                <tr>
                                                    <td></td>                                                        
                                                    <td > <input type="submit" value="Simpan" style="margin-right:10px;"><input type="submit" onclick="location:admin.php" value ="BATAL"style="margin-right:10px;"></td>	                                             
                                                </tr>				
                                            </table>
                                        </form>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
              
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>