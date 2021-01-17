<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Makanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Makanan</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        	<div class="col-12">
        		<div class="card">
              <div class="card-header">
                <div class="row">
                	<div class="col-12 mb-2">
		                <h3 class="card-title">Makanan</h3>
                	</div>
                </div>
              	<div class="row">
              		<div class="col-4">
		                <div class="form-group">
		                	<select class="form-control">
		                		<option value="">SEMUA KATEGORI</option>
		                		<option value="pokok">MAKANAN POKOK</option>
		                		<option value="pendamping">MAKANAN PENDAMPING</option>
		                		<option value="pelengkap">MAKANAN PELENGKAP</option>
		                		<option value="nabati">MAKANAN NABATI</option>
		                		<option value="hewani">MAKANAN HEWANI</option>
		                	</select>
		                </div>
              		</div>
              		<div class="col-4"></div>
              		<div class="col-4">
		                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addMakananModal">
		                	<i class="fas fa-fw fa-plus"></i> | Data Baru
		                </button>
              		</div>
              	</div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center">
	                  <tr>
	                    <th>No</th>
	                    <th>Nama Makanan</th>
	                    <th>Berat</th>
	                    <th>Energi</th>
	                    <th>Karbohidrat</th>
	                    <th>Lemak</th>
	                    <th>Protein</th>
	                    <th>Aksi</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	<?php $no = 1 ?>
                  	<?php foreach($makanan as $m): ?>
	                  	<tr>
	                  		<td><?= $no++ ?></td>
	                  		<td><?= $m['nama'] ?></td>
	                  		<td><?= $m['berat'] ?></td>
	                  		<td><?= $m['energi'] ?></td>
	                  		<td><?= $m['karbohidrat'] ?></td>
	                  		<td><?= $m['lemak'] ?></td>
	                  		<td><?= $m['protein'] ?></td>
	                  		<td>
	                  			<a href="#!" data-toggle="modal" data-target="#editMakananModal" class="btn btn-info" role="button">Sunting</a>
	                  			<a href="<?= base_url('app/makanan/hapus') . $m['ID'] ?>" class="btn btn-danger" role="button">Hapus</a>
	                  		</td>
	                  	</tr>
	                  <?php endforeach; ?>
                  </tbody>
                  <tfoot class="text-center">
	                  <tr>
	                    <th>No</th>
	                    <th>Nama Makanan</th>
	                    <th>Berat</th>
	                    <th>Energi</th>
	                    <th>Karbohidrat</th>
	                    <th>Lemak</th>
	                    <th>Protein</th>
	                    <th>Aksi</th>
	                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        	</div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- Tambah Makanan Modal -->
	<div class="modal fade" id="addMakananModal" tabindex="-1" role="dialog" aria-labelledby="addMakananModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document" style="max-width: 70%">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="addMakananModalLabel">Data Makanan Baru</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="<?= base_url('App/artikel/tambah') ?>" method="post">
		      <div class="modal-body">
		        <div class="form-group">
		        	<label for="nama">Nama Makanan</label>
		        	<input type="text" name="nama" class="form-control" placeholder="misal: nasi goreng" required>
		        </div>
		        <div class="form-group">
		        	<label for="kategori">Kategori Makanan</label>
            	<select class="form-control" name="kategori" required>
            		<option selected="">BELUM PILIH</option>
            		<option value="pokok">MAKANAN POKOK</option>
            		<option value="pendamping">MAKANAN PENDAMPING</option>
            		<option value="pelengkap">MAKANAN PELENGKAP</option>
            		<option value="nabati">MAKANAN NABATI</option>
            		<option value="hewani">MAKANAN HEWANI</option>
            	</select>
            </div>
            <div class="form-group">
            	<label for="bahan">Bahan</label>
            	<br>
            	<em class="text-muted mt-2">Gunakan spasi untuk menambahkan ke dalam list</em>
            	<input type="text" id="sumber-bahan" onkeydown="addBahan(event)" class="form-control">
            	<span id="list-bahan"></span>
            </div>
            <input type="hidden" id="target-bahan" name="bahan">
		        <div class="row">
		        	<div class="col-md-4">
		        		<div class="form-group">
				        	<label for="berat">Berat (gram)</label>
				        	<input type="text" name="berat" class="form-control" required>
				        </div>		
		        	</div>
		        	<div class="col-md-4">
		        		<div class="form-group">
				        	<label for="energi">Energi (kkal)</label>
				        	<input type="text" name="energi" class="form-control" required>
				        </div>
		        	</div>
		        	<div class="col-md-4">
		        		<div class="form-group">
				        	<label for="karbohidrat">Karbohidrat (gram)</label>
				        	<input type="text" name="karbohidrat" class="form-control" required>
				        </div>
		        	</div>
		        	<div class="col-md-4">
		        		<div class="form-group">
				        	<label for="lemak">Lemak (gram)</label>
				        	<input type="text" name="lemak" class="form-control" required>
				        </div>
		        	</div>
		        	<div class="col-md-4">
		        		<div class="form-group">
				        	<label for="protein">Protein (gram)</label>
				        	<input type="text" name="protein" class="form-control" required>
				        </div>
		        	</div>
		        </div>
		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
		        <button type="submit" class="btn btn-primary">Tambah</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<script type="text/javascript">
		let listBahan = []
		let tempMakanan = ''

		const updateList = () => {
			let temp = ''
			let targetBahan = ''

			listBahan.forEach(bahan => {
				temp += `<a href="#!" class="badge badge-info p-1 badge-sm mr-1" onclick="hapusBahan('${bahan}')">${bahan} | <span class="text-danger">X</span></a>`
				targetBahan += bahan + ','
			})

			document.getElementById('list-bahan').innerHTML = temp
			document.getElementById('target-bahan').value = targetBahan
		}

		const hapusBahan = (bahan) => {
			let temp = [...listBahan]

			listBahan = temp.filter(res => res !== bahan)

			updateList()
		}

		const addBahan = (event) => {
			if(event.key === ' ' || event.key === 'Enter') {
				
				let bahan = document.getElementById('sumber-bahan')
				
				console.log(bahan.value)
				if(bahan.value === '    ' || bahan.value === '   ' || bahan.value === '  ' || bahan.value === ' ' || bahan.value === '') {
				// do nothing...
				} else {
					listBahan.push(bahan.value)	

					updateList()
				}

				bahan.value = ''
			}
		}

	</script>