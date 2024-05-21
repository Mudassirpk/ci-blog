<h1 class="text-6xl w-full text-center text-indigo-600 font-bold">M-Blog</h1>

<h2 class="font-semibold text-2xl my-4 border-b border-b-gray-200 pb-2">Posts</h2>

<div class="w-full flex flex-col gap-4">
    <?php if (isset($posts) && $posts !== []): ?>
        <?php foreach ($posts as $post): ?>
            <div>
                <h3 class="capitalize text-2xl my-2 text-gray-800 font-semibold"><?= esc($post['title']) ?>
                    | <?= esc($post['created_at']) ?>
                </h3><span
                        class="text-xl"><?= esc($post['author']) ?></span>
                <p class="text-lg text-gray-700"><?= esc($post['description']) ?></p>
                <div class="border-b border-gray-200 mt-6 mx-auto"></div>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <p class="p-2 rounded-xl w-full text-center text-gray-700 text-lg">
            No posts found
        </p>
    <?php endif ?>
</div>