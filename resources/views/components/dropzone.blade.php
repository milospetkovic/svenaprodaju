@section('pagehead')

    @include('cssincludes.dropzone')

@endsection


<label class="control-label text-muted">
    Postavljanje slika
</label>


<div class="col-lg-12">

    <div id="dropzone" class="dropzone"></div>

</div>

@section('pagescript')

    @parent

    @include('jsincludes.dropzone')

    <script>

        Dropzone.autoDiscover = false;

        $(document).ready(function() {

            $("#dropzone").dropzone({

                // translations
                dictDefaultMessage: "Kliknite ovde da biste dodali ili prevukli slike za upload",
                dictCancelUpload: "Poništi upload",
                dictInvalidFileType: "Nedozvoljen format slike",
                dictFileTooBig: "Veličina fajla premašuje dozvoljenu veličinu od 2MB",
                dictRemoveFile: "Ukloni fajl",
                dictMaxFilesExceeded: "Dostignut je maksimum broja slika za upload. Obrišite višak (ili nevalidne ako postoje - označene sa X znakom)",

                url: "/oglasi/create/upload",
                addRemoveLinks: true,
                createImageThumbnails: true,
                acceptedFiles: "image/jpeg,image/png,image/gif",
                maxFiles: 2,
                sending: function(file, xhr, formData) {
                    formData.append("_token", "{{ csrf_token() }}");
                },
                init:function() {
                    this.on("removedfile", function(file) {
                        $.ajax({
                            type: 'POST',
                            url: '/oglasi/create/removeupload',
                            data: {filename: file.name, _token: "{{ csrf_token() }}"},
                            dataType: 'html'
                        });
                    });
                    this.on('error', function(file, response) {
                        $(file.previewElement).find('.dz-error-message').text(response);
                    });
                }
            });
        });

    </script>

@endsection