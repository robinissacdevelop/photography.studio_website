<!DOCTYPE html>
<html>

<head>
  <title>photography studio website / registration</title>
  <link rel="stylesheet" type="text/css" href="regist.css">
  </link>
  <script src="https://kit.fontawesome.com/e26346cdbb.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div id="main-menu">
      <nav id="menu-area">
        <ul>
          <li><a href="#">SERVICE</a>
            <ul class="submenu-1">
              <li><a href="wedding.html">WEDDING</a></li>
              <li><a href="family.html">FAMILY</a></li>
              <li><a href="newborn.html">NEWBORN</a></li>
              <li><a href="couple.html">COUPLE/ENGAGEMENT</a></li>
            </ul>
          </li>
          <li><a href="blog.html">BLOG</a></li>
          <li><a href="#">INFO</a>
            <ul class="submenu-2">
              <li><a href="photographers.html">THE PHOTOGRAPHERS</a></li>
              <li><a href="goodword.html">GOOD WORDS</a></li>
              <li><a href="mentoring.html">MENTORING & WORKSHOPS</a></li>
              <li><a href="albums.html">ALBUMS</a></li>
            </ul>
          </li>
          <a href="home.html">
            <img src="imges/Picsart_23-03-03_16-21-17-085 (1).png" width="150" height="100" alt="Navigation Image">
          </a>
          <li><a href="#">ELOPMENTS</a>
            <ul class="submenu-3">
              <li><a href="elopments.html">ELOPMENTS</a></li>
              <li><a href="couple.html">COUPLES</a></li>
            </ul>
          </li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="shop.html">SHOP</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <form action="login.php" method="post">
    <h2>REGISTRION</h2>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>NAME</label>
    <input type="text" name="unname" placeholder="username"><br>

    <label>E-MAIL</label>
    <input type="text" name="email" placeholder="email"><br>

    <label>OCCASION</label>
    <input type="text" name="function" placeholder="function"><br>

    <label>PASSWORD</label>
    <input type="password" name="password" placeholder="password"><br>

    <button type="submit">SUBMIT</button>
  </form>

  <h6>SOCIAL MEDIA HANDELINGS</h6>
    <div class="centerdiv">
      <a href="#" id="media" target="_blank">
        <i class="fa-brands fa-2x fa-facebook"></i>
      </a>

      <a href="#" id="media" target="_blank">
        <i class="fa-brands fa-2x fa-instagram"></i>
      </a>

      <a href="#" id="media" target="_blank">
        <i class="fa-brands fa-2x fa-telegram"></i>
      </a>

      <a href="#" id="media" target="_blank">
        <i class="fa-solid fa-2x fa-square-envelope"></i>
      </a>
    </div>

</body>

</html>