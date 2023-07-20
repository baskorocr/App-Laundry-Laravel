@extends('layouts.slide')

@section('contents')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8 offset-2 mt-5">
<div class="card">
<div class="card-header bg-info">
<h6 class="text-white">Tambah Informasi</h6>
</div>
<div class="card-body">
<form method="post" action="{{ route('infoPosts') }}" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label>Judul</label>
<input type="text" name="title" class="form-control"/>
</div>  
<div class="form-group">
<label><strong>Informasi :</strong></label>
<textarea class="form-control" name="summernote" id="summernote"></textarea>
</div>
<div class="form-group text-center">
<button type="submit" class="btn btn-success btn-sm">Save</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>
</body>


        
        
        
        


@endsection