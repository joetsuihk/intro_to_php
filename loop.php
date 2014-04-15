<?php
for ($i = 0; $i < 10; $i = $i +1 )
{
  echo $i;
}

foreach (array( 0, 1, 2 ) as $value)
{
  echo $value;
}

foreach (array("Peter" => "35", "Ben" => "37", "Joe" => "43") as $key => $value)
{
  echo $key . ': ' . $value . '<br />';
}