@extends('template')
@section('content')
        <div class="bg-body-home">    
            <div style="padding-top:54px;" class="container">
                <div class="text-center mt-5 pt-5">
                    <h1 class="font-weight-bold text-light">Welcome to Cambodia's tourism.</h1>
                    <p class="text-light">Welcome to Cambodia's tourism.</p>
                    <button class="btn btn-success rounded-0">Subscribe</button>
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
                    <p><strong>Title:</strong>This is the title</p>
                    <button class="btn btn-outline-success rounded">More</button>
                </div>
                <div class="col-lg-3 text-center">
                    <img class="card-img" src={{asset("images/2.png")}} alt="2">
                    <p><strong>Title:</strong>This is the title</p>
                    <button class="btn btn-outline-success rounded">More</button>
                </div>
                <div class="col-lg-3 text-center">
                    <img class="card-img" src={{asset("images/3.png")}} alt="3">
                    <p><strong>Title:</strong>This is the title</p>
                    <button class="btn btn-outline-success rounded">More</button>
                </div>
                <div class="col-lg-3 text-center">
                    <img class="card-img" src={{asset("images/4.png")}} alt="4">
                    <p><strong>Title:</strong>This is the title</p>
                    <button class="btn btn-outline-success rounded">More</button>
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
</style>