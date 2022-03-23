@extends('home')

@section('content')
<div class="row m-5">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Contracts</h5>
                    <div class="row dashboard-box">
                        <div class="col">
                            <h2>2</h2>
                            <span>Active</span>
                        </div>
                        <div class="col border-start">
                            <h2>1</h2>
                            <span style="color:red">Expired</span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Payment</h5>
                    <div class="dashboard-box">
                        <span>Paid</span>
                        <h2>RM 10,000.00</h2>
                        <small style="color:red">To be paid:RM 9,000.00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <div class="row dashboard-box">
                        <div class="col">
                            <h2>2</h2>
                            <span>Done</span>
                        </div>
                        <div class="col border-start">
                            <h2>1</h2>
                            <span style="color:red">Overdue</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Complaints</h5>
                    <div class="row dashboard-box">
                        <div class="col">
                            <h2>2</h2>
                            <span>Resolved</span>
                        </div>
                        <div class="col border-start">
                            <h2>1</h2>
                            <span>Ongoing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-5">
        <div class="col">
            <h3>Latest Contract</h3>
            <a href="#" style="float:right">See All Contracts</a>
            <table class="table" border=1>
                <tr>
                    <th>Project</th>
                    <th>Status</th>
                    <th colspan=2>Created</th>
                </tr>
                <tr>
                    <td>Web UI Design</td>
                    <td><span class="badge bg-success">ACTIVE</span></td>
                    <td>05/07/2019</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>Wordpres Data Migration</td>
                    <td><span class="badge bg-success">ACTIVE</span></td>
                    <td>01/01/2019</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>Server Maintenance + Hosting</td>
                    <td><span class="badge bg-danger">EXPIRED</span></td>
                    <td>05/07/2018</td>
                    <td>...</td>
                </tr>
            </table>
        </div>
        <div class="col">
            <h3>Events & Reminders</h3>
            <a href="#" style="float:right">See All Events</a>
            <table class="table" border=1>
                <tr>
                    <th>Event</th>
                    <th>Status</th>
                    <th colspan=2>Created</th>
                </tr>
                <tr>
                    <td>IT and Book Fair</td>
                    <td><span class="badge bg-success">ACTIVE</span></td>
                    <td>05/07/2019</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>Blood Donation</td>
                    <td><span class="badge bg-success">ACTIVE</span></td>
                    <td>01/01/2019</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>Monthly Maintenance</td>
                    <td><span class="badge bg-danger">EXPIRED</span></td>
                    <td>05/07/2018</td>
                    <td>...</td>
                </tr>
            </table>
        </div>
</div>
@endsection