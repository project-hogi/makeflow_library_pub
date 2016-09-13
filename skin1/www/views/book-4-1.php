<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
    <p>
        <a href="book-2.php" class="btn-detail-back">
            <span class="sr-only">이전화면</span>
        </a>
        <a href="book-2.php" class="btn-detail-search">
            <span class="sr-only">검색화면</span>
        </a>
        <span class="flr">
            <a href="#none" class="btn-green-rewrite"><span class="sr-only">서평</span></a>
            <a href="#none" class="btn-green-report"><span class="sr-only">독후감</span></a>
            <a href="#none" class="btn-green-review"><span class="sr-only">리뷰</span></a>
            <a href="#none" class="btn-green-marc"><span class="sr-only">MARC</span></a>
        </span>
    </p>
        <table class="table table-primary">
            <col width="150">
            <col>
            <tbody>
            <tr>
                <th>자료유형</th>
                <td>단행본</td>
            </tr>
            <tr>
                <th>도서명</th>
                <td>스무살에 알았더라면 좋았을 것들:스탠포드대 미래인생 보고서</td>
            </tr>
            <tr>
                <th>총서명</th>
                <td></td>
            </tr>
            <tr>
                <th>저자</th>
                <td>티나 실리그 지음;이수경 옮김</td>
            </tr>
            <tr>
                <th>출판사</th>
                <td>엘도라도</td>
            </tr>
            <tr>
                <th>출판년도</th>
                <td>2012</td>
            </tr>
            <tr>
                <th>판차/페이지</th>
                <td>256p.</td>
            </tr>
            <tr>
                <th>ISBN</th>
                <td>8901108380</td>
            </tr>
            <tr>
                <th>가격</th>
                <td>￦12000</td>
            </tr>
            </tbody>
        </table>
        
    <h5><span class="point"></span>소장정보</h5>
    <table class="table-primary search3">
        <caption class="hidden">소장정보</caption>
        <thead>
        <tr>
            <th>번호</th>
            <th><a href="#none">청구기호</a></th>
            <th><a href="#none">소장처</a></th>
            <th><a href="#none">등록번호</a></th>
            <th><a href="#none">도서상태</a></th>
            <th>반납예정일</th>
            <th>예약</th>
            <th>예약자</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td class="tal"><a href="#none">199.5실298ㅅ082</a></td>
            <td></td>
            <td>000000082</td>
            <td>대출가능</td>
            <td></td>
            <td><a href="#none" class="btn-table-booking"><span class="sr-only">예약</span></a></td>
            <td>0명</td>
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



