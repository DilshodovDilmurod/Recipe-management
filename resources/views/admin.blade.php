@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Foydalanuvchilar va Retseptlar boshqaruvi</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Foydalanuvchilar ro'yxati -->
    <div class="card mb-5">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Foydalanuvchilar ro'yxati</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Ism</th>
                        <th>Email</th>
                        <th class="text-center">Amallar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <form action="{{ route('admin.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Ushbu foydalanuvchini o‘chirishni xohlaysizmi?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">O'chirish</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Retseptlar ro'yxati -->
    <div class="card">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Public holatdagi Retseptlar</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Muallif</th>
                        <th class="text-center">Amallar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recipes as $recipe)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $recipe->title }}</td>
                        <td>{{ $recipe->user->name }}</td>
                        <td class="text-center">
                        <form action="{{ route('admin.delete', $recipe->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this recipe?')">Delete</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
