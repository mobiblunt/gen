<!DOCTYPE html>
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
    
    <title>Genesys - Online Trading Platform</title>
<link href='wp-content/themes/cryptapp/images/favicon.ico' rel='shortcut icon' type='image/x-icon' />
<link rel='dns-prefetch' href='http://use.fontawesome.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />

        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/cryptap.dttheme.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.10"}};
            !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
        <style type="text/css">
img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/styles972f.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='dt-animation-css-css'  href='wp-content/plugins/designthemes-core-features/shortcodes/css/animations8e83.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='dt-slick-css-css'  href='wp-content/plugins/designthemes-core-features/shortcodes/css/slick8e83.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='dt-sc-css-css'  href='wp-content/plugins/designthemes-core-features/shortcodes/css/shortcodes8e83.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='resmap_css-css'  href='wp-content/plugins/responsive-maps-plugin/includes/css/resmap.minf9b8.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='wp-content/plugins/revslider/public/assets/css/settings8c43.css?ver=5.4.7.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='js_composer_front-css'  href='wp-content/plugins/js_composer/assets/css/js_composer.min8b06.css?ver=5.4.7' type='text/css' media='all' />
<link rel='stylesheet' id='bsf-Defaults-css'  href='wp-content/uploads/smile_fonts/Defaults/Defaults8e83.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='ultimate-style-min-css'  href='wp-content/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.mina325.css?ver=3.16.22' type='text/css' media='all' />
<link rel='stylesheet' id='ult-icons-css'  href='wp-content/plugins/Ultimate_VC_Addons/assets/css/iconsa325.css?ver=3.16.22' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-css'  href='wp-content/themes/cryptapp/style5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-base-css'  href='wp-content/themes/cryptapp/css/base5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-grid-css'  href='wp-content/themes/cryptapp/css/grid5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-widget-css'  href='wp-content/themes/cryptapp/css/widget5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-layout-css'  href='wp-content/themes/cryptapp/css/layout5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-blog-css'  href='wp-content/themes/cryptapp/css/blog5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-portfolio-css'  href='wp-content/themes/cryptapp/css/portfolio5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-contact-css'  href='wp-content/themes/cryptapp/css/contact5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-custom-class-css'  href='wp-content/themes/cryptapp/css/custom-class5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-browsers-css'  href='wp-content/themes/cryptapp/css/browsers5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='prettyphoto-css'  href='wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min8b06.css?ver=5.4.7' type='text/css' media='all' />
<link rel='stylesheet' id='custom-font-awesome-css'  href='wp-content/themes/cryptapp/css/font-awesome.minb2f9.css?ver=4.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='pe-icon-7-stroke-css'  href='wp-content/themes/cryptapp/css/pe-icon-7-stroke8e83.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='stroke-gap-icons-style-css'  href='wp-content/themes/cryptapp/css/stroke-gap-icons-style8e83.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='icon-moon-css'  href='wp-content/themes/cryptapp/css/icon-moon8e83.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='material-design-iconic-css'  href='wp-content/themes/cryptapp/css/material-design-iconic-font.min8e83.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-customevent-css'  href='wp-content/themes/cryptapp/tribe-events/custom5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='cryptapp-custom-css'  href='wp-content/themes/cryptapp/css/custom5152.css?ver=1.0' type='text/css' media='all' />
<style id='cryptapp-custom-inline-css' type='text/css'>
.dt-sc-menu-sorting a { color: rgba(254,163,1, 0.6) }.dt-sc-team.type2 .dt-sc-team-thumb .dt-sc-team-thumb-overlay, .dt-sc-hexagon-image span:before, .dt-sc-keynote-speakers .dt-sc-speakers-thumb .dt-sc-speakers-thumb-overlay {  background: rgba(254,163,1, 0.9) }.portfolio .image-overlay, .recent-portfolio-widget ul li a:before, .dt-sc-image-caption.type2:hover .dt-sc-image-content, .dt-sc-fitness-program-short-details-wrapper .dt-sc-fitness-program-short-details { background: rgba(254,163,1, 0.9) }input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="tel"]:focus, input[type="number"]:focus, input[type="range"]:focus, input[type="date"]:focus, textarea:focus,
            input.text:focus, input[type="search"]:focus {
                    -webkit-box-shadow: 0px 0px 5px 2px #fea301;
                    -moz-box-shadow: 0px 0px 5px 2px #fea301;
                    -ms-box-shadow: 0px 0px 5px 2px #fea301;
                    -o-box-shadow: 0px 0px 5px 2px #fea301;
                    box-shadow: 0px 0px 5px 2px #fea301;
}.dt-sc-icon-box.type10 .icon-wrapper:before, .dt-sc-contact-info.type4 span:after, .dt-sc-pr-tb-col.type2 .dt-sc-tb-header:before { box-shadow:5px 0px 0px 0px #fea301}.dt-sc-icon-box.type10:hover .icon-wrapper:before { box-shadow:7px 0px 0px 0px #fea301}.dt-sc-counter.type6 .dt-sc-couter-icon-holder:before { box-shadow:5px 1px 0px 0px #fea301}.dt-sc-button.with-shadow.white { box-shadow:3px 3px 0px 0px #fea301}.dt-sc-restaurant-events-list .dt-sc-restaurant-event-details h6:before { border-bottom-color: rgba(254,163,1,0.6) }.portfolio.type4 .image-overlay, .dt-sc-timeline-section.type4 .dt-sc-timeline-thumb-overlay, .dt-sc-yoga-classes .dt-sc-yoga-classes-image-wrapper:before, .dt-sc-yoga-course .dt-sc-yoga-course-thumb-overlay, .dt-sc-yoga-program .dt-sc-yoga-program-thumb-overlay, .dt-sc-yoga-pose .dt-sc-yoga-pose-thumb:before, .dt-sc-yoga-teacher .dt-sc-yoga-teacher-thumb:before, .dt-sc-doctors .dt-sc-doctors-thumb-overlay, .dt-sc-event-addon > .dt-sc-event-addon-date, .dt-sc-course .dt-sc-course-overlay, .dt-sc-process-steps .dt-sc-process-thumb-overlay { background: rgba(254,163,1,0.85) }@media only screen and (max-width: 767px) { .dt-sc-contact-info.type4:after, .dt-sc-icon-box.type10 .icon-content h4:after, .dt-sc-counter.type6.last h4::before, .dt-sc-counter.type6 h4::after { background-color:#fea301} }@media only screen and (max-width: 767px) { .dt-sc-timeline-section.type2, .dt-sc-timeline-section.type2::before { border-color:#fea301} }.dt-sc-event-month-thumb .dt-sc-event-read-more, .dt-sc-training-thumb-overlay{ background: rgba(228,146,0,0.85) }@media only screen and (max-width: 767px) { .dt-sc-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after,.dt-sc-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after,.skin-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after { background-color:#e49200} }.dt-sc-faculty .dt-sc-faculty-thumb-overlay { background: rgba(254,181,51,0.9) }@-webkit-keyframes color-change { 0% { color:#fea301; } 50% { color:#e49200; }  100% { color:#feb533; } }@-moz-keyframes color-change { 0% { color:#fea301; } 50% { color:#e49200; } 100% { color:#feb533; } }@-ms-keyframes color-change { 0% { color:#fea301; } 50% { color:#e49200; } 100% { color:#feb533; } }@-o-keyframes color-change { 0% { color:#fea301; } 50% { color:#e49200; } 100% { color:#feb533; }  }@keyframes color-change { 0% { color:#fea301; } 50% { color:#e49200; } 100% { color:#feb533; } }
</style>
<link rel='stylesheet' id='kirki-styles-cryptapp_kirki_config-css'  href='wp-content/plugins/kirki/assets/css/kirki-stylesac5b.css?ver=3.0.25' type='text/css' media='all' />
<style id='kirki-styles-cryptapp_kirki_config-inline-css' type='text/css'>
a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .breadcrumb a:hover{color:#fea301;}.dt-header-menu ul.dt-primary-nav > li:hover > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li:hover > a, .dt-header-menu ul.dt-primary-nav > li.current_page_item > a, .dt-header-menu ul.dt-primary-nav > li.current-menu-item > a, .dt-header-menu ul.dt-primary-nav > li.current-page-ancestor > a, .dt-header-menu ul.dt-primary-nav > li.current-menu-ancestor > a, .icon-menu-header .dt-header-menu .dt-primary-nav > li:hover > a > i, .no-header-menu ul > li:hover > a, .no-header-menu ul li ul.sub-menu li:hover > a, .no-header-menu ul > li.current_page_item > a, .no-header-menu ul > li.current-menu-item > a, .no-header-menu ul > li.current-page-ancestor > a, .no-header-menu ul > li.current-menu-ancestor > a, .no-header-menu ul li ul.children li:hover > a, .no-header-menu ul li ul.children li > a:hover, .mobile-menu ul.dt-primary-nav > li:hover > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li:hover > a, .mobile-menu ul.dt-primary-nav > li.current_page_item > a, .mobile-menu ul.dt-primary-nav > li.current-menu-item > a, .mobile-menu ul.dt-primary-nav > li.current-page-ancestor > a, .mobile-menu ul.dt-primary-nav > li.current-menu-ancestor > a, .menu-icons-wrapper .overlay-search #searchform:before{color:#fea301;}.blog-entry .entry-meta a:hover, .blog-entry.entry-date-left .entry-date a:hover, .blog-entry.entry-date-author-left .entry-date-author .comments:hover, .blog-entry.entry-date-author-left .entry-date-author .comments:hover i, .entry-meta-data p a:hover, .blog-entry.entry-date-author-left .entry-date-author .entry-author a:hover, .blog-entry.entry-date-author-left .entry-date-author .comments a:hover, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border, .blog-entry.blog-thumb-style .entry-title h4 a:hover, .blog-entry.blog-thumb-style a.read-more:hover, .blog-entry .dt-sc-button.simple:hover, .blog-entry.bordered:hover .date{color:#fea301;}.widget #wp-calendar td a:hover, .dt-sc-dark-bg .widget #wp-calendar td a:hover, .secondary-sidebar .widget ul li > a:hover, .dt-sc-practices-list li:before, .secondary-sidebar .type15 .widget.widget_recent_reviews ul li .reviewer, .secondary-sidebar .type15 .widget.widget_top_rated_products ul li .amount.amount, #main-menu .menu-item-widget-area-container .widget ul li > a:hover, #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget ul li > a:hover, #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget_recent_posts .entry-title h4 a:hover, #main-menu ul li.menu-item-simple-parent.dt-sc-dark-bg ul li a:hover, #main-menu .menu-item-widget-area-container .widget li:hover:before, .widget.widget_recent_entries ul li span{color:#fea301;}#footer .footer-copyright .menu-links li a:hover, #footer .footer-copyright .copyright-left a:hover, #footer .dt-sc-dark-bg .recent-posts-widget li .entry-meta a:hover, #footer .dt-sc-dark-bg .entry-title h4 a:hover, #footer .dt-sc-dark-bg a:hover, .left-header-footer .dt-sc-sociable.filled li a, .footer-widgets a:hover, #footer a:hover, .dt-sc-skin-color, .dt-sc-skin-color a, #footer .wpcf7-form.bottom-bordered input[type="submit"], #footer .wpcf7-form.bottom-bordered button, #footer .wpcf7-form.bottom-bordered input[type="button"], #footer .wpcf7-form.bottom-bordered input[type="reset"], #footer h1 strong, #footer h2 strong, #footer h3 strong, #footer h4 strong, #footer h5 strong, #footer h6 strong, #footer .dt-sc-dark-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal > li > a:hover, #footer .dt-sc-dark-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal > li > a.current, #footer .dt-sc-light-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal > li > a:hover, #footer .dt-sc-light-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal > li > a.current, .dt-sc-team-social .wpb_column:hover span{color:#fea301;}.portfolio .image-overlay .links a:hover, .portfolio.type7 .image-overlay .links a, .project-details li a:hover, .portfolio-categories a:hover, .dt-portfolio-single-slider-wrapper #bx-pager a.active:hover:before, .dt-portfolio-single-slider-wrapper #bx-pager a, .portfolio.type8 .image-overlay .links a{color:#fea301;}.dt-skin-primary-color, ul.side-nav li a:hover, .available-domains li span, .dt-sc-popular-procedures .details .duration, .dt-sc-popular-procedures .details .price, .dt-sc-text-with-icon span, blockquote.type4 > cite, .dt-sc-contact-info.type3 span, .dt-sc-events-list .dt-sc-event-title h5 a, .woocommerce-MyAccount-navigation ul > li.is-active > a, .dt-sc-pr-tb-col.type1 .dt-sc-price h6, .dt-sc-pr-tb-col.type2 .dt-sc-price h6, .dt-sc-pr-tb-col.type2 .dt-sc-price h6 sup, .custom_overlay .title_uppercase.first, .custom_overlay .dt-sc-contact-info > p, ul.dt-sc-fancy-list li:before, .dt-sc-newsletter-section.type3 > h2 strong, .dt-sc-dropcap.dt-sc-dropcap-default{color:#fea301;}.dt-sc-button.fully-rounded-border, .dt-sc-button.rounded-border, .dt-sc-button.bordered, .dt-sc-button.with-shadow.white, .dt-sc-skin-highlight .dt-sc-button.rounded-border:hover, .dt-sc-skin-highlight .dt-sc-button.bordered:hover, .dt-sc-dark-bg.skin-color .dt-sc-button.fully-rounded-border:hover{color:#fea301;}.dt-sc-icon-box.type1 .icon-wrapper .icon, .dt-sc-icon-box.type2 .icon-wrapper .icon, .dt-sc-icon-box.type4 .icon-wrapper span, .dt-sc-icon-box.type5:hover .icon-content h4 a, .dt-sc-icon-box.type5.no-icon-bg .icon-wrapper span, .dt-sc-icon-box.type5.no-icon-bg:hover .icon-wrapper span, .dt-sc-icon-box.type10 .icon-wrapper span, .dt-sc-icon-box.type10:hover .icon-content h4, .dt-sc-icon-box.type13 .icon-content h4, .dt-sc-icon-box.type14 .icon-content h4, .dt-sc-icon-box.type5.rounded-border:hover .icon-wrapper span, .dt-sc-icon-box.type11 .icon-content a i, .dt-sc-icon-box.type11:hover .icon-content a, .dt-sc-icon-box.type4:hover .icon-content h4{color:#fea301;}.dt-sc-testimonial.type4 .dt-sc-testimonial-author cite, .dt-sc-testimonial.type5 .dt-sc-testimonial-author cite, .dt-sc-testimonial.type7 .dt-sc-testimonial-quote blockquote cite, .dt-sc-testimonial.type8 .dt-sc-testimonial-quote blockquote q:before, .dt-sc-testimonial.type8 .dt-sc-testimonial-quote blockquote q:after, .dt-sc-testimonial-special-wrapper:after, .dt-sc-special-testimonial-images-holder .dt-sc-testimonial-image.slick-current .dt-sc-testimonial-author cite, .dt-sc-team-carousel-wrapper .dt-sc-team-details .dt-sc-team-social li a:hover, .dt-sc-testimonial.type1 blockquote:before, .dt-sc-testimonial-wrapper .dt-sc-testimonial.type1 .dt-sc-testimonial-author cite, .dt-sc-testimonial.type2:before{color:#fea301;}ul.dt-sc-tabs-horizontal-frame > li > a.current, ul.dt-sc-tabs-horizontal > li > a.current, ul.dt-sc-tabs-horizontal > li > a:hover, ul.dt-sc-tabs-horizontal-frame > li > a:hover, .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current, .dt-sc-tabs-horizontal-frame-container.type3 ul.dt-sc-tabs-horizontal-frame > li > a.current{color:#fea301;}ul.dt-sc-tabs-vertical-frame > li > a:hover, ul.dt-sc-tabs-vertical-frame > li.current a, ul.dt-sc-tabs-vertical > li > a.current, .dt-sc-tabs-vertical-frame-container.type2 ul.dt-sc-tabs-vertical-frame > li > a.current:before, ul.dt-sc-tabs-vertical > li > a:hover{color:#fea301;}.dt-sc-toggle-frame-set > .dt-sc-toggle-accordion.active > a, .dt-sc-toggle-group-set .dt-sc-toggle.active > a, .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active a, .dt-sc-toggle-frame h5.dt-sc-toggle.active a, .dt-sc-toggle-panel h2 span{color:#fea301;}.dt-sc-title.with-sub-title h3, .dt-sc-title.with-two-color-stripe h2, .dt-sc-hexagon-title h2 span, .dt-sc-title.script-with-sub-title h2 strong{color:#fea301;}.dt-sc-image-with-caption h3 a, .dt-sc-image-caption.type3 .dt-sc-image-content h3, .dt-sc-event-image-caption .dt-sc-image-content h3, .dt-sc-image-caption.type8:hover .dt-sc-image-content h3 a:hover, .dt-sc-image-caption.type3 .dt-sc-image-wrapper .icon-wrapper span{color:#fea301;}.dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social.rounded-square li a, .dt-sc-team.rounded .dt-sc-team-details .dt-sc-team-social li a:hover, .dt-sc-team.rounded.team_rounded_border:hover .dt-sc-team-details h4, .dt-sc-team.type2 .dt-sc-team-social.rounded-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.rounded-square li a:hover, .dt-sc-team.type2 .dt-sc-team-social.square-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.hexagon-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.diamond-square-border li a:hover{color:#fea301;}.dt-sc-timeline .dt-sc-timeline-content h2 span, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline-content:hover h3, .dt-sc-timeline-section.type4 .dt-sc-timeline:hover .dt-sc-timeline-content h2{color:#fea301;}.dt-sc-sociable.diamond-square-border li:hover a, .dt-sc-sociable.hexagon-border li:hover a, .dt-sc-sociable.hexagon-with-border li:hover a, .dt-sc-sociable.no-margin li a{color:#fea301;}.dt-sc-counter.type3.diamond-square h4, .dt-sc-counter.type6:hover h4{color:#fea301;}.custom-arrow-navigation .slick-slider button i:hover{color:#fea301;}th, input[type="submit"], button, input[type="reset"], .loader{background-color:#fea301;}.overlay .overlay-close, .menu-trigger.menu-trigger-icon{background-color:#fea301;}#footer .wpcf7-form.bottom-bordered input[type="submit"]:hover, #footer .wpcf7-form.bottom-bordered button:hover, #footer .wpcf7-form.bottom-bordered input[type="button"]:hover, #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover{background-color:#fea301;border-color:#fea301;}.entry-format a, .blog-entry.blog-medium-style:hover .entry-format a, .blog-entry.blog-medium-style.dt-blog-medium-highlight.dt-sc-skin-highlight, .blog-entry.blog-medium-style.dt-blog-medium-highlight.dt-sc-skin-highlight .entry-format a, ul.commentlist li .reply a:hover, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border:hover, .post-nav-container .post-next-link a:hover, .post-nav-container .post-prev-link a:hover, .page-link > span, .page-link a:hover, .post-edit-link:hover, .vc_inline-link:hover, .pagination ul li a:hover, .pagination ul li span, .blog-entry.post-info-within-image .entry-meta .dt_scroll_down a:hover{background-color:#fea301;}.widget .dt-sc-newsletter-section.boxed .dt-sc-subscribe-frm input[type="submit"]:hover, .tagcloud a:hover, .widgettitle:before, .widget.widget_categories ul li > a:hover span, .widget.widget_archive ul li > a:hover span, .dt-sc-dark-bg .tagcloud a:hover, .dt-sc-dark-bg .widget.widget_categories ul li > a:hover span, #footer .dt-sc-dark-bg .widget.widget_categories ul li > a:hover span, #footer .dt-sc-dark-bg .widget.widget_archive ul li > a:hover span{background-color:#fea301;}.dt-sc-portfolio-sorting a.active-sort, .dt-sc-portfolio-sorting a:hover, .dt-sc-portfolio-sorting a:hover:before, .dt-sc-portfolio-sorting a:hover:after, .dt-sc-portfolio-sorting a.active-sort:before, .dt-sc-portfolio-sorting a.active-sort:after, .portfolio.type2 .image-overlay-details, .portfolio.type2 .image-overlay .links a:hover, .dt-sc-portfolio-sorting.type2, .dt-sc-portfolio-sorting.type2:before, .portfolio.type6 .image-overlay .links a:hover, .portfolio.type7 .image-overlay-details .categories a:before, .portfolio.type7 .image-overlay .links a:hover:before{background-color:#fea301;}.dt-skin-primary-bg, div[class*="dt-skin-primary-bg-opaque"]:not(.ult-vc-hide-row)::before, div[class*="dt-skin-primary-bg-opaque"] .upb_row_bg::before, section[class*="dt-skin-primary-bg-opaque"]::before, ul.side-nav li a:hover:before, ul.side-nav > li.current_page_item > a:before, ul.side-nav > li > ul > li.current_page_item > a:before, ul.side-nav > li > ul > li > ul > li.current_page_item > a:before, .dt-sc-small-separator, .dt-sc-diamond-separator, .dt-sc-titled-box h6.dt-sc-titled-box-title, .carousel-arrows a:hover, .dt-sc-images-wrapper .carousel-arrows a:hover, .diamond-narrow-square-border li:hover:before, .dt-sc-sociable.hexagon-with-border li, .dt-sc-skin-highlight, .dt-sc-skin-highlight.extend-bg-fullwidth-left:after, .dt-sc-skin-highlight.extend-bg-fullwidth-right:after, .two-color-section:before, .dt-sc-readmore-plus-icon:hover:before, .dt-sc-readmore-plus-icon:hover:after, .dt-sc-contact-details-on-map .map-switch-icon, .dt-sc-content-with-hexagon-shape, .dt-sc-hexagons li .dt-sc-hexagon-overlay, .available-domains li .tdl:before, .available-domains li:hover .dt-sc-button, .domain-search-container .domain-search-form, .dt-sc-newsletter-section.type1 h2:before, .dt-sc-newsletter-section.type1 h2:after{background-color:#fea301;}.dt-sc-button.filled, .dt-sc-button:hover, .dt-sc-button.rounded-border:hover, .dt-sc-button.bordered:hover, .dt-sc-button.fully-rounded-border:hover, .dt-sc-colored-big-buttons:hover, .dt-sc-colored-big-buttons span, .dt-sc-button.dt-sc-readmore-link{background-color:#fea301;}.dt-sc-contact-info.type2:hover span, .dt-sc-contact-info.type3, .dt-sc-contact-info.type4 span:after, .dt-sc-contact-info.type4:before, .dt-sc-contact-info.type5 .dt-sc-contact-icon, .dt-sc-contact-info.type5:hover, .dt-sc-contact-info.type6, .dt-sc-contact-info.type7 span:after, .dt-sc-contact-info.type4:after, .university-contact-form .button-field i{background-color:#fea301;}.dt-sc-counter.type1 .icon-wrapper:before, .dt-sc-counter.type2 .dt-sc-couter-icon-holder, .dt-sc-counter.type3.diamond-square .dt-sc-couter-icon-holder .icon-wrapper:before, .dt-sc-counter.type4:hover .dt-sc-couter-icon-holder, .dt-sc-counter.type5:hover:after, .dt-sc-counter.type6 h4:before, .dt-sc-counter.type6:hover .dt-sc-couter-icon-holder:before{background-color:#fea301;}.custom-dot-navigation ul.slick-dots li.slick-active i, .custom-dot-navigation ul.slick-dots li:hover i{background-color:#fea301;}.dt-sc-icon-box.type1 .icon-content h4:before, .dt-sc-icon-box.type3.dt-sc-diamond:hover .icon-wrapper:after, .dt-sc-icon-box.type5.rounded-skin .icon-wrapper, .dt-sc-icon-box.type5.rounded:hover .icon-wrapper, .dt-sc-icon-box.type5:hover .icon-wrapper:before, .dt-sc-icon-box.type5.alter .icon-wrapper:before, .dt-sc-icon-box.type6 .icon-wrapper, .dt-sc-icon-box.type7 .icon-wrapper, .dt-sc-contact-info.type8:hover span, .dt-sc-icon-box.type10:hover .icon-wrapper:before, .dt-sc-icon-box.type10 .icon-content h4:before, .dt-sc-icon-box.type12, .dt-sc-icon-box.type13:hover, .dt-sc-icon-box.type14:hover, .dt-sc-icon-box.type15 .icon-content, .dt-sc-icon-box.type3.dt-sc-rounded:hover span{background-color:#fea301;}.dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a:hover, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active, .dt-sc-testimonial-wrapper.type1 .carousel-arrows a:hover{background-color:#fea301;}.dt-sc-title.with-two-color-bg:after, .dt-sc-triangle-title:after, .dt-sc-title.with-right-border-decor:after, .dt-sc-title.with-right-border-decor:before, .dt-sc-title.with-boxed, .mz-title .mz-title-content h2, .mz-title-content h3.widgettitle, .mz-title .mz-title-content:before, .mz-blog .comments a, .mz-blog div.vc_gitem-post-category-name, .mz-blog .ico-format{background-color:#fea301;}.dt-sc-team-social.hexagon-border li:hover, .dt-sc-team .dt-sc-team-social.diamond-square-border li:hover, .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social.rounded-square li:hover a, .dt-sc-infinite-portfolio-load-more, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay, .dt-sc-team-social.rounded-border li a:hover, .dt-sc-team-social.rounded-square li a, .dt-sc-team.hide-social-show-on-hover:hover .dt-sc-team-details, .dt-sc-team-social.square-border li a:hover, .dt-sc-team.rounded:hover .dt-sc-team-thumb:after, .dt-sc-team.hide-social-role-show-on-hover:hover .dt-sc-team-details, .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social li:hover, .dt-sc-team.style2 .dt-sc-sociable li a, .dt-sc-team.style2 .dt-sc-team-details .view-details:hover, .dt-sc-team.pattern-bg-on-hover:hover .dt-sc-team-social{background-color:#fea301;}.dt-sc-pr-tb-col.minimal:hover .dt-sc-price, .dt-sc-pr-tb-col.minimal.selected .dt-sc-price, .dt-sc-pr-tb-col:hover .dt-sc-buy-now a, .dt-sc-pr-tb-col.selected .dt-sc-buy-now a, .dt-sc-pr-tb-col.minimal:hover .icon-wrapper:before, .dt-sc-pr-tb-col.minimal.selected .icon-wrapper:before{background-color:#fea301;}.dt-sc-hr-timeline-section.type1:before, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline .dt-sc-hr-timeline-content:after, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline-wrapper:before, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline-wrapper:after, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline-content h3:before, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline:hover .dt-sc-hr-timeline-thumb:before{background-color:#fea301;}.dt-sc-timeline-section.type2:before, .dt-sc-timeline-section.type3 .dt-sc-timeline .dt-sc-timeline-content h2:before, .dt-sc-timeline-section.type4 .dt-sc-timeline .dt-sc-timeline-content h2:before, .dt-sc-timeline-section.type4 .dt-sc-timeline:hover .dt-sc-timeline-thumb:before{background-color:#fea301;}.dt-sc-image-caption.type4:hover .dt-sc-button, .dt-sc-image-caption.type8 .dt-sc-image-content:before, .dt-sc-event-image-caption:hover, .dt-sc-image-caption.type5:hover h3{background-color:#fea301;}.dt-sc-tabs-horizontal-frame-container.type4 ul.dt-sc-tabs-horizontal-frame > li > a.current > span:after, .dt-sc-tabs-horizontal-frame-container.type5 ul.dt-sc-tabs-horizontal-frame > li > a.current, .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame > li > a, .type8 ul.dt-sc-tabs-horizontal-frame > li > a.current, .type8 ul.dt-sc-tabs-horizontal-frame > li > a:hover{background-color:#fea301;}.dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a:before, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a:after{background-color:#fea301;}.dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active a:before, h5.dt-sc-toggle-accordion.active a:before, .dt-sc-toggle-frame h5.dt-sc-toggle.active a:before, h5.dt-sc-toggle.active a:before, .type2 .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active, .type2 .dt-sc-toggle-frame h5.dt-sc-toggle.active, .dt-sc-toggle-frame-set.type2 > h5.dt-sc-toggle-accordion.active:after, .dt-sc-toggle-icon{background-color:#fea301;}.dt-sc-video-wrapper .video-overlay-inner a, .dt-sc-video-item:hover .dt-sc-vitem-detail, .dt-sc-video-item.active .dt-sc-vitem-detail, .type2 .dt-sc-video-item:hover, .type2 .dt-sc-video-item.active, .nicescroll-rails.dt-sc-skin{background-color:#fea301;}.live-chat a, .dt-bmi-inner-content tbody th, .dt-bmi-inner-content tbody tr:nth-child(2n+1) th, .dt-sc-menu .menu-categories a:before, .hotel-search-container form input[type="submit"]:hover, .hotel-search-container .selection-box:after, .dt-sc-training-details-overlay, .custom-navigation .vc_images_carousel .vc_carousel-indicators li, .dt-sc-doctors.style1 .dt-sc-doctors-thumb-wrapper .dt-sc-button, .dt-sc-doctors-single .dt-sc-doctors.style1 .dt-sc-doctors-details ul.dt-sc-sociable li a, .dt-sc-procedure-item:hover, .dt-sc-fitness-procedure-sorting a, ul.dt-sc-vertical-nav > li.active > a, ul.time-table > li, ul.time-slots > li a:hover, .dt-sc-available-times ul.time-slots, #wpsl-search-btn, #wpsl-stores li > p span, #wpsl-stores li > p, #wpsl-stores li > p ~ .wpsl-directions, .dt-sc-toggle-advanced-options span{background-color:#fea301;}.blog-entry.entry-date-left .entry-date span, .blog-entry.blog-medium-style:hover .entry-format a, ul.commentlist li .reply a:hover, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border, .pagination ul li a:hover, .pagination ul li span, .post-nav-container .post-next-link a:hover, .post-nav-container .post-prev-link a:hover, .page-link > span, .page-link a:hover, .blog-entry.bordered:hover .date, .blog-entry.bordered .entry-details:after, .blog-entry.bordered{border-color:#fea301;}.widget .dt-sc-newsletter-section.boxed, .widget .dt-sc-newsletter-section.boxed .dt-sc-subscribe-frm input[type="submit"], .tagcloud a:hover, .dt-sc-dark-bg .tagcloud a:hover, .secondary-sidebar .type3 .widgettitle, .secondary-sidebar .type6 .widgettitle, .secondary-sidebar .type13 .widgettitle:before, .secondary-sidebar .type14 .widgettitle, .secondary-sidebar .type16 .widgettitle{border-color:#fea301;}.dt-sc-portfolio-sorting a.active-sort, .dt-sc-portfolio-sorting a:hover, .portfolio.type7 .image-overlay .links a:before{border-color:#fea301;}.dt-sc-colored-big-buttons, .dt-sc-button.fully-rounded-border, .dt-sc-button.fully-rounded-border:hover, .dt-sc-button.rounded-border.black:hover, .dt-sc-button.bordered.black:hover, .dt-sc-button.bordered:hover, .dt-sc-button.rounded-border:hover{border-color:#fea301;}.dt-sc-sociable.rounded-border li a:hover, .dt-sc-dark-bg .dt-sc-sociable.rounded-border li a:hover, .dt-sc-dark-bg .dt-sc-sociable.square-border li a:hover, .dt-sc-sociable.diamond-square-border li:hover, .diamond-narrow-square-border li:before{border-color:#fea301;}.dt-sc-team .dt-sc-team-social.diamond-square-border li:hover, .dt-sc-team-social.hexagon-border li:hover, .dt-sc-team-social.hexagon-border li:hover:before, .dt-sc-team-social.hexagon-border li:hover:after, .dt-sc-team-social.rounded-border li a:hover, .dt-sc-team-social.square-border li a:hover, .dt-sc-team.team_rounded_border.rounded:hover .dt-sc-team-thumb:before{border-color:#fea301;}.dt-sc-testimonial.type5 .dt-sc-testimonial-quote, .dt-sc-testimonial-images li.selected div, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a:hover, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active:before, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active:hover:before, .dt-sc-testimonial.type5 .dt-sc-testimonial-author img{border-color:#fea301;}ul.dt-sc-tabs-horizontal > li > a.current, ul.dt-sc-tabs-vertical > li > a.current, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current{border-color:#fea301;}.dt-sc-tabs-horizontal-container.type2 .dt-sc-tabs-horizontal li a.current{border-top-color:#fea301;}.type2 .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active, .type2 .dt-sc-toggle-frame h5.dt-sc-toggle.active{border-color:#fea301;}.dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline .dt-sc-hr-timeline-content:before, .dt-sc-timeline-section.type2 .dt-sc-timeline-image-wrapper, .dt-sc-timeline-section.type2 .dt-sc-timeline .dt-sc-timeline-content:after, .dt-sc-timeline-section.type2:after{border-color:#fea301;}.dt-sc-counter.type3 .icon-wrapper:before, .dt-sc-counter.type3.diamond-square, .dt-sc-counter.type5:hover:before, .dt-sc-counter.type5:hover:after, .dt-sc-counter.type6, .dt-sc-counter.type6 .dt-sc-couter-icon-holder:before{border-color:#fea301;}.dt-sc-contact-info.type2:hover, .dt-sc-contact-info.type4, .last .dt-sc-contact-info.type4{border-color:#fea301;}.dt-sc-icon-box.type5.no-icon .icon-content h4, .dt-sc-icon-box.type5.no-icon, .dt-sc-icon-box.type10, .dt-sc-icon-box.type10 .icon-wrapper:before, .dt-sc-icon-box.type3.dt-sc-diamond:hover .icon-wrapper:after{border-color:#fea301;}.dt-sc-image-caption.type2 .dt-sc-image-content, .dt-sc-image-caption.type4, .dt-sc-image-caption.type4:hover .dt-sc-button, .dt-sc-icon-box.type10:hover .icon-wrapper:before, .dt-sc-image-caption.type5:hover h3, .dt-sc-image-caption.type5:hover img{border-color:#fea301;}.dt-skin-primary-border, .dt-sc-title.with-right-border-decor h2:before, .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="text"], .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="email"], .dt-sc-text-with-icon.border-bottom, .dt-sc-text-with-icon.border-right, .dt-sc-hexagons li:hover, .dt-sc-hexagons li:hover:before, .dt-sc-hexagons li:hover:after, .dt-sc-hexagons li, .dt-sc-hexagons li:before, .dt-sc-hexagons li .dt-sc-hexagon-overlay:before, .dt-sc-hexagons li:after, .dt-sc-hexagons li .dt-sc-hexagon-overlay:after, .dt-sc-single-hexagon, .dt-sc-single-hexagon:before, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay:before, .dt-sc-single-hexagon:after, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay:after, .dt-sc-single-hexagon:hover, .dt-sc-single-hexagon:hover:before, .dt-sc-single-hexagon:hover:after, .carousel-arrows a:hover, .vc_custom_carousel .slick-slider .slick-dots, .vc_custom_carousel .slick-slider:before, .dt-sc-team-navigation .dt-sc-team-pager-prev:before, .dt-sc-team-navigation .dt-sc-team-pager-next:before, ul.dt-sc-vertical-nav, ul.dt-sc-vertical-nav > li:first-child > a, .dt-sc-loading:before{border-color:#fea301;}.dt-sc-triangle-wrapper:hover .dt-sc-triangle-content:before, .dt-sc-content-with-hexagon-shape:after, .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current:before, .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current:after, .skin-highlight .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame > li > a:before, .dt-sc-doctors-filter .selection-box:before{border-top-color:#fea301;}.dt-sc-up-arrow:before, .dt-sc-image-caption .dt-sc-image-wrapper .icon-wrapper:before, .dt-sc-triangle-wrapper.alter:hover .dt-sc-triangle-content:before, .dt-sc-content-with-hexagon-shape:before, .dt-sc-tabs-horizontal-frame-container.type4 ul.dt-sc-tabs-horizontal-frame > li > a.current{border-bottom-color:#fea301;}.type3 .dt-sc-toggle-frame .dt-sc-toggle-content, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current:before, .dt-sc-event-image-caption:hover .dt-sc-image-content:before{border-left-color:#fea301;}.dt-sc-attorney-sorting, .dt-sc-menu-sorting a.active-sort, .dt-sc-menu .image-overlay .price, .hotel-search-container form input[type="submit"]{border-color:#fea301;}.error404 .type2 a.dt-sc-back, .error404 .type4 .error-box, .error404 .type4 .dt-sc-newsletter-section input[type="submit"], .error404 .type8 .dt-go-back{background-color:#fea301;}.error404 .type2 h2, .error404 .type8 h2, .error404 .type8 .dt-go-back:hover i{color:#fea301;}.under-construction.type4 .dt-sc-counter-wrapper, .under-construction.type1 .dt-sc-newsletter-section form input[type="submit"], .under-construction.type1 .dt-sc-counter-wrapper .counter-icon-wrapper:before, .under-construction.type2 .dt-sc-sociable > li:hover a, .under-construction.type7 .dt-sc-sociable > li:hover a, .under-construction.type3 .dt-sc-newsletter-section form input[type="submit"], .under-construction.type3 .dt-sc-sociable > li:hover a, .under-construction.type7 .dt-sc-counter-wrapper, .under-construction.type7 .dt-sc-newsletter-section form input[type="submit"]{background-color:#fea301;}.under-construction.type3 .dt-sc-sociable > li:hover a{border-color:#fea301;}.under-construction.type4 .wpb_wrapper > h2 span, .under-construction.type4 .read-more i, .under-construction.type4 .wpb_wrapper > h4:after, .under-construction.type4 .wpb_wrapper > h4:before, .under-construction.type1 .read-more span.fa, .under-construction.type1 .read-more a:hover, .under-construction.type2 .counter-icon-wrapper .dt-sc-counter-number, .under-construction.type2 h2, .under-construction.type2 .dt-sc-counter-wrapper h3, .under-construction.type2 .mailchimp-newsletter h3, .under-construction.type7 h2, .under-construction.type7 .mailchimp-newsletter h3, .under-construction.type3 p, .under-construction.type5 h2 span, .under-construction.type5 .dt-sc-counter-number, .under-construction.type5 footer .dt-sc-team-social li:hover a, .under-construction.type5 input[type="email"], .under-construction.type7 .aligncenter .wpb_text_column h2{color:#fea301;}#buddypress div.pagination .pagination-links span, #buddypress div.pagination .pagination-links a:hover, #buddypress #group-create-body #group-creation-previous, #item-header-content #item-meta > #item-buttons .group-button, #buddypress div#subnav.item-list-tabs ul li.feed a:hover, #buddypress div.activity-meta a:hover, #buddypress div.item-list-tabs ul li.selected a span, #buddypress .activity-list li.load-more a, #buddypress .activity-list li.load-newest a{background-color:#fea301;}#buddypress div.pagination .pagination-links span, #buddypress div.pagination .pagination-links a:hover, #buddypress #members-dir-list ul li:hover{border-color:#fea301;}#members-list.item-list.single-line li h5 span.small a.button, #buddypress div.item-list-tabs ul li.current a, #buddypress #group-create-tabs ul li.current a, #buddypress a.bp-primary-action:hover span, #buddypress div.item-list-tabs ul li.selected a, .widget.buddypress div.item-options a:hover, .widget.buddypress div.item-options a.selected, #footer .footer-widgets.dt-sc-dark-bg .widget.buddypress div.item-options a.selected, .widget.widget_bp_core_members_widget div.item .item-title a:hover, .widget.buddypress .bp-login-widget-user-links > div.bp-login-widget-user-link a:hover{color:#fea301;}#bbpress-forums li.bbp-header, .bbp-submit-wrapper #bbp_topic_submit, .bbp-reply-form #bbp_reply_submit, .bbp-pagination-links a:hover, .bbp-pagination-links span.current, #bbpress-forums #subscription-toggle a.subscription-toggle{background-color:#fea301;}.bbp-pagination-links a:hover, .bbp-pagination-links span.current{border-color:#fea301;}.bbp-forums .bbp-body .bbp-forum-info::before{color:#fea301;}#tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option a:hover, #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active a:hover, #tribe-bar-form .tribe-bar-submit input[type="submit"], #tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a, .tribe-events-calendar thead th, #tribe-events-content .tribe-events-tooltip h4, .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"], .tribe-events-read-more, #tribe-events .tribe-events-button, .tribe-events-button, .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a, .tribe-events-back > a, #tribe_events_filters_toggle{background-color:#fea301;}.tribe-events-list .tribe-events-event-cost span{border-color:#fea301;}.tribe-grid-header, .tribe-grid-allday .tribe-events-week-allday-single, .tribe-grid-body .tribe-events-week-hourly-single{background-color:#fea301;}.type1.tribe_events .event-image-wrapper .event-datetime > span, .type3.tribe_events .event-date, .event-meta-tab ul.dt-sc-tabs-horizontal-frame > li > a{background-color:#fea301;}.type1 .event-schedule, .type1.tribe_events .nav-top-links a:hover, .type1.tribe_events .event-image-wrapper .event-datetime > i, .type1.tribe_events .event-image-wrapper .event-venue > i, .type1.tribe_events h4 a, .type2.tribe_events .date-wrapper p span, .type2.tribe_events h4 a, .type3.tribe_events .right-calc a:hover, .type3.tribe_events .tribe-events-sub-nav li a:hover, .type3.tribe_events .tribe-events-sub-nav li a span, .type4.tribe_events .data-wrapper p span, .type4.tribe_events .data-wrapper p i, .type4.tribe_events .event-organize h4 a, .type4.tribe_events .event-venue h4 a, .type5.tribe_events .event-details h3, .type5.tribe_events .event-organize h3, .type5.tribe_events .event-venue h3, .type5.tribe_events .data-wrapper p span, .data-wrapper p i, .type5.tribe_events .event-organize h4 a, .type5.tribe_events .event-venue h4 a{color:#fea301;}.dt-sc-event.type1 .dt-sc-event-thumb p, .dt-sc-event.type1 .dt-sc-event-meta:before, .dt-sc-event.type2:hover .dt-sc-event-meta, .dt-sc-event.type3 .dt-sc-event-date, .dt-sc-event.type3:hover .dt-sc-event-meta{background-color:#fea301;}.dt-sc-event.type4 .dt-sc-event-date:after{border-bottom-color:#fea301;}.dt-sc-event.type1 .dt-sc-event-meta p span, .dt-sc-event.type1:hover h2.entry-title a, .dt-sc-event.type3:hover h2.entry-title a, .dt-sc-event.type4 .dt-sc-event-date span{color:#fea301;}.widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td, .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present, .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today, .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover, .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today, .dt-sc-dark-bg .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover{background-color:#fea301;}.widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td{border-color:#fea301;}.widget.tribe-events-countdown-widget .tribe-countdown-text a:hover{color:#fea301;}.woocommerce a.button, .woocommerce button.button, .woocommerce button, .woocommerce input.button, .woocommerce input[type=button], .woocommerce input[type=submit], .woocommerce #respond input#submit, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce .product .summary .add_to_wishlist, .woocommerce .wishlist_table .add_to_cart.button, .woocommerce .yith-wcwl-add-button a.add_to_wishlist, .woocommerce .yith-wcwl-popup-button a.add_to_wishlist, .woocommerce .wishlist_table a.ask-an-estimate-button, .woocommerce .wishlist-title a.show-title-form, .woocommerce .hidden-title-form a.hide-title-form, .woocommerce .yith-wcwl-wishlist-new button, .woocommerce .wishlist_manage_table a.create-new-wishlist, .woocommerce .wishlist_manage_table button.submit-wishlist-changes, .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button, .woocommerce .cart input.button, .woocommerce .shop_table th, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page button, .woocommerce-page input.button, .woocommerce-page input[type=button], .woocommerce-page input[type=submit], .woocommerce-page #respond input#submit, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page .product .summary .add_to_wishlist, .woocommerce-page .wishlist_table .add_to_cart.button, .woocommerce-page .yith-wcwl-add-button a.add_to_wishlist, .woocommerce-page .yith-wcwl-popup-button a.add_to_wishlist, .woocommerce-page .wishlist_table a.ask-an-estimate-button, .woocommerce-page .wishlist-title a.show-title-form, .woocommerce-page .hidden-title-form a.hide-title-form, .woocommerce-page .yith-wcwl-wishlist-new button, .woocommerce-page .wishlist_manage_table a.create-new-wishlist, .woocommerce-page .wishlist_manage_table button.submit-wishlist-changes, .woocommerce-page .yith-wcwl-wishlist-search-form button.wishlist-search-button, .woocommerce-page .cart input.button, .woocommerce-page .shop_table th, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a:after, .woocommerce ul.products li.product .featured-tag, .woocommerce ul.products li.product:hover .featured-tag, .woocommerce.single-product .featured-tag, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, .woocommerce ul.products li.product .default .product-buttons-wrapper .wc_inline_buttons > .wc_btn_inline a:hover, .woocommerce .view-mode a:hover, .woocommerce .view-mode a.active, .swiper-button-prev, .swiper-button-next, .woocommerce ul.products li.product .default .product-buttons-wrapper a.added_to_cart.wc-forward, .dt-carousel-navigation a, .woocommerce ul.products li.product .style-2 .product-buttons-wrapper a.added_to_cart, .woocommerce ul.products li.product .style-2 .product-thumb .yith-wcwl-wishlistexistsbrowse a, .woocommerce ul.products li.product .style-3 .product-buttons-wrapper a.added_to_cart, .woocommerce ul.products li.product .style-3 .product-thumb .yith-wcwl-wishlistexistsbrowse a{background-color:#fea301;}.woocommerce ul.products li.product .featured-tag:after, .woocommerce ul.products li.product:hover .featured-tag:after, .woocommerce.single-product .featured-tag:after{border-color:#fea301;}.swiper-pagination-bullets .swiper-pagination-bullet-active, .swiper-pagination.swiper-pagination-progress .swiper-pagination-progressbar{background:#fea301;}.woocommerce-checkout #payment ul.payment_methods li a:hover, .woocommerce ul.products li.product .default .product-details .product-price .price, .woocommerce .default span.price del .amount, .woocommerce .default .product-price del .amount, .woocommerce ul.products li.product .woo-type8 .product-buttons-wrapper a.yith-wcqv-button:hover, .woocommerce ul.products li.product .woo-type8 .product-buttons-wrapper a.yith-woocompare-button:hover{color:#fea301;}ul.products li.product .woo-type1 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type1 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type1 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type1 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type1 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type1 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type1 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woocommerce ul.products li.product .woo-type1 .product-buttons-wrapper a.yith-wcqv-button:hover, .woocommerce ul.products li.product .woo-type1 .product-buttons-wrapper a.yith-woocompare-button:hover{background-color:#fea301;}.woo-type1 ul.products li.product-category:hover .product-details h5, .woo-type1 ul.products li.product-category:hover .product-details h5 .count, ul.products li.product .woo-type1 .product-details .product-price .amount, ul.products li.product .woo-type1 .product-details span.price, ul.products li.product .woo-type1 .product-details span.price del, ul.products li.product .woo-type1 .product-details span.price del .amount, ul.products li.product .woo-type1 .product-details span.price ins, ul.products li.product .woo-type1 .product-details span.price ins .amount, .woo-type1.woocommerce.single-product .product .summary .product_meta a:hover, .woo-type1.woocommerce div.product .woocommerce-tabs ul.tabs li.active a{color:#fea301;}ul.products li.product .woo-type4 .product-thumb a.add_to_cart_button:after, ul.products li.product .woo-type4 .product-thumb a.button.product_type_simple:after, ul.products li.product .woo-type4 .product-thumb a.button.product_type_variable:after, ul.products li.product .woo-type4 .product-thumb a.added_to_cart.wc-forward:after, ul.products li.product .woo-type4 .product-thumb a.add_to_wishlist:after, ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistaddedbrowse a:after, ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistexistsbrowse a:after, ul.products li.product .woo-type4 .product-details h5:after, .woocommerce ul.products li.product .woo-type4 .product-buttons-wrapper a.yith-wcqv-button:after, .woocommerce ul.products li.product .woo-type4 .product-buttons-wrapper a.yith-woocompare-button:after{background-color:#fea301;}ul.products li.product-category:hover .woo-type4 .product-details h5, ul.products li.product-category:hover .woo-type4 .product-details h5 .count{color:#fea301;}ul.products li.product .woo-type8 .product-details, ul.products li.product:hover .woo-type8 .product-details h5:before{background-color:#fea301;}ul.products li.product .woo-type8 .product-thumb a.add_to_cart_button:hover:before, ul.products li.product .woo-type8 .product-thumb a.button.product_type_simple:hover:before, ul.products li.product .woo-type8 .product-thumb a.button.product_type_variable:hover:before, ul.products li.product .woo-type8 .product-thumb a.added_to_cart.wc-forward:hover:before, ul.products li.product .woo-type8 .product-thumb a.add_to_wishlist:hover:before, ul.products li.product .woo-type8 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:before, ul.products li.product .woo-type8 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:before, ul.products li.product:hover .woo-type8 .product-details h5 a:hover{color:#fea301;}ul.products li.product .woo-type10 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type10 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type10 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type10 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type10 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product:hover .woo-type10 .product-details{background-color:#fea301;}ul.products li.product:hover .woo-type10 .product-wrapper{border-color:#fea301;}ul.products li.product:hover .woo-type10 .product-details:before, ul.products li.product:hover .woo-type10 .product-details:after{border-bottom-color:#fea301;}ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woocommerce .woo-type11 div.product .woocommerce-tabs ul.tabs li.active a:after, ul.products li.product .woo-type11 .product-details, .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button:hover, .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button:hover{background-color:#fea301;}ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button:before, ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple:before, ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable:before, ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward:before, ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist:before, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before, .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button, .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button{color:#fea301;}.woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button:hover, .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button:hover{border-color:#fea301;}.woo-type12 ul.products li.product .product-thumb a.add_to_cart_button, .woo-type12 ul.products li.product .product-thumb a.button.product_type_simple, .woo-type12 ul.products li.product .product-thumb a.button.product_type_variable, .woo-type12 ul.products li.product .product-thumb a.added_to_cart.wc-forward, .woo-type12 ul.products li.product .product-thumb a.add_to_wishlist, .woo-type12 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a, .woo-type12 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a, .woo-type12 ul.products li.product:hover .product-details, .woo-type12 ul.products li.product .product-details h5:after{background-color:#fea301;}ul.products li.product .woo-type13 .product-details h5:before{background-color:#fea301;}ul.products li.product .woo-type13 .product-thumb a.add_to_cart_button:hover:before, ul.products li.product .woo-type13 .product-thumb a.button.product_type_simple:hover:before, ul.products li.product .woo-type13 .product-thumb a.button.product_type_variable:hover:before, ul.products li.product .woo-type13 .product-thumb a.added_to_cart.wc-forward:hover:before, ul.products li.product .woo-type13 .product-thumb a.add_to_wishlist:hover:before, ul.products li.product .woo-type13 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:before, ul.products li.product .woo-type13 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:before, ul.products li.product:hover .woo-type13 .product-details h5 a, .woocommerce ul.products li.product .woo-type13 .product-buttons-wrapper a.yith-wcqv-button:hover:after, .woocommerce ul.products li.product .woo-type13 .product-buttons-wrapper a.yith-woocompare-button:hover:after{color:#fea301;}ul.products li.product:hover .woo-type14 .product-details, ul.products li.product .woo-type14 .product-details h5:before, ul.products li.product:hover .woo-type14 .product-details h5:after{background-color:#fea301;}ul.products li.product:hover .woo-type14 .product-details h5:after{border-color:#fea301;}ul.products li.product .woo-type16 .product-wrapper:before, ul.products li.product .woo-type16 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type16 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type16 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type16 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type16 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type16 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type16 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type16.woocommerce .shop_table th, .woo-type16 .woocommerce .shop_table th, .woo-type16.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after{background-color:#fea301;}ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button:hover:after, ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple:hover:after, ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable:hover:after, ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward:hover:after, ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist:hover:after, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:after, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:after, ul.products li.product:hover .woo-type17 .product-details, .woocommerce ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:hover:after, .woocommerce ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:hover:after{background-color:#fea301;}ul.products li.product:hover .woo-type17 .product-wrapper, ul.products li.product:hover .woo-type17 .product-thumb a.add_to_cart_button:after, ul.products li.product:hover .woo-type17 .product-thumb a.button.product_type_simple:after, ul.products li.product:hover .woo-type17 .product-thumb a.button.product_type_variable:after, ul.products li.product:hover .woo-type17 .product-thumb a.added_to_cart.wc-forward:after, ul.products li.product:hover .woo-type17 .product-thumb a.add_to_wishlist:after, ul.products li.product:hover .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:after, ul.products li.product:hover .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:after, ul.products li.product .woo-type17 .product-details h5 a:after, ul.products li.product-category .woo-type17 .product-details h5:after, ul.products li.product .woo-type17 .price, .woocommerce ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:after, .woocommerce ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:after{border-color:#fea301;}ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button:before, ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple:before, ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable:before, ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward:before, ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist:before, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before, ul.products li.product .woo-type17 .product-details h5 a, ul.products li.product-category .woo-type17 .product-details h5, ul.products li.product-category .woo-type17 .product-details h5 .count, ul.products li.product .woo-type17 .product-details .product-price .amount, ul.products li.product .woo-type17 .product-details span.price, ul.products li.product .woo-type17 .product-details span.price del, ul.products li.product .woo-type17 .product-details span.price del .amount, ul.products li.product .woo-type17 .product-details span.price ins, ul.products li.product .woo-type17 .product-details span.price ins .amount, .woo-type17 .widget.woocommerce ul li:hover:before, .woocommerce ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:before, .woocommerce ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:before{color:#fea301;}ul.products li.product .woo-type20 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type20 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type20 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type20 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type20 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product .woo-type20 .product-wrapper:after, .woo-type20.woocommerce ul.products li.product .product-details h5, .woocommerce ul.products li.product .woo-type20 .product-details h5, ul.products li.product-category .woo-type20 .product-wrapper h3, .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-wcqv-button, .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-woocompare-button{border-color:#fea301;}ul.products li.product .woo-type20 .product-thumb a.add_to_cart_button:before, ul.products li.product .woo-type20 .product-thumb a.button.product_type_simple:before, ul.products li.product .woo-type20 .product-thumb a.button.product_type_variable:before, ul.products li.product .woo-type20 .product-thumb a.added_to_cart.wc-forward:before, ul.products li.product .woo-type20 .product-thumb a.add_to_wishlist:before, ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before, ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before, ul.products li.product .woo-type20 .product-details h5 a, ul.products li.product-category .woo-type20 .product-details h5, ul.products li.product-category .woo-type20 .product-details h5 .count, ul.products li.product .woo-type20 .product-details .product-price .amount, ul.products li.product .woo-type20 .product-details span.price, ul.products li.product .woo-type20 .product-details span.price del, ul.products li.product .woo-type20 .product-details span.price del .amount, ul.products li.product .woo-type20 .product-details span.price ins, ul.products li.product .woo-type20 .product-details span.price ins .amount, ul.products li.product .woo-type20 .product-details .product-rating-wrapper .star-rating:before, ul.products li.product .woo-type20 .product-details .product-rating-wrapper .star-rating span:before, .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-wcqv-button:before, .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-woocompare-button:before{color:#fea301;}.woocommerce ul.products li.product .woo-type21 .product-thumb a.add_to_cart_button:hover, .woocommerce ul.products li.product .woo-type21 .product-thumb a.button.product_type_simple:hover, .woocommerce ul.products li.product .woo-type21 .product-thumb a.button.product_type_variable:hover, .woocommerce ul.products li.product .woo-type21 .product-thumb a.added_to_cart.wc-forward:hover, .woocommerce ul.products li.product .woo-type21 .product-thumb a.add_to_wishlist:hover, .woocommerce ul.products li.product .woo-type21 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, .woocommerce ul.products li.product .woo-type21 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type21.woocommerce ul.products li.product .product-thumb a.add_to_cart_button:hover, .woo-type21.woocommerce ul.products li.product .product-thumb a.button.product_type_simple:hover, .woo-type21.woocommerce ul.products li.product .product-thumb a.button.product_type_variable:hover, .woo-type21.woocommerce ul.products li.product .product-thumb a.added_to_cart.wc-forward:hover, .woo-type21.woocommerce ul.products li.product .product-thumb a.add_to_wishlist:hover, .woo-type21.woocommerce ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, .woo-type21.woocommerce ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type21 .woocommerce a.button:hover, .woo-type21 .woocommerce button.button:hover, .woo-type21 .woocommerce button:hover, .woo-type21 .woocommerce input.button:hover, .woo-type21 .woocommerce input[type=button]:hover, .woo-type21 .woocommerce input[type=submit]:hover, .woo-type21 .woocommerce #respond input#submit:hover, .woo-type21 .woocommerce a.button.alt:hover, .woo-type21 .woocommerce button.button.alt:hover, .woo-type21 .woocommerce input.button.alt:hover, .woo-type21 .woocommerce #respond input#submit.alt:hover, .woo-type21 .woocommerce .product .summary .add_to_wishlist:hover, .woo-type21 .woocommerce .wishlist_table .add_to_cart.button:hover, .woo-type21 .woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover, .woo-type21 .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover, .woo-type21 .woocommerce .wishlist_table a.ask-an-estimate-button:hover, .woo-type21 .woocommerce .wishlist-title a.show-title-form:hover, .woo-type21 .woocommerce .hidden-title-form a.hide-title-form:hover, .woo-type21 .woocommerce .yith-wcwl-wishlist-new button:hover, .woo-type21 .woocommerce .wishlist_manage_table a.create-new-wishlist:hover, .woo-type21 .woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover, .woo-type21 .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover, .woo-type21 .woocommerce .cart input.button:hover, .woo-type21.woocommerce a.button:hover, .woo-type21.woocommerce button.button:hover, .woo-type21.woocommerce button:hover, .woo-type21.woocommerce input.button:hover, .woo-type21.woocommerce input[type=button]:hover, .woo-type21.woocommerce input[type=submit]:hover, .woo-type21.woocommerce #respond input#submit:hover, .woo-type21.woocommerce a.button.alt:hover, .woo-type21.woocommerce button.button.alt:hover, .woo-type21.woocommerce input.button.alt:hover, .woo-type21.woocommerce #respond input#submit.alt:hover, .woo-type21.woocommerce .product .summary .add_to_wishlist:hover, .woo-type21.woocommerce .wishlist_table .add_to_cart.button:hover, .woo-type21.woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover, .woo-type21.woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover, .woo-type21.woocommerce .wishlist_table a.ask-an-estimate-button:hover, .woo-type21.woocommerce .wishlist-title a.show-title-form:hover, .woo-type21.woocommerce .hidden-title-form a.hide-title-form:hover, .woo-type21.woocommerce .yith-wcwl-wishlist-new button:hover, .woo-type21.woocommerce .wishlist_manage_table a.create-new-wishlist:hover, .woo-type21.woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover, .woo-type21.woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover, .woo-type21.woocommerce .cart input.button:hover, .woo-type21 .woocommerce .product .summary .add_to_wishlist:hover:before, .woo-type21.woocommerce .product .summary .add_to_wishlist:hover:before{background-color:#fea301;}.woo-type21 .woocommerce .product .summary .add_to_wishlist:hover, .woo-type21.woocommerce .product .summary .add_to_wishlist:hover{color:#fea301;}.dt-skin-secondary-color{color:#e49200;}.menu-trigger.menu-trigger-icon:hover{background-color:#e49200;}.dt-skin-secondary-bg, div[class*="dt-skin-secondary-bg-opaque"]:not(.ult-vc-hide-row)::before, div[class*="dt-skin-secondary-bg-opaque"] .upb_row_bg::before, section[class*="dt-skin-secondary-bg-opaque"]::before, input[type="submit"]:hover, button:hover, input[type="reset"]:hover, .mz-blog .comments a:hover, .mz-blog div.vc_gitem-post-category-name:hover, .dt-sc-infinite-portfolio-load-more:hover, .dt-sc-button.filled:hover, .dt-sc-button.with-icon.icon-right.type1:hover, .dt-sc-counter.type2:hover .dt-sc-couter-icon-holder, .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="submit"]:hover, .skin-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:before, .skin-highlight .dt-sc-testimonial.type6:after, .dt-sc-team-social.rounded-square li a:hover, .dt-sc-video-wrapper .video-overlay-inner a:hover, .dt-sc-button.dt-sc-readmore-link:hover{background-color:#e49200;}.dt-skin-secondary-border, .dt-sc-contact-info.type5 .dt-sc-contact-icon, .dt-sc-contact-info.type5 .dt-sc-contact-icon:before, .dt-sc-contact-info.type5 .dt-sc-contact-icon:after, .dt-sc-image-caption.type2:hover .dt-sc-image-content, .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="email"], .dt-sc-sociable.hexagon-with-border li, .dt-sc-sociable.hexagon-with-border li:before, .dt-sc-sociable.hexagon-with-border li:after{border-color:#e49200;}.error404 .type2 a.dt-sc-back:hover, .error404 .type4 .dt-sc-newsletter-section input[type="submit"]:hover{background-color:#e49200;}#item-header-content #item-meta > #item-buttons .group-button:hover, #buddypress .activity-list li.load-more a:hover, #buddypress .activity-list li.load-newest a:hover{background-color:#e49200;}#bbpress-forums #subscription-toggle a.subscription-toggle:hover, .bbp-submit-wrapper #bbp_topic_submit:hover{background-color:#e49200;}#tribe-bar-form .tribe-bar-submit input[type="submit"]:hover, .tribe-events-read-more:hover, #tribe-events .tribe-events-button:hover, .tribe-events-button:hover, .tribe-events-back > a:hover, .datepicker thead tr:first-child th:hover, .datepicker tfoot tr th:hover, #tribe_events_filters_toggle:hover{background-color:#e49200;}.tribe-grid-header .tribe-week-today{background-color:#e49200;}.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce button:hover, .woocommerce input.button:hover, .woocommerce input[type=button]:hover, .woocommerce input[type=submit]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce .product .summary .add_to_wishlist:hover, .woocommerce .wishlist_table .add_to_cart.button:hover, .woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover, .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover, .woocommerce .wishlist_table a.ask-an-estimate-button:hover, .woocommerce .wishlist-title a.show-title-form:hover, .woocommerce .hidden-title-form a.hide-title-form:hover, .woocommerce .yith-wcwl-wishlist-new button:hover, .woocommerce .wishlist_manage_table a.create-new-wishlist:hover, .woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover, .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover, .woocommerce .cart input.button:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page button:hover, .woocommerce-page input.button:hover, .woocommerce-page input[type=button]:hover, .woocommerce-page input[type=submit]:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page .product .summary .add_to_wishlist:hover, .woocommerce-page .wishlist_table .add_to_cart.button:hover, .woocommerce-page .yith-wcwl-add-button a.add_to_wishlist:hover, .woocommerce-page .yith-wcwl-popup-button a.add_to_wishlist:hover, .woocommerce-page .wishlist_table a.ask-an-estimate-button:hover, .woocommerce-page .wishlist-title a.show-title-form:hover, .woocommerce-page .hidden-title-form a.hide-title-form:hover, .woocommerce-page .yith-wcwl-wishlist-new button:hover, .woocommerce-page .wishlist_manage_table a.create-new-wishlist:hover, .woocommerce-page .wishlist_manage_table button.submit-wishlist-changes:hover, .woocommerce-page .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover, .woocommerce-page .cart input.button:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt[disabled]:disabled, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt[disabled]:disabled, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt[disabled]:disabled, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt[disabled]:disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt[disabled]:disabled:hover, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt[disabled]:disabled:hover, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt[disabled]:disabled:hover, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt[disabled]:disabled:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover{background-color:#e49200;}ul.products li.product .woo-type4 .product-thumb a.add_to_cart_button:hover:after, ul.products li.product .woo-type4 .product-thumb a.button.product_type_simple:hover:after, ul.products li.product .woo-type4 .product-thumb a.button.product_type_variable:hover:after, ul.products li.product .woo-type4 .product-thumb a.added_to_cart.wc-forward:hover:after, ul.products li.product .woo-type4 .product-thumb a.add_to_wishlist:hover:after, ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:after, ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:after{background-color:#e49200;}ul.products li.product:hover .woo-type8 .product-wrapper{border-color:#e49200;}ul.products li.product .woo-type10 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type10 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type10 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type10 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type10 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type10.woocommerce ul.products li.product .featured-tag, .woo-type10 .woocommerce ul.products li.product .featured-tag, .woo-type10.woocommerce.single-product .featured-tag, .woocommerce ul.products li.product .woo-type10 .product-buttons-wrapper a.yith-wcqv-button:hover, .woocommerce ul.products li.product .woo-type10 .product-buttons-wrapper a.yith-woocompare-button:hover{background-color:#e49200;}ul.products li.product .woo-type10 .featured-tag:after, ul.products li.product:hover .woo-type10 .featured-tag:after, .woo-type10.woocommerce.single-product .featured-tag:after{border-color:#e49200;}ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product:hover .woo-type11 .product-wrapper:before, ul.products li.product:hover .woo-type11 .product-wrapper:after, .woocommerce ul.products li.product .woo-type11 .product-thumb, .woocommerce ul.products li.product .woo-type11 .product-thumb, ul.products li.product-category .woo-type11 a img, .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button, .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button{border-color:#e49200;}.woo-type12 ul.products li.product .product-thumb a.add_to_cart_button:hover, .woo-type12 ul.products li.product .product-thumb a.button.product_type_simple:hover, .woo-type12 ul.products li.product .product-thumb a.button.product_type_variable:hover, .woo-type12 ul.products li.product .product-thumb a.added_to_cart.wc-forward:hover, .woo-type12 ul.products li.product .product-thumb a.add_to_wishlist:hover, .woo-type12 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, .woo-type12 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type12 ul.products li.product:hover .product-details h5:after, .woocommerce ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-wcqv-button:hover, .woocommerce ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-woocompare-button:hover{background-color:#e49200;}.woo-type12 ul.products li.product:hover .product-wrapper{border-color:#e49200;}ul.products li.product .woo-type14 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type14 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type14 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type14 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type14 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type14 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type14 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover{background-color:#e49200;}.woo-type17.woocommerce ul.products li.product .featured-tag, .woo-type17 .woocommerce ul.products li.product .featured-tag, .woo-type17.woocommerce.single-product .featured-tag{background-color:#e49200;}ul.products li.product .woo-type17 .featured-tag:after, ul.products li.product:hover .woo-type17 .featured-tag:after, .woo-type17.woocommerce.single-product .featured-tag:after{border-color:#e49200;}.woo-type20.woocommerce .shop_table th, .woo-type20 .woocommerce .shop_table th, .woo-type20.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after{background-color:#e49200;}.woo-type20 ul.products li.product:hover .product-wrapper:after, .woo-type20 div.product div.images img{border-color:#e49200;}.woo-type20.woocommerce-checkout #payment ul.payment_methods li a:hover{color:#e49200;}.dt-skin-tertiary-color{color:#feb533;}.dt-skin-tertiary-bg, .dt-sc-triangle-title:before, .dt-sc-icon-box.type10 .icon-wrapper:after{background-color:#feb533;}.dt-skin-tertiary-border{border-color:#feb533;}.main-title-section h1, h1.simple-title{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:30px;font-weight:300;letter-spacing:0.5px;text-align:inherit;text-transform:none;color:#ffffff;}div.breadcrumb a{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;text-align:inherit;text-transform:none;color:#eaeaea;}body{font-family:"Open Sans", Helvetica, Arial, sans-serif;font-size:16px;font-weight:300;line-height:28px;text-align:inherit;text-transform:none;color:#353535;}h1{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:30px;font-weight:300;letter-spacing:0.5px;text-align:inherit;text-transform:none;color:#222328;}h2{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:24px;font-weight:300;letter-spacing:0.5px;text-align:inherit;text-transform:none;color:#222328;}h3{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;font-weight:300;letter-spacing:0.5px;text-align:inherit;text-transform:none;color:#222328;}h4{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:16px;font-weight:300;letter-spacing:0.5px;text-align:inherit;text-transform:none;color:#222328;}h5{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:16px;font-weight:300;letter-spacing:0.5px;text-align:inherit;text-transform:none;color:#222328;}h6{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;font-weight:300;letter-spacing:0.5px;text-align:inherit;text-transform:none;color:#757575;}div.footer-widgets h3.widgettitle{font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;font-weight:700;letter-spacing:0px;line-height:36px;text-align:left;text-transform:none;color:#222328;}#footer, .footer-copyright, div.footer-widgets .widget{font-family:"Open Sans", Helvetica, Arial, sans-serif;font-size:14px;font-weight:300;letter-spacing:0px;line-height:24px;text-align:inherit;text-transform:none;color:#757575;}
</style>
<script type='text/javascript'>
/* <![CDATA[ */
var cccTheme = {"General":{"borderWidth":"1px","borderColor":"rgba(0,0,0,0.15)","priceText":"#202447","showLogo":true,"showChangePercent":true,"enableMarquee":true},"Header":[],"Followers":[],"Data":[],"Chart":{"fillColor":"rgba(255,255,255,0)","borderColor":"#fea301","labelColor":"#000000","labelBackground":"#feb533"},"Trend":[],"Currency":{"color":"#000000"},"Menu":[],"EvenRow":{"background":"#ffffff","borderColor":"rgba(0,0,0,0.1)"},"OddRow":{"background":"rgba(0,0,0,0.03)","borderColor":"rgba(0,0,0,0.1)"},"Tile":{"borderColor":"rgba(0,0,0,0.1)"},"Tabs":{"background":"#f5f5f5","color":"#000000","activeBackground":"#ffffff","activeColor":"#000000","borderColor":"rgba(0,0,0,0.1)"},"Row":[],"BigPrice":{"color":"#000000","symbolColor":"#000000"},"SmallPrice":{"color":"#202447","symbolColor":"#202447"},"Highlights":{"borderColor":"rgba(0,0,0,0.1)"},"Rows":[],"Form":[]};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min8c43.js?ver=5.4.7.1'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min8c43.js?ver=5.4.7.1'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate.mina325.js?ver=3.16.22'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/modernizr.custom8e83.js?ver=4.9.10'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.10" />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embeda736.json?url=https%3A%2F%2Fcryptap.dttheme.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedaffc?url=https%3A%2F%2Fcryptap.dttheme.com%2F&amp;format=xml" />
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://cryptap.dttheme.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.7.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){                                 
                        try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                            if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                  
                        }catch(d){console.log("Failure at Presize of Slider:"+d)}                       
                    };</script>
