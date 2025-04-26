@extends('admin.partials.master')

@section('title', 'Hero')

@section('content')
<div class="row">
<div class="col-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Update Hero Video</h4>

<form class="forms-sample" action="{{ route('hero.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $video->id ?? '' }}">

    {{-- Title Field --}}
    <div class="form-group">
        <label for="exampleInputName1">Title</label>
        <input type="text" 
               name="title" 
               value="{{ old('title', $video->title ?? '') }}" 
               class="form-control @error('title') is-invalid @enderror" 
               id="exampleInputName1" 
               placeholder="Title">
               
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    
    {{-- Video Upload Field --}}
    <div class="form-group">
        <label>Upload Video</label>
        <input type="file" 
               name="video" 
               class="file-upload-default @error('video') is-invalid @enderror" 
               id="videoInput"
               style="display: none;">
        
        <div class="input-group col-xs-12 d-flex align-items-center">
            <input type="text" 
                   class="form-control file-upload-info" 
                   id="videoFilename" 
                   disabled 
                   placeholder="Upload Video">
            <span class="input-group-append ms-2">
                <button class="file-upload-browse btn btn-primary" type="button" id="uploadButton">Upload</button>
            </span>
        </div>

        @error('video')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror

        {{-- Instant Video Preview --}}
        <div id="videoPreviewContainer" class="mt-2" style="display: none;">
            <video id="videoPreview" controls width="300" class="mb-2">
                <source src="" id="previewSource">
            </video>
        </div>

        @if($video && $video->video_path)
            <video controls width="300" class="mb-2 mt-2">
                <source src="{{ asset($video->video_path) }}" type="video/mp4">
            </video>
        @endif
    </div>
    
    <button type="submit" class="btn btn-primary me-2">Submit</button>
</form>


</div>
</div>
</div>
</div>   
@endsection

@section('scripts')
<script>
    document.getElementById('uploadButton').addEventListener('click', function() {
        document.getElementById('videoInput').click();
    });
    
    document.getElementById('videoInput').addEventListener('change', function() {
        let filename = this.files[0] ? this.files[0].name : '';
        document.getElementById('videoFilename').value = filename;
    
        // Show the preview container and video
        if (this.files[0]) {
            let file = this.files[0];
            let reader = new FileReader();
    
            reader.onload = function(e) {
                // Set the video source to the selected file
                let videoElement = document.getElementById('videoPreview');
                videoElement.style.display = 'block'; // Show video preview
                document.getElementById('previewSource').src = e.target.result;
                videoElement.load();
            }
    
            reader.readAsDataURL(file);
            document.getElementById('videoPreviewContainer').style.display = 'block';
        }
    });
</script>

@endsection