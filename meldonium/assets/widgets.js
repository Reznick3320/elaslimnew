!function(e){var t={};function n(i){if(t[i])return t[i].exports;var o=t[i]={i:i,l:!1,exports:{}};return e[i].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:i})},n.r=function(e){Object.defineProperty(e,"__esModule",{value:!0})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=100)}({1:function(e,t){e.exports=function(e){var t=[];return t.toString=function(){return this.map(function(t){var n=function(e,t){var n=e[1]||"",i=e[3];if(!i)return n;if(t&&"function"==typeof btoa){var o=(a=i,"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(a))))+" */"),r=i.sources.map(function(e){return"/*# sourceURL="+i.sourceRoot+e+" */"});return[n].concat(r).concat([o]).join("\n")}var a;return[n].join("\n")}(t,e);return t[2]?"@media "+t[2]+"{"+n+"}":n}).join("")},t.i=function(e,n){"string"==typeof e&&(e=[[null,e,""]]);for(var i={},o=0;o<this.length;o++){var r=this[o][0];"number"==typeof r&&(i[r]=!0)}for(o=0;o<e.length;o++){var a=e[o];"number"==typeof a[0]&&i[a[0]]||(n&&!a[2]?a[2]=n:n&&(a[2]="("+a[2]+") and ("+n+")"),t.push(a))}},t}},100:function(e,t,n){"use strict";n.r(t);var i=n(76),o=n.n(i);n(104);document.body.insertAdjacentHTML("beforeend",o.a);var r,a,l=window.meldoniumWidgetsConfig,s=l.fakeorders.enabled&&l.fakeorders.insertGeo||l.fastdelivery.enabled||l.geofeedback.enabled;void 0!==l&&(s&&(r=function(e){window.userGeo=e,void 0!==window.userGeo&&(function(e){if(e.enabled&&(e.mobile||window.matchMedia("(min-width: 601px)").matches)){var t=document.querySelector(".meldonium-fastdelivery");t.style.backgroundColor=e.backgroundColor,t.style.color=e.textColor,window.matchMedia("(min-width: 601px)").matches&&(t.style.borderRadius=e.borderRadius+"px"),t.querySelector(".meldonium-fastdelivery__close").addEventListener("click",function(){t.style.display="none"},!1),t.querySelector(".meldonium-fastdelivery__city").innerHTML=window.userGeo,t.style.display="inline-flex",window.setTimeout(function(){t.style.opacity=1},50)}}(l.fastdelivery),function(e){e.enabled&&Array.prototype.forEach.call(document.querySelectorAll(".meldonium-geo"),function(e){e.innerHTML=window.userGeo})}(l.geofeedback))},(a=document.createElement("script")).src="https://api-maps.yandex.ru/2.0-stable/?load=package.map&lang=ru-RU",a.onload=function(){window.ymaps.ready(function(){r(window.ymaps.geolocation.city)})},document.head.appendChild(a)),function(e){if(e.enabled){var t=document.querySelector(".meldonium-fakeorders");t.style.backgroundColor=e.backgroundColor,t.style.color=e.textColor,t.querySelector(".meldonium-fakeorders__icon").style.fill=e.textColor,window.matchMedia("(min-width: 601px)").matches&&(t.style.borderRadius=e.borderRadius+"px"),(e.mobile||window.matchMedia("(min-width: 601px)").matches)&&window.setTimeout(function e(){n(),window.setTimeout(e,1e3*(Math.floor(60*Math.random())+30))},1e4)}function n(){t.querySelector(".meldonium-fakeorders__text").innerHTML=function(){var t=[];e.men.length>0&&t.push("men"),e.women.length>0&&t.push("women");var n=t[Math.floor(Math.random()*t.length)],i=e[n][Math.floor(Math.random()*e[n].length)],o=e.cities[Math.floor(Math.random()*e.cities.length)];e.insertGeo&&void 0!==window.userGeo&&Math.random()<=.3&&(o=window.userGeo);for(var r=Math.floor(Math.random()*e.maxKinds)+1,a=[],l=[],s=0;s<r;s+=1){var d=Math.floor(Math.random()*e.goods.length);if(!l.includes(d)){var u=e.goods[d],c=Math.floor(Math.random()*e.maxItems)+1;a.push(u+" - "+c+" "+e.measure),l.push(d)}}var m=i+" из г."+o+("men"===n?" сделал":" сделала")+" заказ:<br/>";return a.forEach(function(e){m+=e+"<br/>"}),m}(),t.style.display="inline-flex",window.setTimeout(function(){t.style.opacity=1},50),window.setTimeout(function(){t.style.opacity=0,window.setTimeout(function(){t.style.display="none"},1e3)},7e3)}}(l.fakeorders),function(e){if(e.enabled&&(e.mobile||window.matchMedia("(min-width: 601px)").matches)){var t=new Date,n=t.getDate(),i=(n%4+6)/5,o=(n%3+5)/100,r=60*t.getHours()+t.getMinutes(),a=Math.floor(r*i),l=Math.floor(a*o),s=a-Math.floor((r-1)*i),d=Math.floor(5*i)+t.getMinutes()%(s+1),u=document.querySelector(".meldonium-panel");u.style.backgroundColor=e.backgroundColor,u.style.color=e.textColor,u.querySelector(".meldonium-panel__visitors-today").innerHTML=a,u.querySelector(".meldonium-panel__deliveries-today").innerHTML=l,u.querySelector(".meldonium-panel__visitors-now").innerHTML=d,u.style.display="flex",setTimeout(function(){document.body.style.marginTop=u.offsetHeight+"px"},300)}}(l.panel),function(e){e.enabled&&setTimeout(function(){var t=document.querySelector(".meldonium-popup");if(t.querySelector(".meldonium-popup__title").innerHTML=e.title,t.querySelector(".meldonium-popup__text").innerHTML=e.text,e.image){var n=t.querySelector(".meldonium-popup__image");n.src="meldonium/uploads/"+e.image,n.style.display="block"}t.style.color=e.textColor,t.style.backgroundColor=e.backgroundColor,Array.prototype.forEach.call(document.querySelectorAll(".meldonium-popup__input"),function(t){t.style.borderRadius=e.borderRadius+"px"});var i=t.querySelector(".meldonium-popup__submit");i.value=e.buttonText,i.style.backgroundColor=e.buttonBackgroundColor,i.style.color=e.buttonTextColor,document.body.addEventListener("mouseleave",function n(){var i=void 0;if(e.timer){if(i=parseInt(document.cookie.replace(/(?:(?:^|.*;\s*)timerStart\s*=\s*([^;]*).*$)|^.*$/,"$1"),10)){if(60*e.timer-Math.floor((Date.now()-i)/1e3)<=0)return}else{var o=new Date;i=o.getTime();var r=new Date(o.getFullYear(),o.getMonth(),o.getDate(),23,59,59);document.cookie="timerStart="+i+";expires="+r.toUTCString()}!function(e,n){var i=void 0,o=void 0,r=void 0,a=void 0,l=t.querySelector(".meldonium-popup__timer");function s(){i=e-Math.floor((Date.now()-n)/1e3),o=Math.floor(i/60),r=i%60,o=o<10?"0"+o:o,r=r<10?"0"+r:r,l.textContent=o+":"+r,i<=0&&clearInterval(a)}s(),l.style.opacity=1,a=setInterval(s,1e3)}(60*e.timer,i)}t.style.display="flex",setTimeout(function(){t.style.opacity=1},50),document.body.removeEventListener("mouseleave",n)}),t.querySelector(".meldonium-popup__close").addEventListener("click",function(){t.style.opacity=0,setTimeout(function(){t.style.display="none"},400)})},5e3)}(l.popup))},103:function(e,t,n){(e.exports=n(1)(!1)).push([e.i,".meldonium-widgets .meldonium-widget{-webkit-box-sizing:border-box;box-sizing:border-box;z-index:999999;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:13px;line-height:1.5;-webkit-box-shadow:2px 2px 6px 1px rgba(0,0,0,.2);box-shadow:2px 2px 6px 1px rgba(0,0,0,.2);-webkit-transition:opacity .5s;transition:opacity .5s;position:fixed;color:#fff;background-color:#333;text-align:left;text-align:initial;border:none;border-radius:unset;alignment-baseline:initial;-webkit-animation:none 0s ease 0s 1 normal none running;animation:none 0s ease 0s 1 normal none running;-webkit-animation:initial;animation:initial;-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-backface-visibility:initial;backface-visibility:initial;vertical-align:baseline;vertical-align:initial}.meldonium-widgets .meldonium-widget,.meldonium-widgets .meldonium-widget *{-ms-flex-line-pack:initial;align-content:initial;-webkit-box-align:initial;-ms-flex-align:initial;align-items:initial;-ms-flex-item-align:initial;align-self:auto}.meldonium-widgets .meldonium-widget *{text-transform:none;font-style:normal;font-family:inherit;font-size:inherit;color:inherit;vertical-align:inherit;line-height:inherit;text-align:inherit;font-weight:400;letter-spacing:normal;margin:0;margin:initial;padding:0;padding:initial;width:auto;height:auto;position:static;-webkit-box-shadow:none;-webkit-box-shadow:initial;box-shadow:none;border-radius:0;border-radius:initial;border:medium none currentColor;border:initial;text-decoration:none;text-decoration:initial;float:none}.meldonium-widgets .meldonium-widget b,.meldonium-widgets .meldonium-widget strong{font-weight:700}.meldonium-widgets .meldonium-fakeorders{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;top:0;left:0;right:0;padding:15px 20px;opacity:0;display:none}@media (min-width:601px){.meldonium-widgets .meldonium-fakeorders{top:60px;right:20px;left:unset;border-radius:4px}}.meldonium-widgets .meldonium-fakeorders__icon{fill:#fff;line-height:0;margin:auto 0;-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}@media (min-width:601px){.meldonium-widgets .meldonium-fakeorders__icon{-webkit-box-ordinal-group:1;-ms-flex-order:0;order:0;margin:auto 20px auto 0}}.meldonium-widgets .meldonium-fakeorders__text{margin:auto 0;text-align:left}.meldonium-widgets .meldonium-fastdelivery{padding:15px 20px;text-align:left;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;opacity:0;display:none;width:100%;bottom:0;left:0}@media (min-width:601px){.meldonium-widgets .meldonium-fastdelivery{width:unset;bottom:20px;left:20px;border-radius:4px}}.meldonium-widgets .meldonium-fastdelivery__close{font-size:10px;margin:-3px -7px 0 8px;opacity:.6;cursor:pointer;-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2;line-height:1}.meldonium-widgets .meldonium-fastdelivery__close:hover{opacity:1}.meldonium-widgets .meldonium-panel{z-index:999998;padding:5px 0;-ms-flex-pack:distribute;justify-content:space-around}.meldonium-widgets .meldonium-panel,.meldonium-widgets .meldonium-popup{display:none;top:0;left:0;right:0;text-align:center}.meldonium-widgets .meldonium-popup{bottom:0;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;z-index:9999999;font-size:20px;opacity:0;overflow:auto;}.meldonium-widgets .meldonium-popup__close{position:absolute;top:50px;right:40px;line-height:0;margin:0;font-size:40px;opacity:.7;cursor:pointer;-webkit-transition:opacity .15s;transition:opacity .15s}.meldonium-widgets .meldonium-popup__close:hover{opacity:1}.meldonium-widgets .meldonium-popup__title{font-size:42px;max-width:900px;margin:0 auto;background:none;text-transform:none}.meldonium-widgets .meldonium-popup__text{margin:40px auto;max-width:700px}.meldonium-widgets .meldonium-popup__timer{-webkit-transition:opacity .3s;transition:opacity .3s;font-size:42px;opacity:0;margin-bottom:20px}.meldonium-widgets .meldonium-popup__image{max-width:300px;height:auto;margin:40px auto 0}.meldonium-widgets .meldonium-popup__form{background:none;max-width:unset}.meldonium-widgets .meldonium-popup__input{border:1px solid #ccc;background-color:#fff;padding:7px 20px;font-size:16px;line-height:inherit;font-weight:inherit;text-align:left;color:#000;display:inline;width:auto}.meldonium-widgets .meldonium-popup__submit{cursor:pointer;border:none;padding:8px 20px}.meldonium-widgets .meldonium-popup__submit:hover{-webkit-transform:translateY(-1px);transform:translateY(-1px)}",""])},104:function(e,t,n){var i=n(103);"string"==typeof i&&(i=[[e.i,i,""]]);var o={insertInto:"body",hmr:!0,transform:void 0,insertInto:"body"};n(2)(i,o);i.locals&&(e.exports=i.locals)},2:function(e,t,n){var i,o,r={},a=(i=function(){return window&&document&&document.all&&!window.atob},function(){return void 0===o&&(o=i.apply(this,arguments)),o}),l=function(e){var t={};return function(e){if("function"==typeof e)return e();if(void 0===t[e]){var n=function(e){return document.querySelector(e)}.call(this,e);if(window.HTMLIFrameElement&&n instanceof window.HTMLIFrameElement)try{n=n.contentDocument.head}catch(e){n=null}t[e]=n}return t[e]}}(),s=null,d=0,u=[],c=n(52);function m(e,t){for(var n=0;n<e.length;n++){var i=e[n],o=r[i.id];if(o){o.refs++;for(var a=0;a<o.parts.length;a++)o.parts[a](i.parts[a]);for(;a<i.parts.length;a++)o.parts.push(y(i.parts[a],t))}else{var l=[];for(a=0;a<i.parts.length;a++)l.push(y(i.parts[a],t));r[i.id]={id:i.id,refs:1,parts:l}}}}function p(e,t){for(var n=[],i={},o=0;o<e.length;o++){var r=e[o],a=t.base?r[0]+t.base:r[0],l={css:r[1],media:r[2],sourceMap:r[3]};i[a]?i[a].parts.push(l):n.push(i[a]={id:a,parts:[l]})}return n}function f(e,t){var n=l(e.insertInto);if(!n)throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");var i=u[u.length-1];if("top"===e.insertAt)i?i.nextSibling?n.insertBefore(t,i.nextSibling):n.appendChild(t):n.insertBefore(t,n.firstChild),u.push(t);else if("bottom"===e.insertAt)n.appendChild(t);else{if("object"!=typeof e.insertAt||!e.insertAt.before)throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");var o=l(e.insertInto+" "+e.insertAt.before);n.insertBefore(t,o)}}function g(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e);var t=u.indexOf(e);t>=0&&u.splice(t,1)}function h(e){var t=document.createElement("style");return e.attrs.type="text/css",b(t,e.attrs),f(e,t),t}function b(e,t){Object.keys(t).forEach(function(n){e.setAttribute(n,t[n])})}function y(e,t){var n,i,o,r;if(t.transform&&e.css){if(!(r=t.transform(e.css)))return function(){};e.css=r}if(t.singleton){var a=d++;n=s||(s=h(t)),i=v.bind(null,n,a,!1),o=v.bind(null,n,a,!0)}else e.sourceMap&&"function"==typeof URL&&"function"==typeof URL.createObjectURL&&"function"==typeof URL.revokeObjectURL&&"function"==typeof Blob&&"function"==typeof btoa?(n=function(e){var t=document.createElement("link");return e.attrs.type="text/css",e.attrs.rel="stylesheet",b(t,e.attrs),f(e,t),t}(t),i=function(e,t,n){var i=n.css,o=n.sourceMap,r=void 0===t.convertToAbsoluteUrls&&o;(t.convertToAbsoluteUrls||r)&&(i=c(i));o&&(i+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(o))))+" */");var a=new Blob([i],{type:"text/css"}),l=e.href;e.href=URL.createObjectURL(a),l&&URL.revokeObjectURL(l)}.bind(null,n,t),o=function(){g(n),n.href&&URL.revokeObjectURL(n.href)}):(n=h(t),i=function(e,t){var n=t.css,i=t.media;i&&e.setAttribute("media",i);if(e.styleSheet)e.styleSheet.cssText=n;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(n))}}.bind(null,n),o=function(){g(n)});return i(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap)return;i(e=t)}else o()}}e.exports=function(e,t){if("undefined"!=typeof DEBUG&&DEBUG&&"object"!=typeof document)throw new Error("The style-loader cannot be used in a non-browser environment");(t=t||{}).attrs="object"==typeof t.attrs?t.attrs:{},t.singleton||"boolean"==typeof t.singleton||(t.singleton=a()),t.insertInto||(t.insertInto="head"),t.insertAt||(t.insertAt="bottom");var n=p(e,t);return m(n,t),function(e){for(var i=[],o=0;o<n.length;o++){var a=n[o];(l=r[a.id]).refs--,i.push(l)}e&&m(p(e,t),t);for(o=0;o<i.length;o++){var l;if(0===(l=i[o]).refs){for(var s=0;s<l.parts.length;s++)l.parts[s]();delete r[l.id]}}}};var w,x=(w=[],function(e,t){return w[e]=t,w.filter(Boolean).join("\n")});function v(e,t,n,i){var o=n?"":i.css;if(e.styleSheet)e.styleSheet.cssText=x(t,o);else{var r=document.createTextNode(o),a=e.childNodes;a[t]&&e.removeChild(a[t]),a.length?e.insertBefore(r,a[t]):e.appendChild(r)}}},52:function(e,t){e.exports=function(e){var t="undefined"!=typeof window&&window.location;if(!t)throw new Error("fixUrls requires window.location");if(!e||"string"!=typeof e)return e;var n=t.protocol+"//"+t.host,i=n+t.pathname.replace(/\/[^\/]*$/,"/");return e.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,function(e,t){var o,r=t.trim().replace(/^"(.*)"$/,function(e,t){return t}).replace(/^'(.*)'$/,function(e,t){return t});return/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(r)?e:(o=0===r.indexOf("//")?r:0===r.indexOf("/")?n+r:i+r.replace(/^\.\//,""),"url("+JSON.stringify(o)+")")})}},76:function(e,t){e.exports="<div class=\"meldonium-widgets\">\r\n\r\n<div class='meldonium-widget meldonium-fakeorders'>\r\n  <div class='meldonium-fakeorders__icon'>\r\n    <svg\r\n      version='1.1'\r\n      xmlns='http://www.w3.org/2000/svg'\r\n      width='50px'\r\n      height='50px'\r\n      viewBox='0 0 1000 1000'\r\n      enable-background='new 0 0 1000 1000'\r\n      xml:space='preserve'\r\n    >\r\n      <g>\r\n        <path d='M990,249.3c0-15-12.5-27.6-27.6-27.6c-4,0-8,0-12,0c0,0-0.1,0-0.1,0c-33.7,0-67.5,0-101.2,0c-83.7,0-167.4,0-251.1,0c-85.1,0-170.3,0-255.4,0c-35.6,0-71.2,0-106.8,0c-9.5-32.7-18.9-65.3-28.4-98c-2.2-7.5-4.3-15-6.5-22.4c-3.4-11.8-14.2-20.3-26.6-20.3c-45.6,0-91.1,0-136.7,0c-15,0-27.6,12.5-27.6,27.6c0,15,12.5,27.6,27.6,27.6c38.7,0,77.3,0,116,0c10.2,35,20.3,70.1,30.5,105.1c16.6,57.3,33.2,114.5,49.8,171.8c0.3,3.9,1.4,7.5,3.1,10.8c6.9,23.6,13.7,47.3,20.6,70.9c19.1,66,38.3,131.9,57.4,197.9c2.2,7.5,4.3,15,6.5,22.4c3.4,11.8,14.2,20.3,26.6,20.3c49.6,0,99.2,0,148.8,0c87.6,0,175.3,0,262.9,0c35.9,0,71.9,0,107.8,0c15,0,27.6-12.5,27.6-27.6c0-15-12.5-27.6-27.6-27.6c-49.6,0-99.2,0-148.8,0c-87.6,0-175.3,0-262.9,0c-29,0-58.1,0-87.1,0c-7.5-25.8-15-51.6-22.5-77.5c36.2,0,72.3,0,108.5,0c88.4,0,176.8,0,265.1,0c40.7,0,81.4,0,122.1,0c0,0,0.1,0,0.1,0c3.4,0,6.9,0,10.3,0c15,0,27.6-12.5,27.6-27.6c0-5.6-1.7-10.9-4.7-15.2c17.7-52.2,35.3-104.4,53-156.7c14.4-42.7,28.9-85.4,43.3-128.1C982.2,271.4,990,261.1,990,249.3z M912.9,276.9c-12,35.5-24,71.1-36.1,106.6c-37.8,0-75.5,0-113.3,0c-0.4,0-0.8,0-1.2,0c4.5-35.5,9-71.1,13.5-106.6c19.9,0,39.8,0,59.7,0C861.3,276.9,887.1,276.9,912.9,276.9z M741.5,547.6c4.6-36.3,9.2-72.6,13.8-109c34.3,0,68.6,0,102.9,0c-12.3,36.3-24.6,72.6-36.8,109C794.7,547.6,768.1,547.6,741.5,547.6z M610.6,547.6c0-36.3,0-72.6,0-109c14.6,0,29.1,0,43.7,0c15.3,0,30.5,0,45.8,0c-0.1,0.7-0.2,1.4-0.3,2.1c-4.5,35.6-9,71.2-13.6,106.8C661.1,547.6,635.8,547.6,610.6,547.6z M479.8,547.6c-4.6-36.3-9.2-72.6-13.8-109c29.8,0,59.7,0,89.5,0c0,1.5,0,2.9,0,4.4c0,34.9,0,69.7,0,104.6C530.2,547.6,505,547.6,479.8,547.6z M298.7,438.7c30.7,0,61.4,0,92,0c6.7,0,13.4,0,20.1,0c0.1,0.7,0.2,1.4,0.3,2.1c4.5,35.6,9,71.2,13.6,106.8c-31.4,0-62.9,0-94.3,0C319.8,511.3,309.2,475,298.7,438.7z M610.6,276.9c36.7,0,73.4,0,110,0c-4.5,35.5-9,71.1-13.5,106.6c-32.2,0-64.3,0-96.5,0c0-0.7,0-1.4,0-2.1C610.6,346.6,610.6,311.7,610.6,276.9z M555.5,383.5c-18.5,0-37,0-55.5,0c-13.6,0-27.3,0-40.9,0c-4.5-35.5-9-71.1-13.5-106.6c36.7,0,73.4,0,110,0C555.5,312.4,555.5,348,555.5,383.5z M329,276.9c20.4,0,40.8,0,61.2,0c4.5,35.5,9,71.1,13.5,106.6c-38.2,0-76.4,0-114.7,0c-2.1,0-4.3,0-6.4,0c-6-20.6-12-41.2-17.9-61.8c-4.3-14.9-8.7-29.9-13-44.8C277.5,276.9,303.3,276.9,329,276.9z'></path>\r\n        <path d='M516.1,841.7c-2.4-39.4-34.1-70.1-74-70.9c-40.9-0.8-73.3,34.5-74.1,74.1c-0.8,40.9,34.5,73.3,74.1,74.1c39.8,0.8,71.5-32.6,74-70.9c0.1-1,0.2-2.1,0.1-3.2C516.2,843.8,516.2,842.7,516.1,841.7z'></path>\r\n        <path d='M847.1,841.7c-2.4-39.4-34.1-70.1-74-70.9c-40.9-0.8-73.3,34.5-74.1,74.1c-0.8,40.9,34.5,73.3,74.1,74.1c39.8,0.8,71.5-32.6,74-70.9c0.1-1,0.2-2.1,0.1-3.2C847.2,843.8,847.2,842.7,847.1,841.7z'></path>\r\n      </g>\r\n    </svg>\r\n  </div>\r\n  <div class='meldonium-fakeorders__text'></div>\r\n</div>\r\n\r\n<div class='meldonium-widget meldonium-fastdelivery'>\r\n  <span\r\n    class='meldonium-fastdelivery__close'\r\n    title='Закрыть'\r\n  >\r\n    ✖\r\n  </span>\r\n  <div class='meldonium-fastdelivery__text'>\r\n    Действует быстрая доставка в<br>\r\n    г.<span class='meldonium-fastdelivery__city'></span>\r\n  </div>\r\n</div>\r\n\r\n<div class='meldonium-widget meldonium-panel'>\r\n  <span>Посетителей сегодня: <b class='meldonium-panel__visitors-today'></b></span>\r\n  <span>Сейчас на сайте: <b class='meldonium-panel__visitors-now'></b></span>\r\n  <span>Доставок сегодня: <b class='meldonium-panel__deliveries-today'></b></span>\r\n</div>\r\n\r\n<div class='meldonium-widget meldonium-popup'>\r\n  <span class=\"meldonium-popup__close\" title=\"Закрыть\">✖</span>\r\n  <h2 class=\"meldonium-popup__title\"></h2>\r\n  <p class=\"meldonium-popup__text\"></p>\r\n  <span class=\"meldonium-popup__timer\"></span>\r\n  <form class=\"meldonium-popup__form\" method=\"post\" action=\"thankyou.php\">\r\n    <input\r\n      type='tel'\r\n      name=\"Телефон\"\r\n      placeholder='Телефон'\r\n      class=\"meldonium-popup__input\"\r\n      required\r\n    >\r\n    <input\r\n      type='submit'\r\n      value='Отправить'\r\n      class=\"meldonium-popup__input meldonium-popup__submit\"\r\n    >\r\n  </form>\r\n  <img class=\"meldonium-popup__image\"/>\r\n</div>\r\n\r\n</div>\r\n"}});