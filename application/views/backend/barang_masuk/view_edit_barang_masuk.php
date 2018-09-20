<!DOCTYPE html>
<html>
<head>
	<title>Edit Barang Masuk</title>
	<?php $this->load->view('backend/template/link.php'); ?>
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
	<div class="wrapper">
		<!-- start HEADER -->
		<div>
			<?php $this->load->view('backend/template/header.php'); ?>
		</div>
		<!-- end HEADER -->

		<!-- start SIDEBAR -->
		<div>
			<?php $this->load->view('backend/template/sidebar.php'); ?>
		</div>
		<!-- end SIDEBAR -->

		<!-- start CONTENT -->
			<div class="content-wrapper">
			    <!-- Content Header (Page header) -->
			    <section class="content-header">
			      <h1>Edit Barang Masuk</h1>
			        <small>PT. Hofz Indonesia</small>
			        <ol class="breadcrumb">
			        	<li class="fa fa-pencil-square-o">Transaksi</li>
			        	<li class="active">Barang Masuk</li>
			        	<li class="active">Edit Barang Masuk</li>
			        </ol>
			      
			    </section>

			    <!-- Main content -->
			    <section class="content">
			      <div class="box">
			            <!-- Validasi Edit Data -->
			    <script type="text/javascript" language="JavaScript">
			         function konfirmasi()
			         {
			         tanya = confirm("Apakah anda yakin ingin menganti data ?");
			         if (tanya == true) return true;
			         else return false;
			         }
			     </script>
			            <!-- Validasi Tutup Delete -->
			            <!-- /.box-header -->
			            <div class="box-body">
			              <table id="tbl_produk" class="table table-bordered table-striped tbl_produk">
			               <form method="POST" action="<?php echo base_url(). "barang_masuk/controller_barang_masuk/do_edit"; ?>"> 

							<tr>
								<td width="110" hidden="hidden">NOMER TRANSAKSI</td>
								<td>
								<input type="text" name="nomer_transaksi" size="30" hidden="hidden" value="<?php echo $nomer_transaksi; ?>">
								</td>
							</tr>

							<tr>
								<td width="110">TANGGAL</td>
								<td>
								<input type="date" name="tanggal" size="30" value="<?php echo $tanggal; ?>" required/>
								</td>
							</tr>

							<tr>
								<td width="110">KODE BARANG</td>
								<td>
								<input type="text" name="kode_barang" size="30" value="<?php echo $kode_barang; ?>" required/>
								</td>
							</tr>

							<tr>
								<td width="110">KODE SUPPLIER</td>
								<td>
								<input type="text" name="kode_supplier" size="30" value="<?php echo $kode_supplier; ?>" required/>
								</td>
							</tr>

							<tr>
								<td width="110">JUMLAH BARANG</td>
								<td>
								<input type="text" name="jumlah_barang" size="30" value="<?php echo $jumlah_barang; ?>" required/>
								</td>
							</tr>

							<tr>
								<td width="110">SATUAN</td>
								<td>
								<input type="text" name="satuan" size="30" value="<?php echo $satuan; ?>" required/>
								</td>
							</tr>

							<tr>
								<td width="110">KETERANGAN</td>
								<td>
								<input type="text" name="keterangan" size="30" value="<?php echo $keterangan; ?>" required/>
								</td>
							</tr>

							<tr>
								<td></td>
								<td>
									<button type="submit" class="btn btn-info" onclick="return konfirmasi()">UPDATE</button>
									<button type="reset" class="btn btn-danger">CANCEL</button>
								</td>
							</tr>

						   </form>
			              </table>
			            </div>
			            <!-- /.box-body -->
			          </div>
			    </section>
			</div>
		<!-- end CONTENT -->

		<!-- start FOOTER -->
		<div>
			<?php $this->load->view('backend/template/footer.php'); ?>
		</div>
		<!-- end FOOTER -->
	</div>
</body>
</html>