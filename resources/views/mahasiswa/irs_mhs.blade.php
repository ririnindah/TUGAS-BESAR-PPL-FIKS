@extends('layout.index')
@extends('partials.navbar')
@section('container')

    {{-- breadcrumbs --}}
    <div class="col-lg-12">
        <div class="header pt-0">
            <h1 class="page-header update mt-0">
                <a href="{{ route('irs') }}">Isian Rencana Studi (IRS)</a>
            </h1>
        </div>
        {{-- path --}}
        <ol class="breadcrumb">
            <li class="active">
                <a href="{{ route('dashboard_mhs') }}" >Dashboard / </a>
                <a href="{{ route('irs') }}" style="color: dodgerblue"
                    >Isian Rencana Studi (IRS)
                </a>
            </li>
        </ol>
    </div>

    <div class="container">
        <h4>Scan IRS</h4>
        <div class="scan-irs">
            
        </div>
    </div>

    <div class="container">
        <h4>IRS Saya</h4>
    </div>

@endsection
