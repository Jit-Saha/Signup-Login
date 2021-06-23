<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Form</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <?php
    if($_SERVER['PHP_SELF']=='/ProjectLogin_Logout/Php/index.php'){
        echo '<input type="text" class="name" name="name" placeholder="Enter your Name here....." required>
        <br><input type="text" class="age" name="age" placeholder="Enter your Age here....." required><br>';
    }
    ?>
        <input type="email" class="mail" name="mail" placeholder="Enter your E-mail here....." required>
        <br>
        <input type="password" class="pword" name="password" placeholder="Enter your password here....." required>
         <br>
        <button onclick="" id="button">Submit</button>
        <br>
        <div id="extra"></div>       
    </form>
</body>
</html>