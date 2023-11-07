@extends('layout.app')

@section('content')
  <style>
    h1{
      text-align: center;
      font-family: Algerian; 
      font-size: 100px;
      padding-top: 2rem;
      padding-bottom: 3rem;
    }
  </style>

    <h1>Inventory System</h1>
    <div class="container">
    <table class="table table-hover table-dark">  
  <thread>
    <tr>
      <th>ProductId</th>
      <th>ProductName</th>
      <th>Description</th>
      <th>Price</th>
      <th>QuantityInStock</th>
    </tr>   
  </thread>
  <tbody>
  @foreach ($products as $product )
    <tr>
      <td>{{ $products->ProductId }}</td>
      <td>{{ $products->ProductName }}</td>
      <td>{{ $products->Description }}</td>
      <td>{{ $products->Price }}</td>
      <td>{{ $products->QuantityInStock }}</td>
    </tr> 
  @endforeach
  </tbody>

  </div>

    <div class="row">
        <form action="{{route('product')}}" method="post">
          @csrf
            
            <label class="col"><h6>Product Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col"><h6>Description</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col"><h6>Price</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
            
            <label class="col"><h6>QuantityInStock</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
           
            <div class="col">
                <select name="type" id="type">
                    <option value="Add" pattern="ADD" >ADD</option>
                    <option value="Remove" pattern="Remove" >REMOVE</option>
                </select>
            </div>
            <div class="col" >
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
      <br>
  </div>  

@endsection

@section('title')
    Home Page
@endsection