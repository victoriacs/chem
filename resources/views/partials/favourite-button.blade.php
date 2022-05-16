    <!-- set color and hide if not favourited -->
    <button id="deletefavourite{{$item->id}}" 
        onClick="deleteFromFavourites({{$item->id}}, {{ Auth::user()->id }})" 
        name="addfavourite" 
        class="btn btn-lg"
        style="color: #ad1707; {{ Auth::user()->hasFavorited($item) ? '' : 'display: none;' }}">
    <i class="bi bi-bookmark-heart"></i>
</button>

<!-- hide if favourited -->
<div id="addfavourites{{$item->id}}" 
        onClick="addToFavourites({{$item->id}}, {{ Auth::user()->id }})" 
        name="deletefavourite" 
        class="btn btn-lg"
        style="{{ Auth::user()->hasFavorited($item) ? 'display: none;' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
          </svg></div>

<script type="text/javascript"> 
   function addToFavourites(itemid, userid) {
    var user_id = userid;
    var item_id = itemid;

    $.ajax({
        url: '/ajaxFavourite',
        dataType: 'json',
        type: 'post',
        data: {
            'user_id': user_id,
            'item_id': item_id,
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
        success: function () {
            // hide add button
            $('#addfavourites' + item_id).hide();
            // show delete button
            $('#deletefavourite' + item_id).show();
        },
        error: function (XMLHttpRequest) {
            // handle error
        }
    });
}

function deleteFromFavourites(itemid, userid) {
    var user_id = userid;
    var item_id = itemid;

    $.ajax({
        type: 'post',
        url: 'api/addfavourite',
        data: {
            'user_id': user_id,
            'item_id': item_id,
        },
        success: function () {
            // hide add button
            $('#addfavourites' + item_id).show();
            // show delete button
            $('#deletefavourite' + item_id).hide();
        },
        error: function (XMLHttpRequest) {
            // handle error
        }
    });
}

            
 
</script>

