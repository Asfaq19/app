@csrf 

<div class="form-group">
    <label for="name">Name: </label>
    <input type="text" name="name" value="{{ old('name') ?? $reader->name}}">
    {{ $errors->first('name') }}
</div>
<br>

