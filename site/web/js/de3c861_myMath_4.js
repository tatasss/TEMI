;let MyMath=function(){};MyMath.prototype.tri=function(t){let numberOfTries=1;let positive,negative;Array.prototype.slice.call(t).forEach(function(t){if(t>0)positive=!0;if(t<0)negative=!0});if(!positive||!negative)throw new Error("TRI a besoin de valeur positif et negatif");function e(r){numberOfTries++;if(numberOfTries>1000){throw new Error("IRR can't find a result")};let rrate=(1+r/100);let e=t[0];for(let i=1;i<t.length;i++){e+=(t[i]/Math.pow(rrate,i))};return e};return Math.round(triReel(e)*100)/100};triReel=function(t){let x=1;while(t(x)>0){x+=1}
while(t(x)<0){x-=0.01};return x+0.01};MyMath.prototype.van=function(t,e){let lol=e[0];let somme=0;e.forEach(function(e,r){if(r>0){somme+=(e/Math.pow((1+t),r))}});lol=lol+somme;return Math.round(lol)};MyMath.prototype.sommeTab=function(t){let tot=0;t.forEach(function(t){tot+=t});return tot};MyMath.prototype.arrondirTabUnit=function(t,e){if(e==null){e=0};if(e===undefined){e=0};if(e<0){e=0};let tabArr=[];t.forEach(function(t){if(t!==null){tabArr.push(Math.round(t*Math.pow(10,e))/(Math.pow(10,e)))}
else{tabArr.push(null)}});return tabArr};MyMath.prototype.separatorNumber=function(t){t+="";let regExp1=/^-?[0-9]+\.?[0-9]*/;let result="";let tab=t.split(".");let mynum=[];if(regExp1.test(t)){tab.forEach(function(t,e){mynum=Array.from(t);mynum.forEach(function(t,e){if((e-(mynum.length%3))%3===0){if(e!==0){result+=" "}};result+=t});if(e<tab.length-1){result+="."}})}
else{result=t;if(t==="null"){return null};if(t==="undefined"){return undefined}};return result};MyMath.prototype.separatorNumberArray=function(t){let tab=[];t.forEach(function(t){tab.push(myMath.separatorNumber(t))});return tab};let myMath=new MyMath();