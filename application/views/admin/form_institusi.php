<form class="row g-3" id="formData" method="post">
  <div class="col-auto">
    <label for="kode" class="visually-hidden">Kode</label>
    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode" required>
  </div>
  <div class="col-12">
    <label for="Nama Institusi" class="visually-hidden">Nama Institusi</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Institusi" required>
  </div>
  <div class="col-12">
    <label for="Singkatan" class="visually-hidden">Singkatan</label>
    <input type="text" class="form-control" id="singkatan" name="singkatan" placeholder="Singkatan" required>
  </div>
  <div class="col-12">
    <!-- <label for="Nama Provinsi" class="visually-hidden">Provinsi</label>
    <input type="text" class="form-control" id="id_provinsi" name="id_provinsi" placeholder="Nama Provinsi"> -->

    <select class="form-select" aria-label="Default select example" id="id_provinsi" name="id_provinsi" required>
	  
	</select> 
  </div>
  <hr>
  <div class="col-auto">
  	<button class="btn btn-primary form-control" type="submit" id="btn-simpan">Simpan</button>
  </div>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		
		renderProvinsi();

		function renderProvinsi(currentValue = 0){
			$.ajax({
				method: "POST",
				url : "<?= base_url(); ?>Provinsi/getListData/",
			}).done(function(retval){
				var res = JSON.parse(retval);
				var listData = res['listData'];

				var strSelectHTML = ``;
				$.each(listData, function(key, val){
					//console.log(key);
					//console.log(val);
					var selected = currentValue == val.id_provinsi ? "selected" : "";
					strSelectHTML += `<option value="${val.id_provinsi}" ${selected}>${val.nama}</option>`;
				})
				$("#id_provinsi").append(strSelectHTML);
			})
		}

		renderFormData();
		function renderFormData(){
			$.ajax({
				method: "POST",
				url : "<?= base_url(); ?>Institusi/getDataBySessionId/",
			}).done(function(retval){
				var res = JSON.parse(retval);
				//console.log(res);

				var data = res['data'];
				var kode = data['kode'] ? data['kode'] : '';
				var nama = data['nama'] ? data['nama'] : '';
				var singkatan = data['singkatan'] ? data['singkatan'] : '';
				var id_provinsi = data['id_provinsi'] ? data['id_provinsi'] : 0;

				renderProvinsi(id_provinsi);

				$("#formData input[name='kode']").val(kode);
				$("#formData input[name='nama']").val(nama);
				$("#formData input[name='singkatan']").val(singkatan);
				$("#formData input[name='id_provinsi']").val(id_provinsi);
			})
		}

		$("#formData").submit(function(event){
			event.preventDefault();
			var formData = $(this).serialize();

			$.ajax({
				method: "POST",
				url: "<?= base_url(); ?>Institusi/simpan/",
				data: formData
			}).done(function(retval){
				var res = JSON.parse(retval);
				
				var sukses = res['sukses'];
				if(sukses){ //sukses == true OR sukses ==1
					alert("Data berhasil disimpan");
				}
				else{
					alert("Data gagal disimpan")
				}

			})
		})


	})
	
</script>