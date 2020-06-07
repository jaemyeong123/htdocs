<?php
//데이터베이스 연동
require_once("dbConfig.php");
$pdo = db_connect();

$board_id = $_REQUEST['board_id'];

try {
    $pdo->beginTransaction();
    $sql = "delete from mingo.board where board_id=?";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(1, $board_id, PDO::PARAM_STR);
    $stmh->execute();
    $pdo->commit();
    ?>
        <script>
            alert("해당 게시글이 삭제됐습니다.");
        </script>
    <?php

    header('Location: http://localhost/practice/boardList.php/');

} catch (PDOException $Exception) {
    $pdo->rollback();
?>
    <script>
        alert("처리 과정에서 문제가 발생했습니다.");
        history.back();
    </script>

<?php
}
?>
