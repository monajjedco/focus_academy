!function(n){var s="fullmod-showing",i="fullmod-shown",a="fullmod-hiding",d="fullmod-hidden",u="fullmod-open",r=n(document.body),f=function(){var n,e=document.createElement("fakeelement"),o={transition:"transitionend",OTransition:"oTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(n in o)if(void 0!==e.style[n])return o[n]}();if(void 0!==f){var m=0;n.fn.fullmod=function(e){e=n.extend({onShowing:null,onShown:null,onHiding:null,onHidden:null},e);var l=function(n,e,o){return"function"==typeof n?n.call(e,o):null},o=function(n,e,o){return!1===l(n,e,o)},t={};return 0===this.length?(console.warn("No jQuery object specified"),null):(t.$element=this,t.show=function(n){t.$element.hasClass(s)||t.$element.hasClass(i)||o(e.onShowing,t,n)||(f&&t.$element.one(f,function(){t.$element.removeClass(s).addClass(i),l(e.onShown,t)}),t.$element.removeClass(d).addClass(s).css("top",0),m++,r.addClass(u))},t.hide=function(n){t.$element.hasClass(a)||t.$element.hasClass(d)||o(e.onHiding,t,n)||(f&&t.$element.one(f,function(){t.$element.removeClass(a).addClass(d),l(e.onHidden,t)}),t.$element.removeClass(i).addClass(a).css("top",""),0===--m&&r.removeClass(u))},this.find(".btn-close").click(function(n){n.preventDefault(),t.hide()}),t.$element.addClass(d),t)}}else console.warn("No transitionend event found. Don' t use FullMod.")}(jQuery);