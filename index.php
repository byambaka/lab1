<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    echo "<ul>";
for($i=0; $i<5; $i++){
  echo '<li>'.(++$i).'</li>';
}
echo "</ul>";
  </body>
</html>
