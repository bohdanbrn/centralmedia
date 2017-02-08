<!DOCTYPE html>
<html>
<head>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
    
    <style>
    /*Iphone 5*/
    @media (device-height: 568px) and (-webkit-min-device-pixel-ratio: 2) {

    }
@media only screen and (min-width: 601px){
.row .col.m4 {
    width: 33.3333333333% !important;
    margin-left: auto;
    left: auto;
    right: auto;
}
}
    /*tablet*/
    @media screen and (min-width: 768px) and (max-width: 1024px) {
      .slick-slide, .slider-element img, .slider-bloger-name-main, .slider-bloger-name,.slider-bloger-thema, .blog-element-tag, .slider-bloger-thema-main
{

  transform: skewX(0deg);
}
.title-tag-all-video {
margin: 5px;
    position: absolute;
    bottom: 200px;
    font-size: 25px;
    color: white;
    padding: 2px;
    left: 15px;
    text-align: left;
    background-color: rgba(255, 0, 0, 0.8);
  
}
.main-news-content-box{
  height: 530px;
}
.title-tag{
  font-size: 17px;
  margin-left: -5px;
}
.footer-logo {
    width: 25%;
    margin-top: 10px;
    margin-left: 0px;
    float: left; 
    padding-right: 0px;
}
.footer-menu {
    text-align: center;
    margin-left: 0px;
    margin-top: 33px;
    font-size: 20px;
}
.social-menu-footer {
    text-align: center;
    padding-top: 15px;
    margin-left: 0px; 
}
.social-text-footer {
    margin-top: 10px;
    margin-left: 0px; 
    color: white;
    padding-bottom: 20px;
    text-align: center;

}
.madeby {
    position: absolute;
    font-size: 18px;
    color: white;
    bottom: 0px;
    padding-top: 0px;
    left: 33%;
    text-align: center;
}
.footer-about {
    padding-top: 0px;
    color: white;
    text-align: justify;
}
.main-article-content-box {
    position: absolute;
    padding-left: 10px;
    padding-right: 10px;
    bottom: 10px;
}
.box-title {
    font-size: 18px;
}
.box-title-small {
    padding-bottom: 10px;
    color: white;
    font-size: 11px;
}
.logo-text{
  position: relative;
  display: inline-block;
  top: -24px;
  left: 0px;
  font-size: 25px;
  text-transform: uppercase;
}
.social-menu-top {
    top: 15px;
    right: %;
    z-index: 999;
    position: absolute;
} 

.menu-list {
    float: right;
    display: inline-block;
    padding: 10px 10px 10px 20px;
    margin-right: 0px; 
}

    }
    /* mobile */
    @media screen and (max-width: 668px) {

.slick-slide, .slider-element img, .slider-bloger-name-main, .slider-bloger-name,.slider-bloger-thema, .blog-element-tag, .slider-bloger-thema-main
{

  transform: skewX(0deg);
}
.one-video-post-name {
    font-size: 34px;
    font-weight: bold;
}
.previous-blog-time-all-blogs{
    width: 100px;
}
.top-five-video-width{
    width: 100% !important;
  }
  .all-blog-content-title {
    position: relative;
    top: -40px;
    left: -33px;
}

.fix-mob-article{
  margin-left: 0px !important;
}
.box-title-time{
    margin-left: 10px;
  }
.box-title-small{
  margin-left: 10px;
}
.social-menu-top-header-one {
    top: -100px;
    right: 1px;
    z-index: 999;
    position: relative;
}
.social-header-one {
    position: absolute;
    top: 35px;
    float: right;
    width: 100%;
}
.slider-bloger-name {
    text-align: center;
    margin-right: 1%;
    margin-left: 1%;
    font-size: 10px;
    
}
.slider-bloger-thema-main {
    margin-top: 5.5px;
    margin-left: 1%;
    margin-right: 1%;
    font-size: 12px;
}
.slider-bloger-name-main {
    margin-top: 3px;
    text-align: center;
    margin-right: 1%;
    margin-left: 2%;
    font-size: 10px;
}
.slider-bloger-thema {
    margin-top: 8px;
    margin-left: 1%;
    margin-right: 1%;
    color: #9E9E9E;
    font-weight: bold;
    font-size: 12px;
}
.blog-element-tag {
   
    position: absolute;
    background-color: #9E9E9E;
    padding: 0px;
    width: 40px;
    font-size: 10px;
    right: 0px;
    top: 1px;
    z-index: 99;
    color: white;
}
.small-sign-line {
    
    padding-left: 10px;
    padding-right: 10px;
}
.main-article-block {
       margin-left: 0px;
   }
 .full-width-mob{
  padding: 0 !important;
 }
 .second-article-block {
   margin-top: 10px;
    margin-left: 0px;
    
}
.second-block-with-line {
    padding-right: 0px;
    padding-top: 0px;
    width: 100%;
    display: flex;
    position: relative;
    align-items: center;
}
.big-sign-line {
    font-size: 25px;
    padding-right: 5px;
    padding-left: 5px; 
}
.news-main-title {

    font-size: 16px;
    display: inline-block;
}
.previous-blog-box {
    position: relative;
    margin-bottom: 5px;
    padding: 20px;
    border: 2px solid lightgrey;
}
.previous-blog-img-width {
    width: 81px;
}
.previous-blog-name {
    position: relative;
    top: -41px;
    font-size: 19px;
    font-weight: bold;
    left: 11px;
    display: inline-block;
}
.previous-blog-time {
    position: relative;
    width: 75px;
    right: -96px;
    top: -40px;
    left: auto;
}
.previous-blog-title {
    position: relative;
    top: -10px;
    font-size: 18px;
    font-weight: bold;
    padding-bottom: 5px;
}
.third-block-with-line {
    padding-right: 0px;
    padding-top: 0px;
    width: 100%;
    display: flex;
    position: relative;
    align-items: center;
}
.four-block-with-line {
    padding-left: 20px;
    padding-right: 0px;
    padding-top: 0px;
    width: 100%;
    display: flex;
    position: relative;
    align-items: center;
}
.third-article-block {
   
    margin-top: 10px;
    margin-left: 0px;
 
}
.five-block-with-line {
    margin-top: 0px;
    width: 100%;
    display: flex;
    position: relative;
    align-items: center;
}
.main-news-content-box {
    height: 350px;
    margin-top: 10px;
    overflow: hidden;
    overflow-y: scroll;
}
.footer-logo {
    width: 50%;
    margin-top: 10px;
    margin-left: 0px;
    float: inherit; 
    padding-right: 0px;
}
.footer-menu {
    text-align: center;
    margin-left: 0px;
    margin-top: 33px;
    font-size: 20px;
}
.social-menu-footer {
    text-align: center;
    padding-top: 15px;
    margin-left: 0px; 
}
.social-text-footer {
    margin-top: 10px;
    margin-left: 0px; 
    color: white;
    padding-bottom: 20px;
    text-align: justify;
}
.madeby {
    position: absolute;
    font-size: 18px;
    color: white;
    bottom: 0px;
    padding-top: 0px;
    
    text-align: center;
}
.footer-about {
    padding-top: 0px;
    color: white;
    text-align: justify;
}

      .box-title {
        margin-left: 10px;
    padding-bottom: 10px;
    font-size: 20px;
    color: white;
}

.social-menu-top{
  margin-top: 5px;
}



      .content-box {
    padding-left: 10px;
    top: 19%;
    width: 100%;
}
      .content-box-all-video {
    position: relative;
    padding-left: 10px;
    bottom: 130px;
    width: 100%;
}

      .video-container{
        margin-top: 30px;
      }

      .right-block-video{
        max-width: 100%;    
      }
      .right-block-second{
        max-width: 100%;  
        max-height: 180px;  
      }
      .social-menu-bottom {
    bottom: 8%;
    position: absolute;
    right: 5%;
    z-index: 55;
}
      .social-menu-bottom-all-video {
    bottom: 20px;
    position: absolute;
    right: 5%;
    z-index: 55;
}

.header-logo {
    width: 70px;
}

.second-slider-box-title {
    font-size: 50px;
}

.second-slider-box-title-small{
    font-size: 40px;
}

.second-slider-content{
  bottom: -20%;
}
.sign-line-korespond{
  font-size: 15px;
}

.button-share{
  font-size: 17px;
}
.previous-blog-name-all-blogs{
    font-size: 20px;
}
    } 
  </style>

