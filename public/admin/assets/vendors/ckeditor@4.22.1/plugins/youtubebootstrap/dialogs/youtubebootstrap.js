/*
 Edit and use as you want

 Creato da TurboLab.it - 01/01/2014 (buon anno!)
 Modified by Eric van Eldik
*/
CKEDITOR.dialog.add("youtubebootstrapDialog",function(b){return{title:"Insert YouTube",minWidth:400,minHeight:75,contents:[{id:"tab-basic",label:"Basic Settings",elements:[{type:"text",id:"youtubeURL",label:"Paste the URL to include the youtube video"}]}],onOk:function(){var a=this.getValueOf("tab-basic","youtubeURL").trim().match(/v=([^&$]+)/i);if(null==a||""==a||""==a[0]||""==a[1])return alert("Given URL is not valid, it most look like this: a\n\n\t http://www.youtube.com/watch?v\x3dabcdef \n\n"),
!1;b.document.createElement("iframe");var c=b.document.createElement("p");c.setAttribute("class","embed-responsive embed-responsive-16by9");c.setHtml('\x3ciframe src\x3d"//www.youtube.com/embed/'+a[1]+'?rel\x3d0"\x3e\x3c/iframe\x3e');b.insertElement(c)}}});