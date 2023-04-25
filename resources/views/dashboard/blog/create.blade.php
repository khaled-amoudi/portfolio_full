@extends('layouts.master')

@section('master')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('dashboard.blog.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('dashboard.blog._form', [
                        'form_title' => 'Create Blog',
                    ])

                </form>
            </div>
        </div>
    </div>

    @endsection
