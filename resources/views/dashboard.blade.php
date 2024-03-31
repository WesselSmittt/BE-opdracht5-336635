<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overzicht magazijn jamin') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Barcode</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Verpakkings Eenheid</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aantal Aanwezig</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Allergeen Info</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Leverantie Info</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->Barcode }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->Naam }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->VerpakkingsEenheid }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->AantalAanwezig }}</td>
                    <td class="px-6 py-4 whitespace-nowrap"><a href="{{ route('allergeen.show', $product->Naam) }}" class="text-blue-500 hover:underline">❌</a></td>
                    <td class="px-6 py-4 whitespace-nowrap"><a href="{{ route('leverancier.show', $product->LeverancierNaam) }}" class="text-blue-500 hover:underline">❔</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
