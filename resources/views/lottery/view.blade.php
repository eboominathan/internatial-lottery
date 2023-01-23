@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
				<form class="form-horizontal">	
					<div class="input-group date">
						<input type="text" class="form-control date" value="12-02-2012">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				</form>
			</div>
		</div>
		<table class="table table-hover table-responsive" >  
			<thead>
				<tr>
					<th>Sno</th>
					<th>Date</th>
					<th>Time</th>
					<th>Result1</th>
					<th>Result 1 </th>				
				</tr>
			</thead>
			<tbody>
				@if(!empty($lottery)) 
				@php $i = 1; @endphp
				@foreach($lottery as $lott)
				<tr>
					<td>{{$i++}}</td>
					<td>{{ date('d-m-Y',strtotime($lott->date))}}</td>
					<td>{{$lott->type.':00'}}</td>
					<td>{{$lott->a1}}</td>
					<td>{{$lott->a2}}</td>
				</tr>				
				@endforeach



				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection
