<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div class="module-content">

<form action="">
	<table class="table-primary search1">
		<col />
		<col />
		<tr>
			<th>검&nbsp;&nbsp;&nbsp;색&nbsp;&nbsp;&nbsp;어</th>
			<td>
				<input type="text" />
			</td>
		</tr>
		<tr>
			<th>자 료 유 형</th>
			<td>
				<input type="checkbox" id="pds_type-1" value="pds_type-1" checked/><label for="pds_type-1">전체</label>
				<input type="checkbox" id="pds_type-2" value="pds_type-2" /><label for="pds_type-2">단행본</label>
				<input type="checkbox" id="pds_type-3" value="pds_type-3" /><label for="pds_type-3">연속간행물</label>
				<input type="checkbox" id="pds_type-4" value="pds_type-4" /><label for="pds_type-4">멀티미디어/비도서</label>
			</td>
		</tr>
		<tr>
			<th>검 색 조 건</th>
			<td>
				<input type="checkbox" id="include_type-1" value="include_type-1" checked/><label for="include_type-1">대출도서포함</label>
				<input type="checkbox" id="include_type-2" value="include_type-1" checked/><label for="include_type-2">예약도서포함</label>
			</td>
		</tr>
	</table>
	<div class="btn_group">
		<input type="submit" class="btn-oldst search_btn" value="검&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;색"/>
		<input type="button" class="btn-oldst rewrite_btn" value="다시쓰기"/>
	</div>
</form>



</div>
<!-- /.module-content -->

<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>