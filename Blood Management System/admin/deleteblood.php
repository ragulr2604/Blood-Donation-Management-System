<html>

<head>

<title>Blood management System</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">

</head>


<body>
<div id="wrapper">

<?php include 'includes/nav.php'?>


<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Delete Blood Details</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of Request
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from patient";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
						<tr>
						<th>Name</th>
						<th>Gender</th>
						<th>Blood Group</th>
						<th>Age</th>
						<th>Mobile number</th>
						<th>Address</th>
						<th>Place</th>
							<th><i class='fa fa-pencil'></i></th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr class='gradeA'>
						  <td>" . $row['name'] . "</td>
						  <td>" . $row['gender'] . "</td>
						  <td>" . $row['bgroup'] . "</td>
						  <td>" . $row['age'] . "</td>
                          <td>" . $row['number'] . "</td>
						  <td>" . $row['address'] . "</td>
                          <td>" . $row['place'] . "</td>
						  <td><a href='deletebloodrecord.php?id=".$row['id']."'><i class='fa fa-trash' style='color:red'></i></a></td>

						</tr>
						<tbody>
						";
						}

						?>
						</table>
									
				</div>
				</div>		
		</div>
		</div>	
		</div>	
		</div>
		</div>
</div>

<td><a href='deletebloodrecord.php?id=".$row['id']."'>DELETE</a></td>

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