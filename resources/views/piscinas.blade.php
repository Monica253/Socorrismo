<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@lang('Pools list')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin-top: 3cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #5588ee;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #5588ee;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <p><strong>@lang('Lifeguard Managment')</strong></p>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>@lang('Pools list')</strong></h5>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>Hotel</th>
                        <th>{{ __('Remarks') }}</th>
                    </tr>
                </thead>
               <tbody>
                @foreach ($piscinas as $piscina)
                <tr>
                    <td>{{$piscina->nombre}}</td>
                    <td>{{$piscina->centro->nombre}}</td>
                    <td>{{$piscina->observaciones}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p><strong>Copyright (c) 2020 Mónica Betancort</strong></p>
    </footer>
</body>
</html>