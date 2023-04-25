@extends('layouts.auth-master')

@section('auth-master')
    <div class="row mt-5 pt-5">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Sign In</h6>
                        <hr>
                        <form method="POST" action="{{ route('login') }}" class="row g-3">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="text" value="admin@gmail.com" name="email" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="text" value="123456" name="password" class="form-control">
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
