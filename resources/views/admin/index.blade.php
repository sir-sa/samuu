 @extends('layouts.app')
 
 @section('content')
     
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">users</div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        {{$user->name}} - {{$user->email}}
                                        <tr>
                                          <th scope="row">{{$user->id}}</th>
                                          <td>{{$user->name}}</td>
                                          <td>{{$user->email}}</td>
                                          <td>{{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                          <td>
                                            <a href="{{route('admin.users.edit',$user->id)}}" class="float-left"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                                           
                                           <form action="{{route('admin.users.destroy',$user->id)}}" class="float-left">
                                              @csrf
                                              @method('DELETE')
                                              <button type="button" class="btn btn-warning ">Delete</button>
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
 
 @endsection