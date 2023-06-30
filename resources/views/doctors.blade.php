@extends('layouts.web')

@section('content')
    <div class="container">
        <table class="table table-bordered table-shadow">
            <thead class="thead-dark">
                <tr>
                    <th>Doctor ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>IC</th>
                    <th>Contact No</th>
                    <th>Actions</th> <!-- Added Actions column -->
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->docID }}</td>
                        <td>{{ $data->docName }}</td>
                        <td>{{ $data->docGender }}</td>
                        <td>{{ $data->docIC }}</td>
                        <td>{{ $data->docContactNo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('popup')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Doctor
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
