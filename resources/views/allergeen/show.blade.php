<x-app-layout>
    <div class="container mx-auto">
        <a href="{{ route('dashboard') }}" class="back-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Terug naar het Dashboard</a>
        <h1 class="text-2xl font-bold mt-4 mb-2">Allergeen info</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Productnaam</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Allergeen</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Omschrijving</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($product as $product)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->Naam }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->allergeen_naam }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->allergeen_omschrijving }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
