<table class="table table-striped table-sm table-responsive-md">
    <caption>{{ $posts->total() }} Posts</caption>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Posted At</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author->fullname }}</td>
                <td>{{ humanize_date($post->created_at, 'd/m/Y H:i:s') }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit',$post) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{ route('admin.posts.destroy',$post) }}" accept-charset="UTF-8" class="form-inline">
                        <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger btn-sm" name="submit" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
