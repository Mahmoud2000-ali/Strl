<x-customer.app>
      <div id="appCustomer" class="mt-4">
            <div class="container">
                  <div class="slider d-flex justify-content-around">
                        <div class="item card-1">
                              <div class="card__icon text-center mt-3"><i class="fa fa-home fa-2x" aria-hidden="true"></i>
                              </div>
                              <h2 class="card__title">Go home</h2>
                              <p class="card__apply">
                                    <a class="card__link" href="{{ route('customers.welcome') }}">Go home
                                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                              </p>
                        </div>
                        <div class="item card-2">
                              <div class="card__icon text-center mt-3"><i class="fa fa-file-text fa-2x"
                                          aria-hidden="true"></i>
                              </div>
                              <h2 class="card__title">Add a new locker reservation</h2>
                              <p class="card__apply">
                                    <a class="card__link" href="{{ route('customers.reservations.index') }}">Apply Now
                                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                              </p>
                        </div>
                        <div class="item card-3">
                              <div class="card__icon text-center mt-3"><i class="fa fa-sign-out fa-2x"
                                          aria-hidden="true"></i>
                              </div>
                              <h2 class="card__title">Sign out</h2>

                              <form class="card__apply" action="{{ route('logout') }}" method="post"
                                    style="bottom: 8px;">
                                    @csrf
                                    <button class='card__link btn' type="submit"> Apply Now <i
                                                class="fa fa-arrow-right" aria-hidden="true"></i></button>
                              </form>
                        </div>
                  </div>
                  <hr class="mt-4">

                  <div class="image-area text-center">
                        <img src="{{ Auth::user()->getImageUrl() }}" alt="client image" width="100">
                  </div>
                  <div class="row mt-3">
                        <div class="col-12 col-md-5">
                              <form method="post" action="{{ route('customers.profiles.update', Auth::user()) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    {{-- first name --}}
                                    <div class="form-group mb-3">
                                          <label class="control-label">FIRST NAME</label>
                                          <input class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" type="text" placeholder="First name"
                                                value="{{ old('first_name', Auth::user()->first_name) }}" required>
                                          @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- last name --}}
                                    <div class="form-group mb-3">
                                          <label class="control-label">LAST NAME</label>
                                          <input class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" type="text" placeholder="Last name"
                                                value="{{ old('last_name', Auth::user()->last_name) }}" required>
                                          @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- USERNAME --}}
                                    <div class="form-group mb-3">
                                          <label class="control-label">USERNAME</label>
                                          <input class="form-control @error('username') is-invalid @enderror"
                                                name="username" type="text" placeholder="Username"
                                                value="{{ old('username', Auth::user()->username) }}" required>
                                          @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- phone number --}}
                                    <div class="form-group mb-3">
                                          <label class="control-label">PHONE NUMBER</label>
                                          <input class="form-control @error('phone_number') is-invalid @enderror"
                                                name="phone_number" type="text" placeholder="Phone Number"
                                                value="{{ old('phone_number', Auth::user()->phone_number) }}" required>
                                          @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- email --}}
                                    <div class="form-group mb-3">
                                          <label class="control-label">EMAIl</label>
                                          <input class="form-control @error('email') is-invalid @enderror"
                                                name="email" type="text" placeholder="Email"
                                                value="{{ old('email', Auth::user()->email) }}" required>
                                          @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- image --}}
                                    <div class="form-group">
                                          <label class="control-label">Image</label>
                                          <input class="form-control" name='image' type="file">
                                          @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    <div class="form-group btn-container text-right mt-3 mb-0">
                                          <button class="btn btn-primary"><i class="fa fa-plus"></i> Update</button>
                                    </div>
                              </form>
                        </div>

                        <div class="col-12 col-md-7 mt-3">

                              @foreach ($reservations as $reservation)
                                    <div class="card mb-3" style="max-width:600px; margin-left:11rem; border:none">
                                          <div class="row g-0">
                                                <div class="col-md-4">
                                                      <img src="{{ $reservation->company->getImageUrl() }}"
                                                            class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                      <div class="card-body">
                                                            <h5 class="card-title">Company Name: {{ $reservation->company->name }}</h5>
                                                            <p class="card-text">Company Email: {{ $reservation->company->email }}</p>
                                                            <p class="card-text">Phone number: {{ $reservation->company->phone_number }}</p>
                                                            <p class="card-text">Locker Number: {{ $reservation->locker->number}}</p>
                                                            <p class="card-text">Subscription expiration date: {{ $reservation->experian_date }}</p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>


                              @endforeach

                        </div>
                  </div>
            </div>
      </div>

</x-customer.app>
