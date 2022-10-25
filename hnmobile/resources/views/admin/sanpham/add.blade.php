
@extends('admin.layout')
@section('content')
@php
    $q = DB::table('categories')->get();

@endphp
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Thêm </span> Sản Phẩm</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Thêm Sản Phẩm</h5>
            <small class="text-muted float-end">Default label</small>
          </div>
          <div class="card-body">
            <form action="{{URL('admin/sanpham/add')}}" method="post">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Tên Sản Phẩm</label>
                <input type="text" class="form-control" name="name" id="basic-default-fullname" placeholder="Tên sản phảm ..." />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">Giá</label>
                <input type="text" class="form-control" name="price" id="basic-default-company" placeholder="VD:8.000.000..." />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">Giá Gốc</label>
                <input type="text" class="form-control" name="cost" id="basic-default-company" placeholder="VD:9.000.000đ..." />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">Giảm Giá</label>
                <input type="text" class="form-control" name="discount" id="basic-default-company" placeholder="Hãy nhập theo %..." />
              </div>
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Hình Ảnh</label>
                <input class="form-control" type="file" name="image"  id="formFileMultiple" multiple />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-message">Chi Tiết</label>
                <textarea
                  id="basic-default-message"
                  class="form-control" name="describe"
                  placeholder="Chi tiết sản phẩm : Điểm nổi bật, chức năng ...."
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </div>
      </div>


@endsection
<?php
function showCategories($category, $parent_id = 0, $char = '')
{
    foreach ($category as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item['parent_id'] == $parent_id)
        {
            echo'<option  value="'.$item->id.'" >'.$char.$item->name.'</option>';
            // Xóa chuyên mục đã lặp
            unset($category[$key]);
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($category, $item->id, $char.'|+++');
        }
    }
}
?>
