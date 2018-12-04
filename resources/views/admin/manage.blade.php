@extends('admin.layout.admin')
@section('admin-content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Manage</li>
            </ul>
        </div>
    </div>
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">All Users </h1>
            </header>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Manager</h4>
                        </div>
                        <div class="card-body">
                            <p>Manager Member</p>
                        </div>
                        <table class="table table-bordered table-striped" style="
                        word-wrap: break-word;">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Commission</th>
                                <th width="125px">Actions</th>
                            </tr>
                            </thead>
                            @foreach($managers as $manager)
                                <tbody>
                                <tr>
                                    <td>{{ $manager->name }}</td>
                                    <td>
                                        @if($manager->role == 0)
                                            Adminitrator
                                        @else
                                            Human Resource
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-success">
                                            <i class="fas fa-search-plus"></i>
                                        </button>
                                        <button class="btn btn-sm btn-info">
                                            <i class="fas fa-user-edit" style="width: 12.25px;"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>User</h4>
                        </div>
                        <div class="card-body">
                            <p>User Member</p>
                        </div>
                        <table class="table table-bordered table-striped" style="
                        word-wrap: break-word;">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th width="125px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tbody>
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-success">
                                            <i class="fas fa-search-plus"></i>
                                        </button>
                                        <button class="btn btn-sm btn-info">
                                            <i class="fas fa-user-edit" style="width: 12.25px;"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
