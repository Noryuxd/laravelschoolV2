<x-app-layout>

    <div class="max-w-md mt-12 mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Ajout d'employés</h2>
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                <input type="text" name="nom" id="nom" class="input-field w-full" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="input-field w-full" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                <input type="number" name="phone" id="phone" class="input-field w-full" required>
            </div>

            <div class="mb-4">
                <label for="section" class="block text-gray-700 text-sm font-bold mb-2">Section</label>
                <input type="text" name="section" id="section" class="input-field w-full" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                <input type="file" name="image" accept="image/*" id="image" class="w-full input-field">
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                    Ajouter
                </button>

            </div>
        </form>
    </div>
    </body>

    </html>

</x-app-layout>
