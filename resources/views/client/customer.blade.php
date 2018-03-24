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
          @foreach ($mscustomers as $mscustomer)
            <div class="card" >
              <div class="card-header">
              {{$mscustomer->customer_code}}
              </div>
              <div class="card-body">
              <img src="http://jovialcare.com/wp-content/uploads/bfi_thumb/contact-icon-mhb1gsr6q84ynbxsmypvp60ftw5h5pm9b2dsx71tng.png" alt="Rosemary Porter" class="rounded-circle float-left" />
                <h5 class="card-title">{{$mscustomer->customer_name}}</h5>
                <p class="card-text">{{$mscustomer->customer_address}}</p>
                <a href="#" class="btn btn-primary">Make Order</a>
              </div>
            </div>
          @endforeach
          {{$mscustomers->render()}} 
          </div>
          <!-- customer table -->
          <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="profile-tab">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Customer Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($mscustomers as $mscustomer)
                  <tr>
                    <th scope="row">{{$mscustomer->customer_id}}</th>
                    <td>{{$mscustomer->customer_name}}</td>
                    <td>{{$mscustomer->customer_invoice_name}}</td>
                    <td>{{$mscustomer->customer_address}}</td>
                    <td>{{$mscustomer->customer_city_id}}</td>
                  </tr>
                @endforeach
                </tbody>
                
            </table>
            {{$mscustomers->render()}} 
          </div>
          
        </div>
       
    </div>          
   
@endsection