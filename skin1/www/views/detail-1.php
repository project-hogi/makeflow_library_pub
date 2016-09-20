<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header-mypage.php"; ?>
    <div class="module-content">
        <form action="">
            <table class="table-primary">
                <col width="25%">
                <col width="">
                <tbody>
                <tr>
                    <th><span class="spot">*</span> 도서명 </th>
                    <td>
                        <input type="text" class="size-lg">
                        <a href="#none" class="btn-detail-searching sp ml20"><span class="sr-only">검색</span></a>
                    </td>
                </tr>
                <tr>
                    <th><span class="spot">*</span> 저자명 </th>
                    <td>
                        <input type="text" class="box-md">
                    </td>
                </tr>
                <tr>
                    <th> 출판사 </th>
                    <td>
                        <input type="text" class="box-md">
                    </td>
                </tr>
                <tr>
                    <th> 출판년 </th>
                    <td>
                        <input type="text" class="box-md">
                    </td>
                </tr>
                <tr>
                    <th> ISBN </th>
                    <td>
                        <input type="text" class="box-md">
                    </td>
                </tr>
                <tr>
                    <th> 가 격 </th>
                    <td>
                        <input type="text" class="box-md">
                    </td>
                </tr>
                <tr>
                    <th> 신청사유 </th>
                    <td>
                        <textarea name="" id="" cols="80" rows="15"></textarea>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="btn_group">
                <input type="button" class="btn-oldst search_btn" value="신청"/>
                <input type="button" class="btn-oldst rewrite_btn" value="다시쓰기"/>
                <a href="mypage-5.php" class="btn-detail-list sp"><span class="sr-only">목록</span></a>
            </div>
        </form>
    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>