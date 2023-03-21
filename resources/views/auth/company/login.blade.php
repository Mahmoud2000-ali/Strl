<x-auth.app>

    <div class="login-box" style="min-height: 410px">
        <form class="login-form" action="{{ route('companies.login.store') }}" method="post">
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
                          <p class="semibold-text mb-2 text-center"><a href="{{ route('companies.register.show') }}" data-toggle="flip">Create company?
                        </a></p>
                    </div>

              </div>
              <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN
                          IN</button>
              </div>
        </form>
  </div>
</x-auth.app>
