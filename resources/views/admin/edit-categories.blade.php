@extends('layouts.app_admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-5 d-inline">Edit Categories</h5>
                        <form method="POST" action="{{ route('update.categories', $category->id ) }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Category input -->
                            <div class="form-outline mb-4 mt-4">
                                <input type="text" name="name" value="{{ $category->name }}" id="form2Example1" class="form-control"
                                    placeholder="Category Name" />

                            </div>
                            {{-- error alert --}}
                            @if ($errors->has('name'))
                                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                            @endif

                            <!-- Submit button -->
                            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Update</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
