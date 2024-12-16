<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149162499-1"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   gtag('config', 'UA-149162499-1');
</script>
<header>
  <div class="custom-container">
    <div class="d-md-flex justify-content-end">
      <nav class="navbar navbar-expand-md navbar-menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle Navbar">
          <span class="custom-toggler-icon"></span>
        </button>
        <!-- white logo -->
        <a class="d-md-none" href="./">
          <img class="img-fluid" src="assets/img/SCSK_logo(w).png" alt="White Logo">
        </a>
        <div class="d-flex flex-grow-1 justify-content-end">
          <div class="inline-contact header archivo">
            <!-- <a href="tel:(021) xxxx - xxxx" target="_blank">
              <img src="assets/img/circle-phone-white.png" alt="Phone">
              <span class="d-none d-md-inline-block">(021) xxxx - xxxx</span>
            </a> -->
            <a class="surel" data-surel="contactATscskidnDOTcom">
              <img src="assets/img/circle-message-white.png" alt="Email">
              <span class="d-none d-md-inline-block">contact@scskidn.com</span>
            </a>
          </div>
          <ul class="language-links archivo">
            <li>
              <a class="lang-active" href="<?php echo $LangLink[0]; ?>">
                JP
              </a>
            </li>
            <li>
              <a href="<?php echo $LangLink[1]; ?>">
                ID
              </a>
            </li>
            <li>
              <a href="<?php echo $LangLink[2]; ?>">
                EN
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="collapse navbar-collapse" id="navbar-links">
      <a class="d-none d-md-inline-block header-logo" href="./">
        <img class="img-fluid" src="assets/img/logo-scsk.png" alt="Logo">
      </a>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="./#service">サービス</a>
          <div class="dropdown-menu" aria-labelledby="about-us-dropdown">
            <a class="dropdown-item" href="./system-architecture.php">システム構築</a>
            <a class="dropdown-item" href="./it-infrastructure-architecture.php">IT基盤構築</a>
            <a class="dropdown-item" href="./operation-maintenance.php">運用保守</a>
            <a class="dropdown-item" href="./security.php">セキュリティ</a>
            <a class="dropdown-item" href="./consultation.php">コンサルテーション</a>
            <a class="dropdown-item" href="./outsourcing.php">アウトソーシング</a>
            <a class="dropdown-item" href="./celf.php">ノーコード開発ツール : CELF</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="about-us-dropdown">
            企業情報
          </a>
          <div class="dropdown-menu" aria-labelledby="about-us-dropdown">
            <a class="dropdown-item" href="./about-us.php#company-profile">会社概要</a>
            <a class="dropdown-item" href="./about-us.php#company-philosophy">経営理念</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact-us.php">お問い合わせ</a>
        </li>
        <li class="nav-item disabled-link">
          採用情報
          <!-- <a class="nav-link" href="./career.php"></a> -->
        </li>
      </ul>
    </div>
  </div>
</header>
