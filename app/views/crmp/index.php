
  <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* Sidebar styles */
        .sidebar {
            position: fixed;
            height: 100%;
            width: 260px;
            background: #424242; /* Grey */
            padding: 15px;
            z-index: 99;
        }

        .logo {
            font-size: 25px;
            padding: 0 15px;
            color: #fff; /* White */
        }

        .sidebar a {
            color: #fff; /* White */
            text-decoration: none;
        }

        .menu-content {
            position: relative;
            height: 100%;
            width: 100%;
            margin-top: 40px;
            overflow-y: scroll;
        }

        .menu-content::-webkit-scrollbar {
            display: none;
        }

        .menu-items {
            height: 100%;
            width: 100%;
            list-style: none;
            transition: all 0.4s ease;
        }

        .submenu-active .menu-items {
            transform: translateX(-56%);
        }

        .menu-title {
            color: #fff; /* White */
            font-size: 14px;
            padding: 15px 20px;
        }

        .item a,
        .submenu-item {
            padding: 16px;
            display: inline-block;
            width: 100%;
            border-radius: 12px;
            color: #fff; /* White */
        }

        .item i {
            font-size: 12px;
        }

        .item a:hover,
        .submenu-item:hover,
        .submenu .menu-title:hover {
            background: rgba(255, 255, 255, 0.1); /* Light grey */
        }

        .submenu-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff; /* White */
            cursor: pointer;
        }

        .submenu {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: calc(-100% - 26px);
            height: calc(100% + 100vh);
            background: #424242; /* Grey */
            display: none;
        }

        .show-submenu ~ .submenu {
            display: block;
        }

        .submenu .menu-title {
            border-radius: 12px;
            cursor: pointer;
        }

        .submenu .menu-title i {
            margin-right: 10px;
        }

        /* Navbar and main content styles */
        .navbar,
        .main {
            left: 260px;
            width: calc(100% - 260px);
            transition: all 0.5s ease;
            z-index: 1000;
        }

        .sidebar.close ~ .navbar,
        .sidebar.close ~ .main {
            left: 0;
            width: 100%;
        }

        .navbar {
            position: fixed;
            color: #fff; /* White */
            padding: 15px 20px;
            font-size: 25px;
            background: #607d8b; /* Blue Grey */
            cursor: pointer;
        }

        .navbar #sidebar-close {
            cursor: pointer;
        }

        .main {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            z-index: 100;
            background: #f5f5f5; /* Light grey */
        }

        .main h1 {
            color: #212121; /* Grey */
            font-size: 40px;
            text-align: center;
        }

        /* Form container styles */
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #81c784; /* Pastel green */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #4caf50; /* Darker pastel green */
        }
  </style>
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
                  <a href="<?= BASEURL; ?>/crmp/profile">View profile</a>           
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
            <a href="<?= BASEURL; ?>/login/getLogout" class="btn btn-warning" style="margin-top:220px">Logout</a>
            </div>
          </li>
    </nav>

    <nav class="navbar">
        <i class="fa-solid fa-bars" id="sidebar-close"></i>
        <span>CRMP</span>
    </nav>


    <main class="main">
         <h1 class="information__title">Hi, Welcome <?= htmlspecialchars($_SESSION['name']) ?></h1>
    </main>