@extends('layouts.master')

@section('master')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('dashboard.author.update', $model['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('dashboard.author._form', [
                        'form_title' => 'Edit Author',
                    ])

                </form>
            </div>
        </div>
    </div>
@endsection
