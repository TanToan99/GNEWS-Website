@extends('admin.layouts.app')

@section('content')
    <p>Edit post</p>
    <form method="POST" action="{{ route('admin.posts.update',$post) }}" enctype="multipart/form-data">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="form-group" style="text-align: center;">
            <img src="{{ $post->thumbnail->getUrl() }}" alt="image" class="img-thumbnail ">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" required="" name="title" type="text" value="{{ $post->title }}" id="title">
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail image(If dont change, no need to input)</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control form-control trumbowyg-form" id="content" name="content">{{ $post->content }}</textarea>
            @error('content')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="pull-left">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back</a>
            <input class="btn btn-primary" type="submit" value="Update">
        </div>
    </form>
    <form method="POST" action="{{ route('admin.posts.destroy',$post) }}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input class="btn btn-primary" type="submit" value="Delete">
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
