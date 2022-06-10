@extends('admin.layout.main')


@section('main')

              <main id="main" class="main">
                <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('sections.update',$section)}}">
                  @csrf
                  @method('PUT')
                  <div class="col-12">
                  @error('section_name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    <label for="yourUsername" class="form-label">Section name</label>
                    <div class="input-group has-validation">
                      <input type="text" value="{{$section->section_name}}" name="section_name" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Enter section name.</div>
                      
                    </div>
                  </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
              </main>


@endsection