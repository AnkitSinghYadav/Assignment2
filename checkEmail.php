<?php 

require 'functions/functions.php';

$conn = connect();
 $email = $_REQUEST["request"];
//$email = "ahjdsnkitmsoft@gmail.com";

$sql = "Select * from users where user_email ='$email' ";
$query = mysqli_query($conn, $sql);
if(!$query){
    echo mysqli_error($conn);
}
if(mysqli_num_rows($query) == 0){
    echo 1;
}
else
    echo 0;

?>