{{ Form::open(['route' => $formRoute, 'files' => true]) }}
<div class="form-group">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', $model ? $model->name : null, ['class' => 'form-control', 'placeholder' => 'name'] ) }}
</div>
<div class="form-group">
    {{Form::label('description', 'Desc:')}}
    {{Form::textarea('description', $model ? $model->description : null, ['class' => 'form-control', 'placeholder' => 'Enter description', 'rows' => 2])}}
</div>
<div class="form-group">
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', $model ? $model->price : null, ['class' => 'form-control', 'placeholder' => 'Enter price']) }}
</div>
<div class="form-group">
    {{ Form::label('visible', 'Visible') }}
    {{ Form::number('visible', $model ? $model->visible : null, ['class' => 'form-control', 'placeholder' => 'Enter visible']) }}
</div>

{{--<div class="form-group">--}}
    {{--{{ Form::label('category_id', 'Category:') }}--}}
    {{--{{ Form::select('category_id', $categories, $model ? $model->category_id : null, ['class' => 'form-control', 'placeholder' => 'Select Category'])}}--}}
{{--</div>--}}
<div class="form-group">
    <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
            @if($model)
                <h2>model</h2>
            @else
                <img src="holder.js/200x200" alt="...">
            @endif
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
        <div>
            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span
                        class="fileinput-exists">Change</span>{{ Form::file('image') }}</span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
        </div>
    </div>
</div>
{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}
