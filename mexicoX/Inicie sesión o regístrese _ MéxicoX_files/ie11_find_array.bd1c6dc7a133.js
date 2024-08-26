if(!Array.prototype.find){Object.defineProperty(Array.prototype,'find',{value:function(predicate){'use strict';var o,len,thisArg,k,kValue;if(this==null){throw new TypeError('"this" is null or not defined');}
o=Object(this);len=o.length>>>0;if(typeof predicate!=='function'){throw new TypeError('predicate must be a function');}
thisArg=arguments[1];k=0;while(k<len){kValue=o[k];if(predicate.call(thisArg,kValue,k,o)){return kValue;}
k++;}
return undefined;}});}