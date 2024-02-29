@extends('layouts.app')
@section('content')
<main>

    <section class="e">
        <div class="panel1">
            ADSO FICHA 2559637
        </div>
    </section>

    <section class="f">
        <div class="panel2">
            <i class="fa-solid fa-circle-arrow-left fa-2xs" style="color: #ffffff;"></i>
            <a href="{{route('datasheets.index')}}" class="back">Regresar</a>
        </div>
    </section>

    <section class="g">
        <div class="panel3">
            <a href="../html/asistencia.html">Asistencia</a>
        </div>
    </section>
<br>
    <section class="h">
        <div class="panel4">
            <a href="../html/horario.html">Horario</a>
        </div>
    </section>
    <br>

    <section class="h">
        <div class="panel4">
            <a href="../html/aprendices.html">Aprendices</a>
        </div>
    </section>
    <br>

    <section class="h">
        <div class="panel4">
            <a href="../html/instructores.html"> Instructores</a>
        </div>
    </section>
    <br>

    <section class="h">
        <div class="panel4">
            <a href="../html/competencias.html">Competencias</a>
        </div>
    </section>
    <br>

    <section class="h">
        <div class="panel4">
            <a href="../html/resultados.html">Resultados</a>
        </div>
    </section>
    <br>

    <section class="h">
        <div class="panel4">
            <a href="../html/seguimiento.html">Seguimiento</a>
        </div>
    </section>
<!--  -->
<section>
<button id="scrollUpBtn" class="bsb">Subir</button>
<button id="scrollDownBtn">Bajar</button>

<script>
    document.getElementById("scrollUpBtn").addEventListener("click", function () {
    scrollToTop(2500); // Duración de 1000ms (1 segundo)
    });

    document.getElementById("scrollDownBtn").addEventListener("click", function () {
    scrollToBottom(2500); // Duración de 1000ms (1 segundo)
    });

    function scrollToTop(duration) {
    const start = window.pageYOffset;
    const distance = 0 - start;
    const startTime = performance.now();

    function scrollStep(timestamp) {
    const currentTime = timestamp || performance.now();
    const elapsedTime = currentTime - startTime;
    const scrollTo = easeInOutQuad(elapsedTime, start, distance, duration);
    window.scrollTo(0, scrollTo);

    if (elapsedTime < duration) {
    window.requestAnimationFrame(scrollStep);
    }
    }

    function easeInOutQuad(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
    }

    window.requestAnimationFrame(scrollStep);
    }

    function scrollToBottom(duration) {
    const start = window.pageYOffset;
    const distance = document.body.offsetHeight - start;
    const startTime = performance.now();

    function scrollStep(timestamp) {
    const currentTime = timestamp || performance.now();
    const elapsedTime = currentTime - startTime;
    const scrollTo = easeInOutQuad(elapsedTime, start, distance, duration);
    window.scrollTo(0, scrollTo);

    if (elapsedTime < duration) {
    window.requestAnimationFrame(scrollStep);
    }
    }

    function easeInOutQuad(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
    }

    window.requestAnimationFrame(scrollStep);
    }



</script>
</section>

</main>
@endsection
