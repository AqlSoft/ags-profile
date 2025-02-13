@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.messages') }}
        </h2>
        <a href="{{ route('admin-messages-create') }}" class="btn btn-primary">
            {{ __('messages.add_message') }}
        </a>
    </div>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <table class="table table-striped table-hover">
                <thead class="table-light">
                    <tr>
                        <th>{{ __('messages.name') }}</th>
                        <th>{{ __('messages.email') }}</th>
                        <th>{{ __('messages.subject') }}</th>
                        <th>{{ __('messages.message') }}</th>
                        <th>{{ __('messages.date') }}</th>
                        <th>{{ __('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ Str::limit($message->message, 50) }}</td>
                        <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button onclick="showMessage('{{ $message->id }}')"
                                    class="btn btn-sm btn-info me-2">
                                    {{ __('View') }}
                                </button>
                                <form action="{{ route('admin-messages-delete', $message->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('{{ __('Are you sure you want to delete this message?') }}')">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            {{ __('messages.no_messages') }}
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            @if(!$messages->isEmpty())
            <div class="d-flex justify-content-center">
                {{ $messages->links('pagination::bootstrap-5') }}
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">{{ __('Message Details') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <strong>{{ __('messages.name') }}:</strong> <span id="modalName"></span>
                </div>
                <div class="mb-3">
                    <strong>{{ __('messages.email') }}:</strong> <span id="modalEmail"></span>
                </div>
                <div class="mb-3">
                    <strong>{{ __('messages.subject') }}:</strong> <span id="modalSubject"></span>
                </div>
                <div class="mb-3">
                    <strong>{{ __('messages.message') }}:</strong>
                    <p id="modalMessage" class="mt-2"></p>
                </div>
                <div class="mb-3">
                    <strong>{{ __('messages.date') }}:</strong> <span id="modalDate"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function showMessage(id) {
        fetch(`/admin/messages/${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('modalName').textContent = data.name;
                document.getElementById('modalEmail').textContent = data.email;
                document.getElementById('modalSubject').textContent = data.subject;
                document.getElementById('modalMessage').textContent = data.message;
                document.getElementById('modalDate').textContent = new Date(data.created_at).toLocaleString();

                const modal = new bootstrap.Modal(document.getElementById('messageModal'));
                modal.show();
            })
            .catch(error => console.error('Error:', error));
    }
</script>
@endpush