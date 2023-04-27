@extends('layouts.master')

@section('master')
    <x-BaseComponents.tabel.base-tabel
        :tabel_data="[
            'table_title' => 'projects',
            'table_button_route' => 'dashboard.project.create']"

        :ths="['#', 'Image', 'Project Type', 'Name', 'Order Number', 'Status', 'Actions']"

        :model="$model"
        :models="$models"
        :fillable_images="['project_image']"
        :fillables="['project_type', 'project_name', 'order_number']"
        :fillable_badges="[
            'is_active' => [1 => ['Active', 'alert-success'], 0 => ['Not Active', 'alert-danger']]
        ]"


        :actions="[
            'route_show' => 'dashboard.project.show',
            'icon_class_show' => 'bi bi-eye-fill text-primary',

            'route_edit' => 'dashboard.project.edit',
            'icon_class_edit' => 'bi bi-pencil-fill text-warning',

            'route_destroy' => 'dashboard.project.destroy',
            'icon_class_destroy' => 'bi bi-trash-fill text-danger',
        ]"

        :text_filters="[
            ['name' => 'name',           'label' => 'filter by name',         'cols' => '4'],
        ]"

        :select_fixed_filters="[
            [
                'name' => 'project_type',
                'label' => 'Project Type',
                'cols' => '3',
                'options' => [
                    [
                        'option_value' => 'frontend',
                        'option_label' => 'Front-End',
                    ],
                    [
                        'option_value' => 'backend',
                        'option_label' => 'Back-End',
                    ],
                ]
            ],
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
                ]
            ],
        ]"
    />

    @endsection
