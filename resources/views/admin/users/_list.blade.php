<table class="table table-striped table-sm">
    <caption>{{ $users->total() }} Users</caption>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Registered at</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ humanize_date($user->created_at, 'd/m/Y H:i:s') }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $users->links() }}
</div>
