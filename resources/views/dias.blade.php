<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@lang('Calendar list')</title>
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
        <p><strong>{{ __('Lifeguard Managment') }}</strong></p>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>{{ __('Calendar list') }}</strong></h5>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>{{ __('From') }}</th>
                        <th>{{ __('To') }}</th>
                        <th>{{ __('Employee') }}</th>
                        <th>{{ __('Hotel') }}</th>
                        <th>{{ __('Pool') }}</th>
                        <th>{{ __('Timetable') }}</th>
                    </tr>
                </thead>
               <tbody>
                @foreach ($dias as $dia)
                    <tr>
                        <td>{{$dia->fecha_inicio}}</td>
                        <td>{{$dia->fecha_fin}}</td>
                        <td>{{$dia->user->name}}</td>
                        <td>{{$dia->centro->nombre}}</td>
                        <td>{{$dia->piscina->nombre}}</td>
                        <td>{{$dia->horarios}}</td>
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