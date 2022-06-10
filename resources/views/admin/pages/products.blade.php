@extends('admin.layout.main')

@section('main')


<main id="main" class="main">

  <div class="pagetitle">
    <div class="d-flex justify-content-between">
      <h1>Products</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category-modal ">Add new Product</button type="button">
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
                  <th scope="col">Product name</th>
                  <th scope="col">Product image</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>

                  <th scope="row">{{$product->id}}</th>
                  <td>{{$product->product_name}}</td>
                  <td><img width="70px" height="70px" src="{{asset($product->images[0]->image_name)}}" alt=""></td>
                  <td>${{$product->discount_price ?? $product->sell_price}}</td>
                    <td>
                        <a href="{{route('products.edit',$product)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('products.destroy',$product)}}" method="POST" style="display: inline-block;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <form action="{{route('products.reverse',$product)}}" method="post" style="display: inline-block;">
                        @csrf
                          @method('PUT')
                          <button class="btn btn-warning" type="submit">{{$product->status ? 'Suspense' : 'Activate'}}</button>
                        </form>
                        <a href="{{route('products.show',$product)}}" class="btn btn-info">View</a>

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

                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                  <div class="modal-content">

                    <div class="modal-header">

                      <h5 class="modal-title">Add new product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <form enctype="multipart/form-data" class="row g-3 needs-validation" novalidate method="POST" action="{{route('products.store')}}">
                    @csrf

                    <div class="col-4">
                    @error('product_name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                      <label for="product_name" class="form-label">product name <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                        <input type="text" name="product_name" class="form-control" id="product_name" required>
                        <div class="invalid-feedback">Enter product name.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('product_quantity')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="product_quantity" class="form-label">product quantity <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                        <input type="number" name="product_quantity" class="form-control" id="product_quantity" required>
                        <div class="invalid-feedback">Enter product quantity.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('sections')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="category" class="form-label">product sections</label>
                      <div class="input-group has-validation">
                      <select multiple  class="form-select" name="sections[]">
                      @foreach($sections as $section)
                        <option value="{{$section->id}}">{{$section->section_name}}</option>
                      @endforeach
                    </select>
                        <div class="invalid-feedback">Enter product section.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('sell_price')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="sell_price" class="form-label">sell price <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                        <input type="number" name="sell_price" class="form-control" id="sell_price" required>
                        <div class="invalid-feedback">Enter product sell price.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('discount_type')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="discount_type " class="form-label">discount type <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                      <select id="discount_type" class="form-select" name="discount_type">
                        <option value="">--No discount</option>
                          <option value="percentage">Per ercentage (%) </option>
                          <option value="value">per value ($) </option>
                        </select>
                        <div class="invalid-feedback">Enter product discount type.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('discount_price')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="discount_price" class="form-label">discount price </label>
                      <div class="input-group has-validation">
                        <input disabled id="discount_price" type="number" name="discount_price" class="form-control" id="discount_price" required="required">
                        <div class="invalid-feedback">Enter product discount price.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('subcategory_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="Subcategory" class="form-label">product subcategory <span class="text-danger">*</span> </label>
                      <div id="product_subcategories_select" class="input-group has-validation">
                        <select id="sub_inner" class="form-select" name="subcategory_id">
                        <option selected="selected" value="">--No subcategory selected</option>
                          @foreach($subcategories as $sub)
                          <option value="{{$sub->id}}">{{$sub->subcategory_name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="invalid-feedback">Enter product subcategory.</div>
                    </div>


                    <div class="col-4">
                        @error('brand_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="brand" class="form-label">Brand <span class="text-danger"></span> </label>
                      <div  class="input-group has-validation">
                        <select class="form-select" name="brand_id">
                          <option selected="selected" value="">--No brand--</option>
                          @foreach($brands as $brand)
                          <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('product_images')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="product_images" class="form-label">product images <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                        <input type="file" multiple name="product_images[]" class="form-control" id="image-input" required >
                        <div class="invalid-feedback">Enter product images.</div>
                      </div>
                    </div>

                    <div id="preview"></div>


                    <div class="col-12 mb-5">
                        @error('product_discription')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="product_discription" class="form-label">Description <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                          <textarea id="editor" name="product_discription">

                          </textarea>
                             <div class="invalid-feedback">Enter product discription.</div>
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
              </div><!-- End Basic Modal-->

              <script src="{{ asset('backend/assets/js/ckeditor.js') }}"></script>

              <script src="{{ asset('backend/assets/js/imagePreviewer.js') }}"></script>

              <script src="{{ asset('backend/assets/js/ckeditor_init.js') }}"></script>

              <script>
                document.getElementById('discount_type').addEventListener('change',(e) => {
                  const discount_price = document.getElementById('discount_price')

                  if (!e.target.value) {
                    discount_price.value=
                    discount_price.disabled = true
                  } else {
                    discount_price.disabled = false
                  }
                })
              </script>

              @if($errors->any())
                @push('scripts')
                  <script type="text/javascript">
                  new bootstrap.Modal(document.getElementById('add-category-modal')).show()
                  </script>
                @endpush
              @endif


@endsection
