<x-layout>
  <x-panel-title>Login</x-panel-title>

  <x-form.form action="/login" method="POST">
    <x-form.input name="email" label="Email" type="email" />
    <x-form.input name="password" label="Password" type="password" />

    <x-form.button type="submit">Login</x-form.button>
  </x-form.form>
</x-layout>
