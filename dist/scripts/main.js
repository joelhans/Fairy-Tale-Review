!function(n){var a={common:{init:function(){n(document).scroll(function(){n(".about-pulldown").hasClass("about-pulldown-active")===!1&&n(".nav-brand, .nav-primary").toggleClass("nav-scrolled",n(document).scrollTop()>=50)}),n(".nav-about").click(function(a){a.stopPropagation(),n(".about-pulldown").hasClass("about-pulldown-active")===!1?(n(".about-pulldown").addClass("about-pulldown-active"),n(".nav-brand").removeClass("nav-scrolled")):n(".about-pulldown").hasClass("about-pulldown-active")===!0&&(n(".about-pulldown").removeClass("about-pulldown-active"),n(document).scrollTop()>=50&&n(".nav-brand").toggleClass("nav-scrolled"))}),n(document).click(function(a){return!(0!==n(a.target).closest(".about-pulldown").length&&!n(a.target).attr("href"))&&(n(".about-pulldown").removeClass("about-pulldown-active"),void(n(document).scrollTop()>0&&n(".nav-brand").hasClass("nav-scrolled")===!1&&n(".nav-brand").toggleClass("nav-scrolled")))}),n(".nav-tree").click(function(n){console.log("clicked")})},finalize:function(){}},home:{init:function(){},finalize:function(){}},about_us:{init:function(){}},single_post:{init:function(){if(n("main .container article").is(".category-fairy-tale-files")){n("p, figure").has("img").addClass("image-container"),console.log("TESTING TESTING");var a=n(".image-container")[0],o=n(".image-container")[1],t=n(".image-container")[2],l='<div class="ftf-number"><p>1</p></div>',i='<div class="ftf-number"><p>2</p></div>',e='<div class="ftf-number"><p>3</p></div>';n(a).nextUntil(o).wrapAll("<div class='ftf-container-01'><div class='ftf-text'></div></div>"),n(a).appendTo(".ftf-container-01"),n(a).append(l),n(o).nextUntil(t).wrapAll("<div class='ftf-container-02'><div class='ftf-text'></div></div>"),n(o).appendTo(".ftf-container-02"),n(o).append(i),n(t).nextUntil("footer").wrapAll("<div class='ftf-container-03'><div class='ftf-text'></div></div>"),n(t).appendTo(".ftf-container-03"),n(t).append(e)}}}},o={fire:function(n,o,t){var l,i=a;o=void 0===o?"init":o,l=""!==n,l=l&&i[n],l=l&&"function"==typeof i[n][o],l&&i[n][o](t)},loadEvents:function(){o.fire("common"),n.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(n,a){o.fire(a),o.fire(a,"finalize")}),o.fire("common","finalize")}};n(document).ready(o.loadEvents)}(jQuery);
//# sourceMappingURL=main.js.map
