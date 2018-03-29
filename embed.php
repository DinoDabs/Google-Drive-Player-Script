<?php
error_reporting(0);
include "curl_gd.php";

if($_GET['url'] != ""){
	$gid = $_GET['url'];
	$original_id = my_simple_crypt($gid, 'd');
	$title = fetch_value(file_get_contents_curl('https://drive.google.com/get_video_info?docid='.$original_id), "title=", "&");
	$url = 'https://drive.google.com/file/d/'.$original_id.'/view';
	$linkdown = Drive($url);
	
}
?>
<!DOCTYPE html>
<html >
   <head>
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/video-js.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {margin:0px !important; border-radius:0px !important; padding:0px !important;}
 
    #vjs-image-overlay-holder { -webkit-transition: all 0.2s linear; transition: all 0.2s linear; height:auto !important;
    width: 100%; opacity:0;
    max-width: 250px;
    margin-left: 5px;
    margin-top: 5px;
    }
   #vjs-image-overlay-holder img {opacity: 0.6;
    max-width: 309px; height: auto !important;
    width: 100%;
    float: left;}
   .video-js .vjs-menu-button-inline.vjs-slider-active,.video-js .vjs-menu-button-inline:focus,.video-js .vjs-menu-button-inline:hover,.video-js.vjs-no-flex .vjs-menu-button-inline{width:10em}.video-js .vjs-controls-disabled .vjs-big-play-button{display:none!important}.video-js .vjs-menu-button-inline:before{width:1.5em}.vjs-menu-button-inline .vjs-menu{left:3em}.video-js .vjs-load-progress div,.vjs-seeking .vjs-big-play-button,.vjs-waiting .vjs-big-play-button{display:none!important}.video-js .vjs-mouse-display:after,.video-js .vjs-play-progress:after{padding:0 .4em .3em}.video-js.vjs-ended .vjs-loading-spinner{display:none}.video-js.vjs-ended .vjs-big-play-button{display:block!important}.video-js.vjs-paused .vjs-big-play-button,.vjs-paused.vjs-has-started.video-js .vjs-big-play-button,video-js.vjs-ended .vjs-big-play-button{display:block}.video-js .vjs-big-play-button{top:50%;left:50%;margin-left:-1.5em;background-color:rgba(0,0,0,.43);font-size:4.5em;border-radius:4%;height:1.6em!important;line-height:1.6em!important;margin-top:-.8em!important}.video-js .vjs-big-play-button:active,.video-js .vjs-big-play-button:focus,.video-js:hover .vjs-big-play-button{background-color:#474747}.video-js .vjs-loading-spinner{border-color:#b99beb}.video-js .vjs-control-bar2{background-color:#000}.video-js .vjs-control-bar{background-color:rgba(0,0,0,.4)!important;color:#fff;font-size:12px}.video-js .vjs-play-progress,.video-js .vjs-volume-level{background-color:#b99beb}.video-js .vjs-load-progress{background:rgba(255,255,255,.8)}.video-js .vjs-big-play-button:hover{color:#b99beb}.video-js .vjs-control:focus:before,.video-js .vjs-control:hover:before{color:#b99beb;text-shadow:none}
    a[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."] { display:none !important;} .overlaykk {position:absolute;  bottom:47px; left:0px; animation-duration: 2s; 
    animation-fill-mode: both;  }
.innerhover {position:relative; padding:0px; } .downihgg {font-size: 29px; color: rgba(200, 200, 200, 0.7); -webkit-transition: all 0.5s linear; transition: all 0.5s linear; background-color: rgba(0, 0, 0, 0.42);
    padding: 5px;     float: right; display:inline-block;
    border-radius: 5px !important;} .rightbix {} .downihgg .fa {    padding: 3px;} .downihgg:hover {background-color: rgba(0, 0, 0, 0.72);}
.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {} .vjs-has-started.vjs-user-inactive.vjs-playing .overlaykk {    visibility: visible;
    opacity: 0;
    -webkit-transition: visibility 1s,opacity 1s;
    -moz-transition: visibility 1s,opacity 1s;
    -o-transition: visibility 1s,opacity 1s;
    transition: visibility 1s,opacity 1s;}
.spinner {
     margin:63px auto 44px;
    width: 100px;
    text-align: center;
}

.spinner > div {
  width: 16px;
  height: 16px;
  background-color: #b9bdce;
  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.7s infinite ease-in-out both;
          animation: sk-bouncedelay 1.7s infinite ease-in-out both;
  margin-right: 5px;
}


.spinner .spinner__item1 {
  -webkit-animation-delay: -0.60s;
          animation-delay: -0.60s;
}

.spinner .spinner__item2 {
  -webkit-animation-delay: -0.40s;
          animation-delay: -0.40s;
}

.spinner .spinner__item3 {
  -webkit-animation-delay: -0.20s;
          animation-delay: -0.20s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
    opacity: 0;
  }
  40% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1;
  }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
    opacity: 0;
  }
  40% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1;
  }
}
.spinprel {margin:auto !important; display: inline-block; margin-top:20px;} .spinprel div {width:12px; height:12px;}
.vjs-loading-spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -15px 0 0 -48px !important;
    opacity: .85;
    text-align: unset !important;
    border: unset !important;
    box-sizing: border-box;
    background-clip: padding-box;
    width: 50px;
    height: 50px;
    border-radius: 25px;
} .video-js .vjs-control-bar {    background-color: transparent !important; background: rgba(0,0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 78%, rgba(0,0,0,0.9) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,0,0,0)), color-stop(78%, rgba(0,0,0,0.9)), color-stop(100%, rgba(0,0,0,0.9)));
background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 78%, rgba(0,0,0,0.9) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 78%, rgba(0,0,0,0.9) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 78%, rgba(0,0,0,0.9) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 78%, rgba(0,0,0,0.9) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=0 );} .showloaderkxx {display:block !important; }
.video-js .vjs-play-progress:before {

    top: -0.303333em !important;
   
}
.adboxbit {position:relative; display:inline-block ; background-color:black;   }.adtexttitle { float: right;text-align: left;padding: 5px;width: 70%;display: inline-block; font-size:14px !important; color: #ac9fb2 !important;} .closeadkirt {outline:none !important; -webkit-outline:none !important; cursor:pointer !important; -webkit-transition: all 0.8s linear; transition: all 0.8s linear; } .closeadkirt:hover { -webkit-transition: all 0.8s linear; transition: all 0.8s linear;     background-color: rgba(136, 118, 151, 0.63) !important;} .offerlikggx { opacity:0.5; -webkit-transition: all 0.8s linear; transition: all 0.8s linear;}  .offerlikggx:hover {opacity:1; -webkit-transition: all 0.8s linear; transition: all 0.8s linear; } @keyframes fadeInLeftBig { 
    0% { 
        opacity: 0; 
        transform: translateX(-2000px); 
    } 
    100% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
} 
.fadeInLeftBig { 
    animation-name: fadeInLeftBig; 
} @keyframes fadeOutLeftBig { 
    0% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
    100% { 
        opacity: 0; 
        transform: translateX(-2000px); 
    } 
} 
.fadeOutLeftBig { 
    animation-name: fadeOutLeftBig; 
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/ie8/videojs-ie8.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
     <video id="uniqueID" class="video-js vjs-fluid vjs-16-9" controls preload="auto" width="640" height="264" poster="<?php echo $posterimg; ?>" data-setup='{}'>

              <source src="<?php echo $linkdown; ?>" type="video/mp4">  
      </video>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- VIDEOJS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/video.min.js"></script>

    <script>
        !function(){"use strict";var e=null;e="undefined"==typeof window.videojs&&"function"==typeof require?require("video.js"):window.videojs,function(e,t){function l(e,t,l,s){return i={label:l,sources:t},"function"==typeof s?s(e,t,l):e.src(t.map(function(e){return{src:e.src,type:e.type,res:e.res}}))}var s,r={},i={},n={},o=t.getComponent("MenuItem"),a=t.extend(o,{constructor:function(e,t,l,s){this.onClickListener=l,this.label=s,o.call(this,e,t),this.src=t.src,this.on("click",this.onClick),this.on("touchstart",this.onClick),t.initialySelected&&(this.showAsLabel(),this.selected(!0),this.addClass("vjs-selected"))},showAsLabel:function(){this.label&&(this.label.innerHTML=this.options_.label)},onClick:function(e){this.onClickListener(this);var t=this.player_.currentTime(),s=this.player_.paused();this.showAsLabel(),this.addClass("vjs-selected"),s||this.player_.bigPlayButton.hide(),"function"!=typeof e&&"function"==typeof this.options_.customSourcePicker&&(e=this.options_.customSourcePicker);var r="loadeddata";"Youtube"!==this.player_.techName_&&"none"===this.player_.preload()&&"Flash"!==this.player_.techName_&&(r="timeupdate"),l(this.player_,this.src,this.options_.label,e).one(r,function(){this.player_.currentTime(t),this.player_.handleTechSeeked_(),s||this.player_.play().handleTechSeeked_(),this.player_.trigger("resolutionchange")})}}),c=t.getComponent("MenuButton"),u=t.extend(c,{constructor:function(e,l,s,r){if(this.sources=l.sources,this.label=r,this.label.innerHTML=l.initialySelectedLabel,c.call(this,e,l,s),this.controlText("Quality"),s.dynamicLabel)this.el().appendChild(r);else{var i=document.createElement("span");t.addClass(i,"vjs-resolution-button-staticlabel"),this.el().appendChild(i)}},createItems:function(){var e=[],t=this.sources&&this.sources.label||{},l=function(t){e.map(function(e){e.selected(e===t),e.removeClass("vjs-selected")})};for(var s in t)t.hasOwnProperty(s)&&(e.push(new a(this.player_,{label:s,src:t[s],initialySelected:s===this.options_.initialySelectedLabel,customSourcePicker:this.options_.customSourcePicker},l,this.label)),n[s]=e[e.length-1]);return e}});s=function(e){function s(e,t){return e.res&&t.res?+t.res-+e.res:0}function o(e){var t={label:{},res:{},type:{}};return e.map(function(e){a(t,"label",e),a(t,"res",e),a(t,"type",e),c(t,"label",e),c(t,"res",e),c(t,"type",e)}),t}function a(e,t,l){null==e[t][l[t]]&&(e[t][l[t]]=[])}function c(e,t,l){e[t][l[t]].push(l)}function h(e,t){var l=y["default"],s="";return"high"===l?(l=t[0].res,s=t[0].label):"low"!==l&&null!=l&&e.res[l]?e.res[l]&&(s=e.res[l][0].label):(l=t[t.length-1].res,s=t[t.length-1].label),{res:l,label:s,sources:e.res[l]}}function d(e){e.tech_.ytPlayer.setPlaybackQuality("default"),e.tech_.ytPlayer.addEventListener("onPlaybackQualityChange",function(){e.trigger("resolutionchange")}),e.one("play",function(){var t=e.tech_.ytPlayer.getAvailableQualityLevels(),l={highres:{res:1080,label:"1080",yt:"highres"},hd1080:{res:1080,label:"1080",yt:"hd1080"},hd720:{res:720,label:"720",yt:"hd720"},large:{res:480,label:"480",yt:"large"},medium:{res:360,label:"360",yt:"medium"},small:{res:240,label:"240",yt:"small"},tiny:{res:144,label:"144",yt:"tiny"},auto:{res:0,label:"auto",yt:"default"}},s=[];t.map(function(t){s.push({src:e.src().src,type:e.src().type,label:l[t].label,res:l[t].res,_yt:l[t].yt})}),f=o(s);var r=function(t,l,s){return e.tech_.ytPlayer.setPlaybackQuality(l[0]._yt),e},i={label:"auto",res:0,sources:f.label.auto},n=new u(e,{sources:f,initialySelectedLabel:i.label,initialySelectedRes:i.res,customSourcePicker:r},y,b);n.el().classList.add("vjs-resolution-button"),e.controlBar.resolutionSwitcher=e.controlBar.addChild(n)})}var y=t.mergeOptions(r,e),p=this,b=document.createElement("span"),f={};t.addClass(b,"vjs-resolution-button-label"),p.updateSrc=function(e){if(!e)return p.src();p.controlBar.resolutionSwitcher&&(p.controlBar.resolutionSwitcher.dispose(),delete p.controlBar.resolutionSwitcher),e=e.sort(s),f=o(e);var r=h(f,e),i=new u(p,{sources:f,initialySelectedLabel:r.label,initialySelectedRes:r.res,customSourcePicker:y.customSourcePicker},y,b);return t.addClass(i.el(),"vjs-resolution-button"),p.controlBar.resolutionSwitcher=p.controlBar.el_.insertBefore(i.el_,p.controlBar.getChild("fullscreenToggle").el_),p.controlBar.resolutionSwitcher.dispose=function(){this.parentNode.removeChild(this)},l(p,r.sources,r.label)},p.currentResolution=function(e,t){return null==e?i:(null!=n[e]&&n[e].onClick(t),p)},p.getGroupedSrc=function(){return f},p.ready(function(){p.options_.sources.length>1&&p.updateSrc(p.options_.sources),"Youtube"===p.techName_&&d(p)})},t.plugin("videoJsResolutionSwitcher",s)}(window,e)}();
      $( document ).ready(function() {
           videojs('uniqueID').videoJsResolutionSwitcher({default: 'high', dynamicLabel: true});
        function InitializeIFrame() {
            document.body.getcss = true;
        }
videojs('uniqueID', {
      
    controls: true,
    plugins: {
      videoJsResolutionSwitcher: {
      
      }
    }
  }, function(){
    var player = this;
    window.player = player

    player.on('resolutionchange', function(){
     player.posterImage.hide();
     player.play();
    })
      player.on('seeking', function(e) {
  if(player.currentTime() === 0) {
    player.addClass('vjs-looping');
  }
})
player.on('playing', function(e) {
  if(player.currentTime() === 0) {
    player.removeClass('vjs-looping');
  }
})

  player.on('waiting', function(){

$('.vjs-loading-spinner').addClass('showloaderkxx');

});
player.on('canplay', function() {
$('.vjs-loading-spinner').removeClass('showloaderkxx');


});









  })    

          $(document).ready(function(){

    $('video').bind('contextmenu',function() { return false; });
     $('.vjs-control-bar').bind('contextmenu',function() { return false; });         
});
$('.vjs-loading-spinner').html('<div class="spinner spinprel"><div class="spinner__item1"></div><div class="spinner__item2"></div><div class="spinner__item3"></div><div class="spinner__item4"></div></div>');
        });

    </script>

</body>
</html>
