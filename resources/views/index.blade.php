{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Awesome Links</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">
            Check out my awesome links
        </h1>
        <p class="subtitle">
            You can include a little description here.
        </p>

        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link->url }}" target="_blank" title="Visit Link: {{ $link->url }}">{{ $link->description }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Awesome Links</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <style>
        html {
            background: url("https://images.unsplash.com/photo-1726711340699-952d47133b21?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        div.link h3 {
            font-size: large;
        }

        div.link p {
            font-size: small;
            color: #718096;
        }
    </style>
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">
            Check out my awesome links
        </h1>
        <p class="subtitle">
            You can include a little description here.
        </p>

        <section class="links">
            @foreach ($links as $link)
                <div class="box link">
                    <h3><a href="{{ $link->url }}" target="_blank" title="Visit Link: {{ $link->url }}">{{ $link->description }}</a></h3>
                    <p>{{$link->url}}</p>
                </div>
            @endforeach
        </section>
    </div>
</section>
</body>
</html>
