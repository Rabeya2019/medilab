@extends ('AdminPage.admin')

@section('title')
    Edit Registered
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit roles for registered users</h3>
                        </div>
                        <div class="card-body">
                           <div class="row">
                            <div class="col-md-6">

                            @if(Session::get('failure'))
                                <div class="alert alert-danger">
                                        {{ Session::get('failure')}}
                                </div>
                            @endif

                            <form action="/role-update/ {{ $users->id }}" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                    <div class="form-group">
                                    <label>Name</label>
                                    <input style="font-size:13px;" type="text" name="username" value="{{$users->username}}" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                    <label>Role</label>
                                    <select name="usertype" class="form-control" id="">
                                        <option style="font-size:13px;" value="admin">Admin</option>
                                        <option style="font-size:13px;" value="customer">Customer</option>
                                    </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="/roles" class="btn btn-danger">Cancel</a>
                                    </form>
                            </div>
                           </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
