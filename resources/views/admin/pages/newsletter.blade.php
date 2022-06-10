@extends('admin.layout.main')

@section('main')



<main id="main" class="main">

<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Newsletters subscription</h1>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-email-modal ">Add new Email</button type="button">
    </div>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Subscription </h5>

<!--           <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
 -->
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Email address</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subscriptions as $subscription)
              <tr>
                <th scope="row">{{$subscription->id}}</th>
                <td>{{$subscription->email}}</td>
                <td>
                    <form action="{{route('newsletters.destroy',$subscription)}}" method="POST" style="display: inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
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

              <div class="modal fade" id="add-email-modal" tabindex="-1">

                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add new email</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('newsletters.index')}}">
                    @csrf
                    <div class="col-12">
                    @error('email')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                      <label for="yourUsername" class="form-label">Email address</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter an email .</div>
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
                  new bootstrap.Modal(document.getElementById('add-email-modal')).show()
                  </script>
                @endpush
              @endif
@endsection
