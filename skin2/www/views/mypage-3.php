<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header-mypage.php"; ?>
<div class="module-content">
    <form action="">
        <table class="table-primary search3">
            <colgroup>
                <col width="5%">
                <col width="10%">
                <col width="20%">
                <col width="15%">
                <col width="15%">
                <col width="15%">
                <col width="10%">
                <col width="10%">
            </colgroup><caption><span class="pointer"></span>총 게시물 수 : <span class="counter">1</span>건</caption>
            <thead>
            <tr>
                <th><a href="#none">번호</a></th>
                <th><a href="#none">등록번호</a></th>
                <th><a href="#none">도서명</a></th>
                <th><a href="#none">반납<br>예정일</a></th>
                <th><a href="#none">예약일</a></th>
                <th><a href="#none">예약순위<br>대출기한</a></th>
                <th><a href="#none">처리상황</a></th>
                <th><a href="#none">취소</a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>0000000797</td>
                <td class="tal">책만 보는 바보:이덕무와 그의 벗들 이야기</td>
                <td></td>
                <td>2016-09-19</td>
                <td>2016-09-22</td>
                <td>예약완료</td>
                <td><a href="#none" class="btn-detail-cancel sp"><span class="sr-only">취소</span></a></td>
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
    </form>
</div>
<!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>