<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
        <table class="table-primary search3">
            <caption><span class="pointer"></span>총 게시물 수 : <span class="counter">1</span>건</caption>
            <thead>
            <tr>
                <th>번호</th>
                <th><a href="#none">ISBN</a></th>
                <th><a href="#none">도서명</a></th>
                <th><a href="#none">저자</a></th>
                <th><a href="#none">발행처</a></th>
                <th><a href="#none">발행년</a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>8901108380</td>
                <td class="tal"><a href="book4-1.php">미스터리 심리학:이성을 마비시키는 점술, 유령, 초능력의 진실</a></td>
                <td>리처드 와이즈먼 지음;김영선 옮김</td>
                <td class="tal">웅진지식하우스</td>
                <td>2011</td>
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
    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>