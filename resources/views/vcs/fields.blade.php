<!-- Image Field -->
  <div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>  


<div class="clearfix"></div>

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Disponiblite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disponiblite', 'Disponiblite:') !!}
    {!! Form::text('disponiblite', null, ['class' => 'form-control']) !!}
</div>

<!-- Cour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cour', 'Cour:') !!}
    {!! Form::text('cour', null, ['class' => 'form-control']) !!}
</div>

<!-- Education Field -->
<div class="form-group col-sm-6">
    {!! Form::label('education', 'Education:') !!}
    {!! Form::text('education', null, ['class' => 'form-control']) !!}
</div>

<!-- Technologie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('technologie', 'Technologie:') !!}
    {!! Form::text('technologie', null, ['class' => 'form-control']) !!}
</div>

<!-- Language Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language', 'Language:') !!}
    {!! Form::text('language', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivation', 'Motivation:') !!}
    {!! Form::text('motivation', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vcs.index') !!}" class="btn btn-default">Cancel</a>
</div>



