@extends('layout.app')

@section('app')
<div class="row">
    <div class="col-10 mx-auto m-5">

        <div class="card">
    <div class="card-body p-4">
        <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <h5 class="mb-4">Informações do contacto</h5>
            <div class="row mb-3">
                <label for="input42" class="col-sm-3 col-form-label">Informe o nome</label>
                <div class="col-sm-9">
                    <div class="position-relative">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Informe o nome">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="input43" class="col-sm-3 col-form-label">Contacto</label>
                <div class="col-sm-9">
                    <div class="position-relative">
                        <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" id="contact" placeholder="Informe o contacto">
                        @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="input44" class="col-sm-3 col-form-label">Endereço de email</label>
                <div class="col-sm-9">
                    <div class="position-relative">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Informe o email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submeter</button>
                        
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

    </div>
</div>
@endsection