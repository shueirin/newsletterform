<?php 
function pilihproduk($cp){
    if(!empty($cp)){
    $product = array (
    'kta-dbs'=>
        array(
            'title'=>'Kredit Tanpa Agunan<br />Bank DBS',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-01.jpg',
            'linkto'=>'https://www.cekaja.com/kta-dbs',
            'feat1'=>'Bunga mulai 0,99%',
            'feat2'=>'Pinjaman s.d. Rp200 juta',
            'feat3'=>'Tenor hingga 3 tahun'
            ),
         'kta-permata'=>
           array (
            'title'=>'Kredit Tanpa Agunan<br />Bank Permata',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-02.jpg',
            'linkto'=>'https://www.cekaja.com/kta-permata-apply',
            'feat1'=>'Bunga mulai dari 1,19%',
            'feat2'=>'Proses cepat 1 hari cair',
            'feat3'=>'Pinjaman s.d. Rp300 juta'
            ),
        'kta-scb'=>
           array (
            'title'=>'Kredit Tanpa Agunan<br />Standard Chartered',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-03.jpg',
            'linkto'=>'https://www.cekaja.com/kta-standard-chartered-apply',
            'feat1'=>'Bunga mulai 0.99%',
            'feat2'=>'Tenor s.d. 5 tahun',
            'feat3'=>'Proses cepat 3 hari kerja'
            ),
        'kta-maybank'=>
           array (
            'title'=>'Kredit Tanpa Agunan<br />Maybank',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-04.jpg',
            'linkto'=>'https://www.cekaja.com/kta-maybank-apply',
            'feat1'=>'Bunga mulai dari 0.99%',
            'feat2'=>'Pinjaman s.d. Rp250 juta',
            'feat3'=>'Tenor s.d. 5 tahun'
            ),
		'cchsbc'=>
           array (
            'title'=>'Kartu Kredit HSBC',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-11.jpg',
            'linkto'=>'https://www.cekaja.com/cc-hsbc-allcard',
            'feat1'=>'Gratis iuran 1 tahun',
            'feat2'=>'Cashback s.d. Rp1 juta di MAP',
            'feat3'=>'Gratis 2 tiket PP JKT-SG'
            ),
		'ccdanamon'=>
           array (
            'title'=>'Kartu Kredit Danamon',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-13.jpg',
            'linkto'=>'https://www.cekaja.com/kartu-kredit-danamon-ajukan',
            'feat1'=>'Gratis iuran tahunan (6 tahun)',
            'feat2'=>'Voucher blibli Rp300.000',
            'feat3'=>'Beli 6 gratis 6 di Bread Life'
            ),
		'ccuob'=>
           array (
            'title'=>'Kartu Kredit UOB',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-10.jpg',
            'linkto'=>'https://www.cekaja.com/banks/uob/kartu-kredit/uob-visa-platinum',
            'feat1'=>'Gratis iuran tahunan (1 tahun)',
            'feat2'=>'Liburan gratis 7 destinasi dunia',
            'feat3'=>'Undian harian pemakaian'
            ),
		'ccbri'=>
           array (
            'title'=>'Kartu Kredit BRI',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-12.jpg',
            'linkto'=>'https://www.cekaja.com/banks/bri/kartu-kredit',
            'feat1'=>'Gratis biaya seumur hidup',
            'feat2'=>'Beli 1 gratis 1 tiket Cinema XXI',
            'feat3'=>'Diskon McDonald 40%'
            ),
		'bfifinance'=>
           array (
            'title'=>'Kredit dengan Agunan <br />BFI Finance',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-16.jpg',
            'linkto'=>'https://www.cekaja.com/bfi-finance',
            'feat1'=>'Proses 1 hari',
            'feat2'=>'Minimum Pinjaman 1juta',
            'feat3'=>'Bunga mulai 0.95%'
            ),
		'indosurya'=>
           array (
            'title'=>'Kredit dengan Agunan<br />Indosurya',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-17.jpg',
            'linkto'=>'https://www.cekaja.com/indosurya',
            'feat1'=>'Proses persetujuan 1 jam',
            'feat2'=>'Minimum Pinjaman 40juta',
            'feat3'=>'Bunga Mulai 0.92%%'
            ),
		'uobprvimiles'=>
           array (
            'title'=>'UOB Prvmiles',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-27.jpg',
            'linkto'=>'https://www.cekaja.com/banks/uob/kartu-kredit/uob-visa-platinum',
            'feat1'=>'4500 Airlines Miles/belanja Rp15 jt',
            'feat2'=>'2x UOB Miles semua transaksi',
            'feat3'=>'<em>Double</em> poin belanja di luar negeri'
            ),
		'hsbcvisasignature'=>
           array (
            'title'=>'HSBC Visa Signature',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-28.jpg',
            'linkto'=>'https://www.cekaja.com/cc-hsbc-allcard',
            'feat1'=>'Gratis tiket PP JKT-SG/belanja Rp30 jt',
            'feat2'=>'2x poin belanja di luar negeri',
            'feat3'=>'Gratis <em>airport lounge</em> 7 kota besar'
            ),
		'danamonworld'=>
           array (
            'title'=>'Danamon World',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-29.jpg',
            'linkto'=>'https://www.cekaja.com/kartu-kredit-danamon-ajukan',
            'feat1'=>'5% <em>Cashback</em> transaksi SPBU',
            'feat2'=>'15x <em>reward point</em> transaksi ritel',
            'feat3'=>'Gratis <em>airport lounge</em> 3 kota besar'
            ),
		'citibankpremieremiles'=>
           array (
            'title'=>'Citibank Premiere Miles',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-30.jpg',
            'linkto'=>'https://www.cekaja.com/banks/citibank/kartu-kredit/citibank-visa-signature-premier-miles',
            'feat1'=>'<em>Cashback</em> s.d. Rp500 ribu',
            'feat2'=>'Gratis 700 <em>airport lounge</em> dunia',
            'feat3'=>'Pengumpulan miles lebih cepat'
            ),
		'bpr'=>
           array (
            'title'=>'Kredit dengan Agunan <br />BPR Kredit Mandiri',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-67.jpg',
            'linkto'=>'https://www.cekaja.com/bpr-kredit-mandiri-indonesia',
            'feat1'=>'Proses 1 hari',
            'feat2'=>'Nilai pinjaman hingga 70% jaminan',
            'feat3'=>'Minimum pinjaman Rp 20 Juta'
            ),
		'smart'=>
           array (
            'title'=>'Kredit dengan Agunan<br /> Smart Multi Finance ',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-68.jpg',
            'linkto'=>'https://www.cekaja.com/smart-finance-apply',
            'feat1'=>'Bunga mulai 0,8%',
            'feat2'=>'Nilai pinjaman hingga 85% jaminan',
            'feat3'=>'Minimum pinjaman Rp 30 juta'
            ),
		'kprbrihoki'=>
           array (
            'title'=>'Kredit Pemilikan Rumah <br />BRI Hoki 2017',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-89.jpg',
            'linkto'=>'https://www.bri-cekaja.com/produk-kpr/',
            'feat1'=>'Bunga promo mulai 7,7% tenor 5 tahun',
            'feat2'=>'Tenor s.d. 20 tahun',
            'feat3'=>'Uang muka mulai dari 10%'
            ),
		'kprmuamalat'=>
           array (
            'title'=>'Kredit Pemilikan Rumah <br />Bank Muamalat',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-88.jpg',
            'linkto'=>'https://www.cekaja.com/bank-muamalat-kpr-apply/',
            'feat1'=>'Angsuran setara 5% p.a hingga 6 tahun pertama',
            'feat2'=>'Khusus <em>take over</em> proses hanya 3 hari',
            'feat3'=>'Tenor s.d. 10 tahun'
            ),
		'csulfinance'=>
           array (
            'title'=>'Kredit Kendaraan <br />CSUL Finance',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-90.jpg',
            'linkto'=>'https://www.cekaja.com/csulfinance-apply/',
            'feat1'=>'<em>Cashback</em> Rp1 juta',
            'feat2'=>'Cicilan ringan hingga 5 tahun',
            'feat3'=>'Proses 2 hari'
            ),
		'mtf'=>
           array (
            'title'=>'Kredit Kendaraan <br />Mandiri Tunas Finance',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-91.jpg',
            'linkto'=>'https://www.cekaja.com/mandiri-tunas-finance/',
            'feat1'=>'Program Bunga Pintar 0%',
            'feat2'=>'Tenor s.d. 7 tahun',
            'feat3'=>'Proses cepat'
            ),
		'kkbbri'=>
           array (
            'title'=>'Kredit Kendaraan <br />Bank BRI',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-92.jpg',
            'linkto'=>'https://www.bri-cekaja.com/produk-kkb/',
            'feat1'=>'Bunga spesial mulai 3,99%',
            'feat2'=>'Voucher gratis senilai 0,25% plafon',
            'feat3'=>'Kendaraan baru / bekas'
            ),
		'csfinance'=>
           array (
            'title'=>'Kredit Kendaraan <br />CS Finance',
            'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/sub-new-93.jpg',
            'linkto'=>'https://www.cekaja.com/cs-finance-apply/',
            'feat1'=>'Plafon s.d. Rp200 juta',
            'feat2'=>'Cicilan ringan mulai Rp300 ribu',
            'feat3'=>'Penawaran spesial nasabah BCA'
            ),
    );

    $titstyle = 'margin: 0; margin-bottom: 19px; font-size: 21px; line-height: 150%; font-weight: normal; font-family: \'Open Sans\', \'Helvetica\', Arial, sans-serif; color: #17b4fd;';
    $jumpstyle = 'margin: 0; margin-bottom: 19px; font-size: 21px; line-height: 150%; font-weight: normal; font-family: \'Open Sans\', \'Helvetica\', Arial, sans-serif; color: #17b4fd;text-decoration:none;';
    $divstyle = 'text-align:left;display:inline-block;vertical-align:top;';
    $liststyle = 'margin: 0; margin-bottom: 0; font-size: 16px; line-height: 150%; font-weight: normal; font-family: \'Open Sans\', \'Helvetica\', Arial, sans-serif; color: #3d4d65;';
    $buttstyle = 'padding-left: 7%; padding-right: 7%;';
    $buttborderstyle = 'max-width: 100%; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0, 0.2); box-shadow: inset 0 -1px 0 rgba(0,0,0, 0.2); color: #ffffff;';
    $butttext = 'width: 100%; margin: 0; padding-bottom: 2px;padding-right:10px; font-size: 18px; line-height: 40px; font-family: \'Open Sans\', \'Helvetica\', Arial, sans-serif; text-decoration: none; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: block; color: #ffffff;';
    $tabspace = 'width: 90%; padding: 0; margin-right: 5%; margin-left: 5%;';
    
    $chosenproducttit = $product[$cp]['title'];
    $chosenproductimg = $product[$cp]['image'];
    $chosenproductlink = $product[$cp]['linkto'];
    $chosenproductfeat = 
        '<p style="'.$liststyle.'">☑ '.$product[$cp]['feat1'].'</p>
         <p style="'.$liststyle.'">☑ '.$product[$cp]['feat2'].'</p>
         <p style="'.$liststyle.'">☑ '.$product[$cp]['feat3'].'</p>';

?>

<h3 style="<?php echo $titstyle; ?>"><a href="<?php echo $chosenproductlink; ?>" style="<?php echo $jumpstyle; ?>" target="_blank"><?php echo $chosenproducttit; ?></a></h3>
<a href="<?php echo $chosenproductlink; ?>" target="_blank"><img alt="<?php echo $chosenproducttit; ?>" src="<?php echo $chosenproductimg; ?>" width="90%" /></a>

<div style="<?php echo $divstyle; ?>">
<center>
<table>
    <tbody>
        <tr>
            <td>
                <?php echo $chosenproductfeat;  ?>
            </td>
        </tr>
        <tr>
            <td align="center" style="<?php echo $buttstyle; ?>" valign="top"><!-- button starts -->
            <br />
            <table align="center" bgcolor="#00acee" border="0" cellpadding="0" cellspacing="0" class="button" height="40" style="<?php echo $buttborderstyle; ?>" width="100%">
                <tbody>
                    <tr>
                        <td align="center" height="40" valign="middle"><a href="<?php echo $chosenproductlink; ?>" style="<?php echo $butttext ;?>" target="_blank" title="Lebih Lanjut">Ajukan Sekarang</a></td>
                    </tr>
                </tbody>
            </table>
            <!-- button ends --><!-- outlook fix starts -->

            <table border="0" cellpadding="0" cellspacing="0" class="hidden" style="<?php echo $tabspace; ?>;" width="100%">
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

<?php 


 } else {
    echo '';
}
}

?>

