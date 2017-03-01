<?php include "top.php" ?>
<br />
<br />
<div class="container text-center bs-example">
	<div class="jumbotron">
			<h1 style="margin-top:0;">CekAja.com Newsletter Generator</h1>
			<h5>ver. 3.01</h5>
			<hr />
			<form action="idx.php" method="post">
				<div class="row">
					<div class="col-md-12">
						<h3>Jenis Newsletternya Apa?</h3>
						<div class="radio">
						  <label>
							<input type="radio" name="type" id="article" value="article" checked>
							Newsletter dengan Artikel
						  </label>
						</div>
						<div class="radio">
						  <label>
							<input type="radio" name="type" id="product" value="product">
							Newsletter Produk
						  </label>
						</div>
					</div>
				</div>
					<div class="row">
						
						<div class="col-md-12">
							 <h3>Berapa Baris Produk?</h3>
							 <div class="radio">
							  <label>
								<input type="radio" name="barisprod" id="barisprod1" value="1" >
								1 baris (2 produk)
							  </label>
							</div>
							<div class="radio">
							  <label>
								<input type="radio" name="barisprod" id="barisprod2" value="2" checked>
								2 baris (4 produk)
							  </label>
							</div>
							<div class="radio">
							  <label>
								<input type="radio" name="barisprod" id="barisprod3" value="3">
								3 baris (6 produk)
							  </label>
							</div>
						
						</div>
				</div>
				<div class="col-md-12">
							
							<h3>Ada berapa Banner di bagian bawah?</h3>
							<div class="radio">
							  <label>
								<input type="radio" name="bannernum" id="bannernum2" value="2" checked>
								2 banner
							  </label>
							</div>
							<div class="radio">
							  <label>
								<input type="radio" name="bannernum" id="bannernum3" value="3">
								3 banner
							  </label>
							</div>
						
						</div>
			
					<hr />
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-primary">OKEH, NEXT!</button>
						</div>
					</div>
				
			</form>
	
</div>


<?php include "bottom.php" ?>
