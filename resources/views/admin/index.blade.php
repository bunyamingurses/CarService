@extends("layouts.admin.index")
@section("style")
    <link href="{{ asset("assets/adminAssets/vendor/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet">
@endsection

@section("content")

    @if(session("status"))
        <div class="alert alert-info"> {{ session("status") }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">İletişim Tablosu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="carouselTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>E-Posta</th>
                        <th>Konu</th>
                        <th>Mesaj</th>
                        <th>Eklenme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>E-Posta</th>
                        <th>Konu</th>
                        <th>Mesaj</th>
                        <th>Eklenme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>

                    </tfoot>
                    <tbody>

                    @foreach($contact as $contactWrite)
                        <tr>
                            <td>{{ $contactWrite->name }}</td>
                            <td>{{ $contactWrite->email }}</td>
                            <td>{{ $contactWrite->subject }}</td>
                            <td>{{ $contactWrite->message }}</td>
                            <td>{{ $contactWrite->created_at }}</td>
                            <td>
                                <a href="{{ route("admin.contactDestroy",["id"=>$contactWrite->id]) }}" class="btn btn-danger"><span class="fa fa-trash-alt"></span></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section("script")
    <!-- Page level plugins -->
    <script src="{{ asset("assets/adminAssets/vendor/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/adminAssets/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>
    <script>
        $("#carouselTable").dataTable()
    </script>
@endsection
