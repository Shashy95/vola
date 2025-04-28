@extends('admin.partials.master')

@section('title', 'Clients')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="card-title m-0">Clients</h4>
            <a href="{{ route('clients.create') }}" class="btn btn-primary">
                <i class="ti-plus"></i> Add New Client
            </a>
        </div>
      

        <div class="table-responsive">
            <table class="table table-striped" id="clients-table">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>
                                @if($client->logo)
                                    <img src="{{ asset($client->logo) }}" alt="Logo" width="80">
                                @else
                                <span class="badge bg-secondary">No Image</span>
                               @endif
                            </td>
                            <td>{{ $client->name }}</td>
                            
                            <td>
                                <a href="{{ route('clients.edit', $client->id) }}" class="text-primary me-3">
                                    <i class="ti-pencil fs-5"></i> </a>
                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger border-0 bg-transparent p-0">
                                        <i class="ti-trash fs-5"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#clients-table').DataTable({
            responsive: true,
        });
    });
</script>
@endsection
