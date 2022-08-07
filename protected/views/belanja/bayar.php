<br>
<h4>Informasi Kue Yang dibeli</h4>
<hr>
<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-m8g3NlikP6uPsSgS"></script>
<div class="row row-cols-1 row-cols-md-3">
<?php 

$b = $kue;
	echo '<div class="col mb-4">
    <div class="card h-100">
      <img src="images/'.$b->KueGambar.'" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$b->KueNama.'</h5>
        <p class="card-text">
			Harga: Rp. '.$b->KueHarga.'<br>
			Tipe: Rp. '.$b->KueTipe.'<br>
			Jumlah Beli: Rp. '.$_POST['jumlah'].'<br>
			Total: Rp. '.($b->KueHarga*$_POST['jumlah']).'<br>
		</p>
		<a href="#" id="pay-button" class="btn btn-primary">Bayar</a>
      </div>
    </div>
  </div>';
?>
</div>
<script type="text/javascript">
  var payButton = document.getElementById('pay-button');
  // For example trigger on button clicked, or any time you need
  payButton.addEventListener('click', function () {
	window.snap.pay('<?php echo $token?>'); // Replace it with your transaction token
  });
</script>