<?php
$args = array(
  'taxonomy' => 'property_area',
);
$taxonomy_area = get_categories($args);
$args = array(
  'taxonomy' => 'property_kind',
);
$taxonomy_kind = get_categories($args);
?>
<?php get_header();
?>

<main class="arc-property bg-LP">

  <section class="hero-m core">
    <div class="containers">
      <div class="hero-m__box">
        <h1 class="ttl-primary-lower">物件一覧</h1>
        <div class="hero-m__box--lead">関東県内の事業用不動産をお探しの方へ<br>ZEUS INBESTでお取り扱いの物件をご紹介いたします。</div>
      </div>
    </div>
  </section>

  <div class="bnr">
    <figure class="bnr__img"><a href="<?php echo esc_url(home_url('/')); ?>contact/"><img src="<?php echo assets_path() ?>img/property/bnr_contact_02.webp" alt=""></a></figure>
  </div>

  <section class="property-search">
    <div class="containers">
      <h2 class="ttl-secondary">物件検索（絞り込み条件）</h2>
      <form action="" method="post">
        <table class="property-search-table">
          <tr>
            <th>エリア</th>
            <td>
              <ul class="property-search-list">
                <?php if ($taxonomy_area) : ?>
                  <?php foreach ($taxonomy_area as $category) :
                    $key = $category->term_id;
                    $checked = "";
                    if (!empty($_POST['area'])) {
                      if (in_array($key, $_POST['area'])) {
                        $checked = " checked";
                        $area_id[] = $category->slug;
                      }
                    }
                    $area_all_id[] = $category->slug;
                  ?>
                    <li>
                      <div class="flex fS aiC"><input type="checkbox" name="area[]" value="<?php echo $category->term_id; ?>" <?php echo $checked; ?>><?php echo $category->name; ?></div>
                    </li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </td>
          </tr>
          <tr>
            <th>物件種別</th>
            <td>
              <ul class="property-search-list">
                <?php if ($taxonomy_kind) : ?>
                  <?php foreach ($taxonomy_kind as $category) :
                    $key = $category->term_id;
                    $checked = "";
                    if (!empty($_POST['kind'])) {
                      if (in_array($key, $_POST['kind'])) {
                        $checked = " checked";
                        $kind_id[] = $category->slug;
                      }
                    }
                    $kind_all_id[] = $category->slug;
                  ?>
                    <li>
                      <div class="flex fS aiC"><input type="checkbox" name="kind[]" value="<?php echo $category->term_id; ?>" <?php echo $checked; ?>><?php echo $category->name; ?></div>
                    </li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </td>
          </tr>
        </table>
        <button type="submit" class="more bgP">絞り込みをする</button>
      </form>
    </div>
  </section>


  <section class="property-result">
    <div class="containers">
      <?php
      if (empty($area_id)) {
        $area_id = $area_all_id;
      }
      if (empty($kind_id)) {
        $kind_id = $kind_all_id;
      }
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'property',
        'posts_per_page' => 10,
        'order' => 'DESC',
        'orderby' => 'post_date',
        // 'post__not_in' => $p_id,
        'tax_query' => array(
          'relation' => 'AND',
          array(
            'taxonomy' => 'property_area',
            'field' => 'slug',
            'terms' => $area_id,
            'operator' => 'IN',
          ),
          array(
            'taxonomy' => 'property_kind',
            'field' => 'slug',
            'terms' => $kind_id,
            'operator' => 'IN',
          )
        )
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) :
      ?>
        <!-- 
      <div class="property-control">
        <div class="control-sort">
          <div class="control-text">並び替え：</div>
          <select class="control-select">
            <option>おすすめ順</option>
          </select>
        </div>

        <div class="control-btn">
          <div class="control-text">表示方法：</div>
          <ul class="control-btn-list">
            <li class="btn btn-card current"></li>
            <li class="btn btn-image"></li>
          </ul>
        </div>
      </div> -->
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
          <a href="<?php the_permalink(); ?>" class="card">
            <summary class="card__box">
              <h2 class="card__box--ttl"><?php the_title(); ?>
                <ul class="tag-list">
                  <?php if ($area_terms) : ?>
                    <?php foreach ($area_terms as $area_term) : ?>
                      <li class="tag"><?php echo esc_html($area_term->name); ?></li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <?php if ($kind_terms) : ?>
                    <?php foreach ($kind_terms as $kind_term) : ?>
                      <li class="tag"><?php echo esc_html($kind_term->name); ?></li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </h2>
              <div class="card__box--item">
                <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
                <table class="card__table">
                  <?php if (!empty($address)) : ?>
                    <tr>
                      <th>所在地</th>
                      <td><?php echo wp_kses($address, $allowed_html); ?></td>
                    </tr>
                  <?php endif; ?>
                  <?php if (!empty($access)) : ?>
                    <tr>
                      <th>交通</th>
                      <td><?php echo wp_kses($access, $allowed_html); ?></td>
                    </tr>
                  <?php endif; ?>
                  <?php if (!empty($building_area)) : ?>
                    <tr>
                      <th>建物面積</th>
                      <td><?php echo wp_kses($building_area, $allowed_html); ?></td>
                    </tr>
                  <?php endif; ?>
                  <?php if (!empty($price)) : ?>
                    <tr>
                      <th>価格</th>
                      <td><?php echo wp_kses($price, $allowed_html); ?></td>
                    </tr>
                  <?php endif; ?>
                </table>
              </div>
              <div class="detail">物件の詳細を見る</div>
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

  <div class="floating-bnr">
    <div class="containers">
      <div class="floating-bnr__text pc-only"><strong>未公開物件</strong>をお探しの方はこちらからお問合せください　&gt;&gt;</div>
      <div class="floating-bnr__text sp-only"><strong>未公開物件</strong>をお探しの方はこちらからお問合せください</div>
      <div class="floating-bnr__link--contact"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="contact">お問合せ</a></div>
      <div class="floating-bnr__link--tel"><a href="tel:0120971170" class="tel">0120-971-170</a></div>
    </div>
  </div>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>物件一覧</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>