<style type="text/css" data-type="vc_custom-css">.dt-sc-tabs-horizontal-container.type2 ul.dt-sc-tabs-horizontal > li > a { border-color: #fafafa; }</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1522748979009{padding-bottom: 50px !important;}.vc_custom_1522748894077{background-color: #fafafa !important;}.vc_custom_1518010662097{padding-top: 60px !important;}.vc_custom_1522649968653{padding-top: 100px !important;padding-bottom: 100px !important;}.vc_custom_1522648686861{background-color: #1f202d !important;}.vc_custom_1522656919731{padding-top: 70px !important;background-color: #fafafa !important;}.vc_custom_1522656930198{padding-top: 50px !important;background-color: #fafafa !important;}.vc_custom_1518840635046{padding-top: 70px !important;}.vc_custom_1477305223597{padding-top: 80px !important;}.vc_custom_1522650831467{background-color: #f9f9fa !important;}.vc_custom_1521280911550{margin-bottom: 0px !important;}.vc_custom_1520316401658{margin-right: 20px !important;margin-bottom: 20px !important;}.vc_custom_1521281065448{margin-bottom: 0px !important;}.vc_custom_1519043350245{padding-right: 50px !important;}.vc_custom_1520327495797{margin-bottom: 0px !important;}.vc_custom_1520318267970{margin-right: 20px !important;margin-bottom: 20px !important;}.vc_custom_1475650025976{margin-bottom: 20px !important;}.vc_custom_1475650025976{margin-bottom: 20px !important;}.vc_custom_1522654500332{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1516344061424{margin-bottom: 0px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><style id='cryptapp-custom-inline-inline-css' type='text/css'>
.vc_custom_1519130528395{border-bottom-width: 1px !important;border-bottom-color: rgba(255,255,255,0.1) !important;border-bottom-style: solid !important;}

div#dt-1517999087618-019b7203-d6cc img { width:203px;}
@media only screen and (max-width: 767px) {
div#dt-1517999087618-019b7203-d6cc img { width:203px; }
}

div#dt-1517999210003-17cd21a3-7265 ul.dt-primary-nav > li > a {font-size:16px;text-transform:capitalize;color:#ffffff;}


                            div#dt-1517999210003-17cd21a3-7265 ul.dt-primary-nav > li:hover > a, 
                            div#dt-1517999210003-17cd21a3-7265 ul.dt-primary-nav > li.current_page_item > a, 
                            div#dt-1517999210003-17cd21a3-7265 ul.dt-primary-nav > li.current-menu-item > a,
                            div#dt-1517999210003-17cd21a3-7265 ul.dt-primary-nav > li.current-page-ancestor > a,
                            div#dt-1517999210003-17cd21a3-7265 ul.dt-primary-nav > li.current-menu-ancestor > a {color:#fea301;}

div#dt-1517999210003-17cd21a3-7265 ul > li:not(.has-mega-menu) ul.sub-menu li > a{text-transform:capitalize;text-align:;color:#ffffff;background-color:#fea301;}


                                div#dt-1517999210003-17cd21a3-7265 ul.sub-menu li:hover > a,
                                div#dt-1517999210003-17cd21a3-7265 ul.sub-menu li.current-menu-item > a,
                                div#dt-1517999210003-17cd21a3-7265 ul.sub-menu li.current-page-item > a {color:#e49200;background-color:#fea301;}

div#dt-1517999210003-17cd21a3-7265 ul.dt-primary-nav > li { padding:25px 0px}
div#dt-1517999210003-17cd21a3-7265 a {font-family:Varela; font-weight:400; font-style:normal;}div#dt-1517999210003-17cd21a3-7265 ul.sub-menu li > a {font-family:Varela; font-weight:400; font-style:normal;}@media only screen and (max-width: 1199px) {
    div#dt-1517999210003-17cd21a3-7265{ display: none; }
    div#dt-1517999210003-17cd21a3-7265-mobile { display: block; }
div#dt-1517999210003-17cd21a3-7265-mobile .menu-trigger > span {color:#000000}
div#dt-1517999210003-17cd21a3-7265-mobile .menu-trigger > i {color:#000000}
}
@media only screen and (min-width: 1200px) {
    div#dt-1517999210003-17cd21a3-7265{ display: inline-block; }
    div#dt-1517999210003-17cd21a3-7265.center { display: table; }
    div#dt-1517999210003-17cd21a3-7265-mobile, div#dt-1517999210003-17cd21a3-7265 li.go-back, div#dt-1517999210003-17cd21a3-7265 li.see-all { display: none; }
}

