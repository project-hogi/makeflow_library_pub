<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header-mypage.php"; ?>
<div class="module-content">
    <form action="">
        <table class="table-primary search3">
            <colgroup><col width="10%">
                <col width="25%">
                <col width="25%">
                <col width="15%">
                <col width="15%">
            </colgroup><caption><span class="pointer"></span>총 게시물 수 : <span class="counter">1</span>건</caption>
            <thead>
            <tr>
                <th><a href="#none">선택</a></th>
                <th><a href="#none">도서명</a></th>
                <th><a href="#none">저자</a></th>
                <th><a href="#none">발행처</a></th>
                <th><a href="#none">발행년</a></th>
                <th><a href="#none">이벤트명</a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="checkbox"></td>
                <td class="tal"><a href="detail-1.php">데이터베이스</a></td>
                <td>홍길동 지음</td>
                <td></td>
                <td></td>
                <td>신청중</td>
            </tr>
            </tbody>
        </table>
        <div class="table-pager">
            <div class="pager_list">
                <a href="#">1</a>
            </div>
            <div class="page-control">
                <a href="#" class="next tab"><span class="sr-only">next-tab</span></a>
                <a href="#" class="next page"><span class="sr-only">next-page</span></a>
            </div>
        </div>
        <p>
            <a href="#none" class="btn-detail-delite sp fll"><span class="sr-only">삭제</span></a>
            <a href="detail-1.php" class="btn-detail-application sp flr"><span class="sr-only">신청하기</span></a>
        </p>
    </form>
</div>
<!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>