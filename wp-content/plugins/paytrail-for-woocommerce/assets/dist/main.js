!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define("paytrail",[],e):"object"==typeof exports?exports.paytrail=e():t.paytrail=e()}(self,(()=>(()=>{var t={4043:(t,e,r)=>{t.exports={default:r(7185),__esModule:!0}},7185:(t,e,r)=>{r(1867),r(2586),t.exports=r(4579).Array.from},5663:t=>{t.exports=function(t){if("function"!=typeof t)throw TypeError(t+" is not a function!");return t}},2159:(t,e,r)=>{var n=r(6727);t.exports=function(t){if(!n(t))throw TypeError(t+" is not an object!");return t}},7428:(t,e,r)=>{var n=r(7932),o=r(8728),i=r(6531);t.exports=function(t){return function(e,r,u){var a,c=n(e),s=o(c.length),f=i(u,s);if(t&&r!=r){for(;s>f;)if((a=c[f++])!=a)return!0}else for(;s>f;f++)if((t||f in c)&&c[f]===r)return t||f||0;return!t&&-1}}},4677:(t,e,r)=>{var n=r(2894),o=r(2939)("toStringTag"),i="Arguments"==n(function(){return arguments}());t.exports=function(t){var e,r,u;return void 0===t?"Undefined":null===t?"Null":"string"==typeof(r=function(t,e){try{return t[e]}catch(t){}}(e=Object(t),o))?r:i?n(e):"Object"==(u=n(e))&&"function"==typeof e.callee?"Arguments":u}},2894:t=>{var e={}.toString;t.exports=function(t){return e.call(t).slice(8,-1)}},4579:t=>{var e=t.exports={version:"2.6.12"};"number"==typeof __e&&(__e=e)},2445:(t,e,r)=>{"use strict";var n=r(4743),o=r(3101);t.exports=function(t,e,r){e in t?n.f(t,e,o(0,r)):t[e]=r}},9216:(t,e,r)=>{var n=r(5663);t.exports=function(t,e,r){if(n(t),void 0===e)return t;switch(r){case 1:return function(r){return t.call(e,r)};case 2:return function(r,n){return t.call(e,r,n)};case 3:return function(r,n,o){return t.call(e,r,n,o)}}return function(){return t.apply(e,arguments)}}},8333:t=>{t.exports=function(t){if(null==t)throw TypeError("Can't call method on  "+t);return t}},9666:(t,e,r)=>{t.exports=!r(7929)((function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a}))},7467:(t,e,r)=>{var n=r(6727),o=r(3938).document,i=n(o)&&n(o.createElement);t.exports=function(t){return i?o.createElement(t):{}}},3338:t=>{t.exports="constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")},3856:(t,e,r)=>{var n=r(3938),o=r(4579),i=r(9216),u=r(1818),a=r(7069),c="prototype",s=function(t,e,r){var f,l,p,d=t&s.F,v=t&s.G,y=t&s.S,m=t&s.P,h=t&s.B,x=t&s.W,g=v?o:o[e]||(o[e]={}),w=g[c],b=v?n:y?n[e]:(n[e]||{})[c];for(f in v&&(r=e),r)(l=!d&&b&&void 0!==b[f])&&a(g,f)||(p=l?b[f]:r[f],g[f]=v&&"function"!=typeof b[f]?r[f]:h&&l?i(p,n):x&&b[f]==p?function(t){var e=function(e,r,n){if(this instanceof t){switch(arguments.length){case 0:return new t;case 1:return new t(e);case 2:return new t(e,r)}return new t(e,r,n)}return t.apply(this,arguments)};return e[c]=t[c],e}(p):m&&"function"==typeof p?i(Function.call,p):p,m&&((g.virtual||(g.virtual={}))[f]=p,t&s.R&&w&&!w[f]&&u(w,f,p)))};s.F=1,s.G=2,s.S=4,s.P=8,s.B=16,s.W=32,s.U=64,s.R=128,t.exports=s},7929:t=>{t.exports=function(t){try{return!!t()}catch(t){return!0}}},3938:t=>{var e=t.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=e)},7069:t=>{var e={}.hasOwnProperty;t.exports=function(t,r){return e.call(t,r)}},1818:(t,e,r)=>{var n=r(4743),o=r(3101);t.exports=r(9666)?function(t,e,r){return n.f(t,e,o(1,r))}:function(t,e,r){return t[e]=r,t}},4881:(t,e,r)=>{var n=r(3938).document;t.exports=n&&n.documentElement},3758:(t,e,r)=>{t.exports=!r(9666)&&!r(7929)((function(){return 7!=Object.defineProperty(r(7467)("div"),"a",{get:function(){return 7}}).a}))},799:(t,e,r)=>{var n=r(2894);t.exports=Object("z").propertyIsEnumerable(0)?Object:function(t){return"String"==n(t)?t.split(""):Object(t)}},5991:(t,e,r)=>{var n=r(5449),o=r(2939)("iterator"),i=Array.prototype;t.exports=function(t){return void 0!==t&&(n.Array===t||i[o]===t)}},6727:t=>{t.exports=function(t){return"object"==typeof t?null!==t:"function"==typeof t}},5602:(t,e,r)=>{var n=r(2159);t.exports=function(t,e,r,o){try{return o?e(n(r)[0],r[1]):e(r)}catch(e){var i=t.return;throw void 0!==i&&n(i.call(t)),e}}},3945:(t,e,r)=>{"use strict";var n=r(8989),o=r(3101),i=r(5378),u={};r(1818)(u,r(2939)("iterator"),(function(){return this})),t.exports=function(t,e,r){t.prototype=n(u,{next:o(1,r)}),i(t,e+" Iterator")}},5700:(t,e,r)=>{"use strict";var n=r(6227),o=r(3856),i=r(7470),u=r(1818),a=r(5449),c=r(3945),s=r(5378),f=r(5089),l=r(2939)("iterator"),p=!([].keys&&"next"in[].keys()),d="keys",v="values",y=function(){return this};t.exports=function(t,e,r,m,h,x,g){c(r,e,m);var w,b,O,_=function(t){if(!p&&t in L)return L[t];switch(t){case d:case v:return function(){return new r(this,t)}}return function(){return new r(this,t)}},j=e+" Iterator",S=h==v,E=!1,L=t.prototype,P=L[l]||L["@@iterator"]||h&&L[h],M=P||_(h),A=h?S?_("entries"):M:void 0,T="Array"==e&&L.entries||P;if(T&&(O=f(T.call(new t)))!==Object.prototype&&O.next&&(s(O,j,!0),n||"function"==typeof O[l]||u(O,l,y)),S&&P&&P.name!==v&&(E=!0,M=function(){return P.call(this)}),n&&!g||!p&&!E&&L[l]||u(L,l,M),a[e]=M,a[j]=y,h)if(w={values:S?M:_(v),keys:x?M:_(d),entries:A},g)for(b in w)b in L||i(L,b,w[b]);else o(o.P+o.F*(p||E),e,w);return w}},6630:(t,e,r)=>{var n=r(2939)("iterator"),o=!1;try{var i=[7][n]();i.return=function(){o=!0},Array.from(i,(function(){throw 2}))}catch(t){}t.exports=function(t,e){if(!e&&!o)return!1;var r=!1;try{var i=[7],u=i[n]();u.next=function(){return{done:r=!0}},i[n]=function(){return u},t(i)}catch(t){}return r}},5449:t=>{t.exports={}},6227:t=>{t.exports=!0},8989:(t,e,r)=>{var n=r(2159),o=r(7856),i=r(3338),u=r(7281)("IE_PROTO"),a=function(){},c="prototype",s=function(){var t,e=r(7467)("iframe"),n=i.length;for(e.style.display="none",r(4881).appendChild(e),e.src="javascript:",(t=e.contentWindow.document).open(),t.write("<script>document.F=Object<\/script>"),t.close(),s=t.F;n--;)delete s[c][i[n]];return s()};t.exports=Object.create||function(t,e){var r;return null!==t?(a[c]=n(t),r=new a,a[c]=null,r[u]=t):r=s(),void 0===e?r:o(r,e)}},4743:(t,e,r)=>{var n=r(2159),o=r(3758),i=r(3206),u=Object.defineProperty;e.f=r(9666)?Object.defineProperty:function(t,e,r){if(n(t),e=i(e,!0),n(r),o)try{return u(t,e,r)}catch(t){}if("get"in r||"set"in r)throw TypeError("Accessors not supported!");return"value"in r&&(t[e]=r.value),t}},7856:(t,e,r)=>{var n=r(4743),o=r(2159),i=r(6162);t.exports=r(9666)?Object.defineProperties:function(t,e){o(t);for(var r,u=i(e),a=u.length,c=0;a>c;)n.f(t,r=u[c++],e[r]);return t}},5089:(t,e,r)=>{var n=r(7069),o=r(6530),i=r(7281)("IE_PROTO"),u=Object.prototype;t.exports=Object.getPrototypeOf||function(t){return t=o(t),n(t,i)?t[i]:"function"==typeof t.constructor&&t instanceof t.constructor?t.constructor.prototype:t instanceof Object?u:null}},2963:(t,e,r)=>{var n=r(7069),o=r(7932),i=r(7428)(!1),u=r(7281)("IE_PROTO");t.exports=function(t,e){var r,a=o(t),c=0,s=[];for(r in a)r!=u&&n(a,r)&&s.push(r);for(;e.length>c;)n(a,r=e[c++])&&(~i(s,r)||s.push(r));return s}},6162:(t,e,r)=>{var n=r(2963),o=r(3338);t.exports=Object.keys||function(t){return n(t,o)}},3101:t=>{t.exports=function(t,e){return{enumerable:!(1&t),configurable:!(2&t),writable:!(4&t),value:e}}},7470:(t,e,r)=>{t.exports=r(1818)},5378:(t,e,r)=>{var n=r(4743).f,o=r(7069),i=r(2939)("toStringTag");t.exports=function(t,e,r){t&&!o(t=r?t:t.prototype,i)&&n(t,i,{configurable:!0,value:e})}},7281:(t,e,r)=>{var n=r(250)("keys"),o=r(5730);t.exports=function(t){return n[t]||(n[t]=o(t))}},250:(t,e,r)=>{var n=r(4579),o=r(3938),i="__core-js_shared__",u=o[i]||(o[i]={});(t.exports=function(t,e){return u[t]||(u[t]=void 0!==e?e:{})})("versions",[]).push({version:n.version,mode:r(6227)?"pure":"global",copyright:"© 2020 Denis Pushkarev (zloirock.ru)"})},510:(t,e,r)=>{var n=r(1052),o=r(8333);t.exports=function(t){return function(e,r){var i,u,a=String(o(e)),c=n(r),s=a.length;return c<0||c>=s?t?"":void 0:(i=a.charCodeAt(c))<55296||i>56319||c+1===s||(u=a.charCodeAt(c+1))<56320||u>57343?t?a.charAt(c):i:t?a.slice(c,c+2):u-56320+(i-55296<<10)+65536}}},6531:(t,e,r)=>{var n=r(1052),o=Math.max,i=Math.min;t.exports=function(t,e){return(t=n(t))<0?o(t+e,0):i(t,e)}},1052:t=>{var e=Math.ceil,r=Math.floor;t.exports=function(t){return isNaN(t=+t)?0:(t>0?r:e)(t)}},7932:(t,e,r)=>{var n=r(799),o=r(8333);t.exports=function(t){return n(o(t))}},8728:(t,e,r)=>{var n=r(1052),o=Math.min;t.exports=function(t){return t>0?o(n(t),9007199254740991):0}},6530:(t,e,r)=>{var n=r(8333);t.exports=function(t){return Object(n(t))}},3206:(t,e,r)=>{var n=r(6727);t.exports=function(t,e){if(!n(t))return t;var r,o;if(e&&"function"==typeof(r=t.toString)&&!n(o=r.call(t)))return o;if("function"==typeof(r=t.valueOf)&&!n(o=r.call(t)))return o;if(!e&&"function"==typeof(r=t.toString)&&!n(o=r.call(t)))return o;throw TypeError("Can't convert object to primitive value")}},5730:t=>{var e=0,r=Math.random();t.exports=function(t){return"Symbol(".concat(void 0===t?"":t,")_",(++e+r).toString(36))}},2939:(t,e,r)=>{var n=r(250)("wks"),o=r(5730),i=r(3938).Symbol,u="function"==typeof i;(t.exports=function(t){return n[t]||(n[t]=u&&i[t]||(u?i:o)("Symbol."+t))}).store=n},3728:(t,e,r)=>{var n=r(4677),o=r(2939)("iterator"),i=r(5449);t.exports=r(4579).getIteratorMethod=function(t){if(null!=t)return t[o]||t["@@iterator"]||i[n(t)]}},2586:(t,e,r)=>{"use strict";var n=r(9216),o=r(3856),i=r(6530),u=r(5602),a=r(5991),c=r(8728),s=r(2445),f=r(3728);o(o.S+o.F*!r(6630)((function(t){Array.from(t)})),"Array",{from:function(t){var e,r,o,l,p=i(t),d="function"==typeof this?this:Array,v=arguments.length,y=v>1?arguments[1]:void 0,m=void 0!==y,h=0,x=f(p);if(m&&(y=n(y,v>2?arguments[2]:void 0,2)),null==x||d==Array&&a(x))for(r=new d(e=c(p.length));e>h;h++)s(r,h,m?y(p[h],h):p[h]);else for(l=x.call(p),r=new d;!(o=l.next()).done;h++)s(r,h,m?u(l,y,[o.value,h],!0):o.value);return r.length=h,r}})},1867:(t,e,r)=>{"use strict";var n=r(510)(!0);r(5700)(String,"String",(function(t){this._t=String(t),this._i=0}),(function(){var t,e=this._t,r=this._i;return r>=e.length?{value:void 0,done:!0}:(t=n(e,r),this._i+=t.length,{value:t,done:!1})}))},9529:(t,e,r)=>{"use strict";r.r(e)},1932:(t,e,r)=>{"use strict";r.r(e)}},e={};function r(n){var o=e[n];if(void 0!==o)return o.exports;var i=e[n]={exports:{}};return t[n](i,i.exports,r),i.exports}return r.r=t=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},(()=>{"use strict";var t,e=(t=r(4043))&&t.__esModule?t:{default:t};r(1932),r(9529);var n=void 0,o=!1,i=function t(){var e,r=document.getElementById("payment"),i=document.getElementsByClassName("payment_method_paytrail");new Date-n<300?setTimeout(t,300):(o=!1,e=i[0],Math.round(r.offsetWidth)<600?(e.classList.remove("col-wide"),e.classList.add("col-narrow")):(e.classList.remove("col-narrow"),e.classList.add("col-wide")))};window.initPaytrail=function(){var t=document.getElementsByClassName("paytrail-provider-group");1===t.length?(0,e.default)(t).map((function(t){t.style="display: none;";var r=document.getElementsByClassName("paytrail-woocommerce-payment-fields");(0,e.default)(r).map((function(t){return t.classList.remove("hidden")}))})):t.length>1&&(0,e.default)(t).map((function(t){t.addEventListener("click",(function(t){if(t.preventDefault(),this.classList.contains("selected"))return this.classList.remove("selected"),void this.nextSibling.classList.add("hidden");var r=document.getElementsByClassName("paytrail-provider-group selected");0!==r.length&&r[0].classList.remove("selected");var n=document.getElementsByClassName("paytrail-woocommerce-payment-fields");(0,e.default)(n).map((function(t){return t.classList.add("hidden")})),this.classList.add("selected"),this.nextSibling.classList.remove("hidden"),this.nextSibling.closest("ul").scrollIntoView(!1)}))}));var r=document.getElementsByClassName("paytrail-woocommerce-payment-fields--list-item paytrail-for-woocommerce-tokenized-payment-method");r.length>0&&(0,e.default)(r).map((function(t){t.addEventListener("click",(function(t){t.preventDefault(),(0,e.default)(r).map((function(t){return t.classList.remove("selected")}));var n=this.childNodes[0].childNodes[0];void 0!==n&&(n.checked=!0,this.classList.add("selected"))}))})),i()},document.addEventListener("DOMContentLoaded",(function(t){initPaytrail()})),window.addEventListener("resize",(function(){n=new Date,!1===o&&(o=!0,setTimeout(i,300))}))})(),{}})()));