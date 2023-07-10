<?php
require_once 'connection.php';
$_SESSION['page'] = "index";

// $del=$con->query("delete from cart where userid='$_SESSION[userid]'");
// $row=mysqli_fetch_array($del);

?>
<!DOCTYPE html>
<html lang="zxx">

<?php require_once 'head.php'; ?>
<?php require_once 'header.php'; ?>

<body>

	<div class="preloader bg-main">
		<div class="preloader-wrapper">
			<div class="preloader-grid">
				<div class="preloader-grid-item preloader-grid-item-1"></div>
				<div class="preloader-grid-item preloader-grid-item-2"></div>
				<div class="preloader-grid-item preloader-grid-item-3"></div>
				<div class="preloader-grid-item preloader-grid-item-4"></div>
				<div class="preloader-grid-item preloader-grid-item-5"></div>
				<div class="preloader-grid-item preloader-grid-item-6"></div>
				<div class="preloader-grid-item preloader-grid-item-7"></div>
				<div class="preloader-grid-item preloader-grid-item-8"></div>
				<div class="preloader-grid-item preloader-grid-item-9"></div>
			</div>
		</div>
	</div>


	<div class="header-bg">
		<div class="container">
			<div class="rev_slider_wrapper">

				<div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">

					<ul>

						<li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">

							<div class="tp-caption LandingPage-Title tp-resizeme" id="slide-1-layer-1" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['170','50','70','45']" data-fontsize="['60','60','45','35']" data-lineheight="['85','85','55','40']" data-letterspacing="4" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','center','center','center']" data-fontweight="400" style="z-index: 5; white-space: nowrap;">The Best Place To <br> Satisfy Your Tummy</div>

							<div class="tp-caption LandingPage-SubTitle   tp-resizeme" id="slide-1-layer-2" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['355','240','215','140']" data-fontsize="['25','25','17','17']" data-lineheight="['30','30','25','25']" data-width="['450','450','450','450']" data-fontweight="500" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','center','center']" style="z-index: 7;white-space: normal;font-style:normal;">Gujrati Thali
							</div>

							<div class="tp-caption LandingPage-SubTitle tp-resizeme" id="slide-1-layer-3" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['415','300','270','185']" data-fontsize="['20','20','17','17']" data-lineheight="['30','30','25','25']" data-width="['380','380','380','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','center','center','center']" style="z-index: 7;white-space: normal;font-style:normal; display: flex;align-items: center; max-width: 300px;">
								<a href="allitems.php" class="btn">Order Now <i class="flaticon-shopping-cart-black-shape"></i>
								</a>
								<!-- <p class="header-product-price color-white">$10.99 <del>$18.99</del></p> -->
							</div>

							<div class="tp-caption tp-resizeme" id="slide-1-layer-4" data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['87','380','370','270']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/thali1.png" alt="" data-ww="['550px','550px','550px','550px']" data-hh="['520px','520px','520px','520px']" width="650" height="615" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-1-layer-5" data-x="['left','left','left','left']" data-y="['top','top','top','top']" data-voffset="['30','30','30','30']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-1-layer-6" data-x="['center','center','center','center']" data-y="['top','top','top','top']" data-voffset="['50','-10','10','-20']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-2.png" alt="" data-ww="['90px','90px','90px','90px']" data-hh="['81px','81px','81px','81px']" width="90" height="81" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-1-layer-7" data-x="['right','right','right','right']" data-y="['top','top','top','top']" data-voffset="['-45','-45','-45','-75']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-1-layer-8" data-x="['right','right','right','right']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-1-layer-9" data-x="['center','center','center','center']" data-y="['center','center','center','center']" data-voffset="['150','150','150','150']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-1-layer-10" data-x="['left','left','left','left']" data-y="['bottom','bottom','bottom','bottom']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-1-layer-11" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-4.png" alt="" data-ww="['318px','318px','318px','318px']" data-hh="['209px','209px','209px','209px']" width="318" height="209" data-no-retina> </div>
						</li>

						<li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">

							<div class="tp-caption LandingPage-Title tp-resizeme" id="slide-2-layer-1" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['170','50','70','45']" data-fontsize="['60','60','45','35']" data-lineheight="['85','85','55','40']" data-letterspacing="4" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','center','center','center']" data-fontweight="400" style="z-index: 5; white-space: nowrap;">We Ensure That You <br> Will Be Satisfied</div>

							<div class="tp-caption LandingPage-SubTitle   tp-resizeme" id="slide-2-layer-2" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['355','240','215','140']" data-fontsize="['25','25','17','17']" data-lineheight="['30','30','25','25']" data-width="['450','450','450','450']" data-fontweight="500" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','center','center']" style="z-index: 7;white-space: normal;font-style:normal;">Panjabi Dish
							</div>

							<div class="tp-caption LandingPage-SubTitle tp-resizeme" id="slide-2-layer-3" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['415','300','270','185']" data-fontsize="['20','20','17','17']" data-lineheight="['30','30','25','25']" data-width="['380','380','380','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','center','center','center']" style="z-index: 7;white-space: normal;font-style:normal; display: flex;align-items: center; max-width: 300px;">
								<a href="allitems.php" class="btn">Order Now <i class="flaticon-shopping-cart-black-shape"></i>
								</a>
								<!-- <p class="header-product-price color-white">$9.99 <del>$15.99</del></p> -->
							</div>

							<div class="tp-caption tp-resizeme" id="slide-2-layer-4" data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['87','380','370','270']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/thali2.png" alt="" data-ww="['550px','550px','550px','550px']" data-hh="['520px','520px','520px','520px']" width="650" height="615" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-2-layer-5" data-x="['left','left','left','left']" data-y="['top','top','top','top']" data-voffset="['30','30','30','30']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-2-layer-6" data-x="['center','center','center','center']" data-y="['top','top','top','top']" data-voffset="['50','-10','10','-20']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-2.png" alt="" data-ww="['90px','90px','90px','90px']" data-hh="['81px','81px','81px','81px']" width="90" height="81" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-2-layer-7" data-x="['right','right','right','right']" data-y="['top','top','top','top']" data-voffset="['-45','-45','-45','-75']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-2-layer-8" data-x="['right','right','right','right']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-2-layer-9" data-x="['center','center','center','center']" data-y="['center','center','center','center']" data-voffset="['150','150','150','150']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-2-layer-10" data-x="['left','left','left','left']" data-y="['bottom','bottom','bottom','bottom']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-2-layer-11" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-4.png" alt="" data-ww="['318px','318px','318px','318px']" data-hh="['209px','209px','209px','209px']" width="318" height="209" data-no-retina> </div>
						</li>

						<li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">

							<div class="tp-caption LandingPage-Title tp-resizeme" id="slide-3-layer-1" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['170','50','70','45']" data-fontsize="['60','60','45','35']" data-lineheight="['85','85','55','40']" data-letterspacing="4" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','center','center','center']" data-fontweight="400" style="z-index: 5; white-space: nowrap;">Best Combo Offer <br> For Your Satisfiction</div>

							<div class="tp-caption LandingPage-SubTitle   tp-resizeme" id="slide-3-layer-2" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['355','240','215','140']" data-fontsize="['25','25','17','17']" data-lineheight="['30','30','25','25']" data-width="['450','450','450','450']" data-fontweight="500" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','center','center']" style="z-index: 7;white-space: normal;font-style:normal;">South Indian Dish
							</div>

							<div class="tp-caption LandingPage-SubTitle tp-resizeme" id="slide-3-layer-3" data-x="['left','center','center','center']" data-hoffset="none" data-y="['top','top','top','top']" data-voffset="['415','300','270','185']" data-fontsize="['20','20','17','17']" data-lineheight="['30','30','25','25']" data-width="['380','380','380','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','center','center','center']" style="z-index: 7;white-space: normal;font-style:normal; display: flex;align-items: center; max-width: 300px;">
								<a href="allitems.php" class="btn">Order Now <i class="flaticon-shopping-cart-black-shape"></i>
								</a>
								<!-- <p class="header-product-price color-white">$20.99 <del>$28.99</del></p> -->
							</div>

							<div class="tp-caption tp-resizeme" id="slide-3-layer-4" data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['87','380','370','270']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/thali3.png" alt="" data-ww="['550px','550px','550px','550px']" data-hh="['520px','520px','520px','520px']" width="650" height="615" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-3-layer-5" data-x="['left','left','left','left']" data-y="['top','top','top','top']" data-voffset="['30','30','30','30']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-3-layer-6" data-x="['center','center','center','center']" data-y="['top','top','top','top']" data-voffset="['50','-10','10','-20']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-2.png" alt="" data-ww="['90px','90px','90px','90px']" data-hh="['81px','81px','81px','81px']" width="90" height="81" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-3-layer-7" data-x="['right','right','right','right']" data-y="['top','top','top','top']" data-voffset="['-45','-45','-45','-75']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-3-layer-8" data-x="['right','right','right','right']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-3-layer-9" data-x="['center','center','center','center']" data-y="['center','center','center','center']" data-voffset="['150','150','150','150']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-3-layer-10" data-x="['left','left','left','left']" data-y="['bottom','bottom','bottom','bottom']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>

							<div class="tp-caption tp-resizeme" id="slide-3-layer-11" data-x="['right','right','right','right']" data-y="['bottom','bottom','bottom','bottom']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 8;border-width:0px;"><img src="assets/images/header-shape-4.png" alt="" data-ww="['318px','318px','318px','318px']" data-hh="['209px','209px','209px','209px']" width="318" height="209" data-no-retina> </div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>



	<section class="welcome-section bg-overlay-1 pt-100 pb-70 bg-black">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-5 col-lg-5 pb-30">
					<div class="section-title section-title-left text-center text-md-start m-0">
                        <small>Welcome To Hungers</small>
                        <h2 class="color-white">We Serve The Best Food Of The Country</h2>
                        <p>We are the country's no.1 Fast food retailer with 15+ years of reputation. Country's best dish are delivered by us. We gain the satisfaction of our customers with our delicate service and extreme high food quality.</p>
						<a href="about-us.php" class="btn">
							More About Us
							<i class="flaticon-right-arrow-sketch-1"></i>
						</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-7 col-lg-7">
					<div class="about-image-grid">
						<div class="about-image-grid-item">
							<div class="about-image-grid-inner mb-30">
								<img src="assets/images/welcome-image-1.jpg" alt="welcome">
							</div>
							<div class="about-image-grid-inner mb-30">
								<img src="assets/images/welcome-image-2.jpg" alt="welcome">
							</div>
						</div>
						<div class="about-image-grid-item">
							<div class="about-image-grid-inner fluid-height">
								<img src="assets/images/welcome-image-3.jpg" alt="welcome">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="step-section p-tb-100 bg-black">
		<div class="container">
			<div class="section-title">
				<h2 class="color-white">3 Easy Steps To Enjoy</h2>
			</div>
			<div class="steps-box">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="steps-item">
							<h3>1. Choose</h3>
							<p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="steps-item">
							<h3>2. Pay</h3>
							<p>Pay Through Online Easily. We Use The Most Safe way In Payment.</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
						<div class="steps-item">
							<h3>3. Enjoy</h3>
							<p>Enjoy Your Meal From The Core Of Heart & Feel The Taste Inside.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>





	<section class="combo-section bg-black pt-100 pb-70">
		<div class="container">
			<div class="section-title">
				<small>Combos</small>
				<h2 class="color-white">Our Best items</h2>
			</div>
			<div class="row">
				<?php
				$in = $con->query("select c.*,i.* from category c,item i where c.categoryid=i.categoryid order by i.categoryid desc limit 0,4");
				while ($r = mysqli_fetch_array($in)) {
				?>
					<div class="col-sm-6 col-md-3 ol-lg-3 pb-30 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="combo-box">


							<div class="bokha">
								<div class=""><img style="border-radius:5px;" src="<?php echo $r[6]; ?>"></div>
							</div>
							<div class="combo-box-content">

								<h4 class="mb-0"><?php echo $r[5]; ?></h4>
								<h3 class="mb-3" style="font-size: 26px;"><?php echo $r[1]; ?></h3>

								<div class="authentication-btn containe-fulid p-0">
									<div class="row ">
										<div class="col-md-6 m-0"><a href="itemdetails.php?id=<?php echo $r[4];?>"> <button class="btnl w-100">More</button></a></div>
										<div class="col-md-6 m-0"> <button onclick="product('product',<?php echo $r[4]; ?>);" data-toggle="modal" data-target="#jaydip" class="btnl">Quick </button></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				<?php
				}
				?>

			</div>
		</div>
		<div class="text-center wow animate__slideInUp">
			<a href="allitems.php" class="btn">View All Items <i class="flaticon-right-arrow-2"></i></a>
		</div>
	</section>



	<section class="testimonial-section p-tb-100 bg-black bg-overlay-1">
        <div class="container">
            <div class="section-title">
                <small>Review</small>
                <h2 class="color-white">Clients Review About Our Food</h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">Awesome food , best service and beautiful place!! One of the best Indian restaurant in town!! Go for it!!</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/userprofile/arzoo02U55.jpeg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <!-- <li class="full-star"><i class="flaticon-star-1"></i></li> -->
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Arzoo mavani</h3>
                                <h4 class="carousel-designation"></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para"> Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. </p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/userprofile/tarang02Y69.jpeg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Mulani tarang</h3>
                                <h4 class="carousel-designation"></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para"> Visited this restaurant with family and friends.Quick service with tasty food at a reasonable price.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/userprofile/renil02E86.jpeg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Godhani renil</h3>
                                <h4 class="carousel-designation"></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The service is very good quality is always nice.I am also very impressed by the food delivery by Hungers.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/userprofile/dhruvisha02I24.jpeg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Dhrvisha belediya</h3>
                                <h4 class="carousel-designation"></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">We had such delicious dishes every time we went here. Fantastic thalis, very good lassis and much more.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/userprofile/jaydip02K31.jpeg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Jaydip Bokha</h3>
                                <h4 class="carousel-designation"></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">Visited this restaurant with family and friends.Quick service with tasty food at a reasonable price.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/userprofile/bansi02B84.jpeg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Bansi Davra</h3>
                                <h4 class="carousel-designation"></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of  used in the food. I really Love Fafo.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/userprofile/dhvani02H67.jpeg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Dhvani Savaliya</h3>
                                <h4 class="carousel-designation"></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-carousel-item bg-main">
                        <p class="carousel-para">The service is very quality is always nice.I am also very much impressed by the food delivery by Hungers.</p>
                        <div class="carousel-info-grid">
                            <div class="carousel-thumb">
                                <img src="assets/images/userprofile/pratik02O90.jpeg" alt="client">
                            </div>
                            <div class="carousel-info text-end">
                                <div class="review-star">
                                    <ul class="justify-content-end">
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                </div>
                                <h3 class="carousel-name">Pratik Dobariya</h3>
                                <h4 class="carousel-designation"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<div class="video-section p-tb-100">
		<div class="container">

		</div>
	</div>


	<section class="blog-section p-tb-100 bg-overlay-2">
		<div class="container">
			<div class="section-title">
				<small></small>
				<h2 class="color-white"> Our Latest Fixthali</h2>
			</div>
			<div class="row">
				<?php
				$in = $con->query("select * from fixthali order by fixthaliid desc limit 0,3");
				while ($row = mysqli_fetch_array($in))
				{
				?>
					<div class="col-sm-6 col-md-4 col-lg-4 pb-30 ">
						<div class="blog-card blog-card-maincolor combo-boxthali">
							<div class="blog-card-thumb">
								<a href="allfixthali.php">
									<div class=""><img style="border-radius:5px;" src="<?php echo $row[2]; ?>"></div>
								</a>
							</div>
							<div class="blog-card-content">
								<h3 class="mt-2"><a href="allfixthali.php"><?php echo $row[1];?></a></h3>
							</div>
							<div class="authentication-btn containe-fulid p-0">
								<div class="row ">
									<div class="col-md-4 m-0"><a href="thali-details.php?id=<?php echo $row[0]; ?>"> <button class="btnl w-100">More</button></a></div>
									<div class="col-md-8 m-0"> <button onclick="thali('thali','<?php echo $row[0]; ?>');" data-toggle="modal" data-target="#thali" class="btnl">Quick </button></div>
								</div>
							</div>
							<div class="combo-offer-shape">
                            <div class="combo-shape-inner">
                                <small>Only At</small>
                                <p><?php echo "₹".$row[3]; ?></p>
                            </div>
                        </div>
						</div>
					</div>
				<?php
				}
				?>
			</div>

			<div class="text-center">
				<a href="allfixthali.php" class="btn">View All Fixthali<i class="flaticon-right-arrow-2"></i></a>
			</div>
		</div>
	</section>


	<section class="subscribe-section mural-bg pt-100 pb-70 bg-main">
		<div class="container">
			<div class="subscribe-grid">
				<div class="subscribe-item">
					<div class="section-title text-center text-lg-start m-0">
						<h2 class="color-white">Subscribe Our Newsletter</h2>
						<p>Don't miss any upcoming event & Get your coupon via email.</p>
					</div>
				</div>
				<div class="subscribe-item">
					<div class="subscribe-form">
						<form class="newsletter-form newsletter-form-white" data-bs-toggle="validator">
							<div class="form-group">
								<div class="input-group">
									<input type="email" id="emails" class="form-control" placeholder="Enter Email Address*" name="EMAIL" required autocomplete="off">
								</div>
								<button class="btn btn-yellow" type="submit">Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
							</div>
							<div id="validator-newsletter" class="form-result color-white"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php require_once 'footer.php'; ?>


	<div class="cart-modal-wrapper">
		<div class="cart-modal modal-item">
			<div class="cart-modal-header">
				<h3 class="color-white">Cart 2</h3>
				<div class="cart-modal-close">
					<i class="flaticon-cancel"></i>
				</div>
			</div>
			<div class="cart-modal-body">
				<h2 class="color-white">My Order</h2>
				<div class="cart-modal-product">
					<div class="cart-modal-thumb">
						<a href="shop-details.html">
							<img src="assets/images/product-1.png" alt="product">
						</a>
					</div>
					<div class="cart-modal-content">
						<h4><a href="shop-details.html">Crispy Chicken Burger</a></h4>
						<div class="cart-modal-action">
							<div class="cart-modal-action-item">
								<div class="cart-modal-quantity">
									<p>1</p>
									<p>x</p>
									<p class="cart-quantity-price">$ 4.50</p>
								</div>
							</div>
							<div class="cart-modal-action-item">
								<div class="cart-modal-delete">
									<a href="#"><i class="icofont-ui-delete"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-modal-product">
					<div class="cart-modal-thumb">
						<a href="shop-details.html">
							<img src="assets/images/product-2.png" alt="product">
						</a>
					</div>
					<div class="cart-modal-content">
						<h4><a href="shop-details.html">Red Sause Pizza</a></h4>
						<div class="cart-modal-action">
							<div class="cart-modal-action-item">
								<div class="cart-modal-quantity">
									<p>1</p>
									<p>x</p>
									<p class="cart-quantity-price">$ 3.50</p>
								</div>
							</div>
							<div class="cart-modal-action-item">
								<div class="cart-modal-delete">
									<a href="#"><i class="icofont-ui-delete"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-modal-total">
					<p>Total</p>
					<h3>$8.0</h3>
				</div>
				<div class="cart-modal-button">

					<a href="payment.php" class="btn full-width">Proceed To Checkout</a>
					<a href="cart.html" class="btn btn-yellow full-width">View Shopping Cart</a>
				</div>


			</div>
		</div>
	</div>


	<div class="scroll-top" id="scrolltop">
		<div class="scroll-top-inner">
			<span><i class="flaticon-up-arrow"></i></span>
		</div>
	</div>

	<!-- model start -->
	<div class="modal fade" id="jaydip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" id="missmodel">

			</div>
		</div>
	</div>
	<!-- end model -->
	<!-- model thali start -->
	<div class="modal fade" id="thali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" id="missthali">

			</div>
		</div>
	</div>
	<!-- end thali model -->

	<?php require_once 'script.php'; ?>
</body>

</html>
