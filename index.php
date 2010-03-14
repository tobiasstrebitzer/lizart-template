<?php include "config.php"; $active = "home"; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
  <title>Corner Demo</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="css/index.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/tiptip.css" media="all">
  <script type="text/javascript" src="javascript/lib/jquery/jquery-1.4.2.js"></script>
  <script type="text/javascript" src="javascript/lib/jquery/jquery.quicksand.min.js"></script>
  <script type="text/javascript" src="javascript/lib/jquery/jquery.tipTip.minified.js"></script>
  <script type="text/javascript" src="javascript/lib/jquery/jquery-easing-1.3.js"></script>
  <script type="text/javascript" src="javascript/content.js"></script>
  <script type="text/javascript" src="javascript/footer.js"></script>
  <script type="text/javascript" src="javascript/topmenu.js"></script>
</head>
<body>
  <div id="wrapper">
    <div id="header-outer">
      <div id="header">
        <div id="menu">
          <ul id="topmenu-list">
            <?php foreach($config["menuItems"] as $item) { ?>
              <li><a data-menu="<?php echo $item[0]; ?>" title="<?php echo $item[1]; ?>" href="data.php?tag=<?php echo $item[0]; ?>" <?php if($active == $item[0]) { echo 'class="active-link"'; } ?>><?php echo $item[0]; ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <div id="page">
      <div id="main">
        <div id="content"></div>
        <div id="boxcontainer">
          <div class="corner">
            <div class="box-head"><div><div></div></div></div>
            <div class="box-middle"><div><div>
              <h1><?php echo $active; ?></h1>
              <p class="article">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div></div></div>
            <div class="box-footer"><div><div></div></div></div>
          </div>
          <div class="corner">
            <div class="box-head"><div><div></div></div></div>
            <div class="box-middle"><div><div>
              <h1>Modultitel</h1>
              <p class="article">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div></div></div>
            <div class="box-footer"><div><div></div></div></div>
          </div>
          <div class="corner">
            <div class="box-head"><div><div></div></div></div>
            <div class="box-middle"><div><div>
              <h1>Modultitel</h1>
              <p class="article">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div></div></div>
            <div class="box-footer"><div><div></div></div></div>
          </div>
          <div class="corner">
            <div class="box-head"><div><div></div></div></div>
            <div class="box-middle"><div><div>
              <h1>Modultitel</h1>
              <p class="article">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div></div></div>
            <div class="box-footer"><div><div></div></div></div>
          </div>
          <div class="break"></div>
        </div>
        <div class="break"></div>
      </div>
    </div>
    <div id="footer">
      <img id="logo" src="images/lizart.png" alt="lizart" />
    </div>
  </div> 
</body>
</html>