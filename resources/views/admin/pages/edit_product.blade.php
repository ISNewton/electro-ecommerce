
@extends('admin.layout.main')


@section('main')

              <main id="main" class="main">


                <form enctype="multipart/form-data" class="row g-3 needs-validation" novalidate method="POST" action="{{route('products.update',$product)}}">
                  @csrf
                  @method('PUT')
                  <div class="col-4">
                    @error('product_name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                      <label for="product_name" class="form-label">product name <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                        <input value="{{$product->product_name}}" type="text" name="product_name" class="form-control" id="product_name" required>
                        <div class="invalid-feedback">Enter product name.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('product_quantity')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="product_quantity" class="form-label">product quantity <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                        <input value="{{$product->product_quantity}}" type="number" name="product_quantity" class="form-control" id="product_quantity" required>
                        <div class="invalid-feedback">Enter product quantity.</div>
                      </div>
                    </div>


                     <div class="col-4">
                        @error('sections')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="category" class="form-label">product sections <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                      <select multiple  class="form-select" name="sections[]">
                        <option  value="">--No sections selected</option>
                      @foreach($sections as $section)
                        <option
                         <?php
                        foreach($product->sections as $sec) {
                           echo $section->id == $sec->pivot->section_id ? 'selected="selected" ' : '';
                          }
                        ?>
                        value="{{$section->id}}">{{$section->section_name}}</option>
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
                        <input value="{{$product->sell_price}}" type="number" name="sell_price" class="form-control" id="sell_price" required>
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
                        <option <?php echo $product->discount_type ? '' : 'selected' ?> value="">--No discount</option>
                          <option <?php echo $product->discount_type == 'percentage' ? 'selected' : '' ?> value="percentage">Per ercentage (%) </option>
                          <option <?php echo $product->discount_type == 'value' ? 'selected' : '' ?> value="value">per value ($) </option>
                        </select>
                        <div class="invalid-feedback">Enter product discount type.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('discount_price')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="discount_price" class="form-label">discount price <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                        <input <?php echo $product->discount_type? '' : 'disabled' ?> id="discount_price" value="{{$product->discount_price}}" type="number" name="discount_price" class="form-control" id="discount_price" required>
                        <div class="invalid-feedback">Enter product discount price.</div>
                      </div>
                    </div>

                    <div class="col-4">
                        @error('subcategory_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="Subcategory" class="form-label">product subcategory <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">

                        <select class="form-select" name="subcategory_id">
                        <option value="">--No subcategory selected</option>
                        @foreach($subcategories as $sub)

                          <option <?php echo $sub->id == $product->subcategory_id ? 'selected' : '' ?> value="{{$sub->id}}">{{$sub->subcategory_name}}</option>
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
                        <select class="form-select"  name="brand_id">
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
                      <label for="product_images" class="form-label">product images <span class="text-danger">*</span> <small>(leave it empty if you don't want to change the images)</small> </label>
                      <div class="input-group has-validation">
                        <input type="file" multiple name="product_images[]" class="form-control" id="image-input">
                        <div class="invalid-feedback">Enter product images.</div>
                      </div>
                    </div>
                    <div id="preview">
                      @foreach($product->images as $image)
                      <div style="position: relative; width: 100px; height: 100px; margin: 0px 10px; display: inline-block;">
                        <p class="btn btn-danger delete-image-btn" style="position: absolute; top: 0px; right: 0px;">x</p>
                        <img src="{{asset($image->image_name)}}" alt="" width="100px" height="100px">
                      </div>
                      @endforeach
                    </div>

                    <div class="col-12 mb-5">
                      @error('product_discription')
                          <div class="text-danger">{{$message}}</div>
                      @enderror
                    <label for="product_discription" class="form-label">Description <span class="text-danger">*</span> </label>
                    <div class="input-group has-validation">
                        <textarea id="editor" name="product_discription">
                          {{$product->product_discription}}
                        </textarea>
                           <div class="invalid-feedback">Enter product discription.</div>
                    </div>
                  </div>

                </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
              </main>
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


@endsection
