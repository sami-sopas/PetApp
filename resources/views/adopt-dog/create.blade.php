<x-app-layout>
    <header data-w-id="bea9b7ed-f748-980a-924e-d39fafb4bf59" 
    class="homepage-header h-44">
        <div class="container-1440 full-width">
            <div class="heading-container text-4xl sm:text-5xl md:text-4xl lg:text-6xl xl:text-6xl">
                <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c3113f" class="heading-row-1">
                    <h1 class="headline tilt-left"><span class="spark-left">Creando</span> publicacion </h1>
                </div>
                <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c31144" class="heading-row-2">
                    <h1 class="headline tilt-right">para dar en adopcion a doggo.</h1>
                </div>
            </div>
    </header>

    <div class="container mx-auto mt-10">
        <form class="w-full mx-auto p-4 bg-white rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold mb-4">Perro en adopción</h2>
      
          <!-- Campo Name -->
          <div class="mb-4">
            <label for="name" class="text-gray-600">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Enter your name"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
            />
          </div>
      
          <!-- Campos Color y Size (en la misma fila) -->
          <div class="grid grid-cols-2 gap-4">
            <!-- Campo Color (Select) -->
            <div class="mb-4">
              <label for="color" class="text-gray-600">Color</label>
              <select
                id="color"
                name="color"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
              >
                <option value="" disabled selected>Select a color</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <!-- Agrega más opciones de color aquí -->
              </select>
            </div>
      
            <!-- Campo Size (Select) -->
            <div class="mb-4">
              <label for="size" class="text-gray-600">Size</label>
              <select
                id="size"
                name="size"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
              >
                <option value="" disabled selected>Select a size</option>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <!-- Agrega más opciones de tamaño aquí -->
              </select>
            </div>
          </div>
      
          <!-- Campos Sex y Age (en la misma fila) -->
          <div class="grid grid-cols-2 gap-4">
            <!-- Campo Sex (Select) -->
            <div class="mb-4">
              <label for="sex" class="text-gray-600">Sex</label>
              <select
                id="sex"
                name="sex"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
              >
                <option value="" disabled selected>Select a sex</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <!-- Agrega más opciones de sexo aquí -->
              </select>
            </div>
      
            <!-- Campo Age (Select) -->
            <div class="mb-4">
              <label for="age" class="text-gray-600">Age</label>
              <select
                id="age"
                name="age"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
              >
                <option value="" disabled selected>Select an age</option>
                <option value="puppy">Puppy</option>
                <option value="adult">Adult</option>
                <option value="senior">Senior</option>
                <!-- Agrega más opciones de edad aquí -->
              </select>
            </div>
          </div>
      
          <!-- Campo Description -->
          <div class="mb-4">
            <label for="description" class="text-gray-600">Description</label>
            <textarea
              id="description"
              name="description"
              rows="4"
              placeholder="Enter a description"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
            ></textarea>
          </div>
      
          <!-- Campo Subir Imagen -->
          <div class="mb-4">
            <label for="image" class="text-gray-600">Upload Image</label>
            <input
              type="file"
              id="image"
              name="image"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
            />
          </div>
      
          <!-- Botón de Enviar -->
          <div class="text-center">
            <button
              type="submit"
              class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
            >
              Enviar
            </button>
          </div>
        </form
      
      
</x-app-layout>