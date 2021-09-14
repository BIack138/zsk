<?php
  echo PHP_VERSION;
  echo 2**10,'<br>';

  $x=100;
  $y=10;

  echo $x<=>$y;


  $x=1;
  $y=1.0;
  echo gettype($x);
  echo gettype($y);

  if ($x==$y){
    echo "Równe";
  }  else ($x==$y){
    echo "Różne";
  }

  if ($x==$y){
    echo "Identyczne";
  }  else ($x==$y){
    echo "Różne <br>";
  }

  /*
  preinkrementacja
  postinkrementacja
  predekrementacja
  postdekrementacja
  */

  $x=10;
  echo $x; //10
  $x=++$x;
  echo $x; //11
  $x=$x++;
  echo $x; //12
  $y=$x++;
  echo $x; //12
  echo $y.'<br>'; //

  $x=1;
  echo $x;  //1
  $x=$x++;
  echo $x;  //2
  $x=++$x;
  echo $x;  //3
  $y=++$x;
  echo $x;  //3
  echo $y;  //15
  $y=$x++;
  echo $x;  //3
  echo $y;  //15

  ?>
