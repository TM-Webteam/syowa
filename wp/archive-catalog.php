<?php get_header(); ?>

<main class="arc-catalog bg-LP">

  <section class="hero-m core">
    <div class="containers">
      <div class="hero-m__box">
        <h1 class="ttl-primary-lower">サービス資料</h1>
        <div class="hero-m__box--lead">サービスの特長や事例などをまとめた資料が<br class="sp-only">ダウンロードできますので是非ご覧ください。</div>
      </div>
    </div>
  </section>

  <section class="catalog-menu">
    <div class="containers">

    <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => 4,
        'post_type' => 'catalog',
        'paged' => $paged,
        'order' => 'DESC',
        'post_status' => 'publish',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

      <a href="<?php the_permalink(); ?>" class="flex aiC card">
        <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
        <summary class="card__box">
          <h2 class="card__box--ttl"><?php the_title(); ?></h2>
          <h3 class="card__box--txt"><?php echo CFS()->get('lead'); ?></h3>
          <div class="more">資料をダウンロード</div>
        </summary>
      </a>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php
    $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
    the_posts_pagination(array(
      'mid_size' => 1,
      'prev_text' => '<span></span>',
      'next_text' => '<span></span>'
    ));
    wp_reset_postdata();
    ?>

    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>サービス資料</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>