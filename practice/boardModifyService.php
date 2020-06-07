<?php
//데이터베이스 연동
require_once("dbConfig.php");
$pdo = db_connect();

$board_id = $_REQUEST['board_id'];
$title = $_REQUEST['title'];
$content = $_REQUEST['content'];

try {
    $pdo->beginTransaction();
    $sql = "update mingo.board set title=?, content=?, regdate=now() where board_id=?";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(1, $title, PDO::PARAM_STR);
    $stmh->bindValue(2, $content, PDO::PARAM_STR);
    $stmh->bindValue(3, $board_id, PDO::PARAM_STR);

    $stmh->execute();
    $pdo->commit();

    header('Location: http://localhost/practice/boardDetail.php?board_id='.$board_id);

} catch (PDOException $Exception) {
    $pdo->rollback();
?>
    <script>
        alert("잘못된 양식입니다. 다시 작성해주세요");
        history.back();
    </script>

<?php
}
?>