div[id="1518006592985-44c435db-2694"] { height:30px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518006592985-44c435db-2694"] { height:30px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518006592985-44c435db-2694"] { height:30px } }
@media (max-width: 767px) { div[id="1518006592985-44c435db-2694"] { height:30px } }

div[id="1518009248087-37393f01-d0ef"] { height:100px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518009248087-37393f01-d0ef"] { height:100px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518009248087-37393f01-d0ef"] { height:100px } }
@media (max-width: 767px) { div[id="1518009248087-37393f01-d0ef"] { height:100px } }

div[id="1522748869101-d9af8581-0583"] { height:70px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1522748869101-d9af8581-0583"] { height:70px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1522748869101-d9af8581-0583"] { height:70px } }
@media (max-width: 767px) { div[id="1522748869101-d9af8581-0583"] { height:70px } }

div[id="1518010512081-be437e97-6c8d"] { height:100px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518010512081-be437e97-6c8d"] { height:100px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518010512081-be437e97-6c8d"] { height:100px } }
@media (max-width: 767px) { div[id="1518010512081-be437e97-6c8d"] { height:100px } }

div[id="1518010951646-0c7613e6-7f7f"] { height:15px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518010951646-0c7613e6-7f7f"] { height:15px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518010951646-0c7613e6-7f7f"] { height:15px } }
@media (max-width: 767px) { div[id="1518010951646-0c7613e6-7f7f"] { height:15px } }

