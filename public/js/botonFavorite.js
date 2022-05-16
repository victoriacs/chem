const axios = require('axios');

$("#fav").on('click', putFav);


function putFav() {
    console.log("a");
    axios.get()
    .then(function (response) {

    })
    .catch(function (error) {
        console.log(error);
    })
}


// $(document).ready(function() {      



//         $.ajax({ 

//            type:'POST', 

//            url:'/ajaxRequest', 

//            data:{id:id}, 

//            success:function(data){ 

//               if(jQuery.isEmptyObject(data.success.attached)){ 

//                 $(cObj).removeClass("like-post"); 

//               }else{ 

//                 $(cObj).addClass("like-post"); 

//               } 
//            } 
//         }); 
//     });       
//     $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { 

//         event.preventDefault(); 

//         $(this).ekkoLightbox(); 

//     });                                         

// });  

