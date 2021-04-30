<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Router') }}
    </h2>
  </x-slot>

  <x-auth-card>
    <x-slot name="logo">
      <a href="/dashboard">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
      </a>
    </x-slot>
    <form method="POST" action="">
      @csrf
      <input type="hidden" name="estado" value="en_ruta">
      <input type="text" name="cliente" id="">
      
      @foreach($client  as $key)
            <li>{{$key}}</li>
      @endforeach

      <x-button class="ml-4">
        {{ __('Iniciar ruta') }}
    </x-button>

    </form>
  </x-auth-card>
</x-app-layout>