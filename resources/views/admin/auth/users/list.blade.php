<!-- resources/views/dashboard_home.blade.php -->
@extends('admin.layout')

@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">SDT</th>
            <th scope="col">Số dư ví</th>
            <th scope="col">Chức năng</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->username }}</td>
                <td>{{ $user->balanceFormated() }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('admin.users.find', $user->id) }}" type="button" class="btn btn-outline-primary"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></a>
{{--                        <a type="button" class="btn btn-outline-primary"><i class="fa-solid fa-key"></i></a>--}}
{{--                        <a type="button" class="btn btn-outline-primary"><i class="fa-solid fa-user-pen"></i></a>--}}
                    </div>
                </td>
            </tr>
        @endforeach
        {{ $users->links() }}
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        window.addEventListener('DOMContentLoaded', function () {

        })
    </script>
@endsection
