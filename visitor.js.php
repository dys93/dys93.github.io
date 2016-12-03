
/*
Author: Robert Hashemian
http://www.hashemian.com/

Use of this code is hereby granted to anyone. No attribution is required.
********************************************************
Usage Sample:

<script language="JavaScript">
VIH_BackColor = "palegreen";
VIH_ForeColor = "navy";
VIH_FontPix = "16";
VIH_DisplayFormat = "You are visiting from:<br>IP Address: %%IP%%<br>Host: %%HOST%%";
VIH_DisplayOnPage = "yes";
</script>
<script language="JavaScript" src="//scripts.hashemian.com/js/visitorIPHOST.js.php"></script>
*/

if (typeof(VIH_BackColor)=="undefined")
  VIH_BackColor = "white";
if (typeof(VIH_ForeColor)=="undefined")
  VIH_ForeColor= "black";
if (typeof(VIH_FontPix)=="undefined")
  VIH_FontPix = "16";
if (typeof(VIH_DisplayFormat)=="undefined")
  VIH_DisplayFormat = "You are visiting from:<br>IP Address: %%IP%%<br>Host: %%HOST%%";
if (typeof(VIH_DisplayOnPage)=="undefined" || VIH_DisplayOnPage.toString().toLowerCase()!="no")
  VIH_DisplayOnPage = "yes";

VIH_HostIP = "162.243.126.219";
VIH_HostName = "162.243.126.219";

if (VIH_DisplayOnPage=="yes") {
  VIH_DisplayFormat = VIH_DisplayFormat.replace(/%%IP%%/g, VIH_HostIP);
  VIH_DisplayFormat = VIH_DisplayFormat.replace(/%%HOST%%/g, VIH_HostName);
  document.write("<table border='0' cellspacing='0' cellpadding='1' style='background-color:" + VIH_BackColor + "; color:" + VIH_ForeColor + "; font-size:" + VIH_FontPix + "px'><tr><td>" + VIH_DisplayFormat + "</td></tr></table>");
}
