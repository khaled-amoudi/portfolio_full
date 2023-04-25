@extends('layouts.master')

@section('master')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('dashboard.project.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('dashboard.project._form', [
                        'form_title' => 'Create project',
                    ])

                </form>
            </div>
        </div>
    </div>
    @endsection
