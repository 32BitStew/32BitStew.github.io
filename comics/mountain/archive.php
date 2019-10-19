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

?>

<!DOCTYPE html>

<html>
<head>
  <title>Mountain Country - Archive</title>
  <link href="http://www.laocteau.com/comics/mountain/normalize.css" rel="stylesheet" />
  <link href="http://www.laocteau.com/comics/mountain/mountain_0.4.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet" />
  <style>
    .arcNums {
      text-align:center;
      width:75px;
      text-decoration: none;
      color: black;
      background-color: #00CDD1;
    }
  </style>
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
  </div>

  <div id="page" style="padding: 20px; background-color:#b17697; box-sizing:border-box;">
    <?php
      for($i = 1; $i <= $last; $i++) {
        echo '<a href="http://www.laocteau.com/comics/mountain/' . $i . '"><div class="menu_item link arcNums">' . $i . '</div></a>';
      }
    ?>
  </div>
  <h6>&#169;2016 Lulu Octeau</h6>
</body>
</html>