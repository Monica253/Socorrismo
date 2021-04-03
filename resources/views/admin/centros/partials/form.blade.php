<div class="form-row">
    <div class="col">
        {!! Form::label('nombre', trans('Name')) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.namePH')]) !!}
        
        @error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col">
        {!! Form::label('cadena_hotelera', trans('validation.attributes.hotelcompany')) !!}
        {!! Form::text('cadena_hotelera', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.hotelcompanyPH')]) !!}
        
        @error('cadena_hotelera')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-row mt-2">
    <div class="col">
        {!! Form::label('email', trans('Email')) !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.emailPH')]) !!}
        
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col">
        {!! Form::label('telefono', trans('Phone')) !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.phonePH')]) !!}
        
        @error('telefono')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group mt-2">
    {!! Form::label('direccion', trans('validation.attributes.Address')) !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.addressPH')]) !!}
    
    @error('direccion')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-row mt-2">
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', trans('validation.attributes.Image')) !!}
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

<div class="form-row mt-2">
    <div class="col">
        {!! Form::label('latitud', trans('validation.attributes.Latitude')) !!}
        {!! Form::text('latitud', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.latitudePH')]) !!}
        
        @error('latitud')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col">

        {!! Form::label('longitud', trans('validation.attributes.Longitude')) !!}
        {!! Form::text('longitud', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.longitudePH')]) !!}
        
        @error('longitud')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group mt-2">
    {!! Form::label('horarios', trans('validation.attributes.Timetable')) !!}
    {!! Form::select('horarios', ['10:00 - 18:00' => '10:00 - 18:00', '10:00 - 19:00' => '10:00 - 19:00', '11:00 - 19:00' => '11:00 - 19:00'], null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.timetablePH')]) !!}
    
    @error('horarios')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', trans('validation.attributes.Slug')) !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.SlugHotel'), 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>