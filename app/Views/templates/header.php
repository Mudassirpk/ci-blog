<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
    <title><?= /** @var TYPE_NAME $title */
        $title ?></title>
</head>

<body class="w-full min-h-screen flex flex-col">

<header class="w-full p-6">
    <div class="w-full shadow-sm flex justify-between items-center shadow-indigo-200 rounded-xl p-4">
        <div class="flex gap-4 items-center">
            <a href="/">Home</a>
            <a href="/create">Create Post</a>
        </div>
        <?php if (session()->get('isLoggedIn')): ?>
            <div class="flex gap-2 items-center">
                <p class="text-indigo-900 bg-indigo-100 px-4 py-2 rounded-xl capitalize font-semibold"><?= session()->get('name') ?></p>
                <div class="w-auto p-2 rounded-xl shadow-gray-300 shadow-sm border-t border-t-indigo-600">
                    <a href="/logout" class="p-2 rounded-xl hover:bg-gray-200">Logout</a>
                </div>
            </div>
        <?php else: ?>
            <a href="/login"
               class="px-4 py-2 rounded-xl shadow-md hover:bg-indigo-500 shadow-indigo-200 bg-indigo-600 text-white">Login</a>
        <?php endif; ?>
    </div>
</header>
<main class="w-full px-6 py-4 flex-1">