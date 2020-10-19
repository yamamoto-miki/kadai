<?php
echo 'hello php!';
$name = "Miki";
if ($name==Miki){
    echo "私の名前はMikiです。";
}else if ($name!="Miki"){
    echo "私の名前はMikiではありません。";
}
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
$fruits = array("banana","orange","apple");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

$start = 1;

$end = 100;

for($i = $start; $i < $end; $i++){

  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
