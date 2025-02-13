@php
use Illuminate\Support\Facades\Storage;
@endphp

@extends('admin.layouts.app')

@section('title', __('partners.list'))

@section('content')
<div class="container-fluid">
    {{-- Page Heading --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>{{ __('partners.list') }}</h4>
        <a href="{{ route('admin-partners-create') }}" class="btn btn-primary">
            {{ __('partners.create') }}
        </a>
    </div>

    {{-- Partners Table --}}
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>{{ __('partners.image') }}</th>
                            <th>{{ __('partners.name_' . app()->getLocale()) }}</th>
                            <th>{{ __('partners.position_' . app()->getLocale()) }}</th>
                            <th>{{ __('partners.is_active') }}</th>
                            <th>{{ __('partners.order') }}</th>
                            <th>{{ __('partners.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($partners as $partner)
                        <tr>
                            <td class="text-center p-0">
                                @if($partner->image)
                                <img src="{{ Storage::url(str_replace('storage/', '', $partner->image)) }}"
                                    alt="{{ $partner->getName() }}"
                                    class="img-thumbnail" style="max-height: 50px; margin: 0; padding: 3px; border: none">
                                @else
                                <i class="bi bi-person-circle text-muted" style="font-size: 2rem;"></i>
                                @endif
                            </td>
                            <td>{{ $partner->getName() }}</td>
                            <td>{{ $partner->getDescription() }}</td>
                            <td class="text-center">
                                <span class="badge {{ $partner->is_active ? 'bg-success' : 'bg-danger' }}">
                                    {{ $partner->is_active ? __('Active') : __('Inactive') }}
                                </span>
                            </td>
                            <td class="text-center">{{ $partner->order }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin-partners-edit', $partner->id) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin-partners-delete', $partner->id) }}"
                                    method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('{{ __('partners.confirm_delete') }}')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <i class="bi bi-inbox text-muted" style="font-size: 2rem;"></i>
                                <p class="text-muted mt-2">{{ __('No partners found') }}</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            @if($partners->hasPages())
                <div class="mt-4">
                    {{ $partners->withQueryString()->links('vendor.pagination.bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection