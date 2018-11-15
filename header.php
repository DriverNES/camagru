<head>
    <title>Camagru</title>
    <div id="heading" class="header_div">
    <form action="" method="post">
        <div style="position:fixed;leftt:1vw;">
        <table>
            <tr>
            <td><input type="submit" class="btn1" name="btn" value="home"></td>
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
                        '<td><input type="submit" class="btn1" name="logout-btn" id="logout-btn" onclick="destroy_session();" value="log out"></td>'.
                        '<td><input type="submit" class="btn1" name="settings-btn" value="settings"></td>';
                    }
                    else
                        echo '<td><input type="submit" class="btn1" name="login-btn" value="login/sign up"></td>';
                    ?>
            </tr>
            </table>
        </div>
    </form>
    </div>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet"> 
    <script>
        function destroy_session(){
            var xmlhttp = getXmlHttp();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open('GET','./test.php', true);
            xmlhttp.onreadystatechange=function(){
            if (xmlhttp.readyState == 4){
                if(xmlhttp.status == 200){
                    alert(xmlhttp.responseText);
                }
            }
            };
            xmlhttp.send(null);
        }
    </script>
</head>
</html>