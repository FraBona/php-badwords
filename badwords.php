<?php
  $text = $_POST['text'];
  $word = $_POST['badword'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?php echo $text?></p>
  <p><?php echo strlen($text)?></p>
  <p><?php echo $new_text = str_replace($word, '***', $text) ?></p>
  <p><?php echo strlen($new_text)?></p>
</body>
</html>