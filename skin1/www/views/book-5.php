<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
        <h3 class="tab-tit tac">전체</h3>
        <table class="table-primary search3">
            <caption><span class="pointer"></span>총 게시물 수 : <span class="counter">1</span>건</caption>
            <thead>
            <tr>
                <th>순위</th>
                <th><a href="#none">청구기호</a></th>
                <th><a href="#none">도서명</a></th>
                <th><a href="#none">저자</a></th>
                <th><a href="#none">발행처</a></th>
                <th><a href="#none">발행년</a></th>
                <th><a href="#none">대출횟수</a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>????</td>
                <td class="tal"><a href="#none">미스터리 심리학:이성을 마비시키는 점술, 유령, 초능력의 진실</a></td>
                <td>리처드 와이즈먼 지음;김영선 옮김</td>
                <td class="tal">웅진지식하우스</td>
                <td>2011</td>
                <td>100</td>
            </tr>
            </tbody>
        </table>
        <div class="table-pager sort">
            <div class="pager_list">
                <a href="#">전체</a>
                <a href="#">총류</a>
                <a href="#">철학</a>
                <a href="#">종교</a>
                <a href="#">사회과학</a>
                <a href="#">순수과학</a>
                <a href="#">기술과학</a>
                <a href="#">예술</a>
                <a href="#">언어</a>
                <a href="#">문학</a>
            </div>
        </div>



    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>



