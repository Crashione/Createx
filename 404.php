<?php require 'doctype.php'; ?>

  <section class="error-404">
    <div class="container error-404__inner">

      <div class="error-404__content">
        <div class="error-404__code">404</div>
        <h1 class="error-404__title">Page not found</h1>
        <p class="error-404__text">
          We're sorry, the page you requested could not be found.
          Please go back to the homepage or contact us at
          <a href="mailto:hello@createx.com" class="error-404__link">hello@createx.com</a>.
        </p>
        <a href="front-page.php" class="btn__filled btn__lg">Go to homepage</a>
      </div>

      <div class="error-404__media">
        <img src="./img/404/404.webp" alt="Page not found — Createx Construction Bureau" class="error-404__img" fetchpriority="high" decoding="async" width="560" height="420">
      </div>

    </div>
  </section>

<?php
$hide_footer_top = true;
require 'footer.php';
?>