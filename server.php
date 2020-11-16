<?php
$allowedResourceTypes = [
    'docentes',
    'materias',
    'carreras'
];

$resourceType = $_GET['resource_type'];

if( !in_array($resourceType, $allowedResourceTypes)){
    die;
}

$docentes = [
    1 => [
        'id' => 1,
        'nombre' => 'Kevin Guillermo',
        'materia' => 'Programacion Basica',
        'carrera' => 'Desarrollo de Software'
        ],
    2 => [
        'id' => 2,
        'nombre' => 'Itsvan Alberto',
        'materia' => 'Bases de datos', 
        'carrera' => 'Desarrollo de Software'
        ]
];

header('Content-Type: application/json');
$resourceId = array_key_exists('resource_id', $_GET) ? $_GET['resource_id']:'';


switch( strtoupper($_SERVER['REQUEST_METHOD'])){
    case 'GET':
            if(empty ($resourceId)){
                echo json_encode($docentes);
            } else{
                if(array_key_exists($resourceId, $docentes)){
                    echo json_encode($docentes[$resourceId]);
                }
            }
        break;
    case 'POST':
        break;
    case 'PUT':
        break;
    case 'DELETE':
        break;
    
}
    
?>