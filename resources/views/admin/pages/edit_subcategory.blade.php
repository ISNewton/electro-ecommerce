@extends('admin.layout.main')


@section('main')

              <main id="main" class="main">
                <form enctype="multipart/form-data" class="row g-3 needs-validation w-50" novalidate method="POST" action="{{route('subcategories.update',$subcategory)}}">
                  @csrf
                  @method('PUT')
                  <div class="col-12">
                      
                    <label for="yourUsername" class="form-label">subcategory name <span class="text-danger">*</span></label>
                    <div class="input-group has-validation">
                      <input type="text" value="{{$subcategory->subcategory_name}}" name="subcategory_name" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Enter subcategory name.</div>
                      @error('subcategory_name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-12">
                        @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    <label for="yourUsername" class="form-label">category name <span class="text-danger">*</span></label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                      @foreach($categories as $category)
                        <option <?php echo $category->id == $subcategory->category->id ?  'selected' :  ''?> value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                    </select>
                    </div>

                    <div class="col-12">
                        @error('thumbnail')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="thumbnail" class="form-label">Subcategory thumbnail </label>
                      <div class="input-group has-validation">
                        <input type="file" name="thumbnail" class="form-control" id="thumbnail" required>
                        <div class="invalid-feedback">Choose Subcategory thumbnail.</div>
                      </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
              </main>


@endsection