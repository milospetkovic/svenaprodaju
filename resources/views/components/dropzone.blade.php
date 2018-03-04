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

                url: "/oglasi/upload",
                addRemoveLinks: false,
                createImageThumbnails: true,

                init:function() {
                    // this.on("removedfile", function(file) {
                    //     $.ajax({
                    //         type: 'POST',
                    //         url: '/oglasi/create/removeupload',
                    //         data: {filename: file.name, _token: $('#csrf-token').val()},
                    //         dataType: 'html'
                    //     });
                    // });
                }
            });
        });

    </script>

@endsection