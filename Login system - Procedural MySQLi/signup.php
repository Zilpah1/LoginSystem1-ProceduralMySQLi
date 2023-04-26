<?php
include_once 'header.php';

?>
    <section class="signup-form">
        <h2>Sign Up</h2>
        <div class="signup-form-form">
       <form action="includes/signup.inc.php" method="post">
           <input type="text" name="name" placeholder="Full Name..."><br>
           <input type="text" name="email" placeholder="Email..."><br>
           <input type="text" name="uid" placeholder="UserName..."><br>
           <input type="password" name="pwd" placeholder="Password..."><br>
           <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
           <Button type="submit" name="submit">Sign Up</Button>


       </form>
        </div>

        <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        elseif($_GET["error"] == "invaliduid"){
            echo "<p>Choose proper username</p>";

        }
        elseif($_GET["error"] == "invalidemail"){
            echo "<p>Choose proper email</p>";

        }
        elseif($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Passwords don't match</p>";

        }
        elseif($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, try again!</p>";

        }
        elseif($_GET["error"] == "usernametaken"){
            echo "<p>Username already taken!</p>";

        }
        elseif($_GET["error"] == "none"){
            echo "<p>You have signed up!</p>";

        }

    }
    ?>
    </section>

   
<?php
include_once 'footer.php';

?>