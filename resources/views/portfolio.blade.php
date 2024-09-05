<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<section>
    <div class="portfolio">
        <div class="hero-title">portfolio</div>
        <div class="portfolio-content">
            <h2 class="section-header">Projects</h2>
            <div class="gallery">
              @foreach ($posts as $post)
              <div class="card">
                <img src="assets/images/<?= $post['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">
                    <?= $post['title'] ?>
                  </h5>
                  <hr>
                  <p class="card-text"><?= $post['body'] ?></p>
                  <a href="<?= $post['link'] ?>" class="btn btn-primary" target="_blank">Kunjungi website</a>
                </div>
              </div>
              @endforeach
        </div>
    </div>
</section>
</x-layout>