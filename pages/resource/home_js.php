<script>
    $(document).ready(function() {
        type_1()
    })
    var i1 = 0;
    var i2 = 0;

    var txt1 = 'Focus on building your life,';
    var txt2 = 'Let us handle your finances';

    var speed = 30;

    function type_1() {
        if (i1 < txt1.length) {
            document.getElementById("tagline1").innerHTML += txt1.charAt(i1);
            i1++;
            setTimeout(type_1, speed);
        } else {
            type_2()
        }
    }

    function type_2() {
        if (i2 < txt2.length) {
            document.getElementById("tagline2").innerHTML += txt2.charAt(i2);
            i2++;
            setTimeout(type_2, speed);
        }
    }
</script>