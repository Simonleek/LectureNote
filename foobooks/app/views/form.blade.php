<!-- app/views/form.blade.php -->

<form action="{{ url('/') }}" method="POST">

    <input type="hidden" name="foo" value="bar" />
    <input type="hidden" name="baz" value="boo" />

    <input type="submit" value="Send" />

</form>
