@extends('admin.layout.main')

@section('main')



<main id="main" class="main">

<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Brand</h1>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-brand-modal ">Add new Brand</button type="button">
    </div>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Brands </h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Brand logo</th>
                <th scope="col">Brand name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($brands as $brand)
              <tr>
                <th scope="row">{{$brand->id}}</th>
                <td><img width="70px" height="70px" src="{{asset($brand->brand_logo)}}" alt=""></td>
                <td>{{$brand->brand_name}}</td>
                <td>
                <a href="{{route('brands.edit',$brand)}}" class="btn btn-primary">Edit</a>
                  <form action="{{route('brands.destroy',$brand)}}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="{{route('brands.show',$brand)}}" class="btn btn-info">View</a>
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

              <div class="modal fade" id="add-brand-modal" tabindex="-1">

                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h5 class="modal-title">Add new brand</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form enctype="multipart/form-data" class="row g-3 needs-validation" novalidate method="POST" action="{{route('brands.store')}}">
                    @csrf

                    <div class="col-12">
                    @error('brand_name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                      <label for="brand_name" class="form-label">brand name <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input type="text" name="brand_name" class="form-control" id="brand_name" required>
                        <div class="invalid-feedback">Enter brand name.</div>
                      </div>
                    </div>

                    <div class="col-12">
                        @error('brand_logo')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="brand_logo" class="form-label">brand logo <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input type="file" name="brand_logo" class="form-control" id="brandlogo" required>
                        <div class="invalid-feedback">Upload brand logo.</div>
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
                  new bootstrap.Modal(document.getElementById('add-brand-modal')).show()
                  </script>
                @endpush
              @endif
@endsection
