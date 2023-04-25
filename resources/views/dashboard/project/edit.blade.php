@extends('layouts.master')

@section('master')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('dashboard.project.update', $model['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('dashboard.project._form', [
                        'form_title' => 'Edit Project',
                    ])

                </form>
            </div>
        </div>
    </div>

    @endsection
