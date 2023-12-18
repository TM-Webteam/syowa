<?php get_header(); ?>

<main class="buyer">

  <section class="hero-m core">
    <div class="containers">
      <div class="hero__box">
        <div class="hero-m__box--sub"><span>関東圏</span>で<span>工場・倉庫</span>の物件をお探しの<small>企業様へ</small></div>
        <h1 class="ttl-primary-lower">物件の購入から修繕・管理まで<br>「ZEUS INBEST」がワンストップでサポートいたします。</h1>
        <!-- <div class="ctabtn">
          <div class="balloon"><span class="balloon__txt">非公開物件多数！</span></div>
          <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more bgP">ご相談・お問合せはこちら</a>
        </div> -->
      </div>
    </div>
  </section>

  <section class="introduction">
    <div class="containers">
      <h2 class="ttl-secondary"><span class="marker">関東の工場・倉庫</span>を中心に取り扱い！物件紹介</h2>
      <?php
      $args = array(
        'post_type' => 'property',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'post_date',
        'meta_key' => 'lp_view_flg',
        'meta_value' => '1',
        // 'post__not_in' => $p_id,
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) :
      ?>
        <div id="introduction">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $lead = get_post_meta($post_id, "lead", true);
            $address = get_post_meta($post_id, "address", true);
            $access = get_post_meta($post_id, "access", true);
            $building_area = get_post_meta($post_id, "building_area", true);
            $price = get_post_meta($post_id, "price", true);
            $area_terms = get_the_terms($post_id, 'property_area');
            $kind_terms = get_the_terms($post_id, 'property_kind');
          ?>
            <div class="card">
              <a href="<?php the_permalink(); ?>" class="flex card__box">
                <!-- <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/buyer/img-card.webp" alt="物件" loading="lazy" decoding="async" width="138" height="138"></figure> -->

                <figure class="card__box--img"><?php the_post_thumbnail(); ?></figure>


                <summary class="card__box--details">
                  <dl class="flex fS">
                    <dt>物件種別</dt>
                    <?php if ($kind_terms) : ?>
                      <?php foreach ($kind_terms as $kind_term) : ?>
                        <dd><?php echo esc_html($kind_term->name); ?></dd>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </dl>
                  <?php if (!empty($address)) : ?>
                    <dl class="flex fS">
                      <dt>所在地</dt>
                      <dd><?php echo wp_kses($address, $allowed_html); ?></dd>
                    </dl>
                  <?php endif; ?>
                  <?php if (!empty($access)) : ?>
                    <dl class="flex fS">
                      <dt>交通</dt>
                      <dd><?php echo wp_kses($access, $allowed_html); ?></dd>
                    </dl>
                  <?php endif; ?>
                  <?php if (!empty($building_area)) : ?>
                    <dl class="flex fS">
                      <dt>建物面積</dt>
                      <dd><?php echo wp_kses($building_area, $allowed_html); ?></dd>
                    </dl>
                  <?php endif; ?>
                  <?php if (!empty($price)) : ?>
                    <dl class="flex fS">
                      <dt>価格</dt>
                      <dd><?php echo wp_kses($price, $allowed_html); ?></dd>
                    </dl>
                  <?php endif; ?>
                </summary>
              </a>
            </div>
          <?php endwhile; ?>
          <!-- <div class="card">
            <a href="#" class="flex card__box">
              <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/buyer/img-card.webp" alt="物件" loading="lazy" decoding="async" width="138" height="138"></figure>
              <summary class="card__box--details">
                <dl class="flex fS">
                  <dt>物件種別</dt>
                  <dd>工場</dd>
                </dl>
                <dl class="flex fS">
                  <dt>所在地積</dt>
                  <dd>東京都●●市●●町●丁目　マンション●号棟　501</dd>
                </dl>
                <dl class="flex fS">
                  <dt>交通</dt>
                  <dd>●●線●●駅 徒歩●●分<br>●●線●●駅 徒歩●●分</dd>
                </dl>
                <dl class="flex fS">
                  <dt>建物面積</dt>
                  <dd>●●㎡</dd>
                </dl>
                <dl class="flex fS">
                  <dt>土地面積</dt>
                  <dd>●●㎡</dd>
                </dl>
              </summary>
            </a>
          </div>
          <div class="card">
            <a href="#" class="flex card__box">
              <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/buyer/img-card.webp" alt="物件" loading="lazy" decoding="async" width="138" height="138"></figure>
              <summary class="card__box--details">
                <dl class="flex fS">
                  <dt>物件種別</dt>
                  <dd>工場</dd>
                </dl>
                <dl class="flex fS">
                  <dt>所在地積</dt>
                  <dd>東京都●●市●●町●丁目　マンション●号棟　501</dd>
                </dl>
                <dl class="flex fS">
                  <dt>交通</dt>
                  <dd>●●線●●駅 徒歩●●分<br>●●線●●駅 徒歩●●分</dd>
                </dl>
                <dl class="flex fS">
                  <dt>建物面積</dt>
                  <dd>●●㎡</dd>
                </dl>
                <dl class="flex fS">
                  <dt>土地面積</dt>
                  <dd>●●㎡</dd>
                </dl>
              </summary>
            </a>
          </div> -->
        </div>
      <?php endif; ?>
      <a href="<?php echo esc_url(home_url('/')); ?>property/" class="more">取り扱い物件一覧はこちら</a>
    </div>
  </section>

  <section class="consult">
    <div class="containers">
      <h2 class="consult__had">お気軽にご相談ください！<br>最適な物件をご提案いたします！</h2>
      <dl class="consult__box">
        <dt class="consult__box--ttl">簡単物件探し</dt>
        <dd class="consult__box--form mkto">
          <script src="//showa.renoxia.com/js/forms2/js/forms2.min.js"></script>
          <form id="mktoForm_587"></form>
          <script>MktoForms2.loadForm("//showa.renoxia.com", "546-DCB-412", 587);</script>
        </dd>
      </dl>
    </div>
  </section>

  <section class="symmetry">
    <div class="containers">
      <h2 class="ttl-secondary">不動産仲介サービス「ZEUS INBEST」とは</h2>
      <dl class="card">
        <dt><img src="<?php echo assets_path() ?>img/buyer/logo-symmetry.svg" alt="ZEUS INBEST" loading="lazy" decoding="async" width="343" height="88"></dt>
        <dd>総合建設企業として<span>施工実績2万件以上</span>の弊社が独自ルートで開拓した、<br><span>工場・倉庫を中心</span>として取り扱う不動産仲介サービスです。</dd>
      </dl>
      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--point"><span>POINT 01</span></div>
          <h2 class="item__box--ttl"><span class="marker">関東の工場・倉庫</span>など不動産多数</h2>
          <div class="item__box--txt">関東で工場や倉庫案件を多く手掛けてきた弊社だからこそ取り扱える、独自物件が多数ございます。<br>また、建設ベースの不動産だからこそわかる各物件の正確な状態や懸念点もお伝えをすることで、安心・適切な物件購入をサポートします。<br><a href="<?php echo esc_url(home_url('/')); ?>property/" class="txt-link">取り扱い物件例はこちら</a></div>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/buyer/img-symmetry01.webp" alt="関東の工場・倉庫など不動産多数" loading="lazy" decoding="async" width="522" height="293"></figure>
      </div>

      <div class="flex aiC item">
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/buyer/img-symmetry02.webp" alt="検討時点で諸経費込みの投資費用が算出可能" loading="lazy" decoding="async" width="522" height="293"></figure>
        <summary class="item__box">
          <div class="item__box--point"><span>POINT 02</span></div>
          <h2 class="item__box--ttl">検討時点で諸経費込みの<span class="marker">投資費用が算出可能</span></h2>
          <div class="item__box--txt">物件の購入から修繕・管理までワンストップで提供できるので、検討時点で修繕費・諸経費込みの投資費用を算出することが可能です。</div>
        </summary>
      </div>

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--point"><span>POINT 03</span></div>
          <h2 class="item__box--ttl">購入後の<span class="marker">修繕・管理もサポート</span></h2>
          <div class="item__box--txt">単なる不動産売買だけではなく、物件購入後のお客様のニーズにお応えした修繕・管理もサポートいたします。<br>工程も施工領域も、弊社だけで受託できることにより、スムーズかつ低コストな施工を実現いたします。</div>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/buyer/img-symmetry03.webp" alt="購入後の修繕・管理もサポート" loading="lazy" decoding="async" width="522" height="293"></figure>
      </div>

      <div class="speech"><span>関東圏の工場・倉庫の物件をお探しならお気軽にご相談ください！</span></div>
      <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more bgP long">ご相談・お問合せはこちら</a>

    </div>
  </section>

  <?php get_template_part('template-parts/material'); ?>

  <?php get_template_part('template-parts/casestudy'); ?>

  <section class="sec-column">
    <div class="containers">
      <h2 class="ttl-secondary">不動産購入前に読んでおきたいお役立ち記事</h2>
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
              'terms' => 'buyer',
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
      <a href="<?php echo esc_url(home_url('/')); ?>column/category/buyer/" class="more">お役立ちコラム一覧を見る</a>
    </div>
  </section>

  <section class="material">
    <div class="containers">
      <h2 class="ttl-secondary cW">不動産購入前に読みたいお役立ち資料</h2>
      <div class="flex jcC aiC gap50 desc">
        <figure class="desc__img"><img src="<?php echo assets_path() ?>img/common/img-wp.webp" alt=""></figure>
        <summary class="desc__box">
          <h3 class="desc__box--ttl">倉庫・工場はどんな基準で購入すべき？倉庫・工場の購入前に読むべきガイドブック</h3>
          <div class="desc__box--txt">倉庫・工場を購入したい方必見！倉庫・工場をどのような基準で購入すると良いか、基礎知識から押さえるべきポイントまでこの資料1つでまるっと解説しています。ぜひお手に取ってご参考ください。</div>
          <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/test/" class="more bgP">お役立ち資料をダウンロード</a>
        </summary>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/inquiry'); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>不動産を買いたい企業様</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>