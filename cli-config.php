<?php
//cli-config.php
 require_once 'bootstrap.php';

 $helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
 'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($entityMana\
 ger->getConnection()),
 'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityMa\
 nager)
 ));
 return $helperSet;
 
 ?>