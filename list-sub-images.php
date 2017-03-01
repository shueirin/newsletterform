<?php include "top.php" ?>
<style>
	.img-box {
		margin-bottom: 20px;
	}
	.blank-box {
		background: #ccc;
		text-align: center;
		width: 100%;
		height: 165px;
		display: block;
		overflow: hidden;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">List of Sub Images</h2>
		</div>
	</div>
	<div class="row">
		<?php 
			$x = 1;			
			while ($x <= 100){
				
				$value = $x;
				if ($x < 10) {
					$value = str_pad($x, 2, "0", STR_PAD_LEFT);
				}
				$url = 'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-'.$value.'.jpg';
				
				if (@GetImageSize($url)) {

					echo '<div class="col-md-3 img-box">';
					echo '<img alt="Image" width="100%" height="auto" src="'.$url.'"  />';
					echo '</div>';
				} else {
				
					echo '<div class="col-md-4 img-box">';
				
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