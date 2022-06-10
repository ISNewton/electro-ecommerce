@extends('admin.layout.main')

@section('main')



<main id="main" class="main">
<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Product</h1>
    <a href="{{route('products.index')}}" class="btn btn-primary">Go back</a>
    </div>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$product->product_name}} </h5>

          <div class="row mb-5">
              <div class="col-12">
                  @foreach($product->images as $image)
                  <img style="margin: 0 10px;" width="100px" height="100px" src="{{asset($image->image_name)}}">
                  @endforeach
              </div>
          </div>


          <!-- Table with stripped rows -->
          <table class="table datatable">

            <tbody>
                <tr>
                    <th scope="col">Product ID</th>
                    <td>{{$product->id}}</td>
                </tr>

                <tr>
                    <th scope="col">Product name</th>
                    <td>{{$product->product_name}}</td>
                </tr>

                <tr>
                    <th scope="col">Quantity</th>
                    <td>{{$product->product_quantity}}</td>
                </tr>

                <tr>
                    <th scope="col">Sell price</th>
                    <td>${{$product->discount_type ? $product->sell_price : $product->price}}</td>
                </tr>
                @if($product->discount_type)
                <tr>
                    <th scope="col">Discount price</th>
                    <td>{{$product->discount_type == 'percentage' ? '%' : '$'}} {{$product->discount_price ?? '-'}}</td>
                </tr>
                <tr>
                    <th scope="col">Price</th>
                    <td>${{$product->price}}</td>
                </tr>
                @endif

                <tr>
                    <th scope="col">Category</th>
                    <td>{{$product->subcategory->category->category_name}}</td>
                </tr>

                <tr>
                    <th scope="col">Subcategory</th>
                    <td>{{$product->subcategory->subcategory_name}}</td>
                </tr>

                <tr>
                    <th scope="col">Brand</th>
                    <td>{{$product->brand->brand_name ?? '-' }}</td>
                </tr>

                <tr>
                    <th scope="col">Discription</th>
                    <td>{!! $product->product_discription !!}</td>
                </tr>
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
