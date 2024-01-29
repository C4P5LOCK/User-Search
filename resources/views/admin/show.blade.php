@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-5">
<section class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-3">
    
    <div class="card card-primary card-outline">
    <div class="card-body box-profile">
    <div class="text-center">
    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
    </div>
    <h3 class="profile-username text-center">{{$user->name}}</h3>
    <p class="text-muted text-center">Software Engineer</p>
    
    </div>
    
    </div>
    
    
    <div class="card card-primary">
    
    
    
    
    </div>
    
    </div>
    
    <div class="col-md-9">
    <div class="card">
    <div class="card-header p-2">
    <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Info</a></li>
    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Certs</a></li>
    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Documents</a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="tab-content">
    <div class="active tab-pane" id="activity">
        <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Education</strong>
            <p class="text-muted">
            B.S. in Computer Science from the University of Tennessee at Knoxville
            </p>
            <hr>
            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
            <p class="text-muted">Malibu, California</p>
            <hr>
            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
            <p class="text-muted">
            <span class="tag tag-danger">UI Design</span>
            <span class="tag tag-success">Coding</span>
            <span class="tag tag-info">Javascript</span>
            <span class="tag tag-warning">PHP</span>
            <span class="tag tag-primary">Node.js</span>
            </p>
            <hr>
            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
    
    </div>
    
    <div class="tab-pane" id="settings">
    
    </div>
    
    </div>
    
    </div>
    </div>
    
    </div>
    
    </div>
    
    </div>
    </section>
    </div>
</body>
@endsection