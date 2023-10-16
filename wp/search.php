<?php
$key = esc_html($s);
$args = array(
  'post_type' => get_query_var('post_type', 'column'),
  'posts_per_page' => 10, //表示数
  'paged' => get_query_var('paged', 1), //ページングする場合には記載
  'order' => 'DESC', //降順
  'orderby' => 'date', //日付でソート
  's' => get_search_query() //name=”s”のです
);
$allsearch = new WP_Query($args);
?>
<?php get_header(); ?>

<main class="tax-column bg-LP">

  <section class="">
    <div class="containers flex">

      <!-- タクソノミー -->
      <section class="main-conts article">

      <h1 class="article__ttl">「<span><?php echo $key; ?></span>」で検索した結果：<?php echo $allsearch->found_posts; ?> 件</h1>

        <div class="article__wrap">

          <?php
          if ($allsearch->have_posts()) :
          ?>
            <?php while ($allsearch->have_posts()) : $allsearch->the_post();
              $post_id = get_the_ID();
              $post_terms = get_the_terms($post_id, 'column_category');
            ?>

              <a href="<?php the_permalink(); ?>" class="flex item">
                <figure class="item__img"><?php the_post_thumbnail(); ?></figure>
                <summary class="item__box">
                  <div class="flex fS aiC gap10 item__box--row">
                    <span class="time"><?php echo esc_html(get_the_date('Y.m.d', $post_id)); ?></span>
                    <?php if ($post_terms) : ?>
                      <?php foreach ($post_terms as $post_term) : ?>
                        <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                  <h2 class="item__box--ttl"><?php the_title(); ?></h2>
                  <h3 class="item__box--lead"><?php echo wp_kses(CFS()->get('lead'), $allowed_html) ?></h3>
                </summary>
              </a>

            <?php endwhile; ?>
          <?php endif; ?>

        </div>

        <?php
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination(array(
          'mid_size' => 1,
          'prev_text' => '<span></span>',
          'next_text' => '<span></span>'
        ));
        wp_reset_postdata();
        ?>

      </section>

      <?php get_sidebar(); ?>
      
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><span><?php esc_html(single_cat_title()); ?></span>に関するコラム</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>