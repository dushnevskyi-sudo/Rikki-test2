<?php /** Video walkthrough / tutorial page */ ?>

<section class="page-hero">
    <div class="container">
        <h1>How it works</h1>
        <p>Watch this short video to learn how to use our platform.</p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="video-player reveal">
            <video controls width="100%" height="auto">
                <source src="<?= asset('video/video.mp4') ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="walkthrough-info reveal" style="margin-top: 40px; text-align: center;">
            <p class="muted">Video duration: ~5 minutes. For detailed questions, <a href="<?= url('/contact') ?>">contact our team</a>.</p>
        </div>
    </div>
</section>
