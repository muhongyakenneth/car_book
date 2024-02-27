@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h2>Trip Requests</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Pickup Location</th>
                        <th>Dropoff Location</th>
                        <th>Pickup Date</th>
                        <th>Dropoff Date</th>
                        <th>Pickup Time</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tripRequests as $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->name }}</td>
                        <td>{{ $request->email }}</td>
                        <td>{{ $request->pickup_location }}</td>
                        <td>{{ $request->dropoff_location }}</td>
                        <td>{{ $request->pickup_date }}</td>
                        <td>{{ $request->dropoff_date }}</td>
                        <td>{{ $request->pickup_time }}</td>
                        <td>
                            <a href="{{--  --}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{--  --}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
