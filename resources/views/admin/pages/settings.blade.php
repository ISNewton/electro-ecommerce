@extends('admin.layout.main')

@section('main')



<main id="main" class="main">

<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Settings</h1>
    
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category-modal ">Edit Settings </button type="button">
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
          <h5 class="card-title">Settings </h5>

          @php  
          $settings = DB::table('settings')->first();
          
          @endphp
          
  
          <!-- Table with stripped rows -->
          <table class="table datatable">
            
            <tbody>
                
                <tr>
                    <th scope="col">Website name</th>
                    <td>{{$settings->name}}</td>
                </tr>
                <tr>
                    <th scope="col">Logo</th>
                    <td> <img height="70px" width="150px"  src="{{asset($settings->logo)}}" > </td>
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <td>{{$settings->email}}</td>
                </tr>
                <tr>
                    <th scope="col">Phone number</th>
                    <td>{{$settings->phone}}</td>
                </tr>
                <tr>
                    <th scope="col">Address</th>
                    <td>{{$settings->address}}</td>
                </tr>

                <tr>
                    <th scope="col">Discription</th>
                    <td>{{$settings->discription}}</td>
                </tr>

                <tr>
                    <th scope="col">Shipping</th>
                    <td>${{$settings->shipping}}</td>
                </tr>

              
             
            </tbody>
          </table>
          <!-- End Table with stripped rows -->


            <!-- Table with stripped rows -->
           


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

              
                    <h5 class="modal-title">Edit Settings status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                  </div>
                  <div class="modal-body">

                  <form  class="row g-3 needs-validation" novalidate method="POST" action="{{route('update_settings')}}">
                  @csrf

                  

                  <div class="col-12">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label">Website name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="name" value="{{$settings->name}}" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter Website name.</div>
                        
                      </div>
                    </div>

                    <div class="col-12">
                        @error('logo')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label"> Logo</label>
                      <div class="input-group has-validation">
                        <input type="file" name="logo" class="form-control" id="yourUsername">
                        <div class="invalid-feedback">upload a logo.</div>
                        
                      </div>
                    </div>

                    <div class="col-12">
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label"> Emil</label>
                      <div class="input-group has-validation">
                        <input value="{{$settings->email}}" type="email" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter email.</div>
                        
                      </div>
                    </div>

                    <div class="col-12">
                        @error('phone')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label">Phone number</label>
                      <div class="input-group has-validation">
                        <input value="{{$settings->phone}}" type="string" name="phone" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter phone number.</div>
                        
                      </div>
                    </div>

                    <div class="col-12">
                        @error('address')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label">Address</label>
                      <div class="input-group has-validation">
                        <input value="{{$settings->address}}" type="text" name="address" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter address.</div>
                        
                      </div>
                    </div>

                    <div class="col-12">
                        @error('discription')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label">Discription</label>
                      <div class="input-group has-validation">
                        <input value="{{$settings->discription}}" type="text" name="discription" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter discription.</div>
                        
                      </div>
                    </div>

                    <div class="col-12">
                        @error('shipping')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      <label for="yourUsername" class="form-label">Discription</label>
                      <div class="input-group has-validation">
                        <input value="{{$settings->shipping}}" type="text" name="shipping" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Enter shipping.</div>
                        
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
</div>
<!-- End Basic Modal-->







@endsection