<?php
include "db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ids = explode(',', $_POST['ids']);
    
    if (!empty($ids)) {
        $idList = implode(',', array_map('intval', $ids));
        $sql = "DELETE FROM user_profiles WHERE id IN ($idList)";
        
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Records deleted successfully.");';
            echo 'window.location.href = "demos.php";</script>';
        } else {
            echo "Error deleting records: " . $conn->error;
        }
    }
}
$conn->close();
?>
