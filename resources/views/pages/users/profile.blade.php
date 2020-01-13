@extends('layouts.master')

@section('title','Profile')

@section('content')
    <div class="card ">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                       aria-controls="home"
                       aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile"
                       aria-selected="false">Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                       aria-controls="contact"
                       aria-selected="false">Contact</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row justify-content-center" id="tab1">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="text-center">
                                    <img src="{{ asset('img/avatar.png') }}" class="card-img-top img-thumbnail"
                                         alt="..."
                                         style="width: 200px;">
                                </div>
                                <div class="text-center">
                                    <button class="img-input btn btn-primary">
                                        <i class="fas fa-image"></i>
                                    </button>
                                    <input type="file" class="image" hidden>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">LOEUNG Sarady</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of
                                        the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">New Password</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                   placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Confirm Password</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                   placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="" class="btn btn-warning">Cancel</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">c</div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        $('.img-input').on('click', function () {
            $('.image').trigger('click')
        })
    </script>
@endsection

