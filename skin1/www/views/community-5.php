<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
        <table class="table-primary search3">
            <colgroup><col width="10%">
                <col width="50%">
                <col width="15%">
                <col width="15%">
            </colgroup><caption><span class="pointer"></span>총 게시물 수 : <span class="counter">2</span>건</caption>
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
                <td>2</td>
                <td class="tal"><a href="community-5-1.php">홈페이지 개편</a></td>
                <td>작성자</td>
                <td>2013-12-24</td>
                <td>8</td>
            </tr>
            <tr>
                <td>1</td>
                <td class="tal"><a href="community-5-1.php"><span class="icon-answer"><span class="sr-only">답변</span></span>홈페이지 개편</a></td>
                <td>답변자</td>
                <td>2013-12-24</td>
                <td>6</td>
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
        <p class="tar">
            <button type="submit" class="btn-oldst btn-style2">검    색</button>
        </p>
        

    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>