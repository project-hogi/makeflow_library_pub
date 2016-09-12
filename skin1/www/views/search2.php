<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div class="module-content">
<form action="">
<table class="table-primary search2">
  <tbody>
    <tr>
      <th> 자료유형 </th>
      <td>
        <input type="checkbox" id="pattern-1" checked="checked">
        <label for="pattern-1">전체</label>
        <input type="checkbox" id="pattern-2">
        <label for="pattern-2">단행본</label>
        
        <input type="checkbox" id="pattern-3">
        <label for="pattern-3">연속간행물</label>
        <input type="checkbox" id="pattern-4">
        <label for="pattern-4">멀티미디어/비도서</label> </td>
    </tr>
    <tr>
      <th> 검색조건 </th>
      <td>
        <input type="checkbox" id="terms-1" checked="checked">
        <label for="terms-1">대출도서포함</label>
        <input type="checkbox" id="terms-2" checked="checked">
        <label for="terms-2">예약도서포함</label>
        </td>
    </tr>
    <tr>
      <th> 대장선택 </th>
      <td><select class="box-md">
          <option>전체</option>
          <option>[0] 단행본</option>
          <option>[CD] 비도서</option>
          <option>[M] 연속간행물</option>
          <option>[EM] 단행본2</option>
          <option>[Y] 열린교회</option>
          <option>[PM] 경찰대학교</option>
          <option>[MB] 학교</option>
        </select></td>
    </tr>
    <tr>
      <th> 등록번호 </th>
      <td>
      	<input type="text" class="box-sm">
        ~
        <input type="text" class="box-sm">
         </td>
    </tr>
    <tr>
      <th> 도서명 </th>
      <td><input type="text" class="box-md">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 저자명 </th>
      <td><input type="text" class="box-md">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 출판사 </th>
      <td><input type="text" class="box-md">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 출판년 </th>
      <td><input type="text" class="box-sm">
        ~
        <input type="text" class="box-sm">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> ISBN / ISSN </th>
      <td><input type="text" class="box-md">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 별치기호 </th>
      <td><input type="text" class="box-md">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 분류기호 </th>
      <td><input type="text" class="box-xs">
        
        <input type="text" class="box-xs">
        ~
        <input type="text" class="box-xs">
        
        <input type="text" class="box-xs">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 매체종류 </th>
      <td><select class="box-md">
          <option>전체</option>
        </select>
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 목차 </th>
      <td><input type="text" class="box-md">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 초록 </th>
      <td><input type="text" class="box-md">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 주제어 </th>
      <td><input type="text" class="box-md">
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 이용대상자 </th>
      <td><select class="box-md">
          <option>전체</option>
          <option>/ 일반 이용자</option>
          <option>a 취학전 아동</option>
          <option>b 초등학생</option>
          <option>c 중학생</option>
          <option>d 고등학생</option>
          <option>e 성인</option>
          <option>f 특수계층</option>
          <option>j 아동</option>
          <option>z 미상 또는 세분화하지 않는 경우</option>
          <option>| 부호화하지 않음</option>
          <option>직접입력</option>
        </select>
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 배가위치 </th>
      <td><select class="box-md">
          <option>전체</option>
          <option>신간도서</option>
          <option>7층</option>
          <option>262</option>
          <option>교육관</option>
          <option>\</option>
        </select>
        
        <select class="box-xs">
          <option>AND</option>
          <option>OR</option>
          <option>NOT</option>
        </select></td>
    </tr>
    <tr>
      <th> 구입형태(가격의 성격) </th>
      <td><select class="box-md">
          <option>전체</option>
          <option>비매품</option>
          <option>가격불명</option>
          <option>무료배포</option>
          <option>배포가</option>
          <option>회원가</option>
          <option>비회원가</option>
          <option>특가</option>
          <option>장정별</option>
          <option>구입</option>
          <option>기증</option>
          <option></option>
        </select>
         </td>
    </tr>
  </tbody>
</table>
<div class="btn_group">
	<input type="submit" class="btn-oldst search_btn" value="검&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;색"/>
	<input type="button" class="btn-oldst rewrite_btn" value="다시쓰기"/>
</div>
</form>




</div>
<!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>