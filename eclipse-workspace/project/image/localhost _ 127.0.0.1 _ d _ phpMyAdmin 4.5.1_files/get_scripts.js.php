/*! jQuery v1.11.1 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */
!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=c.slice,e=c.concat,f=c.push,g=c.indexOf,h={},i=h.toString,j=h.hasOwnProperty,k={},l="1.11.1",m=function(a,b){return new m.fn.init(a,b)},n=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,o=/^-ms-/,p=/-([\da-z])/gi,q=function(a,b){return b.toUpperCase()};m.fn=m.prototype={jquery:l,constructor:m,selector:"",length:0,toArray:function(){return d.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:d.call(this)},pushStack:function(a){var b=m.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a,b){return m.each(this,a,b)},map:function(a){return this.pushStack(m.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(d.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:c.sort,splice:c.splice},m.extend=m.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||m.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(e=arguments[h]))for(d in e)a=g[d],c=e[d],g!==c&&(j&&c&&(m.isPlainObject(c)||(b=m.isArray(c)))?(b?(b=!1,f=a&&m.isArray(a)?a:[]):f=a&&m.isPlainObject(a)?a:{},g[d]=m.extend(j,f,c)):void 0!==c&&(g[d]=c));return g},m.extend({expando:"jQuery"+(l+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===m.type(a)},isArray:Array.isArray||function(a){return"array"===m.type(a)},isWindow:function(a){return null!=a&&a==a.window},isNumeric:function(a){return!m.isArray(a)&&a-parseFloat(a)>=0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},isPlainObject:function(a){var b;if(!a||"object"!==m.type(a)||a.nodeType||m.isWindow(a))return!1;try{if(a.constructor&&!j.call(a,"constructor")&&!j.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}if(k.ownLast)for(b in a)return j.call(a,b);for(b in a);return void 0===b||j.call(a,b)},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?h[i.call(a)]||"object":typeof a},globalEval:function(b){b&&m.trim(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(o,"ms-").replace(p,q)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,c){var d,e=0,f=a.length,g=r(a);if(c){if(g){for(;f>e;e++)if(d=b.apply(a[e],c),d===!1)break}else for(e in a)if(d=b.apply(a[e],c),d===!1)break}else if(g){for(;f>e;e++)if(d=b.call(a[e],e,a[e]),d===!1)break}else for(e in a)if(d=b.call(a[e],e,a[e]),d===!1)break;return a},trim:function(a){return null==a?"":(a+"").replace(n,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(r(Object(a))?m.merge(c,"string"==typeof a?[a]:a):f.call(c,a)),c},inArray:function(a,b,c){var d;if(b){if(g)return g.call(b,a,c);for(d=b.length,c=c?0>c?Math.max(0,d+c):c:0;d>c;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,b){var c=+b.length,d=0,e=a.length;while(c>d)a[e++]=b[d++];if(c!==c)while(void 0!==b[d])a[e++]=b[d++];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,f=0,g=a.length,h=r(a),i=[];if(h)for(;g>f;f++)d=b(a[f],f,c),null!=d&&i.push(d);else for(f in a)d=b(a[f],f,c),null!=d&&i.push(d);return e.apply([],i)},guid:1,proxy:function(a,b){var c,e,f;return"string"==typeof b&&(f=a[b],b=a,a=f),m.isFunction(a)?(c=d.call(arguments,2),e=function(){return a.apply(b||this,c.concat(d.call(arguments)))},e.guid=a.guid=a.guid||m.guid++,e):void 0},now:function(){return+new Date},support:k}),m.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){h["[object "+b+"]"]=b.toLowerCase()});function r(a){var b=a.length,c=m.type(a);return"function"===c||m.isWindow(a)?!1:1===a.nodeType&&b?!0:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var s=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u="sizzle"+-new Date,v=a.document,w=0,x=0,y=gb(),z=gb(),A=gb(),B=function(a,b){return a===b&&(l=!0),0},C="undefined",D=1<<31,E={}.hasOwnProperty,F=[],G=F.pop,H=F.push,I=F.push,J=F.slice,K=F.indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(this[b]===a)return b;return-1},L="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",N="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",O=N.replace("w","w#"),P="\\["+M+"*("+N+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+O+"))|)"+M+"*\\]",Q=":("+N+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+P+")*)|.*)\\)|)",R=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),S=new RegExp("^"+M+"*,"+M+"*"),T=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp("="+M+"*([^\\]'\"]*?)"+M+"*\\]","g"),V=new RegExp(Q),W=new RegExp("^"+O+"$"),X={ID:new RegExp("^#("+N+")"),CLASS:new RegExp("^\\.("+N+")"),TAG:new RegExp("^("+N.replace("w","w*")+")"),ATTR:new RegExp("^"+P),PSEUDO:new RegExp("^"+Q),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+L+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/^(?:input|select|textarea|button)$/i,Z=/^h\d$/i,$=/^[^{]+\{\s*\[native \w/,_=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ab=/[+~]/,bb=/'|\\/g,cb=new RegExp("\\\\([\\da-f]{1,6}"+M+"?|("+M+")|.)","ig"),db=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)};try{I.apply(F=J.call(v.childNodes),v.childNodes),F[v.childNodes.length].nodeType}catch(eb){I={apply:F.length?function(a,b){H.apply(a,J.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function fb(a,b,d,e){var f,h,j,k,l,o,r,s,w,x;if((b?b.ownerDocument||b:v)!==n&&m(b),b=b||n,d=d||[],!a||"string"!=typeof a)return d;if(1!==(k=b.nodeType)&&9!==k)return[];if(p&&!e){if(f=_.exec(a))if(j=f[1]){if(9===k){if(h=b.getElementById(j),!h||!h.parentNode)return d;if(h.id===j)return d.push(h),d}else if(b.ownerDocument&&(h=b.ownerDocument.getElementById(j))&&t(b,h)&&h.id===j)return d.push(h),d}else{if(f[2])return I.apply(d,b.getElementsByTagName(a)),d;if((j=f[3])&&c.getElementsByClassName&&b.getElementsByClassName)return I.apply(d,b.getElementsByClassName(j)),d}if(c.qsa&&(!q||!q.test(a))){if(s=r=u,w=b,x=9===k&&a,1===k&&"object"!==b.nodeName.toLowerCase()){o=g(a),(r=b.getAttribute("id"))?s=r.replace(bb,"\\$&"):b.setAttribute("id",s),s="[id='"+s+"'] ",l=o.length;while(l--)o[l]=s+qb(o[l]);w=ab.test(a)&&ob(b.parentNode)||b,x=o.join(",")}if(x)try{return I.apply(d,w.querySelectorAll(x)),d}catch(y){}finally{r||b.removeAttribute("id")}}}return i(a.replace(R,"$1"),b,d,e)}function gb(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function hb(a){return a[u]=!0,a}function ib(a){var b=n.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function jb(a,b){var c=a.split("|"),e=a.length;while(e--)d.attrHandle[c[e]]=b}function kb(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||D)-(~a.sourceIndex||D);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function lb(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function mb(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function nb(a){return hb(function(b){return b=+b,hb(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function ob(a){return a&&typeof a.getElementsByTagName!==C&&a}c=fb.support={},f=fb.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},m=fb.setDocument=function(a){var b,e=a?a.ownerDocument||a:v,g=e.defaultView;return e!==n&&9===e.nodeType&&e.documentElement?(n=e,o=e.documentElement,p=!f(e),g&&g!==g.top&&(g.addEventListener?g.addEventListener("unload",function(){m()},!1):g.attachEvent&&g.attachEvent("onunload",function(){m()})),c.attributes=ib(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=ib(function(a){return a.appendChild(e.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=$.test(e.getElementsByClassName)&&ib(function(a){return a.innerHTML="<div class='a'></div><div class='a i'></div>",a.firstChild.className="i",2===a.getElementsByClassName("i").length}),c.getById=ib(function(a){return o.appendChild(a).id=u,!e.getElementsByName||!e.getElementsByName(u).length}),c.getById?(d.find.ID=function(a,b){if(typeof b.getElementById!==C&&p){var c=b.getElementById(a);return c&&c.parentNode?[c]:[]}},d.filter.ID=function(a){var b=a.replace(cb,db);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(cb,db);return function(a){var c=typeof a.getAttributeNode!==C&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return typeof b.getElementsByTagName!==C?b.getElementsByTagName(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return typeof b.getElementsByClassName!==C&&p?b.getElementsByClassName(a):void 0},r=[],q=[],(c.qsa=$.test(e.querySelectorAll))&&(ib(function(a){a.innerHTML="<select msallowclip=''><option selected=''></option></select>",a.querySelectorAll("[msallowclip^='']").length&&q.push("[*^$]="+M+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||q.push("\\["+M+"*(?:value|"+L+")"),a.querySelectorAll(":checked").length||q.push(":checked")}),ib(function(a){var b=e.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&q.push("name"+M+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),q.push(",.*:")})),(c.matchesSelector=$.test(s=o.matches||o.webkitMatchesSelector||o.mozMatchesSelector||o.oMatchesSelector||o.msMatchesSelector))&&ib(function(a){c.disconnectedMatch=s.call(a,"div"),s.call(a,"[s!='']:x"),r.push("!=",Q)}),q=q.length&&new RegExp(q.join("|")),r=r.length&&new RegExp(r.join("|")),b=$.test(o.compareDocumentPosition),t=b||$.test(o.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},B=b?function(a,b){if(a===b)return l=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===e||a.ownerDocument===v&&t(v,a)?-1:b===e||b.ownerDocument===v&&t(v,b)?1:k?K.call(k,a)-K.call(k,b):0:4&d?-1:1)}:function(a,b){if(a===b)return l=!0,0;var c,d=0,f=a.parentNode,g=b.parentNode,h=[a],i=[b];if(!f||!g)return a===e?-1:b===e?1:f?-1:g?1:k?K.call(k,a)-K.call(k,b):0;if(f===g)return kb(a,b);c=a;while(c=c.parentNode)h.unshift(c);c=b;while(c=c.parentNode)i.unshift(c);while(h[d]===i[d])d++;return d?kb(h[d],i[d]):h[d]===v?-1:i[d]===v?1:0},e):n},fb.matches=function(a,b){return fb(a,null,null,b)},fb.matchesSelector=function(a,b){if((a.ownerDocument||a)!==n&&m(a),b=b.replace(U,"='$1']"),!(!c.matchesSelector||!p||r&&r.test(b)||q&&q.test(b)))try{var d=s.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return fb(b,n,null,[a]).length>0},fb.contains=function(a,b){return(a.ownerDocument||a)!==n&&m(a),t(a,b)},fb.attr=function(a,b){(a.ownerDocument||a)!==n&&m(a);var e=d.attrHandle[b.toLowerCase()],f=e&&E.call(d.attrHandle,b.toLowerCase())?e(a,b,!p):void 0;return void 0!==f?f:c.attributes||!p?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},fb.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},fb.uniqueSort=function(a){var b,d=[],e=0,f=0;if(l=!c.detectDuplicates,k=!c.sortStable&&a.slice(0),a.sort(B),l){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return k=null,a},e=fb.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=fb.selectors={cacheLength:50,createPseudo:hb,match:X,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(cb,db),a[3]=(a[3]||a[4]||a[5]||"").replace(cb,db),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||fb.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&fb.error(a[0]),a},PSEUDO:function(a){var b,c=!a[6]&&a[2];return X.CHILD.test(a[0])?null:(a[3]?a[2]=a[4]||a[5]||"":c&&V.test(c)&&(b=g(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(cb,db).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=y[a+" "];return b||(b=new RegExp("(^|"+M+")"+a+"("+M+"|$)"))&&y(a,function(a){return b.test("string"==typeof a.className&&a.className||typeof a.getAttribute!==C&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=fb.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),s=!i&&!h;if(q){if(f){while(p){l=b;while(l=l[p])if(h?l.nodeName.toLowerCase()===r:1===l.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&s){k=q[u]||(q[u]={}),j=k[a]||[],n=j[0]===w&&j[1],m=j[0]===w&&j[2],l=n&&q.childNodes[n];while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if(1===l.nodeType&&++m&&l===b){k[a]=[w,n,m];break}}else if(s&&(j=(b[u]||(b[u]={}))[a])&&j[0]===w)m=j[1];else while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if((h?l.nodeName.toLowerCase()===r:1===l.nodeType)&&++m&&(s&&((l[u]||(l[u]={}))[a]=[w,m]),l===b))break;return m-=e,m===d||m%d===0&&m/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||fb.error("unsupported pseudo: "+a);return e[u]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?hb(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=K.call(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:hb(function(a){var b=[],c=[],d=h(a.replace(R,"$1"));return d[u]?hb(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),!c.pop()}}),has:hb(function(a){return function(b){return fb(a,b).length>0}}),contains:hb(function(a){return function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:hb(function(a){return W.test(a||"")||fb.error("unsupported lang: "+a),a=a.replace(cb,db).toLowerCase(),function(b){var c;do if(c=p?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===o},focus:function(a){return a===n.activeElement&&(!n.hasFocus||n.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return Z.test(a.nodeName)},input:function(a){return Y.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:nb(function(){return[0]}),last:nb(function(a,b){return[b-1]}),eq:nb(function(a,b,c){return[0>c?c+b:c]}),even:nb(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:nb(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:nb(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:nb(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=lb(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=mb(b);function pb(){}pb.prototype=d.filters=d.pseudos,d.setFilters=new pb,g=fb.tokenize=function(a,b){var c,e,f,g,h,i,j,k=z[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){(!c||(e=S.exec(h)))&&(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=T.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(R," ")}),h=h.slice(c.length));for(g in d.filter)!(e=X[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?fb.error(a):z(a,i).slice(0)};function qb(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function rb(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=x++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j=[w,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(i=b[u]||(b[u]={}),(h=i[d])&&h[0]===w&&h[1]===f)return j[2]=h[2];if(i[d]=j,j[2]=a(b,c,g))return!0}}}function sb(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function tb(a,b,c){for(var d=0,e=b.length;e>d;d++)fb(a,b[d],c);return c}function ub(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),j&&b.push(h));return g}function vb(a,b,c,d,e,f){return d&&!d[u]&&(d=vb(d)),e&&!e[u]&&(e=vb(e,f)),hb(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||tb(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:ub(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=ub(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?K.call(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=ub(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):I.apply(g,r)})}function wb(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],h=g||d.relative[" "],i=g?1:0,k=rb(function(a){return a===b},h,!0),l=rb(function(a){return K.call(b,a)>-1},h,!0),m=[function(a,c,d){return!g&&(d||c!==j)||((b=c).nodeType?k(a,c,d):l(a,c,d))}];f>i;i++)if(c=d.relative[a[i].type])m=[rb(sb(m),c)];else{if(c=d.filter[a[i].type].apply(null,a[i].matches),c[u]){for(e=++i;f>e;e++)if(d.relative[a[e].type])break;return vb(i>1&&sb(m),i>1&&qb(a.slice(0,i-1).concat({value:" "===a[i-2].type?"*":""})).replace(R,"$1"),c,e>i&&wb(a.slice(i,e)),f>e&&wb(a=a.slice(e)),f>e&&qb(a))}m.push(c)}return sb(m)}function xb(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,h,i,k){var l,m,o,p=0,q="0",r=f&&[],s=[],t=j,u=f||e&&d.find.TAG("*",k),v=w+=null==t?1:Math.random()||.1,x=u.length;for(k&&(j=g!==n&&g);q!==x&&null!=(l=u[q]);q++){if(e&&l){m=0;while(o=a[m++])if(o(l,g,h)){i.push(l);break}k&&(w=v)}c&&((l=!o&&l)&&p--,f&&r.push(l))}if(p+=q,c&&q!==p){m=0;while(o=b[m++])o(r,s,g,h);if(f){if(p>0)while(q--)r[q]||s[q]||(s[q]=G.call(i));s=ub(s)}I.apply(i,s),k&&!f&&s.length>0&&p+b.length>1&&fb.uniqueSort(i)}return k&&(w=v,j=t),r};return c?hb(f):f}return h=fb.compile=function(a,b){var c,d=[],e=[],f=A[a+" "];if(!f){b||(b=g(a)),c=b.length;while(c--)f=wb(b[c]),f[u]?d.push(f):e.push(f);f=A(a,xb(e,d)),f.selector=a}return f},i=fb.select=function(a,b,e,f){var i,j,k,l,m,n="function"==typeof a&&a,o=!f&&g(a=n.selector||a);if(e=e||[],1===o.length){if(j=o[0]=o[0].slice(0),j.length>2&&"ID"===(k=j[0]).type&&c.getById&&9===b.nodeType&&p&&d.relative[j[1].type]){if(b=(d.find.ID(k.matches[0].replace(cb,db),b)||[])[0],!b)return e;n&&(b=b.parentNode),a=a.slice(j.shift().value.length)}i=X.needsContext.test(a)?0:j.length;while(i--){if(k=j[i],d.relative[l=k.type])break;if((m=d.find[l])&&(f=m(k.matches[0].replace(cb,db),ab.test(j[0].type)&&ob(b.parentNode)||b))){if(j.splice(i,1),a=f.length&&qb(j),!a)return I.apply(e,f),e;break}}}return(n||h(a,o))(f,b,!p,e,ab.test(a)&&ob(b.parentNode)||b),e},c.sortStable=u.split("").sort(B).join("")===u,c.detectDuplicates=!!l,m(),c.sortDetached=ib(function(a){return 1&a.compareDocumentPosition(n.createElement("div"))}),ib(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||jb("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&ib(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||jb("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),ib(function(a){return null==a.getAttribute("disabled")})||jb(L,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),fb}(a);m.find=s,m.expr=s.selectors,m.expr[":"]=m.expr.pseudos,m.unique=s.uniqueSort,m.text=s.getText,m.isXMLDoc=s.isXML,m.contains=s.contains;var t=m.expr.match.needsContext,u=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,v=/^.[^:#\[\.,]*$/;function w(a,b,c){if(m.isFunction(b))return m.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return m.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(v.test(b))return m.filter(b,a,c);b=m.filter(b,a)}return m.grep(a,function(a){return m.inArray(a,b)>=0!==c})}m.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?m.find.matchesSelector(d,a)?[d]:[]:m.find.matches(a,m.grep(b,function(a){return 1===a.nodeType}))},m.fn.extend({find:function(a){var b,c=[],d=this,e=d.length;if("string"!=typeof a)return this.pushStack(m(a).filter(function(){for(b=0;e>b;b++)if(m.contains(d[b],this))return!0}));for(b=0;e>b;b++)m.find(a,d[b],c);return c=this.pushStack(e>1?m.unique(c):c),c.selector=this.selector?this.selector+" "+a:a,c},filter:function(a){return this.pushStack(w(this,a||[],!1))},not:function(a){return this.pushStack(w(this,a||[],!0))},is:function(a){return!!w(this,"string"==typeof a&&t.test(a)?m(a):a||[],!1).length}});var x,y=a.document,z=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,A=m.fn.init=function(a,b){var c,d;if(!a)return this;if("string"==typeof a){if(c="<"===a.charAt(0)&&">"===a.charAt(a.length-1)&&a.length>=3?[null,a,null]:z.exec(a),!c||!c[1]&&b)return!b||b.jquery?(b||x).find(a):this.constructor(b).find(a);if(c[1]){if(b=b instanceof m?b[0]:b,m.merge(this,m.parseHTML(c[1],b&&b.nodeType?b.ownerDocument||b:y,!0)),u.test(c[1])&&m.isPlainObject(b))for(c in b)m.isFunction(this[c])?this[c](b[c]):this.attr(c,b[c]);return this}if(d=y.getElementById(c[2]),d&&d.parentNode){if(d.id!==c[2])return x.find(a);this.length=1,this[0]=d}return this.context=y,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):m.isFunction(a)?"undefined"!=typeof x.ready?x.ready(a):a(m):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),m.makeArray(a,this))};A.prototype=m.fn,x=m(y);var B=/^(?:parents|prev(?:Until|All))/,C={children:!0,contents:!0,next:!0,prev:!0};m.extend({dir:function(a,b,c){var d=[],e=a[b];while(e&&9!==e.nodeType&&(void 0===c||1!==e.nodeType||!m(e).is(c)))1===e.nodeType&&d.push(e),e=e[b];return d},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}}),m.fn.extend({has:function(a){var b,c=m(a,this),d=c.length;return this.filter(function(){for(b=0;d>b;b++)if(m.contains(this,c[b]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=t.test(a)||"string"!=typeof a?m(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&m.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?m.unique(f):f)},index:function(a){return a?"string"==typeof a?m.inArray(this[0],m(a)):m.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(m.unique(m.merge(this.get(),m(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function D(a,b){do a=a[b];while(a&&1!==a.nodeType);return a}m.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return m.dir(a,"parentNode")},parentsUntil:function(a,b,c){return m.dir(a,"parentNode",c)},next:function(a){return D(a,"nextSibling")},prev:function(a){return D(a,"previousSibling")},nextAll:function(a){return m.dir(a,"nextSibling")},prevAll:function(a){return m.dir(a,"previousSibling")},nextUntil:function(a,b,c){return m.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return m.dir(a,"previousSibling",c)},siblings:function(a){return m.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return m.sibling(a.firstChild)},contents:function(a){return m.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:m.merge([],a.childNodes)}},function(a,b){m.fn[a]=function(c,d){var e=m.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=m.filter(d,e)),this.length>1&&(C[a]||(e=m.unique(e)),B.test(a)&&(e=e.reverse())),this.pushStack(e)}});var E=/\S+/g,F={};function G(a){var b=F[a]={};return m.each(a.match(E)||[],function(a,c){b[c]=!0}),b}m.Callbacks=function(a){a="string"==typeof a?F[a]||G(a):m.extend({},a);var b,c,d,e,f,g,h=[],i=!a.once&&[],j=function(l){for(c=a.memory&&l,d=!0,f=g||0,g=0,e=h.length,b=!0;h&&e>f;f++)if(h[f].apply(l[0],l[1])===!1&&a.stopOnFalse){c=!1;break}b=!1,h&&(i?i.length&&j(i.shift()):c?h=[]:k.disable())},k={add:function(){if(h){var d=h.length;!function f(b){m.each(b,function(b,c){var d=m.type(c);"function"===d?a.unique&&k.has(c)||h.push(c):c&&c.length&&"string"!==d&&f(c)})}(arguments),b?e=h.length:c&&(g=d,j(c))}return this},remove:function(){return h&&m.each(arguments,function(a,c){var d;while((d=m.inArray(c,h,d))>-1)h.splice(d,1),b&&(e>=d&&e--,f>=d&&f--)}),this},has:function(a){return a?m.inArray(a,h)>-1:!(!h||!h.length)},empty:function(){return h=[],e=0,this},disable:function(){return h=i=c=void 0,this},disabled:function(){return!h},lock:function(){return i=void 0,c||k.disable(),this},locked:function(){return!i},fireWith:function(a,c){return!h||d&&!i||(c=c||[],c=[a,c.slice?c.slice():c],b?i.push(c):j(c)),this},fire:function(){return k.fireWith(this,arguments),this},fired:function(){return!!d}};return k},m.extend({Deferred:function(a){var b=[["resolve","done",m.Callbacks("once memory"),"resolved"],["reject","fail",m.Callbacks("once memory"),"rejected"],["notify","progress",m.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return m.Deferred(function(c){m.each(b,function(b,f){var g=m.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&m.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?m.extend(a,d):d}},e={};return d.pipe=d.then,m.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=d.call(arguments),e=c.length,f=1!==e||a&&m.isFunction(a.promise)?e:0,g=1===f?a:m.Deferred(),h=function(a,b,c){return function(e){b[a]=this,c[a]=arguments.length>1?d.call(arguments):e,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(e>1)for(i=new Array(e),j=new Array(e),k=new Array(e);e>b;b++)c[b]&&m.isFunction(c[b].promise)?c[b].promise().done(h(b,k,c)).fail(g.reject).progress(h(b,j,i)):--f;return f||g.resolveWith(k,c),g.promise()}});var H;m.fn.ready=function(a){return m.ready.promise().done(a),this},m.extend({isReady:!1,readyWait:1,holdReady:function(a){a?m.readyWait++:m.ready(!0)},ready:function(a){if(a===!0?!--m.readyWait:!m.isReady){if(!y.body)return setTimeout(m.ready);m.isReady=!0,a!==!0&&--m.readyWait>0||(H.resolveWith(y,[m]),m.fn.triggerHandler&&(m(y).triggerHandler("ready"),m(y).off("ready")))}}});function I(){y.addEventListener?(y.removeEventListener("DOMContentLoaded",J,!1),a.removeEventListener("load",J,!1)):(y.detachEvent("onreadystatechange",J),a.detachEvent("onload",J))}function J(){(y.addEventListener||"load"===event.type||"complete"===y.readyState)&&(I(),m.ready())}m.ready.promise=function(b){if(!H)if(H=m.Deferred(),"complete"===y.readyState)setTimeout(m.ready);else if(y.addEventListener)y.addEventListener("DOMContentLoaded",J,!1),a.addEventListener("load",J,!1);else{y.attachEvent("onreadystatechange",J),a.attachEvent("onload",J);var c=!1;try{c=null==a.frameElement&&y.documentElement}catch(d){}c&&c.doScroll&&!function e(){if(!m.isReady){try{c.doScroll("left")}catch(a){return setTimeout(e,50)}I(),m.ready()}}()}return H.promise(b)};var K="undefined",L;for(L in m(k))break;k.ownLast="0"!==L,k.inlineBlockNeedsLayout=!1,m(function(){var a,b,c,d;c=y.getElementsByTagName("body")[0],c&&c.style&&(b=y.createElement("div"),d=y.createElement("div"),d.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(d).appendChild(b),typeof b.style.zoom!==K&&(b.style.cssText="display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1",k.inlineBlockNeedsLayout=a=3===b.offsetWidth,a&&(c.style.zoom=1)),c.removeChild(d))}),function(){var a=y.createElement("div");if(null==k.deleteExpando){k.deleteExpando=!0;try{delete a.test}catch(b){k.deleteExpando=!1}}a=null}(),m.acceptData=function(a){var b=m.noData[(a.nodeName+" ").toLowerCase()],c=+a.nodeType||1;return 1!==c&&9!==c?!1:!b||b!==!0&&a.getAttribute("classid")===b};var M=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,N=/([A-Z])/g;function O(a,b,c){if(void 0===c&&1===a.nodeType){var d="data-"+b.replace(N,"-$1").toLowerCase();if(c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:M.test(c)?m.parseJSON(c):c}catch(e){}m.data(a,b,c)}else c=void 0}return c}function P(a){var b;for(b in a)if(("data"!==b||!m.isEmptyObject(a[b]))&&"toJSON"!==b)return!1;return!0}function Q(a,b,d,e){if(m.acceptData(a)){var f,g,h=m.expando,i=a.nodeType,j=i?m.cache:a,k=i?a[h]:a[h]&&h;
if(k&&j[k]&&(e||j[k].data)||void 0!==d||"string"!=typeof b)return k||(k=i?a[h]=c.pop()||m.guid++:h),j[k]||(j[k]=i?{}:{toJSON:m.noop}),("object"==typeof b||"function"==typeof b)&&(e?j[k]=m.extend(j[k],b):j[k].data=m.extend(j[k].data,b)),g=j[k],e||(g.data||(g.data={}),g=g.data),void 0!==d&&(g[m.camelCase(b)]=d),"string"==typeof b?(f=g[b],null==f&&(f=g[m.camelCase(b)])):f=g,f}}function R(a,b,c){if(m.acceptData(a)){var d,e,f=a.nodeType,g=f?m.cache:a,h=f?a[m.expando]:m.expando;if(g[h]){if(b&&(d=c?g[h]:g[h].data)){m.isArray(b)?b=b.concat(m.map(b,m.camelCase)):b in d?b=[b]:(b=m.camelCase(b),b=b in d?[b]:b.split(" ")),e=b.length;while(e--)delete d[b[e]];if(c?!P(d):!m.isEmptyObject(d))return}(c||(delete g[h].data,P(g[h])))&&(f?m.cleanData([a],!0):k.deleteExpando||g!=g.window?delete g[h]:g[h]=null)}}}m.extend({cache:{},noData:{"applet ":!0,"embed ":!0,"object ":"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(a){return a=a.nodeType?m.cache[a[m.expando]]:a[m.expando],!!a&&!P(a)},data:function(a,b,c){return Q(a,b,c)},removeData:function(a,b){return R(a,b)},_data:function(a,b,c){return Q(a,b,c,!0)},_removeData:function(a,b){return R(a,b,!0)}}),m.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=m.data(f),1===f.nodeType&&!m._data(f,"parsedAttrs"))){c=g.length;while(c--)g[c]&&(d=g[c].name,0===d.indexOf("data-")&&(d=m.camelCase(d.slice(5)),O(f,d,e[d])));m._data(f,"parsedAttrs",!0)}return e}return"object"==typeof a?this.each(function(){m.data(this,a)}):arguments.length>1?this.each(function(){m.data(this,a,b)}):f?O(f,a,m.data(f,a)):void 0},removeData:function(a){return this.each(function(){m.removeData(this,a)})}}),m.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=m._data(a,b),c&&(!d||m.isArray(c)?d=m._data(a,b,m.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=m.queue(a,b),d=c.length,e=c.shift(),f=m._queueHooks(a,b),g=function(){m.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return m._data(a,c)||m._data(a,c,{empty:m.Callbacks("once memory").add(function(){m._removeData(a,b+"queue"),m._removeData(a,c)})})}}),m.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?m.queue(this[0],a):void 0===b?this:this.each(function(){var c=m.queue(this,a,b);m._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&m.dequeue(this,a)})},dequeue:function(a){return this.each(function(){m.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=m.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=m._data(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var S=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,T=["Top","Right","Bottom","Left"],U=function(a,b){return a=b||a,"none"===m.css(a,"display")||!m.contains(a.ownerDocument,a)},V=m.access=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===m.type(c)){e=!0;for(h in c)m.access(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,m.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(m(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f},W=/^(?:checkbox|radio)$/i;!function(){var a=y.createElement("input"),b=y.createElement("div"),c=y.createDocumentFragment();if(b.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",k.leadingWhitespace=3===b.firstChild.nodeType,k.tbody=!b.getElementsByTagName("tbody").length,k.htmlSerialize=!!b.getElementsByTagName("link").length,k.html5Clone="<:nav></:nav>"!==y.createElement("nav").cloneNode(!0).outerHTML,a.type="checkbox",a.checked=!0,c.appendChild(a),k.appendChecked=a.checked,b.innerHTML="<textarea>x</textarea>",k.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue,c.appendChild(b),b.innerHTML="<input type='radio' checked='checked' name='t'/>",k.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,k.noCloneEvent=!0,b.attachEvent&&(b.attachEvent("onclick",function(){k.noCloneEvent=!1}),b.cloneNode(!0).click()),null==k.deleteExpando){k.deleteExpando=!0;try{delete b.test}catch(d){k.deleteExpando=!1}}}(),function(){var b,c,d=y.createElement("div");for(b in{submit:!0,change:!0,focusin:!0})c="on"+b,(k[b+"Bubbles"]=c in a)||(d.setAttribute(c,"t"),k[b+"Bubbles"]=d.attributes[c].expando===!1);d=null}();var X=/^(?:input|select|textarea)$/i,Y=/^key/,Z=/^(?:mouse|pointer|contextmenu)|click/,$=/^(?:focusinfocus|focusoutblur)$/,_=/^([^.]*)(?:\.(.+)|)$/;function ab(){return!0}function bb(){return!1}function cb(){try{return y.activeElement}catch(a){}}m.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,n,o,p,q,r=m._data(a);if(r){c.handler&&(i=c,c=i.handler,e=i.selector),c.guid||(c.guid=m.guid++),(g=r.events)||(g=r.events={}),(k=r.handle)||(k=r.handle=function(a){return typeof m===K||a&&m.event.triggered===a.type?void 0:m.event.dispatch.apply(k.elem,arguments)},k.elem=a),b=(b||"").match(E)||[""],h=b.length;while(h--)f=_.exec(b[h])||[],o=q=f[1],p=(f[2]||"").split(".").sort(),o&&(j=m.event.special[o]||{},o=(e?j.delegateType:j.bindType)||o,j=m.event.special[o]||{},l=m.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&m.expr.match.needsContext.test(e),namespace:p.join(".")},i),(n=g[o])||(n=g[o]=[],n.delegateCount=0,j.setup&&j.setup.call(a,d,p,k)!==!1||(a.addEventListener?a.addEventListener(o,k,!1):a.attachEvent&&a.attachEvent("on"+o,k))),j.add&&(j.add.call(a,l),l.handler.guid||(l.handler.guid=c.guid)),e?n.splice(n.delegateCount++,0,l):n.push(l),m.event.global[o]=!0);a=null}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,n,o,p,q,r=m.hasData(a)&&m._data(a);if(r&&(k=r.events)){b=(b||"").match(E)||[""],j=b.length;while(j--)if(h=_.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=m.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,n=k[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),i=f=n.length;while(f--)g=n[f],!e&&q!==g.origType||c&&c.guid!==g.guid||h&&!h.test(g.namespace)||d&&d!==g.selector&&("**"!==d||!g.selector)||(n.splice(f,1),g.selector&&n.delegateCount--,l.remove&&l.remove.call(a,g));i&&!n.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||m.removeEvent(a,o,r.handle),delete k[o])}else for(o in k)m.event.remove(a,o+b[j],c,d,!0);m.isEmptyObject(k)&&(delete r.handle,m._removeData(a,"events"))}},trigger:function(b,c,d,e){var f,g,h,i,k,l,n,o=[d||y],p=j.call(b,"type")?b.type:b,q=j.call(b,"namespace")?b.namespace.split("."):[];if(h=l=d=d||y,3!==d.nodeType&&8!==d.nodeType&&!$.test(p+m.event.triggered)&&(p.indexOf(".")>=0&&(q=p.split("."),p=q.shift(),q.sort()),g=p.indexOf(":")<0&&"on"+p,b=b[m.expando]?b:new m.Event(p,"object"==typeof b&&b),b.isTrigger=e?2:3,b.namespace=q.join("."),b.namespace_re=b.namespace?new RegExp("(^|\\.)"+q.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=d),c=null==c?[b]:m.makeArray(c,[b]),k=m.event.special[p]||{},e||!k.trigger||k.trigger.apply(d,c)!==!1)){if(!e&&!k.noBubble&&!m.isWindow(d)){for(i=k.delegateType||p,$.test(i+p)||(h=h.parentNode);h;h=h.parentNode)o.push(h),l=h;l===(d.ownerDocument||y)&&o.push(l.defaultView||l.parentWindow||a)}n=0;while((h=o[n++])&&!b.isPropagationStopped())b.type=n>1?i:k.bindType||p,f=(m._data(h,"events")||{})[b.type]&&m._data(h,"handle"),f&&f.apply(h,c),f=g&&h[g],f&&f.apply&&m.acceptData(h)&&(b.result=f.apply(h,c),b.result===!1&&b.preventDefault());if(b.type=p,!e&&!b.isDefaultPrevented()&&(!k._default||k._default.apply(o.pop(),c)===!1)&&m.acceptData(d)&&g&&d[p]&&!m.isWindow(d)){l=d[g],l&&(d[g]=null),m.event.triggered=p;try{d[p]()}catch(r){}m.event.triggered=void 0,l&&(d[g]=l)}return b.result}},dispatch:function(a){a=m.event.fix(a);var b,c,e,f,g,h=[],i=d.call(arguments),j=(m._data(this,"events")||{})[a.type]||[],k=m.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=m.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,g=0;while((e=f.handlers[g++])&&!a.isImmediatePropagationStopped())(!a.namespace_re||a.namespace_re.test(e.namespace))&&(a.handleObj=e,a.data=e.data,c=((m.event.special[e.origType]||{}).handle||e.handler).apply(f.elem,i),void 0!==c&&(a.result=c)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&(!a.button||"click"!==a.type))for(;i!=this;i=i.parentNode||this)if(1===i.nodeType&&(i.disabled!==!0||"click"!==a.type)){for(e=[],f=0;h>f;f++)d=b[f],c=d.selector+" ",void 0===e[c]&&(e[c]=d.needsContext?m(c,this).index(i)>=0:m.find(c,this,null,[i]).length),e[c]&&e.push(d);e.length&&g.push({elem:i,handlers:e})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},fix:function(a){if(a[m.expando])return a;var b,c,d,e=a.type,f=a,g=this.fixHooks[e];g||(this.fixHooks[e]=g=Z.test(e)?this.mouseHooks:Y.test(e)?this.keyHooks:{}),d=g.props?this.props.concat(g.props):this.props,a=new m.Event(f),b=d.length;while(b--)c=d[b],a[c]=f[c];return a.target||(a.target=f.srcElement||y),3===a.target.nodeType&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,g.filter?g.filter(a,f):a},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,d,e,f=b.button,g=b.fromElement;return null==a.pageX&&null!=b.clientX&&(d=a.target.ownerDocument||y,e=d.documentElement,c=d.body,a.pageX=b.clientX+(e&&e.scrollLeft||c&&c.scrollLeft||0)-(e&&e.clientLeft||c&&c.clientLeft||0),a.pageY=b.clientY+(e&&e.scrollTop||c&&c.scrollTop||0)-(e&&e.clientTop||c&&c.clientTop||0)),!a.relatedTarget&&g&&(a.relatedTarget=g===a.target?b.toElement:g),a.which||void 0===f||(a.which=1&f?1:2&f?3:4&f?2:0),a}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==cb()&&this.focus)try{return this.focus(),!1}catch(a){}},delegateType:"focusin"},blur:{trigger:function(){return this===cb()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return m.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):void 0},_default:function(a){return m.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&a.originalEvent&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c,d){var e=m.extend(new m.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?m.event.trigger(e,null,b):m.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},m.removeEvent=y.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){var d="on"+b;a.detachEvent&&(typeof a[d]===K&&(a[d]=null),a.detachEvent(d,c))},m.Event=function(a,b){return this instanceof m.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&a.returnValue===!1?ab:bb):this.type=a,b&&m.extend(this,b),this.timeStamp=a&&a.timeStamp||m.now(),void(this[m.expando]=!0)):new m.Event(a,b)},m.Event.prototype={isDefaultPrevented:bb,isPropagationStopped:bb,isImmediatePropagationStopped:bb,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=ab,a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=ab,a&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){var a=this.originalEvent;this.isImmediatePropagationStopped=ab,a&&a.stopImmediatePropagation&&a.stopImmediatePropagation(),this.stopPropagation()}},m.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(a,b){m.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return(!e||e!==d&&!m.contains(d,e))&&(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),k.submitBubbles||(m.event.special.submit={setup:function(){return m.nodeName(this,"form")?!1:void m.event.add(this,"click._submit keypress._submit",function(a){var b=a.target,c=m.nodeName(b,"input")||m.nodeName(b,"button")?b.form:void 0;c&&!m._data(c,"submitBubbles")&&(m.event.add(c,"submit._submit",function(a){a._submit_bubble=!0}),m._data(c,"submitBubbles",!0))})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&m.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){return m.nodeName(this,"form")?!1:void m.event.remove(this,"._submit")}}),k.changeBubbles||(m.event.special.change={setup:function(){return X.test(this.nodeName)?(("checkbox"===this.type||"radio"===this.type)&&(m.event.add(this,"propertychange._change",function(a){"checked"===a.originalEvent.propertyName&&(this._just_changed=!0)}),m.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1),m.event.simulate("change",this,a,!0)})),!1):void m.event.add(this,"beforeactivate._change",function(a){var b=a.target;X.test(b.nodeName)&&!m._data(b,"changeBubbles")&&(m.event.add(b,"change._change",function(a){!this.parentNode||a.isSimulated||a.isTrigger||m.event.simulate("change",this.parentNode,a,!0)}),m._data(b,"changeBubbles",!0))})},handle:function(a){var b=a.target;return this!==b||a.isSimulated||a.isTrigger||"radio"!==b.type&&"checkbox"!==b.type?a.handleObj.handler.apply(this,arguments):void 0},teardown:function(){return m.event.remove(this,"._change"),!X.test(this.nodeName)}}),k.focusinBubbles||m.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){m.event.simulate(b,a.target,m.event.fix(a),!0)};m.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=m._data(d,b);e||d.addEventListener(a,c,!0),m._data(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=m._data(d,b)-1;e?m._data(d,b,e):(d.removeEventListener(a,c,!0),m._removeData(d,b))}}}),m.fn.extend({on:function(a,b,c,d,e){var f,g;if("object"==typeof a){"string"!=typeof b&&(c=c||b,b=void 0);for(f in a)this.on(f,b,c,a[f],e);return this}if(null==c&&null==d?(d=b,c=b=void 0):null==d&&("string"==typeof b?(d=c,c=void 0):(d=c,c=b,b=void 0)),d===!1)d=bb;else if(!d)return this;return 1===e&&(g=d,d=function(a){return m().off(a),g.apply(this,arguments)},d.guid=g.guid||(g.guid=m.guid++)),this.each(function(){m.event.add(this,a,d,c,b)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,m(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return(b===!1||"function"==typeof b)&&(c=b,b=void 0),c===!1&&(c=bb),this.each(function(){m.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){m.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?m.event.trigger(a,b,c,!0):void 0}});function db(a){var b=eb.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}var eb="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",fb=/ jQuery\d+="(?:null|\d+)"/g,gb=new RegExp("<(?:"+eb+")[\\s/>]","i"),hb=/^\s+/,ib=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,jb=/<([\w:]+)/,kb=/<tbody/i,lb=/<|&#?\w+;/,mb=/<(?:script|style|link)/i,nb=/checked\s*(?:[^=]|=\s*.checked.)/i,ob=/^$|\/(?:java|ecma)script/i,pb=/^true\/(.*)/,qb=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,rb={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:k.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]},sb=db(y),tb=sb.appendChild(y.createElement("div"));rb.optgroup=rb.option,rb.tbody=rb.tfoot=rb.colgroup=rb.caption=rb.thead,rb.th=rb.td;function ub(a,b){var c,d,e=0,f=typeof a.getElementsByTagName!==K?a.getElementsByTagName(b||"*"):typeof a.querySelectorAll!==K?a.querySelectorAll(b||"*"):void 0;if(!f)for(f=[],c=a.childNodes||a;null!=(d=c[e]);e++)!b||m.nodeName(d,b)?f.push(d):m.merge(f,ub(d,b));return void 0===b||b&&m.nodeName(a,b)?m.merge([a],f):f}function vb(a){W.test(a.type)&&(a.defaultChecked=a.checked)}function wb(a,b){return m.nodeName(a,"table")&&m.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function xb(a){return a.type=(null!==m.find.attr(a,"type"))+"/"+a.type,a}function yb(a){var b=pb.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function zb(a,b){for(var c,d=0;null!=(c=a[d]);d++)m._data(c,"globalEval",!b||m._data(b[d],"globalEval"))}function Ab(a,b){if(1===b.nodeType&&m.hasData(a)){var c,d,e,f=m._data(a),g=m._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;e>d;d++)m.event.add(b,c,h[c][d])}g.data&&(g.data=m.extend({},g.data))}}function Bb(a,b){var c,d,e;if(1===b.nodeType){if(c=b.nodeName.toLowerCase(),!k.noCloneEvent&&b[m.expando]){e=m._data(b);for(d in e.events)m.removeEvent(b,d,e.handle);b.removeAttribute(m.expando)}"script"===c&&b.text!==a.text?(xb(b).text=a.text,yb(b)):"object"===c?(b.parentNode&&(b.outerHTML=a.outerHTML),k.html5Clone&&a.innerHTML&&!m.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):"input"===c&&W.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):"option"===c?b.defaultSelected=b.selected=a.defaultSelected:("input"===c||"textarea"===c)&&(b.defaultValue=a.defaultValue)}}m.extend({clone:function(a,b,c){var d,e,f,g,h,i=m.contains(a.ownerDocument,a);if(k.html5Clone||m.isXMLDoc(a)||!gb.test("<"+a.nodeName+">")?f=a.cloneNode(!0):(tb.innerHTML=a.outerHTML,tb.removeChild(f=tb.firstChild)),!(k.noCloneEvent&&k.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||m.isXMLDoc(a)))for(d=ub(f),h=ub(a),g=0;null!=(e=h[g]);++g)d[g]&&Bb(e,d[g]);if(b)if(c)for(h=h||ub(a),d=d||ub(f),g=0;null!=(e=h[g]);g++)Ab(e,d[g]);else Ab(a,f);return d=ub(f,"script"),d.length>0&&zb(d,!i&&ub(a,"script")),d=h=e=null,f},buildFragment:function(a,b,c,d){for(var e,f,g,h,i,j,l,n=a.length,o=db(b),p=[],q=0;n>q;q++)if(f=a[q],f||0===f)if("object"===m.type(f))m.merge(p,f.nodeType?[f]:f);else if(lb.test(f)){h=h||o.appendChild(b.createElement("div")),i=(jb.exec(f)||["",""])[1].toLowerCase(),l=rb[i]||rb._default,h.innerHTML=l[1]+f.replace(ib,"<$1></$2>")+l[2],e=l[0];while(e--)h=h.lastChild;if(!k.leadingWhitespace&&hb.test(f)&&p.push(b.createTextNode(hb.exec(f)[0])),!k.tbody){f="table"!==i||kb.test(f)?"<table>"!==l[1]||kb.test(f)?0:h:h.firstChild,e=f&&f.childNodes.length;while(e--)m.nodeName(j=f.childNodes[e],"tbody")&&!j.childNodes.length&&f.removeChild(j)}m.merge(p,h.childNodes),h.textContent="";while(h.firstChild)h.removeChild(h.firstChild);h=o.lastChild}else p.push(b.createTextNode(f));h&&o.removeChild(h),k.appendChecked||m.grep(ub(p,"input"),vb),q=0;while(f=p[q++])if((!d||-1===m.inArray(f,d))&&(g=m.contains(f.ownerDocument,f),h=ub(o.appendChild(f),"script"),g&&zb(h),c)){e=0;while(f=h[e++])ob.test(f.type||"")&&c.push(f)}return h=null,o},cleanData:function(a,b){for(var d,e,f,g,h=0,i=m.expando,j=m.cache,l=k.deleteExpando,n=m.event.special;null!=(d=a[h]);h++)if((b||m.acceptData(d))&&(f=d[i],g=f&&j[f])){if(g.events)for(e in g.events)n[e]?m.event.remove(d,e):m.removeEvent(d,e,g.handle);j[f]&&(delete j[f],l?delete d[i]:typeof d.removeAttribute!==K?d.removeAttribute(i):d[i]=null,c.push(f))}}}),m.fn.extend({text:function(a){return V(this,function(a){return void 0===a?m.text(this):this.empty().append((this[0]&&this[0].ownerDocument||y).createTextNode(a))},null,a,arguments.length)},append:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=wb(this,a);b.appendChild(a)}})},prepend:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=wb(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},remove:function(a,b){for(var c,d=a?m.filter(a,this):this,e=0;null!=(c=d[e]);e++)b||1!==c.nodeType||m.cleanData(ub(c)),c.parentNode&&(b&&m.contains(c.ownerDocument,c)&&zb(ub(c,"script")),c.parentNode.removeChild(c));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++){1===a.nodeType&&m.cleanData(ub(a,!1));while(a.firstChild)a.removeChild(a.firstChild);a.options&&m.nodeName(a,"select")&&(a.options.length=0)}return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return m.clone(this,a,b)})},html:function(a){return V(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a)return 1===b.nodeType?b.innerHTML.replace(fb,""):void 0;if(!("string"!=typeof a||mb.test(a)||!k.htmlSerialize&&gb.test(a)||!k.leadingWhitespace&&hb.test(a)||rb[(jb.exec(a)||["",""])[1].toLowerCase()])){a=a.replace(ib,"<$1></$2>");try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(m.cleanData(ub(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=arguments[0];return this.domManip(arguments,function(b){a=this.parentNode,m.cleanData(ub(this)),a&&a.replaceChild(b,this)}),a&&(a.length||a.nodeType)?this:this.remove()},detach:function(a){return this.remove(a,!0)},domManip:function(a,b){a=e.apply([],a);var c,d,f,g,h,i,j=0,l=this.length,n=this,o=l-1,p=a[0],q=m.isFunction(p);if(q||l>1&&"string"==typeof p&&!k.checkClone&&nb.test(p))return this.each(function(c){var d=n.eq(c);q&&(a[0]=p.call(this,c,d.html())),d.domManip(a,b)});if(l&&(i=m.buildFragment(a,this[0].ownerDocument,!1,this),c=i.firstChild,1===i.childNodes.length&&(i=c),c)){for(g=m.map(ub(i,"script"),xb),f=g.length;l>j;j++)d=i,j!==o&&(d=m.clone(d,!0,!0),f&&m.merge(g,ub(d,"script"))),b.call(this[j],d,j);if(f)for(h=g[g.length-1].ownerDocument,m.map(g,yb),j=0;f>j;j++)d=g[j],ob.test(d.type||"")&&!m._data(d,"globalEval")&&m.contains(h,d)&&(d.src?m._evalUrl&&m._evalUrl(d.src):m.globalEval((d.text||d.textContent||d.innerHTML||"").replace(qb,"")));i=c=null}return this}}),m.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){m.fn[a]=function(a){for(var c,d=0,e=[],g=m(a),h=g.length-1;h>=d;d++)c=d===h?this:this.clone(!0),m(g[d])[b](c),f.apply(e,c.get());return this.pushStack(e)}});var Cb,Db={};function Eb(b,c){var d,e=m(c.createElement(b)).appendTo(c.body),f=a.getDefaultComputedStyle&&(d=a.getDefaultComputedStyle(e[0]))?d.display:m.css(e[0],"display");return e.detach(),f}function Fb(a){var b=y,c=Db[a];return c||(c=Eb(a,b),"none"!==c&&c||(Cb=(Cb||m("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=(Cb[0].contentWindow||Cb[0].contentDocument).document,b.write(),b.close(),c=Eb(a,b),Cb.detach()),Db[a]=c),c}!function(){var a;k.shrinkWrapBlocks=function(){if(null!=a)return a;a=!1;var b,c,d;return c=y.getElementsByTagName("body")[0],c&&c.style?(b=y.createElement("div"),d=y.createElement("div"),d.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(d).appendChild(b),typeof b.style.zoom!==K&&(b.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1",b.appendChild(y.createElement("div")).style.width="5px",a=3!==b.offsetWidth),c.removeChild(d),a):void 0}}();var Gb=/^margin/,Hb=new RegExp("^("+S+")(?!px)[a-z%]+$","i"),Ib,Jb,Kb=/^(top|right|bottom|left)$/;a.getComputedStyle?(Ib=function(a){return a.ownerDocument.defaultView.getComputedStyle(a,null)},Jb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Ib(a),g=c?c.getPropertyValue(b)||c[b]:void 0,c&&(""!==g||m.contains(a.ownerDocument,a)||(g=m.style(a,b)),Hb.test(g)&&Gb.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f)),void 0===g?g:g+""}):y.documentElement.currentStyle&&(Ib=function(a){return a.currentStyle},Jb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Ib(a),g=c?c[b]:void 0,null==g&&h&&h[b]&&(g=h[b]),Hb.test(g)&&!Kb.test(b)&&(d=h.left,e=a.runtimeStyle,f=e&&e.left,f&&(e.left=a.currentStyle.left),h.left="fontSize"===b?"1em":g,g=h.pixelLeft+"px",h.left=d,f&&(e.left=f)),void 0===g?g:g+""||"auto"});function Lb(a,b){return{get:function(){var c=a();if(null!=c)return c?void delete this.get:(this.get=b).apply(this,arguments)}}}!function(){var b,c,d,e,f,g,h;if(b=y.createElement("div"),b.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",d=b.getElementsByTagName("a")[0],c=d&&d.style){c.cssText="float:left;opacity:.5",k.opacity="0.5"===c.opacity,k.cssFloat=!!c.cssFloat,b.style.backgroundClip="content-box",b.cloneNode(!0).style.backgroundClip="",k.clearCloneStyle="content-box"===b.style.backgroundClip,k.boxSizing=""===c.boxSizing||""===c.MozBoxSizing||""===c.WebkitBoxSizing,m.extend(k,{reliableHiddenOffsets:function(){return null==g&&i(),g},boxSizingReliable:function(){return null==f&&i(),f},pixelPosition:function(){return null==e&&i(),e},reliableMarginRight:function(){return null==h&&i(),h}});function i(){var b,c,d,i;c=y.getElementsByTagName("body")[0],c&&c.style&&(b=y.createElement("div"),d=y.createElement("div"),d.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(d).appendChild(b),b.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute",e=f=!1,h=!0,a.getComputedStyle&&(e="1%"!==(a.getComputedStyle(b,null)||{}).top,f="4px"===(a.getComputedStyle(b,null)||{width:"4px"}).width,i=b.appendChild(y.createElement("div")),i.style.cssText=b.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",i.style.marginRight=i.style.width="0",b.style.width="1px",h=!parseFloat((a.getComputedStyle(i,null)||{}).marginRight)),b.innerHTML="<table><tr><td></td><td>t</td></tr></table>",i=b.getElementsByTagName("td"),i[0].style.cssText="margin:0;border:0;padding:0;display:none",g=0===i[0].offsetHeight,g&&(i[0].style.display="",i[1].style.display="none",g=0===i[0].offsetHeight),c.removeChild(d))}}}(),m.swap=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e};var Mb=/alpha\([^)]*\)/i,Nb=/opacity\s*=\s*([^)]*)/,Ob=/^(none|table(?!-c[ea]).+)/,Pb=new RegExp("^("+S+")(.*)$","i"),Qb=new RegExp("^([+-])=("+S+")","i"),Rb={position:"absolute",visibility:"hidden",display:"block"},Sb={letterSpacing:"0",fontWeight:"400"},Tb=["Webkit","O","Moz","ms"];function Ub(a,b){if(b in a)return b;var c=b.charAt(0).toUpperCase()+b.slice(1),d=b,e=Tb.length;while(e--)if(b=Tb[e]+c,b in a)return b;return d}function Vb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=m._data(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&U(d)&&(f[g]=m._data(d,"olddisplay",Fb(d.nodeName)))):(e=U(d),(c&&"none"!==c||!e)&&m._data(d,"olddisplay",e?c:m.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}function Wb(a,b,c){var d=Pb.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function Xb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=m.css(a,c+T[f],!0,e)),d?("content"===c&&(g-=m.css(a,"padding"+T[f],!0,e)),"margin"!==c&&(g-=m.css(a,"border"+T[f]+"Width",!0,e))):(g+=m.css(a,"padding"+T[f],!0,e),"padding"!==c&&(g+=m.css(a,"border"+T[f]+"Width",!0,e)));return g}function Yb(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=Ib(a),g=k.boxSizing&&"border-box"===m.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=Jb(a,b,f),(0>e||null==e)&&(e=a.style[b]),Hb.test(e))return e;d=g&&(k.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Xb(a,b,c||(g?"border":"content"),d,f)+"px"}m.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=Jb(a,"opacity");return""===c?"1":c}}}},cssNumber:{columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":k.cssFloat?"cssFloat":"styleFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=m.camelCase(b),i=a.style;if(b=m.cssProps[h]||(m.cssProps[h]=Ub(i,h)),g=m.cssHooks[b]||m.cssHooks[h],void 0===c)return g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b];if(f=typeof c,"string"===f&&(e=Qb.exec(c))&&(c=(e[1]+1)*e[2]+parseFloat(m.css(a,b)),f="number"),null!=c&&c===c&&("number"!==f||m.cssNumber[h]||(c+="px"),k.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),!(g&&"set"in g&&void 0===(c=g.set(a,c,d)))))try{i[b]=c}catch(j){}}},css:function(a,b,c,d){var e,f,g,h=m.camelCase(b);return b=m.cssProps[h]||(m.cssProps[h]=Ub(a.style,h)),g=m.cssHooks[b]||m.cssHooks[h],g&&"get"in g&&(f=g.get(a,!0,c)),void 0===f&&(f=Jb(a,b,d)),"normal"===f&&b in Sb&&(f=Sb[b]),""===c||c?(e=parseFloat(f),c===!0||m.isNumeric(e)?e||0:f):f}}),m.each(["height","width"],function(a,b){m.cssHooks[b]={get:function(a,c,d){return c?Ob.test(m.css(a,"display"))&&0===a.offsetWidth?m.swap(a,Rb,function(){return Yb(a,b,d)}):Yb(a,b,d):void 0},set:function(a,c,d){var e=d&&Ib(a);return Wb(a,c,d?Xb(a,b,d,k.boxSizing&&"border-box"===m.css(a,"boxSizing",!1,e),e):0)}}}),k.opacity||(m.cssHooks.opacity={get:function(a,b){return Nb.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=m.isNumeric(b)?"alpha(opacity="+100*b+")":"",f=d&&d.filter||c.filter||"";c.zoom=1,(b>=1||""===b)&&""===m.trim(f.replace(Mb,""))&&c.removeAttribute&&(c.removeAttribute("filter"),""===b||d&&!d.filter)||(c.filter=Mb.test(f)?f.replace(Mb,e):f+" "+e)}}),m.cssHooks.marginRight=Lb(k.reliableMarginRight,function(a,b){return b?m.swap(a,{display:"inline-block"},Jb,[a,"marginRight"]):void 0}),m.each({margin:"",padding:"",border:"Width"},function(a,b){m.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+T[d]+b]=f[d]||f[d-2]||f[0];return e}},Gb.test(a)||(m.cssHooks[a+b].set=Wb)}),m.fn.extend({css:function(a,b){return V(this,function(a,b,c){var d,e,f={},g=0;if(m.isArray(b)){for(d=Ib(a),e=b.length;e>g;g++)f[b[g]]=m.css(a,b[g],!1,d);return f}return void 0!==c?m.style(a,b,c):m.css(a,b)},a,b,arguments.length>1)},show:function(){return Vb(this,!0)},hide:function(){return Vb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){U(this)?m(this).show():m(this).hide()})}});function Zb(a,b,c,d,e){return new Zb.prototype.init(a,b,c,d,e)}m.Tween=Zb,Zb.prototype={constructor:Zb,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(m.cssNumber[c]?"":"px")
},cur:function(){var a=Zb.propHooks[this.prop];return a&&a.get?a.get(this):Zb.propHooks._default.get(this)},run:function(a){var b,c=Zb.propHooks[this.prop];return this.pos=b=this.options.duration?m.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):Zb.propHooks._default.set(this),this}},Zb.prototype.init.prototype=Zb.prototype,Zb.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=m.css(a.elem,a.prop,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){m.fx.step[a.prop]?m.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[m.cssProps[a.prop]]||m.cssHooks[a.prop])?m.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},Zb.propHooks.scrollTop=Zb.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},m.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},m.fx=Zb.prototype.init,m.fx.step={};var $b,_b,ac=/^(?:toggle|show|hide)$/,bc=new RegExp("^(?:([+-])=|)("+S+")([a-z%]*)$","i"),cc=/queueHooks$/,dc=[ic],ec={"*":[function(a,b){var c=this.createTween(a,b),d=c.cur(),e=bc.exec(b),f=e&&e[3]||(m.cssNumber[a]?"":"px"),g=(m.cssNumber[a]||"px"!==f&&+d)&&bc.exec(m.css(c.elem,a)),h=1,i=20;if(g&&g[3]!==f){f=f||g[3],e=e||[],g=+d||1;do h=h||".5",g/=h,m.style(c.elem,a,g+f);while(h!==(h=c.cur()/d)&&1!==h&&--i)}return e&&(g=c.start=+g||+d||0,c.unit=f,c.end=e[1]?g+(e[1]+1)*e[2]:+e[2]),c}]};function fc(){return setTimeout(function(){$b=void 0}),$b=m.now()}function gc(a,b){var c,d={height:a},e=0;for(b=b?1:0;4>e;e+=2-b)c=T[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function hc(a,b,c){for(var d,e=(ec[b]||[]).concat(ec["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function ic(a,b,c){var d,e,f,g,h,i,j,l,n=this,o={},p=a.style,q=a.nodeType&&U(a),r=m._data(a,"fxshow");c.queue||(h=m._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,n.always(function(){n.always(function(){h.unqueued--,m.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[p.overflow,p.overflowX,p.overflowY],j=m.css(a,"display"),l="none"===j?m._data(a,"olddisplay")||Fb(a.nodeName):j,"inline"===l&&"none"===m.css(a,"float")&&(k.inlineBlockNeedsLayout&&"inline"!==Fb(a.nodeName)?p.zoom=1:p.display="inline-block")),c.overflow&&(p.overflow="hidden",k.shrinkWrapBlocks()||n.always(function(){p.overflow=c.overflow[0],p.overflowX=c.overflow[1],p.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],ac.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(q?"hide":"show")){if("show"!==e||!r||void 0===r[d])continue;q=!0}o[d]=r&&r[d]||m.style(a,d)}else j=void 0;if(m.isEmptyObject(o))"inline"===("none"===j?Fb(a.nodeName):j)&&(p.display=j);else{r?"hidden"in r&&(q=r.hidden):r=m._data(a,"fxshow",{}),f&&(r.hidden=!q),q?m(a).show():n.done(function(){m(a).hide()}),n.done(function(){var b;m._removeData(a,"fxshow");for(b in o)m.style(a,b,o[b])});for(d in o)g=hc(q?r[d]:0,d,n),d in r||(r[d]=g.start,q&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function jc(a,b){var c,d,e,f,g;for(c in a)if(d=m.camelCase(c),e=b[d],f=a[c],m.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=m.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function kc(a,b,c){var d,e,f=0,g=dc.length,h=m.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=$b||fc(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:m.extend({},b),opts:m.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:$b||fc(),duration:c.duration,tweens:[],createTween:function(b,c){var d=m.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;for(jc(k,j.opts.specialEasing);g>f;f++)if(d=dc[f].call(j,a,k,j.opts))return d;return m.map(k,hc,j),m.isFunction(j.opts.start)&&j.opts.start.call(a,j),m.fx.timer(m.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}m.Animation=m.extend(kc,{tweener:function(a,b){m.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var c,d=0,e=a.length;e>d;d++)c=a[d],ec[c]=ec[c]||[],ec[c].unshift(b)},prefilter:function(a,b){b?dc.unshift(a):dc.push(a)}}),m.speed=function(a,b,c){var d=a&&"object"==typeof a?m.extend({},a):{complete:c||!c&&b||m.isFunction(a)&&a,duration:a,easing:c&&b||b&&!m.isFunction(b)&&b};return d.duration=m.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in m.fx.speeds?m.fx.speeds[d.duration]:m.fx.speeds._default,(null==d.queue||d.queue===!0)&&(d.queue="fx"),d.old=d.complete,d.complete=function(){m.isFunction(d.old)&&d.old.call(this),d.queue&&m.dequeue(this,d.queue)},d},m.fn.extend({fadeTo:function(a,b,c,d){return this.filter(U).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=m.isEmptyObject(a),f=m.speed(b,c,d),g=function(){var b=kc(this,m.extend({},a),f);(e||m._data(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=m.timers,g=m._data(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&cc.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));(b||!c)&&m.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=m._data(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=m.timers,g=d?d.length:0;for(c.finish=!0,m.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),m.each(["toggle","show","hide"],function(a,b){var c=m.fn[b];m.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(gc(b,!0),a,d,e)}}),m.each({slideDown:gc("show"),slideUp:gc("hide"),slideToggle:gc("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){m.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),m.timers=[],m.fx.tick=function(){var a,b=m.timers,c=0;for($b=m.now();c<b.length;c++)a=b[c],a()||b[c]!==a||b.splice(c--,1);b.length||m.fx.stop(),$b=void 0},m.fx.timer=function(a){m.timers.push(a),a()?m.fx.start():m.timers.pop()},m.fx.interval=13,m.fx.start=function(){_b||(_b=setInterval(m.fx.tick,m.fx.interval))},m.fx.stop=function(){clearInterval(_b),_b=null},m.fx.speeds={slow:600,fast:200,_default:400},m.fn.delay=function(a,b){return a=m.fx?m.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},function(){var a,b,c,d,e;b=y.createElement("div"),b.setAttribute("className","t"),b.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",d=b.getElementsByTagName("a")[0],c=y.createElement("select"),e=c.appendChild(y.createElement("option")),a=b.getElementsByTagName("input")[0],d.style.cssText="top:1px",k.getSetAttribute="t"!==b.className,k.style=/top/.test(d.getAttribute("style")),k.hrefNormalized="/a"===d.getAttribute("href"),k.checkOn=!!a.value,k.optSelected=e.selected,k.enctype=!!y.createElement("form").enctype,c.disabled=!0,k.optDisabled=!e.disabled,a=y.createElement("input"),a.setAttribute("value",""),k.input=""===a.getAttribute("value"),a.value="t",a.setAttribute("type","radio"),k.radioValue="t"===a.value}();var lc=/\r/g;m.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=m.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,m(this).val()):a,null==e?e="":"number"==typeof e?e+="":m.isArray(e)&&(e=m.map(e,function(a){return null==a?"":a+""})),b=m.valHooks[this.type]||m.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=m.valHooks[e.type]||m.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(lc,""):null==c?"":c)}}}),m.extend({valHooks:{option:{get:function(a){var b=m.find.attr(a,"value");return null!=b?b:m.trim(m.text(a))}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],!(!c.selected&&i!==e||(k.optDisabled?c.disabled:null!==c.getAttribute("disabled"))||c.parentNode.disabled&&m.nodeName(c.parentNode,"optgroup"))){if(b=m(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=m.makeArray(b),g=e.length;while(g--)if(d=e[g],m.inArray(m.valHooks.option.get(d),f)>=0)try{d.selected=c=!0}catch(h){d.scrollHeight}else d.selected=!1;return c||(a.selectedIndex=-1),e}}}}),m.each(["radio","checkbox"],function(){m.valHooks[this]={set:function(a,b){return m.isArray(b)?a.checked=m.inArray(m(a).val(),b)>=0:void 0}},k.checkOn||(m.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})});var mc,nc,oc=m.expr.attrHandle,pc=/^(?:checked|selected)$/i,qc=k.getSetAttribute,rc=k.input;m.fn.extend({attr:function(a,b){return V(this,m.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){m.removeAttr(this,a)})}}),m.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(a&&3!==f&&8!==f&&2!==f)return typeof a.getAttribute===K?m.prop(a,b,c):(1===f&&m.isXMLDoc(a)||(b=b.toLowerCase(),d=m.attrHooks[b]||(m.expr.match.bool.test(b)?nc:mc)),void 0===c?d&&"get"in d&&null!==(e=d.get(a,b))?e:(e=m.find.attr(a,b),null==e?void 0:e):null!==c?d&&"set"in d&&void 0!==(e=d.set(a,c,b))?e:(a.setAttribute(b,c+""),c):void m.removeAttr(a,b))},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(E);if(f&&1===a.nodeType)while(c=f[e++])d=m.propFix[c]||c,m.expr.match.bool.test(c)?rc&&qc||!pc.test(c)?a[d]=!1:a[m.camelCase("default-"+c)]=a[d]=!1:m.attr(a,c,""),a.removeAttribute(qc?c:d)},attrHooks:{type:{set:function(a,b){if(!k.radioValue&&"radio"===b&&m.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}}}),nc={set:function(a,b,c){return b===!1?m.removeAttr(a,c):rc&&qc||!pc.test(c)?a.setAttribute(!qc&&m.propFix[c]||c,c):a[m.camelCase("default-"+c)]=a[c]=!0,c}},m.each(m.expr.match.bool.source.match(/\w+/g),function(a,b){var c=oc[b]||m.find.attr;oc[b]=rc&&qc||!pc.test(b)?function(a,b,d){var e,f;return d||(f=oc[b],oc[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,oc[b]=f),e}:function(a,b,c){return c?void 0:a[m.camelCase("default-"+b)]?b.toLowerCase():null}}),rc&&qc||(m.attrHooks.value={set:function(a,b,c){return m.nodeName(a,"input")?void(a.defaultValue=b):mc&&mc.set(a,b,c)}}),qc||(mc={set:function(a,b,c){var d=a.getAttributeNode(c);return d||a.setAttributeNode(d=a.ownerDocument.createAttribute(c)),d.value=b+="","value"===c||b===a.getAttribute(c)?b:void 0}},oc.id=oc.name=oc.coords=function(a,b,c){var d;return c?void 0:(d=a.getAttributeNode(b))&&""!==d.value?d.value:null},m.valHooks.button={get:function(a,b){var c=a.getAttributeNode(b);return c&&c.specified?c.value:void 0},set:mc.set},m.attrHooks.contenteditable={set:function(a,b,c){mc.set(a,""===b?!1:b,c)}},m.each(["width","height"],function(a,b){m.attrHooks[b]={set:function(a,c){return""===c?(a.setAttribute(b,"auto"),c):void 0}}})),k.style||(m.attrHooks.style={get:function(a){return a.style.cssText||void 0},set:function(a,b){return a.style.cssText=b+""}});var sc=/^(?:input|select|textarea|button|object)$/i,tc=/^(?:a|area)$/i;m.fn.extend({prop:function(a,b){return V(this,m.prop,a,b,arguments.length>1)},removeProp:function(a){return a=m.propFix[a]||a,this.each(function(){try{this[a]=void 0,delete this[a]}catch(b){}})}}),m.extend({propFix:{"for":"htmlFor","class":"className"},prop:function(a,b,c){var d,e,f,g=a.nodeType;if(a&&3!==g&&8!==g&&2!==g)return f=1!==g||!m.isXMLDoc(a),f&&(b=m.propFix[b]||b,e=m.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){var b=m.find.attr(a,"tabindex");return b?parseInt(b,10):sc.test(a.nodeName)||tc.test(a.nodeName)&&a.href?0:-1}}}}),k.hrefNormalized||m.each(["href","src"],function(a,b){m.propHooks[b]={get:function(a){return a.getAttribute(b,4)}}}),k.optSelected||(m.propHooks.selected={get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null}}),m.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){m.propFix[this.toLowerCase()]=this}),k.enctype||(m.propFix.enctype="encoding");var uc=/[\t\r\n\f]/g;m.fn.extend({addClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j="string"==typeof a&&a;if(m.isFunction(a))return this.each(function(b){m(this).addClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(E)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(uc," "):" ")){f=0;while(e=b[f++])d.indexOf(" "+e+" ")<0&&(d+=e+" ");g=m.trim(d),c.className!==g&&(c.className=g)}return this},removeClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j=0===arguments.length||"string"==typeof a&&a;if(m.isFunction(a))return this.each(function(b){m(this).removeClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(E)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(uc," "):"")){f=0;while(e=b[f++])while(d.indexOf(" "+e+" ")>=0)d=d.replace(" "+e+" "," ");g=a?m.trim(d):"",c.className!==g&&(c.className=g)}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):this.each(m.isFunction(a)?function(c){m(this).toggleClass(a.call(this,c,this.className,b),b)}:function(){if("string"===c){var b,d=0,e=m(this),f=a.match(E)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else(c===K||"boolean"===c)&&(this.className&&m._data(this,"__className__",this.className),this.className=this.className||a===!1?"":m._data(this,"__className__")||"")})},hasClass:function(a){for(var b=" "+a+" ",c=0,d=this.length;d>c;c++)if(1===this[c].nodeType&&(" "+this[c].className+" ").replace(uc," ").indexOf(b)>=0)return!0;return!1}}),m.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){m.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),m.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}});var vc=m.now(),wc=/\?/,xc=/(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;m.parseJSON=function(b){if(a.JSON&&a.JSON.parse)return a.JSON.parse(b+"");var c,d=null,e=m.trim(b+"");return e&&!m.trim(e.replace(xc,function(a,b,e,f){return c&&b&&(d=0),0===d?a:(c=e||b,d+=!f-!e,"")}))?Function("return "+e)():m.error("Invalid JSON: "+b)},m.parseXML=function(b){var c,d;if(!b||"string"!=typeof b)return null;try{a.DOMParser?(d=new DOMParser,c=d.parseFromString(b,"text/xml")):(c=new ActiveXObject("Microsoft.XMLDOM"),c.async="false",c.loadXML(b))}catch(e){c=void 0}return c&&c.documentElement&&!c.getElementsByTagName("parsererror").length||m.error("Invalid XML: "+b),c};var yc,zc,Ac=/#.*$/,Bc=/([?&])_=[^&]*/,Cc=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Dc=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Ec=/^(?:GET|HEAD)$/,Fc=/^\/\//,Gc=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,Hc={},Ic={},Jc="*/".concat("*");try{zc=location.href}catch(Kc){zc=y.createElement("a"),zc.href="",zc=zc.href}yc=Gc.exec(zc.toLowerCase())||[];function Lc(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(E)||[];if(m.isFunction(c))while(d=f[e++])"+"===d.charAt(0)?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function Mc(a,b,c,d){var e={},f=a===Ic;function g(h){var i;return e[h]=!0,m.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function Nc(a,b){var c,d,e=m.ajaxSettings.flatOptions||{};for(d in b)void 0!==b[d]&&((e[d]?a:c||(c={}))[d]=b[d]);return c&&m.extend(!0,a,c),a}function Oc(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===e&&(e=a.mimeType||b.getResponseHeader("Content-Type"));if(e)for(g in h)if(h[g]&&h[g].test(e)){i.unshift(g);break}if(i[0]in c)f=i[0];else{for(g in c){if(!i[0]||a.converters[g+" "+i[0]]){f=g;break}d||(d=g)}f=f||d}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function Pc(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}m.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:zc,type:"GET",isLocal:Dc.test(yc[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Jc,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":m.parseJSON,"text xml":m.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?Nc(Nc(a,m.ajaxSettings),b):Nc(m.ajaxSettings,a)},ajaxPrefilter:Lc(Hc),ajaxTransport:Lc(Ic),ajax:function(a,b){"object"==typeof a&&(b=a,a=void 0),b=b||{};var c,d,e,f,g,h,i,j,k=m.ajaxSetup({},b),l=k.context||k,n=k.context&&(l.nodeType||l.jquery)?m(l):m.event,o=m.Deferred(),p=m.Callbacks("once memory"),q=k.statusCode||{},r={},s={},t=0,u="canceled",v={readyState:0,getResponseHeader:function(a){var b;if(2===t){if(!j){j={};while(b=Cc.exec(f))j[b[1].toLowerCase()]=b[2]}b=j[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===t?f:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return t||(a=s[c]=s[c]||a,r[a]=b),this},overrideMimeType:function(a){return t||(k.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>t)for(b in a)q[b]=[q[b],a[b]];else v.always(a[v.status]);return this},abort:function(a){var b=a||u;return i&&i.abort(b),x(0,b),this}};if(o.promise(v).complete=p.add,v.success=v.done,v.error=v.fail,k.url=((a||k.url||zc)+"").replace(Ac,"").replace(Fc,yc[1]+"//"),k.type=b.method||b.type||k.method||k.type,k.dataTypes=m.trim(k.dataType||"*").toLowerCase().match(E)||[""],null==k.crossDomain&&(c=Gc.exec(k.url.toLowerCase()),k.crossDomain=!(!c||c[1]===yc[1]&&c[2]===yc[2]&&(c[3]||("http:"===c[1]?"80":"443"))===(yc[3]||("http:"===yc[1]?"80":"443")))),k.data&&k.processData&&"string"!=typeof k.data&&(k.data=m.param(k.data,k.traditional)),Mc(Hc,k,b,v),2===t)return v;h=k.global,h&&0===m.active++&&m.event.trigger("ajaxStart"),k.type=k.type.toUpperCase(),k.hasContent=!Ec.test(k.type),e=k.url,k.hasContent||(k.data&&(e=k.url+=(wc.test(e)?"&":"?")+k.data,delete k.data),k.cache===!1&&(k.url=Bc.test(e)?e.replace(Bc,"$1_="+vc++):e+(wc.test(e)?"&":"?")+"_="+vc++)),k.ifModified&&(m.lastModified[e]&&v.setRequestHeader("If-Modified-Since",m.lastModified[e]),m.etag[e]&&v.setRequestHeader("If-None-Match",m.etag[e])),(k.data&&k.hasContent&&k.contentType!==!1||b.contentType)&&v.setRequestHeader("Content-Type",k.contentType),v.setRequestHeader("Accept",k.dataTypes[0]&&k.accepts[k.dataTypes[0]]?k.accepts[k.dataTypes[0]]+("*"!==k.dataTypes[0]?", "+Jc+"; q=0.01":""):k.accepts["*"]);for(d in k.headers)v.setRequestHeader(d,k.headers[d]);if(k.beforeSend&&(k.beforeSend.call(l,v,k)===!1||2===t))return v.abort();u="abort";for(d in{success:1,error:1,complete:1})v[d](k[d]);if(i=Mc(Ic,k,b,v)){v.readyState=1,h&&n.trigger("ajaxSend",[v,k]),k.async&&k.timeout>0&&(g=setTimeout(function(){v.abort("timeout")},k.timeout));try{t=1,i.send(r,x)}catch(w){if(!(2>t))throw w;x(-1,w)}}else x(-1,"No Transport");function x(a,b,c,d){var j,r,s,u,w,x=b;2!==t&&(t=2,g&&clearTimeout(g),i=void 0,f=d||"",v.readyState=a>0?4:0,j=a>=200&&300>a||304===a,c&&(u=Oc(k,v,c)),u=Pc(k,u,v,j),j?(k.ifModified&&(w=v.getResponseHeader("Last-Modified"),w&&(m.lastModified[e]=w),w=v.getResponseHeader("etag"),w&&(m.etag[e]=w)),204===a||"HEAD"===k.type?x="nocontent":304===a?x="notmodified":(x=u.state,r=u.data,s=u.error,j=!s)):(s=x,(a||!x)&&(x="error",0>a&&(a=0))),v.status=a,v.statusText=(b||x)+"",j?o.resolveWith(l,[r,x,v]):o.rejectWith(l,[v,x,s]),v.statusCode(q),q=void 0,h&&n.trigger(j?"ajaxSuccess":"ajaxError",[v,k,j?r:s]),p.fireWith(l,[v,x]),h&&(n.trigger("ajaxComplete",[v,k]),--m.active||m.event.trigger("ajaxStop")))}return v},getJSON:function(a,b,c){return m.get(a,b,c,"json")},getScript:function(a,b){return m.get(a,void 0,b,"script")}}),m.each(["get","post"],function(a,b){m[b]=function(a,c,d,e){return m.isFunction(c)&&(e=e||d,d=c,c=void 0),m.ajax({url:a,type:b,dataType:e,data:c,success:d})}}),m.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){m.fn[b]=function(a){return this.on(b,a)}}),m._evalUrl=function(a){return m.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},m.fn.extend({wrapAll:function(a){if(m.isFunction(a))return this.each(function(b){m(this).wrapAll(a.call(this,b))});if(this[0]){var b=m(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&1===a.firstChild.nodeType)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return this.each(m.isFunction(a)?function(b){m(this).wrapInner(a.call(this,b))}:function(){var b=m(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=m.isFunction(a);return this.each(function(c){m(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){m.nodeName(this,"body")||m(this).replaceWith(this.childNodes)}).end()}}),m.expr.filters.hidden=function(a){return a.offsetWidth<=0&&a.offsetHeight<=0||!k.reliableHiddenOffsets()&&"none"===(a.style&&a.style.display||m.css(a,"display"))},m.expr.filters.visible=function(a){return!m.expr.filters.hidden(a)};var Qc=/%20/g,Rc=/\[\]$/,Sc=/\r?\n/g,Tc=/^(?:submit|button|image|reset|file)$/i,Uc=/^(?:input|select|textarea|keygen)/i;function Vc(a,b,c,d){var e;if(m.isArray(b))m.each(b,function(b,e){c||Rc.test(a)?d(a,e):Vc(a+"["+("object"==typeof e?b:"")+"]",e,c,d)});else if(c||"object"!==m.type(b))d(a,b);else for(e in b)Vc(a+"["+e+"]",b[e],c,d)}m.param=function(a,b){var c,d=[],e=function(a,b){b=m.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=m.ajaxSettings&&m.ajaxSettings.traditional),m.isArray(a)||a.jquery&&!m.isPlainObject(a))m.each(a,function(){e(this.name,this.value)});else for(c in a)Vc(c,a[c],b,e);return d.join("&").replace(Qc,"+")},m.fn.extend({serialize:function(){return m.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=m.prop(this,"elements");return a?m.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!m(this).is(":disabled")&&Uc.test(this.nodeName)&&!Tc.test(a)&&(this.checked||!W.test(a))}).map(function(a,b){var c=m(this).val();return null==c?null:m.isArray(c)?m.map(c,function(a){return{name:b.name,value:a.replace(Sc,"\r\n")}}):{name:b.name,value:c.replace(Sc,"\r\n")}}).get()}}),m.ajaxSettings.xhr=void 0!==a.ActiveXObject?function(){return!this.isLocal&&/^(get|post|head|put|delete|options)$/i.test(this.type)&&Zc()||$c()}:Zc;var Wc=0,Xc={},Yc=m.ajaxSettings.xhr();a.ActiveXObject&&m(a).on("unload",function(){for(var a in Xc)Xc[a](void 0,!0)}),k.cors=!!Yc&&"withCredentials"in Yc,Yc=k.ajax=!!Yc,Yc&&m.ajaxTransport(function(a){if(!a.crossDomain||k.cors){var b;return{send:function(c,d){var e,f=a.xhr(),g=++Wc;if(f.open(a.type,a.url,a.async,a.username,a.password),a.xhrFields)for(e in a.xhrFields)f[e]=a.xhrFields[e];a.mimeType&&f.overrideMimeType&&f.overrideMimeType(a.mimeType),a.crossDomain||c["X-Requested-With"]||(c["X-Requested-With"]="XMLHttpRequest");for(e in c)void 0!==c[e]&&f.setRequestHeader(e,c[e]+"");f.send(a.hasContent&&a.data||null),b=function(c,e){var h,i,j;if(b&&(e||4===f.readyState))if(delete Xc[g],b=void 0,f.onreadystatechange=m.noop,e)4!==f.readyState&&f.abort();else{j={},h=f.status,"string"==typeof f.responseText&&(j.text=f.responseText);try{i=f.statusText}catch(k){i=""}h||!a.isLocal||a.crossDomain?1223===h&&(h=204):h=j.text?200:404}j&&d(h,i,j,f.getAllResponseHeaders())},a.async?4===f.readyState?setTimeout(b):f.onreadystatechange=Xc[g]=b:b()},abort:function(){b&&b(void 0,!0)}}}});function Zc(){try{return new a.XMLHttpRequest}catch(b){}}function $c(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}m.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(a){return m.globalEval(a),a}}}),m.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),m.ajaxTransport("script",function(a){if(a.crossDomain){var b,c=y.head||m("head")[0]||y.documentElement;return{send:function(d,e){b=y.createElement("script"),b.async=!0,a.scriptCharset&&(b.charset=a.scriptCharset),b.src=a.url,b.onload=b.onreadystatechange=function(a,c){(c||!b.readyState||/loaded|complete/.test(b.readyState))&&(b.onload=b.onreadystatechange=null,b.parentNode&&b.parentNode.removeChild(b),b=null,c||e(200,"success"))},c.insertBefore(b,c.firstChild)},abort:function(){b&&b.onload(void 0,!0)}}}});var _c=[],ad=/(=)\?(?=&|$)|\?\?/;m.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=_c.pop()||m.expando+"_"+vc++;return this[a]=!0,a}}),m.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(ad.test(b.url)?"url":"string"==typeof b.data&&!(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&ad.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=m.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(ad,"$1"+e):b.jsonp!==!1&&(b.url+=(wc.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||m.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,_c.push(e)),g&&m.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),m.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||y;var d=u.exec(a),e=!c&&[];return d?[b.createElement(d[1])]:(d=m.buildFragment([a],b,e),e&&e.length&&m(e).remove(),m.merge([],d.childNodes))};var bd=m.fn.load;m.fn.load=function(a,b,c){if("string"!=typeof a&&bd)return bd.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>=0&&(d=m.trim(a.slice(h,a.length)),a=a.slice(0,h)),m.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(f="POST"),g.length>0&&m.ajax({url:a,type:f,dataType:"html",data:b}).done(function(a){e=arguments,g.html(d?m("<div>").append(m.parseHTML(a)).find(d):a)}).complete(c&&function(a,b){g.each(c,e||[a.responseText,b,a])}),this},m.expr.filters.animated=function(a){return m.grep(m.timers,function(b){return a===b.elem}).length};var cd=a.document.documentElement;function dd(a){return m.isWindow(a)?a:9===a.nodeType?a.defaultView||a.parentWindow:!1}m.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=m.css(a,"position"),l=m(a),n={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=m.css(a,"top"),i=m.css(a,"left"),j=("absolute"===k||"fixed"===k)&&m.inArray("auto",[f,i])>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),m.isFunction(b)&&(b=b.call(a,c,h)),null!=b.top&&(n.top=b.top-h.top+g),null!=b.left&&(n.left=b.left-h.left+e),"using"in b?b.using.call(a,n):l.css(n)}},m.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){m.offset.setOffset(this,a,b)});var b,c,d={top:0,left:0},e=this[0],f=e&&e.ownerDocument;if(f)return b=f.documentElement,m.contains(b,e)?(typeof e.getBoundingClientRect!==K&&(d=e.getBoundingClientRect()),c=dd(f),{top:d.top+(c.pageYOffset||b.scrollTop)-(b.clientTop||0),left:d.left+(c.pageXOffset||b.scrollLeft)-(b.clientLeft||0)}):d},position:function(){if(this[0]){var a,b,c={top:0,left:0},d=this[0];return"fixed"===m.css(d,"position")?b=d.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),m.nodeName(a[0],"html")||(c=a.offset()),c.top+=m.css(a[0],"borderTopWidth",!0),c.left+=m.css(a[0],"borderLeftWidth",!0)),{top:b.top-c.top-m.css(d,"marginTop",!0),left:b.left-c.left-m.css(d,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||cd;while(a&&!m.nodeName(a,"html")&&"static"===m.css(a,"position"))a=a.offsetParent;return a||cd})}}),m.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var c=/Y/.test(b);m.fn[a]=function(d){return V(this,function(a,d,e){var f=dd(a);return void 0===e?f?b in f?f[b]:f.document.documentElement[d]:a[d]:void(f?f.scrollTo(c?m(f).scrollLeft():e,c?e:m(f).scrollTop()):a[d]=e)},a,d,arguments.length,null)}}),m.each(["top","left"],function(a,b){m.cssHooks[b]=Lb(k.pixelPosition,function(a,c){return c?(c=Jb(a,b),Hb.test(c)?m(a).position()[b]+"px":c):void 0})}),m.each({Height:"height",Width:"width"},function(a,b){m.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){m.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return V(this,function(b,c,d){var e;return m.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?m.css(b,c,g):m.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),m.fn.size=function(){return this.length},m.fn.andSelf=m.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return m});var ed=a.jQuery,fd=a.$;return m.noConflict=function(b){return a.$===m&&(a.$=fd),b&&a.jQuery===m&&(a.jQuery=ed),m},typeof b===K&&(a.jQuery=a.$=m),m});
;

function sprintf() {
/*
 * Copyright (c) 2013 Kevin van Zonneveld (http://kvz.io)
 * and Contributors (http://phpjs.org/authors)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
 * of the Software, and to permit persons to whom the Software is furnished to do
 * so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/
  //  discuss at: http://phpjs.org/functions/sprintf/
  // original by: Ash Searle (http://hexmen.com/blog/)
  // improved by: Michael White (http://getsprink.com)
  // improved by: Jack
  // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Dj
  // improved by: Allidylls
  //    input by: Paulo Freitas
  //    input by: Brett Zamir (http://brett-zamir.me)
  //   example 1: sprintf("%01.2f", 123.1);
  //   returns 1: 123.10
  //   example 2: sprintf("[%10s]", 'monkey');
  //   returns 2: '[    monkey]'
  //   example 3: sprintf("[%'#10s]", 'monkey');
  //   returns 3: '[####monkey]'
  //   example 4: sprintf("%d", 123456789012345);
  //   returns 4: '123456789012345'
  //   example 5: sprintf('%-03s', 'E');
  //   returns 5: 'E00'

  var regex = /%%|%(\d+\$)?([-+\'#0 ]*)(\*\d+\$|\*|\d+)?(\.(\*\d+\$|\*|\d+))?([scboxXuideEfFgG])/g;
  var a = arguments;
  var i = 0;
  var format = a[i++];

  // pad()
  var pad = function (str, len, chr, leftJustify) {
    if (!chr) {
      chr = ' ';
    }
    var padding = (str.length >= len) ? '' : new Array(1 + len - str.length >>> 0)
      .join(chr);
    return leftJustify ? str + padding : padding + str;
  };

  // justify()
  var justify = function (value, prefix, leftJustify, minWidth, zeroPad, customPadChar) {
    var diff = minWidth - value.length;
    if (diff > 0) {
      if (leftJustify || !zeroPad) {
        value = pad(value, minWidth, customPadChar, leftJustify);
      } else {
        value = value.slice(0, prefix.length) + pad('', diff, '0', true) + value.slice(prefix.length);
      }
    }
    return value;
  };

  // formatBaseX()
  var formatBaseX = function (value, base, prefix, leftJustify, minWidth, precision, zeroPad) {
    // Note: casts negative numbers to positive ones
    var number = value >>> 0;
    prefix = prefix && number && {
      '2': '0b',
      '8': '0',
      '16': '0x'
    }[base] || '';
    value = prefix + pad(number.toString(base), precision || 0, '0', false);
    return justify(value, prefix, leftJustify, minWidth, zeroPad);
  };

  // formatString()
  var formatString = function (value, leftJustify, minWidth, precision, zeroPad, customPadChar) {
    if (precision != null) {
      value = value.slice(0, precision);
    }
    return justify(value, '', leftJustify, minWidth, zeroPad, customPadChar);
  };

  // doFormat()
  var doFormat = function (substring, valueIndex, flags, minWidth, _, precision, type) {
    var number, prefix, method, textTransform, value;

    if (substring === '%%') {
      return '%';
    }

    // parse flags
    var leftJustify = false;
    var positivePrefix = '';
    var zeroPad = false;
    var prefixBaseX = false;
    var customPadChar = ' ';
    var flagsl = flags.length;
    for (var j = 0; flags && j < flagsl; j++) {
      switch (flags.charAt(j)) {
      case ' ':
        positivePrefix = ' ';
        break;
      case '+':
        positivePrefix = '+';
        break;
      case '-':
        leftJustify = true;
        break;
      case "'":
        customPadChar = flags.charAt(j + 1);
        break;
      case '0':
        zeroPad = true;
        customPadChar = '0';
        break;
      case '#':
        prefixBaseX = true;
        break;
      }
    }

    // parameters may be null, undefined, empty-string or real valued
    // we want to ignore null, undefined and empty-string values
    if (!minWidth) {
      minWidth = 0;
    } else if (minWidth === '*') {
      minWidth = +a[i++];
    } else if (minWidth.charAt(0) == '*') {
      minWidth = +a[minWidth.slice(1, -1)];
    } else {
      minWidth = +minWidth;
    }

    // Note: undocumented perl feature:
    if (minWidth < 0) {
      minWidth = -minWidth;
      leftJustify = true;
    }

    if (!isFinite(minWidth)) {
      throw new Error('sprintf: (minimum-)width must be finite');
    }

    if (!precision) {
      precision = 'fFeE'.indexOf(type) > -1 ? 6 : (type === 'd') ? 0 : undefined;
    } else if (precision === '*') {
      precision = +a[i++];
    } else if (precision.charAt(0) == '*') {
      precision = +a[precision.slice(1, -1)];
    } else {
      precision = +precision;
    }

    // grab value using valueIndex if required?
    value = valueIndex ? a[valueIndex.slice(0, -1)] : a[i++];

    switch (type) {
    case 's':
      return formatString(String(value), leftJustify, minWidth, precision, zeroPad, customPadChar);
    case 'c':
      return formatString(String.fromCharCode(+value), leftJustify, minWidth, precision, zeroPad);
    case 'b':
      return formatBaseX(value, 2, prefixBaseX, leftJustify, minWidth, precision, zeroPad);
    case 'o':
      return formatBaseX(value, 8, prefixBaseX, leftJustify, minWidth, precision, zeroPad);
    case 'x':
      return formatBaseX(value, 16, prefixBaseX, leftJustify, minWidth, precision, zeroPad);
    case 'X':
      return formatBaseX(value, 16, prefixBaseX, leftJustify, minWidth, precision, zeroPad)
        .toUpperCase();
    case 'u':
      return formatBaseX(value, 10, prefixBaseX, leftJustify, minWidth, precision, zeroPad);
    case 'i':
    case 'd':
      number = +value || 0;
      // Plain Math.round doesn't just truncate
      number = Math.round(number - number % 1);
      prefix = number < 0 ? '-' : positivePrefix;
      value = prefix + pad(String(Math.abs(number)), precision, '0', false);
      return justify(value, prefix, leftJustify, minWidth, zeroPad);
    case 'e':
    case 'E':
    case 'f': // Should handle locales (as per setlocale)
    case 'F':
    case 'g':
    case 'G':
      number = +value;
      prefix = number < 0 ? '-' : positivePrefix;
      method = ['toExponential', 'toFixed', 'toPrecision']['efg'.indexOf(type.toLowerCase())];
      textTransform = ['toString', 'toUpperCase']['eEfFgG'.indexOf(type) % 2];
      value = prefix + Math.abs(number)[method](precision);
      return justify(value, prefix, leftJustify, minWidth, zeroPad)[textTransform]();
    default:
      return substring;
    }
  };

  return format.replace(regex, doFormat);
}
;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * This object handles ajax requests for pages. It also
 * handles the reloading of the main menu and scripts.
 */
var AJAX = {
    /**
     * @var bool active Whether we are busy
     */
    active: false,
    /**
     * @var object source The object whose event initialized the request
     */
    source: null,
    /**
     * @var object xhr A reference to the ajax request that is currently running
     */
    xhr: null,
    /**
     * @var object lockedTargets, list of locked targets
     */
    lockedTargets: {},
    /**
     * @var function Callback to execute after a successful request
     *               Used by PMA_commonFunctions from common.js
     */
    _callback: function () {},
    /**
     * @var bool _debug Makes noise in your Firebug console
     */
    _debug: false,
    /**
     * @var object $msgbox A reference to a jQuery object that links to a message
     *                     box that is generated by PMA_ajaxShowMessage()
     */
    $msgbox: null,
    /**
     * Given the filename of a script, returns a hash to be
     * used to refer to all the events registered for the file
     *
     * @param key string key The filename for which to get the event name
     *
     * @return int
     */
    hash: function (key) {
        /* http://burtleburtle.net/bob/hash/doobs.html#one */
        key += "";
        var len = key.length, hash = 0, i = 0;
        for (; i < len; ++i) {
            hash += key.charCodeAt(i);
            hash += (hash << 10);
            hash ^= (hash >> 6);
        }
        hash += (hash << 3);
        hash ^= (hash >> 11);
        hash += (hash << 15);
        return Math.abs(hash);
    },
    /**
     * Registers an onload event for a file
     *
     * @param file string   file The filename for which to register the event
     * @param func function func The function to execute when the page is ready
     *
     * @return self For chaining
     */
    registerOnload: function (file, func) {
        var eventName = 'onload_' + AJAX.hash(file);
        $(document).bind(eventName, func);
        if (this._debug) {
            console.log(
                // no need to translate
                "Registered event " + eventName + " for file " + file
            );
        }
        return this;
    },
    /**
     * Registers a teardown event for a file. This is useful to execute functions
     * that unbind events for page elements that are about to be removed.
     *
     * @param string   file The filename for which to register the event
     * @param function func The function to execute when
     *                      the page is about to be torn down
     *
     * @return self For chaining
     */
    registerTeardown: function (file, func) {
        var eventName = 'teardown_' + AJAX.hash(file);
        $(document).bind(eventName, func);
        if (this._debug) {
            console.log(
                // no need to translate
                "Registered event " + eventName + " for file " + file
            );
        }
        return this;
    },
    /**
     * Called when a page has finished loading, once for every
     * file that registered to the onload event of that file.
     *
     * @param string file The filename for which to fire the event
     *
     * @return void
     */
    fireOnload: function (file) {
        var eventName = 'onload_' + AJAX.hash(file);
        $(document).trigger(eventName);
        if (this._debug) {
            console.log(
                // no need to translate
                "Fired event " + eventName + " for file " + file
            );
        }
    },
    /**
     * Called just before a page is torn down, once for every
     * file that registered to the teardown event of that file.
     *
     * @param string file The filename for which to fire the event
     *
     * @return void
     */
    fireTeardown: function (file) {
        var eventName = 'teardown_' + AJAX.hash(file);
        $(document).triggerHandler(eventName);
        if (this._debug) {
            console.log(
                // no need to translate
                "Fired event " + eventName + " for file " + file
            );
        }
    },
    /**
     * function to handle lock page mechanism
     *
     * @param event the event object
     *
     * @return void
     */
    lockPageHandler: function(event) {
        //Don't lock on enter.
        if (0 == event.charCode) {
            return;
        }

        var lockId = $(this).data('lock-id');
        if (typeof lockId === 'undefined') {
            return;
        }
        /*
         * @todo Fix Code mirror does not give correct full value (query)
         * in textarea, it returns only the change in content.
         */
        var newHash = null;
        if (event.data.value == 1) {
            newHash = AJAX.hash($(this).val());
        } else {
            newHash = AJAX.hash($(this).is(":checked"));
        }
        var oldHash = $(this).data('val-hash');
        // Set lock if old value != new value
        // otherwise release lock
        if (oldHash !== newHash) {
            AJAX.lockedTargets[lockId] = true;
        } else {
            delete AJAX.lockedTargets[lockId];
        }
        // Show lock icon if locked targets is not empty.
        // otherwise remove lock icon
        if (!jQuery.isEmptyObject(AJAX.lockedTargets)) {
            $('#lock_page_icon').html(PMA_getImage('s_lock.png',PMA_messages.strLockToolTip).toString());
        } else {
            $('#lock_page_icon').html('');
        }
    },
    /**
     * resets the lock
     *
     * @return void
     */
    resetLock: function() {
        AJAX.lockedTargets = {};
        $('#lock_page_icon').html('');
    },
    handleMenu: {
        replace: function (content) {
            $('#floating_menubar').html(content)
                // Remove duplicate wrapper
                // TODO: don't send it in the response
                .children().first().remove();
            $('#topmenu').menuResizer(PMA_mainMenuResizerCallback);
        }
    },
    /**
     * Event handler for clicks on links and form submissions
     *
     * @param object e Event data
     *
     * @return void
     */
    requestHandler: function (event) {
        // In some cases we don't want to handle the request here and either
        // leave the browser deal with it natively (e.g: file download)
        // or leave an existing ajax event handler present elsewhere deal with it
        var href = $(this).attr('href');
        if (typeof event != 'undefined' && (event.shiftKey || event.ctrlKey)) {
            return true;
        } else if ($(this).attr('target')) {
            return true;
        } else if ($(this).hasClass('ajax') || $(this).hasClass('disableAjax')) {
            //reset the lockedTargets object, as specified AJAX operation has finished
            AJAX.resetLock();
            return true;
        } else if (href && href.match(/^#/)) {
            return true;
        } else if (href && href.match(/^mailto/)) {
            return true;
        } else if ($(this).hasClass('ui-datepicker-next') ||
            $(this).hasClass('ui-datepicker-prev')
        ) {
            return true;
        }

        if (typeof event != 'undefined') {
            event.preventDefault();
            event.stopImmediatePropagation();
        }

        //triggers a confirm dialog if:
        //the user has performed some operations on loaded page
        //the user clicks on some link, (won't trigger for buttons)
        //the click event is not triggered by script
        if (typeof event !== 'undefined' && event.type === 'click' &&
            event.isTrigger !== true &&
            !jQuery.isEmptyObject(AJAX.lockedTargets) &&
            confirm(PMA_messages.strConfirmNavigation) === false
        ) {
            return false;
        }
        AJAX.resetLock();
        var isLink = !! href || false;
        var previousLinkAborted = false;

        if (AJAX.active === true) {
            // Cancel the old request if abortable, when the user requests
            // something else. Otherwise silently bail out, as there is already
            // a request well in progress.
            if (AJAX.xhr) {
                //In case of a link request, attempt aborting
                AJAX.xhr.abort();
                if(AJAX.xhr.status === 0 && AJAX.xhr.statusText === 'abort') {
                    //If aborted
                    AJAX.$msgbox = PMA_ajaxShowMessage(PMA_messages.strAbortedRequest);
                    AJAX.active = false;
                    AJAX.xhr = null;
                    previousLinkAborted = true;
                } else {
                    //If can't abort
                    return false;
                }
            } else {
                //In case submitting a form, don't attempt aborting
                return false;
            }
        }

        AJAX.source = $(this);

        $('html, body').animate({scrollTop: 0}, 'fast');

        var url = isLink ? href : $(this).attr('action');
        var params = 'ajax_request=true&ajax_page_request=true';
        if (! isLink) {
            params += '&' + $(this).serialize();
        }
        if (! (history && history.pushState)) {
            // Add a list of menu hashes that we have in the cache to the request
            params += PMA_MicroHistory.menus.getRequestParam();
        }

        if (AJAX._debug) {
            console.log("Loading: " + url); // no need to translate
        }

        if (isLink) {
            AJAX.active = true;
            AJAX.$msgbox = PMA_ajaxShowMessage();
            //Save reference for the new link request
            AJAX.xhr = $.get(url, params, AJAX.responseHandler);
            if (history && history.pushState) {
                var state = {
                    url : href
                };
                if (previousLinkAborted) {
                    //hack: there is already an aborted entry on stack
                    //so just modify the aborted one
                    history.replaceState(state, null, href);
                } else {
                    history.pushState(state, null, href);
                }
            }
        } else {
            /**
             * Manually fire the onsubmit event for the form, if any.
             * The event was saved in the jQuery data object by an onload
             * handler defined below. Workaround for bug #3583316
             */
            var onsubmit = $(this).data('onsubmit');
            // Submit the request if there is no onsubmit handler
            // or if it returns a value that evaluates to true
            if (typeof onsubmit !== 'function' || onsubmit.apply(this, [event])) {
                AJAX.active = true;
                AJAX.$msgbox = PMA_ajaxShowMessage();
                $.post(url, params, AJAX.responseHandler);
            }
        }
    },
    /**
     * Called after the request that was initiated by this.requestHandler()
     * has completed successfully or with a caught error. For completely
     * failed requests or requests with uncaught errors, see the .ajaxError
     * handler at the bottom of this file.
     *
     * To refer to self use 'AJAX', instead of 'this' as this function
     * is called in the jQuery context.
     *
     * @param object e Event data
     *
     * @return void
     */
    responseHandler: function (data) {
        if (typeof data === 'undefined' || data === null) {
            return;
        }
        if (typeof data.success != 'undefined' && data.success) {
            $('html, body').animate({scrollTop: 0}, 'fast');
            PMA_ajaxRemoveMessage(AJAX.$msgbox);

            if (data._redirect) {
                PMA_ajaxShowMessage(data._redirect, false);
                AJAX.active = false;
                AJAX.xhr = null;
                return;
            }

            AJAX.scriptHandler.reset(function () {
                if (data._reloadNavigation) {
                    PMA_reloadNavigation();
                }
                if (data._title) {
                    $('title').replaceWith(data._title);
                }
                if (data._menu) {
                    if (history && history.pushState) {
                        var state = {
                            url : data._selflink,
                            menu : data._menu
                        };
                        history.replaceState(state, null);
                        AJAX.handleMenu.replace(data._menu);
                    } else {
                        PMA_MicroHistory.menus.replace(data._menu);
                        PMA_MicroHistory.menus.add(data._menuHash, data._menu);
                    }
                } else if (data._menuHash) {
                    if (! (history && history.pushState)) {
                        PMA_MicroHistory.menus.replace(PMA_MicroHistory.menus.get(data._menuHash));
                    }
                }
                if (data._disableNaviSettings) {
                    PMA_disableNaviSettings();
                }
                else {
                    PMA_ensureNaviSettings(data._selflink);
                }

                // Remove all containers that may have
                // been added outside of #page_content
                $('body').children()
                    .not('#pma_navigation')
                    .not('#floating_menubar')
                    .not('#page_nav_icons')
                    .not('#page_content')
                    .not('#selflink')
                    .not('#pma_header')
                    .not('#pma_footer')
                    .not('#pma_demo')
                    .not('#pma_console_container')
                    .not('#prefs_autoload')
                    .remove();
                // Replace #page_content with new content
                if (data.message && data.message.length > 0) {
                    $('#page_content').replaceWith(
                        "<div id='page_content'>" + data.message + "</div>"
                    );
                    PMA_highlightSQL($('#page_content'));
                    checkNumberOfFields();
                }

                if (data._selflink) {
                    var source = data._selflink.split('?')[0];
                    //Check for faulty links
                    $selflink_replace = {
                        "import.php": "tbl_sql.php",
                        "tbl_chart.php": "sql.php",
                        "tbl_gis_visualization.php": "sql.php"
                    };
                    if ($selflink_replace[source]) {
                        var replacement = $selflink_replace[source];
                        data._selflink = data._selflink.replace(source, replacement);
                    }
                    $('#selflink').find('> a').attr('href', data._selflink);
                }
                if (data._params) {
                    PMA_commonParams.setAll(data._params);
                }
                if (data._scripts) {
                    AJAX.scriptHandler.load(data._scripts);
                }
                if (data._selflink && data._scripts && data._menuHash && data._params) {
                    if (! (history && history.pushState)) {
                        PMA_MicroHistory.add(
                            data._selflink,
                            data._scripts,
                            data._menuHash,
                            data._params,
                            AJAX.source.attr('rel')
                        );
                    }
                }
                if (data._displayMessage) {
                    $('#page_content').prepend(data._displayMessage);
                    PMA_highlightSQL($('#page_content'));
                }

                $('#pma_errors').remove();

                var msg = '';
                if(data._errSubmitMsg){
                    msg = data._errSubmitMsg;
                }
                if (data._errors) {
                    $('<div/>', {id : 'pma_errors'})
                        .insertAfter('#selflink')
                        .append(data._errors);
                    // bind for php error reporting forms (bottom)
                    $("#pma_ignore_errors_bottom").bind("click", function(e) {
                        e.preventDefault();
                        PMA_ignorePhpErrors();
                    });
                    $("#pma_ignore_all_errors_bottom").bind("click", function(e) {
                        e.preventDefault();
                        PMA_ignorePhpErrors(false);
                    });
                    // In case of 'sendErrorReport'='always'
                    // submit the hidden error reporting form.
                    if (data._sendErrorAlways == '1' &&
                        data._stopErrorReportLoop != '1'
                    ) {
                        $("#pma_report_errors_form").submit();
                        PMA_ajaxShowMessage(PMA_messages.phpErrorsBeingSubmitted, false);
                        $('html, body').animate({scrollTop:$(document).height()}, 'slow');
                    } else if (data._promptPhpErrors) {
                        // otherwise just prompt user if it is set so.
                        msg = msg + PMA_messages.phpErrorsFound;
                        // scroll to bottom where all the errors are displayed.
                        $('html, body').animate({scrollTop:$(document).height()}, 'slow');
                    }
                }
                PMA_ajaxShowMessage(msg, false);
                // bind for php error reporting forms (popup)
                $("#pma_ignore_errors_popup").bind("click", function() {
                    PMA_ignorePhpErrors();
                });
                $("#pma_ignore_all_errors_popup").bind("click", function() {
                    PMA_ignorePhpErrors(false);
                });

                if (typeof AJAX._callback === 'function') {
                    AJAX._callback.call();
                }
                AJAX._callback = function () {};
            });

        } else {
            PMA_ajaxShowMessage(data.error, false);
            AJAX.active = false;
            AJAX.xhr = null;
            if (parseInt(data.redirect_flag) == 1) {
                // add one more GET param to display session expiry msg
                window.location.href += '&session_expired=1';
                window.location.reload();
            } else if (parseInt(data.reload_flag) == 1) {
                // remove the token param and reload
                window.location.href = window.location.href.replace(/&?token=[^&#]*/g, "");
                window.location.reload();
            }
            if (data.fieldWithError) {
                $(':input.error').removeClass("error");
                $('#'+data.fieldWithError).addClass("error");
            }
        }
    },
    /**
     * This object is in charge of downloading scripts,
     * keeping track of what's downloaded and firing
     * the onload event for them when the page is ready.
     */
    scriptHandler: {
        /**
         * @var array _scripts The list of files already downloaded
         */
        _scripts: [],
        /**
         * @var string _scriptsVersion version of phpMyAdmin from which the
         *                             scripts have been loaded
         */
        _scriptsVersion: null,
        /**
         * @var array _scriptsToBeLoaded The list of files that
         *                               need to be downloaded
         */
        _scriptsToBeLoaded: [],
        /**
         * @var array _scriptsToBeFired The list of files for which
         *                              to fire the onload event
         */
        _scriptsToBeFired: [],
        /**
         * Records that a file has been downloaded
         *
         * @param string file The filename
         * @param string fire Whether this file will be registering
         *                    onload/teardown events
         *
         * @return self For chaining
         */
        add: function (file, fire) {
            this._scripts.push(file);
            if (fire) {
                // Record whether to fire any events for the file
                // This is necessary to correctly tear down the initial page
                this._scriptsToBeFired.push(file);
            }
            return this;
        },
        /**
         * Download a list of js files in one request
         *
         * @param array files An array of filenames and flags
         *
         * @return void
         */
        load: function (files, callback) {
            var self = this;
            // Clear loaded scripts if they are from another version of phpMyAdmin.
            // Depends on common params being set before loading scripts in responseHandler
            if (self._scriptsVersion == null) {
            	self._scriptsVersion = PMA_commonParams.get('PMA_VERSION');
            } else if (self._scriptsVersion != PMA_commonParams.get('PMA_VERSION')) {
            	self._scripts = [];
            	self._scriptsVersion = PMA_commonParams.get('PMA_VERSION');
            }
            self._scriptsToBeLoaded = [];
            self._scriptsToBeFired = [];
            for (var i in files) {
                self._scriptsToBeLoaded.push(files[i].name);
                if (files[i].fire) {
                    self._scriptsToBeFired.push(files[i].name);
                }
            }
            // Generate a request string
            var request = [];
            var needRequest = false;
            for (var index in self._scriptsToBeLoaded) {
                var script = self._scriptsToBeLoaded[index];
                // Only for scripts that we don't already have
                if ($.inArray(script, self._scripts) == -1) {
                    needRequest = true;
                    this.add(script);
                    request.push("scripts%5B%5D=" + script);
                }
            }
            request.push("call_done=1");
            request.push("v=" + encodeURIComponent(PMA_commonParams.get('PMA_VERSION')));
            // Download the composite js file, if necessary
            if (needRequest) {
                this.appendScript("js/get_scripts.js.php?" + request.join("&"));
            } else {
                self.done(callback);
            }
        },
        /**
         * Called whenever all files are loaded
         *
         * @return void
         */
        done: function (callback) {
            if($.isFunction(callback)) {
                callback();
            }
            if (typeof ErrorReport !== 'undefined') {
                ErrorReport.wrap_global_functions();
            }
            for (var i in this._scriptsToBeFired) {
                AJAX.fireOnload(this._scriptsToBeFired[i]);
            }
            AJAX.active = false;
        },
        /**
         * Appends a script element to the head to load the scripts
         *
         * @return void
         */
        appendScript: function (url) {
            var head = document.head || document.getElementsByTagName('head')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = url;
            script.async = false;
            head.appendChild(script);
        },
        /**
         * Fires all the teardown event handlers for the current page
         * and rebinds all forms and links to the request handler
         *
         * @param function callback The callback to call after resetting
         *
         * @return void
         */
        reset: function (callback) {
            for (var i in this._scriptsToBeFired) {
                AJAX.fireTeardown(this._scriptsToBeFired[i]);
            }
            this._scriptsToBeFired = [];
            /**
             * Re-attach a generic event handler to clicks
             * on pages and submissions of forms
             */
            $(document).off('click', 'a').on('click', 'a', AJAX.requestHandler);
            $(document).off('submit', 'form').on('submit', 'form', AJAX.requestHandler);
            if (! (history && history.pushState)) {
                PMA_MicroHistory.update();
            }
            callback();
        }
    }
};

/**
 * Here we register a function that will remove the onsubmit event from all
 * forms that will be handled by the generic page loader. We then save this
 * event handler in the "jQuery data", so that we can fire it up later in
 * AJAX.requestHandler().
 *
 * See bug #3583316
 */
AJAX.registerOnload('functions.js', function () {
    // Registering the onload event for functions.js
    // ensures that it will be fired for all pages
    $('form').not('.ajax').not('.disableAjax').each(function () {
        if ($(this).attr('onsubmit')) {
            $(this).data('onsubmit', this.onsubmit).attr('onsubmit', '');
        }
    });

    var $page_content = $('#page_content');
    /**
     * Workaround for passing submit button name,value on ajax form submit
     * by appending hidden element with submit button name and value.
     */
    $page_content.on('click', 'form input[type=submit]', function() {
        var buttonName = $(this).attr('name');
        if (typeof buttonName === 'undefined') {
            return;
        }
        $(this).closest('form').append($('<input/>', {
            'type' : 'hidden',
            'name' : buttonName,
            'value': $(this).val()
        }));
    });

    /**
     * Attach event listener to events when user modify visible
     * Input,Textarea and select fields to make changes in forms
     */
    $page_content.on(
        'keyup change',
        'form.lock-page textarea, ' +
        'form.lock-page input[type="text"], ' +
        'form.lock-page input[type="number"], ' +
        'form.lock-page select',
        {value:1},
        AJAX.lockPageHandler
    );
    $page_content.on(
        'change',
        'form.lock-page input[type="checkbox"], ' +
        'form.lock-page input[type="radio"]',
        {value:2},
        AJAX.lockPageHandler
    );
    /**
     * Reset lock when lock-page form reset event is fired
     * Note: reset does not bubble in all browser so attach to
     * form directly.
     */
    $('form.lock-page').on('reset', function(event){
        AJAX.resetLock();
    });
});

/**
 * Page load event handler
 */
$(function () {
    var menuContent = $('<div></div>')
        .append($('#serverinfo').clone())
        .append($('#topmenucontainer').clone())
        .html();
    if (history && history.pushState) {
        //set initial state reload
        var initState = ('state' in window.history && window.history.state !== null);
        var initURL = $('#selflink').find('> a').attr('href') || location.href;
        var state = {
            url : initURL,
            menu : menuContent
        };
        history.replaceState(state, null);

        $(window).on('popstate', function(event) {
            var initPop = (! initState && location.href == initURL);
            initState = true;
            //check if popstate fired on first page itself
            if (initPop) {
                return;
            }
            var state = event.originalEvent.state;
            if (state && state.menu) {
                AJAX.$msgbox = PMA_ajaxShowMessage();
                var params = 'ajax_request=true&ajax_page_request=true';
                var url = state.url || location.href;
                $.get(url, params, AJAX.responseHandler);
                //TODO: Check if sometimes menu is not retrieved from server,
                // Not sure but it seems menu was missing only for printview which
                // been removed lately, so if it's right some dead menu checks/fallbacks
                // may need to be removed from this file and Header.class.php
                //AJAX.handleMenu.replace(event.originalEvent.state.menu);
            }
        });
    } else {
        // Fallback to microhistory mechanism
        AJAX.scriptHandler
            .load([{'name' : 'microhistory.js', 'fire' : 1}], function () {
                // The cache primer is set by the footer class
                if (PMA_MicroHistory.primer.url) {
                    PMA_MicroHistory.menus.add(
                        PMA_MicroHistory.primer.menuHash,
                        menuContent
                    );
                }
                $(function () {
                    // Queue up this event twice to make sure that we get a copy
                    // of the page after all other onload events have been fired
                    if (PMA_MicroHistory.primer.url) {
                        PMA_MicroHistory.add(
                            PMA_MicroHistory.primer.url,
                            PMA_MicroHistory.primer.scripts,
                            PMA_MicroHistory.primer.menuHash
                        );
                    }
                });
            });
    }
});

/**
 * Attach a generic event handler to clicks
 * on pages and submissions of forms
 */
$(document).on('click', 'a', AJAX.requestHandler);
$(document).on('submit', 'form', AJAX.requestHandler);

/**
 * Gracefully handle fatal server errors
 * (e.g: 500 - Internal server error)
 */
$(document).ajaxError(function (event, request, settings) {
    if (request.status !== 0) { // Don't handle aborted requests
        var errorCode = PMA_sprintf(PMA_messages.strErrorCode, request.status);
        var errorText = PMA_sprintf(PMA_messages.strErrorText, request.statusText);
        PMA_ajaxShowMessage(
            '<div class="error">' +
            PMA_messages.strErrorProcessingRequest +
            '<div>' + errorCode + '</div>' +
            '<div>' + errorText + '</div>' +
            '</div>',
            false
        );
        AJAX.active = false;
    }
});
;

/* vim: set expandtab sw=4 ts=4 sts=4: */

// global var that holds: 0- if ctrl key is not pressed 1- if ctrl key is pressed
var ctrlKeyHistory = 0;

/**
  * Allows moving around inputs/select by Ctrl+arrows
  *
  * @param object   event data
  */
function onKeyDownArrowsHandler(e)
{
    e = e || window.event;

    var o = (e.srcElement || e.target);
    if (!o) {
        return;
    }
    if (o.tagName != "TEXTAREA" && o.tagName != "INPUT" && o.tagName != "SELECT") {
        return;
    }
    if ((e.which != 17) && (e.which != 37) && (e.which != 38) && (e.which != 39) && (e.which !=40)) {
        return;
    }
    if (!o.id) {
        return;
    }

    if (e.type == "keyup") {
        if (e.which==17) {
            ctrlKeyHistory = 0;
        }
        return;
    }
    else if (e.type == "keydown") {
        if (e.which == 17) {
            ctrlKeyHistory = 1;
        }
    }

    if (ctrlKeyHistory != 1) {
        return;
    }

    e.preventDefault();

    var pos = o.id.split("_");
    if (pos[0] != "field" || typeof pos[2] == "undefined") {
        return;
    }

    var x = pos[2], y = pos[1];

    var nO = null;

    switch (e.keyCode) {
    case 38:
        // up
        y--;
        break;
    case 40:
        // down
        y++;
        break;
    case 37:
        // left
        x--;
        break;
    case 39:
        // right
        x++;
        break;
    default:
        return;
    }

    var is_firefox = navigator.userAgent.toLowerCase().indexOf("firefox/") > -1;

    var id = "field_" + y + "_" + x;
    nO = document.getElementById(id);
    if (! nO) {
        id = "field_" + y + "_" + x + "_0";
        nO = document.getElementById(id);
    }

    // skip non existent fields
    if (! nO) {
        return;
    }

    // for firefox select tag
    var lvalue = o.selectedIndex;
    var nOvalue = nO.selectedIndex;

    nO.focus();

    if (is_firefox) {
        var ffcheck = 0;
        var ffversion;
        for (ffversion = 3 ; ffversion < 25 ; ffversion++) {
            var is_firefox_v_24 = navigator.userAgent.toLowerCase().indexOf('firefox/'+ffversion) > -1;
            if (is_firefox_v_24) {
                ffcheck = 1;
                break;
            }
        }
        if (ffcheck == 1) {
            if (e.which == 38 || e.which == 37) {
                nOvalue++;
            }
            else if (e.which == 40 || e.which == 39) {
                nOvalue--;
            }
            nO.selectedIndex=nOvalue;
        }
        else {
            if (e.which == 38 || e.which == 37) {
                lvalue++;
            }
            else if (e.which == 40 || e.which == 39) {
                lvalue--;
            }
            o.selectedIndex=lvalue;
        }
    }

    if (nO.tagName != 'SELECT') {
        nO.select();
    }
    e.returnValue = false;
}

AJAX.registerTeardown('keyhandler.js', function () {
    $(document).off('keydown keyup', '#table_columns');
    $(document).off('keydown keyup', 'table.insertRowTable');
});

AJAX.registerOnload('keyhandler.js', function () {
    $(document).on('keydown keyup', '#table_columns', function (event) {
        onKeyDownArrowsHandler(event.originalEvent);
    });
    $(document).on('keydown keyup', 'table.insertRowTable', function (event) {
        onKeyDownArrowsHandler(event.originalEvent);
    });
});
;

/*! jQuery UI - v1.11.2 - 2014-11-30
* http://jqueryui.com
* Includes: core.js, widget.js, mouse.js, position.js, draggable.js, droppable.js, resizable.js, selectable.js, sortable.js, accordion.js, autocomplete.js, button.js, datepicker.js, dialog.js, menu.js, progressbar.js, selectmenu.js, slider.js, spinner.js, tabs.js, tooltip.js, effect.js, effect-blind.js, effect-bounce.js, effect-clip.js, effect-drop.js, effect-explode.js, effect-fade.js, effect-fold.js, effect-highlight.js, effect-puff.js, effect-pulsate.js, effect-scale.js, effect-shake.js, effect-size.js, effect-slide.js, effect-transfer.js
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */

(function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e(jQuery)})(function(e){function t(t,s){var n,a,o,r=t.nodeName.toLowerCase();return"area"===r?(n=t.parentNode,a=n.name,t.href&&a&&"map"===n.nodeName.toLowerCase()?(o=e("img[usemap='#"+a+"']")[0],!!o&&i(o)):!1):(/input|select|textarea|button|object/.test(r)?!t.disabled:"a"===r?t.href||s:s)&&i(t)}function i(t){return e.expr.filters.visible(t)&&!e(t).parents().addBack().filter(function(){return"hidden"===e.css(this,"visibility")}).length}function s(e){for(var t,i;e.length&&e[0]!==document;){if(t=e.css("position"),("absolute"===t||"relative"===t||"fixed"===t)&&(i=parseInt(e.css("zIndex"),10),!isNaN(i)&&0!==i))return i;e=e.parent()}return 0}function n(){this._curInst=null,this._keyEvent=!1,this._disabledInputs=[],this._datepickerShowing=!1,this._inDialog=!1,this._mainDivId="ui-datepicker-div",this._inlineClass="ui-datepicker-inline",this._appendClass="ui-datepicker-append",this._triggerClass="ui-datepicker-trigger",this._dialogClass="ui-datepicker-dialog",this._disableClass="ui-datepicker-disabled",this._unselectableClass="ui-datepicker-unselectable",this._currentClass="ui-datepicker-current-day",this._dayOverClass="ui-datepicker-days-cell-over",this.regional=[],this.regional[""]={closeText:"Done",prevText:"Prev",nextText:"Next",currentText:"Today",monthNames:["January","February","March","April","May","June","July","August","September","October","November","December"],monthNamesShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],dayNames:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],dayNamesShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dayNamesMin:["Su","Mo","Tu","We","Th","Fr","Sa"],weekHeader:"Wk",dateFormat:"mm/dd/yy",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:""},this._defaults={showOn:"focus",showAnim:"fadeIn",showOptions:{},defaultDate:null,appendText:"",buttonText:"...",buttonImage:"",buttonImageOnly:!1,hideIfNoPrevNext:!1,navigationAsDateFormat:!1,gotoCurrent:!1,changeMonth:!1,changeYear:!1,yearRange:"c-10:c+10",showOtherMonths:!1,selectOtherMonths:!1,showWeek:!1,calculateWeek:this.iso8601Week,shortYearCutoff:"+10",minDate:null,maxDate:null,duration:"fast",beforeShowDay:null,beforeShow:null,onSelect:null,onChangeMonthYear:null,onClose:null,numberOfMonths:1,showCurrentAtPos:0,stepMonths:1,stepBigMonths:12,altField:"",altFormat:"",constrainInput:!0,showButtonPanel:!1,autoSize:!1,disabled:!1},e.extend(this._defaults,this.regional[""]),this.regional.en=e.extend(!0,{},this.regional[""]),this.regional["en-US"]=e.extend(!0,{},this.regional.en),this.dpDiv=a(e("<div id='"+this._mainDivId+"' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"))}function a(t){var i="button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";return t.delegate(i,"mouseout",function(){e(this).removeClass("ui-state-hover"),-1!==this.className.indexOf("ui-datepicker-prev")&&e(this).removeClass("ui-datepicker-prev-hover"),-1!==this.className.indexOf("ui-datepicker-next")&&e(this).removeClass("ui-datepicker-next-hover")}).delegate(i,"mouseover",o)}function o(){e.datepicker._isDisabledDatepicker(v.inline?v.dpDiv.parent()[0]:v.input[0])||(e(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"),e(this).addClass("ui-state-hover"),-1!==this.className.indexOf("ui-datepicker-prev")&&e(this).addClass("ui-datepicker-prev-hover"),-1!==this.className.indexOf("ui-datepicker-next")&&e(this).addClass("ui-datepicker-next-hover"))}function r(t,i){e.extend(t,i);for(var s in i)null==i[s]&&(t[s]=i[s]);return t}function h(e){return function(){var t=this.element.val();e.apply(this,arguments),this._refresh(),t!==this.element.val()&&this._trigger("change")}}e.ui=e.ui||{},e.extend(e.ui,{version:"1.11.2",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),e.fn.extend({scrollParent:function(t){var i=this.css("position"),s="absolute"===i,n=t?/(auto|scroll|hidden)/:/(auto|scroll)/,a=this.parents().filter(function(){var t=e(this);return s&&"static"===t.css("position")?!1:n.test(t.css("overflow")+t.css("overflow-y")+t.css("overflow-x"))}).eq(0);return"fixed"!==i&&a.length?a:e(this[0].ownerDocument||document)},uniqueId:function(){var e=0;return function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++e)})}}(),removeUniqueId:function(){return this.each(function(){/^ui-id-\d+$/.test(this.id)&&e(this).removeAttr("id")})}}),e.extend(e.expr[":"],{data:e.expr.createPseudo?e.expr.createPseudo(function(t){return function(i){return!!e.data(i,t)}}):function(t,i,s){return!!e.data(t,s[3])},focusable:function(i){return t(i,!isNaN(e.attr(i,"tabindex")))},tabbable:function(i){var s=e.attr(i,"tabindex"),n=isNaN(s);return(n||s>=0)&&t(i,!n)}}),e("<a>").outerWidth(1).jquery||e.each(["Width","Height"],function(t,i){function s(t,i,s,a){return e.each(n,function(){i-=parseFloat(e.css(t,"padding"+this))||0,s&&(i-=parseFloat(e.css(t,"border"+this+"Width"))||0),a&&(i-=parseFloat(e.css(t,"margin"+this))||0)}),i}var n="Width"===i?["Left","Right"]:["Top","Bottom"],a=i.toLowerCase(),o={innerWidth:e.fn.innerWidth,innerHeight:e.fn.innerHeight,outerWidth:e.fn.outerWidth,outerHeight:e.fn.outerHeight};e.fn["inner"+i]=function(t){return void 0===t?o["inner"+i].call(this):this.each(function(){e(this).css(a,s(this,t)+"px")})},e.fn["outer"+i]=function(t,n){return"number"!=typeof t?o["outer"+i].call(this,t):this.each(function(){e(this).css(a,s(this,t,!0,n)+"px")})}}),e.fn.addBack||(e.fn.addBack=function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}),e("<a>").data("a-b","a").removeData("a-b").data("a-b")&&(e.fn.removeData=function(t){return function(i){return arguments.length?t.call(this,e.camelCase(i)):t.call(this)}}(e.fn.removeData)),e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()),e.fn.extend({focus:function(t){return function(i,s){return"number"==typeof i?this.each(function(){var t=this;setTimeout(function(){e(t).focus(),s&&s.call(t)},i)}):t.apply(this,arguments)}}(e.fn.focus),disableSelection:function(){var e="onselectstart"in document.createElement("div")?"selectstart":"mousedown";return function(){return this.bind(e+".ui-disableSelection",function(e){e.preventDefault()})}}(),enableSelection:function(){return this.unbind(".ui-disableSelection")},zIndex:function(t){if(void 0!==t)return this.css("zIndex",t);if(this.length)for(var i,s,n=e(this[0]);n.length&&n[0]!==document;){if(i=n.css("position"),("absolute"===i||"relative"===i||"fixed"===i)&&(s=parseInt(n.css("zIndex"),10),!isNaN(s)&&0!==s))return s;n=n.parent()}return 0}}),e.ui.plugin={add:function(t,i,s){var n,a=e.ui[t].prototype;for(n in s)a.plugins[n]=a.plugins[n]||[],a.plugins[n].push([i,s[n]])},call:function(e,t,i,s){var n,a=e.plugins[t];if(a&&(s||e.element[0].parentNode&&11!==e.element[0].parentNode.nodeType))for(n=0;a.length>n;n++)e.options[a[n][0]]&&a[n][1].apply(e.element,i)}};var l=0,u=Array.prototype.slice;e.cleanData=function(t){return function(i){var s,n,a;for(a=0;null!=(n=i[a]);a++)try{s=e._data(n,"events"),s&&s.remove&&e(n).triggerHandler("remove")}catch(o){}t(i)}}(e.cleanData),e.widget=function(t,i,s){var n,a,o,r,h={},l=t.split(".")[0];return t=t.split(".")[1],n=l+"-"+t,s||(s=i,i=e.Widget),e.expr[":"][n.toLowerCase()]=function(t){return!!e.data(t,n)},e[l]=e[l]||{},a=e[l][t],o=e[l][t]=function(e,t){return this._createWidget?(arguments.length&&this._createWidget(e,t),void 0):new o(e,t)},e.extend(o,a,{version:s.version,_proto:e.extend({},s),_childConstructors:[]}),r=new i,r.options=e.widget.extend({},r.options),e.each(s,function(t,s){return e.isFunction(s)?(h[t]=function(){var e=function(){return i.prototype[t].apply(this,arguments)},n=function(e){return i.prototype[t].apply(this,e)};return function(){var t,i=this._super,a=this._superApply;return this._super=e,this._superApply=n,t=s.apply(this,arguments),this._super=i,this._superApply=a,t}}(),void 0):(h[t]=s,void 0)}),o.prototype=e.widget.extend(r,{widgetEventPrefix:a?r.widgetEventPrefix||t:t},h,{constructor:o,namespace:l,widgetName:t,widgetFullName:n}),a?(e.each(a._childConstructors,function(t,i){var s=i.prototype;e.widget(s.namespace+"."+s.widgetName,o,i._proto)}),delete a._childConstructors):i._childConstructors.push(o),e.widget.bridge(t,o),o},e.widget.extend=function(t){for(var i,s,n=u.call(arguments,1),a=0,o=n.length;o>a;a++)for(i in n[a])s=n[a][i],n[a].hasOwnProperty(i)&&void 0!==s&&(t[i]=e.isPlainObject(s)?e.isPlainObject(t[i])?e.widget.extend({},t[i],s):e.widget.extend({},s):s);return t},e.widget.bridge=function(t,i){var s=i.prototype.widgetFullName||t;e.fn[t]=function(n){var a="string"==typeof n,o=u.call(arguments,1),r=this;return n=!a&&o.length?e.widget.extend.apply(null,[n].concat(o)):n,a?this.each(function(){var i,a=e.data(this,s);return"instance"===n?(r=a,!1):a?e.isFunction(a[n])&&"_"!==n.charAt(0)?(i=a[n].apply(a,o),i!==a&&void 0!==i?(r=i&&i.jquery?r.pushStack(i.get()):i,!1):void 0):e.error("no such method '"+n+"' for "+t+" widget instance"):e.error("cannot call methods on "+t+" prior to initialization; "+"attempted to call method '"+n+"'")}):this.each(function(){var t=e.data(this,s);t?(t.option(n||{}),t._init&&t._init()):e.data(this,s,new i(n,this))}),r}},e.Widget=function(){},e.Widget._childConstructors=[],e.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{disabled:!1,create:null},_createWidget:function(t,i){i=e(i||this.defaultElement||this)[0],this.element=e(i),this.uuid=l++,this.eventNamespace="."+this.widgetName+this.uuid,this.bindings=e(),this.hoverable=e(),this.focusable=e(),i!==this&&(e.data(i,this.widgetFullName,this),this._on(!0,this.element,{remove:function(e){e.target===i&&this.destroy()}}),this.document=e(i.style?i.ownerDocument:i.document||i),this.window=e(this.document[0].defaultView||this.document[0].parentWindow)),this.options=e.widget.extend({},this.options,this._getCreateOptions(),t),this._create(),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:e.noop,_getCreateEventData:e.noop,_create:e.noop,_init:e.noop,destroy:function(){this._destroy(),this.element.unbind(this.eventNamespace).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)),this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName+"-disabled "+"ui-state-disabled"),this.bindings.unbind(this.eventNamespace),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")},_destroy:e.noop,widget:function(){return this.element},option:function(t,i){var s,n,a,o=t;if(0===arguments.length)return e.widget.extend({},this.options);if("string"==typeof t)if(o={},s=t.split("."),t=s.shift(),s.length){for(n=o[t]=e.widget.extend({},this.options[t]),a=0;s.length-1>a;a++)n[s[a]]=n[s[a]]||{},n=n[s[a]];if(t=s.pop(),1===arguments.length)return void 0===n[t]?null:n[t];n[t]=i}else{if(1===arguments.length)return void 0===this.options[t]?null:this.options[t];o[t]=i}return this._setOptions(o),this},_setOptions:function(e){var t;for(t in e)this._setOption(t,e[t]);return this},_setOption:function(e,t){return this.options[e]=t,"disabled"===e&&(this.widget().toggleClass(this.widgetFullName+"-disabled",!!t),t&&(this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus"))),this},enable:function(){return this._setOptions({disabled:!1})},disable:function(){return this._setOptions({disabled:!0})},_on:function(t,i,s){var n,a=this;"boolean"!=typeof t&&(s=i,i=t,t=!1),s?(i=n=e(i),this.bindings=this.bindings.add(i)):(s=i,i=this.element,n=this.widget()),e.each(s,function(s,o){function r(){return t||a.options.disabled!==!0&&!e(this).hasClass("ui-state-disabled")?("string"==typeof o?a[o]:o).apply(a,arguments):void 0}"string"!=typeof o&&(r.guid=o.guid=o.guid||r.guid||e.guid++);var h=s.match(/^([\w:-]*)\s*(.*)$/),l=h[1]+a.eventNamespace,u=h[2];u?n.delegate(u,l,r):i.bind(l,r)})},_off:function(t,i){i=(i||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,t.unbind(i).undelegate(i),this.bindings=e(this.bindings.not(t).get()),this.focusable=e(this.focusable.not(t).get()),this.hoverable=e(this.hoverable.not(t).get())},_delay:function(e,t){function i(){return("string"==typeof e?s[e]:e).apply(s,arguments)}var s=this;return setTimeout(i,t||0)},_hoverable:function(t){this.hoverable=this.hoverable.add(t),this._on(t,{mouseenter:function(t){e(t.currentTarget).addClass("ui-state-hover")},mouseleave:function(t){e(t.currentTarget).removeClass("ui-state-hover")}})},_focusable:function(t){this.focusable=this.focusable.add(t),this._on(t,{focusin:function(t){e(t.currentTarget).addClass("ui-state-focus")},focusout:function(t){e(t.currentTarget).removeClass("ui-state-focus")}})},_trigger:function(t,i,s){var n,a,o=this.options[t];if(s=s||{},i=e.Event(i),i.type=(t===this.widgetEventPrefix?t:this.widgetEventPrefix+t).toLowerCase(),i.target=this.element[0],a=i.originalEvent)for(n in a)n in i||(i[n]=a[n]);return this.element.trigger(i,s),!(e.isFunction(o)&&o.apply(this.element[0],[i].concat(s))===!1||i.isDefaultPrevented())}},e.each({show:"fadeIn",hide:"fadeOut"},function(t,i){e.Widget.prototype["_"+t]=function(s,n,a){"string"==typeof n&&(n={effect:n});var o,r=n?n===!0||"number"==typeof n?i:n.effect||i:t;n=n||{},"number"==typeof n&&(n={duration:n}),o=!e.isEmptyObject(n),n.complete=a,n.delay&&s.delay(n.delay),o&&e.effects&&e.effects.effect[r]?s[t](n):r!==t&&s[r]?s[r](n.duration,n.easing,a):s.queue(function(i){e(this)[t](),a&&a.call(s[0]),i()})}}),e.widget;var d=!1;e(document).mouseup(function(){d=!1}),e.widget("ui.mouse",{version:"1.11.2",options:{cancel:"input,textarea,button,select,option",distance:1,delay:0},_mouseInit:function(){var t=this;this.element.bind("mousedown."+this.widgetName,function(e){return t._mouseDown(e)}).bind("click."+this.widgetName,function(i){return!0===e.data(i.target,t.widgetName+".preventClickEvent")?(e.removeData(i.target,t.widgetName+".preventClickEvent"),i.stopImmediatePropagation(),!1):void 0}),this.started=!1},_mouseDestroy:function(){this.element.unbind("."+this.widgetName),this._mouseMoveDelegate&&this.document.unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(t){if(!d){this._mouseMoved=!1,this._mouseStarted&&this._mouseUp(t),this._mouseDownEvent=t;var i=this,s=1===t.which,n="string"==typeof this.options.cancel&&t.target.nodeName?e(t.target).closest(this.options.cancel).length:!1;return s&&!n&&this._mouseCapture(t)?(this.mouseDelayMet=!this.options.delay,this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){i.mouseDelayMet=!0},this.options.delay)),this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=this._mouseStart(t)!==!1,!this._mouseStarted)?(t.preventDefault(),!0):(!0===e.data(t.target,this.widgetName+".preventClickEvent")&&e.removeData(t.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(e){return i._mouseMove(e)},this._mouseUpDelegate=function(e){return i._mouseUp(e)},this.document.bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate),t.preventDefault(),d=!0,!0)):!0}},_mouseMove:function(t){if(this._mouseMoved){if(e.ui.ie&&(!document.documentMode||9>document.documentMode)&&!t.button)return this._mouseUp(t);if(!t.which)return this._mouseUp(t)}return(t.which||t.button)&&(this._mouseMoved=!0),this._mouseStarted?(this._mouseDrag(t),t.preventDefault()):(this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=this._mouseStart(this._mouseDownEvent,t)!==!1,this._mouseStarted?this._mouseDrag(t):this._mouseUp(t)),!this._mouseStarted)},_mouseUp:function(t){return this.document.unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,t.target===this._mouseDownEvent.target&&e.data(t.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(t)),d=!1,!1},_mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance},_mouseDelayMet:function(){return this.mouseDelayMet},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return!0}}),function(){function t(e,t,i){return[parseFloat(e[0])*(p.test(e[0])?t/100:1),parseFloat(e[1])*(p.test(e[1])?i/100:1)]}function i(t,i){return parseInt(e.css(t,i),10)||0}function s(t){var i=t[0];return 9===i.nodeType?{width:t.width(),height:t.height(),offset:{top:0,left:0}}:e.isWindow(i)?{width:t.width(),height:t.height(),offset:{top:t.scrollTop(),left:t.scrollLeft()}}:i.preventDefault?{width:0,height:0,offset:{top:i.pageY,left:i.pageX}}:{width:t.outerWidth(),height:t.outerHeight(),offset:t.offset()}}e.ui=e.ui||{};var n,a,o=Math.max,r=Math.abs,h=Math.round,l=/left|center|right/,u=/top|center|bottom/,d=/[\+\-]\d+(\.[\d]+)?%?/,c=/^\w+/,p=/%$/,f=e.fn.position;e.position={scrollbarWidth:function(){if(void 0!==n)return n;var t,i,s=e("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),a=s.children()[0];return e("body").append(s),t=a.offsetWidth,s.css("overflow","scroll"),i=a.offsetWidth,t===i&&(i=s[0].clientWidth),s.remove(),n=t-i},getScrollInfo:function(t){var i=t.isWindow||t.isDocument?"":t.element.css("overflow-x"),s=t.isWindow||t.isDocument?"":t.element.css("overflow-y"),n="scroll"===i||"auto"===i&&t.width<t.element[0].scrollWidth,a="scroll"===s||"auto"===s&&t.height<t.element[0].scrollHeight;return{width:a?e.position.scrollbarWidth():0,height:n?e.position.scrollbarWidth():0}},getWithinInfo:function(t){var i=e(t||window),s=e.isWindow(i[0]),n=!!i[0]&&9===i[0].nodeType;return{element:i,isWindow:s,isDocument:n,offset:i.offset()||{left:0,top:0},scrollLeft:i.scrollLeft(),scrollTop:i.scrollTop(),width:s||n?i.width():i.outerWidth(),height:s||n?i.height():i.outerHeight()}}},e.fn.position=function(n){if(!n||!n.of)return f.apply(this,arguments);n=e.extend({},n);var p,m,g,v,y,b,_=e(n.of),x=e.position.getWithinInfo(n.within),w=e.position.getScrollInfo(x),k=(n.collision||"flip").split(" "),T={};return b=s(_),_[0].preventDefault&&(n.at="left top"),m=b.width,g=b.height,v=b.offset,y=e.extend({},v),e.each(["my","at"],function(){var e,t,i=(n[this]||"").split(" ");1===i.length&&(i=l.test(i[0])?i.concat(["center"]):u.test(i[0])?["center"].concat(i):["center","center"]),i[0]=l.test(i[0])?i[0]:"center",i[1]=u.test(i[1])?i[1]:"center",e=d.exec(i[0]),t=d.exec(i[1]),T[this]=[e?e[0]:0,t?t[0]:0],n[this]=[c.exec(i[0])[0],c.exec(i[1])[0]]}),1===k.length&&(k[1]=k[0]),"right"===n.at[0]?y.left+=m:"center"===n.at[0]&&(y.left+=m/2),"bottom"===n.at[1]?y.top+=g:"center"===n.at[1]&&(y.top+=g/2),p=t(T.at,m,g),y.left+=p[0],y.top+=p[1],this.each(function(){var s,l,u=e(this),d=u.outerWidth(),c=u.outerHeight(),f=i(this,"marginLeft"),b=i(this,"marginTop"),D=d+f+i(this,"marginRight")+w.width,S=c+b+i(this,"marginBottom")+w.height,M=e.extend({},y),C=t(T.my,u.outerWidth(),u.outerHeight());"right"===n.my[0]?M.left-=d:"center"===n.my[0]&&(M.left-=d/2),"bottom"===n.my[1]?M.top-=c:"center"===n.my[1]&&(M.top-=c/2),M.left+=C[0],M.top+=C[1],a||(M.left=h(M.left),M.top=h(M.top)),s={marginLeft:f,marginTop:b},e.each(["left","top"],function(t,i){e.ui.position[k[t]]&&e.ui.position[k[t]][i](M,{targetWidth:m,targetHeight:g,elemWidth:d,elemHeight:c,collisionPosition:s,collisionWidth:D,collisionHeight:S,offset:[p[0]+C[0],p[1]+C[1]],my:n.my,at:n.at,within:x,elem:u})}),n.using&&(l=function(e){var t=v.left-M.left,i=t+m-d,s=v.top-M.top,a=s+g-c,h={target:{element:_,left:v.left,top:v.top,width:m,height:g},element:{element:u,left:M.left,top:M.top,width:d,height:c},horizontal:0>i?"left":t>0?"right":"center",vertical:0>a?"top":s>0?"bottom":"middle"};d>m&&m>r(t+i)&&(h.horizontal="center"),c>g&&g>r(s+a)&&(h.vertical="middle"),h.important=o(r(t),r(i))>o(r(s),r(a))?"horizontal":"vertical",n.using.call(this,e,h)}),u.offset(e.extend(M,{using:l}))})},e.ui.position={fit:{left:function(e,t){var i,s=t.within,n=s.isWindow?s.scrollLeft:s.offset.left,a=s.width,r=e.left-t.collisionPosition.marginLeft,h=n-r,l=r+t.collisionWidth-a-n;t.collisionWidth>a?h>0&&0>=l?(i=e.left+h+t.collisionWidth-a-n,e.left+=h-i):e.left=l>0&&0>=h?n:h>l?n+a-t.collisionWidth:n:h>0?e.left+=h:l>0?e.left-=l:e.left=o(e.left-r,e.left)},top:function(e,t){var i,s=t.within,n=s.isWindow?s.scrollTop:s.offset.top,a=t.within.height,r=e.top-t.collisionPosition.marginTop,h=n-r,l=r+t.collisionHeight-a-n;t.collisionHeight>a?h>0&&0>=l?(i=e.top+h+t.collisionHeight-a-n,e.top+=h-i):e.top=l>0&&0>=h?n:h>l?n+a-t.collisionHeight:n:h>0?e.top+=h:l>0?e.top-=l:e.top=o(e.top-r,e.top)}},flip:{left:function(e,t){var i,s,n=t.within,a=n.offset.left+n.scrollLeft,o=n.width,h=n.isWindow?n.scrollLeft:n.offset.left,l=e.left-t.collisionPosition.marginLeft,u=l-h,d=l+t.collisionWidth-o-h,c="left"===t.my[0]?-t.elemWidth:"right"===t.my[0]?t.elemWidth:0,p="left"===t.at[0]?t.targetWidth:"right"===t.at[0]?-t.targetWidth:0,f=-2*t.offset[0];0>u?(i=e.left+c+p+f+t.collisionWidth-o-a,(0>i||r(u)>i)&&(e.left+=c+p+f)):d>0&&(s=e.left-t.collisionPosition.marginLeft+c+p+f-h,(s>0||d>r(s))&&(e.left+=c+p+f))},top:function(e,t){var i,s,n=t.within,a=n.offset.top+n.scrollTop,o=n.height,h=n.isWindow?n.scrollTop:n.offset.top,l=e.top-t.collisionPosition.marginTop,u=l-h,d=l+t.collisionHeight-o-h,c="top"===t.my[1],p=c?-t.elemHeight:"bottom"===t.my[1]?t.elemHeight:0,f="top"===t.at[1]?t.targetHeight:"bottom"===t.at[1]?-t.targetHeight:0,m=-2*t.offset[1];0>u?(s=e.top+p+f+m+t.collisionHeight-o-a,e.top+p+f+m>u&&(0>s||r(u)>s)&&(e.top+=p+f+m)):d>0&&(i=e.top-t.collisionPosition.marginTop+p+f+m-h,e.top+p+f+m>d&&(i>0||d>r(i))&&(e.top+=p+f+m))}},flipfit:{left:function(){e.ui.position.flip.left.apply(this,arguments),e.ui.position.fit.left.apply(this,arguments)},top:function(){e.ui.position.flip.top.apply(this,arguments),e.ui.position.fit.top.apply(this,arguments)}}},function(){var t,i,s,n,o,r=document.getElementsByTagName("body")[0],h=document.createElement("div");t=document.createElement(r?"div":"body"),s={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"},r&&e.extend(s,{position:"absolute",left:"-1000px",top:"-1000px"});for(o in s)t.style[o]=s[o];t.appendChild(h),i=r||document.documentElement,i.insertBefore(t,i.firstChild),h.style.cssText="position: absolute; left: 10.7432222px;",n=e(h).offset().left,a=n>10&&11>n,t.innerHTML="",i.removeChild(t)}()}(),e.ui.position,e.widget("ui.draggable",e.ui.mouse,{version:"1.11.2",widgetEventPrefix:"drag",options:{addClasses:!0,appendTo:"parent",axis:!1,connectToSortable:!1,containment:!1,cursor:"auto",cursorAt:!1,grid:!1,handle:!1,helper:"original",iframeFix:!1,opacity:!1,refreshPositions:!1,revert:!1,revertDuration:500,scope:"default",scroll:!0,scrollSensitivity:20,scrollSpeed:20,snap:!1,snapMode:"both",snapTolerance:20,stack:!1,zIndex:!1,drag:null,start:null,stop:null},_create:function(){"original"===this.options.helper&&this._setPositionRelative(),this.options.addClasses&&this.element.addClass("ui-draggable"),this.options.disabled&&this.element.addClass("ui-draggable-disabled"),this._setHandleClassName(),this._mouseInit()},_setOption:function(e,t){this._super(e,t),"handle"===e&&(this._removeHandleClassName(),this._setHandleClassName())},_destroy:function(){return(this.helper||this.element).is(".ui-draggable-dragging")?(this.destroyOnClear=!0,void 0):(this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"),this._removeHandleClassName(),this._mouseDestroy(),void 0)},_mouseCapture:function(t){var i=this.options;return this._blurActiveElement(t),this.helper||i.disabled||e(t.target).closest(".ui-resizable-handle").length>0?!1:(this.handle=this._getHandle(t),this.handle?(this._blockFrames(i.iframeFix===!0?"iframe":i.iframeFix),!0):!1)},_blockFrames:function(t){this.iframeBlocks=this.document.find(t).map(function(){var t=e(this);return e("<div>").css("position","absolute").appendTo(t.parent()).outerWidth(t.outerWidth()).outerHeight(t.outerHeight()).offset(t.offset())[0]})},_unblockFrames:function(){this.iframeBlocks&&(this.iframeBlocks.remove(),delete this.iframeBlocks)},_blurActiveElement:function(t){var i=this.document[0];if(this.handleElement.is(t.target))try{i.activeElement&&"body"!==i.activeElement.nodeName.toLowerCase()&&e(i.activeElement).blur()}catch(s){}},_mouseStart:function(t){var i=this.options;return this.helper=this._createHelper(t),this.helper.addClass("ui-draggable-dragging"),this._cacheHelperProportions(),e.ui.ddmanager&&(e.ui.ddmanager.current=this),this._cacheMargins(),this.cssPosition=this.helper.css("position"),this.scrollParent=this.helper.scrollParent(!0),this.offsetParent=this.helper.offsetParent(),this.hasFixedAncestor=this.helper.parents().filter(function(){return"fixed"===e(this).css("position")}).length>0,this.positionAbs=this.element.offset(),this._refreshOffsets(t),this.originalPosition=this.position=this._generatePosition(t,!1),this.originalPageX=t.pageX,this.originalPageY=t.pageY,i.cursorAt&&this._adjustOffsetFromHelper(i.cursorAt),this._setContainment(),this._trigger("start",t)===!1?(this._clear(),!1):(this._cacheHelperProportions(),e.ui.ddmanager&&!i.dropBehaviour&&e.ui.ddmanager.prepareOffsets(this,t),this._normalizeRightBottom(),this._mouseDrag(t,!0),e.ui.ddmanager&&e.ui.ddmanager.dragStart(this,t),!0)},_refreshOffsets:function(e){this.offset={top:this.positionAbs.top-this.margins.top,left:this.positionAbs.left-this.margins.left,scroll:!1,parent:this._getParentOffset(),relative:this._getRelativeOffset()},this.offset.click={left:e.pageX-this.offset.left,top:e.pageY-this.offset.top}},_mouseDrag:function(t,i){if(this.hasFixedAncestor&&(this.offset.parent=this._getParentOffset()),this.position=this._generatePosition(t,!0),this.positionAbs=this._convertPositionTo("absolute"),!i){var s=this._uiHash();if(this._trigger("drag",t,s)===!1)return this._mouseUp({}),!1;this.position=s.position}return this.helper[0].style.left=this.position.left+"px",this.helper[0].style.top=this.position.top+"px",e.ui.ddmanager&&e.ui.ddmanager.drag(this,t),!1},_mouseStop:function(t){var i=this,s=!1;return e.ui.ddmanager&&!this.options.dropBehaviour&&(s=e.ui.ddmanager.drop(this,t)),this.dropped&&(s=this.dropped,this.dropped=!1),"invalid"===this.options.revert&&!s||"valid"===this.options.revert&&s||this.options.revert===!0||e.isFunction(this.options.revert)&&this.options.revert.call(this.element,s)?e(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){i._trigger("stop",t)!==!1&&i._clear()}):this._trigger("stop",t)!==!1&&this._clear(),!1},_mouseUp:function(t){return this._unblockFrames(),e.ui.ddmanager&&e.ui.ddmanager.dragStop(this,t),this.handleElement.is(t.target)&&this.element.focus(),e.ui.mouse.prototype._mouseUp.call(this,t)},cancel:function(){return this.helper.is(".ui-draggable-dragging")?this._mouseUp({}):this._clear(),this},_getHandle:function(t){return this.options.handle?!!e(t.target).closest(this.element.find(this.options.handle)).length:!0},_setHandleClassName:function(){this.handleElement=this.options.handle?this.element.find(this.options.handle):this.element,this.handleElement.addClass("ui-draggable-handle")},_removeHandleClassName:function(){this.handleElement.removeClass("ui-draggable-handle")},_createHelper:function(t){var i=this.options,s=e.isFunction(i.helper),n=s?e(i.helper.apply(this.element[0],[t])):"clone"===i.helper?this.element.clone().removeAttr("id"):this.element;return n.parents("body").length||n.appendTo("parent"===i.appendTo?this.element[0].parentNode:i.appendTo),s&&n[0]===this.element[0]&&this._setPositionRelative(),n[0]===this.element[0]||/(fixed|absolute)/.test(n.css("position"))||n.css("position","absolute"),n},_setPositionRelative:function(){/^(?:r|a|f)/.test(this.element.css("position"))||(this.element[0].style.position="relative")},_adjustOffsetFromHelper:function(t){"string"==typeof t&&(t=t.split(" ")),e.isArray(t)&&(t={left:+t[0],top:+t[1]||0}),"left"in t&&(this.offset.click.left=t.left+this.margins.left),"right"in t&&(this.offset.click.left=this.helperProportions.width-t.right+this.margins.left),"top"in t&&(this.offset.click.top=t.top+this.margins.top),"bottom"in t&&(this.offset.click.top=this.helperProportions.height-t.bottom+this.margins.top)},_isRootNode:function(e){return/(html|body)/i.test(e.tagName)||e===this.document[0]},_getParentOffset:function(){var t=this.offsetParent.offset(),i=this.document[0];return"absolute"===this.cssPosition&&this.scrollParent[0]!==i&&e.contains(this.scrollParent[0],this.offsetParent[0])&&(t.left+=this.scrollParent.scrollLeft(),t.top+=this.scrollParent.scrollTop()),this._isRootNode(this.offsetParent[0])&&(t={top:0,left:0}),{top:t.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:t.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if("relative"!==this.cssPosition)return{top:0,left:0};var e=this.element.position(),t=this._isRootNode(this.scrollParent[0]);return{top:e.top-(parseInt(this.helper.css("top"),10)||0)+(t?0:this.scrollParent.scrollTop()),left:e.left-(parseInt(this.helper.css("left"),10)||0)+(t?0:this.scrollParent.scrollLeft())}},_cacheMargins:function(){this.margins={left:parseInt(this.element.css("marginLeft"),10)||0,top:parseInt(this.element.css("marginTop"),10)||0,right:parseInt(this.element.css("marginRight"),10)||0,bottom:parseInt(this.element.css("marginBottom"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var t,i,s,n=this.options,a=this.document[0];return this.relativeContainer=null,n.containment?"window"===n.containment?(this.containment=[e(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,e(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,e(window).scrollLeft()+e(window).width()-this.helperProportions.width-this.margins.left,e(window).scrollTop()+(e(window).height()||a.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top],void 0):"document"===n.containment?(this.containment=[0,0,e(a).width()-this.helperProportions.width-this.margins.left,(e(a).height()||a.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top],void 0):n.containment.constructor===Array?(this.containment=n.containment,void 0):("parent"===n.containment&&(n.containment=this.helper[0].parentNode),i=e(n.containment),s=i[0],s&&(t=/(scroll|auto)/.test(i.css("overflow")),this.containment=[(parseInt(i.css("borderLeftWidth"),10)||0)+(parseInt(i.css("paddingLeft"),10)||0),(parseInt(i.css("borderTopWidth"),10)||0)+(parseInt(i.css("paddingTop"),10)||0),(t?Math.max(s.scrollWidth,s.offsetWidth):s.offsetWidth)-(parseInt(i.css("borderRightWidth"),10)||0)-(parseInt(i.css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(t?Math.max(s.scrollHeight,s.offsetHeight):s.offsetHeight)-(parseInt(i.css("borderBottomWidth"),10)||0)-(parseInt(i.css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom],this.relativeContainer=i),void 0):(this.containment=null,void 0)},_convertPositionTo:function(e,t){t||(t=this.position);var i="absolute"===e?1:-1,s=this._isRootNode(this.scrollParent[0]);return{top:t.top+this.offset.relative.top*i+this.offset.parent.top*i-("fixed"===this.cssPosition?-this.offset.scroll.top:s?0:this.offset.scroll.top)*i,left:t.left+this.offset.relative.left*i+this.offset.parent.left*i-("fixed"===this.cssPosition?-this.offset.scroll.left:s?0:this.offset.scroll.left)*i}},_generatePosition:function(e,t){var i,s,n,a,o=this.options,r=this._isRootNode(this.scrollParent[0]),h=e.pageX,l=e.pageY;return r&&this.offset.scroll||(this.offset.scroll={top:this.scrollParent.scrollTop(),left:this.scrollParent.scrollLeft()}),t&&(this.containment&&(this.relativeContainer?(s=this.relativeContainer.offset(),i=[this.containment[0]+s.left,this.containment[1]+s.top,this.containment[2]+s.left,this.containment[3]+s.top]):i=this.containment,e.pageX-this.offset.click.left<i[0]&&(h=i[0]+this.offset.click.left),e.pageY-this.offset.click.top<i[1]&&(l=i[1]+this.offset.click.top),e.pageX-this.offset.click.left>i[2]&&(h=i[2]+this.offset.click.left),e.pageY-this.offset.click.top>i[3]&&(l=i[3]+this.offset.click.top)),o.grid&&(n=o.grid[1]?this.originalPageY+Math.round((l-this.originalPageY)/o.grid[1])*o.grid[1]:this.originalPageY,l=i?n-this.offset.click.top>=i[1]||n-this.offset.click.top>i[3]?n:n-this.offset.click.top>=i[1]?n-o.grid[1]:n+o.grid[1]:n,a=o.grid[0]?this.originalPageX+Math.round((h-this.originalPageX)/o.grid[0])*o.grid[0]:this.originalPageX,h=i?a-this.offset.click.left>=i[0]||a-this.offset.click.left>i[2]?a:a-this.offset.click.left>=i[0]?a-o.grid[0]:a+o.grid[0]:a),"y"===o.axis&&(h=this.originalPageX),"x"===o.axis&&(l=this.originalPageY)),{top:l-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+("fixed"===this.cssPosition?-this.offset.scroll.top:r?0:this.offset.scroll.top),left:h-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+("fixed"===this.cssPosition?-this.offset.scroll.left:r?0:this.offset.scroll.left)}
},_clear:function(){this.helper.removeClass("ui-draggable-dragging"),this.helper[0]===this.element[0]||this.cancelHelperRemoval||this.helper.remove(),this.helper=null,this.cancelHelperRemoval=!1,this.destroyOnClear&&this.destroy()},_normalizeRightBottom:function(){"y"!==this.options.axis&&"auto"!==this.helper.css("right")&&(this.helper.width(this.helper.width()),this.helper.css("right","auto")),"x"!==this.options.axis&&"auto"!==this.helper.css("bottom")&&(this.helper.height(this.helper.height()),this.helper.css("bottom","auto"))},_trigger:function(t,i,s){return s=s||this._uiHash(),e.ui.plugin.call(this,t,[i,s,this],!0),/^(drag|start|stop)/.test(t)&&(this.positionAbs=this._convertPositionTo("absolute"),s.offset=this.positionAbs),e.Widget.prototype._trigger.call(this,t,i,s)},plugins:{},_uiHash:function(){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs}}}),e.ui.plugin.add("draggable","connectToSortable",{start:function(t,i,s){var n=e.extend({},i,{item:s.element});s.sortables=[],e(s.options.connectToSortable).each(function(){var i=e(this).sortable("instance");i&&!i.options.disabled&&(s.sortables.push(i),i.refreshPositions(),i._trigger("activate",t,n))})},stop:function(t,i,s){var n=e.extend({},i,{item:s.element});s.cancelHelperRemoval=!1,e.each(s.sortables,function(){var e=this;e.isOver?(e.isOver=0,s.cancelHelperRemoval=!0,e.cancelHelperRemoval=!1,e._storedCSS={position:e.placeholder.css("position"),top:e.placeholder.css("top"),left:e.placeholder.css("left")},e._mouseStop(t),e.options.helper=e.options._helper):(e.cancelHelperRemoval=!0,e._trigger("deactivate",t,n))})},drag:function(t,i,s){e.each(s.sortables,function(){var n=!1,a=this;a.positionAbs=s.positionAbs,a.helperProportions=s.helperProportions,a.offset.click=s.offset.click,a._intersectsWith(a.containerCache)&&(n=!0,e.each(s.sortables,function(){return this.positionAbs=s.positionAbs,this.helperProportions=s.helperProportions,this.offset.click=s.offset.click,this!==a&&this._intersectsWith(this.containerCache)&&e.contains(a.element[0],this.element[0])&&(n=!1),n})),n?(a.isOver||(a.isOver=1,a.currentItem=i.helper.appendTo(a.element).data("ui-sortable-item",!0),a.options._helper=a.options.helper,a.options.helper=function(){return i.helper[0]},t.target=a.currentItem[0],a._mouseCapture(t,!0),a._mouseStart(t,!0,!0),a.offset.click.top=s.offset.click.top,a.offset.click.left=s.offset.click.left,a.offset.parent.left-=s.offset.parent.left-a.offset.parent.left,a.offset.parent.top-=s.offset.parent.top-a.offset.parent.top,s._trigger("toSortable",t),s.dropped=a.element,e.each(s.sortables,function(){this.refreshPositions()}),s.currentItem=s.element,a.fromOutside=s),a.currentItem&&(a._mouseDrag(t),i.position=a.position)):a.isOver&&(a.isOver=0,a.cancelHelperRemoval=!0,a.options._revert=a.options.revert,a.options.revert=!1,a._trigger("out",t,a._uiHash(a)),a._mouseStop(t,!0),a.options.revert=a.options._revert,a.options.helper=a.options._helper,a.placeholder&&a.placeholder.remove(),s._refreshOffsets(t),i.position=s._generatePosition(t,!0),s._trigger("fromSortable",t),s.dropped=!1,e.each(s.sortables,function(){this.refreshPositions()}))})}}),e.ui.plugin.add("draggable","cursor",{start:function(t,i,s){var n=e("body"),a=s.options;n.css("cursor")&&(a._cursor=n.css("cursor")),n.css("cursor",a.cursor)},stop:function(t,i,s){var n=s.options;n._cursor&&e("body").css("cursor",n._cursor)}}),e.ui.plugin.add("draggable","opacity",{start:function(t,i,s){var n=e(i.helper),a=s.options;n.css("opacity")&&(a._opacity=n.css("opacity")),n.css("opacity",a.opacity)},stop:function(t,i,s){var n=s.options;n._opacity&&e(i.helper).css("opacity",n._opacity)}}),e.ui.plugin.add("draggable","scroll",{start:function(e,t,i){i.scrollParentNotHidden||(i.scrollParentNotHidden=i.helper.scrollParent(!1)),i.scrollParentNotHidden[0]!==i.document[0]&&"HTML"!==i.scrollParentNotHidden[0].tagName&&(i.overflowOffset=i.scrollParentNotHidden.offset())},drag:function(t,i,s){var n=s.options,a=!1,o=s.scrollParentNotHidden[0],r=s.document[0];o!==r&&"HTML"!==o.tagName?(n.axis&&"x"===n.axis||(s.overflowOffset.top+o.offsetHeight-t.pageY<n.scrollSensitivity?o.scrollTop=a=o.scrollTop+n.scrollSpeed:t.pageY-s.overflowOffset.top<n.scrollSensitivity&&(o.scrollTop=a=o.scrollTop-n.scrollSpeed)),n.axis&&"y"===n.axis||(s.overflowOffset.left+o.offsetWidth-t.pageX<n.scrollSensitivity?o.scrollLeft=a=o.scrollLeft+n.scrollSpeed:t.pageX-s.overflowOffset.left<n.scrollSensitivity&&(o.scrollLeft=a=o.scrollLeft-n.scrollSpeed))):(n.axis&&"x"===n.axis||(t.pageY-e(r).scrollTop()<n.scrollSensitivity?a=e(r).scrollTop(e(r).scrollTop()-n.scrollSpeed):e(window).height()-(t.pageY-e(r).scrollTop())<n.scrollSensitivity&&(a=e(r).scrollTop(e(r).scrollTop()+n.scrollSpeed))),n.axis&&"y"===n.axis||(t.pageX-e(r).scrollLeft()<n.scrollSensitivity?a=e(r).scrollLeft(e(r).scrollLeft()-n.scrollSpeed):e(window).width()-(t.pageX-e(r).scrollLeft())<n.scrollSensitivity&&(a=e(r).scrollLeft(e(r).scrollLeft()+n.scrollSpeed)))),a!==!1&&e.ui.ddmanager&&!n.dropBehaviour&&e.ui.ddmanager.prepareOffsets(s,t)}}),e.ui.plugin.add("draggable","snap",{start:function(t,i,s){var n=s.options;s.snapElements=[],e(n.snap.constructor!==String?n.snap.items||":data(ui-draggable)":n.snap).each(function(){var t=e(this),i=t.offset();this!==s.element[0]&&s.snapElements.push({item:this,width:t.outerWidth(),height:t.outerHeight(),top:i.top,left:i.left})})},drag:function(t,i,s){var n,a,o,r,h,l,u,d,c,p,f=s.options,m=f.snapTolerance,g=i.offset.left,v=g+s.helperProportions.width,y=i.offset.top,b=y+s.helperProportions.height;for(c=s.snapElements.length-1;c>=0;c--)h=s.snapElements[c].left-s.margins.left,l=h+s.snapElements[c].width,u=s.snapElements[c].top-s.margins.top,d=u+s.snapElements[c].height,h-m>v||g>l+m||u-m>b||y>d+m||!e.contains(s.snapElements[c].item.ownerDocument,s.snapElements[c].item)?(s.snapElements[c].snapping&&s.options.snap.release&&s.options.snap.release.call(s.element,t,e.extend(s._uiHash(),{snapItem:s.snapElements[c].item})),s.snapElements[c].snapping=!1):("inner"!==f.snapMode&&(n=m>=Math.abs(u-b),a=m>=Math.abs(d-y),o=m>=Math.abs(h-v),r=m>=Math.abs(l-g),n&&(i.position.top=s._convertPositionTo("relative",{top:u-s.helperProportions.height,left:0}).top),a&&(i.position.top=s._convertPositionTo("relative",{top:d,left:0}).top),o&&(i.position.left=s._convertPositionTo("relative",{top:0,left:h-s.helperProportions.width}).left),r&&(i.position.left=s._convertPositionTo("relative",{top:0,left:l}).left)),p=n||a||o||r,"outer"!==f.snapMode&&(n=m>=Math.abs(u-y),a=m>=Math.abs(d-b),o=m>=Math.abs(h-g),r=m>=Math.abs(l-v),n&&(i.position.top=s._convertPositionTo("relative",{top:u,left:0}).top),a&&(i.position.top=s._convertPositionTo("relative",{top:d-s.helperProportions.height,left:0}).top),o&&(i.position.left=s._convertPositionTo("relative",{top:0,left:h}).left),r&&(i.position.left=s._convertPositionTo("relative",{top:0,left:l-s.helperProportions.width}).left)),!s.snapElements[c].snapping&&(n||a||o||r||p)&&s.options.snap.snap&&s.options.snap.snap.call(s.element,t,e.extend(s._uiHash(),{snapItem:s.snapElements[c].item})),s.snapElements[c].snapping=n||a||o||r||p)}}),e.ui.plugin.add("draggable","stack",{start:function(t,i,s){var n,a=s.options,o=e.makeArray(e(a.stack)).sort(function(t,i){return(parseInt(e(t).css("zIndex"),10)||0)-(parseInt(e(i).css("zIndex"),10)||0)});o.length&&(n=parseInt(e(o[0]).css("zIndex"),10)||0,e(o).each(function(t){e(this).css("zIndex",n+t)}),this.css("zIndex",n+o.length))}}),e.ui.plugin.add("draggable","zIndex",{start:function(t,i,s){var n=e(i.helper),a=s.options;n.css("zIndex")&&(a._zIndex=n.css("zIndex")),n.css("zIndex",a.zIndex)},stop:function(t,i,s){var n=s.options;n._zIndex&&e(i.helper).css("zIndex",n._zIndex)}}),e.ui.draggable,e.widget("ui.droppable",{version:"1.11.2",widgetEventPrefix:"drop",options:{accept:"*",activeClass:!1,addClasses:!0,greedy:!1,hoverClass:!1,scope:"default",tolerance:"intersect",activate:null,deactivate:null,drop:null,out:null,over:null},_create:function(){var t,i=this.options,s=i.accept;this.isover=!1,this.isout=!0,this.accept=e.isFunction(s)?s:function(e){return e.is(s)},this.proportions=function(){return arguments.length?(t=arguments[0],void 0):t?t:t={width:this.element[0].offsetWidth,height:this.element[0].offsetHeight}},this._addToManager(i.scope),i.addClasses&&this.element.addClass("ui-droppable")},_addToManager:function(t){e.ui.ddmanager.droppables[t]=e.ui.ddmanager.droppables[t]||[],e.ui.ddmanager.droppables[t].push(this)},_splice:function(e){for(var t=0;e.length>t;t++)e[t]===this&&e.splice(t,1)},_destroy:function(){var t=e.ui.ddmanager.droppables[this.options.scope];this._splice(t),this.element.removeClass("ui-droppable ui-droppable-disabled")},_setOption:function(t,i){if("accept"===t)this.accept=e.isFunction(i)?i:function(e){return e.is(i)};else if("scope"===t){var s=e.ui.ddmanager.droppables[this.options.scope];this._splice(s),this._addToManager(i)}this._super(t,i)},_activate:function(t){var i=e.ui.ddmanager.current;this.options.activeClass&&this.element.addClass(this.options.activeClass),i&&this._trigger("activate",t,this.ui(i))},_deactivate:function(t){var i=e.ui.ddmanager.current;this.options.activeClass&&this.element.removeClass(this.options.activeClass),i&&this._trigger("deactivate",t,this.ui(i))},_over:function(t){var i=e.ui.ddmanager.current;i&&(i.currentItem||i.element)[0]!==this.element[0]&&this.accept.call(this.element[0],i.currentItem||i.element)&&(this.options.hoverClass&&this.element.addClass(this.options.hoverClass),this._trigger("over",t,this.ui(i)))},_out:function(t){var i=e.ui.ddmanager.current;i&&(i.currentItem||i.element)[0]!==this.element[0]&&this.accept.call(this.element[0],i.currentItem||i.element)&&(this.options.hoverClass&&this.element.removeClass(this.options.hoverClass),this._trigger("out",t,this.ui(i)))},_drop:function(t,i){var s=i||e.ui.ddmanager.current,n=!1;return s&&(s.currentItem||s.element)[0]!==this.element[0]?(this.element.find(":data(ui-droppable)").not(".ui-draggable-dragging").each(function(){var i=e(this).droppable("instance");return i.options.greedy&&!i.options.disabled&&i.options.scope===s.options.scope&&i.accept.call(i.element[0],s.currentItem||s.element)&&e.ui.intersect(s,e.extend(i,{offset:i.element.offset()}),i.options.tolerance,t)?(n=!0,!1):void 0}),n?!1:this.accept.call(this.element[0],s.currentItem||s.element)?(this.options.activeClass&&this.element.removeClass(this.options.activeClass),this.options.hoverClass&&this.element.removeClass(this.options.hoverClass),this._trigger("drop",t,this.ui(s)),this.element):!1):!1},ui:function(e){return{draggable:e.currentItem||e.element,helper:e.helper,position:e.position,offset:e.positionAbs}}}),e.ui.intersect=function(){function e(e,t,i){return e>=t&&t+i>e}return function(t,i,s,n){if(!i.offset)return!1;var a=(t.positionAbs||t.position.absolute).left+t.margins.left,o=(t.positionAbs||t.position.absolute).top+t.margins.top,r=a+t.helperProportions.width,h=o+t.helperProportions.height,l=i.offset.left,u=i.offset.top,d=l+i.proportions().width,c=u+i.proportions().height;switch(s){case"fit":return a>=l&&d>=r&&o>=u&&c>=h;case"intersect":return a+t.helperProportions.width/2>l&&d>r-t.helperProportions.width/2&&o+t.helperProportions.height/2>u&&c>h-t.helperProportions.height/2;case"pointer":return e(n.pageY,u,i.proportions().height)&&e(n.pageX,l,i.proportions().width);case"touch":return(o>=u&&c>=o||h>=u&&c>=h||u>o&&h>c)&&(a>=l&&d>=a||r>=l&&d>=r||l>a&&r>d);default:return!1}}}(),e.ui.ddmanager={current:null,droppables:{"default":[]},prepareOffsets:function(t,i){var s,n,a=e.ui.ddmanager.droppables[t.options.scope]||[],o=i?i.type:null,r=(t.currentItem||t.element).find(":data(ui-droppable)").addBack();e:for(s=0;a.length>s;s++)if(!(a[s].options.disabled||t&&!a[s].accept.call(a[s].element[0],t.currentItem||t.element))){for(n=0;r.length>n;n++)if(r[n]===a[s].element[0]){a[s].proportions().height=0;continue e}a[s].visible="none"!==a[s].element.css("display"),a[s].visible&&("mousedown"===o&&a[s]._activate.call(a[s],i),a[s].offset=a[s].element.offset(),a[s].proportions({width:a[s].element[0].offsetWidth,height:a[s].element[0].offsetHeight}))}},drop:function(t,i){var s=!1;return e.each((e.ui.ddmanager.droppables[t.options.scope]||[]).slice(),function(){this.options&&(!this.options.disabled&&this.visible&&e.ui.intersect(t,this,this.options.tolerance,i)&&(s=this._drop.call(this,i)||s),!this.options.disabled&&this.visible&&this.accept.call(this.element[0],t.currentItem||t.element)&&(this.isout=!0,this.isover=!1,this._deactivate.call(this,i)))}),s},dragStart:function(t,i){t.element.parentsUntil("body").bind("scroll.droppable",function(){t.options.refreshPositions||e.ui.ddmanager.prepareOffsets(t,i)})},drag:function(t,i){t.options.refreshPositions&&e.ui.ddmanager.prepareOffsets(t,i),e.each(e.ui.ddmanager.droppables[t.options.scope]||[],function(){if(!this.options.disabled&&!this.greedyChild&&this.visible){var s,n,a,o=e.ui.intersect(t,this,this.options.tolerance,i),r=!o&&this.isover?"isout":o&&!this.isover?"isover":null;r&&(this.options.greedy&&(n=this.options.scope,a=this.element.parents(":data(ui-droppable)").filter(function(){return e(this).droppable("instance").options.scope===n}),a.length&&(s=e(a[0]).droppable("instance"),s.greedyChild="isover"===r)),s&&"isover"===r&&(s.isover=!1,s.isout=!0,s._out.call(s,i)),this[r]=!0,this["isout"===r?"isover":"isout"]=!1,this["isover"===r?"_over":"_out"].call(this,i),s&&"isout"===r&&(s.isout=!1,s.isover=!0,s._over.call(s,i)))}})},dragStop:function(t,i){t.element.parentsUntil("body").unbind("scroll.droppable"),t.options.refreshPositions||e.ui.ddmanager.prepareOffsets(t,i)}},e.ui.droppable,e.widget("ui.resizable",e.ui.mouse,{version:"1.11.2",widgetEventPrefix:"resize",options:{alsoResize:!1,animate:!1,animateDuration:"slow",animateEasing:"swing",aspectRatio:!1,autoHide:!1,containment:!1,ghost:!1,grid:!1,handles:"e,s,se",helper:!1,maxHeight:null,maxWidth:null,minHeight:10,minWidth:10,zIndex:90,resize:null,start:null,stop:null},_num:function(e){return parseInt(e,10)||0},_isNumber:function(e){return!isNaN(parseInt(e,10))},_hasScroll:function(t,i){if("hidden"===e(t).css("overflow"))return!1;var s=i&&"left"===i?"scrollLeft":"scrollTop",n=!1;return t[s]>0?!0:(t[s]=1,n=t[s]>0,t[s]=0,n)},_create:function(){var t,i,s,n,a,o=this,r=this.options;if(this.element.addClass("ui-resizable"),e.extend(this,{_aspectRatio:!!r.aspectRatio,aspectRatio:r.aspectRatio,originalElement:this.element,_proportionallyResizeElements:[],_helper:r.helper||r.ghost||r.animate?r.helper||"ui-resizable-helper":null}),this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i)&&(this.element.wrap(e("<div class='ui-wrapper' style='overflow: hidden;'></div>").css({position:this.element.css("position"),width:this.element.outerWidth(),height:this.element.outerHeight(),top:this.element.css("top"),left:this.element.css("left")})),this.element=this.element.parent().data("ui-resizable",this.element.resizable("instance")),this.elementIsWrapper=!0,this.element.css({marginLeft:this.originalElement.css("marginLeft"),marginTop:this.originalElement.css("marginTop"),marginRight:this.originalElement.css("marginRight"),marginBottom:this.originalElement.css("marginBottom")}),this.originalElement.css({marginLeft:0,marginTop:0,marginRight:0,marginBottom:0}),this.originalResizeStyle=this.originalElement.css("resize"),this.originalElement.css("resize","none"),this._proportionallyResizeElements.push(this.originalElement.css({position:"static",zoom:1,display:"block"})),this.originalElement.css({margin:this.originalElement.css("margin")}),this._proportionallyResize()),this.handles=r.handles||(e(".ui-resizable-handle",this.element).length?{n:".ui-resizable-n",e:".ui-resizable-e",s:".ui-resizable-s",w:".ui-resizable-w",se:".ui-resizable-se",sw:".ui-resizable-sw",ne:".ui-resizable-ne",nw:".ui-resizable-nw"}:"e,s,se"),this.handles.constructor===String)for("all"===this.handles&&(this.handles="n,e,s,w,se,sw,ne,nw"),t=this.handles.split(","),this.handles={},i=0;t.length>i;i++)s=e.trim(t[i]),a="ui-resizable-"+s,n=e("<div class='ui-resizable-handle "+a+"'></div>"),n.css({zIndex:r.zIndex}),"se"===s&&n.addClass("ui-icon ui-icon-gripsmall-diagonal-se"),this.handles[s]=".ui-resizable-"+s,this.element.append(n);this._renderAxis=function(t){var i,s,n,a;t=t||this.element;for(i in this.handles)this.handles[i].constructor===String&&(this.handles[i]=this.element.children(this.handles[i]).first().show()),this.elementIsWrapper&&this.originalElement[0].nodeName.match(/textarea|input|select|button/i)&&(s=e(this.handles[i],this.element),a=/sw|ne|nw|se|n|s/.test(i)?s.outerHeight():s.outerWidth(),n=["padding",/ne|nw|n/.test(i)?"Top":/se|sw|s/.test(i)?"Bottom":/^e$/.test(i)?"Right":"Left"].join(""),t.css(n,a),this._proportionallyResize()),e(this.handles[i]).length},this._renderAxis(this.element),this._handles=e(".ui-resizable-handle",this.element).disableSelection(),this._handles.mouseover(function(){o.resizing||(this.className&&(n=this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)),o.axis=n&&n[1]?n[1]:"se")}),r.autoHide&&(this._handles.hide(),e(this.element).addClass("ui-resizable-autohide").mouseenter(function(){r.disabled||(e(this).removeClass("ui-resizable-autohide"),o._handles.show())}).mouseleave(function(){r.disabled||o.resizing||(e(this).addClass("ui-resizable-autohide"),o._handles.hide())})),this._mouseInit()},_destroy:function(){this._mouseDestroy();var t,i=function(t){e(t).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove()};return this.elementIsWrapper&&(i(this.element),t=this.element,this.originalElement.css({position:t.css("position"),width:t.outerWidth(),height:t.outerHeight(),top:t.css("top"),left:t.css("left")}).insertAfter(t),t.remove()),this.originalElement.css("resize",this.originalResizeStyle),i(this.originalElement),this},_mouseCapture:function(t){var i,s,n=!1;for(i in this.handles)s=e(this.handles[i])[0],(s===t.target||e.contains(s,t.target))&&(n=!0);return!this.options.disabled&&n},_mouseStart:function(t){var i,s,n,a=this.options,o=this.element;return this.resizing=!0,this._renderProxy(),i=this._num(this.helper.css("left")),s=this._num(this.helper.css("top")),a.containment&&(i+=e(a.containment).scrollLeft()||0,s+=e(a.containment).scrollTop()||0),this.offset=this.helper.offset(),this.position={left:i,top:s},this.size=this._helper?{width:this.helper.width(),height:this.helper.height()}:{width:o.width(),height:o.height()},this.originalSize=this._helper?{width:o.outerWidth(),height:o.outerHeight()}:{width:o.width(),height:o.height()},this.sizeDiff={width:o.outerWidth()-o.width(),height:o.outerHeight()-o.height()},this.originalPosition={left:i,top:s},this.originalMousePosition={left:t.pageX,top:t.pageY},this.aspectRatio="number"==typeof a.aspectRatio?a.aspectRatio:this.originalSize.width/this.originalSize.height||1,n=e(".ui-resizable-"+this.axis).css("cursor"),e("body").css("cursor","auto"===n?this.axis+"-resize":n),o.addClass("ui-resizable-resizing"),this._propagate("start",t),!0},_mouseDrag:function(t){var i,s,n=this.originalMousePosition,a=this.axis,o=t.pageX-n.left||0,r=t.pageY-n.top||0,h=this._change[a];return this._updatePrevProperties(),h?(i=h.apply(this,[t,o,r]),this._updateVirtualBoundaries(t.shiftKey),(this._aspectRatio||t.shiftKey)&&(i=this._updateRatio(i,t)),i=this._respectSize(i,t),this._updateCache(i),this._propagate("resize",t),s=this._applyChanges(),!this._helper&&this._proportionallyResizeElements.length&&this._proportionallyResize(),e.isEmptyObject(s)||(this._updatePrevProperties(),this._trigger("resize",t,this.ui()),this._applyChanges()),!1):!1},_mouseStop:function(t){this.resizing=!1;var i,s,n,a,o,r,h,l=this.options,u=this;return this._helper&&(i=this._proportionallyResizeElements,s=i.length&&/textarea/i.test(i[0].nodeName),n=s&&this._hasScroll(i[0],"left")?0:u.sizeDiff.height,a=s?0:u.sizeDiff.width,o={width:u.helper.width()-a,height:u.helper.height()-n},r=parseInt(u.element.css("left"),10)+(u.position.left-u.originalPosition.left)||null,h=parseInt(u.element.css("top"),10)+(u.position.top-u.originalPosition.top)||null,l.animate||this.element.css(e.extend(o,{top:h,left:r})),u.helper.height(u.size.height),u.helper.width(u.size.width),this._helper&&!l.animate&&this._proportionallyResize()),e("body").css("cursor","auto"),this.element.removeClass("ui-resizable-resizing"),this._propagate("stop",t),this._helper&&this.helper.remove(),!1},_updatePrevProperties:function(){this.prevPosition={top:this.position.top,left:this.position.left},this.prevSize={width:this.size.width,height:this.size.height}},_applyChanges:function(){var e={};return this.position.top!==this.prevPosition.top&&(e.top=this.position.top+"px"),this.position.left!==this.prevPosition.left&&(e.left=this.position.left+"px"),this.size.width!==this.prevSize.width&&(e.width=this.size.width+"px"),this.size.height!==this.prevSize.height&&(e.height=this.size.height+"px"),this.helper.css(e),e},_updateVirtualBoundaries:function(e){var t,i,s,n,a,o=this.options;a={minWidth:this._isNumber(o.minWidth)?o.minWidth:0,maxWidth:this._isNumber(o.maxWidth)?o.maxWidth:1/0,minHeight:this._isNumber(o.minHeight)?o.minHeight:0,maxHeight:this._isNumber(o.maxHeight)?o.maxHeight:1/0},(this._aspectRatio||e)&&(t=a.minHeight*this.aspectRatio,s=a.minWidth/this.aspectRatio,i=a.maxHeight*this.aspectRatio,n=a.maxWidth/this.aspectRatio,t>a.minWidth&&(a.minWidth=t),s>a.minHeight&&(a.minHeight=s),a.maxWidth>i&&(a.maxWidth=i),a.maxHeight>n&&(a.maxHeight=n)),this._vBoundaries=a},_updateCache:function(e){this.offset=this.helper.offset(),this._isNumber(e.left)&&(this.position.left=e.left),this._isNumber(e.top)&&(this.position.top=e.top),this._isNumber(e.height)&&(this.size.height=e.height),this._isNumber(e.width)&&(this.size.width=e.width)},_updateRatio:function(e){var t=this.position,i=this.size,s=this.axis;return this._isNumber(e.height)?e.width=e.height*this.aspectRatio:this._isNumber(e.width)&&(e.height=e.width/this.aspectRatio),"sw"===s&&(e.left=t.left+(i.width-e.width),e.top=null),"nw"===s&&(e.top=t.top+(i.height-e.height),e.left=t.left+(i.width-e.width)),e},_respectSize:function(e){var t=this._vBoundaries,i=this.axis,s=this._isNumber(e.width)&&t.maxWidth&&t.maxWidth<e.width,n=this._isNumber(e.height)&&t.maxHeight&&t.maxHeight<e.height,a=this._isNumber(e.width)&&t.minWidth&&t.minWidth>e.width,o=this._isNumber(e.height)&&t.minHeight&&t.minHeight>e.height,r=this.originalPosition.left+this.originalSize.width,h=this.position.top+this.size.height,l=/sw|nw|w/.test(i),u=/nw|ne|n/.test(i);return a&&(e.width=t.minWidth),o&&(e.height=t.minHeight),s&&(e.width=t.maxWidth),n&&(e.height=t.maxHeight),a&&l&&(e.left=r-t.minWidth),s&&l&&(e.left=r-t.maxWidth),o&&u&&(e.top=h-t.minHeight),n&&u&&(e.top=h-t.maxHeight),e.width||e.height||e.left||!e.top?e.width||e.height||e.top||!e.left||(e.left=null):e.top=null,e},_getPaddingPlusBorderDimensions:function(e){for(var t=0,i=[],s=[e.css("borderTopWidth"),e.css("borderRightWidth"),e.css("borderBottomWidth"),e.css("borderLeftWidth")],n=[e.css("paddingTop"),e.css("paddingRight"),e.css("paddingBottom"),e.css("paddingLeft")];4>t;t++)i[t]=parseInt(s[t],10)||0,i[t]+=parseInt(n[t],10)||0;return{height:i[0]+i[2],width:i[1]+i[3]}},_proportionallyResize:function(){if(this._proportionallyResizeElements.length)for(var e,t=0,i=this.helper||this.element;this._proportionallyResizeElements.length>t;t++)e=this._proportionallyResizeElements[t],this.outerDimensions||(this.outerDimensions=this._getPaddingPlusBorderDimensions(e)),e.css({height:i.height()-this.outerDimensions.height||0,width:i.width()-this.outerDimensions.width||0})},_renderProxy:function(){var t=this.element,i=this.options;this.elementOffset=t.offset(),this._helper?(this.helper=this.helper||e("<div style='overflow:hidden;'></div>"),this.helper.addClass(this._helper).css({width:this.element.outerWidth()-1,height:this.element.outerHeight()-1,position:"absolute",left:this.elementOffset.left+"px",top:this.elementOffset.top+"px",zIndex:++i.zIndex}),this.helper.appendTo("body").disableSelection()):this.helper=this.element},_change:{e:function(e,t){return{width:this.originalSize.width+t}},w:function(e,t){var i=this.originalSize,s=this.originalPosition;return{left:s.left+t,width:i.width-t}},n:function(e,t,i){var s=this.originalSize,n=this.originalPosition;return{top:n.top+i,height:s.height-i}},s:function(e,t,i){return{height:this.originalSize.height+i}},se:function(t,i,s){return e.extend(this._change.s.apply(this,arguments),this._change.e.apply(this,[t,i,s]))},sw:function(t,i,s){return e.extend(this._change.s.apply(this,arguments),this._change.w.apply(this,[t,i,s]))},ne:function(t,i,s){return e.extend(this._change.n.apply(this,arguments),this._change.e.apply(this,[t,i,s]))},nw:function(t,i,s){return e.extend(this._change.n.apply(this,arguments),this._change.w.apply(this,[t,i,s]))}},_propagate:function(t,i){e.ui.plugin.call(this,t,[i,this.ui()]),"resize"!==t&&this._trigger(t,i,this.ui())},plugins:{},ui:function(){return{originalElement:this.originalElement,element:this.element,helper:this.helper,position:this.position,size:this.size,originalSize:this.originalSize,originalPosition:this.originalPosition}}}),e.ui.plugin.add("resizable","animate",{stop:function(t){var i=e(this).resizable("instance"),s=i.options,n=i._proportionallyResizeElements,a=n.length&&/textarea/i.test(n[0].nodeName),o=a&&i._hasScroll(n[0],"left")?0:i.sizeDiff.height,r=a?0:i.sizeDiff.width,h={width:i.size.width-r,height:i.size.height-o},l=parseInt(i.element.css("left"),10)+(i.position.left-i.originalPosition.left)||null,u=parseInt(i.element.css("top"),10)+(i.position.top-i.originalPosition.top)||null;i.element.animate(e.extend(h,u&&l?{top:u,left:l}:{}),{duration:s.animateDuration,easing:s.animateEasing,step:function(){var s={width:parseInt(i.element.css("width"),10),height:parseInt(i.element.css("height"),10),top:parseInt(i.element.css("top"),10),left:parseInt(i.element.css("left"),10)};n&&n.length&&e(n[0]).css({width:s.width,height:s.height}),i._updateCache(s),i._propagate("resize",t)}})}}),e.ui.plugin.add("resizable","containment",{start:function(){var t,i,s,n,a,o,r,h=e(this).resizable("instance"),l=h.options,u=h.element,d=l.containment,c=d instanceof e?d.get(0):/parent/.test(d)?u.parent().get(0):d;c&&(h.containerElement=e(c),/document/.test(d)||d===document?(h.containerOffset={left:0,top:0},h.containerPosition={left:0,top:0},h.parentData={element:e(document),left:0,top:0,width:e(document).width(),height:e(document).height()||document.body.parentNode.scrollHeight}):(t=e(c),i=[],e(["Top","Right","Left","Bottom"]).each(function(e,s){i[e]=h._num(t.css("padding"+s))}),h.containerOffset=t.offset(),h.containerPosition=t.position(),h.containerSize={height:t.innerHeight()-i[3],width:t.innerWidth()-i[1]},s=h.containerOffset,n=h.containerSize.height,a=h.containerSize.width,o=h._hasScroll(c,"left")?c.scrollWidth:a,r=h._hasScroll(c)?c.scrollHeight:n,h.parentData={element:c,left:s.left,top:s.top,width:o,height:r}))},resize:function(t){var i,s,n,a,o=e(this).resizable("instance"),r=o.options,h=o.containerOffset,l=o.position,u=o._aspectRatio||t.shiftKey,d={top:0,left:0},c=o.containerElement,p=!0;c[0]!==document&&/static/.test(c.css("position"))&&(d=h),l.left<(o._helper?h.left:0)&&(o.size.width=o.size.width+(o._helper?o.position.left-h.left:o.position.left-d.left),u&&(o.size.height=o.size.width/o.aspectRatio,p=!1),o.position.left=r.helper?h.left:0),l.top<(o._helper?h.top:0)&&(o.size.height=o.size.height+(o._helper?o.position.top-h.top:o.position.top),u&&(o.size.width=o.size.height*o.aspectRatio,p=!1),o.position.top=o._helper?h.top:0),n=o.containerElement.get(0)===o.element.parent().get(0),a=/relative|absolute/.test(o.containerElement.css("position")),n&&a?(o.offset.left=o.parentData.left+o.position.left,o.offset.top=o.parentData.top+o.position.top):(o.offset.left=o.element.offset().left,o.offset.top=o.element.offset().top),i=Math.abs(o.sizeDiff.width+(o._helper?o.offset.left-d.left:o.offset.left-h.left)),s=Math.abs(o.sizeDiff.height+(o._helper?o.offset.top-d.top:o.offset.top-h.top)),i+o.size.width>=o.parentData.width&&(o.size.width=o.parentData.width-i,u&&(o.size.height=o.size.width/o.aspectRatio,p=!1)),s+o.size.height>=o.parentData.height&&(o.size.height=o.parentData.height-s,u&&(o.size.width=o.size.height*o.aspectRatio,p=!1)),p||(o.position.left=o.prevPosition.left,o.position.top=o.prevPosition.top,o.size.width=o.prevSize.width,o.size.height=o.prevSize.height)},stop:function(){var t=e(this).resizable("instance"),i=t.options,s=t.containerOffset,n=t.containerPosition,a=t.containerElement,o=e(t.helper),r=o.offset(),h=o.outerWidth()-t.sizeDiff.width,l=o.outerHeight()-t.sizeDiff.height;t._helper&&!i.animate&&/relative/.test(a.css("position"))&&e(this).css({left:r.left-n.left-s.left,width:h,height:l}),t._helper&&!i.animate&&/static/.test(a.css("position"))&&e(this).css({left:r.left-n.left-s.left,width:h,height:l})}}),e.ui.plugin.add("resizable","alsoResize",{start:function(){var t=e(this).resizable("instance"),i=t.options,s=function(t){e(t).each(function(){var t=e(this);t.data("ui-resizable-alsoresize",{width:parseInt(t.width(),10),height:parseInt(t.height(),10),left:parseInt(t.css("left"),10),top:parseInt(t.css("top"),10)})})};"object"!=typeof i.alsoResize||i.alsoResize.parentNode?s(i.alsoResize):i.alsoResize.length?(i.alsoResize=i.alsoResize[0],s(i.alsoResize)):e.each(i.alsoResize,function(e){s(e)})},resize:function(t,i){var s=e(this).resizable("instance"),n=s.options,a=s.originalSize,o=s.originalPosition,r={height:s.size.height-a.height||0,width:s.size.width-a.width||0,top:s.position.top-o.top||0,left:s.position.left-o.left||0},h=function(t,s){e(t).each(function(){var t=e(this),n=e(this).data("ui-resizable-alsoresize"),a={},o=s&&s.length?s:t.parents(i.originalElement[0]).length?["width","height"]:["width","height","top","left"];e.each(o,function(e,t){var i=(n[t]||0)+(r[t]||0);i&&i>=0&&(a[t]=i||null)}),t.css(a)})};"object"!=typeof n.alsoResize||n.alsoResize.nodeType?h(n.alsoResize):e.each(n.alsoResize,function(e,t){h(e,t)})},stop:function(){e(this).removeData("resizable-alsoresize")}}),e.ui.plugin.add("resizable","ghost",{start:function(){var t=e(this).resizable("instance"),i=t.options,s=t.size;t.ghost=t.originalElement.clone(),t.ghost.css({opacity:.25,display:"block",position:"relative",height:s.height,width:s.width,margin:0,left:0,top:0}).addClass("ui-resizable-ghost").addClass("string"==typeof i.ghost?i.ghost:""),t.ghost.appendTo(t.helper)},resize:function(){var t=e(this).resizable("instance");t.ghost&&t.ghost.css({position:"relative",height:t.size.height,width:t.size.width})},stop:function(){var t=e(this).resizable("instance");t.ghost&&t.helper&&t.helper.get(0).removeChild(t.ghost.get(0))}}),e.ui.plugin.add("resizable","grid",{resize:function(){var t,i=e(this).resizable("instance"),s=i.options,n=i.size,a=i.originalSize,o=i.originalPosition,r=i.axis,h="number"==typeof s.grid?[s.grid,s.grid]:s.grid,l=h[0]||1,u=h[1]||1,d=Math.round((n.width-a.width)/l)*l,c=Math.round((n.height-a.height)/u)*u,p=a.width+d,f=a.height+c,m=s.maxWidth&&p>s.maxWidth,g=s.maxHeight&&f>s.maxHeight,v=s.minWidth&&s.minWidth>p,y=s.minHeight&&s.minHeight>f;s.grid=h,v&&(p+=l),y&&(f+=u),m&&(p-=l),g&&(f-=u),/^(se|s|e)$/.test(r)?(i.size.width=p,i.size.height=f):/^(ne)$/.test(r)?(i.size.width=p,i.size.height=f,i.position.top=o.top-c):/^(sw)$/.test(r)?(i.size.width=p,i.size.height=f,i.position.left=o.left-d):((0>=f-u||0>=p-l)&&(t=i._getPaddingPlusBorderDimensions(this)),f-u>0?(i.size.height=f,i.position.top=o.top-c):(f=u-t.height,i.size.height=f,i.position.top=o.top+a.height-f),p-l>0?(i.size.width=p,i.position.left=o.left-d):(p=u-t.height,i.size.width=p,i.position.left=o.left+a.width-p))}}),e.ui.resizable,e.widget("ui.selectable",e.ui.mouse,{version:"1.11.2",options:{appendTo:"body",autoRefresh:!0,distance:0,filter:"*",tolerance:"touch",selected:null,selecting:null,start:null,stop:null,unselected:null,unselecting:null},_create:function(){var t,i=this;
this.element.addClass("ui-selectable"),this.dragged=!1,this.refresh=function(){t=e(i.options.filter,i.element[0]),t.addClass("ui-selectee"),t.each(function(){var t=e(this),i=t.offset();e.data(this,"selectable-item",{element:this,$element:t,left:i.left,top:i.top,right:i.left+t.outerWidth(),bottom:i.top+t.outerHeight(),startselected:!1,selected:t.hasClass("ui-selected"),selecting:t.hasClass("ui-selecting"),unselecting:t.hasClass("ui-unselecting")})})},this.refresh(),this.selectees=t.addClass("ui-selectee"),this._mouseInit(),this.helper=e("<div class='ui-selectable-helper'></div>")},_destroy:function(){this.selectees.removeClass("ui-selectee").removeData("selectable-item"),this.element.removeClass("ui-selectable ui-selectable-disabled"),this._mouseDestroy()},_mouseStart:function(t){var i=this,s=this.options;this.opos=[t.pageX,t.pageY],this.options.disabled||(this.selectees=e(s.filter,this.element[0]),this._trigger("start",t),e(s.appendTo).append(this.helper),this.helper.css({left:t.pageX,top:t.pageY,width:0,height:0}),s.autoRefresh&&this.refresh(),this.selectees.filter(".ui-selected").each(function(){var s=e.data(this,"selectable-item");s.startselected=!0,t.metaKey||t.ctrlKey||(s.$element.removeClass("ui-selected"),s.selected=!1,s.$element.addClass("ui-unselecting"),s.unselecting=!0,i._trigger("unselecting",t,{unselecting:s.element}))}),e(t.target).parents().addBack().each(function(){var s,n=e.data(this,"selectable-item");return n?(s=!t.metaKey&&!t.ctrlKey||!n.$element.hasClass("ui-selected"),n.$element.removeClass(s?"ui-unselecting":"ui-selected").addClass(s?"ui-selecting":"ui-unselecting"),n.unselecting=!s,n.selecting=s,n.selected=s,s?i._trigger("selecting",t,{selecting:n.element}):i._trigger("unselecting",t,{unselecting:n.element}),!1):void 0}))},_mouseDrag:function(t){if(this.dragged=!0,!this.options.disabled){var i,s=this,n=this.options,a=this.opos[0],o=this.opos[1],r=t.pageX,h=t.pageY;return a>r&&(i=r,r=a,a=i),o>h&&(i=h,h=o,o=i),this.helper.css({left:a,top:o,width:r-a,height:h-o}),this.selectees.each(function(){var i=e.data(this,"selectable-item"),l=!1;i&&i.element!==s.element[0]&&("touch"===n.tolerance?l=!(i.left>r||a>i.right||i.top>h||o>i.bottom):"fit"===n.tolerance&&(l=i.left>a&&r>i.right&&i.top>o&&h>i.bottom),l?(i.selected&&(i.$element.removeClass("ui-selected"),i.selected=!1),i.unselecting&&(i.$element.removeClass("ui-unselecting"),i.unselecting=!1),i.selecting||(i.$element.addClass("ui-selecting"),i.selecting=!0,s._trigger("selecting",t,{selecting:i.element}))):(i.selecting&&((t.metaKey||t.ctrlKey)&&i.startselected?(i.$element.removeClass("ui-selecting"),i.selecting=!1,i.$element.addClass("ui-selected"),i.selected=!0):(i.$element.removeClass("ui-selecting"),i.selecting=!1,i.startselected&&(i.$element.addClass("ui-unselecting"),i.unselecting=!0),s._trigger("unselecting",t,{unselecting:i.element}))),i.selected&&(t.metaKey||t.ctrlKey||i.startselected||(i.$element.removeClass("ui-selected"),i.selected=!1,i.$element.addClass("ui-unselecting"),i.unselecting=!0,s._trigger("unselecting",t,{unselecting:i.element})))))}),!1}},_mouseStop:function(t){var i=this;return this.dragged=!1,e(".ui-unselecting",this.element[0]).each(function(){var s=e.data(this,"selectable-item");s.$element.removeClass("ui-unselecting"),s.unselecting=!1,s.startselected=!1,i._trigger("unselected",t,{unselected:s.element})}),e(".ui-selecting",this.element[0]).each(function(){var s=e.data(this,"selectable-item");s.$element.removeClass("ui-selecting").addClass("ui-selected"),s.selecting=!1,s.selected=!0,s.startselected=!0,i._trigger("selected",t,{selected:s.element})}),this._trigger("stop",t),this.helper.remove(),!1}}),e.widget("ui.sortable",e.ui.mouse,{version:"1.11.2",widgetEventPrefix:"sort",ready:!1,options:{appendTo:"parent",axis:!1,connectWith:!1,containment:!1,cursor:"auto",cursorAt:!1,dropOnEmpty:!0,forcePlaceholderSize:!1,forceHelperSize:!1,grid:!1,handle:!1,helper:"original",items:"> *",opacity:!1,placeholder:!1,revert:!1,scroll:!0,scrollSensitivity:20,scrollSpeed:20,scope:"default",tolerance:"intersect",zIndex:1e3,activate:null,beforeStop:null,change:null,deactivate:null,out:null,over:null,receive:null,remove:null,sort:null,start:null,stop:null,update:null},_isOverAxis:function(e,t,i){return e>=t&&t+i>e},_isFloating:function(e){return/left|right/.test(e.css("float"))||/inline|table-cell/.test(e.css("display"))},_create:function(){var e=this.options;this.containerCache={},this.element.addClass("ui-sortable"),this.refresh(),this.floating=this.items.length?"x"===e.axis||this._isFloating(this.items[0].item):!1,this.offset=this.element.offset(),this._mouseInit(),this._setHandleClassName(),this.ready=!0},_setOption:function(e,t){this._super(e,t),"handle"===e&&this._setHandleClassName()},_setHandleClassName:function(){this.element.find(".ui-sortable-handle").removeClass("ui-sortable-handle"),e.each(this.items,function(){(this.instance.options.handle?this.item.find(this.instance.options.handle):this.item).addClass("ui-sortable-handle")})},_destroy:function(){this.element.removeClass("ui-sortable ui-sortable-disabled").find(".ui-sortable-handle").removeClass("ui-sortable-handle"),this._mouseDestroy();for(var e=this.items.length-1;e>=0;e--)this.items[e].item.removeData(this.widgetName+"-item");return this},_mouseCapture:function(t,i){var s=null,n=!1,a=this;return this.reverting?!1:this.options.disabled||"static"===this.options.type?!1:(this._refreshItems(t),e(t.target).parents().each(function(){return e.data(this,a.widgetName+"-item")===a?(s=e(this),!1):void 0}),e.data(t.target,a.widgetName+"-item")===a&&(s=e(t.target)),s?!this.options.handle||i||(e(this.options.handle,s).find("*").addBack().each(function(){this===t.target&&(n=!0)}),n)?(this.currentItem=s,this._removeCurrentsFromItems(),!0):!1:!1)},_mouseStart:function(t,i,s){var n,a,o=this.options;if(this.currentContainer=this,this.refreshPositions(),this.helper=this._createHelper(t),this._cacheHelperProportions(),this._cacheMargins(),this.scrollParent=this.helper.scrollParent(),this.offset=this.currentItem.offset(),this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left},e.extend(this.offset,{click:{left:t.pageX-this.offset.left,top:t.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()}),this.helper.css("position","absolute"),this.cssPosition=this.helper.css("position"),this.originalPosition=this._generatePosition(t),this.originalPageX=t.pageX,this.originalPageY=t.pageY,o.cursorAt&&this._adjustOffsetFromHelper(o.cursorAt),this.domPosition={prev:this.currentItem.prev()[0],parent:this.currentItem.parent()[0]},this.helper[0]!==this.currentItem[0]&&this.currentItem.hide(),this._createPlaceholder(),o.containment&&this._setContainment(),o.cursor&&"auto"!==o.cursor&&(a=this.document.find("body"),this.storedCursor=a.css("cursor"),a.css("cursor",o.cursor),this.storedStylesheet=e("<style>*{ cursor: "+o.cursor+" !important; }</style>").appendTo(a)),o.opacity&&(this.helper.css("opacity")&&(this._storedOpacity=this.helper.css("opacity")),this.helper.css("opacity",o.opacity)),o.zIndex&&(this.helper.css("zIndex")&&(this._storedZIndex=this.helper.css("zIndex")),this.helper.css("zIndex",o.zIndex)),this.scrollParent[0]!==document&&"HTML"!==this.scrollParent[0].tagName&&(this.overflowOffset=this.scrollParent.offset()),this._trigger("start",t,this._uiHash()),this._preserveHelperProportions||this._cacheHelperProportions(),!s)for(n=this.containers.length-1;n>=0;n--)this.containers[n]._trigger("activate",t,this._uiHash(this));return e.ui.ddmanager&&(e.ui.ddmanager.current=this),e.ui.ddmanager&&!o.dropBehaviour&&e.ui.ddmanager.prepareOffsets(this,t),this.dragging=!0,this.helper.addClass("ui-sortable-helper"),this._mouseDrag(t),!0},_mouseDrag:function(t){var i,s,n,a,o=this.options,r=!1;for(this.position=this._generatePosition(t),this.positionAbs=this._convertPositionTo("absolute"),this.lastPositionAbs||(this.lastPositionAbs=this.positionAbs),this.options.scroll&&(this.scrollParent[0]!==document&&"HTML"!==this.scrollParent[0].tagName?(this.overflowOffset.top+this.scrollParent[0].offsetHeight-t.pageY<o.scrollSensitivity?this.scrollParent[0].scrollTop=r=this.scrollParent[0].scrollTop+o.scrollSpeed:t.pageY-this.overflowOffset.top<o.scrollSensitivity&&(this.scrollParent[0].scrollTop=r=this.scrollParent[0].scrollTop-o.scrollSpeed),this.overflowOffset.left+this.scrollParent[0].offsetWidth-t.pageX<o.scrollSensitivity?this.scrollParent[0].scrollLeft=r=this.scrollParent[0].scrollLeft+o.scrollSpeed:t.pageX-this.overflowOffset.left<o.scrollSensitivity&&(this.scrollParent[0].scrollLeft=r=this.scrollParent[0].scrollLeft-o.scrollSpeed)):(t.pageY-e(document).scrollTop()<o.scrollSensitivity?r=e(document).scrollTop(e(document).scrollTop()-o.scrollSpeed):e(window).height()-(t.pageY-e(document).scrollTop())<o.scrollSensitivity&&(r=e(document).scrollTop(e(document).scrollTop()+o.scrollSpeed)),t.pageX-e(document).scrollLeft()<o.scrollSensitivity?r=e(document).scrollLeft(e(document).scrollLeft()-o.scrollSpeed):e(window).width()-(t.pageX-e(document).scrollLeft())<o.scrollSensitivity&&(r=e(document).scrollLeft(e(document).scrollLeft()+o.scrollSpeed))),r!==!1&&e.ui.ddmanager&&!o.dropBehaviour&&e.ui.ddmanager.prepareOffsets(this,t)),this.positionAbs=this._convertPositionTo("absolute"),this.options.axis&&"y"===this.options.axis||(this.helper[0].style.left=this.position.left+"px"),this.options.axis&&"x"===this.options.axis||(this.helper[0].style.top=this.position.top+"px"),i=this.items.length-1;i>=0;i--)if(s=this.items[i],n=s.item[0],a=this._intersectsWithPointer(s),a&&s.instance===this.currentContainer&&n!==this.currentItem[0]&&this.placeholder[1===a?"next":"prev"]()[0]!==n&&!e.contains(this.placeholder[0],n)&&("semi-dynamic"===this.options.type?!e.contains(this.element[0],n):!0)){if(this.direction=1===a?"down":"up","pointer"!==this.options.tolerance&&!this._intersectsWithSides(s))break;this._rearrange(t,s),this._trigger("change",t,this._uiHash());break}return this._contactContainers(t),e.ui.ddmanager&&e.ui.ddmanager.drag(this,t),this._trigger("sort",t,this._uiHash()),this.lastPositionAbs=this.positionAbs,!1},_mouseStop:function(t,i){if(t){if(e.ui.ddmanager&&!this.options.dropBehaviour&&e.ui.ddmanager.drop(this,t),this.options.revert){var s=this,n=this.placeholder.offset(),a=this.options.axis,o={};a&&"x"!==a||(o.left=n.left-this.offset.parent.left-this.margins.left+(this.offsetParent[0]===document.body?0:this.offsetParent[0].scrollLeft)),a&&"y"!==a||(o.top=n.top-this.offset.parent.top-this.margins.top+(this.offsetParent[0]===document.body?0:this.offsetParent[0].scrollTop)),this.reverting=!0,e(this.helper).animate(o,parseInt(this.options.revert,10)||500,function(){s._clear(t)})}else this._clear(t,i);return!1}},cancel:function(){if(this.dragging){this._mouseUp({target:null}),"original"===this.options.helper?this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper"):this.currentItem.show();for(var t=this.containers.length-1;t>=0;t--)this.containers[t]._trigger("deactivate",null,this._uiHash(this)),this.containers[t].containerCache.over&&(this.containers[t]._trigger("out",null,this._uiHash(this)),this.containers[t].containerCache.over=0)}return this.placeholder&&(this.placeholder[0].parentNode&&this.placeholder[0].parentNode.removeChild(this.placeholder[0]),"original"!==this.options.helper&&this.helper&&this.helper[0].parentNode&&this.helper.remove(),e.extend(this,{helper:null,dragging:!1,reverting:!1,_noFinalSort:null}),this.domPosition.prev?e(this.domPosition.prev).after(this.currentItem):e(this.domPosition.parent).prepend(this.currentItem)),this},serialize:function(t){var i=this._getItemsAsjQuery(t&&t.connected),s=[];return t=t||{},e(i).each(function(){var i=(e(t.item||this).attr(t.attribute||"id")||"").match(t.expression||/(.+)[\-=_](.+)/);i&&s.push((t.key||i[1]+"[]")+"="+(t.key&&t.expression?i[1]:i[2]))}),!s.length&&t.key&&s.push(t.key+"="),s.join("&")},toArray:function(t){var i=this._getItemsAsjQuery(t&&t.connected),s=[];return t=t||{},i.each(function(){s.push(e(t.item||this).attr(t.attribute||"id")||"")}),s},_intersectsWith:function(e){var t=this.positionAbs.left,i=t+this.helperProportions.width,s=this.positionAbs.top,n=s+this.helperProportions.height,a=e.left,o=a+e.width,r=e.top,h=r+e.height,l=this.offset.click.top,u=this.offset.click.left,d="x"===this.options.axis||s+l>r&&h>s+l,c="y"===this.options.axis||t+u>a&&o>t+u,p=d&&c;return"pointer"===this.options.tolerance||this.options.forcePointerForContainers||"pointer"!==this.options.tolerance&&this.helperProportions[this.floating?"width":"height"]>e[this.floating?"width":"height"]?p:t+this.helperProportions.width/2>a&&o>i-this.helperProportions.width/2&&s+this.helperProportions.height/2>r&&h>n-this.helperProportions.height/2},_intersectsWithPointer:function(e){var t="x"===this.options.axis||this._isOverAxis(this.positionAbs.top+this.offset.click.top,e.top,e.height),i="y"===this.options.axis||this._isOverAxis(this.positionAbs.left+this.offset.click.left,e.left,e.width),s=t&&i,n=this._getDragVerticalDirection(),a=this._getDragHorizontalDirection();return s?this.floating?a&&"right"===a||"down"===n?2:1:n&&("down"===n?2:1):!1},_intersectsWithSides:function(e){var t=this._isOverAxis(this.positionAbs.top+this.offset.click.top,e.top+e.height/2,e.height),i=this._isOverAxis(this.positionAbs.left+this.offset.click.left,e.left+e.width/2,e.width),s=this._getDragVerticalDirection(),n=this._getDragHorizontalDirection();return this.floating&&n?"right"===n&&i||"left"===n&&!i:s&&("down"===s&&t||"up"===s&&!t)},_getDragVerticalDirection:function(){var e=this.positionAbs.top-this.lastPositionAbs.top;return 0!==e&&(e>0?"down":"up")},_getDragHorizontalDirection:function(){var e=this.positionAbs.left-this.lastPositionAbs.left;return 0!==e&&(e>0?"right":"left")},refresh:function(e){return this._refreshItems(e),this._setHandleClassName(),this.refreshPositions(),this},_connectWith:function(){var e=this.options;return e.connectWith.constructor===String?[e.connectWith]:e.connectWith},_getItemsAsjQuery:function(t){function i(){r.push(this)}var s,n,a,o,r=[],h=[],l=this._connectWith();if(l&&t)for(s=l.length-1;s>=0;s--)for(a=e(l[s]),n=a.length-1;n>=0;n--)o=e.data(a[n],this.widgetFullName),o&&o!==this&&!o.options.disabled&&h.push([e.isFunction(o.options.items)?o.options.items.call(o.element):e(o.options.items,o.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),o]);for(h.push([e.isFunction(this.options.items)?this.options.items.call(this.element,null,{options:this.options,item:this.currentItem}):e(this.options.items,this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),this]),s=h.length-1;s>=0;s--)h[s][0].each(i);return e(r)},_removeCurrentsFromItems:function(){var t=this.currentItem.find(":data("+this.widgetName+"-item)");this.items=e.grep(this.items,function(e){for(var i=0;t.length>i;i++)if(t[i]===e.item[0])return!1;return!0})},_refreshItems:function(t){this.items=[],this.containers=[this];var i,s,n,a,o,r,h,l,u=this.items,d=[[e.isFunction(this.options.items)?this.options.items.call(this.element[0],t,{item:this.currentItem}):e(this.options.items,this.element),this]],c=this._connectWith();if(c&&this.ready)for(i=c.length-1;i>=0;i--)for(n=e(c[i]),s=n.length-1;s>=0;s--)a=e.data(n[s],this.widgetFullName),a&&a!==this&&!a.options.disabled&&(d.push([e.isFunction(a.options.items)?a.options.items.call(a.element[0],t,{item:this.currentItem}):e(a.options.items,a.element),a]),this.containers.push(a));for(i=d.length-1;i>=0;i--)for(o=d[i][1],r=d[i][0],s=0,l=r.length;l>s;s++)h=e(r[s]),h.data(this.widgetName+"-item",o),u.push({item:h,instance:o,width:0,height:0,left:0,top:0})},refreshPositions:function(t){this.offsetParent&&this.helper&&(this.offset.parent=this._getParentOffset());var i,s,n,a;for(i=this.items.length-1;i>=0;i--)s=this.items[i],s.instance!==this.currentContainer&&this.currentContainer&&s.item[0]!==this.currentItem[0]||(n=this.options.toleranceElement?e(this.options.toleranceElement,s.item):s.item,t||(s.width=n.outerWidth(),s.height=n.outerHeight()),a=n.offset(),s.left=a.left,s.top=a.top);if(this.options.custom&&this.options.custom.refreshContainers)this.options.custom.refreshContainers.call(this);else for(i=this.containers.length-1;i>=0;i--)a=this.containers[i].element.offset(),this.containers[i].containerCache.left=a.left,this.containers[i].containerCache.top=a.top,this.containers[i].containerCache.width=this.containers[i].element.outerWidth(),this.containers[i].containerCache.height=this.containers[i].element.outerHeight();return this},_createPlaceholder:function(t){t=t||this;var i,s=t.options;s.placeholder&&s.placeholder.constructor!==String||(i=s.placeholder,s.placeholder={element:function(){var s=t.currentItem[0].nodeName.toLowerCase(),n=e("<"+s+">",t.document[0]).addClass(i||t.currentItem[0].className+" ui-sortable-placeholder").removeClass("ui-sortable-helper");return"tr"===s?t.currentItem.children().each(function(){e("<td>&#160;</td>",t.document[0]).attr("colspan",e(this).attr("colspan")||1).appendTo(n)}):"img"===s&&n.attr("src",t.currentItem.attr("src")),i||n.css("visibility","hidden"),n},update:function(e,n){(!i||s.forcePlaceholderSize)&&(n.height()||n.height(t.currentItem.innerHeight()-parseInt(t.currentItem.css("paddingTop")||0,10)-parseInt(t.currentItem.css("paddingBottom")||0,10)),n.width()||n.width(t.currentItem.innerWidth()-parseInt(t.currentItem.css("paddingLeft")||0,10)-parseInt(t.currentItem.css("paddingRight")||0,10)))}}),t.placeholder=e(s.placeholder.element.call(t.element,t.currentItem)),t.currentItem.after(t.placeholder),s.placeholder.update(t,t.placeholder)},_contactContainers:function(t){var i,s,n,a,o,r,h,l,u,d,c=null,p=null;for(i=this.containers.length-1;i>=0;i--)if(!e.contains(this.currentItem[0],this.containers[i].element[0]))if(this._intersectsWith(this.containers[i].containerCache)){if(c&&e.contains(this.containers[i].element[0],c.element[0]))continue;c=this.containers[i],p=i}else this.containers[i].containerCache.over&&(this.containers[i]._trigger("out",t,this._uiHash(this)),this.containers[i].containerCache.over=0);if(c)if(1===this.containers.length)this.containers[p].containerCache.over||(this.containers[p]._trigger("over",t,this._uiHash(this)),this.containers[p].containerCache.over=1);else{for(n=1e4,a=null,u=c.floating||this._isFloating(this.currentItem),o=u?"left":"top",r=u?"width":"height",d=u?"clientX":"clientY",s=this.items.length-1;s>=0;s--)e.contains(this.containers[p].element[0],this.items[s].item[0])&&this.items[s].item[0]!==this.currentItem[0]&&(h=this.items[s].item.offset()[o],l=!1,t[d]-h>this.items[s][r]/2&&(l=!0),n>Math.abs(t[d]-h)&&(n=Math.abs(t[d]-h),a=this.items[s],this.direction=l?"up":"down"));if(!a&&!this.options.dropOnEmpty)return;if(this.currentContainer===this.containers[p])return this.currentContainer.containerCache.over||(this.containers[p]._trigger("over",t,this._uiHash()),this.currentContainer.containerCache.over=1),void 0;a?this._rearrange(t,a,null,!0):this._rearrange(t,null,this.containers[p].element,!0),this._trigger("change",t,this._uiHash()),this.containers[p]._trigger("change",t,this._uiHash(this)),this.currentContainer=this.containers[p],this.options.placeholder.update(this.currentContainer,this.placeholder),this.containers[p]._trigger("over",t,this._uiHash(this)),this.containers[p].containerCache.over=1}},_createHelper:function(t){var i=this.options,s=e.isFunction(i.helper)?e(i.helper.apply(this.element[0],[t,this.currentItem])):"clone"===i.helper?this.currentItem.clone():this.currentItem;return s.parents("body").length||e("parent"!==i.appendTo?i.appendTo:this.currentItem[0].parentNode)[0].appendChild(s[0]),s[0]===this.currentItem[0]&&(this._storedCSS={width:this.currentItem[0].style.width,height:this.currentItem[0].style.height,position:this.currentItem.css("position"),top:this.currentItem.css("top"),left:this.currentItem.css("left")}),(!s[0].style.width||i.forceHelperSize)&&s.width(this.currentItem.width()),(!s[0].style.height||i.forceHelperSize)&&s.height(this.currentItem.height()),s},_adjustOffsetFromHelper:function(t){"string"==typeof t&&(t=t.split(" ")),e.isArray(t)&&(t={left:+t[0],top:+t[1]||0}),"left"in t&&(this.offset.click.left=t.left+this.margins.left),"right"in t&&(this.offset.click.left=this.helperProportions.width-t.right+this.margins.left),"top"in t&&(this.offset.click.top=t.top+this.margins.top),"bottom"in t&&(this.offset.click.top=this.helperProportions.height-t.bottom+this.margins.top)},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var t=this.offsetParent.offset();return"absolute"===this.cssPosition&&this.scrollParent[0]!==document&&e.contains(this.scrollParent[0],this.offsetParent[0])&&(t.left+=this.scrollParent.scrollLeft(),t.top+=this.scrollParent.scrollTop()),(this.offsetParent[0]===document.body||this.offsetParent[0].tagName&&"html"===this.offsetParent[0].tagName.toLowerCase()&&e.ui.ie)&&(t={top:0,left:0}),{top:t.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:t.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if("relative"===this.cssPosition){var e=this.currentItem.position();return{top:e.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:e.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}return{top:0,left:0}},_cacheMargins:function(){this.margins={left:parseInt(this.currentItem.css("marginLeft"),10)||0,top:parseInt(this.currentItem.css("marginTop"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var t,i,s,n=this.options;"parent"===n.containment&&(n.containment=this.helper[0].parentNode),("document"===n.containment||"window"===n.containment)&&(this.containment=[0-this.offset.relative.left-this.offset.parent.left,0-this.offset.relative.top-this.offset.parent.top,e("document"===n.containment?document:window).width()-this.helperProportions.width-this.margins.left,(e("document"===n.containment?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top]),/^(document|window|parent)$/.test(n.containment)||(t=e(n.containment)[0],i=e(n.containment).offset(),s="hidden"!==e(t).css("overflow"),this.containment=[i.left+(parseInt(e(t).css("borderLeftWidth"),10)||0)+(parseInt(e(t).css("paddingLeft"),10)||0)-this.margins.left,i.top+(parseInt(e(t).css("borderTopWidth"),10)||0)+(parseInt(e(t).css("paddingTop"),10)||0)-this.margins.top,i.left+(s?Math.max(t.scrollWidth,t.offsetWidth):t.offsetWidth)-(parseInt(e(t).css("borderLeftWidth"),10)||0)-(parseInt(e(t).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left,i.top+(s?Math.max(t.scrollHeight,t.offsetHeight):t.offsetHeight)-(parseInt(e(t).css("borderTopWidth"),10)||0)-(parseInt(e(t).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top])},_convertPositionTo:function(t,i){i||(i=this.position);var s="absolute"===t?1:-1,n="absolute"!==this.cssPosition||this.scrollParent[0]!==document&&e.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,a=/(html|body)/i.test(n[0].tagName);return{top:i.top+this.offset.relative.top*s+this.offset.parent.top*s-("fixed"===this.cssPosition?-this.scrollParent.scrollTop():a?0:n.scrollTop())*s,left:i.left+this.offset.relative.left*s+this.offset.parent.left*s-("fixed"===this.cssPosition?-this.scrollParent.scrollLeft():a?0:n.scrollLeft())*s}},_generatePosition:function(t){var i,s,n=this.options,a=t.pageX,o=t.pageY,r="absolute"!==this.cssPosition||this.scrollParent[0]!==document&&e.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,h=/(html|body)/i.test(r[0].tagName);return"relative"!==this.cssPosition||this.scrollParent[0]!==document&&this.scrollParent[0]!==this.offsetParent[0]||(this.offset.relative=this._getRelativeOffset()),this.originalPosition&&(this.containment&&(t.pageX-this.offset.click.left<this.containment[0]&&(a=this.containment[0]+this.offset.click.left),t.pageY-this.offset.click.top<this.containment[1]&&(o=this.containment[1]+this.offset.click.top),t.pageX-this.offset.click.left>this.containment[2]&&(a=this.containment[2]+this.offset.click.left),t.pageY-this.offset.click.top>this.containment[3]&&(o=this.containment[3]+this.offset.click.top)),n.grid&&(i=this.originalPageY+Math.round((o-this.originalPageY)/n.grid[1])*n.grid[1],o=this.containment?i-this.offset.click.top>=this.containment[1]&&i-this.offset.click.top<=this.containment[3]?i:i-this.offset.click.top>=this.containment[1]?i-n.grid[1]:i+n.grid[1]:i,s=this.originalPageX+Math.round((a-this.originalPageX)/n.grid[0])*n.grid[0],a=this.containment?s-this.offset.click.left>=this.containment[0]&&s-this.offset.click.left<=this.containment[2]?s:s-this.offset.click.left>=this.containment[0]?s-n.grid[0]:s+n.grid[0]:s)),{top:o-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+("fixed"===this.cssPosition?-this.scrollParent.scrollTop():h?0:r.scrollTop()),left:a-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+("fixed"===this.cssPosition?-this.scrollParent.scrollLeft():h?0:r.scrollLeft())}},_rearrange:function(e,t,i,s){i?i[0].appendChild(this.placeholder[0]):t.item[0].parentNode.insertBefore(this.placeholder[0],"down"===this.direction?t.item[0]:t.item[0].nextSibling),this.counter=this.counter?++this.counter:1;var n=this.counter;this._delay(function(){n===this.counter&&this.refreshPositions(!s)})},_clear:function(e,t){function i(e,t,i){return function(s){i._trigger(e,s,t._uiHash(t))}}this.reverting=!1;var s,n=[];if(!this._noFinalSort&&this.currentItem.parent().length&&this.placeholder.before(this.currentItem),this._noFinalSort=null,this.helper[0]===this.currentItem[0]){for(s in this._storedCSS)("auto"===this._storedCSS[s]||"static"===this._storedCSS[s])&&(this._storedCSS[s]="");this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")}else this.currentItem.show();for(this.fromOutside&&!t&&n.push(function(e){this._trigger("receive",e,this._uiHash(this.fromOutside))}),!this.fromOutside&&this.domPosition.prev===this.currentItem.prev().not(".ui-sortable-helper")[0]&&this.domPosition.parent===this.currentItem.parent()[0]||t||n.push(function(e){this._trigger("update",e,this._uiHash())}),this!==this.currentContainer&&(t||(n.push(function(e){this._trigger("remove",e,this._uiHash())}),n.push(function(e){return function(t){e._trigger("receive",t,this._uiHash(this))}}.call(this,this.currentContainer)),n.push(function(e){return function(t){e._trigger("update",t,this._uiHash(this))}}.call(this,this.currentContainer)))),s=this.containers.length-1;s>=0;s--)t||n.push(i("deactivate",this,this.containers[s])),this.containers[s].containerCache.over&&(n.push(i("out",this,this.containers[s])),this.containers[s].containerCache.over=0);if(this.storedCursor&&(this.document.find("body").css("cursor",this.storedCursor),this.storedStylesheet.remove()),this._storedOpacity&&this.helper.css("opacity",this._storedOpacity),this._storedZIndex&&this.helper.css("zIndex","auto"===this._storedZIndex?"":this._storedZIndex),this.dragging=!1,t||this._trigger("beforeStop",e,this._uiHash()),this.placeholder[0].parentNode.removeChild(this.placeholder[0]),this.cancelHelperRemoval||(this.helper[0]!==this.currentItem[0]&&this.helper.remove(),this.helper=null),!t){for(s=0;n.length>s;s++)n[s].call(this,e);this._trigger("stop",e,this._uiHash())}return this.fromOutside=!1,!this.cancelHelperRemoval},_trigger:function(){e.Widget.prototype._trigger.apply(this,arguments)===!1&&this.cancel()},_uiHash:function(t){var i=t||this;return{helper:i.helper,placeholder:i.placeholder||e([]),position:i.position,originalPosition:i.originalPosition,offset:i.positionAbs,item:i.currentItem,sender:t?t.element:null}}}),e.widget("ui.accordion",{version:"1.11.2",options:{active:0,animate:{},collapsible:!1,event:"click",header:"> li > :first-child,> :not(li):even",heightStyle:"auto",icons:{activeHeader:"ui-icon-triangle-1-s",header:"ui-icon-triangle-1-e"},activate:null,beforeActivate:null},hideProps:{borderTopWidth:"hide",borderBottomWidth:"hide",paddingTop:"hide",paddingBottom:"hide",height:"hide"},showProps:{borderTopWidth:"show",borderBottomWidth:"show",paddingTop:"show",paddingBottom:"show",height:"show"},_create:function(){var t=this.options;this.prevShow=this.prevHide=e(),this.element.addClass("ui-accordion ui-widget ui-helper-reset").attr("role","tablist"),t.collapsible||t.active!==!1&&null!=t.active||(t.active=0),this._processPanels(),0>t.active&&(t.active+=this.headers.length),this._refresh()},_getCreateEventData:function(){return{header:this.active,panel:this.active.length?this.active.next():e()}},_createIcons:function(){var t=this.options.icons;t&&(e("<span>").addClass("ui-accordion-header-icon ui-icon "+t.header).prependTo(this.headers),this.active.children(".ui-accordion-header-icon").removeClass(t.header).addClass(t.activeHeader),this.headers.addClass("ui-accordion-icons"))},_destroyIcons:function(){this.headers.removeClass("ui-accordion-icons").children(".ui-accordion-header-icon").remove()},_destroy:function(){var e;this.element.removeClass("ui-accordion ui-widget ui-helper-reset").removeAttr("role"),this.headers.removeClass("ui-accordion-header ui-accordion-header-active ui-state-default ui-corner-all ui-state-active ui-state-disabled ui-corner-top").removeAttr("role").removeAttr("aria-expanded").removeAttr("aria-selected").removeAttr("aria-controls").removeAttr("tabIndex").removeUniqueId(),this._destroyIcons(),e=this.headers.next().removeClass("ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content ui-accordion-content-active ui-state-disabled").css("display","").removeAttr("role").removeAttr("aria-hidden").removeAttr("aria-labelledby").removeUniqueId(),"content"!==this.options.heightStyle&&e.css("height","")},_setOption:function(e,t){return"active"===e?(this._activate(t),void 0):("event"===e&&(this.options.event&&this._off(this.headers,this.options.event),this._setupEvents(t)),this._super(e,t),"collapsible"!==e||t||this.options.active!==!1||this._activate(0),"icons"===e&&(this._destroyIcons(),t&&this._createIcons()),"disabled"===e&&(this.element.toggleClass("ui-state-disabled",!!t).attr("aria-disabled",t),this.headers.add(this.headers.next()).toggleClass("ui-state-disabled",!!t)),void 0)},_keydown:function(t){if(!t.altKey&&!t.ctrlKey){var i=e.ui.keyCode,s=this.headers.length,n=this.headers.index(t.target),a=!1;switch(t.keyCode){case i.RIGHT:case i.DOWN:a=this.headers[(n+1)%s];break;case i.LEFT:case i.UP:a=this.headers[(n-1+s)%s];break;case i.SPACE:case i.ENTER:this._eventHandler(t);break;case i.HOME:a=this.headers[0];break;case i.END:a=this.headers[s-1]}a&&(e(t.target).attr("tabIndex",-1),e(a).attr("tabIndex",0),a.focus(),t.preventDefault())}},_panelKeyDown:function(t){t.keyCode===e.ui.keyCode.UP&&t.ctrlKey&&e(t.currentTarget).prev().focus()},refresh:function(){var t=this.options;this._processPanels(),t.active===!1&&t.collapsible===!0||!this.headers.length?(t.active=!1,this.active=e()):t.active===!1?this._activate(0):this.active.length&&!e.contains(this.element[0],this.active[0])?this.headers.length===this.headers.find(".ui-state-disabled").length?(t.active=!1,this.active=e()):this._activate(Math.max(0,t.active-1)):t.active=this.headers.index(this.active),this._destroyIcons(),this._refresh()},_processPanels:function(){var e=this.headers,t=this.panels;this.headers=this.element.find(this.options.header).addClass("ui-accordion-header ui-state-default ui-corner-all"),this.panels=this.headers.next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom").filter(":not(.ui-accordion-content-active)").hide(),t&&(this._off(e.not(this.headers)),this._off(t.not(this.panels)))},_refresh:function(){var t,i=this.options,s=i.heightStyle,n=this.element.parent();this.active=this._findActive(i.active).addClass("ui-accordion-header-active ui-state-active ui-corner-top").removeClass("ui-corner-all"),this.active.next().addClass("ui-accordion-content-active").show(),this.headers.attr("role","tab").each(function(){var t=e(this),i=t.uniqueId().attr("id"),s=t.next(),n=s.uniqueId().attr("id");
t.attr("aria-controls",n),s.attr("aria-labelledby",i)}).next().attr("role","tabpanel"),this.headers.not(this.active).attr({"aria-selected":"false","aria-expanded":"false",tabIndex:-1}).next().attr({"aria-hidden":"true"}).hide(),this.active.length?this.active.attr({"aria-selected":"true","aria-expanded":"true",tabIndex:0}).next().attr({"aria-hidden":"false"}):this.headers.eq(0).attr("tabIndex",0),this._createIcons(),this._setupEvents(i.event),"fill"===s?(t=n.height(),this.element.siblings(":visible").each(function(){var i=e(this),s=i.css("position");"absolute"!==s&&"fixed"!==s&&(t-=i.outerHeight(!0))}),this.headers.each(function(){t-=e(this).outerHeight(!0)}),this.headers.next().each(function(){e(this).height(Math.max(0,t-e(this).innerHeight()+e(this).height()))}).css("overflow","auto")):"auto"===s&&(t=0,this.headers.next().each(function(){t=Math.max(t,e(this).css("height","").height())}).height(t))},_activate:function(t){var i=this._findActive(t)[0];i!==this.active[0]&&(i=i||this.active[0],this._eventHandler({target:i,currentTarget:i,preventDefault:e.noop}))},_findActive:function(t){return"number"==typeof t?this.headers.eq(t):e()},_setupEvents:function(t){var i={keydown:"_keydown"};t&&e.each(t.split(" "),function(e,t){i[t]="_eventHandler"}),this._off(this.headers.add(this.headers.next())),this._on(this.headers,i),this._on(this.headers.next(),{keydown:"_panelKeyDown"}),this._hoverable(this.headers),this._focusable(this.headers)},_eventHandler:function(t){var i=this.options,s=this.active,n=e(t.currentTarget),a=n[0]===s[0],o=a&&i.collapsible,r=o?e():n.next(),h=s.next(),l={oldHeader:s,oldPanel:h,newHeader:o?e():n,newPanel:r};t.preventDefault(),a&&!i.collapsible||this._trigger("beforeActivate",t,l)===!1||(i.active=o?!1:this.headers.index(n),this.active=a?e():n,this._toggle(l),s.removeClass("ui-accordion-header-active ui-state-active"),i.icons&&s.children(".ui-accordion-header-icon").removeClass(i.icons.activeHeader).addClass(i.icons.header),a||(n.removeClass("ui-corner-all").addClass("ui-accordion-header-active ui-state-active ui-corner-top"),i.icons&&n.children(".ui-accordion-header-icon").removeClass(i.icons.header).addClass(i.icons.activeHeader),n.next().addClass("ui-accordion-content-active")))},_toggle:function(t){var i=t.newPanel,s=this.prevShow.length?this.prevShow:t.oldPanel;this.prevShow.add(this.prevHide).stop(!0,!0),this.prevShow=i,this.prevHide=s,this.options.animate?this._animate(i,s,t):(s.hide(),i.show(),this._toggleComplete(t)),s.attr({"aria-hidden":"true"}),s.prev().attr("aria-selected","false"),i.length&&s.length?s.prev().attr({tabIndex:-1,"aria-expanded":"false"}):i.length&&this.headers.filter(function(){return 0===e(this).attr("tabIndex")}).attr("tabIndex",-1),i.attr("aria-hidden","false").prev().attr({"aria-selected":"true",tabIndex:0,"aria-expanded":"true"})},_animate:function(e,t,i){var s,n,a,o=this,r=0,h=e.length&&(!t.length||e.index()<t.index()),l=this.options.animate||{},u=h&&l.down||l,d=function(){o._toggleComplete(i)};return"number"==typeof u&&(a=u),"string"==typeof u&&(n=u),n=n||u.easing||l.easing,a=a||u.duration||l.duration,t.length?e.length?(s=e.show().outerHeight(),t.animate(this.hideProps,{duration:a,easing:n,step:function(e,t){t.now=Math.round(e)}}),e.hide().animate(this.showProps,{duration:a,easing:n,complete:d,step:function(e,i){i.now=Math.round(e),"height"!==i.prop?r+=i.now:"content"!==o.options.heightStyle&&(i.now=Math.round(s-t.outerHeight()-r),r=0)}}),void 0):t.animate(this.hideProps,a,n,d):e.animate(this.showProps,a,n,d)},_toggleComplete:function(e){var t=e.oldPanel;t.removeClass("ui-accordion-content-active").prev().removeClass("ui-corner-top").addClass("ui-corner-all"),t.length&&(t.parent()[0].className=t.parent()[0].className),this._trigger("activate",null,e)}}),e.widget("ui.menu",{version:"1.11.2",defaultElement:"<ul>",delay:300,options:{icons:{submenu:"ui-icon-carat-1-e"},items:"> *",menus:"ul",position:{my:"left-1 top",at:"right top"},role:"menu",blur:null,focus:null,select:null},_create:function(){this.activeMenu=this.element,this.mouseHandled=!1,this.element.uniqueId().addClass("ui-menu ui-widget ui-widget-content").toggleClass("ui-menu-icons",!!this.element.find(".ui-icon").length).attr({role:this.options.role,tabIndex:0}),this.options.disabled&&this.element.addClass("ui-state-disabled").attr("aria-disabled","true"),this._on({"mousedown .ui-menu-item":function(e){e.preventDefault()},"click .ui-menu-item":function(t){var i=e(t.target);!this.mouseHandled&&i.not(".ui-state-disabled").length&&(this.select(t),t.isPropagationStopped()||(this.mouseHandled=!0),i.has(".ui-menu").length?this.expand(t):!this.element.is(":focus")&&e(this.document[0].activeElement).closest(".ui-menu").length&&(this.element.trigger("focus",[!0]),this.active&&1===this.active.parents(".ui-menu").length&&clearTimeout(this.timer)))},"mouseenter .ui-menu-item":function(t){if(!this.previousFilter){var i=e(t.currentTarget);i.siblings(".ui-state-active").removeClass("ui-state-active"),this.focus(t,i)}},mouseleave:"collapseAll","mouseleave .ui-menu":"collapseAll",focus:function(e,t){var i=this.active||this.element.find(this.options.items).eq(0);t||this.focus(e,i)},blur:function(t){this._delay(function(){e.contains(this.element[0],this.document[0].activeElement)||this.collapseAll(t)})},keydown:"_keydown"}),this.refresh(),this._on(this.document,{click:function(e){this._closeOnDocumentClick(e)&&this.collapseAll(e),this.mouseHandled=!1}})},_destroy:function(){this.element.removeAttr("aria-activedescendant").find(".ui-menu").addBack().removeClass("ui-menu ui-widget ui-widget-content ui-menu-icons ui-front").removeAttr("role").removeAttr("tabIndex").removeAttr("aria-labelledby").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-disabled").removeUniqueId().show(),this.element.find(".ui-menu-item").removeClass("ui-menu-item").removeAttr("role").removeAttr("aria-disabled").removeUniqueId().removeClass("ui-state-hover").removeAttr("tabIndex").removeAttr("role").removeAttr("aria-haspopup").children().each(function(){var t=e(this);t.data("ui-menu-submenu-carat")&&t.remove()}),this.element.find(".ui-menu-divider").removeClass("ui-menu-divider ui-widget-content")},_keydown:function(t){var i,s,n,a,o=!0;switch(t.keyCode){case e.ui.keyCode.PAGE_UP:this.previousPage(t);break;case e.ui.keyCode.PAGE_DOWN:this.nextPage(t);break;case e.ui.keyCode.HOME:this._move("first","first",t);break;case e.ui.keyCode.END:this._move("last","last",t);break;case e.ui.keyCode.UP:this.previous(t);break;case e.ui.keyCode.DOWN:this.next(t);break;case e.ui.keyCode.LEFT:this.collapse(t);break;case e.ui.keyCode.RIGHT:this.active&&!this.active.is(".ui-state-disabled")&&this.expand(t);break;case e.ui.keyCode.ENTER:case e.ui.keyCode.SPACE:this._activate(t);break;case e.ui.keyCode.ESCAPE:this.collapse(t);break;default:o=!1,s=this.previousFilter||"",n=String.fromCharCode(t.keyCode),a=!1,clearTimeout(this.filterTimer),n===s?a=!0:n=s+n,i=this._filterMenuItems(n),i=a&&-1!==i.index(this.active.next())?this.active.nextAll(".ui-menu-item"):i,i.length||(n=String.fromCharCode(t.keyCode),i=this._filterMenuItems(n)),i.length?(this.focus(t,i),this.previousFilter=n,this.filterTimer=this._delay(function(){delete this.previousFilter},1e3)):delete this.previousFilter}o&&t.preventDefault()},_activate:function(e){this.active.is(".ui-state-disabled")||(this.active.is("[aria-haspopup='true']")?this.expand(e):this.select(e))},refresh:function(){var t,i,s=this,n=this.options.icons.submenu,a=this.element.find(this.options.menus);this.element.toggleClass("ui-menu-icons",!!this.element.find(".ui-icon").length),a.filter(":not(.ui-menu)").addClass("ui-menu ui-widget ui-widget-content ui-front").hide().attr({role:this.options.role,"aria-hidden":"true","aria-expanded":"false"}).each(function(){var t=e(this),i=t.parent(),s=e("<span>").addClass("ui-menu-icon ui-icon "+n).data("ui-menu-submenu-carat",!0);i.attr("aria-haspopup","true").prepend(s),t.attr("aria-labelledby",i.attr("id"))}),t=a.add(this.element),i=t.find(this.options.items),i.not(".ui-menu-item").each(function(){var t=e(this);s._isDivider(t)&&t.addClass("ui-widget-content ui-menu-divider")}),i.not(".ui-menu-item, .ui-menu-divider").addClass("ui-menu-item").uniqueId().attr({tabIndex:-1,role:this._itemRole()}),i.filter(".ui-state-disabled").attr("aria-disabled","true"),this.active&&!e.contains(this.element[0],this.active[0])&&this.blur()},_itemRole:function(){return{menu:"menuitem",listbox:"option"}[this.options.role]},_setOption:function(e,t){"icons"===e&&this.element.find(".ui-menu-icon").removeClass(this.options.icons.submenu).addClass(t.submenu),"disabled"===e&&this.element.toggleClass("ui-state-disabled",!!t).attr("aria-disabled",t),this._super(e,t)},focus:function(e,t){var i,s;this.blur(e,e&&"focus"===e.type),this._scrollIntoView(t),this.active=t.first(),s=this.active.addClass("ui-state-focus").removeClass("ui-state-active"),this.options.role&&this.element.attr("aria-activedescendant",s.attr("id")),this.active.parent().closest(".ui-menu-item").addClass("ui-state-active"),e&&"keydown"===e.type?this._close():this.timer=this._delay(function(){this._close()},this.delay),i=t.children(".ui-menu"),i.length&&e&&/^mouse/.test(e.type)&&this._startOpening(i),this.activeMenu=t.parent(),this._trigger("focus",e,{item:t})},_scrollIntoView:function(t){var i,s,n,a,o,r;this._hasScroll()&&(i=parseFloat(e.css(this.activeMenu[0],"borderTopWidth"))||0,s=parseFloat(e.css(this.activeMenu[0],"paddingTop"))||0,n=t.offset().top-this.activeMenu.offset().top-i-s,a=this.activeMenu.scrollTop(),o=this.activeMenu.height(),r=t.outerHeight(),0>n?this.activeMenu.scrollTop(a+n):n+r>o&&this.activeMenu.scrollTop(a+n-o+r))},blur:function(e,t){t||clearTimeout(this.timer),this.active&&(this.active.removeClass("ui-state-focus"),this.active=null,this._trigger("blur",e,{item:this.active}))},_startOpening:function(e){clearTimeout(this.timer),"true"===e.attr("aria-hidden")&&(this.timer=this._delay(function(){this._close(),this._open(e)},this.delay))},_open:function(t){var i=e.extend({of:this.active},this.options.position);clearTimeout(this.timer),this.element.find(".ui-menu").not(t.parents(".ui-menu")).hide().attr("aria-hidden","true"),t.show().removeAttr("aria-hidden").attr("aria-expanded","true").position(i)},collapseAll:function(t,i){clearTimeout(this.timer),this.timer=this._delay(function(){var s=i?this.element:e(t&&t.target).closest(this.element.find(".ui-menu"));s.length||(s=this.element),this._close(s),this.blur(t),this.activeMenu=s},this.delay)},_close:function(e){e||(e=this.active?this.active.parent():this.element),e.find(".ui-menu").hide().attr("aria-hidden","true").attr("aria-expanded","false").end().find(".ui-state-active").not(".ui-state-focus").removeClass("ui-state-active")},_closeOnDocumentClick:function(t){return!e(t.target).closest(".ui-menu").length},_isDivider:function(e){return!/[^\-\u2014\u2013\s]/.test(e.text())},collapse:function(e){var t=this.active&&this.active.parent().closest(".ui-menu-item",this.element);t&&t.length&&(this._close(),this.focus(e,t))},expand:function(e){var t=this.active&&this.active.children(".ui-menu ").find(this.options.items).first();t&&t.length&&(this._open(t.parent()),this._delay(function(){this.focus(e,t)}))},next:function(e){this._move("next","first",e)},previous:function(e){this._move("prev","last",e)},isFirstItem:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},isLastItem:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},_move:function(e,t,i){var s;this.active&&(s="first"===e||"last"===e?this.active["first"===e?"prevAll":"nextAll"](".ui-menu-item").eq(-1):this.active[e+"All"](".ui-menu-item").eq(0)),s&&s.length&&this.active||(s=this.activeMenu.find(this.options.items)[t]()),this.focus(i,s)},nextPage:function(t){var i,s,n;return this.active?(this.isLastItem()||(this._hasScroll()?(s=this.active.offset().top,n=this.element.height(),this.active.nextAll(".ui-menu-item").each(function(){return i=e(this),0>i.offset().top-s-n}),this.focus(t,i)):this.focus(t,this.activeMenu.find(this.options.items)[this.active?"last":"first"]())),void 0):(this.next(t),void 0)},previousPage:function(t){var i,s,n;return this.active?(this.isFirstItem()||(this._hasScroll()?(s=this.active.offset().top,n=this.element.height(),this.active.prevAll(".ui-menu-item").each(function(){return i=e(this),i.offset().top-s+n>0}),this.focus(t,i)):this.focus(t,this.activeMenu.find(this.options.items).first())),void 0):(this.next(t),void 0)},_hasScroll:function(){return this.element.outerHeight()<this.element.prop("scrollHeight")},select:function(t){this.active=this.active||e(t.target).closest(".ui-menu-item");var i={item:this.active};this.active.has(".ui-menu").length||this.collapseAll(t,!0),this._trigger("select",t,i)},_filterMenuItems:function(t){var i=t.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&"),s=RegExp("^"+i,"i");return this.activeMenu.find(this.options.items).filter(".ui-menu-item").filter(function(){return s.test(e.trim(e(this).text()))})}}),e.widget("ui.autocomplete",{version:"1.11.2",defaultElement:"<input>",options:{appendTo:null,autoFocus:!1,delay:300,minLength:1,position:{my:"left top",at:"left bottom",collision:"none"},source:null,change:null,close:null,focus:null,open:null,response:null,search:null,select:null},requestIndex:0,pending:0,_create:function(){var t,i,s,n=this.element[0].nodeName.toLowerCase(),a="textarea"===n,o="input"===n;this.isMultiLine=a?!0:o?!1:this.element.prop("isContentEditable"),this.valueMethod=this.element[a||o?"val":"text"],this.isNewMenu=!0,this.element.addClass("ui-autocomplete-input").attr("autocomplete","off"),this._on(this.element,{keydown:function(n){if(this.element.prop("readOnly"))return t=!0,s=!0,i=!0,void 0;t=!1,s=!1,i=!1;var a=e.ui.keyCode;switch(n.keyCode){case a.PAGE_UP:t=!0,this._move("previousPage",n);break;case a.PAGE_DOWN:t=!0,this._move("nextPage",n);break;case a.UP:t=!0,this._keyEvent("previous",n);break;case a.DOWN:t=!0,this._keyEvent("next",n);break;case a.ENTER:this.menu.active&&(t=!0,n.preventDefault(),this.menu.select(n));break;case a.TAB:this.menu.active&&this.menu.select(n);break;case a.ESCAPE:this.menu.element.is(":visible")&&(this.isMultiLine||this._value(this.term),this.close(n),n.preventDefault());break;default:i=!0,this._searchTimeout(n)}},keypress:function(s){if(t)return t=!1,(!this.isMultiLine||this.menu.element.is(":visible"))&&s.preventDefault(),void 0;if(!i){var n=e.ui.keyCode;switch(s.keyCode){case n.PAGE_UP:this._move("previousPage",s);break;case n.PAGE_DOWN:this._move("nextPage",s);break;case n.UP:this._keyEvent("previous",s);break;case n.DOWN:this._keyEvent("next",s)}}},input:function(e){return s?(s=!1,e.preventDefault(),void 0):(this._searchTimeout(e),void 0)},focus:function(){this.selectedItem=null,this.previous=this._value()},blur:function(e){return this.cancelBlur?(delete this.cancelBlur,void 0):(clearTimeout(this.searching),this.close(e),this._change(e),void 0)}}),this._initSource(),this.menu=e("<ul>").addClass("ui-autocomplete ui-front").appendTo(this._appendTo()).menu({role:null}).hide().menu("instance"),this._on(this.menu.element,{mousedown:function(t){t.preventDefault(),this.cancelBlur=!0,this._delay(function(){delete this.cancelBlur});var i=this.menu.element[0];e(t.target).closest(".ui-menu-item").length||this._delay(function(){var t=this;this.document.one("mousedown",function(s){s.target===t.element[0]||s.target===i||e.contains(i,s.target)||t.close()})})},menufocus:function(t,i){var s,n;return this.isNewMenu&&(this.isNewMenu=!1,t.originalEvent&&/^mouse/.test(t.originalEvent.type))?(this.menu.blur(),this.document.one("mousemove",function(){e(t.target).trigger(t.originalEvent)}),void 0):(n=i.item.data("ui-autocomplete-item"),!1!==this._trigger("focus",t,{item:n})&&t.originalEvent&&/^key/.test(t.originalEvent.type)&&this._value(n.value),s=i.item.attr("aria-label")||n.value,s&&e.trim(s).length&&(this.liveRegion.children().hide(),e("<div>").text(s).appendTo(this.liveRegion)),void 0)},menuselect:function(e,t){var i=t.item.data("ui-autocomplete-item"),s=this.previous;this.element[0]!==this.document[0].activeElement&&(this.element.focus(),this.previous=s,this._delay(function(){this.previous=s,this.selectedItem=i})),!1!==this._trigger("select",e,{item:i})&&this._value(i.value),this.term=this._value(),this.close(e),this.selectedItem=i}}),this.liveRegion=e("<span>",{role:"status","aria-live":"assertive","aria-relevant":"additions"}).addClass("ui-helper-hidden-accessible").appendTo(this.document[0].body),this._on(this.window,{beforeunload:function(){this.element.removeAttr("autocomplete")}})},_destroy:function(){clearTimeout(this.searching),this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete"),this.menu.element.remove(),this.liveRegion.remove()},_setOption:function(e,t){this._super(e,t),"source"===e&&this._initSource(),"appendTo"===e&&this.menu.element.appendTo(this._appendTo()),"disabled"===e&&t&&this.xhr&&this.xhr.abort()},_appendTo:function(){var t=this.options.appendTo;return t&&(t=t.jquery||t.nodeType?e(t):this.document.find(t).eq(0)),t&&t[0]||(t=this.element.closest(".ui-front")),t.length||(t=this.document[0].body),t},_initSource:function(){var t,i,s=this;e.isArray(this.options.source)?(t=this.options.source,this.source=function(i,s){s(e.ui.autocomplete.filter(t,i.term))}):"string"==typeof this.options.source?(i=this.options.source,this.source=function(t,n){s.xhr&&s.xhr.abort(),s.xhr=e.ajax({url:i,data:t,dataType:"json",success:function(e){n(e)},error:function(){n([])}})}):this.source=this.options.source},_searchTimeout:function(e){clearTimeout(this.searching),this.searching=this._delay(function(){var t=this.term===this._value(),i=this.menu.element.is(":visible"),s=e.altKey||e.ctrlKey||e.metaKey||e.shiftKey;(!t||t&&!i&&!s)&&(this.selectedItem=null,this.search(null,e))},this.options.delay)},search:function(e,t){return e=null!=e?e:this._value(),this.term=this._value(),e.length<this.options.minLength?this.close(t):this._trigger("search",t)!==!1?this._search(e):void 0},_search:function(e){this.pending++,this.element.addClass("ui-autocomplete-loading"),this.cancelSearch=!1,this.source({term:e},this._response())},_response:function(){var t=++this.requestIndex;return e.proxy(function(e){t===this.requestIndex&&this.__response(e),this.pending--,this.pending||this.element.removeClass("ui-autocomplete-loading")},this)},__response:function(e){e&&(e=this._normalize(e)),this._trigger("response",null,{content:e}),!this.options.disabled&&e&&e.length&&!this.cancelSearch?(this._suggest(e),this._trigger("open")):this._close()},close:function(e){this.cancelSearch=!0,this._close(e)},_close:function(e){this.menu.element.is(":visible")&&(this.menu.element.hide(),this.menu.blur(),this.isNewMenu=!0,this._trigger("close",e))},_change:function(e){this.previous!==this._value()&&this._trigger("change",e,{item:this.selectedItem})},_normalize:function(t){return t.length&&t[0].label&&t[0].value?t:e.map(t,function(t){return"string"==typeof t?{label:t,value:t}:e.extend({},t,{label:t.label||t.value,value:t.value||t.label})})},_suggest:function(t){var i=this.menu.element.empty();this._renderMenu(i,t),this.isNewMenu=!0,this.menu.refresh(),i.show(),this._resizeMenu(),i.position(e.extend({of:this.element},this.options.position)),this.options.autoFocus&&this.menu.next()},_resizeMenu:function(){var e=this.menu.element;e.outerWidth(Math.max(e.width("").outerWidth()+1,this.element.outerWidth()))},_renderMenu:function(t,i){var s=this;e.each(i,function(e,i){s._renderItemData(t,i)})},_renderItemData:function(e,t){return this._renderItem(e,t).data("ui-autocomplete-item",t)},_renderItem:function(t,i){return e("<li>").text(i.label).appendTo(t)},_move:function(e,t){return this.menu.element.is(":visible")?this.menu.isFirstItem()&&/^previous/.test(e)||this.menu.isLastItem()&&/^next/.test(e)?(this.isMultiLine||this._value(this.term),this.menu.blur(),void 0):(this.menu[e](t),void 0):(this.search(null,t),void 0)},widget:function(){return this.menu.element},_value:function(){return this.valueMethod.apply(this.element,arguments)},_keyEvent:function(e,t){(!this.isMultiLine||this.menu.element.is(":visible"))&&(this._move(e,t),t.preventDefault())}}),e.extend(e.ui.autocomplete,{escapeRegex:function(e){return e.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&")},filter:function(t,i){var s=RegExp(e.ui.autocomplete.escapeRegex(i),"i");return e.grep(t,function(e){return s.test(e.label||e.value||e)})}}),e.widget("ui.autocomplete",e.ui.autocomplete,{options:{messages:{noResults:"No search results.",results:function(e){return e+(e>1?" results are":" result is")+" available, use up and down arrow keys to navigate."}}},__response:function(t){var i;this._superApply(arguments),this.options.disabled||this.cancelSearch||(i=t&&t.length?this.options.messages.results(t.length):this.options.messages.noResults,this.liveRegion.children().hide(),e("<div>").text(i).appendTo(this.liveRegion))}}),e.ui.autocomplete;var c,p="ui-button ui-widget ui-state-default ui-corner-all",f="ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only",m=function(){var t=e(this);setTimeout(function(){t.find(":ui-button").button("refresh")},1)},g=function(t){var i=t.name,s=t.form,n=e([]);return i&&(i=i.replace(/'/g,"\\'"),n=s?e(s).find("[name='"+i+"'][type=radio]"):e("[name='"+i+"'][type=radio]",t.ownerDocument).filter(function(){return!this.form})),n};e.widget("ui.button",{version:"1.11.2",defaultElement:"<button>",options:{disabled:null,text:!0,label:null,icons:{primary:null,secondary:null}},_create:function(){this.element.closest("form").unbind("reset"+this.eventNamespace).bind("reset"+this.eventNamespace,m),"boolean"!=typeof this.options.disabled?this.options.disabled=!!this.element.prop("disabled"):this.element.prop("disabled",this.options.disabled),this._determineButtonType(),this.hasTitle=!!this.buttonElement.attr("title");var t=this,i=this.options,s="checkbox"===this.type||"radio"===this.type,n=s?"":"ui-state-active";null===i.label&&(i.label="input"===this.type?this.buttonElement.val():this.buttonElement.html()),this._hoverable(this.buttonElement),this.buttonElement.addClass(p).attr("role","button").bind("mouseenter"+this.eventNamespace,function(){i.disabled||this===c&&e(this).addClass("ui-state-active")}).bind("mouseleave"+this.eventNamespace,function(){i.disabled||e(this).removeClass(n)}).bind("click"+this.eventNamespace,function(e){i.disabled&&(e.preventDefault(),e.stopImmediatePropagation())}),this._on({focus:function(){this.buttonElement.addClass("ui-state-focus")},blur:function(){this.buttonElement.removeClass("ui-state-focus")}}),s&&this.element.bind("change"+this.eventNamespace,function(){t.refresh()}),"checkbox"===this.type?this.buttonElement.bind("click"+this.eventNamespace,function(){return i.disabled?!1:void 0}):"radio"===this.type?this.buttonElement.bind("click"+this.eventNamespace,function(){if(i.disabled)return!1;e(this).addClass("ui-state-active"),t.buttonElement.attr("aria-pressed","true");var s=t.element[0];g(s).not(s).map(function(){return e(this).button("widget")[0]}).removeClass("ui-state-active").attr("aria-pressed","false")}):(this.buttonElement.bind("mousedown"+this.eventNamespace,function(){return i.disabled?!1:(e(this).addClass("ui-state-active"),c=this,t.document.one("mouseup",function(){c=null}),void 0)}).bind("mouseup"+this.eventNamespace,function(){return i.disabled?!1:(e(this).removeClass("ui-state-active"),void 0)}).bind("keydown"+this.eventNamespace,function(t){return i.disabled?!1:((t.keyCode===e.ui.keyCode.SPACE||t.keyCode===e.ui.keyCode.ENTER)&&e(this).addClass("ui-state-active"),void 0)}).bind("keyup"+this.eventNamespace+" blur"+this.eventNamespace,function(){e(this).removeClass("ui-state-active")}),this.buttonElement.is("a")&&this.buttonElement.keyup(function(t){t.keyCode===e.ui.keyCode.SPACE&&e(this).click()})),this._setOption("disabled",i.disabled),this._resetButton()},_determineButtonType:function(){var e,t,i;this.type=this.element.is("[type=checkbox]")?"checkbox":this.element.is("[type=radio]")?"radio":this.element.is("input")?"input":"button","checkbox"===this.type||"radio"===this.type?(e=this.element.parents().last(),t="label[for='"+this.element.attr("id")+"']",this.buttonElement=e.find(t),this.buttonElement.length||(e=e.length?e.siblings():this.element.siblings(),this.buttonElement=e.filter(t),this.buttonElement.length||(this.buttonElement=e.find(t))),this.element.addClass("ui-helper-hidden-accessible"),i=this.element.is(":checked"),i&&this.buttonElement.addClass("ui-state-active"),this.buttonElement.prop("aria-pressed",i)):this.buttonElement=this.element},widget:function(){return this.buttonElement},_destroy:function(){this.element.removeClass("ui-helper-hidden-accessible"),this.buttonElement.removeClass(p+" ui-state-active "+f).removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html()),this.hasTitle||this.buttonElement.removeAttr("title")},_setOption:function(e,t){return this._super(e,t),"disabled"===e?(this.widget().toggleClass("ui-state-disabled",!!t),this.element.prop("disabled",!!t),t&&("checkbox"===this.type||"radio"===this.type?this.buttonElement.removeClass("ui-state-focus"):this.buttonElement.removeClass("ui-state-focus ui-state-active")),void 0):(this._resetButton(),void 0)},refresh:function(){var t=this.element.is("input, button")?this.element.is(":disabled"):this.element.hasClass("ui-button-disabled");t!==this.options.disabled&&this._setOption("disabled",t),"radio"===this.type?g(this.element[0]).each(function(){e(this).is(":checked")?e(this).button("widget").addClass("ui-state-active").attr("aria-pressed","true"):e(this).button("widget").removeClass("ui-state-active").attr("aria-pressed","false")}):"checkbox"===this.type&&(this.element.is(":checked")?this.buttonElement.addClass("ui-state-active").attr("aria-pressed","true"):this.buttonElement.removeClass("ui-state-active").attr("aria-pressed","false"))},_resetButton:function(){if("input"===this.type)return this.options.label&&this.element.val(this.options.label),void 0;var t=this.buttonElement.removeClass(f),i=e("<span></span>",this.document[0]).addClass("ui-button-text").html(this.options.label).appendTo(t.empty()).text(),s=this.options.icons,n=s.primary&&s.secondary,a=[];s.primary||s.secondary?(this.options.text&&a.push("ui-button-text-icon"+(n?"s":s.primary?"-primary":"-secondary")),s.primary&&t.prepend("<span class='ui-button-icon-primary ui-icon "+s.primary+"'></span>"),s.secondary&&t.append("<span class='ui-button-icon-secondary ui-icon "+s.secondary+"'></span>"),this.options.text||(a.push(n?"ui-button-icons-only":"ui-button-icon-only"),this.hasTitle||t.attr("title",e.trim(i)))):a.push("ui-button-text-only"),t.addClass(a.join(" "))}}),e.widget("ui.buttonset",{version:"1.11.2",options:{items:"button, input[type=button], input[type=submit], input[type=reset], input[type=checkbox], input[type=radio], a, :data(ui-button)"},_create:function(){this.element.addClass("ui-buttonset")},_init:function(){this.refresh()},_setOption:function(e,t){"disabled"===e&&this.buttons.button("option",e,t),this._super(e,t)},refresh:function(){var t="rtl"===this.element.css("direction"),i=this.element.find(this.options.items),s=i.filter(":ui-button");i.not(":ui-button").button(),s.button("refresh"),this.buttons=i.map(function(){return e(this).button("widget")[0]}).removeClass("ui-corner-all ui-corner-left ui-corner-right").filter(":first").addClass(t?"ui-corner-right":"ui-corner-left").end().filter(":last").addClass(t?"ui-corner-left":"ui-corner-right").end().end()},_destroy:function(){this.element.removeClass("ui-buttonset"),this.buttons.map(function(){return e(this).button("widget")[0]}).removeClass("ui-corner-left ui-corner-right").end().button("destroy")}}),e.ui.button,e.extend(e.ui,{datepicker:{version:"1.11.2"}});var v;e.extend(n.prototype,{markerClassName:"hasDatepicker",maxRows:4,_widgetDatepicker:function(){return this.dpDiv},setDefaults:function(e){return r(this._defaults,e||{}),this},_attachDatepicker:function(t,i){var s,n,a;s=t.nodeName.toLowerCase(),n="div"===s||"span"===s,t.id||(this.uuid+=1,t.id="dp"+this.uuid),a=this._newInst(e(t),n),a.settings=e.extend({},i||{}),"input"===s?this._connectDatepicker(t,a):n&&this._inlineDatepicker(t,a)},_newInst:function(t,i){var s=t[0].id.replace(/([^A-Za-z0-9_\-])/g,"\\\\$1");return{id:s,input:t,selectedDay:0,selectedMonth:0,selectedYear:0,drawMonth:0,drawYear:0,inline:i,dpDiv:i?a(e("<div class='"+this._inlineClass+" ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")):this.dpDiv}},_connectDatepicker:function(t,i){var s=e(t);i.append=e([]),i.trigger=e([]),s.hasClass(this.markerClassName)||(this._attachments(s,i),s.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp),this._autoSize(i),e.data(t,"datepicker",i),i.settings.disabled&&this._disableDatepicker(t))},_attachments:function(t,i){var s,n,a,o=this._get(i,"appendText"),r=this._get(i,"isRTL");i.append&&i.append.remove(),o&&(i.append=e("<span class='"+this._appendClass+"'>"+o+"</span>"),t[r?"before":"after"](i.append)),t.unbind("focus",this._showDatepicker),i.trigger&&i.trigger.remove(),s=this._get(i,"showOn"),("focus"===s||"both"===s)&&t.focus(this._showDatepicker),("button"===s||"both"===s)&&(n=this._get(i,"buttonText"),a=this._get(i,"buttonImage"),i.trigger=e(this._get(i,"buttonImageOnly")?e("<img/>").addClass(this._triggerClass).attr({src:a,alt:n,title:n}):e("<button type='button'></button>").addClass(this._triggerClass).html(a?e("<img/>").attr({src:a,alt:n,title:n}):n)),t[r?"before":"after"](i.trigger),i.trigger.click(function(){return e.datepicker._datepickerShowing&&e.datepicker._lastInput===t[0]?e.datepicker._hideDatepicker():e.datepicker._datepickerShowing&&e.datepicker._lastInput!==t[0]?(e.datepicker._hideDatepicker(),e.datepicker._showDatepicker(t[0])):e.datepicker._showDatepicker(t[0]),!1}))},_autoSize:function(e){if(this._get(e,"autoSize")&&!e.inline){var t,i,s,n,a=new Date(2009,11,20),o=this._get(e,"dateFormat");o.match(/[DM]/)&&(t=function(e){for(i=0,s=0,n=0;e.length>n;n++)e[n].length>i&&(i=e[n].length,s=n);return s},a.setMonth(t(this._get(e,o.match(/MM/)?"monthNames":"monthNamesShort"))),a.setDate(t(this._get(e,o.match(/DD/)?"dayNames":"dayNamesShort"))+20-a.getDay())),e.input.attr("size",this._formatDate(e,a).length)}},_inlineDatepicker:function(t,i){var s=e(t);s.hasClass(this.markerClassName)||(s.addClass(this.markerClassName).append(i.dpDiv),e.data(t,"datepicker",i),this._setDate(i,this._getDefaultDate(i),!0),this._updateDatepicker(i),this._updateAlternate(i),i.settings.disabled&&this._disableDatepicker(t),i.dpDiv.css("display","block"))},_dialogDatepicker:function(t,i,s,n,a){var o,h,l,u,d,c=this._dialogInst;return c||(this.uuid+=1,o="dp"+this.uuid,this._dialogInput=e("<input type='text' id='"+o+"' style='position: absolute; top: -100px; width: 0px;'/>"),this._dialogInput.keydown(this._doKeyDown),e("body").append(this._dialogInput),c=this._dialogInst=this._newInst(this._dialogInput,!1),c.settings={},e.data(this._dialogInput[0],"datepicker",c)),r(c.settings,n||{}),i=i&&i.constructor===Date?this._formatDate(c,i):i,this._dialogInput.val(i),this._pos=a?a.length?a:[a.pageX,a.pageY]:null,this._pos||(h=document.documentElement.clientWidth,l=document.documentElement.clientHeight,u=document.documentElement.scrollLeft||document.body.scrollLeft,d=document.documentElement.scrollTop||document.body.scrollTop,this._pos=[h/2-100+u,l/2-150+d]),this._dialogInput.css("left",this._pos[0]+20+"px").css("top",this._pos[1]+"px"),c.settings.onSelect=s,this._inDialog=!0,this.dpDiv.addClass(this._dialogClass),this._showDatepicker(this._dialogInput[0]),e.blockUI&&e.blockUI(this.dpDiv),e.data(this._dialogInput[0],"datepicker",c),this},_destroyDatepicker:function(t){var i,s=e(t),n=e.data(t,"datepicker");s.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),e.removeData(t,"datepicker"),"input"===i?(n.append.remove(),n.trigger.remove(),s.removeClass(this.markerClassName).unbind("focus",this._showDatepicker).unbind("keydown",this._doKeyDown).unbind("keypress",this._doKeyPress).unbind("keyup",this._doKeyUp)):("div"===i||"span"===i)&&s.removeClass(this.markerClassName).empty())
},_enableDatepicker:function(t){var i,s,n=e(t),a=e.data(t,"datepicker");n.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),"input"===i?(t.disabled=!1,a.trigger.filter("button").each(function(){this.disabled=!1}).end().filter("img").css({opacity:"1.0",cursor:""})):("div"===i||"span"===i)&&(s=n.children("."+this._inlineClass),s.children().removeClass("ui-state-disabled"),s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",!1)),this._disabledInputs=e.map(this._disabledInputs,function(e){return e===t?null:e}))},_disableDatepicker:function(t){var i,s,n=e(t),a=e.data(t,"datepicker");n.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),"input"===i?(t.disabled=!0,a.trigger.filter("button").each(function(){this.disabled=!0}).end().filter("img").css({opacity:"0.5",cursor:"default"})):("div"===i||"span"===i)&&(s=n.children("."+this._inlineClass),s.children().addClass("ui-state-disabled"),s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",!0)),this._disabledInputs=e.map(this._disabledInputs,function(e){return e===t?null:e}),this._disabledInputs[this._disabledInputs.length]=t)},_isDisabledDatepicker:function(e){if(!e)return!1;for(var t=0;this._disabledInputs.length>t;t++)if(this._disabledInputs[t]===e)return!0;return!1},_getInst:function(t){try{return e.data(t,"datepicker")}catch(i){throw"Missing instance data for this datepicker"}},_optionDatepicker:function(t,i,s){var n,a,o,h,l=this._getInst(t);return 2===arguments.length&&"string"==typeof i?"defaults"===i?e.extend({},e.datepicker._defaults):l?"all"===i?e.extend({},l.settings):this._get(l,i):null:(n=i||{},"string"==typeof i&&(n={},n[i]=s),l&&(this._curInst===l&&this._hideDatepicker(),a=this._getDateDatepicker(t,!0),o=this._getMinMaxDate(l,"min"),h=this._getMinMaxDate(l,"max"),r(l.settings,n),null!==o&&void 0!==n.dateFormat&&void 0===n.minDate&&(l.settings.minDate=this._formatDate(l,o)),null!==h&&void 0!==n.dateFormat&&void 0===n.maxDate&&(l.settings.maxDate=this._formatDate(l,h)),"disabled"in n&&(n.disabled?this._disableDatepicker(t):this._enableDatepicker(t)),this._attachments(e(t),l),this._autoSize(l),this._setDate(l,a),this._updateAlternate(l),this._updateDatepicker(l)),void 0)},_changeDatepicker:function(e,t,i){this._optionDatepicker(e,t,i)},_refreshDatepicker:function(e){var t=this._getInst(e);t&&this._updateDatepicker(t)},_setDateDatepicker:function(e,t){var i=this._getInst(e);i&&(this._setDate(i,t),this._updateDatepicker(i),this._updateAlternate(i))},_getDateDatepicker:function(e,t){var i=this._getInst(e);return i&&!i.inline&&this._setDateFromField(i,t),i?this._getDate(i):null},_doKeyDown:function(t){var i,s,n,a=e.datepicker._getInst(t.target),o=!0,r=a.dpDiv.is(".ui-datepicker-rtl");if(a._keyEvent=!0,e.datepicker._datepickerShowing)switch(t.keyCode){case 9:e.datepicker._hideDatepicker(),o=!1;break;case 13:return n=e("td."+e.datepicker._dayOverClass+":not(."+e.datepicker._currentClass+")",a.dpDiv),n[0]&&e.datepicker._selectDay(t.target,a.selectedMonth,a.selectedYear,n[0]),i=e.datepicker._get(a,"onSelect"),i?(s=e.datepicker._formatDate(a),i.apply(a.input?a.input[0]:null,[s,a])):e.datepicker._hideDatepicker(),!1;case 27:e.datepicker._hideDatepicker();break;case 33:e.datepicker._adjustDate(t.target,t.ctrlKey?-e.datepicker._get(a,"stepBigMonths"):-e.datepicker._get(a,"stepMonths"),"M");break;case 34:e.datepicker._adjustDate(t.target,t.ctrlKey?+e.datepicker._get(a,"stepBigMonths"):+e.datepicker._get(a,"stepMonths"),"M");break;case 35:(t.ctrlKey||t.metaKey)&&e.datepicker._clearDate(t.target),o=t.ctrlKey||t.metaKey;break;case 36:(t.ctrlKey||t.metaKey)&&e.datepicker._gotoToday(t.target),o=t.ctrlKey||t.metaKey;break;case 37:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,r?1:-1,"D"),o=t.ctrlKey||t.metaKey,t.originalEvent.altKey&&e.datepicker._adjustDate(t.target,t.ctrlKey?-e.datepicker._get(a,"stepBigMonths"):-e.datepicker._get(a,"stepMonths"),"M");break;case 38:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,-7,"D"),o=t.ctrlKey||t.metaKey;break;case 39:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,r?-1:1,"D"),o=t.ctrlKey||t.metaKey,t.originalEvent.altKey&&e.datepicker._adjustDate(t.target,t.ctrlKey?+e.datepicker._get(a,"stepBigMonths"):+e.datepicker._get(a,"stepMonths"),"M");break;case 40:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,7,"D"),o=t.ctrlKey||t.metaKey;break;default:o=!1}else 36===t.keyCode&&t.ctrlKey?e.datepicker._showDatepicker(this):o=!1;o&&(t.preventDefault(),t.stopPropagation())},_doKeyPress:function(t){var i,s,n=e.datepicker._getInst(t.target);return e.datepicker._get(n,"constrainInput")?(i=e.datepicker._possibleChars(e.datepicker._get(n,"dateFormat")),s=String.fromCharCode(null==t.charCode?t.keyCode:t.charCode),t.ctrlKey||t.metaKey||" ">s||!i||i.indexOf(s)>-1):void 0},_doKeyUp:function(t){var i,s=e.datepicker._getInst(t.target);if(s.input.val()!==s.lastVal)try{i=e.datepicker.parseDate(e.datepicker._get(s,"dateFormat"),s.input?s.input.val():null,e.datepicker._getFormatConfig(s)),i&&(e.datepicker._setDateFromField(s),e.datepicker._updateAlternate(s),e.datepicker._updateDatepicker(s))}catch(n){}return!0},_showDatepicker:function(t){if(t=t.target||t,"input"!==t.nodeName.toLowerCase()&&(t=e("input",t.parentNode)[0]),!e.datepicker._isDisabledDatepicker(t)&&e.datepicker._lastInput!==t){var i,n,a,o,h,l,u;i=e.datepicker._getInst(t),e.datepicker._curInst&&e.datepicker._curInst!==i&&(e.datepicker._curInst.dpDiv.stop(!0,!0),i&&e.datepicker._datepickerShowing&&e.datepicker._hideDatepicker(e.datepicker._curInst.input[0])),n=e.datepicker._get(i,"beforeShow"),a=n?n.apply(t,[t,i]):{},a!==!1&&(r(i.settings,a),i.lastVal=null,e.datepicker._lastInput=t,e.datepicker._setDateFromField(i),e.datepicker._inDialog&&(t.value=""),e.datepicker._pos||(e.datepicker._pos=e.datepicker._findPos(t),e.datepicker._pos[1]+=t.offsetHeight),o=!1,e(t).parents().each(function(){return o|="fixed"===e(this).css("position"),!o}),h={left:e.datepicker._pos[0],top:e.datepicker._pos[1]},e.datepicker._pos=null,i.dpDiv.empty(),i.dpDiv.css({position:"absolute",display:"block",top:"-1000px"}),e.datepicker._updateDatepicker(i),h=e.datepicker._checkOffset(i,h,o),i.dpDiv.css({position:e.datepicker._inDialog&&e.blockUI?"static":o?"fixed":"absolute",display:"none",left:h.left+"px",top:h.top+"px"}),i.inline||(l=e.datepicker._get(i,"showAnim"),u=e.datepicker._get(i,"duration"),i.dpDiv.css("z-index",s(e(t))+1),e.datepicker._datepickerShowing=!0,e.effects&&e.effects.effect[l]?i.dpDiv.show(l,e.datepicker._get(i,"showOptions"),u):i.dpDiv[l||"show"](l?u:null),e.datepicker._shouldFocusInput(i)&&i.input.focus(),e.datepicker._curInst=i))}},_updateDatepicker:function(t){this.maxRows=4,v=t,t.dpDiv.empty().append(this._generateHTML(t)),this._attachHandlers(t);var i,s=this._getNumberOfMonths(t),n=s[1],a=17,r=t.dpDiv.find("."+this._dayOverClass+" a");r.length>0&&o.apply(r.get(0)),t.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""),n>1&&t.dpDiv.addClass("ui-datepicker-multi-"+n).css("width",a*n+"em"),t.dpDiv[(1!==s[0]||1!==s[1]?"add":"remove")+"Class"]("ui-datepicker-multi"),t.dpDiv[(this._get(t,"isRTL")?"add":"remove")+"Class"]("ui-datepicker-rtl"),t===e.datepicker._curInst&&e.datepicker._datepickerShowing&&e.datepicker._shouldFocusInput(t)&&t.input.focus(),t.yearshtml&&(i=t.yearshtml,setTimeout(function(){i===t.yearshtml&&t.yearshtml&&t.dpDiv.find("select.ui-datepicker-year:first").replaceWith(t.yearshtml),i=t.yearshtml=null},0))},_shouldFocusInput:function(e){return e.input&&e.input.is(":visible")&&!e.input.is(":disabled")&&!e.input.is(":focus")},_checkOffset:function(t,i,s){var n=t.dpDiv.outerWidth(),a=t.dpDiv.outerHeight(),o=t.input?t.input.outerWidth():0,r=t.input?t.input.outerHeight():0,h=document.documentElement.clientWidth+(s?0:e(document).scrollLeft()),l=document.documentElement.clientHeight+(s?0:e(document).scrollTop());return i.left-=this._get(t,"isRTL")?n-o:0,i.left-=s&&i.left===t.input.offset().left?e(document).scrollLeft():0,i.top-=s&&i.top===t.input.offset().top+r?e(document).scrollTop():0,i.left-=Math.min(i.left,i.left+n>h&&h>n?Math.abs(i.left+n-h):0),i.top-=Math.min(i.top,i.top+a>l&&l>a?Math.abs(a+r):0),i},_findPos:function(t){for(var i,s=this._getInst(t),n=this._get(s,"isRTL");t&&("hidden"===t.type||1!==t.nodeType||e.expr.filters.hidden(t));)t=t[n?"previousSibling":"nextSibling"];return i=e(t).offset(),[i.left,i.top]},_hideDatepicker:function(t){var i,s,n,a,o=this._curInst;!o||t&&o!==e.data(t,"datepicker")||this._datepickerShowing&&(i=this._get(o,"showAnim"),s=this._get(o,"duration"),n=function(){e.datepicker._tidyDialog(o)},e.effects&&(e.effects.effect[i]||e.effects[i])?o.dpDiv.hide(i,e.datepicker._get(o,"showOptions"),s,n):o.dpDiv["slideDown"===i?"slideUp":"fadeIn"===i?"fadeOut":"hide"](i?s:null,n),i||n(),this._datepickerShowing=!1,a=this._get(o,"onClose"),a&&a.apply(o.input?o.input[0]:null,[o.input?o.input.val():"",o]),this._lastInput=null,this._inDialog&&(this._dialogInput.css({position:"absolute",left:"0",top:"-100px"}),e.blockUI&&(e.unblockUI(),e("body").append(this.dpDiv))),this._inDialog=!1)},_tidyDialog:function(e){e.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")},_checkExternalClick:function(t){if(e.datepicker._curInst){var i=e(t.target),s=e.datepicker._getInst(i[0]);(i[0].id!==e.datepicker._mainDivId&&0===i.parents("#"+e.datepicker._mainDivId).length&&!i.hasClass(e.datepicker.markerClassName)&&!i.closest("."+e.datepicker._triggerClass).length&&e.datepicker._datepickerShowing&&(!e.datepicker._inDialog||!e.blockUI)||i.hasClass(e.datepicker.markerClassName)&&e.datepicker._curInst!==s)&&e.datepicker._hideDatepicker()}},_adjustDate:function(t,i,s){var n=e(t),a=this._getInst(n[0]);this._isDisabledDatepicker(n[0])||(this._adjustInstDate(a,i+("M"===s?this._get(a,"showCurrentAtPos"):0),s),this._updateDatepicker(a))},_gotoToday:function(t){var i,s=e(t),n=this._getInst(s[0]);this._get(n,"gotoCurrent")&&n.currentDay?(n.selectedDay=n.currentDay,n.drawMonth=n.selectedMonth=n.currentMonth,n.drawYear=n.selectedYear=n.currentYear):(i=new Date,n.selectedDay=i.getDate(),n.drawMonth=n.selectedMonth=i.getMonth(),n.drawYear=n.selectedYear=i.getFullYear()),this._notifyChange(n),this._adjustDate(s)},_selectMonthYear:function(t,i,s){var n=e(t),a=this._getInst(n[0]);a["selected"+("M"===s?"Month":"Year")]=a["draw"+("M"===s?"Month":"Year")]=parseInt(i.options[i.selectedIndex].value,10),this._notifyChange(a),this._adjustDate(n)},_selectDay:function(t,i,s,n){var a,o=e(t);e(n).hasClass(this._unselectableClass)||this._isDisabledDatepicker(o[0])||(a=this._getInst(o[0]),a.selectedDay=a.currentDay=e("a",n).html(),a.selectedMonth=a.currentMonth=i,a.selectedYear=a.currentYear=s,this._selectDate(t,this._formatDate(a,a.currentDay,a.currentMonth,a.currentYear)))},_clearDate:function(t){var i=e(t);this._selectDate(i,"")},_selectDate:function(t,i){var s,n=e(t),a=this._getInst(n[0]);i=null!=i?i:this._formatDate(a),a.input&&a.input.val(i),this._updateAlternate(a),s=this._get(a,"onSelect"),s?s.apply(a.input?a.input[0]:null,[i,a]):a.input&&a.input.trigger("change"),a.inline?this._updateDatepicker(a):(this._hideDatepicker(),this._lastInput=a.input[0],"object"!=typeof a.input[0]&&a.input.focus(),this._lastInput=null)},_updateAlternate:function(t){var i,s,n,a=this._get(t,"altField");a&&(i=this._get(t,"altFormat")||this._get(t,"dateFormat"),s=this._getDate(t),n=this.formatDate(i,s,this._getFormatConfig(t)),e(a).each(function(){e(this).val(n)}))},noWeekends:function(e){var t=e.getDay();return[t>0&&6>t,""]},iso8601Week:function(e){var t,i=new Date(e.getTime());return i.setDate(i.getDate()+4-(i.getDay()||7)),t=i.getTime(),i.setMonth(0),i.setDate(1),Math.floor(Math.round((t-i)/864e5)/7)+1},parseDate:function(t,i,s){if(null==t||null==i)throw"Invalid arguments";if(i="object"==typeof i?""+i:i+"",""===i)return null;var n,a,o,r,h=0,l=(s?s.shortYearCutoff:null)||this._defaults.shortYearCutoff,u="string"!=typeof l?l:(new Date).getFullYear()%100+parseInt(l,10),d=(s?s.dayNamesShort:null)||this._defaults.dayNamesShort,c=(s?s.dayNames:null)||this._defaults.dayNames,p=(s?s.monthNamesShort:null)||this._defaults.monthNamesShort,f=(s?s.monthNames:null)||this._defaults.monthNames,m=-1,g=-1,v=-1,y=-1,b=!1,_=function(e){var i=t.length>n+1&&t.charAt(n+1)===e;return i&&n++,i},x=function(e){var t=_(e),s="@"===e?14:"!"===e?20:"y"===e&&t?4:"o"===e?3:2,n="y"===e?s:1,a=RegExp("^\\d{"+n+","+s+"}"),o=i.substring(h).match(a);if(!o)throw"Missing number at position "+h;return h+=o[0].length,parseInt(o[0],10)},w=function(t,s,n){var a=-1,o=e.map(_(t)?n:s,function(e,t){return[[t,e]]}).sort(function(e,t){return-(e[1].length-t[1].length)});if(e.each(o,function(e,t){var s=t[1];return i.substr(h,s.length).toLowerCase()===s.toLowerCase()?(a=t[0],h+=s.length,!1):void 0}),-1!==a)return a+1;throw"Unknown name at position "+h},k=function(){if(i.charAt(h)!==t.charAt(n))throw"Unexpected literal at position "+h;h++};for(n=0;t.length>n;n++)if(b)"'"!==t.charAt(n)||_("'")?k():b=!1;else switch(t.charAt(n)){case"d":v=x("d");break;case"D":w("D",d,c);break;case"o":y=x("o");break;case"m":g=x("m");break;case"M":g=w("M",p,f);break;case"y":m=x("y");break;case"@":r=new Date(x("@")),m=r.getFullYear(),g=r.getMonth()+1,v=r.getDate();break;case"!":r=new Date((x("!")-this._ticksTo1970)/1e4),m=r.getFullYear(),g=r.getMonth()+1,v=r.getDate();break;case"'":_("'")?k():b=!0;break;default:k()}if(i.length>h&&(o=i.substr(h),!/^\s+/.test(o)))throw"Extra/unparsed characters found in date: "+o;if(-1===m?m=(new Date).getFullYear():100>m&&(m+=(new Date).getFullYear()-(new Date).getFullYear()%100+(u>=m?0:-100)),y>-1)for(g=1,v=y;;){if(a=this._getDaysInMonth(m,g-1),a>=v)break;g++,v-=a}if(r=this._daylightSavingAdjust(new Date(m,g-1,v)),r.getFullYear()!==m||r.getMonth()+1!==g||r.getDate()!==v)throw"Invalid date";return r},ATOM:"yy-mm-dd",COOKIE:"D, dd M yy",ISO_8601:"yy-mm-dd",RFC_822:"D, d M y",RFC_850:"DD, dd-M-y",RFC_1036:"D, d M y",RFC_1123:"D, d M yy",RFC_2822:"D, d M yy",RSS:"D, d M y",TICKS:"!",TIMESTAMP:"@",W3C:"yy-mm-dd",_ticksTo1970:1e7*60*60*24*(718685+Math.floor(492.5)-Math.floor(19.7)+Math.floor(4.925)),formatDate:function(e,t,i){if(!t)return"";var s,n=(i?i.dayNamesShort:null)||this._defaults.dayNamesShort,a=(i?i.dayNames:null)||this._defaults.dayNames,o=(i?i.monthNamesShort:null)||this._defaults.monthNamesShort,r=(i?i.monthNames:null)||this._defaults.monthNames,h=function(t){var i=e.length>s+1&&e.charAt(s+1)===t;return i&&s++,i},l=function(e,t,i){var s=""+t;if(h(e))for(;i>s.length;)s="0"+s;return s},u=function(e,t,i,s){return h(e)?s[t]:i[t]},d="",c=!1;if(t)for(s=0;e.length>s;s++)if(c)"'"!==e.charAt(s)||h("'")?d+=e.charAt(s):c=!1;else switch(e.charAt(s)){case"d":d+=l("d",t.getDate(),2);break;case"D":d+=u("D",t.getDay(),n,a);break;case"o":d+=l("o",Math.round((new Date(t.getFullYear(),t.getMonth(),t.getDate()).getTime()-new Date(t.getFullYear(),0,0).getTime())/864e5),3);break;case"m":d+=l("m",t.getMonth()+1,2);break;case"M":d+=u("M",t.getMonth(),o,r);break;case"y":d+=h("y")?t.getFullYear():(10>t.getYear()%100?"0":"")+t.getYear()%100;break;case"@":d+=t.getTime();break;case"!":d+=1e4*t.getTime()+this._ticksTo1970;break;case"'":h("'")?d+="'":c=!0;break;default:d+=e.charAt(s)}return d},_possibleChars:function(e){var t,i="",s=!1,n=function(i){var s=e.length>t+1&&e.charAt(t+1)===i;return s&&t++,s};for(t=0;e.length>t;t++)if(s)"'"!==e.charAt(t)||n("'")?i+=e.charAt(t):s=!1;else switch(e.charAt(t)){case"d":case"m":case"y":case"@":i+="0123456789";break;case"D":case"M":return null;case"'":n("'")?i+="'":s=!0;break;default:i+=e.charAt(t)}return i},_get:function(e,t){return void 0!==e.settings[t]?e.settings[t]:this._defaults[t]},_setDateFromField:function(e,t){if(e.input.val()!==e.lastVal){var i=this._get(e,"dateFormat"),s=e.lastVal=e.input?e.input.val():null,n=this._getDefaultDate(e),a=n,o=this._getFormatConfig(e);try{a=this.parseDate(i,s,o)||n}catch(r){s=t?"":s}e.selectedDay=a.getDate(),e.drawMonth=e.selectedMonth=a.getMonth(),e.drawYear=e.selectedYear=a.getFullYear(),e.currentDay=s?a.getDate():0,e.currentMonth=s?a.getMonth():0,e.currentYear=s?a.getFullYear():0,this._adjustInstDate(e)}},_getDefaultDate:function(e){return this._restrictMinMax(e,this._determineDate(e,this._get(e,"defaultDate"),new Date))},_determineDate:function(t,i,s){var n=function(e){var t=new Date;return t.setDate(t.getDate()+e),t},a=function(i){try{return e.datepicker.parseDate(e.datepicker._get(t,"dateFormat"),i,e.datepicker._getFormatConfig(t))}catch(s){}for(var n=(i.toLowerCase().match(/^c/)?e.datepicker._getDate(t):null)||new Date,a=n.getFullYear(),o=n.getMonth(),r=n.getDate(),h=/([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g,l=h.exec(i);l;){switch(l[2]||"d"){case"d":case"D":r+=parseInt(l[1],10);break;case"w":case"W":r+=7*parseInt(l[1],10);break;case"m":case"M":o+=parseInt(l[1],10),r=Math.min(r,e.datepicker._getDaysInMonth(a,o));break;case"y":case"Y":a+=parseInt(l[1],10),r=Math.min(r,e.datepicker._getDaysInMonth(a,o))}l=h.exec(i)}return new Date(a,o,r)},o=null==i||""===i?s:"string"==typeof i?a(i):"number"==typeof i?isNaN(i)?s:n(i):new Date(i.getTime());return o=o&&"Invalid Date"==""+o?s:o,o&&(o.setHours(0),o.setMinutes(0),o.setSeconds(0),o.setMilliseconds(0)),this._daylightSavingAdjust(o)},_daylightSavingAdjust:function(e){return e?(e.setHours(e.getHours()>12?e.getHours()+2:0),e):null},_setDate:function(e,t,i){var s=!t,n=e.selectedMonth,a=e.selectedYear,o=this._restrictMinMax(e,this._determineDate(e,t,new Date));e.selectedDay=e.currentDay=o.getDate(),e.drawMonth=e.selectedMonth=e.currentMonth=o.getMonth(),e.drawYear=e.selectedYear=e.currentYear=o.getFullYear(),n===e.selectedMonth&&a===e.selectedYear||i||this._notifyChange(e),this._adjustInstDate(e),e.input&&e.input.val(s?"":this._formatDate(e))},_getDate:function(e){var t=!e.currentYear||e.input&&""===e.input.val()?null:this._daylightSavingAdjust(new Date(e.currentYear,e.currentMonth,e.currentDay));return t},_attachHandlers:function(t){var i=this._get(t,"stepMonths"),s="#"+t.id.replace(/\\\\/g,"\\");t.dpDiv.find("[data-handler]").map(function(){var t={prev:function(){e.datepicker._adjustDate(s,-i,"M")},next:function(){e.datepicker._adjustDate(s,+i,"M")},hide:function(){e.datepicker._hideDatepicker()},today:function(){e.datepicker._gotoToday(s)},selectDay:function(){return e.datepicker._selectDay(s,+this.getAttribute("data-month"),+this.getAttribute("data-year"),this),!1},selectMonth:function(){return e.datepicker._selectMonthYear(s,this,"M"),!1},selectYear:function(){return e.datepicker._selectMonthYear(s,this,"Y"),!1}};e(this).bind(this.getAttribute("data-event"),t[this.getAttribute("data-handler")])})},_generateHTML:function(e){var t,i,s,n,a,o,r,h,l,u,d,c,p,f,m,g,v,y,b,_,x,w,k,T,D,S,M,C,N,A,P,I,z,H,F,E,O,j,W,L=new Date,R=this._daylightSavingAdjust(new Date(L.getFullYear(),L.getMonth(),L.getDate())),Y=this._get(e,"isRTL"),B=this._get(e,"showButtonPanel"),J=this._get(e,"hideIfNoPrevNext"),q=this._get(e,"navigationAsDateFormat"),K=this._getNumberOfMonths(e),V=this._get(e,"showCurrentAtPos"),U=this._get(e,"stepMonths"),Q=1!==K[0]||1!==K[1],G=this._daylightSavingAdjust(e.currentDay?new Date(e.currentYear,e.currentMonth,e.currentDay):new Date(9999,9,9)),X=this._getMinMaxDate(e,"min"),$=this._getMinMaxDate(e,"max"),Z=e.drawMonth-V,et=e.drawYear;if(0>Z&&(Z+=12,et--),$)for(t=this._daylightSavingAdjust(new Date($.getFullYear(),$.getMonth()-K[0]*K[1]+1,$.getDate())),t=X&&X>t?X:t;this._daylightSavingAdjust(new Date(et,Z,1))>t;)Z--,0>Z&&(Z=11,et--);for(e.drawMonth=Z,e.drawYear=et,i=this._get(e,"prevText"),i=q?this.formatDate(i,this._daylightSavingAdjust(new Date(et,Z-U,1)),this._getFormatConfig(e)):i,s=this._canAdjustMonth(e,-1,et,Z)?"<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click' title='"+i+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"e":"w")+"'>"+i+"</span></a>":J?"":"<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='"+i+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"e":"w")+"'>"+i+"</span></a>",n=this._get(e,"nextText"),n=q?this.formatDate(n,this._daylightSavingAdjust(new Date(et,Z+U,1)),this._getFormatConfig(e)):n,a=this._canAdjustMonth(e,1,et,Z)?"<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click' title='"+n+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"w":"e")+"'>"+n+"</span></a>":J?"":"<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='"+n+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"w":"e")+"'>"+n+"</span></a>",o=this._get(e,"currentText"),r=this._get(e,"gotoCurrent")&&e.currentDay?G:R,o=q?this.formatDate(o,r,this._getFormatConfig(e)):o,h=e.inline?"":"<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>"+this._get(e,"closeText")+"</button>",l=B?"<div class='ui-datepicker-buttonpane ui-widget-content'>"+(Y?h:"")+(this._isInRange(e,r)?"<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'>"+o+"</button>":"")+(Y?"":h)+"</div>":"",u=parseInt(this._get(e,"firstDay"),10),u=isNaN(u)?0:u,d=this._get(e,"showWeek"),c=this._get(e,"dayNames"),p=this._get(e,"dayNamesMin"),f=this._get(e,"monthNames"),m=this._get(e,"monthNamesShort"),g=this._get(e,"beforeShowDay"),v=this._get(e,"showOtherMonths"),y=this._get(e,"selectOtherMonths"),b=this._getDefaultDate(e),_="",w=0;K[0]>w;w++){for(k="",this.maxRows=4,T=0;K[1]>T;T++){if(D=this._daylightSavingAdjust(new Date(et,Z,e.selectedDay)),S=" ui-corner-all",M="",Q){if(M+="<div class='ui-datepicker-group",K[1]>1)switch(T){case 0:M+=" ui-datepicker-group-first",S=" ui-corner-"+(Y?"right":"left");break;case K[1]-1:M+=" ui-datepicker-group-last",S=" ui-corner-"+(Y?"left":"right");break;default:M+=" ui-datepicker-group-middle",S=""}M+="'>"}for(M+="<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix"+S+"'>"+(/all|left/.test(S)&&0===w?Y?a:s:"")+(/all|right/.test(S)&&0===w?Y?s:a:"")+this._generateMonthYearHeader(e,Z,et,X,$,w>0||T>0,f,m)+"</div><table class='ui-datepicker-calendar'><thead>"+"<tr>",C=d?"<th class='ui-datepicker-week-col'>"+this._get(e,"weekHeader")+"</th>":"",x=0;7>x;x++)N=(x+u)%7,C+="<th scope='col'"+((x+u+6)%7>=5?" class='ui-datepicker-week-end'":"")+">"+"<span title='"+c[N]+"'>"+p[N]+"</span></th>";for(M+=C+"</tr></thead><tbody>",A=this._getDaysInMonth(et,Z),et===e.selectedYear&&Z===e.selectedMonth&&(e.selectedDay=Math.min(e.selectedDay,A)),P=(this._getFirstDayOfMonth(et,Z)-u+7)%7,I=Math.ceil((P+A)/7),z=Q?this.maxRows>I?this.maxRows:I:I,this.maxRows=z,H=this._daylightSavingAdjust(new Date(et,Z,1-P)),F=0;z>F;F++){for(M+="<tr>",E=d?"<td class='ui-datepicker-week-col'>"+this._get(e,"calculateWeek")(H)+"</td>":"",x=0;7>x;x++)O=g?g.apply(e.input?e.input[0]:null,[H]):[!0,""],j=H.getMonth()!==Z,W=j&&!y||!O[0]||X&&X>H||$&&H>$,E+="<td class='"+((x+u+6)%7>=5?" ui-datepicker-week-end":"")+(j?" ui-datepicker-other-month":"")+(H.getTime()===D.getTime()&&Z===e.selectedMonth&&e._keyEvent||b.getTime()===H.getTime()&&b.getTime()===D.getTime()?" "+this._dayOverClass:"")+(W?" "+this._unselectableClass+" ui-state-disabled":"")+(j&&!v?"":" "+O[1]+(H.getTime()===G.getTime()?" "+this._currentClass:"")+(H.getTime()===R.getTime()?" ui-datepicker-today":""))+"'"+(j&&!v||!O[2]?"":" title='"+O[2].replace(/'/g,"&#39;")+"'")+(W?"":" data-handler='selectDay' data-event='click' data-month='"+H.getMonth()+"' data-year='"+H.getFullYear()+"'")+">"+(j&&!v?"&#xa0;":W?"<span class='ui-state-default'>"+H.getDate()+"</span>":"<a class='ui-state-default"+(H.getTime()===R.getTime()?" ui-state-highlight":"")+(H.getTime()===G.getTime()?" ui-state-active":"")+(j?" ui-priority-secondary":"")+"' href='#'>"+H.getDate()+"</a>")+"</td>",H.setDate(H.getDate()+1),H=this._daylightSavingAdjust(H);M+=E+"</tr>"}Z++,Z>11&&(Z=0,et++),M+="</tbody></table>"+(Q?"</div>"+(K[0]>0&&T===K[1]-1?"<div class='ui-datepicker-row-break'></div>":""):""),k+=M}_+=k}return _+=l,e._keyEvent=!1,_},_generateMonthYearHeader:function(e,t,i,s,n,a,o,r){var h,l,u,d,c,p,f,m,g=this._get(e,"changeMonth"),v=this._get(e,"changeYear"),y=this._get(e,"showMonthAfterYear"),b="<div class='ui-datepicker-title'>",_="";if(a||!g)_+="<span class='ui-datepicker-month'>"+o[t]+"</span>";else{for(h=s&&s.getFullYear()===i,l=n&&n.getFullYear()===i,_+="<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>",u=0;12>u;u++)(!h||u>=s.getMonth())&&(!l||n.getMonth()>=u)&&(_+="<option value='"+u+"'"+(u===t?" selected='selected'":"")+">"+r[u]+"</option>");_+="</select>"}if(y||(b+=_+(!a&&g&&v?"":"&#xa0;")),!e.yearshtml)if(e.yearshtml="",a||!v)b+="<span class='ui-datepicker-year'>"+i+"</span>";else{for(d=this._get(e,"yearRange").split(":"),c=(new Date).getFullYear(),p=function(e){var t=e.match(/c[+\-].*/)?i+parseInt(e.substring(1),10):e.match(/[+\-].*/)?c+parseInt(e,10):parseInt(e,10);return isNaN(t)?c:t},f=p(d[0]),m=Math.max(f,p(d[1]||"")),f=s?Math.max(f,s.getFullYear()):f,m=n?Math.min(m,n.getFullYear()):m,e.yearshtml+="<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>";m>=f;f++)e.yearshtml+="<option value='"+f+"'"+(f===i?" selected='selected'":"")+">"+f+"</option>";e.yearshtml+="</select>",b+=e.yearshtml,e.yearshtml=null}return b+=this._get(e,"yearSuffix"),y&&(b+=(!a&&g&&v?"":"&#xa0;")+_),b+="</div>"},_adjustInstDate:function(e,t,i){var s=e.drawYear+("Y"===i?t:0),n=e.drawMonth+("M"===i?t:0),a=Math.min(e.selectedDay,this._getDaysInMonth(s,n))+("D"===i?t:0),o=this._restrictMinMax(e,this._daylightSavingAdjust(new Date(s,n,a)));e.selectedDay=o.getDate(),e.drawMonth=e.selectedMonth=o.getMonth(),e.drawYear=e.selectedYear=o.getFullYear(),("M"===i||"Y"===i)&&this._notifyChange(e)},_restrictMinMax:function(e,t){var i=this._getMinMaxDate(e,"min"),s=this._getMinMaxDate(e,"max"),n=i&&i>t?i:t;return s&&n>s?s:n},_notifyChange:function(e){var t=this._get(e,"onChangeMonthYear");t&&t.apply(e.input?e.input[0]:null,[e.selectedYear,e.selectedMonth+1,e])},_getNumberOfMonths:function(e){var t=this._get(e,"numberOfMonths");return null==t?[1,1]:"number"==typeof t?[1,t]:t},_getMinMaxDate:function(e,t){return this._determineDate(e,this._get(e,t+"Date"),null)},_getDaysInMonth:function(e,t){return 32-this._daylightSavingAdjust(new Date(e,t,32)).getDate()},_getFirstDayOfMonth:function(e,t){return new Date(e,t,1).getDay()},_canAdjustMonth:function(e,t,i,s){var n=this._getNumberOfMonths(e),a=this._daylightSavingAdjust(new Date(i,s+(0>t?t:n[0]*n[1]),1));return 0>t&&a.setDate(this._getDaysInMonth(a.getFullYear(),a.getMonth())),this._isInRange(e,a)},_isInRange:function(e,t){var i,s,n=this._getMinMaxDate(e,"min"),a=this._getMinMaxDate(e,"max"),o=null,r=null,h=this._get(e,"yearRange");return h&&(i=h.split(":"),s=(new Date).getFullYear(),o=parseInt(i[0],10),r=parseInt(i[1],10),i[0].match(/[+\-].*/)&&(o+=s),i[1].match(/[+\-].*/)&&(r+=s)),(!n||t.getTime()>=n.getTime())&&(!a||t.getTime()<=a.getTime())&&(!o||t.getFullYear()>=o)&&(!r||r>=t.getFullYear())},_getFormatConfig:function(e){var t=this._get(e,"shortYearCutoff");return t="string"!=typeof t?t:(new Date).getFullYear()%100+parseInt(t,10),{shortYearCutoff:t,dayNamesShort:this._get(e,"dayNamesShort"),dayNames:this._get(e,"dayNames"),monthNamesShort:this._get(e,"monthNamesShort"),monthNames:this._get(e,"monthNames")}},_formatDate:function(e,t,i,s){t||(e.currentDay=e.selectedDay,e.currentMonth=e.selectedMonth,e.currentYear=e.selectedYear);var n=t?"object"==typeof t?t:this._daylightSavingAdjust(new Date(s,i,t)):this._daylightSavingAdjust(new Date(e.currentYear,e.currentMonth,e.currentDay));return this.formatDate(this._get(e,"dateFormat"),n,this._getFormatConfig(e))}}),e.fn.datepicker=function(t){if(!this.length)return this;e.datepicker.initialized||(e(document).mousedown(e.datepicker._checkExternalClick),e.datepicker.initialized=!0),0===e("#"+e.datepicker._mainDivId).length&&e("body").append(e.datepicker.dpDiv);var i=Array.prototype.slice.call(arguments,1);return"string"!=typeof t||"isDisabled"!==t&&"getDate"!==t&&"widget"!==t?"option"===t&&2===arguments.length&&"string"==typeof arguments[1]?e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this[0]].concat(i)):this.each(function(){"string"==typeof t?e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this].concat(i)):e.datepicker._attachDatepicker(this,t)}):e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this[0]].concat(i))},e.datepicker=new n,e.datepicker.initialized=!1,e.datepicker.uuid=(new Date).getTime(),e.datepicker.version="1.11.2",e.datepicker,e.widget("ui.dialog",{version:"1.11.2",options:{appendTo:"body",autoOpen:!0,buttons:[],closeOnEscape:!0,closeText:"Close",dialogClass:"",draggable:!0,hide:null,height:"auto",maxHeight:null,maxWidth:null,minHeight:150,minWidth:150,modal:!1,position:{my:"center",at:"center",of:window,collision:"fit",using:function(t){var i=e(this).css(t).offset().top;0>i&&e(this).css("top",t.top-i)}},resizable:!0,show:null,title:null,width:300,beforeClose:null,close:null,drag:null,dragStart:null,dragStop:null,focus:null,open:null,resize:null,resizeStart:null,resizeStop:null},sizeRelatedOptions:{buttons:!0,height:!0,maxHeight:!0,maxWidth:!0,minHeight:!0,minWidth:!0,width:!0},resizableRelatedOptions:{maxHeight:!0,maxWidth:!0,minHeight:!0,minWidth:!0},_create:function(){this.originalCss={display:this.element[0].style.display,width:this.element[0].style.width,minHeight:this.element[0].style.minHeight,maxHeight:this.element[0].style.maxHeight,height:this.element[0].style.height},this.originalPosition={parent:this.element.parent(),index:this.element.parent().children().index(this.element)},this.originalTitle=this.element.attr("title"),this.options.title=this.options.title||this.originalTitle,this._createWrapper(),this.element.show().removeAttr("title").addClass("ui-dialog-content ui-widget-content").appendTo(this.uiDialog),this._createTitlebar(),this._createButtonPane(),this.options.draggable&&e.fn.draggable&&this._makeDraggable(),this.options.resizable&&e.fn.resizable&&this._makeResizable(),this._isOpen=!1,this._trackFocus()},_init:function(){this.options.autoOpen&&this.open()},_appendTo:function(){var t=this.options.appendTo;return t&&(t.jquery||t.nodeType)?e(t):this.document.find(t||"body").eq(0)},_destroy:function(){var e,t=this.originalPosition;this._destroyOverlay(),this.element.removeUniqueId().removeClass("ui-dialog-content ui-widget-content").css(this.originalCss).detach(),this.uiDialog.stop(!0,!0).remove(),this.originalTitle&&this.element.attr("title",this.originalTitle),e=t.parent.children().eq(t.index),e.length&&e[0]!==this.element[0]?e.before(this.element):t.parent.append(this.element)},widget:function(){return this.uiDialog},disable:e.noop,enable:e.noop,close:function(t){var i,s=this;if(this._isOpen&&this._trigger("beforeClose",t)!==!1){if(this._isOpen=!1,this._focusedElement=null,this._destroyOverlay(),this._untrackInstance(),!this.opener.filter(":focusable").focus().length)try{i=this.document[0].activeElement,i&&"body"!==i.nodeName.toLowerCase()&&e(i).blur()}catch(n){}this._hide(this.uiDialog,this.options.hide,function(){s._trigger("close",t)})}},isOpen:function(){return this._isOpen},moveToTop:function(){this._moveToTop()},_moveToTop:function(t,i){var s=!1,n=this.uiDialog.siblings(".ui-front:visible").map(function(){return+e(this).css("z-index")}).get(),a=Math.max.apply(null,n);return a>=+this.uiDialog.css("z-index")&&(this.uiDialog.css("z-index",a+1),s=!0),s&&!i&&this._trigger("focus",t),s},open:function(){var t=this;return this._isOpen?(this._moveToTop()&&this._focusTabbable(),void 0):(this._isOpen=!0,this.opener=e(this.document[0].activeElement),this._size(),this._position(),this._createOverlay(),this._moveToTop(null,!0),this.overlay&&this.overlay.css("z-index",this.uiDialog.css("z-index")-1),this._show(this.uiDialog,this.options.show,function(){t._focusTabbable(),t._trigger("focus")}),this._makeFocusTarget(),this._trigger("open"),void 0)},_focusTabbable:function(){var e=this._focusedElement;
e||(e=this.element.find("[autofocus]")),e.length||(e=this.element.find(":tabbable")),e.length||(e=this.uiDialogButtonPane.find(":tabbable")),e.length||(e=this.uiDialogTitlebarClose.filter(":tabbable")),e.length||(e=this.uiDialog),e.eq(0).focus()},_keepFocus:function(t){function i(){var t=this.document[0].activeElement,i=this.uiDialog[0]===t||e.contains(this.uiDialog[0],t);i||this._focusTabbable()}t.preventDefault(),i.call(this),this._delay(i)},_createWrapper:function(){this.uiDialog=e("<div>").addClass("ui-dialog ui-widget ui-widget-content ui-corner-all ui-front "+this.options.dialogClass).hide().attr({tabIndex:-1,role:"dialog"}).appendTo(this._appendTo()),this._on(this.uiDialog,{keydown:function(t){if(this.options.closeOnEscape&&!t.isDefaultPrevented()&&t.keyCode&&t.keyCode===e.ui.keyCode.ESCAPE)return t.preventDefault(),this.close(t),void 0;if(t.keyCode===e.ui.keyCode.TAB&&!t.isDefaultPrevented()){var i=this.uiDialog.find(":tabbable"),s=i.filter(":first"),n=i.filter(":last");t.target!==n[0]&&t.target!==this.uiDialog[0]||t.shiftKey?t.target!==s[0]&&t.target!==this.uiDialog[0]||!t.shiftKey||(this._delay(function(){n.focus()}),t.preventDefault()):(this._delay(function(){s.focus()}),t.preventDefault())}},mousedown:function(e){this._moveToTop(e)&&this._focusTabbable()}}),this.element.find("[aria-describedby]").length||this.uiDialog.attr({"aria-describedby":this.element.uniqueId().attr("id")})},_createTitlebar:function(){var t;this.uiDialogTitlebar=e("<div>").addClass("ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix").prependTo(this.uiDialog),this._on(this.uiDialogTitlebar,{mousedown:function(t){e(t.target).closest(".ui-dialog-titlebar-close")||this.uiDialog.focus()}}),this.uiDialogTitlebarClose=e("<button type='button'></button>").button({label:this.options.closeText,icons:{primary:"ui-icon-closethick"},text:!1}).addClass("ui-dialog-titlebar-close").appendTo(this.uiDialogTitlebar),this._on(this.uiDialogTitlebarClose,{click:function(e){e.preventDefault(),this.close(e)}}),t=e("<span>").uniqueId().addClass("ui-dialog-title").prependTo(this.uiDialogTitlebar),this._title(t),this.uiDialog.attr({"aria-labelledby":t.attr("id")})},_title:function(e){this.options.title||e.html("&#160;"),e.text(this.options.title)},_createButtonPane:function(){this.uiDialogButtonPane=e("<div>").addClass("ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"),this.uiButtonSet=e("<div>").addClass("ui-dialog-buttonset").appendTo(this.uiDialogButtonPane),this._createButtons()},_createButtons:function(){var t=this,i=this.options.buttons;return this.uiDialogButtonPane.remove(),this.uiButtonSet.empty(),e.isEmptyObject(i)||e.isArray(i)&&!i.length?(this.uiDialog.removeClass("ui-dialog-buttons"),void 0):(e.each(i,function(i,s){var n,a;s=e.isFunction(s)?{click:s,text:i}:s,s=e.extend({type:"button"},s),n=s.click,s.click=function(){n.apply(t.element[0],arguments)},a={icons:s.icons,text:s.showText},delete s.icons,delete s.showText,e("<button></button>",s).button(a).appendTo(t.uiButtonSet)}),this.uiDialog.addClass("ui-dialog-buttons"),this.uiDialogButtonPane.appendTo(this.uiDialog),void 0)},_makeDraggable:function(){function t(e){return{position:e.position,offset:e.offset}}var i=this,s=this.options;this.uiDialog.draggable({cancel:".ui-dialog-content, .ui-dialog-titlebar-close",handle:".ui-dialog-titlebar",containment:"document",start:function(s,n){e(this).addClass("ui-dialog-dragging"),i._blockFrames(),i._trigger("dragStart",s,t(n))},drag:function(e,s){i._trigger("drag",e,t(s))},stop:function(n,a){var o=a.offset.left-i.document.scrollLeft(),r=a.offset.top-i.document.scrollTop();s.position={my:"left top",at:"left"+(o>=0?"+":"")+o+" "+"top"+(r>=0?"+":"")+r,of:i.window},e(this).removeClass("ui-dialog-dragging"),i._unblockFrames(),i._trigger("dragStop",n,t(a))}})},_makeResizable:function(){function t(e){return{originalPosition:e.originalPosition,originalSize:e.originalSize,position:e.position,size:e.size}}var i=this,s=this.options,n=s.resizable,a=this.uiDialog.css("position"),o="string"==typeof n?n:"n,e,s,w,se,sw,ne,nw";this.uiDialog.resizable({cancel:".ui-dialog-content",containment:"document",alsoResize:this.element,maxWidth:s.maxWidth,maxHeight:s.maxHeight,minWidth:s.minWidth,minHeight:this._minHeight(),handles:o,start:function(s,n){e(this).addClass("ui-dialog-resizing"),i._blockFrames(),i._trigger("resizeStart",s,t(n))},resize:function(e,s){i._trigger("resize",e,t(s))},stop:function(n,a){var o=i.uiDialog.offset(),r=o.left-i.document.scrollLeft(),h=o.top-i.document.scrollTop();s.height=i.uiDialog.height(),s.width=i.uiDialog.width(),s.position={my:"left top",at:"left"+(r>=0?"+":"")+r+" "+"top"+(h>=0?"+":"")+h,of:i.window},e(this).removeClass("ui-dialog-resizing"),i._unblockFrames(),i._trigger("resizeStop",n,t(a))}}).css("position",a)},_trackFocus:function(){this._on(this.widget(),{focusin:function(t){this._makeFocusTarget(),this._focusedElement=e(t.target)}})},_makeFocusTarget:function(){this._untrackInstance(),this._trackingInstances().unshift(this)},_untrackInstance:function(){var t=this._trackingInstances(),i=e.inArray(this,t);-1!==i&&t.splice(i,1)},_trackingInstances:function(){var e=this.document.data("ui-dialog-instances");return e||(e=[],this.document.data("ui-dialog-instances",e)),e},_minHeight:function(){var e=this.options;return"auto"===e.height?e.minHeight:Math.min(e.minHeight,e.height)},_position:function(){var e=this.uiDialog.is(":visible");e||this.uiDialog.show(),this.uiDialog.position(this.options.position),e||this.uiDialog.hide()},_setOptions:function(t){var i=this,s=!1,n={};e.each(t,function(e,t){i._setOption(e,t),e in i.sizeRelatedOptions&&(s=!0),e in i.resizableRelatedOptions&&(n[e]=t)}),s&&(this._size(),this._position()),this.uiDialog.is(":data(ui-resizable)")&&this.uiDialog.resizable("option",n)},_setOption:function(e,t){var i,s,n=this.uiDialog;"dialogClass"===e&&n.removeClass(this.options.dialogClass).addClass(t),"disabled"!==e&&(this._super(e,t),"appendTo"===e&&this.uiDialog.appendTo(this._appendTo()),"buttons"===e&&this._createButtons(),"closeText"===e&&this.uiDialogTitlebarClose.button({label:""+t}),"draggable"===e&&(i=n.is(":data(ui-draggable)"),i&&!t&&n.draggable("destroy"),!i&&t&&this._makeDraggable()),"position"===e&&this._position(),"resizable"===e&&(s=n.is(":data(ui-resizable)"),s&&!t&&n.resizable("destroy"),s&&"string"==typeof t&&n.resizable("option","handles",t),s||t===!1||this._makeResizable()),"title"===e&&this._title(this.uiDialogTitlebar.find(".ui-dialog-title")))},_size:function(){var e,t,i,s=this.options;this.element.show().css({width:"auto",minHeight:0,maxHeight:"none",height:0}),s.minWidth>s.width&&(s.width=s.minWidth),e=this.uiDialog.css({height:"auto",width:s.width}).outerHeight(),t=Math.max(0,s.minHeight-e),i="number"==typeof s.maxHeight?Math.max(0,s.maxHeight-e):"none","auto"===s.height?this.element.css({minHeight:t,maxHeight:i,height:"auto"}):this.element.height(Math.max(0,s.height-e)),this.uiDialog.is(":data(ui-resizable)")&&this.uiDialog.resizable("option","minHeight",this._minHeight())},_blockFrames:function(){this.iframeBlocks=this.document.find("iframe").map(function(){var t=e(this);return e("<div>").css({position:"absolute",width:t.outerWidth(),height:t.outerHeight()}).appendTo(t.parent()).offset(t.offset())[0]})},_unblockFrames:function(){this.iframeBlocks&&(this.iframeBlocks.remove(),delete this.iframeBlocks)},_allowInteraction:function(t){return e(t.target).closest(".ui-dialog").length?!0:!!e(t.target).closest(".ui-datepicker").length},_createOverlay:function(){if(this.options.modal){var t=!0;this._delay(function(){t=!1}),this.document.data("ui-dialog-overlays")||this._on(this.document,{focusin:function(e){t||this._allowInteraction(e)||(e.preventDefault(),this._trackingInstances()[0]._focusTabbable())}}),this.overlay=e("<div>").addClass("ui-widget-overlay ui-front").appendTo(this._appendTo()),this._on(this.overlay,{mousedown:"_keepFocus"}),this.document.data("ui-dialog-overlays",(this.document.data("ui-dialog-overlays")||0)+1)}},_destroyOverlay:function(){if(this.options.modal&&this.overlay){var e=this.document.data("ui-dialog-overlays")-1;e?this.document.data("ui-dialog-overlays",e):this.document.unbind("focusin").removeData("ui-dialog-overlays"),this.overlay.remove(),this.overlay=null}}}),e.widget("ui.progressbar",{version:"1.11.2",options:{max:100,value:0,change:null,complete:null},min:0,_create:function(){this.oldValue=this.options.value=this._constrainedValue(),this.element.addClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").attr({role:"progressbar","aria-valuemin":this.min}),this.valueDiv=e("<div class='ui-progressbar-value ui-widget-header ui-corner-left'></div>").appendTo(this.element),this._refreshValue()},_destroy:function(){this.element.removeClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow"),this.valueDiv.remove()},value:function(e){return void 0===e?this.options.value:(this.options.value=this._constrainedValue(e),this._refreshValue(),void 0)},_constrainedValue:function(e){return void 0===e&&(e=this.options.value),this.indeterminate=e===!1,"number"!=typeof e&&(e=0),this.indeterminate?!1:Math.min(this.options.max,Math.max(this.min,e))},_setOptions:function(e){var t=e.value;delete e.value,this._super(e),this.options.value=this._constrainedValue(t),this._refreshValue()},_setOption:function(e,t){"max"===e&&(t=Math.max(this.min,t)),"disabled"===e&&this.element.toggleClass("ui-state-disabled",!!t).attr("aria-disabled",t),this._super(e,t)},_percentage:function(){return this.indeterminate?100:100*(this.options.value-this.min)/(this.options.max-this.min)},_refreshValue:function(){var t=this.options.value,i=this._percentage();this.valueDiv.toggle(this.indeterminate||t>this.min).toggleClass("ui-corner-right",t===this.options.max).width(i.toFixed(0)+"%"),this.element.toggleClass("ui-progressbar-indeterminate",this.indeterminate),this.indeterminate?(this.element.removeAttr("aria-valuenow"),this.overlayDiv||(this.overlayDiv=e("<div class='ui-progressbar-overlay'></div>").appendTo(this.valueDiv))):(this.element.attr({"aria-valuemax":this.options.max,"aria-valuenow":t}),this.overlayDiv&&(this.overlayDiv.remove(),this.overlayDiv=null)),this.oldValue!==t&&(this.oldValue=t,this._trigger("change")),t===this.options.max&&this._trigger("complete")}}),e.widget("ui.selectmenu",{version:"1.11.2",defaultElement:"<select>",options:{appendTo:null,disabled:null,icons:{button:"ui-icon-triangle-1-s"},position:{my:"left top",at:"left bottom",collision:"none"},width:null,change:null,close:null,focus:null,open:null,select:null},_create:function(){var e=this.element.uniqueId().attr("id");this.ids={element:e,button:e+"-button",menu:e+"-menu"},this._drawButton(),this._drawMenu(),this.options.disabled&&this.disable()},_drawButton:function(){var t=this,i=this.element.attr("tabindex");this.label=e("label[for='"+this.ids.element+"']").attr("for",this.ids.button),this._on(this.label,{click:function(e){this.button.focus(),e.preventDefault()}}),this.element.hide(),this.button=e("<span>",{"class":"ui-selectmenu-button ui-widget ui-state-default ui-corner-all",tabindex:i||this.options.disabled?-1:0,id:this.ids.button,role:"combobox","aria-expanded":"false","aria-autocomplete":"list","aria-owns":this.ids.menu,"aria-haspopup":"true"}).insertAfter(this.element),e("<span>",{"class":"ui-icon "+this.options.icons.button}).prependTo(this.button),this.buttonText=e("<span>",{"class":"ui-selectmenu-text"}).appendTo(this.button),this._setText(this.buttonText,this.element.find("option:selected").text()),this._resizeButton(),this._on(this.button,this._buttonEvents),this.button.one("focusin",function(){t.menuItems||t._refreshMenu()}),this._hoverable(this.button),this._focusable(this.button)},_drawMenu:function(){var t=this;this.menu=e("<ul>",{"aria-hidden":"true","aria-labelledby":this.ids.button,id:this.ids.menu}),this.menuWrap=e("<div>",{"class":"ui-selectmenu-menu ui-front"}).append(this.menu).appendTo(this._appendTo()),this.menuInstance=this.menu.menu({role:"listbox",select:function(e,i){e.preventDefault(),t._setSelection(),t._select(i.item.data("ui-selectmenu-item"),e)},focus:function(e,i){var s=i.item.data("ui-selectmenu-item");null!=t.focusIndex&&s.index!==t.focusIndex&&(t._trigger("focus",e,{item:s}),t.isOpen||t._select(s,e)),t.focusIndex=s.index,t.button.attr("aria-activedescendant",t.menuItems.eq(s.index).attr("id"))}}).menu("instance"),this.menu.addClass("ui-corner-bottom").removeClass("ui-corner-all"),this.menuInstance._off(this.menu,"mouseleave"),this.menuInstance._closeOnDocumentClick=function(){return!1},this.menuInstance._isDivider=function(){return!1}},refresh:function(){this._refreshMenu(),this._setText(this.buttonText,this._getSelectedItem().text()),this.options.width||this._resizeButton()},_refreshMenu:function(){this.menu.empty();var e,t=this.element.find("option");t.length&&(this._parseOptions(t),this._renderMenu(this.menu,this.items),this.menuInstance.refresh(),this.menuItems=this.menu.find("li").not(".ui-selectmenu-optgroup"),e=this._getSelectedItem(),this.menuInstance.focus(null,e),this._setAria(e.data("ui-selectmenu-item")),this._setOption("disabled",this.element.prop("disabled")))},open:function(e){this.options.disabled||(this.menuItems?(this.menu.find(".ui-state-focus").removeClass("ui-state-focus"),this.menuInstance.focus(null,this._getSelectedItem())):this._refreshMenu(),this.isOpen=!0,this._toggleAttr(),this._resizeMenu(),this._position(),this._on(this.document,this._documentClick),this._trigger("open",e))},_position:function(){this.menuWrap.position(e.extend({of:this.button},this.options.position))},close:function(e){this.isOpen&&(this.isOpen=!1,this._toggleAttr(),this.range=null,this._off(this.document),this._trigger("close",e))},widget:function(){return this.button},menuWidget:function(){return this.menu},_renderMenu:function(t,i){var s=this,n="";e.each(i,function(i,a){a.optgroup!==n&&(e("<li>",{"class":"ui-selectmenu-optgroup ui-menu-divider"+(a.element.parent("optgroup").prop("disabled")?" ui-state-disabled":""),text:a.optgroup}).appendTo(t),n=a.optgroup),s._renderItemData(t,a)})},_renderItemData:function(e,t){return this._renderItem(e,t).data("ui-selectmenu-item",t)},_renderItem:function(t,i){var s=e("<li>");return i.disabled&&s.addClass("ui-state-disabled"),this._setText(s,i.label),s.appendTo(t)},_setText:function(e,t){t?e.text(t):e.html("&#160;")},_move:function(e,t){var i,s,n=".ui-menu-item";this.isOpen?i=this.menuItems.eq(this.focusIndex):(i=this.menuItems.eq(this.element[0].selectedIndex),n+=":not(.ui-state-disabled)"),s="first"===e||"last"===e?i["first"===e?"prevAll":"nextAll"](n).eq(-1):i[e+"All"](n).eq(0),s.length&&this.menuInstance.focus(t,s)},_getSelectedItem:function(){return this.menuItems.eq(this.element[0].selectedIndex)},_toggle:function(e){this[this.isOpen?"close":"open"](e)},_setSelection:function(){var e;this.range&&(window.getSelection?(e=window.getSelection(),e.removeAllRanges(),e.addRange(this.range)):this.range.select(),this.button.focus())},_documentClick:{mousedown:function(t){this.isOpen&&(e(t.target).closest(".ui-selectmenu-menu, #"+this.ids.button).length||this.close(t))}},_buttonEvents:{mousedown:function(){var e;window.getSelection?(e=window.getSelection(),e.rangeCount&&(this.range=e.getRangeAt(0))):this.range=document.selection.createRange()},click:function(e){this._setSelection(),this._toggle(e)},keydown:function(t){var i=!0;switch(t.keyCode){case e.ui.keyCode.TAB:case e.ui.keyCode.ESCAPE:this.close(t),i=!1;break;case e.ui.keyCode.ENTER:this.isOpen&&this._selectFocusedItem(t);break;case e.ui.keyCode.UP:t.altKey?this._toggle(t):this._move("prev",t);break;case e.ui.keyCode.DOWN:t.altKey?this._toggle(t):this._move("next",t);break;case e.ui.keyCode.SPACE:this.isOpen?this._selectFocusedItem(t):this._toggle(t);break;case e.ui.keyCode.LEFT:this._move("prev",t);break;case e.ui.keyCode.RIGHT:this._move("next",t);break;case e.ui.keyCode.HOME:case e.ui.keyCode.PAGE_UP:this._move("first",t);break;case e.ui.keyCode.END:case e.ui.keyCode.PAGE_DOWN:this._move("last",t);break;default:this.menu.trigger(t),i=!1}i&&t.preventDefault()}},_selectFocusedItem:function(e){var t=this.menuItems.eq(this.focusIndex);t.hasClass("ui-state-disabled")||this._select(t.data("ui-selectmenu-item"),e)},_select:function(e,t){var i=this.element[0].selectedIndex;this.element[0].selectedIndex=e.index,this._setText(this.buttonText,e.label),this._setAria(e),this._trigger("select",t,{item:e}),e.index!==i&&this._trigger("change",t,{item:e}),this.close(t)},_setAria:function(e){var t=this.menuItems.eq(e.index).attr("id");this.button.attr({"aria-labelledby":t,"aria-activedescendant":t}),this.menu.attr("aria-activedescendant",t)},_setOption:function(e,t){"icons"===e&&this.button.find("span.ui-icon").removeClass(this.options.icons.button).addClass(t.button),this._super(e,t),"appendTo"===e&&this.menuWrap.appendTo(this._appendTo()),"disabled"===e&&(this.menuInstance.option("disabled",t),this.button.toggleClass("ui-state-disabled",t).attr("aria-disabled",t),this.element.prop("disabled",t),t?(this.button.attr("tabindex",-1),this.close()):this.button.attr("tabindex",0)),"width"===e&&this._resizeButton()},_appendTo:function(){var t=this.options.appendTo;return t&&(t=t.jquery||t.nodeType?e(t):this.document.find(t).eq(0)),t&&t[0]||(t=this.element.closest(".ui-front")),t.length||(t=this.document[0].body),t},_toggleAttr:function(){this.button.toggleClass("ui-corner-top",this.isOpen).toggleClass("ui-corner-all",!this.isOpen).attr("aria-expanded",this.isOpen),this.menuWrap.toggleClass("ui-selectmenu-open",this.isOpen),this.menu.attr("aria-hidden",!this.isOpen)},_resizeButton:function(){var e=this.options.width;e||(e=this.element.show().outerWidth(),this.element.hide()),this.button.outerWidth(e)},_resizeMenu:function(){this.menu.outerWidth(Math.max(this.button.outerWidth(),this.menu.width("").outerWidth()+1))},_getCreateOptions:function(){return{disabled:this.element.prop("disabled")}},_parseOptions:function(t){var i=[];t.each(function(t,s){var n=e(s),a=n.parent("optgroup");i.push({element:n,index:t,value:n.attr("value"),label:n.text(),optgroup:a.attr("label")||"",disabled:a.prop("disabled")||n.prop("disabled")})}),this.items=i},_destroy:function(){this.menuWrap.remove(),this.button.remove(),this.element.show(),this.element.removeUniqueId(),this.label.attr("for",this.ids.element)}}),e.widget("ui.slider",e.ui.mouse,{version:"1.11.2",widgetEventPrefix:"slide",options:{animate:!1,distance:0,max:100,min:0,orientation:"horizontal",range:!1,step:1,value:0,values:null,change:null,slide:null,start:null,stop:null},numPages:5,_create:function(){this._keySliding=!1,this._mouseSliding=!1,this._animateOff=!0,this._handleIndex=null,this._detectOrientation(),this._mouseInit(),this._calculateNewMax(),this.element.addClass("ui-slider ui-slider-"+this.orientation+" ui-widget"+" ui-widget-content"+" ui-corner-all"),this._refresh(),this._setOption("disabled",this.options.disabled),this._animateOff=!1},_refresh:function(){this._createRange(),this._createHandles(),this._setupEvents(),this._refreshValue()},_createHandles:function(){var t,i,s=this.options,n=this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),a="<span class='ui-slider-handle ui-state-default ui-corner-all' tabindex='0'></span>",o=[];for(i=s.values&&s.values.length||1,n.length>i&&(n.slice(i).remove(),n=n.slice(0,i)),t=n.length;i>t;t++)o.push(a);this.handles=n.add(e(o.join("")).appendTo(this.element)),this.handle=this.handles.eq(0),this.handles.each(function(t){e(this).data("ui-slider-handle-index",t)})},_createRange:function(){var t=this.options,i="";t.range?(t.range===!0&&(t.values?t.values.length&&2!==t.values.length?t.values=[t.values[0],t.values[0]]:e.isArray(t.values)&&(t.values=t.values.slice(0)):t.values=[this._valueMin(),this._valueMin()]),this.range&&this.range.length?this.range.removeClass("ui-slider-range-min ui-slider-range-max").css({left:"",bottom:""}):(this.range=e("<div></div>").appendTo(this.element),i="ui-slider-range ui-widget-header ui-corner-all"),this.range.addClass(i+("min"===t.range||"max"===t.range?" ui-slider-range-"+t.range:""))):(this.range&&this.range.remove(),this.range=null)},_setupEvents:function(){this._off(this.handles),this._on(this.handles,this._handleEvents),this._hoverable(this.handles),this._focusable(this.handles)},_destroy:function(){this.handles.remove(),this.range&&this.range.remove(),this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-widget ui-widget-content ui-corner-all"),this._mouseDestroy()},_mouseCapture:function(t){var i,s,n,a,o,r,h,l,u=this,d=this.options;return d.disabled?!1:(this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()},this.elementOffset=this.element.offset(),i={x:t.pageX,y:t.pageY},s=this._normValueFromMouse(i),n=this._valueMax()-this._valueMin()+1,this.handles.each(function(t){var i=Math.abs(s-u.values(t));(n>i||n===i&&(t===u._lastChangedValue||u.values(t)===d.min))&&(n=i,a=e(this),o=t)}),r=this._start(t,o),r===!1?!1:(this._mouseSliding=!0,this._handleIndex=o,a.addClass("ui-state-active").focus(),h=a.offset(),l=!e(t.target).parents().addBack().is(".ui-slider-handle"),this._clickOffset=l?{left:0,top:0}:{left:t.pageX-h.left-a.width()/2,top:t.pageY-h.top-a.height()/2-(parseInt(a.css("borderTopWidth"),10)||0)-(parseInt(a.css("borderBottomWidth"),10)||0)+(parseInt(a.css("marginTop"),10)||0)},this.handles.hasClass("ui-state-hover")||this._slide(t,o,s),this._animateOff=!0,!0))},_mouseStart:function(){return!0},_mouseDrag:function(e){var t={x:e.pageX,y:e.pageY},i=this._normValueFromMouse(t);return this._slide(e,this._handleIndex,i),!1},_mouseStop:function(e){return this.handles.removeClass("ui-state-active"),this._mouseSliding=!1,this._stop(e,this._handleIndex),this._change(e,this._handleIndex),this._handleIndex=null,this._clickOffset=null,this._animateOff=!1,!1},_detectOrientation:function(){this.orientation="vertical"===this.options.orientation?"vertical":"horizontal"},_normValueFromMouse:function(e){var t,i,s,n,a;return"horizontal"===this.orientation?(t=this.elementSize.width,i=e.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0)):(t=this.elementSize.height,i=e.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0)),s=i/t,s>1&&(s=1),0>s&&(s=0),"vertical"===this.orientation&&(s=1-s),n=this._valueMax()-this._valueMin(),a=this._valueMin()+s*n,this._trimAlignValue(a)},_start:function(e,t){var i={handle:this.handles[t],value:this.value()};return this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._trigger("start",e,i)},_slide:function(e,t,i){var s,n,a;this.options.values&&this.options.values.length?(s=this.values(t?0:1),2===this.options.values.length&&this.options.range===!0&&(0===t&&i>s||1===t&&s>i)&&(i=s),i!==this.values(t)&&(n=this.values(),n[t]=i,a=this._trigger("slide",e,{handle:this.handles[t],value:i,values:n}),s=this.values(t?0:1),a!==!1&&this.values(t,i))):i!==this.value()&&(a=this._trigger("slide",e,{handle:this.handles[t],value:i}),a!==!1&&this.value(i))},_stop:function(e,t){var i={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._trigger("stop",e,i)},_change:function(e,t){if(!this._keySliding&&!this._mouseSliding){var i={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._lastChangedValue=t,this._trigger("change",e,i)}},value:function(e){return arguments.length?(this.options.value=this._trimAlignValue(e),this._refreshValue(),this._change(null,0),void 0):this._value()},values:function(t,i){var s,n,a;if(arguments.length>1)return this.options.values[t]=this._trimAlignValue(i),this._refreshValue(),this._change(null,t),void 0;if(!arguments.length)return this._values();if(!e.isArray(arguments[0]))return this.options.values&&this.options.values.length?this._values(t):this.value();for(s=this.options.values,n=arguments[0],a=0;s.length>a;a+=1)s[a]=this._trimAlignValue(n[a]),this._change(null,a);this._refreshValue()},_setOption:function(t,i){var s,n=0;switch("range"===t&&this.options.range===!0&&("min"===i?(this.options.value=this._values(0),this.options.values=null):"max"===i&&(this.options.value=this._values(this.options.values.length-1),this.options.values=null)),e.isArray(this.options.values)&&(n=this.options.values.length),"disabled"===t&&this.element.toggleClass("ui-state-disabled",!!i),this._super(t,i),t){case"orientation":this._detectOrientation(),this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-"+this.orientation),this._refreshValue(),this.handles.css("horizontal"===i?"bottom":"left","");break;case"value":this._animateOff=!0,this._refreshValue(),this._change(null,0),this._animateOff=!1;break;case"values":for(this._animateOff=!0,this._refreshValue(),s=0;n>s;s+=1)this._change(null,s);this._animateOff=!1;break;case"step":case"min":case"max":this._animateOff=!0,this._calculateNewMax(),this._refreshValue(),this._animateOff=!1;break;case"range":this._animateOff=!0,this._refresh(),this._animateOff=!1}},_value:function(){var e=this.options.value;return e=this._trimAlignValue(e)},_values:function(e){var t,i,s;if(arguments.length)return t=this.options.values[e],t=this._trimAlignValue(t);if(this.options.values&&this.options.values.length){for(i=this.options.values.slice(),s=0;i.length>s;s+=1)i[s]=this._trimAlignValue(i[s]);return i}return[]},_trimAlignValue:function(e){if(this._valueMin()>=e)return this._valueMin();if(e>=this._valueMax())return this._valueMax();var t=this.options.step>0?this.options.step:1,i=(e-this._valueMin())%t,s=e-i;return 2*Math.abs(i)>=t&&(s+=i>0?t:-t),parseFloat(s.toFixed(5))},_calculateNewMax:function(){var e=(this.options.max-this._valueMin())%this.options.step;this.max=this.options.max-e},_valueMin:function(){return this.options.min},_valueMax:function(){return this.max},_refreshValue:function(){var t,i,s,n,a,o=this.options.range,r=this.options,h=this,l=this._animateOff?!1:r.animate,u={};this.options.values&&this.options.values.length?this.handles.each(function(s){i=100*((h.values(s)-h._valueMin())/(h._valueMax()-h._valueMin())),u["horizontal"===h.orientation?"left":"bottom"]=i+"%",e(this).stop(1,1)[l?"animate":"css"](u,r.animate),h.options.range===!0&&("horizontal"===h.orientation?(0===s&&h.range.stop(1,1)[l?"animate":"css"]({left:i+"%"},r.animate),1===s&&h.range[l?"animate":"css"]({width:i-t+"%"},{queue:!1,duration:r.animate})):(0===s&&h.range.stop(1,1)[l?"animate":"css"]({bottom:i+"%"},r.animate),1===s&&h.range[l?"animate":"css"]({height:i-t+"%"},{queue:!1,duration:r.animate}))),t=i}):(s=this.value(),n=this._valueMin(),a=this._valueMax(),i=a!==n?100*((s-n)/(a-n)):0,u["horizontal"===this.orientation?"left":"bottom"]=i+"%",this.handle.stop(1,1)[l?"animate":"css"](u,r.animate),"min"===o&&"horizontal"===this.orientation&&this.range.stop(1,1)[l?"animate":"css"]({width:i+"%"},r.animate),"max"===o&&"horizontal"===this.orientation&&this.range[l?"animate":"css"]({width:100-i+"%"},{queue:!1,duration:r.animate}),"min"===o&&"vertical"===this.orientation&&this.range.stop(1,1)[l?"animate":"css"]({height:i+"%"},r.animate),"max"===o&&"vertical"===this.orientation&&this.range[l?"animate":"css"]({height:100-i+"%"},{queue:!1,duration:r.animate}))},_handleEvents:{keydown:function(t){var i,s,n,a,o=e(t.target).data("ui-slider-handle-index");switch(t.keyCode){case e.ui.keyCode.HOME:case e.ui.keyCode.END:case e.ui.keyCode.PAGE_UP:case e.ui.keyCode.PAGE_DOWN:case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(t.preventDefault(),!this._keySliding&&(this._keySliding=!0,e(t.target).addClass("ui-state-active"),i=this._start(t,o),i===!1))return}switch(a=this.options.step,s=n=this.options.values&&this.options.values.length?this.values(o):this.value(),t.keyCode){case e.ui.keyCode.HOME:n=this._valueMin();break;case e.ui.keyCode.END:n=this._valueMax();break;case e.ui.keyCode.PAGE_UP:n=this._trimAlignValue(s+(this._valueMax()-this._valueMin())/this.numPages);break;case e.ui.keyCode.PAGE_DOWN:n=this._trimAlignValue(s-(this._valueMax()-this._valueMin())/this.numPages);break;case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:if(s===this._valueMax())return;n=this._trimAlignValue(s+a);break;case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(s===this._valueMin())return;n=this._trimAlignValue(s-a)}this._slide(t,o,n)},keyup:function(t){var i=e(t.target).data("ui-slider-handle-index");this._keySliding&&(this._keySliding=!1,this._stop(t,i),this._change(t,i),e(t.target).removeClass("ui-state-active"))}}}),e.widget("ui.spinner",{version:"1.11.2",defaultElement:"<input>",widgetEventPrefix:"spin",options:{culture:null,icons:{down:"ui-icon-triangle-1-s",up:"ui-icon-triangle-1-n"},incremental:!0,max:null,min:null,numberFormat:null,page:10,step:1,change:null,spin:null,start:null,stop:null},_create:function(){this._setOption("max",this.options.max),this._setOption("min",this.options.min),this._setOption("step",this.options.step),""!==this.value()&&this._value(this.element.val(),!0),this._draw(),this._on(this._events),this._refresh(),this._on(this.window,{beforeunload:function(){this.element.removeAttr("autocomplete")}})},_getCreateOptions:function(){var t={},i=this.element;return e.each(["min","max","step"],function(e,s){var n=i.attr(s);void 0!==n&&n.length&&(t[s]=n)}),t},_events:{keydown:function(e){this._start(e)&&this._keydown(e)&&e.preventDefault()},keyup:"_stop",focus:function(){this.previous=this.element.val()},blur:function(e){return this.cancelBlur?(delete this.cancelBlur,void 0):(this._stop(),this._refresh(),this.previous!==this.element.val()&&this._trigger("change",e),void 0)},mousewheel:function(e,t){if(t){if(!this.spinning&&!this._start(e))return!1;this._spin((t>0?1:-1)*this.options.step,e),clearTimeout(this.mousewheelTimer),this.mousewheelTimer=this._delay(function(){this.spinning&&this._stop(e)},100),e.preventDefault()}},"mousedown .ui-spinner-button":function(t){function i(){var e=this.element[0]===this.document[0].activeElement;e||(this.element.focus(),this.previous=s,this._delay(function(){this.previous=s}))}var s;s=this.element[0]===this.document[0].activeElement?this.previous:this.element.val(),t.preventDefault(),i.call(this),this.cancelBlur=!0,this._delay(function(){delete this.cancelBlur,i.call(this)}),this._start(t)!==!1&&this._repeat(null,e(t.currentTarget).hasClass("ui-spinner-up")?1:-1,t)},"mouseup .ui-spinner-button":"_stop","mouseenter .ui-spinner-button":function(t){return e(t.currentTarget).hasClass("ui-state-active")?this._start(t)===!1?!1:(this._repeat(null,e(t.currentTarget).hasClass("ui-spinner-up")?1:-1,t),void 0):void 0},"mouseleave .ui-spinner-button":"_stop"},_draw:function(){var e=this.uiSpinner=this.element.addClass("ui-spinner-input").attr("autocomplete","off").wrap(this._uiSpinnerHtml()).parent().append(this._buttonHtml());this.element.attr("role","spinbutton"),this.buttons=e.find(".ui-spinner-button").attr("tabIndex",-1).button().removeClass("ui-corner-all"),this.buttons.height()>Math.ceil(.5*e.height())&&e.height()>0&&e.height(e.height()),this.options.disabled&&this.disable()},_keydown:function(t){var i=this.options,s=e.ui.keyCode;switch(t.keyCode){case s.UP:return this._repeat(null,1,t),!0;case s.DOWN:return this._repeat(null,-1,t),!0;case s.PAGE_UP:return this._repeat(null,i.page,t),!0;case s.PAGE_DOWN:return this._repeat(null,-i.page,t),!0}return!1},_uiSpinnerHtml:function(){return"<span class='ui-spinner ui-widget ui-widget-content ui-corner-all'></span>"},_buttonHtml:function(){return"<a class='ui-spinner-button ui-spinner-up ui-corner-tr'><span class='ui-icon "+this.options.icons.up+"'>&#9650;</span>"+"</a>"+"<a class='ui-spinner-button ui-spinner-down ui-corner-br'>"+"<span class='ui-icon "+this.options.icons.down+"'>&#9660;</span>"+"</a>"
},_start:function(e){return this.spinning||this._trigger("start",e)!==!1?(this.counter||(this.counter=1),this.spinning=!0,!0):!1},_repeat:function(e,t,i){e=e||500,clearTimeout(this.timer),this.timer=this._delay(function(){this._repeat(40,t,i)},e),this._spin(t*this.options.step,i)},_spin:function(e,t){var i=this.value()||0;this.counter||(this.counter=1),i=this._adjustValue(i+e*this._increment(this.counter)),this.spinning&&this._trigger("spin",t,{value:i})===!1||(this._value(i),this.counter++)},_increment:function(t){var i=this.options.incremental;return i?e.isFunction(i)?i(t):Math.floor(t*t*t/5e4-t*t/500+17*t/200+1):1},_precision:function(){var e=this._precisionOf(this.options.step);return null!==this.options.min&&(e=Math.max(e,this._precisionOf(this.options.min))),e},_precisionOf:function(e){var t=""+e,i=t.indexOf(".");return-1===i?0:t.length-i-1},_adjustValue:function(e){var t,i,s=this.options;return t=null!==s.min?s.min:0,i=e-t,i=Math.round(i/s.step)*s.step,e=t+i,e=parseFloat(e.toFixed(this._precision())),null!==s.max&&e>s.max?s.max:null!==s.min&&s.min>e?s.min:e},_stop:function(e){this.spinning&&(clearTimeout(this.timer),clearTimeout(this.mousewheelTimer),this.counter=0,this.spinning=!1,this._trigger("stop",e))},_setOption:function(e,t){if("culture"===e||"numberFormat"===e){var i=this._parse(this.element.val());return this.options[e]=t,this.element.val(this._format(i)),void 0}("max"===e||"min"===e||"step"===e)&&"string"==typeof t&&(t=this._parse(t)),"icons"===e&&(this.buttons.first().find(".ui-icon").removeClass(this.options.icons.up).addClass(t.up),this.buttons.last().find(".ui-icon").removeClass(this.options.icons.down).addClass(t.down)),this._super(e,t),"disabled"===e&&(this.widget().toggleClass("ui-state-disabled",!!t),this.element.prop("disabled",!!t),this.buttons.button(t?"disable":"enable"))},_setOptions:h(function(e){this._super(e)}),_parse:function(e){return"string"==typeof e&&""!==e&&(e=window.Globalize&&this.options.numberFormat?Globalize.parseFloat(e,10,this.options.culture):+e),""===e||isNaN(e)?null:e},_format:function(e){return""===e?"":window.Globalize&&this.options.numberFormat?Globalize.format(e,this.options.numberFormat,this.options.culture):e},_refresh:function(){this.element.attr({"aria-valuemin":this.options.min,"aria-valuemax":this.options.max,"aria-valuenow":this._parse(this.element.val())})},isValid:function(){var e=this.value();return null===e?!1:e===this._adjustValue(e)},_value:function(e,t){var i;""!==e&&(i=this._parse(e),null!==i&&(t||(i=this._adjustValue(i)),e=this._format(i))),this.element.val(e),this._refresh()},_destroy:function(){this.element.removeClass("ui-spinner-input").prop("disabled",!1).removeAttr("autocomplete").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow"),this.uiSpinner.replaceWith(this.element)},stepUp:h(function(e){this._stepUp(e)}),_stepUp:function(e){this._start()&&(this._spin((e||1)*this.options.step),this._stop())},stepDown:h(function(e){this._stepDown(e)}),_stepDown:function(e){this._start()&&(this._spin((e||1)*-this.options.step),this._stop())},pageUp:h(function(e){this._stepUp((e||1)*this.options.page)}),pageDown:h(function(e){this._stepDown((e||1)*this.options.page)}),value:function(e){return arguments.length?(h(this._value).call(this,e),void 0):this._parse(this.element.val())},widget:function(){return this.uiSpinner}}),e.widget("ui.tabs",{version:"1.11.2",delay:300,options:{active:null,collapsible:!1,event:"click",heightStyle:"content",hide:null,show:null,activate:null,beforeActivate:null,beforeLoad:null,load:null},_isLocal:function(){var e=/#.*$/;return function(t){var i,s;t=t.cloneNode(!1),i=t.href.replace(e,""),s=location.href.replace(e,"");try{i=decodeURIComponent(i)}catch(n){}try{s=decodeURIComponent(s)}catch(n){}return t.hash.length>1&&i===s}}(),_create:function(){var t=this,i=this.options;this.running=!1,this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all").toggleClass("ui-tabs-collapsible",i.collapsible),this._processTabs(),i.active=this._initialActive(),e.isArray(i.disabled)&&(i.disabled=e.unique(i.disabled.concat(e.map(this.tabs.filter(".ui-state-disabled"),function(e){return t.tabs.index(e)}))).sort()),this.active=this.options.active!==!1&&this.anchors.length?this._findActive(i.active):e(),this._refresh(),this.active.length&&this.load(i.active)},_initialActive:function(){var t=this.options.active,i=this.options.collapsible,s=location.hash.substring(1);return null===t&&(s&&this.tabs.each(function(i,n){return e(n).attr("aria-controls")===s?(t=i,!1):void 0}),null===t&&(t=this.tabs.index(this.tabs.filter(".ui-tabs-active"))),(null===t||-1===t)&&(t=this.tabs.length?0:!1)),t!==!1&&(t=this.tabs.index(this.tabs.eq(t)),-1===t&&(t=i?!1:0)),!i&&t===!1&&this.anchors.length&&(t=0),t},_getCreateEventData:function(){return{tab:this.active,panel:this.active.length?this._getPanelForTab(this.active):e()}},_tabKeydown:function(t){var i=e(this.document[0].activeElement).closest("li"),s=this.tabs.index(i),n=!0;if(!this._handlePageNav(t)){switch(t.keyCode){case e.ui.keyCode.RIGHT:case e.ui.keyCode.DOWN:s++;break;case e.ui.keyCode.UP:case e.ui.keyCode.LEFT:n=!1,s--;break;case e.ui.keyCode.END:s=this.anchors.length-1;break;case e.ui.keyCode.HOME:s=0;break;case e.ui.keyCode.SPACE:return t.preventDefault(),clearTimeout(this.activating),this._activate(s),void 0;case e.ui.keyCode.ENTER:return t.preventDefault(),clearTimeout(this.activating),this._activate(s===this.options.active?!1:s),void 0;default:return}t.preventDefault(),clearTimeout(this.activating),s=this._focusNextTab(s,n),t.ctrlKey||(i.attr("aria-selected","false"),this.tabs.eq(s).attr("aria-selected","true"),this.activating=this._delay(function(){this.option("active",s)},this.delay))}},_panelKeydown:function(t){this._handlePageNav(t)||t.ctrlKey&&t.keyCode===e.ui.keyCode.UP&&(t.preventDefault(),this.active.focus())},_handlePageNav:function(t){return t.altKey&&t.keyCode===e.ui.keyCode.PAGE_UP?(this._activate(this._focusNextTab(this.options.active-1,!1)),!0):t.altKey&&t.keyCode===e.ui.keyCode.PAGE_DOWN?(this._activate(this._focusNextTab(this.options.active+1,!0)),!0):void 0},_findNextTab:function(t,i){function s(){return t>n&&(t=0),0>t&&(t=n),t}for(var n=this.tabs.length-1;-1!==e.inArray(s(),this.options.disabled);)t=i?t+1:t-1;return t},_focusNextTab:function(e,t){return e=this._findNextTab(e,t),this.tabs.eq(e).focus(),e},_setOption:function(e,t){return"active"===e?(this._activate(t),void 0):"disabled"===e?(this._setupDisabled(t),void 0):(this._super(e,t),"collapsible"===e&&(this.element.toggleClass("ui-tabs-collapsible",t),t||this.options.active!==!1||this._activate(0)),"event"===e&&this._setupEvents(t),"heightStyle"===e&&this._setupHeightStyle(t),void 0)},_sanitizeSelector:function(e){return e?e.replace(/[!"$%&'()*+,.\/:;<=>?@\[\]\^`{|}~]/g,"\\$&"):""},refresh:function(){var t=this.options,i=this.tablist.children(":has(a[href])");t.disabled=e.map(i.filter(".ui-state-disabled"),function(e){return i.index(e)}),this._processTabs(),t.active!==!1&&this.anchors.length?this.active.length&&!e.contains(this.tablist[0],this.active[0])?this.tabs.length===t.disabled.length?(t.active=!1,this.active=e()):this._activate(this._findNextTab(Math.max(0,t.active-1),!1)):t.active=this.tabs.index(this.active):(t.active=!1,this.active=e()),this._refresh()},_refresh:function(){this._setupDisabled(this.options.disabled),this._setupEvents(this.options.event),this._setupHeightStyle(this.options.heightStyle),this.tabs.not(this.active).attr({"aria-selected":"false","aria-expanded":"false",tabIndex:-1}),this.panels.not(this._getPanelForTab(this.active)).hide().attr({"aria-hidden":"true"}),this.active.length?(this.active.addClass("ui-tabs-active ui-state-active").attr({"aria-selected":"true","aria-expanded":"true",tabIndex:0}),this._getPanelForTab(this.active).show().attr({"aria-hidden":"false"})):this.tabs.eq(0).attr("tabIndex",0)},_processTabs:function(){var t=this,i=this.tabs,s=this.anchors,n=this.panels;this.tablist=this._getList().addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").attr("role","tablist").delegate("> li","mousedown"+this.eventNamespace,function(t){e(this).is(".ui-state-disabled")&&t.preventDefault()}).delegate(".ui-tabs-anchor","focus"+this.eventNamespace,function(){e(this).closest("li").is(".ui-state-disabled")&&this.blur()}),this.tabs=this.tablist.find("> li:has(a[href])").addClass("ui-state-default ui-corner-top").attr({role:"tab",tabIndex:-1}),this.anchors=this.tabs.map(function(){return e("a",this)[0]}).addClass("ui-tabs-anchor").attr({role:"presentation",tabIndex:-1}),this.panels=e(),this.anchors.each(function(i,s){var n,a,o,r=e(s).uniqueId().attr("id"),h=e(s).closest("li"),l=h.attr("aria-controls");t._isLocal(s)?(n=s.hash,o=n.substring(1),a=t.element.find(t._sanitizeSelector(n))):(o=h.attr("aria-controls")||e({}).uniqueId()[0].id,n="#"+o,a=t.element.find(n),a.length||(a=t._createPanel(o),a.insertAfter(t.panels[i-1]||t.tablist)),a.attr("aria-live","polite")),a.length&&(t.panels=t.panels.add(a)),l&&h.data("ui-tabs-aria-controls",l),h.attr({"aria-controls":o,"aria-labelledby":r}),a.attr("aria-labelledby",r)}),this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").attr("role","tabpanel"),i&&(this._off(i.not(this.tabs)),this._off(s.not(this.anchors)),this._off(n.not(this.panels)))},_getList:function(){return this.tablist||this.element.find("ol,ul").eq(0)},_createPanel:function(t){return e("<div>").attr("id",t).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").data("ui-tabs-destroy",!0)},_setupDisabled:function(t){e.isArray(t)&&(t.length?t.length===this.anchors.length&&(t=!0):t=!1);for(var i,s=0;i=this.tabs[s];s++)t===!0||-1!==e.inArray(s,t)?e(i).addClass("ui-state-disabled").attr("aria-disabled","true"):e(i).removeClass("ui-state-disabled").removeAttr("aria-disabled");this.options.disabled=t},_setupEvents:function(t){var i={};t&&e.each(t.split(" "),function(e,t){i[t]="_eventHandler"}),this._off(this.anchors.add(this.tabs).add(this.panels)),this._on(!0,this.anchors,{click:function(e){e.preventDefault()}}),this._on(this.anchors,i),this._on(this.tabs,{keydown:"_tabKeydown"}),this._on(this.panels,{keydown:"_panelKeydown"}),this._focusable(this.tabs),this._hoverable(this.tabs)},_setupHeightStyle:function(t){var i,s=this.element.parent();"fill"===t?(i=s.height(),i-=this.element.outerHeight()-this.element.height(),this.element.siblings(":visible").each(function(){var t=e(this),s=t.css("position");"absolute"!==s&&"fixed"!==s&&(i-=t.outerHeight(!0))}),this.element.children().not(this.panels).each(function(){i-=e(this).outerHeight(!0)}),this.panels.each(function(){e(this).height(Math.max(0,i-e(this).innerHeight()+e(this).height()))}).css("overflow","auto")):"auto"===t&&(i=0,this.panels.each(function(){i=Math.max(i,e(this).height("").height())}).height(i))},_eventHandler:function(t){var i=this.options,s=this.active,n=e(t.currentTarget),a=n.closest("li"),o=a[0]===s[0],r=o&&i.collapsible,h=r?e():this._getPanelForTab(a),l=s.length?this._getPanelForTab(s):e(),u={oldTab:s,oldPanel:l,newTab:r?e():a,newPanel:h};t.preventDefault(),a.hasClass("ui-state-disabled")||a.hasClass("ui-tabs-loading")||this.running||o&&!i.collapsible||this._trigger("beforeActivate",t,u)===!1||(i.active=r?!1:this.tabs.index(a),this.active=o?e():a,this.xhr&&this.xhr.abort(),l.length||h.length||e.error("jQuery UI Tabs: Mismatching fragment identifier."),h.length&&this.load(this.tabs.index(a),t),this._toggle(t,u))},_toggle:function(t,i){function s(){a.running=!1,a._trigger("activate",t,i)}function n(){i.newTab.closest("li").addClass("ui-tabs-active ui-state-active"),o.length&&a.options.show?a._show(o,a.options.show,s):(o.show(),s())}var a=this,o=i.newPanel,r=i.oldPanel;this.running=!0,r.length&&this.options.hide?this._hide(r,this.options.hide,function(){i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"),n()}):(i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"),r.hide(),n()),r.attr("aria-hidden","true"),i.oldTab.attr({"aria-selected":"false","aria-expanded":"false"}),o.length&&r.length?i.oldTab.attr("tabIndex",-1):o.length&&this.tabs.filter(function(){return 0===e(this).attr("tabIndex")}).attr("tabIndex",-1),o.attr("aria-hidden","false"),i.newTab.attr({"aria-selected":"true","aria-expanded":"true",tabIndex:0})},_activate:function(t){var i,s=this._findActive(t);s[0]!==this.active[0]&&(s.length||(s=this.active),i=s.find(".ui-tabs-anchor")[0],this._eventHandler({target:i,currentTarget:i,preventDefault:e.noop}))},_findActive:function(t){return t===!1?e():this.tabs.eq(t)},_getIndex:function(e){return"string"==typeof e&&(e=this.anchors.index(this.anchors.filter("[href$='"+e+"']"))),e},_destroy:function(){this.xhr&&this.xhr.abort(),this.element.removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible"),this.tablist.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").removeAttr("role"),this.anchors.removeClass("ui-tabs-anchor").removeAttr("role").removeAttr("tabIndex").removeUniqueId(),this.tablist.unbind(this.eventNamespace),this.tabs.add(this.panels).each(function(){e.data(this,"ui-tabs-destroy")?e(this).remove():e(this).removeClass("ui-state-default ui-state-active ui-state-disabled ui-corner-top ui-corner-bottom ui-widget-content ui-tabs-active ui-tabs-panel").removeAttr("tabIndex").removeAttr("aria-live").removeAttr("aria-busy").removeAttr("aria-selected").removeAttr("aria-labelledby").removeAttr("aria-hidden").removeAttr("aria-expanded").removeAttr("role")}),this.tabs.each(function(){var t=e(this),i=t.data("ui-tabs-aria-controls");i?t.attr("aria-controls",i).removeData("ui-tabs-aria-controls"):t.removeAttr("aria-controls")}),this.panels.show(),"content"!==this.options.heightStyle&&this.panels.css("height","")},enable:function(t){var i=this.options.disabled;i!==!1&&(void 0===t?i=!1:(t=this._getIndex(t),i=e.isArray(i)?e.map(i,function(e){return e!==t?e:null}):e.map(this.tabs,function(e,i){return i!==t?i:null})),this._setupDisabled(i))},disable:function(t){var i=this.options.disabled;if(i!==!0){if(void 0===t)i=!0;else{if(t=this._getIndex(t),-1!==e.inArray(t,i))return;i=e.isArray(i)?e.merge([t],i).sort():[t]}this._setupDisabled(i)}},load:function(t,i){t=this._getIndex(t);var s=this,n=this.tabs.eq(t),a=n.find(".ui-tabs-anchor"),o=this._getPanelForTab(n),r={tab:n,panel:o};this._isLocal(a[0])||(this.xhr=e.ajax(this._ajaxSettings(a,i,r)),this.xhr&&"canceled"!==this.xhr.statusText&&(n.addClass("ui-tabs-loading"),o.attr("aria-busy","true"),this.xhr.success(function(e){setTimeout(function(){o.html(e),s._trigger("load",i,r)},1)}).complete(function(e,t){setTimeout(function(){"abort"===t&&s.panels.stop(!1,!0),n.removeClass("ui-tabs-loading"),o.removeAttr("aria-busy"),e===s.xhr&&delete s.xhr},1)})))},_ajaxSettings:function(t,i,s){var n=this;return{url:t.attr("href"),beforeSend:function(t,a){return n._trigger("beforeLoad",i,e.extend({jqXHR:t,ajaxSettings:a},s))}}},_getPanelForTab:function(t){var i=e(t).attr("aria-controls");return this.element.find(this._sanitizeSelector("#"+i))}}),e.widget("ui.tooltip",{version:"1.11.2",options:{content:function(){var t=e(this).attr("title")||"";return e("<a>").text(t).html()},hide:!0,items:"[title]:not([disabled])",position:{my:"left top+15",at:"left bottom",collision:"flipfit flip"},show:!0,tooltipClass:null,track:!1,close:null,open:null},_addDescribedBy:function(t,i){var s=(t.attr("aria-describedby")||"").split(/\s+/);s.push(i),t.data("ui-tooltip-id",i).attr("aria-describedby",e.trim(s.join(" ")))},_removeDescribedBy:function(t){var i=t.data("ui-tooltip-id"),s=(t.attr("aria-describedby")||"").split(/\s+/),n=e.inArray(i,s);-1!==n&&s.splice(n,1),t.removeData("ui-tooltip-id"),s=e.trim(s.join(" ")),s?t.attr("aria-describedby",s):t.removeAttr("aria-describedby")},_create:function(){this._on({mouseover:"open",focusin:"open"}),this.tooltips={},this.parents={},this.options.disabled&&this._disable(),this.liveRegion=e("<div>").attr({role:"log","aria-live":"assertive","aria-relevant":"additions"}).addClass("ui-helper-hidden-accessible").appendTo(this.document[0].body)},_setOption:function(t,i){var s=this;return"disabled"===t?(this[i?"_disable":"_enable"](),this.options[t]=i,void 0):(this._super(t,i),"content"===t&&e.each(this.tooltips,function(e,t){s._updateContent(t.element)}),void 0)},_disable:function(){var t=this;e.each(this.tooltips,function(i,s){var n=e.Event("blur");n.target=n.currentTarget=s.element[0],t.close(n,!0)}),this.element.find(this.options.items).addBack().each(function(){var t=e(this);t.is("[title]")&&t.data("ui-tooltip-title",t.attr("title")).removeAttr("title")})},_enable:function(){this.element.find(this.options.items).addBack().each(function(){var t=e(this);t.data("ui-tooltip-title")&&t.attr("title",t.data("ui-tooltip-title"))})},open:function(t){var i=this,s=e(t?t.target:this.element).closest(this.options.items);s.length&&!s.data("ui-tooltip-id")&&(s.attr("title")&&s.data("ui-tooltip-title",s.attr("title")),s.data("ui-tooltip-open",!0),t&&"mouseover"===t.type&&s.parents().each(function(){var t,s=e(this);s.data("ui-tooltip-open")&&(t=e.Event("blur"),t.target=t.currentTarget=this,i.close(t,!0)),s.attr("title")&&(s.uniqueId(),i.parents[this.id]={element:this,title:s.attr("title")},s.attr("title",""))}),this._updateContent(s,t))},_updateContent:function(e,t){var i,s=this.options.content,n=this,a=t?t.type:null;return"string"==typeof s?this._open(t,e,s):(i=s.call(e[0],function(i){e.data("ui-tooltip-open")&&n._delay(function(){t&&(t.type=a),this._open(t,e,i)})}),i&&this._open(t,e,i),void 0)},_open:function(t,i,s){function n(e){u.of=e,o.is(":hidden")||o.position(u)}var a,o,r,h,l,u=e.extend({},this.options.position);if(s){if(a=this._find(i))return a.tooltip.find(".ui-tooltip-content").html(s),void 0;i.is("[title]")&&(t&&"mouseover"===t.type?i.attr("title",""):i.removeAttr("title")),a=this._tooltip(i),o=a.tooltip,this._addDescribedBy(i,o.attr("id")),o.find(".ui-tooltip-content").html(s),this.liveRegion.children().hide(),s.clone?(l=s.clone(),l.removeAttr("id").find("[id]").removeAttr("id")):l=s,e("<div>").html(l).appendTo(this.liveRegion),this.options.track&&t&&/^mouse/.test(t.type)?(this._on(this.document,{mousemove:n}),n(t)):o.position(e.extend({of:i},this.options.position)),o.hide(),this._show(o,this.options.show),this.options.show&&this.options.show.delay&&(h=this.delayedShow=setInterval(function(){o.is(":visible")&&(n(u.of),clearInterval(h))},e.fx.interval)),this._trigger("open",t,{tooltip:o}),r={keyup:function(t){if(t.keyCode===e.ui.keyCode.ESCAPE){var s=e.Event(t);s.currentTarget=i[0],this.close(s,!0)}}},i[0]!==this.element[0]&&(r.remove=function(){this._removeTooltip(o)}),t&&"mouseover"!==t.type||(r.mouseleave="close"),t&&"focusin"!==t.type||(r.focusout="close"),this._on(!0,i,r)}},close:function(t){var i,s=this,n=e(t?t.currentTarget:this.element),a=this._find(n);a&&(i=a.tooltip,a.closing||(clearInterval(this.delayedShow),n.data("ui-tooltip-title")&&!n.attr("title")&&n.attr("title",n.data("ui-tooltip-title")),this._removeDescribedBy(n),a.hiding=!0,i.stop(!0),this._hide(i,this.options.hide,function(){s._removeTooltip(e(this))}),n.removeData("ui-tooltip-open"),this._off(n,"mouseleave focusout keyup"),n[0]!==this.element[0]&&this._off(n,"remove"),this._off(this.document,"mousemove"),t&&"mouseleave"===t.type&&e.each(this.parents,function(t,i){e(i.element).attr("title",i.title),delete s.parents[t]}),a.closing=!0,this._trigger("close",t,{tooltip:i}),a.hiding||(a.closing=!1)))},_tooltip:function(t){var i=e("<div>").attr("role","tooltip").addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content "+(this.options.tooltipClass||"")),s=i.uniqueId().attr("id");return e("<div>").addClass("ui-tooltip-content").appendTo(i),i.appendTo(this.document[0].body),this.tooltips[s]={element:t,tooltip:i}},_find:function(e){var t=e.data("ui-tooltip-id");return t?this.tooltips[t]:null},_removeTooltip:function(e){e.remove(),delete this.tooltips[e.attr("id")]},_destroy:function(){var t=this;e.each(this.tooltips,function(i,s){var n=e.Event("blur"),a=s.element;n.target=n.currentTarget=a[0],t.close(n,!0),e("#"+i).remove(),a.data("ui-tooltip-title")&&(a.attr("title")||a.attr("title",a.data("ui-tooltip-title")),a.removeData("ui-tooltip-title"))}),this.liveRegion.remove()}});var y="ui-effects-",b=e;e.effects={effect:{}},function(e,t){function i(e,t,i){var s=d[t.type]||{};return null==e?i||!t.def?null:t.def:(e=s.floor?~~e:parseFloat(e),isNaN(e)?t.def:s.mod?(e+s.mod)%s.mod:0>e?0:e>s.max?s.max:e)}function s(i){var s=l(),n=s._rgba=[];return i=i.toLowerCase(),f(h,function(e,a){var o,r=a.re.exec(i),h=r&&a.parse(r),l=a.space||"rgba";return h?(o=s[l](h),s[u[l].cache]=o[u[l].cache],n=s._rgba=o._rgba,!1):t}),n.length?("0,0,0,0"===n.join()&&e.extend(n,a.transparent),s):a[i]}function n(e,t,i){return i=(i+1)%1,1>6*i?e+6*(t-e)*i:1>2*i?t:2>3*i?e+6*(t-e)*(2/3-i):e}var a,o="backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor",r=/^([\-+])=\s*(\d+\.?\d*)/,h=[{re:/rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,parse:function(e){return[e[1],e[2],e[3],e[4]]}},{re:/rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,parse:function(e){return[2.55*e[1],2.55*e[2],2.55*e[3],e[4]]}},{re:/#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,parse:function(e){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}},{re:/#([a-f0-9])([a-f0-9])([a-f0-9])/,parse:function(e){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}},{re:/hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,space:"hsla",parse:function(e){return[e[1],e[2]/100,e[3]/100,e[4]]}}],l=e.Color=function(t,i,s,n){return new e.Color.fn.parse(t,i,s,n)},u={rgba:{props:{red:{idx:0,type:"byte"},green:{idx:1,type:"byte"},blue:{idx:2,type:"byte"}}},hsla:{props:{hue:{idx:0,type:"degrees"},saturation:{idx:1,type:"percent"},lightness:{idx:2,type:"percent"}}}},d={"byte":{floor:!0,max:255},percent:{max:1},degrees:{mod:360,floor:!0}},c=l.support={},p=e("<p>")[0],f=e.each;p.style.cssText="background-color:rgba(1,1,1,.5)",c.rgba=p.style.backgroundColor.indexOf("rgba")>-1,f(u,function(e,t){t.cache="_"+e,t.props.alpha={idx:3,type:"percent",def:1}}),l.fn=e.extend(l.prototype,{parse:function(n,o,r,h){if(n===t)return this._rgba=[null,null,null,null],this;(n.jquery||n.nodeType)&&(n=e(n).css(o),o=t);var d=this,c=e.type(n),p=this._rgba=[];return o!==t&&(n=[n,o,r,h],c="array"),"string"===c?this.parse(s(n)||a._default):"array"===c?(f(u.rgba.props,function(e,t){p[t.idx]=i(n[t.idx],t)}),this):"object"===c?(n instanceof l?f(u,function(e,t){n[t.cache]&&(d[t.cache]=n[t.cache].slice())}):f(u,function(t,s){var a=s.cache;f(s.props,function(e,t){if(!d[a]&&s.to){if("alpha"===e||null==n[e])return;d[a]=s.to(d._rgba)}d[a][t.idx]=i(n[e],t,!0)}),d[a]&&0>e.inArray(null,d[a].slice(0,3))&&(d[a][3]=1,s.from&&(d._rgba=s.from(d[a])))}),this):t},is:function(e){var i=l(e),s=!0,n=this;return f(u,function(e,a){var o,r=i[a.cache];return r&&(o=n[a.cache]||a.to&&a.to(n._rgba)||[],f(a.props,function(e,i){return null!=r[i.idx]?s=r[i.idx]===o[i.idx]:t})),s}),s},_space:function(){var e=[],t=this;return f(u,function(i,s){t[s.cache]&&e.push(i)}),e.pop()},transition:function(e,t){var s=l(e),n=s._space(),a=u[n],o=0===this.alpha()?l("transparent"):this,r=o[a.cache]||a.to(o._rgba),h=r.slice();return s=s[a.cache],f(a.props,function(e,n){var a=n.idx,o=r[a],l=s[a],u=d[n.type]||{};null!==l&&(null===o?h[a]=l:(u.mod&&(l-o>u.mod/2?o+=u.mod:o-l>u.mod/2&&(o-=u.mod)),h[a]=i((l-o)*t+o,n)))}),this[n](h)},blend:function(t){if(1===this._rgba[3])return this;var i=this._rgba.slice(),s=i.pop(),n=l(t)._rgba;return l(e.map(i,function(e,t){return(1-s)*n[t]+s*e}))},toRgbaString:function(){var t="rgba(",i=e.map(this._rgba,function(e,t){return null==e?t>2?1:0:e});return 1===i[3]&&(i.pop(),t="rgb("),t+i.join()+")"},toHslaString:function(){var t="hsla(",i=e.map(this.hsla(),function(e,t){return null==e&&(e=t>2?1:0),t&&3>t&&(e=Math.round(100*e)+"%"),e});return 1===i[3]&&(i.pop(),t="hsl("),t+i.join()+")"},toHexString:function(t){var i=this._rgba.slice(),s=i.pop();return t&&i.push(~~(255*s)),"#"+e.map(i,function(e){return e=(e||0).toString(16),1===e.length?"0"+e:e}).join("")},toString:function(){return 0===this._rgba[3]?"transparent":this.toRgbaString()}}),l.fn.parse.prototype=l.fn,u.hsla.to=function(e){if(null==e[0]||null==e[1]||null==e[2])return[null,null,null,e[3]];var t,i,s=e[0]/255,n=e[1]/255,a=e[2]/255,o=e[3],r=Math.max(s,n,a),h=Math.min(s,n,a),l=r-h,u=r+h,d=.5*u;return t=h===r?0:s===r?60*(n-a)/l+360:n===r?60*(a-s)/l+120:60*(s-n)/l+240,i=0===l?0:.5>=d?l/u:l/(2-u),[Math.round(t)%360,i,d,null==o?1:o]},u.hsla.from=function(e){if(null==e[0]||null==e[1]||null==e[2])return[null,null,null,e[3]];var t=e[0]/360,i=e[1],s=e[2],a=e[3],o=.5>=s?s*(1+i):s+i-s*i,r=2*s-o;return[Math.round(255*n(r,o,t+1/3)),Math.round(255*n(r,o,t)),Math.round(255*n(r,o,t-1/3)),a]},f(u,function(s,n){var a=n.props,o=n.cache,h=n.to,u=n.from;l.fn[s]=function(s){if(h&&!this[o]&&(this[o]=h(this._rgba)),s===t)return this[o].slice();var n,r=e.type(s),d="array"===r||"object"===r?s:arguments,c=this[o].slice();return f(a,function(e,t){var s=d["object"===r?e:t.idx];null==s&&(s=c[t.idx]),c[t.idx]=i(s,t)}),u?(n=l(u(c)),n[o]=c,n):l(c)},f(a,function(t,i){l.fn[t]||(l.fn[t]=function(n){var a,o=e.type(n),h="alpha"===t?this._hsla?"hsla":"rgba":s,l=this[h](),u=l[i.idx];return"undefined"===o?u:("function"===o&&(n=n.call(this,u),o=e.type(n)),null==n&&i.empty?this:("string"===o&&(a=r.exec(n),a&&(n=u+parseFloat(a[2])*("+"===a[1]?1:-1))),l[i.idx]=n,this[h](l)))})})}),l.hook=function(t){var i=t.split(" ");f(i,function(t,i){e.cssHooks[i]={set:function(t,n){var a,o,r="";if("transparent"!==n&&("string"!==e.type(n)||(a=s(n)))){if(n=l(a||n),!c.rgba&&1!==n._rgba[3]){for(o="backgroundColor"===i?t.parentNode:t;(""===r||"transparent"===r)&&o&&o.style;)try{r=e.css(o,"backgroundColor"),o=o.parentNode}catch(h){}n=n.blend(r&&"transparent"!==r?r:"_default")}n=n.toRgbaString()}try{t.style[i]=n}catch(h){}}},e.fx.step[i]=function(t){t.colorInit||(t.start=l(t.elem,i),t.end=l(t.end),t.colorInit=!0),e.cssHooks[i].set(t.elem,t.start.transition(t.end,t.pos))}})},l.hook(o),e.cssHooks.borderColor={expand:function(e){var t={};return f(["Top","Right","Bottom","Left"],function(i,s){t["border"+s+"Color"]=e}),t}},a=e.Color.names={aqua:"#00ffff",black:"#000000",blue:"#0000ff",fuchsia:"#ff00ff",gray:"#808080",green:"#008000",lime:"#00ff00",maroon:"#800000",navy:"#000080",olive:"#808000",purple:"#800080",red:"#ff0000",silver:"#c0c0c0",teal:"#008080",white:"#ffffff",yellow:"#ffff00",transparent:[null,null,null,0],_default:"#ffffff"}}(b),function(){function t(t){var i,s,n=t.ownerDocument.defaultView?t.ownerDocument.defaultView.getComputedStyle(t,null):t.currentStyle,a={};if(n&&n.length&&n[0]&&n[n[0]])for(s=n.length;s--;)i=n[s],"string"==typeof n[i]&&(a[e.camelCase(i)]=n[i]);else for(i in n)"string"==typeof n[i]&&(a[i]=n[i]);return a}function i(t,i){var s,a,o={};for(s in i)a=i[s],t[s]!==a&&(n[s]||(e.fx.step[s]||!isNaN(parseFloat(a)))&&(o[s]=a));return o}var s=["add","remove","toggle"],n={border:1,borderBottom:1,borderColor:1,borderLeft:1,borderRight:1,borderTop:1,borderWidth:1,margin:1,padding:1};e.each(["borderLeftStyle","borderRightStyle","borderBottomStyle","borderTopStyle"],function(t,i){e.fx.step[i]=function(e){("none"!==e.end&&!e.setAttr||1===e.pos&&!e.setAttr)&&(b.style(e.elem,i,e.end),e.setAttr=!0)}}),e.fn.addBack||(e.fn.addBack=function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}),e.effects.animateClass=function(n,a,o,r){var h=e.speed(a,o,r);return this.queue(function(){var a,o=e(this),r=o.attr("class")||"",l=h.children?o.find("*").addBack():o;l=l.map(function(){var i=e(this);return{el:i,start:t(this)}}),a=function(){e.each(s,function(e,t){n[t]&&o[t+"Class"](n[t])})},a(),l=l.map(function(){return this.end=t(this.el[0]),this.diff=i(this.start,this.end),this}),o.attr("class",r),l=l.map(function(){var t=this,i=e.Deferred(),s=e.extend({},h,{queue:!1,complete:function(){i.resolve(t)}});return this.el.animate(this.diff,s),i.promise()}),e.when.apply(e,l.get()).done(function(){a(),e.each(arguments,function(){var t=this.el;e.each(this.diff,function(e){t.css(e,"")})}),h.complete.call(o[0])})})},e.fn.extend({addClass:function(t){return function(i,s,n,a){return s?e.effects.animateClass.call(this,{add:i},s,n,a):t.apply(this,arguments)}}(e.fn.addClass),removeClass:function(t){return function(i,s,n,a){return arguments.length>1?e.effects.animateClass.call(this,{remove:i},s,n,a):t.apply(this,arguments)}}(e.fn.removeClass),toggleClass:function(t){return function(i,s,n,a,o){return"boolean"==typeof s||void 0===s?n?e.effects.animateClass.call(this,s?{add:i}:{remove:i},n,a,o):t.apply(this,arguments):e.effects.animateClass.call(this,{toggle:i},s,n,a)}}(e.fn.toggleClass),switchClass:function(t,i,s,n,a){return e.effects.animateClass.call(this,{add:i,remove:t},s,n,a)}})}(),function(){function t(t,i,s,n){return e.isPlainObject(t)&&(i=t,t=t.effect),t={effect:t},null==i&&(i={}),e.isFunction(i)&&(n=i,s=null,i={}),("number"==typeof i||e.fx.speeds[i])&&(n=s,s=i,i={}),e.isFunction(s)&&(n=s,s=null),i&&e.extend(t,i),s=s||i.duration,t.duration=e.fx.off?0:"number"==typeof s?s:s in e.fx.speeds?e.fx.speeds[s]:e.fx.speeds._default,t.complete=n||i.complete,t}function i(t){return!t||"number"==typeof t||e.fx.speeds[t]?!0:"string"!=typeof t||e.effects.effect[t]?e.isFunction(t)?!0:"object"!=typeof t||t.effect?!1:!0:!0}e.extend(e.effects,{version:"1.11.2",save:function(e,t){for(var i=0;t.length>i;i++)null!==t[i]&&e.data(y+t[i],e[0].style[t[i]])},restore:function(e,t){var i,s;for(s=0;t.length>s;s++)null!==t[s]&&(i=e.data(y+t[s]),void 0===i&&(i=""),e.css(t[s],i))},setMode:function(e,t){return"toggle"===t&&(t=e.is(":hidden")?"show":"hide"),t},getBaseline:function(e,t){var i,s;switch(e[0]){case"top":i=0;break;case"middle":i=.5;break;case"bottom":i=1;break;default:i=e[0]/t.height}switch(e[1]){case"left":s=0;break;case"center":s=.5;break;case"right":s=1;break;default:s=e[1]/t.width}return{x:s,y:i}},createWrapper:function(t){if(t.parent().is(".ui-effects-wrapper"))return t.parent();var i={width:t.outerWidth(!0),height:t.outerHeight(!0),"float":t.css("float")},s=e("<div></div>").addClass("ui-effects-wrapper").css({fontSize:"100%",background:"transparent",border:"none",margin:0,padding:0}),n={width:t.width(),height:t.height()},a=document.activeElement;try{a.id}catch(o){a=document.body}return t.wrap(s),(t[0]===a||e.contains(t[0],a))&&e(a).focus(),s=t.parent(),"static"===t.css("position")?(s.css({position:"relative"}),t.css({position:"relative"})):(e.extend(i,{position:t.css("position"),zIndex:t.css("z-index")}),e.each(["top","left","bottom","right"],function(e,s){i[s]=t.css(s),isNaN(parseInt(i[s],10))&&(i[s]="auto")}),t.css({position:"relative",top:0,left:0,right:"auto",bottom:"auto"})),t.css(n),s.css(i).show()},removeWrapper:function(t){var i=document.activeElement;return t.parent().is(".ui-effects-wrapper")&&(t.parent().replaceWith(t),(t[0]===i||e.contains(t[0],i))&&e(i).focus()),t},setTransition:function(t,i,s,n){return n=n||{},e.each(i,function(e,i){var a=t.cssUnit(i);a[0]>0&&(n[i]=a[0]*s+a[1])}),n}}),e.fn.extend({effect:function(){function i(t){function i(){e.isFunction(a)&&a.call(n[0]),e.isFunction(t)&&t()}var n=e(this),a=s.complete,r=s.mode;(n.is(":hidden")?"hide"===r:"show"===r)?(n[r](),i()):o.call(n[0],s,i)}var s=t.apply(this,arguments),n=s.mode,a=s.queue,o=e.effects.effect[s.effect];return e.fx.off||!o?n?this[n](s.duration,s.complete):this.each(function(){s.complete&&s.complete.call(this)}):a===!1?this.each(i):this.queue(a||"fx",i)},show:function(e){return function(s){if(i(s))return e.apply(this,arguments);var n=t.apply(this,arguments);return n.mode="show",this.effect.call(this,n)}}(e.fn.show),hide:function(e){return function(s){if(i(s))return e.apply(this,arguments);
var n=t.apply(this,arguments);return n.mode="hide",this.effect.call(this,n)}}(e.fn.hide),toggle:function(e){return function(s){if(i(s)||"boolean"==typeof s)return e.apply(this,arguments);var n=t.apply(this,arguments);return n.mode="toggle",this.effect.call(this,n)}}(e.fn.toggle),cssUnit:function(t){var i=this.css(t),s=[];return e.each(["em","px","%","pt"],function(e,t){i.indexOf(t)>0&&(s=[parseFloat(i),t])}),s}})}(),function(){var t={};e.each(["Quad","Cubic","Quart","Quint","Expo"],function(e,i){t[i]=function(t){return Math.pow(t,e+2)}}),e.extend(t,{Sine:function(e){return 1-Math.cos(e*Math.PI/2)},Circ:function(e){return 1-Math.sqrt(1-e*e)},Elastic:function(e){return 0===e||1===e?e:-Math.pow(2,8*(e-1))*Math.sin((80*(e-1)-7.5)*Math.PI/15)},Back:function(e){return e*e*(3*e-2)},Bounce:function(e){for(var t,i=4;((t=Math.pow(2,--i))-1)/11>e;);return 1/Math.pow(4,3-i)-7.5625*Math.pow((3*t-2)/22-e,2)}}),e.each(t,function(t,i){e.easing["easeIn"+t]=i,e.easing["easeOut"+t]=function(e){return 1-i(1-e)},e.easing["easeInOut"+t]=function(e){return.5>e?i(2*e)/2:1-i(-2*e+2)/2}})}(),e.effects,e.effects.effect.blind=function(t,i){var s,n,a,o=e(this),r=/up|down|vertical/,h=/up|left|vertical|horizontal/,l=["position","top","bottom","left","right","height","width"],u=e.effects.setMode(o,t.mode||"hide"),d=t.direction||"up",c=r.test(d),p=c?"height":"width",f=c?"top":"left",m=h.test(d),g={},v="show"===u;o.parent().is(".ui-effects-wrapper")?e.effects.save(o.parent(),l):e.effects.save(o,l),o.show(),s=e.effects.createWrapper(o).css({overflow:"hidden"}),n=s[p](),a=parseFloat(s.css(f))||0,g[p]=v?n:0,m||(o.css(c?"bottom":"right",0).css(c?"top":"left","auto").css({position:"absolute"}),g[f]=v?a:n+a),v&&(s.css(p,0),m||s.css(f,a+n)),s.animate(g,{duration:t.duration,easing:t.easing,queue:!1,complete:function(){"hide"===u&&o.hide(),e.effects.restore(o,l),e.effects.removeWrapper(o),i()}})},e.effects.effect.bounce=function(t,i){var s,n,a,o=e(this),r=["position","top","bottom","left","right","height","width"],h=e.effects.setMode(o,t.mode||"effect"),l="hide"===h,u="show"===h,d=t.direction||"up",c=t.distance,p=t.times||5,f=2*p+(u||l?1:0),m=t.duration/f,g=t.easing,v="up"===d||"down"===d?"top":"left",y="up"===d||"left"===d,b=o.queue(),_=b.length;for((u||l)&&r.push("opacity"),e.effects.save(o,r),o.show(),e.effects.createWrapper(o),c||(c=o["top"===v?"outerHeight":"outerWidth"]()/3),u&&(a={opacity:1},a[v]=0,o.css("opacity",0).css(v,y?2*-c:2*c).animate(a,m,g)),l&&(c/=Math.pow(2,p-1)),a={},a[v]=0,s=0;p>s;s++)n={},n[v]=(y?"-=":"+=")+c,o.animate(n,m,g).animate(a,m,g),c=l?2*c:c/2;l&&(n={opacity:0},n[v]=(y?"-=":"+=")+c,o.animate(n,m,g)),o.queue(function(){l&&o.hide(),e.effects.restore(o,r),e.effects.removeWrapper(o),i()}),_>1&&b.splice.apply(b,[1,0].concat(b.splice(_,f+1))),o.dequeue()},e.effects.effect.clip=function(t,i){var s,n,a,o=e(this),r=["position","top","bottom","left","right","height","width"],h=e.effects.setMode(o,t.mode||"hide"),l="show"===h,u=t.direction||"vertical",d="vertical"===u,c=d?"height":"width",p=d?"top":"left",f={};e.effects.save(o,r),o.show(),s=e.effects.createWrapper(o).css({overflow:"hidden"}),n="IMG"===o[0].tagName?s:o,a=n[c](),l&&(n.css(c,0),n.css(p,a/2)),f[c]=l?a:0,f[p]=l?0:a/2,n.animate(f,{queue:!1,duration:t.duration,easing:t.easing,complete:function(){l||o.hide(),e.effects.restore(o,r),e.effects.removeWrapper(o),i()}})},e.effects.effect.drop=function(t,i){var s,n=e(this),a=["position","top","bottom","left","right","opacity","height","width"],o=e.effects.setMode(n,t.mode||"hide"),r="show"===o,h=t.direction||"left",l="up"===h||"down"===h?"top":"left",u="up"===h||"left"===h?"pos":"neg",d={opacity:r?1:0};e.effects.save(n,a),n.show(),e.effects.createWrapper(n),s=t.distance||n["top"===l?"outerHeight":"outerWidth"](!0)/2,r&&n.css("opacity",0).css(l,"pos"===u?-s:s),d[l]=(r?"pos"===u?"+=":"-=":"pos"===u?"-=":"+=")+s,n.animate(d,{queue:!1,duration:t.duration,easing:t.easing,complete:function(){"hide"===o&&n.hide(),e.effects.restore(n,a),e.effects.removeWrapper(n),i()}})},e.effects.effect.explode=function(t,i){function s(){b.push(this),b.length===d*c&&n()}function n(){p.css({visibility:"visible"}),e(b).remove(),m||p.hide(),i()}var a,o,r,h,l,u,d=t.pieces?Math.round(Math.sqrt(t.pieces)):3,c=d,p=e(this),f=e.effects.setMode(p,t.mode||"hide"),m="show"===f,g=p.show().css("visibility","hidden").offset(),v=Math.ceil(p.outerWidth()/c),y=Math.ceil(p.outerHeight()/d),b=[];for(a=0;d>a;a++)for(h=g.top+a*y,u=a-(d-1)/2,o=0;c>o;o++)r=g.left+o*v,l=o-(c-1)/2,p.clone().appendTo("body").wrap("<div></div>").css({position:"absolute",visibility:"visible",left:-o*v,top:-a*y}).parent().addClass("ui-effects-explode").css({position:"absolute",overflow:"hidden",width:v,height:y,left:r+(m?l*v:0),top:h+(m?u*y:0),opacity:m?0:1}).animate({left:r+(m?0:l*v),top:h+(m?0:u*y),opacity:m?1:0},t.duration||500,t.easing,s)},e.effects.effect.fade=function(t,i){var s=e(this),n=e.effects.setMode(s,t.mode||"toggle");s.animate({opacity:n},{queue:!1,duration:t.duration,easing:t.easing,complete:i})},e.effects.effect.fold=function(t,i){var s,n,a=e(this),o=["position","top","bottom","left","right","height","width"],r=e.effects.setMode(a,t.mode||"hide"),h="show"===r,l="hide"===r,u=t.size||15,d=/([0-9]+)%/.exec(u),c=!!t.horizFirst,p=h!==c,f=p?["width","height"]:["height","width"],m=t.duration/2,g={},v={};e.effects.save(a,o),a.show(),s=e.effects.createWrapper(a).css({overflow:"hidden"}),n=p?[s.width(),s.height()]:[s.height(),s.width()],d&&(u=parseInt(d[1],10)/100*n[l?0:1]),h&&s.css(c?{height:0,width:u}:{height:u,width:0}),g[f[0]]=h?n[0]:u,v[f[1]]=h?n[1]:0,s.animate(g,m,t.easing).animate(v,m,t.easing,function(){l&&a.hide(),e.effects.restore(a,o),e.effects.removeWrapper(a),i()})},e.effects.effect.highlight=function(t,i){var s=e(this),n=["backgroundImage","backgroundColor","opacity"],a=e.effects.setMode(s,t.mode||"show"),o={backgroundColor:s.css("backgroundColor")};"hide"===a&&(o.opacity=0),e.effects.save(s,n),s.show().css({backgroundImage:"none",backgroundColor:t.color||"#ffff99"}).animate(o,{queue:!1,duration:t.duration,easing:t.easing,complete:function(){"hide"===a&&s.hide(),e.effects.restore(s,n),i()}})},e.effects.effect.size=function(t,i){var s,n,a,o=e(this),r=["position","top","bottom","left","right","width","height","overflow","opacity"],h=["position","top","bottom","left","right","overflow","opacity"],l=["width","height","overflow"],u=["fontSize"],d=["borderTopWidth","borderBottomWidth","paddingTop","paddingBottom"],c=["borderLeftWidth","borderRightWidth","paddingLeft","paddingRight"],p=e.effects.setMode(o,t.mode||"effect"),f=t.restore||"effect"!==p,m=t.scale||"both",g=t.origin||["middle","center"],v=o.css("position"),y=f?r:h,b={height:0,width:0,outerHeight:0,outerWidth:0};"show"===p&&o.show(),s={height:o.height(),width:o.width(),outerHeight:o.outerHeight(),outerWidth:o.outerWidth()},"toggle"===t.mode&&"show"===p?(o.from=t.to||b,o.to=t.from||s):(o.from=t.from||("show"===p?b:s),o.to=t.to||("hide"===p?b:s)),a={from:{y:o.from.height/s.height,x:o.from.width/s.width},to:{y:o.to.height/s.height,x:o.to.width/s.width}},("box"===m||"both"===m)&&(a.from.y!==a.to.y&&(y=y.concat(d),o.from=e.effects.setTransition(o,d,a.from.y,o.from),o.to=e.effects.setTransition(o,d,a.to.y,o.to)),a.from.x!==a.to.x&&(y=y.concat(c),o.from=e.effects.setTransition(o,c,a.from.x,o.from),o.to=e.effects.setTransition(o,c,a.to.x,o.to))),("content"===m||"both"===m)&&a.from.y!==a.to.y&&(y=y.concat(u).concat(l),o.from=e.effects.setTransition(o,u,a.from.y,o.from),o.to=e.effects.setTransition(o,u,a.to.y,o.to)),e.effects.save(o,y),o.show(),e.effects.createWrapper(o),o.css("overflow","hidden").css(o.from),g&&(n=e.effects.getBaseline(g,s),o.from.top=(s.outerHeight-o.outerHeight())*n.y,o.from.left=(s.outerWidth-o.outerWidth())*n.x,o.to.top=(s.outerHeight-o.to.outerHeight)*n.y,o.to.left=(s.outerWidth-o.to.outerWidth)*n.x),o.css(o.from),("content"===m||"both"===m)&&(d=d.concat(["marginTop","marginBottom"]).concat(u),c=c.concat(["marginLeft","marginRight"]),l=r.concat(d).concat(c),o.find("*[width]").each(function(){var i=e(this),s={height:i.height(),width:i.width(),outerHeight:i.outerHeight(),outerWidth:i.outerWidth()};f&&e.effects.save(i,l),i.from={height:s.height*a.from.y,width:s.width*a.from.x,outerHeight:s.outerHeight*a.from.y,outerWidth:s.outerWidth*a.from.x},i.to={height:s.height*a.to.y,width:s.width*a.to.x,outerHeight:s.height*a.to.y,outerWidth:s.width*a.to.x},a.from.y!==a.to.y&&(i.from=e.effects.setTransition(i,d,a.from.y,i.from),i.to=e.effects.setTransition(i,d,a.to.y,i.to)),a.from.x!==a.to.x&&(i.from=e.effects.setTransition(i,c,a.from.x,i.from),i.to=e.effects.setTransition(i,c,a.to.x,i.to)),i.css(i.from),i.animate(i.to,t.duration,t.easing,function(){f&&e.effects.restore(i,l)})})),o.animate(o.to,{queue:!1,duration:t.duration,easing:t.easing,complete:function(){0===o.to.opacity&&o.css("opacity",o.from.opacity),"hide"===p&&o.hide(),e.effects.restore(o,y),f||("static"===v?o.css({position:"relative",top:o.to.top,left:o.to.left}):e.each(["top","left"],function(e,t){o.css(t,function(t,i){var s=parseInt(i,10),n=e?o.to.left:o.to.top;return"auto"===i?n+"px":s+n+"px"})})),e.effects.removeWrapper(o),i()}})},e.effects.effect.scale=function(t,i){var s=e(this),n=e.extend(!0,{},t),a=e.effects.setMode(s,t.mode||"effect"),o=parseInt(t.percent,10)||(0===parseInt(t.percent,10)?0:"hide"===a?0:100),r=t.direction||"both",h=t.origin,l={height:s.height(),width:s.width(),outerHeight:s.outerHeight(),outerWidth:s.outerWidth()},u={y:"horizontal"!==r?o/100:1,x:"vertical"!==r?o/100:1};n.effect="size",n.queue=!1,n.complete=i,"effect"!==a&&(n.origin=h||["middle","center"],n.restore=!0),n.from=t.from||("show"===a?{height:0,width:0,outerHeight:0,outerWidth:0}:l),n.to={height:l.height*u.y,width:l.width*u.x,outerHeight:l.outerHeight*u.y,outerWidth:l.outerWidth*u.x},n.fade&&("show"===a&&(n.from.opacity=0,n.to.opacity=1),"hide"===a&&(n.from.opacity=1,n.to.opacity=0)),s.effect(n)},e.effects.effect.puff=function(t,i){var s=e(this),n=e.effects.setMode(s,t.mode||"hide"),a="hide"===n,o=parseInt(t.percent,10)||150,r=o/100,h={height:s.height(),width:s.width(),outerHeight:s.outerHeight(),outerWidth:s.outerWidth()};e.extend(t,{effect:"scale",queue:!1,fade:!0,mode:n,complete:i,percent:a?o:100,from:a?h:{height:h.height*r,width:h.width*r,outerHeight:h.outerHeight*r,outerWidth:h.outerWidth*r}}),s.effect(t)},e.effects.effect.pulsate=function(t,i){var s,n=e(this),a=e.effects.setMode(n,t.mode||"show"),o="show"===a,r="hide"===a,h=o||"hide"===a,l=2*(t.times||5)+(h?1:0),u=t.duration/l,d=0,c=n.queue(),p=c.length;for((o||!n.is(":visible"))&&(n.css("opacity",0).show(),d=1),s=1;l>s;s++)n.animate({opacity:d},u,t.easing),d=1-d;n.animate({opacity:d},u,t.easing),n.queue(function(){r&&n.hide(),i()}),p>1&&c.splice.apply(c,[1,0].concat(c.splice(p,l+1))),n.dequeue()},e.effects.effect.shake=function(t,i){var s,n=e(this),a=["position","top","bottom","left","right","height","width"],o=e.effects.setMode(n,t.mode||"effect"),r=t.direction||"left",h=t.distance||20,l=t.times||3,u=2*l+1,d=Math.round(t.duration/u),c="up"===r||"down"===r?"top":"left",p="up"===r||"left"===r,f={},m={},g={},v=n.queue(),y=v.length;for(e.effects.save(n,a),n.show(),e.effects.createWrapper(n),f[c]=(p?"-=":"+=")+h,m[c]=(p?"+=":"-=")+2*h,g[c]=(p?"-=":"+=")+2*h,n.animate(f,d,t.easing),s=1;l>s;s++)n.animate(m,d,t.easing).animate(g,d,t.easing);n.animate(m,d,t.easing).animate(f,d/2,t.easing).queue(function(){"hide"===o&&n.hide(),e.effects.restore(n,a),e.effects.removeWrapper(n),i()}),y>1&&v.splice.apply(v,[1,0].concat(v.splice(y,u+1))),n.dequeue()},e.effects.effect.slide=function(t,i){var s,n=e(this),a=["position","top","bottom","left","right","width","height"],o=e.effects.setMode(n,t.mode||"show"),r="show"===o,h=t.direction||"left",l="up"===h||"down"===h?"top":"left",u="up"===h||"left"===h,d={};e.effects.save(n,a),n.show(),s=t.distance||n["top"===l?"outerHeight":"outerWidth"](!0),e.effects.createWrapper(n).css({overflow:"hidden"}),r&&n.css(l,u?isNaN(s)?"-"+s:-s:s),d[l]=(r?u?"+=":"-=":u?"-=":"+=")+s,n.animate(d,{queue:!1,duration:t.duration,easing:t.easing,complete:function(){"hide"===o&&n.hide(),e.effects.restore(n,a),e.effects.removeWrapper(n),i()}})},e.effects.effect.transfer=function(t,i){var s=e(this),n=e(t.to),a="fixed"===n.css("position"),o=e("body"),r=a?o.scrollTop():0,h=a?o.scrollLeft():0,l=n.offset(),u={top:l.top-r,left:l.left-h,height:n.innerHeight(),width:n.innerWidth()},d=s.offset(),c=e("<div class='ui-effects-transfer'></div>").appendTo(document.body).addClass(t.className).css({top:d.top-r,left:d.left-h,height:s.innerHeight(),width:s.innerWidth(),position:a?"fixed":"absolute"}).animate(u,t.duration,t.easing,function(){c.remove(),i()})}});;

/*jslint browser: true */ /*global jQuery: true */

/**
 * jQuery Cookie plugin
 *
 * Copyright (c) 2010 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

// TODO JsDoc

/**
 * Create a cookie with the given key and value and other optional parameters.
 *
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Set the value of a cookie.
 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'jquery.com', secure: true });
 * @desc Create a cookie with all available options.
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Create a session cookie.
 * @example $.cookie('the_cookie', null);
 * @desc Delete a cookie by passing null as value. Keep in mind that you have to use the same path and domain
 *       used when the cookie was set.
 *
 * @param String key The key of the cookie.
 * @param String value The value of the cookie.
 * @param Object options An object literal containing key/value pairs to provide optional cookie attributes.
 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
 *                             when the the browser exits.
 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
 *                        require a secure protocol (like HTTPS).
 * @type undefined
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */

/**
 * Get the value of a cookie with the given key.
 *
 * @example $.cookie('the_cookie');
 * @desc Get the value of a cookie.
 *
 * @param String key The key of the cookie.
 * @return The value of the cookie.
 * @type String
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */
jQuery.cookie = function (key, value, options) {
    
    // key and at least value given, set cookie...
    if (arguments.length > 1 && String(value) !== "[object Object]") {
        options = jQuery.extend({}, options);

        if (value === null || value === undefined) {
            options.expires = -1;
        }

        if (typeof options.expires === 'number') {
            var days = options.expires, t = options.expires = new Date();
            t.setDate(t.getDate() + days);
        }
        
        value = String(value);
        
        return (document.cookie = [
            encodeURIComponent(key), '=',
            options.raw ? value : encodeURIComponent(value),
            options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
            options.path ? '; path=' + options.path : '',
            options.domain ? '; domain=' + options.domain : '',
            options.secure ? '; secure' : ''
        ].join(''));
    }

    // key and possibly options given, get cookie...
    options = value || {};
    var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
    return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};
;

/*! Copyright (c) 2013 Brandon Aaron (http://brandon.aaron.sh)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Version: 3.1.12
 *
 * Requires: jQuery 1.2.2+
 */

(function (factory) {
    if ( typeof define === 'function' && define.amd ) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // Node/CommonJS style for Browserify
        module.exports = factory;
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {

    var toFix  = ['wheel', 'mousewheel', 'DOMMouseScroll', 'MozMousePixelScroll'],
        toBind = ( 'onwheel' in document || document.documentMode >= 9 ) ?
                    ['wheel'] : ['mousewheel', 'DomMouseScroll', 'MozMousePixelScroll'],
        slice  = Array.prototype.slice,
        nullLowestDeltaTimeout, lowestDelta;

    if ( $.event.fixHooks ) {
        for ( var i = toFix.length; i; ) {
            $.event.fixHooks[ toFix[--i] ] = $.event.mouseHooks;
        }
    }

    var special = $.event.special.mousewheel = {
        version: '3.1.12',

        setup: function() {
            if ( this.addEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.addEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = handler;
            }
            // Store the line height and page height for this particular element
            $.data(this, 'mousewheel-line-height', special.getLineHeight(this));
            $.data(this, 'mousewheel-page-height', special.getPageHeight(this));
        },

        teardown: function() {
            if ( this.removeEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.removeEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = null;
            }
            // Clean up the data we added to the element
            $.removeData(this, 'mousewheel-line-height');
            $.removeData(this, 'mousewheel-page-height');
        },

        getLineHeight: function(elem) {
            var $elem = $(elem),
                $parent = $elem['offsetParent' in $.fn ? 'offsetParent' : 'parent']();
            if (!$parent.length) {
                $parent = $('body');
            }
            return parseInt($parent.css('fontSize'), 10) || parseInt($elem.css('fontSize'), 10) || 16;
        },

        getPageHeight: function(elem) {
            return $(elem).height();
        },

        settings: {
            adjustOldDeltas: true, // see shouldAdjustOldDeltas() below
            normalizeOffset: true  // calls getBoundingClientRect for each event
        }
    };

    $.fn.extend({
        mousewheel: function(fn) {
            return fn ? this.bind('mousewheel', fn) : this.trigger('mousewheel');
        },

        unmousewheel: function(fn) {
            return this.unbind('mousewheel', fn);
        }
    });


    function handler(event) {
        var orgEvent   = event || window.event,
            args       = slice.call(arguments, 1),
            delta      = 0,
            deltaX     = 0,
            deltaY     = 0,
            absDelta   = 0,
            offsetX    = 0,
            offsetY    = 0;
        event = $.event.fix(orgEvent);
        event.type = 'mousewheel';

        // Old school scrollwheel delta
        if ( 'detail'      in orgEvent ) { deltaY = orgEvent.detail * -1;      }
        if ( 'wheelDelta'  in orgEvent ) { deltaY = orgEvent.wheelDelta;       }
        if ( 'wheelDeltaY' in orgEvent ) { deltaY = orgEvent.wheelDeltaY;      }
        if ( 'wheelDeltaX' in orgEvent ) { deltaX = orgEvent.wheelDeltaX * -1; }

        // Firefox < 17 horizontal scrolling related to DOMMouseScroll event
        if ( 'axis' in orgEvent && orgEvent.axis === orgEvent.HORIZONTAL_AXIS ) {
            deltaX = deltaY * -1;
            deltaY = 0;
        }

        // Set delta to be deltaY or deltaX if deltaY is 0 for backwards compatabilitiy
        delta = deltaY === 0 ? deltaX : deltaY;

        // New school wheel delta (wheel event)
        if ( 'deltaY' in orgEvent ) {
            deltaY = orgEvent.deltaY * -1;
            delta  = deltaY;
        }
        if ( 'deltaX' in orgEvent ) {
            deltaX = orgEvent.deltaX;
            if ( deltaY === 0 ) { delta  = deltaX * -1; }
        }

        // No change actually happened, no reason to go any further
        if ( deltaY === 0 && deltaX === 0 ) { return; }

        // Need to convert lines and pages to pixels if we aren't already in pixels
        // There are three delta modes:
        //   * deltaMode 0 is by pixels, nothing to do
        //   * deltaMode 1 is by lines
        //   * deltaMode 2 is by pages
        if ( orgEvent.deltaMode === 1 ) {
            var lineHeight = $.data(this, 'mousewheel-line-height');
            delta  *= lineHeight;
            deltaY *= lineHeight;
            deltaX *= lineHeight;
        } else if ( orgEvent.deltaMode === 2 ) {
            var pageHeight = $.data(this, 'mousewheel-page-height');
            delta  *= pageHeight;
            deltaY *= pageHeight;
            deltaX *= pageHeight;
        }

        // Store lowest absolute delta to normalize the delta values
        absDelta = Math.max( Math.abs(deltaY), Math.abs(deltaX) );

        if ( !lowestDelta || absDelta < lowestDelta ) {
            lowestDelta = absDelta;

            // Adjust older deltas if necessary
            if ( shouldAdjustOldDeltas(orgEvent, absDelta) ) {
                lowestDelta /= 40;
            }
        }

        // Adjust older deltas if necessary
        if ( shouldAdjustOldDeltas(orgEvent, absDelta) ) {
            // Divide all the things by 40!
            delta  /= 40;
            deltaX /= 40;
            deltaY /= 40;
        }

        // Get a whole, normalized value for the deltas
        delta  = Math[ delta  >= 1 ? 'floor' : 'ceil' ](delta  / lowestDelta);
        deltaX = Math[ deltaX >= 1 ? 'floor' : 'ceil' ](deltaX / lowestDelta);
        deltaY = Math[ deltaY >= 1 ? 'floor' : 'ceil' ](deltaY / lowestDelta);

        // Normalise offsetX and offsetY properties
        if ( special.settings.normalizeOffset && this.getBoundingClientRect ) {
            var boundingRect = this.getBoundingClientRect();
            offsetX = event.clientX - boundingRect.left;
            offsetY = event.clientY - boundingRect.top;
        }

        // Add information to the event object
        event.deltaX = deltaX;
        event.deltaY = deltaY;
        event.deltaFactor = lowestDelta;
        event.offsetX = offsetX;
        event.offsetY = offsetY;
        // Go ahead and set deltaMode to 0 since we converted to pixels
        // Although this is a little odd since we overwrite the deltaX/Y
        // properties with normalized deltas.
        event.deltaMode = 0;

        // Add event and delta to the front of the arguments
        args.unshift(event, delta, deltaX, deltaY);

        // Clearout lowestDelta after sometime to better
        // handle multiple device types that give different
        // a different lowestDelta
        // Ex: trackpad = 3 and mouse wheel = 120
        if (nullLowestDeltaTimeout) { clearTimeout(nullLowestDeltaTimeout); }
        nullLowestDeltaTimeout = setTimeout(nullLowestDelta, 200);

        return ($.event.dispatch || $.event.handle).apply(this, args);
    }

    function nullLowestDelta() {
        lowestDelta = null;
    }

    function shouldAdjustOldDeltas(orgEvent, absDelta) {
        // If this is an older event and the delta is divisable by 120,
        // then we are assuming that the browser is treating this as an
        // older mouse wheel event and that we should divide the deltas
        // by 40 to try and get a more usable deltaFactor.
        // Side note, this actually impacts the reported scroll distance
        // in older browsers and can cause scrolling to be slower than native.
        // Turn this off by setting $.event.special.mousewheel.settings.adjustOldDeltas to false.
        return special.settings.adjustOldDeltas && orgEvent.type === 'mousewheel' && absDelta % 120 === 0;
    }

}));
;

/*! 
 * jquery.event.drag - v 2.2
 * Copyright (c) 2010 Three Dub Media - http://threedubmedia.com
 * Open Source MIT License - http://threedubmedia.com/code/license
 */
// Created: 2008-06-04 
// Updated: 2012-05-21
// REQUIRES: jquery 1.7.x

;(function( $ ){

// add the jquery instance method
$.fn.drag = function( str, arg, opts ){
	// figure out the event type
	var type = typeof str == "string" ? str : "",
	// figure out the event handler...
	fn = $.isFunction( str ) ? str : $.isFunction( arg ) ? arg : null;
	// fix the event type
	if ( type.indexOf("drag") !== 0 ) 
		type = "drag"+ type;
	// were options passed
	opts = ( str == fn ? arg : opts ) || {};
	// trigger or bind event handler
	return fn ? this.bind( type, opts, fn ) : this.trigger( type );
};

// local refs (increase compression)
var $event = $.event, 
$special = $event.special,
// configure the drag special event 
drag = $special.drag = {
	
	// these are the default settings
	defaults: {
		which: 1, // mouse button pressed to start drag sequence
		distance: 0, // distance dragged before dragstart
		not: ':input', // selector to suppress dragging on target elements
		handle: null, // selector to match handle target elements
		relative: false, // true to use "position", false to use "offset"
		drop: true, // false to suppress drop events, true or selector to allow
		click: false // false to suppress click events after dragend (no proxy)
	},
	
	// the key name for stored drag data
	datakey: "dragdata",
	
	// prevent bubbling for better performance
	noBubble: true,
	
	// count bound related events
	add: function( obj ){ 
		// read the interaction data
		var data = $.data( this, drag.datakey ),
		// read any passed options 
		opts = obj.data || {};
		// count another realted event
		data.related += 1;
		// extend data options bound with this event
		// don't iterate "opts" in case it is a node 
		$.each( drag.defaults, function( key, def ){
			if ( opts[ key ] !== undefined )
				data[ key ] = opts[ key ];
		});
	},
	
	// forget unbound related events
	remove: function(){
		$.data( this, drag.datakey ).related -= 1;
	},
	
	// configure interaction, capture settings
	setup: function(){
		// check for related events
		if ( $.data( this, drag.datakey ) ) 
			return;
		// initialize the drag data with copied defaults
		var data = $.extend({ related:0 }, drag.defaults );
		// store the interaction data
		$.data( this, drag.datakey, data );
		// bind the mousedown event, which starts drag interactions
		$event.add( this, "touchstart mousedown", drag.init, data );
		// prevent image dragging in IE...
		if ( this.attachEvent ) 
			this.attachEvent("ondragstart", drag.dontstart ); 
	},
	
	// destroy configured interaction
	teardown: function(){
		var data = $.data( this, drag.datakey ) || {};
		// check for related events
		if ( data.related ) 
			return;
		// remove the stored data
		$.removeData( this, drag.datakey );
		// remove the mousedown event
		$event.remove( this, "touchstart mousedown", drag.init );
		// enable text selection
		drag.textselect( true ); 
		// un-prevent image dragging in IE...
		if ( this.detachEvent ) 
			this.detachEvent("ondragstart", drag.dontstart ); 
	},
		
	// initialize the interaction
	init: function( event ){ 
		// sorry, only one touch at a time
		if ( drag.touched ) 
			return;
		// the drag/drop interaction data
		var dd = event.data, results;
		// check the which directive
		if ( event.which != 0 && dd.which > 0 && event.which != dd.which ) 
			return; 
		// check for suppressed selector
		if ( $( event.target ).is( dd.not ) ) 
			return;
		// check for handle selector
		if ( dd.handle && !$( event.target ).closest( dd.handle, event.currentTarget ).length ) 
			return;

		drag.touched = event.type == 'touchstart' ? this : null;
		dd.propagates = 1;
		dd.mousedown = this;
		dd.interactions = [ drag.interaction( this, dd ) ];
		dd.target = event.target;
		dd.pageX = event.pageX;
		dd.pageY = event.pageY;
		dd.dragging = null;
		// handle draginit event... 
		results = drag.hijack( event, "draginit", dd );
		// early cancel
		if ( !dd.propagates )
			return;
		// flatten the result set
		results = drag.flatten( results );
		// insert new interaction elements
		if ( results && results.length ){
			dd.interactions = [];
			$.each( results, function(){
				dd.interactions.push( drag.interaction( this, dd ) );
			});
		}
		// remember how many interactions are propagating
		dd.propagates = dd.interactions.length;
		// locate and init the drop targets
		if ( dd.drop !== false && $special.drop ) 
			$special.drop.handler( event, dd );
		// disable text selection
		drag.textselect( false ); 
		// bind additional events...
		if ( drag.touched )
			$event.add( drag.touched, "touchmove touchend", drag.handler, dd );
		else 
			$event.add( document, "mousemove mouseup", drag.handler, dd );
		// helps prevent text selection or scrolling
		if ( !drag.touched || dd.live )
			return false;
	},	
	
	// returns an interaction object
	interaction: function( elem, dd ){
		var offset = $( elem )[ dd.relative ? "position" : "offset" ]() || { top:0, left:0 };
		return {
			drag: elem, 
			callback: new drag.callback(), 
			droppable: [],
			offset: offset
		};
	},
	
	// handle drag-releatd DOM events
	handler: function( event ){ 
		// read the data before hijacking anything
		var dd = event.data;	
		// handle various events
		switch ( event.type ){
			// mousemove, check distance, start dragging
			case !dd.dragging && 'touchmove': 
				event.preventDefault();
			case !dd.dragging && 'mousemove':
				//  drag tolerance, x² + y² = distance²
				if ( Math.pow(  event.pageX-dd.pageX, 2 ) + Math.pow(  event.pageY-dd.pageY, 2 ) < Math.pow( dd.distance, 2 ) ) 
					break; // distance tolerance not reached
				event.target = dd.target; // force target from "mousedown" event (fix distance issue)
				drag.hijack( event, "dragstart", dd ); // trigger "dragstart"
				if ( dd.propagates ) // "dragstart" not rejected
					dd.dragging = true; // activate interaction
			// mousemove, dragging
			case 'touchmove':
				event.preventDefault();
			case 'mousemove':
				if ( dd.dragging ){
					// trigger "drag"		
					drag.hijack( event, "drag", dd );
					if ( dd.propagates ){
						// manage drop events
						if ( dd.drop !== false && $special.drop )
							$special.drop.handler( event, dd ); // "dropstart", "dropend"							
						break; // "drag" not rejected, stop		
					}
					event.type = "mouseup"; // helps "drop" handler behave
				}
			// mouseup, stop dragging
			case 'touchend': 
			case 'mouseup': 
			default:
				if ( drag.touched )
					$event.remove( drag.touched, "touchmove touchend", drag.handler ); // remove touch events
				else 
					$event.remove( document, "mousemove mouseup", drag.handler ); // remove page events	
				if ( dd.dragging ){
					if ( dd.drop !== false && $special.drop )
						$special.drop.handler( event, dd ); // "drop"
					drag.hijack( event, "dragend", dd ); // trigger "dragend"	
				}
				drag.textselect( true ); // enable text selection
				// if suppressing click events...
				if ( dd.click === false && dd.dragging )
					$.data( dd.mousedown, "suppress.click", new Date().getTime() + 5 );
				dd.dragging = drag.touched = false; // deactivate element	
				break;
		}
	},
		
	// re-use event object for custom events
	hijack: function( event, type, dd, x, elem ){
		// not configured
		if ( !dd ) 
			return;
		// remember the original event and type
		var orig = { event:event.originalEvent, type:event.type },
		// is the event drag related or drog related?
		mode = type.indexOf("drop") ? "drag" : "drop",
		// iteration vars
		result, i = x || 0, ia, $elems, callback,
		len = !isNaN( x ) ? x : dd.interactions.length;
		// modify the event type
		event.type = type;
		// remove the original event
		event.originalEvent = null;
		// initialize the results
		dd.results = [];
		// handle each interacted element
		do if ( ia = dd.interactions[ i ] ){
			// validate the interaction
			if ( type !== "dragend" && ia.cancelled )
				continue;
			// set the dragdrop properties on the event object
			callback = drag.properties( event, dd, ia );
			// prepare for more results
			ia.results = [];
			// handle each element
			$( elem || ia[ mode ] || dd.droppable ).each(function( p, subject ){
				// identify drag or drop targets individually
				callback.target = subject;
				// force propagtion of the custom event
				event.isPropagationStopped = function(){ return false; };
				// handle the event	
				result = subject ? $event.dispatch.call( subject, event, callback ) : null;
				// stop the drag interaction for this element
				if ( result === false ){
					if ( mode == "drag" ){
						ia.cancelled = true;
						dd.propagates -= 1;
					}
					if ( type == "drop" ){
						ia[ mode ][p] = null;
					}
				}
				// assign any dropinit elements
				else if ( type == "dropinit" )
					ia.droppable.push( drag.element( result ) || subject );
				// accept a returned proxy element 
				if ( type == "dragstart" )
					ia.proxy = $( drag.element( result ) || ia.drag )[0];
				// remember this result	
				ia.results.push( result );
				// forget the event result, for recycling
				delete event.result;
				// break on cancelled handler
				if ( type !== "dropinit" )
					return result;
			});	
			// flatten the results	
			dd.results[ i ] = drag.flatten( ia.results );	
			// accept a set of valid drop targets
			if ( type == "dropinit" )
				ia.droppable = drag.flatten( ia.droppable );
			// locate drop targets
			if ( type == "dragstart" && !ia.cancelled )
				callback.update(); 
		}
		while ( ++i < len )
		// restore the original event & type
		event.type = orig.type;
		event.originalEvent = orig.event;
		// return all handler results
		return drag.flatten( dd.results );
	},
		
	// extend the callback object with drag/drop properties...
	properties: function( event, dd, ia ){		
		var obj = ia.callback;
		// elements
		obj.drag = ia.drag;
		obj.proxy = ia.proxy || ia.drag;
		// starting mouse position
		obj.startX = dd.pageX;
		obj.startY = dd.pageY;
		// current distance dragged
		obj.deltaX = event.pageX - dd.pageX;
		obj.deltaY = event.pageY - dd.pageY;
		// original element position
		obj.originalX = ia.offset.left;
		obj.originalY = ia.offset.top;
		// adjusted element position
		obj.offsetX = obj.originalX + obj.deltaX; 
		obj.offsetY = obj.originalY + obj.deltaY;
		// assign the drop targets information
		obj.drop = drag.flatten( ( ia.drop || [] ).slice() );
		obj.available = drag.flatten( ( ia.droppable || [] ).slice() );
		return obj;	
	},
	
	// determine is the argument is an element or jquery instance
	element: function( arg ){
		if ( arg && ( arg.jquery || arg.nodeType == 1 ) )
			return arg;
	},
	
	// flatten nested jquery objects and arrays into a single dimension array
	flatten: function( arr ){
		return $.map( arr, function( member ){
			return member && member.jquery ? $.makeArray( member ) : 
				member && member.length ? drag.flatten( member ) : member;
		});
	},
	
	// toggles text selection attributes ON (true) or OFF (false)
	textselect: function( bool ){ 
		$( document )[ bool ? "unbind" : "bind" ]("selectstart", drag.dontstart )
			.css("MozUserSelect", bool ? "" : "none" );
		// .attr("unselectable", bool ? "off" : "on" )
		document.unselectable = bool ? "off" : "on"; 
	},
	
	// suppress "selectstart" and "ondragstart" events
	dontstart: function(){ 
		return false; 
	},
	
	// a callback instance contructor
	callback: function(){}
	
};

// callback methods
drag.callback.prototype = {
	update: function(){
		if ( $special.drop && this.available.length )
			$.each( this.available, function( i ){
				$special.drop.locate( this, i );
			});
	}
};

// patch $.event.$dispatch to allow suppressing clicks
var $dispatch = $event.dispatch;
$event.dispatch = function( event ){
	if ( $.data( this, "suppress."+ event.type ) - new Date().getTime() > 0 ){
		$.removeData( this, "suppress."+ event.type );
		return;
	}
	return $dispatch.apply( this, arguments );
};

// event fix hooks for touch events...
var touchHooks = 
$event.fixHooks.touchstart = 
$event.fixHooks.touchmove = 
$event.fixHooks.touchend =
$event.fixHooks.touchcancel = {
	props: "clientX clientY pageX pageY screenX screenY".split( " " ),
	filter: function( event, orig ) {
		if ( orig ){
			var touched = ( orig.touches && orig.touches[0] )
				|| ( orig.changedTouches && orig.changedTouches[0] )
				|| null; 
			// iOS webkit: touchstart, touchmove, touchend
			if ( touched ) 
				$.each( touchHooks.props, function( i, prop ){
					event[ prop ] = touched[ prop ];
				});
		}
		return event;
	}
};

// share the same special event configuration with related events...
$special.draginit = $special.dragstart = $special.dragend = drag;

})( jQuery );;

/*! jQuery Timepicker Addon - v1.5.0 - 2014-09-01
* http://trentrichardson.com/examples/timepicker
* Copyright (c) 2014 Trent Richardson; Licensed MIT */
(function ($) {

	/*
	* Lets not redefine timepicker, Prevent "Uncaught RangeError: Maximum call stack size exceeded"
	*/
	$.ui.timepicker = $.ui.timepicker || {};
	if ($.ui.timepicker.version) {
		return;
	}

	/*
	* Extend jQueryUI, get it started with our version number
	*/
	$.extend($.ui, {
		timepicker: {
			version: "1.5.0"
		}
	});

	/* 
	* Timepicker manager.
	* Use the singleton instance of this class, $.timepicker, to interact with the time picker.
	* Settings for (groups of) time pickers are maintained in an instance object,
	* allowing multiple different settings on the same page.
	*/
	var Timepicker = function () {
		this.regional = []; // Available regional settings, indexed by language code
		this.regional[''] = { // Default regional settings
			currentText: 'Now',
			closeText: 'Done',
			amNames: ['AM', 'A'],
			pmNames: ['PM', 'P'],
			timeFormat: 'HH:mm',
			timeSuffix: '',
			timeOnlyTitle: 'Choose Time',
			timeText: 'Time',
			hourText: 'Hour',
			minuteText: 'Minute',
			secondText: 'Second',
			millisecText: 'Millisecond',
			microsecText: 'Microsecond',
			timezoneText: 'Time Zone',
			isRTL: false
		};
		this._defaults = { // Global defaults for all the datetime picker instances
			showButtonPanel: true,
			timeOnly: false,
			timeOnlyShowDate: false,
			showHour: null,
			showMinute: null,
			showSecond: null,
			showMillisec: null,
			showMicrosec: null,
			showTimezone: null,
			showTime: true,
			stepHour: 1,
			stepMinute: 1,
			stepSecond: 1,
			stepMillisec: 1,
			stepMicrosec: 1,
			hour: 0,
			minute: 0,
			second: 0,
			millisec: 0,
			microsec: 0,
			timezone: null,
			hourMin: 0,
			minuteMin: 0,
			secondMin: 0,
			millisecMin: 0,
			microsecMin: 0,
			hourMax: 23,
			minuteMax: 59,
			secondMax: 59,
			millisecMax: 999,
			microsecMax: 999,
			minDateTime: null,
			maxDateTime: null,
			maxTime: null,
			minTime: null,
			onSelect: null,
			hourGrid: 0,
			minuteGrid: 0,
			secondGrid: 0,
			millisecGrid: 0,
			microsecGrid: 0,
			alwaysSetTime: true,
			separator: ' ',
			altFieldTimeOnly: true,
			altTimeFormat: null,
			altSeparator: null,
			altTimeSuffix: null,
			altRedirectFocus: true,
			pickerTimeFormat: null,
			pickerTimeSuffix: null,
			showTimepicker: true,
			timezoneList: null,
			addSliderAccess: false,
			sliderAccessArgs: null,
			controlType: 'slider',
			defaultValue: null,
			parse: 'strict'
		};
		$.extend(this._defaults, this.regional['']);
	};

	$.extend(Timepicker.prototype, {
		$input: null,
		$altInput: null,
		$timeObj: null,
		inst: null,
		hour_slider: null,
		minute_slider: null,
		second_slider: null,
		millisec_slider: null,
		microsec_slider: null,
		timezone_select: null,
		maxTime: null,
		minTime: null,
		hour: 0,
		minute: 0,
		second: 0,
		millisec: 0,
		microsec: 0,
		timezone: null,
		hourMinOriginal: null,
		minuteMinOriginal: null,
		secondMinOriginal: null,
		millisecMinOriginal: null,
		microsecMinOriginal: null,
		hourMaxOriginal: null,
		minuteMaxOriginal: null,
		secondMaxOriginal: null,
		millisecMaxOriginal: null,
		microsecMaxOriginal: null,
		ampm: '',
		formattedDate: '',
		formattedTime: '',
		formattedDateTime: '',
		timezoneList: null,
		units: ['hour', 'minute', 'second', 'millisec', 'microsec'],
		support: {},
		control: null,

		/* 
		* Override the default settings for all instances of the time picker.
		* @param  {Object} settings  object - the new settings to use as defaults (anonymous object)
		* @return {Object} the manager object
		*/
		setDefaults: function (settings) {
			extendRemove(this._defaults, settings || {});
			return this;
		},

		/*
		* Create a new Timepicker instance
		*/
		_newInst: function ($input, opts) {
			var tp_inst = new Timepicker(),
				inlineSettings = {},
				fns = {},
				overrides, i;

			for (var attrName in this._defaults) {
				if (this._defaults.hasOwnProperty(attrName)) {
					var attrValue = $input.attr('time:' + attrName);
					if (attrValue) {
						try {
							inlineSettings[attrName] = eval(attrValue);
						} catch (err) {
							inlineSettings[attrName] = attrValue;
						}
					}
				}
			}

			overrides = {
				beforeShow: function (input, dp_inst) {
					if ($.isFunction(tp_inst._defaults.evnts.beforeShow)) {
						return tp_inst._defaults.evnts.beforeShow.call($input[0], input, dp_inst, tp_inst);
					}
				},
				onChangeMonthYear: function (year, month, dp_inst) {
					// Update the time as well : this prevents the time from disappearing from the $input field.
					tp_inst._updateDateTime(dp_inst);
					if ($.isFunction(tp_inst._defaults.evnts.onChangeMonthYear)) {
						tp_inst._defaults.evnts.onChangeMonthYear.call($input[0], year, month, dp_inst, tp_inst);
					}
				},
				onClose: function (dateText, dp_inst) {
					if (tp_inst.timeDefined === true && $input.val() !== '') {
						tp_inst._updateDateTime(dp_inst);
					}
					if ($.isFunction(tp_inst._defaults.evnts.onClose)) {
						tp_inst._defaults.evnts.onClose.call($input[0], dateText, dp_inst, tp_inst);
					}
				}
			};
			for (i in overrides) {
				if (overrides.hasOwnProperty(i)) {
					fns[i] = opts[i] || null;
				}
			}

			tp_inst._defaults = $.extend({}, this._defaults, inlineSettings, opts, overrides, {
				evnts: fns,
				timepicker: tp_inst // add timepicker as a property of datepicker: $.datepicker._get(dp_inst, 'timepicker');
			});
			tp_inst.amNames = $.map(tp_inst._defaults.amNames, function (val) {
				return val.toUpperCase();
			});
			tp_inst.pmNames = $.map(tp_inst._defaults.pmNames, function (val) {
				return val.toUpperCase();
			});

			// detect which units are supported
			tp_inst.support = detectSupport(
					tp_inst._defaults.timeFormat + 
					(tp_inst._defaults.pickerTimeFormat ? tp_inst._defaults.pickerTimeFormat : '') +
					(tp_inst._defaults.altTimeFormat ? tp_inst._defaults.altTimeFormat : ''));

			// controlType is string - key to our this._controls
			if (typeof(tp_inst._defaults.controlType) === 'string') {
				if (tp_inst._defaults.controlType === 'slider' && typeof($.ui.slider) === 'undefined') {
					tp_inst._defaults.controlType = 'select';
				}
				tp_inst.control = tp_inst._controls[tp_inst._defaults.controlType];
			}
			// controlType is an object and must implement create, options, value methods
			else {
				tp_inst.control = tp_inst._defaults.controlType;
			}

			// prep the timezone options
			var timezoneList = [-720, -660, -600, -570, -540, -480, -420, -360, -300, -270, -240, -210, -180, -120, -60,
					0, 60, 120, 180, 210, 240, 270, 300, 330, 345, 360, 390, 420, 480, 525, 540, 570, 600, 630, 660, 690, 720, 765, 780, 840];
			if (tp_inst._defaults.timezoneList !== null) {
				timezoneList = tp_inst._defaults.timezoneList;
			}
			var tzl = timezoneList.length, tzi = 0, tzv = null;
			if (tzl > 0 && typeof timezoneList[0] !== 'object') {
				for (; tzi < tzl; tzi++) {
					tzv = timezoneList[tzi];
					timezoneList[tzi] = { value: tzv, label: $.timepicker.timezoneOffsetString(tzv, tp_inst.support.iso8601) };
				}
			}
			tp_inst._defaults.timezoneList = timezoneList;

			// set the default units
			tp_inst.timezone = tp_inst._defaults.timezone !== null ? $.timepicker.timezoneOffsetNumber(tp_inst._defaults.timezone) :
							((new Date()).getTimezoneOffset() * -1);
			tp_inst.hour = tp_inst._defaults.hour < tp_inst._defaults.hourMin ? tp_inst._defaults.hourMin :
							tp_inst._defaults.hour > tp_inst._defaults.hourMax ? tp_inst._defaults.hourMax : tp_inst._defaults.hour;
			tp_inst.minute = tp_inst._defaults.minute < tp_inst._defaults.minuteMin ? tp_inst._defaults.minuteMin :
							tp_inst._defaults.minute > tp_inst._defaults.minuteMax ? tp_inst._defaults.minuteMax : tp_inst._defaults.minute;
			tp_inst.second = tp_inst._defaults.second < tp_inst._defaults.secondMin ? tp_inst._defaults.secondMin :
							tp_inst._defaults.second > tp_inst._defaults.secondMax ? tp_inst._defaults.secondMax : tp_inst._defaults.second;
			tp_inst.millisec = tp_inst._defaults.millisec < tp_inst._defaults.millisecMin ? tp_inst._defaults.millisecMin :
							tp_inst._defaults.millisec > tp_inst._defaults.millisecMax ? tp_inst._defaults.millisecMax : tp_inst._defaults.millisec;
			tp_inst.microsec = tp_inst._defaults.microsec < tp_inst._defaults.microsecMin ? tp_inst._defaults.microsecMin :
							tp_inst._defaults.microsec > tp_inst._defaults.microsecMax ? tp_inst._defaults.microsecMax : tp_inst._defaults.microsec;
			tp_inst.ampm = '';
			tp_inst.$input = $input;

			if (tp_inst._defaults.altField) {
				tp_inst.$altInput = $(tp_inst._defaults.altField);
				if (tp_inst._defaults.altRedirectFocus === true) {
					tp_inst.$altInput.css({
						cursor: 'pointer'
					}).focus(function () {
						$input.trigger("focus");
					});
				}
			}

			if (tp_inst._defaults.minDate === 0 || tp_inst._defaults.minDateTime === 0) {
				tp_inst._defaults.minDate = new Date();
			}
			if (tp_inst._defaults.maxDate === 0 || tp_inst._defaults.maxDateTime === 0) {
				tp_inst._defaults.maxDate = new Date();
			}

			// datepicker needs minDate/maxDate, timepicker needs minDateTime/maxDateTime..
			if (tp_inst._defaults.minDate !== undefined && tp_inst._defaults.minDate instanceof Date) {
				tp_inst._defaults.minDateTime = new Date(tp_inst._defaults.minDate.getTime());
			}
			if (tp_inst._defaults.minDateTime !== undefined && tp_inst._defaults.minDateTime instanceof Date) {
				tp_inst._defaults.minDate = new Date(tp_inst._defaults.minDateTime.getTime());
			}
			if (tp_inst._defaults.maxDate !== undefined && tp_inst._defaults.maxDate instanceof Date) {
				tp_inst._defaults.maxDateTime = new Date(tp_inst._defaults.maxDate.getTime());
			}
			if (tp_inst._defaults.maxDateTime !== undefined && tp_inst._defaults.maxDateTime instanceof Date) {
				tp_inst._defaults.maxDate = new Date(tp_inst._defaults.maxDateTime.getTime());
			}
			tp_inst.$input.bind('focus', function () {
				tp_inst._onFocus();
			});

			return tp_inst;
		},

		/*
		* add our sliders to the calendar
		*/
		_addTimePicker: function (dp_inst) {
			var currDT = (this.$altInput && this._defaults.altFieldTimeOnly) ? this.$input.val() + ' ' + this.$altInput.val() : this.$input.val();

			this.timeDefined = this._parseTime(currDT);
			this._limitMinMaxDateTime(dp_inst, false);
			this._injectTimePicker();
		},

		/*
		* parse the time string from input value or _setTime
		*/
		_parseTime: function (timeString, withDate) {
			if (!this.inst) {
				this.inst = $.datepicker._getInst(this.$input[0]);
			}

			if (withDate || !this._defaults.timeOnly) {
				var dp_dateFormat = $.datepicker._get(this.inst, 'dateFormat');
				try {
					var parseRes = parseDateTimeInternal(dp_dateFormat, this._defaults.timeFormat, timeString, $.datepicker._getFormatConfig(this.inst), this._defaults);
					if (!parseRes.timeObj) {
						return false;
					}
					$.extend(this, parseRes.timeObj);
				} catch (err) {
					$.timepicker.log("Error parsing the date/time string: " + err +
									"\ndate/time string = " + timeString +
									"\ntimeFormat = " + this._defaults.timeFormat +
									"\ndateFormat = " + dp_dateFormat);
					return false;
				}
				return true;
			} else {
				var timeObj = $.datepicker.parseTime(this._defaults.timeFormat, timeString, this._defaults);
				if (!timeObj) {
					return false;
				}
				$.extend(this, timeObj);
				return true;
			}
		},

		/*
		* generate and inject html for timepicker into ui datepicker
		*/
		_injectTimePicker: function () {
			var $dp = this.inst.dpDiv,
				o = this.inst.settings,
				tp_inst = this,
				litem = '',
				uitem = '',
				show = null,
				max = {},
				gridSize = {},
				size = null,
				i = 0,
				l = 0;

			// Prevent displaying twice
			if ($dp.find("div.ui-timepicker-div").length === 0 && o.showTimepicker) {
				var noDisplay = ' style="display:none;"',
					html = '<div class="ui-timepicker-div' + (o.isRTL ? ' ui-timepicker-rtl' : '') + '"><dl>' + '<dt class="ui_tpicker_time_label"' + ((o.showTime) ? '' : noDisplay) + '>' + o.timeText + '</dt>' +
								'<dd class="ui_tpicker_time"' + ((o.showTime) ? '' : noDisplay) + '></dd>';

				// Create the markup
				for (i = 0, l = this.units.length; i < l; i++) {
					litem = this.units[i];
					uitem = litem.substr(0, 1).toUpperCase() + litem.substr(1);
					show = o['show' + uitem] !== null ? o['show' + uitem] : this.support[litem];

					// Added by Peter Medeiros:
					// - Figure out what the hour/minute/second max should be based on the step values.
					// - Example: if stepMinute is 15, then minMax is 45.
					max[litem] = parseInt((o[litem + 'Max'] - ((o[litem + 'Max'] - o[litem + 'Min']) % o['step' + uitem])), 10);
					gridSize[litem] = 0;

					html += '<dt class="ui_tpicker_' + litem + '_label"' + (show ? '' : noDisplay) + '>' + o[litem + 'Text'] + '</dt>' +
								'<dd class="ui_tpicker_' + litem + '"><div class="ui_tpicker_' + litem + '_slider"' + (show ? '' : noDisplay) + '></div>';

					if (show && o[litem + 'Grid'] > 0) {
						html += '<div style="padding-left: 1px"><table class="ui-tpicker-grid-label"><tr>';

						if (litem === 'hour') {
							for (var h = o[litem + 'Min']; h <= max[litem]; h += parseInt(o[litem + 'Grid'], 10)) {
								gridSize[litem]++;
								var tmph = $.datepicker.formatTime(this.support.ampm ? 'hht' : 'HH', {hour: h}, o);
								html += '<td data-for="' + litem + '">' + tmph + '</td>';
							}
						}
						else {
							for (var m = o[litem + 'Min']; m <= max[litem]; m += parseInt(o[litem + 'Grid'], 10)) {
								gridSize[litem]++;
								html += '<td data-for="' + litem + '">' + ((m < 10) ? '0' : '') + m + '</td>';
							}
						}

						html += '</tr></table></div>';
					}
					html += '</dd>';
				}
				
				// Timezone
				var showTz = o.showTimezone !== null ? o.showTimezone : this.support.timezone;
				html += '<dt class="ui_tpicker_timezone_label"' + (showTz ? '' : noDisplay) + '>' + o.timezoneText + '</dt>';
				html += '<dd class="ui_tpicker_timezone" ' + (showTz ? '' : noDisplay) + '></dd>';

				// Create the elements from string
				html += '</dl></div>';
				var $tp = $(html);

				// if we only want time picker...
				if (o.timeOnly === true) {
					$tp.prepend('<div class="ui-widget-header ui-helper-clearfix ui-corner-all">' + '<div class="ui-datepicker-title">' + o.timeOnlyTitle + '</div>' + '</div>');
					$dp.find('.ui-datepicker-header, .ui-datepicker-calendar').hide();
				}
				
				// add sliders, adjust grids, add events
				for (i = 0, l = tp_inst.units.length; i < l; i++) {
					litem = tp_inst.units[i];
					uitem = litem.substr(0, 1).toUpperCase() + litem.substr(1);
					show = o['show' + uitem] !== null ? o['show' + uitem] : this.support[litem];

					// add the slider
					tp_inst[litem + '_slider'] = tp_inst.control.create(tp_inst, $tp.find('.ui_tpicker_' + litem + '_slider'), litem, tp_inst[litem], o[litem + 'Min'], max[litem], o['step' + uitem]);

					// adjust the grid and add click event
					if (show && o[litem + 'Grid'] > 0) {
						size = 100 * gridSize[litem] * o[litem + 'Grid'] / (max[litem] - o[litem + 'Min']);
						$tp.find('.ui_tpicker_' + litem + ' table').css({
							width: size + "%",
							marginLeft: o.isRTL ? '0' : ((size / (-2 * gridSize[litem])) + "%"),
							marginRight: o.isRTL ? ((size / (-2 * gridSize[litem])) + "%") : '0',
							borderCollapse: 'collapse'
						}).find("td").click(function (e) {
								var $t = $(this),
									h = $t.html(),
									n = parseInt(h.replace(/[^0-9]/g), 10),
									ap = h.replace(/[^apm]/ig),
									f = $t.data('for'); // loses scope, so we use data-for

								if (f === 'hour') {
									if (ap.indexOf('p') !== -1 && n < 12) {
										n += 12;
									}
									else {
										if (ap.indexOf('a') !== -1 && n === 12) {
											n = 0;
										}
									}
								}
								
								tp_inst.control.value(tp_inst, tp_inst[f + '_slider'], litem, n);

								tp_inst._onTimeChange();
								tp_inst._onSelectHandler();
							}).css({
								cursor: 'pointer',
								width: (100 / gridSize[litem]) + '%',
								textAlign: 'center',
								overflow: 'hidden'
							});
					} // end if grid > 0
				} // end for loop

				// Add timezone options
				this.timezone_select = $tp.find('.ui_tpicker_timezone').append('<select></select>').find("select");
				$.fn.append.apply(this.timezone_select,
				$.map(o.timezoneList, function (val, idx) {
					return $("<option />").val(typeof val === "object" ? val.value : val).text(typeof val === "object" ? val.label : val);
				}));
				if (typeof(this.timezone) !== "undefined" && this.timezone !== null && this.timezone !== "") {
					var local_timezone = (new Date(this.inst.selectedYear, this.inst.selectedMonth, this.inst.selectedDay, 12)).getTimezoneOffset() * -1;
					if (local_timezone === this.timezone) {
						selectLocalTimezone(tp_inst);
					} else {
						this.timezone_select.val(this.timezone);
					}
				} else {
					if (typeof(this.hour) !== "undefined" && this.hour !== null && this.hour !== "") {
						this.timezone_select.val(o.timezone);
					} else {
						selectLocalTimezone(tp_inst);
					}
				}
				this.timezone_select.change(function () {
					tp_inst._onTimeChange();
					tp_inst._onSelectHandler();
				});
				// End timezone options
				
				// inject timepicker into datepicker
				var $buttonPanel = $dp.find('.ui-datepicker-buttonpane');
				if ($buttonPanel.length) {
					$buttonPanel.before($tp);
				} else {
					$dp.append($tp);
				}

				this.$timeObj = $tp.find('.ui_tpicker_time');

				if (this.inst !== null) {
					var timeDefined = this.timeDefined;
					this._onTimeChange();
					this.timeDefined = timeDefined;
				}

				// slideAccess integration: http://trentrichardson.com/2011/11/11/jquery-ui-sliders-and-touch-accessibility/
				if (this._defaults.addSliderAccess) {
					var sliderAccessArgs = this._defaults.sliderAccessArgs,
						rtl = this._defaults.isRTL;
					sliderAccessArgs.isRTL = rtl;
						
					setTimeout(function () { // fix for inline mode
						if ($tp.find('.ui-slider-access').length === 0) {
							$tp.find('.ui-slider:visible').sliderAccess(sliderAccessArgs);

							// fix any grids since sliders are shorter
							var sliderAccessWidth = $tp.find('.ui-slider-access:eq(0)').outerWidth(true);
							if (sliderAccessWidth) {
								$tp.find('table:visible').each(function () {
									var $g = $(this),
										oldWidth = $g.outerWidth(),
										oldMarginLeft = $g.css(rtl ? 'marginRight' : 'marginLeft').toString().replace('%', ''),
										newWidth = oldWidth - sliderAccessWidth,
										newMarginLeft = ((oldMarginLeft * newWidth) / oldWidth) + '%',
										css = { width: newWidth, marginRight: 0, marginLeft: 0 };
									css[rtl ? 'marginRight' : 'marginLeft'] = newMarginLeft;
									$g.css(css);
								});
							}
						}
					}, 10);
				}
				// end slideAccess integration

				tp_inst._limitMinMaxDateTime(this.inst, true);
			}
		},

		/*
		* This function tries to limit the ability to go outside the
		* min/max date range
		*/
		_limitMinMaxDateTime: function (dp_inst, adjustSliders) {
			var o = this._defaults,
				dp_date = new Date(dp_inst.selectedYear, dp_inst.selectedMonth, dp_inst.selectedDay);

			if (!this._defaults.showTimepicker) {
				return;
			} // No time so nothing to check here

			if ($.datepicker._get(dp_inst, 'minDateTime') !== null && $.datepicker._get(dp_inst, 'minDateTime') !== undefined && dp_date) {
				var minDateTime = $.datepicker._get(dp_inst, 'minDateTime'),
					minDateTimeDate = new Date(minDateTime.getFullYear(), minDateTime.getMonth(), minDateTime.getDate(), 0, 0, 0, 0);

				if (this.hourMinOriginal === null || this.minuteMinOriginal === null || this.secondMinOriginal === null || this.millisecMinOriginal === null || this.microsecMinOriginal === null) {
					this.hourMinOriginal = o.hourMin;
					this.minuteMinOriginal = o.minuteMin;
					this.secondMinOriginal = o.secondMin;
					this.millisecMinOriginal = o.millisecMin;
					this.microsecMinOriginal = o.microsecMin;
				}

				if (dp_inst.settings.timeOnly || minDateTimeDate.getTime() === dp_date.getTime()) {
					this._defaults.hourMin = minDateTime.getHours();
					if (this.hour <= this._defaults.hourMin) {
						this.hour = this._defaults.hourMin;
						this._defaults.minuteMin = minDateTime.getMinutes();
						if (this.minute <= this._defaults.minuteMin) {
							this.minute = this._defaults.minuteMin;
							this._defaults.secondMin = minDateTime.getSeconds();
							if (this.second <= this._defaults.secondMin) {
								this.second = this._defaults.secondMin;
								this._defaults.millisecMin = minDateTime.getMilliseconds();
								if (this.millisec <= this._defaults.millisecMin) {
									this.millisec = this._defaults.millisecMin;
									this._defaults.microsecMin = minDateTime.getMicroseconds();
								} else {
									if (this.microsec < this._defaults.microsecMin) {
										this.microsec = this._defaults.microsecMin;
									}
									this._defaults.microsecMin = this.microsecMinOriginal;
								}
							} else {
								this._defaults.millisecMin = this.millisecMinOriginal;
								this._defaults.microsecMin = this.microsecMinOriginal;
							}
						} else {
							this._defaults.secondMin = this.secondMinOriginal;
							this._defaults.millisecMin = this.millisecMinOriginal;
							this._defaults.microsecMin = this.microsecMinOriginal;
						}
					} else {
						this._defaults.minuteMin = this.minuteMinOriginal;
						this._defaults.secondMin = this.secondMinOriginal;
						this._defaults.millisecMin = this.millisecMinOriginal;
						this._defaults.microsecMin = this.microsecMinOriginal;
					}
				} else {
					this._defaults.hourMin = this.hourMinOriginal;
					this._defaults.minuteMin = this.minuteMinOriginal;
					this._defaults.secondMin = this.secondMinOriginal;
					this._defaults.millisecMin = this.millisecMinOriginal;
					this._defaults.microsecMin = this.microsecMinOriginal;
				}
			}

			if ($.datepicker._get(dp_inst, 'maxDateTime') !== null && $.datepicker._get(dp_inst, 'maxDateTime') !== undefined && dp_date) {
				var maxDateTime = $.datepicker._get(dp_inst, 'maxDateTime'),
					maxDateTimeDate = new Date(maxDateTime.getFullYear(), maxDateTime.getMonth(), maxDateTime.getDate(), 0, 0, 0, 0);

				if (this.hourMaxOriginal === null || this.minuteMaxOriginal === null || this.secondMaxOriginal === null || this.millisecMaxOriginal === null) {
					this.hourMaxOriginal = o.hourMax;
					this.minuteMaxOriginal = o.minuteMax;
					this.secondMaxOriginal = o.secondMax;
					this.millisecMaxOriginal = o.millisecMax;
					this.microsecMaxOriginal = o.microsecMax;
				}

				if (dp_inst.settings.timeOnly || maxDateTimeDate.getTime() === dp_date.getTime()) {
					this._defaults.hourMax = maxDateTime.getHours();
					if (this.hour >= this._defaults.hourMax) {
						this.hour = this._defaults.hourMax;
						this._defaults.minuteMax = maxDateTime.getMinutes();
						if (this.minute >= this._defaults.minuteMax) {
							this.minute = this._defaults.minuteMax;
							this._defaults.secondMax = maxDateTime.getSeconds();
							if (this.second >= this._defaults.secondMax) {
								this.second = this._defaults.secondMax;
								this._defaults.millisecMax = maxDateTime.getMilliseconds();
								if (this.millisec >= this._defaults.millisecMax) {
									this.millisec = this._defaults.millisecMax;
									this._defaults.microsecMax = maxDateTime.getMicroseconds();
								} else {
									if (this.microsec > this._defaults.microsecMax) {
										this.microsec = this._defaults.microsecMax;
									}
									this._defaults.microsecMax = this.microsecMaxOriginal;
								}
							} else {
								this._defaults.millisecMax = this.millisecMaxOriginal;
								this._defaults.microsecMax = this.microsecMaxOriginal;
							}
						} else {
							this._defaults.secondMax = this.secondMaxOriginal;
							this._defaults.millisecMax = this.millisecMaxOriginal;
							this._defaults.microsecMax = this.microsecMaxOriginal;
						}
					} else {
						this._defaults.minuteMax = this.minuteMaxOriginal;
						this._defaults.secondMax = this.secondMaxOriginal;
						this._defaults.millisecMax = this.millisecMaxOriginal;
						this._defaults.microsecMax = this.microsecMaxOriginal;
					}
				} else {
					this._defaults.hourMax = this.hourMaxOriginal;
					this._defaults.minuteMax = this.minuteMaxOriginal;
					this._defaults.secondMax = this.secondMaxOriginal;
					this._defaults.millisecMax = this.millisecMaxOriginal;
					this._defaults.microsecMax = this.microsecMaxOriginal;
				}
			}

			if (dp_inst.settings.minTime!==null) {				
				var tempMinTime=new Date("01/01/1970 " + dp_inst.settings.minTime);				
				if (this.hour<tempMinTime.getHours()) {
					this.hour=this._defaults.hourMin=tempMinTime.getHours();
					this.minute=this._defaults.minuteMin=tempMinTime.getMinutes();							
				} else if (this.hour===tempMinTime.getHours() && this.minute<tempMinTime.getMinutes()) {
					this.minute=this._defaults.minuteMin=tempMinTime.getMinutes();
				} else {						
					if (this._defaults.hourMin<tempMinTime.getHours()) {
						this._defaults.hourMin=tempMinTime.getHours();
						this._defaults.minuteMin=tempMinTime.getMinutes();					
					} else if (this._defaults.hourMin===tempMinTime.getHours()===this.hour && this._defaults.minuteMin<tempMinTime.getMinutes()) {
						this._defaults.minuteMin=tempMinTime.getMinutes();						
					} else {
						this._defaults.minuteMin=0;
					}
				}				
			}
			
			if (dp_inst.settings.maxTime!==null) {				
				var tempMaxTime=new Date("01/01/1970 " + dp_inst.settings.maxTime);
				if (this.hour>tempMaxTime.getHours()) {
					this.hour=this._defaults.hourMax=tempMaxTime.getHours();						
					this.minute=this._defaults.minuteMax=tempMaxTime.getMinutes();
				} else if (this.hour===tempMaxTime.getHours() && this.minute>tempMaxTime.getMinutes()) {							
					this.minute=this._defaults.minuteMax=tempMaxTime.getMinutes();						
				} else {
					if (this._defaults.hourMax>tempMaxTime.getHours()) {
						this._defaults.hourMax=tempMaxTime.getHours();
						this._defaults.minuteMax=tempMaxTime.getMinutes();					
					} else if (this._defaults.hourMax===tempMaxTime.getHours()===this.hour && this._defaults.minuteMax>tempMaxTime.getMinutes()) {
						this._defaults.minuteMax=tempMaxTime.getMinutes();						
					} else {
						this._defaults.minuteMax=59;
					}
				}						
			}
			
			if (adjustSliders !== undefined && adjustSliders === true) {
				var hourMax = parseInt((this._defaults.hourMax - ((this._defaults.hourMax - this._defaults.hourMin) % this._defaults.stepHour)), 10),
					minMax = parseInt((this._defaults.minuteMax - ((this._defaults.minuteMax - this._defaults.minuteMin) % this._defaults.stepMinute)), 10),
					secMax = parseInt((this._defaults.secondMax - ((this._defaults.secondMax - this._defaults.secondMin) % this._defaults.stepSecond)), 10),
					millisecMax = parseInt((this._defaults.millisecMax - ((this._defaults.millisecMax - this._defaults.millisecMin) % this._defaults.stepMillisec)), 10),
					microsecMax = parseInt((this._defaults.microsecMax - ((this._defaults.microsecMax - this._defaults.microsecMin) % this._defaults.stepMicrosec)), 10);

				if (this.hour_slider) {
					this.control.options(this, this.hour_slider, 'hour', { min: this._defaults.hourMin, max: hourMax, step: this._defaults.stepHour });
					this.control.value(this, this.hour_slider, 'hour', this.hour - (this.hour % this._defaults.stepHour));
				}
				if (this.minute_slider) {
					this.control.options(this, this.minute_slider, 'minute', { min: this._defaults.minuteMin, max: minMax, step: this._defaults.stepMinute });
					this.control.value(this, this.minute_slider, 'minute', this.minute - (this.minute % this._defaults.stepMinute));
				}
				if (this.second_slider) {
					this.control.options(this, this.second_slider, 'second', { min: this._defaults.secondMin, max: secMax, step: this._defaults.stepSecond });
					this.control.value(this, this.second_slider, 'second', this.second - (this.second % this._defaults.stepSecond));
				}
				if (this.millisec_slider) {
					this.control.options(this, this.millisec_slider, 'millisec', { min: this._defaults.millisecMin, max: millisecMax, step: this._defaults.stepMillisec });
					this.control.value(this, this.millisec_slider, 'millisec', this.millisec - (this.millisec % this._defaults.stepMillisec));
				}
				if (this.microsec_slider) {
					this.control.options(this, this.microsec_slider, 'microsec', { min: this._defaults.microsecMin, max: microsecMax, step: this._defaults.stepMicrosec });
					this.control.value(this, this.microsec_slider, 'microsec', this.microsec - (this.microsec % this._defaults.stepMicrosec));
				}
			}

		},

		/*
		* when a slider moves, set the internal time...
		* on time change is also called when the time is updated in the text field
		*/
		_onTimeChange: function () {
			if (!this._defaults.showTimepicker) {
                                return;
			}
			var hour = (this.hour_slider) ? this.control.value(this, this.hour_slider, 'hour') : false,
				minute = (this.minute_slider) ? this.control.value(this, this.minute_slider, 'minute') : false,
				second = (this.second_slider) ? this.control.value(this, this.second_slider, 'second') : false,
				millisec = (this.millisec_slider) ? this.control.value(this, this.millisec_slider, 'millisec') : false,
				microsec = (this.microsec_slider) ? this.control.value(this, this.microsec_slider, 'microsec') : false,
				timezone = (this.timezone_select) ? this.timezone_select.val() : false,
				o = this._defaults,
				pickerTimeFormat = o.pickerTimeFormat || o.timeFormat,
				pickerTimeSuffix = o.pickerTimeSuffix || o.timeSuffix;

			if (typeof(hour) === 'object') {
				hour = false;
			}
			if (typeof(minute) === 'object') {
				minute = false;
			}
			if (typeof(second) === 'object') {
				second = false;
			}
			if (typeof(millisec) === 'object') {
				millisec = false;
			}
			if (typeof(microsec) === 'object') {
				microsec = false;
			}
			if (typeof(timezone) === 'object') {
				timezone = false;
			}

			if (hour !== false) {
				hour = parseInt(hour, 10);
			}
			if (minute !== false) {
				minute = parseInt(minute, 10);
			}
			if (second !== false) {
				second = parseInt(second, 10);
			}
			if (millisec !== false) {
				millisec = parseInt(millisec, 10);
			}
			if (microsec !== false) {
				microsec = parseInt(microsec, 10);
			}
			if (timezone !== false) {
				timezone = timezone.toString();
			}

			var ampm = o[hour < 12 ? 'amNames' : 'pmNames'][0];

			// If the update was done in the input field, the input field should not be updated.
			// If the update was done using the sliders, update the input field.
			var hasChanged = (
						hour !== parseInt(this.hour,10) || // sliders should all be numeric
						minute !== parseInt(this.minute,10) || 
						second !== parseInt(this.second,10) || 
						millisec !== parseInt(this.millisec,10) || 
						microsec !== parseInt(this.microsec,10) || 
						(this.ampm.length > 0 && (hour < 12) !== ($.inArray(this.ampm.toUpperCase(), this.amNames) !== -1)) || 
						(this.timezone !== null && timezone !== this.timezone.toString()) // could be numeric or "EST" format, so use toString()
					);

			if (hasChanged) {

				if (hour !== false) {
					this.hour = hour;
				}
				if (minute !== false) {
					this.minute = minute;
				}
				if (second !== false) {
					this.second = second;
				}
				if (millisec !== false) {
					this.millisec = millisec;
				}
				if (microsec !== false) {
					this.microsec = microsec;
				}
				if (timezone !== false) {
					this.timezone = timezone;
				}

				if (!this.inst) {
					this.inst = $.datepicker._getInst(this.$input[0]);
				}

				this._limitMinMaxDateTime(this.inst, true);
			}
			if (this.support.ampm) {
				this.ampm = ampm;
			}

			// Updates the time within the timepicker
			this.formattedTime = $.datepicker.formatTime(o.timeFormat, this, o);
			if (this.$timeObj) {
				if (pickerTimeFormat === o.timeFormat) {
					this.$timeObj.text(this.formattedTime + pickerTimeSuffix);
				}
				else {
					this.$timeObj.text($.datepicker.formatTime(pickerTimeFormat, this, o) + pickerTimeSuffix);
				}
			}

			this.timeDefined = true;
			if (hasChanged) {
				this._updateDateTime();
				//this.$input.focus(); // may automatically open the picker on setDate
			}
		},

		/*
		* call custom onSelect.
		* bind to sliders slidestop, and grid click.
		*/
		_onSelectHandler: function () {
			var onSelect = this._defaults.onSelect || this.inst.settings.onSelect;
			var inputEl = this.$input ? this.$input[0] : null;
			if (onSelect && inputEl) {
				onSelect.apply(inputEl, [this.formattedDateTime, this]);
			}
		},

		/*
		* update our input with the new date time..
		*/
		_updateDateTime: function (dp_inst) {
			dp_inst = this.inst || dp_inst;
			var dtTmp = (dp_inst.currentYear > 0? 
							new Date(dp_inst.currentYear, dp_inst.currentMonth, dp_inst.currentDay) : 
							new Date(dp_inst.selectedYear, dp_inst.selectedMonth, dp_inst.selectedDay)),
				dt = $.datepicker._daylightSavingAdjust(dtTmp),
				//dt = $.datepicker._daylightSavingAdjust(new Date(dp_inst.selectedYear, dp_inst.selectedMonth, dp_inst.selectedDay)),
				//dt = $.datepicker._daylightSavingAdjust(new Date(dp_inst.currentYear, dp_inst.currentMonth, dp_inst.currentDay)),
				dateFmt = $.datepicker._get(dp_inst, 'dateFormat'),
				formatCfg = $.datepicker._getFormatConfig(dp_inst),
				timeAvailable = dt !== null && this.timeDefined;
			this.formattedDate = $.datepicker.formatDate(dateFmt, (dt === null ? new Date() : dt), formatCfg);
			var formattedDateTime = this.formattedDate;
			
			// if a slider was changed but datepicker doesn't have a value yet, set it
			if (dp_inst.lastVal === "") {
                dp_inst.currentYear = dp_inst.selectedYear;
                dp_inst.currentMonth = dp_inst.selectedMonth;
                dp_inst.currentDay = dp_inst.selectedDay;
            }

			/*
			* remove following lines to force every changes in date picker to change the input value
			* Bug descriptions: when an input field has a default value, and click on the field to pop up the date picker. 
			* If the user manually empty the value in the input field, the date picker will never change selected value.
			*/
			//if (dp_inst.lastVal !== undefined && (dp_inst.lastVal.length > 0 && this.$input.val().length === 0)) {
			//	return;
			//}

			if (this._defaults.timeOnly === true && this._defaults.timeOnlyShowDate === false) {
				formattedDateTime = this.formattedTime;
			} else if ((this._defaults.timeOnly !== true && (this._defaults.alwaysSetTime || timeAvailable)) || (this._defaults.timeOnly === true && this._defaults.timeOnlyShowDate === true)) {
				formattedDateTime += this._defaults.separator + this.formattedTime + this._defaults.timeSuffix;
			}

			this.formattedDateTime = formattedDateTime;

			if (!this._defaults.showTimepicker) {
				this.$input.val(this.formattedDate);
			} else if (this.$altInput && this._defaults.timeOnly === false && this._defaults.altFieldTimeOnly === true) {
				this.$altInput.val(this.formattedTime);
				this.$input.val(this.formattedDate);
			} else if (this.$altInput) {
				this.$input.val(formattedDateTime);
				var altFormattedDateTime = '',
					altSeparator = this._defaults.altSeparator !== null ? this._defaults.altSeparator : this._defaults.separator,
					altTimeSuffix = this._defaults.altTimeSuffix !== null ? this._defaults.altTimeSuffix : this._defaults.timeSuffix;
				
				if (!this._defaults.timeOnly) {
					if (this._defaults.altFormat) {
						altFormattedDateTime = $.datepicker.formatDate(this._defaults.altFormat, (dt === null ? new Date() : dt), formatCfg);
					}
					else {
						altFormattedDateTime = this.formattedDate;
					}

					if (altFormattedDateTime) {
						altFormattedDateTime += altSeparator;
					}
				}

				if (this._defaults.altTimeFormat !== null) {
					altFormattedDateTime += $.datepicker.formatTime(this._defaults.altTimeFormat, this, this._defaults) + altTimeSuffix;
				}
				else {
					altFormattedDateTime += this.formattedTime + altTimeSuffix;
				}
				this.$altInput.val(altFormattedDateTime);
			} else {
				this.$input.val(formattedDateTime);
			}

			this.$input.trigger("change");
		},

		_onFocus: function () {
			if (!this.$input.val() && this._defaults.defaultValue) {
				this.$input.val(this._defaults.defaultValue);
				var inst = $.datepicker._getInst(this.$input.get(0)),
					tp_inst = $.datepicker._get(inst, 'timepicker');
				if (tp_inst) {
					if (tp_inst._defaults.timeOnly && (inst.input.val() !== inst.lastVal)) {
						try {
							$.datepicker._updateDatepicker(inst);
						} catch (err) {
							$.timepicker.log(err);
						}
					}
				}
			}
		},

		/*
		* Small abstraction to control types
		* We can add more, just be sure to follow the pattern: create, options, value
		*/
		_controls: {
			// slider methods
			slider: {
				create: function (tp_inst, obj, unit, val, min, max, step) {
					var rtl = tp_inst._defaults.isRTL; // if rtl go -60->0 instead of 0->60
					return obj.prop('slide', null).slider({
						orientation: "horizontal",
						value: rtl ? val * -1 : val,
						min: rtl ? max * -1 : min,
						max: rtl ? min * -1 : max,
						step: step,
						slide: function (event, ui) {
							tp_inst.control.value(tp_inst, $(this), unit, rtl ? ui.value * -1 : ui.value);
							tp_inst._onTimeChange();
						},
						stop: function (event, ui) {
							tp_inst._onSelectHandler();
						}
					});	
				},
				options: function (tp_inst, obj, unit, opts, val) {
					if (tp_inst._defaults.isRTL) {
						if (typeof(opts) === 'string') {
							if (opts === 'min' || opts === 'max') {
								if (val !== undefined) {
									return obj.slider(opts, val * -1);
								}
								return Math.abs(obj.slider(opts));
							}
							return obj.slider(opts);
						}
						var min = opts.min, 
							max = opts.max;
						opts.min = opts.max = null;
						if (min !== undefined) {
							opts.max = min * -1;
						}
						if (max !== undefined) {
							opts.min = max * -1;
						}
						return obj.slider(opts);
					}
					if (typeof(opts) === 'string' && val !== undefined) {
						return obj.slider(opts, val);
					}
					return obj.slider(opts);
				},
				value: function (tp_inst, obj, unit, val) {
					if (tp_inst._defaults.isRTL) {
						if (val !== undefined) {
							return obj.slider('value', val * -1);
						}
						return Math.abs(obj.slider('value'));
					}
					if (val !== undefined) {
						return obj.slider('value', val);
					}
					return obj.slider('value');
				}
			},
			// select methods
			select: {
				create: function (tp_inst, obj, unit, val, min, max, step) {
					var sel = '<select class="ui-timepicker-select ui-state-default ui-corner-all" data-unit="' + unit + '" data-min="' + min + '" data-max="' + max + '" data-step="' + step + '">',
						format = tp_inst._defaults.pickerTimeFormat || tp_inst._defaults.timeFormat;

					for (var i = min; i <= max; i += step) {
						sel += '<option value="' + i + '"' + (i === val ? ' selected' : '') + '>';
						if (unit === 'hour') {
							sel += $.datepicker.formatTime($.trim(format.replace(/[^ht ]/ig, '')), {hour: i}, tp_inst._defaults);
						}
						else if (unit === 'millisec' || unit === 'microsec' || i >= 10) { sel += i; }
						else {sel += '0' + i.toString(); }
						sel += '</option>';
					}
					sel += '</select>';

					obj.children('select').remove();

					$(sel).appendTo(obj).change(function (e) {
						tp_inst._onTimeChange();
						tp_inst._onSelectHandler();
					});

					return obj;
				},
				options: function (tp_inst, obj, unit, opts, val) {
					var o = {},
						$t = obj.children('select');
					if (typeof(opts) === 'string') {
						if (val === undefined) {
							return $t.data(opts);
						}
						o[opts] = val;	
					}
					else { o = opts; }
					return tp_inst.control.create(tp_inst, obj, $t.data('unit'), $t.val(), o.min || $t.data('min'), o.max || $t.data('max'), o.step || $t.data('step'));
				},
				value: function (tp_inst, obj, unit, val) {
					var $t = obj.children('select');
					if (val !== undefined) {
						return $t.val(val);
					}
					return $t.val();
				}
			}
		} // end _controls

	});

	$.fn.extend({
		/*
		* shorthand just to use timepicker.
		*/
		timepicker: function (o) {
			o = o || {};
			var tmp_args = Array.prototype.slice.call(arguments);

			if (typeof o === 'object') {
				tmp_args[0] = $.extend(o, {
					timeOnly: true
				});
			}

			return $(this).each(function () {
				$.fn.datetimepicker.apply($(this), tmp_args);
			});
		},

		/*
		* extend timepicker to datepicker
		*/
		datetimepicker: function (o) {
			o = o || {};
			var tmp_args = arguments;

			if (typeof(o) === 'string') {
				if (o === 'getDate'  || (o === 'option' && tmp_args.length === 2 && typeof (tmp_args[1]) === 'string')) {
					return $.fn.datepicker.apply($(this[0]), tmp_args);
				} else {
					return this.each(function () {
						var $t = $(this);
						$t.datepicker.apply($t, tmp_args);
					});
				}
			} else {
				return this.each(function () {
					var $t = $(this);
					$t.datepicker($.timepicker._newInst($t, o)._defaults);
				});
			}
		}
	});

	/*
	* Public Utility to parse date and time
	*/
	$.datepicker.parseDateTime = function (dateFormat, timeFormat, dateTimeString, dateSettings, timeSettings) {
		var parseRes = parseDateTimeInternal(dateFormat, timeFormat, dateTimeString, dateSettings, timeSettings);
		if (parseRes.timeObj) {
			var t = parseRes.timeObj;
			parseRes.date.setHours(t.hour, t.minute, t.second, t.millisec);
			parseRes.date.setMicroseconds(t.microsec);
		}

		return parseRes.date;
	};

	/*
	* Public utility to parse time
	*/
	$.datepicker.parseTime = function (timeFormat, timeString, options) {
		var o = extendRemove(extendRemove({}, $.timepicker._defaults), options || {}),
			iso8601 = (timeFormat.replace(/\'.*?\'/g, '').indexOf('Z') !== -1);

		// Strict parse requires the timeString to match the timeFormat exactly
		var strictParse = function (f, s, o) {

			// pattern for standard and localized AM/PM markers
			var getPatternAmpm = function (amNames, pmNames) {
				var markers = [];
				if (amNames) {
					$.merge(markers, amNames);
				}
				if (pmNames) {
					$.merge(markers, pmNames);
				}
				markers = $.map(markers, function (val) {
					return val.replace(/[.*+?|()\[\]{}\\]/g, '\\$&');
				});
				return '(' + markers.join('|') + ')?';
			};

			// figure out position of time elements.. cause js cant do named captures
			var getFormatPositions = function (timeFormat) {
				var finds = timeFormat.toLowerCase().match(/(h{1,2}|m{1,2}|s{1,2}|l{1}|c{1}|t{1,2}|z|'.*?')/g),
					orders = {
						h: -1,
						m: -1,
						s: -1,
						l: -1,
						c: -1,
						t: -1,
						z: -1
					};

				if (finds) {
					for (var i = 0; i < finds.length; i++) {
						if (orders[finds[i].toString().charAt(0)] === -1) {
							orders[finds[i].toString().charAt(0)] = i + 1;
						}
					}
				}
				return orders;
			};

			var regstr = '^' + f.toString()
					.replace(/([hH]{1,2}|mm?|ss?|[tT]{1,2}|[zZ]|[lc]|'.*?')/g, function (match) {
							var ml = match.length;
							switch (match.charAt(0).toLowerCase()) {
							case 'h':
								return ml === 1 ? '(\\d?\\d)' : '(\\d{' + ml + '})';
							case 'm':
								return ml === 1 ? '(\\d?\\d)' : '(\\d{' + ml + '})';
							case 's':
								return ml === 1 ? '(\\d?\\d)' : '(\\d{' + ml + '})';
							case 'l':
								return '(\\d?\\d?\\d)';
							case 'c':
								return '(\\d?\\d?\\d)';
							case 'z':
								return '(z|[-+]\\d\\d:?\\d\\d|\\S+)?';
							case 't':
								return getPatternAmpm(o.amNames, o.pmNames);
							default:    // literal escaped in quotes
								return '(' + match.replace(/\'/g, "").replace(/(\.|\$|\^|\\|\/|\(|\)|\[|\]|\?|\+|\*)/g, function (m) { return "\\" + m; }) + ')?';
							}
						})
					.replace(/\s/g, '\\s?') +
					o.timeSuffix + '$',
				order = getFormatPositions(f),
				ampm = '',
				treg;

			treg = s.match(new RegExp(regstr, 'i'));

			var resTime = {
				hour: 0,
				minute: 0,
				second: 0,
				millisec: 0,
				microsec: 0
			};

			if (treg) {
				if (order.t !== -1) {
					if (treg[order.t] === undefined || treg[order.t].length === 0) {
						ampm = '';
						resTime.ampm = '';
					} else {
						ampm = $.inArray(treg[order.t].toUpperCase(), o.amNames) !== -1 ? 'AM' : 'PM';
						resTime.ampm = o[ampm === 'AM' ? 'amNames' : 'pmNames'][0];
					}
				}

				if (order.h !== -1) {
					if (ampm === 'AM' && treg[order.h] === '12') {
						resTime.hour = 0; // 12am = 0 hour
					} else {
						if (ampm === 'PM' && treg[order.h] !== '12') {
							resTime.hour = parseInt(treg[order.h], 10) + 12; // 12pm = 12 hour, any other pm = hour + 12
						} else {
							resTime.hour = Number(treg[order.h]);
						}
					}
				}

				if (order.m !== -1) {
					resTime.minute = Number(treg[order.m]);
				}
				if (order.s !== -1) {
					resTime.second = Number(treg[order.s]);
				}
				if (order.l !== -1) {
					resTime.millisec = Number(treg[order.l]);
				}
				if (order.c !== -1) {
					resTime.microsec = Number(treg[order.c]);
				}
				if (order.z !== -1 && treg[order.z] !== undefined) {
					resTime.timezone = $.timepicker.timezoneOffsetNumber(treg[order.z]);
				}


				return resTime;
			}
			return false;
		};// end strictParse

		// First try JS Date, if that fails, use strictParse
		var looseParse = function (f, s, o) {
			try {
				var d = new Date('2012-01-01 ' + s);
				if (isNaN(d.getTime())) {
					d = new Date('2012-01-01T' + s);
					if (isNaN(d.getTime())) {
						d = new Date('01/01/2012 ' + s);
						if (isNaN(d.getTime())) {
							throw "Unable to parse time with native Date: " + s;
						}
					}
				}

				return {
					hour: d.getHours(),
					minute: d.getMinutes(),
					second: d.getSeconds(),
					millisec: d.getMilliseconds(),
					microsec: d.getMicroseconds(),
					timezone: d.getTimezoneOffset() * -1
				};
			}
			catch (err) {
				try {
					return strictParse(f, s, o);
				}
				catch (err2) {
					$.timepicker.log("Unable to parse \ntimeString: " + s + "\ntimeFormat: " + f);
				}				
			}
			return false;
		}; // end looseParse
		
		if (typeof o.parse === "function") {
			return o.parse(timeFormat, timeString, o);
		}
		if (o.parse === 'loose') {
			return looseParse(timeFormat, timeString, o);
		}
		return strictParse(timeFormat, timeString, o);
	};

	/**
	 * Public utility to format the time
	 * @param {string} format format of the time
	 * @param {Object} time Object not a Date for timezones
	 * @param {Object} [options] essentially the regional[].. amNames, pmNames, ampm
	 * @returns {string} the formatted time
	 */
	$.datepicker.formatTime = function (format, time, options) {
		options = options || {};
		options = $.extend({}, $.timepicker._defaults, options);
		time = $.extend({
			hour: 0,
			minute: 0,
			second: 0,
			millisec: 0,
			microsec: 0,
			timezone: null
		}, time);

		var tmptime = format,
			ampmName = options.amNames[0],
			hour = parseInt(time.hour, 10);

		if (hour > 11) {
			ampmName = options.pmNames[0];
		}

		tmptime = tmptime.replace(/(?:HH?|hh?|mm?|ss?|[tT]{1,2}|[zZ]|[lc]|'.*?')/g, function (match) {
			switch (match) {
			case 'HH':
				return ('0' + hour).slice(-2);
			case 'H':
				return hour;
			case 'hh':
				return ('0' + convert24to12(hour)).slice(-2);
			case 'h':
				return convert24to12(hour);
			case 'mm':
				return ('0' + time.minute).slice(-2);
			case 'm':
				return time.minute;
			case 'ss':
				return ('0' + time.second).slice(-2);
			case 's':
				return time.second;
			case 'l':
				return ('00' + time.millisec).slice(-3);
			case 'c':
				return ('00' + time.microsec).slice(-3);
			case 'z':
				return $.timepicker.timezoneOffsetString(time.timezone === null ? options.timezone : time.timezone, false);
			case 'Z':
				return $.timepicker.timezoneOffsetString(time.timezone === null ? options.timezone : time.timezone, true);
			case 'T':
				return ampmName.charAt(0).toUpperCase();
			case 'TT':
				return ampmName.toUpperCase();
			case 't':
				return ampmName.charAt(0).toLowerCase();
			case 'tt':
				return ampmName.toLowerCase();
			default:
				return match.replace(/'/g, "");
			}
		});

		return tmptime;
	};

	/*
	* the bad hack :/ override datepicker so it doesn't close on select
	// inspired: http://stackoverflow.com/questions/1252512/jquery-datepicker-prevent-closing-picker-when-clicking-a-date/1762378#1762378
	*/
	$.datepicker._base_selectDate = $.datepicker._selectDate;
	$.datepicker._selectDate = function (id, dateStr) {
		var inst = this._getInst($(id)[0]),
			tp_inst = this._get(inst, 'timepicker'),
			was_inline;

		if (tp_inst && inst.settings.showTimepicker) {
			tp_inst._limitMinMaxDateTime(inst, true);
			was_inline = inst.inline;
			inst.inline = inst.stay_open = true;
			//This way the onSelect handler called from calendarpicker get the full dateTime
			this._base_selectDate(id, dateStr);
			inst.inline = was_inline;
			inst.stay_open = false;
			this._notifyChange(inst);
			this._updateDatepicker(inst);
		} else {
			this._base_selectDate(id, dateStr);
		}
	};

	/*
	* second bad hack :/ override datepicker so it triggers an event when changing the input field
	* and does not redraw the datepicker on every selectDate event
	*/
	$.datepicker._base_updateDatepicker = $.datepicker._updateDatepicker;
	$.datepicker._updateDatepicker = function (inst) {

		// don't popup the datepicker if there is another instance already opened
		var input = inst.input[0];
		if ($.datepicker._curInst && $.datepicker._curInst !== inst && $.datepicker._datepickerShowing && $.datepicker._lastInput !== input) {
			return;
		}

		if (typeof(inst.stay_open) !== 'boolean' || inst.stay_open === false) {

			this._base_updateDatepicker(inst);

			// Reload the time control when changing something in the input text field.
			var tp_inst = this._get(inst, 'timepicker');
			if (tp_inst) {
				tp_inst._addTimePicker(inst);
			}
		}
	};

	/*
	* third bad hack :/ override datepicker so it allows spaces and colon in the input field
	*/
	$.datepicker._base_doKeyPress = $.datepicker._doKeyPress;
	$.datepicker._doKeyPress = function (event) {
		var inst = $.datepicker._getInst(event.target),
			tp_inst = $.datepicker._get(inst, 'timepicker');

		if (tp_inst) {
			if ($.datepicker._get(inst, 'constrainInput')) {
				var ampm = tp_inst.support.ampm,
					tz = tp_inst._defaults.showTimezone !== null ? tp_inst._defaults.showTimezone : tp_inst.support.timezone,
					dateChars = $.datepicker._possibleChars($.datepicker._get(inst, 'dateFormat')),
					datetimeChars = tp_inst._defaults.timeFormat.toString()
											.replace(/[hms]/g, '')
											.replace(/TT/g, ampm ? 'APM' : '')
											.replace(/Tt/g, ampm ? 'AaPpMm' : '')
											.replace(/tT/g, ampm ? 'AaPpMm' : '')
											.replace(/T/g, ampm ? 'AP' : '')
											.replace(/tt/g, ampm ? 'apm' : '')
											.replace(/t/g, ampm ? 'ap' : '') + 
											" " + tp_inst._defaults.separator + 
											tp_inst._defaults.timeSuffix + 
											(tz ? tp_inst._defaults.timezoneList.join('') : '') + 
											(tp_inst._defaults.amNames.join('')) + (tp_inst._defaults.pmNames.join('')) + 
											dateChars,
					chr = String.fromCharCode(event.charCode === undefined ? event.keyCode : event.charCode);
				return event.ctrlKey || (chr < ' ' || !dateChars || datetimeChars.indexOf(chr) > -1);
			}
		}

		return $.datepicker._base_doKeyPress(event);
	};

	/*
	* Fourth bad hack :/ override _updateAlternate function used in inline mode to init altField
	* Update any alternate field to synchronise with the main field.
	*/
	$.datepicker._base_updateAlternate = $.datepicker._updateAlternate;
	$.datepicker._updateAlternate = function (inst) {
		var tp_inst = this._get(inst, 'timepicker');
		if (tp_inst) {
			var altField = tp_inst._defaults.altField;
			if (altField) { // update alternate field too
				var altFormat = tp_inst._defaults.altFormat || tp_inst._defaults.dateFormat,
					date = this._getDate(inst),
					formatCfg = $.datepicker._getFormatConfig(inst),
					altFormattedDateTime = '', 
					altSeparator = tp_inst._defaults.altSeparator ? tp_inst._defaults.altSeparator : tp_inst._defaults.separator, 
					altTimeSuffix = tp_inst._defaults.altTimeSuffix ? tp_inst._defaults.altTimeSuffix : tp_inst._defaults.timeSuffix,
					altTimeFormat = tp_inst._defaults.altTimeFormat !== null ? tp_inst._defaults.altTimeFormat : tp_inst._defaults.timeFormat;
				
				altFormattedDateTime += $.datepicker.formatTime(altTimeFormat, tp_inst, tp_inst._defaults) + altTimeSuffix;
				if (!tp_inst._defaults.timeOnly && !tp_inst._defaults.altFieldTimeOnly && date !== null) {
					if (tp_inst._defaults.altFormat) {
						altFormattedDateTime = $.datepicker.formatDate(tp_inst._defaults.altFormat, date, formatCfg) + altSeparator + altFormattedDateTime;
					}
					else {
						altFormattedDateTime = tp_inst.formattedDate + altSeparator + altFormattedDateTime;
					}
				}
				$(altField).val( inst.input.val() ? altFormattedDateTime : "");
			}
		}
		else {
			$.datepicker._base_updateAlternate(inst);	
		}
	};

	/*
	* Override key up event to sync manual input changes.
	*/
	$.datepicker._base_doKeyUp = $.datepicker._doKeyUp;
	$.datepicker._doKeyUp = function (event) {
		var inst = $.datepicker._getInst(event.target),
			tp_inst = $.datepicker._get(inst, 'timepicker');

		if (tp_inst) {
			if (tp_inst._defaults.timeOnly && (inst.input.val() !== inst.lastVal)) {
				try {
					$.datepicker._updateDatepicker(inst);
				} catch (err) {
					$.timepicker.log(err);
				}
			}
		}

		return $.datepicker._base_doKeyUp(event);
	};

	/*
	* override "Today" button to also grab the time.
	*/
	$.datepicker._base_gotoToday = $.datepicker._gotoToday;
	$.datepicker._gotoToday = function (id) {
		var inst = this._getInst($(id)[0]),
			$dp = inst.dpDiv;
		this._base_gotoToday(id);
		var tp_inst = this._get(inst, 'timepicker');
		selectLocalTimezone(tp_inst);
		var now = new Date();
		this._setTime(inst, now);
		this._setDate(inst, now);
	};

	/*
	* Disable & enable the Time in the datetimepicker
	*/
	$.datepicker._disableTimepickerDatepicker = function (target) {
		var inst = this._getInst(target);
		if (!inst) {
			return;
		}

		var tp_inst = this._get(inst, 'timepicker');
		$(target).datepicker('getDate'); // Init selected[Year|Month|Day]
		if (tp_inst) {
			inst.settings.showTimepicker = false;
			tp_inst._defaults.showTimepicker = false;
			tp_inst._updateDateTime(inst);
		}
	};

	$.datepicker._enableTimepickerDatepicker = function (target) {
		var inst = this._getInst(target);
		if (!inst) {
			return;
		}

		var tp_inst = this._get(inst, 'timepicker');
		$(target).datepicker('getDate'); // Init selected[Year|Month|Day]
		if (tp_inst) {
			inst.settings.showTimepicker = true;
			tp_inst._defaults.showTimepicker = true;
			tp_inst._addTimePicker(inst); // Could be disabled on page load
			tp_inst._updateDateTime(inst);
		}
	};

	/*
	* Create our own set time function
	*/
	$.datepicker._setTime = function (inst, date) {
		var tp_inst = this._get(inst, 'timepicker');
		if (tp_inst) {
			var defaults = tp_inst._defaults;

			// calling _setTime with no date sets time to defaults
			tp_inst.hour = date ? date.getHours() : defaults.hour;
			tp_inst.minute = date ? date.getMinutes() : defaults.minute;
			tp_inst.second = date ? date.getSeconds() : defaults.second;
			tp_inst.millisec = date ? date.getMilliseconds() : defaults.millisec;
			tp_inst.microsec = date ? date.getMicroseconds() : defaults.microsec;

			//check if within min/max times.. 
			tp_inst._limitMinMaxDateTime(inst, true);

			tp_inst._onTimeChange();
			tp_inst._updateDateTime(inst);
		}
	};

	/*
	* Create new public method to set only time, callable as $().datepicker('setTime', date)
	*/
	$.datepicker._setTimeDatepicker = function (target, date, withDate) {
		var inst = this._getInst(target);
		if (!inst) {
			return;
		}

		var tp_inst = this._get(inst, 'timepicker');

		if (tp_inst) {
			this._setDateFromField(inst);
			var tp_date;
			if (date) {
				if (typeof date === "string") {
					tp_inst._parseTime(date, withDate);
					tp_date = new Date();
					tp_date.setHours(tp_inst.hour, tp_inst.minute, tp_inst.second, tp_inst.millisec);
					tp_date.setMicroseconds(tp_inst.microsec);
				} else {
					tp_date = new Date(date.getTime());
					tp_date.setMicroseconds(date.getMicroseconds());
				}
				if (tp_date.toString() === 'Invalid Date') {
					tp_date = undefined;
				}
				this._setTime(inst, tp_date);
			}
		}

	};

	/*
	* override setDate() to allow setting time too within Date object
	*/
	$.datepicker._base_setDateDatepicker = $.datepicker._setDateDatepicker;
	$.datepicker._setDateDatepicker = function (target, _date) {
		var inst = this._getInst(target);
		var date = _date;
		if (!inst) {
			return;
		}

		if (typeof(_date) === 'string') {
			date = new Date(_date);
			if (!date.getTime()) {
				this._base_setDateDatepicker.apply(this, arguments);
				date = $(target).datepicker('getDate');
			}
		}

		var tp_inst = this._get(inst, 'timepicker');
		var tp_date;
		if (date instanceof Date) {
			tp_date = new Date(date.getTime());
			tp_date.setMicroseconds(date.getMicroseconds());
		} else {
			tp_date = date;
		}
		
		// This is important if you are using the timezone option, javascript's Date 
		// object will only return the timezone offset for the current locale, so we 
		// adjust it accordingly.  If not using timezone option this won't matter..
		// If a timezone is different in tp, keep the timezone as is
		if (tp_inst && tp_date) {
			// look out for DST if tz wasn't specified
			if (!tp_inst.support.timezone && tp_inst._defaults.timezone === null) {
				tp_inst.timezone = tp_date.getTimezoneOffset() * -1;
			}
			date = $.timepicker.timezoneAdjust(date, tp_inst.timezone);
			tp_date = $.timepicker.timezoneAdjust(tp_date, tp_inst.timezone);
		}

		this._updateDatepicker(inst);
		this._base_setDateDatepicker.apply(this, arguments);
		this._setTimeDatepicker(target, tp_date, true);
	};

	/*
	* override getDate() to allow getting time too within Date object
	*/
	$.datepicker._base_getDateDatepicker = $.datepicker._getDateDatepicker;
	$.datepicker._getDateDatepicker = function (target, noDefault) {
		var inst = this._getInst(target);
		if (!inst) {
			return;
		}

		var tp_inst = this._get(inst, 'timepicker');

		if (tp_inst) {
			// if it hasn't yet been defined, grab from field
			if (inst.lastVal === undefined) {
				this._setDateFromField(inst, noDefault);
			}

			var date = this._getDate(inst);
			if (date && tp_inst._parseTime($(target).val(), tp_inst.timeOnly)) {
				date.setHours(tp_inst.hour, tp_inst.minute, tp_inst.second, tp_inst.millisec);
				date.setMicroseconds(tp_inst.microsec);

				// This is important if you are using the timezone option, javascript's Date 
				// object will only return the timezone offset for the current locale, so we 
				// adjust it accordingly.  If not using timezone option this won't matter..
				if (tp_inst.timezone != null) {
					// look out for DST if tz wasn't specified
					if (!tp_inst.support.timezone && tp_inst._defaults.timezone === null) {
						tp_inst.timezone = date.getTimezoneOffset() * -1;
					}
					date = $.timepicker.timezoneAdjust(date, tp_inst.timezone);
				}
			}
			return date;
		}
		return this._base_getDateDatepicker(target, noDefault);
	};

	/*
	* override parseDate() because UI 1.8.14 throws an error about "Extra characters"
	* An option in datapicker to ignore extra format characters would be nicer.
	*/
	$.datepicker._base_parseDate = $.datepicker.parseDate;
	$.datepicker.parseDate = function (format, value, settings) {
		var date;
		try {
			date = this._base_parseDate(format, value, settings);
		} catch (err) {
			// Hack!  The error message ends with a colon, a space, and
			// the "extra" characters.  We rely on that instead of
			// attempting to perfectly reproduce the parsing algorithm.
			if (err.indexOf(":") >= 0) {
				date = this._base_parseDate(format, value.substring(0, value.length - (err.length - err.indexOf(':') - 2)), settings);
				$.timepicker.log("Error parsing the date string: " + err + "\ndate string = " + value + "\ndate format = " + format);
			} else {
				throw err;
			}
		}
		return date;
	};

	/*
	* override formatDate to set date with time to the input
	*/
	$.datepicker._base_formatDate = $.datepicker._formatDate;
	$.datepicker._formatDate = function (inst, day, month, year) {
		var tp_inst = this._get(inst, 'timepicker');
		if (tp_inst) {
			tp_inst._updateDateTime(inst);
			return tp_inst.$input.val();
		}
		return this._base_formatDate(inst);
	};

	/*
	* override options setter to add time to maxDate(Time) and minDate(Time). MaxDate
	*/
	$.datepicker._base_optionDatepicker = $.datepicker._optionDatepicker;
	$.datepicker._optionDatepicker = function (target, name, value) {
		var inst = this._getInst(target),
			name_clone;
		if (!inst) {
			return null;
		}

		var tp_inst = this._get(inst, 'timepicker');
		if (tp_inst) {
			var min = null,
				max = null,
				onselect = null,
				overrides = tp_inst._defaults.evnts,
				fns = {},
				prop,
				ret,
				oldVal,
				$target;
			if (typeof name === 'string') { // if min/max was set with the string
				if (name === 'minDate' || name === 'minDateTime') {
					min = value;
				} else if (name === 'maxDate' || name === 'maxDateTime') {
					max = value;
				} else if (name === 'onSelect') {
					onselect = value;
				} else if (overrides.hasOwnProperty(name)) {
					if (typeof (value) === 'undefined') {
						return overrides[name];
					}
					fns[name] = value;
					name_clone = {}; //empty results in exiting function after overrides updated
				}
			} else if (typeof name === 'object') { //if min/max was set with the JSON
				if (name.minDate) {
					min = name.minDate;
				} else if (name.minDateTime) {
					min = name.minDateTime;
				} else if (name.maxDate) {
					max = name.maxDate;
				} else if (name.maxDateTime) {
					max = name.maxDateTime;
				}
				for (prop in overrides) {
					if (overrides.hasOwnProperty(prop) && name[prop]) {
						fns[prop] = name[prop];
					}
				}
			}
			for (prop in fns) {
				if (fns.hasOwnProperty(prop)) {
					overrides[prop] = fns[prop];
					if (!name_clone) { name_clone = $.extend({}, name); }
					delete name_clone[prop];
				}
			}
			if (name_clone && isEmptyObject(name_clone)) { return; }
			if (min) { //if min was set
				if (min === 0) {
					min = new Date();
				} else {
					min = new Date(min);
				}
				tp_inst._defaults.minDate = min;
				tp_inst._defaults.minDateTime = min;
			} else if (max) { //if max was set
				if (max === 0) {
					max = new Date();
				} else {
					max = new Date(max);
				}
				tp_inst._defaults.maxDate = max;
				tp_inst._defaults.maxDateTime = max;
			} else if (onselect) {
				tp_inst._defaults.onSelect = onselect;
			}

			// Datepicker will override our date when we call _base_optionDatepicker when 
			// calling minDate/maxDate, so we will first grab the value, call 
			// _base_optionDatepicker, then set our value back.
			if(min || max){
				$target = $(target);
				oldVal = $target.datetimepicker('getDate');
				ret = this._base_optionDatepicker.call($.datepicker, target, name_clone || name, value);
				$target.datetimepicker('setDate', oldVal);
				return ret;
			}
		}
		if (value === undefined) {
			return this._base_optionDatepicker.call($.datepicker, target, name);
		}
		return this._base_optionDatepicker.call($.datepicker, target, name_clone || name, value);
	};
	
	/*
	* jQuery isEmptyObject does not check hasOwnProperty - if someone has added to the object prototype,
	* it will return false for all objects
	*/
	var isEmptyObject = function (obj) {
		var prop;
		for (prop in obj) {
			if (obj.hasOwnProperty(prop)) {
				return false;
			}
		}
		return true;
	};

	/*
	* jQuery extend now ignores nulls!
	*/
	var extendRemove = function (target, props) {
		$.extend(target, props);
		for (var name in props) {
			if (props[name] === null || props[name] === undefined) {
				target[name] = props[name];
			}
		}
		return target;
	};

	/*
	* Determine by the time format which units are supported
	* Returns an object of booleans for each unit
	*/
	var detectSupport = function (timeFormat) {
		var tf = timeFormat.replace(/'.*?'/g, '').toLowerCase(), // removes literals
			isIn = function (f, t) { // does the format contain the token?
					return f.indexOf(t) !== -1 ? true : false;
				};
		return {
				hour: isIn(tf, 'h'),
				minute: isIn(tf, 'm'),
				second: isIn(tf, 's'),
				millisec: isIn(tf, 'l'),
				microsec: isIn(tf, 'c'),
				timezone: isIn(tf, 'z'),
				ampm: isIn(tf, 't') && isIn(timeFormat, 'h'),
				iso8601: isIn(timeFormat, 'Z')
			};
	};

	/*
	* Converts 24 hour format into 12 hour
	* Returns 12 hour without leading 0
	*/
	var convert24to12 = function (hour) {
		hour %= 12;

		if (hour === 0) {
			hour = 12;
		}

		return String(hour);
	};

	var computeEffectiveSetting = function (settings, property) {
		return settings && settings[property] ? settings[property] : $.timepicker._defaults[property];
	};

	/*
	* Splits datetime string into date and time substrings.
	* Throws exception when date can't be parsed
	* Returns {dateString: dateString, timeString: timeString}
	*/
	var splitDateTime = function (dateTimeString, timeSettings) {
		// The idea is to get the number separator occurrences in datetime and the time format requested (since time has
		// fewer unknowns, mostly numbers and am/pm). We will use the time pattern to split.
		var separator = computeEffectiveSetting(timeSettings, 'separator'),
			format = computeEffectiveSetting(timeSettings, 'timeFormat'),
			timeParts = format.split(separator), // how many occurrences of separator may be in our format?
			timePartsLen = timeParts.length,
			allParts = dateTimeString.split(separator),
			allPartsLen = allParts.length;

		if (allPartsLen > 1) {
			return {
				dateString: allParts.splice(0, allPartsLen - timePartsLen).join(separator),
				timeString: allParts.splice(0, timePartsLen).join(separator)
			};
		}

		return {
			dateString: dateTimeString,
			timeString: ''
		};
	};

	/*
	* Internal function to parse datetime interval
	* Returns: {date: Date, timeObj: Object}, where
	*   date - parsed date without time (type Date)
	*   timeObj = {hour: , minute: , second: , millisec: , microsec: } - parsed time. Optional
	*/
	var parseDateTimeInternal = function (dateFormat, timeFormat, dateTimeString, dateSettings, timeSettings) {
		var date,
			parts,
			parsedTime;

		parts = splitDateTime(dateTimeString, timeSettings);
		date = $.datepicker._base_parseDate(dateFormat, parts.dateString, dateSettings);

		if (parts.timeString === '') {
			return {
				date: date
			};
		}

		parsedTime = $.datepicker.parseTime(timeFormat, parts.timeString, timeSettings);

		if (!parsedTime) {
			throw 'Wrong time format';
		}

		return {
			date: date,
			timeObj: parsedTime
		};
	};

	/*
	* Internal function to set timezone_select to the local timezone
	*/
	var selectLocalTimezone = function (tp_inst, date) {
		if (tp_inst && tp_inst.timezone_select) {
			var now = date || new Date();
			tp_inst.timezone_select.val(-now.getTimezoneOffset());
		}
	};

	/*
	* Create a Singleton Instance
	*/
	$.timepicker = new Timepicker();

	/**
	 * Get the timezone offset as string from a date object (eg '+0530' for UTC+5.5)
	 * @param {number} tzMinutes if not a number, less than -720 (-1200), or greater than 840 (+1400) this value is returned
	 * @param {boolean} iso8601 if true formats in accordance to iso8601 "+12:45"
	 * @return {string}
	 */
	$.timepicker.timezoneOffsetString = function (tzMinutes, iso8601) {
		if (isNaN(tzMinutes) || tzMinutes > 840 || tzMinutes < -720) {
			return tzMinutes;
		}

		var off = tzMinutes,
			minutes = off % 60,
			hours = (off - minutes) / 60,
			iso = iso8601 ? ':' : '',
			tz = (off >= 0 ? '+' : '-') + ('0' + Math.abs(hours)).slice(-2) + iso + ('0' + Math.abs(minutes)).slice(-2);
		
		if (tz === '+00:00') {
			return 'Z';
		}
		return tz;
	};

	/**
	 * Get the number in minutes that represents a timezone string
	 * @param  {string} tzString formatted like "+0500", "-1245", "Z"
	 * @return {number} the offset minutes or the original string if it doesn't match expectations
	 */
	$.timepicker.timezoneOffsetNumber = function (tzString) {
		var normalized = tzString.toString().replace(':', ''); // excuse any iso8601, end up with "+1245"

		if (normalized.toUpperCase() === 'Z') { // if iso8601 with Z, its 0 minute offset
			return 0;
		}

		if (!/^(\-|\+)\d{4}$/.test(normalized)) { // possibly a user defined tz, so just give it back
			return tzString;
		}

		return ((normalized.substr(0, 1) === '-' ? -1 : 1) * // plus or minus
					((parseInt(normalized.substr(1, 2), 10) * 60) + // hours (converted to minutes)
					parseInt(normalized.substr(3, 2), 10))); // minutes
	};

	/**
	 * No way to set timezone in js Date, so we must adjust the minutes to compensate. (think setDate, getDate)
	 * @param  {Date} date
	 * @param  {string} toTimezone formatted like "+0500", "-1245"
	 * @return {Date}
	 */
	$.timepicker.timezoneAdjust = function (date, toTimezone) {
		var toTz = $.timepicker.timezoneOffsetNumber(toTimezone);
		if (!isNaN(toTz)) {
			date.setMinutes(date.getMinutes() + -date.getTimezoneOffset() - toTz);
		}
		return date;
	};

	/**
	 * Calls `timepicker()` on the `startTime` and `endTime` elements, and configures them to
	 * enforce date range limits.
	 * n.b. The input value must be correctly formatted (reformatting is not supported)
	 * @param  {Element} startTime
	 * @param  {Element} endTime
	 * @param  {Object} options Options for the timepicker() call
	 * @return {jQuery}
	 */
	$.timepicker.timeRange = function (startTime, endTime, options) {
		return $.timepicker.handleRange('timepicker', startTime, endTime, options);
	};

	/**
	 * Calls `datetimepicker` on the `startTime` and `endTime` elements, and configures them to
	 * enforce date range limits.
	 * @param  {Element} startTime
	 * @param  {Element} endTime
	 * @param  {Object} options Options for the `timepicker()` call. Also supports `reformat`,
	 *   a boolean value that can be used to reformat the input values to the `dateFormat`.
	 * @param  {string} method Can be used to specify the type of picker to be added
	 * @return {jQuery}
	 */
	$.timepicker.datetimeRange = function (startTime, endTime, options) {
		$.timepicker.handleRange('datetimepicker', startTime, endTime, options);
	};

	/**
	 * Calls `datepicker` on the `startTime` and `endTime` elements, and configures them to
	 * enforce date range limits.
	 * @param  {Element} startTime
	 * @param  {Element} endTime
	 * @param  {Object} options Options for the `timepicker()` call. Also supports `reformat`,
	 *   a boolean value that can be used to reformat the input values to the `dateFormat`.
	 * @return {jQuery}
	 */
	$.timepicker.dateRange = function (startTime, endTime, options) {
		$.timepicker.handleRange('datepicker', startTime, endTime, options);
	};

	/**
	 * Calls `method` on the `startTime` and `endTime` elements, and configures them to
	 * enforce date range limits.
	 * @param  {string} method Can be used to specify the type of picker to be added
	 * @param  {Element} startTime
	 * @param  {Element} endTime
	 * @param  {Object} options Options for the `timepicker()` call. Also supports `reformat`,
	 *   a boolean value that can be used to reformat the input values to the `dateFormat`.
	 * @return {jQuery}
	 */
	$.timepicker.handleRange = function (method, startTime, endTime, options) {
		options = $.extend({}, {
			minInterval: 0, // min allowed interval in milliseconds
			maxInterval: 0, // max allowed interval in milliseconds
			start: {},      // options for start picker
			end: {}         // options for end picker
		}, options);

		// for the mean time this fixes an issue with calling getDate with timepicker()
		var timeOnly = false;
		if(method === 'timepicker'){
			timeOnly = true;
			method = 'datetimepicker';
		}

		function checkDates(changed, other) {
			var startdt = startTime[method]('getDate'),
				enddt = endTime[method]('getDate'),
				changeddt = changed[method]('getDate');

			if (startdt !== null) {
				var minDate = new Date(startdt.getTime()),
					maxDate = new Date(startdt.getTime());

				minDate.setMilliseconds(minDate.getMilliseconds() + options.minInterval);
				maxDate.setMilliseconds(maxDate.getMilliseconds() + options.maxInterval);

				if (options.minInterval > 0 && minDate > enddt) { // minInterval check
					endTime[method]('setDate', minDate);
				}
				else if (options.maxInterval > 0 && maxDate < enddt) { // max interval check
					endTime[method]('setDate', maxDate);
				}
				else if (startdt > enddt) {
					other[method]('setDate', changeddt);
				}
			}
		}

		function selected(changed, other, option) {
			if (!changed.val()) {
				return;
			}
			var date = changed[method].call(changed, 'getDate');
			if (date !== null && options.minInterval > 0) {
				if (option === 'minDate') {
					date.setMilliseconds(date.getMilliseconds() + options.minInterval);
				}
				if (option === 'maxDate') {
					date.setMilliseconds(date.getMilliseconds() - options.minInterval);
				}
			}
			
			if (date.getTime) {
				other[method].call(other, 'option', option, date);
			}
		}

		$.fn[method].call(startTime, $.extend({
			timeOnly: timeOnly,
			onClose: function (dateText, inst) {
				checkDates($(this), endTime);
			},
			onSelect: function (selectedDateTime) {
				selected($(this), endTime, 'minDate');
			}
		}, options, options.start));
		$.fn[method].call(endTime, $.extend({
			timeOnly: timeOnly,
			onClose: function (dateText, inst) {
				checkDates($(this), startTime);
			},
			onSelect: function (selectedDateTime) {
				selected($(this), startTime, 'maxDate');
			}
		}, options, options.end));

		checkDates(startTime, endTime);
		
		selected(startTime, endTime, 'minDate');
		selected(endTime, startTime, 'maxDate');

		return $([startTime.get(0), endTime.get(0)]);
	};

	/**
	 * Log error or data to the console during error or debugging
	 * @param  {Object} err pass any type object to log to the console during error or debugging
	 * @return {void}
	 */
	$.timepicker.log = function () {
		if (window.console) {
			window.console.log.apply(window.console, Array.prototype.slice.call(arguments));
		}
	};

	/*
	 * Add util object to allow access to private methods for testability.
	 */
	$.timepicker._util = {
		_extendRemove: extendRemove,
		_isEmptyObject: isEmptyObject,
		_convert24to12: convert24to12,
		_detectSupport: detectSupport,
		_selectLocalTimezone: selectLocalTimezone,
		_computeEffectiveSetting: computeEffectiveSetting,
		_splitDateTime: splitDateTime,
		_parseDateTimeInternal: parseDateTimeInternal
	};

	/*
	* Microsecond support
	*/
	if (!Date.prototype.getMicroseconds) {
		Date.prototype.microseconds = 0;
		Date.prototype.getMicroseconds = function () { return this.microseconds; };
		Date.prototype.setMicroseconds = function (m) {
			this.setMilliseconds(this.getMilliseconds() + Math.floor(m / 1000));
			this.microseconds = m % 1000;
			return this;
		};
	}

	/*
	* Keep up with the version
	*/
	$.timepicker.version = "1.5.0";

})(jQuery);
;

/*!
 * jQuery hashchange event - v1.3 - 7/21/2010
 * http://benalman.com/projects/jquery-hashchange-plugin/
 * 
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */

// Script: jQuery hashchange event
//
// *Version: 1.3, Last updated: 7/21/2010*
// 
// Project Home - http://benalman.com/projects/jquery-hashchange-plugin/
// GitHub       - http://github.com/cowboy/jquery-hashchange/
// Source       - http://github.com/cowboy/jquery-hashchange/raw/master/jquery.ba-hashchange.js
// (Minified)   - http://github.com/cowboy/jquery-hashchange/raw/master/jquery.ba-hashchange.min.js (0.8kb gzipped)
// 
// About: License
// 
// Copyright (c) 2010 "Cowboy" Ben Alman,
// Dual licensed under the MIT and GPL licenses.
// http://benalman.com/about/license/
// 
// About: Examples
// 
// These working examples, complete with fully commented code, illustrate a few
// ways in which this plugin can be used.
// 
// hashchange event - http://benalman.com/code/projects/jquery-hashchange/examples/hashchange/
// document.domain - http://benalman.com/code/projects/jquery-hashchange/examples/document_domain/
// 
// About: Support and Testing
// 
// Information about what version or versions of jQuery this plugin has been
// tested with, what browsers it has been tested in, and where the unit tests
// reside (so you can test it yourself).
// 
// jQuery Versions - 1.2.6, 1.3.2, 1.4.1, 1.4.2
// Browsers Tested - Internet Explorer 6-8, Firefox 2-4, Chrome 5-6, Safari 3.2-5,
//                   Opera 9.6-10.60, iPhone 3.1, Android 1.6-2.2, BlackBerry 4.6-5.
// Unit Tests      - http://benalman.com/code/projects/jquery-hashchange/unit/
// 
// About: Known issues
// 
// While this jQuery hashchange event implementation is quite stable and
// robust, there are a few unfortunate browser bugs surrounding expected
// hashchange event-based behaviors, independent of any JavaScript
// window.onhashchange abstraction. See the following examples for more
// information:
// 
// Chrome: Back Button - http://benalman.com/code/projects/jquery-hashchange/examples/bug-chrome-back-button/
// Firefox: Remote XMLHttpRequest - http://benalman.com/code/projects/jquery-hashchange/examples/bug-firefox-remote-xhr/
// WebKit: Back Button in an Iframe - http://benalman.com/code/projects/jquery-hashchange/examples/bug-webkit-hash-iframe/
// Safari: Back Button from a different domain - http://benalman.com/code/projects/jquery-hashchange/examples/bug-safari-back-from-diff-domain/
// 
// Also note that should a browser natively support the window.onhashchange 
// event, but not report that it does, the fallback polling loop will be used.
// 
// About: Release History
// 
// 1.3   - (7/21/2010) Reorganized IE6/7 Iframe code to make it more
//         "removable" for mobile-only development. Added IE6/7 document.title
//         support. Attempted to make Iframe as hidden as possible by using
//         techniques from http://www.paciellogroup.com/blog/?p=604. Added 
//         support for the "shortcut" format $(window).hashchange( fn ) and
//         $(window).hashchange() like jQuery provides for built-in events.
//         Renamed jQuery.hashchangeDelay to <jQuery.fn.hashchange.delay> and
//         lowered its default value to 50. Added <jQuery.fn.hashchange.domain>
//         and <jQuery.fn.hashchange.src> properties plus document-domain.html
//         file to address access denied issues when setting document.domain in
//         IE6/7.
// 1.2   - (2/11/2010) Fixed a bug where coming back to a page using this plugin
//         from a page on another domain would cause an error in Safari 4. Also,
//         IE6/7 Iframe is now inserted after the body (this actually works),
//         which prevents the page from scrolling when the event is first bound.
//         Event can also now be bound before DOM ready, but it won't be usable
//         before then in IE6/7.
// 1.1   - (1/21/2010) Incorporated document.documentMode test to fix IE8 bug
//         where browser version is incorrectly reported as 8.0, despite
//         inclusion of the X-UA-Compatible IE=EmulateIE7 meta tag.
// 1.0   - (1/9/2010) Initial Release. Broke out the jQuery BBQ event.special
//         window.onhashchange functionality into a separate plugin for users
//         who want just the basic event & back button support, without all the
//         extra awesomeness that BBQ provides. This plugin will be included as
//         part of jQuery BBQ, but also be available separately.

(function($,window,undefined){
  '$:nomunge'; // Used by YUI compressor.
  
  // Reused string.
  var str_hashchange = 'hashchange',
    
    // Method / object references.
    doc = document,
    fake_onhashchange,
    special = $.event.special,
    
    // Does the browser support window.onhashchange? Note that IE8 running in
    // IE7 compatibility mode reports true for 'onhashchange' in window, even
    // though the event isn't supported, so also test document.documentMode.
    doc_mode = doc.documentMode,
    supports_onhashchange = 'on' + str_hashchange in window && ( doc_mode === undefined || doc_mode > 7 );
  
  // Get location.hash (or what you'd expect location.hash to be) sans any
  // leading #. Thanks for making this necessary, Firefox!
  function get_fragment( url ) {
    url = url || location.href;
    return '#' + url.replace( /^[^#]*#?(.*)$/, '$1' );
  };
  
  // Method: jQuery.fn.hashchange
  // 
  // Bind a handler to the window.onhashchange event or trigger all bound
  // window.onhashchange event handlers. This behavior is consistent with
  // jQuery's built-in event handlers.
  // 
  // Usage:
  // 
  // > jQuery(window).hashchange( [ handler ] );
  // 
  // Arguments:
  // 
  //  handler - (Function) Optional handler to be bound to the hashchange
  //    event. This is a "shortcut" for the more verbose form:
  //    jQuery(window).bind( 'hashchange', handler ). If handler is omitted,
  //    all bound window.onhashchange event handlers will be triggered. This
  //    is a shortcut for the more verbose
  //    jQuery(window).trigger( 'hashchange' ). These forms are described in
  //    the <hashchange event> section.
  // 
  // Returns:
  // 
  //  (jQuery) The initial jQuery collection of elements.
  
  // Allow the "shortcut" format $(elem).hashchange( fn ) for binding and
  // $(elem).hashchange() for triggering, like jQuery does for built-in events.
  $.fn[ str_hashchange ] = function( fn ) {
    return fn ? this.bind( str_hashchange, fn ) : this.trigger( str_hashchange );
  };
  
  // Property: jQuery.fn.hashchange.delay
  // 
  // The numeric interval (in milliseconds) at which the <hashchange event>
  // polling loop executes. Defaults to 50.
  
  // Property: jQuery.fn.hashchange.domain
  // 
  // If you're setting document.domain in your JavaScript, and you want hash
  // history to work in IE6/7, not only must this property be set, but you must
  // also set document.domain BEFORE jQuery is loaded into the page. This
  // property is only applicable if you are supporting IE6/7 (or IE8 operating
  // in "IE7 compatibility" mode).
  // 
  // In addition, the <jQuery.fn.hashchange.src> property must be set to the
  // path of the included "document-domain.html" file, which can be renamed or
  // modified if necessary (note that the document.domain specified must be the
  // same in both your main JavaScript as well as in this file).
  // 
  // Usage:
  // 
  // jQuery.fn.hashchange.domain = document.domain;
  
  // Property: jQuery.fn.hashchange.src
  // 
  // If, for some reason, you need to specify an Iframe src file (for example,
  // when setting document.domain as in <jQuery.fn.hashchange.domain>), you can
  // do so using this property. Note that when using this property, history
  // won't be recorded in IE6/7 until the Iframe src file loads. This property
  // is only applicable if you are supporting IE6/7 (or IE8 operating in "IE7
  // compatibility" mode).
  // 
  // Usage:
  // 
  // jQuery.fn.hashchange.src = 'path/to/file.html';
  
  $.fn[ str_hashchange ].delay = 50;
  /*
  $.fn[ str_hashchange ].domain = null;
  $.fn[ str_hashchange ].src = null;
  */
  
  // Event: hashchange event
  // 
  // Fired when location.hash changes. In browsers that support it, the native
  // HTML5 window.onhashchange event is used, otherwise a polling loop is
  // initialized, running every <jQuery.fn.hashchange.delay> milliseconds to
  // see if the hash has changed. In IE6/7 (and IE8 operating in "IE7
  // compatibility" mode), a hidden Iframe is created to allow the back button
  // and hash-based history to work.
  // 
  // Usage as described in <jQuery.fn.hashchange>:
  // 
  // > // Bind an event handler.
  // > jQuery(window).hashchange( function(e) {
  // >   var hash = location.hash;
  // >   ...
  // > });
  // > 
  // > // Manually trigger the event handler.
  // > jQuery(window).hashchange();
  // 
  // A more verbose usage that allows for event namespacing:
  // 
  // > // Bind an event handler.
  // > jQuery(window).bind( 'hashchange', function(e) {
  // >   var hash = location.hash;
  // >   ...
  // > });
  // > 
  // > // Manually trigger the event handler.
  // > jQuery(window).trigger( 'hashchange' );
  // 
  // Additional Notes:
  // 
  // * The polling loop and Iframe are not created until at least one handler
  //   is actually bound to the 'hashchange' event.
  // * If you need the bound handler(s) to execute immediately, in cases where
  //   a location.hash exists on page load, via bookmark or page refresh for
  //   example, use jQuery(window).hashchange() or the more verbose 
  //   jQuery(window).trigger( 'hashchange' ).
  // * The event can be bound before DOM ready, but since it won't be usable
  //   before then in IE6/7 (due to the necessary Iframe), recommended usage is
  //   to bind it inside a DOM ready handler.
  
  // Override existing $.event.special.hashchange methods (allowing this plugin
  // to be defined after jQuery BBQ in BBQ's source code).
  special[ str_hashchange ] = $.extend( special[ str_hashchange ], {
    
    // Called only when the first 'hashchange' event is bound to window.
    setup: function() {
      // If window.onhashchange is supported natively, there's nothing to do..
      if ( supports_onhashchange ) { return false; }
      
      // Otherwise, we need to create our own. And we don't want to call this
      // until the user binds to the event, just in case they never do, since it
      // will create a polling loop and possibly even a hidden Iframe.
      $( fake_onhashchange.start );
    },
    
    // Called only when the last 'hashchange' event is unbound from window.
    teardown: function() {
      // If window.onhashchange is supported natively, there's nothing to do..
      if ( supports_onhashchange ) { return false; }
      
      // Otherwise, we need to stop ours (if possible).
      $( fake_onhashchange.stop );
    }
    
  });
  
  // fake_onhashchange does all the work of triggering the window.onhashchange
  // event for browsers that don't natively support it, including creating a
  // polling loop to watch for hash changes and in IE 6/7 creating a hidden
  // Iframe to enable back and forward.
  fake_onhashchange = (function(){
    var self = {},
      timeout_id,
      
      // Remember the initial hash so it doesn't get triggered immediately.
      last_hash = get_fragment(),
      
      fn_retval = function(val){ return val; },
      history_set = fn_retval,
      history_get = fn_retval;
    
    // Start the polling loop.
    self.start = function() {
      timeout_id || poll();
    };
    
    // Stop the polling loop.
    self.stop = function() {
      timeout_id && clearTimeout( timeout_id );
      timeout_id = undefined;
    };
    
    // This polling loop checks every $.fn.hashchange.delay milliseconds to see
    // if location.hash has changed, and triggers the 'hashchange' event on
    // window when necessary.
    function poll() {
      var hash = get_fragment(),
        history_hash = history_get( last_hash );
      
      if ( hash !== last_hash ) {
        history_set( last_hash = hash, history_hash );
        
        $(window).trigger( str_hashchange );
        
      } else if ( history_hash !== last_hash ) {
        location.href = location.href.replace( /#.*/, '' ) + history_hash;
      }
      
      timeout_id = setTimeout( poll, $.fn[ str_hashchange ].delay );
    };
    
    // vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
    // vvvvvvvvvvvvvvvvvvv REMOVE IF NOT SUPPORTING IE6/7/8 vvvvvvvvvvvvvvvvvvv
    // vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
    (window.navigator.userAgent.indexOf("MSIE ") > -1 || !!window.navigator.userAgent.match(/Trident.*rv\:11\./)) && !supports_onhashchange && (function(){
      // Not only do IE6/7 need the "magical" Iframe treatment, but so does IE8
      // when running in "IE7 compatibility" mode.
      
      var iframe,
        iframe_src;
      
      // When the event is bound and polling starts in IE 6/7, create a hidden
      // Iframe for history handling.
      self.start = function(){
        if ( !iframe ) {
          iframe_src = $.fn[ str_hashchange ].src;
          iframe_src = iframe_src && iframe_src + get_fragment();
          
          // Create hidden Iframe. Attempt to make Iframe as hidden as possible
          // by using techniques from http://www.paciellogroup.com/blog/?p=604.
          iframe = $('<iframe tabindex="-1" title="empty"/>').hide()
            
            // When Iframe has completely loaded, initialize the history and
            // start polling.
            .one( 'load', function(){
              iframe_src || history_set( get_fragment() );
              poll();
            })
            
            // Load Iframe src if specified, otherwise nothing.
            .attr( 'src', iframe_src || 'javascript:0' )
            
            // Append Iframe after the end of the body to prevent unnecessary
            // initial page scrolling (yes, this works).
            .insertAfter( 'body' )[0].contentWindow;
          
          // Whenever `document.title` changes, update the Iframe's title to
          // prettify the back/next history menu entries. Since IE sometimes
          // errors with "Unspecified error" the very first time this is set
          // (yes, very useful) wrap this with a try/catch block.
          doc.onpropertychange = function(){
            try {
              if ( event.propertyName === 'title' ) {
                iframe.document.title = doc.title;
              }
            } catch(e) {}
          };
          
        }
      };
      
      // Override the "stop" method since an IE6/7 Iframe was created. Even
      // if there are no longer any bound event handlers, the polling loop
      // is still necessary for back/next to work at all!
      self.stop = fn_retval;
      
      // Get history by looking at the hidden Iframe's location.hash.
      history_get = function() {
        return get_fragment( iframe.location.href );
      };
      
      // Set a new history item by opening and then closing the Iframe
      // document, *then* setting its location.hash. If document.domain has
      // been set, update that as well.
      history_set = function( hash, history_hash ) {
        var iframe_doc = iframe.document,
          domain = $.fn[ str_hashchange ].domain;
        
        if ( hash !== history_hash ) {
          // Update Iframe with any initial `document.title` that might be set.
          iframe_doc.title = doc.title;
          
          // Opening the Iframe's document after it has been closed is what
          // actually adds a history entry.
          iframe_doc.open();
          
          // Set document.domain for the Iframe document as well, if necessary.
          domain && iframe_doc.write( '<script>document.domain="' + domain + '"</script>' );
          
          iframe_doc.close();
          
          // Update the Iframe's hash, for great justice.
          iframe.location.hash = hash;
        }
      };
      
    })();
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    // ^^^^^^^^^^^^^^^^^^^ REMOVE IF NOT SUPPORTING IE6/7/8 ^^^^^^^^^^^^^^^^^^^
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    
    return self;
  })();
  
})(jQuery,this);
;

/**
 * Debounce and throttle function's decorator plugin 1.0.5
 *
 * Copyright (c) 2009 Filatov Dmitry (alpha@zforms.ru)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

(function($) {

$.extend({

	debounce : function(fn, timeout, invokeAsap, ctx) {

		if(arguments.length == 3 && typeof invokeAsap != 'boolean') {
			ctx = invokeAsap;
			invokeAsap = false;
		}

		var timer;

		return function() {

			var args = arguments;
            ctx = ctx || this;

			invokeAsap && !timer && fn.apply(ctx, args);

			clearTimeout(timer);

			timer = setTimeout(function() {
				!invokeAsap && fn.apply(ctx, args);
				timer = null;
			}, timeout);

		};

	},

	throttle : function(fn, timeout, ctx) {

		var timer, args, needInvoke;

		return function() {

			args = arguments;
			needInvoke = true;
			ctx = ctx || this;

			if(!timer) {
				(function() {
					if(needInvoke) {
						fn.apply(ctx, args);
						needInvoke = false;
						timer = setTimeout(arguments.callee, timeout);
					}
					else {
						timer = null;
					}
				})();
			}

		};

	}

});

})(jQuery);;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Handles the resizing of a menu according to the available screen width
 *
 * Uses themes/original/css/resizable-menu.css.php
 *
 * To initialise:
 * $('#myMenu').menuResizer(function () {
 *     // This function will be called to find out how much
 *     // available horizontal space there is for the menu
 *     return $('body').width() - 5; // Some extra margin for good measure
 * });
 *
 * To trigger a resize operation:
 * $('#myMenu').menuResizer('resize'); // Bind this to $(window).resize()
 *
 * To restore the menu to a state like before it was initialized:
 * $('#myMenu').menuResizer('destroy');
 *
 * @package PhpMyAdmin
 */
(function ($) {
    function MenuResizer($container, widthCalculator) {
        var self = this;
        self.$container = $container;
        self.widthCalculator = widthCalculator;
        // create submenu container
        var link = $('<a />', {href: '#', 'class': 'tab nowrap'})
            .text(PMA_messages.strMore)
            .bind('click', false); // same as event.preventDefault()
        var img = $container.find('li img');
        if (img.length) {
            $(PMA_getImage('b_more.png').toString()).prependTo(link);
        }
        var $submenu = $('<li />', {'class': 'submenu'})
            .append(link)
            .append($('<ul />'))
            .mouseenter(function() {
                if ($(this).find('ul .tabactive').length === 0) {
                    $(this)
                    .addClass('submenuhover')
                    .find('> a')
                    .addClass('tabactive');
                }
            })
            .mouseleave(function() {
                if ($(this).find('ul .tabactive').length === 0) {
                    $(this)
                    .removeClass('submenuhover')
                    .find('> a')
                    .removeClass('tabactive');
                }
            });
        $container.children('.clearfloat').remove();
        $container.append($submenu).append("<div class='clearfloat'></div>");
        setTimeout(function () {
            self.resize();
        }, 4);
    }
    MenuResizer.prototype.resize = function () {
        var wmax = this.widthCalculator.call(this.$container);
        var $submenu = this.$container.find('.submenu:last');
        var submenu_w = $submenu.outerWidth(true);
        var $submenu_ul = $submenu.find('ul');
        var $li = this.$container.find('> li');
        var $li2 = $submenu_ul.find('li');
        var more_shown = $li2.length > 0;
        // Calculate the total width used by all the shown tabs
        var total_len = more_shown ? submenu_w : 0;
        var l = $li.length - 1;
        var i;
        for (i = 0; i < l; i++) {
            total_len += $($li[i]).outerWidth(true);
        }
        // Now hide menu elements that don't fit into the menubar
        var hidden = false; // Whether we have hidden any tabs
        while (total_len >= wmax && --l >= 0) { // Process the tabs backwards
            hidden = true;
            var el = $($li[l]);
            var el_width = el.outerWidth(true);
            el.data('width', el_width);
            if (! more_shown) {
                total_len -= el_width;
                el.prependTo($submenu_ul);
                total_len += submenu_w;
                more_shown = true;
            } else {
                total_len -= el_width;
                el.prependTo($submenu_ul);
            }
        }
        // If we didn't hide any tabs, then there might be some space to show some
        if (! hidden) {
            // Show menu elements that do fit into the menubar
            for (i = 0, l = $li2.length; i < l; i++) {
                total_len += $($li2[i]).data('width');
                // item fits or (it is the last item
                // and it would fit if More got removed)
                if (total_len < wmax ||
                    (i == $li2.length - 1 && total_len - submenu_w < wmax)
                ) {
                    $($li2[i]).insertBefore($submenu);
                } else {
                    break;
                }
            }
        }
        // Show/hide the "More" tab as needed
        if ($submenu_ul.find('li').length > 0) {
            $submenu.addClass('shown');
        } else {
            $submenu.removeClass('shown');
        }
        if (this.$container.find('> li').length == 1) {
            // If there is only the "More" tab left, then we need
            // to align the submenu to the left edge of the tab
            $submenu_ul.removeClass().addClass('only');
        } else {
            // Otherwise we align the submenu to the right edge of the tab
            $submenu_ul.removeClass().addClass('notonly');
        }
        if ($submenu.find('.tabactive').length) {
            $submenu
            .addClass('active')
            .find('> a')
            .removeClass('tab')
            .addClass('tabactive');
        } else {
            $submenu
            .removeClass('active')
            .find('> a')
            .addClass('tab')
            .removeClass('tabactive');
        }
    };
    MenuResizer.prototype.destroy = function () {
        var $submenu = this.$container.find('li.submenu').removeData();
        $submenu.find('li').appendTo(this.$container);
        $submenu.remove();
    };

    /** Public API */
    var methods = {
        init: function(widthCalculator) {
            return this.each(function () {
                var $this = $(this);
                if (! $this.data('menuResizer')) {
                    $this.data(
                        'menuResizer',
                        new MenuResizer($this, widthCalculator)
                    );
                }
            });
        },
        resize: function () {
            return this.each(function () {
                var self = $(this).data('menuResizer');
                if (self) {
                    self.resize();
                }
            });
        },
        destroy: function () {
            return this.each(function () {
                var self = $(this).data('menuResizer');
                if (self) {
                    self.destroy();
                }
            });
        }
    };

    /** Extend jQuery */
    $.fn.menuResizer = function(method) {
        if (methods[method]) {
            return methods[method].call(this);
        } else if (typeof method === 'function') {
            return methods.init.apply(this, [method]);
        } else {
            $.error('Method ' +  method + ' does not exist on jQuery.menuResizer');
        }
    };
})(jQuery);
;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Conditionally included if framing is not allowed
 */
if (self == top) {
    var style_element = document.getElementById("cfs-style");
    style_element.parentNode.removeChild(style_element);
} else {
    top.location = self.location;
}
;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * JavaScript functionality for Routines, Triggers and Events.
 *
 * @package PhpMyadmin
 */
/**
 * @var RTE Contains all the JavaScript functionality
 *          for Routines, Triggers and Events
 */
var RTE = {
    /**
     * Construct for the object that provides the
     * functionality for Routines, Triggers and Events
     */
    object: function (type) {
        $.extend(this, RTE.COMMON);
        switch (type) {
        case 'routine':
            $.extend(this, RTE.ROUTINE);
            break;
        case 'trigger':
            // nothing extra yet for triggers
            break;
        case 'event':
            $.extend(this, RTE.EVENT);
            break;
        default:
            break;
        }
    },
    /**
     * @var string param_template Template for a row in the routine editor
     */
    param_template: ''
};

/**
 * @var RTE.COMMON a JavaScript namespace containing the functionality
 *                 for Routines, Triggers and Events
 *
 *                 This namespace is extended by the functionality required
 *                 to handle a specific item (a routine, trigger or event)
 *                 in the relevant javascript files in this folder
 */
RTE.COMMON = {
    /**
     * @var $ajaxDialog Query object containing the reference to the
     *                  dialog that contains the editor
     */
    $ajaxDialog: null,
    /**
     * @var syntaxHiglighter Reference to the codemirror editor
     */
    syntaxHiglighter: null,
    /**
     * @var buttonOptions Object containing options for
     *                    the jQueryUI dialog buttons
     */
    buttonOptions: {},
    /**
     * Validate editor form fields.
     */
    validate: function () {
        /**
         * @var $elm a jQuery object containing the reference
         *           to an element that is being validated
         */
        var $elm = null;
        // Common validation. At the very least the name
        // and the definition must be provided for an item
        $elm = $('table.rte_table').last().find('input[name=item_name]');
        if ($elm.val() === '') {
            $elm.focus();
            alert(PMA_messages.strFormEmpty);
            return false;
        }
        $elm = $('table.rte_table').find('textarea[name=item_definition]');
        if ($elm.val() === '') {
            if (this.syntaxHiglighter !== null) {
                this.syntaxHiglighter.focus();
            }
            else {
                $('textarea[name=item_definition]').last().focus();
            }
            alert(PMA_messages.strFormEmpty);
            return false;
        }
        // The validation has so far passed, so now
        // we can validate item-specific fields.
        return this.validateCustom();
    }, // end validate()
    /**
     * Validate custom editor form fields.
     * This function can be overridden by
     * other files in this folder
     */
    validateCustom: function () {
        return true;
    }, // end validateCustom()
    /**
     * Execute some code after the ajax
     * dialog for the editor is shown.
     * This function can be overridden by
     * other files in this folder
     */
    postDialogShow: function () {
        // Nothing by default
    }, // end postDialogShow()

    exportDialog: function ($this) {
        var $msg = PMA_ajaxShowMessage();
        if ($this.hasClass('mult_submit')) {
            var combined = {
                success: true,
                title: PMA_messages.strExport,
                message: '',
                error: ''
            };
            // export anchors of all selected rows
            var export_anchors = $('input.checkall:checked').parents('tr').find('.export_anchor');
            var count = export_anchors.length;
            var returnCount = 0;

            export_anchors.each(function () {
                $.get($(this).attr('href'), {'ajax_request': true}, function (data) {
                    returnCount++;
                    if (data.success === true) {
                        combined.message += "\n" + data.message + "\n";
                        if (returnCount == count) {
                            showExport(combined);
                        }
                    } else {
                        // complain even if one export is failing
                        combined.success = false;
                        combined.error += "\n" + data.error + "\n";
                        if (returnCount == count) {
                            showExport(combined);
                        }
                    }
                });
            });
        } else {
            $.get($this.attr('href'), {'ajax_request': true}, showExport);
        }

        function showExport(data) {
            if (data.success === true) {
                PMA_ajaxRemoveMessage($msg);
                /**
                 * @var button_options Object containing options
                 *                     for jQueryUI dialog buttons
                 */
                var button_options = {};
                button_options[PMA_messages.strClose] = function () {
                    $(this).dialog("close").remove();
                };
                /**
                 * Display the dialog to the user
                 */
                data.message = '<textarea cols="40" rows="15" style="width: 100%;">' + data.message + '</textarea>';
                var $ajaxDialog = $('<div>' + data.message + '</div>').dialog({
                    width: 500,
                    buttons: button_options,
                    title: data.title
                });
                // Attach syntax highlighted editor to export dialog
                /**
                 * @var $elm jQuery object containing the reference
                 *           to the Export textarea.
                 */
                var $elm = $ajaxDialog.find('textarea');
                PMA_getSQLEditor($elm);
            } else {
                PMA_ajaxShowMessage(data.error, false);
            }
        } // end showExport()
    },  // end exportDialog()
    editorDialog: function (is_new, $this) {
        var that = this;
        /**
         * @var $edit_row jQuery object containing the reference to
         *                the row of the the item being edited
         *                from the list of items
         */
        var $edit_row = null;
        if ($this.hasClass('edit_anchor')) {
            // Remeber the row of the item being edited for later,
            // so that if the edit is successful, we can replace the
            // row with info about the modified item.
            $edit_row = $this.parents('tr');
        }
        /**
         * @var $msg jQuery object containing the reference to
         *           the AJAX message shown to the user
         */
        var $msg = PMA_ajaxShowMessage();
        $.get($this.attr('href'), {'ajax_request': true}, function (data) {
            if (data.success === true) {
                // We have successfully fetched the editor form
                PMA_ajaxRemoveMessage($msg);
                // Now define the function that is called when
                // the user presses the "Go" button
                that.buttonOptions[PMA_messages.strGo] = function () {
                    // Move the data from the codemirror editor back to the
                    // textarea, where it can be used in the form submission.
                    if (typeof CodeMirror != 'undefined') {
                        that.syntaxHiglighter.save();
                    }
                    // Validate editor and submit request, if passed.
                    if (that.validate()) {
                        /**
                         * @var data Form data to be sent in the AJAX request
                         */
                        var data = $('form.rte_form').last().serialize();
                        $msg = PMA_ajaxShowMessage(
                            PMA_messages.strProcessingRequest
                        );
                        var url = $('form.rte_form').last().attr('action');
                        $.post(url, data, function (data) {
                            if (data.success === true) {
                                // Item created successfully
                                PMA_ajaxRemoveMessage($msg);
                                PMA_slidingMessage(data.message);
                                that.$ajaxDialog.dialog('close');
                                // If we are in 'edit' mode, we must
                                // remove the reference to the old row.
                                if (mode === 'edit' && $edit_row !== null ) {
                                    $edit_row.remove();
                                }
                                // Sometimes, like when moving a trigger from
                                // a table to another one, the new row should
                                // not be inserted into the list. In this case
                                // "data.insert" will be set to false.
                                if (data.insert) {
                                    // Insert the new row at the correct
                                    // location in the list of items
                                    /**
                                     * @var text Contains the name of an item from
                                     *           the list that is used in comparisons
                                     *           to find the correct location where
                                     *           to insert a new row.
                                     */
                                    var text = '';
                                    /**
                                     * @var inserted Whether a new item has been
                                     *               inserted in the list or not
                                     */
                                    var inserted = false;
                                    $('table.data').find('tr').each(function () {
                                        text = $(this)
                                                .children('td')
                                                .eq(0)
                                                .find('strong')
                                                .text()
                                                .toUpperCase();
                                        text = $.trim(text);
                                        if (text !== '' && text > data.name) {
                                            $(this).before(data.new_row);
                                            inserted = true;
                                            return false;
                                        }
                                    });
                                    if (! inserted) {
                                        // If we didn't manage to insert the row yet,
                                        // it must belong at the end of the list,
                                        // so we insert it there.
                                        $('table.data').append(data.new_row);
                                    }
                                    // Fade-in the new row
                                    $('tr.ajaxInsert')
                                        .show('slow')
                                        .removeClass('ajaxInsert');
                                } else if ($('table.data').find('tr').has('td').length === 0) {
                                    // If we are not supposed to insert the new row,
                                    // we will now check if the table is empty and
                                    // needs to be hidden. This will be the case if
                                    // we were editing the only item in the list,
                                    // which we removed and will not be inserting
                                    // something else in its place.
                                    $('table.data').hide("slow", function () {
                                        $('#nothing2display').show("slow");
                                    });
                                }
                                // Now we have inserted the row at the correct
                                // position, but surely at least some row classes
                                // are wrong now. So we will itirate throught
                                // all rows and assign correct classes to them
                                /**
                                 * @var ct Count of processed rows
                                 */
                                var ct = 0;
                                /**
                                 * @var rowclass Class to be attached to the row
                                 *               that is being processed
                                 */
                                var rowclass = '';
                                $('table.data').find('tr').has('td').each(function () {
                                    rowclass = (ct % 2 === 0) ? 'odd' : 'even';
                                    $(this).removeClass().addClass(rowclass);
                                    ct++;
                                });
                                // If this is the first item being added, remove
                                // the "No items" message and show the list.
                                if ($('table.data').find('tr').has('td').length > 0 &&
                                    $('#nothing2display').is(':visible')
                                    ) {
                                    $('#nothing2display').hide("slow", function () {
                                        $('table.data').show("slow");
                                    });
                                }
                                PMA_reloadNavigation();
                            } else {
                                PMA_ajaxShowMessage(data.error, false);
                            }
                        }); // end $.post()
                    } // end "if (that.validate())"
                }; // end of function that handles the submission of the Editor
                that.buttonOptions[PMA_messages.strClose] = function () {
                    $(this).dialog("close");
                };
                /**
                 * Display the dialog to the user
                 */
                that.$ajaxDialog = $('<div id="rteDialog">' + data.message + '</div>').dialog({
                    width: 700,
                    minWidth: 500,
                    maxHeight: $(window).height(),
                    buttons: that.buttonOptions,
                    title: data.title,
                    modal: true,
                    open: function () {
                        if ($('#rteDialog').parents('.ui-dialog').height() > $(window).height()) {
                            $('#rteDialog').dialog("option", "height", $(window).height());
                        }
                        $(this).find('input[name=item_name]').focus();
                        $(this).find('input.datefield').each(function () {
                            PMA_addDatepicker($(this).css('width', '95%'), 'date');
                        });
                        $(this).find('input.datetimefield').each(function () {
                            PMA_addDatepicker($(this).css('width', '95%'), 'datetime');
                        });
                        $.datepicker.initialized = false;
                    },
                    close: function () {
                        $(this).remove();
                    }
                });
                /**
                 * @var mode Used to remeber whether the editor is in
                 *           "Edit" or "Add" mode
                 */
                var mode = 'add';
                if ($('input[name=editor_process_edit]').length > 0) {
                    mode = 'edit';
                }
                // Attach syntax highlighted editor to the definition
                /**
                 * @var elm jQuery object containing the reference to
                 *                 the Definition textarea.
                 */
                var $elm = $('textarea[name=item_definition]').last();
                that.syntaxHiglighter = PMA_getSQLEditor($elm);

                // Execute item-specific code
                that.postDialogShow(data);
            } else {
                PMA_ajaxShowMessage(data.error, false);
            }
        }); // end $.get()
    },

    dropDialog: function ($this) {
        /**
         * @var $curr_row Object containing reference to the current row
         */
        var $curr_row = $this.parents('tr');
        /**
         * @var question String containing the question to be asked for confirmation
         */
        var question = $('<div/>').text(
            $curr_row.children('td').children('.drop_sql').html()
        );
        // We ask for confirmation first here, before submitting the ajax request
        $this.PMA_confirm(question, $this.attr('href'), function (url) {
            /**
             * @var msg jQuery object containing the reference to
             *          the AJAX message shown to the user
             */
            var $msg = PMA_ajaxShowMessage(PMA_messages.strProcessingRequest);
            $.get(url, {'is_js_confirmed': 1, 'ajax_request': true}, function (data) {
                if (data.success === true) {
                    /**
                     * @var $table Object containing reference
                     *             to the main list of elements
                     */
                    var $table = $curr_row.parent();
                    // Check how many rows will be left after we remove
                    // the one that the user has requested us to remove
                    if ($table.find('tr').length === 3) {
                        // If there are two rows left, it means that they are
                        // the header of the table and the rows that we are
                        // about to remove, so after the removal there will be
                        // nothing to show in the table, so we hide it.
                        $table.hide("slow", function () {
                            $(this).find('tr.even, tr.odd').remove();
                            $('.withSelected').remove();
                            $('#nothing2display').show("slow");
                        });
                    } else {
                        $curr_row.hide("slow", function () {
                            $(this).remove();
                            // Now we have removed the row from the list, but maybe
                            // some row classes are wrong now. So we will itirate
                            // throught all rows and assign correct classes to them.
                            /**
                             * @var ct Count of processed rows
                             */
                            var ct = 0;
                            /**
                             * @var rowclass Class to be attached to the row
                             *               that is being processed
                             */
                            var rowclass = '';
                            $table.find('tr').has('td').each(function () {
                                rowclass = (ct % 2 === 1) ? 'odd' : 'even';
                                $(this).removeClass().addClass(rowclass);
                                ct++;
                            });
                        });
                    }
                    // Get rid of the "Loading" message
                    PMA_ajaxRemoveMessage($msg);
                    // Show the query that we just executed
                    PMA_slidingMessage(data.sql_query);
                    PMA_reloadNavigation();
                } else {
                    PMA_ajaxShowMessage(data.error, false);
                }
            }); // end $.get()
        }); // end $.PMA_confirm()
    },

    dropMultipleDialog: function ($this) {
        // We ask for confirmation here
        $this.PMA_confirm(PMA_messages.strDropRTEitems, '', function (url) {
            /**
             * @var msg jQuery object containing the reference to
             *          the AJAX message shown to the user
             */
            var $msg = PMA_ajaxShowMessage(PMA_messages.strProcessingRequest);

            // drop anchors of all selected rows
            var drop_anchors = $('input.checkall:checked').parents('tr').find('.drop_anchor');
            var success = true;
            var count = drop_anchors.length;
            var returnCount = 0;

            drop_anchors.each(function () {
                var $anchor = $(this);
                /**
                 * @var $curr_row Object containing reference to the current row
                 */
                var $curr_row = $anchor.parents('tr');
                $.get($anchor.attr('href'), {'is_js_confirmed': 1, 'ajax_request': true}, function (data) {
                    returnCount++;
                    if (data.success === true) {
                        /**
                         * @var $table Object containing reference
                         *             to the main list of elements
                         */
                        var $table = $curr_row.parent();
                        // Check how many rows will be left after we remove
                        // the one that the user has requested us to remove
                        if ($table.find('tr').length === 3) {
                            // If there are two rows left, it means that they are
                            // the header of the table and the rows that we are
                            // about to remove, so after the removal there will be
                            // nothing to show in the table, so we hide it.
                            $table.hide("slow", function () {
                                $(this).find('tr.even, tr.odd').remove();
                                $('.withSelected').remove();
                                $('#nothing2display').show("slow");
                            });
                        } else {
                            $curr_row.hide("fast", function () {
                                $(this).remove();
                                // Now we have removed the row from the list, but maybe
                                // some row classes are wrong now. So we will itirate
                                // throught all rows and assign correct classes to them.
                                /**
                                 * @var ct Count of processed rows
                                 */
                                var ct = 0;
                                /**
                                 * @var rowclass Class to be attached to the row
                                 *               that is being processed
                                 */
                                var rowclass = '';
                                $table.find('tr').has('td').each(function () {
                                    rowclass = (ct % 2 === 1) ? 'odd' : 'even';
                                    $(this).removeClass().addClass(rowclass);
                                    ct++;
                                });
                            });
                        }
                        if (returnCount == count) {
                            if (success) {
                                // Get rid of the "Loading" message
                                PMA_ajaxRemoveMessage($msg);
                                $('#rteListForm_checkall').prop({checked: false, indeterminate: false});
                            }
                            PMA_reloadNavigation();
                        }
                    } else {
                        PMA_ajaxShowMessage(data.error, false);
                        success = false;
                        if (returnCount == count) {
                            PMA_reloadNavigation();
                        }
                    }
                }); // end $.get()
            }); // end drop_anchors.each()
        }); // end $.PMA_confirm()
    }
}; // end RTE namespace

/**
 * @var RTE.EVENT JavaScript functionality for events
 */
RTE.EVENT = {
    validateCustom: function () {
        /**
         * @var elm a jQuery object containing the reference
         *          to an element that is being validated
         */
        var $elm = null;
        if (this.$ajaxDialog.find('select[name=item_type]').find(':selected').val() === 'RECURRING') {
            // The interval field must not be empty for recurring events
            $elm = this.$ajaxDialog.find('input[name=item_interval_value]');
            if ($elm.val() === '') {
                $elm.focus();
                alert(PMA_messages.strFormEmpty);
                return false;
            }
        } else {
            // The execute_at field must not be empty for "once off" events
            $elm = this.$ajaxDialog.find('input[name=item_execute_at]');
            if ($elm.val() === '') {
                $elm.focus();
                alert(PMA_messages.strFormEmpty);
                return false;
            }
        }
        return true;
    }
};

/**
 * @var RTE.ROUTINE JavaScript functionality for routines
 */
RTE.ROUTINE = {
    /**
     * Overriding the postDialogShow() function defined in common.js
     *
     * @param data JSON-encoded data from the ajax request
     */
    postDialogShow: function (data) {
        // Cache the template for a parameter table row
        RTE.param_template = data.param_template;
        var that = this;
        // Make adjustments in the dialog to make it AJAX compatible
        $('td.routine_param_remove').show();
        $('input[name=routine_removeparameter]').remove();
        $('input[name=routine_addparameter]').css('width', '100%');
        // Enable/disable the 'options' dropdowns for parameters as necessary
        $('table.routine_params_table').last().find('th[colspan=2]').attr('colspan', '1');
        $('table.routine_params_table').last().find('tr').has('td').each(function () {
            that.setOptionsForParameter(
                $(this).find('select[name^=item_param_type]'),
                $(this).find('input[name^=item_param_length]'),
                $(this).find('select[name^=item_param_opts_text]'),
                $(this).find('select[name^=item_param_opts_num]')
            );
        });
        // Enable/disable the 'options' dropdowns for
        // function return value as necessary
        this.setOptionsForParameter(
            $('table.rte_table').last().find('select[name=item_returntype]'),
            $('table.rte_table').last().find('input[name=item_returnlength]'),
            $('table.rte_table').last().find('select[name=item_returnopts_text]'),
            $('table.rte_table').last().find('select[name=item_returnopts_num]')
        );
    },
    /**
     * Overriding the validateCustom() function defined in common.js
     */
    validateCustom: function () {
        /**
         * @var isSuccess Stores the outcome of the validation
         */
        var isSuccess = true;
        /**
         * @var inputname The value of the "name" attribute for
         *                the field that is being processed
         */
        var inputname = '';
        this.$ajaxDialog.find('table.routine_params_table').last().find('tr').each(function () {
            // Every parameter of a routine must have
            // a non-empty direction, name and type
            if (isSuccess) {
                $(this).find(':input').each(function () {
                    inputname = $(this).attr('name');
                    if (inputname.substr(0, 14) === 'item_param_dir' ||
                        inputname.substr(0, 15) === 'item_param_name' ||
                        inputname.substr(0, 15) === 'item_param_type') {
                        if ($(this).val() === '') {
                            $(this).focus();
                            isSuccess = false;
                            return false;
                        }
                    }
                });
            } else {
                return false;
            }
        });
        if (! isSuccess) {
            alert(PMA_messages.strFormEmpty);
            return false;
        }
        this.$ajaxDialog.find('table.routine_params_table').last().find('tr').each(function () {
            // SET, ENUM, VARCHAR and VARBINARY fields must have length/values
            var $inputtyp = $(this).find('select[name^=item_param_type]');
            var $inputlen = $(this).find('input[name^=item_param_length]');
            if ($inputtyp.length && $inputlen.length) {
                if (($inputtyp.val() === 'ENUM' || $inputtyp.val() === 'SET' || $inputtyp.val().substr(0, 3) === 'VAR') &&
                    $inputlen.val() === ''
                   ) {
                    $inputlen.focus();
                    isSuccess = false;
                    return false;
                }
            }
        });
        if (! isSuccess) {
            alert(PMA_messages.strFormEmpty);
            return false;
        }
        if (this.$ajaxDialog.find('select[name=item_type]').find(':selected').val() === 'FUNCTION') {
            // The length/values of return variable for functions must
            // be set, if the type is SET, ENUM, VARCHAR or VARBINARY.
            var $returntyp = this.$ajaxDialog.find('select[name=item_returntype]');
            var $returnlen = this.$ajaxDialog.find('input[name=item_returnlength]');
            if (($returntyp.val() === 'ENUM' || $returntyp.val() === 'SET' || $returntyp.val().substr(0, 3) === 'VAR') &&
                $returnlen.val() === ''
                ) {
                $returnlen.focus();
                alert(PMA_messages.strFormEmpty);
                return false;
            }
        }
        if ($('select[name=item_type]').find(':selected').val() === 'FUNCTION') {
            // A function must contain a RETURN statement in its definition
            if (this.$ajaxDialog.find('table.rte_table').find('textarea[name=item_definition]').val().toUpperCase().indexOf('RETURN') < 0) {
                this.syntaxHiglighter.focus();
                alert(PMA_messages.MissingReturn);
                return false;
            }
        }
        return true;
    },
    /**
     * Enable/disable the "options" dropdown and "length" input for
     * parameters and the return variable in the routine editor
     * as necessary.
     *
     * @param type a jQuery object containing the reference
     *             to the "Type" dropdown box
     * @param len  a jQuery object containing the reference
     *             to the "Length" input box
     * @param text a jQuery object containing the reference
     *             to the dropdown box with options for
     *             parameters of text type
     * @param num  a jQuery object containing the reference
     *             to the dropdown box with options for
     *             parameters of numeric type
     */
    setOptionsForParameter: function ($type, $len, $text, $num) {
        /**
         * @var no_opts a jQuery object containing the reference
         *              to an element to be displayed when no
         *              options are available
         */
        var $no_opts = $text.parent().parent().find('.no_opts');
        /**
         * @var no_len a jQuery object containing the reference
         *             to an element to be displayed when no
         *             "length/values" field is available
         */
        var $no_len  = $len.parent().parent().find('.no_len');

        // Process for parameter options
        switch ($type.val()) {
        case 'TINYINT':
        case 'SMALLINT':
        case 'MEDIUMINT':
        case 'INT':
        case 'BIGINT':
        case 'DECIMAL':
        case 'FLOAT':
        case 'DOUBLE':
        case 'REAL':
            $text.parent().hide();
            $num.parent().show();
            $no_opts.hide();
            break;
        case 'TINYTEXT':
        case 'TEXT':
        case 'MEDIUMTEXT':
        case 'LONGTEXT':
        case 'CHAR':
        case 'VARCHAR':
        case 'SET':
        case 'ENUM':
            $text.parent().show();
            $num.parent().hide();
            $no_opts.hide();
            break;
        default:
            $text.parent().hide();
            $num.parent().hide();
            $no_opts.show();
            break;
        }
        // Process for parameter length
        switch ($type.val()) {
        case 'DATE':
        case 'DATETIME':
        case 'TIME':
        case 'TINYBLOB':
        case 'TINYTEXT':
        case 'BLOB':
        case 'TEXT':
        case 'MEDIUMBLOB':
        case 'MEDIUMTEXT':
        case 'LONGBLOB':
        case 'LONGTEXT':
            $text.closest('tr').find('a:first').hide();
            $len.parent().hide();
            $no_len.show();
            break;
        default:
            if ($type.val() == 'ENUM' || $type.val() == 'SET') {
                $text.closest('tr').find('a:first').show();
            } else {
                $text.closest('tr').find('a:first').hide();
            }
            $len.parent().show();
            $no_len.hide();
            break;
        }
    },
    executeDialog: function ($this) {
        var that = this;
        /**
         * @var msg jQuery object containing the reference to
         *          the AJAX message shown to the user
         */
        var $msg = PMA_ajaxShowMessage();
        $.get($this.attr('href'), {'ajax_request': true}, function (data) {
            if (data.success === true) {
                PMA_ajaxRemoveMessage($msg);
                // If 'data.dialog' is true we show a dialog with a form
                // to get the input parameters for routine, otherwise
                // we just show the results of the query
                if (data.dialog) {
                    // Define the function that is called when
                    // the user presses the "Go" button
                    that.buttonOptions[PMA_messages.strGo] = function () {
                        /**
                         * @var data Form data to be sent in the AJAX request
                         */
                        var data = $('form.rte_form').last().serialize();
                        $msg = PMA_ajaxShowMessage(
                            PMA_messages.strProcessingRequest
                        );
                        $.post('db_routines.php', data, function (data) {
                            if (data.success === true) {
                                // Routine executed successfully
                                PMA_ajaxRemoveMessage($msg);
                                PMA_slidingMessage(data.message);
                                $ajaxDialog.dialog('close');
                            } else {
                                PMA_ajaxShowMessage(data.error, false);
                            }
                        });
                    };
                    that.buttonOptions[PMA_messages.strClose] = function () {
                        $(this).dialog("close");
                    };
                    /**
                     * Display the dialog to the user
                     */
                    var $ajaxDialog = $('<div>' + data.message + '</div>').dialog({
                        width: 650,
                        buttons: that.buttonOptions,
                        title: data.title,
                        modal: true,
                        close: function () {
                            $(this).remove();
                        }
                    });
                    $ajaxDialog.find('input[name^=params]').first().focus();
                    /**
                     * Attach the datepickers to the relevant form fields
                     */
                    $ajaxDialog.find('input.datefield, input.datetimefield').each(function () {
                        PMA_addDatepicker($(this).css('width', '95%'));
                    });
                    /*
                    * Define the function if the user presses enter
                    */
                    $('form.rte_form').on('keyup', function (event) {
                        event.preventDefault();
                        if (event.keyCode === 13) {
                            /**
                            * @var data Form data to be sent in the AJAX request
                            */
                            var data = $(this).serialize();
                            $msg = PMA_ajaxShowMessage(
                                PMA_messages.strProcessingRequest
                            );
                            var url = $(this).attr('action');
                            $.post(url, data, function (data) {
                                if (data.success === true) {
                                    // Routine executed successfully
                                    PMA_ajaxRemoveMessage($msg);
                                    PMA_slidingMessage(data.message);
                                    $('form.rte_form').off('keyup');
                                    $ajaxDialog.remove();
                                } else {
                                    PMA_ajaxShowMessage(data.error, false);
                                }
                            });
                        }
                    });
                } else {
                    // Routine executed successfully
                    PMA_slidingMessage(data.message);
                }
            } else {
                PMA_ajaxShowMessage(data.error, false);
            }
        }); // end $.get()
    }
};

/**
 * Attach Ajax event handlers for the Routines, Triggers and Events editor
 */
$(function () {
    /**
     * Attach Ajax event handlers for the Add/Edit functionality.
     */
    $(document).on('click', 'a.ajax.add_anchor, a.ajax.edit_anchor', function (event) {
        event.preventDefault();
        var type = $(this).attr('href').substr(0, $(this).attr('href').indexOf('?'));
        if (type.indexOf('routine') != -1) {
            type = 'routine';
        } else if (type.indexOf('trigger') != -1) {
            type = 'trigger';
        } else if (type.indexOf('event') != -1) {
            type = 'event';
        } else {
            type = '';
        }
        var dialog = new RTE.object(type);
        dialog.editorDialog($(this).hasClass('add_anchor'), $(this));
    }); // end $(document).on()

    /**
     * Attach Ajax event handlers for the Execute routine functionality
     */
    $(document).on('click', 'a.ajax.exec_anchor', function (event) {
        event.preventDefault();
        var dialog = new RTE.object('routine');
        dialog.executeDialog($(this));
    }); // end $(document).on()

    /**
     * Attach Ajax event handlers for Export of Routines, Triggers and Events
     */
    $(document).on('click', 'a.ajax.export_anchor', function (event) {
        event.preventDefault();
        var dialog = new RTE.object();
        dialog.exportDialog($(this));
    }); // end $(document).on()

    $(document).on('click', '#rteListForm.ajax .mult_submit[value="export"]', function (event) {
        event.preventDefault();
        var dialog = new RTE.object();
        dialog.exportDialog($(this));
    }); // end $(document).on()

    /**
     * Attach Ajax event handlers for Drop functionality
     * of Routines, Triggers and Events.
     */
    $(document).on('click', 'a.ajax.drop_anchor', function (event) {
        event.preventDefault();
        var dialog = new RTE.object();
        dialog.dropDialog($(this));
    }); // end $(document).on()

    $(document).on('click', '#rteListForm.ajax .mult_submit[value="drop"]', function (event) {
        event.preventDefault();
        var dialog = new RTE.object();
        dialog.dropMultipleDialog($(this));
    }); // end $(document).on()

    /**
     * Attach Ajax event handlers for the "Change event/routine type"
     * functionality in the events editor, so that the correct
     * rows are shown in the editor when changing the event type
     */
    $(document).on('change', 'select[name=item_type]', function () {
        $(this)
        .closest('table')
        .find('tr.recurring_event_row, tr.onetime_event_row, tr.routine_return_row, .routine_direction_cell')
        .toggle();
    }); // end $(document).on()

    /**
     * Attach Ajax event handlers for the "Change parameter type"
     * functionality in the routines editor, so that the correct
     * option/length fields, if any, are shown when changing
     * a parameter type
     */
    $(document).on('change', 'select[name^=item_param_type]', function () {
        /**
         * @var row jQuery object containing the reference to
         *          a row in the routine parameters table
         */
        var $row = $(this).parents('tr').first();
        var rte = new RTE.object('routine');
        rte.setOptionsForParameter(
            $row.find('select[name^=item_param_type]'),
            $row.find('input[name^=item_param_length]'),
            $row.find('select[name^=item_param_opts_text]'),
            $row.find('select[name^=item_param_opts_num]')
        );
    }); // end $(document).on()

    /**
     * Attach Ajax event handlers for the "Change the type of return
     * variable of function" functionality, so that the correct fields,
     * if any, are shown when changing the function return type type
     */
    $(document).on('change', 'select[name=item_returntype]', function () {
        var rte = new RTE.object('routine');
        var $table = $(this).closest('table.rte_table');
        rte.setOptionsForParameter(
            $table.find('select[name=item_returntype]'),
            $table.find('input[name=item_returnlength]'),
            $table.find('select[name=item_returnopts_text]'),
            $table.find('select[name=item_returnopts_num]')
        );
    }); // end $(document).on()

    /**
     * Attach Ajax event handlers for the "Add parameter to routine" functionality
     */
    $(document).on('click', 'input[name=routine_addparameter]', function (event) {
        event.preventDefault();
        /**
         * @var routine_params_table jQuery object containing the reference
         *                           to the routine parameters table
         */
        var $routine_params_table = $(this).closest('div.ui-dialog').find('.routine_params_table');
        /**
         * @var new_param_row A string containing the HTML code for the
         *                    new row for the routine parameters table
         */
        var new_param_row = RTE.param_template.replace(/%s/g, $routine_params_table.find('tr').length - 1);
        // Append the new row to the parameters table
        $routine_params_table.append(new_param_row);
        // Make sure that the row is correctly shown according to the type of routine
        if ($(this).closest('div.ui-dialog').find('table.rte_table select[name=item_type]').val() === 'FUNCTION') {
            $('tr.routine_return_row').show();
            $('td.routine_direction_cell').hide();
        }
        /**
         * @var newrow jQuery object containing the reference to the newly
         *             inserted row in the routine parameters table
         */
        var $newrow = $(this).closest('div.ui-dialog').find('table.routine_params_table').find('tr').has('td').last();
        // Enable/disable the 'options' dropdowns for parameters as necessary
        var rte = new RTE.object('routine');
        rte.setOptionsForParameter(
            $newrow.find('select[name^=item_param_type]'),
            $newrow.find('input[name^=item_param_length]'),
            $newrow.find('select[name^=item_param_opts_text]'),
            $newrow.find('select[name^=item_param_opts_num]')
        );
    }); // end $(document).on()

    /**
     * Attach Ajax event handlers for the
     * "Remove parameter from routine" functionality
     */
    $(document).on('click', 'a.routine_param_remove_anchor', function (event) {
        event.preventDefault();
        $(this).parent().parent().remove();
        // After removing a parameter, the indices of the name attributes in
        // the input fields lose the correct order and need to be reordered.
        /**
         * @var index Counter used for reindexing the input
         *            fields in the routine parameters table
         */
        var index = 0;
        $(this).closest('div.ui-dialog').find('table.routine_params_table').find('tr').has('td').each(function () {
            $(this).find(':input').each(function () {
                /**
                 * @var inputname The value of the name attribute of
                 *                the input field being reindexed
                 */
                var inputname = $(this).attr('name');
                if (inputname.substr(0, 14) === 'item_param_dir') {
                    $(this).attr('name', inputname.substr(0, 14) + '[' + index + ']');
                } else if (inputname.substr(0, 15) === 'item_param_name') {
                    $(this).attr('name', inputname.substr(0, 15) + '[' + index + ']');
                } else if (inputname.substr(0, 15) === 'item_param_type') {
                    $(this).attr('name', inputname.substr(0, 15) + '[' + index + ']');
                } else if (inputname.substr(0, 17) === 'item_param_length') {
                    $(this).attr('name', inputname.substr(0, 17) + '[' + index + ']');
                    $(this).attr('id', 'item_param_length_' + index);
                } else if (inputname.substr(0, 20) === 'item_param_opts_text') {
                    $(this).attr('name', inputname.substr(0, 20) + '[' + index + ']');
                } else if (inputname.substr(0, 19) === 'item_param_opts_num') {
                    $(this).attr('name', inputname.substr(0, 19) + '[' + index + ']');
                }
            });
            index++;
        });
    }); // end $(document).on()
}); // end of $()
;

/*
 TraceKit - Cross brower stack traces - github.com/occ/TraceKit
 MIT license
*/

;(function(window, undefined) {


var TraceKit = {};
var _oldTraceKit = window.TraceKit;

// global reference to slice
var _slice = [].slice;
var UNKNOWN_FUNCTION = '?';


/**
 * _has, a better form of hasOwnProperty
 * Example: _has(MainHostObject, property) === true/false
 *
 * @param {Object} host object to check property
 * @param {string} key to check
 */
function _has(object, key) {
    return Object.prototype.hasOwnProperty.call(object, key);
}

function _isUndefined(what) {
    return typeof what === 'undefined';
}

/**
 * TraceKit.noConflict: Export TraceKit out to another variable
 * Example: var TK = TraceKit.noConflict()
 */
TraceKit.noConflict = function noConflict() {
    window.TraceKit = _oldTraceKit;
    return TraceKit;
};

/**
 * TraceKit.wrap: Wrap any function in a TraceKit reporter
 * Example: func = TraceKit.wrap(func);
 *
 * @param {Function} func Function to be wrapped
 * @return {Function} The wrapped func
 */
TraceKit.wrap = function traceKitWrapper(func) {
    function wrapped() {
        try {
            return func.apply(this, arguments);
        } catch (e) {
            TraceKit.report(e);
            throw e;
        }
    }
    return wrapped;
};

/**
 * TraceKit.report: cross-browser processing of unhandled exceptions
 *
 * Syntax:
 *   TraceKit.report.subscribe(function(stackInfo) { ... })
 *   TraceKit.report.unsubscribe(function(stackInfo) { ... })
 *   TraceKit.report(exception)
 *   try { ...code... } catch(ex) { TraceKit.report(ex); }
 *
 * Supports:
 *   - Firefox: full stack trace with line numbers, plus column number
 *              on top frame; column number is not guaranteed
 *   - Opera:   full stack trace with line and column numbers
 *   - Chrome:  full stack trace with line and column numbers
 *   - Safari:  line and column number for the top frame only; some frames
 *              may be missing, and column number is not guaranteed
 *   - IE:      line and column number for the top frame only; some frames
 *              may be missing, and column number is not guaranteed
 *
 * In theory, TraceKit should work on all of the following versions:
 *   - IE5.5+ (only 8.0 tested)
 *   - Firefox 0.9+ (only 3.5+ tested)
 *   - Opera 7+ (only 10.50 tested; versions 9 and earlier may require
 *     Exceptions Have Stacktrace to be enabled in opera:config)
 *   - Safari 3+ (only 4+ tested)
 *   - Chrome 1+ (only 5+ tested)
 *   - Konqueror 3.5+ (untested)
 *
 * Requires TraceKit.computeStackTrace.
 *
 * Tries to catch all unhandled exceptions and report them to the
 * subscribed handlers. Please note that TraceKit.report will rethrow the
 * exception. This is REQUIRED in order to get a useful stack trace in IE.
 * If the exception does not reach the top of the browser, you will only
 * get a stack trace from the point where TraceKit.report was called.
 *
 * Handlers receive a stackInfo object as described in the
 * TraceKit.computeStackTrace docs.
 */
TraceKit.report = (function reportModuleWrapper() {
    var handlers = [],
        lastException = null,
        lastExceptionStack = null;

    /**
     * Add a crash handler.
     * @param {Function} handler
     */
    function subscribe(handler) {
        installGlobalHandler();
        handlers.push(handler);
    }

    /**
     * Remove a crash handler.
     * @param {Function} handler
     */
    function unsubscribe(handler) {
        for (var i = handlers.length - 1; i >= 0; --i) {
            if (handlers[i] === handler) {
                handlers.splice(i, 1);
            }
        }
    }

    /**
     * Dispatch stack information to all handlers.
     * @param {Object.<string, *>} stack
     */
    function notifyHandlers(stack, windowError) {
        var exception = null;
        if (windowError && !TraceKit.collectWindowErrors) {
          return;
        }
        for (var i in handlers) {
            if (_has(handlers, i)) {
                try {
                    handlers[i].apply(null, [stack].concat(_slice.call(arguments, 2)));
                } catch (inner) {
                    exception = inner;
                }
            }
        }

        if (exception) {
            throw exception;
        }
    }

    var _oldOnerrorHandler, _onErrorHandlerInstalled;

    /**
     * Ensures all global unhandled exceptions are recorded.
     * Supported by Gecko and IE.
     * @param {string} message Error message.
     * @param {string} url URL of script that generated the exception.
     * @param {(number|string)} lineNo The line number at which the error
     * occurred.
     */
    function traceKitWindowOnError(message, url, lineNo) {
        var stack = null;

        if (lastExceptionStack) {
            TraceKit.computeStackTrace.augmentStackTraceWithInitialElement(lastExceptionStack, url, lineNo, message);
            stack = lastExceptionStack;
            lastExceptionStack = null;
            lastException = null;
        } else {
            var location = {
                'url': url,
                'line': lineNo
            };
            location.func = TraceKit.computeStackTrace.guessFunctionName(location.url, location.line);
            location.context = TraceKit.computeStackTrace.gatherContext(location.url, location.line);
            stack = {
                'mode': 'onerror',
                'message': message,
                'url': document.location.href,
                'stack': [location],
                'useragent': navigator.userAgent
            };
        }

        notifyHandlers(stack, 'from window.onerror');

        if (_oldOnerrorHandler) {
            return _oldOnerrorHandler.apply(this, arguments);
        }

        return false;
    }

    function installGlobalHandler ()
    {
        if (_onErrorHandlerInstalled === true) {
            return;
        }
        _oldOnerrorHandler = window.onerror;
        window.onerror = traceKitWindowOnError;
        _onErrorHandlerInstalled = true;
    }

    /**
     * Reports an unhandled Error to TraceKit.
     * @param {Error} ex
     */
    function report(ex) {
        var args = _slice.call(arguments, 1);
        if (lastExceptionStack) {
            if (lastException === ex) {
                return; // already caught by an inner catch block, ignore
            } else {
                var s = lastExceptionStack;
                lastExceptionStack = null;
                lastException = null;
                notifyHandlers.apply(null, [s, null].concat(args));
            }
        }

        var stack = TraceKit.computeStackTrace(ex);
        lastExceptionStack = stack;
        lastException = ex;

        // If the stack trace is incomplete, wait for 2 seconds for
        // slow slow IE to see if onerror occurs or not before reporting
        // this exception; otherwise, we will end up with an incomplete
        // stack trace
        window.setTimeout(function () {
            if (lastException === ex) {
                lastExceptionStack = null;
                lastException = null;
                notifyHandlers.apply(null, [stack, null].concat(args));
            }
        }, (stack.incomplete ? 2000 : 0));

        throw ex; // re-throw to propagate to the top level (and cause window.onerror)
    }

    report.subscribe = subscribe;
    report.unsubscribe = unsubscribe;
    return report;
}());

/**
 * TraceKit.computeStackTrace: cross-browser stack traces in JavaScript
 *
 * Syntax:
 *   s = TraceKit.computeStackTrace.ofCaller([depth])
 *   s = TraceKit.computeStackTrace(exception) // consider using TraceKit.report instead (see below)
 * Returns:
 *   s.name              - exception name
 *   s.message           - exception message
 *   s.stack[i].url      - JavaScript or HTML file URL
 *   s.stack[i].func     - function name, or empty for anonymous functions (if guessing did not work)
 *   s.stack[i].args     - arguments passed to the function, if known
 *   s.stack[i].line     - line number, if known
 *   s.stack[i].column   - column number, if known
 *   s.stack[i].context  - an array of source code lines; the middle element corresponds to the correct line#
 *   s.mode              - 'stack', 'stacktrace', 'multiline', 'callers', 'onerror', or 'failed' -- method used to collect the stack trace
 *
 * Supports:
 *   - Firefox:  full stack trace with line numbers and unreliable column
 *               number on top frame
 *   - Opera 10: full stack trace with line and column numbers
 *   - Opera 9-: full stack trace with line numbers
 *   - Chrome:   full stack trace with line and column numbers
 *   - Safari:   line and column number for the topmost stacktrace element
 *               only
 *   - IE:       no line numbers whatsoever
 *
 * Tries to guess names of anonymous functions by looking for assignments
 * in the source code. In IE and Safari, we have to guess source file names
 * by searching for function bodies inside all page scripts. This will not
 * work for scripts that are loaded cross-domain.
 * Here be dragons: some function names may be guessed incorrectly, and
 * duplicate functions may be mismatched.
 *
 * TraceKit.computeStackTrace should only be used for tracing purposes.
 * Logging of unhandled exceptions should be done with TraceKit.report,
 * which builds on top of TraceKit.computeStackTrace and provides better
 * IE support by utilizing the window.onerror event to retrieve information
 * about the top of the stack.
 *
 * Note: In IE and Safari, no stack trace is recorded on the Error object,
 * so computeStackTrace instead walks its *own* chain of callers.
 * This means that:
 *  * in Safari, some methods may be missing from the stack trace;
 *  * in IE, the topmost function in the stack trace will always be the
 *    caller of computeStackTrace.
 *
 * This is okay for tracing (because you are likely to be calling
 * computeStackTrace from the function you want to be the topmost element
 * of the stack trace anyway), but not okay for logging unhandled
 * exceptions (because your catch block will likely be far away from the
 * inner function that actually caused the exception).
 *
 * Tracing example:
 *     function trace(message) {
 *         var stackInfo = TraceKit.computeStackTrace.ofCaller();
 *         var data = message + "\n";
 *         for(var i in stackInfo.stack) {
 *             var item = stackInfo.stack[i];
 *             data += (item.func || '[anonymous]') + "() in " + item.url + ":" + (item.line || '0') + "\n";
 *         }
 *         if (window.console)
 *             console.info(data);
 *         else
 *             alert(data);
 *     }
 */
TraceKit.computeStackTrace = (function computeStackTraceWrapper() {
    var debug = false,
        sourceCache = {};

    /**
     * Attempts to retrieve source code via XMLHttpRequest, which is used
     * to look up anonymous function names.
     * @param {string} url URL of source code.
     * @return {string} Source contents.
     */
    function loadSource(url) {
        if (!TraceKit.remoteFetching) { //Only attempt request if remoteFetching is on.
            return '';
        }
        try {
            function getXHR() {
                try {
                    return new window.XMLHttpRequest();
                } catch (e) {
                    // explicitly bubble up the exception if not found
                    return new window.ActiveXObject('Microsoft.XMLHTTP');
                }
            }

            var request = getXHR();
            request.open('GET', url, false);
            request.send('');
            return request.responseText;
        } catch (e) {
            return '';
        }
    }

    /**
     * Retrieves source code from the source code cache.
     * @param {string} url URL of source code.
     * @return {Array.<string>} Source contents.
     */
    function getSource(url) {
        if (!_has(sourceCache, url)) {
            // URL needs to be able to fetched within the acceptable domain.  Otherwise,
            // cross-domain errors will be triggered.
            var source = '';
            if (url.indexOf(document.domain) !== -1) {
                source = loadSource(url);
            }
            sourceCache[url] = source ? source.split('\n') : [];
        }

        return sourceCache[url];
    }

    /**
     * Tries to use an externally loaded copy of source code to determine
     * the name of a function by looking at the name of the variable it was
     * assigned to, if any.
     * @param {string} url URL of source code.
     * @param {(string|number)} lineNo Line number in source code.
     * @return {string} The function name, if discoverable.
     */
    function guessFunctionName(url, lineNo) {
        var reFunctionArgNames = /function ([^(]*)\(([^)]*)\)/,
            reGuessFunction = /['"]?([0-9A-Za-z$_]+)['"]?\s*[:=]\s*(function|eval|new Function)/,
            line = '',
            maxLines = 10,
            source = getSource(url),
            m;

        if (!source.length) {
            return UNKNOWN_FUNCTION;
        }

        // Walk backwards from the first line in the function until we find the line which
        // matches the pattern above, which is the function definition
        for (var i = 0; i < maxLines; ++i) {
            line = source[lineNo - i] + line;

            if (!_isUndefined(line)) {
                if ((m = reGuessFunction.exec(line))) {
                    return m[1];
                } else if ((m = reFunctionArgNames.exec(line))) {
                    return m[1];
                }
            }
        }

        return UNKNOWN_FUNCTION;
    }

    /**
     * Retrieves the surrounding lines from where an exception occurred.
     * @param {string} url URL of source code.
     * @param {(string|number)} line Line number in source code to centre
     * around for context.
     * @return {?Array.<string>} Lines of source code.
     */
    function gatherContext(url, line) {
        var source = getSource(url);

        if (!source.length) {
            return null;
        }

        var context = [],
            // linesBefore & linesAfter are inclusive with the offending line.
            // if linesOfContext is even, there will be one extra line
            //   *before* the offending line.
            linesBefore = Math.floor(TraceKit.linesOfContext / 2),
            // Add one extra line if linesOfContext is odd
            linesAfter = linesBefore + (TraceKit.linesOfContext % 2),
            start = Math.max(0, line - linesBefore - 1),
            end = Math.min(source.length, line + linesAfter - 1);

        line -= 1; // convert to 0-based index

        for (var i = start; i < end; ++i) {
            if (!_isUndefined(source[i])) {
                context.push(source[i]);
            }
        }

        return context.length > 0 ? context : null;
    }

    /**
     * Escapes special characters, except for whitespace, in a string to be
     * used inside a regular expression as a string literal.
     * @param {string} text The string.
     * @return {string} The escaped string literal.
     */
    function escapeRegExp(text) {
        return text.replace(/[\-\[\]{}()*+?.,\\\^$|#]/g, '\\$&');
    }

    /**
     * Escapes special characters in a string to be used inside a regular
     * expression as a string literal. Also ensures that HTML entities will
     * be matched the same as their literal friends.
     * @param {string} body The string.
     * @return {string} The escaped string.
     */
    function escapeCodeAsRegExpForMatchingInsideHTML(body) {
        return escapeRegExp(body).replace('<', '(?:<|&lt;)').replace('>', '(?:>|&gt;)').replace('&', '(?:&|&amp;)').replace('"', '(?:"|&quot;)').replace(/\s+/g, '\\s+');
    }

    /**
     * Determines where a code fragment occurs in the source code.
     * @param {RegExp} re The function definition.
     * @param {Array.<string>} urls A list of URLs to search.
     * @return {?Object.<string, (string|number)>} An object containing
     * the url, line, and column number of the defined function.
     */
    function findSourceInUrls(re, urls) {
        var source, m;
        for (var i = 0, j = urls.length; i < j; ++i) {
            // console.log('searching', urls[i]);
            if ((source = getSource(urls[i])).length) {
                source = source.join('\n');
                if ((m = re.exec(source))) {
                    // console.log('Found function in ' + urls[i]);

                    return {
                        'url': urls[i],
                        'line': source.substring(0, m.index).split('\n').length,
                        'column': m.index - source.lastIndexOf('\n', m.index) - 1
                    };
                }
            }
        }

        // console.log('no match');

        return null;
    }

    /**
     * Determines at which column a code fragment occurs on a line of the
     * source code.
     * @param {string} fragment The code fragment.
     * @param {string} url The URL to search.
     * @param {(string|number)} line The line number to examine.
     * @return {?number} The column number.
     */
    function findSourceInLine(fragment, url, line) {
        var source = getSource(url),
            re = new RegExp('\\b' + escapeRegExp(fragment) + '\\b'),
            m;

        line -= 1;

        if (source && source.length > line && (m = re.exec(source[line]))) {
            return m.index;
        }

        return null;
    }

    /**
     * Determines where a function was defined within the source code.
     * @param {(Function|string)} func A function reference or serialized
     * function definition.
     * @return {?Object.<string, (string|number)>} An object containing
     * the url, line, and column number of the defined function.
     */
    function findSourceByFunctionBody(func) {
        var urls = [window.location.href],
            scripts = document.getElementsByTagName('script'),
            body,
            code = '' + func,
            codeRE = /^function(?:\s+([\w$]+))?\s*\(([\w\s,]*)\)\s*\{\s*(\S[\s\S]*\S)\s*\}\s*$/,
            eventRE = /^function on([\w$]+)\s*\(event\)\s*\{\s*(\S[\s\S]*\S)\s*\}\s*$/,
            re,
            parts,
            result;

        for (var i = 0; i < scripts.length; ++i) {
            var script = scripts[i];
            if (script.src) {
                urls.push(script.src);
            }
        }

        if (!(parts = codeRE.exec(code))) {
            re = new RegExp(escapeRegExp(code).replace(/\s+/g, '\\s+'));
        }

        // not sure if this is really necessary, but I donâ€™t have a test
        // corpus large enough to confirm that and it was in the original.
        else {
            var name = parts[1] ? '\\s+' + parts[1] : '',
                args = parts[2].split(',').join('\\s*,\\s*');

            body = escapeRegExp(parts[3]).replace(/;$/, ';?'); // semicolon is inserted if the function ends with a comment.replace(/\s+/g, '\\s+');
            re = new RegExp('function' + name + '\\s*\\(\\s*' + args + '\\s*\\)\\s*{\\s*' + body + '\\s*}');
        }

        // look for a normal function definition
        if ((result = findSourceInUrls(re, urls))) {
            return result;
        }

        // look for an old-school event handler function
        if ((parts = eventRE.exec(code))) {
            var event = parts[1];
            body = escapeCodeAsRegExpForMatchingInsideHTML(parts[2]);

            // look for a function defined in HTML as an onXXX handler
            re = new RegExp('on' + event + '=[\\\'"]\\s*' + body + '\\s*[\\\'"]', 'i');

            if ((result = findSourceInUrls(re, urls[0]))) {
                return result;
            }

            // look for ???
            re = new RegExp(body);

            if ((result = findSourceInUrls(re, urls))) {
                return result;
            }
        }

        return null;
    }

    // Contents of Exception in various browsers.
    //
    // SAFARI:
    // ex.message = Can't find variable: qq
    // ex.line = 59
    // ex.sourceId = 580238192
    // ex.sourceURL = http://...
    // ex.expressionBeginOffset = 96
    // ex.expressionCaretOffset = 98
    // ex.expressionEndOffset = 98
    // ex.name = ReferenceError
    //
    // FIREFOX:
    // ex.message = qq is not defined
    // ex.fileName = http://...
    // ex.lineNumber = 59
    // ex.stack = ...stack trace... (see the example below)
    // ex.name = ReferenceError
    //
    // CHROME:
    // ex.message = qq is not defined
    // ex.name = ReferenceError
    // ex.type = not_defined
    // ex.arguments = ['aa']
    // ex.stack = ...stack trace...
    //
    // INTERNET EXPLORER:
    // ex.message = ...
    // ex.name = ReferenceError
    //
    // OPERA:
    // ex.message = ...message... (see the example below)
    // ex.name = ReferenceError
    // ex.opera#sourceloc = 11  (pretty much useless, duplicates the info in ex.message)
    // ex.stacktrace = n/a; see 'opera:config#UserPrefs|Exceptions Have Stacktrace'

    /**
     * Computes stack trace information from the stack property.
     * Chrome and Gecko use this property.
     * @param {Error} ex
     * @return {?Object.<string, *>} Stack trace information.
     */
    function computeStackTraceFromStackProp(ex) {
        if (!ex.stack) {
            return null;
        }

        var chrome = /^\s*at (?:((?:\[object object\])?\S+(?: \[as \S+\])?) )?\(?((?:file|http|https):.*?):(\d+)(?::(\d+))?\)?\s*$/i,
            gecko = /^\s*(\S*)(?:\((.*?)\))?@((?:file|http|https).*?):(\d+)(?::(\d+))?\s*$/i,
            lines = ex.stack.split('\n'),
            stack = [],
            parts,
            element,
            reference = /^(.*) is undefined$/.exec(ex.message);

        for (var i = 0, j = lines.length; i < j; ++i) {
            if ((parts = gecko.exec(lines[i]))) {
                element = {
                    'url': parts[3],
                    'func': parts[1] || UNKNOWN_FUNCTION,
                    'args': parts[2] ? parts[2].split(',') : '',
                    'line': +parts[4],
                    'column': parts[5] ? +parts[5] : null
                };
            } else if ((parts = chrome.exec(lines[i]))) {
                element = {
                    'url': parts[2],
                    'func': parts[1] || UNKNOWN_FUNCTION,
                    'line': +parts[3],
                    'column': parts[4] ? +parts[4] : null
                };
            } else {
                continue;
            }

            if (!element.func && element.line) {
                element.func = guessFunctionName(element.url, element.line);
            }

            if (element.line) {
                element.context = gatherContext(element.url, element.line);
            }

            stack.push(element);
        }

        if (stack[0] && stack[0].line && !stack[0].column && reference) {
            stack[0].column = findSourceInLine(reference[1], stack[0].url, stack[0].line);
        }

        if (!stack.length) {
            return null;
        }

        return {
            'mode': 'stack',
            'name': ex.name,
            'message': ex.message,
            'url': document.location.href,
            'stack': stack,
            'useragent': navigator.userAgent
        };
    }

    /**
     * Computes stack trace information from the stacktrace property.
     * Opera 10 uses this property.
     * @param {Error} ex
     * @return {?Object.<string, *>} Stack trace information.
     */
    function computeStackTraceFromStacktraceProp(ex) {
        // Access and store the stacktrace property before doing ANYTHING
        // else to it because Opera is not very good at providing it
        // reliably in other circumstances.
        var stacktrace = ex.stacktrace;

        var testRE = / line (\d+), column (\d+) in (?:<anonymous function: ([^>]+)>|([^\)]+))\((.*)\) in (.*):\s*$/i,
            lines = stacktrace.split('\n'),
            stack = [],
            parts;

        for (var i = 0, j = lines.length; i < j; i += 2) {
            if ((parts = testRE.exec(lines[i]))) {
                var element = {
                    'line': +parts[1],
                    'column': +parts[2],
                    'func': parts[3] || parts[4],
                    'args': parts[5] ? parts[5].split(',') : [],
                    'url': parts[6]
                };

                if (!element.func && element.line) {
                    element.func = guessFunctionName(element.url, element.line);
                }
                if (element.line) {
                    try {
                        element.context = gatherContext(element.url, element.line);
                    } catch (exc) {}
                }

                if (!element.context) {
                    element.context = [lines[i + 1]];
                }

                stack.push(element);
            }
        }

        if (!stack.length) {
            return null;
        }

        return {
            'mode': 'stacktrace',
            'name': ex.name,
            'message': ex.message,
            'url': document.location.href,
            'stack': stack,
            'useragent': navigator.userAgent
        };
    }

    /**
     * NOT TESTED.
     * Computes stack trace information from an error message that includes
     * the stack trace.
     * Opera 9 and earlier use this method if the option to show stack
     * traces is turned on in opera:config.
     * @param {Error} ex
     * @return {?Object.<string, *>} Stack information.
     */
    function computeStackTraceFromOperaMultiLineMessage(ex) {
        // Opera includes a stack trace into the exception message. An example is:
        //
        // Statement on line 3: Undefined variable: undefinedFunc
        // Backtrace:
        //   Line 3 of linked script file://localhost/Users/andreyvit/Projects/TraceKit/javascript-client/sample.js: In function zzz
        //         undefinedFunc(a);
        //   Line 7 of inline#1 script in file://localhost/Users/andreyvit/Projects/TraceKit/javascript-client/sample.html: In function yyy
        //           zzz(x, y, z);
        //   Line 3 of inline#1 script in file://localhost/Users/andreyvit/Projects/TraceKit/javascript-client/sample.html: In function xxx
        //           yyy(a, a, a);
        //   Line 1 of function script
        //     try { xxx('hi'); return false; } catch(ex) { TraceKit.report(ex); }
        //   ...

        var lines = ex.message.split('\n');
        if (lines.length < 4) {
            return null;
        }

        var lineRE1 = /^\s*Line (\d+) of linked script ((?:file|http|https)\S+)(?:: in function (\S+))?\s*$/i,
            lineRE2 = /^\s*Line (\d+) of inline#(\d+) script in ((?:file|http|https)\S+)(?:: in function (\S+))?\s*$/i,
            lineRE3 = /^\s*Line (\d+) of function script\s*$/i,
            stack = [],
            scripts = document.getElementsByTagName('script'),
            inlineScriptBlocks = [],
            parts,
            i,
            len,
            source;

        for (i in scripts) {
            if (_has(scripts, i) && !scripts[i].src) {
                inlineScriptBlocks.push(scripts[i]);
            }
        }

        for (i = 2, len = lines.length; i < len; i += 2) {
            var item = null;
            if ((parts = lineRE1.exec(lines[i]))) {
                item = {
                    'url': parts[2],
                    'func': parts[3],
                    'line': +parts[1]
                };
            } else if ((parts = lineRE2.exec(lines[i]))) {
                item = {
                    'url': parts[3],
                    'func': parts[4]
                };
                var relativeLine = (+parts[1]); // relative to the start of the <SCRIPT> block
                var script = inlineScriptBlocks[parts[2] - 1];
                if (script) {
                    source = getSource(item.url);
                    if (source) {
                        source = source.join('\n');
                        var pos = source.indexOf(script.innerText);
                        if (pos >= 0) {
                            item.line = relativeLine + source.substring(0, pos).split('\n').length;
                        }
                    }
                }
            } else if ((parts = lineRE3.exec(lines[i]))) {
                var url = window.location.href.replace(/#.*$/, ''),
                    line = parts[1];
                var re = new RegExp(escapeCodeAsRegExpForMatchingInsideHTML(lines[i + 1]));
                source = findSourceInUrls(re, [url]);
                item = {
                    'url': url,
                    'line': source ? source.line : line,
                    'func': ''
                };
            }

            if (item) {
                if (!item.func) {
                    item.func = guessFunctionName(item.url, item.line);
                }
                var context = gatherContext(item.url, item.line);
                var midline = (context ? context[Math.floor(context.length / 2)] : null);
                if (context && midline.replace(/^\s*/, '') === lines[i + 1].replace(/^\s*/, '')) {
                    item.context = context;
                } else {
                    // if (context) alert("Context mismatch. Correct midline:\n" + lines[i+1] + "\n\nMidline:\n" + midline + "\n\nContext:\n" + context.join("\n") + "\n\nURL:\n" + item.url);
                    item.context = [lines[i + 1]];
                }
                stack.push(item);
            }
        }
        if (!stack.length) {
            return null; // could not parse multiline exception message as Opera stack trace
        }

        return {
            'mode': 'multiline',
            'name': ex.name,
            'message': lines[0],
            'url': document.location.href,
            'stack': stack,
            'useragent': navigator.userAgent
        };
    }

    /**
     * Adds information about the first frame to incomplete stack traces.
     * Safari and IE require this to get complete data on the first frame.
     * @param {Object.<string, *>} stackInfo Stack trace information from
     * one of the compute* methods.
     * @param {string} url The URL of the script that caused an error.
     * @param {(number|string)} lineNo The line number of the script that
     * caused an error.
     * @param {string=} message The error generated by the browser, which
     * hopefully contains the name of the object that caused the error.
     * @return {boolean} Whether or not the stack information was
     * augmented.
     */
    function augmentStackTraceWithInitialElement(stackInfo, url, lineNo, message) {
        var initial = {
            'url': url,
            'line': lineNo
        };

        if (initial.url && initial.line) {
            stackInfo.incomplete = false;

            if (!initial.func) {
                initial.func = guessFunctionName(initial.url, initial.line);
            }

            if (!initial.context) {
                initial.context = gatherContext(initial.url, initial.line);
            }

            var reference = / '([^']+)' /.exec(message);
            if (reference) {
                initial.column = findSourceInLine(reference[1], initial.url, initial.line);
            }

            if (stackInfo.stack.length > 0) {
                if (stackInfo.stack[0].url === initial.url) {
                    if (stackInfo.stack[0].line === initial.line) {
                        return false; // already in stack trace
                    } else if (!stackInfo.stack[0].line && stackInfo.stack[0].func === initial.func) {
                        stackInfo.stack[0].line = initial.line;
                        stackInfo.stack[0].context = initial.context;
                        return false;
                    }
                }
            }

            stackInfo.stack.unshift(initial);
            stackInfo.partial = true;
            return true;
        } else {
            stackInfo.incomplete = true;
        }

        return false;
    }

    /**
     * Computes stack trace information by walking the arguments.caller
     * chain at the time the exception occurred. This will cause earlier
     * frames to be missed but is the only way to get any stack trace in
     * Safari and IE. The top frame is restored by
     * {@link augmentStackTraceWithInitialElement}.
     * @param {Error} ex
     * @return {?Object.<string, *>} Stack trace information.
     */
    function computeStackTraceByWalkingCallerChain(ex, depth) {
        var functionName = /function\s+([_$a-zA-Z\xA0-\uFFFF][_$a-zA-Z0-9\xA0-\uFFFF]*)?\s*\(/i,
            stack = [],
            funcs = {},
            recursion = false,
            parts,
            item,
            source;

        for (var curr = computeStackTraceByWalkingCallerChain.caller; curr && !recursion; curr = curr.caller) {
            if (curr === computeStackTrace || curr === TraceKit.report) {
                // console.log('skipping internal function');
                continue;
            }

            item = {
                'url': null,
                'func': UNKNOWN_FUNCTION,
                'line': null,
                'column': null
            };

            if (curr.name) {
                item.func = curr.name;
            } else if ((parts = functionName.exec(curr.toString()))) {
                item.func = parts[1];
            }

            if ((source = findSourceByFunctionBody(curr))) {
                item.url = source.url;
                item.line = source.line;

                if (item.func === UNKNOWN_FUNCTION) {
                    item.func = guessFunctionName(item.url, item.line);
                }

                var reference = / '([^']+)' /.exec(ex.message || ex.description);
                if (reference) {
                    item.column = findSourceInLine(reference[1], source.url, source.line);
                }
            }

            if (funcs['' + curr]) {
                recursion = true;
            }else{
                funcs['' + curr] = true;
            }

            stack.push(item);
        }

        if (depth) {
            // console.log('depth is ' + depth);
            // console.log('stack is ' + stack.length);
            stack.splice(0, depth);
        }

        var result = {
            'mode': 'callers',
            'name': ex.name,
            'message': ex.message,
            'url': document.location.href,
            'stack': stack,
            'useragent': navigator.userAgent
        };
        augmentStackTraceWithInitialElement(result, ex.sourceURL || ex.fileName, ex.line || ex.lineNumber, ex.message || ex.description);
        return result;
    }

    /**
     * Computes a stack trace for an exception.
     * @param {Error} ex
     * @param {(string|number)=} depth
     */
    function computeStackTrace(ex, depth) {
        var stack = null;
        depth = (depth == null ? 0 : +depth);

        try {
            // This must be tried first because Opera 10 *destroys*
            // its stacktrace property if you try to access the stack
            // property first!!
            stack = computeStackTraceFromStacktraceProp(ex);
            if (stack) {
                return stack;
            }
        } catch (e) {
            if (debug) {
                throw e;
            }
        }

        try {
            stack = computeStackTraceFromStackProp(ex);
            if (stack) {
                return stack;
            }
        } catch (e) {
            if (debug) {
                throw e;
            }
        }

        try {
            stack = computeStackTraceFromOperaMultiLineMessage(ex);
            if (stack) {
                return stack;
            }
        } catch (e) {
            if (debug) {
                throw e;
            }
        }

        try {
            stack = computeStackTraceByWalkingCallerChain(ex, depth + 1);
            if (stack) {
                return stack;
            }
        } catch (e) {
            if (debug) {
                throw e;
            }
        }

        return {
            'mode': 'failed'
        };
    }

    /**
     * Logs a stacktrace starting from the previous call and working down.
     * @param {(number|string)=} depth How many frames deep to trace.
     * @return {Object.<string, *>} Stack trace information.
     */
    function computeStackTraceOfCaller(depth) {
        depth = (depth == null ? 0 : +depth) + 1; // "+ 1" because "ofCaller" should drop one frame
        try {
            throw new Error();
        } catch (ex) {
            return computeStackTrace(ex, depth + 1);
        }

        return null;
    }

    computeStackTrace.augmentStackTraceWithInitialElement = augmentStackTraceWithInitialElement;
    computeStackTrace.guessFunctionName = guessFunctionName;
    computeStackTrace.gatherContext = gatherContext;
    computeStackTrace.ofCaller = computeStackTraceOfCaller;

    return computeStackTrace;
}());

/**
 * Extends support for global error handling for asynchronous browser
 * functions. Adopted from Closure Library's errorhandler.js
 */
(function extendToAsynchronousCallbacks() {
    var _helper = function _helper(fnName) {
        var originalFn = window[fnName];
        window[fnName] = function traceKitAsyncExtension() {
            // Make a copy of the arguments
            var args = _slice.call(arguments);
            var originalCallback = args[0];
            if (typeof (originalCallback) === 'function') {
                args[0] = TraceKit.wrap(originalCallback);
            }
            // IE < 9 doesn't support .call/.apply on setInterval/setTimeout, but it
            // also only supports 2 argument and doesn't care what "this" is, so we
            // can just call the original function directly.
            if (originalFn.apply) {
                return originalFn.apply(this, args);
            } else {
                return originalFn(args[0], args[1]);
            }
        };
    };

    _helper('setTimeout');
    _helper('setInterval');
}());

//Default options:
if (!TraceKit.remoteFetching) {
  TraceKit.remoteFetching = true;
}
if (!TraceKit.collectWindowErrors) {
  TraceKit.collectWindowErrors = true;
}
if (!TraceKit.linesOfContext || TraceKit.linesOfContext < 1) {
  // 5 lines before, the offending line, 5 lines after
  TraceKit.linesOfContext = 11;
}



// Export to global object
window.TraceKit = TraceKit;

}(window));
;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * general function, usually for data manipulation pages
 *
 */

var ErrorReport = {
    /**
     * @var object stores the last exception info
     */
    _last_exception: null,
    /**
     * handles thrown error exceptions based on user preferences
     *
     * @return void
     */
    error_handler: function (exception) {
        if (exception.name === null || typeof(exception.name) == "undefined") {
            exception.name = ErrorReport._extractExceptionName(exception);
        }
        ErrorReport._last_exception = exception;
        $.get("error_report.php", {
            ajax_request: true,
            server: PMA_commonParams.get('server'),
            token: PMA_commonParams.get('token'),
            get_settings: true,
            exception_type: 'js'
        }, function (data) {
            if (data.success !== true) {
                PMA_ajaxShowMessage(data.error, false);
                return;
            }
            if (data.report_setting == "ask") {
                ErrorReport._showErrorNotification();
            } else if (data.report_setting == "always") {
                report_data = ErrorReport._get_report_data(exception);
                post_data = $.extend(report_data, {
                    send_error_report: true,
                    automatic: true
                });
                $.post("error_report.php", post_data, function (data) {
                    if (data.success === false) {
                        //in the case of an error, show the error message returned.
                        PMA_ajaxShowMessage(data.error, false);
                    } else {
                        PMA_ajaxShowMessage(data.message, false);
                    }
                });
            }
        });
    },
    /**
     * Shows the modal dialog previewing the report
     *
     * @param exception object error report info
     *
     * @return void
     */
    _showReportDialog: function (exception) {
        var report_data = ErrorReport._get_report_data(exception);

        /*Remove the hidden dialogs if there are*/
        if ($('#error_report_dialog').length !== 0) {
            $('#error_report_dialog').remove();
        }
        var $div = $('<div id="error_report_dialog"></div>');

        var button_options = {};

        button_options[PMA_messages.strSendErrorReport] = function () {
            var $dialog = $(this);
            var post_data = $.extend(report_data, {
                send_error_report: true,
                description: $("#report_description").val(),
                always_send: $("#always_send_checkbox")[0].checked
            });
            $.post("error_report.php", post_data, function (data) {
                $dialog.dialog('close');
                if (data.success === false) {
                    //in the case of an error, show the error message returned.
                    PMA_ajaxShowMessage(data.error, false);
                } else {
                    PMA_ajaxShowMessage(data.message, 3000);
                }
            });
        };

        button_options[PMA_messages.strCancel] = function () {
            $(this).dialog('close');
        };

        $.post("error_report.php", report_data, function (data) {
            if (data.success === false) {
                //in the case of an error, show the error message returned.
                PMA_ajaxShowMessage(data.error, false);
            } else {
                // Show dialog if the request was successful
                $div
                .append(data.message)
                .dialog({
                    title: PMA_messages.strSubmitErrorReport,
                    width: 650,
                    modal: true,
                    buttons: button_options,
                    close: function () {
                        $(this).remove();
                    }
                });
            }
        }); // end $.get()
    },
    /**
     * Shows the small notification that asks for user permission
     *
     * @return void
     */
    _showErrorNotification: function () {
        ErrorReport._removeErrorNotification();

        var $div = $(
            '<div style="position:fixed;bottom:0;left:0;right:0;margin:0;' +
            'z-index:1000" class="error" id="error_notification"></div>'
        ).append(
            PMA_getImage("s_error.png") + PMA_messages.strErrorOccurred
        );

        var $buttons = $('<div class="floatright"></div>');

        var button_html  = '<button id="show_error_report">';
        button_html += PMA_messages.strShowReportDetails;
        button_html += '</button>';

        button_html += '<a id="change_error_settings">';
        button_html += PMA_getImage('s_cog.png', PMA_messages.strChangeReportSettings);
        button_html += '</a>';

        button_html += '<a href="#" id="ignore_error">';
        button_html += PMA_getImage('b_close.png', PMA_messages.strIgnore);
        button_html += '</a>';

        $buttons.html(button_html);

        $div.append($buttons);
        $div.appendTo(document.body);
        $("#change_error_settings").on("click", ErrorReport._redirect_to_settings);
        $("#show_error_report").on("click", ErrorReport._createReportDialog);
        $("#ignore_error").on("click", ErrorReport._removeErrorNotification);
    },
    /**
     * Removes the notification if it was displayed before
     *
     * @return void
     */
    _removeErrorNotification: function (e) {
        if (e) {
            // don't remove the hash fragment by navigating to #
            e.preventDefault();
        }
        $("#error_notification").fadeOut(function () {
            $(this).remove();
        });
    },
    /**
     * Extracts Exception name from message if it exists
     *
     * @return String
     */
    _extractExceptionName: function (exception) {
        if (exception.message === null || typeof(exception.message) == "undefined"){
            return "";
        } else {
            var reg = /([a-zA-Z]+):/;
            var regex_result = null;
            regex_result = reg.exec(exception.message);
            if(regex_result && regex_result.length == 2)
                return regex_result[1];
            else
                return "";
        }
    },
    /**
     * Shows the modal dialog previewing the report
     *
     * @return void
     */
    _createReportDialog: function () {
        ErrorReport._removeErrorNotification();
        ErrorReport._showReportDialog(ErrorReport._last_exception);
    },
    /**
     * Redirects to the settings page containing error report
     * preferences
     *
     * @return void
     */
    _redirect_to_settings: function () {
        window.location.href = "prefs_forms.php?token=" + PMA_commonParams.get('token');
    },
    /**
     * Returns the report data to send to the server
     *
     * @param exception object exception info
     *
     * @return object
     */
    _get_report_data: function (exception) {
        var report_data = {
            "ajax_request": true,
            "token": PMA_commonParams.get('token'),
            "exception": exception,
            "current_url": window.location.href,
            "exception_type": 'js'
        };
        if (AJAX.scriptHandler._scripts.length > 0) {
            report_data.scripts = AJAX.scriptHandler._scripts.map(
                function (script) {
                    return script.name;
                }
            );
        }
        return report_data;
    },
    /**
     * Wraps all global functions that start with PMA_
     *
     * @return void
     */
    wrap_global_functions: function () {
        for (var key in window) {
            if (key.indexOf("PMA_") === 0) {
                var global = window[key];
                if (typeof(global) === "function") {
                    window[key] = ErrorReport.wrap_function(global);
                }
            }
        }
    },
    /**
     * Wraps given function in error reporting code and returns wrapped function
     *
     * @param func function to be wrapped
     *
     * @return function
     */
    wrap_function: function (func) {
        if (!func.wrapped) {
            var new_func = function () {
                try {
                    return func.apply(this, arguments);
                } catch (x) {
                    TraceKit.report(x);
                }
            };
            new_func.wrapped = true;
            //Set guid of wrapped function same as original function, so it can be removed
            //See bug#4146 (problem with jquery draggable and sortable)
            new_func.guid = func.guid = func.guid || new_func.guid || jQuery.guid++;
            return new_func;
        } else {
            return func;
        }
    },
    /**
     * Automatically wraps the callback in AJAX.registerOnload
     *
     * @return void
     */
    _wrap_ajax_onload_callback: function () {
        var oldOnload = AJAX.registerOnload;
        AJAX.registerOnload = function (file, func) {
            func = ErrorReport.wrap_function(func);
            oldOnload.call(this, file, func);
        };
    },
    /**
     * Automatically wraps the callback in $.fn.on
     *
     * @return void
     */
    _wrap_$_on_callback: function () {
        var oldOn = $.fn.on;
        $.fn.on = function () {
            for (var i = 1; i <= 3; i++) {
                if (typeof(arguments[i]) === "function") {
                    arguments[i] = ErrorReport.wrap_function(arguments[i]);
                    break;
                }
            }
            return oldOn.apply(this, arguments);
        };
    },
    /**
     * Wraps all global functions that start with PMA_
     * also automatically wraps the callback in AJAX.registerOnload
     *
     * @return void
     */
    set_up_error_reporting: function () {
        ErrorReport.wrap_global_functions();
        ErrorReport._wrap_ajax_onload_callback();
        ErrorReport._wrap_$_on_callback();
    }

};

TraceKit.report.subscribe(ErrorReport.error_handler);
ErrorReport.set_up_error_reporting();
$(function () {
    ErrorReport.wrap_global_functions();
});
;

/**
 * Definition of links to MySQL documentation.
 */

var mysql_doc_keyword = {
    /* Multi word */
    'CHARACTER SET': Array('charset'),
    'SHOW AUTHORS': Array('show-authors'),
    'SHOW BINARY LOGS': Array('show-binary-logs'),
    'SHOW BINLOG EVENTS': Array('show-binlog-events'),
    'SHOW CHARACTER SET': Array('show-character-set'),
    'SHOW COLLATION': Array('show-collation'),
    'SHOW COLUMNS': Array('show-columns'),
    'SHOW CONTRIBUTORS': Array('show-contributors'),
    'SHOW CREATE DATABASE': Array('show-create-database'),
    'SHOW CREATE EVENT': Array('show-create-event'),
    'SHOW CREATE FUNCTION': Array('show-create-function'),
    'SHOW CREATE PROCEDURE': Array('show-create-procedure'),
    'SHOW CREATE TABLE': Array('show-create-table'),
    'SHOW CREATE TRIGGER': Array('show-create-trigger'),
    'SHOW CREATE VIEW': Array('show-create-view'),
    'SHOW DATABASES': Array('show-databases'),
    'SHOW ENGINE': Array('show-engine'),
    'SHOW ENGINES': Array('show-engines'),
    'SHOW ERRORS': Array('show-errors'),
    'SHOW EVENTS': Array('show-events'),
    'SHOW FUNCTION CODE': Array('show-function-code'),
    'SHOW FUNCTION STATUS': Array('show-function-status'),
    'SHOW GRANTS': Array('show-grants'),
    'SHOW INDEX': Array('show-index'),
    'SHOW MASTER STATUS': Array('show-master-status'),
    'SHOW OPEN TABLES': Array('show-open-tables'),
    'SHOW PLUGINS': Array('show-plugins'),
    'SHOW PRIVILEGES': Array('show-privileges'),
    'SHOW PROCEDURE CODE': Array('show-procedure-code'),
    'SHOW PROCEDURE STATUS': Array('show-procedure-status'),
    'SHOW PROCESSLIST': Array('show-processlist'),
    'SHOW PROFILE': Array('show-profile'),
    'SHOW PROFILES': Array('show-profiles'),
    'SHOW RELAYLOG EVENTS': Array('show-relaylog-events'),
    'SHOW SLAVE HOSTS': Array('show-slave-hosts'),
    'SHOW SLAVE STATUS': Array('show-slave-status'),
    'SHOW STATUS': Array('show-status'),
    'SHOW TABLE STATUS': Array('show-table-status'),
    'SHOW TABLES': Array('show-tables'),
    'SHOW TRIGGERS': Array('show-triggers'),
    'SHOW VARIABLES': Array('show-variables'),
    'SHOW WARNINGS': Array('show-warnings'),
    'LOAD DATA INFILE': Array('load-data'),
    'LOAD XML': Array('load-xml'),
    'LOCK TABLES': Array('lock-tables'),
    'UNLOCK TABLES': Array('lock-tables'),
    'ALTER DATABASE': Array('alter-database'),
    'ALTER EVENT': Array('alter-event'),
    'ALTER LOGFILE GROUP': Array('alter-logfile-group'),
    'ALTER FUNCTION': Array('alter-function'),
    'ALTER PROCEDURE': Array('alter-procedure'),
    'ALTER SERVER': Array('alter-server'),
    'ALTER TABLE': Array('alter-table'),
    'ALTER TABLESPACE': Array('alter-tablespace'),
    'ALTER VIEW': Array('alter-view'),
    'CREATE DATABASE': Array('create-database'),
    'CREATE EVENT': Array('create-event'),
    'CREATE FUNCTION': Array('create-function'),
    'CREATE INDEX': Array('create-index'),
    'CREATE LOGFILE GROUP': Array('create-logfile-group'),
    'CREATE PROCEDURE': Array('create-procedure'),
    'CREATE SERVER': Array('create-server'),
    'CREATE TABLE': Array('create-table'),
    'CREATE TABLESPACE': Array('create-tablespace'),
    'CREATE TRIGGER': Array('create-trigger'),
    'CREATE VIEW': Array('create-view'),
    'DROP DATABASE': Array('drop-database'),
    'DROP EVENT': Array('drop-event'),
    'DROP FUNCTION': Array('drop-function'),
    'DROP INDEX': Array('drop-index'),
    'DROP LOGFILE GROUP': Array('drop-logfile-group'),
    'DROP PROCEDURE': Array('drop-procedure'),
    'DROP SERVER': Array('drop-server'),
    'DROP TABLE': Array('drop-table'),
    'DROP TABLESPACE': Array('drop-tablespace'),
    'DROP TRIGGER': Array('drop-trigger'),
    'DROP VIEW': Array('drop-view'),
    'RENAME TABLE': Array('rename-table'),
    'TRUNCATE TABLE': Array('truncate-table'),

    /* Statements */
    'SELECT': Array('select'),
    'SET': Array('set'),
    'EXPLAIN': Array('explain'),
    'DESCRIBE': Array('describe'),
    'DELETE': Array('delete'),
    'SHOW': Array('show'),
    'UPDATE': Array('update'),
    'INSERT': Array('insert'),
    'REPLACE': Array('replace'),
    'CALL': Array('call'),
    'DO': Array('do'),
    'HANDLER': Array('handler'),
    'COLLATE': Array('charset-collations'),

    /* Functions */
    'ABS': Array('mathematical-functions', 'function_abs'),
    'ACOS': Array('mathematical-functions', 'function_acos'),
    'ADDDATE': Array('date-and-time-functions', 'function_adddate'),
    'ADDTIME': Array('date-and-time-functions', 'function_addtime'),
    'AES_DECRYPT': Array('encryption-functions', 'function_aes_decrypt'),
    'AES_ENCRYPT': Array('encryption-functions', 'function_aes_encrypt'),
    'AND': Array('logical-operators', 'operator_and'),
    'ASCII': Array('string-functions', 'function_ascii'),
    'ASIN': Array('mathematical-functions', 'function_asin'),
    'ATAN2': Array('mathematical-functions', 'function_atan2'),
    'ATAN': Array('mathematical-functions', 'function_atan'),
    'AVG': Array('group-by-functions', 'function_avg'),
    'BENCHMARK': Array('information-functions', 'function_benchmark'),
    'BIN': Array('string-functions', 'function_bin'),
    'BINARY': Array('cast-functions', 'operator_binary'),
    'BIT_AND': Array('group-by-functions', 'function_bit_and'),
    'BIT_COUNT': Array('bit-functions', 'function_bit_count'),
    'BIT_LENGTH': Array('string-functions', 'function_bit_length'),
    'BIT_OR': Array('group-by-functions', 'function_bit_or'),
    'BIT_XOR': Array('group-by-functions', 'function_bit_xor'),
    'CASE': Array('control-flow-functions', 'operator_case'),
    'CAST': Array('cast-functions', 'function_cast'),
    'CEIL': Array('mathematical-functions', 'function_ceil'),
    'CEILING': Array('mathematical-functions', 'function_ceiling'),
    'CHAR_LENGTH': Array('string-functions', 'function_char_length'),
    'CHAR': Array('string-functions', 'function_char'),
    'CHARACTER_LENGTH': Array('string-functions', 'function_character_length'),
    'CHARSET': Array('information-functions', 'function_charset'),
    'COALESCE': Array('comparison-operators', 'function_coalesce'),
    'COERCIBILITY': Array('information-functions', 'function_coercibility'),
    'COLLATION': Array('information-functions', 'function_collation'),
    'COMPRESS': Array('encryption-functions', 'function_compress'),
    'CONCAT_WS': Array('string-functions', 'function_concat_ws'),
    'CONCAT': Array('string-functions', 'function_concat'),
    'CONNECTION_ID': Array('information-functions', 'function_connection_id'),
    'CONV': Array('mathematical-functions', 'function_conv'),
    'CONVERT_TZ': Array('date-and-time-functions', 'function_convert_tz'),
    'Convert': Array('cast-functions', 'function_convert'),
    'COS': Array('mathematical-functions', 'function_cos'),
    'COT': Array('mathematical-functions', 'function_cot'),
    'COUNT': Array('group-by-functions', 'function_count'),
    'CRC32': Array('mathematical-functions', 'function_crc32'),
    'CURDATE': Array('date-and-time-functions', 'function_curdate'),
    'CURRENT_DATE': Array('date-and-time-functions', 'function_current_date'),
    'CURRENT_TIME': Array('date-and-time-functions', 'function_current_time'),
    'CURRENT_TIMESTAMP': Array('date-and-time-functions', 'function_current_timestamp'),
    'CURRENT_USER': Array('information-functions', 'function_current_user'),
    'CURTIME': Array('date-and-time-functions', 'function_curtime'),
    'DATABASE': Array('information-functions', 'function_database'),
    'DATE_ADD': Array('date-and-time-functions', 'function_date_add'),
    'DATE_FORMAT': Array('date-and-time-functions', 'function_date_format'),
    'DATE_SUB': Array('date-and-time-functions', 'function_date_sub'),
    'DATE': Array('date-and-time-functions', 'function_date'),
    'DATEDIFF': Array('date-and-time-functions', 'function_datediff'),
    'DAY': Array('date-and-time-functions', 'function_day'),
    'DAYNAME': Array('date-and-time-functions', 'function_dayname'),
    'DAYOFMONTH': Array('date-and-time-functions', 'function_dayofmonth'),
    'DAYOFWEEK': Array('date-and-time-functions', 'function_dayofweek'),
    'DAYOFYEAR': Array('date-and-time-functions', 'function_dayofyear'),
    'DECLARE': Array('declare', 'declare'),
    'DECODE': Array('encryption-functions', 'function_decode'),
    'DEFAULT': Array('miscellaneous-functions', 'function_default'),
    'DEGREES': Array('mathematical-functions', 'function_degrees'),
    'DES_DECRYPT': Array('encryption-functions', 'function_des_decrypt'),
    'DES_ENCRYPT': Array('encryption-functions', 'function_des_encrypt'),
    'DIV': Array('arithmetic-functions', 'operator_div'),
    'ELT': Array('string-functions', 'function_elt'),
    'ENCODE': Array('encryption-functions', 'function_encode'),
    'ENCRYPT': Array('encryption-functions', 'function_encrypt'),
    'EXP': Array('mathematical-functions', 'function_exp'),
    'EXPORT_SET': Array('string-functions', 'function_export_set'),
    'EXTRACT': Array('date-and-time-functions', 'function_extract'),
    'ExtractValue': Array('xml-functions', 'function_extractvalue'),
    'FIELD': Array('string-functions', 'function_field'),
    'FIND_IN_SET': Array('string-functions', 'function_find_in_set'),
    'FLOOR': Array('mathematical-functions', 'function_floor'),
    'FORMAT': Array('string-functions', 'function_format'),
    'FOUND_ROWS': Array('information-functions', 'function_found_rows'),
    'FROM_DAYS': Array('date-and-time-functions', 'function_from_days'),
    'FROM_UNIXTIME': Array('date-and-time-functions', 'function_from_unixtime'),
    'GET_FORMAT': Array('date-and-time-functions', 'function_get_format'),
    'GET_LOCK': Array('miscellaneous-functions', 'function_get_lock'),
    'GREATEST': Array('comparison-operators', 'function_greatest'),
    'GROUP_CONCAT': Array('group-by-functions', 'function_group_concat'),
    'HEX': Array('string-functions', 'function_hex'),
    'HOUR': Array('date-and-time-functions', 'function_hour'),
    'IF': Array('control-flow-functions', 'function_if'),
    'IFNULL': Array('control-flow-functions', 'function_ifnull'),
    'IN': Array('comparison-operators', 'function_in'),
    'INET_ATON': Array('miscellaneous-functions', 'function_inet_aton'),
    'INET_NTOA': Array('miscellaneous-functions', 'function_inet_ntoa'),
    'INSTR': Array('string-functions', 'function_instr'),
    'INTERVAL': Array('comparison-operators', 'function_interval'),
    'IS_FREE_LOCK': Array('miscellaneous-functions', 'function_is_free_lock'),
    'IS_USED_LOCK': Array('miscellaneous-functions', 'function_is_used_lock'),
    'IS': Array('comparison-operators', 'operator_is'),
    'ISNULL': Array('comparison-operators', 'function_isnull'),
    'LAST_DAY': Array('date-and-time-functions', 'function_last_day'),
    'LAST_INSERT_ID': Array('information-functions', 'function_last_insert_id'),
    'LCASE': Array('string-functions', 'function_lcase'),
    'LEAST': Array('comparison-operators', 'function_least'),
    'LEFT': Array('string-functions', 'function_left'),
    'LENGTH': Array('string-functions', 'function_length'),
    'LIKE': Array('string-comparison-functions', 'operator_like'),
    'LN': Array('mathematical-functions', 'function_ln'),
    'LOAD_FILE': Array('string-functions', 'function_load_file'),
    'LOCALTIME': Array('date-and-time-functions', 'function_localtime'),
    'LOCALTIMESTAMP': Array('date-and-time-functions', 'function_localtimestamp'),
    'LOCATE': Array('string-functions', 'function_locate'),
    'LOG10': Array('mathematical-functions', 'function_log10'),
    'LOG2': Array('mathematical-functions', 'function_log2'),
    'LOG': Array('mathematical-functions', 'function_log'),
    'LOWER': Array('string-functions', 'function_lower'),
    'LPAD': Array('string-functions', 'function_lpad'),
    'LTRIM': Array('string-functions', 'function_ltrim'),
    'MAKE_SET': Array('string-functions', 'function_make_set'),
    'MAKEDATE': Array('date-and-time-functions', 'function_makedate'),
    'MAKETIME': Array('date-and-time-functions', 'function_maketime'),
    'MASTER_POS_WAIT': Array('miscellaneous-functions', 'function_master_pos_wait'),
    'MATCH': Array('fulltext-search', 'function_match'),
    'MAX': Array('group-by-functions', 'function_max'),
    'MD5': Array('encryption-functions', 'function_md5'),
    'MICROSECOND': Array('date-and-time-functions', 'function_microsecond'),
    'MID': Array('string-functions', 'function_mid'),
    'MIN': Array('group-by-functions', 'function_min'),
    'MINUTE': Array('date-and-time-functions', 'function_minute'),
    'MOD': Array('mathematical-functions', 'function_mod'),
    'MONTH': Array('date-and-time-functions', 'function_month'),
    'MONTHNAME': Array('date-and-time-functions', 'function_monthname'),
    'NAME_CONST': Array('miscellaneous-functions', 'function_name_const'),
    'NOT': Array('logical-operators', 'operator_not'),
    'NOW': Array('date-and-time-functions', 'function_now'),
    'NULLIF': Array('control-flow-functions', 'function_nullif'),
    'OCT': Array('mathematical-functions', 'function_oct'),
    'OCTET_LENGTH': Array('string-functions', 'function_octet_length'),
    'OLD_PASSWORD': Array('encryption-functions', 'function_old_password'),
    'OR': Array('logical-operators', 'operator_or'),
    'ORD': Array('string-functions', 'function_ord'),
    'PASSWORD': Array('encryption-functions', 'function_password'),
    'PERIOD_ADD': Array('date-and-time-functions', 'function_period_add'),
    'PERIOD_DIFF': Array('date-and-time-functions', 'function_period_diff'),
    'PI': Array('mathematical-functions', 'function_pi'),
    'POSITION': Array('string-functions', 'function_position'),
    'POW': Array('mathematical-functions', 'function_pow'),
    'POWER': Array('mathematical-functions', 'function_power'),
    'QUARTER': Array('date-and-time-functions', 'function_quarter'),
    'QUOTE': Array('string-functions', 'function_quote'),
    'RADIANS': Array('mathematical-functions', 'function_radians'),
    'RAND': Array('mathematical-functions', 'function_rand'),
    'REGEXP': Array('regexp', 'operator_regexp'),
    'RELEASE_LOCK': Array('miscellaneous-functions', 'function_release_lock'),
    'REPEAT': Array('string-functions', 'function_repeat'),
    'REVERSE': Array('string-functions', 'function_reverse'),
    'RIGHT': Array('string-functions', 'function_right'),
    'RLIKE': Array('regexp', 'operator_rlike'),
    'ROUND': Array('mathematical-functions', 'function_round'),
    'ROW_COUNT': Array('information-functions', 'function_row_count'),
    'RPAD': Array('string-functions', 'function_rpad'),
    'RTRIM': Array('string-functions', 'function_rtrim'),
    'SCHEMA': Array('information-functions', 'function_schema'),
    'SEC_TO_TIME': Array('date-and-time-functions', 'function_sec_to_time'),
    'SECOND': Array('date-and-time-functions', 'function_second'),
    'SESSION_USER': Array('information-functions', 'function_session_user'),
    'SHA': Array('encryption-functions', 'function_sha1'),
    'SHA1': Array('encryption-functions', 'function_sha1'),
    'SIGN': Array('mathematical-functions', 'function_sign'),
    'SIN': Array('mathematical-functions', 'function_sin'),
    'SLEEP': Array('miscellaneous-functions', 'function_sleep'),
    'SOUNDEX': Array('string-functions', 'function_soundex'),
    'SPACE': Array('string-functions', 'function_space'),
    'SQRT': Array('mathematical-functions', 'function_sqrt'),
    'STD': Array('group-by-functions', 'function_std'),
    'STDDEV_POP': Array('group-by-functions', 'function_stddev_pop'),
    'STDDEV_SAMP': Array('group-by-functions', 'function_stddev_samp'),
    'STDDEV': Array('group-by-functions', 'function_stddev'),
    'STR_TO_DATE': Array('date-and-time-functions', 'function_str_to_date'),
    'STRCMP': Array('string-comparison-functions', 'function_strcmp'),
    'SUBDATE': Array('date-and-time-functions', 'function_subdate'),
    'SUBSTR': Array('string-functions', 'function_substr'),
    'SUBSTRING_INDEX': Array('string-functions', 'function_substring_index'),
    'SUBSTRING': Array('string-functions', 'function_substring'),
    'SUBTIME': Array('date-and-time-functions', 'function_subtime'),
    'SUM': Array('group-by-functions', 'function_sum'),
    'SYSDATE': Array('date-and-time-functions', 'function_sysdate'),
    'SYSTEM_USER': Array('information-functions', 'function_system_user'),
    'TAN': Array('mathematical-functions', 'function_tan'),
    'TIME_FORMAT': Array('date-and-time-functions', 'function_time_format'),
    'TIME_TO_SEC': Array('date-and-time-functions', 'function_time_to_sec'),
    'TIME': Array('date-and-time-functions', 'function_time'),
    'TIMEDIFF': Array('date-and-time-functions', 'function_timediff'),
    'TIMESTAMP': Array('date-and-time-functions', 'function_timestamp'),
    'TIMESTAMPADD': Array('date-and-time-functions', 'function_timestampadd'),
    'TIMESTAMPDIFF': Array('date-and-time-functions', 'function_timestampdiff'),
    'TO_DAYS': Array('date-and-time-functions', 'function_to_days'),
    'TRIM': Array('string-functions', 'function_trim'),
    'TRUNCATE': Array('mathematical-functions', 'function_truncate'),
    'UCASE': Array('string-functions', 'function_ucase'),
    'UNCOMPRESS': Array('encryption-functions', 'function_uncompress'),
    'UNCOMPRESSED_LENGTH': Array('encryption-functions', 'function_uncompressed_length'),
    'UNHEX': Array('string-functions', 'function_unhex'),
    'UNIX_TIMESTAMP': Array('date-and-time-functions', 'function_unix_timestamp'),
    'UpdateXML': Array('xml-functions', 'function_updatexml'),
    'UPPER': Array('string-functions', 'function_upper'),
    'USER': Array('information-functions', 'function_user'),
    'UTC_DATE': Array('date-and-time-functions', 'function_utc_date'),
    'UTC_TIME': Array('date-and-time-functions', 'function_utc_time'),
    'UTC_TIMESTAMP': Array('date-and-time-functions', 'function_utc_timestamp'),
    'UUID_SHORT': Array('miscellaneous-functions', 'function_uuid_short'),
    'UUID': Array('miscellaneous-functions', 'function_uuid'),
    'VALUES': Array('miscellaneous-functions', 'function_values'),
    'VAR_POP': Array('group-by-functions', 'function_var_pop'),
    'VAR_SAMP': Array('group-by-functions', 'function_var_samp'),
    'VARIANCE': Array('group-by-functions', 'function_variance'),
    'VERSION': Array('information-functions', 'function_version'),
    'WEEK': Array('date-and-time-functions', 'function_week'),
    'WEEKDAY': Array('date-and-time-functions', 'function_weekday'),
    'WEEKOFYEAR': Array('date-and-time-functions', 'function_weekofyear'),
    'XOR': Array('logical-operators', 'operator_xor'),
    'YEAR': Array('date-and-time-functions', 'function_year'),
    'YEARWEEK': Array('date-and-time-functions', 'function_yearweek'),
    'SOUNDS_LIKE': Array('string-functions', 'operator_sounds-like'),
    'IS_NOT_NULL': Array('comparison-operators', 'operator_is-not-null'),
    'IS_NOT': Array('comparison-operators', 'operator_is-not'),
    'IS_NULL': Array('comparison-operators', 'operator_is-null'),
    'NOT_LIKE': Array('string-comparison-functions', 'operator_not-like'),
    'NOT_REGEXP': Array('regexp', 'operator_not-regexp'),
    'COUNT_DISTINCT': Array('group-by-functions', 'function_count-distinct'),
    'NOT_IN': Array('comparison-operators', 'function_not-in')
};

var mysql_doc_builtin = {
    'TINYINT': Array('numeric-types'),
    'SMALLINT': Array('numeric-types'),
    'MEDIUMINT': Array('numeric-types'),
    'INT': Array('numeric-types'),
    'BIGINT': Array('numeric-types'),
    'DECIMAL': Array('numeric-types'),
    'FLOAT': Array('numeric-types'),
    'DOUBLE': Array('numeric-types'),
    'REAL': Array('numeric-types'),
    'BIT': Array('numeric-types'),
    'BOOLEAN': Array('numeric-types'),
    'SERIAL': Array('numeric-types'),
    'DATE': Array('date-and-time-types'),
    'DATETIME': Array('date-and-time-types'),
    'TIMESTAMP': Array('date-and-time-types'),
    'TIME': Array('date-and-time-types'),
    'YEAR': Array('date-and-time-types'),
    'CHAR': Array('string-types'),
    'VARCHAR': Array('string-types'),
    'TINYTEXT': Array('string-types'),
    'TEXT': Array('string-types'),
    'MEDIUMTEXT': Array('string-types'),
    'LONGTEXT': Array('string-types'),
    'BINARY': Array('string-types'),
    'VARBINARY': Array('string-types'),
    'TINYBLOB': Array('string-types'),
    'MEDIUMBLOB': Array('string-types'),
    'BLOB': Array('string-types'),
    'LONGBLOB': Array('string-types'),
    'ENUM': Array('string-types'),
    'SET': Array('string-types')
};
;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * general function, usually for data manipulation pages
 *
 */

/**
 * @var sql_box_locked lock for the sqlbox textarea in the querybox
 */
var sql_box_locked = false;

/**
 * @var array holds elements which content should only selected once
 */
var only_once_elements = [];

/**
 * @var   int   ajax_message_count   Number of AJAX messages shown since page load
 */
var ajax_message_count = 0;

/**
 * @var codemirror_editor object containing CodeMirror editor of the query editor in SQL tab
 */
var codemirror_editor = false;

/**
 * @var codemirror_editor object containing CodeMirror editor of the inline query editor
 */
var codemirror_inline_editor = false;

/**
 * @var sql_autocomplete_in_progress bool shows if Table/Column name autocomplete AJAX is in progress
 */
var sql_autocomplete_in_progress = false;

/**
 * @var sql_autocomplete object containing list of columns in each table
 */
var sql_autocomplete = false;

/**
 * @var sql_autocomplete_default_table string containing default table to autocomplete columns
 */
var sql_autocomplete_default_table = '';

/**
 * @var chart_activeTimeouts object active timeouts that refresh the charts. When disabling a realtime chart, this can be used to stop the continuous ajax requests
 */
var chart_activeTimeouts = {};

/**
 * @var central_column_list array to hold the columns in central list per db.
 */
var central_column_list = [];

/**
 * @var primary_indexes array to hold 'Primary' index columns.
 */
var primary_indexes = [];

/**
 * @var unique_indexes array to hold 'Unique' index columns.
 */
var unique_indexes = [];

/**
 * @var indexes array to hold 'Index' columns.
 */
var indexes = [];

/**
 * @var fulltext_indexes array to hold 'Fulltext' columns.
 */
var fulltext_indexes = [];

/**
 * @var spatial_indexes array to hold 'Spatial' columns.
 */
var spatial_indexes = [];

/**
 * Make sure that ajax requests will not be cached
 * by appending a random variable to their parameters
 */
$.ajaxPrefilter(function (options, originalOptions, jqXHR) {
    var nocache = new Date().getTime() + "" + Math.floor(Math.random() * 1000000);
    if (typeof options.data == "string") {
        options.data += "&_nocache=" + nocache;
    } else if (typeof options.data == "object") {
        options.data = $.extend(originalOptions.data, {'_nocache' : nocache});
    }
});

/**
 * Creates an SQL editor which supports auto completing etc.
 *
 * @param $textarea jQuery object wrapping the textarea to be made the editor
 * @param options   optional options for CodeMirror
 * @param resize    optional resizing ('vertical', 'horizontal', 'both')
 */
function PMA_getSQLEditor($textarea, options, resize) {
    if ($textarea.length > 0 && typeof CodeMirror !== 'undefined') {

        // merge options for CodeMirror
        var defaults = {
            lineNumbers: true,
            matchBrackets: true,
            extraKeys: {"Ctrl-Space": "autocomplete"},
            hintOptions: {"completeSingle": false, "completeOnSingleClick": true},
            indentUnit: 4,
            mode: "text/x-mysql",
            lineWrapping: true
        };

        if (CodeMirror.sqlLint) {
            $.extend(defaults, {
                gutters: ["CodeMirror-lint-markers"],
                lint: {
                    "getAnnotations": CodeMirror.sqlLint,
                    "async": true,
                }
            });
        }

        $.extend(true, defaults, options);

        // create CodeMirror editor
        var codemirrorEditor = CodeMirror.fromTextArea($textarea[0], defaults);
        // allow resizing
        if (! resize) {
            resize = 'vertical';
        }
        var handles = '';
        if (resize == 'vertical') {
            handles = 'n, s';
        }
        if (resize == 'both') {
            handles = 'all';
        }
        if (resize == 'horizontal') {
            handles = 'e, w';
        }
        $(codemirrorEditor.getWrapperElement())
            .css('resize', resize)
            .resizable({
                handles: handles,
                resize: function() {
                    codemirrorEditor.setSize($(this).width(), $(this).height());
                }
            });
        // enable autocomplete
        codemirrorEditor.on("inputRead", codemirrorAutocompleteOnInputRead);

        return codemirrorEditor;
    }
    return null;
}

/**
 * Clear text selection
 */
function PMA_clearSelection() {
    if (document.selection && document.selection.empty) {
        document.selection.empty();
    } else if (window.getSelection) {
        var sel = window.getSelection();
        if (sel.empty) {
            sel.empty();
        }
        if (sel.removeAllRanges) {
            sel.removeAllRanges();
        }
    }
}

/**
 * Create a jQuery UI tooltip
 *
 * @param $elements     jQuery object representing the elements
 * @param item          the item
 *                      (see http://api.jqueryui.com/tooltip/#option-items)
 * @param myContent     content of the tooltip
 * @param additionalOptions to override the default options
 *
 */
function PMA_tooltip($elements, item, myContent, additionalOptions)
{
    if ($('#no_hint').length > 0) {
        return;
    }

    var defaultOptions = {
        content: myContent,
        items:  item,
        tooltipClass: "tooltip",
        track: true,
        show: false,
        hide: false
    };

    $elements.tooltip($.extend(true, defaultOptions, additionalOptions));
}

/**
 * HTML escaping
 */

function escapeHtml(unsafe) {
    if (typeof(unsafe) != 'undefined') {
        return unsafe
            .toString()
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    } else {
        return false;
    }
}

function PMA_sprintf() {
    return sprintf.apply(this, arguments);
}

/**
 * Hides/shows the default value input field, depending on the default type
 * Ticks the NULL checkbox if NULL is chosen as default value.
 */
function PMA_hideShowDefaultValue($default_type)
{
    if ($default_type.val() == 'USER_DEFINED') {
        $default_type.siblings('.default_value').show().focus();
    } else {
        $default_type.siblings('.default_value').hide();
        if ($default_type.val() == 'NULL') {
            var $null_checkbox = $default_type.closest('tr').find('.allow_null');
            $null_checkbox.prop('checked', true);
        }
    }
}

/**
 * Hides/shows the input field for column expression based on whether
 * VIRTUAL/PERSISTENT is selected
 *
 * @param $virtuality virtuality dropdown
 */
function PMA_hideShowExpression($virtuality)
{
    if ($virtuality.val() == '') {
        $virtuality.siblings('.expression').hide();
    } else {
        $virtuality.siblings('.expression').show();
    }
}

/**
 * Show notices for ENUM columns; add/hide the default value
 *
 */
function PMA_verifyColumnsProperties()
{
    $("select.column_type").each(function () {
        PMA_showNoticeForEnum($(this));
    });
    $("select.default_type").each(function () {
        PMA_hideShowDefaultValue($(this));
    });
    $('select.virtuality').each(function () {
        PMA_hideShowExpression($(this));
    });
}

/**
 * Add a hidden field to the form to indicate that this will be an
 * Ajax request (only if this hidden field does not exist)
 *
 * @param $form object   the form
 */
function PMA_prepareForAjaxRequest($form)
{
    if (! $form.find('input:hidden').is('#ajax_request_hidden')) {
        $form.append('<input type="hidden" id="ajax_request_hidden" name="ajax_request" value="true" />');
    }
}

/**
 * Generate a new password and copy it to the password input areas
 *
 * @param passwd_form object   the form that holds the password fields
 *
 * @return boolean  always true
 */
function suggestPassword(passwd_form)
{
    // restrict the password to just letters and numbers to avoid problems:
    // "editors and viewers regard the password as multiple words and
    // things like double click no longer work"
    var pwchars = "abcdefhjmnpqrstuvwxyz23456789ABCDEFGHJKLMNPQRSTUVWYXZ";
    var passwordlength = 16;    // do we want that to be dynamic?  no, keep it simple :)
    var passwd = passwd_form.generated_pw;
    passwd.value = '';

    for (var i = 0; i < passwordlength; i++) {
        passwd.value += pwchars.charAt(Math.floor(Math.random() * pwchars.length));
    }
    passwd_form.text_pma_pw.value = passwd.value;
    passwd_form.text_pma_pw2.value = passwd.value;
    return true;
}

/**
 * Version string to integer conversion.
 */
function parseVersionString(str)
{
    if (typeof(str) != 'string') { return false; }
    var add = 0;
    // Parse possible alpha/beta/rc/
    var state = str.split('-');
    if (state.length >= 2) {
        if (state[1].substr(0, 2) == 'rc') {
            add = - 20 - parseInt(state[1].substr(2), 10);
        } else if (state[1].substr(0, 4) == 'beta') {
            add =  - 40 - parseInt(state[1].substr(4), 10);
        } else if (state[1].substr(0, 5) == 'alpha') {
            add =  - 60 - parseInt(state[1].substr(5), 10);
        } else if (state[1].substr(0, 3) == 'dev') {
            /* We don't handle dev, it's git snapshot */
            add = 0;
        }
    }
    // Parse version
    var x = str.split('.');
    // Use 0 for non existing parts
    var maj = parseInt(x[0], 10) || 0;
    var min = parseInt(x[1], 10) || 0;
    var pat = parseInt(x[2], 10) || 0;
    var hotfix = parseInt(x[3], 10) || 0;
    return  maj * 100000000 + min * 1000000 + pat * 10000 + hotfix * 100 + add;
}

/**
 * Indicates current available version on main page.
 */
function PMA_current_version(data)
{
    if (data && data.version && data.date) {
        var current = parseVersionString($('span.version').text());
        var latest = parseVersionString(data.version);
        var version_information_message = '<span class="latest">' +
            PMA_messages.strLatestAvailable +
            ' ' + escapeHtml(data.version) +
            '</span>';
        if (latest > current) {
            var message = PMA_sprintf(
                PMA_messages.strNewerVersion,
                escapeHtml(data.version),
                escapeHtml(data.date)
            );
            var htmlClass = 'notice';
            if (Math.floor(latest / 10000) === Math.floor(current / 10000)) {
                /* Security update */
                htmlClass = 'error';
            }
            $('#newer_version_notice').remove();
            $('#maincontainer').after('<div id="newer_version_notice" class="' + htmlClass + '">' + message + '</div>');
        }
        if (latest === current) {
            version_information_message = ' (' + PMA_messages.strUpToDate + ')';
        }
        var $liPmaVersion = $('#li_pma_version');
        $liPmaVersion.find('span.latest').remove();
        $liPmaVersion.append(version_information_message);
    }
}

/**
 * Loads Git revision data from ajax for index.php
 */
function PMA_display_git_revision()
{
    $('#is_git_revision').remove();
    $('#li_pma_version_git').remove();
    $.get(
        "index.php",
        {
            "server": PMA_commonParams.get('server'),
            "token": PMA_commonParams.get('token'),
            "git_revision": true,
            "ajax_request": true,
            "no_debug": true
        },
        function (data) {
            if (typeof data !== 'undefined' && data.success === true) {
                $(data.message).insertAfter('#li_pma_version');
            }
        }
    );
}

/**
 * for libraries/display_change_password.lib.php
 *     libraries/user_password.php
 *
 */

function displayPasswordGenerateButton()
{
    $('#tr_element_before_generate_password').parent().append('<tr class="vmiddle"><td>' + PMA_messages.strGeneratePassword + '</td><td><input type="button" class="button" id="button_generate_password" value="' + PMA_messages.strGenerate + '" onclick="suggestPassword(this.form)" /><input type="text" name="generated_pw" id="generated_pw" /></td></tr>');
    $('#div_element_before_generate_password').parent().append('<div class="item"><label for="button_generate_password">' + PMA_messages.strGeneratePassword + ':</label><span class="options"><input type="button" class="button" id="button_generate_password" value="' + PMA_messages.strGenerate + '" onclick="suggestPassword(this.form)" /></span><input type="text" name="generated_pw" id="generated_pw" /></div>');
}

/*
 * Adds a date/time picker to an element
 *
 * @param object  $this_element   a jQuery object pointing to the element
 */
function PMA_addDatepicker($this_element, type, options)
{
    var showTimepicker = true;
    if (type=="date") {
        showTimepicker = false;
    }

    var defaultOptions = {
        showOn: 'button',
        buttonImage: themeCalendarImage, // defined in js/messages.php
        buttonImageOnly: true,
        stepMinutes: 1,
        stepHours: 1,
        showSecond: true,
        showMillisec: true,
        showMicrosec: true,
        showTimepicker: showTimepicker,
        showButtonPanel: false,
        dateFormat: 'yy-mm-dd', // yy means year with four digits
        timeFormat: 'HH:mm:ss.lc',
        constrainInput: false,
        altFieldTimeOnly: false,
        showAnim: '',
        beforeShow: function (input, inst) {
            // Remember that we came from the datepicker; this is used
            // in tbl_change.js by verificationsAfterFieldChange()
            $this_element.data('comes_from', 'datepicker');
            if ($(input).closest('.cEdit').length > 0) {
                setTimeout(function () {
                    inst.dpDiv.css({
                        top: 0,
                        left: 0,
                        position: 'relative'
                    });
                }, 0);
            }
            // Fix wrong timepicker z-index, doesn't work without timeout
            setTimeout(function () {
                $('#ui-timepicker-div').css('z-index', $('#ui-datepicker-div').css('z-index'));
            }, 0);
        },
        onSelect: function() {
            $this_element.data('datepicker').inline = true;
        },
        onClose: function (dateText, dp_inst) {
            // The value is no more from the date picker
            $this_element.data('comes_from', '');
        }
    };
    if (type == "datetime" || type == "timestamp") {
        $this_element.datetimepicker($.extend(defaultOptions, options));
    }
    else if (type == "date") {
        $this_element.datetimepicker($.extend(defaultOptions, options));
    }
    else if (type == "time") {
        $this_element.timepicker($.extend(defaultOptions, options));
    }
}

/**
 * selects the content of a given object, f.e. a textarea
 *
 * @param element     object  element of which the content will be selected
 * @param lock        var     variable which holds the lock for this element
 *                              or true, if no lock exists
 * @param only_once   boolean if true this is only done once
 *                              f.e. only on first focus
 */
function selectContent(element, lock, only_once)
{
    if (only_once && only_once_elements[element.name]) {
        return;
    }

    only_once_elements[element.name] = true;

    if (lock) {
        return;
    }

    element.select();
}

/**
 * Displays a confirmation box before submitting a "DROP/DELETE/ALTER" query.
 * This function is called while clicking links
 *
 * @param theLink     object the link
 * @param theSqlQuery object the sql query to submit
 *
 * @return boolean  whether to run the query or not
 */
function confirmLink(theLink, theSqlQuery)
{
    // Confirmation is not required in the configuration file
    // or browser is Opera (crappy js implementation)
    if (PMA_messages.strDoYouReally === '' || typeof(window.opera) != 'undefined') {
        return true;
    }

    var is_confirmed = confirm(PMA_sprintf(PMA_messages.strDoYouReally, theSqlQuery));
    if (is_confirmed) {
        if ($(theLink).hasClass('formLinkSubmit')) {
            var name = 'is_js_confirmed';
            if ($(theLink).attr('href').indexOf('usesubform') != -1) {
                name = 'subform[' + $(theLink).attr('href').substr('#').match(/usesubform\[(\d+)\]/i)[1] + '][is_js_confirmed]';
            }

            $(theLink).parents('form').append('<input type="hidden" name="' + name + '" value="1" />');
        } else if (typeof(theLink.href) != 'undefined') {
            theLink.href += '&is_js_confirmed=1';
        } else if (typeof(theLink.form) != 'undefined') {
            theLink.form.action += '?is_js_confirmed=1';
        }
    }

    return is_confirmed;
} // end of the 'confirmLink()' function

/**
 * Displays an error message if a "DROP DATABASE" statement is submitted
 * while it isn't allowed, else confirms a "DROP/DELETE/ALTER" query before
 * submitting it if required.
 * This function is called by the 'checkSqlQuery()' js function.
 *
 * @param theForm1 object   the form
 * @param sqlQuery1 object  the sql query textarea
 *
 * @return boolean  whether to run the query or not
 *
 * @see     checkSqlQuery()
 */
function confirmQuery(theForm1, sqlQuery1)
{
    // Confirmation is not required in the configuration file
    if (PMA_messages.strDoYouReally === '') {
        return true;
    }

    // "DROP DATABASE" statement isn't allowed
    if (PMA_messages.strNoDropDatabases !== '') {
        var drop_re = new RegExp('(^|;)\\s*DROP\\s+(IF EXISTS\\s+)?DATABASE\\s', 'i');
        if (drop_re.test(sqlQuery1.value)) {
            alert(PMA_messages.strNoDropDatabases);
            theForm1.reset();
            sqlQuery1.focus();
            return false;
        } // end if
    } // end if

    // Confirms a "DROP/DELETE/ALTER/TRUNCATE" statement
    //
    // TODO: find a way (if possible) to use the parser-analyser
    // for this kind of verification
    // For now, I just added a ^ to check for the statement at
    // beginning of expression

    var do_confirm_re_0 = new RegExp('^\\s*DROP\\s+(IF EXISTS\\s+)?(TABLE|DATABASE|PROCEDURE)\\s', 'i');
    var do_confirm_re_1 = new RegExp('^\\s*ALTER\\s+TABLE\\s+((`[^`]+`)|([A-Za-z0-9_$]+))\\s+DROP\\s', 'i');
    var do_confirm_re_2 = new RegExp('^\\s*DELETE\\s+FROM\\s', 'i');
    var do_confirm_re_3 = new RegExp('^\\s*TRUNCATE\\s', 'i');

    if (do_confirm_re_0.test(sqlQuery1.value) ||
        do_confirm_re_1.test(sqlQuery1.value) ||
        do_confirm_re_2.test(sqlQuery1.value) ||
        do_confirm_re_3.test(sqlQuery1.value)) {
        var message;
        if (sqlQuery1.value.length > 100) {
            message = sqlQuery1.value.substr(0, 100) + '\n    ...';
        } else {
            message = sqlQuery1.value;
        }
        var is_confirmed = confirm(PMA_sprintf(PMA_messages.strDoYouReally, message));
        // statement is confirmed -> update the
        // "is_js_confirmed" form field so the confirm test won't be
        // run on the server side and allows to submit the form
        if (is_confirmed) {
            theForm1.elements.is_js_confirmed.value = 1;
            return true;
        }
        // statement is rejected -> do not submit the form
        else {
            window.focus();
            sqlQuery1.focus();
            return false;
        } // end if (handle confirm box result)
    } // end if (display confirm box)

    return true;
} // end of the 'confirmQuery()' function

/**
 * Displays an error message if the user submitted the sql query form with no
 * sql query, else checks for "DROP/DELETE/ALTER" statements
 *
 * @param theForm object the form
 *
 * @return boolean  always false
 *
 * @see     confirmQuery()
 */
function checkSqlQuery(theForm)
{
    // get the textarea element containing the query
    var sqlQuery;
    if (codemirror_editor) {
        codemirror_editor.save();
        sqlQuery = codemirror_editor.getValue();
    } else {
        sqlQuery = theForm.elements.sql_query.value;
    }
    var isEmpty  = 1;
    var space_re = new RegExp('\\s+');
    if (typeof(theForm.elements.sql_file) != 'undefined' &&
            theForm.elements.sql_file.value.replace(space_re, '') !== '') {
        return true;
    }
    if (isEmpty && typeof(theForm.elements.id_bookmark) != 'undefined' &&
            (theForm.elements.id_bookmark.value !== null || theForm.elements.id_bookmark.value !== '') &&
            theForm.elements.id_bookmark.selectedIndex !== 0) {
        return true;
    }
    // Checks for "DROP/DELETE/ALTER" statements
    if (sqlQuery.replace(space_re, '') !== '') {
        return confirmQuery(theForm, sqlQuery);
    }
    theForm.reset();
    isEmpty = 1;

    if (isEmpty) {
        alert(PMA_messages.strFormEmpty);
        codemirror_editor.focus();
        return false;
    }

    return true;
} // end of the 'checkSqlQuery()' function

/**
 * Check if a form's element is empty.
 * An element containing only spaces is also considered empty
 *
 * @param object   the form
 * @param string   the name of the form field to put the focus on
 *
 * @return boolean  whether the form field is empty or not
 */
function emptyCheckTheField(theForm, theFieldName)
{
    var theField = theForm.elements[theFieldName];
    var space_re = new RegExp('\\s+');
    return theField.value.replace(space_re, '') === '';
} // end of the 'emptyCheckTheField()' function

/**
 * Ensures a value submitted in a form is numeric and is in a range
 *
 * @param object   the form
 * @param string   the name of the form field to check
 * @param integer  the minimum authorized value
 * @param integer  the maximum authorized value
 *
 * @return boolean  whether a valid number has been submitted or not
 */
function checkFormElementInRange(theForm, theFieldName, message, min, max)
{
    var theField         = theForm.elements[theFieldName];
    var val              = parseInt(theField.value, 10);

    if (typeof(min) == 'undefined') {
        min = 0;
    }
    if (typeof(max) == 'undefined') {
        max = Number.MAX_VALUE;
    }

    // It's not a number
    if (isNaN(val)) {
        theField.select();
        alert(PMA_messages.strEnterValidNumber);
        theField.focus();
        return false;
    }
    // It's a number but it is not between min and max
    else if (val < min || val > max) {
        theField.select();
        alert(PMA_sprintf(message, val));
        theField.focus();
        return false;
    }
    // It's a valid number
    else {
        theField.value = val;
    }
    return true;

} // end of the 'checkFormElementInRange()' function


function checkTableEditForm(theForm, fieldsCnt)
{
    // TODO: avoid sending a message if user just wants to add a line
    // on the form but has not completed at least one field name

    var atLeastOneField = 0;
    var i, elm, elm2, elm3, val, id;

    for (i = 0; i < fieldsCnt; i++) {
        id = "#field_" + i + "_2";
        elm = $(id);
        val = elm.val();
        if (val == 'VARCHAR' || val == 'CHAR' || val == 'BIT' || val == 'VARBINARY' || val == 'BINARY') {
            elm2 = $("#field_" + i + "_3");
            val = parseInt(elm2.val(), 10);
            elm3 = $("#field_" + i + "_1");
            if (isNaN(val) && elm3.val() !== "") {
                elm2.select();
                alert(PMA_messages.strEnterValidLength);
                elm2.focus();
                return false;
            }
        }

        if (atLeastOneField === 0) {
            id = "field_" + i + "_1";
            if (!emptyCheckTheField(theForm, id)) {
                atLeastOneField = 1;
            }
        }
    }
    if (atLeastOneField === 0) {
        var theField = theForm.elements.field_0_1;
        alert(PMA_messages.strFormEmpty);
        theField.focus();
        return false;
    }

    // at least this section is under jQuery
    var $input = $("input.textfield[name='table']");
    if ($input.val() === "") {
        alert(PMA_messages.strFormEmpty);
        $input.focus();
        return false;
    }

    return true;
} // enf of the 'checkTableEditForm()' function

/**
 * True if last click is to check a row.
 */
var last_click_checked = false;

/**
 * Zero-based index of last clicked row.
 * Used to handle the shift + click event in the code above.
 */
var last_clicked_row = -1;

/**
 * Zero-based index of last shift clicked row.
 */
var last_shift_clicked_row = -1;

var _idleSecondsCounter = 0;
var IncInterval;
var updateTimeout;
AJAX.registerTeardown('functions.js', function () {
    clearTimeout(updateTimeout);
    clearInterval(IncInterval);
    $(document).off('mousemove');
});

AJAX.registerOnload('functions.js', function () {
    document.onclick = function() {
        _idleSecondsCounter = 0;
    };
    $(document).on('mousemove',function() {
        _idleSecondsCounter = 0;
    });
    document.onkeypress = function() {
        _idleSecondsCounter = 0;
    };

    function SetIdleTime() {
        _idleSecondsCounter++;
    }
    function UpdateIdleTime() {
        var href = 'index.php';
        var params = {
                'ajax_request' : true,
                'token' : PMA_commonParams.get('token'),
                'server' : PMA_commonParams.get('server'),
                'db' : PMA_commonParams.get('db'),
                'access_time':_idleSecondsCounter
            };
        $.ajax({
                type: 'POST',
                url: href,
                data: params,
                success: function (data) {
                    if (data.success) {
                        if (PMA_commonParams.get('LoginCookieValidity')-_idleSecondsCounter > 5) {
                            var interval = (PMA_commonParams.get('LoginCookieValidity') - _idleSecondsCounter - 5) * 1000;
                            if (interval > Math.pow(2, 31) - 1) { // max value for setInterval() function
                                interval = Math.pow(2, 31) - 1;
                            }
                            updateTimeout = window.setTimeout(UpdateIdleTime, interval);
                        } else {
                            updateTimeout = window.setTimeout(UpdateIdleTime, 2000);
                        }
                    } else { //timeout occurred
                        window.location.reload(true);
                        clearInterval(IncInterval);
                    }
                }
            });
    }
    if (PMA_commonParams.get('logged_in') && PMA_commonParams.get('auth_type') == 'cookie') {
        IncInterval = window.setInterval(SetIdleTime, 1000);
        var interval = (PMA_commonParams.get('LoginCookieValidity') - 5) * 1000;
        if (interval > Math.pow(2, 31) - 1) { // max value for setInterval() function
            interval = Math.pow(2, 31) - 1;
        }
        updateTimeout = window.setTimeout(UpdateIdleTime, interval);
    }
});
/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $(document).off('click', 'input:checkbox.checkall');
});
AJAX.registerOnload('functions.js', function () {
    /**
     * Row marking in horizontal mode (use "on" so that it works also for
     * next pages reached via AJAX); a tr may have the class noclick to remove
     * this behavior.
     */

    $(document).on('click', 'input:checkbox.checkall', function (e) {
        $this = $(this);
        var $tr = $this.closest('tr');
        var $table = $this.closest('table');

        if (!e.shiftKey || last_clicked_row == -1) {
            // usual click

            var $checkbox = $tr.find(':checkbox.checkall');
            var checked = $this.prop('checked');
            $checkbox.prop('checked', checked).trigger('change');
            if (checked) {
                $tr.addClass('marked');
            } else {
                $tr.removeClass('marked');
            }
            last_click_checked = checked;

            // remember the last clicked row
            last_clicked_row = last_click_checked ? $table.find('tr.odd:not(.noclick), tr.even:not(.noclick)').index($tr) : -1;
            last_shift_clicked_row = -1;
        } else {
            // handle the shift click
            PMA_clearSelection();
            var start, end;

            // clear last shift click result
            if (last_shift_clicked_row >= 0) {
                if (last_shift_clicked_row >= last_clicked_row) {
                    start = last_clicked_row;
                    end = last_shift_clicked_row;
                } else {
                    start = last_shift_clicked_row;
                    end = last_clicked_row;
                }
                $tr.parent().find('tr.odd:not(.noclick), tr.even:not(.noclick)')
                    .slice(start, end + 1)
                    .removeClass('marked')
                    .find(':checkbox')
                    .prop('checked', false)
                    .trigger('change');
            }

            // handle new shift click
            var curr_row = $table.find('tr.odd:not(.noclick), tr.even:not(.noclick)').index($tr);
            if (curr_row >= last_clicked_row) {
                start = last_clicked_row;
                end = curr_row;
            } else {
                start = curr_row;
                end = last_clicked_row;
            }
            $tr.parent().find('tr.odd:not(.noclick), tr.even:not(.noclick)')
                .slice(start, end + 1)
                .addClass('marked')
                .find(':checkbox')
                .prop('checked', true)
                .trigger('change');

            // remember the last shift clicked row
            last_shift_clicked_row = curr_row;
        }
    });

    addDateTimePicker();

    /**
     * Add attribute to text boxes for iOS devices (based on bugID: 3508912)
     */
    if (navigator.userAgent.match(/(iphone|ipod|ipad)/i)) {
        $('input[type=text]').attr('autocapitalize', 'off').attr('autocorrect', 'off');
    }
});

/**
 * Row highlighting in horizontal mode (use "on"
 * so that it works also for pages reached via AJAX)
 */
/*AJAX.registerOnload('functions.js', function () {
    $(document).on('hover', 'tr.odd, tr.even',function (event) {
        var $tr = $(this);
        $tr.toggleClass('hover',event.type=='mouseover');
        $tr.children().toggleClass('hover',event.type=='mouseover');
    });
})*/

/**
 * This array is used to remember mark status of rows in browse mode
 */
var marked_row = [];

/**
 * marks all rows and selects its first checkbox inside the given element
 * the given element is usually a table or a div containing the table or tables
 *
 * @param container    DOM element
 */
function markAllRows(container_id)
{

    $("#" + container_id).find("input:checkbox:enabled").prop('checked', true)
    .trigger("change")
    .parents("tr").addClass("marked");
    return true;
}

/**
 * marks all rows and selects its first checkbox inside the given element
 * the given element is usually a table or a div containing the table or tables
 *
 * @param container    DOM element
 */
function unMarkAllRows(container_id)
{

    $("#" + container_id).find("input:checkbox:enabled").prop('checked', false)
    .trigger("change")
    .parents("tr").removeClass("marked");
    return true;
}

/**
 * Checks/unchecks all checkbox in given container (f.e. a form, fieldset or div)
 *
 * @param string   container_id  the container id
 * @param boolean  state         new value for checkbox (true or false)
 * @return boolean  always true
 */
function setCheckboxes(container_id, state)
{

    $("#" + container_id).find("input:checkbox").prop('checked', state);
    return true;
} // end of the 'setCheckboxes()' function

/**
  * Checks/unchecks all options of a <select> element
  *
  * @param string   the form name
  * @param string   the element name
  * @param boolean  whether to check or to uncheck options
  *
  * @return boolean  always true
  */
function setSelectOptions(the_form, the_select, do_check)
{
    $("form[name='" + the_form + "'] select[name='" + the_select + "']").find("option").prop('selected', do_check);
    return true;
} // end of the 'setSelectOptions()' function

/**
 * Sets current value for query box.
 */
function setQuery(query)
{
    if (codemirror_editor) {
        codemirror_editor.setValue(query);
        codemirror_editor.focus();
    } else {
        document.sqlform.sql_query.value = query;
        document.sqlform.sql_query.focus();
    }
}

/**
 * Handles 'Simulate query' button on SQL query box.
 *
 * @return void
 */
function PMA_handleSimulateQueryButton()
{
    var update_re = new RegExp('^\\s*UPDATE\\s+((`[^`]+`)|([A-Za-z0-9_$]+))\\s+SET\\s', 'i');
    var delete_re = new RegExp('^\\s*DELETE\\s+FROM\\s', 'i');
    var query = '';

    if (codemirror_editor) {
        query = codemirror_editor.getValue();
    } else {
        query = $('#sqlquery').val();
    }

    var $simulateDml = $('#simulate_dml');
    if (update_re.test(query) || delete_re.test(query)) {
        if (! $simulateDml.length) {
            $('#button_submit_query')
            .before('<input type="button" id="simulate_dml"' +
                'tabindex="199" value="' +
                PMA_messages.strSimulateDML +
                '" />');
        }
    } else {
        if ($simulateDml.length) {
            $simulateDml.remove();
        }
    }
}

/**
  * Create quick sql statements.
  *
  */
function insertQuery(queryType)
{
    if (queryType == "clear") {
        setQuery('');
        return;
    } else if (queryType == "format") {
        if (codemirror_editor) {
            $('#querymessage').html(PMA_messages.strFormatting +
                '&nbsp;<img class="ajaxIcon" src="' +
                pmaThemeImage + 'ajax_clock_small.gif" alt="">');
            var href = 'db_sql_format.php';
            var params = {
                'ajax_request': true,
                'token': PMA_commonParams.get('token'),
                'sql': codemirror_editor.getValue()
            };
            $.ajax({
                type: 'POST',
                url: href,
                data: params,
                success: function (data) {
                    if (data.success) {
                        codemirror_editor.setValue(data.sql);
                    }
                    $('#querymessage').html('');
                }
            });
        }
        return;
    } else if (queryType == "saved") {
        if ($.cookie('auto_saved_sql')) {
            setQuery($.cookie('auto_saved_sql'));
        } else {
            PMA_ajaxShowMessage(PMA_messages.strNoAutoSavedQuery);
        }
        return;
    }

    var query = "";
    var myListBox = document.sqlform.dummy;
    var table = document.sqlform.table.value;

    if (myListBox.options.length > 0) {
        sql_box_locked = true;
        var columnsList = "";
        var valDis = "";
        var editDis = "";
        var NbSelect = 0;
        for (var i = 0; i < myListBox.options.length; i++) {
            NbSelect++;
            if (NbSelect > 1) {
                columnsList += ", ";
                valDis += ",";
                editDis += ",";
            }
            columnsList += myListBox.options[i].value;
            valDis += "[value-" + NbSelect + "]";
            editDis += myListBox.options[i].value + "=[value-" + NbSelect + "]";
        }
        if (queryType == "selectall") {
            query = "SELECT * FROM `" + table + "` WHERE 1";
        } else if (queryType == "select") {
            query = "SELECT " + columnsList + " FROM `" + table + "` WHERE 1";
        } else if (queryType == "insert") {
            query = "INSERT INTO `" + table + "`(" + columnsList + ") VALUES (" + valDis + ")";
        } else if (queryType == "update") {
            query = "UPDATE `" + table + "` SET " + editDis + " WHERE 1";
        } else if (queryType == "delete") {
            query = "DELETE FROM `" + table + "` WHERE 1";
        }
        setQuery(query);
        sql_box_locked = false;
    }
}


/**
  * Inserts multiple fields.
  *
  */
function insertValueQuery()
{
    var myQuery = document.sqlform.sql_query;
    var myListBox = document.sqlform.dummy;

    if (myListBox.options.length > 0) {
        sql_box_locked = true;
        var columnsList = "";
        var NbSelect = 0;
        for (var i = 0; i < myListBox.options.length; i++) {
            if (myListBox.options[i].selected) {
                NbSelect++;
                if (NbSelect > 1) {
                    columnsList += ", ";
                }
                columnsList += myListBox.options[i].value;
            }
        }

        /* CodeMirror support */
        if (codemirror_editor) {
            codemirror_editor.replaceSelection(columnsList);
        //IE support
        } else if (document.selection) {
            myQuery.focus();
            var sel = document.selection.createRange();
            sel.text = columnsList;
            document.sqlform.insert.focus();
        }
        //MOZILLA/NETSCAPE support
        else if (document.sqlform.sql_query.selectionStart || document.sqlform.sql_query.selectionStart == "0") {
            var startPos = document.sqlform.sql_query.selectionStart;
            var endPos = document.sqlform.sql_query.selectionEnd;
            var SqlString = document.sqlform.sql_query.value;

            myQuery.value = SqlString.substring(0, startPos) + columnsList + SqlString.substring(endPos, SqlString.length);
        } else {
            myQuery.value += columnsList;
        }
        sql_box_locked = false;
    }
}

/**
 * Updates the input fields for the parameters based on the query
 */
function updateQueryParameters() {

    if ($('#parameterized').is(':checked')) {
        var query = codemirror_editor ? codemirror_editor.getValue() : $('#sqlquery').val();

        var allParameters = query.match(/:[a-zA-Z0-9_]+/g);
         var parameters = [];
         // get unique parameters
         if (allParameters) {
             $.each(allParameters, function(i, parameter){
                 if ($.inArray(parameter, parameters) === -1) {
                     parameters.push(parameter);
                 }
             });
         }

         var $temp = $('<div />');
         $temp.append($('#parametersDiv').children());
         $('#parametersDiv').empty();

         $.each(parameters, function (i, parameter) {
             var paramName = parameter.substring(1);
             var $param = $temp.find('#paramSpan_' + paramName );
             if (! $param.length) {
                 $param = $('<span class="parameter" id="paramSpan_' + paramName + '" />');
                 $('<label for="param_' + paramName + '" />').text(parameter).appendTo($param);
                 $('<input type="text" name="parameters[' + parameter + ']" id="param_' + paramName + '" />').appendTo($param);
             }
             $('#parametersDiv').append($param);
         });
    } else {
        $('#parametersDiv').empty();
    }
}

/**
 * Add a date/time picker to each element that needs it
 * (only when jquery-ui-timepicker-addon.js is loaded)
 */
function addDateTimePicker() {
    if ($.timepicker !== undefined) {
        $('input.timefield, input.datefield, input.datetimefield').each(function () {

            var decimals = $(this).parent().attr('data-decimals');
            var type = $(this).parent().attr('data-type');

            var showMillisec = false;
            var showMicrosec = false;
            var timeFormat = 'HH:mm:ss';
            // check for decimal places of seconds
            if (decimals > 0 && type.indexOf('time') != -1){
                if (decimals > 3) {
                    showMillisec = true;
                    showMicrosec = true;
                    timeFormat = 'HH:mm:ss.lc';
                } else {
                    showMillisec = true;
                    timeFormat = 'HH:mm:ss.l';
                }
            }
            PMA_addDatepicker($(this), type, {
                showMillisec: showMillisec,
                showMicrosec: showMicrosec,
                timeFormat: timeFormat
            });
        });
    }
}

/**
  * Refresh/resize the WYSIWYG scratchboard
  */
function refreshLayout()
{
    var $elm = $('#pdflayout');
    var orientation = $('#orientation_opt').val();
    var paper = 'A4';
    var $paperOpt = $('#paper_opt');
    if ($paperOpt.length == 1) {
        paper = $paperOpt.val();
    }
    var posa = 'y';
    var posb = 'x';
    if (orientation == 'P') {
        posa = 'x';
        posb = 'y';
    }
    $elm.css('width', pdfPaperSize(paper, posa) + 'px');
    $elm.css('height', pdfPaperSize(paper, posb) + 'px');
}

/**
 * Initializes positions of elements.
 */
function TableDragInit() {
    $('.pdflayout_table').each(function () {
        var $this = $(this);
        var number = $this.data('number');
        var x = $('#c_table_' + number + '_x').val();
        var y = $('#c_table_' + number + '_y').val();
        $this.css('left', x + 'px');
        $this.css('top', y + 'px');
        /* Make elements draggable */
        $this.draggable({
            containment: "parent",
            drag: function (evt, ui) {
                var number = $this.data('number');
                $('#c_table_' + number + '_x').val(parseInt(ui.position.left, 10));
                $('#c_table_' + number + '_y').val(parseInt(ui.position.top, 10));
            }
        });
    });
}

/**
 * Resets drag and drop positions.
 */
function resetDrag() {
    $('.pdflayout_table').each(function () {
        var $this = $(this);
        var x = $this.data('x');
        var y = $this.data('y');
        $this.css('left', x + 'px');
        $this.css('top', y + 'px');
    });
}

/**
 * User schema handlers.
 */
$(function () {
    /* Move in scratchboard on manual change */
    $(document).on('change', '.position-change', function () {
        var $this = $(this);
        var $elm = $('#table_' + $this.data('number'));
        $elm.css($this.data('axis'), $this.val() + 'px');
    });
    /* Refresh on paper size/orientation change */
    $(document).on('change', '.paper-change', function () {
        var $elm = $('#pdflayout');
        if ($elm.css('visibility') == 'visible') {
            refreshLayout();
            TableDragInit();
        }
    });
    /* Show/hide the WYSIWYG scratchboard */
    $(document).on('click', '#toggle-dragdrop', function () {
        var $elm = $('#pdflayout');
        if ($elm.css('visibility') == 'hidden') {
            refreshLayout();
            TableDragInit();
            $elm.css('visibility', 'visible');
            $elm.css('display', 'block');
            $('#showwysiwyg').val('1');
        } else {
            $elm.css('visibility', 'hidden');
            $elm.css('display', 'none');
            $('#showwysiwyg').val('0');
        }
    });
    /* Reset scratchboard */
    $(document).on('click', '#reset-dragdrop', function () {
        resetDrag();
    });
});

/**
 * Returns paper sizes for a given format
 */
function pdfPaperSize(format, axis)
{
    switch (format.toUpperCase()) {
    case '4A0':
        if (axis == 'x') {
            return 4767.87;
        } else {
            return 6740.79;
        }
        break;
    case '2A0':
        if (axis == 'x') {
            return 3370.39;
        } else {
            return 4767.87;
        }
        break;
    case 'A0':
        if (axis == 'x') {
            return 2383.94;
        } else {
            return 3370.39;
        }
        break;
    case 'A1':
        if (axis == 'x') {
            return 1683.78;
        } else {
            return 2383.94;
        }
        break;
    case 'A2':
        if (axis == 'x') {
            return 1190.55;
        } else {
            return 1683.78;
        }
        break;
    case 'A3':
        if (axis == 'x') {
            return 841.89;
        } else {
            return 1190.55;
        }
        break;
    case 'A4':
        if (axis == 'x') {
            return 595.28;
        } else {
            return 841.89;
        }
        break;
    case 'A5':
        if (axis == 'x') {
            return 419.53;
        } else {
            return 595.28;
        }
        break;
    case 'A6':
        if (axis == 'x') {
            return 297.64;
        } else {
            return 419.53;
        }
        break;
    case 'A7':
        if (axis == 'x') {
            return 209.76;
        } else {
            return 297.64;
        }
        break;
    case 'A8':
        if (axis == 'x') {
            return 147.40;
        } else {
            return 209.76;
        }
        break;
    case 'A9':
        if (axis == 'x') {
            return 104.88;
        } else {
            return 147.40;
        }
        break;
    case 'A10':
        if (axis == 'x') {
            return 73.70;
        } else {
            return 104.88;
        }
        break;
    case 'B0':
        if (axis == 'x') {
            return 2834.65;
        } else {
            return 4008.19;
        }
        break;
    case 'B1':
        if (axis == 'x') {
            return 2004.09;
        } else {
            return 2834.65;
        }
        break;
    case 'B2':
        if (axis == 'x') {
            return 1417.32;
        } else {
            return 2004.09;
        }
        break;
    case 'B3':
        if (axis == 'x') {
            return 1000.63;
        } else {
            return 1417.32;
        }
        break;
    case 'B4':
        if (axis == 'x') {
            return 708.66;
        } else {
            return 1000.63;
        }
        break;
    case 'B5':
        if (axis == 'x') {
            return 498.90;
        } else {
            return 708.66;
        }
        break;
    case 'B6':
        if (axis == 'x') {
            return 354.33;
        } else {
            return 498.90;
        }
        break;
    case 'B7':
        if (axis == 'x') {
            return 249.45;
        } else {
            return 354.33;
        }
        break;
    case 'B8':
        if (axis == 'x') {
            return 175.75;
        } else {
            return 249.45;
        }
        break;
    case 'B9':
        if (axis == 'x') {
            return 124.72;
        } else {
            return 175.75;
        }
        break;
    case 'B10':
        if (axis == 'x') {
            return 87.87;
        } else {
            return 124.72;
        }
        break;
    case 'C0':
        if (axis == 'x') {
            return 2599.37;
        } else {
            return 3676.54;
        }
        break;
    case 'C1':
        if (axis == 'x') {
            return 1836.85;
        } else {
            return 2599.37;
        }
        break;
    case 'C2':
        if (axis == 'x') {
            return 1298.27;
        } else {
            return 1836.85;
        }
        break;
    case 'C3':
        if (axis == 'x') {
            return 918.43;
        } else {
            return 1298.27;
        }
        break;
    case 'C4':
        if (axis == 'x') {
            return 649.13;
        } else {
            return 918.43;
        }
        break;
    case 'C5':
        if (axis == 'x') {
            return 459.21;
        } else {
            return 649.13;
        }
        break;
    case 'C6':
        if (axis == 'x') {
            return 323.15;
        } else {
            return 459.21;
        }
        break;
    case 'C7':
        if (axis == 'x') {
            return 229.61;
        } else {
            return 323.15;
        }
        break;
    case 'C8':
        if (axis == 'x') {
            return 161.57;
        } else {
            return 229.61;
        }
        break;
    case 'C9':
        if (axis == 'x') {
            return 113.39;
        } else {
            return 161.57;
        }
        break;
    case 'C10':
        if (axis == 'x') {
            return 79.37;
        } else {
            return 113.39;
        }
        break;
    case 'RA0':
        if (axis == 'x') {
            return 2437.80;
        } else {
            return 3458.27;
        }
        break;
    case 'RA1':
        if (axis == 'x') {
            return 1729.13;
        } else {
            return 2437.80;
        }
        break;
    case 'RA2':
        if (axis == 'x') {
            return 1218.90;
        } else {
            return 1729.13;
        }
        break;
    case 'RA3':
        if (axis == 'x') {
            return 864.57;
        } else {
            return 1218.90;
        }
        break;
    case 'RA4':
        if (axis == 'x') {
            return 609.45;
        } else {
            return 864.57;
        }
        break;
    case 'SRA0':
        if (axis == 'x') {
            return 2551.18;
        } else {
            return 3628.35;
        }
        break;
    case 'SRA1':
        if (axis == 'x') {
            return 1814.17;
        } else {
            return 2551.18;
        }
        break;
    case 'SRA2':
        if (axis == 'x') {
            return 1275.59;
        } else {
            return 1814.17;
        }
        break;
    case 'SRA3':
        if (axis == 'x') {
            return 907.09;
        } else {
            return 1275.59;
        }
        break;
    case 'SRA4':
        if (axis == 'x') {
            return 637.80;
        } else {
            return 907.09;
        }
        break;
    case 'LETTER':
        if (axis == 'x') {
            return 612.00;
        } else {
            return 792.00;
        }
        break;
    case 'LEGAL':
        if (axis == 'x') {
            return 612.00;
        } else {
            return 1008.00;
        }
        break;
    case 'EXECUTIVE':
        if (axis == 'x') {
            return 521.86;
        } else {
            return 756.00;
        }
        break;
    case 'FOLIO':
        if (axis == 'x') {
            return 612.00;
        } else {
            return 936.00;
        }
        break;
    } // end switch

    return 0;
}

/**
 * Get checkbox for foreign key checks
 *
 * @return string
 */
function getForeignKeyCheckboxLoader() {
    var html = '';
    html    += '<div>';
    html    += '<div class="load-default-fk-check-value">';
    html    += PMA_getImage('ajax_clock_small.gif');
    html    += '</div>';
    html    += '</div>';
    return html;
}

function loadForeignKeyCheckbox() {
    // Load default foreign key check value
    var params = {
        'ajax_request': true,
        'token': PMA_commonParams.get('token'),
        'server': PMA_commonParams.get('server'),
        'get_default_fk_check_value': true
    };
    $.get('sql.php', params, function (data) {
        var html = '<input type="hidden" name="fk_checks" value="0" />' +
            '<input type="checkbox" name="fk_checks" id="fk_checks"' +
            (data.default_fk_check_value ? ' checked="checked"' : '') + ' />' +
            '<label for="fk_checks">' + PMA_messages.strForeignKeyCheck + '</label>';
        $('.load-default-fk-check-value').replaceWith(html);
    });
}

function getJSConfirmCommonParam(elem) {
    return {
        'is_js_confirmed' : 1,
        'ajax_request' : true,
        'fk_checks': $(elem).find('#fk_checks').is(':checked') ? 1 : 0
    };
}

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $(document).off('click', "a.inline_edit_sql");
    $(document).off('click', "input#sql_query_edit_save");
    $(document).off('click', "input#sql_query_edit_discard");
    $('input.sqlbutton').unbind('click');
    if (codemirror_editor) {
        codemirror_editor.off('blur');
    } else {
        $(document).off('blur', '#sqlquery');
    }
    $(document).off('change', '#parameterized');
    $('#sqlquery').unbind('keydown');
    $('#sql_query_edit').unbind('keydown');

    if (codemirror_inline_editor) {
        // Copy the sql query to the text area to preserve it.
        $('#sql_query_edit').text(codemirror_inline_editor.getValue());
        $(codemirror_inline_editor.getWrapperElement()).unbind('keydown');
        codemirror_inline_editor.toTextArea();
        codemirror_inline_editor = false;
    }
    if (codemirror_editor) {
        $(codemirror_editor.getWrapperElement()).unbind('keydown');
    }
});

/**
 * Jquery Coding for inline editing SQL_QUERY
 */
AJAX.registerOnload('functions.js', function () {
    // If we are coming back to the page by clicking forward button
    // of the browser, bind the code mirror to inline query editor.
    bindCodeMirrorToInlineEditor();
    $(document).on('click', "a.inline_edit_sql", function () {
        if ($('#sql_query_edit').length) {
            // An inline query editor is already open,
            // we don't want another copy of it
            return false;
        }

        var $form = $(this).prev('form');
        var sql_query  = $form.find("input[name='sql_query']").val().trim();
        var $inner_sql = $(this).parent().prev().find('code.sql');
        var old_text   = $inner_sql.html();

        var new_content = "<textarea name=\"sql_query_edit\" id=\"sql_query_edit\">" + sql_query + "</textarea>\n";
        new_content    += getForeignKeyCheckboxLoader();
        new_content    += "<input type=\"submit\" id=\"sql_query_edit_save\" class=\"button btnSave\" value=\"" + PMA_messages.strGo + "\"/>\n";
        new_content    += "<input type=\"button\" id=\"sql_query_edit_discard\" class=\"button btnDiscard\" value=\"" + PMA_messages.strCancel + "\"/>\n";
        var $editor_area = $('div#inline_editor');
        if ($editor_area.length === 0) {
            $editor_area = $('<div id="inline_editor_outer"></div>');
            $editor_area.insertBefore($inner_sql);
        }
        $editor_area.html(new_content);
        loadForeignKeyCheckbox();
        $inner_sql.hide();

        bindCodeMirrorToInlineEditor();
        return false;
    });

    $(document).on('click', "input#sql_query_edit_save", function () {
        $(".success").hide();
        //hide already existing success message
        var sql_query;
        if (codemirror_inline_editor) {
            codemirror_inline_editor.save();
            sql_query = codemirror_inline_editor.getValue();
        } else {
            sql_query = $(this).parent().find('#sql_query_edit').val();
        }
        var fk_check = $(this).parent().find('#fk_checks').is(':checked');

        var $form = $("a.inline_edit_sql").prev('form');
        var $fake_form = $('<form>', {action: 'import.php', method: 'post'})
                .append($form.find("input[name=server], input[name=db], input[name=table], input[name=token]").clone())
                .append($('<input/>', {type: 'hidden', name: 'show_query', value: 1}))
                .append($('<input/>', {type: 'hidden', name: 'is_js_confirmed', value: 0}))
                .append($('<input/>', {type: 'hidden', name: 'sql_query', value: sql_query}))
                .append($('<input/>', {type: 'hidden', name: 'fk_checks', value: fk_check ? 1 : 0}));
        if (! checkSqlQuery($fake_form[0])) {
            return false;
        }
        $fake_form.appendTo($('body')).submit();
    });

    $(document).on('click', "input#sql_query_edit_discard", function () {
        var $divEditor = $('div#inline_editor_outer');
        $divEditor.siblings('code.sql').show();
        $divEditor.remove();
    });

    $('input.sqlbutton').click(function (evt) {
        insertQuery(evt.target.id);
        PMA_handleSimulateQueryButton();
        return false;
    });

    $(document).on('change', '#parameterized', updateQueryParameters);

    var $inputUsername = $('#input_username');
    if ($inputUsername) {
        if ($inputUsername.val() === '') {
            $inputUsername.focus();
        } else {
            $('#input_password').focus();
        }
    }
});

/**
 * "inputRead" event handler for CodeMirror SQL query editors for autocompletion
 */
function codemirrorAutocompleteOnInputRead(instance) {
    if (!sql_autocomplete_in_progress
        && (!instance.options.hintOptions.tables || !sql_autocomplete)) {

        if (!sql_autocomplete) {
            // Reset after teardown
            instance.options.hintOptions.tables = false;
            instance.options.hintOptions.defaultTable = '';

            sql_autocomplete_in_progress = true;

            var href = 'db_sql_autocomplete.php';
            var params = {
                'ajax_request': true,
                'token': PMA_commonParams.get('token'),
                'server': PMA_commonParams.get('server'),
                'db': PMA_commonParams.get('db'),
                'no_debug': true
            };

            var columnHintRender = function(elem, self, data) {
                $('<div class="autocomplete-column-name">')
                    .text(data.columnName)
                    .appendTo(elem);
                $('<div class="autocomplete-column-hint">')
                    .text(data.columnHint)
                    .appendTo(elem);
            };

            $.ajax({
                type: 'POST',
                url: href,
                data: params,
                success: function (data) {
                    if (data.success) {
                        var tables = $.parseJSON(data.tables);
                        sql_autocomplete_default_table = PMA_commonParams.get('table');
                        sql_autocomplete = [];
                        for (var table in tables) {
                            if (tables.hasOwnProperty(table)) {
                                var columns = tables[table];
                                table = {
                                    text: table,
                                    columns: []
                                };
                                for (var column in columns) {
                                    if (columns.hasOwnProperty(column)) {
                                        var displayText = columns[column].Type;
                                        if (columns[column].Key == 'PRI') {
                                            displayText += ' | Primary';
                                        } else if (columns[column].Key == 'UNI') {
                                            displayText += ' | Unique';
                                        }
                                        table.columns.push({
                                            text: column,
                                            displayText: column + " | " +  displayText,
                                            columnName: column,
                                            columnHint: displayText,
                                            render: columnHintRender
                                        });
                                    }
                                }
                            }
                            sql_autocomplete.push(table);
                        }
                        instance.options.hintOptions.tables = sql_autocomplete;
                        instance.options.hintOptions.defaultTable = sql_autocomplete_default_table;
                    }
                },
                complete: function () {
                    sql_autocomplete_in_progress = false;
                }
            });
        }
        else {
            instance.options.hintOptions.tables = sql_autocomplete;
            instance.options.hintOptions.defaultTable = sql_autocomplete_default_table;
        }
    }
    if (instance.state.completionActive) {
        return;
    }
    var cur = instance.getCursor();
    var token = instance.getTokenAt(cur);
    var string = '';
    if (token.string.match(/^[.`\w@]\w*$/)) {
        string = token.string;
    }
    if (string.length > 0) {
        CodeMirror.commands.autocomplete(instance);
    }
}

/**
 * Remove autocomplete information before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    sql_autocomplete = false;
    sql_autocomplete_default_table = '';
});

/**
 * Binds the CodeMirror to the text area used to inline edit a query.
 */
function bindCodeMirrorToInlineEditor() {
    var $inline_editor = $('#sql_query_edit');
    if ($inline_editor.length > 0) {
        if (typeof CodeMirror !== 'undefined') {
            var height = $inline_editor.css('height');
            codemirror_inline_editor = PMA_getSQLEditor($inline_editor);
            codemirror_inline_editor.getWrapperElement().style.height = height;
            codemirror_inline_editor.refresh();
            codemirror_inline_editor.focus();
            $(codemirror_inline_editor.getWrapperElement())
                .bind('keydown', catchKeypressesFromSqlTextboxes);
        } else {
            $inline_editor
                .focus()
                .bind('keydown', catchKeypressesFromSqlTextboxes);
        }
    }
}

function catchKeypressesFromSqlTextboxes(event) {
    // ctrl-enter is 10 in chrome and ie, but 13 in ff
    if (event.ctrlKey && (event.keyCode == 13 || event.keyCode == 10)) {
        if ($('#sql_query_edit').length > 0) {
            $("#sql_query_edit_save").trigger('click');
        } else if ($('#sqlquery').length > 0) {
            $("#button_submit_query").trigger('click');
        }
    }
}

/**
 * Adds doc link to single highlighted SQL element
 */
function PMA_doc_add($elm, params)
{
    if (typeof mysql_doc_template == 'undefined') {
        return;
    }

    var url = PMA_sprintf(
        decodeURIComponent(mysql_doc_template),
        params[0]
    );
    if (params.length > 1) {
        url += '#' + params[1];
    }
    var content = $elm.text();
    $elm.text('');
    $elm.append('<a target="mysql_doc" class="cm-sql-doc" href="' + url + '">' + content + '</a>');
}

/**
 * Generates doc links for keywords inside highlighted SQL
 */
function PMA_doc_keyword(idx, elm)
{
    var $elm = $(elm);
    /* Skip already processed ones */
    if ($elm.find('a').length > 0) {
        return;
    }
    var keyword = $elm.text().toUpperCase();
    var $next = $elm.next('.cm-keyword');
    if ($next) {
        var next_keyword = $next.text().toUpperCase();
        var full = keyword + ' ' + next_keyword;

        var $next2 = $next.next('.cm-keyword');
        if ($next2) {
            var next2_keyword = $next2.text().toUpperCase();
            var full2 = full + ' ' + next2_keyword;
            if (full2 in mysql_doc_keyword) {
                PMA_doc_add($elm, mysql_doc_keyword[full2]);
                PMA_doc_add($next, mysql_doc_keyword[full2]);
                PMA_doc_add($next2, mysql_doc_keyword[full2]);
                return;
            }
        }
        if (full in mysql_doc_keyword) {
            PMA_doc_add($elm, mysql_doc_keyword[full]);
            PMA_doc_add($next, mysql_doc_keyword[full]);
            return;
        }
    }
    if (keyword in mysql_doc_keyword) {
        PMA_doc_add($elm, mysql_doc_keyword[keyword]);
    }
}

/**
 * Generates doc links for builtins inside highlighted SQL
 */
function PMA_doc_builtin(idx, elm)
{
    var $elm = $(elm);
    var builtin = $elm.text().toUpperCase();
    if (builtin in mysql_doc_builtin) {
        PMA_doc_add($elm, mysql_doc_builtin[builtin]);
    }
}

/**
 * Higlights SQL using CodeMirror.
 */
function PMA_highlightSQL($base)
{
    var $elm = $base.find('code.sql');
    $elm.each(function () {
        var $sql = $(this);
        var $pre = $sql.find('pre');
        /* We only care about visible elements to avoid double processing */
        if ($pre.is(":visible")) {
            var $highlight = $('<div class="sql-highlight cm-s-default"></div>');
            $sql.append($highlight);
            if (typeof CodeMirror != 'undefined') {
                CodeMirror.runMode($sql.text(), 'text/x-mysql', $highlight[0]);
                $pre.hide();
                $highlight.find('.cm-keyword').each(PMA_doc_keyword);
                $highlight.find('.cm-builtin').each(PMA_doc_builtin);
            }
        }
    });
}

/**
 * Updates an element containing code.
 *
 * @param jQuery Object $base base element which contains the raw and the
 *                            highlighted code.
 *
 * @param string htmlValue    code in HTML format, displayed if code cannot be
 *                            highlighted
 *
 * @param string rawValue     raw code, used as a parameter for highlighter
 *
 * @return bool               whether content was updated or not
 */
function PMA_updateCode($base, htmlValue, rawValue)
{
    var $code = $base.find('code');
    if ($code.length == 0) {
        return false;
    }

    // Determines the type of the content and appropriate CodeMirror mode.
    var type = '', mode = '';
    if  ($code.hasClass('json')) {
        type = 'json';
        mode = 'application/json';
    } else if ($code.hasClass('sql')) {
        type = 'sql';
        mode = 'text/x-mysql';
    } else if ($code.hasClass('xml')) {
        type = 'xml';
        mode = 'application/xml';
    } else {
        return false;
    }

    // Element used to display unhighlighted code.
    var $notHighlighted = $('<pre>' + htmlValue + '</pre>');

    // Tries to highlight code using CodeMirror.
    if (typeof CodeMirror != 'undefined') {
        var $highlighted = $('<div class="' + type + '-highlight cm-s-default"></div>');
        CodeMirror.runMode(rawValue, mode, $highlighted[0]);
        $notHighlighted.hide();
        $code.html('').append($notHighlighted, $highlighted[0]);
    } else {
        $code.html('').append($notHighlighted);
    }

    return true;
}

/**
 * Show a message on the top of the page for an Ajax request
 *
 * Sample usage:
 *
 * 1) var $msg = PMA_ajaxShowMessage();
 * This will show a message that reads "Loading...". Such a message will not
 * disappear automatically and cannot be dismissed by the user. To remove this
 * message either the PMA_ajaxRemoveMessage($msg) function must be called or
 * another message must be show with PMA_ajaxShowMessage() function.
 *
 * 2) var $msg = PMA_ajaxShowMessage(PMA_messages.strProcessingRequest);
 * This is a special case. The behaviour is same as above,
 * just with a different message
 *
 * 3) var $msg = PMA_ajaxShowMessage('The operation was successful');
 * This will show a message that will disappear automatically and it can also
 * be dismissed by the user.
 *
 * 4) var $msg = PMA_ajaxShowMessage('Some error', false);
 * This will show a message that will not disappear automatically, but it
 * can be dismissed by the user after he has finished reading it.
 *
 * @param string  message     string containing the message to be shown.
 *                              optional, defaults to 'Loading...'
 * @param mixed   timeout     number of milliseconds for the message to be visible
 *                              optional, defaults to 5000. If set to 'false', the
 *                              notification will never disappear
 * @return jQuery object       jQuery Element that holds the message div
 *                              this object can be passed to PMA_ajaxRemoveMessage()
 *                              to remove the notification
 */
function PMA_ajaxShowMessage(message, timeout)
{
    /**
     * @var self_closing Whether the notification will automatically disappear
     */
    var self_closing = true;
    /**
     * @var dismissable Whether the user will be able to remove
     *                  the notification by clicking on it
     */
    var dismissable = true;
    // Handle the case when a empty data.message is passed.
    // We don't want the empty message
    if (message === '') {
        return true;
    } else if (! message) {
        // If the message is undefined, show the default
        message = PMA_messages.strLoading;
        dismissable = false;
        self_closing = false;
    } else if (message == PMA_messages.strProcessingRequest) {
        // This is another case where the message should not disappear
        dismissable = false;
        self_closing = false;
    }
    // Figure out whether (or after how long) to remove the notification
    if (timeout === undefined) {
        timeout = 5000;
    } else if (timeout === false) {
        self_closing = false;
    }
    // Create a parent element for the AJAX messages, if necessary
    if ($('#loading_parent').length === 0) {
        $('<div id="loading_parent"></div>')
        .prependTo("#page_content");
    }
    // Update message count to create distinct message elements every time
    ajax_message_count++;
    // Remove all old messages, if any
    $("span.ajax_notification[id^=ajax_message_num]").remove();
    /**
     * @var    $retval    a jQuery object containing the reference
     *                    to the created AJAX message
     */
    var $retval = $(
            '<span class="ajax_notification" id="ajax_message_num_' +
            ajax_message_count +
            '"></span>'
    )
    .hide()
    .appendTo("#loading_parent")
    .html(message)
    .show();
    // If the notification is self-closing we should create a callback to remove it
    if (self_closing) {
        $retval
        .delay(timeout)
        .fadeOut('medium', function () {
            if ($(this).is(':data(tooltip)')) {
                $(this).tooltip('destroy');
            }
            // Remove the notification
            $(this).remove();
        });
    }
    // If the notification is dismissable we need to add the relevant class to it
    // and add a tooltip so that the users know that it can be removed
    if (dismissable) {
        $retval.addClass('dismissable').css('cursor', 'pointer');
        /**
         * Add a tooltip to the notification to let the user know that (s)he
         * can dismiss the ajax notification by clicking on it.
         */
        PMA_tooltip(
            $retval,
            'span',
            PMA_messages.strDismiss
        );
    }
    PMA_highlightSQL($retval);

    return $retval;
}

/**
 * Removes the message shown for an Ajax operation when it's completed
 *
 * @param jQuery object   jQuery Element that holds the notification
 *
 * @return nothing
 */
function PMA_ajaxRemoveMessage($this_msgbox)
{
    if ($this_msgbox !== undefined && $this_msgbox instanceof jQuery) {
        $this_msgbox
        .stop(true, true)
        .fadeOut('medium');
        if ($this_msgbox.is(':data(tooltip)')) {
            $this_msgbox.tooltip('destroy');
        } else {
            $this_msgbox.remove();
        }
    }
}

/**
 * Requests SQL for previewing before executing.
 *
 * @param jQuery Object $form Form containing query data
 *
 * @return void
 */
function PMA_previewSQL($form)
{
    var form_url = $form.attr('action');
    var form_data = $form.serialize() +
        '&do_save_data=1' +
        '&preview_sql=1' +
        '&ajax_request=1';
    var $msgbox = PMA_ajaxShowMessage();
    $.ajax({
        type: 'POST',
        url: form_url,
        data: form_data,
        success: function (response) {
            PMA_ajaxRemoveMessage($msgbox);
            if (response.success) {
                var $dialog_content = $('<div/>')
                    .append(response.sql_data);
                var button_options = {};
                button_options[PMA_messages.strClose] = function () {
                    $(this).dialog('close');
                };
                var $response_dialog = $dialog_content.dialog({
                    minWidth: 550,
                    maxHeight: 400,
                    modal: true,
                    buttons: button_options,
                    title: PMA_messages.strPreviewSQL,
                    close: function () {
                        $(this).remove();
                    },
                    open: function () {
                        // Pretty SQL printing.
                        PMA_highlightSQL($(this));
                    }
                });
            } else {
                PMA_ajaxShowMessage(response.message);
            }
        },
        error: function () {
            PMA_ajaxShowMessage(PMA_messages.strErrorProcessingRequest);
        }
    });
}

/**
 * check for reserved keyword column name
 *
 * @param jQuery Object $form Form
 *
 * @returns true|false
 */

function PMA_checkReservedWordColumns($form) {
    var is_confirmed = true;
    $.ajax({
        type: 'POST',
        url: "tbl_structure.php",
        data: $form.serialize() + '&reserved_word_check=1',
        success: function (data) {
            if (typeof data.success != 'undefined' && data.success === true) {
                is_confirmed = confirm(data.message);
            }
        },
        async:false
    });
    return is_confirmed;
}

// This event only need to be fired once after the initial page load
$(function () {
    /**
     * Allows the user to dismiss a notification
     * created with PMA_ajaxShowMessage()
     */
    $(document).on('click', 'span.ajax_notification.dismissable', function () {
        PMA_ajaxRemoveMessage($(this));
    });
    /**
     * The below two functions hide the "Dismiss notification" tooltip when a user
     * is hovering a link or button that is inside an ajax message
     */
    $(document).on('mouseover', 'span.ajax_notification a, span.ajax_notification button, span.ajax_notification input', function () {
        if ($(this).parents('span.ajax_notification').is(':data(tooltip)')) {
            $(this).parents('span.ajax_notification').tooltip('disable');
        }
    });
    $(document).on('mouseout', 'span.ajax_notification a, span.ajax_notification button, span.ajax_notification input', function () {
        if ($(this).parents('span.ajax_notification').is(':data(tooltip)')) {
            $(this).parents('span.ajax_notification').tooltip('enable');
        }
    });
});

/**
 * Hides/shows the "Open in ENUM/SET editor" message, depending on the data type of the column currently selected
 */
function PMA_showNoticeForEnum(selectElement)
{
    var enum_notice_id = selectElement.attr("id").split("_")[1];
    enum_notice_id += "_" + (parseInt(selectElement.attr("id").split("_")[2], 10) + 1);
    var selectedType = selectElement.val();
    if (selectedType == "ENUM" || selectedType == "SET") {
        $("p#enum_notice_" + enum_notice_id).show();
    } else {
        $("p#enum_notice_" + enum_notice_id).hide();
    }
}

/*
 * Creates a Profiling Chart with jqplot. Used in sql.js
 * and in server_status_monitor.js
 */
function PMA_createProfilingChartJqplot(target, data)
{
    return $.jqplot(target, [data],
        {
            seriesDefaults: {
                renderer: $.jqplot.PieRenderer,
                rendererOptions: {
                    showDataLabels:  true
                }
            },
            highlighter: {
                show: true,
                tooltipLocation: 'se',
                sizeAdjust: 0,
                tooltipAxes: 'pieref',
                useAxesFormatters: false,
                formatString: '%s, %.9Ps'
            },
            legend: {
                show: true,
                location: 'e',
                rendererOptions: {numberColumns: 2}
            },
            // from http://tango.freedesktop.org/Tango_Icon_Theme_Guidelines#Color_Palette
            seriesColors: [
                '#fce94f',
                '#fcaf3e',
                '#e9b96e',
                '#8ae234',
                '#729fcf',
                '#ad7fa8',
                '#ef2929',
                '#eeeeec',
                '#888a85',
                '#c4a000',
                '#ce5c00',
                '#8f5902',
                '#4e9a06',
                '#204a87',
                '#5c3566',
                '#a40000',
                '#babdb6',
                '#2e3436'
            ]
        }
    );
}

/**
 * Formats a profiling duration nicely (in us and ms time).
 * Used in server_status_monitor.js
 *
 * @param  integer    Number to be formatted, should be in the range of microsecond to second
 * @param  integer    Accuracy, how many numbers right to the comma should be
 * @return string     The formatted number
 */
function PMA_prettyProfilingNum(num, acc)
{
    if (!acc) {
        acc = 2;
    }
    acc = Math.pow(10, acc);
    if (num * 1000 < 0.1) {
        num = Math.round(acc * (num * 1000 * 1000)) / acc + 'Âµ';
    } else if (num < 0.1) {
        num = Math.round(acc * (num * 1000)) / acc + 'm';
    } else {
        num = Math.round(acc * num) / acc;
    }

    return num + 's';
}


/**
 * Formats a SQL Query nicely with newlines and indentation. Depends on Codemirror and MySQL Mode!
 *
 * @param string      Query to be formatted
 * @return string      The formatted query
 */
function PMA_SQLPrettyPrint(string)
{
    if (typeof CodeMirror == 'undefined') {
        return string;
    }

    var mode = CodeMirror.getMode({}, "text/x-mysql");
    var stream = new CodeMirror.StringStream(string);
    var state = mode.startState();
    var token, tokens = [];
    var output = '';
    var tabs = function (cnt) {
        var ret = '';
        for (var i = 0; i < 4 * cnt; i++) {
            ret += " ";
        }
        return ret;
    };

    // "root-level" statements
    var statements = {
        'select': ['select', 'from', 'on', 'where', 'having', 'limit', 'order by', 'group by'],
        'update': ['update', 'set', 'where'],
        'insert into': ['insert into', 'values']
    };
    // don't put spaces before these tokens
    var spaceExceptionsBefore = {';': true, ',': true, '.': true, '(': true};
    // don't put spaces after these tokens
    var spaceExceptionsAfter = {'.': true};

    // Populate tokens array
    var str = '';
    while (! stream.eol()) {
        stream.start = stream.pos;
        token = mode.token(stream, state);
        if (token !== null) {
            tokens.push([token, stream.current().toLowerCase()]);
        }
    }

    var currentStatement = tokens[0][1];

    if (! statements[currentStatement]) {
        return string;
    }
    // Holds all currently opened code blocks (statement, function or generic)
    var blockStack = [];
    // Holds the type of block from last iteration (the current is in blockStack[0])
    var previousBlock;
    // If a new code block is found, newBlock contains its type for one iteration and vice versa for endBlock
    var newBlock, endBlock;
    // How much to indent in the current line
    var indentLevel = 0;
    // Holds the "root-level" statements
    var statementPart, lastStatementPart = statements[currentStatement][0];

    blockStack.unshift('statement');

    // Iterate through every token and format accordingly
    for (var i = 0; i < tokens.length; i++) {
        previousBlock = blockStack[0];

        // New block => push to stack
        if (tokens[i][1] == '(') {
            if (i < tokens.length - 1 && tokens[i + 1][0] == 'statement-verb') {
                blockStack.unshift(newBlock = 'statement');
            } else if (i > 0 && tokens[i - 1][0] == 'builtin') {
                blockStack.unshift(newBlock = 'function');
            } else {
                blockStack.unshift(newBlock = 'generic');
            }
        } else {
            newBlock = null;
        }

        // Block end => pop from stack
        if (tokens[i][1] == ')') {
            endBlock = blockStack[0];
            blockStack.shift();
        } else {
            endBlock = null;
        }

        // A subquery is starting
        if (i > 0 && newBlock == 'statement') {
            indentLevel++;
            output += "\n" + tabs(indentLevel) + tokens[i][1] + ' ' + tokens[i + 1][1].toUpperCase() + "\n" + tabs(indentLevel + 1);
            currentStatement = tokens[i + 1][1];
            i++;
            continue;
        }

        // A subquery is ending
        if (endBlock == 'statement' && indentLevel > 0) {
            output += "\n" + tabs(indentLevel);
            indentLevel--;
        }

        // One less indentation for statement parts (from, where, order by, etc.) and a newline
        statementPart = statements[currentStatement].indexOf(tokens[i][1]);
        if (statementPart != -1) {
            if (i > 0) {
                output += "\n";
            }
            output += tabs(indentLevel) + tokens[i][1].toUpperCase();
            output += "\n" + tabs(indentLevel + 1);
            lastStatementPart = tokens[i][1];
        }
        // Normal indentation and spaces for everything else
        else {
            if (! spaceExceptionsBefore[tokens[i][1]] &&
               ! (i > 0 && spaceExceptionsAfter[tokens[i - 1][1]]) &&
               output.charAt(output.length - 1) != ' ') {
                output += " ";
            }
            if (tokens[i][0] == 'keyword') {
                output += tokens[i][1].toUpperCase();
            } else {
                output += tokens[i][1];
            }
        }

        // split columns in select and 'update set' clauses, but only inside statements blocks
        if ((lastStatementPart == 'select' || lastStatementPart == 'where'  || lastStatementPart == 'set') &&
            tokens[i][1] == ',' && blockStack[0] == 'statement') {

            output += "\n" + tabs(indentLevel + 1);
        }

        // split conditions in where clauses, but only inside statements blocks
        if (lastStatementPart == 'where' &&
            (tokens[i][1] == 'and' || tokens[i][1] == 'or' || tokens[i][1] == 'xor')) {

            if (blockStack[0] == 'statement') {
                output += "\n" + tabs(indentLevel + 1);
            }
            // Todo: Also split and or blocks in newlines & indentation++
            //if (blockStack[0] == 'generic')
             //   output += ...
        }
    }
    return output;
}

/**
 * jQuery function that uses jQueryUI's dialogs to confirm with user. Does not
 *  return a jQuery object yet and hence cannot be chained
 *
 * @param string      question
 * @param string      url           URL to be passed to the callbackFn to make
 *                                  an Ajax call to
 * @param function    callbackFn    callback to execute after user clicks on OK
 * @param function    openCallback  optional callback to run when dialog is shown
 */

jQuery.fn.PMA_confirm = function (question, url, callbackFn, openCallback) {
    var confirmState = PMA_commonParams.get('confirm');
    if (! confirmState) {
        // user does not want to confirm
        if ($.isFunction(callbackFn)) {
            callbackFn.call(this, url);
            return true;
        }
    }
    if (PMA_messages.strDoYouReally === '') {
        return true;
    }

    /**
     * @var    button_options  Object that stores the options passed to jQueryUI
     *                          dialog
     */
    var button_options = [
        {
            text: PMA_messages.strOK,
            'class': 'submitOK',
            click: function () {
                $(this).dialog("close");
                if ($.isFunction(callbackFn)) {
                    callbackFn.call(this, url);
                }
            }
        },
        {
            text: PMA_messages.strCancel,
            'class': 'submitCancel',
            click: function () {
                $(this).dialog("close");
            }
        }
    ];

    $('<div/>', {'id': 'confirm_dialog', 'title': PMA_messages.strConfirm})
    .prepend(question)
    .dialog({
        buttons: button_options,
        close: function () {
            $(this).remove();
        },
        open: openCallback,
        modal: true
    });
};

/**
 * jQuery function to sort a table's body after a new row has been appended to it.
 * Also fixes the even/odd classes of the table rows at the end.
 *
 * @param string      text_selector   string to select the sortKey's text
 *
 * @return jQuery Object for chaining purposes
 */
jQuery.fn.PMA_sort_table = function (text_selector) {
    return this.each(function () {

        /**
         * @var table_body  Object referring to the table's <tbody> element
         */
        var table_body = $(this);
        /**
         * @var rows    Object referring to the collection of rows in {@link table_body}
         */
        var rows = $(this).find('tr').get();

        //get the text of the field that we will sort by
        $.each(rows, function (index, row) {
            row.sortKey = $.trim($(row).find(text_selector).text().toLowerCase());
        });

        //get the sorted order
        rows.sort(function (a, b) {
            if (a.sortKey < b.sortKey) {
                return -1;
            }
            if (a.sortKey > b.sortKey) {
                return 1;
            }
            return 0;
        });

        //pull out each row from the table and then append it according to it's order
        $.each(rows, function (index, row) {
            $(table_body).append(row);
            row.sortKey = null;
        });

        //Re-check the classes of each row
        $(this).find('tr:odd')
        .removeClass('even').addClass('odd')
        .end()
        .find('tr:even')
        .removeClass('odd').addClass('even');
    });
};

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $(document).off('submit', "#create_table_form_minimal.ajax");
    $(document).off('submit', "form.create_table_form.ajax");
    $(document).off('click', "form.create_table_form.ajax input[name=submit_num_fields]");
    $(document).off('keyup', "form.create_table_form.ajax input");
});

/**
 * jQuery coding for 'Create Table'.  Used on db_operations.php,
 * db_structure.php and db_tracking.php (i.e., wherever
 * libraries/display_create_table.lib.php is used)
 *
 * Attach Ajax Event handlers for Create Table
 */
AJAX.registerOnload('functions.js', function () {
    /**
     * Attach event handler for submission of create table form (save)
     */
    $(document).on('submit', "form.create_table_form.ajax", function (event) {
        event.preventDefault();

        /**
         * @var    the_form    object referring to the create table form
         */
        var $form = $(this);

        /*
         * First validate the form; if there is a problem, avoid submitting it
         *
         * checkTableEditForm() needs a pure element and not a jQuery object,
         * this is why we pass $form[0] as a parameter (the jQuery object
         * is actually an array of DOM elements)
         */

        if (checkTableEditForm($form[0], $form.find('input[name=orig_num_fields]').val())) {
            PMA_prepareForAjaxRequest($form);
            if (PMA_checkReservedWordColumns($form)) {
                PMA_ajaxShowMessage(PMA_messages.strProcessingRequest);
                //User wants to submit the form
                $.post($form.attr('action'), $form.serialize() + "&do_save_data=1", function (data) {
                    if (typeof data !== 'undefined' && data.success === true) {
                        $('#properties_message')
                         .removeClass('error')
                         .html('');
                        PMA_ajaxShowMessage(data.message);
                        // Only if the create table dialog (distinct panel) exists
                        var $createTableDialog = $("#create_table_dialog");
                        if ($createTableDialog.length > 0) {
                            $createTableDialog.dialog("close").remove();
                        }
                        $('#tableslistcontainer').before(data.formatted_sql);

                        /**
                         * @var tables_table    Object referring to the <tbody> element that holds the list of tables
                         */
                        var tables_table = $("#tablesForm").find("tbody").not("#tbl_summary_row");
                        // this is the first table created in this db
                        if (tables_table.length === 0) {
                            PMA_commonActions.refreshMain(
                                PMA_commonParams.get('opendb_url')
                            );
                        } else {
                            /**
                             * @var curr_last_row   Object referring to the last <tr> element in {@link tables_table}
                             */
                            var curr_last_row = $(tables_table).find('tr:last');
                            /**
                             * @var curr_last_row_index_string   String containing the index of {@link curr_last_row}
                             */
                            var curr_last_row_index_string = $(curr_last_row).find('input:checkbox').attr('id').match(/\d+/)[0];
                            /**
                             * @var curr_last_row_index Index of {@link curr_last_row}
                             */
                            var curr_last_row_index = parseFloat(curr_last_row_index_string);
                            /**
                             * @var new_last_row_index   Index of the new row to be appended to {@link tables_table}
                             */
                            var new_last_row_index = curr_last_row_index + 1;
                            /**
                             * @var new_last_row_id String containing the id of the row to be appended to {@link tables_table}
                             */
                            var new_last_row_id = 'checkbox_tbl_' + new_last_row_index;

                            data.new_table_string = data.new_table_string.replace(/checkbox_tbl_/, new_last_row_id);
                            //append to table
                            $(data.new_table_string)
                             .appendTo(tables_table);

                            //Sort the table
                            $(tables_table).PMA_sort_table('th');

                            // Adjust summary row
                            PMA_adjustTotals();
                        }

                        //Refresh navigation as a new table has been added
                        PMA_reloadNavigation();
                        // Redirect to table structure page on creation of new table
                        var params_12 = 'ajax_request=true&ajax_page_request=true';
                        if (! (history && history.pushState)) {
                            params_12 += PMA_MicroHistory.menus.getRequestParam();
                        }
                        tblStruct_url = 'tbl_structure.php?server=' + data._params.server +
                            '&db='+ data._params.db + '&token=' + data._params.token +
                            '&goto=db_structure.php&table=' + data._params.table + '';
                        $.get(tblStruct_url, params_12, AJAX.responseHandler);
                    } else {
                        PMA_ajaxShowMessage(
                            '<div class="error">' + data.error + '</div>',
                            false
                        );
                    }
                }); // end $.post()
            }
        } // end if (checkTableEditForm() )
    }); // end create table form (save)

    /**
     * Attach event handler for create table form (add fields)
     */
    $(document).on('click', "form.create_table_form.ajax input[name=submit_num_fields]", function (event) {
        event.preventDefault();
        /**
         * @var    the_form    object referring to the create table form
         */
        var $form = $(this).closest('form');

        if (!checkFormElementInRange(this.form, 'added_fields', PMA_messages.strLeastColumnError, 1)) {
            return;
        }

        var $msgbox = PMA_ajaxShowMessage(PMA_messages.strProcessingRequest);
        PMA_prepareForAjaxRequest($form);

        //User wants to add more fields to the table
        $.post($form.attr('action'), $form.serialize() + "&submit_num_fields=1", function (data) {
            if (typeof data !== 'undefined' && data.success) {
                var $pageContent = $("#page_content");
                $pageContent.html(data.message);
                PMA_highlightSQL($pageContent);
                PMA_verifyColumnsProperties();
                PMA_hideShowConnection($('.create_table_form select[name=tbl_storage_engine]'));
                PMA_ajaxRemoveMessage($msgbox);
            } else {
                PMA_ajaxShowMessage(data.error);
            }
        }); //end $.post()
    }); // end create table form (add fields)

    $(document).on('keydown', "form.create_table_form.ajax input[name=added_fields]", function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            event.stopImmediatePropagation();
            $(this)
                .closest('form')
                .find('input[name=submit_num_fields]')
                .click();
        }
    });
    $("input[value=AUTO_INCREMENT]").change(function(){
        if (this.checked) {
            var col = /\d/.exec($(this).attr('name'));
            col = col[0];
            var $selectFieldKey = $('select[name="field_key[' + col + ']"]');
            if ($selectFieldKey.val() === 'none_'+col) {
                $selectFieldKey.val('primary_'+col).change();
            }
        }
    });
    $('body')
    .off('click', 'input.preview_sql')
    .on('click', 'input.preview_sql', function () {
        var $form = $(this).closest('form');
        PMA_previewSQL($form);
    });
});


/**
 * Validates the password field in a form
 *
 * @see    PMA_messages.strPasswordEmpty
 * @see    PMA_messages.strPasswordNotSame
 * @param  object $the_form The form to be validated
 * @return bool
 */
function PMA_checkPassword($the_form)
{
    // Did the user select 'no password'?
    if ($the_form.find('#nopass_1').is(':checked')) {
        return true;
    } else {
        var $pred = $the_form.find('#select_pred_password');
        if ($pred.length && ($pred.val() == 'none' || $pred.val() == 'keep')) {
            return true;
        }
    }

    var $password = $the_form.find('input[name=pma_pw]');
    var $password_repeat = $the_form.find('input[name=pma_pw2]');
    var alert_msg = false;

    if ($password.val() === '') {
        alert_msg = PMA_messages.strPasswordEmpty;
    } else if ($password.val() != $password_repeat.val()) {
        alert_msg = PMA_messages.strPasswordNotSame;
    }

    if (alert_msg) {
        alert(alert_msg);
        $password.val('');
        $password_repeat.val('');
        $password.focus();
        return false;
    }
    return true;
}

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $(document).off('click', '#change_password_anchor.ajax');
});
/**
 * Attach Ajax event handlers for 'Change Password' on index.php
 */
AJAX.registerOnload('functions.js', function () {

    /**
     * Attach Ajax event handler on the change password anchor
     */
    $(document).on('click', '#change_password_anchor.ajax', function (event) {
        event.preventDefault();

        var $msgbox = PMA_ajaxShowMessage();

        /**
         * @var button_options  Object containing options to be passed to jQueryUI's dialog
         */
        var button_options = {};
        button_options[PMA_messages.strGo] = function () {

            event.preventDefault();

            /**
             * @var $the_form    Object referring to the change password form
             */
            var $the_form = $("#change_password_form");

            if (! PMA_checkPassword($the_form)) {
                return false;
            }

            /**
             * @var this_value  String containing the value of the submit button.
             * Need to append this for the change password form on Server Privileges
             * page to work
             */
            var this_value = $(this).val();

            var $msgbox = PMA_ajaxShowMessage(PMA_messages.strProcessingRequest);
            $the_form.append('<input type="hidden" name="ajax_request" value="true" />');

            $.post($the_form.attr('action'), $the_form.serialize() + '&change_pw=' + this_value, function (data) {
                if (typeof data === 'undefined' || data.success !== true) {
                    PMA_ajaxShowMessage(data.error, false);
                    return;
                }

                var $pageContent = $("#page_content");
                $pageContent.prepend(data.message);
                PMA_highlightSQL($pageContent);
                $("#change_password_dialog").hide().remove();
                $("#edit_user_dialog").dialog("close").remove();
                PMA_ajaxRemoveMessage($msgbox);
            }); // end $.post()
        };

        button_options[PMA_messages.strCancel] = function () {
            $(this).dialog('close');
        };
        $.get($(this).attr('href'), {'ajax_request': true}, function (data) {
            if (typeof data === 'undefined' || !data.success) {
                PMA_ajaxShowMessage(data.error, false);
                return;
            }

            $('<div id="change_password_dialog"></div>')
                .dialog({
                    title: PMA_messages.strChangePassword,
                    width: 600,
                    close: function (ev, ui) {
                        $(this).remove();
                    },
                    buttons: button_options,
                    modal: true
                })
                .append(data.message);
            // for this dialog, we remove the fieldset wrapping due to double headings
            $("fieldset#fieldset_change_password")
                .find("legend").remove().end()
                .find("table.noclick").unwrap().addClass("some-margin")
                .find("input#text_pma_pw").focus();
            displayPasswordGenerateButton();
            $('#fieldset_change_password_footer').hide();
            PMA_ajaxRemoveMessage($msgbox);
            $('#change_password_form').bind('submit', function (e) {
                e.preventDefault();
                $(this)
                    .closest('.ui-dialog')
                    .find('.ui-dialog-buttonpane .ui-button')
                    .first()
                    .click();
            });
        }); // end $.get()
    }); // end handler for change password anchor
}); // end $() for Change Password

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $(document).off('change', "select.column_type");
    $(document).off('change', "select.default_type");
    $(document).off('change', "select.virtuality");
    $(document).off('change', 'input.allow_null');
    $(document).off('change', '.create_table_form select[name=tbl_storage_engine]');
});
/**
 * Toggle the hiding/showing of the "Open in ENUM/SET editor" message when
 * the page loads and when the selected data type changes
 */
AJAX.registerOnload('functions.js', function () {
    // is called here for normal page loads and also when opening
    // the Create table dialog
    PMA_verifyColumnsProperties();
    //
    // needs on() to work also in the Create Table dialog
    $(document).on('change', "select.column_type", function () {
        PMA_showNoticeForEnum($(this));
    });
    $(document).on('change', "select.default_type", function () {
        PMA_hideShowDefaultValue($(this));
    });
    $(document).on('change', "select.virtuality", function () {
        PMA_hideShowExpression($(this));
    });
    $(document).on('change', 'input.allow_null', function () {
        PMA_validateDefaultValue($(this));
    });
    $(document).on('change', '.create_table_form select[name=tbl_storage_engine]', function () {
        PMA_hideShowConnection($(this));
    });
});

/**
 * If the chosen storage engine is FEDERATED show connection field. Hide otherwise
 *
 * @param $engine_selector storage engine selector
 */
function PMA_hideShowConnection($engine_selector)
{
    var $connection = $('.create_table_form input[name=connection]');
    var index = $connection.parent('td').index() + 1;
    var $labelTh = $connection.parents('tr').prev('tr').children('th:nth-child(' + index + ')');
    if ($engine_selector.val() != 'FEDERATED') {
        $connection
            .prop('disabled', true)
            .parent('td').hide();
        $labelTh.hide();
    } else {
        $connection
            .prop('disabled', false)
            .parent('td').show();
        $labelTh.show();
    }
}

/**
 * If the column does not allow NULL values, makes sure that default is not NULL
 */
function PMA_validateDefaultValue($null_checkbox)
{
    if (! $null_checkbox.prop('checked')) {
        var $default = $null_checkbox.closest('tr').find('.default_type');
        if ($default.val() == 'NULL') {
            $default.val('NONE');
        }
    }
}

/**
 * function to populate the input fields on picking a column from central list
 *
 * @param string  input_id input id of the name field for the column to be populated
 * @param integer offset of the selected column in central list of columns
 */
function autoPopulate(input_id, offset)
{
    var db = PMA_commonParams.get('db');
    var table = PMA_commonParams.get('table');
    input_id = input_id.substring(0, input_id.length - 1);
    $('#' + input_id + '1').val(central_column_list[db + '_' + table][offset].col_name);
    var col_type = central_column_list[db + '_' + table][offset].col_type.toUpperCase();
    $('#' + input_id + '2').val(col_type);
    var $input3 = $('#' + input_id + '3');
    $input3.val(central_column_list[db + '_' + table][offset].col_length);
    if(col_type === 'ENUM' || col_type === 'SET') {
        $input3.next().show();
    } else {
        $input3.next().hide();
    }
    var col_default = central_column_list[db + '_' + table][offset].col_default.toUpperCase();
    var $input4 = $('#' + input_id + '4');
    if (col_default !== '' && col_default !== 'NULL' && col_default !== 'CURRENT_TIMESTAMP') {
        $input4.val("USER_DEFINED");
        $input4.next().next().show();
        $input4.next().next().val(central_column_list[db + '_' + table][offset].col_default);
    } else {
        $input4.val(central_column_list[db + '_' + table][offset].col_default);
        $input4.next().next().hide();
    }
    $('#' + input_id + '5').val(central_column_list[db + '_' + table][offset].col_collation);
    var $input6 = $('#' + input_id + '6');
    $input6.val(central_column_list[db + '_' + table][offset].col_attribute);
    if(central_column_list[db + '_' + table][offset].col_extra === 'on update CURRENT_TIMESTAMP') {
        $input6.val(central_column_list[db + '_' + table][offset].col_extra);
    }
    if(central_column_list[db + '_' + table][offset].col_extra.toUpperCase() === 'AUTO_INCREMENT') {
        $('#' + input_id + '9').prop("checked",true).change();
    } else {
        $('#' + input_id + '9').prop("checked",false);
    }
    if(central_column_list[db + '_' + table][offset].col_isNull !== '0') {
        $('#' + input_id + '7').prop("checked",true);
    } else {
        $('#' + input_id + '7').prop("checked",false);
    }
}

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $(document).off('click', "a.open_enum_editor");
    $(document).off('click', "input.add_value");
    $(document).off('click', "#enum_editor td.drop");
    $(document).off('click', 'a.central_columns_dialog');
});
/**
 * @var $enum_editor_dialog An object that points to the jQuery
 *                          dialog of the ENUM/SET editor
 */
var $enum_editor_dialog = null;
/**
 * Opens the ENUM/SET editor and controls its functions
 */
AJAX.registerOnload('functions.js', function () {
    $(document).on('click', "a.open_enum_editor", function () {
        // Get the name of the column that is being edited
        var colname = $(this).closest('tr').find('input:first').val();
        var title;
        var i;
        // And use it to make up a title for the page
        if (colname.length < 1) {
            title = PMA_messages.enum_newColumnVals;
        } else {
            title = PMA_messages.enum_columnVals.replace(
                /%s/,
                '"' + escapeHtml(decodeURIComponent(colname)) + '"'
            );
        }
        // Get the values as a string
        var inputstring = $(this)
            .closest('td')
            .find("input")
            .val();
        // Escape html entities
        inputstring = $('<div/>')
            .text(inputstring)
            .html();
        // Parse the values, escaping quotes and
        // slashes on the fly, into an array
        var values = [];
        var in_string = false;
        var curr, next, buffer = '';
        for (i = 0; i < inputstring.length; i++) {
            curr = inputstring.charAt(i);
            next = i == inputstring.length ? '' : inputstring.charAt(i + 1);
            if (! in_string && curr == "'") {
                in_string = true;
            } else if (in_string && curr == "\\" && next == "\\") {
                buffer += "&#92;";
                i++;
            } else if (in_string && next == "'" && (curr == "'" || curr == "\\")) {
                buffer += "&#39;";
                i++;
            } else if (in_string && curr == "'") {
                in_string = false;
                values.push(buffer);
                buffer = '';
            } else if (in_string) {
                buffer += curr;
            }
        }
        if (buffer.length > 0) {
            // The leftovers in the buffer are the last value (if any)
            values.push(buffer);
        }
        var fields = '';
        // If there are no values, maybe the user is about to make a
        // new list so we add a few for him/her to get started with.
        if (values.length === 0) {
            values.push('', '', '', '');
        }
        // Add the parsed values to the editor
        var drop_icon = PMA_getImage('b_drop.png');
        for (i = 0; i < values.length; i++) {
            fields += "<tr><td>" +
                   "<input type='text' value='" + values[i] + "'/>" +
                   "</td><td class='drop'>" +
                   drop_icon +
                   "</td></tr>";
        }
        /**
         * @var dialog HTML code for the ENUM/SET dialog
         */
        var dialog = "<div id='enum_editor'>" +
                   "<fieldset>" +
                    "<legend>" + title + "</legend>" +
                    "<p>" + PMA_getImage('s_notice.png') +
                    PMA_messages.enum_hint + "</p>" +
                    "<table class='values'>" + fields + "</table>" +
                    "</fieldset><fieldset class='tblFooters'>" +
                    "<table class='add'><tr><td>" +
                    "<div class='slider'></div>" +
                    "</td><td>" +
                    "<form><div><input type='submit' class='add_value' value='" +
                    PMA_sprintf(PMA_messages.enum_addValue, 1) +
                    "'/></div></form>" +
                    "</td></tr></table>" +
                    "<input type='hidden' value='" + // So we know which column's data is being edited
                    $(this).closest('td').find("input").attr("id") +
                    "' />" +
                    "</fieldset>" +
                    "</div>";
        /**
         * @var  Defines functions to be called when the buttons in
         * the buttonOptions jQuery dialog bar are pressed
         */
        var buttonOptions = {};
        buttonOptions[PMA_messages.strGo] = function () {
            // When the submit button is clicked,
            // put the data back into the original form
            var value_array = [];
            $(this).find(".values input").each(function (index, elm) {
                var val = elm.value.replace(/\\/g, '\\\\').replace(/'/g, "''");
                value_array.push("'" + val + "'");
            });
            // get the Length/Values text field where this value belongs
            var values_id = $(this).find("input[type='hidden']").val();
            $("input#" + values_id).val(value_array.join(","));
            $(this).dialog("close");
        };
        buttonOptions[PMA_messages.strClose] = function () {
            $(this).dialog("close");
        };
        // Show the dialog
        var width = parseInt(
            (parseInt($('html').css('font-size'), 10) / 13) * 340,
            10
        );
        if (! width) {
            width = 340;
        }
        $enum_editor_dialog = $(dialog).dialog({
            minWidth: width,
            maxHeight: 450,
            modal: true,
            title: PMA_messages.enum_editor,
            buttons: buttonOptions,
            open: function () {
                // Focus the "Go" button after opening the dialog
                $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:first').focus();
            },
            close: function () {
                $(this).remove();
            }
        });
        // slider for choosing how many fields to add
        $enum_editor_dialog.find(".slider").slider({
            animate: true,
            range: "min",
            value: 1,
            min: 1,
            max: 9,
            slide: function (event, ui) {
                $(this).closest('table').find('input[type=submit]').val(
                    PMA_sprintf(PMA_messages.enum_addValue, ui.value)
                );
            }
        });
        // Focus the slider, otherwise it looks nearly transparent
        $('a.ui-slider-handle').addClass('ui-state-focus');
        return false;
    });

    $(document).on('click', 'a.central_columns_dialog', function (e) {
        var href = "db_central_columns.php";
        var db = PMA_commonParams.get('db');
        var table = PMA_commonParams.get('table');
        var maxRows = $(this).data('maxrows');
        var pick = $(this).data('pick');
        if (pick !== false) {
            pick = true;
        }
        var params = {
            'ajax_request' : true,
            'token' : PMA_commonParams.get('token'),
            'server' : PMA_commonParams.get('server'),
            'db' : PMA_commonParams.get('db'),
            'cur_table' : PMA_commonParams.get('table'),
            'getColumnList':true
        };
        var colid = $(this).closest('td').find("input").attr("id");
        var fields = '';
        if (! (db + '_' + table in central_column_list)) {
            central_column_list.push(db + '_' + table);
            $.ajax({
                type: 'POST',
                url: href,
                data: params,
                success: function (data) {
                    central_column_list[db + '_' + table] = $.parseJSON(data.message);
                },
                async:false
            });
        }
        var i = 0;
        var list_size = central_column_list[db + '_' + table].length;
        var min = (list_size <= maxRows) ? list_size : maxRows;
        for (i = 0; i < min; i++) {

            fields += '<tr><td><div><span style="font-weight:bold">' +
                escapeHtml(central_column_list[db + '_' + table][i].col_name) +
                '</span><br><span style="color:gray">' + central_column_list[db + '_' + table][i].col_type;

            if (central_column_list[db + '_' + table][i].col_attribute !== '') {
                fields += '(' + escapeHtml(central_column_list[db + '_' + table][i].col_attribute) + ') ';
            }
            if (central_column_list[db + '_' + table][i].col_length !== '') {
                fields += '(' + escapeHtml(central_column_list[db + '_' + table][i].col_length) +') ';
            }
            fields += escapeHtml(central_column_list[db + '_' + table][i].col_extra) + '</span>' +
                '</div></td>';
            if (pick) {
                fields += '<td><input class="pick" style="width:100%" type="submit" value="' +
                    PMA_messages.pickColumn + '" onclick="autoPopulate(\'' + colid + '\',' + i + ')"/></td>';
            }
            fields += '</tr>';
        }
        var result_pointer = i;
        var search_in = '<input type="text" class="filter_rows" placeholder="' + PMA_messages.searchList + '">';
        if (fields === '') {
            fields = PMA_sprintf(PMA_messages.strEmptyCentralList, "'" + db + "'");
            search_in = '';
        }
        var seeMore = '';
        if (list_size > maxRows) {
            seeMore = "<fieldset class='tblFooters' style='text-align:center;font-weight:bold'>" +
                "<a href='#' id='seeMore'>" + PMA_messages.seeMore + "</a></fieldset>";
        }
        var central_columns_dialog = "<div style='max-height:400px'>" +
            "<fieldset>" +
            search_in +
            "<table id='col_list' style='width:100%' class='values'>" + fields + "</table>" +
            "</fieldset>" +
            seeMore +
            "</div>";

        var width = parseInt(
            (parseInt($('html').css('font-size'), 10) / 13) * 500,
            10
        );
        if (! width) {
            width = 500;
        }
        var buttonOptions = {};
        var $central_columns_dialog = $(central_columns_dialog).dialog({
            minWidth: width,
            maxHeight: 450,
            modal: true,
            title: PMA_messages.pickColumnTitle,
            buttons: buttonOptions,
            open: function () {
                $('#col_list').on("click", ".pick", function (){
                    $central_columns_dialog.remove();
                });
                $(".filter_rows").on("keyup", function () {
                    $.uiTableFilter($("#col_list"), $(this).val());
                });
                $("#seeMore").click(function() {
                    fields = '';
                    min = (list_size <= maxRows + result_pointer) ? list_size : maxRows + result_pointer;
                    for (i = result_pointer; i < min; i++) {

                        fields += '<tr><td><div><span style="font-weight:bold">' +
                            central_column_list[db + '_' + table][i].col_name +
                            '</span><br><span style="color:gray">' +
                            central_column_list[db + '_' + table][i].col_type;

                        if (central_column_list[db + '_' + table][i].col_attribute !== '') {
                            fields += '(' + central_column_list[db + '_' + table][i].col_attribute + ') ';
                        }
                        if (central_column_list[db + '_' + table][i].col_length !== '') {
                            fields += '(' + central_column_list[db + '_' + table][i].col_length + ') ';
                        }
                        fields += central_column_list[db + '_' + table][i].col_extra + '</span>' +
                            '</div></td>';
                        if (pick) {
                            fields += '<td><input class="pick" style="width:100%" type="submit" value="' +
                                PMA_messages.pickColumn + '" onclick="autoPopulate(\'' + colid + '\',' + i + ')"/></td>';
                        }
                        fields += '</tr>';
                    }
                    $("#col_list").append(fields);
                    result_pointer = i;
                    if (result_pointer === list_size) {
                        $('.tblFooters').hide();
                    }
                    return false;
                });
                $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:first').focus();
            },
            close: function () {
                $('#col_list').off("click", ".pick");
                $(".filter_rows").off("keyup");
                $(this).remove();
            }
        });
        return false;
    });

   // $(document).on('click', 'a.show_central_list',function(e) {

   // });
    // When "add a new value" is clicked, append an empty text field
    $(document).on('click', "input.add_value", function (e) {
        e.preventDefault();
        var num_new_rows = $enum_editor_dialog.find("div.slider").slider('value');
        while (num_new_rows--) {
            $enum_editor_dialog.find('.values')
                .append(
                    "<tr style='display: none;'><td>" +
                    "<input type='text' />" +
                    "</td><td class='drop'>" +
                    PMA_getImage('b_drop.png') +
                    "</td></tr>"
                )
                .find('tr:last')
                .show('fast');
        }
    });

    // Removes the specified row from the enum editor
    $(document).on('click', "#enum_editor td.drop", function () {
        $(this).closest('tr').hide('fast', function () {
            $(this).remove();
        });
    });
});

/**
 * Ensures indexes names are valid according to their type and, for a primary
 * key, lock index name to 'PRIMARY'
 * @param string   form_id  Variable which parses the form name as
 *                            the input
 * @return boolean  false    if there is no index form, true else
 */
function checkIndexName(form_id)
{
    if ($("#" + form_id).length === 0) {
        return false;
    }

    // Gets the elements pointers
    var $the_idx_name = $("#input_index_name");
    var $the_idx_choice = $("#select_index_choice");

    // Index is a primary key
    if ($the_idx_choice.find("option:selected").val() == 'PRIMARY') {
        $the_idx_name.val('PRIMARY');
        $the_idx_name.prop("disabled", true);
    }

    // Other cases
    else {
        if ($the_idx_name.val() == 'PRIMARY') {
            $the_idx_name.val("");
        }
        $the_idx_name.prop("disabled", false);
    }

    return true;
} // end of the 'checkIndexName()' function

AJAX.registerTeardown('functions.js', function () {
    $(document).off('click', '#index_frm input[type=submit]');
});
AJAX.registerOnload('functions.js', function () {
    /**
     * Handler for adding more columns to an index in the editor
     */
    $(document).on('click', '#index_frm input[type=submit]', function (event) {
        event.preventDefault();
        var rows_to_add = $(this)
            .closest('fieldset')
            .find('.slider')
            .slider('value');

        var tempEmptyVal = function () {
            $(this).val('');
        };

        var tempSetFocus = function () {
            if ($(this).find("option:selected").val() === '') {
                return true;
            }
            $(this).closest("tr").find("input").focus();
        };

        while (rows_to_add--) {
            var $indexColumns = $('#index_columns');
            var $newrow = $indexColumns
                .find('tbody > tr:first')
                .clone()
                .appendTo(
                    $indexColumns.find('tbody')
                );
            $newrow.find(':input').each(tempEmptyVal);
            // focus index size input on column picked
            $newrow.find('select').change(tempSetFocus);
        }
    });
});

function indexEditorDialog(url, title, callback_success, callback_failure)
{
    /*Remove the hidden dialogs if there are*/
    var $editIndexDialog = $('#edit_index_dialog');
    if ($editIndexDialog.length !== 0) {
        $editIndexDialog.remove();
    }
    var $div = $('<div id="edit_index_dialog"></div>');

    /**
     * @var button_options Object that stores the options
     *                     passed to jQueryUI dialog
     */
    var button_options = {};
    button_options[PMA_messages.strGo] = function () {
        /**
         * @var    the_form    object referring to the export form
         */
        var $form = $("#index_frm");
        var $msgbox = PMA_ajaxShowMessage(PMA_messages.strProcessingRequest);
        PMA_prepareForAjaxRequest($form);
        //User wants to submit the form
        $.post($form.attr('action'), $form.serialize() + "&do_save_data=1", function (data) {
            var $sqlqueryresults = $(".sqlqueryresults");
            if ($sqlqueryresults.length !== 0) {
                $sqlqueryresults.remove();
            }
            if (typeof data !== 'undefined' && data.success === true) {
                PMA_ajaxShowMessage(data.message);
                var $resultQuery = $('.result_query');
                if ($resultQuery.length) {
                    $resultQuery.remove();
                }
                if (data.sql_query) {
                    $('<div class="result_query"></div>')
                        .html(data.sql_query)
                        .prependTo('#page_content');
                    PMA_highlightSQL($('#page_content'));
                }
                $(".result_query .notice").remove();
                $resultQuery.prepend(data.message);
                /*Reload the field form*/
                $("#table_index").remove();
                $("<div id='temp_div'><div>")
                    .append(data.index_table)
                    .find("#table_index")
                    .insertAfter("#index_header");
                var $editIndexDialog = $("#edit_index_dialog");
                if ($editIndexDialog.length > 0) {
                    $editIndexDialog.dialog("close");
                }
                $('div.no_indexes_defined').hide();
                if (callback_success) {
                    callback_success();
                }
                PMA_reloadNavigation();
            } else {
                var $temp_div = $("<div id='temp_div'><div>").append(data.error);
                var $error;
                if ($temp_div.find(".error code").length !== 0) {
                    $error = $temp_div.find(".error code").addClass("error");
                } else {
                    $error = $temp_div;
                }
                if (callback_failure) {
                    callback_failure();
                }
                PMA_ajaxShowMessage($error, false);
            }
        }); // end $.post()
    };
    button_options[PMA_messages.strPreviewSQL] = function () {
        // Function for Previewing SQL
        var $form = $('#index_frm');
        PMA_previewSQL($form);
    };
    button_options[PMA_messages.strCancel] = function () {
        $(this).dialog('close');
    };
    var $msgbox = PMA_ajaxShowMessage();
    $.get("tbl_indexes.php", url, function (data) {
        if (typeof data !== 'undefined' && data.success === false) {
            //in the case of an error, show the error message returned.
            PMA_ajaxShowMessage(data.error, false);
        } else {
            PMA_ajaxRemoveMessage($msgbox);
            // Show dialog if the request was successful
            $div
            .append(data.message)
            .dialog({
                title: title,
                width: 450,
                height: 350,
                open: PMA_verifyColumnsProperties,
                modal: true,
                buttons: button_options,
                close: function () {
                    $(this).remove();
                }
            });
            $div.find('.tblFooters').remove();
            showIndexEditDialog($div);
        }
    }); // end $.get()
}

function showIndexEditDialog($outer)
{
    checkIndexType();
    checkIndexName("index_frm");
    var $indexColumns = $('#index_columns');
    $indexColumns.find('td').each(function () {
        $(this).css("width", $(this).width() + 'px');
    });
    $indexColumns.find('tbody').sortable({
        axis: 'y',
        containment: $indexColumns.find("tbody"),
        tolerance: 'pointer'
    });
    PMA_showHints($outer);
    PMA_init_slider();
    // Add a slider for selecting how many columns to add to the index
    $outer.find('.slider').slider({
        animate: true,
        value: 1,
        min: 1,
        max: 16,
        slide: function (event, ui) {
            $(this).closest('fieldset').find('input[type=submit]').val(
                PMA_sprintf(PMA_messages.strAddToIndex, ui.value)
            );
        }
    });
    $('div.add_fields').removeClass('hide');
    // focus index size input on column picked
    $outer.find('table#index_columns select').change(function () {
        if ($(this).find("option:selected").val() === '') {
            return true;
        }
        $(this).closest("tr").find("input").focus();
    });
    // Focus the slider, otherwise it looks nearly transparent
    $('a.ui-slider-handle').addClass('ui-state-focus');
    // set focus on index name input, if empty
    var input = $outer.find('input#input_index_name');
    input.val() || input.focus();
}

/**
 * Function to display tooltips that were
 * generated on the PHP side by PMA_Util::showHint()
 *
 * @param object $div a div jquery object which specifies the
 *                    domain for searching for tooltips. If we
 *                    omit this parameter the function searches
 *                    in the whole body
 **/
function PMA_showHints($div)
{
    if ($div === undefined || ! $div instanceof jQuery || $div.length === 0) {
        $div = $("body");
    }
    $div.find('.pma_hint').each(function () {
        PMA_tooltip(
            $(this).children('img'),
            'img',
            $(this).children('span').html()
        );
    });
}

AJAX.registerOnload('functions.js', function () {
    PMA_showHints();
});

function PMA_mainMenuResizerCallback() {
    // 5 px margin for jumping menu in Chrome
    return $(document.body).width() - 5;
}
// This must be fired only once after the initial page load
$(function () {
    // Initialise the menu resize plugin
    $('#topmenu').menuResizer(PMA_mainMenuResizerCallback);
    // register resize event
    $(window).resize(function () {
        $('#topmenu').menuResizer('resize');
    });
});

/**
 * Get the row number from the classlist (for example, row_1)
 */
function PMA_getRowNumber(classlist)
{
    return parseInt(classlist.split(/\s+row_/)[1], 10);
}

/**
 * Changes status of slider
 */
function PMA_set_status_label($element)
{
    var text;
    if ($element.css('display') == 'none') {
        text = '+ ';
    } else {
        text = '- ';
    }
    $element.closest('.slide-wrapper').prev().find('span').text(text);
}

/**
 * var  toggleButton  This is a function that creates a toggle
 *                    sliding button given a jQuery reference
 *                    to the correct DOM element
 */
var toggleButton = function ($obj) {
    // In rtl mode the toggle switch is flipped horizontally
    // so we need to take that into account
    var right;
    if ($('span.text_direction', $obj).text() == 'ltr') {
        right = 'right';
    } else {
        right = 'left';
    }
    /**
     *  var  h  Height of the button, used to scale the
     *          background image and position the layers
     */
    var h = $obj.height();
    $('img', $obj).height(h);
    $('table', $obj).css('bottom', h - 1);
    /**
     *  var  on   Width of the "ON" part of the toggle switch
     *  var  off  Width of the "OFF" part of the toggle switch
     */
    var on  = $('td.toggleOn', $obj).width();
    var off = $('td.toggleOff', $obj).width();
    // Make the "ON" and "OFF" parts of the switch the same size
    // + 2 pixels to avoid overflowed
    $('td.toggleOn > div', $obj).width(Math.max(on, off) + 2);
    $('td.toggleOff > div', $obj).width(Math.max(on, off) + 2);
    /**
     *  var  w  Width of the central part of the switch
     */
    var w = parseInt(($('img', $obj).height() / 16) * 22, 10);
    // Resize the central part of the switch on the top
    // layer to match the background
    $('table td:nth-child(2) > div', $obj).width(w);
    /**
     *  var  imgw    Width of the background image
     *  var  tblw    Width of the foreground layer
     *  var  offset  By how many pixels to move the background
     *               image, so that it matches the top layer
     */
    var imgw = $('img', $obj).width();
    var tblw = $('table', $obj).width();
    var offset = parseInt(((imgw - tblw) / 2), 10);
    // Move the background to match the layout of the top layer
    $obj.find('img').css(right, offset);
    /**
     *  var  offw    Outer width of the "ON" part of the toggle switch
     *  var  btnw    Outer width of the central part of the switch
     */
    var offw = $('td.toggleOff', $obj).outerWidth();
    var btnw = $('table td:nth-child(2)', $obj).outerWidth();
    // Resize the main div so that exactly one side of
    // the switch plus the central part fit into it.
    $obj.width(offw + btnw + 2);
    /**
     *  var  move  How many pixels to move the
     *             switch by when toggling
     */
    var move = $('td.toggleOff', $obj).outerWidth();
    // If the switch is initialized to the
    // OFF state we need to move it now.
    if ($('div.container', $obj).hasClass('off')) {
        if (right == 'right') {
            $('div.container', $obj).animate({'left': '-=' + move + 'px'}, 0);
        } else {
            $('div.container', $obj).animate({'left': '+=' + move + 'px'}, 0);
        }
    }
    // Attach an 'onclick' event to the switch
    $('div.container', $obj).click(function () {
        if ($(this).hasClass('isActive')) {
            return false;
        } else {
            $(this).addClass('isActive');
        }
        var $msg = PMA_ajaxShowMessage();
        var $container = $(this);
        var callback = $('span.callback', this).text();
        var operator, url, removeClass, addClass;
        // Perform the actual toggle
        if ($(this).hasClass('on')) {
            if (right == 'right') {
                operator = '-=';
            } else {
                operator = '+=';
            }
            url = $(this).find('td.toggleOff > span').text();
            removeClass = 'on';
            addClass = 'off';
        } else {
            if (right == 'right') {
                operator = '+=';
            } else {
                operator = '-=';
            }
            url = $(this).find('td.toggleOn > span').text();
            removeClass = 'off';
            addClass = 'on';
        }
        $.post(url, {'ajax_request': true}, function (data) {
            if (typeof data !== 'undefined' && data.success === true) {
                PMA_ajaxRemoveMessage($msg);
                $container
                .removeClass(removeClass)
                .addClass(addClass)
                .animate({'left': operator + move + 'px'}, function () {
                    $container.removeClass('isActive');
                });
                eval(callback);
            } else {
                PMA_ajaxShowMessage(data.error, false);
                $container.removeClass('isActive');
            }
        });
    });
};

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $('div.container').unbind('click');
});
/**
 * Initialise all toggle buttons
 */
AJAX.registerOnload('functions.js', function () {
    $('div.toggleAjax').each(function () {
        var $button = $(this).show();
        $button.find('img').each(function () {
            if (this.complete) {
                toggleButton($button);
            } else {
                $(this).load(function () {
                    toggleButton($button);
                });
            }
        });
    });
});

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $(document).off('change', 'select.pageselector');
    $(document).off('click', 'a.formLinkSubmit');
    $('#update_recent_tables').unbind('ready');
    $('#sync_favorite_tables').unbind('ready');
});

AJAX.registerOnload('functions.js', function () {

    /**
     * Autosubmit page selector
     */
    $(document).on('change', 'select.pageselector', function (event) {
        event.stopPropagation();
        // Check where to load the new content
        if ($(this).closest("#pma_navigation").length === 0) {
            // For the main page we don't need to do anything,
            $(this).closest("form").submit();
        } else {
            // but for the navigation we need to manually replace the content
            PMA_navigationTreePagination($(this));
        }
    });

    /**
     * Load version information asynchronously.
     */
    if ($('li.jsversioncheck').length > 0) {
        $.getJSON('version_check.php', {'server' : PMA_commonParams.get('server')}, PMA_current_version);
    }

    if ($('#is_git_revision').length > 0) {
        setTimeout(PMA_display_git_revision, 10);
    }

    /**
     * Slider effect.
     */
    PMA_init_slider();

    /**
     * Enables the text generated by PMA_Util::linkOrButton() to be clickable
     */
    $(document).on('click', 'a.formLinkSubmit', function (e) {
        if (! $(this).hasClass('requireConfirm')) {
            submitFormLink($(this));
            return false;
        }
    });

    var $updateRecentTables = $('#update_recent_tables');
    if ($updateRecentTables.length) {
        $.get(
            $updateRecentTables.attr('href'),
            {no_debug: true},
            function (data) {
                if (typeof data !== 'undefined' && data.success === true) {
                    $('#pma_recent_list').html(data.list);
                }
            }
        );
    }

    // Sync favorite tables from localStorage to pmadb.
    if ($('#sync_favorite_tables').length) {
        $.ajax({
            url: $('#sync_favorite_tables').attr("href"),
            cache: false,
            type: 'POST',
            data: {
                favorite_tables: (isStorageSupported('localStorage') && typeof window.localStorage.favorite_tables !== 'undefined')
                    ? window.localStorage.favorite_tables
                    : '',
                no_debug: true
            },
            success: function (data) {
                // Update localStorage.
                if (isStorageSupported('localStorage')) {
                    window.localStorage.favorite_tables = data.favorite_tables;
                }
                $('#pma_favorite_list').html(data.list);
            }
        });
    }
}); // end of $()

/**
 * Submits the form placed in place of a link due to the excessive url length
 *
 * @param $link anchor
 * @returns {Boolean}
 */
function submitFormLink($link)
{
    if ($link.attr('href').indexOf('=') != -1) {
        var data = $link.attr('href').substr($link.attr('href').indexOf('#') + 1).split('=', 2);
        $link.parents('form').append('<input type="hidden" name="' + data[0] + '" value="' + data[1] + '"/>');
    }
    $link.parents('form').submit();
}

/**
 * Initializes slider effect.
 */
function PMA_init_slider()
{
    $('div.pma_auto_slider').each(function () {
        var $this = $(this);
        if ($this.data('slider_init_done')) {
            return;
        }
        var $wrapper = $('<div>', {'class': 'slide-wrapper'});
        $wrapper.toggle($this.is(':visible'));
        $('<a>', {href: '#' + this.id, "class": 'ajax'})
            .text($this.attr('title'))
            .prepend($('<span>'))
            .insertBefore($this)
            .click(function () {
                var $wrapper = $this.closest('.slide-wrapper');
                var visible = $this.is(':visible');
                if (!visible) {
                    $wrapper.show();
                }
                $this[visible ? 'hide' : 'show']('blind', function () {
                    $wrapper.toggle(!visible);
                    $wrapper.parent().toggleClass("print_ignore", visible);
                    PMA_set_status_label($this);
                });
                return false;
            });
        $this.wrap($wrapper);
        $this.removeAttr('title');
        PMA_set_status_label($this);
        $this.data('slider_init_done', 1);
    });
}

/**
 * Initializes slider effect.
 */
AJAX.registerOnload('functions.js', function () {
    PMA_init_slider();
});

/**
 * Restores sliders to the state they were in before initialisation.
 */
AJAX.registerTeardown('functions.js', function () {
    $('div.pma_auto_slider').each(function () {
        var $this = $(this);
        $this.removeData();
        $this.parent().replaceWith($this);
        $this.parent().children('a').remove();
    });
});

/**
 * Creates a message inside an object with a sliding effect
 *
 * @param msg    A string containing the text to display
 * @param $obj   a jQuery object containing the reference
 *                 to the element where to put the message
 *                 This is optional, if no element is
 *                 provided, one will be created below the
 *                 navigation links at the top of the page
 *
 * @return bool   True on success, false on failure
 */
function PMA_slidingMessage(msg, $obj)
{
    if (msg === undefined || msg.length === 0) {
        // Don't show an empty message
        return false;
    }
    if ($obj === undefined || ! $obj instanceof jQuery || $obj.length === 0) {
        // If the second argument was not supplied,
        // we might have to create a new DOM node.
        if ($('#PMA_slidingMessage').length === 0) {
            $('#page_content').prepend(
                '<span id="PMA_slidingMessage" ' +
                'style="display: inline-block;"></span>'
            );
        }
        $obj = $('#PMA_slidingMessage');
    }
    if ($obj.has('div').length > 0) {
        // If there already is a message inside the
        // target object, we must get rid of it
        $obj
        .find('div')
        .first()
        .fadeOut(function () {
            $obj
            .children()
            .remove();
            $obj
            .append('<div>' + msg + '</div>');
            // highlight any sql before taking height;
            PMA_highlightSQL($obj);
            $obj.find('div')
                .first()
                .hide();
            $obj
            .animate({
                height: $obj.find('div').first().height()
            })
            .find('div')
            .first()
            .fadeIn();
        });
    } else {
        // Object does not already have a message
        // inside it, so we simply slide it down
        $obj.width('100%')
            .html('<div>' + msg + '</div>');
        // highlight any sql before taking height;
        PMA_highlightSQL($obj);
        var h = $obj
            .find('div')
            .first()
            .hide()
            .height();
        $obj
        .find('div')
        .first()
        .css('height', 0)
        .show()
        .animate({
                height: h
            }, function () {
            // Set the height of the parent
            // to the height of the child
                $obj
                .height(
                    $obj
                    .find('div')
                    .first()
                    .height()
                );
            });
    }
    return true;
} // end PMA_slidingMessage()

/**
 * Attach CodeMirror2 editor to SQL edit area.
 */
AJAX.registerOnload('functions.js', function () {
    var $elm = $('#sqlquery');
    if ($elm.length > 0) {
        if (typeof CodeMirror != 'undefined') {
            codemirror_editor = PMA_getSQLEditor($elm);
            codemirror_editor.focus();
            $(codemirror_editor.getWrapperElement())
                .bind('keydown', catchKeypressesFromSqlTextboxes);
            codemirror_editor.on("blur", updateQueryParameters);
        } else {
            // without codemirror
            $elm.focus()
                .bind('keydown', catchKeypressesFromSqlTextboxes)
                .bind('blur', updateQueryParameters);
        }
    }
    PMA_highlightSQL($('body'));
});
AJAX.registerTeardown('functions.js', function () {
    if (codemirror_editor) {
        $('#sqlquery').text(codemirror_editor.getValue());
        codemirror_editor.toTextArea();
        codemirror_editor = false;
    }
});
AJAX.registerOnload('functions.js', function () {
    // initializes all lock-page elements lock-id and
    // val-hash data property
    $('#page_content form.lock-page textarea, ' +
            '#page_content form.lock-page input[type="text"], '+
            '#page_content form.lock-page input[type="number"], '+
            '#page_content form.lock-page select').each(function (i) {
        $(this).data('lock-id', i);
        // val-hash is the hash of default value of the field
        // so that it can be compared with new value hash
        // to check whether field was modified or not.
        $(this).data('val-hash', AJAX.hash($(this).val()));
    });

    // initializes lock-page elements (input types checkbox and radio buttons)
    // lock-id and val-hash data property
    $('#page_content form.lock-page input[type="checkbox"], ' +
            '#page_content form.lock-page input[type="radio"]').each(function (i) {
        $(this).data('lock-id', i);
        $(this).data('val-hash', AJAX.hash($(this).is(":checked")));
    });
});
/**
 * jQuery plugin to cancel selection in HTML code.
 */
(function ($) {
    $.fn.noSelect = function (p) { //no select plugin by Paulo P.Marinas
        var prevent = (p === null) ? true : p;
        var is_msie = navigator.userAgent.indexOf('MSIE') > -1 || !!window.navigator.userAgent.match(/Trident.*rv\:11\./);
        var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
        var is_safari = navigator.userAgent.indexOf("Safari") > -1;
        var is_opera = navigator.userAgent.indexOf("Presto") > -1;
        if (prevent) {
            return this.each(function () {
                if (is_msie || is_safari) {
                    $(this).bind('selectstart', function () {
                        return false;
                    });
                } else if (is_firefox) {
                    $(this).css('MozUserSelect', 'none');
                    $('body').trigger('focus');
                } else if (is_opera) {
                    $(this).bind('mousedown', function () {
                        return false;
                    });
                } else {
                    $(this).attr('unselectable', 'on');
                }
            });
        } else {
            return this.each(function () {
                if (is_msie || is_safari) {
                    $(this).unbind('selectstart');
                } else if (is_firefox) {
                    $(this).css('MozUserSelect', 'inherit');
                } else if (is_opera) {
                    $(this).unbind('mousedown');
                } else {
                    $(this).removeAttr('unselectable');
                }
            });
        }
    }; //end noSelect
})(jQuery);

/**
 * jQuery plugin to correctly filter input fields by value, needed
 * because some nasty values may break selector syntax
 */
(function ($) {
    $.fn.filterByValue = function (value) {
        return this.filter(function () {
            return $(this).val() === value;
        });
    };
})(jQuery);

/**
 * Return value of a cell in a table.
 */
function PMA_getCellValue(td) {
    var $td = $(td);
    if ($td.is('.null')) {
        return '';
    } else if (! $td.is('.to_be_saved') && $td.data('original_data')) {
        return $td.data('original_data');
    } else {
        return $td.text();
    }
}

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $(document).off('click', 'a.themeselect');
    $(document).off('change', '.autosubmit');
    $('a.take_theme').unbind('click');
});

AJAX.registerOnload('functions.js', function () {
    /**
     * Theme selector.
     */
    $(document).on('click', 'a.themeselect', function (e) {
        window.open(
            e.target,
            'themes',
            'left=10,top=20,width=510,height=350,scrollbars=yes,status=yes,resizable=yes'
            );
        return false;
    });

    /**
     * Automatic form submission on change.
     */
    $(document).on('change', '.autosubmit', function (e) {
        $(this).closest('form').submit();
    });

    /**
     * Theme changer.
     */
    $('a.take_theme').click(function (e) {
        var what = this.name;
        if (window.opener && window.opener.document.forms.setTheme.elements.set_theme) {
            window.opener.document.forms.setTheme.elements.set_theme.value = what;
            window.opener.document.forms.setTheme.submit();
            window.close();
            return false;
        }
        return true;
    });
});

/**
 * Print button
 */
function printPage()
{
    // Do print the page
    if (typeof(window.print) != 'undefined') {
        window.print();
    }
}

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function () {
    $('input#print').unbind('click');
    $(document).off('click', 'a.create_view.ajax');
    $(document).off('keydown', '#createViewDialog input, #createViewDialog select');
    $(document).off('change', '#fkc_checkbox');
});

AJAX.registerOnload('functions.js', function () {
    $('input#print').click(printPage);
    /**
     * Ajaxification for the "Create View" action
     */
    $(document).on('click', 'a.create_view.ajax', function (e) {
        e.preventDefault();
        PMA_createViewDialog($(this));
    });
    /**
     * Attach Ajax event handlers for input fields in the editor
     * and used to submit the Ajax request when the ENTER key is pressed.
     */
    if ($('#createViewDialog').length !== 0) {
        $(document).on('keydown', '#createViewDialog input, #createViewDialog select', function (e) {
            if (e.which === 13) { // 13 is the ENTER key
                e.preventDefault();

                // with preventing default, selection by <select> tag
                // was also prevented in IE
                $(this).blur();

                $(this).closest('.ui-dialog').find('.ui-button:first').click();
            }
        }); // end $(document).on()
    }

    syntaxHighlighter = PMA_getSQLEditor($('textarea[name="view[as]"]'));

});

function PMA_createViewDialog($this)
{
    var $msg = PMA_ajaxShowMessage();
    var syntaxHighlighter = null;
    $.get($this.attr('href') + '&ajax_request=1&ajax_dialog=1', function (data) {
        if (typeof data !== 'undefined' && data.success === true) {
            PMA_ajaxRemoveMessage($msg);
            var buttonOptions = {};
            buttonOptions[PMA_messages.strGo] = function () {
                if (typeof CodeMirror !== 'undefined') {
                    syntaxHighlighter.save();
                }
                $msg = PMA_ajaxShowMessage();
                $.get('view_create.php', $('#createViewDialog').find('form').serialize(), function (data) {
                    PMA_ajaxRemoveMessage($msg);
                    if (typeof data !== 'undefined' && data.success === true) {
                        $('#createViewDialog').dialog("close");
                        $('.result_query').html(data.message);
                        PMA_reloadNavigation();
                    } else {
                        PMA_ajaxShowMessage(data.error, false);
                    }
                });
            };
            buttonOptions[PMA_messages.strClose] = function () {
                $(this).dialog("close");
            };
            var $dialog = $('<div/>').attr('id', 'createViewDialog').append(data.message).dialog({
                width: 600,
                minWidth: 400,
                modal: true,
                buttons: buttonOptions,
                title: PMA_messages.strCreateView,
                close: function () {
                    $(this).remove();
                }
            });
            // Attach syntax highlighted editor
            syntaxHighlighter = PMA_getSQLEditor($dialog.find('textarea'));
            $('input:visible[type=text]', $dialog).first().focus();
        } else {
            PMA_ajaxShowMessage(data.error);
        }
    });
}

/**
 * Makes the breadcrumbs and the menu bar float at the top of the viewport
 */
$(function () {
    if ($("#floating_menubar").length && $('#PMA_disable_floating_menubar').length === 0) {
        var left = $('html').attr('dir') == 'ltr' ? 'left' : 'right';
        $("#floating_menubar")
            .css('margin-' + left, $('#pma_navigation').width() + $('#pma_navigation_resizer').width())
            .css(left, 0)
            .css({
                'position': 'fixed',
                'top': 0,
                'width': '100%',
                'z-index': 99
            })
            .append($('#serverinfo'))
            .append($('#topmenucontainer'));
        // Allow the DOM to render, then adjust the padding on the body
        setTimeout(function () {
            $('body').css(
                'padding-top',
                $('#floating_menubar').outerHeight(true)
            );
            $('#topmenu').menuResizer('resize');
        }, 4);
    }
});

/**
 * Scrolls the page to the top if clicking the serverinfo bar
 */
$(function () {
    $(document).delegate("#serverinfo, #goto_pagetop", "click", function (event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 'fast');
    });
});

var checkboxes_sel = "input.checkall:checkbox:enabled";
/**
 * Watches checkboxes in a form to set the checkall box accordingly
 */
var checkboxes_changed = function () {
    var $form = $(this.form);
    // total number of checkboxes in current form
    var total_boxes = $form.find(checkboxes_sel).length;
    // number of checkboxes checked in current form
    var checked_boxes = $form.find(checkboxes_sel + ":checked").length;
    var $checkall = $form.find("input.checkall_box");
    if (total_boxes == checked_boxes) {
        $checkall.prop({checked: true, indeterminate: false});
    }
    else if (checked_boxes > 0) {
        $checkall.prop({checked: true, indeterminate: true});
    }
    else {
        $checkall.prop({checked: false, indeterminate: false});
    }
};
$(document).on("change", checkboxes_sel, checkboxes_changed);

$(document).on("change", "input.checkall_box", function () {
    var is_checked = $(this).is(":checked");
    $(this.form).find(checkboxes_sel).prop("checked", is_checked)
    .parents("tr").toggleClass("marked", is_checked);
});

/**
 * Watches checkboxes in a sub form to set the sub checkall box accordingly
 */
var sub_checkboxes_changed = function () {
    var $form = $(this).parent().parent();
    // total number of checkboxes in current sub form
    var total_boxes = $form.find(checkboxes_sel).length;
    // number of checkboxes checked in current sub form
    var checked_boxes = $form.find(checkboxes_sel + ":checked").length;
    var $checkall = $form.find("input.sub_checkall_box");
    if (total_boxes == checked_boxes) {
        $checkall.prop({checked: true, indeterminate: false});
    }
    else if (checked_boxes > 0) {
        $checkall.prop({checked: true, indeterminate: true});
    }
    else {
        $checkall.prop({checked: false, indeterminate: false});
    }
};
$(document).on("change", checkboxes_sel + ", input.checkall_box:checkbox:enabled", sub_checkboxes_changed);

$(document).on("change", "input.sub_checkall_box", function () {
    var is_checked = $(this).is(":checked");
    var $form = $(this).parent().parent();
    $form.find(checkboxes_sel).prop("checked", is_checked)
    .parents("tr").toggleClass("marked", is_checked);
});

/**
 * Toggles row colors of a set of 'tr' elements starting from a given element
 *
 * @param $start Starting element
 */
function toggleRowColors($start)
{
    for (var $curr_row = $start; $curr_row.length > 0; $curr_row = $curr_row.next()) {
        if ($curr_row.hasClass('odd')) {
            $curr_row.removeClass('odd').addClass('even');
        } else if ($curr_row.hasClass('even')) {
            $curr_row.removeClass('even').addClass('odd');
        }
    }
}

/**
 * Formats a byte number to human-readable form
 *
 * @param bytes the bytes to format
 * @param optional subdecimals the number of digits after the point
 * @param optional pointchar the char to use as decimal point
 */
function formatBytes(bytes, subdecimals, pointchar) {
    if (!subdecimals) {
        subdecimals = 0;
    }
    if (!pointchar) {
        pointchar = '.';
    }
    var units = ['B', 'KiB', 'MiB', 'GiB'];
    for (var i = 0; bytes > 1024 && i < units.length; i++) {
        bytes /= 1024;
    }
    var factor = Math.pow(10, subdecimals);
    bytes = Math.round(bytes * factor) / factor;
    bytes = bytes.toString().split('.').join(pointchar);
    return bytes + ' ' + units[i];
}

AJAX.registerOnload('functions.js', function () {
    /**
     * Opens pma more themes link in themes browser, in new window instead of popup
     * This way, we don't break HTML validity
     */
    $("a._blank").prop("target", "_blank");
    /**
     * Reveal the login form to users with JS enabled
     * and focus the appropriate input field
     */
    var $loginform = $('#loginform');
    if ($loginform.length) {
        $loginform.find('.js-show').show();
        if ($('#input_username').val()) {
            $('#input_password').focus();
        } else {
            $('#input_username').focus();
        }
    }
});

/**
 * Dynamically adjust the width of the boxes
 * on the table and db operations pages
 */
(function () {
    function DynamicBoxes() {
        var $boxContainer = $('#boxContainer');
        if ($boxContainer.length) {
            var minWidth = $boxContainer.data('box-width');
            var viewport = $(window).width() - $('#pma_navigation').width();
            var slots = Math.floor(viewport / minWidth);
            $boxContainer.children()
            .each(function () {
                if (viewport < minWidth) {
                    $(this).width(minWidth);
                } else {
                    $(this).css('width', ((1 /  slots) * 100) + "%");
                }
            })
            .removeClass('clearfloat')
            .filter(':nth-child(' + slots + 'n+1)')
            .addClass('clearfloat');
        }
    }
    AJAX.registerOnload('functions.js', function () {
        DynamicBoxes();
    });
    $(function () {
        $(window).resize(DynamicBoxes);
    });
})();

/**
 * Formats timestamp for display
 */
function PMA_formatDateTime(date, seconds) {
    var result = $.datepicker.formatDate('yy-mm-dd', date);
    var timefmt = 'HH:mm';
    if (seconds) {
        timefmt = 'HH:mm:ss';
    }
    return result + ' ' + $.datepicker.formatTime(
        timefmt, {
            hour: date.getHours(),
            minute: date.getMinutes(),
            second: date.getSeconds()
        }
    );
}

/**
 * Check than forms have less fields than max allowed by PHP.
 */
function checkNumberOfFields() {
    if (typeof maxInputVars === 'undefined') {
        return false;
    }
    if (false === maxInputVars) {
        return false;
    }
    $('form').each(function() {
        var nbInputs = $(this).find(':input').length;
        if (nbInputs > maxInputVars) {
            var warning = PMA_sprintf(PMA_messages.strTooManyInputs, maxInputVars);
            PMA_ajaxShowMessage(warning);
            return false;
        }
        return true;
    });

    return true;
}

/**
 * Ignore the displayed php errors.
 * Simply removes the displayed errors.
 *
 * @param  clearPrevErrors whether to clear errors stored
 *             in $_SESSION['prev_errors'] at server
 *
 */
function PMA_ignorePhpErrors(clearPrevErrors){
    if (typeof(clearPrevErrors) === "undefined" ||
        clearPrevErrors === null
    ) {
        str = false;
    }
    // send AJAX request to error_report.php with send_error_report=0, exception_type=php & token.
    // It clears the prev_errors stored in session.
    if(clearPrevErrors){
        var $pmaReportErrorsForm = $('#pma_report_errors_form');
        $pmaReportErrorsForm.find('input[name="send_error_report"]').val(0); // change send_error_report to '0'
        $pmaReportErrorsForm.submit();
    }

    // remove displayed errors
    var $pmaErrors = $('#pma_errors');
    $pmaErrors.fadeOut( "slow");
    $pmaErrors.remove();
}

/**
 * checks whether browser supports web storage
 *
 * @param type the type of storage i.e. localStorage or sessionStorage
 *
 * @returns bool
 */
function isStorageSupported(type)
{
    try {
        window[type].setItem('PMATest', 'test');
        // Check whether key-value pair was set successfully
        if (window[type].getItem('PMATest') === 'test') {
            // Supported, remove test variable from storage
            window[type].removeItem('PMATest');
            return true;
        }
    } catch(error) {
        // Not supported
        PMA_ajaxShowMessage(PMA_messages.strNoLocalStorage, false);
    }
    return false;
}

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function(){
    $(document).off('keydown', 'form input, form textarea, form select');
});

AJAX.registerOnload('functions.js', function () {
    /**
     * Handle 'Ctrl/Alt + Enter' form submits
     */
    $('form input, form textarea, form select').on('keydown', function(e){
        if((e.ctrlKey && e.which == 13) || (e.altKey && e.which == 13)) {
            $form = $(this).closest('form');
            if (! $form.find('input[type="submit"]') ||
                ! $form.find('input[type="submit"]').click()
            ) {
                $form.submit();
            }
        }
    });
});

/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('functions.js', function(){
    $(document).off('change', 'input[type=radio][name="pw_hash"]');
});

AJAX.registerOnload('functions.js', function(){
    /*
     * Display warning regarding SSL when sha256_password
     * method is selected
     * Used in user_password.php (Change Password link on index.php)
     */
    $(document).on("change", 'select#select_authentication_plugin_cp', function() {
        if (this.value === 'sha256_password') {
            $('#ssl_reqd_warning_cp').show();
        } else {
            $('#ssl_reqd_warning_cp').hide();
        }
    });
});
;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * function used in or for navigation panel
 *
 * @package phpMyAdmin-Navigation
 */

/**
 * Loads child items of a node and executes a given callback
 *
 * @param isNode
 * @param $expandElem expander
 * @param callback    callback function
 *
 * @returns void
 */
function loadChildNodes(isNode, $expandElem, callback) {

    var $destination = null;
    var params = null;

    if (isNode) {
        if (!$expandElem.hasClass('expander')) {
            return;
        }
        $destination = $expandElem.closest('li');
        params = {
            aPath: $expandElem.find('span.aPath').text(),
            vPath: $expandElem.find('span.vPath').text(),
            pos: $expandElem.find('span.pos').text(),
            pos2_name: $expandElem.find('span.pos2_name').text(),
            pos2_value: $expandElem.find('span.pos2_value').text(),
            searchClause: '',
            searchClause2: ''
        };
        if ($expandElem.closest('ul').hasClass('search_results')) {
            params.searchClause = PMA_fastFilter.getSearchClause();
            params.searchClause2 = PMA_fastFilter.getSearchClause2($expandElem);
        }
    } else {
        $destination = $('#pma_navigation_tree_content');
        params = {
            aPath: $expandElem.attr('aPath'),
            vPath: $expandElem.attr('vPath'),
            pos: $expandElem.attr('pos'),
            pos2_name: '',
            pos2_value: '',
            searchClause: '',
            searchClause2: ''
        };
    }

    var url = $('#pma_navigation').find('a.navigation_url').attr('href');
    $.get(url, params, function (data) {
        if (typeof data !== 'undefined' && data.success === true) {
            $destination.find('div.list_container').remove(); // FIXME: Hack, there shouldn't be a list container there
            if (isNode) {
                $destination.append(data.message);
                $expandElem.addClass('loaded');
            } else {
                $destination.html(data.message);
                $destination.children()
                    .first()
                    .css({
                        border: '0px',
                        margin: '0em',
                        padding : '0em'
                    })
                    .slideDown('slow');
            }
            if (data._errors) {
                var $errors = $(data._errors);
                if ($errors.children().length > 0) {
                    $('#pma_errors').replaceWith(data._errors);
                }
            }
            if (callback && typeof callback == 'function') {
                callback(data);
            }
        } else if(data.redirect_flag == "1") {
            window.location.href += '&session_expired=1';
            window.location.reload();
        } else {
            var $throbber = $expandElem.find('img.throbber');
            $throbber.hide();
            var $icon = $expandElem.find('img.ic_b_plus');
            $icon.show();
            PMA_ajaxShowMessage(data.error, false);
        }
    });
}

/**
 * Collapses a node in navigation tree.
 *
 * @param $expandElem expander
 *
 * @returns void
 */
function collapseTreeNode($expandElem) {
    var $children = $expandElem.closest('li').children('div.list_container');
    var $icon = $expandElem.find('img');
    if ($expandElem.hasClass('loaded')) {
        if ($icon.is('.ic_b_minus')) {
            $icon.removeClass('ic_b_minus').addClass('ic_b_plus');
            $children.slideUp('fast');
        }
    }
    $expandElem.blur();
    $children.promise().done(navTreeStateUpdate);
}

/**
 * Traverse the navigation tree backwards to generate all the actual
 * and virtual paths, as well as the positions in the pagination at
 * various levels, if necessary.
 *
 * @return Object
 */
function traverseNavigationForPaths() {
    var params = {
        pos: $('#pma_navigation_tree').find('div.dbselector select').val()
    };
    if ($('#navi_db_select').length) {
        return params;
    }
    var count = 0;
    $('#pma_navigation_tree').find('a.expander:visible').each(function () {
        if ($(this).find('img').is('.ic_b_minus') &&
            $(this).closest('li').find('div.list_container .ic_b_minus').length === 0
        ) {
            params['n' + count + '_aPath'] = $(this).find('span.aPath').text();
            params['n' + count + '_vPath'] = $(this).find('span.vPath').text();

            var pos2_name = $(this).find('span.pos2_name').text();
            if (! pos2_name) {
                pos2_name = $(this)
                    .parent()
                    .parent()
                    .find('span.pos2_name:last')
                    .text();
            }
            var pos2_value = $(this).find('span.pos2_value').text();
            if (! pos2_value) {
                pos2_value = $(this)
                    .parent()
                    .parent()
                    .find('span.pos2_value:last')
                    .text();
            }

            params['n' + count + '_pos2_name'] = pos2_name;
            params['n' + count + '_pos2_value'] = pos2_value;

            params['n' + count + '_pos3_name'] = $(this).find('span.pos3_name').text();
            params['n' + count + '_pos3_value'] = $(this).find('span.pos3_value').text();
            count++;
        }
    });
    return params;
}

/**
 * Executed on page load
 */
$(function () {
    if (! $('#pma_navigation').length) {
        // Don't bother running any code if the navigation is not even on the page
        return;
    }

    // Do not let the page reload on submitting the fast filter
    $(document).on('submit', '.fast_filter', function (event) {
        event.preventDefault();
    });

    // Fire up the resize handlers
    new ResizeHandler();

    /**
     * opens/closes (hides/shows) tree elements
     * loads data via ajax
     */
    $(document).on('click', '#pma_navigation_tree a.expander', function (event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        var $icon = $(this).find('img');
        if ($icon.is('.ic_b_plus')) {
            expandTreeNode($(this));
        } else {
            collapseTreeNode($(this));
        }
    });

    /**
     * Register event handler for click on the reload
     * navigation icon at the top of the panel
     */
    $(document).on('click', '#pma_navigation_reload', function (event) {
        event.preventDefault();
        // reload icon object
        var $icon = $(this).find('img');
        // source of the hidden throbber icon
        var icon_throbber_src = $('#pma_navigation').find('.throbber').attr('src');
        // source of the reload icon
        var icon_reload_src = $icon.attr('src');
        // replace the source of the reload icon with the one for throbber
        $icon.attr('src', icon_throbber_src);
        PMA_reloadNavigation();
        // after one second, put back the reload icon
        setTimeout(function () {
            $icon.attr('src', icon_reload_src);
        }, 1000);
    });

    $(document).on("change", '#navi_db_select',  function (event) {
        if (! $(this).val()) {
            PMA_commonParams.set('db', '');
            PMA_reloadNavigation();
        }
        $(this).closest('form').trigger('submit');
    });

    /**
     * Register event handler for click on the collapse all
     * navigation icon at the top of the navigation tree
     */
    $(document).on('click', '#pma_navigation_collapse', function (event) {
        event.preventDefault();
        $('#pma_navigation_tree').find('a.expander').each(function() {
            var $icon = $(this).find('img');
            if ($icon.is('.ic_b_minus')) {
                $(this).click();
            }
        });
    });

    /**
     * Register event handler to toggle
     * the 'link with main panel' icon on mouseenter.
     */
    $(document).on('mouseenter', '#pma_navigation_sync', function (event) {
        event.preventDefault();
        var synced = $('#pma_navigation_tree').hasClass('synced');
        var $img = $('#pma_navigation_sync').children('img');
        if (synced) {
            $img.removeClass('ic_s_link').addClass('ic_s_unlink');
        } else {
            $img.removeClass('ic_s_unlink').addClass('ic_s_link');
        }
    });

    /**
     * Register event handler to toggle
     * the 'link with main panel' icon on mouseout.
     */
    $(document).on('mouseout', '#pma_navigation_sync', function (event) {
        event.preventDefault();
        var synced = $('#pma_navigation_tree').hasClass('synced');
        var $img = $('#pma_navigation_sync').children('img');
        if (synced) {
            $img.removeClass('ic_s_unlink').addClass('ic_s_link');
        } else {
            $img.removeClass('ic_s_link').addClass('ic_s_unlink');
        }
    });

    /**
     * Register event handler to toggle
     * the linking with main panel behavior
     */
    $(document).on('click', '#pma_navigation_sync', function (event) {
        event.preventDefault();
        var synced = $('#pma_navigation_tree').hasClass('synced');
        var $img = $('#pma_navigation_sync').children('img');
        if (synced) {
            $img
                .removeClass('ic_s_unlink')
                .addClass('ic_s_link')
                .attr('alt', PMA_messages.linkWithMain)
                .attr('title', PMA_messages.linkWithMain);
            $('#pma_navigation_tree')
                .removeClass('synced')
                .find('li.selected')
                .removeClass('selected');
        } else {
            $img
                .removeClass('ic_s_link')
                .addClass('ic_s_unlink')
                .attr('alt', PMA_messages.unlinkWithMain)
                .attr('title', PMA_messages.unlinkWithMain);
            $('#pma_navigation_tree').addClass('synced');
            PMA_showCurrentNavigation();
        }
    });

    /**
     * Bind all "fast filter" events
     */
    $(document).on('click', '#pma_navigation_tree li.fast_filter span', PMA_fastFilter.events.clear);
    $(document).on('focus', '#pma_navigation_tree li.fast_filter input.searchClause', PMA_fastFilter.events.focus);
    $(document).on('blur', '#pma_navigation_tree li.fast_filter input.searchClause', PMA_fastFilter.events.blur);
    $(document).on('keyup', '#pma_navigation_tree li.fast_filter input.searchClause', PMA_fastFilter.events.keyup);
    $(document).on('mouseover', '#pma_navigation_tree li.fast_filter input.searchClause', PMA_fastFilter.events.mouseover);

    /**
     * Ajax handler for pagination
     */
    $(document).on('click', '#pma_navigation_tree div.pageselector a.ajax', function (event) {
        event.preventDefault();
        PMA_navigationTreePagination($(this));
    });

    /**
     * Node highlighting
     */
    $(document).on(
        'mouseover',
        '#pma_navigation_tree.highlight li:not(.fast_filter)',
        function () {
            if ($('li:visible', this).length === 0) {
                $(this).addClass('activePointer');
            }
        }
    );
    $(document).on(
        'mouseout',
        '#pma_navigation_tree.highlight li:not(.fast_filter)',
        function () {
            $(this).removeClass('activePointer');
        }
    );

    /** Create a Routine, Trigger or Event */
    $(document).on('click', 'li.new_procedure a.ajax, li.new_function a.ajax', function (event) {
        event.preventDefault();
        var dialog = new RTE.object('routine');
        dialog.editorDialog(1, $(this));
    });
    $(document).on('click', 'li.new_trigger a.ajax', function (event) {
        event.preventDefault();
        var dialog = new RTE.object('trigger');
        dialog.editorDialog(1, $(this));
    });
    $(document).on('click', 'li.new_event a.ajax', function (event) {
        event.preventDefault();
        var dialog = new RTE.object('event');
        dialog.editorDialog(1, $(this));
    });

    /** Edit Routines, Triggers or Events */
    $(document).on('click', 'li.procedure > a.ajax, li.function > a.ajax', function (event) {
        event.preventDefault();
        var dialog = new RTE.object('routine');
        dialog.editorDialog(0, $(this));
    });
    $(document).on('click', 'li.trigger > a.ajax', function (event) {
        event.preventDefault();
        var dialog = new RTE.object('trigger');
        dialog.editorDialog(0, $(this));
    });
    $(document).on('click', 'li.event > a.ajax', function (event) {
        event.preventDefault();
        var dialog = new RTE.object('event');
        dialog.editorDialog(0, $(this));
    });

    /** Execute Routines */
    $(document).on('click', 'li.procedure div a.ajax img,' +
        ' li.function div a.ajax img', function (event) {
        event.preventDefault();
        var dialog = new RTE.object('routine');
        dialog.executeDialog($(this).parent());
    });
    /** Export Triggers and Events */
    $(document).on('click', 'li.trigger div:eq(1) a.ajax img,' +
        ' li.event div:eq(1) a.ajax img', function (event) {
        event.preventDefault();
        var dialog = new RTE.object();
        dialog.exportDialog($(this).parent());
    });

    /** New index */
    $(document).on('click', '#pma_navigation_tree li.new_index a.ajax', function (event) {
        event.preventDefault();
        var url = $(this).attr('href').substr(
            $(this).attr('href').indexOf('?') + 1
        ) + '&ajax_request=true';
        var title = PMA_messages.strAddIndex;
        indexEditorDialog(url, title);
    });

    /** Edit index */
    $(document).on('click', 'li.index a.ajax', function (event) {
        event.preventDefault();
        var url = $(this).attr('href').substr(
            $(this).attr('href').indexOf('?') + 1
        ) + '&ajax_request=true';
        var title = PMA_messages.strEditIndex;
        indexEditorDialog(url, title);
    });

    /** New view */
    $(document).on('click', 'li.new_view a.ajax', function (event) {
        event.preventDefault();
        PMA_createViewDialog($(this));
    });

    /** Hide navigation tree item */
    $(document).on('click', 'a.hideNavItem.ajax', function (event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href') + '&ajax_request=true',
            success: function (data) {
                if (typeof data !== 'undefined' && data.success === true) {
                    PMA_reloadNavigation();
                } else {
                    PMA_ajaxShowMessage(data.error);
                }
            }
        });
    });

    /** Display a dialog to choose hidden navigation items to show */
    $(document).on('click', 'a.showUnhide.ajax', function (event) {
        event.preventDefault();
        var $msg = PMA_ajaxShowMessage();
        $.get($(this).attr('href') + '&ajax_request=1', function (data) {
            if (typeof data !== 'undefined' && data.success === true) {
                PMA_ajaxRemoveMessage($msg);
                var buttonOptions = {};
                buttonOptions[PMA_messages.strClose] = function () {
                    $(this).dialog("close");
                };
                $('<div/>')
                    .attr('id', 'unhideNavItemDialog')
                    .append(data.message)
                    .dialog({
                        width: 400,
                        minWidth: 200,
                        modal: true,
                        buttons: buttonOptions,
                        title: PMA_messages.strUnhideNavItem,
                        close: function () {
                            $(this).remove();
                        }
                    });
            } else {
                PMA_ajaxShowMessage(data.error);
            }
        });
    });

    /** Show a hidden navigation tree item */
    $(document).on('click', 'a.unhideNavItem.ajax', function (event) {
        event.preventDefault();
        var $tr = $(this).parents('tr');
        var $msg = PMA_ajaxShowMessage();
        $.ajax({
            url: $(this).attr('href') + '&ajax_request=true',
            success: function (data) {
                PMA_ajaxRemoveMessage($msg);
                if (typeof data !== 'undefined' && data.success === true) {
                    $tr.remove();
                    PMA_reloadNavigation();
                } else {
                    PMA_ajaxShowMessage(data.error);
                }
            }
        });
    });

    // Add/Remove favorite table using Ajax.
    $(document).on("click", ".favorite_table_anchor", function (event) {
        event.preventDefault();
        $self = $(this);
        var anchor_id = $self.attr("id");
        if($self.data("favtargetn") !== null) {
            if($('a[data-favtargets="' + $self.data("favtargetn") + '"]').length > 0)
            {
                $('a[data-favtargets="' + $self.data("favtargetn") + '"]').trigger('click');
                return;
            }
        }

        $.ajax({
            url: $self.attr('href'),
            cache: false,
            type: 'POST',
            data: {
                favorite_tables: (isStorageSupported('localStorage') && typeof window.localStorage.favorite_tables !== 'undefined')
                    ? window.localStorage.favorite_tables
                    : ''
            },
            success: function (data) {
                if (data.changes) {
                    $('#pma_favorite_list').html(data.list);
                    $('#' + anchor_id).parent().html(data.anchor);
                    PMA_tooltip(
                        $('#' + anchor_id),
                        'a',
                        $('#' + anchor_id).attr("title")
                    );
                    // Update localStorage.
                    if (isStorageSupported('localStorage')) {
                        window.localStorage.favorite_tables = data.favorite_tables;
                    }
                } else {
                    PMA_ajaxShowMessage(data.message);
                }
            }
        });
    });

    // Check if session storage is supported
    if (isStorageSupported('sessionStorage')) {
        var storage = window.sessionStorage;
        // remove tree from storage if Navi_panel config form is submitted
        $(document).on('submit', 'form.config-form', function(event) {
            storage.removeItem('navTreePaths');
        });
        // Initialize if no previous state is defined
        if ($('#pma_navigation_tree_content').length &&
            typeof storage.navTreePaths === 'undefined'
        ) {
            navTreeStateUpdate();
        } else if (PMA_commonParams.get('server') === storage.server &&
            PMA_commonParams.get('token') === storage.token
        ) {
            // Reload the tree to the state before page refresh
            PMA_reloadNavigation(null, JSON.parse(storage.navTreePaths));
        }
    }
});

/**
 * updates the tree state in sessionStorage
 *
 * @returns void
 */
function navTreeStateUpdate() {
    // update if session storage is supported
    if (isStorageSupported('sessionStorage')) {
        var storage = window.sessionStorage;
        // try catch necessary here to detect whether
        // content to be stored exceeds storage capacity
        try {
            storage.setItem('navTreePaths', JSON.stringify(traverseNavigationForPaths()));
            storage.setItem('server', PMA_commonParams.get('server'));
            storage.setItem('token', PMA_commonParams.get('token'));
        } catch(error) {
            // storage capacity exceeded & old navigation tree
            // state is no more valid, so remove it
            storage.removeItem('navTreePaths');
            storage.removeItem('server');
            storage.removeItem('token');
        }
    }
}

/**
 * Expands a node in navigation tree.
 *
 * @param $expandElem expander
 * @param callback    callback function
 *
 * @returns void
 */
function expandTreeNode($expandElem, callback) {
    var $children = $expandElem.closest('li').children('div.list_container');
    var $icon = $expandElem.find('img');
    if ($expandElem.hasClass('loaded')) {
        if ($icon.is('.ic_b_plus')) {
            $icon.removeClass('ic_b_plus').addClass('ic_b_minus');
            $children.slideDown('fast');
        }
        if (callback && typeof callback == 'function') {
            callback.call();
        }
        $children.promise().done(navTreeStateUpdate);
    } else {
        var $throbber = $('#pma_navigation').find('.throbber')
            .first()
            .clone()
            .css({visibility: 'visible', display: 'block'})
            .click(false);
        $icon.hide();
        $throbber.insertBefore($icon);

        loadChildNodes(true, $expandElem, function (data) {
            if (typeof data !== 'undefined' && data.success === true) {
                var $destination = $expandElem.closest('li');
                $icon.removeClass('ic_b_plus').addClass('ic_b_minus');
                $children = $destination.children('div.list_container');
                $children.slideDown('fast');
                if ($destination.find('ul > li').length == 1) {
                    $destination.find('ul > li')
                        .find('a.expander.container')
                        .click();
                }
                if (callback && typeof callback == 'function') {
                    callback.call();
                }
                PMA_showFullName($destination);
            } else {
                PMA_ajaxShowMessage(data.error, false);
            }
            $icon.show();
            $throbber.remove();
            $children.promise().done(navTreeStateUpdate);
        });
    }
    $expandElem.blur();
}

/**
 * Auto-scrolls the newly chosen database
 *
 * @param  object   $element    The element to set to view
 * @param  boolean  $forceToTop Whether to force scroll to top
 *
 */
function scrollToView($element, $forceToTop) {
    var $container = $('#pma_navigation_tree_content');
    var elemTop = $element.offset().top - $container.offset().top;
    var textHeight = 20;
    var scrollPadding = 20; // extra padding from top of bottom when scrolling to view
    if (elemTop < 0 || $forceToTop) {
        $container.stop().animate({
            scrollTop: elemTop + $container.scrollTop() - scrollPadding
        });
    } else if (elemTop + textHeight > $container.height()) {
        $container.stop().animate({
            scrollTop: elemTop + textHeight - $container.height() + $container.scrollTop() + scrollPadding
        });
    }
}

/**
 * Expand the navigation and highlight the current database or table/view
 *
 * @returns void
 */
function PMA_showCurrentNavigation() {
    var db = PMA_commonParams.get('db');
    var table = PMA_commonParams.get('table');
    $('#pma_navigation_tree')
        .find('li.selected')
        .removeClass('selected');
    if (db) {
        var $dbItem = findLoadedItem(
            $('#pma_navigation_tree').find('> div'), db, 'database', !table
        );
        if ($('#navi_db_select').length &&
            $('option:selected', $('#navi_db_select')).length
        ) {
            if (! PMA_selectCurrentDb()) {
                return;
            }
            // If loaded database in navigation is not same as current one
            if ($('#pma_navigation_tree_content').find('span.loaded_db:first').text()
                !== $('#navi_db_select').val()
            ) {
                loadChildNodes(false, $('option:selected', $('#navi_db_select')), function (data) {
                    handleTableOrDb(table, $('#pma_navigation_tree_content'));
                    var $children = $('#pma_navigation_tree_content').children('div.list_container');
                    $children.promise().done(navTreeStateUpdate);
                });
            } else {
                handleTableOrDb(table, $('#pma_navigation_tree_content'));
            }
        } else if ($dbItem) {
            var $expander = $dbItem.children('div:first').children('a.expander');
            // if not loaded or loaded but collapsed
            if (! $expander.hasClass('loaded') ||
                $expander.find('img').is('.ic_b_plus')
            ) {
                expandTreeNode($expander, function () {
                    handleTableOrDb(table, $dbItem);
                });
            } else {
                handleTableOrDb(table, $dbItem);
            }
        }
    } else if ($('#navi_db_select').length && $('#navi_db_select').val()) {
        $('#navi_db_select').val('').hide().trigger('change');
    }
    PMA_showFullName($('#pma_navigation_tree'));

    function handleTableOrDb(table, $dbItem) {
        if (table) {
            loadAndHighlightTableOrView($dbItem, table);
        } else {
            var $container = $dbItem.children('div.list_container');
            var $tableContainer = $container.children('ul').children('li.tableContainer');
            if ($tableContainer.length > 0) {
                var $expander = $tableContainer.children('div:first').children('a.expander');
                $tableContainer.addClass('selected');
                expandTreeNode($expander, function () {
                    scrollToView($dbItem, true);
                });
            } else {
                scrollToView($dbItem, true);
            }
        }
    }

    function findLoadedItem($container, name, clazz, doSelect) {
        var ret = false;
        $container.children('ul').children('li').each(function () {
            var $li = $(this);
            // this is a navigation group, recurse
            if ($li.is('.navGroup')) {
                var $container = $li.children('div.list_container');
                var $childRet = findLoadedItem(
                    $container, name, clazz, doSelect
                );
                if ($childRet) {
                    ret = $childRet;
                    return false;
                }
            } else { // this is a real navigation item
                // name and class matches
                if (((clazz && $li.is('.' + clazz)) || ! clazz) &&
                        $li.children('a').text() == name) {
                    if (doSelect) {
                        $li.addClass('selected');
                    }
                    // taverse up and expand and parent navigation groups
                    $li.parents('.navGroup').each(function () {
                        var $cont = $(this).children('div.list_container');
                        if (! $cont.is(':visible')) {
                            $(this)
                                .children('div:first')
                                .children('a.expander')
                                .click();
                        }
                    });
                    ret = $li;
                    return false;
                }
            }
        });
        return ret;
    }

    function loadAndHighlightTableOrView($dbItem, itemName) {
        var $container = $dbItem.children('div.list_container');
        var $expander;
        var $whichItem = isItemInContainer($container, itemName, 'li.table, li.view');
        //If item already there in some container
        if ($whichItem) {
            //get the relevant container while may also be a subcontainer
            var $relatedContainer = $whichItem.closest('li.subContainer').length
                ? $whichItem.closest('li.subContainer')
                : $dbItem;
            $whichItem = findLoadedItem(
                $relatedContainer.children('div.list_container'),
                itemName, null, true
            );
            //Show directly
            showTableOrView($whichItem, $relatedContainer.children('div:first').children('a.expander'));
        //else if item not there, try loading once
        } else {
            var $sub_containers = $dbItem.find('.subContainer');
            //If there are subContainers i.e. tableContainer or viewContainer
            if($sub_containers.length > 0) {
                var $containers = [];
                $sub_containers.each(function (index) {
                    $containers[index] = $(this);
                    $expander = $containers[index]
                        .children('div:first')
                        .children('a.expander');
                    if (! $expander.hasClass('loaded')) {
                        loadAndShowTableOrView($expander, $containers[index], itemName);
                    }
                });
            // else if no subContainers
            } else {
                $expander = $dbItem
                    .children('div:first')
                    .children('a.expander');
                if (! $expander.hasClass('loaded')) {
                    loadAndShowTableOrView($expander, $dbItem, itemName);
                }
            }
        }
    }

    function loadAndShowTableOrView($expander, $relatedContainer, itemName) {
        loadChildNodes(true, $expander, function (data) {
            var $whichItem = findLoadedItem(
                $relatedContainer.children('div.list_container'),
                itemName, null, true
            );
            if ($whichItem) {
                showTableOrView($whichItem, $expander);
            }
        });
    }

    function showTableOrView($whichItem, $expander) {
        expandTreeNode($expander, function (data) {
            if ($whichItem) {
                scrollToView($whichItem, false);
            }
        });
    }

    function isItemInContainer($container, name, clazz)
    {
        var $whichItem = null;
        $items = $container.find(clazz);
        var found = false;
        $items.each(function () {
            if ($(this).children('a').text() == name) {
                $whichItem = $(this);
                return false;
            }
        });
        return $whichItem;
    }
}

/**
 * Disable navigation panel settings
 *
 * @return void
 */
function PMA_disableNaviSettings() {
    $('#pma_navigation_settings_icon').addClass('hide');
    $('#pma_navigation_settings').remove();
}

/**
 * Ensure that navigation panel settings is properly setup.
 * If not, set it up
 *
 * @return void
 */
function PMA_ensureNaviSettings(selflink) {
    $('#pma_navigation_settings_icon').removeClass('hide');

    if (!$('#pma_navigation_settings').length) {
        var params = {
            getNaviSettings: true
        };
        var url = $('#pma_navigation').find('a.navigation_url').attr('href');
        $.post(url, params, function (data) {
            if (typeof data !== 'undefined' && data.success) {
                $('#pma_navi_settings_container').html(data.message);
                setupRestoreField();
                setupValidation();
                setupConfigTabs();
                $('#pma_navigation_settings').find('form').attr('action', selflink);
            } else {
                PMA_ajaxShowMessage(data.error);
            }
        });
    } else {
        $('#pma_navigation_settings').find('form').attr('action', selflink);
    }
}

/**
 * Reloads the whole navigation tree while preserving its state
 *
 * @param  function     the callback function
 * @param  Object       stored navigation paths
 *
 * @return void
 */
function PMA_reloadNavigation(callback, paths) {
    var params = {
        reload: true,
        no_debug: true
    };
    paths = paths || traverseNavigationForPaths();
    $.extend(params, paths);
    if ($('#navi_db_select').length) {
        params.db = PMA_commonParams.get('db');
        requestNaviReload(params);
        return;
    }
    requestNaviReload(params);

    function requestNaviReload(params) {
        var url = $('#pma_navigation').find('a.navigation_url').attr('href');
        $.post(url, params, function (data) {
            if (typeof data !== 'undefined' && data.success) {
                $('#pma_navigation_tree').html(data.message).children('div').show();
                if ($('#pma_navigation_tree').hasClass('synced')) {
                    PMA_selectCurrentDb();
                    PMA_showCurrentNavigation();
                }
                // Fire the callback, if any
                if (typeof callback === 'function') {
                    callback.call();
                }
                navTreeStateUpdate();
            } else {
                PMA_ajaxShowMessage(data.error);
            }
        });
    }
}

function PMA_selectCurrentDb() {
    var $naviDbSelect = $('#navi_db_select');

    if (!$naviDbSelect.length) {
        return false;
    }

    if (PMA_commonParams.get('db')) { // db selected
        $naviDbSelect.show();
    }

    $naviDbSelect.val(PMA_commonParams.get('db'));
    return $naviDbSelect.val() === PMA_commonParams.get('db');

}

/**
 * Handles any requests to change the page in a branch of a tree
 *
 * This can be called from link click or select change event handlers
 *
 * @param object $this A jQuery object that points to the element that
 * initiated the action of changing the page
 *
 * @return void
 */
function PMA_navigationTreePagination($this) {
    var $msgbox = PMA_ajaxShowMessage();
    var isDbSelector = $this.closest('div.pageselector').is('.dbselector');
    var url, params;
    if ($this[0].tagName == 'A') {
        url = $this.attr('href');
        params = 'ajax_request=true';
    } else { // tagName == 'SELECT'
        url = 'navigation.php';
        params = $this.closest("form").serialize() + '&ajax_request=true';
    }
    var searchClause = PMA_fastFilter.getSearchClause();
    if (searchClause) {
        params += '&searchClause=' + encodeURIComponent(searchClause);
    }
    if (isDbSelector) {
        params += '&full=true';
    } else {
        var searchClause2 = PMA_fastFilter.getSearchClause2($this);
        if (searchClause2) {
            params += '&searchClause2=' + encodeURIComponent(searchClause2);
        }
    }
    $.post(url, params, function (data) {
        PMA_ajaxRemoveMessage($msgbox);
        if (typeof data !== 'undefined' && data.success) {
            if (isDbSelector) {
                var val = PMA_fastFilter.getSearchClause();
                $('#pma_navigation_tree')
                    .html(data.message)
                    .children('div')
                    .show();
                if (val) {
                    $('#pma_navigation_tree')
                        .find('li.fast_filter input.searchClause')
                        .val(val);
                }
            } else {
                var $parent = $this.closest('div.list_container').parent();
                var val = PMA_fastFilter.getSearchClause2($this);
                $this.closest('div.list_container').html(
                    $(data.message).children().show()
                );
                if (val) {
                    $parent.find('li.fast_filter input.searchClause').val(val);
                }
                $parent.find('span.pos2_value:first').text(
                    $parent.find('span.pos2_value:last').text()
                );
                $parent.find('span.pos3_value:first').text(
                    $parent.find('span.pos3_value:last').text()
                );
            }
        } else {
            PMA_ajaxShowMessage(data.error);
        }
        navTreeStateUpdate();
    });
}

/**
 * @var ResizeHandler Custom object that manages the resizing of the navigation
 *
 * XXX: Must only be ever instanciated once
 * XXX: Inside event handlers the 'this' object is accessed as 'event.data.resize_handler'
 */
var ResizeHandler = function () {
    /**
     * @var int panel_width Used by the collapser to know where to go
     *                      back to when uncollapsing the panel
     */
    this.panel_width = 0;
    /**
     * @var string left Used to provide support for RTL languages
     */
    this.left = $('html').attr('dir') == 'ltr' ? 'left' : 'right';
    /**
     * Adjusts the width of the navigation panel to the specified value
     *
     * @param int pos Navigation width in pixels
     *
     * @return void
     */
    this.setWidth = function (pos) {
        var $resizer = $('#pma_navigation_resizer');
        var resizer_width = $resizer.width();
        var $collapser = $('#pma_navigation_collapser');
        $('#pma_navigation').width(pos);
        $('body').css('margin-' + this.left, pos + 'px');
        $("#floating_menubar, #pma_console")
            .css('margin-' + this.left, (pos + resizer_width) + 'px');
        $resizer.css(this.left, pos + 'px');
        if (pos === 0) {
            $collapser
                .css(this.left, pos + resizer_width)
                .html(this.getSymbol(pos))
                .prop('title', PMA_messages.strShowPanel);
        } else {
            $collapser
                .css(this.left, pos)
                .html(this.getSymbol(pos))
                .prop('title', PMA_messages.strHidePanel);
        }
        setTimeout(function () {
            $(window).trigger('resize');
        }, 4);
    };
    /**
     * Returns the horizontal position of the mouse,
     * relative to the outer side of the navigation panel
     *
     * @param int pos Navigation width in pixels
     *
     * @return void
     */
    this.getPos = function (event) {
        var pos = event.pageX;
        var windowWidth = $(window).width();
        var windowScroll = $(window).scrollLeft();
        pos = pos - windowScroll;
        if (this.left != 'left') {
            pos = windowWidth - event.pageX;
        }
        if (pos < 0) {
            pos = 0;
        } else if (pos + 100 >= windowWidth) {
            pos = windowWidth - 100;
        } else {
            this.panel_width = 0;
        }
        return pos;
    };
    /**
     * Returns the HTML code for the arrow symbol used in the collapser
     *
     * @param int width The width of the panel
     *
     * @return string
     */
    this.getSymbol = function (width) {
        if (this.left == 'left') {
            if (width === 0) {
                return '&rarr;';
            } else {
                return '&larr;';
            }
        } else {
            if (width === 0) {
                return '&larr;';
            } else {
                return '&rarr;';
            }
        }
    };
    /**
     * Event handler for initiating a resize of the panel
     *
     * @param object e Event data (contains a reference to resizeHandler)
     *
     * @return void
     */
    this.mousedown = function (event) {
        event.preventDefault();
        $(document)
            .bind('mousemove', {'resize_handler': event.data.resize_handler},
                $.throttle(event.data.resize_handler.mousemove, 4))
            .bind('mouseup', {'resize_handler': event.data.resize_handler},
                event.data.resize_handler.mouseup);
        $('body').css('cursor', 'col-resize');
    };
    /**
     * Event handler for terminating a resize of the panel
     *
     * @param object e Event data (contains a reference to resizeHandler)
     *
     * @return void
     */
    this.mouseup = function (event) {
        $('body').css('cursor', '');
        $.cookie('pma_navi_width', event.data.resize_handler.getPos(event));
        $('#topmenu').menuResizer('resize');
        $(document)
            .unbind('mousemove')
            .unbind('mouseup');
    };
    /**
     * Event handler for updating the panel during a resize operation
     *
     * @param object e Event data (contains a reference to resizeHandler)
     *
     * @return void
     */
    this.mousemove = function (event) {
        event.preventDefault();
        var pos = event.data.resize_handler.getPos(event);
        event.data.resize_handler.setWidth(pos);
        if ($('.sticky_columns').length !== 0) {
            handleAllStickyColumns();
        }
    };
    /**
     * Event handler for collapsing the panel
     *
     * @param object e Event data (contains a reference to resizeHandler)
     *
     * @return void
     */
    this.collapse = function (event) {
        event.preventDefault();
        var panel_width = event.data.resize_handler.panel_width;
        var width = $('#pma_navigation').width();
        if (width === 0 && panel_width === 0) {
            panel_width = 240;
        }
        event.data.resize_handler.setWidth(panel_width);
        event.data.resize_handler.panel_width = width;
    };
    /**
     * Event handler for resizing the navigation tree height on window resize
     *
     * @return void
     */
    this.treeResize = function (event) {
        var $nav        = $("#pma_navigation"),
            $nav_tree   = $("#pma_navigation_tree"),
            $nav_header = $("#pma_navigation_header"),
            $nav_tree_content = $("#pma_navigation_tree_content");
        $nav_tree.height($nav.height() - $nav_header.height());
        if ($nav_tree_content.length > 0) {
            $nav_tree_content.height($nav_tree.height() - $nav_tree_content.position().top);
        } else {
            //TODO: in fast filter search response there is no #pma_navigation_tree_content, needs to be added in php
            $nav_tree.css({
                'overflow-y': 'auto'
            });
        }
        // Set content bottom space beacuse of console
        $('body').css('margin-bottom', $('#pma_console').height() + 'px');
    };
    /* Initialisation section begins here */
    if ($.cookie('pma_navi_width')) {
        // If we have a cookie, set the width of the panel to its value
        var pos = Math.abs(parseInt($.cookie('pma_navi_width'), 10) || 0);
        this.setWidth(pos);
        $('#topmenu').menuResizer('resize');
    }
    // Register the events for the resizer and the collapser
    $(document).on('mousedown', '#pma_navigation_resizer', {'resize_handler': this}, this.mousedown);
    $(document).on('click', '#pma_navigation_collapser', {'resize_handler': this}, this.collapse);

    // Add the correct arrow symbol to the collapser
    $('#pma_navigation_collapser').html(this.getSymbol($('#pma_navigation').width()));
    // Fix navigation tree height
    $(window).on('resize', this.treeResize);
    // need to call this now and then, browser might decide
    // to show/hide horizontal scrollbars depending on page content width
    setInterval(this.treeResize, 2000);
    this.treeResize();
}; // End of ResizeHandler

/**
 * @var object PMA_fastFilter Handles the functionality that allows filtering
 *                            of the items in a branch of the navigation tree
 */
var PMA_fastFilter = {
    /**
     * Construct for the asynchronous fast filter functionality
     *
     * @param object $this        A jQuery object pointing to the list container
     *                            which is the nearest parent of the fast filter
     * @param string searchClause The query string for the filter
     *
     * @return new PMA_fastFilter.filter object
     */
    filter: function ($this, searchClause) {
        /**
         * @var object $this A jQuery object pointing to the list container
         *                   which is the nearest parent of the fast filter
         */
        this.$this = $this;
        /**
         * @var bool searchClause The query string for the filter
         */
        this.searchClause = searchClause;
        /**
         * @var object $clone A clone of the original contents
         *                    of the navigation branch before
         *                    the fast filter was applied
         */
        this.$clone = $this.clone();
        /**
         * @var object xhr A reference to the ajax request that is currently running
         */
        this.xhr = null;
        /**
         * @var int timeout Used to delay the request for asynchronous search
         */
        this.timeout = null;

        var $filterInput = $this.find('li.fast_filter input.searchClause');
        if ($filterInput.length !== 0 &&
            $filterInput.val() !== '' &&
            $filterInput.val() != $filterInput[0].defaultValue
        ) {
            this.request();
        }
    },
    /**
     * Gets the query string from the database fast filter form
     *
     * @return string
     */
    getSearchClause: function () {
        var retval = '';
        var $input = $('#pma_navigation_tree')
            .find('li.fast_filter.db_fast_filter input.searchClause');
        if ($input.length && $input.val() != $input[0].defaultValue) {
            retval = $input.val();
        }
        return retval;
    },
    /**
     * Gets the query string from a second level item's fast filter form
     * The retrieval is done by trasversing the navigation tree backwards
     *
     * @return string
     */
    getSearchClause2: function ($this) {
        var $filterContainer = $this.closest('div.list_container');
        var $filterInput = $([]);
        if ($filterContainer
            .find('li.fast_filter:not(.db_fast_filter) input.searchClause')
            .length !== 0) {
            $filterInput = $filterContainer
                .find('li.fast_filter:not(.db_fast_filter) input.searchClause');
        }
        var searchClause2 = '';
        if ($filterInput.length !== 0 &&
            $filterInput.first().val() != $filterInput[0].defaultValue
        ) {
            searchClause2 = $filterInput.val();
        }
        return searchClause2;
    },
    /**
     * @var hash events A list of functions that are bound to DOM events
     *                  at the top of this file
     */
    events: {
        focus: function (event) {
            var $obj = $(this).closest('div.list_container');
            if (! $obj.data('fastFilter')) {
                $obj.data(
                    'fastFilter',
                    new PMA_fastFilter.filter($obj, $(this).val())
                );
            }
            if ($(this).val() == this.defaultValue) {
                $(this).val('');
            } else {
                $(this).select();
            }
        },
        blur: function (event) {
            if ($(this).val() === '') {
                $(this).val(this.defaultValue);
            }
            var $obj = $(this).closest('div.list_container');
            if ($(this).val() == this.defaultValue && $obj.data('fastFilter')) {
                $obj.data('fastFilter').restore();
            }
        },
        mouseover: function (event) {
            var message = '';
            if ($(this).closest('li.fast_filter').is('.db_fast_filter')) {
                message = PMA_messages.strHoverDbFastFilter;
            } else {
                var node_type = $(this).siblings("input[name='pos2_name']").val();
                var node_name = PMA_messages.strTables;
                if (node_type == 'views') {
                    node_name = PMA_messages.strViews;
                } else if (node_type == 'procedures') {
                    node_name = PMA_messages.strProcedures;
                } else if (node_type == 'functions') {
                    node_name = PMA_messages.strFunctions;
                } else if (node_type == 'events') {
                    node_name = PMA_messages.strEvents;
                }
                message = PMA_sprintf(PMA_messages.strHoverFastFilter, node_name);
            }
            PMA_tooltip($(this), 'input', message);
        },
        keyup: function (event) {
            var $obj = $(this).closest('div.list_container');
            var str = '';
            if ($(this).val() != this.defaultValue && $(this).val() !== '') {
                $obj.find('div.pageselector').hide();
                str = $(this).val();
            }

            /**
             * FIXME at the server level a value match is done while on
             * the client side it is a regex match. These two should be aligned
             */

            // regex used for filtering.
            var regex;
            try {
                regex = new RegExp(str, 'i');
            } catch (err) {
                return;
            }

            // this is the div that houses the items to be filtered by this filter.
            var outerContainer;
            if ($(this).closest('li.fast_filter').is('.db_fast_filter')) {
                outerContainer = $('#pma_navigation_tree_content');
            } else {
                outerContainer = $obj;
            }

            // filters items that are directly under the div as well as grouped in
            // groups. Does not filter child items (i.e. a database search does
            // not filter tables)
            var item_filter = function($curr) {
                $curr.children('ul').children('li.navGroup').each(function() {
                    $(this).children('div.list_container').each(function() {
                        item_filter($(this)); // recursive
                    });
                });
                $curr.children('ul').children('li').children('a').not('.container').each(function() {
                    if (regex.test($(this).text())) {
                        $(this).parent().show().removeClass('hidden');
                    } else {
                        $(this).parent().hide().addClass('hidden');
                    }
                });
            };
            item_filter(outerContainer);

            // hides containers that does not have any visible children
            var container_filter = function ($curr) {
                $curr.children('ul').children('li.navGroup').each(function() {
                    var $group = $(this);
                    $group.children('div.list_container').each(function() {
                        container_filter($(this)); // recursive
                    });
                    $group.show().removeClass('hidden');
                    if ($group.children('div.list_container').children('ul')
                            .children('li').not('.hidden').length === 0) {
                        $group.hide().addClass('hidden');
                    }
                });
            };
            container_filter(outerContainer);

            if ($(this).val() != this.defaultValue && $(this).val() !== '') {
                if (! $obj.data('fastFilter')) {
                    $obj.data(
                        'fastFilter',
                        new PMA_fastFilter.filter($obj, $(this).val())
                    );
                } else {
                    if (event.keyCode == 13) {
                        $obj.data('fastFilter').update($(this).val());
                    }
                }
            } else if ($obj.data('fastFilter')) {
                $obj.data('fastFilter').restore(true);
            }
        },
        clear: function (event) {
            event.stopPropagation();
            // Clear the input and apply the fast filter with empty input
            var filter = $(this).closest('div.list_container').data('fastFilter');
            if (filter) {
                filter.restore();
            }
            var value = $(this).prev()[0].defaultValue;
            $(this).prev().val(value).trigger('keyup');
        }
    }
};
/**
 * Handles a change in the search clause
 *
 * @param string searchClause The query string for the filter
 *
 * @return void
 */
PMA_fastFilter.filter.prototype.update = function (searchClause) {
    if (this.searchClause != searchClause) {
        this.searchClause = searchClause;
        this.request();
    }
};
/**
 * After a delay of 250mS, initiates a request to retrieve search results
 * Multiple calls to this function will always abort the previous request
 *
 * @return void
 */
PMA_fastFilter.filter.prototype.request = function () {
    var self = this;
    if (self.$this.find('li.fast_filter').find('img.throbber').length === 0) {
        self.$this.find('li.fast_filter').append(
            $('<div class="throbber"></div>').append(
                $('#pma_navigation_content')
                    .find('img.throbber')
                    .clone()
                    .css({visibility: 'visible', display: 'block'})
            )
        );
    }
    if (self.xhr) {
        self.xhr.abort();
    }
    var url = $('#pma_navigation').find('a.navigation_url').attr('href');
    var params = self.$this.find('> ul > li > form.fast_filter').first().serialize();
    if (self.$this.find('> ul > li > form.fast_filter:first input[name=searchClause]').length === 0) {
        var $input = $('#pma_navigation_tree').find('li.fast_filter.db_fast_filter input.searchClause');
        if ($input.length && $input.val() != $input[0].defaultValue) {
            params += '&searchClause=' + encodeURIComponent($input.val());
        }
    }
    self.xhr = $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        data: params,
        complete: function (jqXHR, status) {
            if (status != 'abort') {
                var data = $.parseJSON(jqXHR.responseText);
                self.$this.find('li.fast_filter').find('div.throbber').remove();
                if (data && data.results) {
                    self.swap.apply(self, [data.message]);
                }
            }
        }
    });
};
/**
 * Replaces the contents of the navigation branch with the search results
 *
 * @param string list The search results
 *
 * @return void
 */
PMA_fastFilter.filter.prototype.swap = function (list) {
    this.$this
        .html($(list).html())
        .children()
        .show()
        .end()
        .find('li.fast_filter input.searchClause')
        .val(this.searchClause);
    this.$this.data('fastFilter', this);
};
/**
 * Restores the navigation to the original state after the fast filter is cleared
 *
 * @param bool focus Whether to also focus the input box of the fast filter
 *
 * @return void
 */
PMA_fastFilter.filter.prototype.restore = function (focus) {
    if(this.$this.children('ul').first().hasClass('search_results')) {
        this.$this.html(this.$clone.html()).children().show();
        this.$this.data('fastFilter', this);
        if (focus) {
            this.$this.find('li.fast_filter input.searchClause').focus();
        }
    }
    this.searchClause = '';
    this.$this.find('div.pageselector').show();
    this.$this.find('div.throbber').remove();
};

/**
 * Show full name when cursor hover and name not shown completely
 *
 * @param object $containerELem Container element
 *
 * @return void
 */
function PMA_showFullName($containerELem) {

    $containerELem.find('.hover_show_full').mouseenter(function() {
        /** mouseenter */
        var $this = $(this);
        var thisOffset = $this.offset();
        if($this.text() === '') {
            return;
        }
        var $parent = $this.parent();
        if(  ($parent.offset().left + $parent.outerWidth())
           < (thisOffset.left + $this.outerWidth()))
        {
            var $fullNameLayer = $('#full_name_layer');
            if($fullNameLayer.length === 0)
            {
                $('body').append('<div id="full_name_layer" class="hide"></div>');
                $('#full_name_layer').mouseleave(function() {
                    /** mouseleave */
                    $(this).addClass('hide')
                           .removeClass('hovering');
                }).mouseenter(function() {
                    /** mouseenter */
                    $(this).addClass('hovering');
                });
                $fullNameLayer = $('#full_name_layer');
            }
            $fullNameLayer.removeClass('hide');
            $fullNameLayer.css({left: thisOffset.left, top: thisOffset.top});
            $fullNameLayer.html($this.clone());
            setTimeout(function() {
                if(! $fullNameLayer.hasClass('hovering'))
                {
                    $fullNameLayer.trigger('mouseleave');
                }
            }, 200);
        }
    });
}
;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * @fileoverview    function used for index manipulation pages
 * @name            Table Structure
 *
 * @requires    jQuery
 * @requires    jQueryUI
 * @required    js/functions.js
 */

/**
 * Hides/shows the inputs and submits appropriately depending
 * on whether the index type chosen is 'SPATIAL' or not.
 */
function checkIndexType()
{
    /**
     * @var Object Dropdown to select the index choice.
     */
    var $select_index_choice = $('#select_index_choice');
    /**
     * @var Object Dropdown to select the index type.
     */
    var $select_index_type = $('#select_index_type');
    /**
     * @var Object Table header for the size column.
     */
    var $size_header = $('#index_columns').find('thead tr th:nth-child(2)');
    /**
     * @var Object Inputs to specify the columns for the index.
     */
    var $column_inputs = $('select[name="index[columns][names][]"]');
    /**
     * @var Object Inputs to specify sizes for columns of the index.
     */
    var $size_inputs = $('input[name="index[columns][sub_parts][]"]');
    /**
     * @var Object Footer containg the controllers to add more columns
     */
    var $add_more = $('#index_frm').find('.add_more');

    if ($select_index_choice.val() == 'SPATIAL') {
        // Disable and hide the size column
        $size_header.hide();
        $size_inputs.each(function () {
            $(this)
                .prop('disabled', true)
                .parent('td').hide();
        });

        // Disable and hide the columns of the index other than the first one
        var initial = true;
        $column_inputs.each(function () {
            $column_input = $(this);
            if (! initial) {
                $column_input
                    .prop('disabled', true)
                    .parent('td').hide();
            } else {
                initial = false;
            }
        });

        // Hide controllers to add more columns
        $add_more.hide();
    } else {
        // Enable and show the size column
        $size_header.show();
        $size_inputs.each(function () {
            $(this)
                .prop('disabled', false)
                .parent('td').show();
        });

        // Enable and show the columns of the index
        $column_inputs.each(function () {
            $(this)
                .prop('disabled', false)
                .parent('td').show();
        });

        // Show controllers to add more columns
        $add_more.show();
    }

    if ($select_index_choice.val() == 'SPATIAL' ||
            $select_index_choice.val() == 'FULLTEXT') {
        $select_index_type.val('').prop('disabled', true);
    } else {
        $select_index_type.prop('disabled', false)
    }
}

/**
 * Sets current index information into form parameters.
 *
 * @param array  source_array Array containing index columns
 * @param string index_choice Choice of index
 *
 * @return void
 */
function PMA_setIndexFormParameters(source_array, index_choice)
{
    if (index_choice == 'index') {
        $('input[name="indexes"]').val(JSON.stringify(source_array));
    } else {
        $('input[name="' + index_choice + '_indexes"]').val(JSON.stringify(source_array));
    }
}

/**
 * Removes a column from an Index.
 *
 * @param string col_index Index of column in form
 *
 * @return void
 */
function PMA_removeColumnFromIndex(col_index)
{
    // Get previous index details.
    var previous_index = $('select[name="field_key[' + col_index + ']"]')
        .attr('data-index');
    if (previous_index.length) {
        previous_index = previous_index.split(',');
        var source_array = PMA_getIndexArray(previous_index[0]);
        if (source_array == null) {
            return;
        }

        // Remove column from index array.
        var source_length = source_array[previous_index[1]].columns.length;
        for (var i=0; i<source_length; i++) {
            if (source_array[previous_index[1]].columns[i].col_index == col_index) {
                source_array[previous_index[1]].columns.splice(i, 1);
            }
        }

        // Remove index completely if no columns left.
        if (source_array[previous_index[1]].columns.length === 0) {
            source_array.splice(previous_index[1], 1);
        }

        // Update current index details.
        $('select[name="field_key[' + col_index + ']"]').attr('data-index', '');
        // Update form index parameters.
        PMA_setIndexFormParameters(source_array, previous_index[0].toLowerCase());
    }
}

/**
 * Adds a column to an Index.
 *
 * @param array  source_array Array holding corresponding indexes
 * @param string array_index  Index of an INDEX in array
 * @param string index_choice Choice of Index
 * @param string col_index    Index of column on form
 *
 * @return void
 */
function PMA_addColumnToIndex(source_array, array_index, index_choice, col_index)
{
    if (col_index >= 0) {
        // Remove column from other indexes (if any).
        PMA_removeColumnFromIndex(col_index);
    }
    var index_name = $('input[name="index[Key_name]"]').val();
    var index_comment = $('input[name="index[Index_comment]"]').val();
    var key_block_size = $('input[name="index[Key_block_size]"]').val();
    var parser = $('input[name="index[Parser]"]').val();
    var index_type = $('select[name="index[Index_type]"]').val();
    var columns = [];
    $('#index_columns').find('tbody').find('tr').each(function () {
        // Get columns in particular order.
        var col_index = $(this).find('select[name="index[columns][names][]"]').val();
        var size = $(this).find('input[name="index[columns][sub_parts][]"]').val();
        columns.push({
            'col_index': col_index,
            'size': size
        });
    });

    // Update or create an index.
    source_array[array_index] = {
        'Key_name': index_name,
        'Index_comment': index_comment,
        'Index_choice': index_choice.toUpperCase(),
        'Key_block_size': key_block_size,
        'Parser': parser,
        'Index_type': index_type,
        'columns': columns
    };

    // Display index name (or column list)
    var displayName = index_name;
    if (displayName == '') {
        var columnNames = [];
        $.each(columns, function () {
            columnNames.push($('input[name="field_name[' +  this.col_index + ']"]').val());
        });
        displayName = '[' + columnNames.join(', ') + ']';
    }
    $.each(columns, function () {
        var id = 'index_name_' + this.col_index + '_8';
        var $name = $('#' + id);
        if ($name.length == 0) {
            $name = $('<a id="' + id + '" href="#" class="ajax show_index_dialog"></a>');
            $name.insertAfter($('select[name="field_key[' + this.col_index + ']"]'));
        }
        var $text = $('<small>').text(displayName);
        $name.html($text);
    });

    if (col_index >= 0) {
        // Update index details on form.
        $('select[name="field_key[' + col_index + ']"]')
            .attr('data-index', index_choice + ',' + array_index);
    }
    PMA_setIndexFormParameters(source_array, index_choice.toLowerCase());
}

/**
 * Get choices list for a column to create a composite index with.
 *
 * @param string index_choice Choice of index
 * @param array  source_array Array hodling columns for particular index
 *
 * @return jQuery Object
 */
function PMA_getCompositeIndexList(source_array, col_index)
{
    // Remove any previous list.
    if ($('#composite_index_list').length) {
        $('#composite_index_list').remove();
    }

    // Html list.
    var $composite_index_list = $(
        '<ul id="composite_index_list">' +
        '<div>' + PMA_messages.strCompositeWith + '</div>' +
        '</ul>'
    );

    // Add each column to list available for composite index.
    var source_length = source_array.length;
    var already_present = false;
    for (var i=0; i<source_length; i++) {
        var sub_array_len = source_array[i].columns.length;
        var column_names = [];
        for (var j=0; j<sub_array_len; j++) {
            column_names.push(
                $('input[name="field_name[' + source_array[i].columns[j].col_index + ']"]').val()
            );

            if (col_index == source_array[i].columns[j].col_index) {
                already_present = true;
            }
        }

        $composite_index_list.append(
            '<li>' +
            '<input type="radio" name="composite_with" ' +
            (already_present ? 'checked="checked"' : '') +
            ' id="composite_index_' + i + '" value="' + i + '">' +
            '<label for="composite_index_' + i + '">' + column_names.join(', ') +
            '</lablel>' +
            '</li>'
        );
    }

    return $composite_index_list;
}

/**
 * Shows 'Add Index' dialog.
 *
 * @param array  source_array   Array holding particluar index
 * @param string array_index    Index of an INDEX in array
 * @param array  target_columns Columns for an INDEX
 * @param string col_index      Index of column on form
 * @param object index          Index detail object
 *
 * @return void
 */
function PMA_showAddIndexDialog(source_array, array_index, target_columns, col_index, index)
{
    // Prepare post-data.
    var $table = $('input[name="table"]');
    var table = $table.length > 0 ? $table.val() : '';
    var post_data = {
        token: $('input[name="token"]').val(),
        server:  $('input[name="server"]').val(),
        db: $('input[name="db"]').val(),
        table: table,
        ajax_request: 1,
        create_edit_table: 1,
        index: index
    };

    var columns = {};
    for (var i=0; i<target_columns.length; i++) {
        var column_name = $('input[name="field_name[' + target_columns[i] + ']"]').val();
        var column_type = $('select[name="field_type[' + target_columns[i] + ']"]').val().toLowerCase();
        columns[column_name] = [column_type, target_columns[i]];
    }
    post_data.columns = JSON.stringify(columns);

    var button_options = {};
    button_options[PMA_messages.strGo] = function () {
        var is_missing_value = false;
        $('select[name="index[columns][names][]"]').each(function () {
            if ($(this).val() === '') {
                is_missing_value = true;
            }
        });

        if (! is_missing_value) {
            PMA_addColumnToIndex(
                source_array,
                array_index,
                index.Index_choice,
                col_index
            );
        } else {
            PMA_ajaxShowMessage(
                '<div class="error"><img src="themes/dot.gif" title="" alt=""' +
                ' class="icon ic_s_error" /> ' + PMA_messages.strMissingColumn +
                ' </div>', false
            );

            return false;
        }

        $(this).dialog('close');
    };
    button_options[PMA_messages.strCancel] = function () {
        if (col_index >= 0) {
            // Handle state on 'Cancel'.
            var $select_list = $('select[name="field_key[' + col_index + ']"]');
            if (! $select_list.attr('data-index').length) {
                $select_list.find('option[value*="none"]').attr('selected', 'selected');
            } else {
                var previous_index = $select_list.attr('data-index').split(',');
                $select_list.find('option[value*="' + previous_index[0].toLowerCase() + '"]')
                    .attr('selected', 'selected');
            }
        }
        $(this).dialog('close');
    };
    var $msgbox = PMA_ajaxShowMessage();
    $.post("tbl_indexes.php", post_data, function (data) {
        if (data.success === false) {
            //in the case of an error, show the error message returned.
            PMA_ajaxShowMessage(data.error, false);
        } else {
            PMA_ajaxRemoveMessage($msgbox);
            // Show dialog if the request was successful
            var $div = $('<div/>');
            $div
            .append(data.message)
            .dialog({
                title: PMA_messages.strAddIndex,
                width: 450,
                minHeight: 250,
                open: function () {
                    checkIndexName("index_frm");
                    PMA_showHints($div);
                    PMA_init_slider();
                    $('#index_columns').find('td').each(function () {
                        $(this).css("width", $(this).width() + 'px');
                    });
                    $('#index_columns').find('tbody').sortable({
                        axis: 'y',
                        containment: $("#index_columns").find("tbody"),
                        tolerance: 'pointer'
                    });
                    // We dont need the slider at this moment.
                    $(this).find('fieldset.tblFooters').remove();
                },
                modal: true,
                buttons: button_options,
                close: function () {
                    $(this).remove();
                }
            });
        }
    });
}

/**
 * Creates a advanced index type selection dialog.
 *
 * @param array  source_array Array holding a particular type of indexes
 * @param string index_choice Choice of index
 * @param string col_index    Index of new column on form
 *
 * @return void
 */
function PMA_indexTypeSelectionDialog(source_array, index_choice, col_index)
{
    var $single_column_radio = $('<input type="radio" id="single_column" name="index_choice"' +
        ' checked="checked">' +
        '<label for="single_column">' + PMA_messages.strCreateSingleColumnIndex + '</label>');
    var $composite_index_radio = $('<input type="radio" id="composite_index"' +
        ' name="index_choice">' +
        '<label for="composite_index">' + PMA_messages.strCreateCompositeIndex + '</label>');
    var $dialog_content = $('<fieldset id="advance_index_creator"></fieldset>');
    $dialog_content.append('<legend>' + index_choice.toUpperCase() + '</legend>');


    // For UNIQUE/INDEX type, show choice for single-column and composite index.
    $dialog_content.append($single_column_radio);
    $dialog_content.append($composite_index_radio);

    var button_options = {};
    // 'OK' operation.
    button_options[PMA_messages.strGo] = function () {
        if ($('#single_column').is(':checked')) {
            var index = {
                'Key_name': (index_choice == 'primary' ? 'PRIMARY' : ''),
                'Index_choice': index_choice.toUpperCase()
            };
            PMA_showAddIndexDialog(source_array, (source_array.length), [col_index], col_index, index);
        }

        if ($('#composite_index').is(':checked')) {
            if ($('input[name="composite_with"]').length !== 0 && $('input[name="composite_with"]:checked').length === 0
            ) {
                PMA_ajaxShowMessage(
                    '<div class="error"><img src="themes/dot.gif" title=""' +
                    ' alt="" class="icon ic_s_error" /> ' +
                    PMA_messages.strFormEmpty +
                    ' </div>',
                    false
                );
                return false;
            }

            var array_index = $('input[name="composite_with"]:checked').val();
            var source_length = source_array[array_index].columns.length;
            var target_columns = [];
            for (var i=0; i<source_length; i++) {
                target_columns.push(source_array[array_index].columns[i].col_index);
            }
            target_columns.push(col_index);

            PMA_showAddIndexDialog(source_array, array_index, target_columns, col_index,
             source_array[array_index]);
        }

        $(this).remove();
    };
    button_options[PMA_messages.strCancel] = function () {
        // Handle state on 'Cancel'.
        var $select_list = $('select[name="field_key[' + col_index + ']"]');
        if (! $select_list.attr('data-index').length) {
            $select_list.find('option[value*="none"]').attr('selected', 'selected');
        } else {
            var previous_index = $select_list.attr('data-index').split(',');
            $select_list.find('option[value*="' + previous_index[0].toLowerCase() + '"]')
                .attr('selected', 'selected');
        }
        $(this).remove();
    };
    var $dialog = $('<div/>').append($dialog_content).dialog({
        minWidth: 525,
        minHeight: 200,
        modal: true,
        title: PMA_messages.strAddIndex,
        resizable: false,
        buttons: button_options,
        open: function () {
            $('#composite_index').on('change', function () {
                if ($(this).is(':checked')) {
                    $dialog_content.append(PMA_getCompositeIndexList(source_array, col_index));
                }
            });
            $('#single_column').on('change', function () {
                if ($(this).is(':checked')) {
                    if ($('#composite_index_list').length) {
                        $('#composite_index_list').remove();
                    }
                }
            });
        },
        close: function () {
            $('#composite_index').off('change');
            $('#single_column').off('change');
            $(this).remove();
        }
    });
}

/**
 * Returns the array of indexes based on the index choice
 *
 * @param index_choice index choice
 */
function PMA_getIndexArray(index_choice)
{
    var source_array = null;

    switch (index_choice.toLowerCase()) {
    case 'primary':
        source_array = primary_indexes;
        break;
    case 'unique':
        source_array = unique_indexes;
        break;
    case 'index':
        source_array = indexes;
        break;
    case 'fulltext':
        source_array = fulltext_indexes;
        break;
    case 'spatial':
        source_array = spatial_indexes;
        break;
    default:
        return null;
    }
    return source_array;
}


/**
 * Unbind all event handlers before tearing down a page
 */
AJAX.registerTeardown('indexes.js', function () {
    $(document).off('click', '#save_index_frm');
    $(document).off('click', '#preview_index_frm');
    $(document).off('change', '#select_index_choice');
    $(document).off('click', 'a.drop_primary_key_index_anchor.ajax');
    $(document).off('click', "#table_index tbody tr td.edit_index.ajax, #indexes .add_index.ajax");
    $(document).off('click', '#index_frm input[type=submit]');
    $('body').off('change', 'select[name*="field_key"]');
    $(document).off('click', '.show_index_dialog');
});

/**
 * @description <p>Ajax scripts for table index page</p>
 *
 * Actions ajaxified here:
 * <ul>
 * <li>Showing/hiding inputs depending on the index type chosen</li>
 * <li>create/edit/drop indexes</li>
 * </ul>
 */
AJAX.registerOnload('indexes.js', function () {
    // Re-initialize variables.
    primary_indexes = [];
    unique_indexes = [];
    indexes = [];
    fulltext_indexes = [];
    spatial_indexes = [];

    // for table creation form
    var $engine_selector = $('.create_table_form select[name=tbl_storage_engine]');
    if ($engine_selector.length) {
        PMA_hideShowConnection($engine_selector);
    }

    var $form = $("#index_frm");
    if ($form.length > 0) {
        showIndexEditDialog($form);
    }

    $(document).on('click', '#save_index_frm', function (event) {
        event.preventDefault();
        var $form = $("#index_frm");
        var submitData = $form.serialize() + '&do_save_data=1&ajax_request=true&ajax_page_request=true';
        var $msgbox = PMA_ajaxShowMessage(PMA_messages.strProcessingRequest);
        AJAX.source = $form;
        $.post($form.attr('action'), submitData, AJAX.responseHandler);
    });

    $(document).on('click', '#preview_index_frm', function (event) {
        event.preventDefault();
        PMA_previewSQL($('#index_frm'));
    });

    $(document).on('change', '#select_index_choice', function (event) {
        event.preventDefault();
        checkIndexType();
        checkIndexName("index_frm");
    });

    /**
     * Ajax Event handler for 'Drop Index'
     */
    $(document).on('click', 'a.drop_primary_key_index_anchor.ajax', function (event) {
        event.preventDefault();
        var $anchor = $(this);
        /**
         * @var $curr_row    Object containing reference to the current field's row
         */
        var $curr_row = $anchor.parents('tr');
        /** @var    Number of columns in the key */
        var rows = $anchor.parents('td').attr('rowspan') || 1;
        /** @var    Rows that should be hidden */
        var $rows_to_hide = $curr_row;
        for (var i = 1, $last_row = $curr_row.next(); i < rows; i++, $last_row = $last_row.next()) {
            $rows_to_hide = $rows_to_hide.add($last_row);
        }

        var question = escapeHtml(
            $curr_row.children('td')
                .children('.drop_primary_key_index_msg')
                .val()
        );

        $anchor.PMA_confirm(question, $anchor.attr('href'), function (url) {
            var $msg = PMA_ajaxShowMessage(PMA_messages.strDroppingPrimaryKeyIndex, false);
            $.get(url, {'is_js_confirmed': 1, 'ajax_request': true}, function (data) {
                if (typeof data !== 'undefined' && data.success === true) {
                    PMA_ajaxRemoveMessage($msg);
                    var $table_ref = $rows_to_hide.closest('table');
                    if ($rows_to_hide.length == $table_ref.find('tbody > tr').length) {
                        // We are about to remove all rows from the table
                        $table_ref.hide('medium', function () {
                            $('div.no_indexes_defined').show('medium');
                            $rows_to_hide.remove();
                        });
                        $table_ref.siblings('div.notice').hide('medium');
                    } else {
                        // We are removing some of the rows only
                        toggleRowColors($rows_to_hide.last().next());
                        $rows_to_hide.hide("medium", function () {
                            $(this).remove();
                        });
                    }
                    if ($('.result_query').length) {
                        $('.result_query').remove();
                    }
                    if (data.sql_query) {
                        $('<div class="result_query"></div>')
                            .html(data.sql_query)
                            .prependTo('#structure_content');
                        PMA_highlightSQL($('#page_content'));
                    }
                    PMA_commonActions.refreshMain(false, function () {
                        $("a.ajax[href^=#indexes]").click();
                    });
                    PMA_reloadNavigation();
                } else {
                    PMA_ajaxShowMessage(PMA_messages.strErrorProcessingRequest + " : " + data.error, false);
                }
            }); // end $.get()
        }); // end $.PMA_confirm()
    }); //end Drop Primary Key/Index

    /**
     *Ajax event handler for index edit
    **/
    $(document).on('click', "#table_index tbody tr td.edit_index.ajax, #indexes .add_index.ajax", function (event) {
        event.preventDefault();
        var url, title;
        if ($(this).find("a").length === 0) {
            // Add index
            var valid = checkFormElementInRange(
                $(this).closest('form')[0],
                'added_fields',
                'Column count has to be larger than zero.'
            );
            if (! valid) {
                return;
            }
            url = $(this).closest('form').serialize();
            title = PMA_messages.strAddIndex;
        } else {
            // Edit index
            url = $(this).find("a").attr("href");
            if (url.substring(0, 16) == "tbl_indexes.php?") {
                url = url.substring(16, url.length);
            }
            title = PMA_messages.strEditIndex;
        }
        url += "&ajax_request=true";
        indexEditorDialog(url, title, function () {
            // refresh the page using ajax
            PMA_commonActions.refreshMain(false, function () {
                $("a.ajax[href^=#indexes]").click();
            });
        });
    });

    /**
     * Ajax event handler for advanced index creation during table creation
     * and column addition.
     */
    $('body').on('change', 'select[name*="field_key"]', function () {
        // Index of column on Table edit and create page.
        var col_index = /\d+/.exec($(this).attr('name'));
        col_index = col_index[0];
        // Choice of selected index.
        var index_choice = /[a-z]+/.exec($(this).val());
        index_choice = index_choice[0];
        // Array containing corresponding indexes.
        var source_array = null;

        if (index_choice == 'none') {
            PMA_removeColumnFromIndex(col_index);
            return false;
        }

        // Select a source array.
        var source_array = PMA_getIndexArray(index_choice);
        if (source_array == null) {
            return;
        }

        if (source_array.length === 0) {
            var index = {
                'Key_name': (index_choice == 'primary' ? 'PRIMARY' : ''),
                'Index_choice': index_choice.toUpperCase()
            };
            PMA_showAddIndexDialog(source_array, 0, [col_index], col_index, index);
        } else {
            if (index_choice == 'primary') {
                var array_index = 0;
                var source_length = source_array[array_index].columns.length;
                var target_columns = [];
                for (var i=0; i<source_length; i++) {
                    target_columns.push(source_array[array_index].columns[i].col_index);
                }
                target_columns.push(col_index);

                PMA_showAddIndexDialog(source_array, array_index, target_columns, col_index,
                 source_array[array_index]);
            } else {
                // If there are multiple columns selected for an index, show advanced dialog.
                PMA_indexTypeSelectionDialog(source_array, index_choice, col_index);
            }
        }
    });

    $(document).on('click', '.show_index_dialog', function (e) {
        e.preventDefault();

        // Get index details.
        var previous_index = $(this).prev('select')
            .attr('data-index')
            .split(',');

        var index_choice = previous_index[0];
        var array_index  = previous_index[1];

        var source_array = PMA_getIndexArray(index_choice);
        var source_length = source_array[array_index].columns.length;

        var target_columns = [];
        for (var i = 0; i < source_length; i++) {
            target_columns.push(source_array[array_index].columns[i].col_index);
        }

        PMA_showAddIndexDialog(source_array, array_index, target_columns, -1, source_array[array_index]);
    })
});
;

