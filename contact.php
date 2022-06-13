<!DOCTYPE html>
<html lang="ja">
<title>タイトル入ります</title>
<meta name="description" content="○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○" />
<?php include_once("./inc/head.php"); ?>


<body>
  <div id="contents">
    <div id="contact">
      <?php include_once("./inc/header.php"); ?>
      <section class="hero-title">
        <div>
          <img src="img/title-line.png" alt="title-line">
          <h2>CONTACT</h2>
          <h3>お問い合わせ</h3>
        </div>
      </section>

      <section class="formcontact pT100 pB100">
        <div class="inner c_table_01">
          <h3 class="c-h3Tit center ad01"><span class="fE03">CONTACT FORM</span><br><span class="txt">お問い合わせ</span></h3>

          <!-- Mailform Pro 4 CSS -->
          <link rel="stylesheet" href="/contact_form/mfp.statics/mailformpro.css" type="text/css" />

          <form id="mailformpro" action="/contact_form/mailformpro/mailformpro.cgi" method="POST">
            <div class="c_table_01">
              <table>
                <tr>
                  <th>お問い合わせ項⽬ <span class="hissu">必須</span></th>
                  <td>
                    <input id="lan" type="radio" name="お問い合わせ項目" value="LAN、ビジネスフォン等の設置" />
                    <label for="lan">LAN、ビジネスフォン等の設置・配線⼯事について監視カメラの設置・配線⼯事について メンテナンス（保守契約等）について</label> <br />
                    <input id="wifi" type="radio" name="お問い合わせ項目" value="Fi⼯事について" />
                    <label for="wifi">Wi-Fi⼯事について</label><br />
                    <input id="led" type="radio" name="お問い合わせ項目" value="LED⼯事について" />
                    <label for="led">LED⼯事について</label><br />
                    <input id="dengen" type="radio" name="お問い合わせ項目" value="電源⼯事について" />
                    <label for="dengen">電源⼯事について</label><br />
                    <input id="ryokin" type="radio" name="お問い合わせ項目" value="料⾦について" />
                    <label for="ryokin">料⾦について</label><br />
                    <input id="sonota" type="radio" name="お問い合わせ項目" value="その他お問い合わせ" />
                    <label for="sonota">その他</label><br />
                  </td>
                </tr>
                <tr>
                  <th>お問い合わせ内容</th>
                  <td><textarea name="お問い合わせ内容" class="message"></textarea></td>
                </tr>
                <tr>
                  <th>お名前 <span class="hissu">必須</span></th>
                  <td><input type="text" name="お名前" required="required" class="long" /></td>
                </tr>
                <tr>
                  <th>フリガナ <span class="hissu">必須</span></th>
                  <td><input type="text" name="フリガナ" required="required" class="long" /></td>
                </tr>
                <tr>
                  <th>メールアドレス <span class="hissu">必須</span></th>
                  <td><input type="email" data-type="email" name="email" required="required" class="long" /></td>
                </tr>
                <tr>
                  <th>郵便番号</th>
                  <td><input type="text" name="電話番号" class="long" /></td>
                </tr>
                <tr>
                  <th>ご住所</th>
                  <td><input type="text" name="電話番号" class="long" /></td>
                </tr>
                <tr>
                  <th>電話番号 <span class="hissu">必須</span></th>
                  <td><input type="text" name="電話番号" class="long" /></td>
                </tr>
                <tr>
                  <th>ご希望の連絡方法</th>
                  <td>
                    <input id="denwa" type="checkbox" name="お問い合わせ項目" value="お電話" /><label for="denwa">お電話</label><br />
                    <input id="meeru" type="checkbox" name="お問い合わせ項目" value="メール" /><label for="meeru">メール</label><br />
                    <input id="fakkusu" type="checkbox" name="お問い合わせ項目" value="ファックス" /><label
                      for="fakkusu">ファックス</label><br />
                  </td>
                </tr>
              </table>
            </div>

            <div id="privacyBox">
              <h4>個人情報保護方針について</h4>
              <p>
                ○○株式会社(以下「当社」)は、お客様の個人情報を保護することは、法令上の義務であると同時に、重要な社会的責務であると考えております。個人情報(住所・氏名・電話番号などの個人を識別できる情報)保護にあたって適切な管理体制を敷き、次のとおり個人情報保護方針を制定します。
              </p>
              <p>1.法令等を遵守します。<br>当社は、個人情報を取り扱う企業としての法的責任や社会的責任を自覚し、これを果たします。当社のすべての事業活動において個人情報に関する法令や規範等が遵守されるよう徹底します。
              </p>
              <p>
                2.個人情報の取得と利用を適正に行います。<br>当社は、個人情報の利用目的を、あらかじめお知らせし、その利用目的達成のために必要な範囲のみにおいて取り扱います。お客様の個人情報を取得する場合は、適正な方法により取得するものとし、個人情報はその利用目的に必要な範囲内で取り扱います。
              </p>
              <p>
                3.個人情報保護活動を推進します。<br>当社は、個人情報に関する教育・啓発により、個人情報保護に対する社員ひとりひとりの意識を高めます。また、当社のすべての事業や業務において個人情報の適切な取扱いを徹底します。
              </p>
              <p>
                4.継続的な改善を行います。<br>当社は、個人情報保護活動を定期的に監査し、個人情報保護への取組みを必要に応じて見直し改善します。また、個人情報に関して不安のない環境を作るため、セキュリティの確保に努めます。個人情報への不正アクセス、個人情報の紛失、破壊、改ざん、漏えい等に対処するため、必要な施策を講じます。
              </p>
              <p class="kome">※個人情報保護方針に関するお問合せ先<br>住所:〒560-0022　大阪府豊中市北桜塚2-1-16<br>TEL : 06-6849-0372</p>
            </div>
            <!--//#privacyBox-->
            <p class="center"><label><input type="checkbox" name="個人情報に同意する" value="同意する"
                  required="required" />個人情報に同意する</label></p>
            <input type="submit" value="確認画面へ" class="submit" />

          </form>
          <script type="text/javascript" id="mfpjs" src="/contact_form/mailformpro/mailformpro.cgi"
            charset="UTF-8"></script>
        </div>
        <!--innerBox-->
      </section>

    </div>
    <!--//#contact-->
  </div>
  <!--//#contents-->
  <?php include_once("./inc/footer.php"); ?>
</body>

</html>