<section class="commonSection funfact">
    <div class="container">
        <div class="row">
            @foreach($counts as $count)
            <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                <div class="singlefunfact text-center">
                    <h4 data-counter="{{ $count->proyects }}" class="timer"><span class="countSpan"></span></h4>
                    <h3>Trabajos Completados</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                <div class="singlefunfact text-center">
                    <h4 data-counter="{{ $count->clients }}" class="timer"><span class="countSpan"></span></h4>
                    <h3>Clientes Satisfechos</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                <div class="singlefunfact text-center">
                    <h4 data-counter="{{ $count->coffee }}" class="timer"><span class="countSpan"></span></h4>
                    <h3>Tazas de Cafe</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 noPadding">
                <div class="singlefunfact text-center">
                    <h4 data-counter="{{ $count->building }}" class="timer"><span class="countSpan">9</span></h4>
                    <h3>Proyectos en proceso</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
