<x-admin.app title="Admin | Company | Notify">

      {{-- app title --}}
      <div class="app-title">
            <div>
                  <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                  <p>Send notify to the Companies</p>
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
                              <form method="post" action="{{ route('admins.companies.storeNotify', $company) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <h3 class="text-center mb-4">Send Notifications</h3>

                                    {{-- company name --}}
                                    <div class="form-group mt-4">
                                          <textarea name="notify" cols="30" rows="10"
                                          class="form-control @error('notify') is-invalid @enderror"
                                          placeholder="Send Notify to this company"
                                          >{{ old('notify') }}</textarea>
                                          @error('notify')
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror
                                    </div>

                                    <div class="form-group btn-container text-right mt-4 mb-0">
                                          <button class="btn btn-primary"><i class="fa fa-plus"></i>Send Notify</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</x-admin.app>
