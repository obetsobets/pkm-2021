<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Admin</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://localhost/pc-batch1/hari-1/src/css/obets.css"> -->
	<!-- <?= base_url(); ?> = https://localhost/pc-batch1/hari-1/ -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>src/css/obets.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
		<div class="row">
		    <div class="list-group col-2">
		    <ul>
		    	<li class="list-menu list-group-item list-group-item-action active" style="cursor: pointer;" menu="beranda" param="10">Home</li>
		    	<li class="list-menu list-group-item list-group-item-action" style="cursor: pointer;"  menu="provinsi"  param="15">Provinsi</li>
		    	<li class="list-menu list-group-item list-group-item-action" style="cursor: pointer;"  menu="institusi"  param="20">Institusi</li>
		    </ul>
			</div>
		    <div class="col-10" id="content">
		    	<!-- Content here -->
	 

		    </div>
		 </div>
	  
	</div>
		
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){
	viewContent("beranda",10);

		$(".list-group").on('click','.list-menu', function(){
			$(".list-menu").removeClass('active');
			$(this).addClass('active');

			var menu = $(this).attr('menu');
			var param = $(this).attr('param');
			var post_data = {param};

			//console.log(menu);
			viewContent(menu, post_data);
		})

		function viewContent(menu="", post_data={param: 10}){
			$.ajax({
				method: "POST",
				url: "<?= base_url(); ?>Admin/"+menu,
				data: post_data
			}).done(function(res){
				//console.log(res);
				$("#content").html(res);
			})
		}
});
	
	
</script>

