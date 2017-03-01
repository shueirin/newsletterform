<?php 

	$artimg1 = $_POST['artimg1'];
	$arttit1 = $_POST['arttit1'];
	$artjump1 = $_POST['artjump1'];
	$artlead1 = $_POST['artlead1'];
	
	$artimg2 = $_POST['artimg2'];
	$arttit2 = $_POST['arttit2'];
	$artjump2 = $_POST['artjump2'];
	$artlead2 = $_POST['artlead2'];
	
?>
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
								<td class="two-column" style="padding-left:5%;padding-right:5%;padding-top:3%;text-align:center;font-size:0;"><!--[if (gte mso 9)|(IE)]>
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
														<td align="center" style="color: #000;" valign="top">
														<h3 style="margin: 0; margin-bottom: 19px; font-size: 21px; line-height: 150%; font-weight: normal; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #17b4fd;text-decoration:none;"><a href="<?php echo $artjump1; ?>" style="margin: 0; margin-bottom: 19px; font-size: 21px; line-height: 150%; font-weight: normal; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #17b4fd;text-decoration:none;"><?php echo $arttit1; ?></a></h3>
														<a href="<?php echo $artjump1;?>"><img alt="<?php echo $arttit1; ?>" src="<?php echo $artimg1; ?>" width="90%" /></a>
														<div style="text-align:left;display:inline-block;vertical-align:top;">
														<center>
														<table>
															<tbody>
																<tr>
																	<td>
																	<p style="margin: 0; margin-bottom: 0; font-size: 16px; line-height: 150%; font-weight: normal; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #3d4d65;"> <?php echo $artlead1;?></p>
																	</td>
																</tr>
																<tr>
																	<td align="center" style="padding-left: 7%; padding-right: 7%;" valign="top"><!-- button starts -->
																	<br />
																	<table align="center" bgcolor="#00acee" border="0" cellpadding="0" cellspacing="0" class="button" height="40" style="max-width: 100%; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0, 0.2); box-shadow: inset 0 -1px 0 rgba(0,0,0, 0.2); color: #ffffff;" width="100%">
																		<tbody>
																			<tr>
																				<td align="center" height="40" valign="middle"><a href="<?php echo $artjump1; ?>" style="width: 100%; margin: 0; padding-bottom: 2px;padding-right:10px; font-size: 18px; line-height: 40px; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; text-decoration: none; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block; color: #ffffff;" target="_blank" title="Lebih Lanjut">Baca Selengkapnya</a></td>
																			</tr>
																		</tbody>
																	</table>
																	<!-- button ends --><!-- outlook fix starts -->

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
														</center>
														</div>
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
														<td align="center" style="color: #000;" valign="top">
														<h3 style="margin: 0; margin-bottom: 19px; font-size: 21px; line-height: 150%; font-weight: normal; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #17b4fd;"><a href="<?php echo $artjump2; ?>" style="margin: 0; margin-bottom: 19px; font-size: 21px; line-height: 150%; font-weight: normal; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #17b4fd;text-decoration:none;" target="_blank"><?php echo $arttit2; ?></a></h3>
														<a href="<?php echo $artjump2; ?>" target="_blank"><img alt="<?php echo $arttit2; ?>" src="<?php echo $artimg2; ?>" width="90%" /></a>

														<div style="text-align:left;display:inline-block;vertical-align:top;">
														<center>
														<table>
															<tbody>
																<tr>
																	<td>
																	<p style="margin: 0; margin-bottom: 0; font-size: 16px; line-height: 150%; font-weight: normal; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; color: #3d4d65;"><?php echo $artlead2; ?></p>
																	</td>
																</tr>
																<tr>
																	<td align="center" style="padding-left: 7%; padding-right: 7%;" valign="top"><!-- button starts -->
																	<br />
																	<table align="center" bgcolor="#00acee" border="0" cellpadding="0" cellspacing="0" class="button" height="40" style="max-width: 100%; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0, 0.2); box-shadow: inset 0 -1px 0 rgba(0,0,0, 0.2); color: #ffffff;" width="100%">
																		<tbody>
																			<tr>
																				<td align="center" height="40" valign="middle"><a href="<?php echo $artjump2; ?>" style="width: 100%; margin: 0; padding-bottom: 2px;padding-right:10px; font-size: 18px; line-height: 40px; font-family: 'Open Sans', 'Helvetica', Arial, sans-serif; text-decoration: none; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block; color: #ffffff;" target="_blank" title="Lebih Lanjut">Baca Selengkapnya</a></td>
																			</tr>
																		</tbody>
																	</table>
																	<!-- button ends --><!-- outlook fix starts -->

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
														</center>
														</div>
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
					<!-- image ends --></td>
				</tr>
			</tbody>
		</table>
		<!-- content ends --></td>
	</tr>
</tbody>
</table>