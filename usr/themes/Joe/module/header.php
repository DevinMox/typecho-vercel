<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
	http_response_code(404);
	exit;
}
if (!empty($this->options->JLoading) && $this->options->JLoading != 'off') {
	$JLoadingFile = 'module/loading/' . $this->options->JLoading . '.php';
	if (file_exists(JOE_ROOT . $JLoadingFile)) {
		echo '<!-- Loading开始 -->';
		echo '<link rel="stylesheet" href="' . joe\theme_url('assets/loading/' . $this->options->JLoading . '.css') . '">';
		$this->need($JLoadingFile);
		echo '<!-- Loading 结束 -->';
	}
}
?>
<header class="joe_header <?php echo $this->is('post') ? 'current' : '' ?>">
	<?php
	if (empty(joe\custom_navs())) {
		$this->need('module/header/above.php');
		if (joe\isPc()) $this->need('module/header/below.php');
	} else {
		$this->need('module/header/custom.php');
	}

	if ($this->options->JHeader_Counter == 'on') $this->need('module/header/counter.php');

	if (joe\isMobile()) {
		$this->need('module/header/searchout.php');
		$this->need('module/header/slideout.php');
	}
	?>
</header>