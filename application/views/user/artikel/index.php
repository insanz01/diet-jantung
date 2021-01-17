<div class="container">
	<div class="row">
		<div class="col-7 mx-auto">
			<div class="card mb-3" onclick="goDetail(1)">
				<div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="<?= base_url('gambar_artikel/artikel1.jpg') ?>" class="card-img" alt="Tidak ada gambar." height="100%">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title font-weight-bold mb-1">Minum Baygon</h5>
			        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-7 mx-auto">
			<div class="card mb-3" onclick="goDetail(2)">
				<div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="<?= base_url('gambar_artikel/artikel2.jpg') ?>" class="card-img" alt="Tidak ada gambar." height="100%">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title font-weight-bold mb-1">Makan Kerikil</h5>
			        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-7 mx-auto">
			<div class="card mb-3" onclick="goDetail(3)">
				<div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="<?= base_url('gambar_artikel/artikel3.jpg') ?>" class="card-img" alt="Tidak ada gambar." height="100%">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title font-weight-bold mb-1">Gagal Diet</h5>
			        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	const goDetail = (id) => {
		window.location = "<?= base_url() ?>user/App/detail/" + id;
	}
</script>