@extends('admin.partials.master')

@section('title', 'Films')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="card-title m-0">Films</h4>
            <a href="{{ route('films.create') }}" class="btn btn-primary">
                <i class="ti-plus"></i> Add New Film
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped" id="films-table">
                <thead>
                    <tr>
                        <th width="100">Thumbnail</th>
                        <th>Title</th>
                        <th>Video URL</th>
                        <th width="150">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($films as $film)
                    <tr>
                        <td>
                            @if($film->thumbnail)
                                <img src="{{ asset($film->thumbnail) }}" alt="{{ $film->title }}" class="img-thumbnail" width="80"
                                style="width: 50px;height:50px;">
                            @else
                                <span class="badge bg-secondary">No Image</span>
                            @endif
                        </td>
                        <td>{{ $film->title }}</td>
                        <td>
                            @if($film->video_path)
                                <a href="{{ asset($film->video_path) }}" target="_blank">View Link</a>
                            @else
                                <span class="badge bg-secondary">No Link</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('films.edit', $film->id) }}" class="text-primary me-3">
                                <i class="ti-pencil fs-5"></i> 
                            </a>
                            
                            <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline-block;" class="delete-form">
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
        $('#films-table').DataTable({
            responsive: true,
        });      
    });
</script>
@endsection