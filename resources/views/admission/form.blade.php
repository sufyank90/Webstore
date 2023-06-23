<!-- resources/views/admission/form.blade.php -->
<form method="POST" action="{{ route('admission.submit') }}">
    @csrf
    <!-- Add your form fields here -->
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email">

    <button type="submit">Submit</button>
</form>
