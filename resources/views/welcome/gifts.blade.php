@extends('layouts.master')

@section('title', 'Flower Shop - ')

@section('content')
    <div class="title"><span class="title_icon"><img src="{{asset('images/bullet1.gif')}}" alt="" /></span>Special gifts</div>
    <div class="feat_prod_box">
        <div class="prod_img">
            <a href="#"><img src="images/prod1.gif" alt="" border="0" /></a>
        </div>
        <div class="prod_det_box"> <span class="special_icon"><img src="{{asset('images/special_icon.gif')}}" alt="" /></span>
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title">Product name</div>
                <p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <a href="#" class="more">- more details -</a>
                <div class="clear"></div>
            </div>
            <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="feat_prod_box">
        <div class="prod_img">
            <a href="#"><img src="images/prod2.gif" alt="" border="0" /></a>
        </div>
        <div class="prod_det_box"> <span class="special_icon"><img src="{{asset('images/special_icon.gif')}}" alt="" /></span>
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title">Product name</div>
                <p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <a href="#" class="more">- more details -</a>
                <div class="clear"></div>
            </div>
            <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="feat_prod_box">
        <div class="prod_img">
            <a href="#"><img src="images/prod1.gif" alt="" border="0" /></a>
        </div>
        <div class="prod_det_box"> <span class="special_icon"><img src="{{asset('images/special_icon.gif')}}" alt="" /></span>
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title">Product name</div>
                <p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <a href="#" class="more">- more details -</a>
                <div class="clear"></div>
            </div>
            <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="feat_prod_box">
        <div class="prod_img">
            <a href="#"><img src="images/prod2.gif" alt="" border="0" /></a>
        </div>
        <div class="prod_det_box"> <span class="special_icon"><img src="{{asset('images/special_icon.gif')}}" alt="" /></span>
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title">Product name</div>
                <p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <a href="#" class="more">- more details -</a>
                <div class="clear"></div>
            </div>
            <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="pagination"> <span class="disabled">
            <<< /span><span class="current">1</span><a href="#">2</a><a href="#">3</a>�<a href="#">10</a><a
                    href="#">11</a><a href="#">>></a> </div>
    <div class="clear"></div>
@endsection
