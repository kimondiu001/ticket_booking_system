@extends('layouts.main')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Tickets</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary"><span class="fas fa-share"></span> Book a Ticket</button>
                {{-- <button class="btn btn-sm btn-outline-secondary"><span class="fas fa-download"></span> Export</button> --}}
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-calendar"></span> This week tickets
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">This week</a>
                <a class="dropdown-item" href="#">Last week</a>
                <a class="dropdown-item" href="#">This month</a>
                <a class="dropdown-item" href="#">Custom range</a>
            </div>
        </div>
    </div>

    <h2>Booked tickets</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th><span class="fas fa-id-badge"></span> ID no.</th>
                    <th><span class="fas fa-user"></span> Name</th>
                    <th><span class="fas fa-envelope"></span> Email</th>
                    <th><span class="fas fa-calendar-alt"></span> Event</th>
                    <th><span class="fas fa-ticket-alt"></span> Ticket Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                </tr>
                <tr>
                    <td>1,002</td>
                    <td>amet</td>
                    <td>consectetur</td>
                    <td>adipiscing</td>
                    <td>elit</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
