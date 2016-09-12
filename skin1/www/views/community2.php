<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
        <table class="table-primary search3">
            <col width="10%">
            <col width="40%">
            <col width="15%">
            <col width="15%">
            <col width="10%">
            <caption><span class="pointer"></span>총 게시물 수 : <span class="counter">1</span>건</caption>
            <thead>
            <tr>
                <th>번호</th>
                <th><a href="#none">제목</a></th>
                <th><a href="#none">작성자</a></th>
                <th><a href="#none">등록일</a></th>
                <th><a href="#none">조회수</a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td class="tal"><a href="#none">희망도서 신청은 어떻게 하나요.</a></td>
                <td>admin</td>
                <td>2013-12-24</td>
                <td>11</td>
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
        
        <div class="table-search-bar">
            <select name="" id="">
                <option value="">제목</option>
                <option value="">내용</option>
                <option value="">작성자</option>
                <option value="">제목 + 내용</option>
            </select>
            <input type="text" class="size-md">
            <a href="#none" class="btn btn-sm btn-sample1">검 색 <span class="point">&gt;</span></a>

        </div>

    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>