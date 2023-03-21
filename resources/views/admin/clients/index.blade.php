<x-admin.app title="Admin | Clients">

      {{-- app title --}}
      <div class="app-title">
            <div>
                  <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                  <p>Controller the clients</p>
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
                    <a href="{{ route('admins.clients.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create Client</a>
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
                                                      <th>Full name</th>
                                                      <th>Username</th>
                                                      <th>Email</th>
                                                      <th>Created At</th>
                                                      <th>Actions</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @foreach ($clients as $client)
                                                      <tr>
                                                            <td>{{ $loop->index + 1  }}</td>
                                                            <td><img src="{{ $client->getImageUrl() }}" alt="client image" width="70"></td>
                                                            <td>{{ $client->full_name }}</td>
                                                            <td>{{ $client->username }}</td>
                                                            <td>{{ $client->email }}</td>
                                                            <td>{{ $client->created_at->format('d/m/Y') }}</td>
                                                            <td>
                                                                <form method="Post" action="{{ route('admins.clients.destroy', $client) }}">
                                                                    <a href="{{ route('admins.clients.edit', $client) }}" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                                                    <button type="submit" class="btn btn-danger btn-delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
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
