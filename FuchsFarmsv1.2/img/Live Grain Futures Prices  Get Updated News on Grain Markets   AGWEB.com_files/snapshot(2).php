document.write('&nbsp');
var pendingHide = null;var tooltip = null;var chartId = null;function hideTooltip() {		if (tooltip) pendingHide = setTimeout("tooltip.style.display = 'none';", 200);	}	function showTooltip (e, label) {		if (pendingHide) {			clearTimeout(pendingHide);			pendingHide = null;		}		e = e || window.event;		var tooltipText;		if (!tooltip) {			tooltip = document.createElement('div');			tooltip.style.position = 'absolute';			tooltip.id = 'tooltip';			tooltipText = document.createElement('div');			tooltipText.className = 'tooltip';			tooltip.appendChild(tooltipText);			document.body.appendChild(tooltip);		} else {			tooltipText = tooltip.firstChild;		}		tooltipText.innerHTML = label;		var left = e.pageX || (e.clientX +			(document.documentElement.scrollLeft || document.body.scrollLeft));		var top = e.pageY || (e.clientY +			  (document.documentElement.scrollTop || document.body.scrollTop));		tooltip.style.display = '';		tooltip.style.top = (top+5)+'px';		tooltip.style.left = (left+20)+'px';	}document.write(' <table cellpadding=0 cellspacing=0 border =\'0\' class="marketview_quoteboard" id="bcSnapshotQuoteboard">\n<tr><td colspan="4" class ="marketview_date">As of 3/05/14/ 3:04 PM</td></tr><tr><td colspan ="4" class="marketview_topheader">Electronic Trade</td></tr><tr></tr><tr><td colspan=\'4\' class="marketview_title"><a href="http://www.agweb.com/markets/futures.aspx?&page=quote&sym=E6">Euro</td></tr><tr class=marketview_TRe>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Mar-2014 (E6H14)</b><br /><br /><b>Open:</b> 1.37400<br /><b>High:</b> 1.37500<br /><b>Low:</b> 1.37070<br /><b>Last:</b> 1.37280<br /><b>Chg:</b> -0.00070<br /><b>%Chg:</b> -0.05%\')" onmouseout="hideTooltip();">Mar-2014</span></td>\n<td class="marketview_quote">1.37280</td><td class="marketview_changeDn" >-0.00070</td>\n</tr>\n<tr class=marketview_TRo>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Jun-2014 (E6M14)</b><br /><br /><b>Open:</b> 1.37390<br /><b>High:</b> 1.37500<br /><b>Low:</b> 1.37090<br /><b>Last:</b> 1.37280<br /><b>Chg:</b> -0.00080<br /><b>%Chg:</b> -0.06%\')" onmouseout="hideTooltip();">Jun-2014</span></td>\n<td class="marketview_quote">1.37280</td><td class="marketview_changeDn" >-0.00080</td>\n</tr>\n<tr class=marketview_TRe>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Sep-2014 (E6U14)</b><br /><br /><b>Open:</b> 0.00000<br /><b>High:</b> 1.37330<br /><b>Low:</b> 1.37330<br /><b>Last:</b> 1.37330<br /><b>Chg:</b> -0.00040<br /><b>%Chg:</b> -0.03%\')" onmouseout="hideTooltip();">Sep-2014</span></td>\n<td class="marketview_quote">1.37330</td><td class="marketview_changeDn" >-0.00040</td>\n</tr>\n<tr></tr><tr><td colspan=\'4\' class="marketview_title"><a href="http://www.agweb.com/markets/futures.aspx?&page=quote&sym=J6">Japanese Yen</td></tr><tr class=marketview_TRe>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Mar-2014 (J6H14)</b><br /><br /><b>Open:</b> 0.97810<br /><b>High:</b> 0.97930<br /><b>Low:</b> 0.97520<br /><b>Last:</b> 0.97750<br /><b>Chg:</b> -0.00050<br /><b>%Chg:</b> -0.05%\')" onmouseout="hideTooltip();">Mar-2014</span></td>\n<td class="marketview_quote">0.97750</td><td class="marketview_changeDn" >-0.00050</td>\n</tr>\n<tr class=marketview_TRo>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Jun-2014 (J6M14)</b><br /><br /><b>Open:</b> 0.97860<br /><b>High:</b> 0.97970<br /><b>Low:</b> 0.97570<br /><b>Last:</b> 0.97820<br /><b>Chg:</b> -0.00030<br /><b>%Chg:</b> -0.03%\')" onmouseout="hideTooltip();">Jun-2014</span></td>\n<td class="marketview_quote">0.97820</td><td class="marketview_changeDn" >-0.00030</td>\n</tr>\n<tr class=marketview_TRe>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Sep-2014 (J6U14)</b><br /><br /><b>Open:</b> 0.00000<br /><b>High:</b> 0.97840<br /><b>Low:</b> 0.97840<br /><b>Last:</b> 0.97840<br /><b>Chg:</b> -0.00060<br /><b>%Chg:</b> -0.06%\')" onmouseout="hideTooltip();">Sep-2014</span></td>\n<td class="marketview_quote">0.97840</td><td class="marketview_changeDn" >-0.00060</td>\n</tr>\n<tr></tr><tr><td colspan=\'4\' class="marketview_title"><a href="http://www.agweb.com/markets/futures.aspx?&page=quote&sym=DJ">DJIA</td></tr><tr class=marketview_TRe>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Mar-2014 (DJH14)</b><br /><br /><b>Open:</b> 16370<br /><b>High:</b> 16372<br /><b>Low:</b> 16335<br /><b>Last:</b> 16346<br /><b>Chg:</b> -35<br /><b>%Chg:</b> -0.21%\')" onmouseout="hideTooltip();">Mar-2014</span></td>\n<td class="marketview_quote">16346</td><td class="marketview_changeDn" >-35</td>\n</tr>\n<tr class=marketview_TRo>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Jun-2014 (DJM14)</b><br /><br /><b>Open:</b> 16280<br /><b>High:</b> 16280<br /><b>Low:</b> 16275<br /><b>Last:</b> 16275<br /><b>Chg:</b> -38<br /><b>%Chg:</b> -0.23%\')" onmouseout="hideTooltip();">Jun-2014</span></td>\n<td class="marketview_quote">16275</td><td class="marketview_changeDn" >-38</td>\n</tr>\n<tr class=marketview_TRe>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Sep-2014 (DJU14)</b><br /><br /><b>Open:</b> 0<br /><b>High:</b> 16244<br /><b>Low:</b> 16010<br /><b>Last:</b> 16244s<br /><b>Chg:</b> +234<br /><b>%Chg:</b> +1.46%\')" onmouseout="hideTooltip();">Sep-2014</span></td>\n<td class="marketview_quote">16244s</td><td class="marketview_changeUp" >+234</td>\n</tr>\n<tr></tr><tr><td colspan=\'4\' class="marketview_title"><a href="http://www.agweb.com/markets/futures.aspx?&page=quote&sym=ZF">T-Notes 5Yr</td></tr><tr class=marketview_TRe>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Mar-2014 (ZFH14)</b><br /><br /><b>Open:</b> 120-257<br /><b>High:</b> 120-270<br /><b>Low:</b> 120-202<br /><b>Last:</b> 120-257<br /><b>Chg:</b> -0-002<br /><b>%Chg:</b> -0.01%\')" onmouseout="hideTooltip();">Mar-2014</span></td>\n<td class="marketview_quote">120-257</td><td class="marketview_changeDn" >-0-002</td>\n</tr>\n<tr class=marketview_TRo>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Jun-2014 (ZFM14)</b><br /><br /><b>Open:</b> 119-232<br /><b>High:</b> 119-255<br /><b>Low:</b> 119-182<br /><b>Last:</b> 119-242<br /><b>Chg:</b> -0-002<br /><b>%Chg:</b> -0.01%\')" onmouseout="hideTooltip();">Jun-2014</span></td>\n<td class="marketview_quote">119-242</td><td class="marketview_changeDn" >-0-002</td>\n</tr>\n<tr class=marketview_TRe>\n<td width = "5%"></td>\n<td class="marketview_symbol"> <span onmousemove="showTooltip(event, \'<b>Sep-2014 (ZFU14)</b><br /><br /><b>Open:</b> 0-000<br /><b>High:</b> 119-235<br /><b>Low:</b> 119-235<br /><b>Last:</b> 119-235<br /><b>Chg:</b> -0-010<br /><b>%Chg:</b> -0.03%\')" onmouseout="hideTooltip();">Sep-2014</span></td>\n<td class="marketview_quote">119-235</td><td class="marketview_changeDn" >-0-010</td>\n</tr>\n</table>');