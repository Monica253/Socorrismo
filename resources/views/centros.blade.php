<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ __('Hotels list') }}</title>
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
            <h5 style="text-align: center"><strong>{{ __('Hotels list') }}</strong></h5>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Phone') }}</th>
                        <th>{{ __('Timetable') }}</th>
                    </tr>
                </thead>
               <tbody>
                @foreach ($centros as $centro)
                    <tr>
                        <td>{{$centro->nombre}}</td>
                        <td>{{$centro->email}}</td>
                        <td>{{$centro->telefono}}</td>
                        <td>{{$centro->horarios}}</td>
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