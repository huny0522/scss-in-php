<?php
$topHeight = 80;
$subBarHeight = 30;
$tnbHeight = 38;
?>
:root{
	--mainColor:#8246e6;
	--mainColorHover:#6f3ed6;
	--mainAlpha:#c8b4f0;
	--subColor:#62b718;
	--subColorHover:#4fae05;
	--red:#d21;
	--redHover:#c10;
	--blue:#25C;
	--lightgray:#ccc;
	--gray:#999;
	--darkgray:#666;
	--black:#333;
	--white:#fff;
	--darkBlack:#000;
	--light:#f8f8f8;
	--lightLine:#ddd;
	--lightLine2:#eee;
	--whiteAlpha9:rgba(255,255,255,0.9);
	--blackAlpha1:rgba(0,0,0,0.1);
	--lightgrayAlpha8:rgba(238,238,238,0.8);
	--yellow:#ffcc00;
}
<?php
// echo CommonData::ViewCSS('/ico');
 ?>
:root{
	--icoHome:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16"><path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/><path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/></svg>');
	--icoX:url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-x-circle" viewBox="0 0 16 16"%3E%3Cpath d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/%3E%3Cpath d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/%3E%3C/svg%3E');
	--icoX2:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/></svg>');
	--icoZoom:url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24"%3E%3Cpath d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 19.585938 21.585938 C 20.137937 22.137937 21.033938 22.137938 21.585938 21.585938 C 22.137938 21.033938 22.137938 20.137938 21.585938 19.585938 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"%3E%3C/path%3E%3C/svg%3E');
	--icoHeartLine:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/></svg>');
	--icoHeart:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/></svg>');
	--icoCheckCircle:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zm3.354 5.646a.5.5 0 0 0-.708-.708L7 9.293 5.354 7.646a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4z"/></svg>');
	--icoArrowUp:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"/></svg>');
	--icoStar:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/></svg>');
	--icoStarFill:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>');
	-icoStarHalf:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16"><path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/></svg>');
}
body{font-family:'Spoqa Han Sans Neo', '맑은 고딕', sans-serif; font-size:14px; color:#333;}

span.sBtn, span.mBtn, span.bBtn{display:inline-block; padding:0 5px; border:1px solid transparent; background:var(--black); color:var(--white); vertical-align:middle; font-size:12px; line-height:14px; border-radius:3px;}
a.sBtn, button.sBtn{background:var(--black); color:var(--white); line-height:18px;}
a.mBtn, button.mBtn, span.mBtn{display:inline-block; height:30px; padding:0 10px; background:var(--black); color:var(--white); font-size:14px; line-height:30px;}
a.bBtn, button.bBtn, span.bBtn{display:inline-block; min-width:200px; height:40px; padding:0 20px; background:var(--black); color:var(--white); font-size:16px; line-height:24px;}

a.sBtn:hover, button.sBtn:hover, a.mBtn:hover, button.mBtn:hover, a.bBtn:hover, button.bBtn:hover{background:var(--darkBlack);}
a.white, button.white, span.white{border:1px solid var(--lightgray); background:var(--white); color:var(--black);}
a.white:hover, button.white:hover{background:var(--light);}
a.main, button.main, span.main{background:var(--mainColor); color:#fff; border-color:var(--mainColor);}
a.main:hover, button.main:hover{background:var(--mainColorHover);}
a.sub, button.sub, span.sub{background:var(--subColor); color:#fff; border-color:var(--subColor);}
a.sub:hover, button.sub:hover{background:var(--subColorHover);}
a.red, button.red, span.red{background:var(--red); color:#fff; border-color:var(--red);}
a.red:hover, button.red:hover{background:var(--redHover);}

.search_word{display:none;}
.won:after{content:'원'; font-size:0.9em; vertical-align:middle; color:var(--gray); margin-left:3px; font-weight:400;}
.t-row{display:table;}
.t-row > *{display:table-cell; vertical-align:middle; padding:0 3px;}
.t-row.fix{table-layout:fixed; width:100%;}
.t-row.fix > .tt{width:100px;}
.f-row{display:flex;}
.f-row > *{padding:0 3px;}
i.unit{color:var(--gray); font-size:0.9em; font-weight:400;}

.ui-datepicker select{height:23px; vertical-align:top;}

.won.strike{color:#999; text-decoration:line-through;}

#wrap{height:100%; min-width:320px;}
#wrapInWrap{min-height:100%; display:flex; flex-direction:column;}
#wrapInWrap > #containerWrap{flex-grow:1; width:100%;}


#header{
	~{position:relative; height:<?php echo $topHeight + $subBarHeight + $tnbHeight; ?>px;}
	#headerInner{position:relative; max-width:1200px; height:<?php echo $topHeight; ?>px; margin:0 auto;}
	#headerInner h1{position:absolute; top:15px; left:0;}
	#logoImg{display:block; background:url('/img/fongabi/fongabi_logo01.png') no-repeat center center; background-size:contain; width:300px; height:40px;}
	.search_box{
		~{position:absolute; top:15px; left:calc(50% - 200px); width:400px; height:40px; background:var(--white); border:1px solid var(--lightLine); border-radius:20px;}
		input[type=text]{position:absolute; top:0; left:0; width:calc(100% - 70px); height:100%; padding:0 20px; border:none; background:none; font-size:15px;}
		button[type=submit]{position:absolute; top:0; right:5px; width:35px; height:100%; }
		button.clear{position:absolute; top:0; right:40px; width:24px; height:100%;}

		#topSearchBtn i{
			mask: var(--icoZoom);
			mask-size: contain; mask-repeat: no-repeat; display: inline-block; width: 24px; height: 24px;background-color:var(--mainColor);
		}
		#searchClearBtn i {
			mask: var(--icoX);
			mask-size: contain; mask-repeat: no-repeat; display: block; width: 16px; height: 16px; margin:0 auto; background-color:var(--gray);}
		#searchClearBtn{display:none;}
		.hasText ~ #searchClearBtn{display:inline-block;}
	}

	#gnb{
		~{position:absolute; top:10px; right:0; font-size:15px; line-height:30px; font-weight:500; color:var(--darkgray);}
		ul{
			~{display:flex;}
			> li{position:relative; padding:0 5px 0 10px;}
			> li + li:before{content:''; position:absolute; top:13px; left:1px; width:3px; height:3px; border-radius:50%; background:var(--lightgray);}
		}
		@media (max-width:1220px){
			~{right:10px;}
		}
		@media (max-width:1020px){
			~{right:10px;}
		}
	}

	#subBarWrap{height:<?php echo $subBarHeight; ?>px; font-size:16px; font-weight:500;}
	#subBar{display:flex; max-width:1200px; height:100%; margin:0 auto;}
	#headModelMenu{
		~{width:60%;}
		ul{
			~{display:flex; height:100%;}
			> li{position:relative; z-index:2; padding-right:10px;}
		}
		ol{
			~{padding:5px; border:1px solid var(--lightgray); max-height:300px; background:var(--white); border-radius:5px; box-shadow:1px 1px 2px rgba(0,0,0,0.1); overflow-y:auto;}
			> li a{display:block; padding:5px 10px; white-space:nowrap;}
			> li a:hover{background:var(--light);}
		}
		button{position:relative; height:30px; padding:0 10px 0 8px;}
		button:before{content:''; position:absolute; top:14px; left:0; display:block; width:5px; height:2px; background:var(--gray);}
		div.modelMenuSubArea{position:absolute; top:calc(100% - 2px); left:0; display:none;}
		@media (max-width:1220px){
			~{padding-left:10px;}
		}
		@media (min-width:1020px){
			ul{
				> li:hover > div.modelMenuSubArea{display:block;}
			}
		}
	}

	#subBarLink{
		~{width:40%;}
		ul{display:flex; justify-content:flex-end; height:100%; line-height:30px;}
		ul > li{padding:0 5px;}
		a{color:var(--darkgray);}
		a.newBtn{color:var(--red);}
		a.popularBtn{color:var(--blue);}
		@media (max-width:1220px){
			~{padding-right:10px;}
		}
	}

	#navWrap{
		~{position:absolute; top:<?php echo $topHeight + $subBarHeight; ?>px; left:0; z-index:1; width:100%; height:38px; background:var(--mainColor); color:#fff; font-size:16px;}
		~.over{color:var(--mainAlpha);}
		#nav{
			~{max-width:1200px; height:100%; margin:0 auto;}
			ul{
				~{display:flex; justify-content:space-between; height:100%;}
				> li{flex-grow:1;}
				> li > a{display:block; padding:0 10px; line-height:38px;}
				> li.over{color:#fff;}
				> li.allNav{width:40px; flex-grow:0; text-align:center;}
			}

			#showAllCategoryBtn{height:100%;}
			#showAllCategoryBtn i{display:block; width:14px; height:12px; border:2px solid #fff; border-width:2px 0;}
			#showAllCategoryBtn i:before{content:''; display:block; margin-top:3px; width:100%; height:2px; background:#fff;}
		}
	}

	#subNavWrap{position:absolute; top:<?php echo $topHeight + $subBarHeight + $tnbHeight; ?>px; left:0; z-index:2; display:none; width:100%; max-height:600px; border-bottom:1px solid #ddd; background:#fff; overflow-y:auto;}
	#navWrap.over ~ #subNavWrap{display:block;}

	#subNav{
		~{ max-width:1200px; margin:0 auto; padding:10px 0; font-size:15px; font-weight:500;}
		h1{padding:5px; background:#eee;}
		ul + h1{margin-top:10px;}
		ul{display:flex; flex-wrap:wrap;}
		ul > li{width:20%;}
		a{display:block; padding:10px 5px 5px; color:#000;}
		a:hover{color:var(--mainColor);}
		ol{padding:5px 0;}
		ol a{padding:5px; font-weight:400;; color:#666;}
		@media (max-width:1220px){
			~{padding:10px;}
		}
	}

	#mSideArea .sideHeader{display:none;}
	#mSideArea #sideGnb{display:none;}
	#mSideArea #mSideBgBtn{display:none;}

	#showSideBtn{position:absolute; top:10px; right:10px; z-index:2; display:none; width:26px; height:26px;}
	#showSideBtn i{display:block; width:20px; height:16px; margin:0 auto; border:2px solid var(--darkgray); border-width:2px 0;}
	#showSideBtn i:before{content:''; display:block; margin-top:5px; width:100%; height:2px; background:var(--darkgray);}

	@media (max-width:1220px){
		#headerInner h1{left:10px;}
	}

	@media(max-width:1020px){
		~{height:unset; padding-bottom:10px; border-bottom:1px solid var(--lightLine2);}

		#headerInner{padding:0 10px; height:unset;}
		#headerInner h1{position:static; height:50px; padding-top:10px; text-align:center;}
		#logoImg{display:inline-block; max-height:30px; max-width:60%;}
		.search_box{position:relative; top:0; left:0; margin:0 auto; max-width:100%;}
		#showSideBtn{display:block;}
		#gnb{display:none;}

		#mSideArea{
			~{position:fixed; top:0; right:0; z-index:10; display:none; width:100%; height:100%;}
			#mSideBgBtn{position:absolute; top:0; right:0; display:block; width:100%; height:100%; background:var(--blackAlpha1);}
			#mSideBgBtn:before{content:''; position:absolute; right:270px; top:10px; width:20px; height:20px; background:var(--gray); border-radius:50%;}
			#mSideBgBtn:after{content:''; position:absolute; right:270px; top:10px; width:20px; height:20px; mask:var(--icoX2) no-repeat center center; mask-size:12px 12px; display:block; background:var(--white);}
			#mSideWrap{position:absolute; top:0; right:0; width:260px; height:100%; margin:0; background:var(--white); overflow-y:auto; box-shadow:0 -2px 4px var(--blackAlpha1);}

			.sideHeader{display:block; margin:10px 10px 0; padding:10px 5px; color:var(--gray); font-size:13px; font-weight:500; font-weight:400;}

			#sideGnb{
				~{display:block;}
				ul{display:flex; background:var(--mainColor); color:#fff;}
				ul > li{flex-grow:1;}
				ul > li + li{border-left:1px solid var(--mainColorHover);}
				ul > li a{display:block; padding:10px 5px; text-align:center;}
			}

			#subBarWrap{height:unset;}
			#subBar{display:flex; flex-direction:column-reverse; max-width:unset; height:unset; margin:0;}
			#headModelMenu{
				~{width:unset; padding:0 10px;}
				.sideHeader{margin:10px 0 0;}
				ul{
					~{display:block; height:unset;}
					> li{padding-left:10px;}
				}
				ol{
					~{border:0; background:var(--light); box-shadow:unset; font-size:13px;}
					> li a{display:block; padding:5px 10px; white-space:nowrap;}
					> li a:hover{background:unset;}
				}
				button{height:24px; padding:0 10px 0 8px; font-size:14px;}
				button:before{top:11px;}
				div.modelMenuSubArea{position:static; top:0; left:0; display:none;}
				div.modelMenuSubArea.active{display:block;}
			}

			#subBarLink{
				~{width:unset; padding:0; font-size:13px;}
				ul{display:flex; justify-content:unset; height:28px; line-height:28px; box-shadow:0 1px 2px var(--blackAlpha1);}
				ul > li{width:33.33%; padding:0;}
				a{display:block; text-align:center;}
			}

			#navWrap{
				~{position:static; width:unset; height:unset; background:none;}
				#nav{
					~{position:static; height:unset; padding:0 10px; background:var(--white); color:var(--black); font-size:15px;}
					ul{
						~{display:block; height:auto;}
						> li.over{color:unset;}
						> li.allNav{display:none;}
						> li > a{line-height:28px;}
						> li + li{border-top:1px solid var(--lightLine2);}
					}
				}
				~.over ~ #subNavWrap{display:none;}
			}

		}
		~.sideOn #mSideArea{display:block;}
	}

	@media(max-width:700px){
		~{padding-bottom:5px;}
		<?php
		if(false){
			// 너무 작아서 취소
			?>
			#headerInner h1{height:40px; padding-top:5px;}
			.search_box{
				~{height:30px; border-radius:15px;}
				input[type=text]{width:calc(100% - 70px); height:100%; padding:0 20px; font-size:14px;}
				button[type=submit]{width:30px; height:100%; }
				button.clear{right:35px; width:24px; height:100%;}

				#topSearchBtn i{width:20px; height:20px;}
				#searchClearBtn i{width:12px; height:12px;}
			}

			#showSideBtn{width:20px; height:20px;}
			#showSideBtn i{width:14px; height:12px;}
			#showSideBtn i:before{margin-top:3px;}
			<?php
		}
		?>
	}
}



