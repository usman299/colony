@extends('layouts.master')
@section('content')
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Just having satisfied customers isn't good enough anymore</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Complain
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ About Star /-->
<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about-img-box">
                    <img src="img/slide-about-1.jpg" alt="" class="img-fluid">
                </div>
                <div class="sinse-box">
                    <h3 class="sinse-title">ColonyMnagemant
                        <span></span>
                        <br> Sinse 2020</h3>
                    <p>Art & Creative</p>
                </div>
            </div>

                </div>
            </div>


</section>
<!--/ About End /-->



<!--/ Contact Star /-->
<section class="contact">

    <div class="col-sm-12 section-t8">
        <div class="row">
            <div class="col-md-7">
                <form class="" action="{{route('complain-submit')}}" method="post" role="form">
                  @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-a">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                    <div class="icon-box-icon">
                        <span class="ion-ios-paper-plane"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                        <div class="icon-box-title">
                            <h4 class="icon-title">Say Hello</h4>
                        </div>
                        <div class="icon-box-content">
                            <p class="mb-1">Email.
                                <span class="color-a">contact@example.com</span>
                            </p>
                            <p class="mb-1">Phone.
                                <span class="color-a">+54 356 945234</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="icon-box section-b2">
                    <div class="icon-box-icon">
                        <span class="ion-ios-pin"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                        <div class="icon-box-title">
                            <h4 class="icon-title">Find us in</h4>
                        </div>
                        <div class="icon-box-content">
                            <p class="mb-1">
                                Manhattan, Nueva York 10036,
                                <br> EE. UU.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="icon-box">
                    <div class="icon-box-icon">
                        <span class="ion-ios-redo"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                        <div class="icon-box-title">
                            <h4 class="icon-title">Social networks</h4>
                        </div>
                        <div class="icon-box-content">
                            <div class="socials-footer">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!--/ Contact End /-->
@endsection
