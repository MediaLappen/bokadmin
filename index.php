<?php

//Use an autoloader
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

// Libary
require 'libs/Calender.php';


require 'libs/DbConnection.php';

require 'config/paths.php';
require 'config/database.php';


$app = new Bootstrap();

?>