<?php

require_once("dbMhs.php");
$id = $_GET["nim"];
$sql = "DELETE FROM datamahasiswa WHERE nim=$id";
if (mysqli_query($conn, $sql)) {
    header("Location: lihatdataMhs.php");
}else {
    echo "Gagal";
}
mysqli_close($conn);
?>
