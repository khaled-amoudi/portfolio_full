@extends('layouts.master')

@section('master')

    <x-BaseComponents.tabel.base-tabel :tabel_data="[
        'table_title' => 'Blogs',
        'table_button_route' => 'dashboard.blog.create',
    ]" :ths="['#', 'image', 'Title', 'Tags', 'Language', 'Read Time', 'Author', 'Is Active', 'Actions']" :model="$model" :models="$models"
        :fillable_images="['image']" :fillables="['title', 'language', 'read_time', 'author_name']"
        :fillable_badges="[
            'is_active' => [1 => ['Active', 'alert-success'], 0 => ['Not Active', 'alert-danger']],
        ]"
        {{-- :fillable_badges="['tags']" --}}
        :actions="[
            // 'route_show' => 'dashboard.blog.show',
            // 'icon_class_show' => 'bi bi-eye-fill text-primary',

            'route_edit' => 'dashboard.blog.edit',
            'icon_class_edit' => 'bi bi-pencil-fill text-warning',

            'route_destroy' => 'dashboard.blog.destroy',
            'icon_class_destroy' => 'bi bi-trash-fill text-danger',

        ]"
        :text_filters="[['name' => 'title', 'label' => 'filter by title', 'cols' => '4']]"
        :select_fixed_filters="[
            [
                'name' => 'is_active',
                'label' => 'Activity filter',
                'cols' => '3',
                'options' => [
                    [
                        'option_value' => '1',
                        'option_label' => 'Active',
                    ],
                    [
                        'option_value' => '0',
                        'option_label' => 'Not Active',
                    ],
                ],
            ],
        ]" />
@endsection
