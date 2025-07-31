<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->    
    @vite(['resources/themes/'.config('view.theme').'/css/client-area/app.css', 'resources/themes/'.config('view.theme').'/js/client-area/app.js'])  

</head>

<body>
    <div class="min-h-screen">
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>        
    </div>
</body>
<script>
    const html = document.documentElement
    const btn = document.getElementById('toggleTheme')

    // Guardar tema preferido
    const savedTheme = localStorage.getItem('theme')
    if (savedTheme === 'dark') html.classList.add('dark')
    if (savedTheme === 'light') html.classList.remove('dark')

    btn.addEventListener('click', () => {
        const isDark = html.classList.toggle('dark')
        localStorage.setItem('theme', isDark ? 'dark' : 'light')
    })

    // Cargar categorías desde los datos
        const loadCategories = (data) => {
            const categorySelect = document.getElementById('select-category');
            categorySelect.innerHTML = '<option class="dark:text-secondary/50" value="" selected>Selecciona un Servicio</option>';
            
            data.categories.forEach(category => {
                const option = new Option(category.name, category.id);
                categorySelect.add(option);
            });
        };

        // Cargar servicios según categoría seleccionada
        const loadServices = (categoryId, data) => {
            const serviceSelect = document.getElementById('select-servicios');
            serviceSelect.innerHTML = '<option class="dark:text-secondary/50" value="" selected>Elige un Plan</option>';
            serviceSelect.disabled = !categoryId;
            
            if (!categoryId) return;

            const selectedCategory = data.categories.find(cat => cat.id === categoryId);
            if (selectedCategory) {
                selectedCategory.services.forEach(service => {
                    serviceSelect.add(new Option(`${service.name} - from ${service.price}`, service.id));
                });
            }
        };

        // Inicialización
        document.addEventListener('DOMContentLoaded', () => {
            fetch('http://clientes.focused.cl.local/list-services.json')
                .then(response => {
                    if (!response.ok) throw new Error('Error al cargar los datos');
                    return response.json();
                })
                .then(data => {
                    loadCategories(data);
                    console.log(data);
                    document.getElementById('select-category').addEventListener('change', (e) => {
                        loadServices(e.target.value, data);
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('select-category').innerHTML = 
                        '<option value="" selected>Error al cargar categorías</option>';
                });
        });

</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</html>