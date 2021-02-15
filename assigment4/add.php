<?php
include('connect1.php');
?>

<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $sql="INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ( '$username', '$email', '$gender', '$city')";
    mysqli_query($conn,$sql);
}
else{
    echo"please click submit button";
}
?>
<html>
    <head>
        <title>Form with database</title>
    </head>
    <body>
        <form method ="POST" action="add.php">
            USERNAME :
            <input type ="text" name="username" placeholder="type your username" required><br>
            E-MAIL :
            <input type ="email" name="email" placeholder="type your email addres" required><br>
            GENDER :<br>
            MALE :
            <input type ="radio" name="gender" value ="male" checked><br>
            FEMALE :
            <input type ="radio" name="gender" value ="female" checked><br>
            SELECT CITY : <select name ="city">
                <option value ="Delhi">DELHI</option>
                <option value ="Faridabad">FARIDABAD</option>
                <option value ="Gurugram">GURUGRAM</option>
                <option value ="Gaziyabad">GAZIYABAD</option>
                <option value ="Dwarika">DWARIKA</option>
            </select><br>
            <input type="submit"  name="submit" value ="submit Data">
        </form>
    </body>
</html>