<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div class="module-content">

    <form><fieldset>

            <table class="table book-search-form">
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
                    <th>이벤트</th>
                    <td>
                        <select name="" id="" class="size-lg">
                            <option selected="selected" value="-1">--이벤트를 선택하세요--</option>
                            <option value="2">가을 독후감 이벤트</option>
                            <option value="3">여름방학 독후감 이벤트</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>소 속</th>
                    <td>
                        <select name="" id="" class="size-lg">
                            <option selected="selected" value="-1">--소속을 선택하세요--</option>
                            <option value="1;1">운영자 / 없음</option>
                            <option value="2;2">회원 / 없음</option>
                            <option value="3;3">1학년 / 1반</option>
                            <option value="4;4">103동 / 없음</option>
                            <option value="3;5">1학년 / 2반</option>
                            <option value="5;6">2학년 / 1반</option>
                            <option value="5;7">2학년 / 2반</option>
                            <option value="6;8">3학년 / 1반</option>
                            <option value="6;9">3학년 / 2반</option>
                            <option value="7;10">104동 / 없음</option>
                            <option value="7;11">104동 / 없으</option>
                            <option value="8;12">107동 / 없음</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p class="tar">
                <button type="submit" class="btn-oldst btn-style2">검    색</button>
            </p>
        </fieldset></form>


    <table class="table-primary search3">
        <caption><span class="pointer"></span>총 게시물 수 : <span class="counter">0</span>건</caption>
        <thead>
        <tr>
            <th>번호</th>
            <th><a href="#none">도서명</a></th>
            <th><a href="#none">제목</a></th>
            <th><a href="#none">작성일</a></th>
            <th><a href="#none">이벤트명</a></th>
            <th><a href="#none">작성자</a></th>
            <th><a href="#none">소속</a></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td class="tal"><a href="#none"></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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





<select name="ctl00$PlaceHolderCustomer$ddlGroup" id="ctl00_PlaceHolderCustomer_ddlGroup" style="width:155px;">
    <option selected="selected" value="-1">--소속을 선택하세요--</option>
    <option value="1;1">운영자 / 없음</option>
    <option value="2;2">회원 / 없음</option>
    <option value="3;3">1학년 / 1반</option>
    <option value="4;4">103동 / 없음</option>
    <option value="3;5">1학년 / 2반</option>
    <option value="5;6">2학년 / 1반</option>
    <option value="5;7">2학년 / 2반</option>
    <option value="6;8">3학년 / 1반</option>
    <option value="6;9">3학년 / 2반</option>
    <option value="7;10">104동 / 없음</option>
    <option value="7;11">104동 / 없으</option>
    <option value="8;12">107동 / 없음</option>

</select>



