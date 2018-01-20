<?php function runMMR($ladderId,$id)
{

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, 'https://us.api.battle.net/data/sc2/ladder/'.$ladderId.'?locale=en_US&access_token=TOKEN DE ACESSO');
  $result = curl_exec($ch);
  curl_close($ch);
  $obj = json_decode($result);
  $team = $obj->team;
  $team_count = count($team);
  for ($i=0;$i<$team_count;$i++){
    $checkid = $obj->team[$i]->member[0]->legacy_link->id;
    if ($checkid != $id) {
      
    }else{
      $name = $obj->team[$i]->member[0]->legacy_link->name;
      $mmr = $obj->team[$i]->rating;
      echo $name;
      echo " MMR= ";
      echo $mmr;
      echo "<br>";
    }

    }
  }
?>
