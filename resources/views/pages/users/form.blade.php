<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name ..." @if(isset($user)) value="{{$user->name}}" @endif>
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email ..." @if(isset($user)) value="{{$user->email}}" @endif>
</div>
