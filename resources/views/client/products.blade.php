@extends('layouts.app')
@section('content')
<div class='container '>
     
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
       @foreach ($products as $product)
         <div class="card" >
           <div class="card-header">
           {{$product->customer_code}}
           </div>
           <div class="card-body">
           <img src="{{asset('img/social-AWS-Icon.png')}}" alt="Rosemary Porter" class="rounded-circle float-left" />
             <h5 class="card-title">{{$product->product_code}}</h5>
             <p class="card-text">{{$product->product_name}}</p>
             <a href="#" class="btn btn-primary btn-right">Add to Cart</a>
           </div>
         </div>
       @endforeach
       {{$products->render()}} 
       </div>
       <!-- customer table -->
       <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="profile-tab">
         <table class="table table-hover">
             <thead>
               <tr>
                 <th scope="col">No</th>
                 <th scope="col">Product Code</th>
                 <th scope="col">Product Name</th>
                 <th scope="col">Principal</th>
                 
               </tr>
             </thead>
             <tbody>
             @foreach ($products as $product)
               <tr>
                 <th scope="row">{{$product->product_id}}</th>
                <td>{{$product->product_code}}</td>
                <!-- <td>{{$product->product_category_id}}</td>
                <td>{{$product->product_division_id}}</td> -->
                <td>{{$product->product_name}}</td>
                <td>{{$product->principal_name}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-person-{{$product->product_id}}">
                       Edite
                    </button>
                </td>
                      <!-- modal id edited -->
                       <!-- Modal -->
    
                    <div class="modal fade" id="modal-person-{{$product->product_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Master Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="container-fluid">
                            <form action="">
                              <div class="form-group">
                              <!-- <ion-icon range-left small name="sunny"></ion-icon> -->
                                <label for="ProductCode" class="col-form-label">Product Code : {{$product->product_code}} </label>
                                <label for="ProductName" class="col-form-label">Product Code : {{$product->product_name}} </label>
                              </div>
                              <div class="form-group">
                                <label for="unit" class="col-form-label">unit</label>
                                <input type="text" class="form-control" value="{{$product->unit}}">
                                
                              </div>
                              <div class="form-group">
                                <label for="price" class="col-form-label">price</label>
                                <input type="text" class="form-control" value="{{$product->sale_price}}">
                              </div>
                            </form>  
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- end modal product -->
               </tr>
             @endforeach
             </tbody>
             
         </table>
         {{$products->render()}} 
       </div>
       
     </div>
    
 </div>      
@endsection