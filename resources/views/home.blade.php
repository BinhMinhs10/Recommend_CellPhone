@extends('layouts.app')

@section('content')
	<div class="row">
		@foreach ($mobiles as $mobile) 
			<div class="col-4">
				<div class="card" >
					<img class="card-img-top" src="{{ asset($mobile->image) }}" alt="Card image cap">
					<div class="card-header">
						{{ $mobile->name }}
					</div>
					
					<div class="card-body">
						<p class="card-text"><strong>Hệ điều hành: </strong>{{ $mobile->OS }}</p>
						<p class="card-text"><strong>Giá: </strong>{{ $mobile->cost }} đ</p>
					</div>
				</div>
				<br>
			</div>
			
		@endforeach
	</div>
	
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>

@endsection

	



	