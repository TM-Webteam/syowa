<?php
global $rec_wp;
$post_id = $post->ID;
$lead = get_post_meta($post_id, "lead", true);
$address = get_post_meta($post_id, "address", true);
$access = get_post_meta($post_id, "access", true);
$building_area = get_post_meta($post_id, "building_area", true);
$price = get_post_meta($post_id, "price", true);
$land_area_public_offering = get_post_meta($post_id, "land_area_public_offering", true);
$land_area_actual = get_post_meta($post_id, "land_area_actual", true);
$right = get_post_meta($post_id, "right", true);
$ground_grain = get_post_meta($post_id, "ground_grain", true);
$road = get_post_meta($post_id, "road", true);
$structure = get_post_meta($post_id, "structure", true);
$kind = get_post_meta($post_id, "kind", true);
$built_year_month = get_post_meta($post_id, "built_year_month", true);
$room_layout = get_post_meta($post_id, "room_layout", true);
$water_supply = get_post_meta($post_id, "water_supply", true);
$sewage = get_post_meta($post_id, "sewage", true);
$parking = get_post_meta($post_id, "parking", true);
$urban_planning = get_post_meta($post_id, "urban_planning", true);
$use_district = get_post_meta($post_id, "use_district", true);
$building_coverage_ratio = get_post_meta($post_id, "building_coverage_ratio", true);
$floor_area_ratio = get_post_meta($post_id, "floor_area_ratio", true);
$fireproof_specified = get_post_meta($post_id, "fireproof_specified", true);
$current_state = get_post_meta($post_id, "current_state", true);
$passing = get_post_meta($post_id, "passing", true);
$trading_aspect = get_post_meta($post_id, "trading_aspect", true);
$comment = get_post_meta($post_id, "comment", true);
$area_terms = get_the_terms($post_id, 'property_area');
$kind_terms = get_the_terms($post_id, 'property_kind');
?>
<?php get_header(); ?>
<script>
  function copy() {
    // コピー対象をJavaScript上で変数として定義する
    // var copyTarget = document.getElementById("copyTarget");
    var copyTarget = "<?php echo strip_tags(get_the_title()); ?>";

    // コピー対象のテキストを選択する
    copyTarget.select();

    // 選択しているテキストをクリップボードにコピーする
    document.execCommand("Copy");

    // コピーをお知らせする
    alert("コピーできました！ : " + copyTarget.value);
  }
