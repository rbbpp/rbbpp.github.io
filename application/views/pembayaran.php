<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-succes">
			<?php
			$grand_total = 0;
			if ($keranjang = $this->cart->contents())
			{
				foreach ($keranjang as $item)
			 	{
			 		$grand_total = $grand_total + $item['subtotal'];
				}
				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0,',','.');
			} ?>

		</div><br><br>
		<h3>Input Alamat Pengeriman dan Pembayaran</h3>
		<form action="<?php echo base_url('dashboard/proses_pesanan'); ?>" method="post">
			
			<div class="form-group">
				<label> Nama Lengkap</label>
				<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
			</div>

			<div class="form-group">
				<label> Alamat Lengkap</label>
				<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
			</div>

			<div class="form-group">
				<label> No. Telepon</label>
				<input type="text" name="no_telpon" placeholder="Nomor Telpon Anda" class="form-control">
			</div>

			<div class="form-group">
				<label>Jasa Pengiriman</label>
				<select>
					<option>JNE</option>
					<option>GOJEK</option>
					<option>GRAB</option>
					<option>ANTAR AJA</option>
					<option>J&T</option>
					<option>POS</option>
					<option>SI CEPAT</option>
					<option>TIKI</option>
				</select>
			</div>

			<div class="form-group">
				<label>Pilih Bank</label>
				<select>
					<option>BCA - xxxxxx</option>
					<option>BNI - xxxxxx</option>
					<option>MANDIRI - xxxxxx</option>
					<option>BANK KALTENG - xxxxxx</option>
				</select>
			</div>
			<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
		</form>
	</div>
		<div class="col-md-2"></div>
	</div>
</div>