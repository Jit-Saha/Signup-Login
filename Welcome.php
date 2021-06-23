<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Kotta+One&family=Metal+Mania&family=Mukta+Vaani:wght@800&family=Viaoda+Libre&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="shortcut icon" href="../images/icon.png" type="image/png">
<title>Welcome</title>
</head>
<body>
<?php
session_start();
    if( !isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false ){
        header('location: index.php');
        exit;
    }
?>
<div class="headW">
    <div class="HeadButton">
<button id="but" onclick="funct1()">LogOut<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg></button>
</div>
  <div id="titleW"><h1>JOKER IS TRIGGERED(J.I.T.)<h1>
      <h2>Keep it Simple.....</h2>
    </div>
<div id="titleWlt"></div>
</div>
<hr> 
    <script>
        function funct1(){
            var var1=true;
            <?php
             $_SESSION['loggedin']=false; ?>
             //var1= "<?php //echo $_SESSION['loggedin'];?>";/***************************************************************/
        // console.log(var1); 
         window.location = "index.php";

        }
    </script>
    <div class="containW">
    <div class="bheadW">
    <h1 id="headerW">WELCOME...</h1>
    </div>
    <div class="bodyWelcome">

    </div>
    </div>
    <?php include '../snippets/footer.php' ?>
</body>
</html>
