<?php
include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$char_id = mysqli_real_escape_string($conn, $_REQUEST['char_id']);
$ladder_id = mysqli_real_escape_string($conn, $_REQUEST['ladder_id']);

$sql = "INSERT INTO ranks (charid, ladderid) VALUES ('$char_id', '$ladder_id')";
if(mysqli_query($conn, $sql)){
    echo "Cadatro feito, você será redirecionado para pagina principal em 10seg.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$remove = "DELETE FROM ranks WHERE ladderid =0";
if(mysqli_query($conn, $remove)){

} else{

}
header('refresh: 10; url=index.php');
mysqli_close($conn);
?>
