<?php
session_start();



?>
<html>
<head>
    <link rel="stylesheet" href="reg.css" />
</head>
<body>
    <div class="container">
        <header>
            Patient Details
        </header>
        <form method="post" class="reg">
            <div class="formfirst">
                <div class="details personal">

                    <div class="fields">

                    <div class="input-field">
                            <label><b>Enter the patient name:</b></label>
                            <input id="first" type="text" name="name"   autofocus  />
                    </div>

                    
                    
                    </div>
                    
                    <input name="sub" type="submit" value="Submit" style="background-color:#1797DB;font-size:18px;
                align-items:center;justify-content:center;height:45px;max-width:100px;width:200%;border:none;outline:none;
                color:white;border-radius:5px;margin:25px 0;
                transition:all 0.3s linear; cursor:pointer;" />
                </div>           
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
                                        
                 
                                         ?>

                                    </table>

                                </div>
                            </div>

            <?php
                if(isset($_POST['acc']))
                {
                  $id=$_POST['id'];
                  $count=0;
                
                
                    $q=$db->prepare("DELETE FROM `patient` WHERE id='$id'");
                    $count=$db->query("SELECT * FROM patient WHERE id='$id'")->fetchColumn();
                
                
                          if($q->execute() && $count!=0){
                              echo "<script>alert('you accept the request')</script>";
                              
                            header('Location: https://www.google.com/maps/@10.9398379,79.3240221,15z?entry=ttu'); 
                            exit();

                          }
                          else{
                              echo "<script>alert('Failed!')</script>";
                          }
                }

            ?>
            
                


        </form>
        
    </div>
</body>
</html>
