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
                <td colspan="5">자유게시판1</td></tr>
            <tr>
                <td colspan="6">자유게시판1</td>
            </tr>
            </tbody>
        </table>

        <p class="mt20">
            <a href="#none" class="btn-detail-answer sp"><span class="sr-only">답변하기</span></a>
            <span class="flr">
                <a href="#none" class="btn-detail-rewrite sp"><span class="sr-only">수정</span></a>
                <a href="#none" class="btn-detail-delite sp"><span class="sr-only">삭제</span></a>
                <a href="community-5.php" class="btn-detail-list sp"><span class="sr-only">목록</span></a>
            </span>
        </p>


        <table class="table table-box table-hover fz12 mt20">
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


    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>