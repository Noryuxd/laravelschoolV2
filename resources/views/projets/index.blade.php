<x-app-layout>
    <div class="container w-3/4 mx-auto mt-8">
        <table class="w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nom du Projet</th>
                    <th class="py-2 px-4 border-b">Budget</th>
                    <th class="py-2 px-4 border-b">Nombre de Tâches</th>
                    <th class="py-2 px-4 border-b">Employés attribués</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($projets as $projet)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $projet->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $projet->nom }}</td>
                        <td class="py-2 px-4 border-b">{{ $projet->budget }}</td>
                        <td class="py-2 px-4 border-b">{{ $projet->nombre_taches }}</td>
                        <td class="py-2 px-4 border-b">
                            @foreach ($projet->employes as $employe)
                                {{ $employe->nom }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <a href="{{ route('projets.create') }}" class="text-blue-500">Ajouter un projet</a>
        </div>
        <div class="mt-4">
            {{ $projets->links() }}
        </div>
    </div>
</x-app-layout>
