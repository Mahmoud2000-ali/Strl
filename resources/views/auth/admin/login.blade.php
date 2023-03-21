<x-auth.app>

    <div class="login-box" style="min-height: 410px">
        <form class="login-form" action="{{ route('admins.login.show') }}" method="post">
            @csrf
              <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>

              {{-- email --}}
              <div class="form-group">
                    <label class="control-label">EMAIL</label>
                    <input class="form-control @error('email') is-invalid @enderror"  name="email" type="email" placeholder="Email" value="{{ old('email') }}" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

              {{-- password --}}
              <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control @error('password') is-invalid @enderror" name='password' type="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                    <div class="utility">
                          <div class="animated-checkbox">
                                <label>
                                      <input {{  old('remember') ? 'checked' : ''  }} name="remember" type="checkbox"><span class="label-text">Stay Signed in</span>
                                </label>
                          </div>
                          <p class="semibold-text mb-2 text-center"><a href="{{ route('login') }}" data-toggle="flip">login as customer?
                        </a></p>
                    </div>

              </div>
              <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN
                          IN</button>
              </div>
        </form>
  </div>
      {{-- <div class="container">
            <div class="row justify-content-center">
                  <div class="col-md-8">
                        <div class="card">
                              <div class="card-header">{{ __('Login') }}</div>

                              <div class="card-body">
                                    <form method="POST" action="{{ route('admins.login.store') }}">
                                          @csrf

                                          <div class="row mb-3">
                                                <label for="email"
                                                      class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                <div class="col-md-6">
                                                      <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email" autofocus>

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
                                                            name="password" required autocomplete="current-password">

                                                      @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                  <strong>{{ $message }}</strong>
                                                            </span>
                                                      @enderror
                                                </div>
                                          </div>

                                          <div class="row mb-3">
                                                <div class="col-md-6 offset-md-4">
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                  name="remember" id="remember"
                                                                  {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                  {{ __('Remember Me') }}
                                                            </label>
                                                      </div>
                                                </div>
                                          </div>

                                          <div class="row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                      <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                      </button>

                                                      @if (Route::has('password.request'))
                                                            <a class="btn btn-link"
                                                                  href="{{ route('password.request') }}">
                                                                  {{ __('Forgot Your Password?') }}
                                                            </a>
                                                      @endif
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div> --}}
</x-auth.app>
