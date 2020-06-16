
<section class="commonSection client">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="sub_title">Nuestros Clientes</h4>
                <h2 class="sec_title">Ellos confian en nosotros</h2>
                <p class="sec_desc">
                    Grandes, medianas y pequeñas empresas, han solicitado nuestros servicios, siendo nuestros clientes la mejor garantía de nuestra profesionalidad.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="client_slider">
                    @foreach($companies as $company)
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ url($company->image) }}" alt="{{ $company->description }}"/>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
