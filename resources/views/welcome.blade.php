<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Templating Blade</title>
</head>
<body>
    {{-- Contoh Blade --}}
    {{-- sintaks untuk menampilkan tahun sekarang --}}
    {{ date('Y') }}
    <br/>
    {{-- sintaks untuk menampilkan hasil dari operasi matermatika --}}
    {{ 3+7 }}
    <br/>

    {{-- sintaks untuk menampilkan teks yg ada di dalam petik 2 dan meski isinya ada tag" htmlnya itu tidak didefinisikan sebagai tag html melainkan berupa teks biasa--}}
    {{ "<h3>Hello Laravel</h3>" }}

    {{-- sintaks untuk menampilkan teks yg jika didalamnya terdapat tag htmlnya itu didefinisikan sebagai tag html dan akan ditampilkan sesusai perintah tag htmlnya sebutannya ESCAPE --}}
    {!! "<h3>Hello Laravel</h3>" !!}
    {!! "<p>Akbar Ramadhani Firdaus</p><p>E41210766</p>" !!}

    {{-- echo di dalam php --}}
    <?="<h3>Hello Laravel</h3>"?>

    @php
        $message = 'hello Laravel';
    @endphp
    <h2>{{ $message }}</h2>
</body>
</html>
