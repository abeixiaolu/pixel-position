<x-layout>
  <x-panel-title>Register</x-panel-title>

  <x-form.form action="/register" method="POST" enctype="multipart/form-data">
    <x-form.input name="name" label="Name" />
    <x-form.input name="email" label="Email" type="email" />
    <x-form.input name="password" label="Password" type="password" />
    <x-form.input name="password_confirmation" label="Password Confirmation" type="password" />
    <x-form.divide />
    <x-form.input name="employer" label="Employer Name" />
    <x-form.input name="logo" label="Employer Logo" type="file" />

    <x-form.button type="submit">Create Account</x-form.button>
  </x-form.form>
</x-layout>
