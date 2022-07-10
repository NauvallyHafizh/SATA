<!-- Column -->
<div class="col-lg-8 col-xlg-9">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" class="form-horizontal form-material mx-2" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="name" class="col-md-12">Full Name</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="name" id="name" name="name"
                            class="form-control @error('name') is-invalid @enderror form-control-line" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-md-12">Username</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="username" id="username" name="username"
                            class="form-control @error('username') is-invalid @enderror form-control-line" value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" placeholder="email@example.com" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror form-control-line" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input type="password" placeholder="password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror form-control-line">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror    
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success text-white">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>