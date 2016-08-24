<!-- Header.html -->
<div id="wrap">
	<div id="header">
		<div class="container">
			<h1 class="site-logo"><a href="/" style="background-image: url(<?php echo $config["imageDir"]; ?>/_temp/logo.png);"><span class="sr-only"><?php echo $config["sitename"]; ?></span></a></h1>
			<div class="lnb">
				<ul>
					<li<?php if(getDepthId($pagePath, 0) == "introduce"){ ?> class="on"<?php } ?>><a href="introduce.php">도서관 소개</a></li>
					<li<?php if(getDepthId($pagePath, 0) == "search"){ ?> class="on"<?php } ?>><a href="search.php">도서검색</a></li>
					<li<?php if(getDepthId($pagePath, 0) == "info"){ ?> class="on"<?php } ?>><a href="info.php">도서정보</a></li>
					<li<?php if(getDepthId($pagePath, 0) == "community"){ ?> class="on"<?php } ?>><a href="community.php">이용자 마당</a></li>
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
					<div class="snb">
						<?php if(getDepthId($pagePath, 0) == "index"){ ?>
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
								<div><span class="sr-only">도서관 휴관일</span></div>
								<table>
									<caption></caption>
									<colgroup>
										<col />
										<col />
										<col />
										<col />
										<col />
										<col />
										<col />
									</colgroup>
									<thead>
										<tr>
											<th colspan="7"><a href="#none" class="prev_btn"><span class="sr-only">전 월</span></a><span class="month">2016년 08월</span><a href="#none" class="next_btn"><span class="sr-only">다음 월</span></a></th>
										</tr>
										<tr>
											<th>일</th>
											<th>월</th>
											<th>화</th>
											<th>수</th>
											<th>목</th>
											<th>금</th>
											<th>토</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td>1</td>
											<td>2</td>
											<td>3</td>
											<td>4</td>
											<td>5</td>
											<td class="holiday">6</td>
										</tr>
										<tr>
											<td class="holiday">7</td>
											<td>8</td>
											<td>9</td>
											<td>10</td>
											<td>11</td>
											<td>12</td>
											<td class="holiday">13</td>
										</tr>
										<tr>
											<td class="holiday">14</td>
											<td>15</td>
											<td>16</td>
											<td>17</td>
											<td>18</td>
											<td>19</td>
											<td class="holiday">20</td>
										</tr>
										<tr>
											<td class="holiday">21</td>
											<td>22</td>
											<td>23</td>
											<td>24</td>
											<td>25</td>
											<td>26</td>
											<td class="holiday">27</td>
										</tr>
										<tr>
											<td class="holiday">28</td>
											<td>29</td>
											<td>30</td>
											<td>31</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="7"><span class="holiday holi_box"></span>휴관일</td>
										</tr>
									</tfoot>
								</table>
							</div>
							
							
						<?php }else{ ?>
							sub
						<?php } ?>
					</div>
    				<div id="content">
						<?php if(getDepthId($pagePath, 0) != "index"){ ?>
                			<h2 class="page-title">
                				<div class="container">
                					<div>
                						<?php if(getDepthId($pagePath, 0) == "introduce"){ ?>도서관 소개<?php }
                						else if(getDepthId($pagePath, 0) == "maskingHistory"){ ?>도서검색<?php }
                						else if(getDepthId($pagePath, 0) == "info"){ ?>도서정보<?php }
                						else if(getDepthId($pagePath, 0) == "community"){ ?>이용자 마당<?php }
                						else{ ?>페이지 타이틀<?php } ?>
                					</div>
                				</div>
                			</h2>
						<?php } ?>
<!-- //Header.html -->













