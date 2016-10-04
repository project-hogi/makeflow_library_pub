<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
        <table class="table-primary">
            <tbody>
            <tr>
                <th>제       목</th>
                <td colspan="3">홈페이지 개편</td>
            </tr>
            <tr>
                <th>작  성   자</th>
                <td>관리자</td>
                <th>등  록   일</th>
                <td>2013-12-24</td>
            </tr>
            <tr>
                <td colspan="4" rowspan="3">
                    책꽂이 도서검색 홈페이지에 스킨이 3가지 추가되었습니다.<br>
                    많은 관심 부탁드립니다.<br>
                    감사합니다.</td>
            </tr>
            </tbody>
        </table>
        <p class="tar mt20"><a href="#none" class="btn-detail-list"><span class="sr-only">목록</span></a></p>
        <table class="table table-box table-hover fz12">
            <tbody>
            <tr>
                <th>
                    <a href="#none"><span class="icon-up sp"></span>이전글</a>
                </th>
                <td>
                    <a href="#none">이전글이 존재하지 않습니다.</a>
                </td>
            </tr>
            <tr>
                <th>
                    <a href="#none"><span class="icon-down sp"></span>다음글</a>
                </th>
                <td>
                    <a href="#none">다음글이 존재하지 않습니다.</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>