<div class="card">
    <div class="card-body ">
        <form id="options_search" method="POST" action="{{ route('posts.search') }}">
            @csrf
            <div class="form-group has-search">
                <label for="category-select">Từ khóa</label>
                <input type="text" name="keysearch" class="form-control" placeholder="Nhập từ khóa cần tìm" required value={{ (isset($key)) ? $key : ""}} >
            </div>
            <div class="form-group">
                <label for="">Sắp xếp theo</label>
                <select class="form-control" name="groupby">
                    <option  value="0">Mới nhất</option>
                    <option  value="1">Cũ nhất</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Hiển thị kết quả</label>
                <select class="form-control" name="paginate">
                    <option value="10">Hiển thi 10 </option>
                    <option value="15">Hiển  thị 15 </option>
                    <option value="20">Hiển thị 20 </option>
                    <option value="25">Hiển thị 25 </option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-sm">Tìm kiếm</button>
            </div>
        </form>
    </div>
</div>