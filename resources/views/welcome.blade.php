<x-app>
      <div id="app">
            <div class="container">
                  <div class="image">
                        <div class="col-12 text-center">
                              <img src="{{ asset('imgs/locker.jpg') }}" width="300">
                              <h4 class="title">System to reserve lockers</h4>
                        </div>
                  </div>

                  <div class="route d-flex justify-content-around">

                        <div class="company" style="width: 19rem;">
                              <a class="link card d-flex justify-content-center align-items-center text-decoration-none rounded"
                                    href="{{ route('companies.login.show') }}" style="min-height: 200px; font-size:1.8rem; background: #fbfbfb;">
                                    <div class="card-title">
                                          Company
                                    </div>
                              </a>
                        </div>


                        <div class="individual link" style="width: 19rem;">
                              <a class="link card d-flex justify-content-center align-items-center text-decoration-none rounded"
                                    href="{{ route('login') }}"
                                    style="min-height: 200px; font-size:1.8rem; background: #fbfbfb;">
                                    <div class="card-title">
                                          Individual
                                    </div>
                              </a>
                        </div>

                  </div>
            </div>
      </div>
</x-app>
