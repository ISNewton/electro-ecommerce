@extends('admin.layout.main')


@section('main')

              <main id="main" class="main">
                <form enctype="multipart/form-data" class="row g-3 needs-validation w-50" novalidate method="POST" action="{{route('brands.update',$brand)}}">
                  @csrf
                  @method('PUT')
                  <div class="col-12">
                      
                    <label for="brand_name" class="form-label">Brand name <span class="text-danger">*</span></label>
                    <div class="input-group has-validation">
                      <input type="text" value="{{$brand->brand_name}}" name="brand_name" class="form-control" id="brand_name" required>
                      <div class="invalid-feedback">Enter brand name.</div>
                      @error('brand_name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-12">
                  
                    <label for="brand_logo" class="form-label">Brand logo</label>
                    <div class="input-group has-validation">
                      <input type="file"  name="brand_logo" class="form-control" id="brand_logo" >
                      <div class="invalid-feedback">Upload brand logo.</div>
                      @error('brand_logo')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>
                    
                </div>
                <img  style="width:100px;height:100px;" src="{{asset($brand->brand_logo)}}" alt="">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
              </main>


@endsection