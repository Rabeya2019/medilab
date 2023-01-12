@extends ('AdminPage.admin')
@section('title')
    Add Test
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add Test</h4>
          @if (session('message'))
          <div class="alert alert-success" id="alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session('message') }}
          </div>


          @endif


        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table id="testform" class="table">
                <form class="row g-3" action="insertTest" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                      <label for="inputname" class="form-label" style="color: black">Test Name</label>
                      <input type="text" class="form-control" name="test_name" id="" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="inputprice" class="form-label" style="color: black">Test Price</label>
                        <input type="text" class="form-control" name="test_price" id="" required>
                      </div>
                      <br>

                      <br>

                    <div class="col-md-12">
                      <label for="inputcategory" class="form-label" style="color: black">Category</label>
                      <select id="inputcategory" class="form-select" name="test_category" required>
                        <option selected disabled value="">...</option>
                        <option >Medical Test</option>
                        <option>Domestic Health check-up</option>
                        <option >Therapy</option>
                        <option>Other</option>
                      </select>
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-success fw-bold fs-4 rounded-pill add_test" >Add Test</button>
                    </div>
                  </form>
              </table>
            </div>
        </div>



        <br>
        <hr>



<div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
                <h4 class="card-title"> All Tests</h4>

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
                     <th>Test Name</th>
                     <th>Test Price</th>
                     <th>Test Category </th>
                     <th>Test Availability </th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </thead>
                   <tbody>
                     @foreach($tests as $row)
                     <tr>
                       <td>
                        {{$row->test_name}}
                       </td>
                       <td>
                         {{$row->test_price}}TK
                       </td>
                       <td>
                        {{$row->test_category}}
                       </td>
                       <td>
                        {{$row->detail}}
                       </td>
                       <td>
                        <a href="/test-edit/{{$row->id}}" class="btn btn-success">Edit</a>
                       </td>
                       <td>
                       <form action="/test-delete/{{$row->id}}" method="post">
                         @csrf
                         {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                       </td>
                     </tr>
                     @endforeach
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
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
