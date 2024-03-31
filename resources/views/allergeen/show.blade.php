<x-app-layout>
    <div class="container mx-auto">
        <a href="{{ route('dashboard') }}" class="back-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Terug naar het Dashboard</a>
        <h1 class="text-2xl font-bold mt-4 mb-2 text-gray-200">Allergeen info</h1>
        
        @if ($products->isEmpty())
            <div class="text-gray-200 text-xl">
            In dit product zitten geen stoffen die een allergische reactie kunnen veroorzaken
            </div>
        @else
            <div class="mb-4 text-gray-200 text-xl">
                <span class="font-bold">Naam:</span> {{ $products[0]->Naam }}
            </div>
            <div class="mb-4 text-gray-200 text-xl">
                <span class="font-bold">Barcode:</span> {{ $products[0]->Barcode }}
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-100 divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Productnaam</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Allergeen</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Omschrijving</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->Naam }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->allergeen_naam }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->allergeen_omschrijving }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
