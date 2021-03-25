@extends('master')
    
    @section('content')
    <style type="text/css">
    	.blog-post{
    		text-align: center;
    	}
    </style>
          <div class="blog-post">
            <h2 ><b>Hello {{ Auth::user()->name }}</b></h2>
            
            <h4><b>You are logged in {{ Auth::user()->name }} as {{ Auth::user()->role }}</b></h4>
            
          </div>

          <!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">

      @foreach($data as $covid)

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>24 Hours:</h3>
          <h3> {{ $covid->infect }}</h3>
          <h2>Total: {{ $totalinfect }}</h2>

          <p>New Infected</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>24 Hours: </h3>
          <h3>{{ $covid->death }}</h3>
          <h2>Total: {{ $totaldeath }}</h2>
          <p>Death</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        
      </div>
    </div>
    
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>24 Hours:</h3>
          <h3>{{ $covid->cure }}</h3>
          <h2>Total: {{ $totalcure }}</h2>
          <p>Cure</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>24 Hours: </h3>
          <h3>{{ $covid->test }}</h3>
          <h2>Total: {{ $totaltest }}</h2>

          <p>Total Test</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        
      </div>
    </div>

    

    

    @endforeach
    <!-- ./col -->
    
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->

          
@stop
