<div class="container">
  <div id="loginbox" style="margin-top:5%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
      <div class="panel-heading">
        <div class="panel-title">Anmelden</div>
      </div>
      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
          <form id="loginform" action="content/mysql_handler.php" method="post" class="form-horizontal" role="form">
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="login-username" type="text" class="form-control" name="Username" value="" placeholder="Nutzername">
            </div>
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="login-password" type="password" class="form-control" name="Password" placeholder="Passwort">
            </div>
            <div style="margin-top:10px" class="form-group">
              <?php
                if(isset($_GET['failure'])) {
                  echo '<div class="alert alert-danger fade in vanish"><strong>Error: </strong>'.$_GET['failure'].'</div>';
                }?>
              <div class="text-right col-sm-12 controls">
                <button type="submit" name="Login" class="btn btn-primary">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
