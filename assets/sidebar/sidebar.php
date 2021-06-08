<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="data_editor.php" class="brand-link">
      
      <span class="brand-text font-weight-light">Bicara Wanita</span>
    </a>


          <!-- Sidebar Menu -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item d-none">
            <a href="../admin/data_editor.php?page=data_editor" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Admin
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/data_editor.php?page=artikel" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/data_editor.php?page=kategori" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../detail/logout.php" class="nav-link">
              <div class="button btnd-danger">Logout</div>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?php
		if(isset($_GET['page'])){
			$page = $_GET['page'];
			switch ($page) {
				case 'data_editor':
					  include "../detail/data_editor.php";
					  break;
				case 'artikel':
					  include "../detail/data_artikel.php";
					  break;
            case 'kategori':
              include "../detail/data_kategori.php";
              break;
			}
      }else{
        //  include "index.php";
      }

     ?>
