<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>  <!--header-import-->
<section class="contact-form content-width content-height ">
      <p class="contact-form-title font-lg">Contact</p>
      <p class="contact-form-message">お問い合わせは、下記のフォームをご記入し<br>内容を確認の上、送信するボタンを押してください。</p>
      <form action="">
        <dl class="contact-form-grid">
          <div class="form-item1 select">
            <dt class="must">選択してください</dt>
            <dd>
              <label class="check-box"><input type="radio" name="select" value="デザイン">  デザイン</label>
              <label class="check-box"><input type="radio" name="select" value="制作">  制作</label>
              <label class="check-box"><input type="radio" name="select" value="見積">  見積</label>
              <label class="check-box"><input type="radio" name="select" value="その他" checked>  その他</label>
            </dd>
          </div>
          <div class="form-item2 name">
            <label for="userName">
              <dt class="must">名前</dt>
              <dd><input id="userName" class="ipt" type="text" name="username"></dd>
            </label>
          </div>
          <div class="form-item3 belong">
            <label for="belong">
              <dt>会社名・学校名</dt>
              <dd><input id="belong" class="ipt" type="text" name="belong"></dd>
            </label>
          </div>
          <div class="form-item4 email">
            <label for="email">
              <dt class="must">メール</dt>
              <dd><input id="email" class="ipt" type="email" name="userEmail"></dd>
            </label>
          </div>
          <div class="form-item5 tel">
            <label for="tel">
              <dt>電話</dt>
              <dd><input id="tel" class="ipt" type="tel" mame="tel"></dd>
            </label>
          </div>
          <div class="form-item6 address">
            <label for="address">
              <dt>住所</dt>
              <dd><input id="address" class="ipt" type="text" name="address"></dd>
            </label>
          </div>
          <div class="form-item7 title">
            <label for="title">
              <dt class="must">お問い合わせ件名</dt>
              <dd><input id="title" class="ipt" type="text" name="title"></dd>
            </label>
          </div>
          <div class="form-item8 message">
            <label for="message">
              <dt class="must">お問い合わせ内容</dt>
              <dd><textarea id="message" class="ipt-lg" name="message" id="message" cols="100" ></textarea></dd>
            </label>
          </div>
        </dl>
        <div class="form-submit submit">
          <span class="cubic-btn">
            <span class="hovering">
              <input class="submit-btn" type="submit" value="送       信">
            </span>
            <span class="default">
              <input class="submit-btn" type="submit" value="送       信">
            </span>
          </span>
          
        </div>
      </form>
    </section>


    <?php get_footer(); //footerimport