@extends('layouts.master')

@section('title', 'Flower Shop - Home')

@section('content')
    <div class="title"><span class="title_icon"><img src="{{ asset('images/bullet1.gif') }}"
                alt="" /></span>Featured products</div>
    {{-- Product --}}
    @forelse ($featured as $item)
        <div class="feat_prod_box">
            <div class="prod_img"><a href="#"><img src="{{ asset('images/prod1.gif') }}" alt="" border="0" /></a>
            </div>
            <div class="prod_det_box">
                <div class="box_top"></div>
                <div class="box_center">
                    <div class="prod_title">{{$item->title}}</div>
                    <p class="details">{{$item->desc}}</p>
                    <a href="#" class="more">- more details -</a>
                    <div class="clear"></div>
                </div>
                <div class="box_bottom"></div>
            </div>
            <div class="clear"></div>
        </div>
    @empty
    <div class="feat_prod_box">
        <div class="prod_img"><a href="#"><img src="{{ asset('images/prod1.gif') }}" alt="" border="0" /></a>
        </div>
        <div class="prod_det_box">
            <div class="box_top"></div>
            <div class="box_center">
                <div class="prod_title">Dummy Title</div>
                <p class="details">Dummy Desc</p>
                <a href="#" class="more">- more details -</a>
                <div class="clear"></div>
            </div>
            <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>
    @endforelse
    {{-- Product --}}

    {{-- Product end --}}
    <div class="title"><span class="title_icon"><img src="{{ asset('images/bullet2.gif') }}"
                alt="" /></span>New products</div>
    <div class="new_products">
        <div class="new_prod_box"> <a href="#">product name</a>
            <div class="new_prod_bg"> <span class="new_icon"><img src="{{ asset('images/new_icon.gif') }}"
                        alt="" /></span> <a href="#"><img src="images/thumb1.gif" alt="" class="thumb"
                        border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
            <div class="new_prod_bg"> <span class="new_icon"><img src="{{ asset('images/new_icon.gif') }}"
                        alt="" /></span> <a href="#"><img src="images/thumb2.gif" alt="" class="thumb"
                        border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
            <div class="new_prod_bg"> <span class="new_icon"><img src="{{ asset('images/new_icon.gif') }}"
                        alt="" /></span> <a href="#"><img src="images/thumb3.gif" alt="" class="thumb"
                        border="0" /></a> </div>
        </div>
    </div>
    <div class="clear"></div>
@endsection
