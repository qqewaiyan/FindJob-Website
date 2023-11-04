<h1>Hello this is company</h1>
@if(session('error'))
    <div class="error-message">
        {{ session('error') }}
    </div>
@endif
<form action="{{route("logout")}}" method="post">
    @csrf
    <button class="submit">Log out</button>
</form>
<a href="{{route("admins.index")}}">
    <button class="btn submit">Admin Pagee</button>
</a>
