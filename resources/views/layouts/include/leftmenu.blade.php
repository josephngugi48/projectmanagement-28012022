<div class="be-left-sidebar">
  <div class="left-sidebar-wrapper">
    <a class="left-sidebar-toggle" href="#">HOME</a>
    <div class="left-sidebar-spacer">
      <div class="left-sidebar-scroll">
        <div class="left-sidebar-content">
          <?php $role = Auth::user()->role_id; ?>
          <ul class="sidebar-elements">
            <li class="divider">Menu</li>
            <li class="{{ request()->is('home') ? 'active' : '' }}">
              <a href="home"><i class="icon mdi mdi-home"></i><span>Home</span></a>
            </li>
            <li class="{{ request()->is('addproject') ? 'active' : '' }}">
              <a href="addproject"><i class="icon mdi mdi-desktop-mac"></i>Add Projects</a>
            </li>
            <li class="{{ request()->is('viewprojects') ? 'active' : '' }}">
              <a href="viewprojects"><i class="icon mdi mdi-desktop-mac"></i>View Projects</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>