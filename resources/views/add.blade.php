<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <style>
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <form action=" @if(isset($user)) /user/update @else /user/add @endif " method="post">
        @csrf
        @if(isset($user))
        <input style="display: none" type="hidden" name="id" value={{$user->id}}>
        @endif
        <input type="text" name="name" id="name" value="@if(isset($user)){{$user->name}}@endif">
        <input type="number" name="age" id="age" value="@if(isset($user)){{$user->age}}@endif">
        <select name="gender" id="gender">
            <option value="M" @if($user->gender === "M") selected @endif>Male</option>
            <option value="F" @if($user->gender === "F") selected @endif>Female</option>
        </select>
        <button type="submit">Save</button>
    </form>

</body>

</html>
