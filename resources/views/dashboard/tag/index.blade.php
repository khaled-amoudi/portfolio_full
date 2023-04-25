@extends('layouts.master')

@section('master')

<x-BaseComponents.tabel.base-tabel :tabel_data="[
    'table_title' => 'Tags',
    'table_button_route' => 'dashboard.tag.create',
]" :ths="['#', 'Name', 'Actions']" :model="$model" :models="$models"
    :fillables="['name']"
    :actions="[
        'route_edit' => 'dashboard.tag.edit',
        'icon_class_edit' => 'bi bi-pencil-fill text-warning',

        'route_destroy' => 'dashboard.tag.destroy',
        'icon_class_destroy' => 'bi bi-trash-fill text-danger',

    ]"
    :text_filters="[['name' => 'name', 'label' => 'filter by name', 'cols' => '4']]"
    />

@endsection