div[id="1521282696792-a068a381-759f"] { height:100px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1521282696792-a068a381-759f"] { height:100px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1521282696792-a068a381-759f"] { height:100px } }
@media (max-width: 767px) { div[id="1521282696792-a068a381-759f"] { height:100px } }

div[id="1521461462083-d4bae4c9-a05f"] { height:30px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1521461462083-d4bae4c9-a05f"] { height:30px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1521461462083-d4bae4c9-a05f"] { height:30px } }
@media (max-width: 767px) { div[id="1521461462083-d4bae4c9-a05f"] { height:30px } }

div[id="1518069889688-b734c1f8-ec68"] { height:100px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518069889688-b734c1f8-ec68"] { height:100px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518069889688-b734c1f8-ec68"] { height:100px } }
@media (max-width: 767px) { div[id="1518069889688-b734c1f8-ec68"] { height:100px } }

div[id="1518673693248-9c04debc-2f92"] { height:60px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518673693248-9c04debc-2f92"] { height:60px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518673693248-9c04debc-2f92"] { height:60px } }
@media (max-width: 767px) { div[id="1518673693248-9c04debc-2f92"] { height:60px } }

div[id="1518067894913-3ff7e719-0b23"] { height:100px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518067894913-3ff7e719-0b23"] { height:100px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518067894913-3ff7e719-0b23"] { height:100px } }
@media (max-width: 767px) { div[id="1518067894913-3ff7e719-0b23"] { height:50px } }

