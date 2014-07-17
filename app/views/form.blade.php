
<form action="{{ url('/display') }}" method="POST">

<label for='numberofparagraphs'>How many paragraphs do you need?</label> <br>
<input type='number' maxlength="2" name='numberofparagraphs' id='numberofparagraphs' > (Max: 10)
<input type='submit' value='Generate!'>

</form>

