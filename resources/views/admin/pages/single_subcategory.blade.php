@extends('admin.layout.main')

@section('main')



<main id="main" class="main">
  <pre>
  
  </pre>
<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Products in  subcategory</h1>
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
                <th scope="col">ID</th>
                <th scope="col">Product image</th>
                <th scope="col">Product name</th>
                <th scope="col">Category</th>
                <th scope="col">Subcategory</th>
                <th scope="col">Brand</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($subcategory->products as $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <td><img width="100px" height="100px" src="{{asset($product->images[0]->image_name)}}" alt=""></td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->category->category_name}}</td>
                <td>{{$product->subcategory->subcategory_name ?? '-'}}</td>
                <td class="">{!! $product->brand->brand_name ??  '-' !!}</td>
                <td>
                <a href="{{url('/admin/products/update_product/' . $product->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{url('/admin/subcategory/delete_product_from_subcategory/' . $product->id)}}" class="btn btn-danger">Delete</a>
                @if($product->status == 1)
                <a href="{{url('/admin/products/suspense_product/' . $product->id)}}" class="btn btn-warning">Suspense</a>
                @else
                <a href="{{url('/admin/products/activate_product/' . $product->id)}}" class="btn btn-info">Activate</a>
                @endif
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
