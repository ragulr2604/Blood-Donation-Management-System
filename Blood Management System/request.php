<?php
session_start();


?>
<html>
<head>
    <link rel="stylesheet" href="reg.css" />
    
</head>
<body>
<div id="wrapper">


<div id="page-wrapper">
    <div class="container">
        <header>
            Request For Blood
        </header>
        <form method="post" action="request.php" class="reg">
            <div class="formfirst">
                    <div class="fields">
                        <div class="input-field">
                            <label><b>Full Name</b></label>
                            <input id="first" type="text" name="name" placeholder="Full Name"  autofocus required />
                        </div>

                        <div class="input-field">
                            <label><b>Gender</b></label>
                            <select name="gender">
                                <option>Select</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>others</option>
                            </select>
                        </div>
                        

                        <div class="input-field"> 
                            <label><b>Blood Group</b></label>
                            <select name="bgroup">
                                <option>Select</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                        
                                </select>

                        </div>

                        <div class="input-field">
                        <label><b>Age</b></label>
			            <input id="last" type="text" placeholder="enter your age" name="age" />
                        </div>
                       
                        <div class="input-field">
                            <label><b>Mobile Number</b></label>
                            <input id="phone" type="number" name="number" placeholder="enter your number" required />

                        </div>
                        <div class="input-field">
                            <label><b>District/City</b></label>
                            <select name="address" id="address">
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

                    </div> 
                    <br>

                    <div  style="text-align: center;font-size:13px;">
                        <label><b>Enter the location[where to donate blood]and pincode </b></label>
			            <input id="last" type="text" placeholder="eg:gov hospital,kum,612001" name="place"
                        style="outline: none; font-size: 14px;font-weight: 400;
                                    color: #333; border-radius: 5px; border: 1px solid #aaa; padding: 0 15px;
                                    height: 42px; margin: 8px 0;" />
                    </div>
                
            </div>
            <br></br>
            <?php 
            include ('map.php'); ?>
        </form>
    </div>


    <?php
if (isset($_POST['name'])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $bgroup = $_POST["bgroup"];
    $age=$_POST["age"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $place = $_POST["place"];
    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];

    include 'admin/dbconnect.php';
    //code after connection is successfull
    $qry = "insert into patient(name,gender,bgroup,age,address,number,place,latitude,longitude) values ('$name','$gender','$bgroup','$age','$address','$number','$place','$latitude','$longitude')";
    $result = mysqli_query($conn, $qry); //query executes

    if (!$result) {
        echo "ERROR";
    } else {
        echo "<script>alert('Request has been recorded')</script>";
        
    }
}
?>

   
</div>
</div>


</body>
</html>
