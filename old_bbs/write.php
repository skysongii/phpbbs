<?php
	require_once("./dbconfig.php");

	//$_GET['bno']이 있을 때만 $bno 선언
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}
		 
	if(isset($bNo)) {
		$sql = 'select b_title, b_content, b_id from board_free where b_no = ' . $bNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판</title>
	<link rel="stylesheet" href="./css/normalize.css" /> 
	<link rel="stylesheet" href="./css/board.css" />
	<style>
		table.table2{
				border-collapse: separate;
				border-spacing: 1px;
				text-align: left;
				line-height: 1.5;
				border-top: 1px solid #ccc;
				margin : 20px 10px;
				}
				
				table.table2 tr {
						width: 50px;
						padding: 10px;
						font-weight: bold;
						vertical-align: top;
						border-bottom: 1px solid #ccc;
				}
				table.table2 td {
						width: 100px;
						padding: 10px;
						vertical-align: top;
						border-bottom: 1px solid #ccc;
						font-weight: bold;
				}
			
	</style>

</head>
<body>
	<article class="table2">
		<h3 align = "center">자유게시판 글쓰기</h3>
		<div id="boardWrite">
			<form action="./write_update.php" method="post">
				<?php
				if(isset($bNo)) {
					echo '<input type="hidden" name="bno" value="' . $bNo . '">';
				}
				?>
				<table id="boardWrite" align = "center">
					<tbody>
						<tr>
							<td><label for="bID">아이디</label></td>
							<td class="id">
								<?php
								if(isset($bNo)) {
									echo $row['b_id'];
								} else { ?>
									<input type="text" name="bID" id="bID">
								<?php } ?>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">비밀번호</label></th>
							<td class="password"><input type="password" name="bPassword" id="bPassword"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" size=80 name="bTitle" id="bTitle" value="<?php echo isset($row['b_title'])?$row['b_title']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea cols=82 rows=15 name="bContent" id="bContent"><?php echo isset($row['b_content'])?$row['b_content']:null?></textarea></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
						<?php echo isset($bNo)?'수정':'작성'?>
					</button>
					<!-- <a href="./index.php" class="btnList btn">목록</a> -->
				</div>
			</form>
		</div>
	</article>
</body>
</html>