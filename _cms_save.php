<?php
session_start();

if($_SESSION['admin']==1) {
	require_once('_cms_lib.php');
	$db = new MyDB();
	$id = (int) $_REQUEST['id'];
	$content = SQLite3::escapeString($_REQUEST['content']);
	$query = "UPDATE cms SET content = '$content' WHERE id = '$id'";
	$r = $db->exec($query);
	if ($r==TRUE) echo 'Zapisane.';
	if ($r==FALSE) echo 'Błąd zapisu.';
	if ($r==NULL) echo 'Nieznany błąd.';
} else {
echo "Zmiany NIE zostały zapisane! Zaloguj się!";
}


?>