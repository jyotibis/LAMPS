<?php
include('connect1.php');
?>

<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$contact = $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update'])){
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['gender'];
$city = $_POST['city'];

$sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
if(mysqli_query($conn, $sql)){
    echo "Data updated successfully...";
    header("Location:details.php");
}
else{
    echo "Updation failed..";
}
}
?>
<html>
<head>
    <title>HTML Forms</title>
</head>
<body>
<form method="POST" action="edit.php?id=<?php echo "$id"?>">
USERNAME <input type="text" name="username" value=<?php echo "$username" ?> placeholder="Type Your Username" required><br>
E-MAIL <input type="email" name="email" value=<?php echo "$email" ?> placeholder="Type Your E-mail" required><br>
GENDER 
<br>
MALE
<input type="radio" name="gender" value=<?php echo "$gender" ?> checked><br>
FEMALE
<input type="radio" name="gender" value=<?php echo "$gender" ?> checked><br>
Select City <select name="city">
    <option value="Delhi" <?php if($city=="Delhi"){echo "selected";}?>>DELHI</option>
    <option value="Faridabad" <?php if($city=="Faridabad"){echo "selected";}?>>FARIDABAD</option>
    <option value="Gurugram" <?php if($city=="Gurugram"){echo "selected";}?>>GURUGRAM</option>
    <option value="Gaziyabad" <?php if($city=="Gaziyabad"){echo "selected";}?>>GAZIYABAD</option>
    <option value="Dwarika" <?php if($city=="Dwarika"){echo "selected";}?>>DWARIKA</option>
</select><br>
<input type="submit" name="update" value="Update">
</form>
</body>
</html>
