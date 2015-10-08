<?php  
$parse_string = '
/* variable for font family start */
@font-face {
    font-family: "proxima_nova_altregular";
    font-style: normal;
    font-weight: normal;
    src: url("font/proxima-nova-alt-regular-webfont.eot") format("embedded-opentype"),url("font/proxima-nova-alt-regular-webfont.woff") format("woff"),url("font/proxima-nova-alt-regular-webfont") format("truetype"),url("font/proxima-nova-alt-regular-webfont") format("svg");
}
@font-face {
    font-family: "proxima_nova_altsemibold";
    font-style: normal;
    font-weight: normal;
    src: url("font/proximanova-semibold-webfont.eot") format("embedded-opentype"),url("font/proximanova-semibold-webfont.woff") format("woff"),url("font/proximanova-semibold-webfont") format("truetype"),url("font/proximanova-semibold-webfont") format("svg");
}
@font-face {
    font-family: "proxima-nova-alt-bold-webfont";
    font-style: normal;
    font-weight: normal;
    src: url("font/proxima-nova-alt-bold-webfont.eot") format("embedded-opentype"),url("font/proxima-nova-alt-bold-webfont.woff") format("woff"),url("font/proxima-nova-alt-bold-webfont") format("truetype"),url("font/proxima-nova-alt-bold-webfont") format("svg");
}
@font-face {
    font-family: "MuseoSlab-500";
    font-style: normal;
    font-weight: normal;
    src: url("font/museo_slab_500.eot?#iefix") format("embedded-opentype"), url("font/museo_slab_500.woff") format("woff"), url("font/museo_slab_500.ttf") format("truetype"), url("/font/museo_slab_500.svg#museo_slab_500") format("svg");
}
@font-face {
  font-family: "fontello";
  src: url("font/fontello.eot?71955922");
  src: url("font/fontello.eot?71955922#iefix") format("embedded-opentype"),
       url("font/fontello.woff?71955922") format("woff"),
       url("font/fontello.ttf?71955922") format("truetype"),
       url("font/fontello.svg?71955922#fontello") format("svg");
  font-weight: normal;
  font-style: normal;
}

@font-proxima-regular: "proxima_nova_altregular";
@font-proxima-semibold: "proxima_nova_altsemibold";
@font-proxima-bold: "proxima-nova-alt-bold-webfont";
@font-museo: "MuseoSlab-500";

