@extends('layouts.master')

@section('title', 'Flower Shop - ')

@section('content')
    <div class="title"><span class="title_icon"><img src="{{asset('images/bullet1.gif')}}" alt="" /></span>My account</div>
    <div class="feat_prod_box_details">
        <p class="details"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
        <div class="contact_form">
            <div class="form_subtitle">login into your account</div>
            <form name="register" href="#">
                <div class="form_row">
                    <label class="contact"><strong>Username:</strong></label>
                    <input type="text" class="contact_input" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input type="text" class="contact_input" />
                </div>
                <div class="form_row">
                    <div class="terms">
                        <input type="checkbox" name="terms" /> Remember me
                    </div>
                </div>
                <div class="form_row">
                    <input type="submit" class="register" value="login" />
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
@endsection
