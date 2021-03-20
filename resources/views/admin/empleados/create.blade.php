@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Employee</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.empleados.store']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Name') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's name"]) !!}
                    
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('apellidos', 'Lastname') !!}
                    {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's lastname"]) !!}
                    
                    @error('apellidos')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('fecha_nacimiento', 'Birth Date') !!}
                    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's birth date"]) !!}
                    
                    @error('fecha_nacimiento')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('direccion', 'Address') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's address"]) !!}
                    
                    @error('direccion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('cod_postal', 'Postal Code') !!}
                    {!! Form::text('cod_postal', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's postal code"]) !!}
                    
                    @error('cod_postal')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('telefono', 'Phone Number') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's phone number"]) !!}
                    
                    @error('telefono')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's email"]) !!}
                    
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('dni', 'Id Card') !!}
                    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's id card"]) !!}
                    
                    @error('dni')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('num_seg_social', 'Social Security Number') !!}
                    {!! Form::text('num_seg_social', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's social security number"]) !!}
                    
                    @error('num_seg_social')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('num_cuenta', 'Account Number') !!}
                    {!! Form::text('num_cuenta', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's account number"]) !!}
                    
                    @error('num_cuenta')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('banco', 'Bank') !!}
                    {!! Form::select('banco', ['CaixaBank' => 'CaixaBank', 'Bankia' => 'Bankia', 'BBVA' => 'BBVA', 'Banco Santander' => 'Banco Santander', 'Banco Sabadell' => 'Banco Sabadell'], null, ['class' => 'form-control', 'placeholder' => 'Select your bank...']) !!}
                    
                    @error('banco')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
    
                </div>

                <div class="form-group">
                    {!! Form::label('fecha_alta', 'Entry Date') !!}
                    {!! Form::date('fecha_alta', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's entry date"]) !!}
                    
                    @error('fecha_alta')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('fecha_baja', 'Leaving Date') !!}
                    {!! Form::date('fecha_baja', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's leaving date"]) !!}
                    
                    @error('fecha_baja')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => "Employee's slug", 'readonly']) !!}
                
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Create Employee', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection