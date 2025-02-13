@extends('admin.layouts.app')

@section('title', __('admin.dashboard'))

@push('styles')
<style>
    .card-stat {
        transition: transform 0.3s ease;
    }
    .card-stat:hover {
        transform: scale(1.05);
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            {{ __('admin.welcome') }}, {{ Auth::guard('admin')->user()->name }}!
        </h1>
    </div>

    {{-- Statistics Cards --}}
    <div class="row">
        {{-- Messages Card --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow-sm h-100 py-2 card-stat">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                {{ __('admin.messages') }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $stats['messages'] }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Partners Card --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow-sm h-100 py-2 card-stat">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                {{ __('admin.partners') }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $stats['partners'] }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-building fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Services Card --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow-sm h-100 py-2 card-stat">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                {{ __('admin.services') }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $stats['services'] }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-gear fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Unread Messages Card --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow-sm h-100 py-2 card-stat">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                {{ __('admin.unread_messages') }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $stats['unread_messages'] }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-envelope-exclamation fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Content Row --}}
    <div class="row">
        {{-- Latest Messages --}}
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ __('admin.latest_messages') }}
                    </h6>
                    <a href="{{ route('admin-messages-index') }}" class="btn btn-sm btn-primary">
                        {{ __('admin.view_all') }}
                    </a>
                </div>
                <div class="card-body">
                    @if($latest_messages->count() > 0)
                        <div class="list-group">
                            @foreach($latest_messages as $message)
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">{{ $message->subject }}</h6>
                                        <small>{{ $message->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-1">{{ Str::limit($message->message, 100) }}</p>
                                    <small>{{ $message->name }} ({{ $message->email }})</small>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-muted">{{ __('admin.no_messages') }}</p>
                    @endif
                </div>
            </div>
        </div>

        {{-- Latest Partners --}}
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ __('admin.latest_partners') }}
                    </h6>
                    <a href="{{ route('admin-partners-index') }}" class="btn btn-sm btn-primary">
                        {{ __('admin.view_all') }}
                    </a>
                </div>
                <div class="card-body">
                    @if($latest_partners->count() > 0)
                        <div class="list-group">
                            @foreach($latest_partners as $partner)
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div>
                                            <img src="{{ asset('storage/' . $partner->logo) }}" 
                                                 alt="{{ $partner->name }}"
                                                 class="img-thumbnail" 
                                                 style="max-height: 50px;">
                                            <span class="ms-2">{{ $partner->name }}</span>
                                        </div>
                                        <small>{{ $partner->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-muted">{{ __('admin.no_partners') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Latest Services --}}
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ __('admin.latest_services') }}
                    </h6>
                    <a href="{{ route('admin-services-index') }}" class="btn btn-sm btn-primary">
                        {{ __('admin.view_all') }}
                    </a>
                </div>
                <div class="card-body">
                    @if($latest_services->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>{{ __('admin.icon') }}</th>
                                        <th>{{ __('admin.title') }}</th>
                                        <th>{{ __('admin.description') }}</th>
                                        <th>{{ __('admin.status') }}</th>
                                        <th>{{ __('admin.created_at') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($latest_services as $service)
                                        <tr>
                                            <td><i class="{{ $service->icon }}"></i></td>
                                            <td>{{ $service->getTitle() }}</td>
                                            <td>{{ Str::limit($service->getDescription(), 100) }}</td>
                                            <td>
                                                @if($service->is_active)
                                                    <span class="badge bg-success">
                                                        {{ __('admin.active') }}
                                                    </span>
                                                @else
                                                    <span class="badge bg-danger">
                                                        {{ __('admin.inactive') }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>{{ $service->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-center text-muted">{{ __('admin.no_services') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Activity Section --}}
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ __('admin.recent_activity') }}
                    </h6>
                </div>
                <div class="card-body">
                    @if($recent_activities->count() > 0)
                        <div class="list-group">
                            @foreach($recent_activities as $activity)
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">{{ $activity->description }}</h6>
                                        <small>{{ $activity->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-muted">{{ __('admin.no_activity') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Optional: Add any dashboard-specific JavaScript here
</script>
@endpush