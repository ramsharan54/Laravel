@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-8">
	
	           <figure>
	           	@foreach ($val as $value)
	                  
                 <img src="{{asset('images/'.$value)}}" class="img-circle" width="100" height="100">
                  	@endforeach
                 </figure> 

	         
  
    


		
	</div>
	
</div>
@endsection