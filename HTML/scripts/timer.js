function odliczanie()
{
    var dzisiaj= new Date();
   var rok=dzisiaj.getFullYear();
   var miesionc= dzisiaj.getMonth()+1;
   var dzien = dzisiaj. getDate();

   var  godzina= dzisiaj.getHours();
   if (godzina<10) godzina="0"+ godzina;
   var minuty = dzisiaj.getMinutes();
   if(minuty<10) minuty="0"+minuty;
   var sekunda= dzisiaj.getSeconds();
   if (sekunda<10) sekunda="0" + sekunda;
  
   document.getElementById("Zegar").innerHTML = dzien + "/"+ miesionc + "/" + rok + "|" + godzina + ":" + minuty + ":" +  sekunda  ; 

   setTimeout ("odliczanie()", 1000);

}

