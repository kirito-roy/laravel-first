<x-layout>
    <x-slot:heading>home</x-slot:heading>
 
    @foreach ($student as $sd)
        
    <div class="w-full mx-2 my-2 bg-slate-500 text-white p-4 rounded-2xl text-2xl space-x-4">
        Id:<span>{{ $sd->id }}</span>,
        Name:<span>{{ $sd->name }}</span>,
        Email:<span>{{ $sd->email }}</span>
        
    </div>

    
    @endforeach
</x-layout>