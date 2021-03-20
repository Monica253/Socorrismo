<div class="form-group">
    {!! Form::label('nombre', 'Name') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => "Introduce Pool's name"]) !!}
    
    @error('nombre')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('centro_id', 'Hotel') !!}
    {!! Form::select('centro_id', $centros, null, ['class' => 'form-control', 'placeholder' => "Select Hotel's name"]) !!}
    
    @error('centro_id')
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
            @isset ($piscina->image)
                <img id="picture" src="{{Storage::url($piscina->image->url)}}" alt="">
            @else
                <img id="picture" src="{{asset('/imagenes/upload.png')}}" alt="">
            @endisset
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('observaciones', 'Remarks') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'placeholder' => "Introduce Pool's remarks"]) !!}
    
    @error('observaciones')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => "Pool's slug", 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>