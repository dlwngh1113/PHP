<div class="background show">
    <div class="window">
        <div class="popup">
            <div style="text-align: right;">
                <button id="close">X</button>
            </div>
            <p class="{{ $type }}">{{ $message }}</p>
        </div>
    </div>
</div>

<script>
    function close(){
        document.querySelector('.background').className = "background";
    }
    document.querySelector('#close').addEventListener('click', close);
</script>
