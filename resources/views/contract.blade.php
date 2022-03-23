@extends('home')

@section('content')
<div class="row m-5 border">
    <div class="col">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Vendor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contract</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Payment</a>
        </li>
    </ul>
    </div>
    <div class="container-fluid ">
    <div class="row m-3">
        <div class="col-4 p-4">
            <strong>Vendor Information</strong>
            <form action="#" class="row g-3">
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Company Name">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="ROB Number">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="GST Number">
                </div>
                <div class="col-12 pt-5">
                    <strong>Address</strong>
                    <input type="text" class="form-control" placeholder="Address 1">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Address 2">
                </div>
                <div class="col-7">
                    <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="Zip Code">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="State">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Country">
                </div>
                <div class="d-grid gap-2 pt-5">
                    <button type="submit" class="btn btn-success">SAVE CHANGES</button>
                </div>
            </form>
        </div>
        <div class="col-8 p-4">
            <strong>Contacts</strong>
            <table class="table">
                <th>Contact Name</th>
                <th>Email</th>
                <th colspan=3>Phone</th>
                <tr>
                    <td>Name1</td>
                    <td>name1@email.com</td>
                    <td>012-34567890</td>
                    <td><i class="bi bi-pencil-fill" style="margin:10px"></i><i class="bi bi-trash-fill"></i></td>
                </tr>
                <tr>
                    <td>Name2</td>
                    <td>name2@email.com</td>
                    <td>012-34567890</td>
                    <td><i class="bi bi-pencil-fill" style="margin:10px"></i><i class="bi bi-trash-fill"></i></td>
                </tr>  
            </table>
            <a href="#" style="color:grey"><i class="bi bi-plus-circle-fill"></i> Add Contact</a>
        </div>
    </div>
</div>
</div>


@endsection