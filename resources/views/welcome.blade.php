<!DOCTYPE html>
<html>
<head>
    <title>Resumable.js - Multiple simultaneous, stable and resumable uploads via the HTML5 File API</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    <meta name="csrf" content="{{ csrf_token() }}"/>
    <script src="/uploadLargeFile.js"></script>
</head>
<body>
<div id="frame">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="/resumable.js"></script>

    {{--    <div class="resumable-error">--}}
    {{--        Your browser, unfortunately, is not supported by Resumable.js. The library requires support for <a href="http://www.w3.org/TR/FileAPI/">the HTML5 File API</a> along with <a href="http://www.w3.org/TR/FileAPI/#normalization-of-params">file slicing</a>.--}}
    {{--    </div>--}}

    <div class="resumable-drop">
        <a class="resumable-browse"><u>select from your computer</u></a>
    </div>
    <div class="uploadProgressBar"></div>
    <ul class="resumable-list"></ul>

    <script>
        initLargeUpload('{{ route('chunkUpload') }}' , $('.uploadProgressBar'))
    </script>
</div>
</body>
</html>



