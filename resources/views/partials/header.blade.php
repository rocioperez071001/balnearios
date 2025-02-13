<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-white text-lg font-bold">Balnearios</a>
        <ul class="flex space-x-4">
            <li><a href="{{ url('/locaciones') }}" class="text-white hover:underline">Locaciones</a></li>
            <li><a href="{{ url('/servicios') }}" class="text-white hover:underline">Servicios</a></li>
            <li><a href="{{ url('/contacto') }}" class="text-white hover:underline">Contacto</a></li>
        </ul>
    </div>
</nav>
