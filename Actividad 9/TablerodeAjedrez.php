<?php
    $x=10;
    for($i=1;$i<=$x;$i++){
      echo '<table border="1">';
        echo "<tr>";
        if($i%2==0){
          for($j=1;$j<=$x;$j++){
            if($j%2==0){
              echo "<td>";
              echo '<img src="./Blanco.jpeg" width="100">';
              echo "</td>";
            }
            else{
              echo "<td>";
              echo '<img src="./Negro.jpeg" width="100">';
              echo "</td>";
            }
          }
        }
        else{
          for($j=1;$j<=$x;$j++){
            if($j%2==0){
              echo "<td>";
              echo '<img src="./Negro.jpeg" width="100">';
              echo "</td>";
            }
            else{
              echo "<td>";
              echo '<img src="./Blanco.jpeg" width="100">';
              echo "</td>";
            }
          }
        echo "</tr>";
        echo "</table>";
        }
    }
  ?>
  