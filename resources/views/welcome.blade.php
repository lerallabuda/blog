<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary Button</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex items-center justify-center">
    <button type="button"
        class="inline-flex items-center rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base font-normal leading-6 text-white transition-colors hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#0d6efd]/25 disabled:pointer-events-none disabled:opacity-[0.65]">
        Primary button
    </button>

    <div class="inline-flex mt-6">
        <button
            class="rounded-s-sm border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
            View
        </button>

        <button
            class="-ms-px border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
            Edit
        </button>

        <button
            class="-ms-px rounded-e-sm border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
            Delete
        </button>
    </div>

    <button type="button"
        class="inline-flex items-center rounded-md border border-[#0d6efd] bg-[#2c2379] px-3 py-1.5 text-base font-normal leading-6 text-white transition-colors hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#0d6efd]/25 disabled:pointer-events-none disabled:opacity-[0.65]">
        Click me!
    </button>  
</body>

</html>
