<x-applayout>

<div class="container mx-auto">
    <a href="{{ route('dashboard') }}" class="back-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Terug naar het Dashboard</a>
    <h1 class="text-2xl font-bold mt-4 mb-2">{{ $leverancier->Naam }}</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Productnaam</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Leveringsdatum</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hoeveelheid</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Datum van volgende levering</th>
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
</div>

   </x-applayout>