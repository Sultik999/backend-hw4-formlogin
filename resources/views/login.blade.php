<form action="/login" method="post">
    @csrf
    <div style="text-align: center; padding-right: 60px; padding-top: 30px;">
        <label style="padding-right: 22px"><b>Name</b></label>
        <input type="text" name="name">
    </div>
    <div style="text-align: center;">
        <label><b>Surname</b></label>
        <input type="text" name="surname" style="margin-top: 5px">
        <button type="submit">Create</button>
    </div>
</form>