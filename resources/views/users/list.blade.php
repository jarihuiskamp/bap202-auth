@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>User overview</h1>

        <table class="table table-striped">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                    <td>@if($user->is_admin == 1) SUPER ADMIN @endif</td>
                </tr>
            @endforeach
        </table>

        {{ $users->links() }}

    </div>

@endsection