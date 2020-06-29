@extends('app')

@section('content')
<div class="row">
  <div class="col-lg-4 mx-auto">
    <h3>Registration</h3>

    <form action="/registration" method="POST" novalidate>
      @csrf
      <!-- Username -->
      <div class="form-group">
        <label for="name">name</label>
        <input 
        type="text" 
        name="name" 
        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
        value="{{ old('name') }}"
        required
        >
        @error('name')
        <div class="invalid-feedback">
          {{ $errors->first('name') }}
        </div>
      @enderror
      </div>

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

      <!-- Checkbox -->
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection