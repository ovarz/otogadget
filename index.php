<?php require ('inc/base.php')?>
<?php require ($_SERVER['OG'].'inc/data.php')?>
<?php 
  $video_curr='0'; 
  $video_url='';
  $video_title='Mobil Keluarga irit Bensin 2022 | Mobil Hemat Bensin untuk keluarga | 7 Mobil Keluarga irit Bensin'; 
  $video_desc='Kali ini kami mau membahas tentang 7 Mobil yang cocok bagi keluarga. Berikut ini kami jabarkan 7 Mobil yang cocok bagi keluarga dan juga irit bbm yang OG rangkum dari berbagai sumber, Langsung aja tonton videonya.'; 
  
  $videotag_array[]=array('videotag_title'=>'mobilkeluarga');
  $videotag_array[]=array('videotag_title'=>'mobiliritbbm');
  $videotag_array[]=array('videotag_title'=>'mobilsejutaumat');
?>
<?php require ($_SERVER['OG'].'inc/meta.php')?>
<?php require ($_SERVER['OG'].'inc/header.php')?>
<div class="rancak-container">
  <div class="width-max">



	<section aria-label="Daftar Video" class="section-container section-video-list">
  	  <div class="width-max">
        <?php foreach($video_array as $video_list){ ?>
		  <?php if($video_list['video_id'] != $video_curr){ ?>
            <?php require($_SERVER['OG'].'module/video-list.php')?>
		  <?php } ?>
        <?php } ?>
	  </div>
	</section>



  </div>
</div>
<?php require ($_SERVER['OG'].'inc/footer.php')?>
<?php require ($_SERVER['OG'].'inc/base-bottom.php')?>