#footerMenu{background:var(--darkgray); color:var(--white);}
#footerMenu ul{display:flex; justify-content:center; max-width:1200px; margin:0 auto;}
#footerMenu ul a{display:block; padding:10px 20px; color:var(--white);}
#footer{
	#footerInner{position:relative; max-width:1200px; margin:0 auto; padding:20px 0 20px 350px;}
	#footerLogoImg{position:absolute; top:20px; left:0; display:block; background:url('/img/fongabi/fongabi_logo01.png') no-repeat center center; background-size:contain; width:300px; height:40px; filter:grayscale(1) opacity(0.8);}
	.cInfo{
		ul{display:flex; flex-wrap:wrap; font-size:14px; color:#999;}
		li.t-row{padding:2px; margin-right:20px; table-layout:fixed;}
		.tt{width:50px;}
		.tt2{width:85px;}
		.tt3{width:120px;}
		.tt4{width:140px;}
		.tt:after{content:':'; margin:0 3px;}
		li.line-break{width:100%;}
		li.copyright{width:100%; padding:20px 5px 0;}
	}
}

@media (max-width:1220px){
	#footerLogoImg{left:10px;}
}

@media (max-width:1020px){
	#footer{
		#footerInner{padding-left:0;}
		#footerLogoImg{display:none;}
	}
}

