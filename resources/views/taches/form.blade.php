<x-app-layout>
    <div class="max-w-md mx-auto mt-12 bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Ajouter une Tâche</h2>

        <form action="{{ route('taches.store') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Nom de la Tâche -->
            <div class="mb-4">
                <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom de la Tâche</label>
                <input type="text" name="nom" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <!-- Coût de la Tâche (calculé en fonction du budget du projet) -->
            <div class="mb-4">
                <label for="cout" class="block text-gray-700 text-sm font-bold mb-2">Coût de la Tâche</label>
                <input type="number" name="cout" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <!-- État de la Tâche -->
            <div class="mb-4">
                <label for="etat" class="block text-gray-700 text-sm font-bold mb-2">État de la Tâche</label>
                <select name="etat" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
                    <option value="en cours">En cours</option>
                    <option value="finie">Finie</option>
                </select>
            </div>

            <!-- Projet lié à la Tâche -->
            <div class="mb-4">
                <label for="projet_id" class="block text-gray-700 text-sm font-bold mb-2">Projet lié</label>
                <select name="projet_id" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
                    @foreach ($projets as $projet)
                        <option value="{{ $projet->id }}">{{ $projet->nom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Employés attribués à la Tâche -->
            <div class="mb-4">
                <label for="employes" class="block text-gray-700 text-sm font-bold mb-2">Employés attribués</label>
                <select name="employes[]" multiple
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
                    @foreach ($employes as $employe)
                        <option value="{{ $employe->id }}">{{ $employe->nom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Bouton Ajouter Tâche -->
            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring focus:border-blue-500">
                    Ajouter Tâche
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
