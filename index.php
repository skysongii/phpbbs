<?php
	require_once("./dbconfig.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판</title>
	<!-- <link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" /> -->
	<style>
		table {
            border-top: 1px solid #444444;
            border-collapse: collapse;
        }

        tr {
            border-bottom: 1px solid #444444;
            padding: 10px;
        }

        td {
            border-bottom: 1px solid #efefef;
            padding: 10px;
        }

        table .even {
            background: #efefef;
        }

        .text {
            height: 25px;
            width: 90px;
            font-size: 20px;
            text-align: center;
            background-color: #3C3C3C;
            border: 2px solid black;
            color: white;
            border-radius: 5px;
            margin-left:82%;
        }

        .text:hover {
            text-decoration: underline;
        }

        a:link {
            color: #57A0EE;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }	
	</style>
</head>
<body>
	<article class="boardArticle">
		<h3 align = center>자유게시판</h3>
		<div id="boardList">
			<table align = center>
				<thead align = center>
					<tr>
						<th scope="col" width="50" align="center">번호</th>
						<th scope="col" width="500" align="center">제목</th>
						<th scope="col" width="100" align="center">작성자</th>
						<th scope="col" width="200" align="center">작성일</th>
						<th scope="col" width="50" align="center">조회</th>
					</tr>
				</thead>
				<tbody>
						<?php
							$sql = 'select * from board_free order by b_no desc';
							$result = $db->query($sql);
							while($row = $result->fetch_assoc())
							{
								$datetime = explode(' ', $row['b_date']);
								$date = $datetime[0];
								$time = $datetime[1];
								if($date == Date('Y-m-d'))
									$row['b_date'] = $time;
								else
									$row['b_date'] = $date;
						?>
					<tr>
						<td width="50" align="center"><?php echo $row['b_no']?></td>
						<td width="500" align="center">
							<a href="./view.php?bno=<?php echo $row['b_no']?>"><?php echo $row['b_title']?></a>
						</td>
						<td width="100" align="center"><?php echo $row['b_id']?></td>
						<td width="200" align="center"><?php echo $row['b_date']?></td>
						<td width="50" align="center"><?php echo $row['b_hit']?></td>
					</tr>
						<?php
							}
						?>
				</tbody>
			</table>
			<div class="text">
				<a href="./write.php" >글쓰기</a>
			</div>
		</div>
	</article>
</body>
</html>