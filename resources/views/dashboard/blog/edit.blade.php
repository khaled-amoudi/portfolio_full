@extends('layouts.master')

@section('master')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('dashboard.blog.update', $model['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('dashboard.blog._form', [
                        'form_title' => 'Edit Blog',
                    ])

                </form>
            </div>
        </div>
    </div>

@endsection
