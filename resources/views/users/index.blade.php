@extends('layouts.app')

@section('content')
    {{-- masterdatas --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-10">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header">
                        <i class="fa-btn fa-solid fa-users"></i>{{ __('Felhasználók') }}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Név</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                {{-- users --}}

                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('test.edit', $user->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa-btn fa-solid fa-edit"></i>{{ __('Szerkesztés') }}
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('test.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fa-btn fa-solid fa-trash"></i>{{ __('Törlés') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
