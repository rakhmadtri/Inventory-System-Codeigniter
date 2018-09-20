<?php  
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=$title.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>

<table border="1" width="100%">
	<thead>
		<tr>
			<th>NO</th>
			<th>KODE VENDOR</th>
			<th>NAMA VENDOR</th>
			<th>KOTA</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>TELP</th>
			<th>FAX</th>
		</tr>
	</thead>
	
	<tbody>
		<?php $i=1; foreach($vendor->result() as $row){ ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row->kode_vendor; ?></td>
			<td><?php echo $row->nama_vendor; ?></td>
			<td><?php echo $row->kota; ?></td>
			<td><?php echo $row->alamat; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->telp; ?></td>
			<td><?php echo $row->fax; ?></td>
		</tr>
		<?php $i++; } ?>
	</tbody>
</table>