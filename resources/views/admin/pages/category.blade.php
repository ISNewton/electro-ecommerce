@extends('admin.layout.main')

@section('main')



<main id="main" class="main">

<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Category</h1>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category-modal ">Add new category</button type="button">
    </div>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Category </h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Category name</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->category_name}}</td>
                <td><img width="70px" height="70px" src="{{asset($category->thumbnail)}}" alt="{{$category->category_name}}"></td>
                <td>
                  <a href="{{route('categories.edit',$category)}}" class="btn btn-primary">Edit</a>
                  <form action="{{route('categories.destroy',$category)}}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="{{route('categories.show',$category)}}" class="btn btn-info">View</a>
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


                      <h5 class="modal-title">Add new category</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">

                    <form enctype="multipart/form-data" class="row g-3 needs-validation" novalidate method="POST" action="{{route('categories.store')}}">
                    @csrf

                    <div class="col-12">
                        @error('category_name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label">Category name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="category_name" class="form-control" id="yourUsername" required="required">
                        <div class="invalid-feedback">Enter category name.</div>

                      </div>
                    </div>

                    <div class="col-12">
                        @error('thumbnail')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="thumbnail" class="form-label">Category thumbnail <span class="text-danger">*</span> </label>
                      <div class="input-group has-validation">
                        <input type="file" name="thumbnail" class="form-control" id="thumbnail" required>
                        <div class="invalid-feedback">Choose category thumbnail.</div>
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
              @if($errors->any())
                @push('scripts')
                  <script type="text/javascript">
                  new bootstrap.Modal(document.getElementById('add-category-modal')).show()
                  </script>
                @endpush
              @endif

@endsection
