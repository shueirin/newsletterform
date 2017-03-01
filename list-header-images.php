<?php include "top.php" ?>
<style>
	.img-box {
		margin-bottom: 20px;
	}
	.blank-box {
		background: #ccc;
		text-align: center;
		width: 100%;
		height: 168px;
		display: block;
		overflow: hidden;
	}
</style>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">February 2017 Headers</h2>
		</div>
	</div>
	<div class="row">
		<?php 
			$x = 1;			
			while ($x <= 15){
				
				$value = $x;
				if ($x < 10) {
					$value = str_pad($x, 2, "0", STR_PAD_LEFT);
				}
				$url = 'https://ckjorchardmedia.blob.core.windows.net/media/Default/Cekaja/NewsletterMedia/header-february-2017-'.$value.'.jpg';
				
				if (@GetImageSize($url)) {

					echo '<div class="col-md-4 img-box">';
					echo '<img alt="Image January 2017" width="100%" height="auto" src="'.$url.'"  />';
					echo '</div>';
				} else {
				
					echo '<div class="col-md-4 img-box">';
					echo '<div class="blank-box">Image not Available | '.$url.'</div>';
					echo '</div>';

				}
				
				$x++;
			}
		?>
		
		<div class="col-md-12">
			<hr />
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">January 2017 Headers</h2>
		</div>
	</div>
	<div class="row">
		<?php 
			$x = 1;			
			while ($x <= 15){
				
				$value = $x;
				if ($x < 10) {
					$value = str_pad($x, 2, "0", STR_PAD_LEFT);
				}
				$url = 'https://ckjorchardmedia.blob.core.windows.net/media/Default/Cekaja/NewsletterMedia/header-january-2017-'.$value.'.jpg';
				
				if (@GetImageSize($url)) {

					echo '<div class="col-md-4 img-box">';
					echo '<img alt="Image January 2017" width="100%" height="auto" src="'.$url.'"  />';
					echo '</div>';
				} else {
				
					echo '<div class="col-md-4 img-box">';
					echo '<div class="blank-box">Image not Available | '.$url.'</div>';
					echo '</div>';

				}
				
				$x++;
			}
		?>
		
		<div class="col-md-12">
			<hr />
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">December 2016 Headers</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 img-box">
			<img alt="Selalu Sulit Menabung &amp; Kurang Uang  Sebelum Gajian?" width="100%" height="auto" src="https://ckjorchardmedia.blob.core.windows.net/media/Default/Cekaja/NewsletterMedia/header-december-2016-13.jpg"  />
		</div>
		<?php 
			$x = 1;
			while ($x <= 12){
				
				$value = $x;
				if ($x < 10) {
					$value = str_pad($x, 2, "0", STR_PAD_LEFT);
				}
				$url = 'https://ckjorchardmedia.blob.core.windows.net/media/Default/Cekaja/NewsletterMedia/header-december-2016-'.$value.'.jpg';
				
				if (@GetImageSize($url)) {

					echo '<div class="col-md-4 img-box">';
					echo '<img alt="Image January 2017" width="100%" height="auto" src="'.$url.'"  />';
					echo '</div>';
				} else {
				
					echo '<div class="col-md-4 img-box">';
					echo '<div class="blank-box">Image not Available | '.$url.'</div>';
					echo '</div>';

				}
				
				$x++;
			}
		?>
		<div class="col-md-12">
			<hr />
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">November 2016 Headers</h2>
		</div>
	</div>
	<div class="row">
		<?php 
			
			$x = 1;
			while ($x <= 13){
				
				$value = $x;
				if ($x < 10) {
					$value = str_pad($x, 2, "0", STR_PAD_LEFT);
					$url = 'https://ckjorchardmedia.blob.core.windows.net/media/Default/Cekaja/NewsletterMedia/header-november2016-'.$value.'.jpg';
					
				} else {
					$url = 'https://ckjorchardmedia.blob.core.windows.net/media/Default/Cekaja/NewsletterMedia/header-november2016-'.$x.'.jpg';
				}
				
				if (@GetImageSize($url)) {

					echo '<div class="col-md-4 img-box">';
					echo '<img alt="Image January 2017" width="100%" height="auto" src="'.$url.'"  />';
					echo '</div>';
				} else {
				
					echo '<div class="col-md-4 img-box">';
					echo '<div class="blank-box">Image not Available | '.$url.'</div>';
					echo '</div>';

				}
				
				$x++;
			}
		?>
		<div class="col-md-12">
			<hr />
		</div>
	</div>
</div>


<?php include "bottom.php" ?>