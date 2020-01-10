<style>
    .btn-custom {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        width: 100%;
        height: 400px;
    }
</style>

<div class="container text-center">
    <form class="form-group" method="POST" action="{{ route('candidate.store') }}">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div action="#" class="form-group border rounded p-2" method="POST"
                      action="{{ route('candidate.store') }}">
                    @csrf
                    <h5>STEP 1: Complete information</h5>
                    <img src="{{ asset('img/user.png') }}" width="30%">
                    <input type="text" class="form-control mb-2" placeholder="First name" name="first_name">
                    <input type="text" class="form-control mb-2" placeholder="Last name" name="last_name">
                    <input type="date" class="form-control mb-2" placeholder="Date of birth" name="dob">
                    <input type="email" class="form-control mb-2" placeholder="Email" name="email"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                    <input type="number" class="form-control mb-2" placeholder="Phone number" name="phone">
                    <input type="text" class="form-control mb-2" placeholder="Staff ID" name="candidate_id">
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="form-group border rounded p-2">
                    <h5>STEP 2: Record face</h5>
                    <img src="{{ asset('img/face.jpg') }}" width="80%"><br>
                    <i class="fas fa-exclamation-triangle"></i>
                    <i>The recoding takes 10 seconds</i>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-info btn-block ">
                        START RECORD
                    </button>
                    <br>
                    <span>Or upload video</span>
                    <label class="btn btn-info btn-block">
                        BROWSE
                        <input type="file" style="display: none;" name="video_rec">
                    </label>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="form-group border rounded p-2">
                    <button type="submit" class="btn-custom btn-info">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
