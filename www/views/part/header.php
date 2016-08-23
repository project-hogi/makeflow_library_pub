<!-- Header.html -->
<div id="wrap">
	<div id="header">
		<div class="container">
			<h1 class="site-logo"><a href="/" style="background-image: url(<?php echo $config["imageDir"]; ?>/_temp/logo.png);"><span class="sr-only"><?php echo $config["sitename"]; ?></span></a></h1>
			<div class="lnb">
				<ul>
					<li<?php if(getDepthId(0) == "introduce"){ ?> class="on"<?php } ?>><a href="introduce.php">도서관 소개</a></li>
					<li<?php if(getDepthId(0) == "search"){ ?> class="on"<?php } ?>><a href="search.php">도서검색</a></li>
					<li<?php if(getDepthId(0) == "info"){ ?> class="on"<?php } ?>><a href="info.php">도서정보</a></li>
					<li<?php if(getDepthId(0) == "community"){ ?> class="on"<?php } ?>><a href="community.php">이용자 마당</a></li>
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
						<?php if(getDepthId(0) == "index"){ ?>
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
						<?php }else{ ?>
							sub
						<?php } ?>
					</div>
    				<div id="content">
						<?php if(getDepthId(0) != "index"){ ?>
                			<h2 class="page-title">
                				<div class="container">
                					<div>
                						<?php if(getDepthId(0) == "introduce"){ ?>도서관 소개<?php }
                						else if(getDepthId(0) == "maskingHistory"){ ?>도서검색<?php }
                						else if(getDepthId(0) == "info"){ ?>도서정보<?php }
                						else if(getDepthId(0) == "community"){ ?>이용자 마당<?php }
                						else{ ?>페이지 타이틀<?php } ?>
                					</div>
                				</div>
                			</h2>
						<?php } ?>
<!-- //Header.html -->
