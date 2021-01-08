<table class="table table-striped table-sm table-responsive-md">
    <caption>{{ $posts->total() }} Posts</caption>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Posted At</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author->fullname }}</td>
                <td>{{ humanize_date($post->posted_at, 'd/m/Y H:i:s') }}</td>
                <td>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
