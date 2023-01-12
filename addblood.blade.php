@extends ('AdminPage.admin')

@section('title')
    Add BLOOD
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add Blood</h4>
          @if (session('message'))
          <div class="alert alert-success" id="alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session('message') }}
          </div>
         
            
          @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table id="productform" class="table">
                <form class="row g-3" action="insertBlood" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                      <label for="inputname" class="form-label" style="color: black">Hospital Name</label>
                      <input type="text" class="form-control" name="hospital_name" id="" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="inputprice" class="form-label" style="color: black">Quanity</label>
                        <input type="text" class="form-control" name="quantity" id="" required>
                      </div>
                      <div class="col-md-12">
                        <label for="inputprice" class="form-label" style="color: black">Contact</label>
                        <input type="text" class="form-control" name="contact" id="" required>
                      </div>
                      <br>
                      <div class="col-md-12">
                        <label for="formFileSm" class="form-label" style="color: black">Add Picture</label>
                        <input class="form-control form-control-sm" name="blood_image" id="" type="file" required>
                      </div>
                      <br>
                    
                    <div class="col-md-12">
                      <label for="inputcategory" class="form-label" style="color: black">Type</label>
                      <select id="inputcategory" class="form-select" name="type" required>
                        <option selected disabled value="">...</option>
                        <option>A-</option>
                        <option>A+</option>
                        <option>B-</option>
                        <option>B+</option>
                        <option>O-</option>
                        <option>O+</option>
                        <option>AB-</option>
                        <option >AB+</option>
                      </select>
                    </div>
                   
                    <div class="col-12">
                      <button type="submit" class="btn btn-success fw-bold fs-4 rounded-pill" >Add Blood</button>
                    </div>
                  </form>
              </table>
            </div>
        </div>
      </div>
    </div>
</div>




@endsection
@section('scripts')
<script type="text/javascript">
  $("document").ready(function()
  {
  setTimeout(function()
  {
    $("div.alert").remove();
  }, 5000);
  });
  </script>
  @endsection