<?PHP 
    include ('setting/database.php');
?>
<!DOCTYPE html>
    <html lang="en" >
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
	        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title>Ecografía Junín :: Login</title>
	        <link rel='shortcut icon' href= "materials/icon/icon.png">
            <link rel="stylesheet" href="css/includes/login_style.css" />
        </head>
        <body>
            <div id="box_body">
                <div class="avatar" onclick="login()">
                    <div class="avatar_box">
                        <div div id="avatar_img">
			                <img src="materials/icon/icon-usuario.png" alt='Icon' class='img1' />            
                        </div>
                    </div>
                </div>

                <div id="Formbox">
                    <form action="controllers/main_login.php" method="POST">
                        <div id="boxInputName">
                            <div class="InputName">
                                <input type="text" class="name" name="user" required pattern='[A-Za-z Á-É-Í-Ó-Úá-é-í-ó-ú]+' maxlength="10"/>
                                <label class="name-label">User</label>
                            </div>
                        </div>
        
                        <div id="boxInputPass"> 
                            <div class="InputPass">
                                <input type="password" class="pass" name="password" required maxlength="20"/>
                                <label class="pass-label">Password</label>       
                            </div>
                        </div>
                        
                        <button type="submit" style="opacity: 0;"></button>
                    </form>
                </div>
            </div>
            
            <script src="js/insert/login_main.js"></script>
        </body>
</html>