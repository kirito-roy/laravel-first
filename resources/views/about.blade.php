<x-layout>
    <x-slot:heading>about</x-slot:heading>
    
    @foreach ($ab as $i)
    <P>{{$i['id']}}</P>
    @endforeach
    <p><h1>this is a about page</h1></p>
</x-layout>