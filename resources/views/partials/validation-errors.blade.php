@if($errors->any())
<div class="mx-3 my-3 alert alert-danger">
    <ul class="m-0">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
