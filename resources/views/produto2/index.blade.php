<x-app-layout>

    <x-slot name='header'>
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">Nossa Confeccao</h2>
    </x-slot>

    <div class='py-12'>
        <div class='max-w-7x1 mx-auto sm:px-6 lg:px-8'>
            <div class='bg=white overflow-hidden shadow-sm sm:rounded-lg p-6'>
                <div class='grid grid-cols-1 md:grid-cols-3 gap-4'>
                    @foreach ($produto2 as $produto2)
                        <div class='border p-4 rounded shadow-sm'>
                            <h3 class='font-bold text-lg'>Nome: {{ $produto2->nomeProduto }}</h3>
                            <p class='mt-2 text-blue-600 font-bold'>R$ {{ number_format ($produto2->precoProduto, 2, ',', '.') }}</p>
                            <p class='text-sm text-gray-600'>Quantidade: {{ $produto2->quantidadeProduto }}</p>
                        </div>
                    @endforeach    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>