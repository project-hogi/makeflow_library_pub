<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
        <table class="table-primary">
            <tbody>
            <tr>
                <th>작  성   자</th>
                <td>관리자</td>
                <th>등  록   일</th>
                <td>2013-10-10</td>
                <th>조  회   수</th>
                <td>14</td>
            </tr>
            <tr>
                <th>제       목</th>
                <td colspan="5">희망도서 신청은 어떻게하나요.</td></tr>
            <tr>
                <td colspan="6">마이페이지에서 보시면 있습니다.</td>
            </tr>
            </tbody>
        </table>
        <p class="tar mt20"><a href="community-2.php" class="btn-detail-list"><span class="sr-only">목록</span></a></p>
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
                    <a href="#none">이전글이 존재하지 않습니다.</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>