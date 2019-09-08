<?php
//AutoLoader de Composer
$loader = require __DIR__.'/vendor/autoload.php';
//Añadimos nuestras clases al AutoLoader
$loader->add('modelo', __DIR__.'/src');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

//Si es FALSE se usa APC como cache, si fuese TRUE se arrays para la cache
$isDevMode = false;

//rutas de las entidades
$paths = array(__DIR__ . '/src/modelo');
//configuración de base de datos
$dbParams = array(
'driver' => 'pdo_mysql',
'user' => 'root',
'password' => '',
'dbname' => 'ciberwifi',
);

$config = Setup::createConfiguration($isDevMode);

//lector de las annotations de las entidades
$driver = new AnnotationDriver(new AnnotationReader(), $paths);
$config->setMetadataDriverImpl($driver);
//registra las annotations de Doctrine
AnnotationRegistry::registerFile(
Instalación 4
 __DIR__ . '/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnno\
tations.php'
);
//Crea el entityManager
$entityManager = EntityManager::create($dbParams, $config);

?>