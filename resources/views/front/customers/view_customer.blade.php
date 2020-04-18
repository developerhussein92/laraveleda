@extends('front.layout')

@section('pagetitle')
    View Customer Profile
@endsection

@section('pagecontent')

<h1>Customer Profile</h1>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <div class="card-title mb-4">
                    <div class="d-flex justify-content-start">
                        <div class="image-container">
                            <img src="/storage/images/customers/{{$customer->cimg}}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                            <div class="middle">
                                
                               
                            </div>
                        </div>
                        <div class="userData ml-3">
                            <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">{{$customer->cname}}</a></h2>
                            
                        </div>
                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content ml-1" id="myTabContent">
                            <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                

                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">Customer Name:</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        {{ $customer->cname }}
                                    </div>
                                </div>
                                <hr />

                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">Customer Phone:</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        {{ $customer->cphone }}
                                    </div>
                                </div>
                                <hr />
                                
                                
                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">Customer Address:</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        {{ $customer->caddress }}
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">Customer Email:</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        {{ $customer->cemail }}
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary">Edit</a>
                                        <form action="/customers/{{$customer->id}}/delete" method="post" style="display:inline-block;" class="form-inline">
                                        @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                        <a href="/customers" class="btn btn-secondary">Back</a>
                                    </div>
                                   
                                </div>
                                <hr />

                            </div>
                         
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

@endsection