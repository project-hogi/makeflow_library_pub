<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <div class="module-content">
        <table class="table-primary">
            <tr>
                <th>
                    작성자
                </th>
                <td>
                    <input type="text" class="size-md">
                </td>
            </tr>
            <tr>
                <th>
                    이메일
                </th>
                <td>
                    <input type="text" class="size-md">
                </td>
            </tr>
            <tr>
                <th>
                    비밀번호
                </th>
                <td>
                    <input type="password" class="size-md">
                </td>
            </tr>
            <tr>
                <th>
                    제목
                </th>
                <td>
                    <input type="text" class="size-100">
                </td>
            </tr>
            <tr>
                <th>
                    내용
                </th>
                <td>
                    <textarea name="" id="" cols="96" rows="10"></textarea>
                </td>
            </tr>
        </table>
        <p class="mt20 flr">
            <a href="#none" class="btn-detail-upload sp"><span class="sr-only">등록</span></a>
            <a href="community-5.php" class="btn-detail-list sp"><span class="sr-only">목록</span></a>
        </p>
    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>