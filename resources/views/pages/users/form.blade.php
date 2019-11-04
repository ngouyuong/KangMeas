<style>
    body {
        background: #e8cbc0;
        background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
        background: linear-gradient(to right, #e8cbc0, #636fa4);
        min-height: 100vh;
    }

    .bootstrap-select .bs-ok-default::after {
        width: 0.3em;
        height: 0.6em;
        border-width: 0 0.1em 0.1em 0;
        transform: rotate(45deg) translateY(0.5rem);
    }

    .btn.dropdown-toggle:focus {
        outline: none !important;
    }
</style>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
           placeholder="Name ..." @if(isset($user)) value="{{$user->name}}" @else value="{{ old('name') }}" @endif>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
           placeholder="Email ..." @if(isset($user)) value="{{$user->email}}" @else value="{{ old('email') }}" @endif>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="roles">Select Roles</label>
    <select multiple data-style="btn-info" class="selectpicker w-100 form-control text-capitalize" name="roles[]">
        @foreach($roles as $role)
            <option value="{{ $role->id }}"
                    data-content="<span class='badge badge-white'>{{ $role->name }}</span>">
                {{ $role->name }}
            </option>
        @endforeach
    </select>
</div>


<script>
    $(function () {
        $('.selectpicker').selectpicker();
    });
</script>

