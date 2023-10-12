<?php get_header(); ?>

<main class="strength">

  <section class="hero-m core">
    <div class="containers">
      <div class="hero__box">
        <h1 class="ttl-primary-lower cB">正和工業の強み</h1>
        <div class="hero-m__box--lead">建設業で積み重ねてきた経験とノウハウで、<br>お客様のニーズにお応えする不動産仲介をサポートいたします。</div>
        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more bgP">ご相談・お問合せはこちら</a>
      </div>
    </div>
  </section>

  <section class="intro">
    <div class="containers">
      <h2 class="ttl-secondary">本質的な課題を解決できる「総合建築会社」<br>それが私たち正和工業です。</h2>
      <div class="flex aiC">
        <figure class="intro__img"><img src="<?php echo assets_path() ?>img/strength/img-intro01.jpg" alt="本質的な課題を解決できる「総合建築会社」" loading="lazy" decoding="async" width="505" height="285"></figure>
        <dl class="intro__box">
          <dd>正和工業は総合建設業として、建築、設備、電気と3本の柱で構成しており、培った技術力・ノウハウを活かすことで、お客様が抱えるさまざまな経営課題を解決へと導きます。</dd>
          <dd>当社はリノベーションを行うだけではなく、その先に見えるお客様の経営資源の有効活用や、お客様が抱えるさまざまな経営課題の解決を第一に考え、ご提案いたします。</dd>
        </dl>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/about' ); ?>

  <section class="work">
    <div class="containers">

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--num">01</div>
          <h2 class="item__box--ttl">お客様・社会に寄り添ったリノベーション</h2>
          <div class="item__box--txt">正和工業がすべての工程をワンストップでリノベーションをすることにより、スムーズかつ低コストなリノベーションを実現いたします。<br>また、工事関連車両の削減、高効率・省燃費の建設重機の導入など、施工におけるCO2削減という社会問題の解決にも取り組んでいます。</div>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-work01.png" alt="お客様・社会に寄り添ったリノベーション" loading="lazy" decoding="async" width="277" height="291"></figure>
      </div>

      <div class="flex aiC item">
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-work02.png" alt="正和工業ならではの提案力" loading="lazy" decoding="async" width="277" height="291"></figure>
        <summary class="item__box">
          <div class="item__box--num">02</div>
          <h2 class="item__box--ttl">正和工業ならではの提案力</h2>
          <div class="item__box--txt">リノベーションを知り尽くした正和工業だからこそできる物件価値を高めるリノベーションをご提案いたします。外観・内装だけで無く、耐震補強など快適・安心に働ける環境のご提供を目指しています。</div>
        </summary>
      </div>

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--num">03</div>
          <h2 class="item__box--ttl">総合建設業で積み重ねた豊富な実績</h2>
          <div class="item__box--txt">確かな技術力と経験で多くのお客様より選ばれ、2万件以上もの実績がございます。<br>特に設備事業は創業時からの本業と自負しており、官公庁からも一定の評価をいただいております。</div>
          <a href="#" class="more">正和工業の実績紹介はこちら</a>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-work03.png" alt="総合建設業で積み重ねた豊富な実績" loading="lazy" decoding="async" width="277" height="291"></figure>
      </div>
      
    </div>
  </section>

  <?php get_template_part( 'template-parts/info' ); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
        <li>正和工業の強み</li>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>