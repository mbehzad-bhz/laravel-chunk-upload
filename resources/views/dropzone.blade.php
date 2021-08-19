<!DOCTYPE html>
<html>
<head>
    <title>drop zone</title>
    <meta charset="utf-8" />
    <meta name="csrf" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="/dropzone/basic.min.css">
    <link rel="stylesheet" href="/dropzone/dropzone.min.css">
</head>
<body>


    <div class="dropzone dz"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="/dropzone/dropzone.min.js"></script>
    <script src="/dropzone/dropzone-amd-module.min.js"></script>
    <script>
        var dz = new Dropzone(".dz",
            {
                url: '{{ route('chunkUpload') }}',
                init: function () {
                    this.on("sending", function (file, xhr, formData) {
                        formData.append("_token", $('meta[name="csrf"]').attr('content'));
                    });
                },
                chunking: true,
                forceChunking: true,
                parallelChunkUploads: true,
            });
    </script>
</body>
</html>



