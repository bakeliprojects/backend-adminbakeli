<!-- Prev Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prev', 'Prev:') !!}
    {!! Form::text('prev', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('links.index') !!}" class="btn btn-default">Cancel</a>
</div>
