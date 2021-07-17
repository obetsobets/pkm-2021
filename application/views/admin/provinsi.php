<div class="card">
  <img src="<?= base_url(); ?>src/image/logo-unsri.jpg" class="" alt="..." width="100" height="100">
  <div class="card-body">
    <h5 class="card-title">Provinsi</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
	  <button class="btn btn-primary" type="button">Tambah Data</button>
	</div>

	<p>
		<table id="table-data" class="display" style="width: 100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Nama Provinsi</th>
					<th>#Aksi</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
			<tfoot>
			</tfoot>
		</table>
	</p>
    
  </div>

</div>


<script type="text/javascript">
  $(document).ready(function() {
  	var option_table = {
		paging: true,
		searching: true,
		columnDefs: [
			{
				width: "6%",
				className: "dt-center",
				targets: [0]
			},
			{
				width: "15%",
				className: "dt-center",
				targets: [1]
			},
		]
	};

	var table_data = $("#table-data").DataTable(option_table);

	renderData();

	function renderData(){
		$.ajax({
			method: "POST",
			url: "<?= base_url(); ?>Provinsi/getListData/",
			data: {}
		}).done(function(retval){
			var res = JSON.parse(retval);
			//console.log(res);
			var listData = res['listData'];
			var rows = [];
			for (var i = 0; i < listData.length; i++) {
				var no = i+1;
				var kode = listData[i]['kode_provinsi'];
				var nama = listData[i]['nama'];
				var aksi = `
					<button class="btn btn-warning btn-sm" type="button">Edit</button>
					<button class="btn btn-danger  btn-sm" type="button">Hapus</button>
				`;

				rows.push([
					no,
					kode,
					nama,
					aksi
				]);
			}
			table_data.rows.add(rows).draw(false);
		})
	}
    
  })
</script>

