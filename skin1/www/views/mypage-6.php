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
            </colgroup><caption><span class="pointer"></span>총 게시물 수 : <span class="counter">0</span>건</caption>
            <thead>
            <tr>
                <th><a href="#none">번호</a></th>
                <th><a href="#none">도서명</a></th>
                <th><a href="#none">저자</a></th>
                <th><a href="#none">출판사</a></th>
                <th><a href="#none">내용</a></th>
                <th><a href="#none">변경</a></th>
            </tr>
            </thead>
            <tbody>

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
    </form>
</div>
<!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>