<?php

function random_artist_factory($filename) {
  $data = file($filename);
  $count = count($data);
  $displayer = function() use ($data, $count) {
    $item = $data[rand(0, $count - 1)];
    unset($data[$item]);
    return htmlentities(trim($item));
  };
  return $displayer;
}
$random_artist = random_artist_factory("choons.txt");
?>
<!DOCTYPE html5>
<html>
<head>
<title>Songz</title>
</head>
<body>
<center>
<h1>Hi! You might want to listen to <?php echo $random_artist(); ?>, or maybe even <?php echo $random_artist(); ?>. No? What about <?php echo $random_artist(); ?>?</h1>
</center>
</body>
</html>
