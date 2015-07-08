<!-- resources/views/auth/logout.blade.php -->

<form method="POST" action="/auth/logout">
    {!! csrf_field() !!}
    <div>
    	Do you wish to log out?
        <button type="submit">Log out</button>
    </div>
</form>