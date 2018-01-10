@extends('layouts.layout')

@section('keywords')
	jualmobil,mobil
@endsection

@section('description')
	description
@endsection

@section('title')
	Detail Car
@endsection

@section('content')
	<!-- Listing-detail-header -->
<section class="listing_detail_header">
  <div class="container">
    <div class="listing_detail_head white-text div_zindex row">
      <div class="col-md-9">
        <h2>{{ $car->type->type_mobil }}</h2>
        <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $car->pelanggan->alamat }}</span></div>
        <div class="add_compare">
          <div class="checkbox">
            <input value="" id="compare1" type="checkbox">
            <label for="compare1">Add to Compare</label>
          </div>
          <div class="share_vehicle">
            <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>Rp {{ $car->harga }},00.-</p>
          <!--<p class="old_price">$95,000</p>-->
        </div>
      </div>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
<!-- /Listing-detail-header -->

<section class="listing_other_info secondary-bg">
  <div class="container">
    <div id="filter_toggle" class="search_other"> <i class="fa fa-filter" aria-hidden="true"></i> Search Car </div>
    <div id="other_info"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
    <div id="info_toggle">
      <button type="button" data-toggle="modal" data-target="#schedule"> <i class="fa fa-car" aria-hidden="true"></i> Schedule Test Drive </button>
      <button type="button" data-toggle="modal" data-target="#make_offer"> <i class="fa fa-money" aria-hidden="true"></i> Make an Offer </button>
      <button type="button" data-toggle="modal" data-target="#email_friend"> <i class="fa fa-envelope" aria-hidden="true"></i> Email to a Friend </button>
      <button type="button" data-toggle="modal" data-target="#more_info"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Request More Info </button>
    </div>
  </div>
</section>

<!-- Filter-Form -->
<section id="filter_form" class="inner-filter gray-bg">
  <div class="container">
    <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>
    <div class="row">
      <form action="#" method="get">
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option value="">Select Location </option>
              <option value="">Location 1 </option>
              <option value="">Location 1 </option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Brand</option>
              <option>Brand 1</option>
              <option>Brand 2</option>
              <option>Brand 3</option>
              <option>Brand 4</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Model</option>
              <option>Series 1</option>
              <option>Series 2</option>
              <option>Series 3</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Year of Model </option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 black_input">
          <label class="form-label">Price Range ($)</label>
          <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Type of Car </option>
              <option>New Car</option>
              <option>Used Car</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6">
          <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car </button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- /Filter-Form --> 

