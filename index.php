<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- MediaLappen's css -->
<link rel="stylesheet" href="<?php echo URL; ?>public/css/medialappen-style.css">   
<?php

//Use an autoloader
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

// Libary
//require 'libs/Kalender.php';
require 'libs/DbConnection.php';
require 'libs/Session.php';

// Config
require 'config/paths.php';
require 'config/database.php';
require 'config/variables.php';


$app = new Bootstrap();

?>