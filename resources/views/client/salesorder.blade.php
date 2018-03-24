@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- card header for sales order -->
       
        <div class="card text-white bg-secondary">
            <div class="card-header">
                Create Order for
                <span>#0980980980TEST</span>
            </div>
            <div class="card-body">
               
                 <div class="col-sm-4">
                    <form action="">
                            <div class="">
                                <label for="">Choose Customer</label>
                                <input type="text" class="form-control" placeholder="Select Customer" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="">
                                <label for="">Delivery</label>
                                <input type="text" class="form-control" placeholder="Select Shipping Address" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                    </form>
                 </div>
                <div class="col-sm-4">
                </div>
                
            </div>
        </div>
        <br>
        

        
         <!-- card  for Item Order -->
         <div class="card">
            <div class="card-header">
                <h2>Item Order List</h2>
            </div>
            <div class="card-body">

           
            
                <form action="">
                    <div class="form-group">
                        <label for="" class="">Add Item To Cart</label>
                        <input type="text" class="form-control" placeholder="Select Product" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </form>
            

             
                    <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            
            </div>
         </div>
         
    </div>
@endsection