<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="listing_images">
          <div id="listing_images_slider" class="listing_images_slider">
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
          </div>
          <div id="listing_images_slider_nav" class="listing_images_slider_nav">
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
            <div><img src="/../images/900x560.jpg" alt="image"></div>
          </div>
        </div>
        <div class="main_features">
          <ul>
            <li> <i class="fa fa-tachometer" aria-hidden="true"></i>
              <h5>{{ $car->kilometer }}</h5>
              <p>Total Kilometres</p>
            </li>
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{ $car->tahun->tahun }}</h5>
              <p>Model Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{ $car->fuel_type }}</h5>
              <p>Fuel Type</p>
            </li>
            <li> <i class="fa fa-power-off" aria-hidden="true"></i>
              <h5>{{ $car->tipe_transmisi }}</h5>
              <p>Transmission</p>
            </li>
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>{{ $car->kapasitas_orang }}</h5>
              <p>Seats</p>
            </li>
            <li> <i class="fa fa-user" aria-hidden="true"></i>
              <h5>{{ $car->owner }}</h5>
              <p>Owner</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
              <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Technical Specification</a></li>
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                {{{ $car->keterangan }}}
              </div>
              
              <!-- Technical-Specification -->
              <div role="tabpanel" class="tab-pane" id="specification">
                <div class="table-responsive"> 
                  <!--Basic-Info-Table-->
                  <table>
                    <thead>
                      <tr>
                        <th colspan="2">BASIC INFO</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Model Year</td>
                        <td>{{ $car->tahun->tahun }}</td>
                      </tr>
                      <tr>
                        <td>No. of Owners</td>
                        <td>{{ $car->owner }}</td>
                      </tr>
                      <tr>
                        <td>KMs Driven</td>
                        <td>{{ $car->kilometer }}</td>
                      </tr>
                      <tr>
                        <td>Fuel Type</td>
                        <td>{{ $car->fuel_type }}</td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <!--Technical-Specification-Table-->
                  <table>
                    <thead>
                      <tr>
                        <th colspan="2">Technical Specification</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Fuel Tank Capacity</td>
                        <td>{{ $car->kapasitas_bbm }} (Liters)</td>
                      </tr>
                      <tr>
                        <td>Seating Capacity</td>
                        <td>{{ $car->kapasitas_orang }}</td>
                      </tr>
                      <tr>
                        <td>Transmission Type</td>
                        <td>{{ $car->tipe_transmisi }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Air Conditioner</td>
                      @if( $car->AC == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>AntiLock Braking System</td>
                      @if( $car->antilock == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Power Steering</td>
                      @if( $car->power_s == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Power Windows</td>
                      @if( $car->power_w == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>CD Player</td>
                      @if( $car->cd_player == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Leather Seats</td>
                      @if( $car->leather_sets == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Central Locking</td>
                      @if( $car->central_locking == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Power Door Locks</td>
                      @if( $car->power_door == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Brake Assist</td>
                      @if( $car->brake_assist == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Driver Airbag</td>
                      @if( $car->driver_airbag == "Ya" )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Passenger Airbag</td>
                      @if( $car->passenger == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Crash Sensor</td>
                      @if( $car->crash_sensor == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Engine Check Warning</td>
                      @if( $car->engine_ceck == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                    <tr>
                      <td>Automatic Headlamps</td>
                      @if( $car->automatic_head == 'Ya' )
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      @else
                        <td><i class="fa fa-close" aria-hidden="true"></i></td>
                      @endif
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
          <!--Comment-Form-->
          <div class="comment_form">
            <h6>Leave a Comment</h6>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Full Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                <textarea rows="5" class="form-control" placeholder="Comments"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn" value="Submit Comment">
              </div>
            </form>
          </div>
          <!--/Comment-Form--> 
          
        </div>
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-calculator" aria-hidden="true"></i> Financing Calculator </h5>
          </div>
          <div class="financing_calculatoe">
            <form action="#" method="get">
              <div class="form-group">
                <label class="form-label">Vehicle Price ($)</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group">
                <label class="form-label">Down Price ($)</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group">
                <label class="form-label">Interest Rate</label>
                <div class="select">
                  <select class="form-control select">
                    <option>12%</option>
                    <option>13%</option>
                    <option>14%</option>
                    <option>15%</option>
                    <option>16%</option>
                    <option>17%</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Period in Years</label>
                <div class="select">
                  <select class="form-control">
                    <option>3 Year</option>
                    <option>4 Year</option>
                    <option>5 Year</option>
                    <option>6 Year</option>
                    <option>7 Year</option>
                    <option>8 Year</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block">Calcuate</button>
              </div>
            </form>
          </div>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact Person</h5>
          </div>
          <div class="dealer_detail"> <img src="/../images/90x90.jpg" alt="image">
            <p><span>Name:</span> {{ $car->pelanggan->nama }}</p>
            <p><span>Email:</span> {{ $car->pelanggan->email }}</p>
            <p><span>Phone:</span> {{ $car->pelanggan->nomer_handphone }}</p>
            <a href="#" class="btn btn-xs">View Profile</a> </div>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i> Message to Dealer</h5>
          </div>
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-block">
            </div>
          </form>
        </div>
      </aside>
      <!--/Side-Bar--> 
      
    </div>
    <div class="space-20"></div>
    <div class="divider"></div>
    
    <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Similar Cars</h3>
      <div class="row">
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="#"><img src="/../images/600x380.jpg" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">New</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare13">
                  <label for="compare13">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="#">Car Name</a></h5>
              <p class="list-price">$89,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="#"><img src="/../images/600x380.jpg" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">New</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare20">
                  <label for="compare20">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="#">Car Name</a></h5>
              <p class="list-price">$89,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="#"><img src="/../images/600x380.jpg" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">Used</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare15">
                  <label for="compare15">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="#">Car Name</a></h5>
              <p class="list-price">$89,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="#"><img src="/../images/600x380.jpg" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">Used</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare16">
                  <label for="compare16">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="#">Car Name</a></h5>
              <p class="list-price">$89,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/Similar-Cars--> 
    
  </div>
</section>
<!--/Listing-detail--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="/../images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="/../images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="/../images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="/../images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="/../images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="/../images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="/../images/100x60.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands-->
@endsection