<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$host = "localhost";
$user = "sunho";
$pw = "1234";
$db_name = "frontdb";

// $conn = mysqli_connect("localhost", "sunho", "1234", "frontdb");
// echo $host;
$conn = new mysqli($host, $user, $pw, $db_name);

// if($conn){ echo "Connection established"."<br>"; }
// else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

// $db['default'] = array( //CI에서 DB를 불러올 때 사용할 이름입니다. 
//                         //원하는 것으로 지정하여도 됩니다만, 'database'와 동일하게 지정하는 것을 권장합니다.
// 	'dsn'	=> '',
// 	'hostname' => 'localhost',
// 	'username' => 'sunho',                  //DB에 접속할 user 이름입니다. 반드시 설정해주셔야 합니다.
// 	'password' => '1234',                  //DB user의 패스워드입니다. 패스워드가 없지 않는 한 반드시 지정하십시오.
// 	'database' => 'frontdb',                  //DB 선택 부분입니다. 반드시 지정하여야 합니다.
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );

?>