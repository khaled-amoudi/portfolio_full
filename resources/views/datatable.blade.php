<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Laravel Yajra Datatables Example</h2>
        <table class="table table-bordered" data-resource="khaled" id="resource_table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>project type</th>
                    <th>project name</th>
                    <th>project image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function() {
        // var resource = $('#resource_table').data('resource');
        // console.log(resource);

        var table = $('#resource_table').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{{ route('dashboard.datatable') }}",
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'project_type',
                    name: 'project_type'
                },
                {
                    data: 'project_name',
                    name: 'project_name'
                },
                {
                    data: 'project_image',
                    name: 'project_image',
                    defaultContent: 'defaultContent when = null //////////////////////'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>

</html>
