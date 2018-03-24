@extends('layouts.app')

@section('content')
<div class='container '>
     <div class="card">
     <ul class="nav nav-tabs" id="myTab" role="tablist">
           <li class="nav-item">
             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#card" role="tab" aria-controls="home" aria-selected="true">Card</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" id="profile-tab" data-toggle="tab" href="#list" role="tab" aria-controls="profile" aria-selected="false">List</a>
           </li>
           <form class="form-inline right">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
     </ul>

     <div class="tab-content" id="myTabContent">
       <div class="tab-pane fade show active" id="card" role="tabpanel" aria-labelledby="home-tab">
        @foreach ($persons as $person) 
         <div class="card" >
           <div class="card-header">
           {{$person->employee_code}}
           </div>
           <div class="card-body">
           <img src="{{asset('img/employeeid_icon.png')}}" alt="Rosemary Porter" class="rounded float-left" />
             <h5 class="card-title">{{$person->employee_name}}</h5>
             <p class="card-text">{{$person->employee_address}}</p>
             <a href="#" class="btn btn-primary">Detail</a>
           </div>
         </div>
        @endforeach
       $persons->render()}}  
       </div>
       <!-- employee table -->
       <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="profile-tab">
         <table class="table table-hover">
             <thead>
               <tr>
                 <th scope="col">Employee Code</th>
                 <th scope="col">Name</th>
                 <th scope="col">Job Title</th>
                 <th scope="col">Phone</th>
                 <th scope="col">Status</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
             @foreach ($persons as $person)
               <tr>
                 
                    <th scope="row">{{$person->employee_code}}</th>
                    <td>{{$person->employee_name}}</td>
                    <td>{{$person->job_position_id}}</td>
                    <td>{{$person->phone_number}}</td>
                    <td>{{$person->employee_status}}</td>
                    <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-person-{{$person->employee_code}}">
                       Detail
                    </button>
                    </td>

                    <!-- Modal -->
    
                    <div class="modal fade" id="modal-person-{{$person->employee_code}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">{{$person->employee_code}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                             {{$person->employee_name}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
               </tr>
            @endforeach
             </tbody>
             <!-- -{{$person->employee_code}} -->
         </table>
         {{$persons->render()}} 
       </div>
       
     </div>
     </div><!--  end main card -->

     <!-- modal person editable -->
     
   

 </div>      

@endsection