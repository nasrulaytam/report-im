@extends('layouts.admin')

@section('main-content')

<!-- Project Card Example -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Users') }}</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Users</h6>
        </div>

    <div class="card-body">
        <div class="table-wrapper table-responsive">
            <table class="table striped-table">
                <thead>
                <tr>
                    <th></th>
                    <th><h6>Name</h6></th>
                    <th><h6>Email</h6></th>
                    <th><h6>Division</h6></th>
                </tr>
                <!-- end table row-->
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><h6 class="text-sm">#{{ $user->id }}</h6></td>
                        <td>
                            <p>{{ $user->fullName }}</p>
                        </td>
                        <td>
                            <p>{{ $user->email }}</p>
                        </td>
                        <td>
                            <p>{{ $user->division }}</p>
                        </td>
                    </tr>
                @endforeach
                <!-- end table row -->
                </tbody>
            </table>
            <!-- end table -->
        </div>
    </div>

    <div class="pt-10 pb-10 d-flex flex-wrap justify-content-between">
        <div class="left"></div>
        <div class="right">
            {{ $users->links() }}
        </div>
    </div>

</div>

@endsection
