@extends('layout.app')

@section('content')
<br>
<h1>Manage Order</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>OrderId</th>
        <th>OrderDate</th>
        <th>TotalAmount</th>
        <th>Status</th>
    </tr>   
</thead>
    @foreach ($orders as $order )
        <tr>
            <td>{{ $orders->OrderID }}</td>
            <td>{{ $orders->OrderDate }}</td>
            <td>{{ $orders->TotalAmount }}</td>
            <td>{{ $orders->Status }}</td>
        </tr> 
    @endforeach
</div>

    <div class="row">
        <form>
            
            <label class="col"><h6>Order Date</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col" ><h6>Total Amount</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
            
            <label class="col" ><h6>Status</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
           
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
    Order
@endsection