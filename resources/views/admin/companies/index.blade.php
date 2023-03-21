<x-admin.app title="Admin | Companies">

    {{-- app title --}}
    <div class="app-title">
          <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                <p>Controller the Companies</p>
          </div>
          <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="{{ route('admins.welcome') }}">Dashboard</a></li>
          </ul>
    </div>

    {{-- app buttons --}}
    <div class="row">
      <div class="col-12">
          <div class="tile">
              <div class="tile-body">
                  <a href="{{ route('admins.companies.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create Company</a>
              </div>
          </div>
      </div>
    </div>
    {{-- app content --}}

    <div class="row">
          <div class="col-12">
                <div class="tile">
                      <div class="tile-body">

                            <div class="table-responsive">
                                  <table class="table table-hover" id="sampleTable">
                                        <thead>
                                              <tr>
                                                    <th>#</th>
                                                    <th>Profile</th>
                                                    <th>Comany Name</th>
                                                    <th>Email</th>
                                                    <th>Building number</th>
                                                    <th>Lockers Number</th>
                                                    <th>Lockers Available Number</th>
                                                    <th>Lockers Not Available Number</th>
                                                    <th>Created At</th>
                                                    <th>Actions</th>
                                              </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($companies as $company)
                                                    <tr>
                                                          <td>{{ $loop->index + 1  }}</td>
                                                          <td><img src="{{ $company->getImageUrl() }}" alt="company image" width="70"></td>
                                                          <td>{{ $company->name }}</td>
                                                          <td>{{ $company->email }}</td>
                                                          <td>{{ $company->building_number }}</td>
                                                          <td>{{ count($company->lockers()) }}</td>
                                                          <td><span class="badge text-bg-primary">{{ count($company->availableLocker()) }}</span></td>
                                                          <td><span class="badge text-bg-danger">{{ count($company->notAvailableLocker()) }}</span></td>
                                                          <td>{{ $company->created_at->format('d/m/Y') }}</td>
                                                          <td>

                                                              <form method="Post" action="{{ route('admins.companies.destroy', $company) }}">
                                                                <a href="{{ route('admins.companies.createNotify', $company) }}" class='btn btn-primary d-inline btn-noti'><i class="fa fa-bell" aria-hidden="true"></i></a>
                                                                  <button type="submit" class="btn btn-danger btn-delete"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                                                              </form>
                                                          </td>
                                                    </tr>
                                              @endforeach
                                        </tbody>
                                  </table>
                            </div>
                      </div>
                </div>
          </div>
    </div>

</x-admin>
