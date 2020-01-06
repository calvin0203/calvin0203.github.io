<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
	<title>仁德聖海宮南海天上聖母</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="cybertruck2077 co.">
	<link href="css/a2FjaG93.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Noto+Sans+TC:300,400,900|Noto+Serif+TC:400,900|Saira+Condensed:400,800&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
	<style>
		.navbar-toggler {
			border: none;
			outline: none;
		}

		/* Change the color in the stroke property of the image data */
		.custom-toggler .navbar-toggler-icon {
			background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(145, 40, 0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
		}
	</style>
</head>

<body>

	<div class="container text-justify">
		<div class="row d-flex justify-content-center">
			<div class="col-1"></div>
			<div class="col-10 col-sm-12 title-container" onclick="window.location='index.php';">
				<div class="title-bg-div"><img src="assets/title-bg.svg" class="title-bg" /></div>
				<h1 class="title-text noselect">仁德聖海宮</h1>
			</div>
			<div class="col-1"></div>
		</div>
        <nav class="navbar navbar-expand-md navbar-light bg-light navbar-custom">
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#theNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="theNavbar">
                <ul class="navbar-nav ml-auto mx-auto">
                    <li class="nav-item navline dropdown noselect">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">關於本宮</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="about.php">簡介</a>
                            <a class="dropdown-item" href="service.php">服務</a>
                        </div>
                    </li>
                    <li class="nav-item navline noselect">
                        <a class="nav-link" href="history.php">本宮歷史</a>
                    </li>
                    <li class="nav-item navline dropdown noselect">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">周邊景點</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="places-01.php">虹泰水凝膠世界</a>
                            <a class="dropdown-item" href="places-02.php">台鉅美妝觀光工廠</a>
                            <a class="dropdown-item" href="places-03.php">Ciao bella</a>
                            <a class="dropdown-item" href="places-04.php">古早味草魚湯蝦仁飯</a>
                        </div>
                    </li>
                    <li class="nav-item noselect">
                        <a class="nav-link" href="events.php">最新動態</a>
                    </li>
                </ul>
            </div>
        </nav>

		<!--Carousel Wrapper-->
		<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<!--Indicators-->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
			</ol>
			<!--/.Indicators-->
			<!--Slides-->
			<div class="carousel-inner" role="listbox">
				<!--First slide-->
				<div class="carousel-item active">
					<img class="d-block w-100" src="assets/carousel-1.JPG" alt="First slide">
				</div>
				<!--/First slide-->
				<!--Second slide-->
				<div class="carousel-item">
					<img class="d-block w-100" src="assets/carousel-2.jpg" alt="Second slide">
				</div>
				<!--/Second slide-->
				<!--Third slide-->
				<div class="carousel-item">
					<img class="d-block w-100" src="assets/carousel-3.JPG" alt="Third slide">
				</div>
				<!--/Third slide-->
				<!--Forth slide-->
				<div class="carousel-item">
					<img class="d-block w-100" src="assets/carousel-4.JPG" alt="Forth slide">
				</div>
				<!--/Third slide-->
			</div>
			<!--/.Slides-->
			<!--Controls-->
			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!--/.Controls-->
		</div>
		<!--/.Carousel Wrapper-->
		<div class="row mt-3 mb-5">
			<div class="col-md-7 index-p">
				<h1 class="index-p-title">仁德聖海宮</h1>
				<h6 class="index-p-title mt-n1">南海天上聖母（媽祖）</h6>
				<p>
					這間廟宇，建設了三十年才有現在的模樣。<br />
					從無到有，這些年來我們不求速度，只求品質。<br />
					這些過程裡有好多人無私的付出、無私的大愛。<br />
					今天能有如此成果，全感謝你我。<br />
				</p><br /><br />
				<h5 class="index-p-title">聖海宮媽祖與一般媽祖有何不同呢？</h5>
				<p>媽祖原溯於與湄州<br />
					聖海宮媽祖示：<br />
					祂於南海紫竹林，跟隨觀世音菩薩修行。<br /></p>
				<h6 class="index-p-title">所以聖海宮的媽祖為佛道雙修！</h6>
				<div class="rwd-trigger-line">
					<hr>
				</div>
			</div>
			<div class="col-md-5 index-p">
				<div class="mr-1 pr-3 pl-3 pt-3 pb-3 bg-darktheme-md">
					<h1 class="text-center"> 我們的位置 </h1>
					<p class>地址 | 台南市仁德區大發路442號<br />
						連絡電話 | 06-272-3049<br />
						開放時間 | 欲參拜聖母，請向左三十步電箱按鈴</p>
					<div class="google-maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.9095256971177!2d120.24966895152546!3d22.99035422322459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e714ab18b9455%3A0x4a298a5cf2fe387a!2z5LuB5b636IGW5rW35a6u!5e0!3m2!1szh-TW!2stw!4v1578152782956!5m2!1szh-TW!2stw" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="container-fluid page-footer">
		<div class="container-fluid text-center text-md-left">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2 footer-image">
					<img class="d-inline-block" src="assets/footer.jpg">
				</div>
				<div class="col-md-6 contact-footer">
					<h2 class="contact-footer-title">仁德聖海宮－南海天上聖母</h2>
					<h2 class="contact-footer-text">電話 | 06-272-3049</h2>
					<h2 class="contact-footer-text">地址 | 台南市仁德區大發路442號</h2>
					<h2 class="contact-footer-text">開放時間 | 欲參拜聖母，請向左三十步電箱按鈴</h2>
					<a href="https://goo.gl/maps/2DsgxhP2vcEdCnKu9" target="_blank"><i class="fas fa-map-marked-alt"></i></a>&nbsp;
					<a href="https://www.facebook.com/%E4%BB%81%E5%BE%B7%E8%81%96%E6%B5%B7%E5%AE%AE%E5%8D%97%E6%B5%B7%E5%A4%A9%E4%B8%8A%E8%81%96%E6%AF%8D-167347986799885/" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></a>&nbsp;
					<script type="text/javascript" language="javascript">
						<!--
						// Email obfuscator script 2.1 by Tim Williams, University of Arizona
						// Random encryption key feature coded by Andrew Moulden
						// This code is freeware provided these four comment lines remain intact
						// A wizard to generate this code is at http://www.jottings.com/obfuscator/
						{
							coded = "QOxvxxxbYR@W.3Ql.m5l.oE"
							key = "O8BQPRqZf5yIc9plSe0G7k4jNJtTHwAaU2VgbKz1mxsv3YXMdonDELuFiCWhr6"
							shift = coded.length
							link = ""
							for (i = 0; i < coded.length; i++) {
								if (key.indexOf(coded.charAt(i)) == -1) {
									ltr = coded.charAt(i)
									link += (ltr)
								} else {
									ltr = (key.indexOf(coded.charAt(i)) - shift + key.length) % key.length
									link += (key.charAt(ltr))
								}
							}
							document.write("<a href='mailto:" + link + "'>" + "<i class='fas fa-envelope-square fa-lg'></i>" + "</a>")
						}
						//
						-->
					</script><noscript>抱歉，但你需要啟用javascript才能聯繫我</noscript>
				</div>
				<div class="col-md-3">
					<span class="bottom-align-text">
						<a class="footer-right-link" href="team.php" target="_blank"> @team cybertruck2077 </a>
						<br />
						<p class="footer-right-text">RENDE SHENHAI TEMPLE</p>
					</span>
				</div>
			</div>
	</footer>

</body>

</html>