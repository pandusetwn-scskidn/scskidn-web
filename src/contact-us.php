<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	// Load Composer's autoloader
	require 'vendor/autoload.php';

	// Load config
	$config = include('config/app.php');

	require 'action/c-contact-us.php';
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description" content="システム開発やインフラ構築、ITコンサルテーションやアウトソーシングなど、インドネシアでIT関連でお困りの際はお気軽にご連絡ください。">
    <meta name="keywords" content="システム開発, ITインフラ, 運用保守, セキュリティ, ITコンサル, アウトソーシング, インドネシア">
    <meta property="og:title" content="お問い合わせ | SCSK Global Indonesia">
    <meta property="og:description" content="システム開発やインフラ構築、ITコンサルテーションやアウトソーシングなど、インドネシアでIT関連でお困りの際はお気軽にご連絡ください。">
		<meta name="google-site-verification" content="ynliGJT41FwiTUHHCllMLqmkzroVda0m3wV0kYFZ-Pw" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./favicon.ico" />
    <title>お問い合わせ | SCSK Global Indonesia</title>
  </head>
  <body class="meiryo">
    <?php
      $LangLink = ['./contact-us.php', './id/contact-us.php', './en/contact-us.php'];
    ?>
    <?php include_once('header.php'); ?>
    <section class="mt-45px">
      <div class="heading max-w-650 mb-5">
        <h1 class="blue-heading text-center">お問い合わせ</h1>
        <!-- <p class="text-center">Fill out the form below to inquire anything, and we will get back to you as soon as possible.</p> -->
      </div>
      <div class="bg-grey pt-3 pt-md-0">
        <div class="custom-container">
          <div class="contact-location">
            <div class="contact-map map-embed embed-responsive">
              <iframe title="Map Contact Us" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.286279568081!2d106.8019370147692!3d-6.22593459549317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14e4c7ebf09%3A0x19bcafb339ee8f55!2sSummitmas%20tower%202!5e0!3m2!1sen!2sid!4v1568708612114!5m2!1sen!2sid" width="600" height="450"></iframe>
            </div>
            <div class="blue-box mb-3 mb-md-0 mt-5 mt-md-0">
              <h3 class="mb-40px archivo">PT SCSK GLOBAL INDONESIA</h3>
              <p class="mb-40px archivo">SUMMITMAS II 5th Floor, JL. Jenderal Sudirman Kaveling 61-62, Jakarta Selatan 12190 Indonesia</p>
              <!-- <a class="d-block archivo" href="tel:(021) xxxx - xxxx" target="_blank">
                <img src="assets/img/circle-phone-white.png" alt="Phone">
                <span class="d-inline-block text-white">+62-21-XXXXXXX</span>
              </a> -->
              <a class="d-block archivo surel" data-surel="contactATscskidnDOTcom">
                <img src="assets/img/circle-message-white.png" alt="Email">
                <span class="d-inline-block text-white">contact@scskidn.com</span>
              </a>
            </div>
          </div>
        </div>
		<?php /*
		<div class="bg-pattern-contact-us">
	        <div class="contact-form max-w-650">
	          <?php
	              if (!is_null($success)) {
	                ?>
	            <div class="alert alert-success alert-dismissible" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                Your message was <strong>sent successfully. </strong> We will contact you soon
	            </div>
	          <?php }?>

	          <?php
	            if (!empty($errors)) {
	            ?>
	            <div class="alert alert-danger alert-dismissible" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	              <?php
	                foreach ($errors as $key => $value) {
	                  echo $value."<br>";
	                }
	              ?>
	            </div>
	          <?php }?>


	          <form action="" method="post" id="contact-form">
	            <div class="form-group">
	              <label for="full-name">氏名*</label>
	              <input id="full-name" class="contact-input" type="text" name="name" value="<?= !empty($errors) ? $_POST['name'] : ''?>" required placeholder="氏名">
	            </div>
	            <div class="form-group">
	              <label for="company">会社名*</label>
	              <input id="company" class="contact-input" type="text" name="company" value="<?= !empty($errors) ? $_POST['company'] : ''?>" required placeholder="会社名">
	            </div>
	            <div class="form-group">
	              <label for="email">メールアドレス*</label>
	              <input id="email" class="contact-input" type="email" name="email" value="<?= !empty($errors) ? $_POST['email'] : ''?>" required placeholder="メールアドレス">
	            </div>
	            <div class="form-group">
	              <label for="telephone">電話番号*</label>
	              <input id="telephone" class="contact-input" type="text" pattern="[0-9]{10,13}" name="phone_number" value="<?= !empty($errors) ? $_POST['phone_number'] : ''?>" required placeholder="082388295628" title="Phone number must be numeric and character length must be between 10 - 13">
	            </div>
	            <div class="form-group">
	              <label for="message">メッセージ</label>
	              <textarea id="message" name="message" placeholder="メッセージ"><?= !empty($errors) ? $_POST['message'] : ''?></textarea>
				</div>

				<div class="mb-20px text-center">
					<div class="d-inline-block g-recaptcha" data-sitekey="<?= $config['site_key'] ?>"></div>
				</div>

	            <input type="hidden" value="jp" name="lang">
	            <div class="text-center">
	              <button id="contactbtn" class="sm-rect-blue" type="submit" name="button" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">送信</button>
	            </div>
	          </form>
	        </div>
		</div>
		*/ ?>
      </div>
    </section>
    <?php include_once('footer.php'); ?>
  </body>
</html>