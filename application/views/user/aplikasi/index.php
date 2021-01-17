<?php if(!$is_result): ?>
<div class="container" id="form-masukan">
	<div class="row">
		<div class="col-7 mx-auto">
			<div class="card">
				<div class="card-header">
					<h3>Kalkulator Diet</h3>
				</div>
				<div class="card-body">
					<form action="<?= base_url('user/App/kalkulator') ?>" method="post">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="row mb-2">
							<div class="col-6">
								<label>Umur</label>
								<input type="number" min="1" name="umur" class="form-control">
							</div>
							<div class="col-6">
								<!-- <p class="font-weight-bold">Jenis Kelamin</p>
								<label class="float-left">Pria</label>
								<label class="float-right">Wanita</label>
								<input type="range" name="jenis_kelamin" min="0" max="1" step="0.1" class="form-control-range"> -->
								<label>Jenis Kelamin</label>
								<select name="jenis_kelamin" class="form-control">
									<option value="pria">Pria</option>
									<option value="wanita">Wanita</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Berat Badan</label>
									<input type="number" min="1" name="berat_badan" class="form-control">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Tinggi Badan</label>
									<input type="number" min="1" name="tinggi_badan" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Aktivitas</label>
							<select class="form-control" name="aktivitas">
								<option>Belum dipilih</option>
								<option value="sangat ringan">Sangat Ringan</option>
								<option value="ringan">Ringan</option>
								<option value="sedang">Sedang</option>
								<option value="berat">Berat</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">SUBMIT DATA</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php else: ?>
	<div class="container">
		<div class="row">
			<div class="col-10 mx-auto">
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Rekomendasi Diet Pasien Jantung Koroner</h4>
					</div>
					<div class="card-body">
						<h4>Nama : Fitriana Puspa Wardani</h4>
						<h4>Berat Ideal : 50 KG</h4>
						<table class="table table-striped table-hovered">
							<thead>
								<th></th>
								<th>Hari 1</th>
								<th>Hari 2</th>
								<th>Hari 3</th>
								<th>Hari 4</th>
								<th>Hari 5</th>
								<th>Hari 6</th>
								<th>Hari 7</th>
							</thead>
							<tbody>
								<tr>
									<td class="font-weight-bold">Makan Pagi</td>
									<td>Baygon</td>
									<td>Vape</td>
									<td>Hit</td>
									<td>Nomos</td>
									<td>Force Magic</td>
									<td>Raid</td>
									<td>Mortein</td>
								</tr>
								<tr>
									<td class="font-weight-bold">Makan Siang</td>
									<td>Raid</td>
									<td>Hit</td>
									<td>Nomos</td>
									<td>Baygon</td>
									<td>Mortein</td>
									<td>Vape</td>
									<td>Force Magic</td>
								</tr>
								<tr>
									<td class="font-weight-bold">Makan Malam</td>
									<td>Baygon</td>
									<td>Vape</td>
									<td>Nomos</td>
									<td>Mortein</td>
									<td>Force Magic</td>
									<td>Raid</td>
									<td>Hit</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>