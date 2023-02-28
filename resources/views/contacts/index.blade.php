<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index || Contacts</title>
</head>
<body>
    <h1>All Contacts</h1>
    <div>
        {{-- hyperlink yg mengarah ke halaman lain memanggil nama route yg dituju --}}
        <a href="{{ route('contacts.create') }}">Add Contact</a>
        <a href="{{ route('contacts.show', 5) }}">Show Contact</a>
    </div>
</body>
</html>
