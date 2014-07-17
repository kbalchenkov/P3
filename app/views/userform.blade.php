
<form action="{{ url('/displays') }}" method="POST">

<label for='numberofusers'>How many users do you need?</label> <br>
<input type='number' maxlength="2" name='numberofusers' id='numberofusers' > (Max: 10)
<input type='submit' value='Generate!'>

</form>
