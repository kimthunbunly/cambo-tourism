@extends('template')
@section('content')
    <div style="padding-top:54px;">
        <div class="container">
            <section class="m-3">
                <h3>Post Experience</h3>
                <div class="bg-light shadow p-3">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 text-center pt-sm-5 mt-sm-5">
                            <input type="file" class="d-none" id="input_image" accept="image/x-png,image/gif,image/jpeg">
                            <br>
                            <button type="submit" class="btn btn-warning rounded-0 mt-sm-5" onclick="document.getElementById('input_image').click()">
                                <img src="https://umc.utah.edu/wp-content/uploads/sites/15/2014/11/camera-slr-400px-white.png" alt="" class="img-fluid" style="width:32px;"> Photo
                            </button>
                        </div>
                        <div class="col-sm-6 p-3">
                            <h4>Write Your Experience</h4>
                            <div class="form-group">
                                <input type="email" class="form-control rounded-0 " id="title" placeholder="Enter your tour name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control rounded-0 " placeholder="Enter that location">
                            </div>
                            <div class="form-group">
                                <select class="form-control rounded-0" name="" id="">
                                    <option value="">feeling Happy</option>
                                    <option value="">feeling so Fresh</option>
                                    <option value="">feeling unhappy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control rounded-0" rows="4" placeholder="write about your tours interesting"></textarea>
                            </div>
                            <button class="btn btn-primary rounded-0">Post Now</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="m-3">
                <h3>News Experience</h3>
                <div class="bg-light shadow p-3 my-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <img src="https://www.cambodiadaily.com/wp-content/uploads/2017/01/WP-LastImage-4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-6 p-3">
                            <h4 >Tatai Resort Cambodia</h4>
                            <p class="my-2 pl-4 icon-profile">Post by <strong>Mr. Ny Vathanavong Sereyrothanak</strong></p>
                            <p class="my-2 pl-4 icon-time">09:30AM 22 February 2019</p>
                            <p class="my-2 pl-4 icon-location">Marina Resort Koh Kong Cambodia</p>
                            <p class="my-2 pl-4 icon-feeling">feeling happy</p>
                            <p class="my-2 pl-4 icon-note">Package template implements data-driven Package template implements data-driven Package template implements data-driven Package template implements data-driven Package template implements data-driven Package template implements data-driven Package template implements data-driven Package template implemen</p>
                            <p class="pl-5 text-primary icon-interesting">5 persons interesting</p>
                        </div>  
                    </div>
                </div>
                <div class="bg-light shadow p-3 my-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <img src="https://www.cambodiadaily.com/wp-content/uploads/2017/01/WP-LastImage-4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-6 p-3">
                            <h4 >Tatai Resort Cambodia</h4>
                            <p class="my-2 pl-4 icon-profile">Post by <strong>Mr. Ny Vathanavong Sereyrothanak</strong></p>
                            <p class="my-2 pl-4 icon-time">09:30AM 22 February 2019</p>
                            <p class="my-2 pl-4 icon-location">Marina Resort Koh Kong Cambodia</p>
                            <p class="my-2 pl-4 icon-feeling">feeling happy</p>
                            <p class="my-2 pl-4 icon-note">templates for generating textual output.templates for generating textual output.templates for generating textual output.templates for generating textual output.templates for generating textual output.templates for generating textual output.templates for generating textual output.templates for generating </p>
                            <p class="pl-5 text-primary icon-interesting">5 persons interesting</p>
                        </div>  
                    </div>
                </div>
                <div class="bg-light shadow p-3 my-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <img src="https://www.cambodiadaily.com/wp-content/uploads/2017/01/WP-LastImage-4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-6 p-3">
                            <h4 >Tatai Resort Cambodia</h4>
                            <p class="my-2 pl-4 icon-profile">Post by <strong>Mr. Ny Vathanavong Sereyrothanak</strong></p>
                            <p class="my-2 pl-4 icon-time">09:30AM 22 February 2019</p>
                            <p class="my-2 pl-4 icon-location">Marina Resort Koh Kong Cambodia</p>
                            <p class="my-2 pl-4 icon-feeling">feeling happy</p>
                            <p class="my-2 pl-4 icon-note">To generate HTML output, see packagTo generate HTML output, see packagTo generate HTML output, see packagTo generate HTML output, see packagTo generate HTML output, see packagTo generate HTML output, see packagTo generate HTML output, see packag</p>
                            <p class="pl-5 text-primary icon-interesting">5 persons interesting</p>
                        </div>  
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection


<style>
#title{
    /* background-color: aquamarine; */
}
.icon-profile{
    background: url("https://png.pngtree.com/svg/20170429/profile_1107725.png") no-repeat;
    background-size: auto 18px;
    background-position: 0px 2px;
}
.icon-time{
    background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY26LZ3B69uQNAYnkPMKVuxaSOkIRe-6HeVceN5YC36wjLc_MZ") no-repeat;
    background-size: auto 18px;
    background-position: 0px 2px;
}
.icon-location{
    background: url("https://www.mtctrains.com/wp-content/uploads/2017/05/map-marker-icon-300x300.png") no-repeat;
    background-size: auto 18px;
    background-position: 0px 2px;
}
.icon-feeling{
    background: url("https://cdn4.iconfinder.com/data/icons/reaction/32/happy-512.png") no-repeat;
    background-size: auto 18px;
    background-position: 0px 2px;
}
.icon-note{
    background: url("https://images.emojiterra.com/twitter/v11/512px/270d.png") no-repeat;
    background-size: auto 18px;
    background-position: 0px 2px;
}
.icon-interesting{
    background: url("https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/96/heavy-black-heart_2764.png")no-repeat;
    background-size: auto 24px;
    background-position: 0px 1px;
    cursor: pointer;
}
</style>