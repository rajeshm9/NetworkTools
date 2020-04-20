 <?php
    if (isset($_POST["user"], $_POST["pass"])){
        // Make sure the token from the login form is the same as in the cookie
        if (isset($_POST["CSRFtoken"], $_COOKIE["CSRFtoken"])){
            if ($_POST["CSRFtoken"] == $_COOKIE["CSRFtoken"]){
                // code for checking the user and password
		print_r ($_POST);
            }
        }
    } else {
        $token = bin2hex(openssl_random_pseudo_bytes(16));
        setcookie("CSRFtoken", $token, time() + 60 * 60 * 24);
        echo '
            <form method="post">
                <input name="user">
                <input name="pass" type="password">
                <input name="CSRFtoken" type="hidden" value="' . $token . '">
                <input type="submit">
            </form>
        ';
    }
?>
