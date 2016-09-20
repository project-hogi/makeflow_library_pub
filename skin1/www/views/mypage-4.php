<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header-mypage.php"; ?>
<div class="module-content mypage-foot">
    <table class="table table-primary book-search-form">
        <caption class="hidden">신간도서</caption>
        <tr>
            <th>검색조건</th>
            <td>
                <input type="checkbox" id="form-borrow-1" value=""/>
                <label for="form-borrow-1">검색일자</label>
                <input type="checkbox" id="form-borrow-2" value=""/>
                <label for="form-borrow-2">도서상태</label>
            </td>
        </tr>
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
            <th>도서상태</th>
            <td>
                <select name="" id="" class="size-lg select-tpye-1">
                    <option value="">전체</option>
                    <option value="">대출 도서</option>
                    <option value="">연체 도서</option>
                    <option value="">반납 도서</option>
                </select>
            </td>
        </tr>
    </table>
    <p class="tar">
        <button type="submit" class="btn-oldst btn-style2">검    색</button>
    </p>
    </fieldset></form>
    <table class="table-primary search3">
        <caption><span class="pointer"></span>검색 도서 : <span class="counter">6</span>건</caption>
        <thead>
        <tr>
            <th><a href="#none">번호</a></th>
            <th><a href="#none">등록번호</a></th>
            <th><a href="#none">청구<br>기호</a></th>
            <th><a href="#none">도서명</a></th>
            <th><a href="#none">대출일</a></th>
            <th><a href="#none">반납<br>예정일</a></th>
            <th><a href="#none">반납일</a></th>
            <th><a href="#none">연기신청</a></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>0000000003</td>
            <td>713.04/윤76ㄱ</td>
            <td class="tal">고사성어 인문학 강의:네 글자에 담긴 49가지 인생과 철학 이야기</td>
            <td>2013-09-27</td>
            <td>2013-10-02</td>
            <td>2013-09-30</td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>0000000002</td>
            <td>R 070.4/앤73ㅌ</td>
            <td class="tal">Time:사진으로 보는 `타임`의 역사와 격동의 현대사</td>
            <td>2013-09-27</td>
            <td>2013-10-02</td>
            <td>2013-12-12</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>0000001248</td>
            <td>747.077/외65ㅇ</td>
            <td class="tal">영시강 토익(확인중)</td>
            <td>2014-06-27</td>
            <td>2014-07-02</td>
            <td>2014-06-27</td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>0000000057</td>
            <td>199.8/용94ㅇ</td>
            <td class="tal">아침을 여는 한줄의 글이 성공을 만든다</td>
            <td>2014-06-25</td>
            <td>2014-07-01</td>
            <td>2014-06-27</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>0000000052</td>
            <td>199.1/차25ㅁ</td>
            <td class="tal">(스마트 버전)무지개 원리:하늘 일 마다 잘되리라</td>
            <td>2014-06-25</td>
            <td>2014-07-01</td>
            <td>2014-08-14</td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td>M000000001</td>
            <td>2014년 1월</td>
            <td class="tal">과학동아</td>
            <td>2014-06-27</td>
            <td>2014-07-02</td>
            <td>2015-07-07</td>
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