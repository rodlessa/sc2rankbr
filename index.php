<?php
include "header.php";
include "runmmr.php"
?>


<div class="container">
<?php

$id = "862303"; #isso é pego a aprtir de uma url da blizzard no caso http://us.battle.net/sc2/en/profile/862303/2/Kyun/
$ladderId = "262705"; #isso é pego na mesma url porém da ladder http://us.battle.net/sc2/en/profile/862303/2/Kyun/ladder/262705#current-rank
# o caminho feito para isso é ir no perfil>Ladders>Current Season
runMMR("262705","862303");

 ?>
</div>


<?php
include "footer.php";
 ?>
