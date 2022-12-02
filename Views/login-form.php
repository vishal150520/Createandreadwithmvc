<?php include ('head.php');
?>

<form action='login.php' method='post'>
    <table align="center">
        <tr>
            <td><?php echo $errs ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type='text' name='login'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type='password' name='password'></td>
        </tr>
        <tr>
            <td><input type='submit' value='login'></td>
        </tr>
    </table>
</form>
<?php
include ('foot.php');