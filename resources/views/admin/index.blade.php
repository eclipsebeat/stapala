@extends('layouts.admin')

@section('content')
	
    <div class="content-wrapper">
	    <section class="content-header">
		    <h1>
		        Page Header
		        <small>Optional description</small>
		    </h1>
	    	<ol class="breadcrumb">
	            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
	            <li class="active">Here</li>
	        </ol>
    	</section>


    <!-- Main content -->
    <section class="content">
		<div class="page-header">
		  <h1>Dashboard</h1>
		</div>

		<div class="jumbotron">
			<div class="header">
			  <h1>Selamat Datang di Tikata CMS</h1>
			  <h3>Beberapa menu utama yang dapat memudahkan kerja anda</h3>
		  	</div>
	           <div class="row">
	        <div class="col-md-4">        	
			  <p>Mulai membuat artikel</br>
			  	<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			  </p>
	        </div>
	        <div class="col-md-4">.col-md-4</div>
	        <div class="col-md-4">.col-md-4</div>
	      </div>
		</div>
	</section><!-- /.content -->
	</div><!-- /.content-wrapper -->
@endsection