<!-- information ダイビング情報 -->
<?php get_header(); ?>

<main>
      <!-- 下層 FV -->
      <section class="sub-fv">
        <div class="sub-fv__inner">
          <h2 class="sub-fv__heading">
            information
          </h2>
          <picture class="sub-fv__image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information__fv-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information__fv-sp.jpg" alt="海中のダイバーと黄色い魚の画像">
          </picture>
        </div>
      </section>
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>
      <!-- 下層 コンテンツ -->
      <section class="page-information page-layout page-layout--information">
        <div class="page-information__inner inner">
          <div class="page-information__contents">
            <!-- タブ -->
            <div class="page-information__tab tab">
              <ul class="tab__items">
                <li class="tab__item js-tab-trigger is-active" id="tab1">
                  <span>
                    ライセンス<br class="u-mobile">講習
                  </span>
                </li>
                <li class="tab__item js-tab-trigger" id="tab2">
                  <span>
                    ファン<br class="u-mobile">ダイビング
                  </span>
                </li>
                <li class="tab__item js-tab-trigger" data-id="tab03" id="tab3">
                  <span>
                    体験<br class="u-mobile">ダイビング
                  </span>
                </li>
              </ul>
            </div>
            <div class="page-information__tab-contents tab-contents">
              <ul class="tab-contents__items">
                <li class="tab-contents__item js-tab-target is-active" id="tab1-content">
                  <div class="tab-contents__heading">
                    <h2 class="tab-contents__title">
                      ライセンス講習
                    </h2>
                    <p class="tab-contents__text">
                      泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                    </p>
                  </div>
                  <figure class="tab-contents__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information__license.jpg" alt="海に浮かぶダイバーたちの画像">
                  </figure>
                </li>
                <li class="tab-contents__item js-tab-target" id="tab2-content">
                  <div class="tab-contents__heading">
                    <h2 class="tab-contents__title">
                      ファンダイビング
                    </h2>
                    <p class="tab-contents__text">
                      ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                    </p>
                  </div>
                  <figure class="tab-contents__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information__fundiving.jpg" alt="小魚の大群の画像">
                  </figure>
                </li>
                <li class="tab-contents__item js-tab-target" id="tab3-content">
                  <div class="tab-contents__heading">
                    <h2 class="tab-contents__title">
                      体験ダイビング
                    </h2>
                    <p class="tab-contents__text">
                      ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                    </p>
                  </div>
                  <figure class="tab-contents__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information__diving.jpg" alt="二匹の黄色い魚の画像">
                  </figure>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      
<?php get_footer(); ?>