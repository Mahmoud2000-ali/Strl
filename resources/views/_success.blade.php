  {{-- success alerts --}}
  @if (session()->has('successfully'))
  <script>
      Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{ session('successfully') }}",
            showConfirmButton: false,
            timer: 1000
      })
</script>
  @endif
