@extends('app')

@section('content')
<div class="row">
  <div class="col-lg-4 mx-auto">
    <h3>Login</h3>

    <form action="/login" method="POST" novalidate>
      @csrf

      <!-- Email -->
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input 
          type="email"
          name="email"
          class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
          value="{{ old('email') }}"
          required
        >
        @error('email')
          <div class="invalid-feedback">
           {{ $errors->first('email') }}
          </div>
        @enderror
      </div>

      <!-- Password -->
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input 
          type="password" 
          name="password" 
          class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
          required
          >
        @error('password')
          <div class="invalid-feedback">
            {{ $errors->first('password') }}
          </div>
        @enderror
      </div>
  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection