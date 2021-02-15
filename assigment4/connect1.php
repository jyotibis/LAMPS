 <?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "web2";

$conn = mysqli_connect($hostname, $username, $password,$databasename);
if($conn)
{
    echo "successful";
}
else{
    echo "failed"+mysqli_connect_error();
}
?>