<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../images/icon.png" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Kotta+One&family=Metal+Mania&family=Mukta+Vaani:wght@800&display=swap" rel="stylesheet">
    <title>SignUp</title>
</head>
<body>
    <?php
    session_start();?>
    <div class="container">
    <?php include '../snippets/connect.php';?>
    <?php 
    //echo $_SERVER['PHP_SELF'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];$age = $_POST['age'];
    $mail = $_POST['mail'];$pword = $_POST['password'];
    $req = "SELECT * FROM `login_proj` WHERE mail='$mail'";
    $res = mysqli_query($con,$req);
    $num = mysqli_num_rows($res);    
    if($num == 0){
        $sql = "INSERT INTO `login_proj`(`name`,`age`,`mail`, `password`) VALUES 
        ('$name','$age','$mail','$pword');";
        if($con->query($sql) == true){
            echo '<script>alert("Submitted successfully...");</script>';
        }
        else{
            echo'<script>alert("Error!!");</script>';
        }
    }
    else{
        echo '<script>alert("Email already registered...")</script>';
    }
} 
?>
<h1 id="sU">SignUp</h1>
    <?php include '../snippets/form.php' ?>
    <script>document.getElementById("button").innerHTML = "SignUp"</script>
        <script>document.getElementById("extra").innerHTML = '<hr id=dividor><p><a id="eBut" href="login.php">Login</a></p>';</script>
    </div>
    
    <?php include '../snippets/footer.php' ?>
    <?php $con->close(); ?>
</body>
</html>