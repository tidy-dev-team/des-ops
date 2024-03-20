<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DesOpsIL
 */

?>

</div>
  <div class="section c-flex-center black margin-tb-40">
    <div class="r-flex-center g-20 text-left">
      <div class="c-flex-center full-width g-4">
        <h1 class="haas-semi font-3 margin-b-12 margin-t-40 text-center font-7-mob">
          Design System Maturity Level Survey
        </h1>
        <h3 class="margin-tb-0 margin-b-12 noto-regular text-center">גלו מה רמת הבשלות של הדיזיין סיסטם שלכם</h3>
        <button class="seker-button noto-medium"
          onclick="window.open('https://x9saux68r0k.typeform.com/to/wPm7ABNO', '_blank');">קחו אותי לשאלון</button>
      </div>
    </div>
  </div>

  <div class="r-flex-end g-40 space-between padding-tb-40 g-32-mob flex-start-mob width-section">
    <div class="c-flex-start g-4">
      <p class="margin-tb-0 noto-regular">סושיאל</p>
      <h3 class="noto-semi margin-tb-0">
        <a href="https://www.facebook.com/groups/761862422080207/" target="_blank" class="no-link">לקהילת
          <span class="haas-semi">DesignOps Israel</span> בפייסבוק</a>
      </h3>
    </div>
    <div class="c-flex-start g-4">
      <p class="margin-tb-0 noto-regular">יצירת קשר</p>
      <h3 class="haas-semi margin-tb-0">
        <a href="mailto:hello@desops.co.il" class="no-link">hello@desops.co.il</a>
      </h3>
    </div>
    <div class="c-flex-start g-20">
      <h3 class="noto-semi margin-tb-0" style="color:#000000;">
        לקבלת תכנים ועדכונים וספאם שאנשים אוהבים :)
      </h3>
      <form id="email-form" class="r-flex-start input-wrapper">
        <input type="email" placeholder="המייל שלך פה" class="haas-semi" id="user-email" value="" oninput="resetThanks();" />
        <button type="submit" class="icon-button">
          <div class="icon" style="--url: url(https://www.desops.co.il/images/ic-arrow.svg)"></div>
        </button>
        <p class="email-footer noto-regular hidden" id="thanks">קיבלנו את המייל, תודה!</p>
      </form>
    </div>
  </div>

  <hr class="darker-hr" />

  <div class="section logo-section">
    <div class="r-flex-center g-12">
      <a href="https://www.wearekido.com" class="no-link r-flex-center" target="_blank">
        <img src="https://www.desops.co.il/images/kido-logo.svg" />
      </a>
      <p class="haas-semi" style="margin:0;">by</p>
    </div>
  </div>
<!-- <div id="wrapper">
        <iframe src="https://www.desops.co.il/footer.html" frameborder="0" class="full-width footer-frame"
            onload="this.style.height=this.contentWindow.document.getElementsByTagName('body')[0].offsetHeight+'px';"></iframe>
        <footer></footer>
    </div> -->

<?php wp_footer(); ?>

</body>
<script>
  document
    .getElementById("email-form")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      var userEmail = document.getElementById("user-email").value;
      var url =
        "https://script.google.com/macros/s/AKfycbz_FlL5yxZ8HSvXQsWYPArid0aGzfbcIs7XOl9Izz3Cokw2DOU5MrjEbgQYxpHsh1ZH/exec";
      document.getElementById("user-email").value = "";
      fetch(url, {
        method: "POST",
        mode: "no-cors",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "email=" + encodeURIComponent(userEmail),
      });
      document.getElementById("thanks").classList.remove("hidden");
    });

    function resetThanks(){
      document.getElementById("thanks").classList.add("hidden");
    }
</script>
</html>
