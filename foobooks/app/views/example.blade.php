<!-- app/views/example.blade.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Narwhals</title>
</head>
<body>
    @include('header')
    <p>Why, the Narhwal surely bacons at midnight, my good sir!</p>
	<p>{{ date('d/m/y') }}</p>
@for ($i = 0; $i < 5; $i++)
    <p>Even {{ $i }} red pandas, aren't enough!</p>
@endfor
    @include('footer')
	{{ route('calendar') }}
</body>
</html>


