<?php 
require_once("../php/conexion.php");
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
    $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $LoginRS__query=sprintf("SELECT * FROM usuarios WHERE username = '$username'  AND password = '$password' "); 
    $LoginRS = $conexion->query($LoginRS__query) or die("ERROR");
    $row = $LoginRS->fetch_assoc();
    $MM_fldUserAuthorization = "../admin/noticias.php";
    $MM_redirectLoginSuccess = "../admin/noticias.php";
    $MM_redirectLoginFailed = "../admin/index.php";
    $MM_redirecttoReferrer = false;
  
    $loginFoundUser = mysqli_num_rows($LoginRS);
    if ($loginFoundUser) {
        $loginStrGroup = "";

        if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
        //declare two session variables and assign them
        $_SESSION['MM_Username'] = $username;
        $_SESSION['MM_UserGroup'] = $loginStrGroup;       

        if (isset($_SESSION['PrevUrl']) && false) {
            $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];  
        }
        header("Location: " . $MM_redirectLoginSuccess );
    }
    else {
        header("Location: ". $MM_redirectLoginFailed );
    }
}
?>