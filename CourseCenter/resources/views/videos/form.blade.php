{!! Form::hidden('user_id',1) !!}
<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('title','Tytuł:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('CategoryListB','Kategoria:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::select('CategoryListB[]',$categories,null,['class'=>'form-control','multiple']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('description','Opis:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('url','URL filmu:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('url',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($buttonText,['class'=>'btn btn-primary']) !!}
    </div>
</div>
