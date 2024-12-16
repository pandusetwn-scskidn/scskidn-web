<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description" content="">
    <meta property="og:title" content="404 - Page Not Found">
    <meta property="og:description" content="404 - Page Not Found">
    <meta name="google-site-verification" content="ynliGJT41FwiTUHHCllMLqmkzroVda0m3wV0kYFZ-Pw" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./favicon.ico" />
    <title>404 - Page Not Found</title>
  </head>
  <body>
    <?php
      $LangLink = ['./', './id', './en'];
    ?>
    <?php include_once('header.php'); ?>
    <section class="my-5 not-found">
      <div class="custom-container">
        <h1 class="archivo"><strong>404</strong></h1>
        <p class="archivo"><i>Sorry, the page you tried cannot be found.</i></p>
      </div>
    </section>
    <?php include_once('footer.php'); ?>
  </body>
</html>
