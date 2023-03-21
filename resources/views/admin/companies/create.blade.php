<x-admin.app title="Admin | Company | Create">

      {{-- app title --}}
      <div class="app-title">
            <div>
                  <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                  <p>Create the Companies</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                  <li class="breadcrumb-item"><a href="{{ route('admins.welcome') }}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admins.companies.index') }}">Companies</a></li>
            </ul>
      </div>

      {{-- app content --}}
      <div class="row">
            <div class="col-12">
                  <div class="tile">
                        <div class="tile-body">
                              <form method="post" action="{{ route('admins.companies.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    {{-- company name --}}
                                    <div class="form-group">
                                          <label class="control-label">COMPANY NAME</label>
                                          <input class="form-control @error('name') is-invalid @enderror" name="name"
                                                type="text" placeholder="Company name" value="{{ old('name') }}"
                                                required>
                                          @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- company email --}}
                                    <div class="form-group">
                                          <label class="control-label">COMPANY EMAIL</label>
                                          <input class="form-control @error('email') is-invalid @enderror"
                                                name="email" type="email" placeholder="Company email"
                                                value="{{ old('email') }}" required>
                                          @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>


                                    {{-- password --}}
                                    <div class="form-group">
                                          <label class="control-label">PASSWORD</label>
                                          <input class="form-control @error('password') is-invalid @enderror"
                                                name="password" type="password" placeholder="Password"
                                                value="{{ old('password') }}" required>
                                          @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>


                                    {{-- phone number --}}
                                    <div class="form-group">
                                          <label class="control-label">PHONE NUMBER</label>
                                          <input class="form-control @error('phone_number') is-invalid @enderror"
                                                name="phone_number" type="text" placeholder="Phone Number"
                                                value="{{ old('phone_number') }}" required>
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
                                          <input class="form-control @error('floor_number') is-invalid @enderror"
                                                name="floor_number" type="number" placeholder="Floor Number"
                                                value="{{ old('floor_number') }}" required>
                                          @error('floor_number')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>


                                    {{-- lockers number --}}
                                    <div class="form-group">
                                          <label class="control-label">LOCKERS NUMBER</label>
                                          <input class="form-control @error('locker_number') is-invalid @enderror"
                                                name="locker_number" type="number" placeholder="Locker Number"
                                                value="{{ old('locker_number') }}" required>
                                          @error('locker_number')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>


                                    {{-- price --}}
                                    <div class="form-group">
                                          <label class="control-label">PRICE</label>
                                          <input class="form-control @error('price') is-invalid @enderror"
                                                name="price" type="number" placeholder="Price"
                                                value="{{ old('price') }}" required>
                                          @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>


                                    {{-- image --}}
                                    <div class="form-group">
                                          <label class="control-label"> Company IMAGE</label>
                                          <input class="form-control" name='image' type="file">
                                          @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    <div class="form-group btn-container text-right mt-4 mb-0">
                                          <button class="btn btn-primary"><i class="fa fa-plus"></i>Create</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</x-admin.app>
