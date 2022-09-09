<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

<input type="radio" 
        name="animal1" 
        value="dog"
        class="animal"
        onclick="chkOnlyOne(this)">강아지
        <br/>
<input type="radio" 
        name="animal2" 
        value="cat"
        class="animal"
        onclick="chkOnlyOne(this)">고양이
        <br/>
<input type="radio" 
        name="animal3" 
        value="rabbit"
        class="animal"
        onclick="chkOnlyOne(this)">토끼

<script>
    function chkOnlyOne(chk) {
        let radio
        = document.getElementsByClassName('animal');
        //$('input:radio[name=animal]).is(':checked');

        for(let i=0; i<radio.length; i++) {
            if(radio[i] != chk) {
                if(radio[i].checked){
                    alert('중복선택불가');
                    radio[i].checked = false;
                    chk.checked = true;
                    break;
                }
            }
        }

    }   
</script>