@push('scripts')
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
https://kit.fontawesome.com/1d954ea888.js
<script>
    $(document).ready(function () {


        var table = $('#project-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('project.index') }}",
                type: "GET",
            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'expired_at',
                name: 'expired_at'
            },
            {
                data: 'duration',
                name: 'duration'
            },
            {
                data: 'thumbnail',
                name: 'thumbnail'
            },
            {
                data: 'jenis',
                name: 'jenis'
            },
            {
                data: 'biaya',
                name: 'biaya'
            },
            {
                data: 'created_at',
                name: 'created_at'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
            }
            ]
        })
        window.refreshTable = function () {
            table.draw();
        }

        $('.aon-card-header').click(function () {
            $('.aon-card-header').removeClass('active');
            $(this).addClass('active');
        });
        $('#galeri').on('change', function () {
            var files = $(this)[0].files;
            if (files.length > 6) {
                alert("You can select a maximum of 6 files");
                $(this).val('');
            } else {
                var names = '';
                for (var i = 0; i < files.length; i++) {
                    names += files[i].name + ', ';
                }
                // Remove extra comma
                names = names.substring(0, names.length - 2);
                // Display
                $(this).siblings('.custom-file-label').html(names);
            }
        })
        CKEDITOR.replace('deskripsi');

        $('#project-form').submit(function (e) {
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: "{{ route('project.store') }}",
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
                    // setTimeout(function () {
                    //     location.reload();
                    // }, 2000);
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