div[id="1518784116438-6d9daba3-3c6b"] { height:50px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518784116438-6d9daba3-3c6b"] { height:50px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518784116438-6d9daba3-3c6b"] { height:50px } }
@media (max-width: 767px) { div[id="1518784116438-6d9daba3-3c6b"] { height:50px } }

div[id="1518783895934-1ed5bdcc-f43d"] { height:15px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518783895934-1ed5bdcc-f43d"] { height:15px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518783895934-1ed5bdcc-f43d"] { height:15px } }
@media (max-width: 767px) { div[id="1518783895934-1ed5bdcc-f43d"] { height:15px } }

div[id="1518069732103-6fc9a48a-54e8"] { height:30px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518069732103-6fc9a48a-54e8"] { height:30px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518069732103-6fc9a48a-54e8"] { height:30px } }
@media (max-width: 767px) { div[id="1518069732103-6fc9a48a-54e8"] { height:30px } }

div[id="1518784938932-132f3a6f-864f"] { height:25px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518784938932-132f3a6f-864f"] { height:25px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518784938932-132f3a6f-864f"] { height:25px } }
@media (max-width: 767px) { div[id="1518784938932-132f3a6f-864f"] { height:25px } }

div[id="1518784923185-7e4c4da7-cff2"] { height:25px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518784923185-7e4c4da7-cff2"] { height:25px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518784923185-7e4c4da7-cff2"] { height:25px } }
@media (max-width: 767px) { div[id="1518784923185-7e4c4da7-cff2"] { height:25px } }

div[id="1518074793155-83a14c98-179f"] { height:25px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518074793155-83a14c98-179f"] { height:25px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518074793155-83a14c98-179f"] { height:25px } }
@media (max-width: 767px) { div[id="1518074793155-83a14c98-179f"] { height:25px } }

div[id="1518077293595-0a65c7a0-a53f"] { height:45px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518077293595-0a65c7a0-a53f"] { height:45px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518077293595-0a65c7a0-a53f"] { height:45px } }
@media (max-width: 767px) { div[id="1518077293595-0a65c7a0-a53f"] { height:45px } }

div[id="1518077437407-ef295caf-2322"] { height:45px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518077437407-ef295caf-2322"] { height:45px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518077437407-ef295caf-2322"] { height:45px } }
@media (max-width: 767px) { div[id="1518077437407-ef295caf-2322"] { height:45px } }

div[id="1517983040497-fd3fba69-00d3"] { height:60px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1517983040497-fd3fba69-00d3"] { height:60px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1517983040497-fd3fba69-00d3"] { height:60px } }
@media (max-width: 767px) { div[id="1517983040497-fd3fba69-00d3"] { height:60px } }

div[id="1521618065710-b772ccc7-3105"] { height:80px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1521618065710-b772ccc7-3105"] { height:80px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1521618065710-b772ccc7-3105"] { height:80px } }
@media (max-width: 767px) { div[id="1521618065710-b772ccc7-3105"] { height:80px } }

@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1522654600804-52b5170c-e5ad"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1522654600804-52b5170c-e5ad"] { height:20px } }

div[id="1516344064965-b0c0326f-1b58"] { height:20px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1516344064965-b0c0326f-1b58"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1516344064965-b0c0326f-1b58"] { height:20px } }
@media (max-width: 767px) { div[id="1516344064965-b0c0326f-1b58"] { height:10px } }

div[id="1521617808613-14f468d1-9ddb"] { height:80px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1521617808613-14f468d1-9ddb"] { height:80px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1521617808613-14f468d1-9ddb"] { height:80px } }
@media (max-width: 767px) { div[id="1521617808613-14f468d1-9ddb"] { height:80px } }

div[id="1518853751812-8fc3b0ea-188d"] { height:70px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518853751812-8fc3b0ea-188d"] { height:70px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518853751812-8fc3b0ea-188d"] { height:70px } }
@media (max-width: 767px) { div[id="1518853751812-8fc3b0ea-188d"] { height:70px } }

div[id="1518853769981-ed531b61-4819"] { height:20px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518853769981-ed531b61-4819"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518853769981-ed531b61-4819"] { height:20px } }
@media (max-width: 767px) { div[id="1518853769981-ed531b61-4819"] { height:20px } }

div[id="1519107658204-39a3017c-30e9"] { height:80px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1519107658204-39a3017c-30e9"] { height:80px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1519107658204-39a3017c-30e9"] { height:80px } }
@media (max-width: 767px) { div[id="1519107658204-39a3017c-30e9"] { height:80px } }

div[id="1519107686000-b2fc3b45-306c"] { height:50px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1519107686000-b2fc3b45-306c"] { height:50px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1519107686000-b2fc3b45-306c"] { height:50px } }
@media (max-width: 767px) { div[id="1519107686000-b2fc3b45-306c"] { height:50px } }

div[id="1518853907523-01e8436e-ee71"] { height:50px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518853907523-01e8436e-ee71"] { height:50px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518853907523-01e8436e-ee71"] { height:50px } }
@media (max-width: 767px) { div[id="1518853907523-01e8436e-ee71"] { height:50px } }

div[id="1518003695256-bce76072-35f9"] { height:50px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518003695256-bce76072-35f9"] { height:50px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518003695256-bce76072-35f9"] { height:50px } }
@media (max-width: 767px) { div[id="1518003695256-bce76072-35f9"] { height:50px } }

div[id="1518003233501-77f4e561-56a2"] { height:20px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518003233501-77f4e561-56a2"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518003233501-77f4e561-56a2"] { height:20px } }
@media (max-width: 767px) { div[id="1518003233501-77f4e561-56a2"] { height:20px } }


div#dt-1518002486094-7da84b25-b3bf ul.dt-custom-nav li a {font-size:16px;text-transform:capitalize;}

div#dt-1518002486094-7da84b25-b3bf ul.dt-custom-nav li a {color:#757575;}


                div#dt-1518002486094-7da84b25-b3bf ul.dt-custom-nav li a:hover,
                div#dt-1518002486094-7da84b25-b3bf ul.dt-custom-nav li.current_page_item > a,
                div#dt-1518002486094-7da84b25-b3bf ul.dt-custom-nav li.current-menu-item > a,
                div#dt-1518002486094-7da84b25-b3bf ul.dt-custom-nav li.current-page-ancestor > a,
                div#dt-1518002486094-7da84b25-b3bf ul.dt-custom-nav li.current-menu-ancestor > a {color:#fea301;}

div#dt-1518002486094-7da84b25-b3bf i.menu-item-icon { display:none; }
div[id="1518004427466-07a4cd5c-238f"] { height:20px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518004427466-07a4cd5c-238f"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518004427466-07a4cd5c-238f"] { height:20px } }
@media (max-width: 767px) { div[id="1518004427466-07a4cd5c-238f"] { height:20px } }


div#dt-1518002593407-98e9da90-9423 ul.dt-custom-nav li a {font-size:16px;text-transform:capitalize;}

div#dt-1518002593407-98e9da90-9423 ul.dt-custom-nav li a {color:#757575;}


                div#dt-1518002593407-98e9da90-9423 ul.dt-custom-nav li a:hover,
                div#dt-1518002593407-98e9da90-9423 ul.dt-custom-nav li.current_page_item > a,
                div#dt-1518002593407-98e9da90-9423 ul.dt-custom-nav li.current-menu-item > a,
                div#dt-1518002593407-98e9da90-9423 ul.dt-custom-nav li.current-page-ancestor > a,
                div#dt-1518002593407-98e9da90-9423 ul.dt-custom-nav li.current-menu-ancestor > a {color:#fea301;}

div#dt-1518002593407-98e9da90-9423 i.menu-item-icon { display:none; }
div[id="1518004429844-9c82d843-5ea4"] { height:20px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518004429844-9c82d843-5ea4"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518004429844-9c82d843-5ea4"] { height:20px } }
@media (max-width: 767px) { div[id="1518004429844-9c82d843-5ea4"] { height:20px } }


div#dt-1518002612687-f85a0fd2-1b6b ul.dt-custom-nav li a {font-size:16px;text-transform:capitalize;}

div#dt-1518002612687-f85a0fd2-1b6b ul.dt-custom-nav li a {color:#757575;}


                div#dt-1518002612687-f85a0fd2-1b6b ul.dt-custom-nav li a:hover,
                div#dt-1518002612687-f85a0fd2-1b6b ul.dt-custom-nav li.current_page_item > a,
                div#dt-1518002612687-f85a0fd2-1b6b ul.dt-custom-nav li.current-menu-item > a,
                div#dt-1518002612687-f85a0fd2-1b6b ul.dt-custom-nav li.current-page-ancestor > a,
                div#dt-1518002612687-f85a0fd2-1b6b ul.dt-custom-nav li.current-menu-ancestor > a {color:#fea301;}

div#dt-1518002612687-f85a0fd2-1b6b i.menu-item-icon { display:none; }
div[id="1518004432715-fea219e8-9712"] { height:20px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518004432715-fea219e8-9712"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518004432715-fea219e8-9712"] { height:20px } }
@media (max-width: 767px) { div[id="1518004432715-fea219e8-9712"] { height:20px } }

div[id="1525066228109-78b07103-7de9"] { height:50px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1525066228109-78b07103-7de9"] { height:50px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1525066228109-78b07103-7de9"] { height:50px } }
@media (max-width: 767px) { div[id="1525066228109-78b07103-7de9"] { height:50px } }

div[id="1525066588339-c04e3859-c7d6"] { height:20px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1525066588339-c04e3859-c7d6"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1525066588339-c04e3859-c7d6"] { height:20px } }
@media (max-width: 767px) { div[id="1525066588339-c04e3859-c7d6"] { height:20px } }


div#dt-1521696354904-a02e7971-44ed img { width:180px;}
@media only screen and (max-width: 767px) {
div#dt-1521696354904-a02e7971-44ed img { width:180px; }
}
div[id="1518003592060-eca5c948-25a6"] { height:20px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518003592060-eca5c948-25a6"] { height:20px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518003592060-eca5c948-25a6"] { height:20px } }
@media (max-width: 767px) { div[id="1518003592060-eca5c948-25a6"] { height:20px } }

div[id="1518003680574-f1ac7439-b4f9"] { height:15px }
@media only screen and (min-width:992px) and (max-width:1199px) { div[id="1518003680574-f1ac7439-b4f9"] { height:15px } }
@media only screen and (min-width:768px) and (max-width:991px) { div[id="1518003680574-f1ac7439-b4f9"] { height:15px } }
@media (max-width: 767px) { div[id="1518003680574-f1ac7439-b4f9"] { height:15px } }

</style>
<script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script></head>

<body class="home page-template-default page page-id-4 layout-wide page-with-slider no-breadcrumb wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
        
    <!-- **Wrapper** -->
    <div class="wrapper">
    
        <!-- ** Inner Wrapper ** -->
        <div class="inner-wrapper">    
