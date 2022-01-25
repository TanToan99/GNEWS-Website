@extends('admin.layouts.app')

@section('content')
    <h1>@lang('Create post')</h1>
    <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" required="" name="title" type="text" id="title">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail Image</label>
            <input type="file" name="thumbnail" class="form-control">
            @error('thumbnail')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control form-control trumbowyg-form" id="content" name="content"></textarea>
            @error('content')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back</a>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection

@section('custom-js')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>

    <script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/trumbowyg.min.js"></script>
    <script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/base64/trumbowyg.base64.min.js"></script>
    <script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/colors/trumbowyg.colors.min.js"></script>
    <script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/giphy/trumbowyg.giphy.min.js"></script>
    <script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/noembed/trumbowyg.noembed.min.js">
    </script>
    <script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/pasteimage/trumbowyg.pasteimage.min.js">
    </script>
    <script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/preformatted/trumbowyg.preformatted.min.js">
    </script>
    <script src="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/upload/trumbowyg.upload.min.js"></script>


    <link rel="stylesheet"
        href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/colors/ui/trumbowyg.colors.min.css">
    <link rel="stylesheet"
        href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/giphy/ui/trumbowyg.giphy.min.css">
    <script>
        $('.trumbowyg-form').trumbowyg({
            btnsDef: {
                // Customizable dropdowns
                align: {
                    dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ico: 'justifyLeft'
                }
            },
            btns: [
                ['viewHTML'],
                ['undo', 'redo'],
                ['formatting'],
                ['strong', 'em', 'del', 'underline'],
                ['foreColor', 'backColor'],
                ['link'],
                ['insertImage', 'upload', 'base64', 'noembed', 'giphy'],
                ['base64'],
                ['align'],
                ['preformatted'],
                ['horizontalRule'],
                ['fullscreen']
            ],
            plugins: {
                giphy: {
                    apiKey: 'dNhCbN6hrhpBMxXhIswM34wIR2UBpCns'
                },
                // Add imgur parameters to upload plugin
                upload: {
                    serverPath: 'https://api.imgur.com/3/image',
                    fileFieldName: 'image',
                    headers: {
                        'Authorization': 'Client-ID 9e57cb1c4791cea'
                    },
                    urlPropertyName: 'data.link'
                }
            },
            autogrow: true
        })
    </script>
@endsection
