<?php 
require 'functions/functions.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:home.php");
}
session_destroy();
session_start();
ob_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>Social Network</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <style>
    .container {
        margin: 40px auto;
        width: 400px;
    }

    .content {
        padding: 30px;
        background-color: white;
        box-shadow: 0 0 5px #4267b2;
    }
    </style>
</head>

<body>
    <h1></h1>
    <div class="container">
        <div class="tab">
            <button class="tablink active" onclick="openTab(event,'signin')" id="link1">Login</button>
            <button class="tablink" onclick="openTab(event,'signup')" id="link2">Sign Up</button>
        </div>
        <div class="content">
            <div class="tabcontent" id="signin">
                <form method="post" onsubmit="return validateLogin()">

                    <input type="text" name="useremail" id="loginuseremail"
                        placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username">
                    <div class="required"></div>
                    <br>

                    <input type="password" name="userpass" id="loginuserpass"
                        placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;password">
                    <div class="required"></div>
                    <br><br>
                    <input type="submit" value="Login" name="login">
                </form>
            </div>
            <div class="tabcontent" id="signup">
                <form method="post" onsubmit="return validateRegister()">
                    <!--Package One-->

                    <!--First Name-->
                    <label>First Name<span>*</span></label><br>
                    <input type="text" name="userfirstname" id="userfirstname">
                    <div class="required"></div>
                    <br>
                    <!--Last Name-->
                    <label>Last Name<span>*</span></label><br>
                    <input type="text" name="userlastname" id="userlastname">
                    <div class="required"></div>
                    <br>
                    <!--Nickname-->
                    <label>Nickname</label><br>
                    <input type="text" name="usernickname" id="usernickname">
                    <div class="required"></div>
                    <br>
                    <!--Password-->
                    <label>Password<span>*</span></label><br>
                    <input type="password" name="userpass" id="userpass">
                    <div class="required"></div>
                    <br>
                    <!--Confirm Password-->
                    <label>Confirm Password<span>*</span></label><br>
                    <input type="password" name="userpassconfirm" id="userpassconfirm">
                    <div class="required"></div>
                    <br>
                    <!--Email-->
                    <label>Email<span>*</span></label><br>
                    <input type="text" name="useremail" id="useremail">
                    <div class="required"></div>
                    <br>
                    <!--Birth Date-->
                    Birth Date<span>*</span><br>
                    <select name="selectday">
                        <?php
                    for($i=1; $i<=31; $i++){
                        echo '<option value="'. $i .'">'. $i .'</option>';
                    }
                    ?>
                    </select>
                    <select name="selectmonth">
                        <?php
                    echo '<option value="1">January</option>';
                    echo '<option value="2">February</option>';
                    echo '<option value="3">March</option>';
                    echo '<option value="4">April</option>';
                    echo '<option value="5">May</option>';
                    echo '<option value="6">June</option>';
                    echo '<option value="7">July</option>';
                    echo '<option value="8">August</option>';
                    echo '<option value="9">September</option>';
                    echo '<option value="10">October</option>';
                    echo '<option value="11">Novemeber</option>';
                    echo '<option value="12">December</option>';
                    ?>
                    </select>
                    <select name="selectyear">
                        <?php
                    for($i=2017; $i>=1900; $i--){
                        if($i == 1996){
                            echo '<option value="'. $i .'" selected>'. $i .'</option>';
                        }
                        echo '<option value="'. $i .'">'. $i .'</option>';
                    }
                    ?>
                    </select>
                    <br><br>
                    <!--Gender-->
                    <input type="radio" name="usergender" value="M" id="malegender" class="usergender">
                    <label>Male</label>
                    <input type="radio" name="usergender" value="F" id="femalegender" class="usergender">
                    <label>Female</label>
                    <div class="required"></div>
                    <br>
                    <!--Hometown-->
                    <label>Hometown</label><br>
                    <input type="text" name="userhometown" id="userhometown">
                    <br>
                    <!-- Package Two
                    <h2>Additional Information</h2>
                    <hr>
                  
                    <input type="radio" name="userstatus" value="S" id="singlestatus">
                    <label>Single</label>
                    <input type="radio" name="userstatus" value="E" id="engagedstatus">
                    <label>Engaged</label>
                    <input type="radio" name="userstatus" value="M" id="marriedstatus">
                    <label>Married</label>
                    <br><br>
                   
                    <label>About Me</label><br>
                    <textarea rows="12" name="userabout" id="userabout"></textarea> -->
                    <br><br>
                    <input type="submit" value="Create Account" name="register">
                </form>
            </div>
        </div>
    </div>

