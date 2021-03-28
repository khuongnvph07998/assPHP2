
	var anh=[];
    anh[0]="img/slide/slide1.jpg";
    anh[1]="img/slide/slide2.jpg";
    anh[2]="img/slide/slide3.jpg";
    var i=0;
    var au=0;
function auto(){
      i++;
     document.getElementById("image").src=anh[i];
     if(i==anh.length-1){
         i=-1;
     };  
    au=setTimeout(auto,2000);
      }
window.onload=function(){
    au=setTimeout(auto,2000);	
}