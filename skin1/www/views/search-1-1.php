<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div class="module-content">
	<div class="search-1-1">
		<form action="">
			<fieldset>
				<p class="ml20 next-icon">검색어 : <span>[전체:]</span></p>
				<p>
					<label for="" class="ml20 next-icon">결과내 검색</label>
					<input type="checkbox">
					<select name="" id="">
						<option value="">전체</option>
						<option value="">서명</option>
						<option value="">저자</option>
						<option value="">발행처</option>
					</select>
					<input type="text" size="20">
					<a href="#none" class="btn-detail-searching sp"></a>
				</p>

			</fieldset>
		</form>
	</div>
	<p class="fll custom-position">
		<a href="#none" class="btn-detail-back sp"><span class="sr-only">이전화면</span></a>
		<a href="search-1.php" class="btn-detail-search sp"><span class="sr-only">검색화면</span></a>
	</p>
	<table class="table-primary search3">
		<caption><span class="pointer"></span>검색 도서 : <span class="counter">3308</span>건</caption>
		<thead>
		<tr>
			<th>번호</th>
			<th><a href="#none">도서명</a></th>
			<th><a href="#none">저자</a></th>
			<th><a href="#none">발행처</a></th>
			<th><a href="#none">발행년</a></th>
			<th>대출</th>
			<th>예약</th>
			<th>유형</th>
			<th>목차</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>1</td>
			<td class="tal"><a href="detail-book.php">미스터리 심리학:이성을 마비시키는 점술, 유령, 초능력의 진실</a></td>
			<td>리처드 와이즈먼 지음;김영선 옮김</td>
			<td class="tal">웅진지식하우스</td>
			<td>2011</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>2</td>
			<td class="tal"><a href="detail-book.php">Time:사진으로 보는 `타임`의 역사와 격동의 현대사</a></td>
			<td>노베르토 앤젤레티;알베르토 올리바 지음;정명진 옮김</td>
			<td class="tal">부글북스</td>
			<td>2012</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>3</td>
			<td class="tal"><a href="detail-book.php">고사성어 인문학 강의:네 글자에 담긴 49가지 인생과 철학 이야기</a></td>
			<td>윤지산 지음</td>
			<td class="tal">디스커버리미디어</td>
			<td>2011</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>4</td>
			<td class="tal"><a href="detail-book.php">통섭의 식탁:최재천 교수가 초대하는 풍성한 지식의 만찬</a></td>
			<td>최재천 지음</td>
			<td class="tal">명진출판</td>
			<td>2012</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>5</td>
			<td class="tal"><a href="detail-book.php">e-시사 일반상식</a></td>
			<td>시사문화사편집부 지음</td>
			<td class="tal">시사문화사</td>
			<td>2007</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_nono_1.gif" alt="대출불가" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>6</td>
			<td class="tal"><a href="detail-book.php">취업 일반상식 2000문제</a></td>
			<td>일반상식편찬위원회 지음</td>
			<td class="tal">예스폼</td>
			<td>2010</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>7</td>
			<td class="tal"><a href="detail-book.php">(2011)최신시사상식 149집</a></td>
			<td>시사상식편집부 지음</td>
			<td class="tal">박문각</td>
			<td>2010</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>8</td>
			<td class="tal"><a href="detail-book.php">Visual C++ 2008 MFC 윈도우 프로그래밍:MFC v9점0 기반</a></td>
			<td>최호성 지음</td>
			<td class="tal">프리렉</td>
			<td>2009</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>9</td>
			<td class="tal"><a href="detail-book.php">지금 시작하는 인문학:우리 시대가 알아야 할 최소한의 인문 지식</a></td>
			<td>주현성 지음</td>
			<td class="tal">더좋은책</td>
			<td>2012</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		<tr>
			<td>10</td>
			<td class="tal"><a href="detail-book.php">이어령의 교과서 넘나들기.1:디지털 편, 디지털시대와 우리의 미래</a></td>
			<td>이어령 [콘텐츠];이동은 글;나연경 그림</td>
			<td class="tal">살림</td>
			<td>2011</td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_lending_okok_1.gif" alt="대출가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/btn_reservation_okok_1.gif" alt="예약가능" /></td>
			<td><img src="<?php echo $config["resourcesDir"]; ?>/images/part/page-sub/book_01.gif" alt="단행본" /></td>
			<td></td>
		</tr>
		</tbody>
	</table>
	<p class="pointer ps">검색 결과를 정렬하려면, 위의 필드명(서명, 저자, 발행처, 발행년)을 클릭하세요.</p>
	<div class="table-pager">
		<div class="pager_list">
			<a href="#">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#">4</a>
			<a href="#">5</a>
			<a href="#">6</a>
			<a href="#">7</a>
			<a href="#">8</a>
			<a href="#">9</a>
			<a href="#">10</a>
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