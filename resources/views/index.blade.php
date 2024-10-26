@extends('layouts.app')
@section('main')
<div class="bg-white d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="row justify-content-center w-100 px-2">
            <div class="col-xl-4 col-md-8 col-sm-10 bg-white">
                  <div class="w-100">
                        <div class="login-title text-center fw-medium mb-3 text-black" style="font-size: 20px">
                              Welcome back!
                        </div>
                        <div>
                              {{-- <form method="POST" action="{{ route('login') }}"> --}}
                              <form>
                                    {{-- @csrf --}}
                                    <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" required>
                                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                    </div>
                                    <div class="mb-3 form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button class="btn text-center border-0 background-primary w-100 text-light fw-medium" type="submit">
                                          <div>Login</div>
                                    </button>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>
@endsection