</head>
<body>

    <nav id="header-second">
    <div class="social-menu-top-second-header">
  <div class="menu-list"><a href="#" data-activates="slide-out" class="button-collapse"><img class="social-logo-head" src="<?php bloginfo('template_url') ?>/img/menu-head.svg" alt="Логотип"></a></div>
                <div class="menu-list"><a href="#modal1"   > <img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/man.svg" alt="Логотип"></a></div>
                <div class="menu-list"><a href="#modal2"><img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/search.svg" alt="Логотип"></a></div>
            </div>
            <div class="social-menu-bottom-second-header hide-on-med-and-down">
                    <div class="menu-list"><a href="#" ><img  class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
                    </div>

                    <div class="menu-list"><a href="#" ><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
                    </div>

                    <div class="menu-list"><a href="#"><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
                    </div>
                </div>

            <div class="second-header-bg">
                <a href="#"><img class="header-logo" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg" alt="Логотип"></a>
                <div class="logo-text hide-on-small-only hover-link">центральне медіа</div>
                <ul id="nav-mobile ggg" class="hide-on-med-and-down">
                    <li><a class="hover-link" href="#">ВІДЕО</a></li>
                    <li><a class="hover-link" href="#">СТАТТІ</a></li>
                    <li><a class="hover-link" href="#">БЛОГИ</a></li>
                </ul>
            </div>
        </nav>