@media (max-width:700px){
	#footerMenu ul{justify-content:unset;}
	#footerMenu li{flex-grow:1;}
	#footerMenu ul a{padding:10px 5px; font-size:12px; text-align:center;}
	#footer{
		#footerInner{padding:10px 0 20px;}
		.cInfo{
			~{padding:0 10px;}
			ul{font-size:12px;}
			li.line-break{display:none;}
			li.t-row{display:block;}
			.tt{display:inline; width:unset; padding:0;}
			.ct{display:inline;}
			.tt2{width:unset;}
			.tt3{width:unset;}
			.tt4{width:unset;}
			li.copyright{padding-top:10px;}
		}
	}
}

// 팝업
#popupWrap{
	~{width:100%; max-width:1200px; margin:0 auto;}
	.popup{position:absolute; top:110px; left:10px; z-index:100; max-width:95%; border:1px solid var(--lightLine); background:var(--white);}
	.popup img{max-width:100%; height:auto;}
	.popupHeader{display:none;}
	.popupFooter{display:flex; background:var(--lightLine);}
	.popupFooter div.left{padding:3px 5px; flex-grow:1;}
	.popupFooter div.right{padding:3px 5px;}
}
#popupCloseAllArea{position:absolute; top:0; z-index:101;}
#popupCloseAllArea button{height:26px; padding:0 10px; border:1px solid var(--gray); font-size:14px; color:var(--black); background:var(--light); border-radius:3px;}
#popupCloseAllArea button + button{margin-left:5px;}
@media (max-width:1020px){
	#popupCloseAllArea button{height:22px; padding:0 5px; font-size:12px;}
}

