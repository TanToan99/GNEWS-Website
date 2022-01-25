<!Doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GNEWS CLUB - ADMIN</title>
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet"
        href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/colors/ui/trumbowyg.colors.min.css">
    <link rel="stylesheet"
        href="//rawcdn.githack.com/Alex-D/Trumbowyg/v2.25.0/dist/plugins/giphy/ui/trumbowyg.giphy.min.css">
    <link rel="stylesheet" href="/js/plugins/emoji/ui/trumbowyg.emoji.css">
    {{-- <link href="{{ mix('/css/admin.css') }}" rel="stylesheet"> --}}
</head>

<body>
    @include('admin/shared/navbar')

    <div class="content-wrapper bg-light admin-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    @include('admin/shared/alerts')
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}
    {{-- <script src="{{ mix('/js/admin.js') }}"></script> --}}

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
    <script src="/js/plugins/emoji/trumbowyg.emoji.js"></script>

    <script src="/js/plugins/cleanpaste/trumbowyg.cleanpaste.js"></script>
    <script src="/js/plugins/fontfamily/trumbowyg.fontfamily.js"></script>
    <script src="/js/plugins/fontsize/trumbowyg.fontsize.js"></script>
    <script src="//rawcdn.githack.com/RickStrahl/jquery-resizable/0.35/dist/jquery-resizable.min.js"></script>
    <script src="/js/plugins/resizimg/trumbowyg.resizimg.js"></script>
    <script src="/js/plugins/pasteembed/trumbowyg.pasteembed.js"></script>
    <script src="/js/plugins/pasteimage/trumbowyg.pasteimage.js"></script>
    <script src="/js/plugins/lineheight/trumbowyg.lineheight.js"></script>
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
                ['fullscreen'],
                ['emoji'],
                ['fontfamily', 'fontsize', 'lineheight']
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
                },
                fontfamily: {
                    fontList: [{
                        name: 'Montserrat',
                        family: '\'Montserrat\', sans-serif'
                    }, ]
                },
                fontsize: {
                    sizeList: [
                        '14px',
                        '18px',
                        '22px'
                    ],
                    allowCustomSize: true
                },
                resizimg: {
                    minSize: 64,
                    step: 16,
                },
                lineheight: {
                    sizeList: [
                        '14px',
                        '18px',
                        '22px'
                    ]
                }
            },
            autogrow: true
        })
    </script>

    @yield('custom-js')
</body>

</html>
