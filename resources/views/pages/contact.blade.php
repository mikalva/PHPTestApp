@extends('layouts.app')
@section('content')	
<div class="container">
	<h2><?php echo $title; ?></h2>
</div>
<div class="container">	
	<form method="post" action="#" class="card">  
		<p><span class="error">* required field</span></p>
		<div class="col-md-6 mb-3">
	        <label for="name">Name</label>
	        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="" required>
	        <div class="invalid-feedback">
	          Valid last name is required.
	        </div>
	    </div>
	    <div class="col-md-6 mb-3">
	        <label for="email">Email</label>
	        <input type="text" class="form-control" name="email" id="email" placeholder="Name" value="" required>
	        <div class="invalid-feedback">
	          Valid last name is required.
	        </div>
	    </div>
	    <div class="col-md-6 mb-3">
	        <label for="comment">Comment</label>
	        <textarea name="message" rows="5" cols="40"></textarea>
	        <div class="invalid-feedback">
	          Valid last name is required.
	        </div>
	    </div>
		<hr class="mb-4">
	    <button type="button" class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
	</form>
</div>
<!--  -->
@endsection