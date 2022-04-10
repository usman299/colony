@extends('layouts.master')
@section('content')

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home.index')}}">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Properties Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>

                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <span class="ion-ios-arrow-back"></span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="property_grid_rent">Sell</a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link" href="property_grid_rent">Rent</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="property_grid_rent">Open House</a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="#">
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-1.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                      <a href="property-single">Block-K
                          <br /> House-87K</a>
                  </h2>
                </div>
                  <div class="card-body-a">
                      <div class="price-box d-flex">
                          <span class="price-a">Sell | Pkr:99lac</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-3.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                      <a href="property-single">Block-F
                          <br /> House-50F</a>
                  </h2>
                </div>
                  <div class="card-body-a">
                      <div class="price-box d-flex">
                          <span class="price-a">Sell | Pkr:90lac</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-6.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                      <a href="property-single">Block-D
                          <br /> House-58D</a>
                  </h2>
                </div>
                  <div class="card-body-a">
                      <div class="price-box d-flex">
                          <span class="price-a">Sell | Pkr:95lac</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-7.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                      <a href="property-single">Block-B
                          <br /> House-5B</a>
                  </h2>
                </div>
                  <div class="card-body-a">
                      <div class="price-box d-flex">
                          <span class="price-a">Sell | Pkr:78lac</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-8.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                      <a href="property-single">Block-E
                          <br /> House-5E</a>
                  </h2>
                </div>
                  <div class="card-body-a">
                      <div class="price-box d-flex">
                          <span class="price-a">Sell | Pkr:2Crore</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>840m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                      <a href="property-single">Block-C
                          <br /> House-89C</a>
                  </h2>
                </div>
                  <div class="card-body-a">
                      <div class="price-box d-flex">
                          <span class="price-a">Sell | Pkr:89lac</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>310m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-4">
              <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                      <img src="img/property-7.jpg" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                      <div class="card-overlay-a-content">
                          <div class="card-header-a">
                              <h2 class="card-title-a">
                                  <a href="property-single">Block-B
                                      <br /> House-5B</a>
                              </h2>
                          </div>
                          <div class="card-body-a">
                              <div class="price-box d-flex">
                                  <span class="price-a">Sell | Pkr:78lac</span>
                              </div>
                              <a href="property-single.html" class="link-a">Click here to view
                                  <span class="ion-ios-arrow-forward"></span>
                              </a>
                          </div>
                          <div class="card-footer-a">
                              <ul class="card-info d-flex justify-content-around">
                                  <li>
                                      <h4 class="card-info-title">Area</h4>
                                      <span>340m
                        <sup>2</sup>
                      </span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Beds</h4>
                                      <span>2</span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Baths</h4>
                                      <span>4</span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Garages</h4>
                                      <span>1</span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                      <img src="img/property-8.jpg" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                      <div class="card-overlay-a-content">
                          <div class="card-header-a">
                              <h2 class="card-title-a">
                                  <a href="property-single">Block-E
                                      <br /> House-5E</a>
                              </h2>
                          </div>
                          <div class="card-body-a">
                              <div class="price-box d-flex">
                                  <span class="price-a">Sell | Pkr:2Crore</span>
                              </div>
                              <a href="property-single.html" class="link-a">Click here to view
                                  <span class="ion-ios-arrow-forward"></span>
                              </a>
                          </div>
                          <div class="card-footer-a">
                              <ul class="card-info d-flex justify-content-around">
                                  <li>
                                      <h4 class="card-info-title">Area</h4>
                                      <span>840m
                        <sup>2</sup>
                      </span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Beds</h4>
                                      <span>2</span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Baths</h4>
                                      <span>4</span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Garages</h4>
                                      <span>1</span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                      <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                      <div class="card-overlay-a-content">
                          <div class="card-header-a">
                              <h2 class="card-title-a">
                                  <a href="property-single">Block-C
                                      <br /> House-89C</a>
                              </h2>
                          </div>
                          <div class="card-body-a">
                              <div class="price-box d-flex">
                                  <span class="price-a">Sell | Pkr:89lac</span>
                              </div>
                              <a href="property-single.html" class="link-a">Click here to view
                                  <span class="ion-ios-arrow-forward"></span>
                              </a>
                          </div>
                          <div class="card-footer-a">
                              <ul class="card-info d-flex justify-content-around">
                                  <li>
                                      <h4 class="card-info-title">Area</h4>
                                      <span>310m
                        <sup>2</sup>
                      </span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Beds</h4>
                                      <span>2</span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Baths</h4>
                                      <span>4</span>
                                  </li>
                                  <li>
                                      <h4 class="card-info-title">Garages</h4>
                                      <span>1</span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#property-grid">1</a>
              </li>
              <li class="page-item ">
                <a class="page-link" href="#property_grid_rent">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#sellpage3">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Grid End /-->

@endsection
