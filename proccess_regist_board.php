<?php

$conn = mysqli_connect("localhost", "hpeeragetest", "gksksla1225!", "hpeeragetest_godohosting_com");

$filtered = array(
    'ntitle' => mysqli_real_escape_string($conn, $_POST['ntitle']),
    'ncon' => mysqli_real_escape_string($conn, $_POST['ncon']),
   
);

$sql = "
    INSERT INTO aboard
        (ntitle, ncon)
        VALUES(
            '{$filtered['ntitle']}',
            '{$filtered['ncon']}',
    )";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
} else {
    echo '성공했습니다. <a href="board_list.php">글 목록 보기</a>';
}

?>