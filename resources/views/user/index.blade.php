<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Utilisateurs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full leading-normal ">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            {{__('CLEF')}}
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            {{__('NOM')}}
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            {{__('TELEPHONE')}}
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            {{__('TABLE')}}
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            {{__('STATUS')}}
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            {{__('QRCODE')}}
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            {{__('ACTION')}}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($models as $model)
                    <tr>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {!! $model->key !!}
                            </p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {!! $model->name!!}
                            </p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {!! $model->telephone!!}
                            </p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {!! $model->numtable!!} | {{$model->numchaise}}
                            </p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {!! $model->status!!}
                            </p>
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            @if($model->status == 0)
                                @else
                            <div class="w-4 mr-2 transform hover:text-red-900 hover:scale-110">
                                <a href="{{url('/qrcodeView?option='.$model->qrcode)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                            </div>
                                @endif
                        </td>
                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-red-900 hover:scale-110">
                                    <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    </a>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-red-900 hover:scale-110">
                                    <a href="{{url('/user/'.$model->id.'/edit/')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                    </a>
                                </div>
                                @if($model->status == 0)
                                <div class="w-4 mr-2 transform hover:text-red-900 hover:scale-110">
                                    <a href="{{url('/user/'.$model->id.'/edit/?option=1')}}">
                                        <img src="{{asset('images/qr-code-svgrepo-com.svg')}}" alt="icon qrcode"/>
                                    </a>
                                </div>
                                @endif
                                <div class="w-4 mr-2 transform hover:text-red-900 hover:scale-110">
                                    <form action="{{route('user.destroy',[$model->id])}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-default" type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="px-5 py-3 grid justify-items-center">
                    <a href="{{ url('/user/create') }}" class="inline-flex space-x-4 transform hover:text-red-900 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                        </svg> <p class=""> {{__("Nouvel Utilisateur")}}</p>
                    </a>
                </div>

                <div
                    class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row  xs:justify-between">
                    {!! $links !!}
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
