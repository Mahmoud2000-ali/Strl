<x-auth.app>
    <div class="login-box" style="min-height: 790px">
        <form class="login-form" action="{{ route('register') }}" method="post">
            @csrf
              <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTER</h3>

            {{-- first name --}}
            <div class="form-group">
                <label class="control-label">FIRST NAME</label>
                <input class="form-control @error('first_name') is-invalid @enderror"  name="first_name" type="text" placeholder="First name" value="{{ old('first_name') }}" autofocus required>
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- last name --}}
            <div class="form-group">
                <label class="control-label">LAST NAME</label>
                <input class="form-control @error('last_name') is-invalid @enderror"  name="last_name" type="text" placeholder="Last name" value="{{ old('last_name') }}" autofocus required>
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- USERNAME --}}
            <div class="form-group">
                <label class="control-label">USERNAME</label>
                <input class="form-control @error('username') is-invalid @enderror"  name="username" type="text" placeholder="Username" value="{{ old('username') }}" autofocus required>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

             {{-- USERNAME --}}
             <div class="form-group">
                <label class="control-label">PHONE NUMBER</label>
                <input class="form-control @error('phone_number') is-invalid @enderror"  name="phone_number" type="text" placeholder="Phone Number" value="{{ old('phone_number') }}" autofocus required>
                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

              {{-- email --}}
              <div class="form-group">
                    <label class="control-label">EMAIl</label>
                    <input class="form-control @error('email') is-invalid @enderror"  name="email" type="text" placeholder="Email" value="{{ old('email') }}" autofocus required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

              {{-- password --}}
              <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control @error('password') is-invalid @enderror" name='password' type="password" placeholder="Password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

              {{-- confirm password --}}
              <div class="form-group">
                <label class="control-label">CONFIRM PASSWORD</label>
                <input class="form-control @error('password') is-invalid @enderror" name='password_confirmation' type="password" placeholder="Password" required>
          </div>

              <div class="form-group">
                    <div class="utility">
                          <div class="animated-checkbox">
                            <p class="semibold-text mb-2 text-center"><a href="{{ route('admins.login.show') }}" data-toggle="flip">login as admin?
                            </a></p>
                          </div>
                          <p class="semibold-text mb-2"><a href="{{ route('login') }}" data-toggle="flip">Have account?
                                </a></p>
                    </div>

              </div>
              <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>REGISTER</button>
              </div>
        </form>
  </div>
      {{-- <div class="container">
            <div class="row justify-content-center">
                  <div class="col-md-8">
                        <div class="card">
                              <div class="card-header">{{ __('Register') }}</div>

                              <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                          @csrf

                                          <div class="row mb-3">
                                                <label for="name"
                                                      class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                                <div class="col-md-6">
                                                      <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus>

                                                      @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                  <strong>{{ $message }}</strong>
                                                            </span>
                                                      @enderror
                                                </div>
                                          </div>

                                          <div class="row mb-3">
                                                <label for="email"
                                                      class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                <div class="col-md-6">
                                                      <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email">

                                                      @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                  <strong>{{ $message }}</strong>
                                                            </span>
                                                      @enderror
                                                </div>
                                          </div>

                                          <div class="row mb-3">
                                                <label for="password"
                                                      class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                      <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password">

                                                      @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                  <strong>{{ $message }}</strong>
                                                            </span>
                                                      @enderror
                                                </div>
                                          </div>

                                          <div class="row mb-3">
                                                <label for="password-confirm"
                                                      class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                                <div class="col-md-6">
                                                      <input id="password-confirm" type="password" class="form-control"
                                                            name="password_confirmation" required
                                                            autocomplete="new-password">
                                                </div>
                                          </div>

                                          <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                      <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
                                                      </button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div> --}}
</x-auth.app>
