<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials._head')
	</head>
	<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				{!! Form::open(['web'=>'task.store']) !!}
    				{!! csrf_field() !!}
    				<div class="form-group">
    					{!! Form::label('name','Name:') !!}
    					{!! Form::text('name',null,['class'=>'form-control']) !!}
    				</div>

    				<div class="form-group">
    					{!! Form::label('designation','Designation:') !!}
    					{!! Form::text('designation',null,['class'=>'form-control']) !!}
    				</div>

    				<div class="form-group">
    					{!! Form::label('manager','Manager:') !!}
    					{!! Form::text('manager',null,['class'=>'form-control']) !!}
    				</div>

    				<div class="form-group">
    					{!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
    				</div>
				{!! Form::close() !!}
			</div>

			 {{-- @if($errors->has())
				<ul class="aler alert-danger">
					@foreach($errors->all() as $error)
					 <li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif  --}}
		</div>
		@include('partials._javascript')
	</div>
		</body>

