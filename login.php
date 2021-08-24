<?php
$conn = mysqli_connect("localhost", "hpeeragetest", "gksksla1225!", "hpeeragetest_godohosting_com");
// db접속




$article = array(
    //id값이 없을시에 출력하기 위한 
    'id' => 'welcome'    
);


if (isset($_POST['id'])&&isset($_POST['password'])) {
    //id를 입력한다면, 
  
    $filtered_id=mysqli_real_escape_string($conn, $_POST['id']);
    $filtered_password=mysqli_real_escape_string($conn, $_POST['password']);
    //mysqli_real_escape_string($link, $string_to_escape)
    //사용자 입력 sql주입을 막아줌-> 보안문제 해결
  
    $sql = "SELECT * FROM amember
         WHERE id='{$filtered_id}' and 
            password ='{$filtered_password}'";
    
    $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
    
    // my sqli_query:데이터베이스에서 쿼리를 수행합니다. 만약 실패할 시 FALSE를 반환합니다. 성공적으로 SELECT, SHOW, DESCRIBE, EXPLAIN 쿼리를 수행했다면 mysqli_result object를 반환합니다. 다른 쿼리를 성공적으로 수행했다면 TRUE를 반환합니다.
    $row = mysqli_fetch_array($result);
    // mysqli_fetch_array 함수는 mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수
    //일반배열과 연관배열 모두 지원
   
    $article['id'] = htmlspecialchars($row['id']);
    // htmlspecialchars: 문자열에서 특정한 특수 문자를 HTML 엔티티로 변환한다. 이함수를 사용하면 악성 사용자로 부터 XSS 공격을 방지 할 수 있다.
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Test</title>
</head>
<body>
	 <h2>환영합니다!<?= $article['id']?>!</h2>
	<form action="login.php" method="post">
		<div><input type="text" name="id" placeholder="id를 입력하세요"></div> 
		<div><input type="password" name="password" placeholder="pw를 입력하세요"></div>
		<div><input type="submit" value="로그인"></div>
	</form>

	<a href="regist.html">회원가입</a>
	<a href="find.php">계정찾기</a>




</body>
</html>