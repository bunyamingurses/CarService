@extends("layouts.admin.index")
@section("content")
    @if(session("status"))
        <div class="alert alert-info"> {{ session("status") }}</div>
    @endif



    <div class="col-lg-12 card shadow mb-4">
        <h3 class=" mt-2 card-header">Galeri Fotoğraf Ekle</h3>
        <form action="{{ route("admin.gallery.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4">

                <div class="col-lg-12 row">

                    <div class="col-lg-2">
                        <label for="">Fotoğraf</label>
                    </div>
                    <div class="col-lg-10 form-group">
                        <input type="file" class="form-control" id="image[]" multiple name="image[]" aria-describedby="">
                    </div>
                </div>

                <div class="col-lg-12 row">

                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-10 form-group">
                        <button type="submit" class="btn btn-primary mt-2">Fotoğraf Ekle <span class="fa fa-plus-circle"></span></button>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Galeri Fotoğrafları</h6>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
                <div class="row">

                    @foreach($gallery as $galleryWrite)
                        <div class="col-6 col-md-3 mt-2">
                            <div class="card">
                                <img src="{{ asset("imageWebp/gallery/")."/".$galleryWrite->imageWebp }}" style="max-height: 250px;" alt="" class="card-img">
                                <div class="card-body"></div>
                                <div class="card-footer">
                                    <a class="btn btn-danger" href="{{ route("admin.gallery.destroy",["id"=>$galleryWrite->id]) }}"><span class="fa fa-times-circle"></span> Sil</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
