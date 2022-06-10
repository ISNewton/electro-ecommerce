@extends('admin.layout.main')

@section('main')



<main id="main" class="main">
  <pre>
  
  </pre>
<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Products in  {{$brand->brand_name}} Brand</h1>
    </div>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Products </h5>


          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">product ID</th>
                <th scope="col">product image</th>
                <th scope="col">product name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($brand->products as $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <td><img width="70px" height="70px" src="{{asset($product->images[0]->image_name)}}" alt=""></td>
                <td>{{$product->product_name}}</td>
                <td>
                <a href="#" class="btn btn-primary">Visit</a>
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