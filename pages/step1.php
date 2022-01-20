<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Portal - Step 1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    Register Here
                </div>
                    <a href="login.php">
						<input class="login_button" type="submit" name="login_fb"  value="Login With Facebook">
					</a>

            <h2>Or</h2>

            <div>
            <center><form method="post" action="../config/create_account.php" class="register_form">
                <table>
                    <h3>Create New Account</h3>
                    <tr>
                        <td>Username : </td>
                        <td><input type="text" name="username" class="new_username"/></td>
                        <th> <br></th>
                    </tr>
                    
                    <tr>
                        <td>Password : </td>
                        <td><input type="text" name="password" class="new_password"/></td>
                    </tr>
                    
                    <tr>
                        <td>First Name : </td>
                        <td><input type="text" name="first_name" class="new_first"/></td>
                    </tr>
                    
                    <tr>
                        <td>Last Name : </td>
                        <td><input type="text" name="last_name" class="new_last"/></td>
                    </tr>
                    
                    <tr>
                        <td>E-mail : </td>
                        <td><input type="text" name="email" class="new_email"/></td>
                    </tr>
                    <tr>
                        <td>City : </td>
                        <td><input type="text" name="email" class="new_email"/></td>
                    </tr>
                    <tr>
                        <td>District : </td>
                        <td><input type="text" name="email" class="new_email"/></td>
                    </tr>
                    <tr>
                        <td>Country : </td>
                        <td><input type="text" name="email" class="new_email"/></td>
                    </tr>
                </table>

                <br>
                <input type= "submit" name="submit" class="button" value="Register"/>
            </form></center>
            </div>
            <p>
                Why Registration? <br> Generally Registration process is required for several web sites and web applications. As an example if the user need to revisit the web site with the previous settings and configurations registration is a key component. But this is just a web portal web application which is not a session or cookie based web application. Therefore If you do not want to register for this web application it is not a problem. You can skip registration by simply <a href="step2.php">click here</a>.
            </p>
            </div>
        </div>
    </body>
</html>
