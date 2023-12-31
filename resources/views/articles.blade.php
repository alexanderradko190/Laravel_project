<x-app-layout>
    <x-slot name="header">
        <div class="header-flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Статьи') }}
        </h2>
        @if (Auth::user()->isAdmin())
        <a href="{{route('articles.create')}}" class="add-link button">Добавить новую статью</a>
        @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="list_table">
                        <tr>
                            <th>Название статьи</th>
                            <th>Название категории</th>
                            <th>Статус активности</th>
                            <th>Фото</th>
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td>
                                    @if (Auth::user()->isAdmin())
                                    <a href="{{route('articles.edit', ['article' => $article->id])}}" class="update-link" title="Редактировать статью">{{$article->name}}</a>
                                        @else
                                        {{$article->name}}
                                    @endif
                                </td>
                                <td>{{$article->category?->name}}</td>
                                <td class="active_column">{{$article->is_active}}</td>
                                <td class="photo_column">
                                    @if (!empty($article->image))
                                    <img src="{{Storage::url($article->image)}}" alt="Фото">
                                        @else
                                        Нет фото
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{$articles->links('vendor.pagination.default')}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
