@extends('admin.partials.master')

@section('title', $client->exists ? 'Edit Client' : 'Add Client')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $client->exists ? 'Edit Client' : 'Add New Client' }}</h4>

        <form action="{{ $client->exists ? route('clients.update', $client) : route('clients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($client->exists)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Client Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $client->name) }}" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="logo">Client Logo</label>
                <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" onchange="previewImage(event)">
                @error('logo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            
                @if(isset($client) && $client->logo)
                <div id="thumbnailPreview" class="mt-2">
                    <img src="{{ asset($client->logo) }}" width="120" class="img-fluid">
                </div>
            @else
                <div id="thumbnailPreview" class="mt-2"></div>
            @endif
            </div>


            <button type="submit" class="btn btn-success">{{ $client->exists ? 'Update' : 'Create' }}</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Function to preview selected image
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const previewContainer = document.getElementById('thumbnailPreview');
            previewContainer.innerHTML = '<img src="' + e.target.result + '" width="120" class="img-fluid">';
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
