<?php
  $foundLast = false;
  $last = 0;
  while(!$foundLast && last < 1000) {
    if(file_exists("pages/" . ($last + 1) . ".png")) {
      $last++;
    } else {
      $foundLast = true;
    }
  }

  $page_number = htmlspecialchars(stripslashes(trim($_GET["page_number"])));

  if($page_number == $last) {
    header('Location: http://www.laocteau.com/comics/mountain');
  } else if($page_number == "") {
    $page_number = $last;
  } else if($page_number < 1 || $page_number > $last) {
    header('Location: http://www.laocteau.com/errors/404.html');
  }

  $next_exists = file_exists("pages/" . ($page_number + 1) . ".png");

?>

<!DOCTYPE html>

<html>
  <head>
    <title>Mountain Country <?php if($next_exists) { echo "- Page " . $page_number; } ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="A comic about a mysterious traveler and an escaped princess. And mountains. Obviously.">
    <meta name="keywords" content="comic, mountain, country, lulu, octeau, stewart, smith, art">
    <meta name="author" content="Lulu Octeau">
    <link href="http://www.laocteau.com/comics/mountain/normalize.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet" />
    <link href="http://www.laocteau.com/comics/mountain/mountain_0.4.css" rel="stylesheet" />
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79894880-2', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
    <a href="http://www.laocteau.com/comics/mountain" style="text-decoration:none">
      <div id="header">
        <h1 id="title">MOUNTAIN COUNTRY</h1>
        <h2>Lulu Octeau</h2>
      </div>
    </a>
    <div class="links">
      <a href="http://www.laocteau.com/about.html"><div class="menu_item link">
        <h2>About</h2>
      </div></a><div class="filler"></div><!--
      --><a href="http://www.laocteau.com/comics/mountain/archive"><div class="menu_item link">
        <h2>Archive</h2>
      </div></a><div class="filler"></div><!--
      --><a href="https://www.instagram.com/laocteau" target="_blank"><div class="menu_item link">
        <h2>Instagram</h2>
      </div></a>
    </div>
    <div id="page">
      <a style="width: inherit;" href="<?php if($next_exists) echo "http://www.laocteau.com/comics/mountain/" . ($page_number + 1); else echo '#'; ?>">
        <img src="http://www.laocteau.com/comics/mountain/pages/<?php echo $page_number; ?>.png" />
      </a>
    </div>
    <div class="links">
      <?php
        if($page_number > 1) {
          echo '<a href="http://www.laocteau.com/comics/mountain/1"><div class="menu_item"><img src="http://www.laocteau.com/comics/mountain/arrowLL.png"/></div></a>';

          echo '<a href="http://www.laocteau.com/comics/mountain/';
          echo $page_number - 1;
          echo '"><div class="menu_item"><img src="http://www.laocteau.com/comics/mountain/arrowL.png"/></div></a>';
        } else {
          echo '<div style="width:400px; display:inline-block;"></div>';
        }

        if($next_exists) {
          echo '<a href="http://www.laocteau.com/comics/mountain/';
          echo $page_number + 1;
          echo '"><div class="menu_item"><img src="http://www.laocteau.com/comics/mountain/arrowR.png"/></div></a>';

          echo '<a href="http://www.laocteau.com/comics/mountain/"><div class="menu_item"><img src="http://www.laocteau.com/comics/mountain/arrowRR.png"/></div></a>';
        } else {
          echo '<div style="width:400px; display:inline-block;"><p style="position:relative;">Mountain Country is on hiatus until the next chapter is done. Come back in a while!</p></div>'; //New updates Mondays and Thursdays! top:-40px;
        }
      ?>
    </div>
    <h6>&#169;2016 Lulu Octeau</h6>
  </body>
</html>