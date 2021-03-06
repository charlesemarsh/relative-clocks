<?php // this is a very basic include which pulls in the same file everytime this is printed. ?>
<?php include 'includes/header.php' ?>
<?php
  // ok here we are setting the current page, this will do various things around the website.
  $current_page = "index";
  // would you like a slideshow on this page? if so please open up.... includes / slideshow.php
  $include_slideshow = true;
  ?>

<div class="container">
  <div class="columns sixteen">
    <div id="homepage-video-wrapper" class="desktop-only">
      <video id="homepage-video" class="video-js" autoplay loop muted preload="auto" poster="/assets/images/poster.png">
        <source src="/assets/video/Relative_Clocks_60_Second1920.mp4" type='video/mp4'>
        <source src="/assets/video/Relative_Clocks_60_Second1920.webm" type='video/webm'>
        <p class="vjs-no-js">
          To view this video please enable JavaScript, and consider upgrading to a web browser that
          <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
      </video>
    </div>
    <div id="homepage-video-wrapper-mobile" class="mobile-only">
      <video id="homepage-video-mobile" class="video-js" muted controls preload="auto" setup='{"nativeControlsForTouch": false}' poster="/assets/images/poster.png">
        <source src="/assets/video/Relative_Clocks_60_Second1920.mp4" type='video/mp4'>
        <source src="/assets/video/Relative_Clocks_60_Second1920.webm" type='video/webm'>
        <p class="vjs-no-js">
          To view this video please enable JavaScript, and consider upgrading to a web browser that
          <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
      </video>
    </div>
  </div>
</div>

<?php include 'includes/footer.php' ?>
