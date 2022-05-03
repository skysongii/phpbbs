<?include_once "common.php";?>
<?include_once "common.php";?>
<?include_once "database.php";?>

<?= $host;?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width" initial-scale="1">
		<!-- 스타일 시트 참조 / css폴더의 bootstrap.css 참조 -->
		<title>새로운 게시판</title>
		<link rel="stylesheet" href="css/bootstrap.css"> 
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <script type="text/javascript" src="/js/bootstrap.js"></script>
		<script src="./js/login.js"></script>
	
	</head>
	<body>
		<!-- 표준 네비게이션 바 (화면 상단에 위치, 화면에 의존하여 확대 및 축소) -->
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<!-- Collapse : 제목을 클릭하면 해당내용이 펼쳐지고 다른내용은 접히는 특수 효과 -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="new_index.php">새로운 게시판</a>
			</div>   
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="new_index.php">메인</a></li>
					<li><a href="list.php">게시판</a></li>
				</ul>  
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
						aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="login.php">로그인</a></li>
							<li><a href="join.php">회원가입</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container"> 
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="jumbotron" style="padding-top: 20px;">
					<form name="loginSbmt" id="loginSbmt" method="post" action="new_login_ok.php">
						<h3 style="text-align: center">로그인 화면</h3>
						<div class="col-lg-4"></div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="아이디" name="mb_id" maxlength="15">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="비밀번호" name="mb_password" maxlength="20">
						</div>
						
						<a href="new_login_ok.php"><span class="btn btn-primary form-control" onclick="check_input()">로그인</span></a><hr>
						<a href="join.php"><span class="btn btn-primary form-control" onclick="check_input()">회원가입</span></a>

					</form>
				</div>
			</div>
		</div>
	</body>
</html>