<?php get_header(); ?>

<main class="seller">

  <section class="hero-m core">
    <div class="containers">
      <div class="hero__box">
        <div class="hero-m__box--sub">不動産を<span>確実に・高値</span>で売りたい<small>企業様へ</small></div>
        <h1 class="ttl-primary-lower">「ZEUS INBEST」ならお客さまの所有不動産の<br>確実な売却を実現。さらに高価売却もサポートいたします。</h1>
        <!-- <div class="ctabtn">
          <div class="balloon"><span class="balloon__txt">査定は無料！お気軽にご相談ください！</span></div>
          <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more bgP">ご相談・お問合せはこちら</a>
        </div> -->
      </div>
    </div>
  </section>

  <section class="symmetry">
    <div class="containers">
      <h2 class="ttl-secondary">不動産仲介サービス「ZEUS INBEST」とは</h2>
      <dl class="card">
        <dt><img src="<?php echo assets_path() ?>img/seller/logo-symmetry.svg" alt="ZEUS INBEST" loading="lazy" decoding="async" width="343" height="88"></dt>
        <dd>ZEUS INBESTは、<span>建設ベース</span>の不動産ならではのノウハウで<br><span>確実な不動産売却</span>と、<span>高価売却</span>もサポート可能なサービスです。</dd>
      </dl>
      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--point"><span>POINT 01</span></div>
          <h2 class="item__box--ttl"><span class="marker">工場・倉庫の確実な物件売却</span>をサポート</h2>
          <div class="item__box--txt">工場や倉庫の取り扱いに強みを持つからこそわかる、物件を確実に売却するためのサポートをいたします。<br>また、工場を操業しながらの売却をご希望される場合、極秘・非公開での売却にも対応いたします。極秘で売却が必要な場合は、弊社にご相談ください。</div>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/seller/img-symmetry01.webp" alt="工場・倉庫の確実な物件売却をサポート" loading="lazy" decoding="async" width="522" height="293"></figure>
      </div>

      <div class="flex aiC item">
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/seller/img-symmetry02.webp" alt="大手企業を中心に多くの買い手顧客を保有" loading="lazy" decoding="async" width="522" height="293"></figure>
        <summary class="item__box">
          <div class="item__box--point"><span>POINT 02</span></div>
          <h2 class="item__box--ttl">大手企業を中心に<span class="marker">多くの買い手顧客を保有</span></h2>
          <div class="item__box--txt">総合建設業として長年実績を積み重ねてきた正和工業は、大手企業を中心とした多くの買い手企業様とのつながりがございます。<br>長年建設業で培ってきたネットワークを活かし、企業様同士の仲介を推進いたします。</div>
        </summary>
      </div>

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--point"><span>POINT 03</span></div>
          <h2 class="item__box--ttl"><span class="marker">物件価値を高める</span>ための独自ノウハウを保有</h2>
          <div class="item__box--txt">売却前の物件に利便性・機能性などの付加価値を付けることで、物件価値を向上させることが可能です。<br>2万件以上の物件を手掛けてきた弊社ならではの、物件価値を高めるための独自ノウハウにより物件価値を大幅に向上させ、高価売却を実現させるためのご提案もさせていただきます。</div>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/seller/img-symmetry03.webp" alt="物件価値を高めるための独自ノウハウを保有" loading="lazy" decoding="async" width="522" height="293"></figure>
      </div>

      <div class="speech"><span>査定は無料！売却をご希望の方はお気軽にご相談ください！</span></div>
      <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more bgP long">ご相談・お問合せはこちら</a>
      
    </div>
  </section>

  <?php get_template_part( 'template-parts/material' ); ?>

  <?php get_template_part( 'template-parts/casestudy' ); ?>

  <?php get_template_part( 'template-parts/about' ); ?>

  <section class="sec-column bg-G">
    <div class="containers">
      <h2 class="ttl-secondary">不動産売却前に読んでおきたいお役立ち記事</h2>
      <div class="flex jcC gap30 card">

        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page' => 3,
            'post_type' => 'column',
            'paged' => $paged,
            'order' => 'DESC',
            'post_status' => 'publish',
            'tax_query'  => array(
              array(
                'taxonomy' => 'column_category',
                'field' => 'slug',
                'terms' => 'seller',
                'operator' => 'IN',
              ),
            ),
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
              $post_id = get_the_ID();
              $post_terms = get_the_terms($post_id, 'column_category');
            ?>

            <a href="<?php the_permalink(); ?>" class="card__wrap">
              <figure class="card__wrap--img"><?php the_post_thumbnail(); ?></figure>
              <summary class="card__box">
                <div>
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <h3 class="card__box--ttl"><?php the_title(); ?></h3>
                <div><span class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></span></div>
              </summary>
            </a>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <a href="<?php echo esc_url(home_url('/')); ?>column/category/seller/" class="more">お役立ちコラム一覧を見る</a>
    </div>
  </section>

  <section class="material">
    <div class="containers">
      <h2 class="ttl-secondary cW">事業用不動産売却前に読みたいお役立ち資料</h2>
      <div class="flex jcC aiC gap50 desc">
        <figure class="desc__img"><img src="<?php echo assets_path() ?>img/common/img-wp.webp" alt=""></figure>
        <summary class="desc__box">
          <h3 class="desc__box--ttl">資料タイトルが入ります。資料タイトルが入ります。<br>資料タイトルが入ります。資料タイトルが入ります。</h3>
          <div class="desc__box--txt">資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。</div>
          <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/" class="more bgP">お役立ち資料をダウンロード</a>
        </summary>
      </div>
    </div>
  </section>

  <section class="inquiry">
    <div class="containers">
      <h2 class="ttl-secondary cW"><small>ご相談・お問合せ</small><br>査定は無料！操業中の工事の極秘・<br class="sp-only">非公開売却にも対応！<br>売却をご希望の方は<br class="sp-only">お気軽にご相談ください。</h2>
      <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more bgP">お問合せ・ご相談</a>
      <div class="flex jcC gap20 aiC inquiry__tel">
        <a href="tel:0120971170" class="tel">0120-971-170</a>
        <span>平日9:00~18:00（土日祝は除く）</span>
      </div>
      <summary class="flex aiC inquiry__box">
        <div class="inquiry__box--txt">サービス資料やお役立ち資料を<br class="sp-only">ご希望の方はこちら</div>
        <div class="flex inquiry__box--btn">
          <a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more cW tiny"><span>サービス資料</span></a>
          <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/" class="more cW tiny"><span>お役立ち資料</span></a>
        </div>
      </summary>
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
        <li>不動産を売りたい企業様</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>