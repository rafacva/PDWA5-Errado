<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Condição Metereológica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf

                        <!-- <div class="mt-4">
                            <x-input-label for="cidade" :value="__('Cidade')" />
                            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required />
                            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
                        </div> -->
                        <div class="mt-4">
                            <x-input-label for="precipitacao" :value="__('Precipitação (mm)')" />
                            <x-text-input id="precipitacao" class="block mt-1 w-full" type="number" name="precipitacao" :value="old('precipitacao')" required step="0.01" />
                            <x-input-error :messages="$errors->get('precipitacao')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="tempMin" :value="__('Temperatura Mínima (ºC)')" />
                            <x-text-input id="tempMin" class="block mt-1 w-full" type="number" name="tempMin" :value="old('tempMin')" required step="0.01" />
                            <x-input-error :messages="$errors->get('tempMin')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="tempMax" :value="__('Temperatura Máxima (ºC)')" />
                            <x-text-input id="tempMax" class="block mt-1 w-full" type="number" name="tempMax" :value="old('tempMax')" required step="0.01" />
                            <x-input-error :messages="$errors->get('tempMax')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="umidMin" :value="__('Umidade Mínima (%)')" />
                            <x-text-input id="umidMin" class="block mt-1 w-full" type="number" name="umidMin" :value="old('umidMin')" required step="0.01" />
                            <x-input-error :messages="$errors->get('umidMin')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="umidMax" :value="__('Umidade Máxima (%)')" />
                            <x-text-input id="umidMax" class="block mt-1 w-full" type="number" name="umidMax" :value="old('umidMax')" required step="0.01" />
                            <x-input-error :messages="$errors->get('umidMax')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Confirmar') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
