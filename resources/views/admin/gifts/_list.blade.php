<table class="table table-striped table-sm table-responsive-md">
    <caption>{{ $cards->count() }} cards</caption>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cards as $card)
            <tr>
                <td>
                    <a href="{{ $card->value }}" target="_blank">
                        <img src="{{ $card->value }}" alt="{{ $card->name }}" width="100">
                    </a>
                </td>
                <td>{{ $card->name }}</td>
                <td>{{ $card->quantity }}</td>
                <td>
                    <form class="form-inline" method="POST" action="" accept-charset="UTF-8">
                        
                        <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger btn-sm" name="submit" type="submit" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<table class="table table-striped table-sm table-responsive-md">
    
    <caption>{{ $gifts->count() }} wish</caption>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($gifts as $medium)
            <tr>
                <td>
                    <a href="{{ $medium->value }}" target="_blank">
                        <img src="{{ $medium->value }}" alt="{{ $medium->name }}" width="100">
                    </a>
                </td>
                <td>{{ $medium->name }}</td>
                <td>
                    <form class="form-inline" method="POST" action="" accept-charset="UTF-8">
                        
                        <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger btn-sm" name="submit" type="submit" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
