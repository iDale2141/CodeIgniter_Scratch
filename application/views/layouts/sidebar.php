<?php if($this->session->has_userdata('user')): ?>
<?php 
	$user_data = $this->session->userdata('user');
	$username  = ucfirst($user_data->username);
	$role  = ucwords($user_data->user_role);
?>

<?php else: ?>
	<?php $username = 'UNAUTHORIZED ACCESS DETECTED'; ?>
<?php endif; ?>

<!-- menu links -->
<?php
	
	$menu = array(
		['href' => 'home', 'label' => 'Enrollment Form', 'fa' => 'users', 'segment' => 'home'],
		['href' => 'student', 'label' => 'Student Information', 'fa' => 'user', 'segment' => 'student'],
	);

?>

<div id="sidebar" class="sidebar sidebar-transparent" style="position:fixed;">
	<div data-scrollbar="true" data-height="100%">
		<!-- USER INFO -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="image">
					<a href="javascript:;"><img src="<?= base_url('public/color-admin/assets/img/user-10.jpg')?>"/></a>
				</div>
				<div class="info">	
					<?= $username ?>
					<small><?= $role ?></small>
				</div>
			</li>
		</ul>

		<!-- menu links -->
		<ul class="nav">
			<li class="nav-header">Menu Links</li>
      		<?php foreach ($menu as $key => $value): ?>
				<li class="<?= $this->uri->segment(1) == strtolower($value['segment']) ? 'active' : '' ?>">
					<a href="<?=$value['href']?>"><i class="fa fa-<?=$value['fa']?>"></i> <span><?= $value['label'] ?></span></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<div class="sidebar-bg"></div>
