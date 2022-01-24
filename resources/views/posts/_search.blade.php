<div class="card">
    <div class="card-search ">
        <form class="form-group-search" id="options_search" method="POST" action="{{ route('posts.search') }}">
            @csrf
            <div class="form-search">
                <label class="search-label" for="category-select">Key:</label>
                <input class="search-control" type="text" name="keysearch"  placeholder="Nhập từ khóa cần tìm..." required value={{ (isset($key)) ? $key : ""}}>
            </div>
            <div class="form-search">
                <label class="search-label" for="">Sorted by:</label>
                <select class="search-control" name="groupby">
                    <option class="search-option" value="0">Latest</option>
                    <option class="search-option" value="1">Oldest</option>
                </select>
            </div>
            <div class="form-search">
                <label class="search-label"  for="">Show results:</label>
                <select class="search-control" name="paginate">
                    <option class="search-option" value="10">Show 10 </option>
                    <option class="search-option" value="15">Show 15 </option>
                    <option class="search-option" value="20">Show 20 </option>
                    <option class="search-option" value="25">Show 25 </option>
                </select>
            </div>
            <div class="search-submit">
                <button type="submit" class="search-button">Search</button>
            </div>
        </form>
    </div>
</div>