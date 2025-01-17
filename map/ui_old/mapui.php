<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Maurader's Map of Olin</title>

<style type="text/css">
a:link { color: #000000;}
a:visited { color: #000000;}
a:active { color: #000000;}
a:hover { color: #000000;}
body {font-family: Verdana, Arial, Helvetica; font-size:0.8em}
</style>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">
// Maurader's Map. Ben Fisher & Andy Barry

function $(strO) { return document.getElementById(strO);}

g_currentMap = -1;

// Keep track of how many IMG elements have been created. They are recycled.
g_imgarray = [];
g_nUsedImages = -1;

function drawPersonIcon(x,y, name)
{
	g_nUsedImages++;
	// Make a new IMG element if necessary.
	if (g_nUsedImages>= g_imgarray.length)
	{
		var newimg = document.createElement('img');
		newimg.src = 'p01.gif';
		newimg.style.position='absolute';
		g_imgarray.push(newimg);
		$('divMap').appendChild(newimg);
	}
	g_imgarray[g_nUsedImages].alt = name;
	g_imgarray[g_nUsedImages].title = name;
	g_imgarray[g_nUsedImages].style.left = (x-5) + 'px'; //Correction because the center != the top left
	g_imgarray[g_nUsedImages].style.top = (y-10) + 'px';
	g_imgarray[g_nUsedImages].style.display = '';
	return g_imgarray[g_nUsedImages];
}
function hidePersonIcons()
{
	for (var i=0; i<g_imgarray.length; i++)
		g_imgarray[i].style.display='none';
}

function refreshMap(nMap)
{
	if (nMap==0) nMap = g_currentMap; // Default to the previously shown map
	hidePersonIcons();
	$('spanstatus').innerHTML = 'Loading...';
	if (nMap==1) //Academic center
	{
		$('img01').style.display = '';
		$('img02').style.display = 'none';
		getData('1');
		g_currentMap = 1;
	}
	else if (nMap==2) //WH, EH
	{
		$('img01').style.display = 'none';
		$('img02').style.display = '';
		getData('2');
		g_currentMap = 2;
	}
	
	$('btnRefresh').style.display = '';
	$('spanintro').style.display = 'none';
}

function getData(mapw)
{
	var strUrl = 'map_backend.php?mapw='+mapw;
	xmlhttpGet(strUrl, loadCallback); // Asynchronous call
}

function loadCallback(retData)
{
	retData = retData.replace(/\r\n/g,'\n').replace(/\n/g,''); //Remove newlines.
	if (retData.indexOf('success:')!=0)
	{
		alert('An error occurred.');
		if ($('chkDebug').checked) $('spanstatus').innerHTML = 'Error: '+retData;
		return;
	}
	retData = retData.substring('success:'.length); // Remove the string 'success:' from the data.
	
	// Display data if debugging is checked.
	if ($('chkDebug').checked) alert(retData);
	
	var objUsedPixelLocations = new Object;
	
	if (retData)
	{
		$('spanstatus').innerHTML = '';
		// Parse results from the format 23|25|bfisher|time;46|67|abarry|time
		aPeople = retData.split(';');
		for (var i=0; i<aPeople.length;i++)
		{
			aPeopleData = aPeople[i].split('|');
			// Remove year from time
			aPeopleData[4] = aPeopleData[4].replace('2008-','');
			var icon = drawPersonIcon( aPeopleData[0], aPeopleData[1], aPeopleData[2] + ' ('+aPeopleData[4]+')');
			
			// Check if items are on top of each other, and add to onclick if so. Assumes that z-index of the last created will be topmost
			var strKey = aPeopleData[0].toString()+','+aPeopleData[1].toString();
			if (objUsedPixelLocations[strKey])
				objUsedPixelLocations[strKey] += aPeopleData[2] + ': ' +aPeopleData[3] + '\n';
			else
				objUsedPixelLocations[strKey] = aPeopleData[2] + ': ' +aPeopleData[3] + '\n';
			
			var s = 'alert("' + objUsedPixelLocations[strKey].replace('\n','') + '");';
			icon.onmouseup = new Function(s);
		}
		$('spanstatus').innerHTML = aPeople.length + ((aPeople.length==1) ? ' person' : ' people');
	}
	else
	{
		$('spanstatus').innerHTML = '0 people';
	}
}
function test()
{
	drawPersonIcon(244, 250, 'ben');
	drawPersonIcon(270, 250, 'tim');
	drawPersonIcon(290, 250, 'greg');	
}
</script>


</head>
<body>

<div id="divPanel" style="position:absolute; left:5px; top:5px">
<span id="spanintro">Choose an area: </span><button onclick="refreshMap(1);">Academic Center and the O</button> <button onclick="refreshMap(2);">West Hall, East Hall</button><button onclick="refreshMap(0);" style="display:none" id="btnRefresh">Refresh</button> <span id="spanstatus"> </span>
<input type="checkbox" id="chkDebug" style="margin-left:300px"> Debug
</div>


<div id="divMap" style="position:absolute; left:5px; top:100px">
<img id="img01" src="mm_01.png" style="display:none" />
<img id="img02" src="mm_02.png" style="display:none" />
</div>

<div id="divSpacer" style="margin-left:1000px; margin-top:1000px">The Maurader's Map<br /> by Ben Fisher and Andy Barry</div>

</body>
</html>
