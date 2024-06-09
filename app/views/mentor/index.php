<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InResearch</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
    <img src="<?= BASEURL; ?>/img/dashboard.jpeg" alt="Flowers" width="40" ><a href="login.php" class="logo">InResearch</a>

      <div class="menu-content">
        <ul class="menu-items">
          <li class="item">
            <div class="submenu-item">
              <span>Profile</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Profile
              </div>
              <li class="item">
                <a href="viewAllUser.php">View all user profile</a>
              </li>
              <li class="item">
                <a href="profile.php">View profile</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <div class="submenu-item">
              <span>Expert Domain</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Expert Domain
              </div>
              <li class="item">
                <a href="#">Add Expert Domain</a>
              </li>
              <li class="item">
                <a href="#">View Expert Domain</a>
              </li>
              <li class="item">
                <a href="#">Expert Domain Report</a>
              </li>
            </ul>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span>Publication</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Publication
              </div>
              <li class="item">
                <a href="addpublication.php">Add Publication</a>
              </li>
              <li class="item">
                <a href="#">View Publication</a>
              </li>
              <li class="item">
                <a href="#">Publication Report</a>
              </li>
     
            </ul>
          </li>

          <li class="item">
            <div class="submenu-item">
              <span>Platinum Progress</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Platinum Progress
              </div>
              <li class="item">
                <a href="#">Add Expert Domain</a>
              </li>
              <li class="item">
                <a href="#">View Expert Domain</a>
              </li>
              <li class="item">
                <a href="#">Expert Domain Report</a>
              </li>
            </ul>
          </li>
          <li class="item">
            <div class="submenu-footer">
            <i class="fas fa-sign-out"></i>
            <a href="logout.php" class="btn btn-warning" style="margin-top:220px">Logout</a>
              <i class="fa-solid fa-chevron-right"></i>
            </div>
          </li>
    </nav>

    <nav class="navbar" style=" background: #6F2E4E;">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
	  
    </nav>

    <main class="main">
         <h1 class="information__title">Welcome to mentor, <?= htmlspecialchars($_SESSION['name']) ?></h1>
    </main>

    <script src="./public/js/script.js"></script>
  </body>
</html>
