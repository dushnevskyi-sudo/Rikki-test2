<?php /** 404 page */ ?>

<section class="section section--error">
    <div class="container container--narrow center">
        <div class="error-code">404</div>
        <h1>Page not found</h1>
        <p>The page you're looking for may have been moved or no longer exists.</p>
        <div class="hero__actions center">
            <a class="btn btn--primary" href="<?= url('/') ?>">Back to home</a>
            <a class="btn btn--ghost" href="<?= url('/contact') ?>">Contact us</a>
        </div>
    </div>
</section>
