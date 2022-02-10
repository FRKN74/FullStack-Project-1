</div>
<script>
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick =function(){
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }


    let list = document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered');

    }
    list.forEach((item)=>
    item.addEventListener('mouseover',activeLink));

</script>
@jquery
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
    $(function () { 
        $('.switch').change(function(){
            id = $(this)[0].getAttribute('slider-id');
            statu = $(this).prop('checked');
            $.get("{{ route('admin.switch') }}", {id:id , statu:statu}, function (data,status) {
            });
        })
    })
</script>
@toastr_js
@toastr_render
</body>

</html>