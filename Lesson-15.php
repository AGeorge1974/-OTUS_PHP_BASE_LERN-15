<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson-15</title>
    <style>
        h1 {
          font-size: 15px;
          font-weight: 600;
           }
    </style>
</head>
<body>

  <?php 

  function getStrCode($strForCode){
    $result = "";  
    $arrTransLiter = array( "а"=> "a",
      "б" => "b",
      "в" => "v",
      "г" => "g",  
      "д" => "d",
      "е" => "e",
      "ё" => "e",
      "ж" => "zh",
      "з" => "z",
      "и" => "i",
      "й" => "y",
      "к" => "k",
      "л" => "l",
      "м" => "m",
      "н" => "n",
      "о" => "o",
      "п" => "p",
      "р" => "r",
      "с" => "s",
      "т" => "t",
      "у" => "u",
      "ф" => "f",
      "х" => "kh",
      "ц" => "ts",
      "ч" => "ch",
      "ш" => "sh",
      "щ" => "shsh",
      "ь" => "",
      "ы" => "y",
      "ъ" => "",
      "э" => "e", 
      "ю" => "yu", 
      "я" => "ya",
      " " => " ");
      $strForCode = mb_strtolower($strForCode);
      for($i=0;$i<=mb_strlen($strForCode)-1;$i++){
        $result = $result . $arrTransLiter[mb_substr($strForCode,$i,1)];
      }
      return $result;
  }

  function getReplaceSpace($str){
    $result = "";  
    for($i=0;$i<=mb_strlen($str)-1;$i++){
        $subStr = mb_substr($str,$i,1);
        if ($subStr === " ") {
          $subStr = "_";
        };
        $result = $result . $subStr;
    }
    return $result;
  }

  function getTrans($str){
    return getReplaceSpace(getStrCode($str));
  }

  echo "<h1> 1 task </h1>";
  $i = 0;
  while ($i <= 100) {
    if ($i % 3 === 0){
      echo $i . ' ';
    };
    $i++;
  };

  echo "<h1> 2 task </h1>";
  $i = 0;
  while ($i <= 10) {
    if ($i === 0) {
      $value = '0';
    } elseif ($i % 2 === 0) {
      $value = 'четное число';
    } else {
      $value = 'не четное число';
    }
    echo "$i - $value <br>";
    $i++;
  };


  echo "<h1> 3 task </h1>";
  $array = array(
    "MoscowRegion"    => ["Moscow", "Zelenograd", "Klin"],
    "LeningradRegion" => ["St. Petersburg", "Vsevolozhsk", "Pavlovsk", "Kronstadt"],
    "RyazanRegion"    => ["Kasimov", "Ryazan", "Sasovo"]
  );
  $arrListKey = array_keys($array);  
  $numItem = 0;
  foreach ($array as &$row) {
    echo $arrListKey[$numItem];
    $numItem++;
    $delimiter = ": ";
    foreach ($row as $item) {
      echo $delimiter . $item;
      $delimiter = ", ";
    }
    echo "<br>";
  }

  echo "<h1> 4 task </h1>";
  echo getStrCode("строка для шифрования") . "<br>";

  echo "<h1> 5 task </h1>";
  echo getReplaceSpace("строка для шифрования") . "<br>";

  echo "<h1> 6 task </h1>";
  echo "<ul>";
  foreach ($array as $region => $cyti) {
    // is_array
    if (gettype($cyti) == "array" ) {
      echo "<li>".$region."<ul>";
      foreach ($cyti as $cytiName) {
        echo "<li>".$cytiName."</li>";
      }
      echo "</ul>";
    }
    else echo "<li>".$cyti."</li>";
  }
  echo "</ul>";
  
  echo "<h1> 7 task </h1>";
  for ($i = 0; $i < 10; print $i++) {}

  echo "<h1> 8 task </h1>";
  $numItem = 0;
  foreach ($array as &$row) {
    echo $arrListKey[$numItem];
    $numItem++;
    $delimiter = ": ";
    foreach ($row as $item) {
      if (mb_substr($item,0,1) === 'K') {
        echo $delimiter . $item;
        $delimiter = ", ";
      }
    }
    echo "<br>";
  }

  echo "<h1> 9 task </h1>";
  echo getTrans("строка для шифрования") . "<br>";
  

?>
</body>
</html>
