{{ Form::open(['route' => $formRoute]) }}
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', $model ? $model->name : null, ['class' => 'form-control'] ) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}

