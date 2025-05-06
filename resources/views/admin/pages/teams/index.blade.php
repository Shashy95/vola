@extends('admin.partials.master')

@section('title', 'Teams')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="card-title m-0">Teams</h4>
            <a href="{{ route('teams.create') }}" class="btn btn-primary">
                <i class="ti-plus"></i> Add Team Member
            </a>
        </div>
      

        <div class="table-responsive">
            <table class="table table-striped" id="teams-table">
                <thead>
                    <tr>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <td>
                                @if($team->photo)
                                    <img src="{{ asset($team->photo) }}" alt="Logo" width="80">
                                @else
                                <span class="badge bg-secondary">No Image</span>
                               @endif
                            </td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->position }}</td>
                            
                            <td>
                                <a href="{{ route('teams.edit', $team->id) }}" class="text-primary me-3">
                                    <i class="ti-pencil fs-5"></i> </a>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline-block;" class="delete-form">
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
        $('#teams-table').DataTable({
            responsive: true,
        });
    });
</script>
@endsection
