{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permission</title>
</head>
<body> --}}
    @extends('admin.layout')

    @section('admin')
        
    <style>
        table.blueTable {
            border: 1px solid #1C6;
            background-color: #EEE;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        table.blueTable td, table.blueTable th {
            border: 1px solid #AAA;
            padding: 3px 2px;
        }
        table.blueTable tbody td {
            font-size: 13px;
        }
        table.blueTable tr:nth-child(even) {
            background: #D0E4F5;
        }
        table.blueTable thead {
            background: #1C6;
            background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6 100%);
            background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6 100%);
            background: linear-gradient(top bottom, #5592bb 0%, #327cad 66%, #1C6 100%);
            border-bottom: 2px solid #444;
        }
        table.blueTable thead th {
            font-size: 15px;
            font-weight: bold;
            color: #FFF;
            border-left: 2px solid #D0E4F5;
        }

        table.blueTable thead th:first-child{
            border-left:none;
        }
        table.blueTable tfoot {
            font-size: 14px;
            font-weight: bold;
            color: #FFF;
            background: #D0E4F5;
            background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #d0e4f5 100%);
            background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #d0e4f5 100%);
            background: linear-gradient(top bottom, #dcebf7 0%, #d4e6f6 66%, #d0e4f5 100%);
            border-bottom: 2px solid #444;
        }

        table.blueTable tfoot td {
            font-size: 14px;
        }
        table.blueTable tfoot .links a {
            display: inline-block;
            background: #1c6ea4;
            color: #FFF;
            padding: 2px 8px;
            border-radius: 5px;
        }
        .text-center {
            text-align: center;
        }
    </style>
<h5 class="font-weight-bold text-uppercase text-center mt-5">Assignement Permission</h5>
                <table class="blueTable mt-5">
                    <thead>
                        <tr>
                        <th>Role</th>
                        <th>Page</th>
                        <th class="text-center">Creation</th>
                        <th class="text-center">Lecture</th>
                        <th class="text-center">Modifier</th>
                        <th class="text-center">supprimer</th>
                        <th class="text-center">Imprimer</th>
                        <th class="text-center">Export</th>
                        <th class="text-center">Approve</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Admin</td>
                            <td>Form</td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Admin" data-key="create" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Admin" data-key="read" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Admin" data-key="update" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Admin" data-key="delete" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Admin" data-key="print" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Admin" data-key="export" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Admin" data-key="approve" name="" id=""><br></td>
                        </tr>
                        <tr>
                            <td>Officer</td>
                            <td>Form</td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Officer" data-key="create" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Officer" data-key="read" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Officer" data-key="update" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Officer" data-key="delete" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Officer" data-key="print" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Officer" data-key="export" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Officer" data-key="approve" name="" id=""><br></td>
                        </tr>
                        <tr>
                            <td>Teacher</td>
                            <td>Form</td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Teacher" data-key="create" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Teacher" data-key="read" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Teacher" data-key="update" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Teacher" data-key="delete" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Teacher" data-key="print" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Teacher" data-key="export" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Teacher" data-key="approve" name="" id=""><br></td>
                        </tr>
                        <tr>
                            <td>student</td>
                            <td>Form</td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Student" data-key="create" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Student" data-key="read" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Student" data-key="update" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Student" data-key="delete" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Student" data-key="print" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Student" data-key="export" name="" id=""><br></td>
                            <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-role="Student" data-key="approve" name="" id=""><br></td>
                        </tr>
                    </tbody>

                </table>

            {{-- <script src="{{ url('/js/app.js') }}"></script> --}}
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script  type="text/javascript">
                $(document).ready(function(){
                    $(document).on('click', '.role-permission', function(){
                        var roleName = $(this).attr('data-role');
                        var page = $(this).attr('data-page');
                        var key = $(this).attr('data-key');
                        var val = 0;
                        if($(this).is(':checked')){ val = 1; }
                        $.ajax({
                            type: "post",
                            url: "{{ url('/permission') }}",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                role: roleName,
                                page: page,
                                key: key,
                                value: val
                            },
                            success: function(){
                                console.log('Assigned - ' + key + ' = ' + val + ' - to ' + roleName);
                            },
                            error: function(err){
                                console.log(err);
                            }
                        });
                    });
                });
            </script>


@endsection


