<?php
function afficherSuite($n) {
    for ($i = 1; $i <= $n; $i++) {
      for ($j = 0; $j < $i; $j++) {
        echo $i;
      }
      echo '<br>';
    }
  }
  afficherSuite(6);
