@extends('admin.layout')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Basic Layout</h5>
            <small class="text-muted float-end">Default label</small>
          </div>
          <div class="card-body">
            <form action="" method="post">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Tên Loại</label>
                <input type="text" name="name" value="{{ $categories->name }}" class="form-control" id="basic-default-fullname" placeholder="Thêm loại sản phẩm ..." />
              </div>
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Hình Ảnh</label>
                <input class="form-control" type="file" name="image"  id="formFileMultiple" multiple />
              </div>
              
              <button type="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </div>
      </div>
      

@endsection