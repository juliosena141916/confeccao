<x-app-layout>

    <x-slot name='header'>
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">Nossa Confeccao</h2>
    </x-slot>

    <a href="{{ route('clientes.create') }}" 
   class="inline-block px-4 py-2 mb-4 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition-colors">
    + Novo Cliente
</a>

    <div class='py-12'>
        <div class='max-w-7x1 mx-auto sm:px-6 lg:px-8'>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 border-1-4 border-green-500 text-green-700 shadow-sm rounded-r">
                    {{ session('success') }}
                </div>
            @endif    

            <div class='bg=white overflow-hidden shadow-sm sm:rounded-lg p-6'>
                <div class='grid grid-cols-1 md:grid-cols-3 gap-4'>
                    @foreach ($clientes as $cliente)
                        <div class='border p-4 rounded shadow-sm'>
                            <h3 class='font-bold text-lg'>{{ $cliente->id }}</h3>
                            <p class='text-sm text-gray-600'>{{ $cliente->nome }}</p>
                            <p class='text-sm text-gray-600'>CPF: {{ $cliente->cpf }}</p>
                            <p class="mt-2 text-blue-600 font-semibold"><span class="">Telefone:</span> {{ $cliente->telefone }}</p>
                            <p class='text-sm text-gray-600'>Reserva: {{ $cliente->reserva }}</p>
                            
                            <div class="flex mt-4 space-x-2"> 
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="text-blue-600 hover:text-blue-900 text-sm font-bold">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-bold ml-2">Excluir</button>
                                </form>
                        </div>
                    </div>
                    @endforeach    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>