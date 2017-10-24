<?php

class bangun_datar {
	public $bil1,$bil2;

	function set_nilai($bilangan1,$bilangan2){
		$this->bil1 =$bilangan1;
		$this->bil2 =$bilangan2;
	}
	function get_nilai1(){
		return $this->bil1 * $this->bil2;
	}
	function get_nilai2(){
		return $this->bil1 * $this->bil2;
	}
	function get_nilai3(){
	}
}
$daatr1 =new bangun_datar ;
$datar1->set_nilai(12,8);
echo "Angka 1=12";
echo "<br>";
echo "Angka 2=8";
echo "<br>";
echo " Luas:P x L";
echo "<br>";
"Luas Persegi Panjang :".$datar1->get_nilai().'<br>';
echo "<br>";


echo ""
?>