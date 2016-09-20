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
            <th><a href="#none">제목</a></th>
            <th><a href="#none">작성일</a></th>
            <th><a href="#none">이벤트명</a></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="checkbox"></td>
            <td class="tal"><a href="detail-2.php">삼국지.1</a></td>
            <td>삼국지</td>
            <td>2016-09-19</td>
            <td>이벤트</td>
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
        <a href="detail-2.php" class="btn-detail-bookreport sp flr"><span class="sr-only">독후감쓰기</span></a>
        </p>
    </form>
</div>
<!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>