@extends('layouts.home_layouts')

@section('content')
    {{-- konten 1 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/environment.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="{{ route('SmartEnv') }}">
                    <h4>Smart Environment</h4>
                </a>
                <p>
                    <b>Wisata Edukasi & Edu Sampah Cipta Kerja</b>
                    <br>
                    Wadah untuk memberikan edukasi seputar operasi pengelolaan TPA sampah dan 
                    Pengendalian dan pemanfaatan Gas Methane di TPA.
                </p>
            </div>
        </div>
    </div>

    {{-- konten 2 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img\portfolio\gov.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="{{ route('SmartGov') }}">
                    <h4>Smart Governance</h4>
                </a>
                <p>
                    <b>DESAKU TUNTAS</b>
                    <br>
                    Desaku Tuntas adalah aplikasi yang memudahkan masyarakat dalam mengakses informasi dan
                    pelayanan pemerintah desa.
                </p>
            </div>
        </div>
    </div>

    {{-- konten 3 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="{{ route('SmartBrand') }}">
                    <h4>Smart Branding</h4>
                </a>
                <p>
                    <b>MATIC</b>
                    <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae quasi facilis neque, rem fuga sint quod
                    nulla, quos, voluptas magni harum? Hic vel consequuntur, nostrum eveniet suscipit asperiores corrupti
                    rerum.
                </p>
            </div>
        </div>
    </div>

    {{-- konten 4 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/eco.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="SmartEco">
                    <h4>Smart Economy</h4>
                </a>
                <p>
                    <b>E-AGRIPROP</b>
                    <br>
                    E-Agriprop adalah aplikasi yang memudahkan petani dalam mengakses informasi dan pelayanan
                    pertanian.
                </p>
            </div>
        </div>
    </div>

    {{-- konten 5 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/living.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="SmartLiv">
                    <h4>Smart Living</h4>
                </a>
                <p>
                    <b>SMART health</b>
                    <br>
                    SMART health adalah aplikasi pelayanan pada bidang
                    kesehatan yang promotif, preventif dan kegawat daruratan. 
                </p>
            </div>
        </div>
    </div>

    {{-- konten 6 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="SmartSoc">
                    <h4>Smart Society</h4>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quod vitae dolores, facere blanditiis
                    voluptas numquam aliquam aperiam consequuntur cumque ipsam quasi, in quam? Nam veritatis ex impedit
                    repellat dolores.
                </p>
            </div>
        </div>
    </div>
    </div>
@endsection
