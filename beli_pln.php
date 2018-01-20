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
	    		<form action="isi_pln.php" method="POST" role="form">
	    		    	<legend>Form title</legend>
		
            		
            			 <select class="form-control" name="kode" style="width:100%; margin-bottom:10px;">
					      	
					        <option value=PLN20>Pengisian Rp.20.000</option>
					        <option value=PLN50>Pengisian Rp.50.000</option>
					        <option value=PLN100>Pengisian Rp.100.000</option> 
					        
					        <option value=PLN200>Pengisian Rp.200.000</option> 
					        <option value=PLN500>Pengisian Rp.500.000</option>
					        </option>
					        <option value=PLN1000>Pengisian Rp.1.000.000</option>
					          
					        

					       
					      </select>
            			<div class="form-group">
            				<label for="">Phone</label>
            				<input type="text" class="form-control" name="nomor" placeholder="Input field">
            			</div>
            			<div class="form-group">
            				<label for="">ID Customer</label>
            				<input type="text" class="form-control" name="id"  placeholder="Input field">
            			</div>
            			
            		<div class="form-group">
            				<label for="">API</label>
            				<input type="text" class="form-control" name="api" placeholder="Input field">
            			</div>

            			<div class="form-group">
            				<label for="">Pengisian KE-</label>
            				<input type="text" class="form-control" value="1" name="jumlah" placeholder="Input field">
            			</div>
            		
            		
            			
            		
            			<button type="submit" id="simpan" class="btn btn-primary">Beli</button>
            
          	</form>

		
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>

<!--<script>
		$(document).ready(function() {
	
		$("#simpan").on('click', function() {
			//var operator = $("#operator").val();
			var kode = $("#kode").val();
			var nomor = $("#nomor").val();
			var id = $("#id").val();
			var api = $("#api").val();
			var jumlah = $("#jumlah").val();
			$.ajax({
				type : "POST",
                url  : "isi_pln.php",
                dataType : "JSON",
                data : 'kode='+kode+'&nomor='+nomor+'&id='+id+'&api+'+api+'&jumlah='+jumlah,
                success: function(){
                  alert('sukses');
                }

			});
		});
	});	
</script>-->