<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="styleSheet" href="reset.css">    
    <link rel="styleSheet" href="style.css?ts=<?=time()?>">
</head>
<body>

    <?php
    include_once 'header.php';
    ?>

    <section>

        <form class="signup-form" action="includes/signup.inc.php" method="post">
            <h2>Sign Up</h2>
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <button class="submitButton" type="submit" name="submit">Sign up</button>
        </form><?php
    
        if (isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields.</p>";           
            }
            if ($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username.</p>";           
            }
            if ($_GET["error"] == "invalidEmail"){
                echo "<p>Choose a proper email.</p>";           
            }
            if ($_GET["error"] == "passwordssontmatch"){
                echo "<p>Passwords doesn't match.</p>";           
            }
            if ($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong, try again.</p>";           
            }
            if ($_GET["error"] == "usernametaken"){
                echo "<p>Username already taken.</p>";           
            }
            if ($_GET["error"] == "none"){
                echo "<p>you have signed up</p>";           
        }
    }
    
    ?>
    </section>

    


    
</body>
</html>