<?php 
	// generate products
	$numrows = $_POST['barisprod'];
	
	$v = 1;
	while ($v <= $numrows ){	
	
?>

<table border="0" cellpadding="0" cellspacing="0" class="canvas-wrapper" width="100%">
	<tbody>
		<tr>
			<td align="center" valign="top"><!-- content starts -->
			<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" id="canvas-content" style="width: 90%; max-width: 600px; margin-right: 5%; margin-left: 5%; border-radius: 5px;" width="90%">
				<tbody>
					<tr>
						<td align="center" valign="top">
						<!-- image starts -->
						<table border="0" cellpadding="0" cellspacing="0" class="image" style="margin: 0; padding: 0;" width="100%">
							<tbody>
								<tr>
									<td class="two-column" style="padding-left:5%;padding-right:5%;padding-top:3%;text-align:center;font-size:0;">
													<!--[if (gte mso 9)|(IE)]>
													<table width="100%">
													<tr>
													<td width="40%" valign="top">
													<![endif]-->
									<div class="column" style="width: 100%; max-width: 258px;display:inline-block;vertical-align:top;">
									<table width="100%">
										<tbody>
											<tr>
												<td class="inner">
												<table class="contents" style="margin-bottom:19px;">
													<tbody>
														<tr>
															<td align="center" style="color: 000;" valign="top">
																<?php pilihproduk($_POST["prod".($v*2 - 1)]); ?>
															</td>
														</tr>
													</tbody>
												</table>
												</td>
											</tr>
										</tbody>
									</table>
									</div>

									<div class="column" style="width: 100%; max-width: 258px;display:inline-block;vertical-align:top;">
									<table width="100%">
										<tbody>
											<tr>
												<td class="inner">
												<table class="contents" style="margin-bottom:19px;">
													<tbody>
														<tr>
															<td align="center" style="color: 000;" valign="top">
																<?php pilihproduk($_POST["prod".($v*2)]); ?>
															</td>
														</tr>
													</tbody>
												</table>
												</td>
											</tr>
										</tbody>
									</table>
									</div>
									</td>
								</tr>
							</tbody>
						</table>
						<!-- image ends -->
						</td>
					</tr>
				</tbody>
			</table>
			<!-- content ends -->
			</td>
		</tr>
	</tbody>
</table>

<?php 

	include "con-space.php";
	$v++;
	}
?>
