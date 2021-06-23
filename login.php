<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/icon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Kotta+One&family=Metal+Mania&family=Mukta+Vaani:wght@800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <?php session_start();
        $_SESSION['loggedin'] = false; 
    ?>
    <div class="container">
        <div id="containerL">
        <?php include '../snippets/connect.php'; ?>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $mail = $_POST['mail'];$pword = $_POST['password'];
                $sql = "SELECT * FROM `login_proj` WHERE mail='$mail' AND password='$pword'";
                $res = mysqli_query($con,$sql);
                $num = mysqli_num_rows($res);
                $sql = "SELECT * FROM `login_proj` WHERE mail='$mail'";
                $res = mysqli_query($con,$sql);
                $numE = mysqli_num_rows($res);
                $sql = "SELECT * FROM `login_proj` WHERE password='$pword'";
                $res = mysqli_query($con,$sql);//$res contains a 
                $numP = mysqli_num_rows($res);
                if($num!=1){
                    if($numP==0 and $numE>0){
                        echo '<script>alert("Incorrect Password")</script>';    
                    }
                    else{
                        echo '<script>alert("Incorrect Credentials\nRegister to login...")</script>';
                    }
                }
                if($num==1){
                    $_SESSION['loggedin']=true;
                    header("location: Welcome.php");
                }
            }
        ?>
        <h1 id="sU">LOGIN</h1>
        <?php include '../snippets/form.php'; ?>
        <script>document.getElementById("button").innerHTML = "Login<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-door-open\" viewBox=\"0 0 16 16\"><path d=\"M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z\"/><path d=\"M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z\"/></svg>"</script>
        <script>document.getElementById("extra").innerHTML = '<hr id=dividor><p><a id="eBut" href="index.php">SignUp</a> <p>';</script>
        </div>
    </div>
        
    <?php include '../snippets/footer.php' ?>
    <?php $con->close();?>
</body>
</html>