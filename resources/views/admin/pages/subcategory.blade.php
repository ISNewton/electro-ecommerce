@extends('admin.layout.main')

@section('main')



<main id="main" class="main">
<pre>
</pre>
<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Subcategory</h1>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-subcategory-modal ">Add new subcategory</button type="button">
    </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Subcategory </h5>

<!--           <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
 -->
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Subcategory name</th>
                <th scope="col">Category name</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subcategories as $subcategory)
              <tr>
                <th scope="row">{{$subcategory->id}}</th>
                <td>{{$subcategory->subcategory_name}}</td>
                <td>{{$subcategory->category->category_name}}</td>
                <td><img width="70px" height="70px" src="{{asset($subcategory->thumbnail)}}" alt="{{$subcategory->subcategory_name}}"></td>
                  <td>
                    <a href="{{route('subcategories.edit',$subcategory)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('subcategories.destroy',$subcategory)}}" method="POST" style="display: inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{route('subcategories.show',$subcategory)}}" class="btn btn-info">View</a>
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

              <div class="modal fade" id="add-subcategory-modal" tabindex="-1">

                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">


                      <h5 class="modal-title">Add new subcategory</h5>

                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <form enctype="multipart/form-data" class="row g-3 needs-validation" novalidate method="POST" action="{{route('subcategories.store')}}">
                    @csrf

                    <div class="col-12">
                        @error('subcategory_name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label">subcategory name <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input type="text" name="subcategory_name" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter subcategory name.</div>

                      </div>
                    </div>

                    <div class="col-12">
                        @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    <label for="yourUsername" class="form-label">category name <span class="text-danger">*</span></label>
                    <select name="category_id" class="form-select" aria-label="Default select example" id="category_id" >
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                    </select>
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
                  new bootstrap.Modal(document.getElementById('add-subcategory-modal')).show()
                  </script>
                @endpush
              @endif
@endsection
