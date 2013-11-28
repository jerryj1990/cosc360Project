<?php
	include 'functions.php';
	$result = $db->prepare("SELECT studentID,role FROM user WHERE studentID = :uid");
	$result->bindValue(":uid", $_GET['studentID'], PDO::PARAM_STR);
	$result->execute();
	$result = $result->fetch();
	if (!empty($result)) {
		session_start();
		$_SESSION['ID'] = $result['studentID'];
		$_SESSION['role'] = $result['role'];
		$time = date("M j G:i:s Y");
		$ip = getenv('REMOTE_ADDR');
		function getOS($userAgent) {
	$oses = array (
		'iPhone' => '(iPhone)',
		'Windows 3.11' => 'Win16',
		'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)', 
		'Windows 98' => '(Windows 98)|(Win98)',
		'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
		'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
		'Windows 2003' => '(Windows NT 5.2)',
		'Windows Vista' => '(Windows NT 6.0)|(Windows Vista)',
		'Windows 7' => '(Windows NT 6.1)|(Windows 7)',
		'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
		'Windows ME' => 'Windows ME',
		'Open BSD'=>'OpenBSD',
		'Sun OS'=>'SunOS',
		'Linux'=>'(Linux)|(X11)',
		'Safari' => '(Safari)',
		'Macintosh'=>'(Mac_PowerPC)|(Macintosh)',
		'QNX'=>'QNX',
		'BeOS'=>'BeOS',
		'OS/2'=>'OS/2',
		'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)'
	);

	foreach($oses as $os=>$pattern){
   
		if(eregi($pattern, $userAgent)) { 
			return $os; 
		}
	}
	return 'Unknown';
}
		$msg = "IP: " . $ip . " TIME: " . $time."	Log In ID: ".$_POST['uid']." Platform: ".getOS($_SERVER['HTTP_USER_AGENT'])."\r\n";
		$myFile = "access_log.txt";
		$fh = fopen($myFile, 'a') or die("cant open file");
		$stringData = $msg;
		fwrite($fh, $stringData);
		fclose($fh);
		if($_SESSION['role']==1)
			echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="0;URL=students.php"></head></html>';
		if($_SESSION['role']==0)
			echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="0;URL=profile.php?studentID='.$_SESSION['ID'].'"></head></html>';
	} else 
		echo '<html><head><META HTTP-EQUIV="refresh" CONTENT="0;URL=login.php?failed"></head></html>';
?>