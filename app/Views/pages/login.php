<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
    <title>>Login</title>
</head>

<body class="w-full min-h-screen flex flex-col">
<main class="w-full px-6 flex-1">
    <section class="w-full h-screen flex justify-center items-center">
        <form action="/login" class="w-[400px] p-4 rounded-xl shadow-gray-300 shadow-sm border-t border-t-indigo-600"
              method="post">
            <h1 class="text-2xl text-semibold font-semibold text-center text-indigo-600 mb-4">Login</h1>
            <div class="flex flex-col gap-4">
                <label class="flex flex-col space-y-2">
                    Email
                    <input type="text" placeholder="Email" name="email"
                           class="border border-gray-300 p-2 rounded-xl mt-2">
                </label>
                <label class="flex flex-col space-y-2">
                    Password
                    <input type="password" placeholder="********" name="password"
                           class="border border-gray-300 p-2 rounded-xl mt-2">
                </label>
                <button type="submit" class="bg-indigo-600 px-4 py-2 rounded-xl hover:bg-indigo-500 text-white">Login
                </button>
                <?php if (session()->getFlashdata('error')): ?>
                    <div><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
            </div>
        </form>
    </section
</main>
</body>
</html>