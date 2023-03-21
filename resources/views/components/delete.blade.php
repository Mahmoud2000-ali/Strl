<script>
    $(document).ready(function() {
          $(document).on('click', '.btn-delete', function(event) {
                event.preventDefault();

                // dialog open
                Swal.fire({
                      title: 'Are you sure?',
                      icon: 'question',
                      iconHtml: '؟',
                      confirmButtonText: 'Yes, delete it',
                      cancelButtonText: 'no',
                      showCancelButton: true,
                      showCloseButton: true
                }).then((result) => {
                      if (result.isConfirmed) {
                            // url
                            const url = $(this).closest('form').attr('action');

                            // send some value to method
                            const csrf_token = $("meta[name='csrf-token']").attr(
                                  'content');
                            const row = $(this).closest('tr');

                            // send ajax request
                            $.ajax({
                                  url: url,
                                  type: 'POST',
                                  data: {
                                        '_method': 'DELETE',
                                        '_token': csrf_token
                                  },
                                  success: function(data) {
                                        row.remove();
                                  },
                                  error: function(error) {
                                        console.log(error);
                                  }
                            });
                      }
                })
          });
    });
</script>
