<div class="card">
    <div class="card-body ">
        <form id="options_search" method="POST" action="{{ route('posts.search') }}">
            @csrf
            <div class="form-group has-search">
                <label for="category-select">Key</label>
                <input type="text" name="keysearch" class="form-control" placeholder="Nhập từ khóa cần tìm" required value={{ (isset($key)) ? $key : ""}}>
            </div>
            <div class="form-group">
                <label for="">Sorted by</label>
                <select class="form-control" name="groupby">
                    <option value="0">Latest</option>
                    <option value="1">Oldest</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Show results</label>
                <select class="form-control" name="paginate">
                    <option value="10">Show 10 </option>
                    <option value="15">Show 15 </option>
                    <option value="20">Show 20 </option>
                    <option value="25">Show 25 </option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-sm">Search</button>
            </div>
        </form>
    </div>
</div>