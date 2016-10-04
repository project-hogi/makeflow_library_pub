<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header-mypage.php"; ?>
<div class="module-content mypage-foot">
    <div class="mypage">
        <div class="image mypage-sp">
            <strong class="sr-only">프로필 사진</strong>
            <img src="" alt="프로필 이미지" width="120" height="160">
        </div>
        <div class="profile mypage-sp">
            <strong class="sr-only">my page</strong>
            <p><span class="sr-only">대출카드 ID :</span><span>S000000001</span></p>
            <p><span class="sr-only">성명 :</span><span>홍길동</span></p>
            <p><span class="sr-only">등급 :</span><span>1등급</span></p>
            <p><span class="sr-only">대출가능권수 :</span><span>3권</span></p>
            <p><span class="sr-only">대출제한일 :</span><span>111</span></p>
            <div>
                <a href="#none" class="change_pw sp"><span class="sr-only">비밀번호 변경</span></a>
            </div>
        </div>
        <div class="use mypage-sp">
            <strong class="sr-only">이용현황</strong>
            <p><span class="sr-only">대출권수 :</span><a href="mypage-4.php"><span>0</span>건</a></p>
            <p><span class="sr-only">연체권수 :</span><a href="mypage-4.php"><span>0</span>건</a></p>
            <p><span class="sr-only">예약권수 :</span><a href="mypage-3.php"><span>1</span>건</a></p>
        </div>
        <div class="active mypage-sp">
            <strong class="sr-only">도서관활동 현황</strong>
            <p><span class="sr-only">독후감 :</span><a href="mypage-2.php"><span>1</span>건</a></p>
            <p><span class="sr-only">도서리뷰 :</span><a href="mypage-6.php"><span>0</span>건</a></p>
        </div>
    </div>
    <!-- /.mypage -->
    <div class="change_pw-box">
        <strong>비밀번호 변경</strong>
        <form>
            <table class="table-primary">
                <tbody>
                <tr>
                    <th><label for="">기존 비밀번호</label></th>
                    <td><input type="password" name="" size="20"></td>
                </tr>
                <tr>
                    <th><label for="">새 비밀번호</label></th>
                    <td><input type="password" name="" size="20"></td>
                </tr>
                </tbody>
            </table>
            <p class="tar">
                <a href="#none" class="btn-detail-remark sp"><span class="sr-only">수정</span></a>
                <a href="#none" class="btn-detail-cancel sp"><span class="sr-only">취소</span></a>
            </p>
        </form>
    </div>
</div>
<!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>