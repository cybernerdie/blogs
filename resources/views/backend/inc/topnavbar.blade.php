  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="" alt="">{{Auth()->user()->name }}
              <span class=" fa fa-angle-down"></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- /top navigation -->