<?php 

// require_once 'produk/InfoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/CetakInfoProduk.php';
// require_once 'produk/User.php';

// require_once'Service/User.php';


spl_autoload_register(function( $class ){
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/produk/' . $class . '.php';
});

spl_autoload_register(function( $class ){
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Service/' . $class . '.php';
});




