<?php
session_start();



?>
<html>
<head>
    <link rel="stylesheet" href="reg.css" />
    <script>
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
        function validate() {
        var mobNo = document.getElementById("contact").value;
        var currYear = new Date().getFullYear()
        var dob = document.getElementById("dob").value
        var dobArray = dob.split('-');
        var year = dobArray[0];
        var age = currYear - year;
        var weight = document.getElementById("weight").value
        if (strlen(mobNo) != 10 || isNaN(mobNo)) {
            document.getElementById('mob-msg').innerHTML = "Please Enter a 10 Digit Contact Number";
            return False;
        }
        if (age < 18 || age >= 65) {
            document.getElementById("age-msg").innerHTML = "Sorry, you cannot register as Donor, you must be between 18-65 years to donate Blood";
            return False;
        }
        if (weight < 40) {
            document.getElementById("weight-msg").innerHTML = "Sorry, you cannot register as Donor, you must at least 40 kg weight to donate Blood";
            return False;
        }
        return True;
        }

    </script>
</head>
<body>


    <div class="container">
        <header>
            Register as Donor
        </header>
        <form method="post" action="registration.php" class="reg" onsubmit="return validate()">
            <div class="formfirst">
                <div class="details personal">
                    <span class="title"><b>Personal Details</b></span>
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
                            <select name="bloodgroup">
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
                            <label><b>DOB</b></label>
                            <input type="date" name="dob" placeholder="enter dob" required />

                        </div>

                        <div class="input-field">
                        <label><b>Last Donated:</b></label>
			            <input id="date" name="date" type="date"  required />
                        </div>
                       
                        <div class="input-field">
                            <label><b>Mobile Number</b></label>
                            <input id="phone" type="tel" name="contact" placeholder="enter your number" required />

                        </div>
                        <div class="input-field">
                            <label><b>District/City</b></label>
                            <select name="address">
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

                        <div class="input-field">
                            <label><b>Weight</b></label>
                            <input type="number" name="weight" placeholder="enter weight" required /><span id="weight-msg"></span>

                        </div>

                        <div class="input-field">
                            <label><b>address</b></label>
                            <input type="text" name="place" placeholder="enter place" required />

                        </div>

                    </div>
                </div>
            </div>
            <br></br>

            <div style="text-align: center;">
                <label><b>Username</b></label>
                <input type="text" name="username" placeholder="enter username" style="outline: none;
                font-size: 14px;
                font-weight: 400;
                color: #333;
                border-radius: 5px;
                border: 1px solid #aaa;
                padding: 0 15px;
                height: 42px;
                margin: 8px 0;" required />
                <label><b>Password</b></label>
                <input type="password" name="password" placeholder="enter password" id="myInput" style="outline: none;
                font-size: 14px;
                font-weight: 400;
                color: #333;
                border-radius: 5px;
                border: 1px solid #aaa;
                padding: 0 15px;
                height: 42px;
                margin: 8px 0;"  required />
                            
                                      
                <label style="font-size: 14px; "><input type="checkbox" onclick="myFunction()">Show Password</label>

            </div>

            <br><br>

            <?php 
            include ('map.php'); ?>
        </form>
    </div>


    <?php
if (isset($_POST['name'])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $weight = $_POST["weight"];
    $bloodgroup = $_POST["bloodgroup"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $place = $_POST["place"];
    $date = $_POST["date"];
    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    include 'admin/dbconnect.php';
    //code after connection is successfull
    $qry = "insert into donor(name,gender,dob,weight,bloodgroup,address,contact,place,date,latitude,longitude,username,password) values ('$name','$gender','$dob','$weight','$bloodgroup','$address','$contact','$place','$date','$latitude','$longitude', '$username', '$password')";
    $result = mysqli_query($conn, $qry); //query executes

    if (!$result) {
        echo "ERROR";
    } else {
        echo "<script>alert('registration successfull')</script>";
        echo " <a href='login.php' div style='text-align: center'><h3>Go Back</h3>";
    }
}
?>

    

</body>
</html>