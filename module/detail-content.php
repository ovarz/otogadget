<section aria-label="Video Player" class="section-video-player">
  <div class="svp-frame">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_embed ?>?autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</section>



<section aria-label="Informasi Video" class="section-container section-video-info">
  <div class="width-max">
    <div class="svi-box">
      <h1 class="svi-title"><?php echo $video_title; ?></h1>
      <h2 class="svi-desc"><?php echo $video_desc; ?></h2>
      <div class="svi-share">
        <div class="svi-share-label">Share :</div>
        <div class="svi-share-list">
          <a aria-label="Share Facebook" title="Share Facebook" class="svi-share-button svi-share-fb" target="_blank"
          href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.otogadget.id%2F<?php echo $video_url; ?>">
            <?php require ($_SERVER['OG'].'img/icon/share-facebook.svg')?>
          </a>
          <a aria-label="Share Facebook" title="Share Facebook" class="svi-share-button svi-share-tw" target="_blank"
          href="https://twitter.com/intent/tweet?text=<?php echo $video_title; ?> https://www.otogadget.id/<?php echo $video_url; ?>">
            <?php require ($_SERVER['OG'].'img/icon/share-twitter.svg')?>
          </a>
          <a aria-label="Share Facebook" title="Share Facebook" class="svi-share-button svi-share-wa" target="_blank"
          href="https://api.whatsapp.com/send?text=<?php echo $video_title; ?> https://www.otogadget.id/<?php echo $video_url; ?>">
            <?php require ($_SERVER['OG'].'img/icon/share-whatsapp.svg')?>
          </a>
          <a aria-label="Share Facebook" title="Share Facebook" class="svi-share-button svi-share-tg" target="_blank"
          href="https://t.me/share/url?url=https://www.otogadget.id/<?php echo $video_url; ?>&text=<?php echo $video_title; ?>" >
            <?php require ($_SERVER['OG'].'img/icon/share-telegram.svg')?>
          </a>
        </div>
      </div>
      <div class="svi-tag">
        <?php foreach($videotag_array as $videotag_list){ ?>
          <h3 class="svl-tag-label">#<?php echo($videotag_list['videotag_title']) ?></h3>
        <?php } ?>
      </div>
    </div>
  </div>
</section>



<section aria-label="Daftar Video" class="section-container section-video-list">
  <div class="width-max">
    <?php foreach($video_array as $video_list){ ?>
      <?php if($video_list['video_id'] != $video_curr){ ?>
        <?php require($_SERVER['OG'].'module/video-list.php')?>
      <?php } ?>
    <?php } ?>
  </div>
</section>