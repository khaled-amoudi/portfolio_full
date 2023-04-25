@extends('layouts.master')

@section('master')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('dashboard.author.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('dashboard.author._form', [
                        'form_title' => 'Create Author',
                    ])

                </form>
            </div>
        </div>
    </div>
@endsection
