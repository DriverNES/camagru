<?php
    session_start();
    if($_POST["logout-btn"] == "log out"){
        session_destroy();
        header('Location: signup.php');
    }
    else if($_POST["login-btn"] == "login/sign up"){
        header('Location: signup.php');
    }
    else if($_POST[""])
?>
<head>
    <title>Camagru</title>
    <div id="heading" class="header_div">
    <form action="" method="post">
        <div style="position:fixed;leftt:1vw;">
        <table>
            <tr>
            <td><input type="submit" class="header_button" name="btn" value="home"></td>
                <?php
                    if($_SESSION["username"] != "")
                    {
                        echo
                        '<td><input type="submit" class="header_button" name="btn" value="Welcome '.$_SESSION["username"].'"></td>';
                    }
                ?>
            </tr>
        </table>
        </div>
        <div style="position:fixed;right:1vw;">
        <table>
            <tr>
                <?php
                    if($_SESSION["username"] != "")
                    {
                        echo
                        '<td><input type="submit" class="header_button" name="logout-btn" id="logout-btn" value="log out"></td>'.
                        '<td><input type="submit" class="header_button" name="settings-btn" value="settings"></td>';
                    }
                    else
                        echo '<td><input type="submit" class="header_button" name="login-btn" value="login/sign up"></td>';
                    ?>
            </tr>
            </table>
        </div>
    </form>
    </div>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet"> 
</head>
</html>