<div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
{!! Form::Label("title","title:") !!}
{!! Form::text('title',null,['class'=>'form-control']) !!}
{!! $errors->first('title','<span class="help-block">:message</span>')  !!}
</div>
<div class="form-group {{ $errors->has('slug')? 'has-error':'' }}">
{!! Form::Label("slug","Slug:") !!}
{!! Form::text('slug',null,['class'=>'form-control','placeholder'=>'Enter a slug']) !!}
{!! $errors->first('slug','<span class="help-block">:message</span>')  !!}
</div>
<div class="form-group">
{!! Form::Label("lyrics","lyrics:") !!}
{!! Form::textarea('lyrics',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Create Song',['class'=>'btn btn-primary']) !!}
</div>

