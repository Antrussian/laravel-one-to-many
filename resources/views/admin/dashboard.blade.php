@extends('layouts.admin')

@section('content')

    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard</h1>
                <hr class="text-dark"> 
                <p>Welcome to the admin dashboard.</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Data Iscrizione</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>Nome {{ $i }}</td>
                            <td>email{{ $i }}@example.com</td>
                            <td>2024-02-14</td>
                            <td>Attivo</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
