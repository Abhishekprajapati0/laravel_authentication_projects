@extends('master')

@section('body')
    <section class="container">
        <div class="main">
            <h4 class="text-center mt-3 p-3">Presnol Details</h4>
            <form action="{{ url('/store') }}" method="POST">
                @csrf
                <div class="main mb-3 ">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text"  name= "name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </section>
@endsection
