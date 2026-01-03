<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Административная панель') }}
        </h2>
    </x-slot>
    <!--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    -->
    <div class="flex">
        <aside class="w-1/4 bg-gray-900 min-h-screen ">
            <nav class="text-gray-200 text-sm">
                <div>

                    <!--<a href="{{ route('admin.posts.index') }}" class="block p-4 border-b border-gray-600">Посты</a>-->

                </div>
                <div>

                    <Link href="route('admin.categories.index')"class="block p-4 border-b border-gray-600">Категории</Link>
                </div>
                <div>
                    <Link href="route('admin.profiles.index')"class="block p-4 border-b border-gray-600">Профиля</Link>
                </div>
                <div>
                    <Link href="route('admin.roles.index')"class="block p-4 border-b border-gray-600">Роли</Link>
                </div>
                <div>
                    <Link href="route('admin.tags.index')"class="block p-4 border-b border-gray-600">Тэги</Link>
                </div>
            </nav>
        </aside>
        <article class="w-3/4 bg-gray-50 p-4">
            <slot />
        </article>
    </div>
</x-app-layout>
