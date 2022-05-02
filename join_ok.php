<?php
include_once "database.php";
// include_once "common.php";

    $mb_id = $_POST['id'];
    $mb_pw = $_POST['pw'];
    $mb_email = $_POST['email'];

    $select_query = "SELECT id from member where id = '$mb_id'";
    $select_result = $conn->query($select_query); 
    // $select_result = mysql_query($select_query);
    $row = $select_result -> fetch_assoc();
    $json_row = json_encode($row);
    // print_r(!empty($json_row));
    
    // PHP 5.3 이상부터는 short_open_tag 안먹혀서 php.ini 파일 내 short_open_tag = On으로 해줘야함
    if(!empty($json_row)){ ?>
    
        <script>alert('aa');</script>
     <?} else {
        // print_r(!empty($json_row));
    }?>
    

    
    