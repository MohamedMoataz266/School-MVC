$(document).ready(function(){
    "use strict";
    $(".input-file").delegate("span", "click", function(){
   $("<br><input type='text' placeholder='Write down a question' name='array[]'><span> +</span>").insertAfter($(this)); 
});
}); 