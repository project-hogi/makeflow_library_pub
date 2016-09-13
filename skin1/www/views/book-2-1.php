<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div class="module-content">

    <table class="table table-primary">
        <col width="150">
        <col>
        <tbody>
        <tr>
            <th>도서명</th>
            <td>데이터베이스</td>
        </tr>
        <tr>
            <th>저자명</th>
            <td>홍길동 지음</td>
        </tr>
        <tr>
            <th>출판사</th>
            <td></td>
        </tr>
        <tr>
            <th>출판년</th>
            <td></td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td></td>
        </tr>
        <tr>
            <th>가 격</th>
            <td></td>
        </tr>
        <tr>
            <th>신청사유</th>
            <td>alert("test");</td>
        </tr>
        <tr>
            <th>처리 결과</th>
            <td></td>
        </tr>
        </tbody>
    </table>
    <p class="tar"><a href="book-2.php" class="btn-backtolist"><span class="sr-only">전체목록 가기</span></a></p>


</div>
<!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>



