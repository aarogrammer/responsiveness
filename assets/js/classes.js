var Resp = function(){
  this.container  = document.getElementById("container");
  this.phone      = document.getElementById("phone");
  this.iframe     = document.getElementById("iframe");
  this.url        = document.getElementById("iframeURL");
  this.iWidth     = document.getElementById("iframeWidth");
  this.iHeight    = document.getElementById("iframeHeight");
  this.portrait   = document.getElementById("portrait");
  this.landscape  = document.getElementById("landscape");
  this.laptop     = document.getElementById("laptop");
  this.lapBtm     = document.getElementById("lapBtm");
  this.desktop    = document.getElementById("desktop");
  this.currentRes = document.getElementById("currentRes");
};
Resp.prototype.loadIframe = function(){
var loader = document.getElementById("iframeURL").value;
$("#loadingMessage").show();
$("#iframe").on('load',  function () {
    $("#loadingMessage").hide();
});
}
Resp.prototype.updateDevice = function() {
  this.iframe.src         = "http://" + this.url.value;
  this.phone.style.width  = this.iWidth.value + "px";
  this.phone.style.height = this.iHeight.value + "px";
  resp.backToNormal();
  resp.loadIframe();
}
Resp.prototype.backToNormal = function(){
  css('phone', {'border-width' : '55px 7px', 'position' : 'relative','left': '0%'})
  css('circle', {'position' : 'relative', 'left' : '', 'top' : ''});
  this.currentRes.innerHTML     = "";
  this.lapBtm.className         = "";
  this.phone.style.borderRadius = "40px";
}
Resp.prototype.portraitView = function(){
  this.phone.style.width        = this.portrait.value + "px";
  this.phone.style.height       = "650px";
  css('phone', {'border-width' : '55px 7px', 'position' : 'relative','left': '0%'})
  css('circle', {'visibility' : 'visible', 'position' : 'relative', 'left' : '', 'top' : ''});
  this.currentRes.innerHTML     = "";
  this.lapBtm.className         = "";
  this.phone.style.borderRadius = "40px";
  // TODO: change input width when button pressed to 768
}
Resp.prototype.landscapeView = function(){
  this.phone.style.width        = this.landscape.value + "px";
  this.phone.style.height       = "700px";
  css('phone', {'border-width':'7px 55px', 'position' : 'relative','left': '0%'});
  css('circle', {'visibility' : 'visible', 'position' : 'relative', 'left' : '53%', 'top' : '-54%'});
  this.lapBtm.className         = "";
  this.currentRes.innerHTML     = "1024 x 700"
  this.phone.style.borderRadius = "40px";
}
Resp.prototype.laptopView = function(){
  this.phone.style.width          = this.laptop.value + "px";
  css('phone', {'border-width':'20px 20px', 'position' : 'relative','left': '0%'});
  css('circle', {'visibility' : 'hidden'});
  this.lapBtm.className = "btm"
  this.currentRes.innerHTML       = "1224 x 650"
  this.container.className        = "container";
  this.phone.style.borderRadius   = "10px";
}
Resp.prototype.desktopView = function(){
  this.phone.style.width        = this.desktop.value + "px";
  this.phone.style.height       = "800px";
  css('phone', {'border-width':'30px 30px', 'position' : 'relative','left': '-30%'});
  css('circle', {'visibility' : 'hidden'});
  this.phone.style.borderRadius = "10px";
  this.currentRes.innerHTML     = "1920 x 800";
  this.lapBtm.className         = "";
  this.container.className      = "";
}
