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
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Quality in Stock</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Lotion</td>
      <td>100</td>
      <td>March 20, 2023</td>
      <td>March 20, 2023</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Robust</td>
      <td>500</td>
      <td>March 20, 2023</td>
      <td>March 20, 2023</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Tissue</td>
      <td>300</td>
      <td>March 20, 2023</td>
      <td>March 20, 2023</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<div class="rows">
  <form>
            
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

@endsection

@section('title')
    Home Page
@endsection