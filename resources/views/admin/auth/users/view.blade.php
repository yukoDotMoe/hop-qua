<!-- resources/views/dashboard_home.blade.php -->
@extends('admin.layout')

@section('content')
<div class="container row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">XÁC THỰC TÀI KHOẢN</h5>
                <div class="row gx-3">
                    <div class="col-6">
                        <div class="card">
                            <img src="@if(empty($user->mat_truoc)) {{ asset('/noimage.png') }} @else {{ asset($user->mat_truoc) }} @endif" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Mặt trước CMT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <img src="@if(empty($user->mat_sau)) {{ asset('/noimage.png') }} @else {{ asset($user->mat_sau) }} @endif" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Mặt sau CMT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">NẠP TIỀN</h5>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Phương Thức</th>
                            <th scope="col">Số tiền	</th>
                            <th scope="col">Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">RÚT TIỀN</h5>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Thời gian tạo	</th>
                            <th scope="col">Tài khoản nhận	</th>
                            <th scope="col">Số tiền	</th>
                            <th scope="col">Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">THÔNG TIN CÁ NHÂN</h5>
                <div class="list-group w-100">
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="bi-camera-fill"></i> Lần đăng nhập cuối cùng
                        <span class="badge rounded-pill bg-primary float-end">{{ date('d-m-Y', strtotime($user->updated_at)) }}</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="bi-music-note-beamed"></i> Số tài khoản ngân hàng
                        <span class="badge rounded-pill bg-primary float-end">{{ $user->getBank() }}</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="bi-film"></i> Ngân hàng
                        <span class="badge rounded-pill bg-primary float-end">8</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    window.addEventListener('DOMContentLoaded', function () {

    })
</script>
@endsection