<!-- ** Header Wrapper ** -->
<div id="header-wrapper">              
    
    <!-- **Header** -->
    <header id="header" class="header-top-absolute">

        <div class="container"><div id="header-8000" class="dt-header-tpl header-8000"><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1519130528395 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div id="dt-1517999087618-019b7203-d6cc" class="dt-logo-container logo-align-left">  <a href="/" rel="home"><img src="wp-content/themes/cryptapp/images/logoo.png" alt="CryptApp WordPress Theme"/></a></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-9"><div class="vc_column-inner " style=" text-align:right; "><div class="wpb_wrapper"><div data-menu="main-menu" id="dt-1517999210003-17cd21a3-7265" class="dt-header-menu mega-menu-page-equal flip-menu" data-nav-item-divider="none" data-nav-item-highlight="none" data-nav-item-display="simple"><div class="menu-container"><ul id="menu-main-menu" class="dt-primary-nav visual-nav"  data-menu="main-menu"> <li class="close-nav"></li> <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 dt-menu-item-20 "><a href="#slider" class="item-has-icon icon-position-left"><span data-hover="Home">Home</span></a></li>

            @if (Sentinel::check() && Sentinel::inRole('administrator'))
                            
                                <li id="menu-item-8439" class="external menu-item menu-item-type-custom menu-item-object-custom menu-item-8439 dt-menu-item-8439 "><a href="{{ route('users.index') }}" target="_blank" class="item-has-icon icon-position-left"><span data-hover="Users">Users</span></a></li>

                                <li id="menu-item-8439" class="external menu-item menu-item-type-custom menu-item-object-custom menu-item-8439 dt-menu-item-8439 "><a href="{{ route('roles.index') }}" target="_blank" class="item-has-icon icon-position-left"><span data-hover="Roles">Roles</span></a></li>

                            
                        @endif
<li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154 dt-menu-item-154 "><a href="#features" class="item-has-icon icon-position-left"><span data-hover="Features">Features</span></a></li>

<li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158 dt-menu-item-158 "><a href="#faq" class="item-has-icon icon-position-left"><span data-hover="First Steps">First Steps</span></a></li>

<li id="menu-item-7990" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7990 dt-menu-item-7990 "><a href="#pricing" class="item-has-icon icon-position-left"><span data-hover="Plans">Plans</span></a></li>

<li id="menu-item-8439" class="external menu-item menu-item-type-custom menu-item-object-custom menu-item-8439 dt-menu-item-8439 "><a href="#mailus" class="item-has-icon icon-position-left"><span data-hover="Contact">Contact</span></a></li>


<li id="menu-item-8439" class="external menu-item menu-item-type-custom menu-item-object-custom menu-item-8439 dt-menu-item-8439 "><a href="{{ route('steps.home') }}" class="item-has-icon icon-position-left"><span data-hover="Hedge Funds">Hedge Funds</span></a></li>



@if (Sentinel::check())
                            
                           

                            <li id="menu-item-8439" class="external menu-item menu-item-type-custom menu-item-object-custom menu-item-8439 dt-menu-item-8439 "><a href="{{ route('dashboard') }}" class="item-has-icon icon-position-left"><span data-hover="Login">Dashboard</span></a></li>

<li id="menu-item-8439" class="external menu-item menu-item-type-custom menu-item-object-custom menu-item-8439 dt-menu-item-8439 "><a href="{{ route('auth.logout') }}" class="item-has-icon icon-position-left"><span data-hover="Sign Up">Log Out</span></a></li>



                        @else

                                <li id="menu-item-8439" class="external menu-item menu-item-type-custom menu-item-object-custom menu-item-8439 dt-menu-item-8439 "><a href="{{ route('auth.login.form') }}" class="item-has-icon icon-position-left"><span data-hover="Login">Login</span></a></li>

<li id="menu-item-8439" class="external menu-item menu-item-type-custom menu-item-object-custom menu-item-8439 dt-menu-item-8439 "><a href="{{ route('auth.register.form') }}" class="item-has-icon icon-position-left"><span data-hover="Sign Up">Sign Up</span></a></li>
                                @endif









</ul> <div class="sub-menu-overlay"></div></div></div><div id="dt-1517999210003-17cd21a3-7265-mobile" class="mobile-nav-container mobile-nav-offcanvas-right" data-menu="main-menu">  <div class="menu-trigger menu-trigger-icon" data-menu="main-menu"><i class="fa fa-bars"></i><span>Menu</span>  </div>  <div class="mobile-menu" data-menu="main-menu"></div>  <div class="overlay"></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div></div>        </div>
    </header>
    @include('Centaur::notifications')
    <!-- **Header - End ** -->

    <!-- ** Slider ** -->

    
    <div id="slider">  <div id="dt-sc-rev-slider" class="dt-sc-main-slider"><link href="https://fonts.googleapis.com/css?family=Ubuntu:300%2C700%7COpen+Sans:400%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<div id="rev_slider_9_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.7.1 auto mode -->
    <div id="rev_slider_9_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7.1">
<ul>    <!-- SLIDE  -->
    <li data-index="rs-30" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="wp-content/plugins/revslider/admin/assets/images/transparent.png" data-bgcolor='linear-gradient(120deg,rgba(39,40,51,1)0%,rgba(39,40,51,1)0%,rgba(29,30,43,1)100%,rgba(29,30,43,1)100%)' style='background:linear-gradient(120deg,rgba(39,40,51,1)0%,rgba(39,40,51,1)0%,rgba(29,30,43,1)100%,rgba(29,30,43,1)100%)' alt="" title="Home"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption     rev_group" 
             id="slide-30-layer-3" 
             data-x="" 
             data-y="418" 
                        data-width="['505']"
            data-height="['102']"
 
            data-type="group" 
            data-responsive_offset="on" 

            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; min-width: 505px; max-width: 505px; max-width: 102px; max-width: 102px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
        <!-- LAYER NR. 2 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-5" 
             data-x="" 
             data-y="bottom" data-voffset="" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+910","speed":300,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 8;"><img src="wp-content/uploads/2018/03/c1.png" alt="" data-ww="64px" data-hh="90px" width="64" height="90" data-no-retina> </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-6" 
             data-x="103" 
             data-y="bottom" data-voffset="-1" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1150","speed":300,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 9;"><img src="wp-content/uploads/2018/03/c2.png" alt="" data-ww="64px" data-hh="96px" width="64" height="96" data-no-retina> </div>

        <!-- LAYER NR. 4 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-7" 
             data-x="213" 
             data-y="bottom" data-voffset="" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1350","speed":300,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 10;"><img src="wp-content/uploads/2018/03/c3.png" alt="" data-ww="71px" data-hh="90px" width="71" height="90" data-no-retina> </div>

        <!-- LAYER NR. 5 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-8" 
             data-x="332" 
             data-y="bottom" data-voffset="" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1620","speed":300,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 11;"><img src="wp-content/uploads/2018/03/c4.png" alt="" data-ww="64px" data-hh="90px" width="64" height="90" data-no-retina> </div>

        <!-- LAYER NR. 6 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-9" 
             data-x="right" data-hoffset="" 
             data-y="bottom" data-voffset="" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1820","speed":300,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 12;"><img src="wp-content/uploads/2018/03/c5.png" alt="" data-ww="67px" data-hh="90px" width="67" height="90" data-no-retina> </div>
        </div>

        <!-- LAYER NR. 7 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-1" 
             data-x="" 
             data-y="270" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":270,"speed":530,"sfxcolor":"#ffffff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 5; white-space: nowrap; font-size: 30px; line-height: 40px; font-weight: 300; color: #ffa200; letter-spacing: 0px;font-family:Ubuntu;">Genesys </div>

        <!-- LAYER NR. 8 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-2" 
             data-x="" 
             data-y="313" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":550,"speed":610,"sfxcolor":"#ffa200","sfx_effect":"blockfrombottom","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; white-space: nowrap; font-size: 56px; line-height: 64px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Ubuntu;">Trading Platform </div>

        <!-- LAYER NR. 9 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-4" 
             data-x="" 
             data-y="558" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":1940,"speed":1660,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 13; white-space: nowrap; font-size: 16px; line-height: 28px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">Get to know the live rates of all the <strong>crypto currency</strong> without any <br>delay. Pay with crypto currency in more than <strong>20000 stores.</strong> </div>

        <!-- LAYER NR. 10 -->
        <div class="tp-caption rev-btn  tp-resizeme" 
             id="slide-30-layer-10" 
             data-x="" 
             data-y="650" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="button" 
            data-responsive_offset="on" 

            data-frames='[{"delay":3220,"speed":810,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"250","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[35,35,35,35]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[35,35,35,35]"

            style="z-index: 14; white-space: nowrap; font-size: 16px; line-height: 50px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: px;font-family:Ubuntu;background-color:rgb(255,162,0);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">GET STARTED </div>

        <!-- LAYER NR. 11 -->
        <div class="tp-caption rev-btn  tp-resizeme" 
             id="slide-30-layer-11" 
             data-x="196" 
             data-y="650" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="button" 
            data-responsive_offset="on" 

            data-frames='[{"delay":3820,"speed":630,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"250","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[35,35,35,35]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[35,35,35,35]"

            style="z-index: 15; white-space: nowrap; font-size: 16px; line-height: 46px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: px;font-family:Ubuntu;border-color:rgb(255,255,255);border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">HOW IT WORKS </div>

        <!-- LAYER NR. 12 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-12" 
             data-x="right" data-hoffset="-53" 
             data-y="442" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":1190,"speed":920,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 16;"><img src="wp-content/uploads/2018/03/horizontal-screen.png" alt="" data-ww="714px" data-hh="353px" width="714" height="353" data-no-retina> </div>

        <!-- LAYER NR. 13 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-30-layer-13" 
             data-x="right" data-hoffset="21" 
             data-y="170" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":1630,"speed":790,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 17;"><img src="wp-content/uploads/2018/03/vertical-screen.png" alt="" data-ww="319px" data-hh="645px" width="319" height="645" data-no-retina> </div>

        <!-- LAYER NR. 14 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-7" 
             id="slide-30-layer-14" 
             data-x="739" 
             data-y="755" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":1870,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 18;"><img src="wp-content/uploads/2018/03/l8.png" alt="" data-ww="122px" data-hh="79px" width="122" height="79" data-no-retina> </div>

        <!-- LAYER NR. 15 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
             id="slide-30-layer-15" 
             data-x="1170" 
             data-y="392" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":2150,"speed":300,"frame":"0","from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 19;"><img src="wp-content/uploads/2018/03/l7.png" alt="" data-ww="91px" data-hh="99px" width="91" height="99" data-no-retina> </div>

        <!-- LAYER NR. 16 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
             id="slide-30-layer-16" 
             data-x="648" 
             data-y="198" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":2390,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 20;"><img src="wp-content/uploads/2018/03/l1.png" alt="" data-ww="42px" data-hh="45px" width="42" height="45" data-no-retina> </div>

        <!-- LAYER NR. 17 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
             id="slide-30-layer-17" 
             data-x="778" 
             data-y="198" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":2540,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 21;"><img src="wp-content/uploads/2018/03/l2.png" alt="" data-ww="74px" data-hh="109px" width="74" height="109" data-no-retina> </div>

        <!-- LAYER NR. 18 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
             id="slide-30-layer-18" 
             data-x="604" 
             data-y="281" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":2710,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 22;"><img src="wp-content/uploads/2018/03/l3.png" alt="" data-ww="50px" data-hh="30px" width="50" height="30" data-no-retina> </div>

        <!-- LAYER NR. 19 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-7" 
             id="slide-30-layer-19" 
             data-x="625" 
             data-y="361" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":2870,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 23;"><img src="wp-content/uploads/2018/03/l5.png" alt="" data-ww="60px" data-hh="66px" width="60" height="66" data-no-retina> </div>

        <!-- LAYER NR. 20 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-10" 
             id="slide-30-layer-20" 
             data-x="794" 
             data-y="367" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":3050,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 24;"><img src="wp-content/uploads/2018/03/l6.png" alt="" data-ww="31px" data-hh="53px" width="31" height="53" data-no-retina> </div>

        <!-- LAYER NR. 21 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" 
             id="slide-30-layer-21" 
             data-x="706" 
             data-y="251" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":3210,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 25;"><img src="wp-content/uploads/2018/03/l4.png" alt="" data-ww="50px" data-hh="102px" width="50" height="102" data-no-retina> </div>
    </li>
    <!-- SLIDE  -->
    <li data-index="rs-31" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://cryptap.dttheme.com/wp-content/uploads/2018/03/bg-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="wp-content/uploads/2018/03/bg.jpg"  alt="" title="bg"  width="1920" height="925" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 22 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-31-layer-1" 
             data-x="right" data-hoffset="-248" 
             data-y="bottom" data-voffset="" 
                        data-width="['none','none','none','none']"
            data-height="['none','none','none','none']"
 
            data-type="image" 
            data-responsive_offset="on" 

            data-frames='[{"delay":790,"speed":910,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 5;"><img src="wp-content/uploads/2018/03/hand.png" alt="" data-ww="808px" data-hh="673px" width="808" height="673" data-no-retina> </div>

        <!-- LAYER NR. 23 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-31-layer-2" 
             data-x="" 
             data-y="292" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":440,"speed":300,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;text-transform:uppercase;">Up to date, secure & reliable </div>

        <!-- LAYER NR. 24 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-31-layer-3" 
             data-x="" 
             data-y="331" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":180,"speed":640,"sfxcolor":"#ffa200","sfx_effect":"blockfrombottom","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">One Platform for your  </div>

        <!-- LAYER NR. 25 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-31-layer-4" 
             data-x="" 
             data-y="401" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":510,"speed":620,"sfxcolor":"#ffffff","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 8; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 700; color: #ffa200; letter-spacing: 0px;font-family:Open Sans;">Crypto Trading </div>

        <!-- LAYER NR. 26 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-31-layer-5" 
             data-x="" 
             data-y="509" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":860,"speed":310,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 28px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;"> </div>

        <!-- LAYER NR. 27 -->
        

        <!-- LAYER NR. 28 -->
        
    </li>
</ul>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                        if(htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        }else{
                            var htmlDiv = document.createElement("div");
                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                        }
                    </script>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                if(htmlDiv) {
                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                }else{
                    var htmlDiv = document.createElement("div");
                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                }
            </script>
        <script type="text/javascript">
if (setREVStartSize!==undefined) setREVStartSize(
    {c: '#rev_slider_9_1', gridwidth: [1200], gridheight: [925], sliderLayout: 'auto'});
            
var revapi9,
    tpj;    
(function() {           
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad)
        else
    onLoad();
    
    function onLoad() {             
        if (tpj===undefined) {
            tpj = jQuery;

            if("off" == "on") tpj.noConflict();     
        }
    if(tpj("#rev_slider_9_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_9_1");
    }else{
        revapi9 = tpj("#rev_slider_9_1").show().revolution({
            sliderType:"standard",
            jsFileLocation:"//cryptap.dttheme.com/wp-content/plugins/revslider/public/assets/js/",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                            mouseScrollReverse:"default",
                onHoverStop:"off",
                arrows: {
                    style:"gyges",
                    enable:true,
                    hide_onmobile:false,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"center",
                        h_offset:20,
                        v_offset:0
                    },
                    right: {
                        h_align:"right",
                        v_align:"center",
                        h_offset:20,
                        v_offset:0
                    }
                }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:1200,
            gridheight:925,
            lazyType:"none",
            parallax: {
                type:"mouse",
                origo:"enterpoint",
                speed:400,
                speedbg:0,
                speedls:0,
                levels:[2,4,6,8,10,-2,-4,-6,-8,-10,47,48,49,50,51,55],
            },
            shadow:0,
            spinner:"spinner0",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
        });
    }; /* END OF revapi call */
    
 }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
</script>
        </div><!-- END REVOLUTION SLIDER -->  </div></div><!-- ** Slider End ** -->

    <!-- ** Breadcrumb ** -->
    <!-- ** Breadcrumb End ** -->
</div><!-- ** Header Wrapper - End ** -->

<!-- **Main** -->
<div id="main">

    <!-- ** Container ** -->
    <div class="container">
        <!-- Primary -->
        <section id="primary" class="content-full-width">   <!-- #post-4 -->
<div id="post-4" class="post-4 page type-page status-publish hentry">
<div id="home" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1522748979009 vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1521280911550">
        
        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="510" height="625" src="wp-content/uploads/2018/02/applanding-intro.png" class="vc_single_image-img attachment-full" alt="applanding-intro" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/02/applanding-intro.png 510w, https://cryptap.dttheme.com/wp-content/uploads/2018/02/applanding-intro-245x300.png 245w" sizes="(max-width: 510px) 100vw, 510px" /></div>
        </figure>
    </div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-title script-with-sub-title '><h2>Awesome Service with<br />
<strong>Functional Wallet that just works</strong></h2><h3></h3></div><div id="1518006592985-44c435db-2694" class="dt-sc-empty-space"></div>
    <div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>Genesys is committed to empowering people to invest and trade, with confidence, in an innovative and reliable environment; supported by best-in-class personal service and uncompromising integrity.</p>

        </div>
    </div>

    
