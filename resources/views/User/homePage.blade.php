<h1>Hello this is user</h1>

<form action="{{route("logout")}}" method="post">
    @csrf
    <button class="submit">Log out</button>
</form>