/***custom font icon classes***/
[class^="icon-"]:before, [class*=" icon-"]:before {
  font-family: "fontello";
  font-style: normal;
  font-weight: normal;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.icon-program:before { content: "\e800"; }
.icon-exhibitors:before { content: "\e801"; }
.icon-sponsors:before { content: "\e802"; }
.icon-sideevent:before { content: "\e803"; }
.icon-eventdetail:before { content: "\e804"; }
.icon-rightarrow:before { content: "\e805"; }
.icon-leftarrow:before { content: "\e806"; }
.icon-uparrow:before { content: "\e807"; }
.icon-downarrow:before { content: "\e808"; }
.icon-close:before { content: "\e809"; }
.icon-add:before { content: "\e80a"; }
.icon-frwd:before { content: "\e80b"; }
.icon-ffrwd:before { content: "\e80c"; }
.icon-reports:before { content: "\e80d"; }
.icon-calender:before { content: "\e80e"; }
.icon-thumb:before { content: "\e80f"; }
.icon-right:before { content: "\e810"; }
.icon-copy:before { content: "\e811"; }
.icon-power:before { content: "\e812"; }
.icon-upload:before { content: "\e813"; }
.icon-dollar:before { content: "\e814"; }
.icon-help:before { content: "\e815"; }
.icon-notify:before { content: "\e816"; }
.icon-customize:before { content: "\e817"; }
.icon-payment:before { content: "\e818"; }
.icon-edit:before { content: "\e819"; }
.icon-launch:before { content: "\e81a"; }
.icon-closeb:before { content: "\e81b"; }
.icon-fback:before { content: "\e81c"; }
.icon-back:before { content: "\e81d"; }
.icon-alert:before { content: "\e81e"; }
.icon-admin:before { content: "\e81f"; } 
.icon-search:before { content: "\e820"; }
.icon-view:before { content: "\e821"; }
.icon-user:before { content: "\e822"; }
/***custom font icon classes***/

/* variable for font family end */

/* common variables*/
@img_url: "images";
.box-sizing(@sizing) {
  -ms-box-sizing: @sizing;
  -moz-box-sizing: @sizing;
  -webkit-box-sizing: @sizing;
  box-sizing: @sizing;
}
.border-radius(@radius) {
  -webkit-border-radius: @radius;
     -moz-border-radius: @radius;
          border-radius: @radius;
}
.background-position(@xpos, @ypos){
  background-position : @xpos @ypos;
}
/* common variables ends*/

/* variable for font size start */
@font-xxlarge: 36px;
@font-xlarge: 30px;
@font-large: 24px;
@font-medium: 18px;
@font-small: 15px;
@font-xsmall: 12px;
/* variable for font size end */
/***********font size classes*********************/
.font-xxlarge   { font-size : @font-xxlarge ; }
.font-xlarge    { font-size : @font-xlarge ; }
.font-large     { font-size : @font-large ; }
.font-medium    { font-size : @font-medium ; }
.font-small     { font-size : @font-small ; }
.font-xsmall    { font-size : @font-xsmall ; }
/***********font size classes end*********************/

/* variable for color start */

@color_group        : #768693 ;
@color_mangers      : #FF8400 ;
@color_suppliers    : #8B8D4A ;
@color_clients      : #76236D ;
@color_resources    : #A8353A ;
@color_free         : #A6192e ;
@color_solo         : #009ABF ;
@color_enterprise   : #230871 ;

@color_delegates    : #00609C ;
@color_delegates75  : mix(@color_delegates, #ffffff, 75%);

@color_verydark     : #131E29 ;
@color_verydark80   : mix(@color_verydark, #ffffff, 80%);
@color_verydark60   : mix(@color_verydark, #ffffff, 60%);

@color_dark         : #253746 ;
@color_dark40       : mix(@color_dark, #ffffff, 40%);
@color_dark30       : mix(@color_dark, #ffffff, 30%);

@color_medium       : #415464 ;

@color_light        : #A4BCC4 ;
@color_light55      : mix(@color_light, #ffffff, 55%);
@color_light50      : mix(@color_light, #ffffff, 50%);
@color_light20      : mix(@color_light, #ffffff, 20%);

@color_verylight    : #d9e1e2 ;
@color_verylight50  : mix(@color_verylight, #ffffff, 50%);

@color_danger       : #FF0000 ;
@color_danger60     : mix(@color_danger, #ffffff, 60%);

@color_graymedium   : #63666a ;
@color_graylight    : #c8c9c7 ;
@color_grayverylight: #d9d9d6 ;
@color_graylight50  : mix(@color_graylight, #ffffff, 50%);

/* variable for color end */
/***********color classes*********************/

.group_color{ background-color : @color_group ; }
.managers_color{ background-color : @color_mangers ; }
.supplier_color{ background-color : @color_suppliers ; }
.client_color{ background-color : @color_clients ; }
.resource_color{ background-color : @color_resources ; }
.free_color{ background-color : @color_free ; }
.solo_color{ background-color : @color_solo ; }
.enterprise_color{ background-color : @color_enterprise ; }
.delegates_color{ background-color : @color_delegates ; }
.delegate75_color{ background-color : @color_delegates75 ; }
.verydark_color{ background-color : @color_verydark ; }
.verydark80_color{ background-color : @color_verydark80 ; }
.verydark60_color{ background-color : @color_verydark60 ; }
.dark_color{ background-color : @color_dark ; }
.dark40_color{ background-color : @color_dark40 ; }
.dark30_color{ background-color : @color_dark30 ; }
.medium_color{ background-color : @color_medium ; }
.light_color{ background-color : @color_light ; }
.light55_color{ background-color : @color_light55 ; }
.light50_color{ background-color : @color_light50 ; }
.light20_color{ background-color : @color_light20 ; }
.verylight_color{ background-color : @color_verylight ; }
.verylight50_color{ background-color : @color_verylight50 ; }
.danger_color{ background-color : @color_danger ; }
.danger60_color{ background-color : @color_danger60 ; }
.graymedium_color{ background-color : @color_graymedium ; }
.graylight_color{ background-color : @color_graylight ; }
.grayverylight_color{ background-color : @color_grayverylight ; }
.grayverylight50_color{ background-color : @color_graylight50 ; }

/***********color classes end*********************/

/***********Default icon*********************/
@xsmall_icon     : 18px;
@small_icon      : 28px;
@medium_icon     : 38px;
@large_icon      : 48px;
@xlarge_icon     : 68px;
@xxlarge_icon    : 98px;

.icon {
    display: inline-block;
    background-color: @color_verydark;
    color: #ffffff;
    text-align:center;
    .border-radius(100px);
    &:hover {
        background-color: @color_medium;
    }
    &.thumbwrap {
        background-color: transparent;
        color: @color_verydark;
    }
    &.thumbwrap:hover {
        background-color: transparent;
        color: @color_medium;
    }


}
.xsmall_icon{
    &:extend(.icon all);
    height      : @xsmall ;
    width       : @xsmall ;
    line-height : @xsmall ;
    i{
        width               : @xsmall;
        display             : block;
        line-height         : @xsmall;
        font-size           : @xsmall / 2;
        .thumbwrap&{
            font-size       : @xsmall;
        }
    }
    @xsmall : @xsmall_icon;
}
.small_icon{
    &:extend(.icon all);
    height      : @small ;
    width       : @small ;
    line-height : @small ;
    i{
        width               : @small;
        display             : block;
        line-height         : @small;
        font-size           : @small / 2;
        .thumbwrap&{
            font-size       : @small;
        }
    }
    @small  : @small_icon;
}
.medium_icon{
    &:extend(.icon all);
    height      : @medium ;
    width       : @medium ;
    line-height : @medium ;
    i{
        width               : @medium;
        display             : block;
        line-height         : @medium;
        font-size           : @medium / 2;
        .thumbwrap&{
            font-size       : @medium_icon;
        }
    }
    @medium : @medium_icon;
}
.large_icon{
    &:extend(.icon all);
    height      : @large ;
    width       : @large ;
    line-height : @large ;
    i{
        width               : @large;
        display             : block;
        line-height         : @large;
        font-size           : @large / 2;
        .thumbwrap&{
            font-size       : @large_icon;
        }
    }
    @large  : @large_icon;
}
.xlarge_icon{
    &:extend(.icon all);
    height      : @xlarge ;
    width       : @xlarge ;
    line-height : @xlarge ;
    i{
        width               : @xlarge;
        display             : block;
        line-height         : @xlarge;
        font-size           : @xlarge / 2;
        .thumbwrap&{
            font-size       : @xlarge_icon;
        }
    }
    @xlarge : @xlarge_icon ;
}
.xxlarge_icon{
    &:extend(.icon all);
    height      : @xxlarge ;
    width       : @xxlarge ;
    line-height : @xxlarge ;
    i{
        width               : @xxlarge;
        display             : block;
        line-height         : @xxlarge;
        font-size           : @xxlarge / 2;
        .thumbwrap&{
            font-size       : @xxlarge_icon;
        }
    }
    @xxlarge  : @xxlarge_icon ;
}
/***********end Default icon*********************/

*{ .box-sizing(border-box); }
body{   font-family:@font-proxima-regular;  font-size:@font-xsmall;}
.page_heading{  color : @color_mangers; font-size : @font-xlarge;}
.color_box {    display: inline-block;  width: 200px;   height: 100px;  line-height: 100px; text-align: center; font-size:@font-medium; color:#fff; margin-bottom:15px; margin-right:10px;}
.text-demo {display: block;margin-bottom: 15px;}
.icon{ margin:5px 15px;}

';

require_once "Less.php";
try{
    $parser = new Less_Parser();
    $parser->parse( $parse_string );
    $css = $parser->getCss();
    echo $css;
}catch(Exception $e){
    $error_message = $e->getMessage();
    echo $error_message;
}


