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

        <form class="signup-form" action="includes/login.inc.php" method="post">
            <h2>Log In</h2>
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button class="submitButton" type="submit" name="submit">Log In</button>


            <?php
            if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields.</p>";           
                }
                if ($_GET["error"] == "emailorusernamedontexist"){
                    echo "<p>Email or username doesn't exist.</p>";           
                }
                if ($_GET["error"] == "wrongpassword"){
                    echo "<p>Worng password.</p>";           
                }
            }
                
            ?>

        </form>
    </section>
    

</body>
</html>