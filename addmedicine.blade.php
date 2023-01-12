@extends ('AdminPage.admin')

@section('title')
    Add Medicine
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add Medicine</h4>
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
                <form class="row g-3" action="insertProduct" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                      <label for="inputname" class="form-label" style="color: black">Product Name</label>
                      <input type="text" class="form-control" name="product_name" id="" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="inputprice" class="form-label" style="color: black">Product Price</label>
                        <input type="text" class="form-control" name="product_price" id="" required>
                      </div>
                      <br>
                      <div class="col-md-12">
                        <label for="formFileSm" class="form-label" style="color: black">Add Product Picture</label>
                        <input class="form-control form-control-sm" name="product_image" id="" type="file" required>
                      </div>
                      <br>
                    
                    <div class="col-md-12">
                      <label for="inputcategory" class="form-label" style="color: black">Category</label>
                      <select id="inputcategory" class="form-select" name="category" required>
                        <option selected disabled value="">...</option>
                        <option >Tablets & Capsule</option>
                        <option>FirstAid</option>
                        <option >Syrup</option>
                        <option>Other</option>
                      </select>
                    </div>
                   
                    <div class="col-12">
                      <button type="submit" class="btn btn-success fw-bold fs-4 rounded-pill" >Add Product</button>
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