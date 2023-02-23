<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 rounded-xl">
            <x-panel>
                <h1 class="text-center font-bold text-xl uppercase">Login</h1>

                <form method="POST" action="/sessions" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username" />
                    <x-form.input name="password" type="password" autocomplete="new-password" />

                    <x-submit-button>Login</x-submit-button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
