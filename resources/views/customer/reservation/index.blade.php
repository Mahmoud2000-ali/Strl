<x-customer.app>
      <div id="appCustomer" class="mt-4">

            <div class="container">

                  <div class="slider d-flex justify-content-around mb-5">

                        <div class="item card-1">
                              <div class="card__icon text-center mt-3"><i class="fa fa-user-circle-o fa-2x"
                                          aria-hidden="true"></i></div>
                              <h2 class="card__title">Profile Client</h2>
                              <p class="card__apply">
                                    <a class="card__link" href="{{ route('customers.profiles.index') }}">Apply Now
                                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                              </p>
                        </div>

                        <div class="item card-2">
                              <div class="card__icon text-center mt-3"><i class="fa fa-home fa-2x"
                                          aria-hidden="true"></i>
                              </div>
                              <h2 class="card__title">Go home</h2>
                              <p class="card__apply">
                                    <a class="card__link" href="{{ route('customers.welcome') }}">Go home
                                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                              </p>
                        </div>

                        <div class="item card-3">
                              <div class="card__icon text-center mt-3"><i class="fa fa-sign-out fa-2x"
                                          aria-hidden="true"></i>
                              </div>
                              <h2 class="card__title">Sign out</h2>

                              <form class="card__apply" action="{{ route('logout') }}" method="post"
                                    style="bottom: 8px;">
                                    @csrf
                                    <button class='card__link btn' type="submit"> Apply Now <i
                                                class="fa fa-arrow-right" aria-hidden="true"></i></button>
                              </form>
                        </div>

                  </div>

                  <hr class="mt-5">

                  <!-- SmartWizard html -->
                  <form action="{{ route('customers.reservations.store') }}" method="POST">
                    @csrf
                    @method('POST')
                        <div id="smartwizard" class="mt-5">
                              <ul class="nav nav-progress">
                                    <li class="nav-item">
                                          <a class="nav-link" href="#step-1">
                                                <div class="num">1</div>
                                                Reservation
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#step-2">
                                                <span class="num">2</span>
                                                Step Title 2
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#step-3">
                                                <span class="num">3</span>
                                                Step Title 3
                                          </a>
                                    </li>
                              </ul>

                              <div class="tab-content">
                                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                          <div class="form-group ">
                                                <label>The Company Name</label>
                                                <select name="company_id" id="companyId" class="form-select mt-2" required>
                                                      <option value=""></option>
                                                      @foreach ($companies as $company)
                                                            <option
                                                                  data-url="{{ route('customers.companies.buildings', $company->id) }}"
                                                                  value="{{ $company->id }}">{{ $company->name }}
                                                            </option>
                                                      @endforeach
                                                </select>
                                          </div>

                                          <div class="form-group mt-3">
                                                <label>The Number of Building</label>
                                                <select name="building_number" id="building_Id" required
                                                      class="form-select mt-2">

                                                </select>
                                          </div>

                                          <div class="form-group mt-3">
                                                <label>The Locker Number</label>
                                                <option value=""></option>
                                                <select name="locker_number" id="locker_Id" class="form-select mt-2" required>

                                                </select>
                                          </div>

                                    </div>
                                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                          <h4 class="text-center" style="color: #009ef7;">Sign the service rental terms
                                                and privacy policy</h4>
                                          <p class="mt-4">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus
                                                doloribus non magnam soluta modi dolorem voluptatibus quam odit dolores,
                                                optio qui animi perferendis rem error placeat? Ullam quisquam eius
                                                culpa!
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi ratione
                                                nisi ullam voluptates molestiae temporibus ipsa aliquam tempora
                                                voluptas. Eaque atque aspernatur ratione voluptas at repellendus nisi
                                                vitae dolor voluptate.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                                dolorem sint dolor, quibusdam ut, ratione possimus accusantium fugit
                                                numquam, sequi omnis praesentium ullam dolores. Eveniet est iure quis
                                                minus cupiditate.
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi
                                                eveniet optio doloremque reprehenderit nesciunt sint necessitatibus.
                                                Dicta repellat perferendis quam, eveniet aspernatur laborum fugiat, ex
                                                sunt odio error nisi.
                                          </p>

                                          <div>
                                                <input class="form-check-input" checked type="checkbox"
                                                      id="checkboxNoLabel" value="" aria-label="...">
                                                <label for="">I agree and understand to comply with all
                                                      conditions.</label>
                                          </div>
                                    </div>
                                    <div id="step-3" class="tab-pane" role="tabpanel"
                                          aria-labelledby="step-3">
                                          <h4 class="text-center mb-5" id="price" style="color: #009ef7;">Pay </h4>

                                          <div class="text-center">
                                                <div class="form-check form-check-inline">
                                                      <input class="form-check-input" checked type="checkbox"
                                                            id="inlineCheckbox1" value="option1">
                                                      <label class="form-check-label"
                                                            for="inlineCheckbox1">Cash</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox2" value="option2">
                                                      <label class="form-check-label"
                                                            for="inlineCheckbox2">Mada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox3" value="option3">
                                                      <label class="form-check-label" for="inlineCheckbox3">Apple
                                                            pay</label>
                                                </div>
                                          </div>

                                          <div class="text-end">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i>
                                                 Done</button>
                                          </div>
                                    </div>


                              </div>

                              <!-- Include optional progressbar HTML -->
                              <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                  </form>


            </div>
      </div>

</x-customer.app>

<script>
      $(document).ready(function() {

            // change the company
            $(document).on('change', '#companyId', function() {

                  var url = $(this).find(":selected").data('url');
                  var value = this.value;
                  // send ajax request to get the building number for this company
                  $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(data) {
                              $('#building_Id').html(data);
                              $('#locker_Id').html('');
                        }
                  });
            });

            // change the building
            $(document).on('change', '#building_Id', function() {
                  var url = $(this).find(':selected').data('url');
                  var value = this.value;
                  var price = $(this).find(":selected").data('price');
                  $('#price').html("pay : ");
                  $('#price').html("pay " + price + "$");
                  console.log(price);
                  // send ajax request
                  $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(data) {
                              $('#locker_Id').html(data);
                        }
                  });
            });
      });
</script>
