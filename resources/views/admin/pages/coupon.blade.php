@extends('admin.layout.main')

@section('main')

<main id="main" class="main">

<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Coupon</h1>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-coupon-modal ">Add new coupon</button type="button">
    </div>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Coupons </h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Coupon code</th>
                <th scope="col">Discount percintage</th>
                <th scope="col">Limitation</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($coupons as $coupon)
              <tr>
                <th scope="row">{{$coupon->id}}</th>
                <td>{{$coupon->coupon}}</td>
                <td>%{{$coupon->discount}}</td>
                <td>{{$coupon->limitation}}</td>
                  <td>
                    <a href="{{route('coupons.edit',$coupon)}}" class="btn btn-primary">Edit</a>
                      <form action="{{route('coupons.destroy',$coupon)}}" method="POST" style="display: inline-block;">
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

              <div class="modal fade" id="add-coupon-modal" tabindex="-1">

                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add new coupon</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('coupons.store')}}">
                    @csrf
                    <div class="col-12">
                      @error('coupon')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                      <label for="yourUsername" class="form-label">coupon name <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input required type="text" name="coupon" class="form-control" id="yourUsername"  >
                        <div class="invalid-feedback">Enter coupon name.</div>

                      </div>
                    </div>

                    <div class="col-12">
                      @error('discount')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                      <label for="discount" class="form-label">coupon discount <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input required type="number" name="discount" class="form-control" id="discount" >
                        <div class="invalid-feedback">coupon discount must be a number.</div>

                      </div>
                    </div>

                    <div class="col-12">
                      @error('limitation')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                      <label for="limitation" class="form-label">Coupon limitation <span class="text-danger">*</span></label>
                      <div class="input-group has-validation">
                        <input required type="number" name="limitation" class="form-control" id="limitation" >
                        <div class="invalid-feedback">coupon limitation must be a number.</div>
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
                  new bootstrap.Modal(document.getElementById('add-coupon-modal')).show()
                  </script>
                @endpush
              @endif
@endsection
