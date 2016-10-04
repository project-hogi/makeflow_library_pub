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
                    <th><span class="spot">*</span> 구분 </th>
                    <td>
                        <input type="radio" name="afterread-chk" id="afterread-chk-1" checked><label for="afterread-chk-1">공개</label>
                        <input type="radio" name="afterread-chk" id="afterread-chk-2" class="ml20" ><label for="afterread-chk-2">관리자공개</label>
                    </td>
                </tr>
                <tr>
                    <th> 이벤트 </th>
                    <td>
                        <select class="box-sm">
                            <option>이벤트를 선택하세요</option>
                            <option>이벤트</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> 제목 </th>
                    <td>
                        <input type="text" size="80">
                    </td>
                </tr>
                <tr>
                    <th> 파일 </th>
                    <td>
                        <input type="text" size="30" id="txt" />
                        <img src="/resources-dev/front/images/part/page-sub/input-file.png" onclick="document.getElementById('file').click();" />
                        <input type="file" size="30" id="file" style="display:none;" onchange="document.getElementById('txt').value=this.value;" />
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
                <a href="#none" class="btn-detail-rewrite sp"><span class="sr-only">수정</span></a>
                <input type="button" class="btn-oldst rewrite_btn" value="다시쓰기"/>
                <a href="mypage-5.php" class="btn-detail-list sp"><span class="sr-only">목록</span></a>
            </div>
        </form>
    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>