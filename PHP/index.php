<?php include 'music.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Music</title>
    <link rel="stylesheet" href="public/css/app.css">
  </head>
  <body>
    <header>

    </header>
    <main>
      <div class="container flex">

        <?php foreach ($music as $album) { ?>
          <div class="album">
            <img src="<?php echo $album['poster']; ?>" alt="">
            <p><?php echo $album['title']; ?></p>
            <span class="artist"><?php echo $album['author']; ?></span>
            <span class="year"><?php echo $album['year']; ?></span>
          </div>
          <?php
        } ?>



      </div>

    </main>
  </body>
</html>
