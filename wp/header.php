<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJMWJ26S');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php esc_html(bloginfo('charset')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="">
<!-- <meta name="description" content="<?php bloginfo('description'); ?>"> -->
<meta name="author" content="">
<title><?php wp_title('|', true, 'right'); ?></title>
<meta name="format-detection" content="telephone=no">

<!-- Web font -->
<link rel="stylesheet" href="https://use.typekit.net/wsa2ieb.css">
<!-- <link rel="preload" href="https://use.typekit.net/wsa2ieb.css" as="style"> -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" as="style">

<!-- Style sheet -->
<link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css">
<?php wp_head(); ?>
</head>

<?php if (!empty($class)) : ?>
  <body <?php body_class($class); ?>>
<?php else : ?>
  <body <?php body_class(); ?>>
<?php endif; ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJMWJ26S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <header>
  <div class="in">
    <aside class="flex aiC inherit">
      <div class="in__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo assets_path() ?>img/common/logo.svg" alt="ZEUS INBEST" loading="lazy" decoding="async" width="273" height="70"></a></div>
      <nav class="in__nav pc-only">
        <ul class="flex jcE aiC">
          <li class="core"><a href="tel:0120971170" class="tel">0120-971-170</a><span>平日9:00~18:00（土日祝は除く）</span></li>
          <li class="in__nav--list"><a href="<?php echo esc_url(home_url('/')); ?>catalog/">サービス資料</a></li>
          <li class="in__nav--list"><a href="<?php echo esc_url(home_url('/')); ?>contact/">ご相談・お問合せ</a></li>
        </ul>
      </nav>
      <div id="nav-toggle" class="sp-only">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </aside>
  </div>
  <nav class="nav-list pc-only">
    <ul class="flex nav-list-box">
      <li><a href="<?php echo esc_url(home_url('/')); ?>service/" class="link">サービス詳細</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>buyer/" class="link">不動産を買いたい企業様</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>seller/" class="link">不動産を売りたい企業様</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>strength/" class="link">正和工業の強み</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>column/" class="link">お役立ちコラム</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>whitepaper/" class="link">お役立ち資料</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>company/" class="link">会社情報</a></li>
    </ul>
  </nav>

  <div id="gloval-nav" class="sp-only">
    <ul class="list">
      <li><a href="<?php echo esc_url(home_url('/')); ?>service/">サービス詳細</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>buyer/">不動産を買いたい企業様</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>seller/">不動産を売りたい企業様</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>strength/">正和工業の強み</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>whitepaper/">お役立ち資料</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>company/">会社情報</a></li>
    </ul>
    <ul class="aside">
      <li><a href="tel:0120971170" class="tel">0120-971-170</a><br>平日9:00~18:00（土日祝は除く）</li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more small">サービス資料</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more small">ご相談・お問合せ</a></li>
    </ul>
  </div>
</header>