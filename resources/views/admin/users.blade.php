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
    
    

    <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Users List</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered text-center table-sm">
                        <thead>
                          <tr>
                            
                            <th> SL </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Created At </th>
                            <th> Updated At </th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl=1;
                            @endphp
                          @foreach ($data as $user)
                          <tr>
                            
                            <td> <?=$sl?> </td>
                            @php
                                $sl=$sl+1;
                            @endphp
                            <td> {{$user->name}} </td>
                            <td>{{$user->email}}</td>
                            <td> {{$user->created_at}} </td>
                            <td> {{$user->updated_at}} </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-inverse-danger">Delete</a>
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

   @include("admin.adminscript")
  </body>
</html>