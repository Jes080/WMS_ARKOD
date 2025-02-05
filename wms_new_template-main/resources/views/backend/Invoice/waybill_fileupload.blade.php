@extends('backend.layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Upload Files</title>

<!-- Include necessary scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h4 class="page-title">Data Tables</h4>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL::to('/home') }}"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Upload Files</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    @if(session('success'))
        <div id="successAlert" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Files</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" id="waybill_id" value="{{ $waybillId }}">
                    <div id="dropzoneArea" class="dropzone">
                        <div class="dz-message" data-dz-message>
                             <span>Drag and drop files here or click to upload</span>
                        </div>
                    </div>
                    <button id="uploadButton" type="button" class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
<script>
    Dropzone.options.dropzoneArea = {
    url: "{{ route('waybills.uploadFiles') }}", // Define upload endpoint
    paramName: "files", // The name of the file input (note the array syntax)
    maxFilesize: 40, // Maximum file size in MB
    acceptedFiles: ".jpg,.png,.pdf,.docx,.jpeg", // Define accepted file types
    addRemoveLinks: true,
    autoProcessQueue: false, // Prevent auto-upload when files are added
    uploadMultiple: true, // Enable multiple file uploads
    parallelUploads: 10, // Allow processing 10 files at once
    clickable: '#dropzoneArea', // Ensures only the area is clickable, not the entire form
    maxFiles: null, // Set to null for unlimited uploads
    headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}" // CSRF token for security
    },
    init: function() {
        const myDropzone = this;

        // Attach waybill_id to the request
        this.on("sending", function(file, xhr, formData) {
            const waybillId = document.getElementById("waybill_id").value;
            formData.append("waybill_id", waybillId); // Pass waybill_id dynamically
        });

        this.on("addedfile", function(file) {
            console.log("File added:", file);
        });

        this.on("success", function(file, response) {
            console.log("File uploaded successfully");
        });

        this.on("error", function(file, errorMessage) {
            console.log("Error uploading file:", errorMessage);
        });

        // Start processing the queue manually
        document.getElementById("uploadButton").addEventListener("click", function() {
            myDropzone.processQueue();
            window.location.href = "{{ route('waybills.index') }}";
        });
    }
};
</script>

@endsection

@section('page content overlay')
    <!-- Page Content overlay -->
    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

    <!-- Deposito Admin App -->
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/pages/data-table.js') }}"></script>
@endsection
