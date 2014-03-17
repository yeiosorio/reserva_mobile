<?php


require 'lib/Slim/Slim.php';


\Slim\Slim::registerAutoloader();


\Slim\Route::setDefaultConditions(array(
    //'perfil' => '[a-zA-Z]{3,}',
    //'ubicacion' => '[a-zA-Z_áéíóúñ]{3,}',
    'id' => '[0-9]{1,}'
));


$app = new \Slim\Slim();


//EJEMPLO: http://applicatte.hol.es/empleate/buscar/ingeniero/meta/100
$app->get('/get/:id', 

	  function ($id) use ($app) {

	  	$conn = mysql_connect('localhost','yeison','');
		$bd_seleccionada = mysql_select_db('reserva_online', $conn);
	    
		if (!$bd_seleccionada) {
    		die ('No se selecciono BD : ' . mysql_error());
		}

		$result = mysql_query('select * from $id');
		$datos = mysql_fetch_array($result,MYSQL_ASSOC);

	    $app->response()->header("Content-Type", "application/json");
        echo json_encode($datos);


		 
    });



// $app->get('/delete/:id', 

// 	  function ($id) use ($app) {

// 	  	$conn = mysql_connect('mysql.hostinger.es','u507863943_yei','123456');
// 		$bd_seleccionada = mysql_select_db('u507863943_bd', $conn);
	    
// 		if (!$bd_seleccionada) {
//     		die ('No se selecciono BD : ' . mysql_error());
// 		}

// 		$result = mysql_query('delete from usuarios where id=' . $id);
		
// 	    $app->response()->header("Content-Type", "application/json");
//         echo json_encode($result);

//     });


$app->get('/getall', 

	  function () use ($app) {

	  	$conn = mysql_connect('localhost','yeison','');
		$bd_seleccionada = mysql_select_db('reserva_online', $conn);
	    
		if (!$bd_seleccionada) {
    		die ('No se selecciono BD : ' . mysql_error());
		}

		$result = mysql_query('select * from hotel');

		while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		    $datos[] = $line;
		}


	    $app->response()->header("Content-Type", "application/json");
        echo json_encode($datos);

		 
    });

$app->get('/getallbook', 

	  function () use ($app) {

	  	$conn = mysql_connect('localhost','yeison','');
		$bd_seleccionada = mysql_select_db('reserva_online', $conn);
	    
		if (!$bd_seleccionada) {
    		die ('No se selecciono BD : ' . mysql_error());
		}

		$result = mysql_query('select * from book');

		while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		    $datos[] = $line;
		}


	    $app->response()->header("Content-Type", "application/json");
        echo json_encode($datos);

		 
    });


$app->run();


?>
