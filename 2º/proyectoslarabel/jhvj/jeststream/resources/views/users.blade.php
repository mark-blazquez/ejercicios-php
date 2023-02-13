<?php
	use Livewire\Component;
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
	<div>
		<h1> nombre de los usuarios</h1>
		@foreach($users as $user)
 			<p>{{$user->name}}</p>	
		@endforeach
		<livewire:users-table></livewire:users-table>
	</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>