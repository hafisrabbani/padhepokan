@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        $('.aon-card-header').click(function () {
            $('.aon-card-header').removeClass('active');
            $(this).addClass('active');
        });


        $('#about-form').submit(function (e) {
            // hide error
            $('.invalid-feedback').remove();
            $('.is-invalid').removeClass('is-invalid');
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: "{{ route('profile.update') }}",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Berhasil Mengubah Profilmu',
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                },
                error: function (response) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message,
                    });

                    var errors = response.responseJSON.errors;
                    console.log(errors);
                    $.each(errors, function (key, value) {
                        $('input[name="' + key + '"]').addClass('is-invalid');
                        $('input[name="' + key + '"]').after('<span class="invalid-feedback" role="alert"><strong>' + value + '</strong></span>');
                    });
                }
            });

        });

        $('#contact-form').submit(function (e) {
            e.preventDefault();
            $('.invalid-feedback').remove();
            $('.is-invalid').removeClass('is-invalid');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: "{{ route('profile.contact.update') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Berhasil Mengubah Profilmu',
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                },
                error: function (response) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message,
                    });

                    var errors = response.responseJSON.errors;
                    console.log(errors);
                    $.each(errors, function (key, value) {
                        $('input[name="' + key + '"]').addClass('is-invalid');
                        $('input[name="' + key + '"]').after('<span class="invalid-feedback" role="alert"><strong>' + value + '</strong></span>');
                    });
                }
            })
        })
    });
</script>
@endpush