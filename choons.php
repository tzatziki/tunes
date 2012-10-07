<?php

function random_artist_factory($filename) {
  $fh = file($filename);
  $count = count($fh);
  $displayer = function() use ($fh, $count) {
    return htmlentities(trim($fh[rand(0, $count - 1)]));
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
