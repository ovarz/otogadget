<?php require ('inc/base.php')?>
<?php require ($_SERVER['OG'].'inc/data.php')?>
<?php 
  $video_curr='0'; 
  $video_url='';
  $video_title='Otogadget | Situs yang doyan bahas-bahas ringan seputar otomotif dan gadget'; 
  $video_desc='Otogadget menyajikan video informasi seputar otomotif dan gadget terkini, test, review, harga, tips, modifikasi, dan komunitas.'; 
  
  $videotag_array[]=array('videotag_title'=>'otomotif');
  $videotag_array[]=array('videotag_title'=>'gadget');
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