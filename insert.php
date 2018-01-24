<?php
include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rank";

// Create connection

$url_char = $_POST["url_cad"];
// função feita pelo @mahousenhi!
function getDataFromUrl($url) {
    $arr = explode('/', $url);
    $pos = strpos($arr[10], '#');

    if ($pos) {
        $arr[10] = substr($arr[10], 0, $pos);
    }

    return array($arr[6], $arr[8], $arr[10]);
}


$conn = new mysqli($servername, $username, $password, $dbname);
list($char_id, $nick, $ladder_id) = getDataFromUrl($url_char);
$sqlurl = "INSERT INTO ranks (charid, ladderid) VALUES('$char_id','$ladder_id')";
if (mysqli_query($conn, $sqlurl)) {
  echo "<div class= container><div class='alert alert-success' role='alert'>";
  echo "Cadastro de URL feito</div>";
  echo "</div>";
}
else {
  echo "<div class= container><div class='alert alert-danger' role='alert'>";
  echo "Não foi possivel ser feito o cadastro.</div>";
  echo "</div>";
}

$remove = "DELETE FROM ranks WHERE ladderid =0";
if(mysqli_query($conn, $remove)){

} else{

}
header('refresh: 3; url=index.php');
mysqli_close($conn);
?>