</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div id="features" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1522748894077 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner " style=" text-align:center; "><div class="wpb_wrapper"><div id="1518009248087-37393f01-d0ef" class="dt-sc-empty-space"></div><div class='dt-sc-title script-with-sub-title '><h2>A Feature Rich <strong>Bitcoin Wallet</strong></h2><h6>WHAT DO YOU GET</h6></div><div id="1522748869101-d9af8581-0583" class="dt-sc-empty-space"></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-icon-box type11 '><div class="icon-wrapper"><img width="60" height="68" src="wp-content/uploads/2018/03/intro-icon-1-alt.png" class="attachment-full" alt="intro-icon-1-alt" /></div><div class="icon-content"><h4>Instant Withdrawals</h4><p>Make Instant withdrawals from your wallet anytime.</p>
<div class="dt-sc-clear"></div>
<p><a title="Learn More" href="#" target="_self">Learn More <i class="fa fa-chevron-right"></i></a></p></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-icon-box type11 '><div class="icon-wrapper"><img width="60" height="68" src="wp-content/uploads/2018/03/intro-icon-2-alt.png" class="attachment-full" alt="intro-icon-2-alt" /></div><div class="icon-content"><h4>Insurance Protection </h4><p>Digital currency stored on our servers is covered by our insurance policy.</p>
<div class="dt-sc-clear"></div>
<p><a title="Learn More" href="#" target="_self">Learn More <i class="fa fa-chevron-right"></i></a></p></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-icon-box type11 '><div class="icon-wrapper"><img width="60" height="68" src="wp-content/uploads/2018/03/intro-icon-3-alt.png" class="attachment-full" alt="" /></div><div class="icon-content"><h4>Secure Storage</h4><p>We store the vast majority of the digital assets in secure offline storage.</p>
<div class="dt-sc-clear"></div>
<p><a title="Learn More" href="#" target="_self">Learn More <i class="fa fa-chevron-right"></i></a></p></div></div></div></div></div></div><div id="1518010512081-be437e97-6c8d" class="dt-sc-empty-space"></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1518010662097"><div class="rs_col-xs-nospace-bottom wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner " style=" text-align:center; "><div class="wpb_wrapper"><div class='dt-sc-title script-with-sub-title '><h2>Transparent <strong>Transactions</strong></h2><h6>GET CLARITY NOW!</h6></div>
    <div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>Genesys provides access to the next generation of trading tools. Our robots have been developed with the latest market and trading innovations which ensures transparent and seamless trading.</p>

        </div>
    </div>
<div id="1518010951646-0c7613e6-7f7f" class="dt-sc-empty-space"></div>
    <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1521281065448">
        
        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="836" height="565" src="wp-content/uploads/2018/02/mobiles.png" class="vc_single_image-img attachment-full" alt="mobiles" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/02/mobiles.png 836w, https://cryptap.dttheme.com/wp-content/uploads/2018/02/mobiles-300x203.png 300w, https://cryptap.dttheme.com/wp-content/uploads/2018/02/mobiles-768x519.png 768w, https://cryptap.dttheme.com/wp-content/uploads/2018/02/mobiles-573x387.png 573w" sizes="(max-width: 836px) 100vw, 836px" /></div>
        </figure>
    </div>
</div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid dt-sc-dark-bg vc_custom_1522649968653"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-donutchart-medium alter'><div class='dt-sc-donutchart' data-donutwidth='10' data-size='140' data-percent='76' data-bgcolor='#1d1e20' data-fgcolor='#ffcc00'></div><h5 class='dt-sc-donutchart-title'>Bitcoin</h5></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-donutchart-medium alter'><div class='dt-sc-donutchart' data-donutwidth='10' data-size='140' data-percent='69' data-bgcolor='#1d1e20' data-fgcolor='#1da66e'></div><h5 class='dt-sc-donutchart-title'>Etherium</h5></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-donutchart-medium alter'><div class='dt-sc-donutchart' data-donutwidth='10' data-size='140' data-percent='57' data-bgcolor='#1d1e20' data-fgcolor='#ed008c'></div><h5 class='dt-sc-donutchart-title'>Ripple</h5></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-donutchart-medium alter'><div class='dt-sc-donutchart' data-donutwidth='10' data-size='140' data-percent='67' data-bgcolor='#1d1e20' data-fgcolor='#22c0e8'></div><h5 class='dt-sc-donutchart-title'>ZCash</h5></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><!-- Row Backgrounds --><div class="upb_bg_img" data-ultimate-bg="url(https://cryptap.dttheme.com/wp-content/uploads/2018/03/parallax.jpg)" data-image-id="id^8255|url^https://cryptap.dttheme.com/wp-content/uploads/2018/03/parallax.jpg|caption^null|alt^parallax|title^parallax|description^null" data-ultimate-bg-style="vcpb-vz-jquery" data-bg-img-repeat="repeat" data-bg-img-size="cover" data-bg-img-position="" data-parallx_sense="30" data-bg-override="full" data-bg_img_attach="fixed" data-upb-overlay-color="rgba(31,32,45,0.95)" data-upb-bg-animation="" data-fadeout="" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.4.7"  data-is_old_vc=""  data-theme-support=""   data-overlay="true" data-overlay-color="rgba(31,32,45,0.95)" data-overlay-pattern="" data-overlay-pattern-opacity="0.8" data-overlay-pattern-size="" data-overlay-pattern-attachment="scroll"    ></div>






        



<!-- <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-title script-with-sub-title '><h2>The Superior <strong>Alternative</strong></h2><h6></h6></div><div id="1518784116438-6d9daba3-3c6b" class="dt-sc-empty-space"></div>
    <div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>Maecenas posuere ac ex vitae fringilla. Fusce pulvinar luctus elit. Fusce cursus lacus vel orci malesuada pharetra. Duis vel imperdiet enim. Vestibulum dolor metus. Condimentum vitae vehicula et, facilisis a nunc. Suspendisse potenti. Fusce ullamcorper ullamcorper convallis.</p>

        </div>
    </div>
<div id="1518783895934-1ed5bdcc-f43d" class="dt-sc-empty-space"></div>
    <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1520318267970  simple-img-hover alignleft">
        
        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="191" height="58" src="wp-content/uploads/2018/02/app-store-btn.png" class="vc_single_image-img attachment-full" alt="app-store-btn" /></div>
        </figure>
    </div>

    <div  class="wpb_single_image wpb_content_element vc_align_left   simple-img-hover alignleft">
        
        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="191" height="58" src="wp-content/uploads/2018/02/google-store-btn.png" class="vc_single_image-img attachment-full" alt="google-store-btn" /></div>
        </figure>
    </div>
</div></div></div> --></div>





<div id="1518069732103-6fc9a48a-54e8" class="dt-sc-empty-space"></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div id="faq" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1522656919731 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-title script-with-sub-title aligncenter'><h2>Why? <strong>Choose Us</strong></h2><h6>WE WORK FOR YOUR SUCCESS</h6></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1522656930198 vc_row-has-fill"><div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-tabs-horizontal-container type2' data-effect='fade'><ul class='dt-sc-tabs-horizontal'><li><a href="javascript:void(0);">Our Mission</a></li><li><a href="javascript:void(0);">International</a></li><li><a href="javascript:void(0);">Digital Wallet</a></li></ul><div class='dt-sc-tabs-horizontal-content'>
    <div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>Genesys is committed to empowering people to invest and trade, with confidence, in an innovative and reliable environment; supported by best-in-class personal service and uncompromising integrity.

Within a few short years, Genesys has expanded enormously, with 200,000 registered customers globally executing more than two million trades a month. The company’s total trading volumes surpass $100 million per month. Genesys’s user-oriented perspective, combined with solid financial backing, is unique in the field of online trading. From its 24-hour multilingual support desks to its broad range of platforms and services, Genesys has created the optimal trading environment for every level of trader. Genesys wide scope includes a full spectrum of trading instruments including:</p>

        </div>
    </div>
<ul class='dt-sc-fancy-list   bitcoin'>
<li>Forex</li>
<li>stocks</li>
<li>indices</li>

</ul><div id="1518784938932-132f3a6f-864f" class="dt-sc-empty-space"></div>
    
</div><div class='dt-sc-tabs-horizontal-content'>
    <div class="wpb_text_column wpb_content_element  vc_custom_1475650025976" >
        <div class="wpb_wrapper">
            <p>Genesys is a multi-national company with regional offices and sales centers in Paris, Dublin, Milan, Tokyo and Sydney. Whether you are an experienced trader or a novice, Genesys’s adaptable trading platforms and services provide you with the right balance of simplicity and sophistication. We invite you to join the thousands of traders and affiliates who have chosen Genesys as their preferred trading portal.</p>

        </div>
    </div>
<div id="1518784923185-7e4c4da7-cff2" class="dt-sc-empty-space"></div>
    
</div><div class='dt-sc-tabs-horizontal-content'>
    <div class="wpb_text_column wpb_content_element  vc_custom_1475650025976" >
        <div class="wpb_wrapper">
            <p>Proin tincidunt, nisl at porttitor vulputate, justo nulla blandit nisl, ut posuere metus tortor vel odio. Aenean hendrerit nisi urna, eu pos:</p>

        </div>
    </div>
<ul class='dt-sc-fancy-list   bitcoin'>
<li>Duis aliquam lenb sodales.</li>
<li>Mauris aliquam sapien pharetra.</li>
<li>Fusce sed mi scelerisque est.</li>
<li>In luctus arcu urna commodo.</li>
</ul><div id="1518074793155-83a14c98-179f" class="dt-sc-empty-space"></div>
    <div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>Maecenas posuere ac ex vitae fringilla. Fusce pulvinar luctus elit. Fusce cursus lacus vel orci malesuada pharetra. Duis vel imperdiet enim. Vestibulum dolor metus, condimentum vitae vehicula et, facilisis a nunc. Suspendisse potenti. Fusce ullamcorper ullamcorper convallis. Morbi nec auctor mauris. Nam et arcu sit amet justo accumsan tempus vel in ante. Vestibulum lacinia velit eu lorem tincidunt vitae.</p>

        </div>
    </div>
</div></div></div></div></div><div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-toggle-frame-set  '><h5 class='dt-sc-toggle-accordion '><a href='#'>1. Open a trading account for free!</a></h5><div class="dt-sc-toggle-content" style="display: none;"><div class="block"><div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>All Genesys subscribers get access to the latest and up-to-date auto trading platform. The minimum investment amount is only 1 BTC. Each trading account provided by Genesys is unique in its own way and offers its own possibilities. To find out what opportunities are available for each auto trader type and to get more information about our promotions and bonuses, please contact our representatives by email. After opening one of the accounts with our company you will be able to get all the possibilities, which are offered with each particular type of account. </p>

        </div>
    </div></div></div><h5 class='dt-sc-toggle-accordion '><a href='#'>2. Fund your personal account</a></h5><div class="dt-sc-toggle-content" style="display: none;"><div class="block"><div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>In order to start trading Crypto Currencies and other forums with Genesys you will need to fund your account. The deposited funds are secure as we are have an end-end security encryption on our vault. Money in your account is secured by multiple firewalls and it is kept separate from the funds of the company. Opening a trading account takes 1 minute!

After funding your account, you will be able to start trading with Genesys. Genesys transactional process is based off Blockchain technology. We believe our clients deserve fair transactional rates and security. We believe our clients deserve the right to reap the full benefits of our robots by the reduction of tax rates. So with out breaking any laws we devised a means to make all that possible in our transaction system.</p>

        </div>
    </div></div></div><h5 class='dt-sc-toggle-accordion '><a href='#'>3. Start trading Crypto Currency</a></h5><div class="dt-sc-toggle-content" style="display: none;"><div class="block"><div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>Please contact our support team If you have any questions, comments or requests. Our specialists are always ready to give you comprehensive information about the specifics of working with your Genesys account.</p>

        </div>
    </div></div></div><h5 class='dt-sc-toggle-accordion '><a href='#'>4. Withdrawal of funds</a></h5><div class="dt-sc-toggle-content" style="display: none;"><div class="block"><div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>You can withdraw your funds at any time. For this purpose it is necessary to fill up a request, and our Finance office will process it as soon as possible. A withdrawal will be made to the same payment method which you deposited with. The withdrawal process is done by the guide of regulation.</p>

        </div>
    </div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>

<!-- begin live screenshot -->

    <!-- <div id="gallery" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1518840635046"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-title script-with-sub-title aligncenter'><h2>Cryptap <strong>Live Screenshots</strong></h2><h6>CRYPTAP WORKS FOR YOUR SUCCESS</h6></div><div id="1518077293595-0a65c7a0-a53f" class="dt-sc-empty-space"></div><div id="ult-carousel-14923144335c8a21b386d54" class="ult-carousel-wrapper  custom-dot-navigation ult_horizontal" data-gutter="15" data-rtl="false" ><div class="ult-carousel-637519765c8a21b385db5 " ><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/1.jpg" class="aligncenter attachment-full" alt="1" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/1.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/1-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/2.jpg" class="aligncenter attachment-full" alt="2" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/2.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/2-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/3.jpg" class="aligncenter attachment-full" alt="3" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/3.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/3-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/4.jpg" class="aligncenter attachment-full" alt="4" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/4.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/4-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/5.jpg" class="aligncenter attachment-full" alt="5" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/5.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/5-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/6.jpg" class="aligncenter attachment-full" alt="6" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/6.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/6-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/7.jpg" class="aligncenter attachment-full" alt="7" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/7.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/7-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/8.jpg" class="aligncenter attachment-full" alt="8" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/8.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/8-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/9.jpg" class="aligncenter attachment-full" alt="9" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/9.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/9-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/10.jpg" class="aligncenter attachment-full" alt="10" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/10.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/10-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/11.jpg" class="aligncenter attachment-full" alt="11" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/11.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/11-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div><div class="ult-item-wrap" data-animation="animated no-animation"><img width="370" height="780" src="wp-content/uploads/2018/03/5.jpg" class="aligncenter attachment-full" alt="5" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/5.jpg 370w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/5-142x300.jpg 142w" sizes="(max-width: 370px) 100vw, 370px" /></div></div></div>            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    if( typeof jQuery('.ult-carousel-637519765c8a21b385db5').slick == "function"){
                        $('.ult-carousel-637519765c8a21b385db5').slick({dots: true,autoplay: true,autoplaySpeed: 5000,speed: 300,infinite: true,arrows: false,slidesToScroll:4,slidesToShow:4,swipe: true,draggable: true,touchMove: true,pauseOnHover: true,responsive: [
                            {
                              breakpoint: 1025,
                              settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,  
                              }
                            },
                            {
                              breakpoint: 769,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 481,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }
                        ],pauseOnDotsHover: true,customPaging: function(slider, i) {
                   return '<i type="button" style= "color:#333333;" class="ultsl-record" data-role="none"></i>';
                },});
                    }
                });
            </script>
            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div> -->





<!-- end live screenshots -->

            <div id="pricing" class="vc_row wpb_row vc_row-fluid vc_custom_1477305223597"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-title script-with-sub-title aligncenter'><h2>Our <strong>Plans</strong></h2><h6>WE WORK FOR YOUR SUCCESS</h6></div><div id="1518077437407-ef295caf-2322" class="dt-sc-empty-space"></div><div class="vc_row wpb_row vc_inner vc_row-fluid">


                <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-pr-tb-col modern selected '><div class="dt-sc-tb-header"><div class="dt-sc-tb-thumb"><img width="150" height="101" src="wp-content/themes/cryptapp/images/rob1.png" class="attachment-full" alt="pricing-logo-1" /></div><h4><b>Sapphire</b></h4><h6> <strong>0.065<i class="fa fa-bitcoin"></i></strong></h6></div><ul class="dt-sc-tb-content">
<li class="check">Minimum 0.5 BTC</li>
<li class="check">15% ROI</li>
<li class="check">Duration: 14 Days</li>
<li class="check">Referral bonus: 0.013 BTC  </li>
<li class="check">Initial after additional 3weeks of first 15%
withdraw</li>

</ul></div></div></div></div>




<div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-pr-tb-col modern selected '><div class="dt-sc-tb-header"><div class="dt-sc-tb-thumb"><img width="150" height="101" src="wp-content/themes/cryptapp/images/rob2.png" class="attachment-full" alt="pricing-logo-1" /></div><h4><b>Bronze</b></h4><h6> 0.1<i class="fa fa-bitcoin"></i></h6></div><ul class="dt-sc-tb-content">
<li class="check">Minimum 1 BTC</li>
<li class="check">30% ROI</li>
<li class="check">Duration: 14 Days</li>
<li class="check">Referral bonus: 0.026 BTC  </li>
<li class="check">Initial after additional 3weeks of first 30% withdraw</li>
</ul></div></div></div></div>



<div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-pr-tb-col modern selected '><div class="dt-sc-tb-header"><div class="dt-sc-tb-thumb"><img width="150" height="101" src="wp-content/themes/cryptapp/images/rob3.png" class="attachment-full" alt="pricing-logo-1" /></div><h4><b>Gold</b></h4><h6> 0.3<i class="fa fa-bitcoin"></i></h6></div><ul class="dt-sc-tb-content">
<li class="check">Minimum 5 BTC</li>
<li class="check">40% ROI</li>
<li class="check">Duration: 30 Days</li>
<li class="check">Referral bonus: 0.078 BTC  </li>
<li class="check">Initial after additional 3weeks of first 40% withdraw</li>
</ul></div></div></div></div>




<div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-pr-tb-col modern selected '><div class="dt-sc-tb-header"><div class="dt-sc-tb-thumb"><img width="150" height="101" src="wp-content/themes/cryptapp/images/rob4.png" class="attachment-full" alt="pricing-logo-1" /></div><h4><b>Diamond</b></h4><h6> 1<i class="fa fa-bitcoin"></i></h6></div><ul class="dt-sc-tb-content">
<li class="check">Minimum 10 BTC</li>
<li class="check">50% ROI</li>
<li class="check">Duration: 30 Days</li>
<li class="check">Referral bonus: 0.26 BTC  </li>
<li class="check">Initial after additional 3weeks of first 50% withdraw</li>
</ul></div></div></div></div>




