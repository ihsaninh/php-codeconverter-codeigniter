    <!-- tag penutup main -->
  </div>  
</div>
<!-- footer -->
<footer class="mt-3 footer">
	<div class="card-header category-list border-top">
		<div class="row ml-5 mt-3">
			<?php foreach ($menu as $m): ?>
			<div class="col">
				<h6 class="mb-3 title-footer-list"><?= $m['title']; ?></h6>
			<?php
          	$menuId = $m['id'];
	          $querySubmenu = " SELECT * FROM `tbl_submenu` WHERE `menu_id` = $menuId "; 
	          $submenu = $this->db->query($querySubmenu)->result_array();
         	?>
         	<?php foreach($submenu as $sm): ?>
         		<ul>
					<li><a href="<?= base_url($sm['url']); ?>"><?= $sm['title']; ?></a></li>
				</ul>
         	<?php endforeach; ?>
         	</div>
         	<?php endforeach; ?>
		</div>
	</div>
	<div class="card-header text-center light-text text-footer">
		<p>Copyright &copy; 2018 - 2019 <a href="">Code Converter</a> All Right Reserved</p>
	</div>
</footer>
</div>

<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
</body>

</html>