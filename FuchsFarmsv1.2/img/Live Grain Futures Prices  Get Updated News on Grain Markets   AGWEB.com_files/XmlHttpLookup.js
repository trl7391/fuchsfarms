var queryField;var lookupURL;var divName;var ifName;var lastVal="";var val=""
var xmlHttp;var cache=new Object();var searching=false;var globalDiv;var divFormatted=false;var DIV_BG_COLOR="#464646";var DIV_HIGHLIGHT_COLOR="#979696";var FONT_COLOR="#a6a6a6";var FONT_HOVER_COLOR="#353535";var divWidth="300px";function InitQueryCode(queryFieldName,lookupURLPrefix,hiddenDivName)
{queryField=document.getElementById(queryFieldName);queryField.onkeydown=keypressHandler;queryField.autocomplete="off";lookupURL=lookupURLPrefix;if(hiddenDivName)
divName=hiddenDivName;else
divName="querydiv";ifName="queryiframe";addToCache("",new Array(),new Array());setTimeout("mainLoop()",100);}
function addToCache(queryString,resultArray1,resultArray2)
{cache[queryString]=new Array(resultArray1,resultArray2);}
mainLoop=function(){val=queryField.value;if(val=='SEARCH OUR SITE')
val='';else
val=escape(val);if(lastVal!=val&&searching==false){var cacheResult=cache[val];if(cacheResult)
showQueryDiv(val,cacheResult[0],cacheResult[1]);else
doRemoteQuery(val);lastVal=val;}
setTimeout("mainLoop()",100);return true;};function getDiv(divID){if(!globalDiv){if(!document.getElementById(divID)){var newNode=document.createElement("div");newNode.setAttribute("id",divID);document.body.appendChild(newNode);}
globalDiv=document.getElementById(divID);var x=queryField.offsetLeft;var y=queryField.offsetTop+queryField.offsetHeight;var parent=queryField;while(parent.offsetParent){parent=parent.offsetParent;x+=parent.offsetLeft;y+=parent.offsetTop;}
if(!divFormatted){globalDiv.style.backgroundColor=DIV_BG_COLOR;globalDiv.style.fontFamily="Trebuchet MS, Helvetica, sans-serif";globalDiv.style.padding="10px 10px 0 10px";globalDiv.style.border="1px solid #42413c";globalDiv.style.fontSize="13px";globalDiv.style.width=divWidth;globalDiv.style.position="absolute";globalDiv.style.left=(x-127)+"px";globalDiv.style.top=(y+4)+"px";globalDiv.style.visibility="hidden";globalDiv.style.zIndex=10000;divFormatted=true;}}
return globalDiv;}
function showQueryDiv(queryString,resultArray1,resultArray2,resultArray3,resultArray4,count)
{var div=getDiv(divName);while(div.childNodes.length>0)
div.removeChild(div.childNodes[0]);for(var i=0;i<resultArray1.length;i++)
{var result=document.createElement("div");result.onmouseover=highlightResult;result.onmouseout=unhighlightResult;if(!resultArray3){result.style.cursor="pointer";result.style.padding="0px 3px 0px 3px";_unhighlightResult(result);result.style.textAlign="left";result.style.fontSize="11px"
var result1=document.createElement("span");result1.Id=resultArray2[i];result1.className="result1";result1.style.textAlign="left";result1.innerHTML=resultArray1[i];result.appendChild(result1);result.onmousedown=selectResult;div.appendChild(result);}else{result.className='searchItemWrp';result.style.position='relative';result.style.cursor='pointer';result.style.textAlign="left";var wrapper=document.createElement("div");wrapper.style.position='relative';wrapper.className='searchItem';if(i==0){var header=document.createElement("div");var lbl;var suffix='es';if(resultArray1.length==1)suffix='';resultArray1.length<5?lbl='Top '+(resultArray1.length==1?'':resultArray1.length)+' Match'+suffix:lbl='Top '+resultArray1.length+' Matches';header.style.fontWeight='bold';header.style.fontSize='1.1em';header.style.padding='4px';header.innerHTML=lbl;header.style.backgroundColor='#1d4658';header.style.color='#ffffff';header.style.display='none';div.appendChild(header);}
var prodDiv=document.createElement("span");prodDiv.style.cursor='pointer';prodDiv.style.whiteSpace='nowrap';if(!resultArray3[i]=='')prodDiv.innerHTML=" ["+resultArray3[i]+"]<br />";var details=document.createElement("div");details.Id=resultArray2[i];details.style.textAlign='left';details.style.display='inline';details.className='result1';details.style.cursor='pointer';details.innerHTML=resultArray1[i];wrapper.appendChild(details);wrapper.appendChild(prodDiv);result.appendChild(wrapper);result.onmousedown=new Function("window.location = '"+resultArray4[i]+"'");div.appendChild(result);if(i==resultArray1.length-1){var footer=document.createElement("div");footer.style.backgroundColor='';footer.style.color='#ffffff';footer.style.padding='4px';footer.style.textAlign='right';footer.innerHTML='<a href="javascript:void(0);" onmousedown=\'window.location="/search/default.aspx?keywords='+escape(queryField.value)+'"\'><span style=\"color\: \#ffffff\;\" class=\"searchMoreLink\" >View All Results ('+count+')</span></a>'+(parseInt(count)>=0?'<div class="searchResults">':'');div.appendChild(footer);}}}
var isCached=cache[queryString];if(!isCached)
addToCache(queryString,resultArray1,resultArray2);showDiv(resultArray1.length>0);}
function selectResult()
{_selectResult(this);}
function _selectResult(item)
{var spans=item.getElementsByTagName("span");if(spans){for(var i=0;i<spans.length;i++){if(spans[i].className=="result1"){var str=spans[i].innerHTML;var re=new RegExp('&amp;','gi');str=str.replace(re,'&');queryField.value=str;MyCallback(spans[i].Id);lastVal=val=escape(queryField.value);searching=false;mainLoop();queryField.focus();showDiv(false);return;}}}}
function highlightResult()
{_highlightResult(this);}
function _highlightResult(item)
{item.style.backgroundColor=DIV_HIGHLIGHT_COLOR;item.style.color=FONT_HOVER_COLOR}
function unhighlightResult()
{_unhighlightResult(this);}
function _unhighlightResult(item)
{item.style.backgroundColor=DIV_BG_COLOR;item.style.color=FONT_COLOR}
function showDiv(show)
{var div=getDiv(divName);if(show)
div.style.visibility="visible";else
div.style.visibility="hidden";adjustiFrame();}
function hideDiv()
{showDiv(false);}
function adjustiFrame()
{if(!document.getElementById(ifName)){var newNode=document.createElement("iFrame");newNode.setAttribute("id",ifName);newNode.setAttribute("src","javascript:false;");newNode.setAttribute("scrolling","no");newNode.setAttribute("frameborder","0");document.body.appendChild(newNode);}
iFrameDiv=document.getElementById(ifName);var div=getDiv(divName);try{iFrameDiv.style.position="absolute";iFrameDiv.style.width=div.offsetWidth;iFrameDiv.style.height=div.offsetHeight;iFrameDiv.style.top=div.style.top;iFrameDiv.style.left=div.style.left;iFrameDiv.style.zIndex=div.style.zIndex-1;iFrameDiv.style.visibility=div.style.visibility;}catch(e){}}
function getXMLHTTP(){var A=null;try{A=new ActiveXObject("Msxml2.XMLHTTP");}catch(e){try{A=new ActiveXObject("Microsoft.XMLHTTP");}catch(oc){A=null;}}
if(!A&&typeof XMLHttpRequest!="undefined"){A=new XMLHttpRequest();}
return A;}
function doRemoteQuery(queryString)
{searching=true;if(xmlHttp&&xmlHttp.readyState!=0){xmlHttp.abort()}
xmlHttp=getXMLHTTP();if(xmlHttp){xmlHttp.open("GET",lookupURL+queryString,true);xmlHttp.onreadystatechange=function(){if(xmlHttp.readyState==4&&xmlHttp.responseText&&searching){eval(xmlHttp.responseText);searching=false;}}
xmlHttp.send(null);}}
function keypressHandler(evt)
{var div=getDiv(divName);if(div.style.visibility=="hidden")
return true;if(!evt&&window.event){evt=window.event;}
var key=evt.keyCode;var KEYUP=38;var KEYDOWN=40;var KEYENTER=13;var KEYTAB=9;if((key!=KEYENTER)&&(key!=KEYTAB))
return true;var selNum=getSelectedSpanNum(div);var selSpan=setSelectedSpan(div,selNum);if((key==KEYENTER)||(key==KEYTAB)){if(selSpan&&(key==KEYTAB)){_selectResult(selSpan);evt.cancelBubble=true;return false;}
else{hideDiv();buttonClick();return false;}}else{if(key==KEYUP)
selSpan=setSelectedSpan(div,selNum-1);if(key==KEYDOWN)
selSpan=setSelectedSpan(div,selNum+1);if(selSpan)
_highlightResult(selSpan);}
showDiv(true);return true;}
function getSelectedSpanNum(div)
{var count=-1;var spans=div.getElementsByTagName("div");if(spans){for(var i=0;i<spans.length;i++){count++;if(spans[i].style.backgroundColor!=div.style.backgroundColor)
return count;}}
return-1;}
function setSelectedSpan(div,spanNum)
{var count=-1;var thisSpan;var spans=div.getElementsByTagName("div");if(spans){for(var i=0;i<spans.length;i++){if(++count==spanNum){_highlightResult(spans[i]);thisSpan=spans[i];}else{_unhighlightResult(spans[i]);}}}
return thisSpan;}