</script>
<main class="sng-property bg-LP">

  <section class="">
    <div class="containers flex">

      <!-- 物件詳細 -->
      <article class="sub-conts article">

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
        <!-- <h1 class="article__ttl"><?php the_title(); ?><button onclick="copy()" class="copy"></button></h1> -->
        <h1 class="article__ttl"><?php the_title(); ?></h1>

        <h2 class="article__desc"><?php echo wp_kses($lead, $allowed_html); ?></h2>

        <!-- 資料のスライダー -->
        <div class="wp-slick">
          <div id="wp-slick">
            <figure><?php the_post_thumbnail(); ?></figure>
            <?php $detail_img_arr = CFS()->get('detail_img'); ?>
            <?php
            if (!empty($detail_img_arr)) :
              foreach ($detail_img_arr as $paragraph) :
            ?>
                <figure><img src="<?php echo $paragraph['property_image'] ?>" alt="<?php echo strip_tags(get_the_title()); ?>"></figure>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>

        <p class="notes">※図面はお問合せください。</p>

        <div class="article__table">
          <h3 class="ttl-tertiary">基本情報</h3>
          <table class="property-table">
            <?php if (!empty($price)) : ?>
              <tr>
                <th>価格</th>
                <td><?php echo wp_kses($price, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
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
          </table>

          <h3 class="ttl-tertiary">土地</h3>
          <table class="property-table">
            <tr>
              <th rowspan="2" class="pc-only">地積</th>
              <th><span class="sp-only">地積</span>公募</th>
              <td><?php echo wp_kses($land_area_public_offering, $allowed_html); ?></td>
            </tr>
            <tr>
              <th><span class="sp-only">地積</span>実測</th>
              <td><?php echo wp_kses($land_area_actual, $allowed_html); ?></td>
            </tr>
            <?php if (!empty($right)) : ?>
              <tr>
                <th>権利</th>
                <td><?php echo wp_kses($right, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <?php if (!empty($ground_grain)) : ?>
              <tr>
                <th>地目</th>
                <td><?php echo wp_kses($ground_grain, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <?php if (!empty($road)) : ?>
              <tr>
                <th>道路</th>
                <td><?php echo wp_kses($road, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
          </table>

          <h3 class="ttl-tertiary">建物</h3>
          <table class="property-table">
            <?php if (!empty($structure)) : ?>
              <tr>
                <th>構造</th>
                <td><?php echo wp_kses($structure, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <?php if (!empty($kind)) : ?>
              <tr>
                <th>種類</th>
                <td><?php echo wp_kses($kind, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <?php if (!empty($building_area)) : ?>
              <tr>
                <th>建物面積</th>
                <td><?php echo wp_kses($building_area, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <?php if (!empty($built_year_month)) : ?>
              <tr>
                <th>築年月</th>
                <td><?php echo wp_kses($built_year_month, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <?php if (!empty($room_layout)) : ?>
              <tr>
                <th>間取り</th>
                <td><?php echo wp_kses($room_layout, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
          </table>

          <h3 class="ttl-tertiary">設備</h3>
          <table class="property-table">
            <tr>
              <th>水道</th>
              <td class="property-table__td--border"><?php echo wp_kses($water_supply, $allowed_html); ?></td>
              <th>下水</th>
              <td><?php echo wp_kses($sewage, $allowed_html); ?></td>
            </tr>
            <?php if (!empty($parking)) : ?>
              <tr>
                <th>駐車場</th>
                <td colspan="3"><?php echo wp_kses($parking, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
          </table>

          <h3 class="ttl-tertiary">法令上の制限</h3>
          <table class="property-table">
            <?php if (!empty($urban_planning)) : ?>
              <tr>
                <th>都市計画</th>
                <td colspan="3"><?php echo wp_kses($urban_planning, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <?php if (!empty($use_district)) : ?>
              <tr>
                <th>用途地域</th>
                <td colspan="3"><?php echo wp_kses($use_district, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <tr>
              <th>建蔽率</th>
              <td class="property-table__td--border"><?php echo wp_kses($building_coverage_ratio, $allowed_html); ?></td>
              <th>容積率</th>
              <td><?php echo wp_kses($floor_area_ratio, $allowed_html); ?></td>
            </tr>
            <?php if (!empty($fireproof_specified)) : ?>
              <tr>
                <th>防火指定</th>
                <td colspan="3"><?php echo wp_kses($fireproof_specified, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
          </table>

          <h3 class="ttl-tertiary">その他</h3>
          <table class="property-table">
            <tr>
              <th>現況</th>
              <td class="property-table__td--border"><?php echo wp_kses($current_state, $allowed_html); ?></td>
              <th>引渡</th>
              <td><?php echo wp_kses($passing, $allowed_html); ?></td>
            </tr>
            <?php if (!empty($trading_aspect)) : ?>
              <tr>
                <th>取引態様</th>
                <td colspan="3"><?php echo wp_kses($trading_aspect, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
            <?php if (!empty($comment)) : ?>
              <tr>
                <th>備考</th>
                <td colspan="3"><?php echo wp_kses($comment, $allowed_html); ?></td>
              </tr>
            <?php endif; ?>
          </table>

        </div>

      </article>

      <!-- サイドメニュー -->
      <aside class="side-form">

        <div class="mkto">
          <div class="form__ttl">物件のお問合せフォーム</div>
          <script src="//showa.renoxia.com/js/forms2/js/forms2.min.js"></script>
          <form id="mktoForm_600"></form>
          <script>MktoForms2.loadForm("//showa.renoxia.com", "546-DCB-412", 600);</script>
        </div>

        <div class="side-bnr">
          <a half="/contact/"><img src="<?php echo assets_path() ?>img/property/bnr_contact.webp" alt="一覧に公開されていない物件も多数保有しております。詳細はぜひお問合せください。未公開物件を問い合せる"></a>
        </div>

      </aside>

    </div>
  </section>

  <?php get_template_part('template-parts/inquiry'); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>property/">物件詳細</a></li>
        <li>物件詳細ページ</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>