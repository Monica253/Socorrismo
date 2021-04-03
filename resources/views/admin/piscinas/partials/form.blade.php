<div class="form-group">
    {!! Form::label('nombre', trans('Name')) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.poolPH')]) !!}
    
    @error('nombre')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('centro_id', 'Hotel') !!}
    {!! Form::select('centro_id', $centros, null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.hotelPH')]) !!}
    
    @error('centro_id')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-row">
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', trans('validation.attributes.Image')) !!}
            {!! Form::file('file', ['class' => 'form-control-file']) !!}
        </div>
    </div>
    <div class="col">
        <div class="image-wrapper">
            @isset ($piscina->image)
                <img id="picture" src="{{Storage::url($piscina->image->url)}}" alt="">
            @else
                <img id="picture" src="{{asset('/imagenes/upload.png')}}" alt="">
            @endisset
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('observaciones', trans('validation.attributes.Remarks')) !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.remarksPH')]) !!}
    
    @error('observaciones')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', trans('validation.attributes.Slug')) !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.SlugPool'), 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>