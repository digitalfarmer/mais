@extends ('layouts.app')
@section('content')
<nav class='nav'>
            <div class="container">
           
                <div class="row">
                    <div class="col-sm-3">
                        <a href="{{url('customers')}}" style="text-decoration: none;">
                            <div class="media">
                            <img class="align-self-center mr-3" src="{{asset('img/analytics.png')}}" alt="Generic placeholder image">
                            </div>
                            <h2> CRM</h2>
                        </a>
                    </div>
                    <div class="col-sm-3">
                    <div class="media">
                        <a href="{{url('personils')}}" style="text-decoration: none;">
                        <img class="align-self-center mr-3" src="{{asset('img/businessman.png')}}" alt="Generic placeholder image">
                        </div>
                        <h2>Sales Person</h2>
                        <a>
                    </div>
                    <div class="col-sm-3">
                    <div class="media">
                        <a href="{{url('products')}}" style="text-decoration: none;">
                        <img class="align-self-center mr-3" src="{{asset('img/box.png')}}" alt="Generic placeholder image">
                        </div>
                        <h2>Product</h2>
                        </a>
                    </div>
                    <div class="col-sm-3">
                    <div class="media">
                        <img class="align-self-center mr-3" src="{{asset('img/exchange.png')}}" alt="Generic placeholder image">
                        </div>
                        <h2>Accounting</h2>
                    </div>

                     <div class="col-sm-3">
                    <div class="media">
                    <a href="{{url('/callplan')}}" style="text-decoration: none;" >
                        <img class="align-self-center mr-3" src="{{asset('img/calendar.png')}}" alt="Generic placeholder image">
                        </div>
                        <h2>Call Plan</h2>
                        </a>
                    </div>

                    
                    <div class="col-sm-3">
                    <div class="media">
                    <a href="{{url('sales-order')}}" style="text-decoration: none;" >
                        <img class="align-self-center mr-3" src="{{asset('img/notebook.png')}}" alt="Generic placeholder image">
                        </div>
                        <h2>Sales Order</h2>
                        </a>
                    </div>
                    
                   
                    <div class="col-sm-3">
                    <div class="media">
                        <img class="align-self-center mr-3" src="{{asset('img/delivery-truck.png')}}" alt="Generic placeholder image">
                        </div>
                        <h2>Delivery</h2>
                    </div>
                    <div class="col-sm-3">
                    <div class="media">
                        <img class="align-self-center mr-3" src="{{asset('img/wrench.png')}}" alt="Generic placeholder image">
                        </div>
                        <h2>Setting</h2>
                    </div>
                </div>
            </div>
        </div>
@endsection