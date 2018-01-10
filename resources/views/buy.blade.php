@extends('layouts.layout')

@section('keywords')
	jualmobil,mobil
@endsection

@section('description')
	description
@endsection

@section('title')
	List Car
@endsection

@section('content')
	<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Car Listing Grid</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="/">Home</a></li>
        <li>Car Listing</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-grid-view-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
            <p>1 - 12 <span>of {{ $carTotals }} Results for your search.</span></p>
          </div>
          <div class="result-sorting-by">
            <p>Sort by:</p>
            <form action="#" method="post">
              <div class="form-group select sorting-select">
                <select class="form-control ">
                  <option on-click="newItem()">Newest Items</option>
                  <option id="pricelow">Price (low to high)</option>
                  <option id="pricehigh">Price (high to low)</option>
                </select>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          @php
            $number = 1
          @endphp
          @foreach($carAll as $data)
            <div class="col-md-4 grid_listing">
              <div class="product-listing-m gray-bg">
                <div class="product-listing-img"> <a href="\buy\detail\{{ $data->id }}"><img src="images/600x380.jpg" class="img-responsive" alt="image" /> </a>
                  <div class="label_icon">{{ $data->mobil }}</div>
                  <div class="compare_item">
                    <div class="checkbox">
                      <input type="checkbox" value="" id="compare{{ $number }}">
                      <label for="compare{{ $number }}">Compare</label>
                    </div>
                  </div>
                </div>

                <div class="product-listing-content">
                  <h5><a href="\buy\detail\{{ $data->id }}">{{ $data->type->type_mobil }}</a></h5>
                  <p class="list-price">{{ $data->harga }}</p>
                  <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $data->pelanggan->alamat }}</span></div>
                  <ul class="features_list">
                    <li><i class="fa fa-road" aria-hidden="true"></i>{{ $data->kilometer }} km</li>
                    <li><i class="fa fa-user-plus" aria-hidden="true"></i>{{ $data->kapasitas_orang }} seat</li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $data->tahun->tahun }} model</li>
                    <li><i class="fa fa-car" aria-hidden="true"></i>{{ $data->fuel_type }}</li>
                  </ul>
                </div>
              </div>
            </div>
            @php
              $number++
            @endphp
          @endforeach
        </div>
        <div class="pagination">
          <ul>
            <li class="current">1</li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
          </ul>
        </div>
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Dream Car </h5>
          </div>
          <div class="sidebar_filter">
            <form action="#" method="get">
              <div class="form-group select">
                <select class="form-control" id="merk">
                  <option>Select Brand</option>
                  @foreach($carMerks as $data)
                    <option value="{{ $data->merk_mobil }}">{{ $data->merk_mobil }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="id_mobil">
                  <option>Select Type</option>
                  @foreach($carTypes as $data)
                    <option value="{{ $data->id }}">{{ $data->type_mobil }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="id_tahun">
                  <option>Year of Model </option>
                  @foreach($tahun as $data)
                    <option value="{{ $data->id }}">{{ $data->tahun }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">Price Range ($) </label>
                <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="10000" data-slider-step="5" data-slider-value="[1000,5000]"/>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Type of Car </option>
                  <option>New Car</option>
                  <option>Used Car</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
              </div>
            </form>
          </div>
        </div>
        <div class="sidebar_widget sell_car_quote">
          <div class="white-text div_zindex text-center">
            <h3>Sell Your Car</h3>
            <p>Request a quote and sell your car now!</p>
            <a href="#" class="btn">Request a Quote <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          <div class="dark-overlay"></div>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
              @foreach($carTerbaru as $data)
                <li class="gray-bg">
                  <div class="recent_post_img"> <a href="#"><img src="images/200x200.jpg" alt="image"></a> </div>
                  <div class="recent_post_title"> <a href="#">{{ $data->type->type_mobil }}</a>
                    <p class="widget_price">{{ $data->harga }}</p>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!--/Listing-grid-view--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        @foreach($carPopular as $data)
          <div>
            <a href="#"><img src="images/100x60.png" class="img-responsive" alt="image"></a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 
@endsection