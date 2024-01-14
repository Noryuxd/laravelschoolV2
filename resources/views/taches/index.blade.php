<x-app-layout>
    <div class="container w-3/4 mx-auto mt-8">
        <table class="w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nom de la Tâche</th>
                    <th class="py-2 px-4 border-b">Coût</th>
                    <th class="py-2 px-4 border-b">État</th>
                    <th class="py-2 px-4 border-b">Projet</th>
                    <th class="py-2 px-4 border-b">Employés attribués</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($taches as $tache)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $tache->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $tache->nom }}</td>
                        <td class="py-2 px-4 border-b">{{ $tache->cout }}</td>
                        <td class="py-2 px-4 border-b">{{ $tache->etat }}</td>
                        <td class="py-2 px-4 border-b">{{ $tache->projet->nom }}</td>
                        <td class="py-2 px-4 border-b">
                            @foreach ($tache->employes as $employe)
                                {{ $employe->nom }},
                            @endforeach
                        </td>
                        <td class="py-2 px-4 border-b">
                            <form method="POST" action="{{ route('taches.destroy', $tache->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white py-1 px-2 rounded-full">Supprimer</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <a href="{{ route('taches.create') }}" class="text-blue-500">Ajouter une tâche</a>
        </div>
        <div class="mt-4">
            {{ $taches->links() }}
        </div>
    </div>
</x-app-layout>
