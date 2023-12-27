@extends('layouts.app')

@section('title', 'Contact List')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12">
            <h1>Contact List</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alu as $list)
                    <tr>
                        <th scope="row">{{ $list->id }}</th>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->phone }}</td>
                        <td>{{ $list->email }}</td>
                        <td>{{ $list->subject }}</td>
                        <td>{{ $list->message }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
