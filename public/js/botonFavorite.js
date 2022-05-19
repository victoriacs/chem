$(function() {
    let url = window.location.pathname;

    $(".unfav").on("click",function(e){
        let id = $(this).attr('id');
        if(e.target.classList[1]=="bi-heart-fill"){
            $(e.target).removeClass("bi-heart-fill");
            $(e.target).addClass("bi-heart");
            deleteFav(id);
            if(url.includes('formulas-favoritas')) {
                $(this).closest('li').remove();
            }
        } else {
            $(e.target).addClass("bi-heart-fill");
            $(e.target).removeClass("bi-heart");
            putFav(id);
        }
    });

    $(".fav").on("click",function(e){
        let id = $(this).attr('id');
        if(e.target.classList[1]=="bi-heart-fill"){
            $(e.target).removeClass("bi-heart-fill");
            $(e.target).addClass("bi-heart");
            deleteFav(id);
        } else {
            $(e.target).addClass("bi-heart-fill");
            $(e.target).removeClass("bi-heart");
            putFav(id);
        }
    });
});

function putFav(id) {
    console.log('a');
    console.log(id);
    let data = {
        _method: 'POST',
        formula_id :  id
    }
    axios.post('/formula/favorita', data)
    .then(function (response) {
        console.log('fav');
    })
    .catch(function (error) {
        console.log(error);
    })
};

function deleteFav(id) {
    console.log(id);
    let data = {
        _method: 'POST',
        formula_id : id
    }
    axios.post ('/formula/favorita/delete', data)
    .then(function (response) {
        $(this).closest("li").remove();
        console.log('unfav');
    })
    .catch(function (error) {
        console.log(error);
    })
};