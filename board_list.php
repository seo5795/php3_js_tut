<?php
$conn = mysqli_connect("localhost", "hpeeragetest", "gksksla1225!", "hpeeragetest_godohosting_com");

$sql = "SELECT * FROM aboard";
$result = mysqli_query($conn, $sql);
$list = '';
while ($row = mysqli_fetch_array($result)) { // 등록한 글의 title을 보여주기 위한 list
    $escaped_nid = htmlspecialchars($row['nid']);
    $escaped_ntitle = htmlspecialchars($row['ntitle']);

    $list = $list . "<tr><td>{$escaped_nid}</td>
  <td><a href=\"board_read.php?id={$row['nid']}\">{$escaped_ntitle}</td></tr>";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<table>
		<caption class="hdd">공지사항 목록</caption>
		<thead>
			<tr>
				<th scope="col">번호</th>
				<th scope="col">제목</th>
			</tr>
		</thead>
		<tbody>
						<?= $list?>				
		</tbody>
	</table>

</body>
</html>