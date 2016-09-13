<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div class="module-content">

    <div class="hope-search">
        <form action="">
            <fieldset>
                <table class="table">
                    <caption class="hidden">희망도서검색</caption>
                    <tr>
                        <th>도서명</th>
                        <td><input type="text" class="size-md"><label for="" class="ml20 next-icon">희망도서 신청내역만 검색 합니다.</label></td>
                    </tr>
                    <tr>
                        <th>처리결과</th>
                        <td>
                            <select name="" id="" class="size-md select-tpye-1">
                                <option value="">전체</option>
                                <option value="">신청중</option>
                                <option value="">신청완료</option>
                                <option value="">구매완료</option>
                                <option value="">취소</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <p class="tar">
                    <a href="#none" class="btn-oldst btn-style2 next-green-icon"><span></span>검    색</a>
                </p>
            </fieldset>
        </form>
    </div>
    <table class="table-primary search3">
        <caption><span class="pointer"></span>총 게시물 수 : <span class="counter">2</span>건</caption>
        <thead>
        <tr>
            <th>번호</th>
            <th><a href="#none">도서명</a></th>
            <th><a href="#none">저자</a></th>
            <th><a href="#none">발행처</a></th>
            <th><a href="#none">발행년</a></th>
            <th>신청일</th>
            <th>처리결과</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td class="tal"><a href="book-2-1.php">데이터베이스</a></td>
            <td>홍길동 지음</td>
            <td class="tal"></td>
            <td></td>
            <td>2014-07-01</td>
            <td>신청중</td>
        </tr>
        <tr>
            <td>2</td>
            <td class="tal"><a href="book-2-1.php">조엘 온 소프트웨어</a></td>
            <td>조엘 스폴스키 지음</td>
            <td class="tal">에어콘</td>
            <td></td>
            <td>2013-12-02</td>
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


</div>
<!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>



