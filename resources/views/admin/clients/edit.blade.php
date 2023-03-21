<x-admin.app title="Admin | Client | Edit">

      {{-- app title --}}
      <div class="app-title">
            <div>
                  <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                  <p>Edit the clients</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                  <li class="breadcrumb-item"><a href="{{ route('admins.welcome') }}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admins.clients.index') }}">Clients</a></li>
            </ul>
      </div>

      {{-- app content --}}
      <div class="row">
            <div class="col-12">
                  <div class="tile">
                        <div class="tile-body">
                              <form method="post" action="{{ route('admins.clients.update', $client) }}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    {{-- first name --}}
                                    <div class="form-group">
                                          <label class="control-label">FIRST NAME</label>
                                          <input class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" type="text" placeholder="First name"
                                                value="{{ old('first_name', $client->first_name) }}" required>
                                          @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- last name --}}
                                    <div class="form-group">
                                          <label class="control-label">LAST NAME</label>
                                          <input class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" type="text" placeholder="Last name"
                                                value="{{ old('last_name', $client->last_name) }}" required>
                                          @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- USERNAME --}}
                                    <div class="form-group">
                                          <label class="control-label">USERNAME</label>
                                          <input class="form-control @error('username') is-invalid @enderror"
                                                name="username" type="text" placeholder="Username"
                                                value="{{ old('username', $client->username) }}" required>
                                          @error('username')
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
                                                value="{{ old('phone_number', $client->phone_number) }}" required>
                                          @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    {{-- email --}}
                                    <div class="form-group">
                                          <label class="control-label">EMAIl</label>
                                          <input class="form-control @error('email') is-invalid @enderror"
                                                name="email" type="text" placeholder="Email"
                                                value="{{ old('email', $client->email) }}" required>
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

                                    <div class="form-group btn-container text-right mt-4 mb-0">
                                          <button class="btn btn-primary"><i
                                                      class="fa fa-sign-in fa-plus"></i>Update</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</x-admin.app>
