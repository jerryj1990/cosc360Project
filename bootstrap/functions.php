<?php
$server = 'localhost'; 
$user = '34639096'; 
$pass = '072790'; 
$dbname = 'stu34639096'; 


$db= new PDO('mysql:host=sql09.ok.ubc.ca/;dbname='.dbname, $user, $pass);



function getID($login) {
		$result = $db->prepare('select studentID from users where loginID = :login');
		$result->bindValue(':login', $login);
		$s->execute();
		$result = $s->fetch();
		return $result['studentID'];
}

function getRole($uid) {
		$result = $db->prepare('select role from users where studentID = :uid');
		$result->bindValue(':uid', $uid);
		$s->execute();
		$result = $s->fetch();
		return $result['role'];
	}
?>