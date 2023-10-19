@extends('layout.app')

@section('content')
    <div class="row">
        <h1>Form Tambah Data User</h1>
    </div>
    <div class="container">
        <div class="col-6">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group"><br>
                    <button type="submit" class="btn btn-primary">Masukan Data</button>
                </div>
            </form>

        </div>
    </div>
@endsection
