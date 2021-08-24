<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<form method="post" action="proccess_regist_board.php">
		<h2>공지사항</h2>
		<div padding="20px">


			<p>공지하고자하는 내용을 작성해주세요</p>
			<form>

				<input type="text" class="form-control"
					id="ntitle" name="ntitle" placeholder="제목을 입력해주세요." required
					data-error="Please enter your name">
		
		</div>


		<div padding="20px">

			<textarea id="ncon" name="ncon"
			 placeholder="공지사항 내용을 작성해주세요." rows="4"
				data-error="Write your message" required></textarea>

			
	</div>
	<button id="submit" type="submit">공지사항 작성</button>
	</form>

</body>
</html>