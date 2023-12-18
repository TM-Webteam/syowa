<?php get_header(); ?>

<main class="service">

  <section class="hero-m">
    <div class="containers">
      <div class="hero-m__box">
        <div class="hero-m__box--sub">不動産仲介から修繕・管理まで<br>まとめてサポート可能</div>
        <h1 class="ttl-primary-lower">「ZEUS INBEST」とは</h1>
        <ul class="flex inherit hero-m__box--list">
          <li>工場・倉庫中心に<br>取り扱い</li>
          <li>買い手・売り手に<br>うれしい情報提供</li>
          <li>リノベーションも<br>サポート可能</li>
        </ul>
        <div class="ctabtn">
          <div class="balloon"><span class="balloon__txt">製品の特長や料金が3分で分かる！</span></div>
          <a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more bgP">サービス資料ダウンロード</a>
        </div>
      </div>
    </div>
  </section>

  <section class="anc">
    <div class="containers">
      <ul class="flex jcC gap30 inherit anc__box">
        <li><a href="#onestop">サービス概要<br><img src="<?php echo assets_path() ?>img/common/anchor.svg" alt="" loading="lazy" decoding="async" width="23" height="23"></a></li>
        <li><a href="#features">特長<br><img src="<?php echo assets_path() ?>img/common/anchor.svg" alt="" loading="lazy" decoding="async" width="23" height="23"></a></li>
        <li><a href="#merit">メリット<br><img src="<?php echo assets_path() ?>img/common/anchor.svg" alt="" loading="lazy" decoding="async" width="23" height="23"></a></li>
        <li><a href="#forte">運営会社について<br><img src="<?php echo assets_path() ?>img/common/anchor.svg" alt="" loading="lazy" decoding="async" width="23" height="23"></a></li>
      </ul>
    </div>
  </section>

  <section id="onestop" class="onestop">
    <div class="containers">
      <h2 class="ttl-secondary">「ZEUS INBEST」は事業用不動産の売買からリノベーションまで<br>ワンストップでサポートできる、これまでにない不動産仲介サービスです。</h2>
      <figure class="onestop__img"><img src="<?php echo assets_path() ?>img/service/img.webp" alt="不動産売買仲介" loading="lazy" decoding="async" width="1032" height="199"></figure>
      <div class="lead">総合建設業である正和工業が積み重ねてきた施工実績と、豊富な人材、培った技術力・ノウハウを活かし、<br>お客様の多様化するニーズにお応えできる物件売買の仲介を実現いたします。</div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/features' ); ?>

  <section id="merit" class="merit">
    <div class="containers">
      <h2 class="ttl-secondary">不動産仲介サービス「ZEUS INBEST」のメリット</h2>

      <div class="card">
        <div class="card__sub"><span>買主様</span>のメリット</div>
        <ul class="flex jcC gap30">
          <li class="card__box">
            <h3 class="card__box--ttl">物件仲介から修繕・管理まで<br>ワンストップで対応</h3>
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/service/img-merit01.webp" alt="物件仲介から修繕・管理までワンストップで対応" loading="lazy" decoding="async" width="470" height="264"></figure>
            <div class="card__box--txt">ZEUS INBESTでは物件の仲介はもちろんのこと、<br><span class="marker">修繕・管理までワンストップで対応。</span><br>スムーズかつ理想的な物件購入をサポートします。</div>
          </li>
          <li class="card__box">
            <h3 class="card__box--ttl">検討時点で諸経費込みの投資費用が<br>算出可能</h3>
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/service/img-merit02.webp" alt="検討時点で諸経費込みの投資費用が算出可能" loading="lazy" decoding="async" width="470" height="264"></figure>
            <div class="card__box--txt">物件の購入から修繕・管理までワンストップで<br>提供できるので、検討時点で<span class="marker">修繕費・諸経費込みの<br>投資費用を算出することが可能</span>です。</div>
          </li>
        </ul>
        <a href="<?php echo esc_url(home_url('/')); ?>buyer/" class="more">詳しくはこちら</a>
      </div>

      <div class="card">
        <div class="card__sub"><span>売主様</span>のメリット</div>
        <ul class="flex jcC gap30">
          <li class="card__box">
            <h3 class="card__box--ttl">確実な売却・高価な売却を実現</h3>
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/service/img-merit03.webp" alt="確実な売却・高価な売却を実現" loading="lazy" decoding="async" width="470" height="264"></figure>
            <div class="card__box--txt">建設ベースの不動産として培った豊富なノウハウで、<br><span class="marker">確実な売却を実現。</span>物件価値を高め<br><span class="marker">高価売却をするためのご提案</span>もいたします。</div>
          </li>
          <li class="card__box">
            <h3 class="card__box--ttl">大手企業を中心に多くの買い手顧客を保有</h3>
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/service/img-merit04.webp" alt="大手企業を中心に多くの買い手顧客を保有" loading="lazy" decoding="async" width="470" height="264"></figure>
            <div class="card__box--txt">大手企業様を中心とした<br>多くの買い手企業様とのネットワークを活かし、<br><span class="marker">企業様同士の仲介を推進</span>いたします。</div>
          </li>
        </ul>
        <a href="<?php echo esc_url(home_url('/')); ?>seller/" class="more">詳しくはこちら</a>
      </div>
    </div>
  </section>
  
  <?php get_template_part( 'template-parts/material' ); ?>

  <?php get_template_part( 'template-parts/about' ); ?>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
        <li>サービス詳細</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>