 <?php foreach($menu as $m): ?>
  <?php if($m['title'] == "Number Converter"): ?>
    <h4 class="text-center border-bottom pt-4 pb-3 margin-atas judul-index"><?= $m['title']; ?></h4>
    <?php else: ?>
      <h4 class="text-center border-bottom pt-4 pb-3 judul-index"><?= $m['title']; ?></h4>
    <?php endif; ?>
    <div class="container mt-4">
      <div class="col">
        <div class="row justify-content-center">
          <?php
          $menuId = $m['id'];
          $querySubmenu = " SELECT * FROM `tbl_submenu` WHERE `menu_id` = $menuId "; 
          $submenu = $this->db->query($querySubmenu)->result_array();
          ?>
          <?php foreach($submenu as $sm): ?>
            <a class="btn btn-link btn-lg" href="<?= $sm['url']; ?>" role="button"><?= $sm['title'] ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>