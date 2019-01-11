<?php 

// define('NAMA', 'Riska Adisti');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;


// class Coba {
// 	const NAMA = 'Riska Adisti';
// }

// echo Coba::NAMA;



// echo __FILE__;


// function Coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;







 ?>