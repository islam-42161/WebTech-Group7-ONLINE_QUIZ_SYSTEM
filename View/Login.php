<?php include '../Control/LoginAuth.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
    <table>
        <tr>
            <td><label for="username_login">Username</label></td>
            <td><input type="text" name="username_login" id="username_login_id" 
            value=<?php
            if(isset($_COOKIE["username"])){

                echo($_COOKIE['username']);
            }
            ?>  

            ></td>
            
        </tr>
        <tr>
        <td><label for="password_login">Password</label></td>
            <td><input type="password" name="password_login" id="password_login_id"
            value=<?php
            if(isset($_COOKIE["password"])){

                echo($_COOKIE['password']);
            }
            ?>

            ></td>
        </tr>
        <tr>
            <td>Login as:</td>
            <td>
            <select name="usertype" id="usertype_id" 
                value=<?php
                echo($_COOKIE['user_type']);
                ?>
                >
                    <option value="admin" <?php 
                    if(isset($_POST['usertype']) && $_POST['usertype']=='admin'){
                        echo(" selected");
                    }
                    ?> >Admin</option>
                    <option value="guest" <?php 
                    if(isset($_POST['usertype']) && $_POST['usertype']=='guest'){
                        
                        echo(" selected");
                    }
                    ?>>Guest</option>
                    <option value="teacher" <?php 
                    if(isset($_POST['usertype']) && $_POST['usertype']=='teacher'){
                        
                        echo(" selected");
                    }
                    ?>>Teacher</option>
                    <option value="student" <?php 
                    if(isset($_POST['usertype']) && $_POST['usertype']=='student'){
                        
                        echo(" selected");
                    }
                    ?>>Student</option>
                </select>

            </td>
    </tr>
    <tr>
        <td>
        <?php
        if(isset($_POST['proceed'])){
            if($_POST['usertype'] == 'admin'){

                echo('Admin Credential: <input type="password" name="admin_cred" id="admin_cred_id">');
            }
        }
        ?>
        </td>
        <td>
            <button name="proceed" type="submit">Proceed</button>
        </td>
    </tr>
    </table>
    </form>

    
</body>
</html>