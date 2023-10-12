<?php get_header(); ?>

<main class="top">

  <section class="hero">
    <div class="containers">
      <div class="hero__box">
        <div class="hero__box--sub"><span>「関東近郊」</span>工場・倉庫など事業用不動産の売買サポート</div>
        <h1 class="ttl-primary">事業用不動産を<br class="sp-only">買いたい方・<br class="pc-only">売りたい方双方に<br class="sp-only">大きなメリットを</h1>
        <div class="hero__box--txt">事業用不動産売買の仲介からお客様のニーズを満たした<br class="pc-only">リノベーションまでワンストップでサポート可能です。</div>
        <div class="ctabtn">
          <div class="balloon"><span class="balloon__txt">製品の特長や料金が3分で分かる！</span></div>
          <a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more bgP thumb">サービス資料ダウンロード</a>
        </div>
      </div>
    </div>
  </section>

  <section class="support">
    <div class="containers">
      <h2 class="ttl-secondary">売り手と買い手をつなぐサポートを<br class="sp-only">いたします。</h2>
      <div class="flex jcC gap30 card">
        <a href="<?php echo esc_url(home_url('/')); ?>buyer/" class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-support01.jpg" alt="" loading="lazy" decoding="async" width="470" height="264"></figure>
          <h3 class="card__box--ttl">不動産を<span>買いたい</span>方はこちら</h3>
          <div class="card__box--txt"><span class="marker">関東圏で物件をお探しの経営者様へ。</span><br>工場・倉庫を中心とした取り扱い物件や<br>
            サービス詳細についてはこちらをご覧ください。</div>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>seller/" class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-support02.jpg" alt="" loading="lazy" decoding="async" width="470" height="264"></figure>
          <h3 class="card__box--ttl">不動産を<span>売りたい</span>方はこちら</h3>
          <div class="card__box--txt">お客様の<span class="marker">所有不動産の確実な売却、</span><br>更に<span class="marker">高価売却をするサポート</span>まで！<br>他にはないサービスの詳細はこちらから<br class="sp-only">ご覧ください。</div>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/features' ); ?>

  <?php get_template_part( 'template-parts/forte' ); ?>

  <section class="material">
    <div class="containers">
      <h2 class="ttl-secondary cW">事業用不動産に関するお役立ち資料</h2>
      <div class="flex jcC aiC gap50 desc">
        <figure class="desc__img"><img src="<?php echo assets_path() ?>img/common/img-wp.png" alt=""></figure>
        <summary class="desc__box">
          <h3 class="desc__box--ttl">倉庫・工場はどんな基準で購入すべき？倉庫・工場の購入前に読むべきガイドブック</h3>
          <div class="desc__box--txt">倉庫・工場を購入したい方必見！倉庫・工場をどのような基準で購入すると良いか、基礎知識から押さえるべきポイントまでこの資料1つでまるっと解説しています。ぜひお手に取ってご参考ください。</div>
          <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/test/" class="more bgP">お役立ち資料をダウンロード</a>
        </summary>
      </div>
      <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/" class="more mt70 cW">お役立ち資料一覧を見る</a>
    </div>
  </section>

  <section class="sec-column">
    <div class="containers">
      <h2 class="ttl-secondary">事業用不動産お役立ちコラム</h2>
      <div class="flex jcC gap30 card">

        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page' => 3,
            'post_type' => 'column',
            'paged' => $paged,
            'order' => 'DESC',
            'post_status' => 'publish',
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
      <a href="<?php echo esc_url(home_url('/')); ?>column/" class="more">お役立ちコラム一覧を見る</a>
    </div>
  </section>

  <?php get_template_part( 'template-parts/info' ); ?>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>