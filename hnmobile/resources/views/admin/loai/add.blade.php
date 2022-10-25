@extends('admin.layout')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Thêm</span> Menu</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Menu</h5>
            <small class="text-muted float-end">Thêm Menu</small>
          </div>
          <div class="card-body">
            <form action="{{URL('admin/loai/add')}}" method="post">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Tên Loại</label>
                <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="Thêm loại sản phẩm ..." />
              </div>
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Hình Ảnh</label>
                <input class="form-control" type="file" name="image"  id="formFileMultiple" multiple />
              </div>
              <div class="mb-3">
                <label for="defaultSelect" class="form-label">Thể Loại</label>
                <select id="defaultSelect" name="parent_id" class="form-select">
                  <?php showCategories($category)?>
                </select>
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
