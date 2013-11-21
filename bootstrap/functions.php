<?php
$server = 'localhost'; 
$user = '34639096'; 
$pass = '072790'; 
$dbname = 'stu34639096'; 

try{		
		$db= new PDO('mysql:host='.$server.';dbname='.$dbname, $user, $pass);
	}
	catch (PDOException $e){
		echo "could not connect to database.";
	}



function getID($db,$login) {
		$result = $db->prepare('select studentID from users where loginID = :login');
		$result->bindValue(':login', $login);
		$s->execute();
		$result = $s->fetch();
		return $result['studentID'];
}

function getRole($db,$uid) {
		$result = $db->prepare('select role from users where studentID = :uid');
		$result->bindValue(':uid', $uid);
		$s->execute();
		$result = $s->fetch();
		return $result['role'];
	}
?>