<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <form>
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="nombre">
                        @error('nombre') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                     <div class="mb-4">
                        <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Apellidos:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Last Name" wire:model="apellidos">
                        @error('apellidos') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Fecha Nacimiento:</label>
                        <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Last Name" wire:model="f_nacimiento">
                        @error('f_nacimiento') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Adress" wire:model="direccion">
                        @error('direccion') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Código Postal:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Postal Code" wire:model="cod_postal">
                        @error('cod_postal') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Phone" wire:model="telefono">
                        @error('telefono') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Email" wire:model="email">
                        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">DNI:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Id Card" wire:model="dni">
                        @error('dni') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Nº Seguridad Social:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Social Security Number" wire:model="num_seg_social">
                        @error('num_seg_social') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Nº Cuenta:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Account Number" wire:model="num_cuenta">
                        @error('num_cuenta') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Banco:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Bank" wire:model="banco">
                        @error('banco') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Fecha alta:</label>
                        <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Entry Date" wire:model="fecha_alta">
                        @error('fecha_alta') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Fecha baja:</label>
                        <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter Leaving Date" wire:model="fecha_baja">
                        @error('fecha_baja') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                    <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Save
                    </button>
                </span>
                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                    <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Cancel
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
</div>