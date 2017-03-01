<?php include 'hsl-top.php'; 
	include "pilih-product.php";
	include "choosebanner.php";
?>
		
			<!-- wrapper starts -->
			<?php include "hsl-date.php"; ?>
			<!-- wrapper ends -->
			
			<?php include "hsl-preambule.php";?>
			
			<!-- wrapper divider starts-->
			<?php include "con-space.php";?>
			<!-- wrapper divider ends-->			
			
			<?php 
			// generate articles
				if ($_POST['typearticle'] == 'article') 
					{
						include 'hsl-articlerow.php';
						echo '<!-- wrapper divider starts-->';
						include "con-space.php";
						echo '<!-- wrapper divider ends-->';	
					} 
			?>
			
			<?php include 'hsl-product.php'; ?>
			
			<?php 
			//generate banners 
			$jmlbanner = $_POST['jmlbanner'];
			$b = 1;
				while ($b <= $jmlbanner ){	
					newpilihbanner($_POST["bnr".($b)]);
					$b++;
				}
			?>

			
			
			<?php include "hsl-foot.php"; ?>
			<!-- wrapper ends --><!--[if (gte mso 9)|(IE)]>
                        </td></tr></table>
                    <![endif]-->
			</td>
		</tr>
		
		
<?php include 'hsl-bot.php' ?>