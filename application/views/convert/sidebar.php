<!-- sidebar -->
 <div class="row margin-atas" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
      <ul class="list-group">
        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
          <small>MAIN MENU</small>
        </li>
        <?php $i = 0; ?>
        <?php foreach ($menu as $m): ?>
        <?php $i++; ?>
           <a href="#submenu<?= $i; ?>" data-toggle="collapse" aria-expanded="true" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="<?= $m['icon']; ?>"></span>
            <span class="menu-collapsed"><?= $m['title']; ?></span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
        <?php
          $menuId = $m['id'];
          $querySubmenu = " SELECT * FROM `tbl_submenu` WHERE `menu_id` = $menuId "; 
          $submenu = $this->db->query($querySubmenu)->result_array();
          ?>
            <div id="submenu<?= $i; ?>" class="sidebar-submenu collapse show">
            <?php foreach($submenu as $sm): ?>
              <?php if($sm['title'] == $title): ?>
              <a href="<?= base_url($sm['url']); ?>" class="active list-group-item list-group-item-action">
                <span class="menu-collapsed"><?= $sm['title'] ?></span>
              </a>
              <?php else: ?>
                <a href="<?= base_url($sm['url']); ?>" class="list-group-item list-group-item-action">
                <span class="menu-collapsed"><?= $sm['title'] ?></span>
              </a>
              <?php endif; ?>
          <?php endforeach; ?>
          </div>
        <?php endforeach ?>
      </ul>
    </div>