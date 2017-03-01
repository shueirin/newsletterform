<?php 
function newpilihbanner($cb){
    if (!empty($cb)){
    
    $banner = array(
        'top3cc'=>
            array(
                'linkto'=>'https://www.cekaja.com/wizard/kartu-kredit',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-cc-december.jpg',
                'alt'=>'Kartu Kredit Banyak Promo & Diskon Belanja Online'
                ),
         'insuranceproduct'=>
            array(
                'linkto'=>'https://www.cekaja.com/produk-asuransi',
                'image'=>'https://ckj-main-ai.azureedge.net/img/newletter/2016/email-banner/insurance-banner-600x200@2x.jpg',
                'alt'=>'Dapatkan Asuransi Terbaik di Indonesia Perlindungan Lengkap Biaya Terjangkau'
                ),
         'top3kta'=>
            array(
                'linkto'=>'https://www.cekaja.com/top-3-kta',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-kta-new.jpg',
                'alt'=>'Butuh dana buat segala kebutuhan?'
                ),
        'trvinsurance'=>
            array(
                'linkto'=>'https://www.cekaja.com/asuransi-perjalanan',
                'image'=>'https://ckj-main-ai.azureedge.net/img/newletter/2016/email-banner/trv-insurance-600x200@2x.jpg',
                'alt'=>'Ajukan langsung secara online Asuransi Travel untuk kenyamanan perjalanan'
                ),
        'bfi'=>
            array(
                'linkto'=>'https://www.cekaja.com/bfi-finance',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-bfi2.jpg',
                'alt'=>'Pinjaman / Kredit Dengan Jaminan BPKB Mobil / Motor & sertifikat Rumah / Ruko'
                ),
         'dbs'=>
            array(
                'linkto'=>'https://www.cekaja.com/manajemen-kekayaan-dbs-apply',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-dbs-nov.jpg',
                'alt'=>'Lindungi Aset dan Tumbuhkan Kekayaan Anda'
                ),
         'bri'=>
            array(
                'linkto'=>'https://www.bri-cekaja.com',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-bri-promo.jpg',
                'alt'=>'Bunga Ringan, Cicil Rumah Idaman'
                ),
		 'brihoki'=>
            array(
                'linkto'=>'https://www.bri-cekaja.com/digital-marketing-kredit-pemilikan-rumah-bri/',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/kprhoki-v2.jpg',
                'alt'=>'Rumah Baru di Tahun Baru dengan KPR Hoki - Bunga mulai 7,7%'
                ),
         'mtf'=>
            array(
                'linkto'=>'https://www.cekaja.com/mandiri-tunas-finance',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/mtf-lp.jpg',
                'alt'=>'Cara Baru Punya Mobil - Bunga Pintar 0% - Tenor 7 Tahun'
                ),
		  'k25'=>
            array(
                'linkto'=>'https://www.cekaja.com/kejutan-akhir-tahun-2016',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-email-kejutan25hari.jpg',
                'alt'=>'Kejutan Akhir Tahun CekAja.com #kejutan25hari'
                ),
			'kkb'=>
            array(
                'linkto'=>'https://www.cekaja.com/kredit-kendaraan-bermotor',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-kkb.jpg',
                'alt'=>'Mau Beli Mobil di 2017? Kredit Kendaraan Cicilan Ringan Ada Di Sini'
                ),
			'premiro'=>
			array(
				'linkto'=>'https://www.cekaja.com/asuransi-kendaraan',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-premiro.jpg',
                'alt'=>'Cek Asuransi Kendaraan Anda. Apakah polisnya masih berlaku? Yuk Daftar Perpanjangnya secara online di cekaja.com'
				),
			'bdigital'=>
			array(
				'linkto'=>'http://partners.bdigital.id/',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/banner-bdigital.jpg',
                'alt'=>'Usaha Laris Manis dengan Mendigitalisasikan Bisnis. Diskon hingga 30% khusus pelanggan setia CekAja'
				),
			'belirumah2017'=>
			array(
				'linkto'=>'https://www.cekaja.com/kredit-pemilikan-rumah',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/NewsletterMedia/beli-rumah-2017.jpg',
                'alt'=>'Beli Rumah di 2017 - Pakai Kredit Bunga Murah'
				),
			'dbsgold'=>
			array(
				'linkto'=>'https://www.cekaja.com/survey-dbs-treasures',
                'image'=>'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/dbs-gold-survey-header-3.jpg',
                'alt'=>'Sebagai bentuk perubahan layanan ke arah yang lebih baik, kami bekerja sama dengan DBS Treasures mengajak kamu untuk ikut berpartisipasi dalam survei online. Cukup luangkan waktu 3 menit untuk menjawab, dan 3 peserta yang beruntung masing-masing akan mendapatkan emas batangan seberat 5 gram. '
				)
    );
    
    $banneralt = $banner[$cb]['alt'];
    $bannerjump = $banner[$cb]['linkto'];
    $bannerimg = $banner[$cb]['image'];
    
    $bannerstyle1 = 'width: 90%; max-width: 600px; margin-right: 5%; margin-left: 5%; border-radius: 5px;';
    $bannerstyle2 = 'margin: 0; padding: 0;';
    $bannerstyle3 = 'font-size: 0px; line-height: 0px;';
    $bannerstyle4 = 'width: 100%; max-width: 600px; height: auto; border: 0; line-height: 100%; outline: none; text-decoration: none; text-align: center; margin: 0; padding: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;';

?>

<!-- wrapper starts -->
<table border="0" cellpadding="0" cellspacing="0" class="canvas-wrapper" width="100%">
    <tbody>
        <tr>
            <td align="center" valign="top"><!-- content starts -->
            <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" id="canvas-content" style="<?php echo $bannerstyle1; ?>" width="90%">
                <tbody>
                    <tr>
                        <td align="center" valign="top"><!-- image starts -->
                        <table border="0" cellpadding="0" cellspacing="0" class="image" style="<?php echo $bannerstyle2; ?>" width="100%">
                            <tbody>
                                <tr>
                                    <td align="center" style="<?php echo $bannerstyle3; ?>" valign="middle"><a href="<?php echo  $bannerjump; ?>" target="_blank"><img alt="<?php echo $banneralt; ?>" class="responsive" target="_blank" height="auto" src="<?php echo $bannerimg; ?>" style="<?php echo $bannerstyle4; ?>" width="600" /></a></td>
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
<!-- wrapper ends -->
<!-- wrapper divider starts-->
<?php include "con-space.php";?>
<!-- wrapper divider ends-->
<?php 
    }
    else {
        ?>
		
<!-- wrapper divider starts-->
<?php include "con-space.php";?>
<!-- wrapper divider ends-->
		
		<?php
    }
}
?>