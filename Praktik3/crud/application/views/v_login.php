<!-- Form Login User untuk masuk ke CRUD -->
<!DOCTYPE html>
<html>

<head>
    <title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
</head>

<body>
    <center>
        <h1>Membuat Login Dengan CodeIgniter <br /> www.malasngoding.com</h1>
        <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>