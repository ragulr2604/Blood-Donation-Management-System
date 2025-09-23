<html>

<head>


    <title>Blood management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


</head>


<body>
    <div id="wrapper">



        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class=".col-lg-12">
                        <h1 class="page-header">Patient details</h1>
                    </div>
                </div>
                <div class="row">
                    <form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                        <div class="form-group text-center justify-content-center">

                            <input type="text" placeholder="enter patient name" style="width: 220px; height: 45px;" name="name" id="name" class="form-control demo-default" required>
                                
                          
                        </div>
                        
                        <div class="form-group center-aligned">
                            <button type="submit" class="btn btn-lg btn-success" name="submit">Search</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class=".col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of Available Donors
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                        <?php
                                        if (isset($_GET['submit'])) {
                                            include("../admin/dbconnect.php");
                                            $n = $_GET['name'];

                                            $qry = "select * from patient where name='$n'";
                                            $result = mysqli_query($conn, $qry);


                                            echo "
						<thead>
						<tr>
							<th>Name</th>
							<th>Gender</th>


							<th>Blood Group Need</th>
							<th>Hospital</th>
                            <th>City</th>
							<th>Contact</th>
                            <th colspan='2'>location(lat-long)</th>


						</tr>
						</thead>";

                                            while ($row = mysqli_fetch_array($result)) {
                                             
                         
                                                 echo"<tbody>
                                                 <tr>
                                                 <td>".$row['name']."</td>
                                                 <td>".$row['gender']."</td>

                                                 <td>".$row['bgroup']."</td>
                                                 <td>".$row['place']."</td>
                                                 <td>".$row['address']."</td>
                                                 <td>".$row['number']."</td>
                                                 <td>".$row['latitude']."</td>
                                                 <td>".$row['longitude']."</td>

                       
                                               </tr>
                                               </tbody>";
                                                 
                 
                                             
                                         }
                                        }
                 
                                         ?>
                   </table>
                   <div class="form-group center-aligned">
                            <button type="submit" class="btn btn-lg btn-success" name="acc">Accept</button>
                        </div>
                        <?php
                if(isset($_POST['acc']))
                {
                    $qry = "delete from patient where name='$n'";
                }
                ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>