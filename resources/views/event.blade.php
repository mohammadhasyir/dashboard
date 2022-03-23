@extends('home')

@section('content')
<div class="row m-5">
    <div class="col-12 p-2">
        <button type="button" class="btn btn-success">+ NEW EVENT</button>
    </div>
    <div class="col-6 border p-2">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Sort by: Date created</a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Event</a></li>
            <li><a class="dropdown-item" href="#">Due Date</a></li>
            <li><a class="dropdown-item" href="#">Description</a></li>
        </ul>
    </div>
    <div class="col-6 border p-2">
    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Event status:All</a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">All</a></li>
            <li><a class="dropdown-item" href="#">Ongoing</a></li>
            <li><a class="dropdown-item" href="#">Done</a></li>
            <li><a class="dropdown-item" href="#">Overdue</a></li>
        </ul>
    </div>
    <table class="table border">
        <th>Event</th>
        <th>Description</th>
        <th>Status</th>
        <th>Created</th>
        <th>Due Date</th>
        <th>Action</th>
        <tr>
            <td>IT and Book Fair</td>
            <td>Description goes here</td>
            <td><span class="badge bg-primary">ONGOING</span></td>
            <td>05/07/2019</td>
            <td>09/07/2019</td>
            <td>...</td>
        </tr>
        <tr>
            <td>Blood Donation</td>
            <td>Description goes here</td>
            <td><span class="badge bg-success">DONE</span></td>
            <td>05/01/2019</td>
            <td>05/01/2019</td>
            <td>...</td>
        </tr>
        <tr>
        <tr>
            <td>Monthly Maintenance</td>
            <td>Description goes here</td>
            <td><span class="badge bg-danger">OVERDUE</span></td>
            <td>03/07/2019</td>
            <td>04/07/2019</td>
            <td>...</td>
        </tr>
        </tr>
    </table>
</div>
@endsection