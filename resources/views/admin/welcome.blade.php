<x-admin.app title="Admin | Dashboard">
      <div class="app-title">
            <div>
                  <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                  <p>Controller the website</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                  <li class="breadcrumb-item"><a href="{{ route('admins.welcome') }}">Dashboard</a></li>
            </ul>
      </div>
      <div class="row">
            <div class="col-md-6 col-lg-3">
                  <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                        <div class="info">
                              <h4>Clients</h4>
                              <p><b>{{ $clients_number }}</b></p>
                        </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-3">
                  <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                        <div class="info">
                              <h4>Admins</h4>
                              <p><b>1</b></p>
                        </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-3">
                  <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                        <div class="info">
                              <h4>Companies</h4>
                              <p><b>{{ count($companies) }}</b></p>
                        </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-3">
                  <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                        <div class="info">
                              <h4>Lockers</h4>
                              <p><b>{{ $lockers_number }}</b></p>
                        </div>
                  </div>
            </div>
      </div>

            <div class="row mt-5">
                  <div class="col-12">
                    <h3 class="mb-3 mt-3">Latest Companies</h3>
                        <div class="tile">
                              <div class="tile-body">

                                    <div class="table-responsive">
                                          <table class="table table-hover">
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
                                                                  <td>{{ $loop->index + 1 }}</td>
                                                                  <td><img src="{{ $company->getImageUrl() }}"
                                                                              alt="company image" width="70"></td>
                                                                  <td>{{ $company->name }}</td>
                                                                  <td>{{ $company->email }}</td>
                                                                  <td>{{ $company->building_number }}</td>
                                                                  <td>{{ count($company->lockers()) }}</td>
                                                                  <td><span
                                                                              class="badge text-bg-primary">{{ count($company->availableLocker()) }}</span>
                                                                  </td>
                                                                  <td><span
                                                                              class="badge text-bg-danger">{{ count($company->notAvailableLocker()) }}</span>
                                                                  </td>
                                                                  <td>{{ $company->created_at->format('d/m/Y') }}</td>
                                                                  <td>

                                                                        <form method="Post"
                                                                              action="{{ route('admins.companies.destroy', $company) }}">
                                                                              <a href="{{ route('admins.companies.createNotify', $company) }}"
                                                                                    class='btn btn-primary d-inline btn-noti'><i
                                                                                          class="fa fa-bell"
                                                                                          aria-hidden="true"></i></a>
                                                                              <button type="submit"
                                                                                    class="btn btn-danger btn-delete"><i
                                                                                          class="fa fa-trash"
                                                                                          aria-hidden="true"></i>
                                                                              </button>
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
