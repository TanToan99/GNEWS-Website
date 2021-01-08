<form method="POST" action="{{ route('admin.users.update',$user) }}" accept-charset="UTF-8">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input class="form-control" placeholder="Your name" required="" name="name" type="text" value="{{ $user->name }}" id="name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input class="form-control" placeholder="Your email" required="" name="email" type="text" value="{{ $user->email }}" id="email">
        </div>
    </div>
      
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input class="form-control" placeholder="Your new password" name="password" type="password" value="" id="password">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="password_confirmation">Password confirmation</label>
            <input class="form-control" placeholder="Password confirmation" name="password_confirmation" type="password" value="" id="password_confirmation">
        </div>
    </div>
    <div class="form-group">
        <label for="roles">Roles</label>
        
        @foreach($roles as $role)
        <div class="checkbox">
            <label><input name="roles[{{ $role->id }}]" type="checkbox" value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'checked' : 0 }}> {{ ucfirst($role->name) }}</label>
        </div>
        @endforeach
    </div>
      
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back</a>
    <input class="btn btn-primary" type="submit" value="Update">
</form>