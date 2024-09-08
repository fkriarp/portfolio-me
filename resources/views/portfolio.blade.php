<x-layout>
  <!-- Set title dynamically -->
  <x-slot:title>{{ $title }}</x-slot:title>

  <section>
    <div class="portfolio">
      <!-- Portfolio Section Title -->
      <div class="hero-title">Portfolio</div>

      <div class="portfolio-content">
        <h2 class="section-header">Projects</h2>

        <!-- Project Gallery -->
        <div class="gallery">
          @foreach ($posts as $post)
            <div class="card">
              <!-- Card Image -->
              <div class="card-img-top" 
                   style="background-image: url('{{ asset('assets/images/' . $post->img) }}');"
                   aria-label="Project image: {{ $post->title }}"></div>

              <!-- Card Body -->
              <div class="card-body">
                <!-- Project Title -->
                <h5 class="card-title">{{ $post->title }}</h5>

                <!-- Separator -->
                <div class="line"></div>

                <!-- Project Description -->
                <p class="card-text">{{ $post->description }}</p>

                <!-- Project Creation Date -->
                <div class="created">{{ $post->created_at->diffForHumans() }}</div>

                <!-- Visit Website Button -->
                <div class="visit-website">
                  <a href="{{ $post->link }}" 
                     class="btn btn-primary" 
                     target="_blank" 
                     rel="noopener noreferrer">Kunjungi Website</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
</x-layout>
