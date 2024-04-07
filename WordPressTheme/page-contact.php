<?php get_header(); ?>

<main>
      <!-- 下層 FV -->
      <section class="sub-fv">
        <div class="sub-fv__inner">
          <h2 class="sub-fv__heading">
            contact
          </h2>
          <picture class="sub-fv__image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact__fv-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact__fv-sp.jpg" alt="波打ち際の画像">
          </picture>
        </div>
      </section>
      <!-- パンくずリスト -->
      <div class=" breadcrumb">
        <div class="breadcrumb__inner inner">
          <div class="breadcrumb__text-wrapper">
            <p class="breadcrumb__text">
              <a href="index.html">
                top
              </a>
              <span>お問い合わせ</span>
            </p>
          </div>
        </div>
      </div>
      <!-- 下層 コンテンツ -->
      <div class="page-contact page-layout">
        <div class="page-contact__inner inner">
          <div class="page-contact__contents-wrapper">
            <!-- お問い合わせフォーム -->
            <div class="contact-form__error">
              <span id="js-error-message" class="error-message">
                ※必須項目が入力されていません。入力してください。
              </span>
            </div>
            <form action="#" method="post" id="contact-form" class="contact-form contact-form__layout">
              <!-- 名前 -->
              <dl class="contact-form__item">
                <dt>
                  <label for="name" class="contact-form__heading">
                    お名前
                    <span>必須</span>
                  </label>
                </dt>
                <dd>
                  <input type="text" id="name" class="input-area required" name="name" placeholder="沖縄　太郎" autocomplete="name" required>
                  <!-- エラーメッセージ（内容はJSで制御） -->
                  <span class="error_required"></span>
                  <p class="name-error">
                  </p>
                </dd>
              </dl>
              <!-- メールアドレス -->
              <dl class="contact-form__item">
                <dt>
                  <label for="Email" class="contact-form__heading">
                    メールアドレス
                    <span>必須</span>
                  </label>
                </dt>
                <dd>
                  <input type="email" id="Email" class="input-area required" name="Email" placeholder="aaa000@ggmail.com" autocomplete="email" required>
                  <!-- エラーメッセージ（内容はJSで制御） -->
                  <span class="error_required"></span>
                  <p class="email-error">
                  </p>
                </dd>
              </dl>
              <!-- 電話番号 -->
              <dl class="contact-form__item">
                <dt>
                  <label for="tel" class="contact-form__heading">
                    電話番号
                    <span>必須</span>
                  </label>
                </dt>
                <dd>
                  <input type="text" id="tel" class="input-area required" name="tel" placeholder="000-0000-0000" autocomplete="tel" required>
                  <!-- エラーメッセージ（内容はJSで制御） -->
                  <span class="error_required"></span>
                  <p class="tel-error"></p>
                </dd>
              </dl>
              <!-- お問い合わせ項目（チェックボックス） -->
              <dl class="contact-form__item">
                <dt>
                  <label class="contact-form__heading">
                    お問い合わせ項目
                    <span>必須</span>
                  </label>
                </dt>
                <dd>
                  <ul class="contact-form__checkbox checkbox__items">
                    <li class="checkbox__item">
                      <label for="checkbox-01" class="checkbox-label">
                        <input id="checkbox-01" class="checkbox-input" type="checkbox" name="checkbox-name" value="ダイビング講習について">
                        <span class="checkbox-label-span">ダイビング講習について</span>
                      </label>
                    </li>
                    <li class="checkbox__item">
                      <label for="checkbox-02" class="checkbox-label">
                        <input id="checkbox-02" class="checkbox-input" type="checkbox" name="checkbox-name" value="ファンデイビングについて">
                        <span class="checkbox-label-span">ファンデイビングについて</span>
                      </label>
                    </li>
                    <li class="checkbox__item">
                      <label for="checkbox-03" class="checkbox-label">
                        <input id="checkbox-03" class="checkbox-input" type="checkbox" name="checkbox-name" value="体験ダイビングについて">
                        <span class="checkbox-label-span">体験ダイビングについて</span>
                      </label>
                    </li>
                    <li class="checkbox__item">
                      <label for="checkbox-04" class="checkbox-label">
                        <input id="checkbox-04" class="checkbox-input" type="checkbox" name="checkbox-name" value="スペシャルダイビングについて">
                        <span class="checkbox-label-span">スペシャルダイビングについて</span>
                      </label>
                    </li>
                  </ul>
                  <!-- テキスト内容はJSで制御 -->
                  <p class="checkbox-error"></p>
                </dd>
              </dl>
              <!-- キャンペーン（プルダウン選択） -->
              <dl class="contact-form__item contact-form__item--pull-down">
                <dt>
                  <label for="pull-down" class="contact-form__heading">
                    キャンペーン
                  </label>
                </dt>
                <dd>
                  <div class="custom-select">
                    <select id="pull-down" class="input-area input-area--pull-down" name="pull-down">
                      <option value="" disabled selected style="display:none;">キャンペーン内容を選択</option>
                      <option value="1">ライセンス講習</option>
                      <option value="2">体験ダイビング</option>
                      <option value="3">ファンダイビング</option>
                      <option value="4">スペシャルダイビング</option>
                    </select>
                    <!-- テキスト内容はJSで制御 --> 
                    <p class="pull-down-error"></p>
                  </div>
                </dd>
              </dl>
              <!-- お問い合わせ内容（テキスト） -->
              <dl class="contact-form__item">
                <dt>
                  <label for="message" class="contact-form__heading">
                    お問い合わせ内容
                    <span>必須</span>
                  </label>
                </dt>
                <dd>
                  <textarea id="message" class="text-area required" name="message" cols="32" rows="8" placeholder="ここにメッセージを書いてください。" required></textarea>
                  <!-- エラーメッセージ（内容はJSで制御） -->
                  <span class="error_required"></span>
                </dd>
              </dl>
              <!-- プライバシーポリシー -->
              <div class="contact-form__privacy">
                <input id="checkbox" name="privacy" class="checkbox" type="checkbox">
                <label for="checkbox" class="contact-form__privacy-text">
                  個人情報の取り扱いについて同意のうえ送信します。
                </label>
              </div>
              <!-- テキスト内容はJSで制御 -->
              <p class="privacy-error"></p>
              <!-- 送信ボタン -->
              <div class="contact-form__button">
                  <button id="js-submit" class="button" type="submit" value="send">
                    <span>send</span>
                  </button>
              </div>
            </form>
            <!-- お問い合わせフォームここまで -->
          </div>
        </div>
      </div>
      
<?php get_footer(); ?>