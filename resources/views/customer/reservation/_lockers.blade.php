<option value=""></option>
@foreach ($lockers as $locker)
      <option value="{{ $locker->id }}">{{ $locker->number }}
      </option>
@endforeach
