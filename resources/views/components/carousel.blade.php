<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
 <link rel="stylesheet" href="{{asset('css/script.css')}}">
</head>
<body class="bg-white text-gray-900 flex items-center justify-center min-h-screen p-6">

  <section aria-label="Client reviews" class="w-full max-w-5xl mt-6">
    <h1 class="text-2xl font-semibold mb-4 text-center">What clients say about Homelinkers</h1>

    <!-- Carousel Frame -->
    <div class="relative overflow-hidden bg-white p-4 rounded-xl"
         tabindex="0"
         aria-roledescription="carousel"
         aria-label="Client reviews carousel">

      <!-- Track -->
      <div class="flex gap-10"
           onmouseenter="this.querySelector('.animate-scroll')?.style.animationPlayState='paused'"
           onmouseleave="this.querySelector('.animate-scroll')?.style.animationPlayState='running'">

        <!-- Scrolling Content -->
        <div class="flex animate-scroll" style="min-width:200%">

          <!-- COPY A -->
          <article class="w-80 flex-shrink-0 bg-gray-300 rounded-lg p-5 mx-3 shadow-sm">
            <p class="text-sm mb-3">“Homelinkers made selling our home effortless — great support.”</p>
            <div class="text-xs font-medium text-gray-600">— Aisha K., Lekki</div>
          </article>

          <article class="w-80 flex-shrink-0 bg-gray-300 rounded-lg mx-3 p-5 shadow-sm">
            <p class="text-sm mb-3">“Excellent listings. Found our apartment in days!”</p>
            <div class="text-xs font-medium text-gray-600">— Emeka O., Gwarinpa</div>
          </article>

          <article class="w-80 flex-shrink-0 bg-gray-300 rounded-lg mx-3 p-5 shadow-sm">
            <p class="text-sm mb-3">“Responsive team and great communication.”</p>
            <div class="text-xs font-medium text-gray-600">— Chidinma N., Yaba</div>
          </article>

          <article class="w-80 flex-shrink-0 bg-gray-300 rounded-lg mx-3 p-5 shadow-sm">
            <p class="text-sm mb-3">“Marketing tools are top-notch and easy to use.”</p>
            <div class="text-xs font-medium text-gray-600">— Musa A., Asokoro</div>
          </article>

          <!-- COPY B (duplicate for seamless scroll) -->
          <article class="w-80 flex-shrink-0 bg-gray-300 rounded-lg mx-3 p-5 shadow-sm">
            <p class="text-sm mb-3">“Homelinkers made selling our home effortless — great support.”</p>
            <div class="text-xs font-medium text-gray-600">— Aisha K., Lekki</div>
          </article>

          <article class="w-80 flex-shrink-0 bg-gray-300 rounded-lg mx-3 p-5 shadow-sm">
            <p class="text-sm mb-3">“Excellent listings. Found our apartment in days!”</p>
            <div class="text-xs font-medium text-gray-600">— Emeka O., Gwarinpa</div>
          </article>

          <article class="w-80 flex-shrink-0 bg-gray-300 rounded-lg mx-3 p-5 shadow-sm">
            <p class="text-sm mb-3">“Responsive team and great communication.”</p>
            <div class="text-xs font-medium text-gray-600">— Chidinma N., Yaba</div>
          </article>

          <article class="w-80 flex-shrink-0 bg-gray-300 rounded-lg mx-3 p-5 shadow-sm">
            <p class="text-sm mb-3">“Marketing tools are top-notch and easy to use.”</p>
            <div class="text-xs font-medium text-gray-600">— Musa A., Asokoro</div>
          </article>

        </div>
      </div>
    </div>

  </section>

</body>
</html>
