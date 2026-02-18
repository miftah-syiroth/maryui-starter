<x-layouts::app :title="$title ?? null">
    <div class="flex flex-col items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-sm">
            {{ $slot }}
        </div>
    </div>
</x-layouts::app>
