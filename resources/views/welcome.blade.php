    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Primary Button with Tailwind</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-50 p-8 font-sans text-gray-900">
    <main class="mx-auto max-w-2xl space-y-6">
        <h1 class="text-2xl font-semibold">Bootstrap Primary Button with Tailwind</h1>
        <p class="text-gray-600">These buttons recreate Bootstrap's primary button using Tailwind utility classes only.</p>

        <section class="space-y-4 rounded-lg border border-gray-200 bg-white p-6">
            <h2 class="text-lg font-medium">Button states</h2>

            <div class="flex flex-wrap items-center gap-4">
                <button
                    type="button"
                    class="inline-flex items-center rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base font-normal leading-6 text-white shadow-[inset_0_1px_0_rgba(255,255,255,0.15),0_1px_1px_rgba(0,0,0,0.075)] transition-colors duration-150 hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] active:shadow-[inset_0_3px_5px_rgba(0,0,0,0.125)] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#3184fd]/50 disabled:pointer-events-none disabled:opacity-[0.65]"
                >
                    Primary button
                </button>

                <button
                    type="button"
                    disabled
                    class="inline-flex items-center rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base font-normal leading-6 text-white shadow-[inset_0_1px_0_rgba(255,255,255,0.15),0_1px_1px_rgba(0,0,0,0.075)] transition-colors duration-150 hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] active:shadow-[inset_0_3px_5px_rgba(0,0,0,0.125)] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#3184fd]/50 disabled:pointer-events-none disabled:opacity-[0.65]"
                >
                    Disabled button
                </button>
            </div>

            <p class="text-sm text-gray-500">Try hovering, clicking, and using Tab to focus the enabled button.</p>
        </section>
    </main>
</body>
</html>

    
