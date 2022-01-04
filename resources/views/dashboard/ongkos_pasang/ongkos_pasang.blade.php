@extends('dashboard.layout.dashboard')

@section('section')
<div class="col-lg-12 mx-7 my-7">				
<div class="container-fluid">
	@if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">
                    {{ session()->get('success') }}
            </div>
        @endif
		<div class="row">		
			<a href="/ongkos_pasang/create" class="btn btn-info btn-sm">Add</a>
		</div>
	</div>
<div class="row">
	<div class="form-group my-2">
		<form class="form-inline" method="GET" action="/filter_pasang">
			<input type="text" class="form-control" id="filter" name="filter" placeholder="Location name..." value="">
			<button type="submit" class="btn btn-default mb-2">Filter</button>
		</form>
	</div>
	<div class="col-md-10 my-5">
		@section ('htable_panel_title','Table Ongkos Pasang') 
		@section ('htable_panel_body')
		@include('dashboard.ongkos_pasang.widgets.table_ongkos_pasang', array('class'=>'table-hover'))
		@endsection
		@include('dashboard.widgets.panel', array('header'=>true, 'as'=>'htable'))
	</div>
</div>
</div>
</div>

@endsection

