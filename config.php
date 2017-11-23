<?php

/**
 * Configuration for database connection
 *
 */

$host       = "172.19.0.2";
$username   = "root";
$password   = "root";
$dbname     = "docker";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