#containerWrap{display:flex; max-width:1200px; margin:0 auto;}
#leftContainer{width:240px; padding:10px 10px 10px 0;}
#rightContainer{width:100%; padding:0;}
#leftContainer ~ #rightContainer{width:calc(100% - 240px); padding-top:10px;}

#leftContainer #modelList{
	~{padding:10px; border:1px solid #ddd; border-radius:10px; font-size:16px; font-weight:500;}
	h1{padding:10px; font-weight:700;}
	ol{padding:0 0 10px 10px;}
	ol > li a{display:block; padding:8px 0; font-size:14px; color:var(--darkgray);}
	ol > li.active a{color:var(--mainColor);}
}

@media (max-width:1220px){
	#containerWrap{display:block;}
	#leftContainer{padding:0; width:100%;}
	#leftContainer #modelList{display:none;}
	#leftContainer ~ #rightContainer{width:100%; padding:10px;}
}

// 모달
.modal_layer{
	~{position:fixed; top:0; left:0; z-index:100; width:100%; height:100%;}
	.close.bg{position:absolute; top:0; left:0; z-index:100; width:100%; height:100%; background:rgba(0,0,0,0.5);}
	.modal_wrap{
		~{position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); z-index:101; width:400px; max-width:95%; max-height:90%; padding:10px; background:#fff; border-radius:10px; box-shadow:1px 1px 2px rgba(0,0,0,0.1);}
		> header{position:relative; padding:0 0 5px; border-bottom:1px solid #ddd;}
		> header h1{font-size:16px; font-weight:700; text-align:center; line-height:30px;}
		> header button.close{position:absolute; top:0; right:0; width:30px; height:30px; vertical-align:middle;}
		> header button.close i{display:block; width:20px; height:20px; margin:0 auto; mask-image:var(--icoX2); mask-size:contain; mask-repeat:no-repeat; background:var(--gray);}
		> .modal_contents{height:calc(100% - 40px); padding:20px 0; overflow:auto;}
	}
}

/* 페이징 */
.paging{
	~{display:flex; flex-wrap:wrap; justify-content:center; margin:20px 0;}
	a, strong, span{display:block; height:30px; padding:0 10px; margin:1px 5px; border:1px solid #ddd; border-radius:5px; color:#666; line-height:28px; vertical-align:middle;}
	a:hover{background:#f4f4f4;}
	a.active{background:#f4f4f4;}
	span{border:0;}
	strong{font-size:1.1em; font-weight:700; background:var(--mainColor); border-color:var(--mainColor); color:#fff;}
	.prevp, .nextp, .prev, .next, .first, .last{position:relative; width:30px; color:transparent; overflow:hidden;}
	.nextp:before, .next:before, .next:after, .last:before,
	.prevp:before, .prev:before, .prev:after, .first:before{content:''; position:absolute; top:calc(50% - 4px); left:calc(50% - 3px); display:block; width:6px; height:6px; border-left:2px solid #666; border-top:2px solid #666; transform:rotate(-45deg);}
	.nextp:before, .next:before, .next:after, .last:before{transform:rotate(135deg); left:calc(50% - 5px);}
	.last:before, .next:before, .prev:before{margin-left:-3px;}
	.first:before, .next:after, .prev:after{margin-left:3px;}
	.first:after, .last:after{content:''; position:absolute; top:calc(50% - 6px); left:calc(50% - 5px); display:block; width:1px; height:12px; border-left:2px solid #666;}
	.last:after{left:calc(50% + 3px);}
	span:after, span:before{border-color:#ccc !important;}

	@media (max-width:600px){
		a, strong, span{height:26px; padding:0 7px; margin:1px 2px; line-height:24px;}
		.prevp, .nextp{display:none;}
		.prev, .next, .first, .last{width:26px;}
		.next:before, .next:after, .last:before,
		.prev:before, .prev:after, .first:before{top:calc(50% - 3px); width:4px; height:4px;}
		.first:after, .last:after{top:calc(50% - 5px); left:calc(50% - 4px); height:10px;}
		.last:after{left:calc(50% + 2px);}
		.last:before, .next:before, .prev:before{margin-left:-1px;}
	}
}

div.nothing{padding:50px 0; font-size:1.2em; color:var(--gray);}


.eaArea{
	~{position:relative; height:30px; padding-right:15px; display:inline-block;}
	input{width:60px; height:30px; padding:0 5px; text-align:right; font-size:1.2em; border:1px solid var(--lightLine); border-radius:3px 0 0 3px; border-color:var(--gray);}
	button{position:absolute; right:0; width:15px; height:15px; padding:0; background:var(--gray); border:none; border-radius:0 3px 0 0; text-align:center; vertical-align:middle; line-height:13px;}
	button.eaDnBtn{top:15px; border-radius:0 0 3px 0; border-top:1px solid var(--darkgray);}
	button:hover{background:var(--mainColor);}
	button.eaUpBtn i, button.eaDnBtn i{display:inline-block; width:5px; height:5px; border:2px solid var(--white); border-width:2px 0 0 2px; transform:translate(0, 1px) rotate(45deg);}
	button.eaDnBtn i{border-width:0 2px 2px 0; transform:translate(0, -2px) rotate(45deg);}
	~ ~ .eaNumBtn{display:none; padding:0 5px; margin-left:2px; line-height:24px; color:var(--darkgray); background:var(--light); border-radius:3px;}
	~ ~ .eaNumBtn:hover{background:var(--subColor); color:#fff;}
	@media (max-width:600px){
		~.responsive{
			~{height:26px;}
			input{height:26px; padding:0 2px; font-size:13px; width:30px;}
			button{height:13px;}
			button.eaDnBtn{top:13px;}
			button.eaUpBtn i, button.eaDnBtn i{margin-top:-2px;}
		}
	}
}

.tailButtons{text-align:center; padding:30px 0 50px;}

.listTable{
	ol{display:table; width:100%;}
	ol > li{display:table-cell; padding:5px; border-bottom:1px solid var(--light); text-align:center;}
	> header{border-radius:5px; overflow:hidden;}
	> header > ol > li{background:var(--light); border-bottom:0; font-weight:500; color:var(--darkgray);}
	a{color:var(--darkBlack); text-decoration:underline; text-decoration-color:var(--lightgray);}
}

@keyframes fadeIn{from{opacity:0;} to{opacity:1;}}
@keyframes fadeOut{from{opacity:1;} to{opacity:0;}}

.confirm_modal_layer{
	~{position:fixed; top:0; left:0; z-index:100; width:100%; height:100%;}
	> div.bg{position:absolute; top:0; left:0; z-index:100; width:100%; height:100%; background:rgba(0,0,0,0.5);}
	.confirm_modal_wrap{
		~{position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); z-index:101; min-width:300px; max-width:95%; max-height:90%; background:var(--white); border-radius:10px; box-shadow:1px 1px 2px var(--blackAlpha1); overflow:hidden;}
		> header{
			~{position:relative; padding:2px 10px; background:var(--light);}
			h1{line-height:24px;}
			button.close{position:absolute; top:0; right:0; width:30px; height:24px; vertical-align:middle;}
			button.close i{display:block; width:20px; height:20px; margin:0 auto; mask-image:var(--icoX2); mask-size:contain; mask-repeat:no-repeat; background:var(--gray);}
		}
		> .confirm_modal_contents{min-height:30px; padding:5px;}
		> .confirm_modal_contents > p{padding:5px;}
		> footer{padding:10px 5px; text-align:right;}
		> footer button{padding:0 5px;margin:0 5px;}
	}

	~ ~.noBG{position:absolute; width:auto; height:auto;}
	~.noBG > div.bg{display:none;}
	~.noBG .confirm_modal_wrap{border:1px solid var(--lightLine); position:static; transform:unset; opacity:0;animation:fadeIn 0.3s forwards;}

	~.noHD .confirm_modal_wrap > header{display:none;}
	~.noHD .confirm_modal_wrap > .confirm_modal_contents{padding-top:10px;}
	~.fadeOut .confirm_modal_wrap{animation:fadeOut 0.6s forwards;}
}


.scrollList{
	~{position:relative; max-height:300px; padding:1px 0; overflow-y:auto;}
	.upArrow,
	.downArrow{position:absolute; top:0; right:0; z-index:3; width:100%; height:20px; text-align:center; line-height:20px; box-shadow:inset 0 -4px 8px -2px rgba(0,0,0,0.2);}
	.upArrow{box-shadow:inset 0 4px 8px -2px rgba(0,0,0,0.2);}
	.upArrow:before,
	.downArrow:before{content:''; position:absolute; top:50%; left:50%; width:6px; height:6px; border:2px solid var(--gray); border-width:0 2px 2px 0; transform:translate(-50%, -50%) rotate(-135deg);}
	.downArrow:before{transform:translate(-50%, -50%) rotate(45deg);}
}

#goTopBtn{position:fixed; bottom:10px; right:10px; display:block; width:0; height:0; padding:2px 5px 5px; overflow:hidden; transition:opacity 0.5s; font-size:12px;  background:var(--lightgrayAlpha8); border-radius:5px; opacity:0;}
#goTopBtn i{display:block; width:20px; height:20px; margin:0 auto; mask-image:var(--icoArrowUp); mask-size:contain; mask-repeat:no-repeat; background:var(--gray);}
#goTopBtn span{display:block; color:var(--darkgray);}
@media (max-width:1320px){
	#goTopBtn{right:10px;}
	#goTopBtn.goodsView{bottom:50px;}
}
@media (max-width:700px){
	#goTopBtn{padding-bottom:2px;}
	#goTopBtn span{display:none;}
	#goTopBtn.goodsView{bottom:45px;}
}
@media (max-width:600px){
	#goTopBtn.goodsView{bottom:85px;}
}
@media (max-width:500px){
	#goTopBtn.goodsView{bottom:75px;}
}
