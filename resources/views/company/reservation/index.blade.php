<x-company.app title="Company | Reservaion">
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

            <div class="row mt-5">
                  <div class="col-6">
                        <h3 class="mb-5">Unavailable Lockers</h3>
                        @foreach ($available_lockers as $locker)
                              <div class="card mb-3" style="max-width:600px;  border:none">
                                    <div class="row g-0">
                                          <div class="col-md-4">
                                                <img src="{{ $locker->user->getImageUrl() }}"
                                                      class="img-fluid rounded-start" alt="...">
                                          </div>
                                          <div class="col-md-8">
                                                <div class="card-body">
                                                      <h5 class="card-title">Name:
                                                            {{ $locker->user->full_name }}</h5>
                                                      <p class="card-text">Username:
                                                            {{ $locker->user->username }}</p>
                                                      <p class="card-text">Phone number:
                                                            {{ $locker->user->phone_number }}</p>
                                                      <p class="card-text">Locker Number:
                                                            {{ $locker->locker->number }}</p>
                                                      <p class="card-text">Subscription expiration date:
                                                            {{ $locker->experian_date }}</p>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        @endforeach
                  </div>

                  <div class="col-6">
                        <h3 class="mb-5">Aavailable Lockers</h3>
                        @foreach (Auth::user()->availableLocker() as $item)
                              <div class="card mb-3" style="max-width:600px;  border:none">
                                    <div class="row g-0">
                                          <div class="col-md-4">
                                                <img src="{{ asset('imgs/locker.jpg') }}" width="180">

                                          </div>
                                          <div class="col-md-8">
                                                <div class="card-body">
                                                      <h5 class="card-title">Locker Number:
                                                            {{ $item->number }}</h5>
                                                      <p class="card-text">Building Number:
                                                            {{ $item->floor->building->number }}</p>
                                                      <p class="card-text">Floor Number:
                                                            {{ $item->floor->number }}</p>
                                                      <p class="card-text">Created_at:
                                                            {{ $item->created_at }}</p>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        @endforeach
                  </div>
            </div>

      </div>
</x-company.app>
