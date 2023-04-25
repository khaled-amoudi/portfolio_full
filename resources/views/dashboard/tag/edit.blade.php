@extends('layouts.master')

@section('master')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('dashboard.tag.update', $model['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('dashboard.tag._form', [
                        'form_title' => 'Edit Tag',
                    ])

                </form>
            </div>
        </div>
    </div>
    @endsection
