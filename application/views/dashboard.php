<div class="continer-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/wawa.jpg') ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/warung.jpg') ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/warung garut.jpg') ?>" alt="First slide">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<div class="row ml-1 text-center mt-3">

		<?php foreach ($barang as $brg) : ?>

	<div class="card ml-1" style="width: 16rem;">
  	<img src="<?php echo base_url().'/gambar/'.$brg->gambar?>" class="card-img-top" alt="...">
  	<div class="card-body">
    <h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5>
    <small><?php echo $brg->keterangan?></small><br>
    <span class="badge badge-success mb-6">Rp.<?php echo number_format($brg->harga, 0,',','.') ?></span>
    	<?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>')?>
      <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">detail</div>')?>
   	 	
  </div>
</div>
		<?php endforeach ?>
	</div>
</div>