</div><div id="1517983040497-fd3fba69-00d3" class="dt-sc-empty-space"></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1522650831467 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div id="1521618065710-b772ccc7-3105" class="dt-sc-empty-space"></div></div></div></div><div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-5 vc_col-lg-5 vc_col-md-12"><div class="vc_column-inner "><div class="wpb_wrapper">            <div class="dt-sc-crypto-widget dt-sc-crypto-summary ">
                <script type="text/javascript">
                    baseUrl = "https://widgets.cryptocompare.com/";
                    var scripts = document.getElementsByTagName("script");
                    var embedder = scripts[ scripts.length - 1 ];
                    (function (){
                        var appName = encodeURIComponent(window.location.hostname);
                        if(appName==""){appName="local";}
                        var s = document.createElement("script");
                        s.type = "text/javascript";
                        s.async = true;
                        var theUrl = baseUrl+'serve/v1/coin/summary?fsym=BTC&tsyms=INR,USD,EUR,CNY,EGP';
                        s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                        embedder.parentNode.appendChild(s);
                    })();
                </script>
            </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-1 vc_col-md-12 vc_hidden-xs"><div class="vc_column-inner vc_custom_1522654500332"><div class="wpb_wrapper"><div id="1522654600804-52b5170c-e5ad" class="dt-sc-empty-space"></div></div></div></div><div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-5 vc_col-lg-5 vc_col-md-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class='dt-sc-title script-with-sub-title '><h2>Innovative Payment <strong>Network</strong></h2><h6></h6></div><h4 style="font-size: 25px;color: #222328;line-height: normal;text-align: left" class="vc_custom_heading">Simple &amp; secure access to trade<br />
 Cryptocurrency</h4>
    <div class="wpb_text_column wpb_content_element  vc_custom_1516344061424" >
        <div class="wpb_wrapper">
            <p>We Want You to Succeed – Learn from the best with our wide range of educational tools, economic calendar, technical and fundamental analysis and important market updates you don’t want to miss.</p>

        </div>
    </div>
<div id="1516344064965-b0c0326f-1b58" class="dt-sc-empty-space"></div><a href='#' target='_self' title='' class='dt-sc-button   medium   filled  default dt-skin-secondary-bg' > Read More </a></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div id="1521617808613-14f468d1-9ddb" class="dt-sc-empty-space"></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div id="1518853751812-8fc3b0ea-188d" class="dt-sc-empty-space"></div><div id="ult-carousel-9919643335c8a21b40506a" class="ult-carousel-wrapper   ult_horizontal" data-gutter="15" data-rtl="false" ><div class="ult-carousel-534508175c8a21b404f39 " ><div class="ult-item-wrap" data-animation="animated no-animation"><div class="dt-sc-testimonial-wrapper"><div class='dt-sc-testimonial type2 '><div class="dt-sc-testimonial-quote"><blockquote><q>Thanks Genesys for helping us stay on top of a very stressful process! Finally exchanged and looking forward to complete.</q></blockquote></div><div class="dt-sc-testimonial-author"><span><img width="130" height="130" src="wp-content/uploads/2018/03/testimonial2.jpg" class="attachment-full" alt="testimonial2" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/testimonial2.jpg 130w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/testimonial2-100x100.jpg 100w" sizes="(max-width: 130px) 100vw, 130px" /></span><cite> Stephanie Welch<small>Evernote</small></cite></div></div></div></div><div class="ult-item-wrap" data-animation="animated no-animation"><div class="dt-sc-testimonial-wrapper"><div class='dt-sc-testimonial type2 '><div class="dt-sc-testimonial-quote"><blockquote><q>Great to stay on top of the process. Especially liked to play with the financial section when viewing properties. Highly recommended!</q></blockquote></div><div class="dt-sc-testimonial-author"><span><img width="130" height="130" src="wp-content/uploads/2018/03/testimonial1-1.jpg" class="attachment-full" alt="testimonial1-1" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/testimonial1-1.jpg 130w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/testimonial1-1-100x100.jpg 100w" sizes="(max-width: 130px) 100vw, 130px" /></span><cite>Andrew Bradshaw<small>Invision</small></cite></div></div></div></div><div class="ult-item-wrap" data-animation="animated no-animation"><div class="dt-sc-testimonial-wrapper"><div class='dt-sc-testimonial type2 '><div class="dt-sc-testimonial-quote"><blockquote><q>Just started flat hunting. Your affordability calculator saved me some serious time to focus on what I can actually buy. Thanks so much.</q></blockquote></div><div class="dt-sc-testimonial-author"><span><img width="130" height="130" src="wp-content/uploads/2018/03/testimonial3-1.jpg" class="attachment-full" alt="testimonial3-1" srcset="https://cryptap.dttheme.com/wp-content/uploads/2018/03/testimonial3-1.jpg 130w, https://cryptap.dttheme.com/wp-content/uploads/2018/03/testimonial3-1-100x100.jpg 100w" sizes="(max-width: 130px) 100vw, 130px" /></span><cite>Sylvester Knight<small>Airbnb</small></cite></div></div></div></div><div class="ult-item-wrap" data-animation="animated no-animation"><div class="dt-sc-testimonial-wrapper"><div class='dt-sc-testimonial type2 '><div class="dt-sc-testimonial-quote"><blockquote><q>Still marvelling at how easy i can just make passive income with the click of a button.</q></blockquote></div><div class="dt-sc-testimonial-author"><span><img width="130" height="130" src="img/avatar1.jpg" class="attachment-full" alt="testimonial2" srcset="img/avatar1.jpg 130w, img/avatar1.jpg 100w" sizes="(max-width: 130px) 100vw, 130px" /></span><cite>Mark Nimt<small>Tidal</small></cite></div></div></div></div><div class="ult-item-wrap" data-animation="animated no-animation"><div class="dt-sc-testimonial-wrapper"><div class='dt-sc-testimonial type2 '><div class="dt-sc-testimonial-quote"><blockquote><q>Genesys totally changed my perspective of online trading with its transparent methods. Will recommend.</q></blockquote></div><div class="dt-sc-testimonial-author"><span><img width="130" height="130" src="img/avatar3.jpg" class="attachment-full" alt="testimonial1-1" srcset="img/avatar3.jpg 130w, img/avatar3.jpg 100w" sizes="(max-width: 130px) 100vw, 130px" /></span><cite>Ron Nedworth<small>Cloudinary</small></cite></div></div></div></div><div class="ult-item-wrap" data-animation="animated no-animation"><div class="dt-sc-testimonial-wrapper"><div class='dt-sc-testimonial type2 '><div class="dt-sc-testimonial-quote"><blockquote><q>It has been an amazing journey with Genesys. I am quite satisfied.</q></blockquote></div><div class="dt-sc-testimonial-author"><span><img width="130" height="130" src="img/avatar6.jpg" class="attachment-full" alt="testimonial3-1" srcset="img/avatar6.jpg 130w, img/avatar6.jpg 100w" sizes="(max-width: 130px) 100vw, 130px" /></span><cite>Stacy Pracket<small>Atlassian</small></cite></div></div></div></div></div></div>            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    if( typeof jQuery('.ult-carousel-534508175c8a21b404f39').slick == "function"){
                        $('.ult-carousel-534508175c8a21b404f39').slick({dots: false,autoplay: true,autoplaySpeed: 2000,speed: 300,infinite: true,arrows: false,slidesToScroll:3,slidesToShow:3,swipe: true,draggable: true,touchMove: true,pauseOnHover: true,responsive: [
                            {
                              breakpoint: 1025,
                              settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,  
                              }
                            },
                            {
                              breakpoint: 769,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                              }
                            },
                            {
                              breakpoint: 481,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }
                        ],pauseOnDotsHover: true,customPaging: function(slider, i) {
                   return '<i type="button" style= "color:#333333;" class="ultsl-record" data-role="none"></i>';
                },});
                    }
                });
            </script>
            <div id="1518853769981-ed531b61-4819" class="dt-sc-empty-space"></div></div></div></div></div><div id="mailus" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid rs_col_no_btm_space vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="rs_col-sm-12 dt-sc-dark-bg wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner " style=" text-align:center; "><div class="wpb_wrapper"><div id="1519107658204-39a3017c-30e9" class="dt-sc-empty-space"></div><div class='dt-sc-title script-with-sub-title '><h2>Have Any Questions? <strong>Contact Us</strong></h2><h6></h6></div><div id="1519107686000-b2fc3b45-306c" class="dt-sc-empty-space"></div><div role="form" class="wpcf7" id="wpcf7-f7193-p4-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form app_landing-home3" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="7193" />
<input type="hidden" name="_wpcf7_version" value="5.0.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7193-p4-o1" />
<input type="hidden" name="_wpcf7_container_post" value="4" />
</div>
<p><span class="wpcf7-form-control-wrap email-80"><input type="email" name="email-80" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="name@email.com" /></span></p>
<p class="app_one_half"><span class="wpcf7-form-control-wrap text-273"><input type="text" name="text-273" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="John" /></span></p>
<p class="app_one_half last"><span class="wpcf7-form-control-wrap text-273"><input type="text" name="text-273" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Christopher" /></span></p>
<div class='dt-sc-clear '> </div>
<p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span></p>
<p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div><div id="1518853907523-01e8436e-ee71" class="dt-sc-empty-space"></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><!-- Row Backgrounds --><div class="upb_bg_img" data-ultimate-bg="url(https://cryptap.dttheme.com/wp-content/uploads/2018/03/contact.jpg)" data-image-id="id^8338|url^https://cryptap.dttheme.com/wp-content/uploads/2018/03/contact.jpg|caption^null|alt^contact|title^contact|description^null" data-ultimate-bg-style="vcpb-default" data-bg-img-repeat="no-repeat" data-bg-img-size="cover" data-bg-img-position="" data-parallx_sense="30" data-bg-override="full" data-bg_img_attach="fixed" data-upb-overlay-color="" data-upb-bg-animation="" data-fadeout="" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="5.4.7"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div>
</div><!-- #post-4 -->
        </section><!-- Primary End -->    </div>
    <!-- ** Container End ** -->
    
</div><!-- **Main - End ** -->    
    
        <!-- **Footer** -->
        <footer id="footer">
            <div class="container">
            <p><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div id="1518003695256-bce76072-35f9" class="dt-sc-empty-space"></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><h3 style="font-size: 20px;line-height: normal;text-align: left;font-family:Ubuntu;font-weight:500;font-style:normal" class="vc_custom_heading">SUPPORT</h3><div id="1518004427466-07a4cd5c-238f" class="dt-sc-empty-space"></div><div id="dt-1518002593407-98e9da90-9423" class="dt-custom-nav-wrapper none" data-default-style = "none" data-hover-style = "none" data-default-decoration = "none" data-hover-decoration = "none" data-divider = "yes"><div class="menu-quick-link-ii-container"><ul id="menu-quick-link-ii" class="custom-sub-nav dt-custom-nav"><li id="menu-item-8010" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8010"><a href="#" class="item-has-icon icon-position-left"><i class="menu-item-icon"></i><span>Support Portal</span></a><span class="divider"></span></li>
<li id="menu-item-8011" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8011"><a href="#" class="item-has-icon icon-position-left"><i class="menu-item-icon"></i><span>FAQ</span></a><span class="divider"></span></li>
<li id="menu-item-8012" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8012"><a href="#" class="item-has-icon icon-position-left"><i class="menu-item-icon"></i><span>Tutorials</span></a><span class="divider"></span></li>
<li id="menu-item-8013" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8013"><a href="#" class="item-has-icon icon-position-left"><i class="menu-item-icon"></i><span>Documentation</span></a><span class="divider"></span></li>
</ul></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><h3 style="font-size: 20px;line-height: normal;text-align: left;font-family:Ubuntu;font-weight:500;font-style:normal" class="vc_custom_heading">COMPANY</h3><div id="1518004429844-9c82d843-5ea4" class="dt-sc-empty-space"></div><div id="dt-1518002612687-f85a0fd2-1b6b" class="dt-custom-nav-wrapper none" data-default-style = "none" data-hover-style = "none" data-default-decoration = "none" data-hover-decoration = "none" data-divider = "yes"><div class="menu-quick-link-iii-container"><ul id="menu-quick-link-iii" class="custom-sub-nav dt-custom-nav"><li id="menu-item-8015" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8015"><a href="#" class="item-has-icon icon-position-left"><i class="menu-item-icon"></i><span>About Us</span></a><span class="divider"></span></li>
<li id="menu-item-8016" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8016"><a href="#" class="item-has-icon icon-position-left"><i class="menu-item-icon"></i><span>Press</span></a><span class="divider"></span></li>
<li id="menu-item-8017" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8017"><a href="#" class="item-has-icon icon-position-left"><i class="menu-item-icon"></i><span>Privacy Policy</span></a><span class="divider"></span></li>
<li id="menu-item-8018" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8018"><a href="#" class="item-has-icon icon-position-left"><i class="menu-item-icon"></i><span>Terms & Conditions</span></a><span class="divider"></span></li>
</ul></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><h3 style="font-size: 20px;line-height: normal;text-align: left;font-family:Ubuntu;font-weight:500;font-style:normal" class="vc_custom_heading">SOCIAL</h3><div id="1518004432715-fea219e8-9712" class="dt-sc-empty-space"></div><ul class='dt-sc-sociable-default  '><li><a target="_blank" href="https://workplace.facebook.com/profile.php?id=100034840731319"><span class="fa fa-facebook"></span>Facebook</a></li><li><a target="_blank" href="#"><span class="fa fa-google-plus"></span>Google-plus</a></li><li><a target="_blank" href="#"><span class="fa fa-twitter"></span>Twitter</a></li></ul></div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"  style=" text-align:center; "><div class="vc_column-inner "><div class="wpb_wrapper"><div id="1525066228109-78b07103-7de9" class="dt-sc-empty-space"></div><div class='dt-sc-single-line-separator '></div><div id="1525066588339-c04e3859-c7d6" class="dt-sc-empty-space"></div><div class='dt-sc-clear '> </div><div id="dt-1521696354904-a02e7971-44ed" class="dt-logo-container logo-align-center">  <a href="index.html" rel="home"><img src="wp-content/themes/cryptapp/images/lago.png" alt="CryptApp WordPress Theme"/></a></div><div id="1518003592060-eca5c948-25a6" class="dt-sc-empty-space"></div>
    <div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <p>Copyright © 2018 <a href="#">Genesys Online Trading and Investsments</a> | All Rights Reserved</p>

        </div>
    </div>
<div id="1518003680574-f1ac7439-b4f9" class="dt-sc-empty-space"></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div></p>
            </div>
        </footer><!-- **Footer - End** -->

    </div><!-- **Inner Wrapper - End** -->
        
</div><!-- **Wrapper - End** -->
<link rel='stylesheet' property='stylesheet' id='rs-icon-set-fa-icon-css'  href='wp-content/plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css' type='text/css' media='all' />         <script type="text/javascript">
                function revslider_showDoubleJqueryError(sliderID) {
                    var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                    errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                    errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
                    errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                    errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
                        jQuery(sliderID).show().html(errorMessage);
                }
            </script>
            
<link rel='stylesheet' id='vc_google_fonts_varela-css'  href='http://fonts.googleapis.com/css?family=Varela&amp;ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min8b06.css?ver=5.4.7' type='text/css' media='all' />
<link rel='stylesheet' id='vc_google_fonts_cabinregularitalic500500italic600600italic700700italic-css'  href='http://fonts.googleapis.com/css?family=Cabin%3Aregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic&amp;ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css-css'  href='wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min8b06.css?ver=5.4.7' type='text/css' media='all' />
<link rel='stylesheet' id='vc_google_fonts_ubuntu300300italicregularitalic500500italic700700italic-css'  href='http://fonts.googleapis.com/css?family=Ubuntu%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic&amp;ver=4.9.10' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/cryptap.dttheme.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts972f.js?ver=5.0.1'></script>
<script type='text/javascript' src='wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tabs.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tipTip.minified8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.inview8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.animateNumber.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.donutchart8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/designthemes-core-features/shortcodes/js/slick.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/designthemes-core-features/shortcodes/js/shortcodes8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/designthemes-core-features/custom-post-types/js/protfolio-custom8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.ui.totop.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.easing8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.caroufredsel8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.debouncedresize8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min8b06.js?ver=5.4.7'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.touchswipe8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.parallax8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.downcount8e83.js?ver=4.9.10'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var dttheme_urls = {"theme_base_url":"https:\/\/cryptap.dttheme.com\/wp-content\/themes\/cryptapp","framework_base_url":"https:\/\/cryptap.dttheme.com\/wp-content\/themes\/cryptapp\/framework\/","ajaxurl":"https:\/\/cryptap.dttheme.com\/wp-admin\/admin-ajax.php","url":"https:\/\/cryptap.dttheme.com","isRTL":"","loadingbar":"disable","advOptions":"Show Advanced Options","wpnonce":"9fabf0f013"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.nicescroll8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.bxslider8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.fitvids8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.sticky8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.simple-sidebar8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.classie8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.placeholder8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/jquery.visualNav.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/ResizeSensor.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/theia-sticky-sidebar.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min8b06.js?ver=5.4.7'></script>
<script type='text/javascript' src='wp-content/themes/cryptapp/framework/js/custom8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='../use.fontawesome.com/30858dc40a1678.js?ver=4.0.7'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfontac5b.js?ver=3.0.25'></script>
<script type='text/javascript'>
WebFont.load({google:{families:['Ubuntu:300,300,300i,400,400i,500,500i,700,700i,300,300i,400,400i,500,500i,700,700i,300,300i,400,400i,500,500i,700,700i,300,300i,400,400i,500,500i,700,700i,300,300i,400,400i,500,500i,700,700i,300,300i,400,400i,500,500i,700,700i,300,300i,400,400i,500,500i,700,700i,300,300i,400,400i,500,500i,700,700i:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai', 'Open Sans:300,300,300i,400,400i,600,600i,700,700i,800,800i:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai']}});
</script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min8b06.js?ver=5.4.7'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/vhparallax.min8e83.js?ver=4.9.10'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min8b06.js?ver=5.4.7'></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"095ddbfebf","applicationID":"46457285","transactionName":"YVJSZBBSDEIFURVRWVgYcVMWWg1fS0IAX1M=","queueTime":0,"applicationTime":11335,"atts":"TRVRElhIH0w=","errorBeacon":"bam.nr-data.net","agent":""}</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'Paw7lkpeN6';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
        <!-- {/literal} END JIVOSITE CODE --></body>

<!-- Mirrored from cryptap.dttheme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2019 09:43:26 GMT -->
</html>