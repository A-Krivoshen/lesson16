<?php 
$host = 'localhost';
$dbname = 'krivoshein';
$dbuser = 'krivoshein';
$dbpassword = 'neto1229';
function isRegistration() {
		return (isset($_POST['registration']) && !empty($_POST['login']) && !empty($_POST['password']));
}
function isAuthorization() {
		return (isset($_POST['authorization']) && !empty($_POST['login']) && !empty($_POST['password']));
}
function createPDO() {
		$pdo = new PDO("mysql:host=localhost;dbname=krivoshein;charset=utf8","krivoshein","neto1229",[
	  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	   ]);
		return $pdo;}
function getSalt() {
	return 'РАн5куепкп54';
}
function getHashPassword($password) {
	return md5($password . getSalt());
}
?>