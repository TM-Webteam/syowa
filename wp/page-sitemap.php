<?php get_header(); ?>

<main class="sitemap">

  <section class="hero-m small core">
    <div class="containers">
      <div class="hero-m__box">
        <h1 class="ttl-primary-lower">サイトマップ</h1>
      </div>
    </div>
  </section>

  <section>
    <div class="containers flex fS gap60">

      <div class="group">
        <div class="group__ttl">サービスについて</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>service/">サービス詳細</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">正和工業について</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>strength/">正和工業の強み</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>company/">会社情報</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お役立ち情報</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>whitepaper/">お役立ち資料</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お問合せ</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/">サービス資料ダウンロード</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>contact/">お問合せ・ご相談</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">ニーズ・課題から探す</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>buyer/">不動産を買いたい企業様</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>seller/">不動産を売りたい企業様</a></li>
        </ul>
      </div>

    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>サイトマップ</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>