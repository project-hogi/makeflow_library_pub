<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">총 작업가능 건수: <strong>700장</strong>, 총 사용건수: <strong>320장</strong></h3>
		<div class="box-tools pull-right">
			<div class="btn-group btn-group-md">
				<a href="payment-request.php" class="btn btn-primary btn-sm"><i class="fa fa-clipboard" aria-hidden="true"></i> 결제 요청</a>
			</div>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>결제월</th>
					<th>결제유형</th>
					<th>결제수단</th>
					<th>금액</th>
					<th>장수</th>
					<th>적용유무</th>
					<th>등록일시</th>
					<th>결제 상태</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>2016년 09월</td>
					<td>정액 1만원</td>
					<td>현금</td>
					<td>9,900</td>
					<td>100</td>
					<td>Y</td>
					<td>2016-08-08 05:08</td>
					<td><span class="label label-primary">결제 승인</span></td>
				</tr>
				<tr>
					<td>2016년 08월</td>
					<td>비정액 500건</td>
					<td>현금</td>
					<td>39,000</td>
					<td>500</td>
					<td>Y</td>
					<td>2016-08-09 03:08</td>
					<td><span class="label label-danger">결제 취소</span></td>
				</tr>
				<tr>
					<td>2016년 08월</td>
					<td>정액 1만원</td>
					<td>현금</td>
					<td>9,900</td>
					<td>100</td>
					<td>Y</td>
					<td>2016-08-08 05:08</td>
					<td><span class="label label-warning">결제 대기</span></td>
				</tr>
				<tr>
					<td>2016년 08월</td>
					<td>정액 1만원</td>
					<td>현금</td>
					<td>9,900</td>
					<td>100</td>
					<td>Y</td>
					<td>2016-08-08 05:08</td>
					<td><span class="label label-default">결제 보류</span></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="box-footer">
		<div class="text-center">
			<ul class="pagination">
				<li class="paginate_button previous disabled" id="example1_previous"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> 이전</a></li>
				<li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
				<li class="paginate_button"><a href="#">2</a></li>
				<li class="paginate_button"><a href="#">3</a></li>
				<li class="paginate_button"><a href="#">4</a></li>
				<li class="paginate_button"><a href="#">5</a></li>
				<li class="paginate_button"><a href="#">6</a></li>
				<li class="paginate_button next" id="example1_next"><a href="#">다음 <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>