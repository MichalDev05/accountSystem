    <?php
        session_start();
    
    ?>
    
    
    
    
    
    <nav>
        <div class="wrapper">
            <?php
                if (isset($_SESSION["useruid"])){
                    echo "<a href='' class='navText'>Profile page</a>";
                    echo  "<a href='' class='navText¨'>Logout</a>";

                } else {
                    echo  "<a href='login.php' class='navText'>Login</a>";
                    echo "<a href='signup.php' class='navText'>Sign up</a>";

                }
            ?>



        </div>
    </nav>