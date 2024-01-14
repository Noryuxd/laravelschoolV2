<x-app-layout>
    <div class="container w-3/4 mx-auto mt-8">
        <table class="w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nom</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Section</th>
                    <th class="py-2 px-4 border-b">Nombre total de taches</th>
                    <th class="py-2 px-4 border-b">Projets</th>
                    <th class="py-2 px-4 border-b">Image</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($employees as $employee)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $employee->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->nom }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->phone }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->section }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->taches->count() }}</td>
                        <td class="py-2 px-4 border-b">
                            @forelse ($employee->projets as $projet)
                                {{ $projet->nom }},
                            @empty
                                Aucun projet attribué
                            @endforelse
                        </td>
                        <td class="py-2 px-4 border-b flex justify-center">
                            <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image"
                                class="w-16 h-16">
                        </td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex justify-center">
                                <form method="POST" action="{{ route('employees.destroy', $employee->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white py-1 px-2 rounded">Delete</button>
                                </form>
                                <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}"
                                    class="ml-2 text-blue-500">
                                    <button class="bg-blue-500 text-white py-1 px-2 rounded">Update</button>
                                </a>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <a href="/employees/create" class="text-blue-500">Ajouter un employé</a>
        </div>
        <div class="mt-4">
            {{ $employees->links() }}
        </div>
    </div>
</x-app-layout>
