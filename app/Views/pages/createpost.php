<h1 class="text-xl text-indigo-600">
    Create Post
</h1>

<form class="flex flex-col gap-4 w-[400px] shadow-sm shadow-gray-300 p-4 rounded-xl border-t border-t-indigo-600 my-4"
    method="post" action="create">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit" class="w-full py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-500">Create
        post</button>
</form>

<div>
    <?php if (isset($newpost)): ?>
        <div>
            <p><?= esc($newpost['title']) ?></p>
            <p><?= esc($newpost['description']) ?></p>
        </div>
    <?php else: ?>
        <div></div>
    <?php endif ?>
</div>