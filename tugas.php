<?php

class penjumlahan {
	public $bil1,$bil2;

	function set_nilai($bilangan1,$bilangan2){
		$this->bil1 =$bilangan1;
		$this->bil2 =$bilangan2;
	}
	function get_nilai1(){
		return $this->bil1 + $this->bil2;
	}
	function get_nilai2(){
		return $this->bil1 - $this->bil2;
	}
	function get_nilai3(){
		return $this->bil1 * $this->bil2;
	}
	function get_nilai4(){
		return $this->bil1 / $this->bil2;
	}
}
$penjumlahan1 =new penjumlahan ;
$penjumlahan1->set_nilai(21,3);
echo "======================================== <br>";
echo "Perhitungan Bilangan 21 dengan bilangan 3 <br>" ;
echo "========================================<br>";
echo "Hasil Penjumlahan :".$penjumlahan1->get_nilai1().'<br>';
echo "Hasil Pengurangan :".$penjumlahan1->get_nilai2().'<br>';
echo "Hasil Perkalian___:".$penjumlahan1->get_nilai3().'<br>';
echo "Hasil Pepembagian :".$penjumlahan1->get_nilai4().'<br>';
?>