var resp = new Resp();
document.getElementById("custom").addEventListener("change", function() {//dynamically update records by either clicking out of the input or pressing enter
  resp.updateDevice();
});
function css( getID, propertyObject ){
    var el = document.getElementById(getID);
    for (var property in propertyObject)
    el.style[property] = propertyObject[property];
}
