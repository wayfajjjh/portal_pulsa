<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>


		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
	    	<!--	<form action="isi_pulsa.php" method="POST" role="form">-->
	    		    	<legend>Form title</legend>
		
            		
            			<div class="form-group">
            				<label for="">Kode Pulsa</label>
            				<input type="text" class="form-control" id="kode" placeholder="Input field">
            			</div>
            			<div class="form-group">
            				<label for="">Phone</label>
            				<input type="text" class="form-control" id="nomor" placeholder="Input field">
            			</div>
            			<div class="form-group">
            				<label for="">API</label>
            				<input type="text" class="form-control" id="id"  placeholder="Input field">
            			</div>
            			<div class="form-group">
            				<label for="">Pengisian KE-</label>
            				<input type="text" class="form-control" value="1" id="jumlah" placeholder="Input field">
            			</div>
            		
            			
            		
            			<button type="submit" id="simpan" class="btn btn-primary">Beli</button>
            
            <!--	</form>-->

		
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>

<script>
		$(document).ready(function() {
	
		$("#simpan").on('click', function() {
			//var operator = $("#operator").val();
			var kode = $("#kode").val();
			var nomor = $("#nomor").val();
			var id = $("#id").val();
			var jumlah = $("#jumlah").val();
			$.ajax({
				type : "POST",
                url  : "isi_pulsa.php",
                dataType : "JSON",
                data : 'kode='+kode+'&nomor='+nomor+'&id='+id+'&jumlah='+jumlah,
                success: function(){
                  alert('sukses');
                }

			});
		});
	});	
</script>