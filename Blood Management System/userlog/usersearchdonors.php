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
                        <h1 class="page-header">Search Donors by City and Blood Group</h1>
                    </div>
                </div>
                <div class="row">
                    <form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                        <div class="form-group text-center justify-content-center">

                            <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                                <option>Select</option>
                                <option>Ariyalur</option>
                                <option>Chengalpattu</option>
                                <option>Chennai</option>
                                <option>Coimbatore</option>
                                <option>Cuddalore</option>
                                <option>Dharmapuri</option>
                                <option>Dindigul</option>
                                <option>Erode</option>
                                <option>Kallakurichi</option>
                                <option>Kancheepuram</option>
                                <option>Karur</option>
                                <option>Krishnagiri</option>
                                <option>Kumbakonam</option>
                                <option>Madurai</option>
                                <option>Mayiladurai</option>
                                <option>Nagapattinam</option>
                                <option>Kanniyakumari</option>
                                <option>Namakkal</option>
                                <option>Perambalur</option>
                                <option>Pudukottai</option>
                                <option>Ramanathapuram</option>
                                <option>Ranipet</option>
                                <option>Salem</option>
                                <option>Sivagangai</option>
                                <option>Tenkasi</option>
                                <option>Thanjavur</option>
                                <option>Theni</option>
                                <option>Thiruvallur</option>
                                <option>Thiruvarur</option>
                                <option>Thoothukudi</option>
                                <option>Trichirappalli</option>
                                <option>Thirunelveli</option>
                                <option>Tirupathur</option>
                                <option>Tiruppur</option>
                                <option>Tiruvannamalai</option>
                                <option>Vellore</option>
                                <option>Viluppuram</option>
                                <option>Virudhunagar</option>
                        
                            </select>
                        </div>
                        <div class="form-group center-aligned">
                            <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px" required>
                                <!-- <option>Select Blood Group</option> -->
                                <option>Select</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
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
                                            $city_info = $_GET['city'];
                                            $blood_group_info = $_GET['blood_group'];
                                            $qry = "select * from donor where address='$city_info' and bloodgroup='$blood_group_info'";
                                            $result = mysqli_query($conn, $qry);


                                            echo "
						<thead>
						<tr>
							<th>Name</th>
							<th>Gender</th>
							<th>D.O.B</th>
							<th>Weight</th>
							<th>Blood Group</th>
							<th>Address</th>
                            <th>City</th>
							<th>Contact</th>
                            <th>Last Donated</th>
						</tr>
						</thead>";

                                            while ($row = mysqli_fetch_array($result)) {
                                                $d=$row['date'];
                                                $current=date("Y/m/d");
                                             $month=((strtotime($current) - strtotime($d))/60/60/24)/30;
                                             if($month<3.0)
                                             {
                                           echo"<tbody>
                                           <tr>
                                           <td><font color='red'>".$row['name']."</font></td>
                                           <td><font color='red'>".$row['gender']."</font></td>
                                           <td><font color='red'>".$row['dob']."</font></td>
                                           <td><font color='red'>".$row['weight']."</font></td>
                                           <td><font color='red'>".$row['bloodgroup']."</font></td>
                                           <td><font color='red'>".$row['place']."</font></td>
                                           <td><font color='red'>".$row['address']."</font></td>
                                           <td><font color='red'>".$row['contact']."</font></td>
                                           <td><font color='red'>".$row['date']."</font></td>
                 
                                         </tr>
                                         </tbody>";
                                             }
                                             else{
                                                 echo"<tbody>
                                                 <tr>
                                                 <td>".$row['name']."</td>
                                                 <td>".$row['gender']."</td>
                                                 <td>".$row['dob']."</td>
                                                 <td>".$row['weight']."</td>
                                                 <td>".$row['bloodgroup']."</td>
                                                 <td>".$row['place']."</td>
                                                 <td>".$row['address']."</td>
                                                 <td>".$row['contact']."</td>
                                                 <td>".$row['date']."</td>
                       
                                               </tr>
                                               </tbody>";
                                                 
                 
                                             }
                                         }
                                        }
                 
                                         ?>
                                            <tr>
    <th colspan="9" style="text-align: center;color:red;">Note: [Red colored are not eligible for Donation] </th>
   </tr>
                                    </table>

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