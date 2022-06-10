@extends('admin.layout.main')

@section('main')


<pre>
</pre>
<main id="main" class="main">

<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Sections</h1>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-section-modal ">Add new section</button type="button">
    </div>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sections </h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Section name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sections as $section)
                <tr>
                  <th scope="row">{{$section->id}}</th>
                  <td>{{$section->section_name}}</td>
                    <td>
                      <a href="{{route('sections.edit',$section)}}" class="btn btn-primary">Edit</a>
                      <form action="{{route('sections.destroy',$section)}}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      <a href="{{route('sections.show',$section)}}" class="btn btn-info">View</a>
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

              <div class="modal fade" id="add-section-modal" tabindex="-1">

                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">


                      <h5 class="modal-title">Add new section</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('sections.store')}}">
                    @csrf
                    <div class="col-12">
                      @error('section_name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                      <label for="yourUsername" class="form-label">Section name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="section_name" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter section name.</div>

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
                  new bootstrap.Modal(document.getElementById('add-section-modal')).show()
                  </script>
                @endpush
              @endif
@endsection
