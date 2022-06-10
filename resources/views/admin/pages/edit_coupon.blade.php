@extends('admin.layout.main')


@section('main')

              <main id="main" class="main">
                <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('coupons.update',$coupon)}}">
                  @csrf
                  @method('PUT')
                  
                  <div class="col-12">
                    @error('coupon')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <label for="yourUsername" class="form-label">Coupon code</label>
                    <div class="input-group has-validation">
                      <input type="text" value="{{$coupon->coupon}}" name="coupon" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Enter coupon code.</div>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    @error('discount')
                     <div class="text-danger">{{$message}}</div>
                    @enderror
                    <label for="discount" class="form-label">Discount</label>
                    <div class="input-group has-validation">
                      <input type="number" value="{{$coupon->discount}}" name="discount" class="form-control" id="discount" required>
                      <div class="invalid-feedback">Enter coupon discount.</div>
                      
                    </div>
                  </div>
                  
                  <div class="col-12">
                    @error('limitation')
                     <div class="text-danger">{{$message}}</div>
                    @enderror
                    <label for="limitation" class="form-label">Coupon Limitation</label>
                    <div class="input-group has-validation">
                      <input type="number" value="{{$coupon->limitation}}" name="limitation" class="form-control" id="limitation" required>
                      <div class="invalid-feedback">Enter coupon limitation.</div>
                      
                    </div>
                  </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
              </main>
@endsection