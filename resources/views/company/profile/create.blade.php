<x-company.app title="Company | Profile">
      <div class="container mt-5">

            <div class="slider d-flex justify-content-around container mt-5" id="appCustomer">

                  <div class="item card-1">
                        <div class="card__icon text-center mt-3"><i class="fa fa-home fa-2x" aria-hidden="true"></i>
                        </div>
                        <h2 class="card__title"> Go home</h2>
                        <p class="card__apply">
                              <a class="card__link" href="{{ route('companies.welcome') }}"> Go home
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                              </a>
                        </p>
                  </div>

                  <div class="item card-2">
                        <div class="card__icon text-center mt-3"><i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>
                        </div>
                        <h2 class="card__title">Reserved and available lockers</h2>
                        <p class="card__apply">
                              <a class="card__link" href="{{ route('companies.reservation.index') }}">Check Now
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                              </a>
                        </p>
                  </div>


                  <div class="item card-2">
                        <div class="card__icon text-center mt-3"><i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>
                        </div>
                        <h2 class="card__title">Subsciber list</h2>
                        <p class="card__apply">
                              <a class="card__link" href="{{ route('companies.subscriber.index') }}">Show Now
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                              </a>
                        </p>
                  </div>

                  <div class="item card-3">
                        <div class="card__icon text-center mt-3"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                        </div>
                        <h2 class="card__title">Sign out</h2>

                        <form class="card__apply" action="{{ route('logout') }}" method="post" style="bottom: 8px;">
                              @csrf
                              <button class='card__link btn' type="submit"> Apply Now <i class="fa fa-arrow-right"
                                          aria-hidden="true"></i></button>
                        </form>
                  </div>

            </div>

            <hr class="mt-4 mb-4">

            <div class="c-img text-center mt-5">
                  <img src="{{ Auth::user()->getImageUrl() }}" alt="" width="150"
                        style="border-radius: 10px">
            </div>
            <form action="{{ route('companies.profiles.update', Auth::user()) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  {{-- company name --}}
                  <div class="form-group mt-3">
                        <label class="control-label">COMPANY NAME</label>
                        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                              placeholder="Company name" value="{{ old('name', Auth::user()->name) }}" required>
                        @error('name')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>

                  {{-- company email --}}
                  <div class="form-group mt-3">
                        <label class="control-label">COMPANY EMAIL</label>
                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                              placeholder="Company email" value="{{ old('email', Auth::user()->email) }}" required>
                        @error('email')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>

                  {{-- phone number --}}
                  <div class="form-group mt-3">
                        <label class="control-label">PHONE NUMBER</label>
                        <input class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                              type="text" placeholder="Phone Number" value="{{ old('phone_number', Auth::user()->phone_number) }}" required>
                        @error('phone_number')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>


                  {{-- price --}}
                  <div class="form-group mt-3">
                        <label class="control-label">PRICE</label>
                        <input class="form-control @error('price') is-invalid @enderror" name="price" type="number"
                              placeholder="Price" value="{{ old('price', Auth::user()->price) }}" required>
                        @error('price')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>

                  {{-- image --}}
                  <div class="form-group mt-3">
                        <label class="control-label"> Company IMAGE</label>
                        <input class="form-control" name='image' type="file">
                        @error('image')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                  </div>

                  <div class="form-group btn-container text-right mt-4 mb-0">
                        <button class="btn btn-primary"><i class="fa fa-plus"></i> Update</button>
                  </div>
            </form>
      </div>
</x-company.app>
