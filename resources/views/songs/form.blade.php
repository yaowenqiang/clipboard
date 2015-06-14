<div class="form-group">
{!! Form::Label("title","title:") !!}
{!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::Label("slug","Slug:") !!}
{!! Form::text('slug',null,['class'=>'form-control','placeholder'=>'Enter a slug']) !!}
</div>
<div class="form-group">
{!! Form::Label("lyrics","lyrics:") !!}
{!! Form::textarea('lyrics',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Create Song',['class'=>'btn btn-primary']) !!}
</div>

