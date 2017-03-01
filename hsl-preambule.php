<?php
	$mainimagelink = $_POST['mainimglink'];
	$maintitle = $_POST['maintitle'];
	$mainpreambule = $_POST['preambule'];
	$linkbacalanjut = $_POST['mainjumplink'];
?>
<!-- wrapper starts -->
<table border="0" cellpadding="0" cellspacing="0" class="canvas-wrapper" width="100%">
	<tbody>
		<tr>
			<td align="center" valign="top"><!-- content starts -->
			<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" id="canvas-content" style="width: 90%; max-width: 600px; margin-right: 5%; margin-left: 5%; border-radius: 5px;" width="90%">
				<tbody>
					<tr>
						<td align="center" valign="top"><!-- image starts -->
						<table border="0" cellpadding="0" cellspacing="0" class="image" style="margin: 0; padding: 0;" width="100%">
							<tbody>
								<tr>
									<td align="center" style="font-size: 0px; line-height: 0px;" valign="middle"><img alt="<?php echo $maintitle; ?>" class="responsive" height="auto" src="<?php echo $mainimagelink ;?>" style="width: 100%; max-width: 600px; height: auto; border: 0; line-height: 100%; outline: none; text-decoration: none; text-align: center; margin: 0; padding: 0; border-top-left-radius: 5px; border-top-right-radius: 5px;" width="600" /></td>
								</tr>
							</tbody>
						</table>
						<!-- image ends --></td>
					</tr>
					<tr>
						<td align="center" height="30" valign="top">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" style="padding-left: 7%; padding-right: 7%;" valign="top">
						<h1 style="margin: 0; margin-bottom: 19px; font-size: 36px; line-height: 130%; font-weight: lighter; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #000;"><a href="<?php echo $linkbacalanjut; ?>" style="text-decoration:none;margin: 0; margin-bottom: 10px; font-size: 36px; line-height: 130%; font-weight: lighter; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #000;"><?php echo $maintitle; ?></a></h1>

						<p style="margin: 0; margin-bottom: 0; font-size: 17px; line-height: 150%; font-weight: normal; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #3d4d65;"><?php echo $mainpreambule;  ?></p>
						</td>
					</tr>
					<tr>
						<td align="center" height="10" valign="top">&nbsp;</td>
					</tr>				
					<?php 
						if($linkbacalanjut!= '') {
					?>	
					<tr>
						<td align="center" style="padding-left: 7%; padding-right: 7%;" valign="top"><!-- button starts -->
						<table align="center" bgcolor="#00acee" border="0" cellpadding="0" cellspacing="0" class="button" height="40" style="max-width: 100%; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0, 0.2); box-shadow: inset 0 -1px 0 rgba(0,0,0, 0.2); color: #ffffff;" width="70%">
							<tbody>
								<tr>
									<td align="center" height="40" valign="middle"><a href="<?php echo $linkbacalanjut; ?>" style="width: 100%; margin: 0; padding-bottom: 2px;padding-right:10px; font-size: 18px; line-height: 40px; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; text-decoration: none; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block; color: #ffffff;" target="_blank" title="Learn More">Baca Selengkapnya</a></td>
								</tr>
							</tbody>
						</table>
						<!-- button ends -->
						<?php } ?>
						<!-- outlook fix starts -->

						<table border="0" cellpadding="0" cellspacing="0" class="hidden" style="width: 90%; padding: 0; margin-right: 5%; margin-left: 5%;" width="100%">
							<tbody>
								<tr>
									<td align="center" valign="top">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<!-- outlook fix ends --></td>
					</tr>
					
					
					
					
				</tbody>
			</table>
			<!-- content ends --></td>
		</tr>
	</tbody>
</table>
<!-- wrapper ends -->