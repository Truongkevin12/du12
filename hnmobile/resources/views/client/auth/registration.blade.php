@extends('client.layoutauth')
@section('content')

            <form id="formAuthentication" class="mb-3" action="{{ route('register.post') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Họ Và Tên</label>
                <input type="text" id="name" class="form-control" name="name" required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>
              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                  <label class="form-check-label" for="terms-conditions">
                    Tôi đồng ý với
                    <a href="javascript:void(0);">chính sách và điều khoản bảo mật</a>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100">Đăng Kí</button>
            </form>

            <p class="text-center">
              <span>Bạn đã có tài khoản?</span>
              <a href="{{url('login')}}">
                <span>Đăng Nhập</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->

@endsection
