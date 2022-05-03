<?php
    include_once "database.php";

    $mb_id = $_POST['mb_id'];
    $mb_pw = $_POST['mb_password'];

    $select_query = "SELECT id, pw from member where id = '$mb_id' and pw = '$mb_pw'";
    // $select_result = $conn->query($select_query); 
    // $row = $select_result -> fetch_assoc();
    // $login_mb_id = $row['id'];
    // $login_mb_pwd = $row['pw'];

    // print_r($login_mb_id);
    // print_r($login_mb_pwd);
    
