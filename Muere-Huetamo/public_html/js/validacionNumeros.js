/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 function numeros(e){
            key=e.keyCode|| e.which;
            tecl=String.fromCharCode(key);
            num="0123456789";
            espe="8-37-38-46";
            tecl_especial=false;
           
           for(var i in espe){
               if(key==espe[i]){
                   tecl_especial=true;
               }
           }
           if(num.indexOf(tecl)==-1&& !tecl_especial){
               return false;
               
               
           }
        }
     
   