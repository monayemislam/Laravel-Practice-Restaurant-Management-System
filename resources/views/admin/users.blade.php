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
                            <button type="button" class="btn btn-sm btn-inverse-danger" data-toggle="modal" data-target="#userModal">Delete</button>
                                <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content bg-white">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="userModalLabel">Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body text-danger">
                                        Are you Sure want to delete this user? 
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                        <a href="{{url('delete-user',$user->id)}}" class="btn btn-sm btn-inverse-danger">Delete</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </td>
                          </tr>
                          @endforeach

                          @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                          @endif
                          
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