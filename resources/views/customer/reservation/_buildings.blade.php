<option value=""></option>
@foreach ($buildings as $building)
      <option data-url="{{ route('customers.companies.lockers', $building->id) }}" data-price="{{ $price }}" value="{{ $building->id }}">{{ $building->number }}
      </option>
@endforeach
