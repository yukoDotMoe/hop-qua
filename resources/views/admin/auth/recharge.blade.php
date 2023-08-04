<!-- resources/views/dashboard_home.blade.php -->
@extends('admin.layout')

@section('content')
    <div class="btn-group mb-3" role="group" aria-label="Basic example">
        <a href="{{ route('admin.recharge.normal') }}" type="button" class="btn btn-primary">Nạp tiền</a>
        <a href="{{ route('admin.recharge.ad') }}" type="button" class="btn btn-warning">Nạp khuyến mại</a>
    </div>
    <table class="table table-striped display"  id="myTable">
        <div class="form-group">
            <input type="text" class="form-control" id="searchInput" placeholder="Tìm theo ID  ...">
        </div>
        <thead>
        <tr>
            <th scope="col">ID User</th>
            <th scope="col">Giá trị</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Hóa đơn</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Ghi chú</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recharges as $rc)
            <tr>
                <th>{{ $rc->user_id }}</th>
                <th>{{ $rc->amount }}</th>
                <th>@switch($rc->status)
                        @case(0)
                            <span class="badge rounded-pill text-bg-secondary">Không</span>
                        @break

                        @case(1)
                        <span class="badge rounded-pill text-bg-success text-white">Thành công</span>
                        @break

                        @case(2)
                        <span class="badge rounded-pill text-bg-danger text-white">Thu hồi</span>
                        @break
                @endswitch</th>
                <th>@if($rc->bill)
                        <span class="badge rounded-pill text-bg-success">Có</span>
                    @else
                        <span class="badge rounded-pill text-bg-secondary">Không</span>
                    @endif</th>
                <th>{{ $rc->created_at->format('Y-m-d H:i:s') }}</th>
                <th>{{ ($rc->note == '.') ? null : $rc->note }}</th>
                <th>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-danger revoke" data-id="{{ $rc->id }}" @if($rc->status == 2) disabled @endif>Thu hồi</button>
                    </div>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $recharges->links() }}
@endsection

@section('js')
    <script type="module">
        import {toast} from 'https://cdn.skypack.dev/wc-toast'
        window.addEventListener('DOMContentLoaded', function () {
            $('.revoke').click(function () {
                const chargeId = $(this).data('id')
                $.ajax({
                    url: "{{route('admin.recharge.revoke')}}",
                    type: 'POST',
                    dataType: 'json', // Specify the expected response type
                    contentType: "application/json; charset=utf-8",
                    data: JSON.stringify({chargeId: chargeId }), // Use the FormData object with all the fields
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false, // Set to false, since we are using FormData object
                    success: function (data) {
                        toast.success(`Thu hồi thành công`);
                        location.reload()
                    },
                    error: function (data) {
                        toast.error('Không tìm thấy');
                    },
                });
            })
        })
    </script>
@endsection
