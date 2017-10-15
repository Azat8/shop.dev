{{ Form::open(['route' => $formRoute]) }}
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', $model ? $model->name : null, ['class' => 'form-control'] ) }}
    </div>
    {{--<div class="form-group">--}}
        {{--{{ Form::label('sub', 'Sub:') }}--}}
        {{--{{ Form::number('sub', $model ? $model->parent_id : null, ['class' => 'form-control', 'placeholder' => 'Enter parent_id']) }}--}}
    {{--</div>--}}
{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}

