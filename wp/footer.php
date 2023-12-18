<footer>
  <div class="containers nav">
    <nav class="flex">
      <div class="nav__box">
        <div class="nav__box--ttl">サービス</div>
        <ul class="nav__box--list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>medical/">サービス詳細</a></li>
        </ul>
      </div>
      <div class="nav__box">
        <div class="nav__box--ttl">ニーズ・課題から探す</div>
        <ul class="nav__box--list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>solutions/">不動産を買いたい企業様</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>solutions/">不動産を売りたい企業様</a></li>
        </ul>
      </div>
      <div class="nav__box">
        <div class="nav__box--ttl">お役立ち情報</div>
        <ul class="nav__box--list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>whitepaper/">お役立ち資料</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></li>
        </ul>
      </div>
      <div class="nav__box">
        <div class="nav__box--ttl">お問合せ</div>
        <ul class="nav__box--list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/">サービス資料ダウンロード</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>contact/">お問合せ・お見積り</a></li>
        </ul>
      </div>
    </nav>
    <aside class="aside">
      <ul class="flex jcC inherit aside__nav">
        <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>strength/">正和工業の強み</a></li> -->
        <li><a href="<?php echo esc_url(home_url('/')); ?>sitemap/">サイトマップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>company/">運営会社</a></li>
        <li><a href="https://www.showa-kougyo.co.jp/policy/" target="_blank" rel="noopener noreferrer" class="blank">個人情報保護ポリシー</a></li>
      </ul>
      <div class="aside__copy">COPYRIGHT SHOWA-KOUGYO, All rights Reserved.</div>
    </aside>
  </div>
</footer>
<?php wp_footer(); ?>
  <script src="<?php echo assets_path() ?>js/all.min.js"></script>
    
</body>
</html>