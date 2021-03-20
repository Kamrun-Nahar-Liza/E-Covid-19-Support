@extends('master')
    
    @section('content')
    <style type="text/css">
    	.blog-post{
    		text-align: center;
    	}
    </style>
          <div class="blog-post">
            <h2 ><b>Hello {{ Auth::user()->name }}</b></h2>
            <h2><b>Welcome to E- Covid-19 support</b></h2>
            <h4><b>You are logged in {{ Auth::user()->name }} as {{ Auth::user()->role }}</b></h4>
            
          </div>

           <!-- Main content -->
           
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
              
              <!-- ./col -->
              
              <!-- ./col -->
            
            <!-- /.row -->
            <!-- Main row -->

      {{-- post view --}}


      <!-- Box Comment -->
      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            
            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
            <span class="description">Shared publicly - 7:30 PM Today</span>
          </div>
          <!-- /.user-block -->
          <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
              <i class="fa fa-circle-o"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- post text -->
          <p>Far far away, behind the word mountains, far from the
            countries Vokalia and Consonantia, there live the blind
            texts. Separated they live in Bookmarksgrove right at</p>

          

          <!-- Attachment -->
          <div class="attachment-block clearfix">
            

            
            <!-- /.attachment-pushed -->
          </div>
          <!-- /.attachment-block -->

          <!-- Social sharing buttons -->
          <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
          <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
          <span class="pull-right text-muted">45 likes - 2 comments</span>
        </div>
        <!-- /.box-body -->
        <div class="box-footer box-comments">
          <div class="box-comment">
            <!-- User image -->
            <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

            <div class="comment-text">
                  <span class="username">
                    Maria Gonzales
                    <span class="text-muted pull-right">8:03 PM Today</span>
                  </span><!-- /.username -->
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
            </div>
            <!-- /.comment-text -->
          </div>
          <!-- /.box-comment -->
          <div class="box-comment">
            <!-- User image -->
            <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

            <div class="comment-text">
                  <span class="username">
                    Nora Havisham
                    <span class="text-muted pull-right">8:03 PM Today</span>
                  </span><!-- /.username -->
              The point of using Lorem Ipsum is that it has a more-or-less
              normal distribution of letters, as opposed to using
              'Content here, content here', making it look like readable English.
            </div>
            <!-- /.comment-text -->
          </div>
          <!-- /.box-comment -->
        </div>
        <!-- /.box-footer -->
        <div class="box-footer">
          <form action="#" method="post">
            <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
            <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push">
              <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
            </div>
          </form>
        </div>

          
@stop
