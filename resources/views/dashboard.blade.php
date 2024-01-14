<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="flex flex-wrap mt-8">
            <div class="w-full md:w-1/3 px-3 mb-6">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="px-6 py-4">
                        <h2 class="text-2xl font-bold mb-2">Gestion d'employés</h2>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Corporis, dicta.</p>
                        <div class="mt-4 mb-4">
                            <a href="{{ url('/employees') }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Liste
                                d'employés</a>
                            <a href="{{ url('/employees/create') }}"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mt-2">Nouveau
                                employé</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="px-6 py-4">
                        <h2 class="text-2xl font-bold mb-2">Gestion de projets</h2>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Corporis, dicta.</p>
                        <div class=" mt-4 mb-4">
                            <a href="{{ url('/projets') }}"
                                class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Liste
                                de
                                projets</a>
                            <a href="{{ url('/projets/create') }}"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mt-2">Nouveau
                                projet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="px-6 py-4">
                        <h2 class="text-2xl font-bold mb-2">Gestion de taches</h2>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Corporis, dicta.</p>
                        <div class="mt-4 mb-4">
                            <a href="{{ url('/taches') }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Liste
                                des
                                taches</a>
                            <a href="{{ url('/taches/create') }}"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mt-2">Nouvelle
                                tache</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
