<!DOCTYPE html>
<html>

<head>
  <title>News Embeds</title>
  <link rel="stylesheet" href="https://www.deseretnews.com/v4/dist/app.css" />
  <style>
    textarea.html {
      display: block;
      margin: 25px auto;
      max-width: 500px;
      width: 75%;
      height: 150px;
    }
  </style>
</head>

<body>
  <br />
  <?php 
    function include_embed($page) {
      include('lib/'.$page.'.html');
      $html = file_get_contents('lib/'.$page.'.html');
      $css = file_get_contents('styles/'.$page.'.css');
      $css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);
      $html = str_replace('<link rel="stylesheet" href="styles/'.$page.'.css" />',  "<style>".$css."</style>", $html);
      echo '<textarea class="html">'.$html.'</textarea>';
    }
  ?>
  <?php 
    include_embed('social');
    include_embed('page');
  ?>
</body>

</html>