<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
        <p class="fll">
            <a href="#none" class="btn-detail-back sp"><span class="sr-only">이전화면</span></a>
            <a href="search-1.php" class="btn-detail-search sp"><span class="sr-only">검색화면</span></a>
        </p>
        <p class="flr">
            <a href="#none" class="btn-green-rewrite"><span class="sr-only">서평</span></a>
            <a href="#none" class="btn-green-report"><span class="sr-only">독후감</span></a>
            <a href="#none" class="btn-green-review"><span class="sr-only">리뷰</span></a>
            <a href="#none" class="btn-green-marc"><span class="sr-only">MARC</span></a>
        </p>
        <table class="table-primary book-info-table">
            <tbody>
            <tr>
                <th>자료유형</th>
                <td>단행본</td>
            </tr>
            <tr>
                <th>도서명</th>
                <td>미스터리 심리학:이성을 마비시키는 점술, 유령, 초능력의 진실</td>
            </tr>
            <tr>
                <th>총서명</th>
                <td></td>
            </tr>
            <tr>
                <th>저자</th>
                <td>리처드 와이즈먼 지음;김영선 옮김</td>
            </tr>
            <tr>
                <th>출판사</th>
                <td>웅진지식하우스</td>
            </tr>
            <tr>
                <th>출판년도</th>
                <td>2011</td>
            </tr>
            <tr>
                <th>판차/페이지</th>
                <td>326p.</td>
            </tr>
            <tr>
                <th>ISBN</th>
                <td>8901129108</td>
            </tr>
            <tr>
                <th>가격</th>
                <td>￦15000</td>
            </tr>
            </tbody>
        </table>
        <h5 class="custom-position"><span class="point"></span>소장정보</h5>
        <table class="table-primary search3">
            <caption><span class="pointer"></span>총 게시물 수 : <span class="counter">1</span>건</caption>
            <thead>
            <tr>
                <th>번호</th>
                <th><a href="#none">청구기호</a></th>
                <th><a href="#none">소장처</a></th>
                <th><a href="#none">등록번호</a></th>
                <th><a href="#none">도서상태</a></th>
                <th><a href="#none">반납예정일</a></th>
                <th><a href="#none">예약</a></th>
                <th><a href="#none">예약자</a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>187 와68ㅁ</td>
                <td>신간도서</td>
                <td>0000000001</td>
                <td>대출가능</td>
                <td></td>
                <td><a href="#none" class="btn-table-booking sp"><span class="sr-only">예약하기</span></a></td>
                <td>0명</td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>