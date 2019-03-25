$(document).ready (function (){
   $('.open-popap').click(function(){
       console.log('here');
      let id_product = $(this).attr('id');

       let ga__ = '<?php echo $ga;?>';
       let frm = document.getElementsByTagName('form');
       let code =

           '<input type="hidden" name="utm_source" value="'+utm_source__+'" />'+
           '<input type="hidden" name="utm_medium"  value="'+utm_medium__+'" />'+
           '<input type="hidden" name="utm_term"  value="'+utm_term__+'" />'+
           '<input type="hidden" name="utm_content"  value="'+utm_content__+'" />'+
           '<input type="hidden" name="utm_campaign" value="'+utm_campaign__+'" />'+
           '<input type="hidden" name="server_name" value="'+server_name__+'" />'+
           '<input type="hidden" name="php_self" value="'+php_self__+'" />'+
           '<input type="hidden" name="ga" value="'+ga__+'" />';
       for (i = 0; i < frm.length; i++) {
           frm[i].innerHTML += code;
       }
   });
});