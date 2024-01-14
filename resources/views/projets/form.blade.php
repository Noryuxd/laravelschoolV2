<x-app-layout>
    <div class="max-w-md mx-auto mt-12 bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Ajouter un Projet</h2>

        <form action="{{ route('projets.store') }}" method="POST" class="space-y-4">
            @csrf

            <div class="mb-4">
                <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom du Projet</label>
                <input type="text" name="nom" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description du
                    Projet</label>
                <input type="text" name="description" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="budget" class="block text-gray-700 text-sm font-bold mb-2">Budget</label>
                <input type="number" name="budget" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="nombre_taches" class="block text-gray-700 text-sm font-bold mb-2">Nombre total de
                    Tâches</label>
                <input type="number" name="nombre_taches" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="employes[]" class="block text-gray-700 text-sm font-bold mb-2">Employés attribués</label>
                <select name="employes[]" multiple
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
                    @foreach ($employes as $employe)
                        <option value="{{ $employe->id }}">{{ $employe->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring focus:border-blue-500">
                    Ajouter Projet
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
