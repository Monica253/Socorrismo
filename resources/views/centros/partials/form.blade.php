<div class="form-row">
    <div class="col">
        {!! Form::label('nombre', 'Name') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's name"]) !!}
        
        @error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col">
        {!! Form::label('cadena_hotelera', 'Hotel Company') !!}
        {!! Form::text('cadena_hotelera', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's company"]) !!}
        
        @error('cadena_hotelera')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's email"]) !!}
        
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col">
        {!! Form::label('telefono', 'Phone Number') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's phone number"]) !!}
        
        @error('telefono')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Address') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's address"]) !!}
    
    @error('direccion')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-row">
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Image') !!}
            {!! Form::file('file', ['class' => 'form-control-file']) !!}
        </div>
    </div>
    <div class="col">
        <div class="image-wrapper">
            @isset ($centro->image)
                <img id="picture" src="{{Storage::url($centro->image->url)}}" alt="">
            @else
                <img id="picture" src="{{asset('/imagenes/upload.png')}}" alt="">
            @endisset
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col">
        {!! Form::label('latitud', 'Latitude') !!}
        {!! Form::text('latitud', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's latitude"]) !!}
        
        @error('latitud')
            <span class="text-danger">{{$message}}</span>
        @enderror

        {!! Form::label('longitud', 'Longitude') !!}
        {!! Form::text('longitud', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's longitude"]) !!}
        
        @error('longitud')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    {!! Form::label('horarios', 'Timetable') !!}
    {!! Form::select('horarios', ['10:00 - 18:00' => '10:00 - 18:00', '10:00 - 19:00' => '10:00 - 19:00', '11:00 - 19:00' => '11:00 - 19:00'], null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's timetable"]) !!}
    
    @error('horarios')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => "hotel's slug", 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>