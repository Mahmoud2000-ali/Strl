<x-company.app title="System To Reserv Locker">

      <div class="container mt-5">

            <div class="slider d-flex justify-content-around container mt-5" id="appCustomer">

                  <div class="item card-1">
                        <div class="card__icon text-center mt-3"><i class="fa fa-user-circle-o fa-2x"
                                    aria-hidden="true"></i>
                        </div>
                        <h2 class="card__title"> Company profile</h2>
                        <p class="card__apply">
                              <a class="card__link" href="{{ route('companies.profiles.index') }}">Show profile
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


            {{-- search button --}}
            <form action="" class="mb-4">
                  <div class="form-group">
                        <input class="form-control @error('search') is-invalid @enderror" name="search" type="search"
                              placeholder="Search ...." value="{{ request()->search }}" autofocus>
                  </div>
            </form>

            @foreach ($notifications as $notification)
                  <div class="card mb-3">
                        <div class="card-header">
                              Notifications
                        </div>
                        <div class="card-body">
                              <h5 class="card-title">Notify from the application</h5>
                              <p class="card-text">{{ $notification->data['notify'] }}</p>
                        </div>
                  </div>
            @endforeach

      </div>

</x-company.app>
