<x-auth.app>
      <div class="login-box" style="min-height: 950px; width: 650px;">
            <form class="login-form" action="{{ route('companies.register.store') }}" method="post">
                  @csrf
                  <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTER</h3>

                  {{-- company name --}}
                  <div class="form-group">
                        <label class="control-label">COMPANY NAME</label>
                        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                              placeholder="Company name" value="{{ old('name') }}" required>
                        @error('name')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>

                  {{-- company email --}}
                  <div class="form-group">
                        <label class="control-label">COMPANY EMAIL</label>
                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                              placeholder="Company email" value="{{ old('email') }}" required>
                        @error('email')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>


                  {{-- phone number --}}
                  <div class="form-group">
                        <label class="control-label">PHONE NUMBER</label>
                        <input class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                              type="text" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
                        @error('phone_number')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>


                  {{-- building number --}}
                  <div class="form-group">
                        <label class="control-label">BUILDING NUMBER</label>
                        <input class="form-control @error('building_number') is-invalid @enderror"
                              name="building_number" type="number" placeholder="Building Number"
                              value="{{ old('building_number') }}" required>
                        @error('building_number')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>

                  {{-- floor number --}}
                  <div class="form-group">
                        <label class="control-label">FLOOR NUMBER</label>
                        <input class="form-control @error('floor_number') is-invalid @enderror" name="floor_number"
                              type="number" placeholder="Floor Number" value="{{ old('floor_number') }}" required>
                        @error('floor_number')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>


                  {{-- lockers number --}}
                  <div class="form-group">
                        <label class="control-label">LOCKERS NUMBER</label>
                        <input class="form-control @error('locker_number') is-invalid @enderror" name="locker_number"
                              type="number" placeholder="Locker Number" value="{{ old('locker_number') }}" required>
                        @error('locker_number')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>


                  {{-- price --}}
                  <div class="form-group">
                        <label class="control-label">PRICE</label>
                        <input class="form-control @error('price') is-invalid @enderror" name="price" type="number"
                              placeholder="Price" value="{{ old('price') }}" required>
                        @error('price')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>

                  {{-- password --}}
                  <div class="form-group">
                        <label class="control-label">PASSWORD</label>
                        <input class="form-control @error('password') is-invalid @enderror" name="password"
                              type="password" placeholder="Password" value="{{ old('password') }}" required>
                        @error('password')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>

                  {{-- confirm password --}}
                  <div class="form-group">
                        <label class="control-label">CONFIRM PASSWORD</label>
                        <input class="form-control @error('password') is-invalid @enderror" name='password_confirmation'
                              type="password" placeholder="Password" required>
                  </div>

                  <div class="form-group">
                        <div class="utility">
                              <div class="animated-checkbox">
                                    <p class="semibold-text mb-2 text-center"><a
                                                href="{{ route('admins.login.show') }}" data-toggle="flip">login as
                                                admin?
                                          </a></p>
                              </div>
                              <p class="semibold-text mb-2"><a href="{{ route('companies.login.show') }}" data-toggle="flip">Have
                                          account?
                                    </a></p>
                        </div>

                  </div>
                  <div class="form-group btn-container">
                        <button class="btn btn-primary btn-block"><i
                                    class="fa fa-sign-in fa-lg fa-fw"></i>REGISTER</button>
                  </div>
            </form>
      </div>

</x-auth.app>
