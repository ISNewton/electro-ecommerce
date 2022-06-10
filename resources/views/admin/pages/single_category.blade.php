@extends('admin.layout.main')

@section('main')



<main id="main" class="main">
  <pre>
  
  </pre>
<div class="pagetitle">
  <div class="d-flex justify-content-between">
    <h1>Products in  {{$category->category_name}} category</h1>
    </div>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Products </h5>


          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">subcategory tumbnail</th>
                <th scope="col">subcategory name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($category->subcategories as $subcategory)
              <tr>
                <th scope="row">{{$subcategory->id}}</th>
                <td><img width="100px" height="100px" src="{{asset($subcategory->thumbnail)}}" alt=""></td>
                <td>{{$subcategory->subcategory_name}}</td>
                <td>
                <a href="{{route('subcategories.show',$subcategory)}}" class="btn btn-primary">Visit</a>
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




@endsection