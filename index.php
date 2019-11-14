<!DOCTYPE html>
<html>
<head>
	<title>Qota</title>
	<style type="text/css">
		.kotak{
			width: 30%;
			height: auto;
			border: 1px solid#aaa;
		}
		.form-input{
			padding: 5%;
		}
		input[type='number']{
			width: 78%;
			height: 25px;
		}
		input[type='submit']{
			padding: 5px;
		}
		.isi{
			padding: 5%;
		}
	</style>
</head>
<body>
	<div class="kotak">
		<div class="form-input">
			<form action="" method="post">
				<input type="number" name="angka">
				<input type="submit" name="proses" value="Process">
			</form>
		</div>
		<?php
			$angka = 0; 
			if(isset($_POST['proses'])){
				$angka = $_POST['angka'];
			}
		 ?>
		<div class="isi">
			Angka yang diinputkan : <?php if($angka!=null){echo $angka; }else{echo "kosong";} ?> <br>
			Hasil : <br>
			<?php 
				//membuat array dari inputan
				$arr_angka = array_map('intval', str_split($angka));
				//mengurutkan dari yang terkecil
				sort($arr_angka);
				//menghitung berapa jumlah array yang muncul
				$countval = array_count_values($arr_angka);
				//membuat looping untuk menampilkan angka
				foreach ($countval as $key => $val) {
			 ?>
			 	<?=$key?> = <?=$val?> <br>
			<?php } ?>
		</div>
	</div>
</body>
</html>