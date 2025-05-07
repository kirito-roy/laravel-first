<x-layout>
    <x-slot:heading>create</x-slot:heading>
    <div class="w-full mx-2 bg-slate-500 text-white p-4 rounded-2xl text-2xl">create</div>
    {{-- @foreach ($student as $sd)
        <p>{{ $sd->name }}</p>
        <p>{{ $sd->email }}</p>
        
    
    @endforeach --}}
    <form action="/create" method="post">
        @csrf
        <div class="flex flex-col">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="border-2 border-black rounded-md">
        </div>
        <div class="flex flex-col">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="border-2 border-black rounded-md">
        </div>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Submit</button>
        <button type="reset"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Reset</button>
    </form>
</x-layout>