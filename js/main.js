$(document).ready(function(){
	window.pv = window.pv || {};
	pv.openClass = pv.openClass || function(link){window.open(link, '_blank', 'location=yes')};
	pv.classClick = pv.classClick || function(e){return pv.openClass($(this).attr("data-location"));};
	pv.updateOption = pv.updateOption || function(option,value,callback){/* Code to update global preferences*/ callback();};
	$(".class").click(pv.classClick);
	$('.button-collapse').sideNav();
});
/*document.getElementById("demo").addEventListener("click", myFunction);

function myFunction() {
    var x = document.getElementById("2nd").innerHTML;
    var 2a = 'onclick="window.open(''
    var 2b = '', '_system', 'location=yes');">'
    var 2total = 2a+x+2b;

    document.getElementById("2ndp").innerHTML = 2total;


}*/