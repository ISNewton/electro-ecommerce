@extends('admin.layout.main')

@section('main')



<main id="main" class="main">
<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Order</h1>
    
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category-modal ">Edit order status</button type="button">
    </div>  
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Order </h5>
          
  
          <!-- Table with stripped rows -->
          <table class="table datatable">
            
            <tbody>
                <tr>
                    <th scope="col">Order ID</th>
                    <td>{{$order->id}}</td>
                </tr>
                <tr>
                    <th scope="col">country</th>
                    <td>{{$order->country}}</td>
                </tr>
                <tr>
                    <th scope="col">First Address</th>
                    <td>{{$order->first_address}}</td>
                </tr>
                <tr>
                    <th scope="col">Second Address</th>
                    <td>{{$order->second_address ?? '-'}}</td>
                </tr>
                <tr>
                    <th scope="col">City</th>
                    <td>{{$order->city}}</td>
                </tr>
                <tr>
                    <th scope="col">State</th>
                    <td>{{$order->state}}</td>
                </tr>

                <tr>
                    <th scope="col">ZIP code</th>
                    <td>{{$order->zip_code}}</td>
                </tr>

                <tr>
                    <th scope="col">Order Comment</th>
                    <td>{{$order->comment}}</td>
                </tr>

                <tr>
                    <th scope="col">Subtotal</th>
                    <td>${{$order->subtotal}}</td>
                </tr>

                <tr>
                    <th scope="col">Coupon</th>
                    <td>{{$order->coupon ?? '-'}}</td>
                </tr>

                <tr>
                    <th scope="col">Total</th>
                    <td>${{$order->total}}</td>
                </tr>
                
                <tr>
                
                    <th scope="col">User ID</th>
                    <td>{{$order->user->id}}</td>
                </tr>
                <tr>
                    <th scope="col">Full name</th>
                    <td>{{$order->user->name}}</td>
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <td>{{$order->user->email}}</td>
                </tr>

                <tr>
                    <th scope="col">Status</th>
                    <td>
                        @if($order->status == 0)
                        <div class="badge rounded-pill bg-danger"> Pending</div>
                        @elseif($order->status == 1)
                        <div class="badge rounded-pill bg-warning"> Progress</div>
                        @else
                        <div class="badge rounded-pill bg-success"> Delevered</div>
                        @endif
                    </td>
                </tr>
             
             
             
            </tbody>
          </table>
          <!-- End Table with stripped rows -->


            <!-- Table with stripped rows -->
            <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product image</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th scope="col">view</th>
              </tr>
            </thead>
            <tbody>
              @foreach($order->products as $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <th scope="row"><img src="{{asset($product->images[0]->image_name)}}" width="70px" height="70px"></th>
                <td>{{$product->pivot->quantity}}</td>
                <td>${{$product->pivot->price}}</td>
                <td>${{$product->pivot->quantity * $product->pivot->price}}</td>
                <td>
                 <a href="{{route('products.show',$product)}}" class="btn btn-primary">view</a> 
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


  <!-- Basic Modal -->
  
  <div class="modal fade" id="add-category-modal" tabindex="-1">
              
              <div class="modal-dialog">
                <div class="modal-content">
                  
                  <div class="modal-header">

              
                    <h5 class="modal-title">Edit order status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                  </div>
                  <div class="modal-body">

                  <form enctype="multipart/form-data" class="row g-3 needs-validation" novalidate method="POST" action="{{route('orders.update',$order)}}">
                  @csrf
                  @method('PUT')
                  <div class="">
                      @error('status')
                          <div class="text-danger">{{$message}}</div>
                      @enderror
                    <label for="thumbnail" class="form-label">Order Status <span class="text-danger">*</span> </label>
                    <div class="input-group has-validation">
                        <select name="status" class="form-select col-4">
                            <option selected="<?php echo $order->status ==  0 ? 'selected' :  ''?>" value="0">Pending</option>
                            <option selected="<?php echo $order->status == 1 ?  'selected' :  ''?>" value="1">Progress</option>
                            <option selected="<?php echo $order->status == 2 ?  'selected' :  ''?>" value="2">delevered</option>
                        </select>
                      <div class="invalid-feedback">Choose Order Status.</div>
                    </div>
                  </div>

                  

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Basic Modal-->
@endsection