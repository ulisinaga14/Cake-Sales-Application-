<br>
<h4>Daftar Kue, Silahkan Pilih</h4>
<hr>
<div class="row row-cols-1 row-cols-md-3">
<?php 

foreach($model as $b){
	echo '<div class="col mb-4">
    <div class="card h-100">
      <img src="images/'.$b->KueGambar.'" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$b->KueNama.'</h5>
        <p class="card-text">
			Harga: Rp. '.$b->KueHarga.'<br>
			Tipe: Rp. '.$b->KueTipe.'<br>
		</p>
		
		<form action="'.Yii::app()->createUrl(
						'belanja/bayar', // controller/nama action
						array(
							'id'=>$b->KueId
						)
				   ).'" method="post">

			<input type="submit" class="btn btn-primary" value="Beli">
			<input type="number" name="jumlah" value="1">			
		</form>
      </div>
    </div>
  </div>';
}
?>
</div>