<?php 

class orang {
	public $nama = "andi";
	public $jnskelamin;
	public function makan();
	{
		return $this->nama.' sedang makan <br>';
	}
 }


$saya - new orang;
$saya->nama = "riska";
echo $saya->makan();

$saya->nama = 'ame';
echo $saya->makan();