<?php include "top.php"; 
	$type = $_POST['type'];
?>
<div class="container text-center bs-example">
	<h1><?php  if ($type == 'article') {echo 'Article Newsletter';} else {echo 'Product Newsletter';}?></h1>
	<hr />				
	<div class="row"><div class="col-md-8 col-md-offset-2">
	<form method="post" action="hasil.php">
	
	<?php include 'form-date.php' ?>
	
	<?php include 'form-preambule.php' ?>
	
	
	<?php 
	// decide if this article newsletter or product newsletter
		
		if($type == 'article') {
			include 'form-articles.php';
			$postype = 'article';
		}	
	
	// generate product section form 
		
		$numprodrows = $_POST['barisprod'];	
		$v = 1;
			while ($v <= $numprodrows ){	
				echo '<div class="row">';
				echo '	<div class="col-md-6">';
				echo '		<div class="panel panel-default well well-sm">';
				echo '			 <div class="panel-body">';
				// content 
					
				echo '					<div class="form-group">';
				echo '						<label>Product '.($v*2 - 1).'</label>';
				echo '						<select class="form-control" name="prod'.($v*2 - 1).'">';
											include "product-list.php"; 
				echo '						</select>';
				echo '					</div>';
				
				// end content 
				echo '			 </div>';
				echo '		 </div>';
				echo '	 </div>';
				
				echo '	<div class="col-md-6">';
				echo '		<div class="panel panel-default well well-sm">';
				echo '			 <div class="panel-body">';
				
				// content 
				echo '					<div class="form-group">';
				echo '						<label>Product '.($v*2).'</label>';
				echo '						<select class="form-control" name="prod'.($v*2).'">';
											include "product-list.php"; 
				echo '						</select>';
				echo '					</div>';
				
				// end content 
				echo '			 </div>';
				echo '		 </div>';
				echo '	 </div>';
				echo '</div>';
				$v++;
			}
	?>
		
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default well well-sm">
				<div class="panel-body">
					
					<?php
					// generate banners
					$jmlbanner = $_POST['bannernum'];
					$j = 1;
					
					while($j <= $jmlbanner){
						echo '<div class="form-group">';
						echo '	<label>Banner '.($j).'</label>';
						echo '		<select class="form-control" name="bnr'.($j).'">';
								include 'banner-list.php';
						echo '  </select>';
						echo '</div>';
						echo '<hr />';
						$j++;
					}
					?>
						
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default well well-sm">
				<div class="panel-body">
					<input type="hidden" name="typearticle" value="<?php echo $postype;?>" />
					<input type="hidden" name="barisprod" value="<?php echo $numprodrows;?>" />
					<input type="hidden" name="jmlbanner" value="<?php echo $jmlbanner;?>" />
					<input type="SUBMIT" class="btn btn-lg btn-primary"  value="SIM SALABIM! JADILAH NEWSLETTER!!"/>
					
				</div>
			</div>
		</div>
	</div>
	
	</form>
	
	</div>
	</div>
</div>


<?php include "bottom.php" ?>
