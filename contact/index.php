  <?php
   $Path = '../';
	 include_once( $Path."inc/head.php");
	?>
  <link rel="stylesheet" href="<?= $rootURL; ?>/common/forms/mfp.statics/mailformpro.css" type="text/css">
  </head>

  <body class="under">
    <div id="wb_wrap" class="lo_wrapper">
      <?php	include_once($Path."inc/header.php"); ?>
      <?php	include_once($Path."inc/spnaviwrap.php"); ?>
      <!-- spnaviwrap -->
      <main class="under_w contact">
        <div class="maincont" id="contents">
          <div id="parts">
            <section class="partsArea bk_gry_f1f1" id="contactArea01">
              <article class="gaps">
                <h2 class="partsC_tit_2"><b>contact</b></h2>

                <div class="wrap inner_1000">
                  <div class="parts_detail">

                    <div class="txt_Box">
                      <p>メールフォームプロ　4.2.7　有料版を使用 <a class="parts_link" href="<?= $rootURL; ?>/common/forms/mailformpro4.2.7.pdf" target="_blank" rel="noreferrer">説明書はこちら</a></p>
                      <p> <a class="parts_link" href="<?= $rootURL; ?>entry/">エントリーフォームはこちら</a></p>
                    </div>
                  </div>
                  <div class="partsIn_wp">

                    　　　　　　　　　　
                    <!-- メールフォームプロ-->
                    <form id="mailformpro" action="./" method="POST" enctype="multipart/form-data">
                      <div class="c_form01">
                        <table class="style01">
                          <tr>
                            <th>お問い合わせ種別<span class="hissu">必須</span></th>
                            <td>
                              <ul class="inp_radio">
                                <li><label><input type="radio" name="お問い合わせ種別" value="Webサイトの新規制作について" required="required" data-min="1" /><span>Webサイトの新規制作について</span></label></li>
                                <li><label><input type="radio" name="お問い合わせ種別" value="Webサイトの運用・管理について" required="required" /><span>Webサイトの運用・管理について</span></label></li>
                                <li><label><input type="radio" name="お問い合わせ種別" value="採用について" 　required="required" /><span>採用について</span></label></li>
                                <li><label><input type="radio" name="お問い合わせ種別" value="その他" 　required="required" /><span>その他</span></label></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <th>ご氏名<span class="hissu">必須</span></th>
                            <td><input type="text" name="ご氏名" required="required" class="inp01 middle" /></td>
                          </tr>
                          <tr>
                            <th>フリガナ<span class="hissu">必須</span></th>
                            <td><input type="text" name="フリガナ" required="required" class="inp01 middle" /></td>
                          </tr>
                          <tr>
                            <th>お電話番号<span class="hissu">必須</span></th>
                            <td><input type="tel" data-type="tel" name="電話番号" required="required" class="inp01 middle" /></td>
                          </tr>
                          <tr>
                            <th>メールアドレス<span class="hissu">必須</span></th>
                            <td><input type="email" data-type="email" data-parent="mailfield" name="email" required="required" class="inp01 long" /></td>
                          </tr>
                          <tr>
                            <th>ご希望の連絡方法<span class="nini">任意</span></th>
                            <td>
                              <ul class="inp_radio">
                                <li><label><input type="radio" name="ご希望の連絡方法" value="お電話" /><span>お電話</span></label></li>
                                <li><label><input type="radio" name="ご希望の連絡方法" value="メール" /><span>メール</span></label></li>
                                <li><label><input type="radio" name="ご希望の連絡方法" value="どちらも可" /><span>どちらも可</span></label></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <th>ご希望の時間帯<span class="nini">任意</span></th>
                            <td>
                              <ul class="inp_checkbox">
                                <li><label><input type="checkbox" name="ご希望の時間帯" value="午前" /><span>午前</span></label></li>
                                <li><label><input type="checkbox" name="ご希望の時間帯" value="午後" /><span>午後</span></label></li>
                                <li><label><input type="checkbox" name="ご希望の時間帯" value="夕方" /><span>夕方</span></label></li>
                                <li><label><input type="checkbox" name="ご希望の時間帯" value="その他" /><span>その他</span></label></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <th>お問い合わせ内容<span class="hissu">必須</span></th>
                            <td><textarea class="inp_txtarea long" name="お問い合わせ内容" required="required" placeholder="お問い合わせ内容"></textarea></td>
                          </tr>
                        </table>
                        <div class="kojin_wrap">
                          <p><strong>■&nbsp;個人情報の取扱について</strong><br />
                            このエントリーフォームにご記入いただきました個人情報は、エントリーの回答を目的として使用します。<br>
                            この個人情報は、ご本人の承諾なしに第三者（弊社業務委託先を除く）に提供することはありません。<br>
                          </p>
                          <a class="txt_link" href="./privacy/">個人情報保護方針についてはこちら</a>
                          <div class="kojin_checkwp checkbox-deko">
                            <label>
                              <input type="checkbox" required="required" data-exc="1" name="個人情報保護方針に同意する" value="個人情報保護方針に同意する">
                              <span>個人情報保護方針に同意する</span>
                            </label>
                          </div>
                        </div>
                        <div class="submit_wrap">
                          <input type="submit" value="確認画面へ" class="submit" /></td>
                        </div>
                      </div>
                      <!--contact_form -->
                    </form>
                    <script type="text/javascript" id="mfpjs" src="<?= $rootURL; ?>/common/forms/mailformpro/mailformpro.cgi" charset="UTF-8"></script>
                    　
                    <!-- メールフォームプロ-->
                  </div><!-- wrap-->

              </article>
            </section>


          </div><!-- parts -->
        </div>
        <!-- maincont -->
      </main>
      <?php	include_once( $Path."inc/footer.php"); ?>
    </div>
    <!-- .wrap -->
  </body>
  </html>