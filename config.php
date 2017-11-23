<?php

/**
 * Configuration for database connection
 *
 */

$host       = "10.5.0.6";
$username   = "root";
$password   = "root";
$dbname     = "docker";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
