<?php 

$conn = mysqli_connect("localhost", "hpeeragetest", "gksksla1225!", "hpeeragetest_godohosting_com");

$filtered = array(
    'title' => mysqli_real_escape_string($conn, $_POST['id']),
    'password' => mysqli_real_escape_string($conn, $_POST['password']),
    'name' => mysqli_real_escape_string($conn, $_POST['name']),
    'email1' => mysqli_real_escape_string($conn, $_POST['email1']),
    'email2' => mysqli_real_escape_string($conn, $_POST['email2']),
    'phone1' => mysqli_real_escape_string($conn, $_POST['phone1']),
);

$sql = "
    INSERT INTO amember
        (title, password, name, email1, email2, phone1)
        VALUES(
            '{$filtered['title']}',
            '{$filtered['password']}',
            '{$filtered['name']}',
            '{$filtered['email1']}',
            '{$filtered['email2']}',
            '{$filtered['phone1']}
    )";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
} else {
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
}

?>