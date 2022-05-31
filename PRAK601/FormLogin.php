<?php
require "Login.php";

if (!isset($_SESSION['nomor_member'])) :
?>
    <!doctype html>
    <html lang="en">
        <form method="POST">
                        <label for="nomor_member">Nomor Member</label>
                        <input type="text" id="nomor_member" name="nomor_member"><br/>
                        <label for="password">Password</label>
                        <input name="password" type="password" id="password">
                    <button name="masuk" type="submit">Masuk</button>
                </form>
    </body>

    </html>
<?php
else :
    header("location: index.php");
endif;
?>

<?php
if (isset($_POST['masuk'])) {
    session_start();
    login($_POST['nomor_member'], $_POST['password']);
    header("location:index.php");
}
?>