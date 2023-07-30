<!-- resources/views/dashboard_home.blade.php -->
@extends('admin.layout')

@section('content')
    <div class="card text-center mb-3">
        <div class="card-header" id="gameId">

        </div>
        <div class="card-body">
            <h5 class="card-title" id="gameResult">/-/-/</h5>
        </div>
        <div class="card-footer text-muted" id="timer">
            00:00
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kết quả</th>
            <th scope="col">Thời gian</th>
        </tr>
        </thead>
        <tbody>

        @foreach(\App\Models\LuckyNumber::latest()->get() as $round)
            <tr>
                <th scope="row">{{ $round->game_id }}</th>
                <td>{{ $round->gia_tri }}</td>
                <td>{{ $round->created_at }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection

@section('js')
<script>
    let oldid;
    let firstTime = true;
    window.addEventListener('DOMContentLoaded', function () {
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true,
        });
        const channel = pusher.subscribe('admin-channel-fBfgPdb4A1gOQfzQMBXrk6gTBPZIFM5K');
        channel.bind('RWLRO4Oo96pS3vScx2bEzxFm0uDs3EA9', (data) => {
            const dataDecrypt = JSON.parse(data.message);
            if (oldid !== null && oldid !== dataDecrypt.next_id)
            {
                if (!firstTime) location.reload()
                firstTime = false;

            }
            oldid = dataDecrypt.next_id
            $('#gameId').html(`ID Game tiếp theo: "${dataDecrypt.next_id}" và kết quả:`)
            $('#gameResult').html(dataDecrypt.next_result)
            $('#timer').html(dataDecrypt.time)
        });
    });
</script>
@endsection
