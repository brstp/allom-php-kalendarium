<!DOCTYPE html>
<html lang='sv'>
  <head>
    <meta charset='utf-8'>
    <title>Kvartetten |  5 maj 2013</title>
  </head>
  <body>
    <h1>Exempel på evenemang från Allom i eget kalendarium</h1>
    <p>Kommande evenemangen    
    <?php 
      require_once('magpie/rss_fetch.inc');
      $rss = fetch_rss('http://allom.se/events.rss');
      echo "<ol>";
      foreach ($rss->items as $item ) {
      	$title = mb_convert_encoding($item[title], "UTF-8", "HTML-ENTITIES");
      	$url   = utf8_decode($item[link]);
        $description = mb_convert_encoding($item[description], "UTF-8", "HTML-ENTITIES");
        echo "<a href=$url title=\"$title\">";
        echo "<li>";
        echo "<h2>$title</h2>";
        echo "<img src=\"http://s3.amazonaws.com/static.allom.se/app/public/system/image1s/142/medium/Nunnor%206.JPG?1315501996\" width=\"100%\" alt=\"$title\">";
        echo "<p>";
        echo "$description";
        echo "</p>";
        echo "<p>Adress, karta och mer detaljer... </p>";
        echo "</li>";
        echo "</a>";  
      }
      echo "</ol>";
?>

  </body>
</html>
