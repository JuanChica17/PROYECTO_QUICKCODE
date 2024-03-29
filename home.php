<?php
session_start();
if(isset($_SESSION['tipo_usuario'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
  <!-- / My brand -->
<div class='brand'>
  <a href='https://www.jamiecoulter.co.uk' target='_blank'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/logo.png'>
  </a>
</div>
<!-- / Begin Body -->
<div class='swanky'>
  <!-- / Introduction Block -->
  <div class='swanky_title'>
    <h1>Bienvenido <?= $_SESSION['nombre_usuario']?></h1>
    <?php
                if($_SESSION['tipo_usuario'] == 'natural'){
                  echo "<img src='img/administrativo.png' width='50' height='50'>";
                }?>
    <p>Pure CSS Drop down menu. Nice little addition to any non-javascript user interface. Uses the labels for trick to toggle animations.</p>
    <div class='swanky_title__social'>
      <a href='https://www.twitter.com/jamiecoulter89' target='_blank'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tw.png'>
        Twitter
      </a>
    </div>
    <div class='swanky_title__social'>
      <a href='https://www.codepen.io/jcoulterdesign/' target='_blank'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/cp.png'>
        Codepen
      </a>
    </div>
  </div>
  <!-- /////////// Begin Dropdown //////////// -->
  <div class='swanky_wrapper'>
    <input id='Dashboard' name='radio' type='radio'>
    <label for='Dashboard'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/dash.png'>
      <span>Dashboard</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>Tools</li>
          <li>Reports</li>
          <li>Analytics</li>
          <li>Code Blocks</li>
        </ul>
      </div>
    </label>
    <input id='Sales' name='radio' type='radio'>
    <label for='Sales'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/del.png'>
      <span>Sales</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>New Sales</li>
          <li>Expired Sales</li>
          <li>Sales Reports</li>
          <li>Deliveries</li>
        </ul>
      </div>
    </label>
    <input id='Messages' name='radio' type='radio'>
    <label for='Messages'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/mess.png'>
      <span>Messages</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>Inbox</li>
          <li>Outbox</li>
          <li>Sent</li>
          <li>Archived</li>
        </ul>
      </div>
    </label>
    <input id='Users' name='radio' type='radio'>
    <label for='Users'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/users.png'>
      <span>Users</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>New User</li>
          <li>User Groups</li>
          <li>Permissions</li>
          <li>Passwords</li>
        </ul>
      </div>
    </label>
    <input id='Settings' radio='radio' type='radio'>
    <label for='Settings'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/set.png'>
      <span>Settings</span>
      <div class='lil_arrow'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>Databases</li>
          <li>Design</li>
          <li>Change User</li>
          <li><a href="cerrarsession.php">Cerrar Session</a></li>
        </ul>
      </div>
    </label>
  </div>
  <!-- /////////// End Dropdown //////////// -->
</div>
<!-- / My Footer -->
<div class='love'>
  <p>Made with <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/love_copy.png" /> by <a href='https://www.jamiecoulter.co.uk' target='_blank'> Jcoulterdesign </a></p>
</div>
</body>
</html>
<?php
}else{
  header('location: form.php');
}
?>