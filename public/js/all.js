var $backToTop=$(".back-to-top");$backToTop.hide(),$(window).on("scroll",function(){$(this).scrollTop()>200?$backToTop.fadeIn():$backToTop.fadeOut()}),$backToTop.on("click",function(o){$("html, body").animate({scrollTop:0},500)}),$(document).ready(function(){$("#nav-trigger").click(function(){$("#nav").toggle("slow",function(){})})});
//# sourceMappingURL=all.js.map
