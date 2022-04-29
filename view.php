<?php
	require_once("./dbconfig.php");
	$bNo = $_GET['bno'];

	if(!empty($bNo) && empty($_COOKIE['board_free_' . $bNo])) {
		$sql = 'update board_free set b_hit = b_hit + 1 where b_no = ' . $bNo;
		$result = $db->query($sql); 
		if(empty($result)) {
			?>
			<script>
				alert('오류가 발생했습니다.');
				history.back();
			</script>
			<?php 
		} else {
			setcookie('board_free_' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
		}
	}
	
	$sql = 'select b_title, b_content, b_date, b_hit, b_id from board_free where b_no = ' . $bNo;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판 글쓰기</h3>
		<div id="boardView">
			<h3 id="boardTitle"><?php echo $row['b_title']?></h3>
			<div id="boardInfo">
				<span id="boardID">작성자: <?php echo $row['b_id']?></span><br>
				<span id="boardDate">작성일: <?php echo $row['b_date']?></span><br>
				<span id="boardHit">조회: <?php echo $row['b_hit']?></span><br>
			</div><br><br>
			<div id="boardContent">내용 : <?php echo $row['b_content']?></div><br>
			<div class="btnSet">
				<a href="./write.php?bno=<?php echo $bNo?>">수정</a>&nbsp;&nbsp;
				<a href="./delete.php?bno=<?php echo $bNo?>">삭제</a>&nbsp;&nbsp;
				<a href="./">목록</a>
			</div>
		</div>
		<?php require_once('./comment.php'); ?>
	</article>
</body>
</html>