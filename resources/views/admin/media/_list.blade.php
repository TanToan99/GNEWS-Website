<table class="table table-striped table-sm table-responsive-md">
    <caption>{{ $media->count() }} images</caption>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>URL</th>
            <th>Posted at</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($media as $medium)
            <tr>
                <td>
                    <a href="{{ $medium->getUrl() }}" target="_blank">
                        <img src="{{ $medium->getUrl('thumb') }}" alt="{{ $medium->name }}" width="100">
                    </a>
                </td>
                <td>{{ $medium->name }}</td>
                <td>
                    <div class="input-group">
                        <input class="form-control" readonly="" id="medium-{{$medium->id}}" type="text" value="{{ url($medium->getUrl()) }}">
                        <div class="input-group-append">
                            <button class="input-group-text btn" data-clipboard-target="#medium-{{ $medium->id }}">
                                <i class="fa fa-clipboard"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td>{{ humanize_date($medium->created_at) }}</td>
                <td>
                    <form class="form-inline" method="POST" action="{{ route('admin.media.destroy', $medium) }}" accept-charset="UTF-8">
                        <a href="{{ $medium->getUrl() }}" title="Show" class="btn btn-primary btn-sm" target="_blank">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('admin.media.show', $medium) }}" title="Download" class="btn btn-primary btn-sm">
                            <i class="fa fa-download" aria-hidden="true"></i>
                        </a>
                        <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger btn-sm" name="submit" type="submit" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
