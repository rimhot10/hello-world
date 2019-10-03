@extends ('layouts.app')

@section('content')
<div class = "container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header"> list kategori artikel </div>
					<div class="card-body">
						<div class="from-group row ">
<label class="col-md-4 col-form-label text-md-right">ID</label>
<label class="col-md-4 col-form-label text-md-left">{!! $KategoriArtikel->id !!}</label>
</div>
<div class="from-group row ">
<label class="col-md-4 col-form-label text-md-right">Nama</label>
<label class="col-md-4 col-form-label text-md-left">{!! $KategoriArtikel->nama !!}</label>
</div>

</div>
<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
                                <a href="{!! route('kategori_artikel.index') !!}" class="btn btn-primary">
                                    liat kembali
                                </a>
                            </div>
                        </div>
</div>
</div>
</div>
</div>
</div>

@endsection


	