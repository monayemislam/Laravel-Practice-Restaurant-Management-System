<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar") 
    


    <!--form start-->
    <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Create New Food Item</h4>
                    @if (session('status'))
                      <div class="alert alert-success">
                        {{ session('status') }}
                      </div>
                    @endif
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif
                    <form class="forms-sample" action="{{'/save-food'}}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Food Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="title" placeholder="Food Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="price" placeholder="Price">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" name="image" placeholder="Image">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="description" placeholder="Descripttion">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                        <input type="submit" class="btn btn-primary" value="Create">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
    <!--form end-->
    


  </div>

   @include("admin.adminscript")
  </body>
</html>