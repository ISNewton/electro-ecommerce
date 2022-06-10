@extends('admin.layout.main')

@section('main')



<main id="main" class="main">

<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Order</h1>
    </div>  
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Orders </h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">User Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order)
              <tr>
                <th scope="row">{{$order->id}}</th>
                <td>${{$order->total}}</td>
                <td>
                        @if($order->status == 0)
                        <div class="badge rounded-pill bg-danger"> Pending</div>
                        @elseif($order->status == 1)
                        <div class="badge rounded-pill bg-warning"> Progress</div>
                        @else
                        <div class="badge rounded-pill bg-success"> Delevered</div>
                        @endif
                </td>
                <td>{{$order->user->email}}</td>
                <td>
                    <a href="{{route('orders.show',$order)}}" class="btn btn-info">View</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

 


@endsection