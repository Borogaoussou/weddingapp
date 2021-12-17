<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New User') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="flex flex-col sm:justify-center items-center sm:pt-0">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                @if($option == false)
                <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <!-- Pseudo -->
                    <div>
                        <x-label for="pseudo" :value="__('Pseudo')" />

                        <x-input id="pseudo" class="block mt-1 w-full" type="text" name="pseudo" :value="old('pseudo')" required autofocus />
                    </div>

                    <!-- telephone -->
                    <div>
                        <x-label for="telephone" :value="__('telephone')" />

                        <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus />
                    </div>

                    <!-- numtable -->
                    <div>
                        <x-label for="numtable" :value="__('numtable')" />

                        <x-input id="numtable" class="block mt-1 w-full" type="text" name="numtable" :value="old('numtable')" required autofocus />
                    </div>

                    <!-- numchaise -->
                    <div>
                        <x-label for="numchaise" :value="__('numchaise')" />

                        <x-input id="numchaise" class="block mt-1 w-full" type="text" name="numchaise" :value="old('numchaise')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                 type="password"
                                 name="password_confirmation" required />
                    </div>

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Telephone')" />

                        <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('main.new_user') }}
                        </x-button>
                    </div>
                </form>
                    @else
                    <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- File -->
                        <input type="hidden" name="status" value="1">
                        <div>
                            <x-label for="file" :value="__('File')" />

                            <input type="file"
                                   id="file" name="file"
                                   class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
                            rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('main.new_user') }}
                            </x-button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
