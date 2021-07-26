@extends('layout.adminlayout')
@section('content')
<?php $no = 1; ?>
<div class="container-fluid">
    <div class="container-fluid" id="dt">
        <div class="usertable">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Item no.</th>
                            
                            <th scope="col">Customer Id</th>
                            <th scope="col">Customer Frist name</th>
                            <th scope="col">Customer Last name</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Customer Phone</th>
                            <th scope="col">Customer Address</th>
                            <th scope="col">Customer Address2</th>
                            <th scope="col">Customer City</th>
                            <th scope="col">Customer Distric</th>
                            <th scope="col">Customer Zip/Postcode</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($res as $item)
                        <th scope="row">
                            {{ $no }}
                        </th>
                        <td>
                            {{ $item->id }}
                        </td>
                        <td>
                            {{ $item->frist_name }}
                        </td>
                        <td>
                            {{ $item->last_name }}
                        </td>
                        <td>
                            {{ $item->email }}
                        </td>
                        <td>
                            {{ $item->phone }}
                        </td>
                        <td>
                            {{ $item->address }}
                        </td>
                        <td>
                            {{ $item->address2 }}
                        </td>
                        <td>
                            {{ $item->city }}
                        </td>
                        <td>
                            {{ $item->district }}
                        </td>
                        <td>
                            {{ $item->zip }}
                        </td>
                        <td>
                            {{ $item->date }}
                        </td>
                        @endforeach
                       
                    </tr>
                    <?php $no++;
                    ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection