@extends('layouts.master')

@section('title', 'Flower Shop - ')

@section('content')
    <div class="crumb_nav"> <a href="#">home</a> &gt;&gt; product name </div>
    <div class="title"><span class="title_icon"><img src="{{asset('images/bullet1.gif')}}" alt="" /></span>Product name</div>
    <div class="feat_prod_box_details">
        <div class="prod_img">
            <a href="#"><img src="images/prod1.gif" alt="" border="0" /></a> <br />
            <br />
            <a href="images/big_pic.jpg" rel="lightbox"><img src="{{asset('images/zoom.gif')}}" alt="" border="0" /></a>
        </div>
        <div class="prod_det_box">
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title">Details</div>
                <p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br />
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation. </p>
                <div class="price"><strong>PRICE:</strong> <span class="red">100 $</span></div>
                <div class="price"><strong>COLORS:</strong> <span class="colors"><img
                            src="images/color1.gif" alt="" border="0" /></span> <span class="colors"><img
                            src="images/color2.gif" alt="" border="0" /></span>
                    <span class="colors"><img src="{{asset('images/color3.gif')}}" alt="" border="0" /></span>
                </div>
                <a href="#" class="more"><img src="{{asset('images/order_now.gif')}}" alt="" border="0" /></a>
                <div class="clear"></div>
            </div>
            <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="demo" class="demolayout">
        <ul id="demo-nav" class="demolayout">
            <li><a class="active" href="#tab1">More details</a></li>
            <li><a class="" href="#tab2">Related Products</a></li>
        </ul>
        <div class="tabs-container">
            <div style="display: block;" class="tab" id="tab1">
                <p class="more_details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                <ul class="list">
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></li>
                </ul>
                <p class="more_details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
            </div>
            <div style="display: none;" class="tab" id="tab2">
                <div class="new_prod_box"> <a href="#">product name</a>
                    <div class="new_prod_bg">
                        <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a>
                    </div>
                </div>
                <div class="new_prod_box"> <a href="#">product name</a>
                    <div class="new_prod_bg">
                        <a href="#"><img src="{{asset('images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a>
                    </div>
                </div>
                <div class="new_prod_box"> <a href="#">product name</a>
                    <div class="new_prod_bg">
                        <a href="#"><img src="{{asset('images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a>
                    </div>
                </div>
                <div class="new_prod_box"> <a href="#">product name</a>
                    <div class="new_prod_bg">
                        <a href="#"><img src="{{asset('images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a>
                    </div>
                </div>
                <div class="new_prod_box"> <a href="#">product name</a>
                    <div class="new_prod_bg">
                        <a href="#"><img src="{{asset('images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a>
                    </div>
                </div>
                <div class="new_prod_box"> <a href="#">product name</a>
                    <div class="new_prod_bg">
                        <a href="#"><img src="{{asset('images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
@endsection