</body>
<script>
    function validateLogin() {
    clearRequiredFields();
    var required = document.getElementsByClassName("required");
    var useremail = document.getElementById("loginuseremail").value;
    var userpass = document.getElementById("loginuserpass").value;
    var result = true;
    if (useremail == "") {
        required[0].innerHTML = "This field cannot be empty.";
        result = false;
    } else if (!validateEmail(useremail)) {
        required[0].innerHTML = "Invalid Email Format.";
        result = false;
    }
    if (userpass == "") {
        required[1].innerHTML = "This field cannot be empty.";
        result = false;
    }
    return result;
}
<script>
function validateRegister() {
    clearRequiredFields();
    var required = document.getElementsByClassName("required");
    var userfirstname = document.getElementById("userfirstname").value;
    var userlastname = document.getElementById("userlastname").value;
    var userpass = document.getElementById("userpass").value;
    var userpassconfirm = document.getElementById("userpassconfirm").value;
    var useremail = document.getElementById("useremail").value;
    var usergender = document.getElementsByClassName("usergender");
    var result = true;
    if (userfirstname == "") {
        required[2].innerHTML = "First Name cannot be empty.";
        result = false;
    }
    if (userfirstname.length <= 3) {
        required[2].innerHTML = "First Name should be more than 3 characters.";
        result = false;
    }
    if (userlastname == "") {
        required[3].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (userpass == "") {
        required[5].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (userpass.length < 8) {
        required[5].innerHTML = "**Password length must be atleast 8 characters";
        result = false;
    }

    if (userpass.length > 15) {
        required[5].innerHTML = "**Password length must not exceed 15 characters";
        result = false;
    }

    if (userpassconfirm == "") {
        required[6].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (userpass != "" && userpassconfirm != "" && userpass != userpassconfirm) {
        required[5].innerHTML = "Passwords doesn't match.";
        required[6].innerHTML = "Passwords doesn't match.";
        result = false;
    }
    if (useremail == "") {
        required[7].innerHTML = "This field cannot be empty.";
        result = false;
    } else if (!validateEmail(useremail)) {
        required[7].innerHTML = "Invalid Email Format.";
        result = false;
    }
    if (!usergender[0].checked && !usergender[1].checked) {
        required[8].innerHTML = "You must select your gender.";
        result = false;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "checkEmail.php?request=" + useremail, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            // Response
            var response = this.responseText;
            //console.log(response, "   ", " Ajax block")
            //alert(response)
            if (response == 0) {
                required[7].innerHTML = "Duplicate email.";
                result = false
            }
        }
    };
    xhttp.send();
    return result;
}
</script>
<script src="resources/js/main.js"></script>

</html>

<?php
$conn = connect();
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // A form is posted
    if (isset($_POST['login'])) { // Login process
        $useremail = $_POST['useremail'];
        $userpass = md5($_POST['userpass']);
        $query = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '$useremail' AND user_password = '$userpass'");
        if($query){
            if(mysqli_num_rows($query) == 1) {
                $row = mysqli_fetch_assoc($query);
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_firstname'] . " " . $row['user_lastname'];
                header("location:home.php");
            }
            else {
                ?> <script>
document.getElementsByClassName("required")[0].innerHTML = "Invalid Login Credentials.";
document.getElementsByClassName("required")[1].innerHTML = "Invalid Login Credentials.";
</script> <?php
            }
        } else{
            echo mysqli_error($conn);
        }
    }
    if (isset($_POST['register'])) { // Register process
        // Retrieve Data
        $userfirstname = $_POST['userfirstname'];
        $userlastname = $_POST['userlastname'];
        $usernickname = $_POST['usernickname'];
        $userpassword = md5($_POST['userpass']);
        $useremail = $_POST['useremail'];
        $userbirthdate = $_POST['selectyear'] . '-' . $_POST['selectmonth'] . '-' . $_POST['selectday'];
        $usergender = $_POST['usergender'];
        $userhometown = $_POST['userhometown'];
        $userabout = $_POST['userabout'];
        if (isset($_POST['userstatus'])){
            $userstatus = $_POST['userstatus'];
        }
        else{
            $userstatus = NULL;
        }
        // Check for Some Unique Constraints
        $query = mysqli_query($conn, "SELECT user_nickname, user_email FROM users WHERE user_nickname = '$usernickname' OR user_email = '$useremail'");
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            if($usernickname == $row['user_nickname'] && !empty($usernickname)){
                ?> <script>
document.getElementsByClassName("required")[4].innerHTML = "This Nickname already exists.";
</script> <?php
            }
            if($useremail == $row['user_email']){
                ?> <script>
document.getElementsByClassName("required")[7].innerHTML = "This Email already exists.";
</script> <?php
            }
        }
        // Insert Data
        $sql = "INSERT INTO users(user_firstname, user_lastname, user_nickname, user_password, user_email, user_gender, user_birthdate, user_status, user_about, user_hometown)
                VALUES ('$userfirstname', '$userlastname', '$usernickname', '$userpassword', '$useremail', '$usergender', '$userbirthdate', '$userstatus', '$userabout', '$userhometown')";
        $query = mysqli_query($conn, $sql);
        if($query){
            $query = mysqli_query($conn, "SELECT user_id FROM users WHERE user_email = '$useremail'");
            $row = mysqli_fetch_assoc($query);
            $_SESSION['user_id'] = $row['user_id'];
            header("location:home.php");
        }
    }
}
?>