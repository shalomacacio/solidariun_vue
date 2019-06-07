<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Files <a href="{{ url('files/create') }}" class="btn btn-info">Add files</a> </div>

                            <div class="card-body">
                                @if($files->count())
                                    <table class="table">
                                        <th>Name</th>
                                        <th>Size</th>
                                        @foreach($files as $file)
                                            <tr>
                                                <td>{{ $file->filename }}</td>
                                                <td>{{ $file->size }} Bytes</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    You have no files yet!
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>


