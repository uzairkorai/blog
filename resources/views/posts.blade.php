<x-layout>
   @foreach ($posts as $post)
        <article>
            <h1>
            <a href="/posts/<?= $post->slug; ?>">
                <?= $post->title; ?>
                </a>
                test
            </h1>

            <div>
                <?php $post->body; ?>
            </div>

        </article>
        @endforeach
</x-layout>