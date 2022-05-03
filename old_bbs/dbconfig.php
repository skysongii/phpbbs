<?php
  $db = new mysqli('localhost', 'bbasak', '1234', 'imsibbs');

	if($db->connect_error) {
		die('데이터베이스 연결 실패');
	}
	$db->set_charset('utf8');
?>