@extends('layouts.home')

@section('title', 'Home')

@section('sidebar')
@@parent

<p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="bd-placeholder-img" src="{{ asset('img/slide/slide-1.jpg') }}" />

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>The state-of-the-art in diemaking</h1>
          <p>Easy-access for Diemaking and Signmaking routers</p>
          <p><a class="btn btn-lg btn-primary" href="https://www.deltadiemaking.com/en/products" target="blank">Product lines</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" src="{{ asset('img/slide/slide-2.jpg') }}" />

      <div class="container">
        <div class="carousel-caption">
          <h1>Very easy-to-use for everyone</h1>
          <p>The best easy-access router for heavy duty process for sign and Diemaking systems!!</p>
          <p><a class="btn btn-lg btn-primary" href="https://www.deltadiemaking.com/en/products" target="blank">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" src="{{ asset('img/slide/slide-3.jpg') }}" />

      <div class="container">
        <div class="carousel-caption text-end">
          <h1>“Fast…incredibly fast”</h1>
          <p>Get the best out of Delta’s technology.</p>
          <p><a class="btn btn-lg btn-primary" href="https://www.deltadiemaking.com/en/products" target="blank">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/product/Delta-RBR1000-HD.jpg') }}" />
      <h2>RBR 1000 HD</h2>
      <p>RBR 1000 HD represents the latest state-of–the-art technology for the die-ejection rubber cutting on the diemaking market.</p>
      <p><a class="btn btn-secondary" href="https://www.deltadiemaking.com/product/rbr-1000-hd" target="blank">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/product/Delta-PTX1100-HD.jpg') }}" />
      <h2>PTX 1100 HD</h2>
      <p>PTX 1100 HD is the most rielable and cost-effective stand-alone option for phenolic counters (Pertinax).</p>
      <p><a class="btn btn-secondary" href="https://www.deltadiemaking.com/product/ptx-1100-hd" target="blank">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/product/Delta-EASYFORM.jpg') }}" />
      <h2>EasyForm 1613</h2>
      <p>The EASYFORM is the best easy-access router for heavy duty process for sign and Diemaking system.</p>
      <p><a class="btn btn-secondary" href="https://www.deltadiemaking.com/product/easyform-1613" target="blank">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">ALR 1713<br /> <span class="text-muted">It’ll blow your mind.</span></h2>
      <p class="lead">No matter if a steel counter plate, embossing dies, pertinax or stripping die has to be processed, the result is always the same: accuracy and reliability.</p>
    </div>
    <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ asset('img/product/Delta-ALR-1713.jpg') }}" />
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Easy Sample 1321<br /> <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Clear-cut design, work surface easily accessible from all sides, extremely robust traverse bridge, the most modern drive and steering technologies, non-slip drive, most efficient matrix-vacuum and easy user guidance are the outstanding characteristics.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ asset('img/product/EasySample_1321.jpg') }}" />
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">LGT 1613<br /> <span class="text-muted">And lastly, this one.</span></h2>
      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
    </div>
    <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ asset('img/product/Delta-LGT-1613.jpg') }}" />
    </div>
  </div>

  <hr class="featurette-divider">
</div><!-- /.container -->
@stop