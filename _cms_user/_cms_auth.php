<?
session_start();
$haslo = '666';


// logout
if($_SERVER['REQUEST_METHOD']=="GET") {
    $_SESSION['admin']=0;
    header("Location: /");
}

if($_POST['haslo']==$haslo) {
    $_SESSION['admin']=1;
    echo '1';
} else {
    $_SESSION['admin']=0;
    echo '0';
}

?>