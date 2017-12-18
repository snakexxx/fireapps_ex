<form method="post" action="{{ route('app.installHandle') }}">
    {{ csrf_field() }}
    <input type="text" name="shop">
    <button type="submit">Install</button>
</form>