<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('main.newProduct') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="flex flex-row sm:justify-center items-center sm:pt-0">
            <div class="w-full sm:max-w-md mx-6 mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('product.store') }}">
                @csrf
                    <div>
                        <x-label for="ref" :value="__('Reference')" />

                        <x-input id="ref" class="block mt-1 w-full" type="text" name="ref" :value="old('ref')" required autofocus />
                    </div>
                    <!-- Name -->
                    <div class="mt-4">
                        <x-label for="designation" :value="__('Désignation')" />

                        <x-input id="designation" class="block mt-1 w-full" type="text" name="designation" :value="old('designation')" required autofocus />
                    </div>
                    <!-- packaging -->
                    <div class="mt-4">
                        <x-label for="packagingId" :value="__('main.packaging')" />
                        <select id="packagingId" name="packagingId" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                            @foreach($packagings as $packaging)
                            <option value="{{$packaging->id}}">{{$packaging->designation}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                        <x-label for="prix_achat_ref" :value="__('main.prix_achat')" />

                        <x-input id="prix_achat_ref" class="block mt-1 w-full" type="text" name="prix_achat_ref" :value="old('prix_achat_ref')" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-label for="prix_vente_ref" :value="__('main.prix_vente')" />

                        <x-input id="prix_vente_ref" class="block mt-1 w-full" type="text" name="prix_vente_ref" :value="old('prix_vente_ref')" required autofocus />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('main.newProduct') }}
                        </x-button>
                    </div>
                </form>
            </div>
            <div class="w-full sm:max-w-md mx-6 mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <p>
                    *Pour un produit dont les emballages n'ont aucune valeur choisir 'CVIDE' au niveau des 'Emballages'
                </p>
            </div>
            </div>
    </div>
</x-app-layout>
