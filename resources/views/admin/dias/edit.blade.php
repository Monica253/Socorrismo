@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Fullcalendar', true)

@section('content_header')
    <a class="btn btn-sm btn-secondary float-right" href="{{route('admin.dias.index')}}">{{ __('Back to list') }}</a>
    <h1>{{ __('Edit laboral day') }}</h1>
@stop

@section('css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! Form::model($dia, ['route' => ['admin.dias.update', $dia], 'method' => 'put']) !!}
    
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('user_id', trans('validation.attributes.Employee')) !!}
                            {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.employeePH')]) !!}
                            
                            @error('user_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
    
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('centro_id', 'Hotel') !!}
                            {!! Form::select('centro_id', $centros, null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.hotelPH')]) !!}
                            
                            @error('centro_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
    
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('piscina_id', trans('validation.attributes.Pool')) !!}
                            {!! Form::select('piscina_id', $piscinas, null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.poolPH')]) !!}
                            
                            @error('piscina_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
    
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('horarios', trans('validation.attributes.Timetable')) !!}
                    {!! Form::select('horarios', ['10:00 - 18:00' => '10:00 - 18:00', '10:00 - 19:00' => '10:00 - 19:00', '11:00 - 19:00' => '11:00 - 19:00'], null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.timetablePH')]) !!}
                    
                    @error('horarios')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-row mt-2">
                    <div class="col">
                        {!! Form::label('fecha_inicio', trans('validation.attributes.From')) !!}
                        {!! Form::date('fecha_inicio', null, ['class' => 'form-control', 'placeholder' => "Date"]) !!}
                    </div>
                
                    <div class="col">
                        {!! Form::label('fecha_fin', trans('validation.attributes.To')) !!}
                        {!! Form::date('fecha_fin', null, ['class' => 'form-control', 'placeholder' => "Date"]) !!}
                    </div>
                </div>
                    
                {!! Form::submit(trans('validation.attributes.ModifyDay'), ['class' => 'form-control mt-4 btn btn-primary']) !!}

                <a class="form-control mt-4 btn btn-danger" href="#del{{$dia->id}}" data-toggle="modal">{{ __('Remove laboral day') }}</a>

                {!! Form::close() !!}
            </div>
        </div>

        <!-- Modal Para mostrar confirmaci??n-->
        <div class="modal fade" id="del{{$dia->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-danger">
                        <h4 class="modal-title" id="myModalLabel">{{ __('Delete Confirmation') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class=info>
                            <i class="fas fa-exclamation-triangle text-danger"></i><h5 class="modal-title" id="exampleModalLabel">{{ __('Are you sure you want to remove this work day?') }}</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">{{ __('No, Cancel') }}</button>
                        <form action="{{route('admin.dias.destroy', $dia)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">{{ __('Yes, Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <div id="calendar">
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
@parent
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                monthNames: ["{{ __('January') }}","{{ __('February') }}","{{ __('March') }}","{{ __('April') }}","{{ __('May') }}","{{ __('June') }}","{{ __('July') }}","{{ __('August') }}","{{ __('September') }}","{{ __('October') }}","{{ __('November') }}","{{ __('December') }}"],
                monthNamesShort: ["{{ __('Jan') }}","{{ __('Feb') }}","{{ __('Mar') }}","{{ __('Apr') }}","{{ __('May') }}","{{ __('Jun') }}","{{ __('Jul') }}","{{ __('Aug') }}","{{ __('Sep') }}","{{ __('Oct') }}","{{ __('Nov') }}","{{ __('Dec') }}"],
                dayNames: ["{{ __('Sunday') }}","{{ __('Monday') }}","{{ __('Tuesday') }}","{{ __('Wednesday') }}","{{ __('Thursday') }}","{{ __('Friday') }}","{{ __('Saturday') }}"],
                dayNamesShort: ["{{ __('Sun') }}","{{ __('Mon') }}","{{ __('Tue') }}","{{ __('Wed') }}","{{ __('Thu') }}","{{ __('Fri') }}","{{ __('Sat') }}"],
                // put your options and callbacks here
                themeSystem: "standard",
                selectable: true,
                header:{
                    left:'prev,next today',
                    center:'title',
                    right:'month,listDay,listWeek,listYear'
                },
                buttonText: {
                    today: "{{ __('Today') }}",
                    month: "{{ __('Month') }}",
                    listDay: "{{ __('List day') }}",
                    listWeek: "{{ __('List week') }}",
                    listYear: "{{ __('List year') }}"
                },
                events : [
                    @foreach($dias as $dia)
                    {
                        title : '{{ $dia->user->nombre }} - {{ $dia->centro->nombre }} - {{ $dia->piscina->nombre }} - {{ $dia->centro->horarios }}',
                        start : '{{ $dia->fecha_inicio }}',
                        end : '{{ $dia->fecha_fin }}',
                        url : '{{ route('admin.dias.edit', $dia->id) }}',
                        textColor: 'black',
                        color: '{{ $dia->user->color }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>
@stop
