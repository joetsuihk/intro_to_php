<?php

$friends = array("Snape", "Harry", "Ron", "Dumbledore");
sort($friends);
foreach($friends as $friend) {
  echo $friend . '<br />';
}