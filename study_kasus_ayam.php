
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anak ayam</title>
</head>
<body>
<?php
// jumlah ayam pertama
$anakayam=8;

echo "tek-kotek-kotek-kotek anak ayam turun ";
echo $anakayam;
echo "<br>";
// kon
for ($i=$anakayam; $i>0  ; $i--) { 
	# code...
	$anakayam = $anakayam-1;
	if ($anakayam>0) {
		# code...
		if ($anakayam%2==0) {
			# code...
			?>
			<p style="color:blue">mati satu tinggal <?php echo $anakayam ?> </p>
			<?php
			
		}
		elseif ($anakayam%2>0) {
			# code...
			?>
			<p style="color:orange">mati satu tinggal <?php echo $anakayam ?> </p>
			<?php
			
		}
	}

	else{
		echo "Mati satu habis semua T_T hiks";
	}

}

	?>
</body>
</html>

