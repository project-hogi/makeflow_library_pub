<!-- Header.html -->
<div id="wrap">
	<div id="header">
		<div class="container">
			<h1 class="site-logo"><a href="/" style="background-image: url(<?php echo $config["imageDir"]; ?>/_temp/logo.png);"><span class="sr-only"><?php echo $config["sitename"]; ?></span></a></h1>
			<div class="lnb">
				<ul>
					<li<?php if(getDepthId($pagePath, 0) == "introduce"){ ?> class="on"<?php } ?>>
						<a href="introduce.php">도서관 소개</a>
						<ul>
							<li><a href="introduce.php">인사말</a></li>
							<li><a href="introduce.php">도서관 소개</a></li>
							<li><a href="introduce.php">연혁</a></li>
							<li><a href="introduce.php">찾아오시는 길</a></li>
							<li><a href="introduce.php">시설현황</a></li>
							<li><a href="introduce.php">이용안내</a></li>
							<li><a href="introduce.php">일정관리</a></li>
						</ul>

					</li>
					<li<?php if(getDepthId($pagePath, 0) == "search"){ ?> class="on"<?php } ?>>
						<a href="search.php">도서검색</a>
						<ul>
							<li><a href="search.php">간략 검색</a></li>
							<li><a href="search2.php">상세검색</a></li>
							<li><a href="search3.php">분류검색1</a></li>
							<li><a href="search4.php">분류검색2</a></li>
							<li><a href="search5.php">분류검색3</a></li>
						</ul>
					</li>
					<li<?php if(getDepthId($pagePath, 0) == "info"){ ?> class="on"<?php } ?>>
						<a href="info.php">도서정보</a>
						<ul>
							<li><a href="info.php">신간도서</a></li>
							<li><a href="info.php">희망도서</a></li>
							<li><a href="info.php">추천도서</a></li>
							<li><a href="info.php">권장도서</a></li>
							<li><a href="info.php">베스트대출목록</a></li>
						</ul>
					</li>
					<li<?php if(getDepthId($pagePath, 0) == "community"){ ?> class="on"<?php } ?>>
						<a href="community.php">이용자 마당</a>
						<ul>
							<li><a href="community.php">공지사항</a></li>
							<li><a href="community.php">자주묻는 질문</a></li>
							<li><a href="community.php">Q&amp;A</a></li>
							<li><a href="community.php">독후활동</a></li>
							<li><a href="community.php">자유게시판</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="gnb">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">개인정보처리방침</a></li>
					<li><a href="#">Join</a></li>
					<li><a href="#">Mypage</a></li>
					<li><a href="#">Admin</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="body">
		<div id="container">
			<div class="container-header">&nbsp;</div>
			<div class="container-body">
				<div class="container">
					<span class="qnb"></span>
					<?php if(getDepthId($pagePath, 0) == "index"){ ?>
					<div class="snb">
						
							<form action="" method="post">
    							<div class="account">
    								<storng class="title sr-only">Member Login</storng>
    								<div class="forms">
        								<label><span class="sr-only">ID</span> <input type="text" /></label>
        								<label><span class="sr-only">PW</span> <input type="password" /></label>
    								</div>
    								<span class="find-id-and-pw">
        								<a href="#">아이디</a> / 
        								<a href="#">비밀번호찾기</a> 
    								</span>
    								<input type="submit" class="submit" value="Login" />
    							</div>
							</form>
							<form action="" method="post">
    							<div class="dic-search-bar">
    								<input type="text" />
    								<input type="submit" class="submit" />
    							</div>
							</form>
							<div class="calendar">
								<div class="head"><span class="sr-only">도서관 휴관일</span></div>
								<table>
									<colgroup>
										<col class="sun">
										<col />
										<col />
										<col />
										<col />
										<col />
										<col class="sat"/>
									</colgroup>
									<thead>
										<tr>
											<th colspan="7"><a href="#none" class="prev_btn"><span class="sr-only">전 월</span></a><span class="month">2016년 08월</span><a href="#none" class="next_btn"><span class="sr-only">다음 월</span></a></th>
										</tr>
										<tr>
											<th class="sun">일</th>
											<th>월</th>
											<th>화</th>
											<th>수</th>
											<th>목</th>
											<th>금</th>
											<th class="sat">토</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="sun"></td>
											<td>1</td>
											<td>2</td>
											<td>3</td>
											<td>4</td>
											<td>5</td>
											<td class="holiday sat">6</td>
										</tr>
										<tr>
											<td class="holiday sun">7</td>
											<td>8</td>
											<td>9</td>
											<td>10</td>
											<td>11</td>
											<td>12</td>
											<td class="holiday sat">13</td>
										</tr>
										<tr>
											<td class="holiday sun">14</td>
											<td>15</td>
											<td>16</td>
											<td>17</td>
											<td>18</td>
											<td>19</td>
											<td class="holiday sat">20</td>
										</tr>
										<tr>
											<td class="holiday sun">21</td>
											<td>22</td>
											<td>23</td>
											<td class="today">24</td>
											<td>25</td>
											<td>26</td>
											<td class="holiday sat">27</td>
										</tr>
										<tr>
											<td class="holiday sun">28</td>
											<td>29</td>
											<td>30</td>
											<td>31</td>
											<td></td>
											<td></td>
											<td class="sat"></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="7"><span class="holiday holi_box"></span>휴관일</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>	
							
						<?php }else{ ?>
						<div class="snb sub-page">
							<form action="" method="post">
    							<div class="account">
    								<storng class="title sr-only">Member Login</storng>
    								<div class="forms">
        								<label><span class="sr-only">ID</span> <input type="text" /></label>
        								<label><span class="sr-only">PW</span> <input type="password" /></label>
    								</div>
    								<span class="find-id-and-pw">
        								<a href="#">아이디</a> / 
        								<a href="#">비밀번호찾기</a> 
    								</span>
    								<input type="submit" class="submit" value="Login" />
    							</div>
							</form>
							<form action="" method="post">
    							<div class="dic-search-bar">
    								<input type="text" />
    								<input type="submit" class="submit" />
    							</div>
							</form>
							<div class="sub_introduce">
								<div class="head"><span class="sr-only">도서관 소개</span></div>
								<ul>
									<li><a href="#none">인사말</a></li>
									<li><a href="#none">도서관소개</a></li>
									<li><a href="#none">연혁</a></li>
									<li><a href="#none">찾아오시는 길</a></li>
									<li><a href="#none">시설현황</a></li>
									<li><a href="#none">이용안내</a></li>
									<li><a href="#none">일정관리</a></li>
								</ul>
							</div>
							<div class="quick_link">
								<li class="eq-01"><a href="#none"><span class="sr-only">예약 도서</span></a></li>
								<li class="eq-02"><a href="#none"><span class="sr-only">대출 조회</span></a></li>
								<li class="eq-03"><a href="#none"><span class="sr-only">독후감 쓰기</span></a></li>
							</div>
							
							
					</div>
					<?php } ?>
    				<div id="content">
						<?php if(getDepthId($pagePath, 0) != "index"){ ?>
                			<h2 class="page-title">
            					<div>
            						<?php if(getDepthId($pagePath, 0) == "introduce"){ ?>도서관 소개<?php }
            						else if(getDepthId($pagePath, 0) == "maskingHistory"){ ?>도서검색<?php }
            						else if(getDepthId($pagePath, 0) == "info"){ ?>도서정보<?php }
            						else if(getDepthId($pagePath, 0) == "community"){ ?>이용자 마당<?php }
            						else{ ?>페이지 타이틀<?php } ?>
            					</div>
                			</h2>
                			
                			
						<?php } ?>
<!-- //Header.html -->































