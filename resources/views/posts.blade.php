<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($posts as $post)
        <article class="max-w-screen-md py-8 border-b border-gray-300">
            <a href="/post/{{ $post['id'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500"><a href="#">{{ $post['author'] }}</a> | 1 Agustus 2024</div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 170) }}</p>
            <a href="/post/{{ $post['id'] }}" class="font-medium text-blue-600 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>
