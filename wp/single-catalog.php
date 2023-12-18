<?php get_header(); ?>

<main class="bg-LP">

  <section class="">
    <div class="containers flex">

      <!-- 資料紹介 -->
      <article class="sub-conts article">

        <h1 class="article__ttl"><?php the_title(); ?></h1>

        <!-- 資料のスライダー -->
        <div class="wp-slick">
          <div id="wp-slick">
            <figure><?php the_post_thumbnail(); ?></figure>
            <?php if (!empty(CFS()->get('img-wp2'))) : ?>
              <figure><img src="<?php echo esc_url(CFS()->get('img-wp2')); ?>" alt=""></figure>
            <?php endif; ?>
            <?php if (!empty(CFS()->get('img-wp3'))) : ?>
              <figure><img src="<?php echo esc_url(CFS()->get('img-wp3')); ?>" alt=""></figure>
            <?php endif; ?>
          </div>
        </div>


        <h2 class="article__desc"><?php echo CFS()->get('lead'); ?></h2>

        <div class="article__toc">
          <h2 class="article__toc--ttl">本資料の目次</h2>
          <div class="article__toc--list">

          <?php $paragraph_arr = CFS()->get('toc'); ?>
          <?php if ($paragraph_arr) : ?>
            <dl>
              <?php foreach ($paragraph_arr as $paragraph) : ?>
              <dt><h3><?php echo esc_html(strip_tags($paragraph['title'])) ?></h3></dt>
              <?php if ($paragraph['caption']) : ?>
              <dd>
                <ul>
                  <?php foreach ((array)$paragraph['caption'] as $caption) : ?>
                    <li><h4><?php echo esc_html(strip_tags($caption['caption_title'])) ?></h4></li>
                  <?php endforeach ?>
                </ul>
              </dd>
              <?php endif; ?>
              <?php endforeach; ?>
            </dl>
          <?php endif; ?>

          </div>
        </div>

      </article>

      <!-- サイドメニュー -->
      <aside class="side-form">

        <div class="mkto">
          <div class="form__ttl">ダウンロード申込フォーム</div>
          <script src="//showa.renoxia.com/js/forms2/js/forms2.min.js"></script>
          <form id="mktoForm_<?php echo CFS()->get('form_id'); ?>"></form>
          <script>MktoForms2.loadForm("//showa.renoxia.com", "546-DCB-412", <?php echo CFS()->get('form_id'); ?>);</script>
        </div>

      </aside>
      
    </div>
  </section>
  

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/">サービス資料</a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>