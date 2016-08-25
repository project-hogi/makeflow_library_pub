<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<div class="error-page">
	<h2 class="headline text-yellow">404</h2>
	<div class="error-content">
		<h3>
			<i class="fa fa-warning text-yellow"></i> 페이지를 찾을 수 없습니다.
		</h3>
		<p>
			이전 페이지로 돌아 가거나 메인 페이지로 이동해 주세요.<br>
			<br>
			<a href="#back" class="btn btn-primary" onclick="history.back(); return false;">이전 페이지</a>
			<a href="/" class="btn btn-default">메인 페이지</a>
		</p>
	</div>
</div>
<?php require "part/app-footer.php"; ?>