<div class="background show">
    <div class="window">
        <div class="popup">
            <p class="{{ $type }}">{{ $message }}</p>
            <button id="close">Close</button>
        </div>
    </div>
</div>

<script>
    function close(){
        document.querySelector('.background').className = "background";
    }

    document.querySelector('#close').addEventListener('click', close);
</script>
