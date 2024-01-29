@extends('layouts.app')

@section('content')
<body>

    @if($users)

<div class="container mt-5">
               

        <div class="col-12">
             <div class="card">
                <div class="card-header">
                <h3 class="card-title">All Users</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                </div>
                </div>
                
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                <thead>
                <tr>
                <th>ID</th>
                <th>User</th>
                <th>Date Registered</th>
                <th>Phone</th>
                <th>Photo</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td><img src="{{ asset('storage/images/' . $user->picture) }}" alt="User Picture" class="rounded-circle" height="100" width="100"></td>
               
                <td><a href="{{route('show', $user)}}">View User</a></td>
                </tr>
                    @endforeach 
                </tbody>
                </table>
                </div>
                
                </div>
                
                </div>

</div>   
               
@endif
@endsection
</body>
</html>