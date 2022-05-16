@if(session('status'))
    <div class="m-0 alert alert-light alert-dismissible fade show " role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
