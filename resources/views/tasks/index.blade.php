<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials._head')
	</head>
	<body>
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-4"><h1>All Employees</h1></div>
		
		<div class="col-md-4">
			{{link_to_route('task.create','+ ADD NEW',null,['class'=>'btn btn-primary'])}}
		</div>
		</div>
	</div>
           
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-striped table-inverse">
					<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Manager</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					@foreach($tasks as $task)
					<tr>
						<th scope="row">{{$task->id}}</th>
						<td>{{ $task->name }}</td>
						<td>{{ $task->designation }}</td>
						<td>{{ $task->manager }}</td>
					</tr>
					</tbody>
					@endforeach
				</table>
			</div>
		</div>
		@include('partials._javascript')
	</div>
		</body>