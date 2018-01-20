<?php
include "header.php";
include "runmmr.php";
include "conn.php";
?>
<div class="container">
<table id="myTable" class="table table-dark">
  <thead>
  <tr>
     <th>Name</th>
     <th>score</th>
   </tr>
   </thead>
<?php
$sql = "SELECT ladderid, charid FROM ranks";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $ladderId = $row["ladderid"];
        $charid = $row["charid"];
        runMMR($ladderId,$charid);
    }
}
 ?>
 </table>

</div>
<script>
    function sortTable() {
      var table = document.getElementById("myTable");;
      var rows = table.getElementsByTagName("TR");
      var currentRow;
      var nextRow;

      for (var i = 1; i < rows.length - 1; i++) {
        for (var j = 1; j < rows.length - 1; j++) {
          currentRow = rows[j].getElementsByTagName("TD")[1];
          nextRow = rows[j + 1].getElementsByTagName("TD")[1];
          if (Number(currentRow.innerHTML) < Number(nextRow.innerHTML)) {
            rows[j].parentNode.insertBefore(rows[j + 1], rows[j]);
          }
        }
      }
    }
     sortTable();
  </script>

<?php
$conn->close();
include "footer.php";
 ?>
