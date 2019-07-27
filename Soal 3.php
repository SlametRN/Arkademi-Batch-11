<?php
function perulangan($size){
	$a = ceil($size/2);
	for($i=1; $i<=$size; $i++){
		for($j=1; $j<=$size; $j++){
			if($a == $i){
				echo "* ";
				}else{
					if ($j==1) {
					echo "* ";
						}elseif ($j==$size) {
							echo "* ";
							}else{
					echo "= ";
				}
			}
		}
		echo "<br/>";
	}
}
echo ("--- panjang ---<br>");
perulangan(5);
?>
