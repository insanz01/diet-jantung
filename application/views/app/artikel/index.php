<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Artikel</a></li>
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
                <h3 class="card-title">Artikel</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addArtikelModal">
                	<i class="fas fa-fw fa-plus"></i> | Artikel Baru
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center">
	                  <tr>
	                    <th>No</th>
	                    <th>Judul Artikel</th>
	                    <th>Tanggal Upload</th>
	                    <th>Aksi</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	<?php $no = 1 ?>
                  	<?php foreach($artikel as $a): ?>
	                  	<tr>
	                  		<td><?= $no++ ?></td>
	                  		<td><?= $a['judul'] ?></td>
	                  		<td><?= $a['created_at'] ?></td>
	                  		<td>
	                  			<a href="#!" data-toggle="modal" data-target="#editArtikelModal" class="btn btn-info" role="button">Sunting</a>
	                  			<a href="<?= base_url('app/artikel/hapus/') . $a['ID'] ?>" class="btn btn-danger" role="button">Hapus</a>
	                  		</td>
	                  	</tr>
	                  <?php endforeach; ?>
                  </tbody>
                  <tfoot class="text-center">
	                  <tr>
	                    <th>No</th>
	                    <th>Judul Artikel</th>
	                    <th>Tanggal Upload</th>
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

   <!-- Tambah Artikel Modal -->
	<div class="modal fade" id="addArtikelModal" tabindex="-1" role="dialog" aria-labelledby="addArtikelModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="addArtikelModalLabel">Artikel Baru</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="<?= base_url('App/artikel/tambah') ?>" method="post" enctype="multipart/form-data">
		      <div class="modal-body">
		        <div class="form-group">
		        	<label for="judul">Judul Artikel</label>
		        	<input type="text" name="judul" class="form-control" required>
		        </div>
		        <div class="form-group">
		        	<label for="isi">Isi</label>
		        	<textarea class="form-control" name="isi" class="form-control" required></textarea>
		        </div>
		        <div class="form-group">
		        	<label for="gambar">Gambar</label>
		        	<input type="file" name="gambar" class="form-control" id="gambar" required>
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