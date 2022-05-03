<?php
include_once "database.php";
// include_once "common.php";

    $mb_name = $_POST['mb_name'];
    $mb_id = $_POST['mb_id'];
    $mb_pw = $_POST['mb_pw'];
    $mb_email = $_POST['mb_email'];

    $select_query = "SELECT id from member where id = '$mb_id'";
    $select_result = $conn->query($select_query); 
    // $select_result = mysql_query($select_query);
    $row = $select_result -> fetch_assoc();
    print_r($row['id']."\n");

    // PHP 5.3 이상부터는 short_open_tag 안먹혀서 php.ini 파일 내 short_open_tag = On으로 해줘야함
    if(!empty($row)){ ?>
        <script>alert('입력하신 아이디가 이미 존재합니다.'); history.back();</script>
     <?} else { ?>
        <script>alert('회원가입이 완료되었습니다.'); location.href = "new_index.php";
        // location.href="list.php"
        </script>
        <? 
        $insert_query = "INSERT INTO member (`name`, `id`, `pw`, `email`) VALUES ('$mb_name', '$mb_id', '$mb_pw', '$mb_email')";
        $insert_result = $conn->query($insert_query);
    }?>
    

    
    