<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URL; ?>index">BokAdmin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo URL; ?>index">Hem</a></li>
            <li><a href="<?php echo URL; ?>omoss">Om oss</a></li>
            <li><a href="<?php echo URL; ?>kontakt">Kontakt</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
<?php
Session::init();
if(Session::get('Inloggad') == true){
	echo'<li><a href="'.URL.'setup/logout">Logga ut</a></li>';
}
else
{
	echo'<li><a href="'.URL.'loggain">Logga In</a></li>';
}
?>           

		   
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>