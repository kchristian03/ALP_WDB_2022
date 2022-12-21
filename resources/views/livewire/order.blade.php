<div>
    <div class="myaccount-content">
        <h3 class="title">Orders</h3>
        <div class="myaccount-table table-responsive text-center">
            <table class="table table-bordered">
                <thead class="thead-light">
                <tr>
                    <th>Order ID</th>
                    <th>Transaction Time</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $or)
                        
                <tr>
                    <td>{{$or->id}}</td>
                    <td>{{$or->created_at}}</td>
                    <td>{{$or->transaction_status}}</td>
                    <td>{{"Rp. ".$or->total_price}}</td>
                    <td><a href="orderdetail/{{ $or['id'] }}" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
