<x-app-layout>
    <div class="container mx-auto">
        <a href="{{ route('dashboard') }}" class= "back-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Terug naar het Dashboard</a>
        
        <div class="mt-10 flex flex-col text-xl text-gray-200">
            <div class="mb-4">
                <span class="font-bold">Naam leverancier:</span> {{ $leverancier->Naam }}
            </div>
            <div class="mb-4">
                <span class="font-bold">Contact persoon leverancier:</span> {{ $leverancier->ContactPersoon }}
            </div>
            <div class="mb-4">
                <span class="font-bold">Leverancier nummer:</span> {{ $leverancier->LeverancierNummer }}
            </div>
            <div class="mb-4">
                <span class="font-bold">Mobiel:</span> {{ $leverancier->Mobiel }}
            </div>
        </div>

        @if ($products->isEmpty())
            <div class="text-gray-200 text-xl">
                Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: 30-04-2023
            </div> 
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam Product</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Datum laatste levering</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aantal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Eerstvolgende Levering</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $product->Naam }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $product->DatumLevering }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $product->Aantal }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $product->DatumEerstVolgendeLevering }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
