@extends('admin.layout.main')


@section('main')

              <main id="main" class="main">

                <form enctype="multipart/form-data" class="row g-3 needs-validation" novalidate method="POST" action="{{route('categories.update',$category)}}">
                  @csrf
                  @method('PUT')
                  <div class="col-12">
                        @error('category_name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    <label for="yourUsername" class="form-label">Category name</label>
                    <div class="input-group has-validation">
                      <input type="text" value="{{$category->category_name}}" name="category_name" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Enter category name.</div>
                      
                    </div>
                  </div>

                  <div class="col-4">
                        @error('thumbnail')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="thumbnail" class="form-label">Category thumbnail  </label>
                      <div class="input-group has-validation">
                        <input type="file" name="thumbnail" class="form-control" id="thumbnail" required>
                        <div class="invalid-feedback">Choose a category thumbnail.</div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
              </main>


@endsection