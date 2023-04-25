@extends('layouts.master')

@section('master')


    <x-BaseComponents.tabel.base-tabel :tabel_data="[
        'table_title' => 'Authors',
        'table_button_route' => 'dashboard.author.create',
    ]" :ths="['#', 'Avatar', 'Name', 'Socials', 'Actions']" :model="$model" :models="$models"
        :fillable_images="['avatar']" :fillables="['name']"
        :actions="[
            'route_edit' => 'dashboard.author.edit',
            'icon_class_edit' => 'bi bi-pencil-fill text-warning',

            'route_destroy' => 'dashboard.author.destroy',
            'icon_class_destroy' => 'bi bi-trash-fill text-danger',

        ]"
        :text_filters="[['name' => 'name', 'label' => 'filter by name', 'cols' => '4']]"
        />
@endsection
