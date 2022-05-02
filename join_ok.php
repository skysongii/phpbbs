<?php
include_once "database.php";
// include_once "common.php";

    $mb_id = $_POST['id'];
    $mb_pw = $_POST['pw'];
    $mb_email = $_POST['email'];

    $select_query = "SELECT id from member where id = '$mb_id'";
    $select_result = $conn->query($select_query); 
    // $select_result = mysql_query($select_query);
    $row = $select_result -> fetch_array();
    json_encode($row);

    
    ?>