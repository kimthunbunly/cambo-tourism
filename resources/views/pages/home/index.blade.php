@extends('template')
@section('content')
        <div class="bg-body-home">    
            <div style="padding-top:54px;" class="container">
                <div class="text-center mt-5 pt-5">
                    <h1 class="font-weight-bold text-light">Welcome to Cambodia's tourism.</h1>
                    <p class="text-light">Welcome to Cambodia's tourism.</p>
                    <a href="#form_subcribe" class="btn btn-success rounded-0">Subscribe</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col bg-light shadow p-3" style="margin-top:-65px;">
                    <form>
                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt-province">Choose Province</label>
                                    <select class="form-control rounded-0" id="txt-province">
                                        <option>Choose any provices</option>
                                        @if(count(@$data['provices']))
                                            @foreach ($data['provices'] as $i => $provice)
                                                <option value={{$i}}>{{$provice}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt-style">Type of Tours</label>
                                    <select class="form-control rounded-0" id="txt-province">
                                        <option>Choose tours</option>
                                        @if(count(@$data['type']))
                                            @foreach ($data['type'] as $i => $type)
                                                <option value={{$i}}>{{$type}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt-style">Search</label>
                                    <button class="btn btn-primary form-control rounded-0">Search Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <h4 class="text-center">Top desanetion in cambodoia</h4>
            <p class="text-center">Top desanetion in cambodoia</p>
            <div class="row justify-content-center">
                <div class="col-lg-3 text-center">
                    <img class="card-img" src={{asset("images/1.png")}} alt="1">
                    <p class="m-0 p-0"><strong>Title:</strong>This is the title</p>
                    <a href="" class="">show more...</a>
                </div>
                <div class="col-lg-3 text-center">
                    <img class="card-img" src={{asset("images/2.png")}} alt="2">
                    <p class="m-0 p-0"><strong>Title:</strong>This is the title</p>
                    <a href="" class="">show more...</a>
                </div>
                <div class="col-lg-3 text-center">
                    <img class="card-img" src={{asset("images/3.png")}} alt="3">
                    <p class="m-0 p-0"><strong>Title:</strong>This is the title</p>
                    <a href="" class="">show more...</a>
                </div>
                <div class="col-lg-3 text-center">
                    <img class="card-img" src={{asset("images/4.png")}} alt="4">
                    <p class="m-0 p-0"><strong>Title:</strong>This is the title</p>
                    <a href="" class="">show more...</a>
                </div>
            </div>
        </div>
        <div class="bg-content">
            <div class="container pt-5">
                <div class="mt-5 text-center">
                    <h3 class="font-weight-bold text-light pt-5">What the type of tuors you look like from Cambodia?</h3>
                    <p class="text-light">thank you so much for visit Cambodia.</p>
                    <button class="btn btn-success rounded-0">Post Experience</button>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <h4 class="text-center">The most type exsperince</h4>
            <p class="text-center">feel good with beautiful place.</p>
            <div class="row justify-content-center">
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex1.png")}} alt="1">
                </div>
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex2.png")}} alt="1">
                </div>
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex3.png")}} alt="1">
                </div>
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex4.png")}} alt="1">
                </div>
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex5.png")}} alt="1">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex6.png")}} alt="1">
                </div>
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex7.png")}} alt="1">
                </div>
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex8.png")}} alt="1">
                </div>
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex9.png")}} alt="1">
                </div>
                <div class="col-sm text-center">
                    <img class="card-img" src={{asset("images/ex10.png")}} alt="1">
                </div>
            </div>
        </div>
        <div class="bg-light p-5">
            <h4 class="text-center">OUR SPORNSOR</h4>
            <p class="text-center">thank you so much.</p>
            <div class="row justify-content-center pb-3">
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/a.png")}} alt="a">
                </div>
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/b.png")}} alt="a">
                </div>
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/c.png")}} alt="a">
                </div>
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/d.png")}} alt="a">
                </div>
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/e.png")}} alt="a">
                </div>
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/f.png")}} alt="a">
                </div>
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/g.png")}} alt="a">
                </div>
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/h.png")}} alt="a">
                </div>
                <div class="col text-center">
                    <img class="card-img" src={{asset("images/logos/i.png")}} alt="a">
                </div>
            </div>
        </div>
        <div class="bg-content-comment">
            <div class="container p-1" id="form_subcribe">
                <div class=" row justify-content-center">
                    <div class="col-lg-6 pt-5 mt-5 text-center d-none d-lg-block">
                        <h3 class="font-weight-bold text-light pt-5">What the type of tuors you look like from Cambodia?</h3>
                        <p class="text-light">thank you so much for visit Cambodia.</p>
                        <button class="btn btn-success rounded-0">Post Experience</button>
                    </div>
                    <div class="col-lg-6 my-5 border-left">
                        <div class="bg-form-comment p-4">
                            <form>
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="email" class="form-control rounded-0" id="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control rounded-0" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control rounded-0" id="phone" placeholder="Enter phone">
                                </div>
                                <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control rounded-0" id="password" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                        <label for="confirm">Password</label>
                                        <input type="password" class="form-control rounded-0" id="confirm" placeholder="Confirm password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-0">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

<style>
    .bg-body-home{
        background: url('{{asset("images/bg_home.png")}}') no-repeat;
        background-size: cover;
        background-position: 0;
        height: 500px;
    }
    .bg-content{
        background: url('{{asset("images/resort.png")}}') no-repeat;
        background-size: cover;
        height: 500px;
    }
    .bg-content-comment{
        background: url('{{asset("images/bg-nature.png")}}') no-repeat;
        background-size: cover;
        /* height: 500px; */
    }
    .bg-form-comment{
        background-color:rgba(255, 255, 255,0.5);
    }
</style>