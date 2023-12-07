<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<?php $session = session(); ?>
<main class="container">

	<div class="pagetitle">
		<h1>Checkout</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item">Tables</li>
				<li class="breadcrumb-item active">Data</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<section class="section">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6">
						<!-- Vertical Form -->
						<?= form_open('cart/buy', 'class="row g-3"') ?>
						<input type="hidden" name="username" value="<?= ($session->get('username')) ?>">
						<input type="hidden" name="price_total" id="price_total" value="">
						<div class="col-12">
							<label for="name" class="form-label">Nama</label>
							<input type="text" class="form-control" name="name" id="name"
								value="<?php echo $session->get('username') ?>" required>
						</div>
						<div class="col-12">
							<label for="address" class="form-label">Alamat</label>
							<input type="text" class="form-control" id="address" name="address" required>
						</div>
						<div class="col-12">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" name="email" required>
						</div>
						<div class="col-12">
							<label for="provinsi" class="form-label">Provinsi</label>
							<select class="form-select" id="provinsi" required>
								<option>Silakan pilih provinsi</option>
								<?php foreach ($provinsi as $p): ?>
									<option value="<?= $p->province_id ?>">
										<?= $p->province ?>
									</option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="col-12">
							<label for="kabkota" class="form-label">Kab/Kota</label>
							<select class="form-select" id="kabupaten" required>
								<option>Silakan pilih Kab/Kota</option>
							</select>
						</div>
						<div class="col-12">
							<label for="layanan" class="form-label">Layanan</label>
							<select class="form-select" id="service" required>
								<option>Silakan pilih Layanan</option>
							</select>
						</div>
						<div class="col-12">
							<label for="ongkir" class="form-label">Ongkir</label>
							<input type="text" class="form-control" id="fare" name="fare" readonly>
						</div>
					</div>
					<div class="col-lg-6">
						<!-- Vertical Form -->
						<div class="col-12">
							<!-- Default Table -->
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Nama</th>
										<th scope="col">Harga</th>
										<th scope="col">Jumlah</th>
										<th scope="col">Sub Total</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									if (!empty($items)):
										foreach ($items as $index => $item):
											?>
											<tr>
												<td>
													<?php echo $item['name'] ?>
												</td>
												<td>
													<?php echo number_to_currency($item['disprice'], 'IDR') ?>
												</td>
												<td>
													<?php echo $item['qty'] ?>
												</td>
												<td>
													<?php echo number_to_currency($item['disprice'] * $item['qty'], 'IDR') ?>
												</td>
											</tr>
											<?php
										endforeach;
									endif;
									?>
									<tr>
										<td colspan="2"></td>
										<td>Subtotal</td>
										<td>
											<?php echo number_to_currency($total, 'IDR') ?>
										</td>
									</tr>
									<tr>
										<td colspan="2"></td>
										<td>Total</td>
										<td><span id="total">
												<?php echo number_to_currency($total, 'IDR') ?>
											</span></td>
									</tr>
								</tbody>
							</table>
							<!-- End Default Table Example -->
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Buat Pesanan</button>
						</div>
						</form><!-- Vertical Form -->
					</div>
				</div>
			</div>
		</div>
	</section>

</main><!-- End #main -->
<?= $this->endSection('content') ?>

<?= $this->section('script') ?>
<script>
	$('document').ready(function () {
		var fare = 0;
		$("#provinsi").on('change', function () {
			$("#kabupaten").empty();
			var id_province = $(this).val();
			console.log(id_province)
			$.ajax({
				url: "<?= site_url('cart/getcity') ?>",
				type: 'GET',
				data: {
					'id_province': id_province,
				},
				dataType: 'json',
				success: function (data) {
					console.log(data);
					var results = data["rajaongkir"]["results"];
					for (var i = 0; i < results.length; i++) {
						$("#kabupaten").append($('<option>', {
							value: results[i]["city_id"],
							text: results[i]['city_name']
						}));
					}
				},

			});
		});

		$("#kabupaten").on('change', function () {
			var id_city = $(this).val();
			$.ajax({
				url: "<?= site_url('cart/getcost') ?>",
				type: 'GET',
				data: {
					'origin': 399,
					'destination': id_city,
					'weight': 1000,
					'courier': 'jne'
				},
				dataType: 'json',
				success: function (data) {
					console.log(data);
					var results = data["rajaongkir"]["results"][0]["costs"];
					for (var i = 0; i < results.length; i++) {
						var text = results[i]["description"] + "(" + results[i]["service"] + ")";
						$("#service").append($('<option>', {
							value: results[i]["cost"][0]["value"],
							text: text,
							etd: results[i]["cost"][0]["etd"]
						}));
					}
				},

			});
		});

		$("#service").on('change', function () {
			var estimasi = $('option:selected', this).attr('etd'),
			fare = parseInt($(this).val());
			var total = fare + <?= $total ?>;
            $("#fare").val(fare);
			$("#total").html("IDR " + total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'));
			$("#price_total").val(total);
		});
	});
</script>
<?= $this->endSection() ?>