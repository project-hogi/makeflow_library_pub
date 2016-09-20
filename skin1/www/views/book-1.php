<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">

<form><fieldset>

<table class="table table-primary book-search-form">
    <caption class="hidden">신간도서</caption>
    <tr>
        <th rowspan="2">검색일자</th>
        <td>
            <a href="#none" class="btn-oldst btn-style1">1주</a>
            <a href="#none" class="btn-oldst btn-style1">1개월</a>
            <a href="#none" class="btn-oldst btn-style1">3개월</a>
            <a href="#none" class="btn-oldst btn-style1">6개월</a>
            <a href="#none" class="btn-oldst btn-style1">1년</a>
        </td>
    </tr>
    <tr>
        <td>
            <input type="date" class="size-sm">
            <span>~</span>
            <input type="date" class="size-sm">
        </td>
    </tr>
    <tr>
        <th>분류기호</th>
        <td>
            <select name="" id="" class="size-lg select-tpye-1">
                <option value="">적용안함</option>
                <option value="">[000]총류</option>
                <option value="">[100]철학</option>
                <option value="">[200]종교</option>
                <option value="">[300]사회과학</option>
                <option value="">[400]순수과학</option>
                <option value="">[500]기술과학</option>
                <option value="">[600]예술</option>
                <option value="">[700]언어</option>
                <option value="">[800]문학</option>
                <option value="">[900]역사</option>
            </select>
        </td>
    </tr>
</table>
<p class="tar">
    <button type="submit" class="btn-oldst btn-style2">검    색</button>
</p>
</fieldset></form>


        <table class="table-primary search3 newbook">
            <caption><span class="pointer"></span>검색 도서 : <span class="counter">1</span>건</caption>
            <thead>
            <tr>
                <th>번호</th>
                <th><a href="#none">표지</a></th>
                <th><a href="#none">도서명</a></th>
                <th><a href="#none">저자</a></th>
                <th><a href="#none">발행처</a></th>
                <th><a href="#none">발행년</a></th>
                <th>유형</th>
                <th>목차</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td class="img_cover"><img src="/resources-dev/front/images/part/page-sub/BOOKBIB53291.jpg" alt="" width="40"></td>
                <td class="tal"><a href="detail-book.php">미스터리 심리학:이성을 마비시키는 점술, 유령, 초능력의 진실</a></td>
                <td>리처드 와이즈먼 지음;김영선 옮김</td>
                <td class="tal">웅진지식하우스</td>
                <td>2011</td>
                <td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
                <td></td>
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



