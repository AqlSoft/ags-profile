@extends('admin.layouts.app')

@section('title', __('partners.create'))

@push('styles')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
<style>
    .preview-image {
        max-width: 200px;
        max-height: 200px;
        object-fit: contain;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    {{-- Page Heading --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('partners.create') }}</h1>
        <a href="{{ route('admin-partners-index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> {{ __('Back') }}
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin-partners-store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    {{-- Name Fields --}}
                    <div class="col-md-6 mb-3">
                        <label for="name_en" class="form-label">{{ __('partners.name_en') }}</label>
                        <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                            id="name_en" name="name_en" value="{{ old('name_en') }}" required>
                        @error('name_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="name_ar" class="form-label">{{ __('partners.name_ar') }}</label>
                        <input type="text" class="form-control @error('name_ar') is-invalid @enderror"
                            id="name_ar" name="name_ar" dir="rtl" value="{{ old('name_ar') }}" required>
                        @error('name_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Position Fields --}}
                    <div class="col-md-6 mb-3">
                        <label for="position_en" class="form-label">{{ __('partners.position_en') }}</label>
                        <input type="text" class="form-control @error('position_en') is-invalid @enderror"
                            id="position_en" name="position_en" value="{{ old('position_en') }}">
                        @error('position_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="position_ar" class="form-label">{{ __('partners.position_ar') }}</label>
                        <input type="text" class="form-control @error('position_ar') is-invalid @enderror"
                            id="position_ar" name="position_ar" dir="rtl" value="{{ old('position_ar') }}">
                        @error('position_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Description Fields --}}
                    <div class="col-md-6 mb-3">
                        <label for="description_en" class="form-label">{{ __('partners.description_en') }}</label>
                        <textarea class="form-control @error('description_en') is-invalid @enderror"
                            id="description_en" name="description_en" rows="3">{{ old('description_en') }}</textarea>
                        @error('description_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="description_ar" class="form-label">{{ __('partners.description_ar') }}</label>
                        <textarea class="form-control @error('description_ar') is-invalid @enderror"
                            id="description_ar" name="description_ar" dir="rtl" rows="3">{{ old('description_ar') }}</textarea>
                        @error('description_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Contact Information --}}
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">{{ __('partners.email') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">{{ __('partners.phone') }}</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                            id="phone" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Social Media --}}
                    <div class="col-md-6 mb-3">
                        <label for="linkedin" class="form-label">{{ __('partners.linkedin') }}</label>
                        <input type="url" class="form-control @error('linkedin') is-invalid @enderror"
                            id="linkedin" name="linkedin" value="{{ old('linkedin') }}">
                        @error('linkedin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="website" class="form-label">{{ __('partners.website') }}</label>
                        <input type="url" class="form-control @error('website') is-invalid @enderror"
                            id="website" name="website" value="{{ old('website') }}">
                        @error('website')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Image Upload --}}
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">{{ __('partners.image') }}</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                            id="image" name="image" accept="image/*">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Status and Order --}}
                    <div class="col-md-3 mb-3">
                        <label for="is_active" class="form-label">{{ __('partners.is_active') }}</label>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                                {{ old('is_active', true) ? 'checked' : '' }}>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="order" class="form-label">{{ __('partners.order') }}</label>
                        <input type="number" class="form-control @error('order') is-invalid @enderror"
                            id="order" name="order" min="0" value="{{ old('order', 0) }}">
                        @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Submit Button --}}
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> {{ __('partners.save') }}
                    </button>
                    <a href="{{ route('admin-partners-index') }}" class="btn btn-secondary">
                        {{ __('partners.cancel') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script>
    // Preview image before upload
    document.getElementById('image').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const img = document.createElement('img');
            img.src = event.target.result;
            img.classList.add('preview-image', 'mt-2');

            const previewContainer = document.querySelector('.preview-image');
            if (previewContainer) {
                previewContainer.replaceWith(img);
            } else {
                e.target.parentNode.appendChild(img);
            }
        }
        reader.readAsDataURL(e.target.files[0]);
    });
</script>
@endpush