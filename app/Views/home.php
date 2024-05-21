<h1 class="text-6xl w-full text-center text-indigo-600 font-bold">M-Blog</h1>

<h2 class="font-semibold text-2xl">Posts</h2>

<div class="w-full flex flex-col gap-4">
    <?php if (isset($posts) && $posts !== []): ?>
        <?php foreach ($posts as $post): ?>
            <div>
                <h3 class="text-lg text-gray-800 font-semibold"><?= esc($post['title']) ?></h3>
                <p class="text-lg text-gray-700"><?= esc($post['description']) ?></p>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <p class="p-2 rounded-xl w-full text-center text-gray-700 text-lg">
            No posts found
        </p>
    <?php endif ?>
</div>