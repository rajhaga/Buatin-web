@extends('admin.layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="heading text-center mb-4">Manage Orders</h1>

    <!-- Notification Badge for Pending Orders -->
    <div class="text-right mb-3">
        <button class="btn btn-warning">
            Pending Orders <span class="badge badge-light">{{ $pendingCount }}</span>
        </button>
    </div>

    <!-- Tab Navigation for Order Status -->
    <ul class="nav nav-tabs mb-4" id="orderStatusTabs" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="true">
                Pending Orders
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="accepted-tab" data-bs-toggle="tab" data-bs-target="#accepted" type="button" role="tab" aria-controls="accepted" aria-selected="false">
                Accepted Orders
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="rejected-tab" data-bs-toggle="tab" data-bs-target="#rejected" type="button" role="tab" aria-controls="rejected" aria-selected="false">
                Rejected Orders
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">
                Payment Submitted Orders
            </button>
        </li>
    </ul>

    <!-- Tab Content for Each Status -->
    <div class="tab-content" id="orderStatusTabContent">
        <!-- Pending Orders Tab -->
        <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
            <h3 class="text-center my-4">Pending Orders</h3>
            <div class="row">
                @foreach($orders->where('status', 'pending') as $order)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title">{{ $order->package->name }}</h5>
                                <p><strong>User:</strong> {{ $order->user->name }}</p>
                                <p><strong>Location:</strong> {{ $order->location }}</p>
                                <p><strong>Description:</strong> {{ $order->description }}</p>
                                <p><strong>Status:</strong> <span class="badge bg-warning text-dark">{{ ucfirst($order->status) }}</span></p>

                                <!-- Approve & Reject Buttons -->
                                <form action="{{ route('admin.orders.updateStatus', ['id' => $order->id, 'status' => 'accepted']) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                </form>

                                <form action="{{ route('admin.orders.updateStatus', ['id' => $order->id, 'status' => 'rejected']) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Accepted Orders Tab -->
        <div class="tab-pane fade" id="accepted" role="tabpanel" aria-labelledby="accepted-tab">
            <h3 class="text-center my-4">Accepted Orders</h3>
            <div class="row">
                @foreach($orders->where('status', 'accepted') as $order)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title">{{ $order->package->name }}</h5>
                                <p><strong>User:</strong> {{ $order->user->name }}</p>
                                <p><strong>Location:</strong> {{ $order->location }}</p>
                                <p><strong>Description:</strong> {{ $order->description }}</p>
                                <p><strong>Status:</strong> <span class="badge bg-success">{{ ucfirst($order->status) }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Rejected Orders Tab -->
        <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
            <h3 class="text-center my-4">Rejected Orders</h3>
            <div class="row">
                @foreach($orders->where('status', 'rejected') as $order)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title">{{ $order->package->name }}</h5>
                                <p><strong>User:</strong> {{ $order->user->name }}</p>
                                <p><strong>Location:</strong> {{ $order->location }}</p>
                                <p><strong>Description:</strong> {{ $order->description }}</p>
                                <p><strong>Status:</strong> <span class="badge bg-danger">{{ ucfirst($order->status) }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Payment Submitted Orders Tab -->
        <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
            <h3 class="text-center my-4">Payment Submitted Orders</h3>
            <div class="row">
                @foreach($orders->whereNotNull('proof') as $order)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title">{{ $order->package->name }}</h5>
                                <p><strong>User:</strong> {{ $order->user->name }}</p>
                                <p><strong>Location:</strong> {{ $order->location }}</p>
                                <p><strong>Description:</strong> {{ $order->description }}</p>
                                <p><strong>Status:</strong> <span class="badge bg-info">Payment Submitted</span></p>
                                <p><strong>Proof:</strong> 
                                    <a href="{{ asset('uploads/' . $order->proof) }}" target="_blank" class="btn btn-primary btn-sm">View Proof</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Bootstrap tabs
        var triggerTabList = [].slice.call(document.querySelectorAll('#orderStatusTabs button'))
        triggerTabList.forEach(function(triggerEl) {
            var tabTrigger = new bootstrap.Tab(triggerEl)
            triggerEl.addEventListener('click', function(event) {
                event.preventDefault()
                tabTrigger.show()
            })
        })
    });
</script>
@endpush

@endsection