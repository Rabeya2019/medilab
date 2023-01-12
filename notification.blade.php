@extends ('AdminPage.admin')

@section('title')
    Appointment List
@endsection




@section('content')
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Appointment List</h4>

                @if(Session::get('delete_success'))
                                <div class="alert alert-success">
                                        {{ Session::get('delete_success')}}
                                </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>Customer</th>
                      <th>Email</th>
                      <th>Phone number </th>
                      <th>Applied for</th>
                      <th>Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      {{-- @foreach($user as $row) --}}
                      <tr>
                        <td>
                         {{-- {{$row->username}} --}}loggedin name
                        </td>
                        <td>
                          {{-- {{$row->email}} --}} emal
                        </td>
                        <td>
                         {{-- {{$row->phone}} --}} phone
                        </td>
                        <td>
                         {{-- {{$row->created_at}} --}} Test name
                        </td>
                        <td>
                            {{-- {{$row->created_at}} --}} pending
                           </td>
                        <td>
                         <a href="/role-edit/" class="btn btn-success">Accept</a>
                        </td>
                        <td>
                        <form action="/user-delete/" method="post">
                          @csrf
                          {{ method_field('DELETE') }}
                         <button type="submit" class="btn btn-danger">Decline</button>
                         </form>
                        </td>
                      </tr>
                      {{-- @endforeach --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection

























@section('scripts')
 <script>
  $(document).ready( function () {
    $('#datatable').DataTable({
      stateSave: true,
    });
    } );
 </script>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function()
  {
  setTimeout(function()
  {
    $("div.alert").remove();
  }, 5000);
  });
  </script>
 @endsection
