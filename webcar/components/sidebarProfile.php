<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="?c=Profile"><img src="img/profil.png" class="img-circle" width="80"></a></p>
      <h5 class="centered"> <?php echo $_SESSION['nama'] ?> </h5>
      <li class="sub-menu">
        <a href="?c=Login&m=dashboard">
          <i class="fa fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sub-menu">
        <a class="active" href="?c=Profile">
          <i class="fa fa-user"></i>
          <span>Profil</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="?c=ChatRoom">
          <i class="fa fa-comments-o"></i>
          <span>Chat Admin</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="?c=Login&m=logout">
          <i class="fa fa-sign-out"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>