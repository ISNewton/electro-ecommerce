@extends('admin.layout.main')

@section('main')


<main id="main" class="main">



            @if(Session::has('message'))
               <div class="text-danger">{{Session::get('message')}}</div>
            @endif
              <div class="tab-pane  pt-3" id="profile-change-password">
                     <!-- Change Password Form -->
                      <form method="POST" action="{{url('/admin/update_password')}}">
                        @csrf
                        <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="oldpassword" type="password" class="form-control" id="currentPassword">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="confirmPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="confirmPassword" type="password" class="form-control" id="renewPassword">
                        </div>
                        </div>

                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                     </form><!-- End Change Password Form -->

                     </div>

              </div><!-- End Bordered Tabs -->


</main><!-- End #main -->


@endsection
