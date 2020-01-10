<div class="form-group">
    <label for="name">Role Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
           placeholder="Role Name ..." @if(isset($role)) value="{{$role->name}}" @else value="{{ old('name') }}" @endif>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="roles">Permissions</label>
    <select multiple data-style="btn-info" class="selectpicker w-100 form-control text-capitalize" name="permissions[]">
        @foreach($permissions as $permission)
            @if(isset($role))
                @php $found=false @endphp
                @foreach($role['permissions'] as $rolePermission)
                    @if($permission->id == $rolePermission->id)
                        @php $found = true @endphp
                        @break;
                    @endif
                @endforeach
                @if($found)
                    <option value="{{ $permission->id }}" selected>{{ $permission->name }}</option>
                @else
                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                @endif
            @else
                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
            @endif

        @endforeach
    </select>
</div>



