<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web Portal - Step 5</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    Enter your Banking Details
                </div>

                <div>
            <center><form method="post" action="../config/banking.php" class="register_form">
                <table>
                    <h4>These details use to send you the cash price.</h4>
                    <tr>
                        <td>Full Name : </td>
                        <td><input type="text" name="username" class="new_username"/></td>
                        <th> <br></th>
                    </tr>
                    
                    <tr>
                        <td>Bank Name : </td>
                        <td><input type="text" name="first_name" class="new_first"/></td>
                    </tr>
                    
                    <tr>
                        <td>Account Number : </td>
                        <td><input type="text" name="last_name" class="new_last"/></td>
                    </tr>
                    
                    <tr>
                        <td>Credit/Debit Card Number : </td>
                        <td><input type="text" name="credit" class="new_email"/></td>
                    </tr>
                    <tr>
                        <td>Valid Till : </td>
                        <td><input type="text" name="till" class="new_email"/></td>
                    </tr>
                    <tr>
                        <td>CSV : </td>
                        <td><input type="text" name="csv" class="new_email"/></td>
                    </tr>
                </table>

                <br>
                <input type= "submit" name="submit" class="login_button" value="Finish"/>
                
            </form></center>
            </div>
				<br>
                <a href="final.php">
					<input type= "submit" name="cancel" class="button" value="Cancel"/>
				</a>    
                </form>
            </div>
        </div>
    </body>
</html>
